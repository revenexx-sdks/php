<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;
use Revenexx\Enums\InventoriesMovementsListType;
use Revenexx\Enums\InventoriesVocabulariesGetName;

final class InventoriesStockTest extends TestCase {
    private $client;
    private $inventoriesStock;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->inventoriesStock = new InventoriesStock($this->client);
    }

    public function testMethodInventoriesAdjust(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->inventoriesStock->inventoriesAdjust(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodInventoriesAvailability(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->inventoriesStock->inventoriesAvailability(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodInventoriesMovementsList(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->inventoriesStock->inventoriesMovementsList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodInventoriesMovementsGet(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->inventoriesStock->inventoriesMovementsGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodInventoriesReceive(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->inventoriesStock->inventoriesReceive(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodInventoriesReorderAlerts(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->inventoriesStock->inventoriesReorderAlerts(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodInventoriesReorderScan(): void {

        $data = array(
            "emitted" => array(),
            "enabled" => true,
            "scanned" => 2);

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->inventoriesStock->inventoriesReorderScan(
            array()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodInventoriesRestock(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->inventoriesStock->inventoriesRestock(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodInventoriesStockList(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->inventoriesStock->inventoriesStockList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodInventoriesStockCreate(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->inventoriesStock->inventoriesStockCreate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodInventoriesStockDelete(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->inventoriesStock->inventoriesStockDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodInventoriesStockGet(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->inventoriesStock->inventoriesStockGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodInventoriesStockUpdate(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->inventoriesStock->inventoriesStockUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodInventoriesStockAdjust(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->inventoriesStock->inventoriesStockAdjust(
            "",
            1.0
        );

        $this->assertSame($data, $response);
    }

    public function testMethodInventoriesVocabulariesList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->inventoriesStock->inventoriesVocabulariesList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodInventoriesVocabulariesGet(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->inventoriesStock->inventoriesVocabulariesGet(
            InventoriesVocabulariesGetName::LOCATIONTYPES()
        );

        $this->assertSame($data, $response);
    }

}
