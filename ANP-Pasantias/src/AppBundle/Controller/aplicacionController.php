<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class aplicacionController extends Controller
{
    /**
     * @Route("/aplicacion/aplicar")
     */
    public function aplicarAction()
    {
        return $this->render('AppBundle:aplicacion:aplicar.html.twig', array(
            // ...
        ));
    }

}
