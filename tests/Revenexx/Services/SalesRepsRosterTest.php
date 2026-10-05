<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;

final class SalesRepsRosterTest extends TestCase {
    private $client;
    private $salesRepsRoster;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->salesRepsRoster = new SalesRepsRoster($this->client);
    }

    public function testMethodSalesRepsRepsList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->salesRepsRoster->salesRepsRepsList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodSalesRepsRepsCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->salesRepsRoster->salesRepsRepsCreate(
            "VK-04711",
            "Sabine Vogt"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodSalesRepsRepsDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->salesRepsRoster->salesRepsRepsDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodSalesRepsRepsGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->salesRepsRoster->salesRepsRepsGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodSalesRepsRepsUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->salesRepsRoster->salesRepsRepsUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

}
