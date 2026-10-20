<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;

final class JourneysEnrollmentsTest extends TestCase {
    private $client;
    private $journeysEnrollments;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->journeysEnrollments = new JourneysEnrollments($this->client);
    }

    public function testMethodJourneysEnrollmentsList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->journeysEnrollments->journeysEnrollmentsList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodJourneysEnrollmentsGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->journeysEnrollments->journeysEnrollmentsGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodJourneysEnrollmentsExit(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->journeysEnrollments->journeysEnrollmentsExit(
            "",
            array()
        );

        $this->assertSame($data, $response);
    }

}
