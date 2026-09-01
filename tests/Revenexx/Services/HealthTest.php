<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;

final class HealthTest extends TestCase {
    private $client;
    private $health;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->health = new Health($this->client);
    }

    public function testMethodHealthLive(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->health->healthLive(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodHealthReady(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->health->healthReady(
        );

        $this->assertSame($data, $response);
    }

}
