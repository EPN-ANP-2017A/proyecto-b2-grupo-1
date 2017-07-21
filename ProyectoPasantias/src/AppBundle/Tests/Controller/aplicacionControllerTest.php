<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class aplicacionControllerTest extends WebTestCase
{
    public function testVisualizacionofertas()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/aplicacion/visualizacionofertas');
    }

}
