<?php

namespace RevenexxAPIRevenexx\Services;

use RevenexxAPIRevenexx\Client;
use RevenexxAPIRevenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;
use RevenexxAPIRevenexx\Enums\LocationType;

final class InventoriesTest extends TestCase {
    private $client;
    private $inventories;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->inventories = new Inventories($this->client);
    }

    public function testMethodInventoriesAdjust(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->inventories->inventoriesAdjust(
            array(),
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodInventoriesAvailability(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->inventories->inventoriesAvailability(
            array()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodInventoriesCommit(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->inventories->inventoriesCommit(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodInventoriesLocationsList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->inventories->inventoriesLocationsList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodInventoriesLocationsCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->inventories->inventoriesLocationsCreate(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodInventoriesLocationsDefaults(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->inventories->inventoriesLocationsDefaults(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodInventoriesLocationsDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->inventories->inventoriesLocationsDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodInventoriesLocationsGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->inventories->inventoriesLocationsGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodInventoriesLocationsUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->inventories->inventoriesLocationsUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodInventoriesMovementsList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->inventories->inventoriesMovementsList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodInventoriesMovementsGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->inventories->inventoriesMovementsGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodInventoriesReceive(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->inventories->inventoriesReceive(
            array()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodInventoriesRelease(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->inventories->inventoriesRelease(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodInventoriesReservationsList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->inventories->inventoriesReservationsList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodInventoriesReservationsGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->inventories->inventoriesReservationsGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodInventoriesReserve(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->inventories->inventoriesReserve(
            array(),
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodInventoriesRestock(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->inventories->inventoriesRestock(
            array()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodInventoriesStockList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->inventories->inventoriesStockList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodInventoriesStockCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->inventories->inventoriesStockCreate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodInventoriesStockDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->inventories->inventoriesStockDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodInventoriesStockGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->inventories->inventoriesStockGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodInventoriesStockUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->inventories->inventoriesStockUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

}
