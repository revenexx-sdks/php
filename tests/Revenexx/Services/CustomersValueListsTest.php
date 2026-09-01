<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;
use Revenexx\Enums\Tone;
use Revenexx\Enums\CustomersVocabulariesGetName;

final class CustomersValueListsTest extends TestCase {
    private $client;
    private $customersValueLists;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->customersValueLists = new CustomersValueLists($this->client);
    }

    public function testMethodCustomersAddressTypesList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customersValueLists->customersAddressTypesList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersAddressTypesCreate(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customersValueLists->customersAddressTypesCreate(
            "",
            "Shipping address"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersAddressTypesDelete(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customersValueLists->customersAddressTypesDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersAddressTypesGet(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customersValueLists->customersAddressTypesGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersAddressTypesUpdate(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customersValueLists->customersAddressTypesUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersContactEventKindsList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customersValueLists->customersContactEventKindsList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersContactEventKindsCreate(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customersValueLists->customersContactEventKindsCreate(
            "",
            "Phone call"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersContactEventKindsDelete(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customersValueLists->customersContactEventKindsDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersContactEventKindsGet(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customersValueLists->customersContactEventKindsGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersContactEventKindsUpdate(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customersValueLists->customersContactEventKindsUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersDefaults(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customersValueLists->customersDefaults(
            array()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersLifecycleStagesList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customersValueLists->customersLifecycleStagesList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersLifecycleStagesCreate(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customersValueLists->customersLifecycleStagesCreate(
            "",
            "Customer"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersLifecycleStagesDelete(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customersValueLists->customersLifecycleStagesDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersLifecycleStagesGet(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customersValueLists->customersLifecycleStagesGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersLifecycleStagesUpdate(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customersValueLists->customersLifecycleStagesUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersPaymentTermsList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customersValueLists->customersPaymentTermsList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersPaymentTermsCreate(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customersValueLists->customersPaymentTermsCreate(
            "",
            "Net 30 days"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersPaymentTermsDelete(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customersValueLists->customersPaymentTermsDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersPaymentTermsGet(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customersValueLists->customersPaymentTermsGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersPaymentTermsUpdate(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customersValueLists->customersPaymentTermsUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersVocabulariesList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customersValueLists->customersVocabulariesList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersVocabulariesGet(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customersValueLists->customersVocabulariesGet(
            CustomersVocabulariesGetName::ADDRESSTYPES()
        );

        $this->assertSame($data, $response);
    }

}
