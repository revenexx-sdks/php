<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;
use Revenexx\Enums\ShippingCarriersListStatus;
use Revenexx\Enums\ShippingCarrierStatus;

final class ShippingCarriersTest extends TestCase {
    private $client;
    private $shippingCarriers;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->shippingCarriers = new ShippingCarriers($this->client);
    }

    public function testMethodShippingCarriersList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->shippingCarriers->shippingCarriersList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodShippingCarriersCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->shippingCarriers->shippingCarriersCreate(
            "acme-parcel",
            "Acme Parcel"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodShippingCarriersCatalog(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->shippingCarriers->shippingCarriersCatalog(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodShippingCarriersDefaults(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->shippingCarriers->shippingCarriersDefaults(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodShippingCarriersDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->shippingCarriers->shippingCarriersDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodShippingCarriersGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->shippingCarriers->shippingCarriersGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodShippingCarriersUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->shippingCarriers->shippingCarriersUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodShippingTracking(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->shippingCarriers->shippingTracking(
            "acme-parcel"
        );

        $this->assertSame($data, $response);
    }

}
