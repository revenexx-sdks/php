<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;
use Revenexx\Enums\Origin;
use Revenexx\Enums\Audience;

final class QuotesQuotesTest extends TestCase {
    private $client;
    private $quotesQuotes;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->quotesQuotes = new QuotesQuotes($this->client);
    }

    public function testMethodQuotesQuotesList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->quotesQuotes->quotesQuotesList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodQuotesQuotesCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->quotesQuotes->quotesQuotesCreate(
            "EUR",
            array()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodQuotesQuotesGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->quotesQuotes->quotesQuotesGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodQuotesQuotesDetail(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->quotesQuotes->quotesQuotesDetail(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodQuotesQuotesItems(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->quotesQuotes->quotesQuotesItems(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodQuotesQuotesRequest(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->quotesQuotes->quotesQuotesRequest(
            "EUR",
            array()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodQuotesQuotesVocabularies(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->quotesQuotes->quotesQuotesVocabularies(
        );

        $this->assertSame($data, $response);
    }

}
