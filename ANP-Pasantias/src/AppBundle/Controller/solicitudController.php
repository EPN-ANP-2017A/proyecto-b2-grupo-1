<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class solicitudController extends Controller
{
    /**
     * @Route("/solicitud/solicitar")
     */
    public function solicitarAction()
    {
        return $this->render('AppBundle:solicitud:solicitar.html.twig', array(
            // ...
        ));
    }

}
