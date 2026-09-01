<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;
use Revenexx\Enums\PaymentStatus;
use Revenexx\Enums\PaymentMethodKind;
use Revenexx\Enums\PaymentDunningStage;
use Revenexx\Enums\PaymentsVocabulariesGetName;

final class PaymentsLedgerTest extends TestCase {
    private $client;
    private $paymentsLedger;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->paymentsLedger = new PaymentsLedger($this->client);
    }

    public function testMethodPaymentsList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->paymentsLedger->paymentsList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPaymentsCreate(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->paymentsLedger->paymentsCreate(
            1.0,
            "invoice"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPaymentsDunningScan(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->paymentsLedger->paymentsDunningScan(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPaymentsErrorsRedact(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->paymentsLedger->paymentsErrorsRedact(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPaymentsOrdersCapture(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->paymentsLedger->paymentsOrdersCapture(
            "ORD-10042"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPaymentsVocabulariesList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->paymentsLedger->paymentsVocabulariesList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPaymentsVocabulariesGet(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->paymentsLedger->paymentsVocabulariesGet(
            PaymentsVocabulariesGetName::DUNNINGSTAGES()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPaymentsWebhooksIngest(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->paymentsLedger->paymentsWebhooksIngest(
            "stripe"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPaymentsGet(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->paymentsLedger->paymentsGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPaymentsCancel(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->paymentsLedger->paymentsCancel(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPaymentsCapture(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->paymentsLedger->paymentsCapture(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPaymentsConfirm(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->paymentsLedger->paymentsConfirm(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPaymentsRefund(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->paymentsLedger->paymentsRefund(
            ""
        );

        $this->assertSame($data, $response);
    }

}
