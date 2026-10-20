<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;

final class CampaignsSpendTest extends TestCase {
    private $client;
    private $campaignsSpend;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->campaignsSpend = new CampaignsSpend($this->client);
    }

    public function testMethodCampaignsSpendList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->campaignsSpend->campaignsSpendList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCampaignsSpendImport(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->campaignsSpend->campaignsSpendImport(
            array()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCampaignsSpendGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->campaignsSpend->campaignsSpendGet(
            ""
        );

        $this->assertSame($data, $response);
    }

}
