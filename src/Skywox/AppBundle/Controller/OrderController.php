<?php

namespace Skywox\AppBundle\Controller;

use Application\Sonata\UserBundle\Entity\User;
use Craue\FormFlowBundle\Tests\IntegrationTestBundle\Entity\Vehicle;
use Skywox\AppBundle\Entity\DeliveryOrder;
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
    public function createVehicleAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $deliveryOrder = new DeliveryOrder();

        $formData['sender'] = new Sender();
        $formData['recipient'] = new Recipient();
        $formData['shipment'] = $deliveryOrder;
        $formData['positions'] = $deliveryOrder;

        $flow = $this->get('skywox.form.flow.create_vehicle'); // must match the flow's service id
        $flow->bind($formData);

        // form of the current step
        $form = $flow->createForm();

        if ($flow->isValid($form)) {
            $flow->saveCurrentStepData($form);

            if ($flow->nextStep()) {
                // form for the next step
                $form = $flow->createForm();
            } else {

                // flow finished
                $sender = $formData['sender'];
                $recipient = $formData['recipient'];
//                $compliance = $formData['compliance'];
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

}
