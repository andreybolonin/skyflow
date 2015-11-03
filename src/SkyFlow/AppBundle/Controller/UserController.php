<?php

namespace SkyFlow\AppBundle\Controller;

use SkyFlow\AppBundle\Entity\Invoice;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class UserController extends Controller
{
    /**
     * @Route("/account", name="account")
     * @Template()
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function accountAction()
    {
        $em = $this->getDoctrine()->getManager();
        $inv = new Invoice();
        $user = $em->getRepository('SkyFlowAppBundle:Customer')->find(1);
        $inv->setCustomer($user);
        $inv->setTrackingNumber(uniqid());
        $em->persist($inv);
        $em->flush();

        return $this->render('SkyFlowAppBundle:User:account.html.twig', array());
    }
}
