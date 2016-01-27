<?php

namespace Test\Communication\Producer\Controller;

use Test\FunctionalTestCase;

class SmsControllerTest extends FunctionalTestCase
{
    public function testPostSmsWithValidRequest()
    {
        $client = $this->createClient();
        $client->request('POST', '/sms', [
            'phone' => '5511984744340',
            'message' => 'Sending sms...'
        ]);

        $response = $client->getResponse();

        $this->assertTrue($response->isOk());
    }
}
