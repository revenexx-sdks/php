<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;

final class JourneysVocabulariesTest extends TestCase {
    private $client;
    private $journeysVocabularies;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->journeysVocabularies = new JourneysVocabularies($this->client);
    }

    public function testMethodJourneysVocabulariesList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->journeysVocabularies->journeysVocabulariesList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodJourneysVocabulariesGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->journeysVocabularies->journeysVocabulariesGet(
            ""
        );

        $this->assertSame($data, $response);
    }

}
