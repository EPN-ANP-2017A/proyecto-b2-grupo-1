<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class aplicacionControllerTest extends WebTestCase
{
    public function testAplicar()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/aplicacion/aplicar');
    }

}
