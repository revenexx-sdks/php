<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;

final class CampaignsAssetsTest extends TestCase {
    private $client;
    private $campaignsAssets;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->campaignsAssets = new CampaignsAssets($this->client);
    }

    public function testMethodCampaignsAssetsList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->campaignsAssets->campaignsAssetsList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCampaignsAssetsGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->campaignsAssets->campaignsAssetsGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCampaignsAssetsDetach(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->campaignsAssets->campaignsAssetsDetach(
            "",
            array()
        );

        $this->assertSame($data, $response);
    }

}
