<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;

final class JourneysTemplatesTest extends TestCase {
    private $client;
    private $journeysTemplates;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->journeysTemplates = new JourneysTemplates($this->client);
    }

    public function testMethodJourneysTemplatesList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->journeysTemplates->journeysTemplatesList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodJourneysTemplatesCopy(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->journeysTemplates->journeysTemplatesCopy(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodJourneysTemplatesGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->journeysTemplates->journeysTemplatesGet(
            ""
        );

        $this->assertSame($data, $response);
    }

}
