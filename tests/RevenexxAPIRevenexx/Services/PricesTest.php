<?php

namespace RevenexxAPIRevenexx\Services;

use RevenexxAPIRevenexx\Client;
use RevenexxAPIRevenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;
use RevenexxAPIRevenexx\Enums\PriceListStatus;
use RevenexxAPIRevenexx\Enums\PriceEntryType;

final class PricesTest extends TestCase {
    private $client;
    private $prices;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->prices = new Prices($this->client);
    }

    public function testMethodPricesListsList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->prices->pricesListsList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPricesListsCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->prices->pricesListsCreate(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPricesListsDefaults(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->prices->pricesListsDefaults(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPricesListsDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->prices->pricesListsDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPricesListsGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->prices->pricesListsGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPricesListsUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->prices->pricesListsUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPricesEntriesList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->prices->pricesEntriesList(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPricesEntriesCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->prices->pricesEntriesCreate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPricesEntriesReplace(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->prices->pricesEntriesReplace(
            "",
            array()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPricesEntriesBulk(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->prices->pricesEntriesBulk(
            "",
            array()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPricesEntriesDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->prices->pricesEntriesDelete(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPricesEntriesGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->prices->pricesEntriesGet(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPricesEntriesUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->prices->pricesEntriesUpdate(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPricesResolve(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->prices->pricesResolve(
            array()
        );

        $this->assertSame($data, $response);
    }

}
