<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;
use Revenexx\Enums\TurnoverSource;

final class LoyaltyBonusTest extends TestCase {
    private $client;
    private $loyaltyBonus;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->loyaltyBonus = new LoyaltyBonus($this->client);
    }

    public function testMethodLoyaltyBonusList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->loyaltyBonus->loyaltyBonusList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodLoyaltyBonusCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->loyaltyBonus->loyaltyBonusCreate(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodLoyaltyBonusGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->loyaltyBonus->loyaltyBonusGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodLoyaltyBonusUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->loyaltyBonus->loyaltyBonusUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodLoyaltyBonusApprove(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->loyaltyBonus->loyaltyBonusApprove(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodLoyaltyBonusCalculate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->loyaltyBonus->loyaltyBonusCalculate(
            "",
            array()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodLoyaltyBonusForfeit(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->loyaltyBonus->loyaltyBonusForfeit(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodLoyaltyBonusPay(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->loyaltyBonus->loyaltyBonusPay(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodLoyaltyBonusProgress(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->loyaltyBonus->loyaltyBonusProgress(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodLoyaltyBonusRebuild(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->loyaltyBonus->loyaltyBonusRebuild(
            "",
            array()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodLoyaltyBonusEntriesList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->loyaltyBonus->loyaltyBonusEntriesList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodLoyaltyBonusEntriesCorrect(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->loyaltyBonus->loyaltyBonusEntriesCorrect(
            "",
            1.0,
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodLoyaltyBonusEntriesGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->loyaltyBonus->loyaltyBonusEntriesGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodLoyaltyBonusImport(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->loyaltyBonus->loyaltyBonusImport(
            array()
        );

        $this->assertSame($data, $response);
    }

}
