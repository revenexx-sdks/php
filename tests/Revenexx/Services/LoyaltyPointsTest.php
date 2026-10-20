<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;

final class LoyaltyPointsTest extends TestCase {
    private $client;
    private $loyaltyPoints;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->loyaltyPoints = new LoyaltyPoints($this->client);
    }

    public function testMethodLoyaltyPointsList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->loyaltyPoints->loyaltyPointsList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodLoyaltyPointsGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->loyaltyPoints->loyaltyPointsGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodLoyaltyPointsAward(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->loyaltyPoints->loyaltyPointsAward(
            1
        );

        $this->assertSame($data, $response);
    }

}
