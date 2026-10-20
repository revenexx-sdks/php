<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;

final class AdsJobsTest extends TestCase {
    private $client;
    private $adsJobs;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->adsJobs = new AdsJobs($this->client);
    }

    public function testMethodAdsJobsRun(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->adsJobs->adsJobsRun(
            array()
        );

        $this->assertSame($data, $response);
    }

}
