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
     * @Route("/new_order_sender", name="new_order_sender")
     * @Template()
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function senderAction(Request $request)
    {
        $sender = new Sender();
        $em = $this->getDoctrine()->getManager();

        $form = $this->createFormBuilder($sender)
            ->add('formOfAddress', 'text')
            ->add('company', 'text')
            ->add('firstName', 'text')
            ->add('familyName', 'text')
            ->add('address', 'text')
            ->add('customReg', 'text')
            ->add('companyReg', 'text')
            ->add('buildingNumber', 'text')
            ->add('additionalInfo', 'text')
            ->add('postCode', 'text')
            ->add('city', 'text')
            ->add('country', 'text')
            ->add('email', 'text')
            ->add('telephone', 'text')
            ->add('fax', 'text')
            ->add('mobile', 'text')
            ->add('save', 'submit', array('label' => 'Save'))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isValid()) {

            $deliveryOrder = new DeliveryOrder();
            $deliveryOrder->setSender($sender);

            $em->persist($sender);
            $em->flush();

            return $this->redirectToRoute('new_order_recipient');
        }

        return $this->render(
            'AppBundle:Order:sender.html.twig', array(
                'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/new_order_recipient", name="new_order_recipient")
     * @Template()
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function recipientAction(Request $request)
    {
        $recipient = new Recipient();
        $em = $this->getDoctrine()->getManager();

        $form = $this->createFormBuilder($recipient)
            ->add('formOfAddress', 'text')
            ->add('company', 'text')
            ->add('firstName', 'text')
            ->add('familyName', 'text')
            ->add('address', 'text')
            ->add('customReg', 'text')
            ->add('companyReg', 'text')
            ->add('buildingNumber', 'text')
            ->add('additionalInfo', 'text')
            ->add('postCode', 'text')
            ->add('city', 'text')
            ->add('country', 'text')
            ->add('email', 'text')
            ->add('telephone', 'text')
            ->add('fax', 'text')
            ->add('mobile', 'text')
            ->add('save', 'submit', array('label' => 'Save'))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isValid()) {
            $em->persist($recipient);
            $em->flush();

            return $this->redirectToRoute('new_order_shipment');
        }

        return $this->render(
            'AppBundle:Order:recipient.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/new_order_compliance", name="new_order_compliance")
     * @Template()
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function complianceAction(Request $request)
    {
        return $this->render(
            'AppBundle:Order:compliance.html.twig', array(
//            'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/new_order_shipment", name="new_order_shipment")
     * @Template()
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function shipmentAction(Request $request)
    {
        $recipient = new DeliveryOrder();
        $em = $this->getDoctrine()->getManager();

        $form = $this->createFormBuilder($recipient)
            ->add('addresses', 'text')
            ->add('desc', 'text')
            ->add('weight', 'text')
            ->add('packing', 'text')
            ->add('qty', 'text')
            ->add('measurements', 'text')
            ->add('itemPrice', 'text')
            ->add('value', 'text')
            ->add('euTaricNo', 'text')
            ->add('euCode', 'text')
//            ->add('companyReg', 'text')
//            ->add('buildingNumber', 'text')
//            ->add('additionalInfo', 'text')
//            ->add('postCode', 'text')
//            ->add('city', 'text')
//            ->add('country', 'text')
//            ->add('email', 'text')
//            ->add('telephone', 'text')
//            ->add('fax', 'text')
//            ->add('mobile', 'text')
            ->add('save', 'submit', array('label' => 'Save'))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isValid()) {
            $em->persist($recipient);
            $em->flush();

            return $this->redirectToRoute('task_success');
        }

        return $this->render(
            'AppBundle:Order:shipment.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/new_order_positions", name="new_order_positions")
     * @Template()
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function positionsAction(Request $request)
    {
        $recipient = new DeliveryOrder();
        $em = $this->getDoctrine()->getManager();

        $form = $this->createFormBuilder($recipient)
            ->add('addresses', 'text')
            ->add('desc', 'text')
            ->add('weight', 'text')
            ->add('packing', 'text')
            ->add('qty', 'text')
            ->add('measurements', 'text')
            ->add('itemPrice', 'text')
            ->add('value', 'text')
            ->add('euTaricNo', 'text')
            ->add('euCode', 'text')
//            ->add('companyReg', 'text')
//            ->add('buildingNumber', 'text')
//            ->add('additionalInfo', 'text')
//            ->add('postCode', 'text')
//            ->add('city', 'text')
//            ->add('country', 'text')
//            ->add('email', 'text')
//            ->add('telephone', 'text')
//            ->add('fax', 'text')
//            ->add('mobile', 'text')
            ->add('save', 'submit', array('label' => 'Save'))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isValid()) {
            $em->persist($recipient);
            $em->flush();

            return $this->redirectToRoute('task_success');
        }

        return $this->render(
            'AppBundle:Order:positions.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/vehicle", name="vehicle")
     * @Template()
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function createVehicleAction(Request $request)
    {
//        $formData = new Vehicle(); // Your form data class. Has to be an object, won't work properly with an array.
        $em = $this->getDoctrine()->getManager();

        $formData['order'] = new DeliveryOrder();
        $formData['sender'] = new Sender();
        $formData['recipient'] = new Recipient();

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

//                var_dump($formData);

                // flow finished
                $sender = $formData['sender'];
                $recipient = $formData['recipient'];
//                $compliance = $formData['compliance'];
//                $shipment = $formData['shipment'];
//                $positions = $formData['positions'];

                $user = $em->getRepository('SkywoxSonataUserBundle:User')
                    ->find(1);

//                var_dump($user);exit;

                $order = new DeliveryOrder();
                $order->setSender($sender);
                $order->setRecipient($recipient);
                $order->setApplicant($recipient);
                $order->setUser($user);

                $order->setAddresses(uniqid());
                $order->setDescription(uniqid());
                $order->setEuCode(uniqid());
                $order->setEuTaricNo(uniqid());
                $order->setItemPrice(uniqid());
                $order->setWeight(uniqid());
                $order->setQty(uniqid());
                $order->setMeasurements(uniqid());
                $order->setValue(uniqid());
                $order->setPacking(uniqid());



                $em->persist($order);
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
