<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;

final class JourneysWatchesTest extends TestCase {
    private $client;
    private $journeysWatches;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->journeysWatches = new JourneysWatches($this->client);
    }

    public function testMethodJourneysWatchesList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->journeysWatches->journeysWatchesList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodJourneysWatchesCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->journeysWatches->journeysWatchesCreate(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodJourneysWatchesDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->journeysWatches->journeysWatchesDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodJourneysWatchesGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->journeysWatches->journeysWatchesGet(
            ""
        );

        $this->assertSame($data, $response);
    }

}
