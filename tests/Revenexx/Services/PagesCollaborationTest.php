<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;

final class PagesCollaborationTest extends TestCase {
    private $client;
    private $pagesCollaboration;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->pagesCollaboration = new PagesCollaboration($this->client);
    }

    public function testMethodPagesEditorNotificationsList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->pagesCollaboration->pagesEditorNotificationsList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPagesEditorNotificationsMarkAllRead(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->pagesCollaboration->pagesEditorNotificationsMarkAllRead(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPagesEditorNotificationsUnreadCount(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->pagesCollaboration->pagesEditorNotificationsUnreadCount(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPagesEditorUsers(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->pagesCollaboration->pagesEditorUsers(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPagesEditorCommentsList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->pagesCollaboration->pagesEditorCommentsList(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPagesEditorCommentsCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->pagesCollaboration->pagesEditorCommentsCreate(
            "",
            "<p>Please shorten this headline.</p>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPagesEditorCommentsDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->pagesCollaboration->pagesEditorCommentsDelete(
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

        $response = $this->pagesCollaboration->pagesEditorCommentsUpdate(
            "",
            "",
            "<p>Please shorten this headline.</p>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPagesEditorCommentsResolve(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->pagesCollaboration->pagesEditorCommentsResolve(
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

        $response = $this->pagesCollaboration->pagesEditorCommentsToggleTask(
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

        $response = $this->pagesCollaboration->pagesEditorCommentsUnresolve(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

}
