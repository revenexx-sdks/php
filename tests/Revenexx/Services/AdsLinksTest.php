<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;

final class AdsLinksTest extends TestCase {
    private $client;
    private $adsLinks;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->adsLinks = new AdsLinks($this->client);
    }

    public function testMethodAdsLinksList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->adsLinks->adsLinksList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAdsLinksCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->adsLinks->adsLinksCreate(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAdsLinksDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->adsLinks->adsLinksDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAdsLinksGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->adsLinks->adsLinksGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAdsLinksUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->adsLinks->adsLinksUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

}
