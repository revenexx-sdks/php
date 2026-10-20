<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;

final class CampaignsAttributionTest extends TestCase {
    private $client;
    private $campaignsAttribution;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->campaignsAttribution = new CampaignsAttribution($this->client);
    }

    public function testMethodCampaignsAttributionList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->campaignsAttribution->campaignsAttributionList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCampaignsAttributionGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->campaignsAttribution->campaignsAttributionGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCampaignsAttributionSweep(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->campaignsAttribution->campaignsAttributionSweep(
            array()
        );

        $this->assertSame($data, $response);
    }

}
