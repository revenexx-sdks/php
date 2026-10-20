<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;

final class JourneysStepsTest extends TestCase {
    private $client;
    private $journeysSteps;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->journeysSteps = new JourneysSteps($this->client);
    }

    public function testMethodJourneysStepsList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->journeysSteps->journeysStepsList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodJourneysStepsGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->journeysSteps->journeysStepsGet(
            ""
        );

        $this->assertSame($data, $response);
    }

}
