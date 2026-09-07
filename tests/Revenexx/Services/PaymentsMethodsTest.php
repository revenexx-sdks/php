<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;
use Revenexx\Enums\PaymentMethodKind;
use Revenexx\Enums\PaymentFeeType;

final class PaymentsMethodsTest extends TestCase {
    private $client;
    private $paymentsMethods;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->paymentsMethods = new PaymentsMethods($this->client);
    }

    public function testMethodPaymentsMethodsList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->paymentsMethods->paymentsMethodsList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPaymentsMethodsCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->paymentsMethods->paymentsMethodsCreate(
            "invoice",
            "Invoice"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPaymentsMethodsDefaults(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->paymentsMethods->paymentsMethodsDefaults(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPaymentsMethodsEligible(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->paymentsMethods->paymentsMethodsEligible(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPaymentsMethodsDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->paymentsMethods->paymentsMethodsDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPaymentsMethodsGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->paymentsMethods->paymentsMethodsGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPaymentsMethodsUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->paymentsMethods->paymentsMethodsUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

}
