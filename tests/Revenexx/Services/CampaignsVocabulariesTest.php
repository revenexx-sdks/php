<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;

final class CampaignsVocabulariesTest extends TestCase {
    private $client;
    private $campaignsVocabularies;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->campaignsVocabularies = new CampaignsVocabularies($this->client);
    }

    public function testMethodCampaignsVocabulariesList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->campaignsVocabularies->campaignsVocabulariesList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCampaignsVocabulariesGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->campaignsVocabularies->campaignsVocabulariesGet(
            ""
        );

        $this->assertSame($data, $response);
    }

}
