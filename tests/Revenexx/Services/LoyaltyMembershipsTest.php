<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;
use Revenexx\Enums\LoyaltyMembershipsCreateStatus;

final class LoyaltyMembershipsTest extends TestCase {
    private $client;
    private $loyaltyMemberships;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->loyaltyMemberships = new LoyaltyMemberships($this->client);
    }

    public function testMethodLoyaltyMembershipsList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->loyaltyMemberships->loyaltyMembershipsList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodLoyaltyMembershipsCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->loyaltyMemberships->loyaltyMembershipsCreate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodLoyaltyMembershipsLookup(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->loyaltyMemberships->loyaltyMembershipsLookup(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodLoyaltyMembershipsDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->loyaltyMemberships->loyaltyMembershipsDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodLoyaltyMembershipsGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->loyaltyMemberships->loyaltyMembershipsGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodLoyaltyMembershipsUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->loyaltyMemberships->loyaltyMembershipsUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodLoyaltyMembershipsAdjust(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->loyaltyMemberships->loyaltyMembershipsAdjust(
            "",
            1,
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodLoyaltyMembershipsProgress(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->loyaltyMemberships->loyaltyMembershipsProgress(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodLoyaltyMembershipsReferralCode(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->loyaltyMemberships->loyaltyMembershipsReferralCode(
            ""
        );

        $this->assertSame($data, $response);
    }

}
