<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;
use Revenexx\Enums\PriceListStatus;
use Revenexx\Enums\PriceListTaxBasis;
use Revenexx\Enums\PriceEntryType;
use Revenexx\Enums\PriceEndingRule;
use Revenexx\Enums\PriceEntriesBulkMode;
use Revenexx\Enums\PricesVocabulariesGetName;

final class PricesTest extends TestCase {
    private $client;
    private $prices;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->prices = new Prices($this->client);
    }

    public function testMethodPricesListsList(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->prices->pricesListsList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPricesListsCreate(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->prices->pricesListsCreate(
            "dealer-de",
            "Dealer prices"
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

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->prices->pricesListsDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPricesListsGet(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->prices->pricesListsGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPricesListsUpdate(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->prices->pricesListsUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPricesEntriesList(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->prices->pricesEntriesList(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPricesEntriesCreate(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->prices->pricesEntriesCreate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPricesEntriesReplace(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->prices->pricesEntriesReplace(
            "",
            array()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPricesEntriesAdjust(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->prices->pricesEntriesAdjust(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPricesEntriesBulk(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->prices->pricesEntriesBulk(
            "",
            array()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPricesEntriesLadder(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->prices->pricesEntriesLadder(
            "",
            1.0
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPricesEntriesDelete(): void {

        $data = array(
            "error" => "");

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

        $data = array(
            "error" => "");

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

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->prices->pricesEntriesUpdate(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPricesListsMakeDefault(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->prices->pricesListsMakeDefault(
            "",
            array()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPricesResolve(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->prices->pricesResolve(
            array()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPricesVocabulariesList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->prices->pricesVocabulariesList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPricesVocabulariesGet(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->prices->pricesVocabulariesGet(
            PricesVocabulariesGetName::LISTSTATUSES()
        );

        $this->assertSame($data, $response);
    }

}
