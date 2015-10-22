<?php

namespace Skywox\AppBundle\Controller;

use Skywox\AppBundle\Entity\DeliveryOrder;
use Skywox\AppBundle\Entity\Sender;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;

class OrderController extends Controller
{
    /**
     * @Route("/index")
     * @Template()
     */
    public function indexAction(Request $request)
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
            $em->persist($sender);
            $em->flush();
        }

        return $this->render(
            'AppBundle:Order:new.html.twig', array(
                'form' => $form->createView(),
        ));
    }

}
