<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;
use Revenexx\Enums\Trashed;
use Revenexx\Enums\TriggerKind;

final class JourneysJourneysTest extends TestCase {
    private $client;
    private $journeysJourneys;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->journeysJourneys = new JourneysJourneys($this->client);
    }

    public function testMethodJourneysJourneysList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->journeysJourneys->journeysJourneysList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodJourneysJourneysCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->journeysJourneys->journeysJourneysCreate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodJourneysJourneysEmptyTrash(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->journeysJourneys->journeysJourneysEmptyTrash(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodJourneysJourneysPurge(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->journeysJourneys->journeysJourneysPurge(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodJourneysJourneysDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->journeysJourneys->journeysJourneysDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodJourneysJourneysGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->journeysJourneys->journeysJourneysGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodJourneysJourneysUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->journeysJourneys->journeysJourneysUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodJourneysJourneysArchive(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->journeysJourneys->journeysJourneysArchive(
            "",
            array()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodJourneysJourneysEnrol(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->journeysJourneys->journeysJourneysEnrol(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodJourneysJourneysGraph(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->journeysJourneys->journeysJourneysGraph(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodJourneysJourneysSaveGraph(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->journeysJourneys->journeysJourneysSaveGraph(
            "",
            array()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodJourneysJourneysPause(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->journeysJourneys->journeysJourneysPause(
            "",
            array()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodJourneysJourneysPublish(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->journeysJourneys->journeysJourneysPublish(
            "",
            array()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodJourneysJourneysReport(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->journeysJourneys->journeysJourneysReport(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodJourneysJourneysRestore(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->journeysJourneys->journeysJourneysRestore(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodJourneysJourneysResume(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->journeysJourneys->journeysJourneysResume(
            "",
            array()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodJourneysJourneysRun(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->journeysJourneys->journeysJourneysRun(
            "",
            array()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodJourneysJourneysTimeline(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->journeysJourneys->journeysJourneysTimeline(
            ""
        );

        $this->assertSame($data, $response);
    }

}
