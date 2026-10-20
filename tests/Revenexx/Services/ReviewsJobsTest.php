<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;

final class ReviewsJobsTest extends TestCase {
    private $client;
    private $reviewsJobs;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->reviewsJobs = new ReviewsJobs($this->client);
    }

    public function testMethodReviewsJobsMaintain(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->reviewsJobs->reviewsJobsMaintain(
            array()
        );

        $this->assertSame($data, $response);
    }

}
