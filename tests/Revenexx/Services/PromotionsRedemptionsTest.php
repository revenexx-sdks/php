<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;
use Revenexx\Enums\PromotionsRedemptionsReleaseReason;

final class PromotionsRedemptionsTest extends TestCase {
    private $client;
    private $promotionsRedemptions;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->promotionsRedemptions = new PromotionsRedemptions($this->client);
    }

    public function testMethodPromotionsRedemptionsCommit(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->promotionsRedemptions->promotionsRedemptionsCommit(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPromotionsRedemptionsSweep(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->promotionsRedemptions->promotionsRedemptionsSweep(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPromotionsRedemptionsList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->promotionsRedemptions->promotionsRedemptionsList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPromotionsRedemptionsGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->promotionsRedemptions->promotionsRedemptionsGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPromotionsRedemptionsRelease(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->promotionsRedemptions->promotionsRedemptionsRelease(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPromotionsRedemptionsReserve(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->promotionsRedemptions->promotionsRedemptionsReserve(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPromotionsRedemptionsReturns(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->promotionsRedemptions->promotionsRedemptionsReturns(
            ""
        );

        $this->assertSame($data, $response);
    }

}
