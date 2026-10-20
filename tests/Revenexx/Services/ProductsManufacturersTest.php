<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;
use Revenexx\Enums\ProductsListTrashed;

final class ProductsManufacturersTest extends TestCase {
    private $client;
    private $productsManufacturers;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->productsManufacturers = new ProductsManufacturers($this->client);
    }

    public function testMethodProductsManufacturersList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->productsManufacturers->productsManufacturersList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsManufacturersCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->productsManufacturers->productsManufacturersCreate(
            "paul_horn",
            "DE",
            "Paul Horn"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsManufacturersMigrate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->productsManufacturers->productsManufacturersMigrate(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsManufacturersEmptyTrash(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->productsManufacturers->productsManufacturersEmptyTrash(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsManufacturersDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->productsManufacturers->productsManufacturersDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsManufacturersGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->productsManufacturers->productsManufacturersGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsManufacturersUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->productsManufacturers->productsManufacturersUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsManufacturersGpsr(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->productsManufacturers->productsManufacturersGpsr(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsManufacturersLogoRemove(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->productsManufacturers->productsManufacturersLogoRemove(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsManufacturersLogoSet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->productsManufacturers->productsManufacturersLogoSet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsManufacturersProducts(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->productsManufacturers->productsManufacturersProducts(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsManufacturersRestore(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->productsManufacturers->productsManufacturersRestore(
            ""
        );

        $this->assertSame($data, $response);
    }

}
