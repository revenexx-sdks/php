<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;
use Revenexx\Enums\ProductsAssetsListSource;
use Revenexx\Enums\AssetsSource;

final class ProductsAssetsTest extends TestCase {
    private $client;
    private $productsAssets;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->productsAssets = new ProductsAssets($this->client);
    }

    public function testMethodProductsAssetsList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->productsAssets->productsAssetsList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsAssetsCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->productsAssets->productsAssetsCreate(
            "",
            "acme-4711-blk_packshot_1"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsAssetsDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->productsAssets->productsAssetsDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsAssetsGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->productsAssets->productsAssetsGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProductsAssetsUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->productsAssets->productsAssetsUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

}
