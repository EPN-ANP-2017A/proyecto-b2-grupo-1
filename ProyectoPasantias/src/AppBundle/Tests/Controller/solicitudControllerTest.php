<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class solicitudControllerTest extends WebTestCase
{
    public function testEnvio()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/solicitud/envio');
    }

}
