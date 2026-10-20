<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;
use Revenexx\Enums\LeadSource;

final class CustomersLeadsTest extends TestCase {
    private $client;
    private $customersLeads;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->customersLeads = new CustomersLeads($this->client);
    }

    public function testMethodCustomersConsentMirrorRun(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customersLeads->customersConsentMirrorRun(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersContactsHandover(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customersLeads->customersContactsHandover(
            "",
            "AD-07"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersContactsLifecycle(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customersLeads->customersContactsLifecycle(
            "",
            "mql"
        );

        $this->assertSame($data, $response);
    }

}
