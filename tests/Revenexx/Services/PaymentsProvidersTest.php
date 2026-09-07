<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;

final class PaymentsProvidersTest extends TestCase {
    private $client;
    private $paymentsProviders;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->paymentsProviders = new PaymentsProviders($this->client);
    }

    public function testMethodPaymentsLogosGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->paymentsProviders->paymentsLogosGet(
            "stripe"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPaymentsProvidersList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->paymentsProviders->paymentsProvidersList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPaymentsProvidersCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->paymentsProviders->paymentsProvidersCreate(
            "stripe"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPaymentsProvidersCatalog(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->paymentsProviders->paymentsProvidersCatalog(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPaymentsProvidersDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->paymentsProviders->paymentsProvidersDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPaymentsProvidersGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->paymentsProviders->paymentsProvidersGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPaymentsProvidersUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->paymentsProviders->paymentsProvidersUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

}
