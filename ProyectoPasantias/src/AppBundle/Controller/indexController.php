<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class indexController extends Controller
{
    /**
     * @Route("/index/login")
     */
    public function loginAction()
    {
        return $this->render('AppBundle:index:login.html.twig', array(
            // ...
        ));
    }

}
