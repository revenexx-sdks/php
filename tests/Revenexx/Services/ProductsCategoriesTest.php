<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;
use Revenexx\Enums\RuleMatch;
use Revenexx\Enums\CategoriesRuleMatch;
use Revenexx\Enums\CategoryRuleMatch;
use Revenexx\Enums\Source;
use Revenexx\Enums\ProductCategoriesSource;

final class ProductsCategoriesTest extends TestCase {
    private $client;
    private $productsCategories;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->productsCategories = new ProductsCategories($this->client);
    }

    public function testMethodProductsCategoriesList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->productsCategories->productsCategoriesList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsCategoriesCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->productsCategories->productsCategoriesCreate(
            "cordless_drills"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsCategoriesRulesRecomputeAll(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->productsCategories->productsCategoriesRulesRecomputeAll(
            array()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsCategoriesRulesPreview(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->productsCategories->productsCategoriesRulesPreview(
            "",
            array()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsCategoriesRulesRecompute(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->productsCategories->productsCategoriesRulesRecompute(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsCategoriesDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->productsCategories->productsCategoriesDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsCategoriesGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->productsCategories->productsCategoriesGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsCategoriesUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->productsCategories->productsCategoriesUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsProductCategoriesList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->productsCategories->productsProductCategoriesList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsProductCategoriesCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->productsCategories->productsProductCategoriesCreate(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsProductCategoriesDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->productsCategories->productsProductCategoriesDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsProductCategoriesGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->productsCategories->productsProductCategoriesGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsProductCategoriesUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->productsCategories->productsProductCategoriesUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsCategoriesAssign(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->productsCategories->productsCategoriesAssign(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

}
