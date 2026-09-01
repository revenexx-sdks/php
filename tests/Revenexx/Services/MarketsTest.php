<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;
use Revenexx\Enums\MarketsListStatus;
use Revenexx\Enums\MarketStatus;
use Revenexx\Enums\MarketsVocabularyName;

final class MarketsTest extends TestCase {
    private $client;
    private $markets;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->markets = new Markets($this->client);
    }

    public function testMethodMarketsList(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->markets->marketsList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMarketsCreate(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->markets->marketsCreate(
            "northwind",
            "Northwind"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMarketsLocalePolicy(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->markets->marketsLocalePolicy(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMarketsVocabularies(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->markets->marketsVocabularies(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMarketsVocabulary(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->markets->marketsVocabulary(
            MarketsVocabularyName::MARKETSTATUSES()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMarketsDelete(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->markets->marketsDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMarketsGet(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->markets->marketsGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMarketsUpdate(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->markets->marketsUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMarketsBackfill(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->markets->marketsBackfill(
            "northwind",
            "northwind"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMarketsClone(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->markets->marketsClone(
            "northwind",
            "northwind-b2b"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMarketsContext(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->markets->marketsContext(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMarketsMakeDefault(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->markets->marketsMakeDefault(
            "northwind",
            array()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMarketsReadiness(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->markets->marketsReadiness(
            "northwind"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMarketsCurrenciesList(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->markets->marketsCurrenciesList(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMarketsCurrenciesCreate(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->markets->marketsCurrenciesCreate(
            "",
            "EUR"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMarketsCurrenciesDelete(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->markets->marketsCurrenciesDelete(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMarketsCurrenciesGet(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->markets->marketsCurrenciesGet(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMarketsCurrenciesUpdate(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->markets->marketsCurrenciesUpdate(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMarketsLocalesList(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->markets->marketsLocalesList(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMarketsLocalesCreate(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->markets->marketsLocalesCreate(
            "",
            "de-DE",
            "DE",
            "de"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMarketsLocalesDelete(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->markets->marketsLocalesDelete(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMarketsLocalesGet(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->markets->marketsLocalesGet(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMarketsLocalesUpdate(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->markets->marketsLocalesUpdate(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMarketsTaxClassesList(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->markets->marketsTaxClassesList(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMarketsTaxClassesCreate(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->markets->marketsTaxClassesCreate(
            "",
            "standard",
            "Standard rate"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMarketsTaxClassesDelete(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->markets->marketsTaxClassesDelete(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMarketsTaxClassesGet(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->markets->marketsTaxClassesGet(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMarketsTaxClassesUpdate(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->markets->marketsTaxClassesUpdate(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

}
