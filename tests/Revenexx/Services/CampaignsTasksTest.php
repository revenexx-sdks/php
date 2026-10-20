<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;

final class CampaignsTasksTest extends TestCase {
    private $client;
    private $campaignsTasks;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->campaignsTasks = new CampaignsTasks($this->client);
    }

    public function testMethodCampaignsTasksList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->campaignsTasks->campaignsTasksList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCampaignsTasksCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->campaignsTasks->campaignsTasksCreate(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCampaignsTasksDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->campaignsTasks->campaignsTasksDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCampaignsTasksGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->campaignsTasks->campaignsTasksGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCampaignsTasksUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->campaignsTasks->campaignsTasksUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCampaignsTasksComplete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->campaignsTasks->campaignsTasksComplete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCampaignsTasksReopen(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->campaignsTasks->campaignsTasksReopen(
            ""
        );

        $this->assertSame($data, $response);
    }

}
