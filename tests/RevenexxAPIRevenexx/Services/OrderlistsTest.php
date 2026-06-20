<?php

namespace RevenexxAPIRevenexx\Services;

use RevenexxAPIRevenexx\Client;
use RevenexxAPIRevenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;
use RevenexxAPIRevenexx\Enums\OrderListKind;

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
            "",
            "",
            ""
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
            ""
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
