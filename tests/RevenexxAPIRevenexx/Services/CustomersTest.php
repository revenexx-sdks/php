<?php

namespace RevenexxAPIRevenexx\Services;

use RevenexxAPIRevenexx\Client;
use RevenexxAPIRevenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;

final class CustomersTest extends TestCase {
    private $client;
    private $customers;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->customers = new Customers($this->client);
    }

    public function testMethodCustomersAddressesList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customers->customersAddressesList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersAddressesCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customers->customersAddressesCreate(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersAddressesDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customers->customersAddressesDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersAddressesGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customers->customersAddressesGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersAddressesUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customers->customersAddressesUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersAuthLogin(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customers->customersAuthLogin(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersAuthLogout(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customers->customersAuthLogout(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersAuthMe(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customers->customersAuthMe(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersAuthRecovery(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customers->customersAuthRecovery(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersAuthRecoveryConfirm(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customers->customersAuthRecoveryConfirm(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersAuthRegister(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customers->customersAuthRegister(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersContactsList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customers->customersContactsList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersContactsCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customers->customersContactsCreate(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersContactsDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customers->customersContactsDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersContactsGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customers->customersContactsGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersContactsUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customers->customersContactsUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersOrganizationsList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customers->customersOrganizationsList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersOrganizationsCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customers->customersOrganizationsCreate(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersOrganizationsDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customers->customersOrganizationsDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersOrganizationsGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customers->customersOrganizationsGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersOrganizationsUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customers->customersOrganizationsUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

}
