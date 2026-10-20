<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;

final class JourneysVersionsTest extends TestCase {
    private $client;
    private $journeysVersions;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->journeysVersions = new JourneysVersions($this->client);
    }

    public function testMethodJourneysVersionsList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->journeysVersions->journeysVersionsList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodJourneysVersionsGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->journeysVersions->journeysVersionsGet(
            ""
        );

        $this->assertSame($data, $response);
    }

}
