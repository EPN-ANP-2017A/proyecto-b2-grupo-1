<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class pasanteControllerTest extends WebTestCase
{
    public function testRegistro()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/pasante/registro');
    }

}
