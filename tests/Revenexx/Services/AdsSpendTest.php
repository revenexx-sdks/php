<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;
use Revenexx\Enums\Model;

final class AdsSpendTest extends TestCase {
    private $client;
    private $adsSpend;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->adsSpend = new AdsSpend($this->client);
    }

    public function testMethodAdsSpendFigures(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->adsSpend->adsSpendFigures(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAdsSpendRoas(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->adsSpend->adsSpendRoas(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAdsSpendList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->adsSpend->adsSpendList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAdsSpendImport(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->adsSpend->adsSpendImport(
            array()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAdsSpendGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->adsSpend->adsSpendGet(
            ""
        );

        $this->assertSame($data, $response);
    }

}
