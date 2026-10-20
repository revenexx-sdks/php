<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;

final class ReviewsPrivacyTest extends TestCase {
    private $client;
    private $reviewsPrivacy;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->reviewsPrivacy = new ReviewsPrivacy($this->client);
    }

    public function testMethodReviewsPrivacyAnonymise(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->reviewsPrivacy->reviewsPrivacyAnonymise(
            "",
            array()
        );

        $this->assertSame($data, $response);
    }

}
