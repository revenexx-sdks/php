<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;

final class QuotesAcceptanceTest extends TestCase {
    private $client;
    private $quotesAcceptance;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->quotesAcceptance = new QuotesAcceptance($this->client);
    }

    public function testMethodQuotesAcceptanceAccept(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->quotesAcceptance->quotesAcceptanceAccept(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodQuotesAcceptanceDecline(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->quotesAcceptance->quotesAcceptanceDecline(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodQuotesAcceptanceOrdered(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->quotesAcceptance->quotesAcceptanceOrdered(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodQuotesAcceptanceReject(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->quotesAcceptance->quotesAcceptanceReject(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

}
