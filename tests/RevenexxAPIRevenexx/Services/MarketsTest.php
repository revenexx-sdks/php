<?php

namespace RevenexxAPIRevenexx\Services;

use RevenexxAPIRevenexx\Client;
use RevenexxAPIRevenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;
use RevenexxAPIRevenexx\Enums\MarketStatus;

final class MarketsTest extends TestCase {
    private $client;
    private $markets;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->markets = new Markets($this->client);
    }

    public function testMethodMarketsList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->markets->marketsList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMarketsCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->markets->marketsCreate(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMarketsDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->markets->marketsDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMarketsGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->markets->marketsGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMarketsUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->markets->marketsUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMarketsContext(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->markets->marketsContext(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMarketsLocalesList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->markets->marketsLocalesList(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMarketsLocalesCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->markets->marketsLocalesCreate(
            "",
            "",
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMarketsLocalesDelete(): void {

        $data = array();

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

        $data = array();

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

        $data = array();

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

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->markets->marketsTaxClassesList(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMarketsTaxClassesCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->markets->marketsTaxClassesCreate(
            "",
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMarketsTaxClassesDelete(): void {

        $data = array();

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

        $data = array();

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

        $data = array();

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
