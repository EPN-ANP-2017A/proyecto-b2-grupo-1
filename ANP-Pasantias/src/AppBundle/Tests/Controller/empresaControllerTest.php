<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class empresaControllerTest extends WebTestCase
{
    public function testRegisto()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/empresa/registro');
    }

}
