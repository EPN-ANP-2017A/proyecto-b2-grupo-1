<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class empresaController extends Controller
{
    /**
     * @Route("/empresa/registro")
     */
    public function registoAction()
    {
        return $this->render('AppBundle:empresa:registo.html.twig', array(
            // ...
        ));
    }

}
