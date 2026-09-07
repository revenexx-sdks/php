<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;
use Revenexx\Enums\CartItemType;

final class CartsItemsTest extends TestCase {
    private $client;
    private $cartsItems;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->cartsItems = new CartsItems($this->client);
    }

    public function testMethodCartsItemsList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->cartsItems->cartsItemsList(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCartsItemsCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->cartsItems->cartsItemsCreate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCartsItemsReplace(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->cartsItems->cartsItemsReplace(
            "",
            array()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCartsItemsDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->cartsItems->cartsItemsDelete(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCartsItemsGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->cartsItems->cartsItemsGet(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCartsItemsUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->cartsItems->cartsItemsUpdate(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

}
