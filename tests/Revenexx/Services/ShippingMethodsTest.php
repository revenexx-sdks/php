<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;
use Revenexx\Enums\PricingType;
use Revenexx\Enums\ShippingMethodMatrixBasis;
use Revenexx\Enums\ShippingMethodPricingType;

final class ShippingMethodsTest extends TestCase {
    private $client;
    private $shippingMethods;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->shippingMethods = new ShippingMethods($this->client);
    }

    public function testMethodShippingMethodsList(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->shippingMethods->shippingMethodsList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodShippingMethodsCreate(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->shippingMethods->shippingMethodsCreate(
            "express",
            "Express delivery"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodShippingMethodsDefaults(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->shippingMethods->shippingMethodsDefaults(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodShippingMethodsDelete(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->shippingMethods->shippingMethodsDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodShippingMethodsGet(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->shippingMethods->shippingMethodsGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodShippingMethodsUpdate(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->shippingMethods->shippingMethodsUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodShippingTiersList(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->shippingMethods->shippingTiersList(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodShippingTiersCreate(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->shippingMethods->shippingTiersCreate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodShippingTiersReplace(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->shippingMethods->shippingTiersReplace(
            "",
            array()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodShippingTiersLadder(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->shippingMethods->shippingTiersLadder(
            "",
            1.0,
            1.0,
            1.0
        );

        $this->assertSame($data, $response);
    }

    public function testMethodShippingTiersDelete(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->shippingMethods->shippingTiersDelete(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodShippingTiersGet(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->shippingMethods->shippingTiersGet(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodShippingTiersUpdate(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->shippingMethods->shippingTiersUpdate(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodShippingRates(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->shippingMethods->shippingRates(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodShippingTaxClassesUsage(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->shippingMethods->shippingTaxClassesUsage(
            "reduced"
        );

        $this->assertSame($data, $response);
    }

}
