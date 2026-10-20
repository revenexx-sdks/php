<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;
use Revenexx\Enums\Trashed;
use Revenexx\Enums\GoalMetric;
use Revenexx\Enums\CampaignsCampaignsCreateStatus;
use Revenexx\Enums\AssetApp;
use Revenexx\Enums\Model;

final class CampaignsCampaignsTest extends TestCase {
    private $client;
    private $campaignsCampaigns;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->campaignsCampaigns = new CampaignsCampaigns($this->client);
    }

    public function testMethodCampaignsCampaignsList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->campaignsCampaigns->campaignsCampaignsList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCampaignsCampaignsCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->campaignsCampaigns->campaignsCampaignsCreate(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCampaignsCampaignsEmptyTrash(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->campaignsCampaigns->campaignsCampaignsEmptyTrash(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCampaignsCampaignsPurge(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->campaignsCampaigns->campaignsCampaignsPurge(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCampaignsCampaignsDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->campaignsCampaigns->campaignsCampaignsDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCampaignsCampaignsGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->campaignsCampaigns->campaignsCampaignsGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCampaignsCampaignsUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->campaignsCampaigns->campaignsCampaignsUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCampaignsCampaignsAttach(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->campaignsCampaigns->campaignsCampaignsAttach(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCampaignsCampaignsDetach(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->campaignsCampaigns->campaignsCampaignsDetach(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCampaignsCampaignsLinks(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->campaignsCampaigns->campaignsCampaignsLinks(
            "",
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCampaignsCampaignsPerformance(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->campaignsCampaigns->campaignsCampaignsPerformance(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCampaignsCampaignsRestore(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->campaignsCampaigns->campaignsCampaignsRestore(
            ""
        );

        $this->assertSame($data, $response);
    }

}
