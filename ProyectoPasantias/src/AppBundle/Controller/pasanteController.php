<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class pasanteController extends Controller
{
    /**
     * @Route("/pasante/registro")
     */
    public function registroAction()
    {
        return $this->render('AppBundle:pasante:registro.html.twig', array(
            // ...
        ));
    }

}
