<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;

final class ProductsReferencesTest extends TestCase {
    private $client;
    private $productsReferences;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->productsReferences = new ProductsReferences($this->client);
    }

    public function testMethodProductsReferenceEntitiesList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->productsReferences->productsReferenceEntitiesList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsReferenceEntitiesCreate(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->productsReferences->productsReferenceEntitiesCreate(
            "brand"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsReferenceEntitiesDelete(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->productsReferences->productsReferenceEntitiesDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsReferenceEntitiesGet(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->productsReferences->productsReferenceEntitiesGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsReferenceEntitiesUpdate(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->productsReferences->productsReferenceEntitiesUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsReferenceEntityRecordsList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->productsReferences->productsReferenceEntityRecordsList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsReferenceEntityRecordsCreate(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->productsReferences->productsReferenceEntityRecordsCreate(
            "acme_tools",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsReferenceEntityRecordsDelete(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->productsReferences->productsReferenceEntityRecordsDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsReferenceEntityRecordsGet(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->productsReferences->productsReferenceEntityRecordsGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsReferenceEntityRecordsUpdate(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->productsReferences->productsReferenceEntityRecordsUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

}
