<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;
use Revenexx\Enums\CartStatus;
use Revenexx\Enums\CartMergeStrategy;
use Revenexx\Enums\Name;

final class CartsTest extends TestCase {
    private $client;
    private $carts;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->carts = new Carts($this->client);
    }

    public function testMethodCartsList(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->carts->cartsList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCartsCreate(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->carts->cartsCreate(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCartsClaim(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->carts->cartsClaim(
            "",
            "a1b2c3d4e5f6"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCartsMaintenanceRun(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->carts->cartsMaintenanceRun(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCartsMerge(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->carts->cartsMerge(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCartsVocabulariesList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->carts->cartsVocabulariesList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCartsVocabulariesGet(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->carts->cartsVocabulariesGet(
            Name::IOAPPLYMODES()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCartsDelete(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->carts->cartsDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCartsGet(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->carts->cartsGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCartsUpdate(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->carts->cartsUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCartsAbandon(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->carts->cartsAbandon(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCartsActivate(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->carts->cartsActivate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCartsMergeInto(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->carts->cartsMergeInto(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCartsOrder(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->carts->cartsOrder(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCartsReopen(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->carts->cartsReopen(
            ""
        );

        $this->assertSame($data, $response);
    }

}
