<?php

namespace RevenexxAPIRevenexx\Services;

use RevenexxAPIRevenexx\Client;
use RevenexxAPIRevenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;
use RevenexxAPIRevenexx\Enums\ShippingMethodMatrixBasis;
use RevenexxAPIRevenexx\Enums\ShippingMethodPricingType;

final class ShippingTest extends TestCase {
    private $client;
    private $shipping;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->shipping = new Shipping($this->client);
    }

    public function testMethodShippingMethodsList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->shipping->shippingMethodsList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodShippingMethodsCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->shipping->shippingMethodsCreate(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodShippingMethodsDefaults(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->shipping->shippingMethodsDefaults(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodShippingMethodsDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->shipping->shippingMethodsDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodShippingMethodsGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->shipping->shippingMethodsGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodShippingMethodsUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->shipping->shippingMethodsUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodShippingTiersList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->shipping->shippingTiersList(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodShippingTiersCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->shipping->shippingTiersCreate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodShippingTiersReplace(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->shipping->shippingTiersReplace(
            "",
            array()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodShippingTiersDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->shipping->shippingTiersDelete(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodShippingTiersGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->shipping->shippingTiersGet(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodShippingTiersUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->shipping->shippingTiersUpdate(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodShippingRates(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->shipping->shippingRates(
        );

        $this->assertSame($data, $response);
    }

}
