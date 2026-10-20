<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;

final class ReviewsRequestsTest extends TestCase {
    private $client;
    private $reviewsRequests;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->reviewsRequests = new ReviewsRequests($this->client);
    }

    public function testMethodReviewsRequestsList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->reviewsRequests->reviewsRequestsList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodReviewsRequestsIssue(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->reviewsRequests->reviewsRequestsIssue(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodReviewsRequestsForm(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->reviewsRequests->reviewsRequestsForm(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodReviewsRequestsSubmit(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->reviewsRequests->reviewsRequestsSubmit(
            ""
        );

        $this->assertSame($data, $response);
    }

}
