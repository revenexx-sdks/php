<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;

final class AdsSyncsTest extends TestCase {
    private $client;
    private $adsSyncs;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->adsSyncs = new AdsSyncs($this->client);
    }

    public function testMethodAdsSyncsList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->adsSyncs->adsSyncsList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAdsSyncsCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->adsSyncs->adsSyncsCreate(
            "",
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAdsSyncsDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->adsSyncs->adsSyncsDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAdsSyncsGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->adsSyncs->adsSyncsGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAdsSyncsUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->adsSyncs->adsSyncsUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAdsSyncsMembers(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->adsSyncs->adsSyncsMembers(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAdsSyncsRequest(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->adsSyncs->adsSyncsRequest(
            "",
            array()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAdsSyncsResult(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->adsSyncs->adsSyncsResult(
            ""
        );

        $this->assertSame($data, $response);
    }

}
