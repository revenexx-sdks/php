<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;

final class CampaignsBudgetsTest extends TestCase {
    private $client;
    private $campaignsBudgets;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->campaignsBudgets = new CampaignsBudgets($this->client);
    }

    public function testMethodCampaignsBudgetsList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->campaignsBudgets->campaignsBudgetsList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCampaignsBudgetsCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->campaignsBudgets->campaignsBudgetsCreate(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCampaignsBudgetsDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->campaignsBudgets->campaignsBudgetsDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCampaignsBudgetsGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->campaignsBudgets->campaignsBudgetsGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCampaignsBudgetsUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->campaignsBudgets->campaignsBudgetsUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

}
