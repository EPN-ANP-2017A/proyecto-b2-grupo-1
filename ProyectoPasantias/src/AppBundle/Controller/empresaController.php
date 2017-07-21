<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class empresaController extends Controller
{
    /**
     * @Route("/empresa/registro")
     */
    public function registroAction()
    {
        return $this->render('AppBundle:empresa:registro.html.twig', array(
            // ...
        ));
    }

}
