<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;
use Revenexx\Enums\Trashed;
use Revenexx\Enums\Channels;
use Revenexx\Enums\MarketingConsentsVocabulariesGetName;

final class MarketingConsentsTypesTest extends TestCase {
    private $client;
    private $marketingConsentsTypes;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->marketingConsentsTypes = new MarketingConsentsTypes($this->client);
    }

    public function testMethodMarketingConsentsConsentTextsList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->marketingConsentsTypes->marketingConsentsConsentTextsList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMarketingConsentsConsentTextsCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->marketingConsentsTypes->marketingConsentsConsentTextsCreate(
            "de",
            "",
            "Ja, ich möchte den Newsletter mit Neuheiten und Aktionen erhalten. Abmeldung jederzeit über den Link in jeder Mail."
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMarketingConsentsConsentTextsEmptyTrash(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->marketingConsentsTypes->marketingConsentsConsentTextsEmptyTrash(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMarketingConsentsConsentTextsPurge(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->marketingConsentsTypes->marketingConsentsConsentTextsPurge(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMarketingConsentsConsentTextsDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->marketingConsentsTypes->marketingConsentsConsentTextsDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMarketingConsentsConsentTextsGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->marketingConsentsTypes->marketingConsentsConsentTextsGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMarketingConsentsConsentTextsUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->marketingConsentsTypes->marketingConsentsConsentTextsUpdate(
            "",
            "Ja, ich möchte den Newsletter mit Neuheiten und Aktionen erhalten. Abmeldung jederzeit über den Link in jeder Mail."
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMarketingConsentsConsentTextsPublish(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->marketingConsentsTypes->marketingConsentsConsentTextsPublish(
            "",
            array()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMarketingConsentsConsentTextsRestore(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->marketingConsentsTypes->marketingConsentsConsentTextsRestore(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMarketingConsentsSubscriptionTypesList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->marketingConsentsTypes->marketingConsentsSubscriptionTypesList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMarketingConsentsSubscriptionTypesCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->marketingConsentsTypes->marketingConsentsSubscriptionTypesCreate(
            "newsletter",
            array()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMarketingConsentsSubscriptionTypesEmptyTrash(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->marketingConsentsTypes->marketingConsentsSubscriptionTypesEmptyTrash(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMarketingConsentsSubscriptionTypesPurge(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->marketingConsentsTypes->marketingConsentsSubscriptionTypesPurge(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMarketingConsentsSubscriptionTypesDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->marketingConsentsTypes->marketingConsentsSubscriptionTypesDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMarketingConsentsSubscriptionTypesGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->marketingConsentsTypes->marketingConsentsSubscriptionTypesGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMarketingConsentsSubscriptionTypesUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->marketingConsentsTypes->marketingConsentsSubscriptionTypesUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMarketingConsentsSubscriptionTypesArchive(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->marketingConsentsTypes->marketingConsentsSubscriptionTypesArchive(
            "",
            array()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMarketingConsentsSubscriptionTypesRestore(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->marketingConsentsTypes->marketingConsentsSubscriptionTypesRestore(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMarketingConsentsSubscriptionTypesUnarchive(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->marketingConsentsTypes->marketingConsentsSubscriptionTypesUnarchive(
            "",
            array()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMarketingConsentsVocabulariesList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->marketingConsentsTypes->marketingConsentsVocabulariesList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMarketingConsentsVocabulariesGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->marketingConsentsTypes->marketingConsentsVocabulariesGet(
            MarketingConsentsVocabulariesGetName::CHANNELS()
        );

        $this->assertSame($data, $response);
    }

}
