<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;
use Revenexx\Enums\Trashed;
use Revenexx\Enums\ThresholdKind;

final class LoyaltyTiersTest extends TestCase {
    private $client;
    private $loyaltyTiers;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->loyaltyTiers = new LoyaltyTiers($this->client);
    }

    public function testMethodLoyaltyTiersList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->loyaltyTiers->loyaltyTiersList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodLoyaltyTiersCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->loyaltyTiers->loyaltyTiersCreate(
            "",
            ,
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodLoyaltyTiersEmptyTrash(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->loyaltyTiers->loyaltyTiersEmptyTrash(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodLoyaltyTiersPurge(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->loyaltyTiers->loyaltyTiersPurge(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodLoyaltyTiersDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->loyaltyTiers->loyaltyTiersDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodLoyaltyTiersGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->loyaltyTiers->loyaltyTiersGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodLoyaltyTiersUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->loyaltyTiers->loyaltyTiersUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodLoyaltyTiersRestore(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->loyaltyTiers->loyaltyTiersRestore(
            ""
        );

        $this->assertSame($data, $response);
    }

}
