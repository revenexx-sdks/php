<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;
use Revenexx\Enums\Status;
use Revenexx\Enums\RegistrationStatus;
use Revenexx\Enums\CustomersContactsCreateRegistrationStatus;
use Revenexx\Enums\ContactStatus;
use Revenexx\Enums\ContactActivityKind;

final class CustomersContactsTest extends TestCase {
    private $client;
    private $customersContacts;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->customersContacts = new CustomersContacts($this->client);
    }

    public function testMethodCustomersContactEventsList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customersContacts->customersContactEventsList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersContactEventsGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customersContacts->customersContactEventsGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersContactsList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customersContacts->customersContactsList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersContactsCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customersContacts->customersContactsCreate(
            "einkauf@example.com"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersContactsEventsCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customersContacts->customersContactsEventsCreate(
            "",
            "Called about the annual requirement"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersContactsInvite(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customersContacts->customersContactsInvite(
            "",
            "https://shop.example.com/anmelden"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersContactsPermissions(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customersContacts->customersContactsPermissions(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersRegistrationsApprove(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customersContacts->customersRegistrationsApprove(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersRegistrationsReject(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customersContacts->customersRegistrationsReject(
            "",
            "Could not be verified as a commercial buyer."
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersContactsDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customersContacts->customersContactsDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersContactsGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customersContacts->customersContactsGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersContactsUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customersContacts->customersContactsUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersOrganizationsEventsCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customersContacts->customersOrganizationsEventsCreate(
            "",
            "",
            "Called about the annual requirement"
        );

        $this->assertSame($data, $response);
    }

}
