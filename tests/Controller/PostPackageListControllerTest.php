<?php

namespace Tests\App\Controller;

use App\Tests\Util\DatabaseTestCase;

class PostPackageListControllerTest extends DatabaseTestCase
{
    public function testPostPackageListIsSuccessful()
    {
        $client = $this->getClient();

        $client->request(
            'POST',
            '/post',
            ['pkgstatsver' => '2.3', 'arch' => 'x86_64', 'packages' => 'pkgstats', 'modules' => 'snd']
        );

        $this->assertTrue($client->getResponse()->isSuccessful());
        $this->assertContains('Thanks for your submission. :-)', $client->getResponse()->getContent());
    }
}
