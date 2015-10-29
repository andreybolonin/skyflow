<?php

namespace Skywox\AppBundle\Controller;

use Application\Sonata\UserBundle\Entity\User;
use Craue\FormFlowBundle\Tests\IntegrationTestBundle\Entity\Vehicle;
use Skywox\AppBundle\Entity\DeliveryOrder;
use Skywox\AppBundle\Entity\Document;
use Skywox\AppBundle\Entity\Recipient;
use Skywox\AppBundle\Entity\Sender;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;

class OrderController extends Controller
{

    /**
     * @Route("/new_order", name="new_order")
     * @Template()
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function createOrderAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $deliveryOrder = new DeliveryOrder();

        $formData['sender'] = new Sender();
        $formData['recipient'] = new Recipient();
        $formData['shipment'] = $deliveryOrder;
        $formData['positions'] = $deliveryOrder;

        $flow = $this->get('skywox.form.flow.create_order'); // must match the flow's service id
        $flow->bind($formData);

        // form of the current step
        $form = $flow->createForm();

        if ($flow->isValid($form)) {
            $flow->saveCurrentStepData($form);

            if ($flow->nextStep()) {
                // form for the next step
                $form = $flow->createForm();

                // compliance check
                if ($flow->getCurrentStepLabel() === 'compliance') {
                    if ($this->get('skywox.compliance')->check($form->getData()) === false) {
                        print_r('Compliance error');
                        return false;
                    } else {
                        print_r('Compliance is ok');
                    }
                }

            } else {

                // flow finished
                $sender = $formData['sender'];
                $recipient = $formData['recipient'];
                $deliveryOrder = $formData['shipment'];

                $user = $em->getRepository('SkywoxSonataUserBundle:User')->find(1);

                $deliveryOrder->setSender($sender);
                $deliveryOrder->setRecipient($recipient);
                $deliveryOrder->setApplicant($recipient);
                $deliveryOrder->setUser($user);

                $em->persist($deliveryOrder);
                $em->persist($sender);
                $em->persist($recipient);

                $em->flush();

                $flow->reset(); // remove step data from the session

                return $this->redirect($this->generateUrl('account')); // redirect when done
            }
        }

        return $this->render('AppBundle:Order:vehicle.html.twig', array(
            'form' => $form->createView(),
            'flow' => $flow,
        ));
    }

    /**
     * @Route("/confirmOrder/{orderId}", name="confirmOrder")
     * @Template()
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     * @throws \Exception
     */
    public function confirmOrderAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $orderId = $request->get('orderId');
        $deliveryOrder = $em->getRepository('AppBundle:DeliveryOrder')->find($orderId);

        if (!$deliveryOrder) {
            throw new \Exception('Order with '.$orderId.' id does not exists');
        }

        $recipient = $deliveryOrder->getRecipient();

        $formData['post'] = $recipient;
        $formData['recipient'] = $recipient;
        $formData['shipment'] = $deliveryOrder;
        $formData['positions'] = $deliveryOrder;
        $formData['poa'] = new Document();

        $flow = $this->get('skywox.form.flow.confirm_order'); // must match the flow's service id
        $flow->bind($formData);

        // form of the current step
        $form = $flow->createForm();

        if ($flow->isValid($form)) {
            $flow->saveCurrentStepData($form);

            if ($flow->nextStep()) {
                // form for the next step
                $form = $flow->createForm();

                // compliance check
                if ($flow->getCurrentStepLabel() === 'compliance') {
                    if ($this->get('skywox.compliance')->check($form->getData()) === false) {
                        print_r('Compliance error');
                        return false;
                    } else {
                        print_r('Compliance is ok');
                    }
                }

            } else {

                $file = $formData['poa']->getType();
                $fileName = md5(uniqid()).'.'.$file->guessExtension();
                $file->move($formData['poa']->getUploadRootDir(), $fileName);
                $formData['poa']->setFilename($fileName);
                $formData['poa']->setType('poa');

                // flow finished
                $poa = $formData['poa'];
                $recipient = $formData['recipient'];
                $deliveryOrder = $formData['shipment'];

                $user = $em->getRepository('SkywoxSonataUserBundle:User')->find(1);

                $poa->setDeliveryOrder($deliveryOrder);
                $deliveryOrder->setRecipient($recipient);
                $deliveryOrder->setApplicant($recipient);
                $deliveryOrder->setUser($user);

                $em->persist($deliveryOrder);
                $em->persist($poa);
                $em->persist($recipient);

                $em->flush();

                $flow->reset(); // remove step data from the session

                return $this->redirect($this->generateUrl('account')); // redirect when done
            }
        }

        return $this->render('AppBundle:Order:confirm.html.twig', array(
            'form' => $form->createView(),
            'flow' => $flow,
        ));
    }

}
