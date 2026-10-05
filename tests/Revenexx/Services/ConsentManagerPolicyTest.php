<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;
use Revenexx\Enums\Layout;

final class ConsentManagerPolicyTest extends TestCase {
    private $client;
    private $consentManagerPolicy;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->consentManagerPolicy = new ConsentManagerPolicy($this->client);
    }

    public function testMethodConsentManagerBannerGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->consentManagerPolicy->consentManagerBannerGet(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodConsentManagerBannerUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->consentManagerPolicy->consentManagerBannerUpdate(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodConsentManagerPolicyVersionsList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->consentManagerPolicy->consentManagerPolicyVersionsList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodConsentManagerPolicyVersionsGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->consentManagerPolicy->consentManagerPolicyVersionsGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodConsentManagerPolicyPreview(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->consentManagerPolicy->consentManagerPolicyPreview(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodConsentManagerPolicyPublish(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->consentManagerPolicy->consentManagerPolicyPublish(
        );

        $this->assertSame($data, $response);
    }

}
