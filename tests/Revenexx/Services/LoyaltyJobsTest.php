<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;

final class LoyaltyJobsTest extends TestCase {
    private $client;
    private $loyaltyJobs;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->loyaltyJobs = new LoyaltyJobs($this->client);
    }

    public function testMethodLoyaltyJobsRecalculate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->loyaltyJobs->loyaltyJobsRecalculate(
            array()
        );

        $this->assertSame($data, $response);
    }

}
