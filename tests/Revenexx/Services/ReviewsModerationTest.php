<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;

final class ReviewsModerationTest extends TestCase {
    private $client;
    private $reviewsModeration;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->reviewsModeration = new ReviewsModeration($this->client);
    }

    public function testMethodReviewsModerationPublish(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->reviewsModeration->reviewsModerationPublish(
            "",
            array()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodReviewsModerationReject(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->reviewsModeration->reviewsModerationReject(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodReviewsModerationReply(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->reviewsModeration->reviewsModerationReply(
            ""
        );

        $this->assertSame($data, $response);
    }

}
