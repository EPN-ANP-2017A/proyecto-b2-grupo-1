<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class usuarioController extends Controller
{
    /**
     * @Route("/usuario/sesion")
     */
    public function Action()
    {
        return $this->render('AppBundle:usuario:.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/usuario/sesion")
     */
    public function sesionAction()
    {
        return $this->render('AppBundle:usuario:sesion.html.twig', array(
            // ...
        ));
    }

}
