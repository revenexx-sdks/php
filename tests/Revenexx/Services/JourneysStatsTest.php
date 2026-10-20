<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;

final class JourneysStatsTest extends TestCase {
    private $client;
    private $journeysStats;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->journeysStats = new JourneysStats($this->client);
    }

    public function testMethodJourneysStatsList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->journeysStats->journeysStatsList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodJourneysStatsGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->journeysStats->journeysStatsGet(
            ""
        );

        $this->assertSame($data, $response);
    }

}
