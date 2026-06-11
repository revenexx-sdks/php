<?php

namespace RevenexxAPIRevenexx\Services;

use RevenexxAPIRevenexx\Client;
use RevenexxAPIRevenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;

final class CartsTest extends TestCase {
    private $client;
    private $carts;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->carts = new Carts($this->client);
    }

    public function testMethodCartsList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->carts->cartsList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCartsCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->carts->cartsCreate(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCartsClaim(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->carts->cartsClaim(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCartsImport(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->carts->cartsImport(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCartsIoProfilesList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->carts->cartsIoProfilesList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCartsIoProfilesCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->carts->cartsIoProfilesCreate(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCartsIoProfilesDefaults(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->carts->cartsIoProfilesDefaults(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCartsIoProfilesDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->carts->cartsIoProfilesDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCartsIoProfilesGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->carts->cartsIoProfilesGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCartsIoProfilesUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->carts->cartsIoProfilesUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCartsMerge(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->carts->cartsMerge(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCartsItemsList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->carts->cartsItemsList(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCartsItemsCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->carts->cartsItemsCreate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCartsItemsReplace(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->carts->cartsItemsReplace(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCartsItemsDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->carts->cartsItemsDelete(
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

        $response = $this->carts->cartsItemsGet(
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

        $response = $this->carts->cartsItemsUpdate(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCartsDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->carts->cartsDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCartsGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->carts->cartsGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCartsUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->carts->cartsUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCartsAbandon(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->carts->cartsAbandon(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCartsActivate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->carts->cartsActivate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCartsExport(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->carts->cartsExport(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCartsOrder(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->carts->cartsOrder(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCartsReopen(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->carts->cartsReopen(
            ""
        );

        $this->assertSame($data, $response);
    }

}
