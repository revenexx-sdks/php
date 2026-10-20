<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;
use Revenexx\Enums\Destination;

final class AdsFeedsTest extends TestCase {
    private $client;
    private $adsFeeds;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->adsFeeds = new AdsFeeds($this->client);
    }

    public function testMethodAdsFeedsList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->adsFeeds->adsFeedsList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAdsFeedsCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->adsFeeds->adsFeedsCreate(
            Destination::GOOGLEMERCHANTCENTER(),
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAdsFeedsDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->adsFeeds->adsFeedsDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAdsFeedsGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->adsFeeds->adsFeedsGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAdsFeedsUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->adsFeeds->adsFeedsUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

}
