<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;
use Revenexx\Enums\Trashed;
use Revenexx\Enums\ReviewsReviewsCreateSource;
use Revenexx\Enums\ReviewsReviewsCreateState;

final class ReviewsReviewsTest extends TestCase {
    private $client;
    private $reviewsReviews;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->reviewsReviews = new ReviewsReviews($this->client);
    }

    public function testMethodReviewsReviewsList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->reviewsReviews->reviewsReviewsList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodReviewsReviewsCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->reviewsReviews->reviewsReviewsCreate(
            "",
            1
        );

        $this->assertSame($data, $response);
    }

    public function testMethodReviewsReviewsEmptyTrash(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->reviewsReviews->reviewsReviewsEmptyTrash(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodReviewsReviewsPurge(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->reviewsReviews->reviewsReviewsPurge(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodReviewsReviewsDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->reviewsReviews->reviewsReviewsDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodReviewsReviewsGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->reviewsReviews->reviewsReviewsGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodReviewsReviewsRestore(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->reviewsReviews->reviewsReviewsRestore(
            ""
        );

        $this->assertSame($data, $response);
    }

}
