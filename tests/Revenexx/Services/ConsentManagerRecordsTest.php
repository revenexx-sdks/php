<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;
use Revenexx\Enums\Action;
use Revenexx\Enums\Surface;

final class ConsentManagerRecordsTest extends TestCase {
    private $client;
    private $consentManagerRecords;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->consentManagerRecords = new ConsentManagerRecords($this->client);
    }

    public function testMethodConsentManagerRecordsList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->consentManagerRecords->consentManagerRecordsList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodConsentManagerRecordsCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->consentManagerRecords->consentManagerRecordsCreate(
            Action::ACCEPTALL(),
            "",
            "de",
            "",
            Surface::FIRSTLAYER()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodConsentManagerRecordsHistory(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->consentManagerRecords->consentManagerRecordsHistory(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodConsentManagerRecordsExport(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->consentManagerRecords->consentManagerRecordsExport(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodConsentManagerRecordsPrune(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->consentManagerRecords->consentManagerRecordsPrune(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodConsentManagerRecordsSummary(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->consentManagerRecords->consentManagerRecordsSummary(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodConsentManagerRecordsUnlinkContact(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->consentManagerRecords->consentManagerRecordsUnlinkContact(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodConsentManagerRecordsGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->consentManagerRecords->consentManagerRecordsGet(
            ""
        );

        $this->assertSame($data, $response);
    }

}
