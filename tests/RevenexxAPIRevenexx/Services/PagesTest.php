<?php

namespace RevenexxAPIRevenexx\Services;

use RevenexxAPIRevenexx\Client;
use RevenexxAPIRevenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;
use RevenexxAPIRevenexx\Enums\PageStatus;

final class PagesTest extends TestCase {
    private $client;
    private $pages;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->pages = new Pages($this->client);
    }

    public function testMethodPagesDeliveryPage(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->pages->pagesDeliveryPage(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPagesDeliveryPages(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->pages->pagesDeliveryPages(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPagesDeliveryPreview(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->pages->pagesDeliveryPreview(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPagesEditorEditStates(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->pages->pagesEditorEditStates(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPagesEditorNotificationsList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->pages->pagesEditorNotificationsList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPagesEditorNotificationsMarkAllRead(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->pages->pagesEditorNotificationsMarkAllRead(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPagesEditorNotificationsUnreadCount(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->pages->pagesEditorNotificationsUnreadCount(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPagesEditorTranslate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->pages->pagesEditorTranslate(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPagesEditorUserSettingsGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->pages->pagesEditorUserSettingsGet(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPagesEditorUserSettingsPut(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->pages->pagesEditorUserSettingsPut(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPagesEditorUsers(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->pages->pagesEditorUsers(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPagesEditorCommentsList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->pages->pagesEditorCommentsList(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPagesEditorCommentsCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->pages->pagesEditorCommentsCreate(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPagesEditorCommentsDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->pages->pagesEditorCommentsDelete(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPagesEditorCommentsUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->pages->pagesEditorCommentsUpdate(
            "",
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPagesEditorCommentsResolve(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->pages->pagesEditorCommentsResolve(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPagesEditorCommentsToggleTask(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->pages->pagesEditorCommentsToggleTask(
            "",
            "",
            1
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPagesEditorCommentsUnresolve(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->pages->pagesEditorCommentsUnresolve(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPagesEditorHistory(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->pages->pagesEditorHistory(
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

        $response = $this->pages->pagesEditorLastChanged(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPagesEditorMutationStatus(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->pages->pagesEditorMutationStatus(
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

        $response = $this->pages->pagesEditorMutate(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPagesEditorPreviewGrant(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->pages->pagesEditorPreviewGrant(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPagesEditorPublish(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->pages->pagesEditorPublish(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPagesEditorRevert(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->pages->pagesEditorRevert(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPagesEditorSchedule(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->pages->pagesEditorSchedule(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPagesEditorState(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->pages->pagesEditorState(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPagesEditorTakeOwnership(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->pages->pagesEditorTakeOwnership(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPagesEditorTemplatesCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->pages->pagesEditorTemplatesCreate(
            "",
            "",
            array()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPagesEditorUnschedule(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->pages->pagesEditorUnschedule(
            ""
        );

        $this->assertSame($data, $response);
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
            ""
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

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->pages->pagesTemplatesGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPagesTemplatesUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->pages->pagesTemplatesUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

}
