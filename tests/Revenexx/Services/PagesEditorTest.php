<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;
use Revenexx\Enums\PageEditStateStatus;

final class PagesEditorTest extends TestCase {
    private $client;
    private $pagesEditor;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->pagesEditor = new PagesEditor($this->client);
    }

    public function testMethodPagesEditorEditStates(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->pagesEditor->pagesEditorEditStates(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPagesEditorTranslate(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->pagesEditor->pagesEditorTranslate(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPagesEditorUserSettingsGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->pagesEditor->pagesEditorUserSettingsGet(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPagesEditorUserSettingsPut(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->pagesEditor->pagesEditorUserSettingsPut(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPagesEditorHistory(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->pagesEditor->pagesEditorHistory(
            "",
            1
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPagesEditorLastChanged(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->pagesEditor->pagesEditorLastChanged(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPagesEditorMutationStatus(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->pagesEditor->pagesEditorMutationStatus(
            "",
            true,
            1
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPagesEditorMutate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->pagesEditor->pagesEditorMutate(
            "",
            "add"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPagesEditorPreviewGrant(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->pagesEditor->pagesEditorPreviewGrant(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPagesEditorPublish(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->pagesEditor->pagesEditorPublish(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPagesEditorRevert(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->pagesEditor->pagesEditorRevert(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPagesEditorSchedule(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->pagesEditor->pagesEditorSchedule(
            "",
            "2026-01-01T12:00:00Z"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPagesEditorState(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->pagesEditor->pagesEditorState(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPagesEditorTakeOwnership(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->pagesEditor->pagesEditorTakeOwnership(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPagesEditorTemplatesCreate(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->pagesEditor->pagesEditorTemplatesCreate(
            "",
            "Hero with two teasers",
            array()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPagesEditorUnschedule(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->pagesEditor->pagesEditorUnschedule(
            ""
        );

        $this->assertSame($data, $response);
    }

}
