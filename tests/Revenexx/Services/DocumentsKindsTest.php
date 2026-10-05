<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;
use Revenexx\Enums\Tone;
use Revenexx\Enums\DocumentKindTone;
use Revenexx\Enums\DocumentVocabularyPathName;

final class DocumentsKindsTest extends TestCase {
    private $client;
    private $documentsKinds;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->documentsKinds = new DocumentsKinds($this->client);
    }

    public function testMethodDocumentsKindsList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->documentsKinds->documentsKindsList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodDocumentsKindsCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->documentsKinds->documentsKindsCreate(
            "invoice",
            "Invoice"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodDocumentsKindsDefaults(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->documentsKinds->documentsKindsDefaults(
            array()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodDocumentsKindsDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->documentsKinds->documentsKindsDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodDocumentsKindsGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->documentsKinds->documentsKindsGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodDocumentsKindsUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->documentsKinds->documentsKindsUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodDocumentsKindsMakeDefault(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->documentsKinds->documentsKindsMakeDefault(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodDocumentsVocabulariesList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->documentsKinds->documentsVocabulariesList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodDocumentsVocabulariesGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->documentsKinds->documentsVocabulariesGet(
            DocumentVocabularyPathName::KINDS()
        );

        $this->assertSame($data, $response);
    }

}
