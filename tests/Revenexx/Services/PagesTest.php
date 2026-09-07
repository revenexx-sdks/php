<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;
use Revenexx\Enums\PageStatus;
use Revenexx\Enums\PagesVocabulariesGetName;

final class PagesTest extends TestCase {
    private $client;
    private $pages;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->pages = new Pages($this->client);
    }

    public function testMethodPagesLibraryList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->pages->pagesLibraryList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPagesLibraryDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->pages->pagesLibraryDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPagesLibraryGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->pages->pagesLibraryGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPagesLibraryUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->pages->pagesLibraryUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPagesMenusList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->pages->pagesMenusList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPagesMenusUpsert(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->pages->pagesMenusUpsert(
            "Main navigation",
            "main"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPagesMenusDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->pages->pagesMenusDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPagesMenusGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->pages->pagesMenusGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPagesMenusUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->pages->pagesMenusUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPagesPagesList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->pages->pagesPagesList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPagesPagesCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->pages->pagesPagesCreate(
            "About us"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPagesPagesDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->pages->pagesPagesDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPagesPagesGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->pages->pagesPagesGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPagesPagesUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->pages->pagesPagesUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPagesPagesRevisions(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->pages->pagesPagesRevisions(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPagesSeed(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->pages->pagesSeed(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPagesTemplatesList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->pages->pagesTemplatesList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPagesTemplatesDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->pages->pagesTemplatesDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPagesTemplatesGet(): void {

        $data = array(
            "body_html" => "",
            "body_text" => "",
            "channel" => "",
            "content_sid" => "",
            "created_at" => "2026-01-01T12:00:00Z",
            "design" => array(),
            "enabled" => true,
            "has_unpublished_changes" => "",
            "id" => "",
            "is_published" => "",
            "key" => "",
            "layout_id" => "",
            "lifecycle_state" => "",
            "locale" => "",
            "markets" => array(),
            "message_class" => "",
            "published_version_id" => "",
            "source_library_key" => "",
            "subject" => "",
            "tenant_id" => "",
            "test_mode" => true,
            "title" => "",
            "updated_at" => "2026-01-01T12:00:00Z",
            "uses_raw_html" => "",
            "valid_from" => "2026-01-01T12:00:00Z",
            "valid_until" => "2026-01-01T12:00:00Z",
            "variable_defaults" => array(),
            "variables" => array(),
            "whatsapp_category" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->pages->pagesTemplatesGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPagesTemplatesUpdate(): void {

        $data = array(
            "body_html" => "",
            "body_text" => "",
            "channel" => "",
            "content_sid" => "",
            "created_at" => "2026-01-01T12:00:00Z",
            "design" => array(),
            "enabled" => true,
            "has_unpublished_changes" => "",
            "id" => "",
            "is_published" => "",
            "key" => "",
            "layout_id" => "",
            "lifecycle_state" => "",
            "locale" => "",
            "markets" => array(),
            "message_class" => "",
            "published_version_id" => "",
            "source_library_key" => "",
            "subject" => "",
            "tenant_id" => "",
            "test_mode" => true,
            "title" => "",
            "updated_at" => "2026-01-01T12:00:00Z",
            "uses_raw_html" => "",
            "valid_from" => "2026-01-01T12:00:00Z",
            "valid_until" => "2026-01-01T12:00:00Z",
            "variable_defaults" => array(),
            "variables" => array(),
            "whatsapp_category" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->pages->pagesTemplatesUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPagesVocabulariesList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->pages->pagesVocabulariesList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPagesVocabulariesGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->pages->pagesVocabulariesGet(
            PagesVocabulariesGetName::EDITSTATESTATUSES()
        );

        $this->assertSame($data, $response);
    }

}
