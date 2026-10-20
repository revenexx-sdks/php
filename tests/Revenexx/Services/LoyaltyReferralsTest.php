<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;

final class LoyaltyReferralsTest extends TestCase {
    private $client;
    private $loyaltyReferrals;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->loyaltyReferrals = new LoyaltyReferrals($this->client);
    }

    public function testMethodLoyaltyReferralsCodesList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->loyaltyReferrals->loyaltyReferralsCodesList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodLoyaltyReferralsCodesGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->loyaltyReferrals->loyaltyReferralsCodesGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodLoyaltyReferralsCodesDeactivate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->loyaltyReferrals->loyaltyReferralsCodesDeactivate(
            "",
            array()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodLoyaltyReferralsList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->loyaltyReferrals->loyaltyReferralsList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodLoyaltyReferralsClaim(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->loyaltyReferrals->loyaltyReferralsClaim(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodLoyaltyReferralsGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->loyaltyReferrals->loyaltyReferralsGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodLoyaltyReferralsReject(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->loyaltyReferrals->loyaltyReferralsReject(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodLoyaltyReferralsReward(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->loyaltyReferrals->loyaltyReferralsReward(
            "",
            array()
        );

        $this->assertSame($data, $response);
    }

}
