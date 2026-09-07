<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;
use Revenexx\Enums\Kind;
use Revenexx\Enums\ProductsKind;

final class ProductsTest extends TestCase {
    private $client;
    private $products;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->products = new Products($this->client);
    }

    public function testMethodProductsList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->products->productsList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->products->productsCreate(
            "ACME-4711-BLK"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsBatch(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->products->productsBatch(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsGrid(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->products->productsGrid(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsLabels(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->products->productsLabels(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsProductAssociationsList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->products->productsProductAssociationsList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsProductAssociationsCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->products->productsProductAssociationsCreate(
            "",
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsProductAssociationsDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->products->productsProductAssociationsDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsProductAssociationsGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->products->productsProductAssociationsGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsProductAssociationsUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->products->productsProductAssociationsUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsVocabulariesList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->products->productsVocabulariesList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsVocabulariesGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->products->productsVocabulariesGet(
            "product-kinds"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->products->productsDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->products->productsGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->products->productsUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsCompleteness(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->products->productsCompleteness(
            "",
            array()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsFamilyAssign(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->products->productsFamilyAssign(
            ""
        );

        $this->assertSame($data, $response);
    }

}
