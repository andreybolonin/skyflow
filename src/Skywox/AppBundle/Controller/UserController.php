<?php

namespace Skywox\AppBundle\Controller;

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
        return $this->render('SkywoxAppBundle:User:account.html.twig', array());
    }
}
