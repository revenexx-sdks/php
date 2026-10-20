<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;

final class AudiencesMembersTest extends TestCase {
    private $client;
    private $audiencesMembers;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->audiencesMembers = new AudiencesMembers($this->client);
    }

    public function testMethodAudiencesMembersComposition(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->audiencesMembers->audiencesMembersComposition(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAudiencesAudiencesImport(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->audiencesMembers->audiencesAudiencesImport(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAudiencesMembersRead(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->audiencesMembers->audiencesMembersRead(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAudiencesMembersAdd(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->audiencesMembers->audiencesMembersAdd(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAudiencesMembersRemove(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->audiencesMembers->audiencesMembersRemove(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAudiencesMembersTimeline(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->audiencesMembers->audiencesMembersTimeline(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAudiencesImportsList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->audiencesMembers->audiencesImportsList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAudiencesImportsGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->audiencesMembers->audiencesImportsGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAudiencesMemberEventsList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->audiencesMembers->audiencesMemberEventsList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAudiencesMemberEventsGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->audiencesMembers->audiencesMemberEventsGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAudiencesMembersList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->audiencesMembers->audiencesMembersList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAudiencesMembersGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->audiencesMembers->audiencesMembersGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAudiencesMembersMemberships(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->audiencesMembers->audiencesMembersMemberships(
            ""
        );

        $this->assertSame($data, $response);
    }

}
