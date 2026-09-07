<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;
use Revenexx\Enums\FormStatus;
use Revenexx\Enums\FormSubmissionStatus;
use Revenexx\Enums\FormsSubmissionsPruneStatus;
use Revenexx\Enums\FormsVocabulariesGetName;

final class FormsTest extends TestCase {
    private $client;
    private $forms;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->forms = new Forms($this->client);
    }

    public function testMethodFormsList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->forms->formsList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodFormsCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->forms->formsCreate(
            "Price request",
            "price-request"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodFormsDefaults(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->forms->formsDefaults(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodFormsSubmissionsList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->forms->formsSubmissionsList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodFormsSubmissionsCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->forms->formsSubmissionsCreate(
            array(),
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodFormsSubmissionsPrune(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->forms->formsSubmissionsPrune(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodFormsSubmissionsDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->forms->formsSubmissionsDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodFormsSubmissionsGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->forms->formsSubmissionsGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodFormsSubmissionsUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->forms->formsSubmissionsUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodFormsVocabulariesList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->forms->formsVocabulariesList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodFormsVocabulariesGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->forms->formsVocabulariesGet(
            FormsVocabulariesGetName::FORMSTATUSES()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodFormsDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->forms->formsDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodFormsGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->forms->formsGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodFormsUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->forms->formsUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

}
