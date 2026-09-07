<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;
use Revenexx\Enums\CartIoDirection;
use Revenexx\Enums\CartIoEntity;
use Revenexx\Enums\CartIoFormat;
use Revenexx\Enums\CartIoApplyMode;
use Revenexx\Enums\CartExportFormat;

final class CartsIoTest extends TestCase {
    private $client;
    private $cartsIo;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->cartsIo = new CartsIo($this->client);
    }

    public function testMethodCartsImport(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->cartsIo->cartsImport(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCartsIoProfilesList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->cartsIo->cartsIoProfilesList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCartsIoProfilesCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->cartsIo->cartsIoProfilesCreate(
            CartIoDirection::IMPORT(),
            "cart-export-csv"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCartsIoProfilesDefaults(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->cartsIo->cartsIoProfilesDefaults(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCartsIoProfilesDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->cartsIo->cartsIoProfilesDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCartsIoProfilesGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->cartsIo->cartsIoProfilesGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCartsIoProfilesUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->cartsIo->cartsIoProfilesUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCartsExport(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->cartsIo->cartsExport(
            ""
        );

        $this->assertSame($data, $response);
    }

}
