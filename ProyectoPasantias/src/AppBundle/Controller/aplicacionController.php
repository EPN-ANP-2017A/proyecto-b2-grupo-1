<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class aplicacionController extends Controller
{
    /**
     * @Route("/aplicacion/visualizacionofertas")
     */
    public function visualizacionofertasAction()
    {
        return $this->render('AppBundle:aplicacion:visualizacionofertas.html.twig', array(
            // ...
        ));
    }

}
