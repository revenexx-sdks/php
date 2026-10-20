<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;
use Revenexx\Enums\Trashed;
use Revenexx\Enums\LoyaltyProgramsCreateKind;
use Revenexx\Enums\Holder;
use Revenexx\Enums\Period;

final class LoyaltyProgramsTest extends TestCase {
    private $client;
    private $loyaltyPrograms;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->loyaltyPrograms = new LoyaltyPrograms($this->client);
    }

    public function testMethodLoyaltyProgramsList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->loyaltyPrograms->loyaltyProgramsList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodLoyaltyProgramsCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->loyaltyPrograms->loyaltyProgramsCreate(
            "",
            LoyaltyProgramsCreateKind::POINTS(),
            
        );

        $this->assertSame($data, $response);
    }

    public function testMethodLoyaltyProgramsEmptyTrash(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->loyaltyPrograms->loyaltyProgramsEmptyTrash(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodLoyaltyProgramsPurge(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->loyaltyPrograms->loyaltyProgramsPurge(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodLoyaltyProgramsDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->loyaltyPrograms->loyaltyProgramsDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodLoyaltyProgramsGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->loyaltyPrograms->loyaltyProgramsGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodLoyaltyProgramsUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->loyaltyPrograms->loyaltyProgramsUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodLoyaltyProgramsFigures(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->loyaltyPrograms->loyaltyProgramsFigures(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodLoyaltyProgramsOpenPeriod(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->loyaltyPrograms->loyaltyProgramsOpenPeriod(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodLoyaltyProgramsRestore(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->loyaltyPrograms->loyaltyProgramsRestore(
            ""
        );

        $this->assertSame($data, $response);
    }

}
