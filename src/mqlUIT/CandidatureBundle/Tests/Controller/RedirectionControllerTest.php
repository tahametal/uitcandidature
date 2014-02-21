<?php

namespace mqlUIT\CandidatureBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class RedirectionControllerTest extends WebTestCase
{
    public function testRedirect()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/redirect');
    }

}
