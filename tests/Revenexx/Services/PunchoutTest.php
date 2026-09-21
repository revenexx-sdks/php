<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;
use Revenexx\Enums\Protocol;
use Revenexx\Enums\PunchoutVocabulariesGetName;

final class PunchoutTest extends TestCase {
    private $client;
    private $punchout;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->punchout = new Punchout($this->client);
    }

    public function testMethodPunchoutAccountsList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->punchout->punchoutAccountsList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPunchoutAccountsCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->punchout->punchoutAccountsCreate(
            "",
            "",
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPunchoutAccountsDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->punchout->punchoutAccountsDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPunchoutAccountsGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->punchout->punchoutAccountsGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPunchoutAccountsUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->punchout->punchoutAccountsUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPunchoutAccountsPreview(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->punchout->punchoutAccountsPreview(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPunchoutAccountsProbe(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->punchout->punchoutAccountsProbe(
            "",
            array()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPunchoutAccountsTest(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->punchout->punchoutAccountsTest(
            "",
            array()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPunchoutDefaults(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->punchout->punchoutDefaults(
            array()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPunchoutEntryRefusalsList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->punchout->punchoutEntryRefusalsList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPunchoutEntryCxml(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->punchout->punchoutEntryCxml(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPunchoutEntryIds(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->punchout->punchoutEntryIds(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPunchoutEntryOci(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->punchout->punchoutEntryOci(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPunchoutFieldMappingsList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->punchout->punchoutFieldMappingsList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPunchoutFieldMappingsCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->punchout->punchoutFieldMappingsCreate(
            "",
            "",
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPunchoutFieldMappingsExport(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->punchout->punchoutFieldMappingsExport(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPunchoutFieldMappingsImport(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->punchout->punchoutFieldMappingsImport(
            "",
            array()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPunchoutFieldMappingsDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->punchout->punchoutFieldMappingsDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPunchoutFieldMappingsGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->punchout->punchoutFieldMappingsGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPunchoutFieldMappingsUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->punchout->punchoutFieldMappingsUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPunchoutSessionsList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->punchout->punchoutSessionsList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPunchoutSessionsCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->punchout->punchoutSessionsCreate(
            "",
            "",
            "2026-01-01T12:00:00Z",
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPunchoutSessionsDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->punchout->punchoutSessionsDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPunchoutSessionsGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->punchout->punchoutSessionsGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPunchoutSessionsUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->punchout->punchoutSessionsUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPunchoutSessionsClaim(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->punchout->punchoutSessionsClaim(
            "",
            array()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPunchoutSessionsReturn(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->punchout->punchoutSessionsReturn(
            "",
            array()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPunchoutTransferItemsList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->punchout->punchoutTransferItemsList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPunchoutTransferItemsCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->punchout->punchoutTransferItemsCreate(
            "",
            1.0,
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPunchoutTransferItemsGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->punchout->punchoutTransferItemsGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPunchoutTransfersList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->punchout->punchoutTransfersList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPunchoutTransfersCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->punchout->punchoutTransfersCreate(
            "",
            "",
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPunchoutTransfersGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->punchout->punchoutTransfersGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPunchoutTransfersUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->punchout->punchoutTransfersUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPunchoutVocabulariesList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->punchout->punchoutVocabulariesList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPunchoutVocabulariesGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->punchout->punchoutVocabulariesGet(
            PunchoutVocabulariesGetName::ENTRYPROBEOUTCOME()
        );

        $this->assertSame($data, $response);
    }

}
