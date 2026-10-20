<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;
use Revenexx\Enums\Sort;

final class ReviewsProductsTest extends TestCase {
    private $client;
    private $reviewsProducts;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->reviewsProducts = new ReviewsProducts($this->client);
    }

    public function testMethodReviewsProductsGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->reviewsProducts->reviewsProductsGet(
            ""
        );

        $this->assertSame($data, $response);
    }

}
