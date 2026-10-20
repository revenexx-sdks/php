<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;

final class AdsVocabulariesTest extends TestCase {
    private $client;
    private $adsVocabularies;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->adsVocabularies = new AdsVocabularies($this->client);
    }

    public function testMethodAdsVocabulariesList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->adsVocabularies->adsVocabulariesList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAdsVocabulariesGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->adsVocabularies->adsVocabulariesGet(
            ""
        );

        $this->assertSame($data, $response);
    }

}
