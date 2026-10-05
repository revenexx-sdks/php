<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;
use Revenexx\Enums\DocumentsDocumentsListSource;
use Revenexx\Enums\Visibility;
use Revenexx\Enums\DocumentSource;
use Revenexx\Enums\DocumentVisibility;

final class DocumentsRegisterTest extends TestCase {
    private $client;
    private $documentsRegister;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->documentsRegister = new DocumentsRegister($this->client);
    }

    public function testMethodDocumentsDocumentsList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->documentsRegister->documentsDocumentsList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodDocumentsDocumentsCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->documentsRegister->documentsDocumentsCreate(
            "",
            "order",
            "RE-2026-004711.pdf",
            "invoice"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodDocumentsDocumentsDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->documentsRegister->documentsDocumentsDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodDocumentsDocumentsGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->documentsRegister->documentsDocumentsGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodDocumentsDocumentsUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->documentsRegister->documentsDocumentsUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodDocumentsDocumentsLink(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->documentsRegister->documentsDocumentsLink(
            ""
        );

        $this->assertSame($data, $response);
    }

}
