<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;
use Revenexx\Enums\PagesSeedMode;

final class QuotesRangesTest extends TestCase {
    private $client;
    private $quotesRanges;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->quotesRanges = new QuotesRanges($this->client);
    }

    public function testMethodQuotesRangesList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->quotesRanges->quotesRangesList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodQuotesRangesCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->quotesRanges->quotesRangesCreate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodQuotesRangesDefaults(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->quotesRanges->quotesRangesDefaults(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodQuotesRangesDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->quotesRanges->quotesRangesDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodQuotesRangesGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->quotesRanges->quotesRangesGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodQuotesRangesUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->quotesRanges->quotesRangesUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

}
