<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;
use Revenexx\Enums\ProductsListTrashed;
use Revenexx\Enums\ProductsListKind;
use Revenexx\Enums\ProductsListStatus;
use Revenexx\Enums\ProductsKind;
use Revenexx\Enums\ProductsStatus;
use Revenexx\Enums\ProductsChannelsAssignMode;
use Revenexx\Enums\ProductsCopyParts;

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

    public function testMethodProductsSetup(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->products->productsSetup(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsEmptyTrash(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->products->productsEmptyTrash(
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

    public function testMethodProductsAttributeSet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->products->productsAttributeSet(
            "",
            "material",
            Edelstahl
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsChannelsAssign(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->products->productsChannelsAssign(
            "",
            array()
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

    public function testMethodProductsCopy(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->products->productsCopy(
            "",
            "ACME-4712-BLK"
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

    public function testMethodProductsManufacturerAssign(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->products->productsManufacturerAssign(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsRestore(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->products->productsRestore(
            ""
        );

        $this->assertSame($data, $response);
    }

}
