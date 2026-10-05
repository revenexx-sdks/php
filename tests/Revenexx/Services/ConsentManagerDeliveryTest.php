<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;

final class ConsentManagerDeliveryTest extends TestCase {
    private $client;
    private $consentManagerDelivery;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->consentManagerDelivery = new ConsentManagerDelivery($this->client);
    }

    public function testMethodConsentManagerDeliveryPolicy(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->consentManagerDelivery->consentManagerDeliveryPolicy(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodConsentManagerDeliveryPreview(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->consentManagerDelivery->consentManagerDeliveryPreview(
            ""
        );

        $this->assertSame($data, $response);
    }

}
