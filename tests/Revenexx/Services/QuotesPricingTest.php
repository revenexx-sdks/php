<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;
use Revenexx\Enums\PriceReason;
use Revenexx\Enums\QuotesPricingReviewState;

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

    public function testMethodQuotesPricingRemoveItem(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->quotesPricing->quotesPricingRemoveItem(
            "",
            array()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodQuotesPricingFollowUp(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->quotesPricing->quotesPricingFollowUp(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodQuotesPricingAddItem(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->quotesPricing->quotesPricingAddItem(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodQuotesPricingItem(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->quotesPricing->quotesPricingItem(
            "",
            ""
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

    public function testMethodQuotesPricingRemind(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->quotesPricing->quotesPricingRemind(
            "",
            array()
        );

        $this->assertSame($data, $response);
    }

}
