<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;
use Revenexx\Enums\Country;
use Revenexx\Enums\DeliveryPointType;
use Revenexx\Enums\ValidationStatus;
use Revenexx\Enums\CustomersOrganizationsListStatus;
use Revenexx\Enums\CreditLimitMode;
use Revenexx\Enums\ShippingAdvice;
use Revenexx\Enums\Trashed;
use Revenexx\Enums\OrganizationStatus;
use Revenexx\Enums\CustomersOrganizationsBlockReason;
use Revenexx\Enums\CustomersOrganizationsBlockKind;
use Revenexx\Enums\CustomersOrganizationsChangeCreditReason;

final class CustomersOrganizationsTest extends TestCase {
    private $client;
    private $customersOrganizations;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->customersOrganizations = new CustomersOrganizations($this->client);
    }

    public function testMethodCustomersAddressFormatList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customersOrganizations->customersAddressFormatList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersAddressFormatGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customersOrganizations->customersAddressFormatGet(
            Country::AC()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersAddressesList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customersOrganizations->customersAddressesList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersAddressesCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customersOrganizations->customersAddressesCreate(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersAddressesDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customersOrganizations->customersAddressesDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersAddressesGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customersOrganizations->customersAddressesGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersAddressesUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customersOrganizations->customersAddressesUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersContactPointsList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customersOrganizations->customersContactPointsList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersContactPointsCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customersOrganizations->customersContactPointsCreate(
            "invoice",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersContactPointsDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customersOrganizations->customersContactPointsDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersContactPointsGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customersOrganizations->customersContactPointsGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersContactPointsUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customersOrganizations->customersContactPointsUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersDerivedRefresh(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customersOrganizations->customersDerivedRefresh(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersOrganizationMetricsList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customersOrganizations->customersOrganizationMetricsList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersOrganizationMetricsFreshness(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customersOrganizations->customersOrganizationMetricsFreshness(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersOrganizationMetricsRefresh(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customersOrganizations->customersOrganizationMetricsRefresh(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersOrganizationMetricsGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customersOrganizations->customersOrganizationMetricsGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersOrganizationsList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customersOrganizations->customersOrganizationsList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersOrganizationsCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customersOrganizations->customersOrganizationsCreate(
            "Beispiel Industrietechnik GmbH"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersOrganizationsOnboard(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customersOrganizations->customersOrganizationsOnboard(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersOrganizationsTrashEmpty(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customersOrganizations->customersOrganizationsTrashEmpty(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersOrganizationsDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customersOrganizations->customersOrganizationsDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersOrganizationsGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customersOrganizations->customersOrganizationsGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersOrganizationsUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customersOrganizations->customersOrganizationsUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersOrganizationsBlock(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customersOrganizations->customersOrganizationsBlock(
            "",
            CustomersOrganizationsBlockReason::PAYMENTOVERDUE()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersOrganizationsCare(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customersOrganizations->customersOrganizationsCare(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersOrganizationsChangeCredit(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customersOrganizations->customersOrganizationsChangeCredit(
            "",
            CustomersOrganizationsChangeCreditReason::RATINGCHANGED()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersOrganizationsRestore(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customersOrganizations->customersOrganizationsRestore(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersOrganizationsSetAccountManager(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customersOrganizations->customersOrganizationsSetAccountManager(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersOrganizationsSetPrimaryContact(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customersOrganizations->customersOrganizationsSetPrimaryContact(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersOrganizationsUnblockDelivery(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customersOrganizations->customersOrganizationsUnblockDelivery(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersOrganizationsUnblockOrder(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customersOrganizations->customersOrganizationsUnblockOrder(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

}
