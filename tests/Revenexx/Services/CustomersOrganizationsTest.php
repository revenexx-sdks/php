<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;
use Revenexx\Enums\CustomersOrganizationsListStatus;
use Revenexx\Enums\OrganizationStatus;

final class CustomersOrganizationsTest extends TestCase {
    private $client;
    private $customersOrganizations;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->customersOrganizations = new CustomersOrganizations($this->client);
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
            "Berlin",
            "DE",
            "Musterstraße 12",
            "10115"
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

}
