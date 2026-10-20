<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;

final class CampaignsTouchesTest extends TestCase {
    private $client;
    private $campaignsTouches;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->campaignsTouches = new CampaignsTouches($this->client);
    }

    public function testMethodCampaignsTouchesList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->campaignsTouches->campaignsTouchesList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCampaignsTouchesIngest(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->campaignsTouches->campaignsTouchesIngest(
            array()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCampaignsTouchesGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->campaignsTouches->campaignsTouchesGet(
            ""
        );

        $this->assertSame($data, $response);
    }

}
