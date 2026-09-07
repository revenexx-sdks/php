<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;
use Revenexx\Enums\InventoriesLocationsListType;
use Revenexx\Enums\LocationType;

final class InventoriesLocationsTest extends TestCase {
    private $client;
    private $inventoriesLocations;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->inventoriesLocations = new InventoriesLocations($this->client);
    }

    public function testMethodInventoriesLocationsList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->inventoriesLocations->inventoriesLocationsList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodInventoriesLocationsCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->inventoriesLocations->inventoriesLocationsCreate(
            "main",
            "Main warehouse"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodInventoriesLocationsDefaults(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->inventoriesLocations->inventoriesLocationsDefaults(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodInventoriesLocationsDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->inventoriesLocations->inventoriesLocationsDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodInventoriesLocationsGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->inventoriesLocations->inventoriesLocationsGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodInventoriesLocationsUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->inventoriesLocations->inventoriesLocationsUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

}
