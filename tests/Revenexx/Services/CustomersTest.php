<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;

final class CustomersTest extends TestCase {
    private $client;
    private $customers;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->customers = new Customers($this->client);
    }

    public function testMethodCustomersAuthLogin(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customers->customersAuthLogin(
            "einkauf@example.com",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersAuthLogout(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customers->customersAuthLogout(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersAuthMagicLink(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customers->customersAuthMagicLink(
            "einkauf@example.com",
            "https://example.com"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersAuthMagicLinkConfirm(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customers->customersAuthMagicLinkConfirm(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersAuthMe(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customers->customersAuthMe(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersAuthMfaChallenge(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customers->customersAuthMfaChallenge(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersAuthMfaChallengeConfirm(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customers->customersAuthMfaChallengeConfirm(
            "",
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersAuthOtp(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customers->customersAuthOtp(
            "einkauf@example.com"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersAuthOtpConfirm(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customers->customersAuthOtpConfirm(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersAuthRecovery(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customers->customersAuthRecovery(
            "einkauf@example.com",
            "https://example.com"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersAuthRecoveryConfirm(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customers->customersAuthRecoveryConfirm(
            "",
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersAuthRegister(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customers->customersAuthRegister(
            "einkauf@example.com",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersAuthVerification(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customers->customersAuthVerification(
            "https://example.com",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersAuthVerificationConfirm(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customers->customersAuthVerificationConfirm(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersPrincipalResolve(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customers->customersPrincipalResolve(
            ""
        );

        $this->assertSame($data, $response);
    }

}
