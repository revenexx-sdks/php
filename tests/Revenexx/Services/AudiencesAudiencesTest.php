<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;
use Revenexx\Enums\Trashed;
use Revenexx\Enums\Kind;
use Revenexx\Enums\RuleMatch;

final class AudiencesAudiencesTest extends TestCase {
    private $client;
    private $audiencesAudiences;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->audiencesAudiences = new AudiencesAudiences($this->client);
    }

    public function testMethodAudiencesAudiencesList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->audiencesAudiences->audiencesAudiencesList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAudiencesAudiencesCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->audiencesAudiences->audiencesAudiencesCreate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAudiencesAudiencesRecomputeAll(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->audiencesAudiences->audiencesAudiencesRecomputeAll(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAudiencesAudiencesEmptyTrash(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->audiencesAudiences->audiencesAudiencesEmptyTrash(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAudiencesAudiencesPurge(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->audiencesAudiences->audiencesAudiencesPurge(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAudiencesAudiencesDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->audiencesAudiences->audiencesAudiencesDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAudiencesAudiencesGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->audiencesAudiences->audiencesAudiencesGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAudiencesAudiencesUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->audiencesAudiences->audiencesAudiencesUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAudiencesAudiencesFreeze(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->audiencesAudiences->audiencesAudiencesFreeze(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAudiencesAudiencesPreview(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->audiencesAudiences->audiencesAudiencesPreview(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAudiencesAudiencesRecompute(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->audiencesAudiences->audiencesAudiencesRecompute(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAudiencesAudiencesRestore(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->audiencesAudiences->audiencesAudiencesRestore(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAudiencesVocabulariesList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->audiencesAudiences->audiencesVocabulariesList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAudiencesVocabulariesGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->audiencesAudiences->audiencesVocabulariesGet(
            ""
        );

        $this->assertSame($data, $response);
    }

}
