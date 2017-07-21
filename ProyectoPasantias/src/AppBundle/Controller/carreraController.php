<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class carreraController extends Controller
{
    /**
     * @Route("/carrera/creacion")
     */
    public function creacionAction()
    {
        return $this->render('AppBundle:carrera:creacion.html.twig', array(
            // ...
        ));
    }

}
