<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;

final class LoyaltyVocabulariesTest extends TestCase {
    private $client;
    private $loyaltyVocabularies;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->loyaltyVocabularies = new LoyaltyVocabularies($this->client);
    }

    public function testMethodLoyaltyVocabulariesList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->loyaltyVocabularies->loyaltyVocabulariesList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodLoyaltyVocabulariesGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->loyaltyVocabularies->loyaltyVocabulariesGet(
            ""
        );

        $this->assertSame($data, $response);
    }

}
