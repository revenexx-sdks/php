<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;
use Revenexx\Enums\InventoriesReservationsListStatus;

final class InventoriesReservationsTest extends TestCase {
    private $client;
    private $inventoriesReservations;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->inventoriesReservations = new InventoriesReservations($this->client);
    }

    public function testMethodInventoriesCommit(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->inventoriesReservations->inventoriesCommit(
            "SO-2026-000123"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodInventoriesRelease(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->inventoriesReservations->inventoriesRelease(
            "SO-2026-000123"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodInventoriesReservationsList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->inventoriesReservations->inventoriesReservationsList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodInventoriesReservationsSweep(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->inventoriesReservations->inventoriesReservationsSweep(
            array()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodInventoriesReservationsGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->inventoriesReservations->inventoriesReservationsGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodInventoriesReserve(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->inventoriesReservations->inventoriesReserve(
            "SO-2026-000123"
        );

        $this->assertSame($data, $response);
    }

}
