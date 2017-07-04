<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class usuarioControllerTest extends WebTestCase
{
    public function test()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/usuario/sesion');
    }

    public function testSesion()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/usuario/sesion');
    }

}
