<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;

final class AdsConversionsTest extends TestCase {
    private $client;
    private $adsConversions;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->adsConversions = new AdsConversions($this->client);
    }

    public function testMethodAdsConversionsList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->adsConversions->adsConversionsList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAdsConversionsGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->adsConversions->adsConversionsGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAdsConversionsResult(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->adsConversions->adsConversionsResult(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAdsConversionsRetry(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->adsConversions->adsConversionsRetry(
            "",
            array()
        );

        $this->assertSame($data, $response);
    }

}
