<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class carreraControllerTest extends WebTestCase
{
    public function testCreacion()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/carrera/creacion');
    }

}
