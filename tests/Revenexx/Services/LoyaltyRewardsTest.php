<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;
use Revenexx\Enums\Trashed;

final class LoyaltyRewardsTest extends TestCase {
    private $client;
    private $loyaltyRewards;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->loyaltyRewards = new LoyaltyRewards($this->client);
    }

    public function testMethodLoyaltyRewardsRedemptionsList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->loyaltyRewards->loyaltyRewardsRedemptionsList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodLoyaltyRewardsRedemptionsGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->loyaltyRewards->loyaltyRewardsRedemptionsGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodLoyaltyRewardsList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->loyaltyRewards->loyaltyRewardsList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodLoyaltyRewardsCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->loyaltyRewards->loyaltyRewardsCreate(
            "",
            ,
            1,
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodLoyaltyRewardsEmptyTrash(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->loyaltyRewards->loyaltyRewardsEmptyTrash(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodLoyaltyRewardsPurge(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->loyaltyRewards->loyaltyRewardsPurge(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodLoyaltyRewardsDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->loyaltyRewards->loyaltyRewardsDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodLoyaltyRewardsGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->loyaltyRewards->loyaltyRewardsGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodLoyaltyRewardsUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->loyaltyRewards->loyaltyRewardsUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodLoyaltyRewardsRedeem(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->loyaltyRewards->loyaltyRewardsRedeem(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodLoyaltyRewardsRestore(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->loyaltyRewards->loyaltyRewardsRestore(
            ""
        );

        $this->assertSame($data, $response);
    }

}
