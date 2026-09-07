<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;
use Revenexx\Enums\OrderListKindTone;
use Revenexx\Enums\OrderlistsVocabulariesGetName;
use Revenexx\Enums\OrderListCartMode;

final class OrderlistsTest extends TestCase {
    private $client;
    private $orderlists;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->orderlists = new Orderlists($this->client);
    }

    public function testMethodOrderlistsList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->orderlists->orderlistsList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodOrderlistsCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->orderlists->orderlistsCreate(
            "Weekly office supplies",
            "",
            "Jamie Rivera"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodOrderlistsDefaults(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->orderlists->orderlistsDefaults(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodOrderlistsKindsList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->orderlists->orderlistsKindsList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodOrderlistsKindsCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->orderlists->orderlistsKindsCreate(
            "reagents",
            "Reagent list"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodOrderlistsKindsDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->orderlists->orderlistsKindsDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodOrderlistsKindsGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->orderlists->orderlistsKindsGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodOrderlistsKindsUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->orderlists->orderlistsKindsUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodOrderlistsKindsMakeDefault(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->orderlists->orderlistsKindsMakeDefault(
            "",
            array()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodOrderlistsVocabulariesList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->orderlists->orderlistsVocabulariesList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodOrderlistsVocabulariesGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->orderlists->orderlistsVocabulariesGet(
            OrderlistsVocabulariesGetName::KINDS()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodOrderlistsDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->orderlists->orderlistsDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodOrderlistsGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->orderlists->orderlistsGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodOrderlistsUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->orderlists->orderlistsUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodOrderlistsToCart(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->orderlists->orderlistsToCart(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodOrderlistsToOrder(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->orderlists->orderlistsToOrder(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodOrderlistsItemsList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->orderlists->orderlistsItemsList(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodOrderlistsItemsCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->orderlists->orderlistsItemsCreate(
            "",
            "Copy paper A4, 80 g/m², white"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodOrderlistsItemsReplace(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->orderlists->orderlistsItemsReplace(
            "",
            array()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodOrderlistsItemsDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->orderlists->orderlistsItemsDelete(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodOrderlistsItemsGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->orderlists->orderlistsItemsGet(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodOrderlistsItemsUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->orderlists->orderlistsItemsUpdate(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

}
