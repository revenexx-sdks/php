<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;

final class ReviewsVocabulariesTest extends TestCase {
    private $client;
    private $reviewsVocabularies;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->reviewsVocabularies = new ReviewsVocabularies($this->client);
    }

    public function testMethodReviewsVocabulariesList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->reviewsVocabularies->reviewsVocabulariesList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodReviewsVocabulariesGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->reviewsVocabularies->reviewsVocabulariesGet(
            ""
        );

        $this->assertSame($data, $response);
    }

}
