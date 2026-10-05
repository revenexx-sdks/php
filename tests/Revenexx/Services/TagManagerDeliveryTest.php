<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;

final class TagManagerDeliveryTest extends TestCase {
    private $client;
    private $tagManagerDelivery;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->tagManagerDelivery = new TagManagerDelivery($this->client);
    }

    public function testMethodTagManagerDeliveryContainer(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tagManagerDelivery->tagManagerDeliveryContainer(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodTagManagerDeliveryPreview(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tagManagerDelivery->tagManagerDeliveryPreview(
            ""
        );

        $this->assertSame($data, $response);
    }

}
