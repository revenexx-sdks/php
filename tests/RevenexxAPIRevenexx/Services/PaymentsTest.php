<?php

namespace RevenexxAPIRevenexx\Services;

use RevenexxAPIRevenexx\Client;
use RevenexxAPIRevenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;

final class PaymentsTest extends TestCase {
    private $client;
    private $payments;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->payments = new Payments($this->client);
    }

    public function testMethodPaymentsList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->payments->paymentsList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPaymentsCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->payments->paymentsCreate(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPaymentsMethodsList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->payments->paymentsMethodsList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPaymentsMethodsCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->payments->paymentsMethodsCreate(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPaymentsMethodsDefaults(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->payments->paymentsMethodsDefaults(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPaymentsMethodsEligible(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->payments->paymentsMethodsEligible(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPaymentsMethodsDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->payments->paymentsMethodsDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPaymentsMethodsGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->payments->paymentsMethodsGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPaymentsMethodsUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->payments->paymentsMethodsUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPaymentsProvidersList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->payments->paymentsProvidersList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPaymentsProvidersCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->payments->paymentsProvidersCreate(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPaymentsProvidersCatalog(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->payments->paymentsProvidersCatalog(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPaymentsProvidersDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->payments->paymentsProvidersDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPaymentsProvidersGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->payments->paymentsProvidersGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPaymentsProvidersUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->payments->paymentsProvidersUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPaymentsGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->payments->paymentsGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPaymentsCancel(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->payments->paymentsCancel(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPaymentsCapture(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->payments->paymentsCapture(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPaymentsConfirm(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->payments->paymentsConfirm(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPaymentsRefund(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->payments->paymentsRefund(
            ""
        );

        $this->assertSame($data, $response);
    }

}
