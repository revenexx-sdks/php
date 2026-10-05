<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;
use Revenexx\Enums\Kind;
use Revenexx\Enums\LegalBasis;
use Revenexx\Enums\GoogleSignals;
use Revenexx\Enums\LegalBasisOverride;
use Revenexx\Enums\ConsentManagerVocabulariesGetName;

final class ConsentManagerRegistryTest extends TestCase {
    private $client;
    private $consentManagerRegistry;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->consentManagerRegistry = new ConsentManagerRegistry($this->client);
    }

    public function testMethodConsentManagerCatalogList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->consentManagerRegistry->consentManagerCatalogList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodConsentManagerCatalogAdopt(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->consentManagerRegistry->consentManagerCatalogAdopt(
            "etracker"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodConsentManagerCookiesList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->consentManagerRegistry->consentManagerCookiesList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodConsentManagerCookiesCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->consentManagerRegistry->consentManagerCookiesCreate(
            "_ga",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodConsentManagerCookiesDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->consentManagerRegistry->consentManagerCookiesDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodConsentManagerCookiesGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->consentManagerRegistry->consentManagerCookiesGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodConsentManagerCookiesUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->consentManagerRegistry->consentManagerCookiesUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodConsentManagerDefaultsRun(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->consentManagerRegistry->consentManagerDefaultsRun(
            array()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodConsentManagerPurposesList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->consentManagerRegistry->consentManagerPurposesList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodConsentManagerPurposesCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->consentManagerRegistry->consentManagerPurposesCreate(
            "statistics",
            LegalBasis::CONSENT(),
            array()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodConsentManagerPurposesDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->consentManagerRegistry->consentManagerPurposesDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodConsentManagerPurposesGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->consentManagerRegistry->consentManagerPurposesGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodConsentManagerPurposesUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->consentManagerRegistry->consentManagerPurposesUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodConsentManagerVendorsList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->consentManagerRegistry->consentManagerVendorsList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodConsentManagerVendorsCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->consentManagerRegistry->consentManagerVendorsCreate(
            "google-analytics",
            "Google Analytics 4"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodConsentManagerVendorsDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->consentManagerRegistry->consentManagerVendorsDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodConsentManagerVendorsGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->consentManagerRegistry->consentManagerVendorsGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodConsentManagerVendorsUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->consentManagerRegistry->consentManagerVendorsUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodConsentManagerVocabulariesList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->consentManagerRegistry->consentManagerVocabulariesList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodConsentManagerVocabulariesGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->consentManagerRegistry->consentManagerVocabulariesGet(
            ConsentManagerVocabulariesGetName::LEGALBASES()
        );

        $this->assertSame($data, $response);
    }

}
