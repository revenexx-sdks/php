<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;

final class MailingsVocabulariesTest extends TestCase {
    private $client;
    private $mailingsVocabularies;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->mailingsVocabularies = new MailingsVocabularies($this->client);
    }

    public function testMethodMailingsVocabulariesList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->mailingsVocabularies->mailingsVocabulariesList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMailingsVocabulariesGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->mailingsVocabularies->mailingsVocabulariesGet(
            ""
        );

        $this->assertSame($data, $response);
    }

}
