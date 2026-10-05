<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;

final class QuotesPricingTest extends TestCase {
    private $client;
    private $quotesPricing;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->quotesPricing = new QuotesPricing($this->client);
    }

    public function testMethodQuotesPricingExpire(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->quotesPricing->quotesPricingExpire(
            array()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodQuotesPricingPrice(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->quotesPricing->quotesPricingPrice(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodQuotesPricingReview(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->quotesPricing->quotesPricingReview(
            ""
        );

        $this->assertSame($data, $response);
    }

}
