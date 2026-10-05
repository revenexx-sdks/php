<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;

final class SalesRepsActingForTest extends TestCase {
    private $client;
    private $salesRepsActingFor;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->salesRepsActingFor = new SalesRepsActingFor($this->client);
    }

    public function testMethodSalesRepsImpersonationsList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->salesRepsActingFor->salesRepsImpersonationsList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodSalesRepsImpersonationsCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->salesRepsActingFor->salesRepsImpersonationsCreate(
            "",
            "",
            "VK-04711"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodSalesRepsImpersonationsDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->salesRepsActingFor->salesRepsImpersonationsDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodSalesRepsImpersonationsGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->salesRepsActingFor->salesRepsImpersonationsGet(
            ""
        );

        $this->assertSame($data, $response);
    }

}
