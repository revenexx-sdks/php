<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;

final class CustomersFollowUpsTest extends TestCase {
    private $client;
    private $customersFollowUps;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->customersFollowUps = new CustomersFollowUps($this->client);
    }

    public function testMethodCustomersContactEventsDone(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customersFollowUps->customersContactEventsDone(
            ""
        );

        $this->assertSame($data, $response);
    }

}
