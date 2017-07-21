<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class solicitudController extends Controller
{
    /**
     * @Route("/solicitud/envio")
     */
    public function envioAction()
    {
        return $this->render('AppBundle:solicitud:envio.html.twig', array(
            // ...
        ));
    }

}
