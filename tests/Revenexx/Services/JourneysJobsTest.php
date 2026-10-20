<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;

final class JourneysJobsTest extends TestCase {
    private $client;
    private $journeysJobs;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->journeysJobs = new JourneysJobs($this->client);
    }

    public function testMethodJourneysJobsSteps(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->journeysJobs->journeysJobsSteps(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodJourneysJobsTriggers(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->journeysJobs->journeysJobsTriggers(
        );

        $this->assertSame($data, $response);
    }

}
