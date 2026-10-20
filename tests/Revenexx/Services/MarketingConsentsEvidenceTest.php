<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;
use Revenexx\Enums\Channel;
use Revenexx\Enums\MarketingConsentsConsentEventsListKind;
use Revenexx\Enums\MarketingConsentsConsentEventsListSource;
use Revenexx\Enums\MarketingConsentsConsentEventsListLegalBasis;
use Revenexx\Enums\MarketingConsentsImportsListLegalBasis;
use Revenexx\Enums\State;

final class MarketingConsentsEvidenceTest extends TestCase {
    private $client;
    private $marketingConsentsEvidence;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->marketingConsentsEvidence = new MarketingConsentsEvidence($this->client);
    }

    public function testMethodMarketingConsentsConsentEventsList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->marketingConsentsEvidence->marketingConsentsConsentEventsList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMarketingConsentsConsentEventsGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->marketingConsentsEvidence->marketingConsentsConsentEventsGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMarketingConsentsContactsGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->marketingConsentsEvidence->marketingConsentsContactsGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMarketingConsentsContactsErase(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->marketingConsentsEvidence->marketingConsentsContactsErase(
            "",
            array()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMarketingConsentsContactsExport(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->marketingConsentsEvidence->marketingConsentsContactsExport(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMarketingConsentsImportsList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->marketingConsentsEvidence->marketingConsentsImportsList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMarketingConsentsImportsCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->marketingConsentsEvidence->marketingConsentsImportsCreate(
            MarketingConsentsImportsListLegalBasis::CONSENTSINGLE(),
            "Altsystem Shopware, Double-Opt-in-Log 2019–2026",
            array(),
            "newsletter"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMarketingConsentsImportsGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->marketingConsentsEvidence->marketingConsentsImportsGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMarketingConsentsIpRetentionRun(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->marketingConsentsEvidence->marketingConsentsIpRetentionRun(
            array()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMarketingConsentsLapseRun(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->marketingConsentsEvidence->marketingConsentsLapseRun(
            array()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMarketingConsentsSweepRun(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->marketingConsentsEvidence->marketingConsentsSweepRun(
            array()
        );

        $this->assertSame($data, $response);
    }

}
