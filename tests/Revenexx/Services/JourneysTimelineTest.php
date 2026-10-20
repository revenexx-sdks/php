<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;

final class JourneysTimelineTest extends TestCase {
    private $client;
    private $journeysTimeline;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->journeysTimeline = new JourneysTimeline($this->client);
    }

    public function testMethodJourneysTimelineList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->journeysTimeline->journeysTimelineList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodJourneysTimelineGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->journeysTimeline->journeysTimelineGet(
            ""
        );

        $this->assertSame($data, $response);
    }

}
