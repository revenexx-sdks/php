<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;

final class ReviewsAggregatesTest extends TestCase {
    private $client;
    private $reviewsAggregates;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->reviewsAggregates = new ReviewsAggregates($this->client);
    }

    public function testMethodReviewsAggregatesList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->reviewsAggregates->reviewsAggregatesList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodReviewsAggregatesRebuild(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->reviewsAggregates->reviewsAggregatesRebuild(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodReviewsAggregatesReviewStars(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->reviewsAggregates->reviewsAggregatesReviewStars(
            ""
        );

        $this->assertSame($data, $response);
    }

}
