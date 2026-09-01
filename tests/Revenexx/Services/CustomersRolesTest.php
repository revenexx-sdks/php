<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;

final class CustomersRolesTest extends TestCase {
    private $client;
    private $customersRoles;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->customersRoles = new CustomersRoles($this->client);
    }

    public function testMethodCustomersRolesList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customersRoles->customersRolesList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersRolesDefaults(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customersRoles->customersRolesDefaults(
            array()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersRolesPermissionsReplace(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customersRoles->customersRolesPermissionsReplace(
            "buyer",
            array()
        );

        $this->assertSame($data, $response);
    }

}
