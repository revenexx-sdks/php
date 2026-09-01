<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;

class PagesCollaboration extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * The caller's own notifications, newest first, 20 at a time. Paged by an
     * opaque cursor rather than by offset, so new arrivals never shift a page
     * under the reader. It is also the one read in this app that writes:
     * `?markAsRead=true` flags the notifications on the page it just returned as
     * read, which is how a feed that has been looked at empties its badge without
     * a second call — leave it off and reading changes nothing.
     *
     * @param ?string $after
     * @param ?string $markAsRead
     * @throws RevenexxException
     * @return array
     */
    public function pagesEditorNotificationsList(?string $after = null, ?string $markAsRead = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/pages/editor/notifications'
        );

        $apiParams = [];

        if (!is_null($after)) {
            $apiParams['after'] = $after;
        }

        if (!is_null($markAsRead)) {
            $apiParams['markAsRead'] = $markAsRead;
        }

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Empties the badge in one call. Every unread notification of the CURRENT
     * user is flagged read — the user is the one the request's context token
     * names and there is no body with which to name another. Nothing is deleted:
     * `GET /pages/editor/notifications` still returns the same feed, just with
     * `read` set. The answer is the new unread count, so a client can set the
     * badge straight from it without a second read.
     *
     * @throws RevenexxException
     * @return array
     */
    public function pagesEditorNotificationsMarkAllRead(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/pages/editor/notifications/mark-all-read'
        );

        $apiParams = [];

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * The cheap poll behind the badge.
     *
     * @throws RevenexxException
     * @return array
     */
    public function pagesEditorNotificationsUnreadCount(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/pages/editor/notifications/unread-count'
        );

        $apiParams = [];

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * What the @mention picker is filled from. When the identity service cannot
     * be reached this degrades to the authors who have already commented on this
     * tenant's pages rather than answering an error — a mention list that is
     * short is more useful than one that is missing.
     *
     * @throws RevenexxException
     * @return array
     */
    public function pagesEditorUsers(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/pages/editor/users'
        );

        $apiParams = [];

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Every comment on the page in one flat list, oldest first, roots and replies
     * together and resolved threads included — there is no filter and no
     * paging, because the editor nests and filters them itself from `parentUuid`
     * and pins each root to its blocks with `blockUuids`. Comments hang off the
     * PAGE, not off a revision or an edit state, so publishing and reverting
     * leave them standing; that is what makes them usable as a review trail
     * across several rounds of edits.
     *
     * @param string $pageId
     * @throws RevenexxException
     * @return array
     */
    public function pagesEditorCommentsList(string $pageId): array
    {
        $apiPath = str_replace(
            ['{page_id}'],
            [$pageId],
            '/v1/pages/editor/{page_id}/comments'
        );

        $apiParams = [];
        $apiParams['page_id'] = $pageId;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * The same route writes both kinds, and which one you get is decided by the
     * body: `blockUuids` starts a new thread pinned to those blocks, `parentUuid`
     * hangs a reply under an existing root. Everyone named with an @mention in
     * the body is notified, and on a reply so is everybody already in the thread
     * — the actor never notifies themselves.
     *
     * @param string $pageId
     * @param string $body
     * @param ?array $blockUuids
     * @param ?string $parentUuid
     * @throws RevenexxException
     * @return array
     */
    public function pagesEditorCommentsCreate(string $pageId, string $body, ?array $blockUuids = null, ?string $parentUuid = null): array
    {
        $apiPath = str_replace(
            ['{page_id}'],
            [$pageId],
            '/v1/pages/editor/{page_id}/comments'
        );

        $apiParams = [];
        $apiParams['page_id'] = $pageId;
        $apiParams['body'] = $body;
        $apiParams['blockUuids'] = $blockUuids;
        $apiParams['parentUuid'] = $parentUuid;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * A hard delete, and deleting a root takes its replies with it.
     *
     * @param string $pageId
     * @param string $uuid
     * @throws RevenexxException
     * @return array
     */
    public function pagesEditorCommentsDelete(string $pageId, string $uuid): array
    {
        $apiPath = str_replace(
            ['{page_id}', '{uuid}'],
            [$pageId, $uuid],
            '/v1/pages/editor/{page_id}/comments/{uuid}'
        );

        $apiParams = [];
        $apiParams['page_id'] = $pageId;
        $apiParams['uuid'] = $uuid;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Rewrites what a comment says, and only its author may — a comment carries
     * an `author_id` and anybody else is refused with 403. Only the body moves:
     * what the comment is pinned to, whether the thread is resolved and who wrote
     * it are all fixed when it is created. Rewriting a body does NOT re-run the
     * @mention notifications, so mentioning somebody new by editing will not
     * reach them. Answers the page's whole comment list rather than the one row,
     * so a client can re-render from the response.
     *
     * @param string $pageId
     * @param string $uuid
     * @param string $body
     * @throws RevenexxException
     * @return array
     */
    public function pagesEditorCommentsUpdate(string $pageId, string $uuid, string $body): array
    {
        $apiPath = str_replace(
            ['{page_id}', '{uuid}'],
            [$pageId, $uuid],
            '/v1/pages/editor/{page_id}/comments/{uuid}'
        );

        $apiParams = [];
        $apiParams['page_id'] = $pageId;
        $apiParams['uuid'] = $uuid;
        $apiParams['body'] = $body;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PUT,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Marks a thread handled, so the editor stops surfacing it on the block it is
     * pinned to. Only a ROOT can be resolved — resolved-ness is a property of
     * the thread and not of a message in it, so pointing this at a reply is
     * refused with 400 rather than quietly resolving its parent. Nothing is
     * deleted, nobody is notified, and the thread stays in the list;
     * `.../unresolve` is the way back. Answers the page's whole comment list.
     *
     * @param string $pageId
     * @param string $uuid
     * @throws RevenexxException
     * @return array
     */
    public function pagesEditorCommentsResolve(string $pageId, string $uuid): array
    {
        $apiPath = str_replace(
            ['{page_id}', '{uuid}'],
            [$pageId, $uuid],
            '/v1/pages/editor/{page_id}/comments/{uuid}/resolve'
        );

        $apiParams = [];
        $apiParams['page_id'] = $pageId;
        $apiParams['uuid'] = $uuid;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * A comment body may carry a task list. This flips one checkbox by rewriting
     * the body's markup, and answers the single comment rather than the whole
     * list. A `taskIndex` that names no checkbox is refused and nothing is
     * written — the comment's `updated_at` is the editor's "edited" marker, so
     * a call that changes nothing must not move it.
     *
     * @param string $pageId
     * @param string $uuid
     * @param int $taskIndex
     * @throws RevenexxException
     * @return array
     */
    public function pagesEditorCommentsToggleTask(string $pageId, string $uuid, int $taskIndex): array
    {
        $apiPath = str_replace(
            ['{page_id}', '{uuid}'],
            [$pageId, $uuid],
            '/v1/pages/editor/{page_id}/comments/{uuid}/toggle-task'
        );

        $apiParams = [];
        $apiParams['page_id'] = $pageId;
        $apiParams['uuid'] = $uuid;
        $apiParams['taskIndex'] = $taskIndex;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Clears the resolved flag and puts the thread back in front of whoever is
     * editing — the mirror of `.../resolve` in every respect, including that
     * only a root can be reopened and that a reply answers 400. A thread that was
     * already open is accepted and stays open. Answers the page's whole comment
     * list.
     *
     * @param string $pageId
     * @param string $uuid
     * @throws RevenexxException
     * @return array
     */
    public function pagesEditorCommentsUnresolve(string $pageId, string $uuid): array
    {
        $apiPath = str_replace(
            ['{page_id}', '{uuid}'],
            [$pageId, $uuid],
            '/v1/pages/editor/{page_id}/comments/{uuid}/unresolve'
        );

        $apiParams = [];
        $apiParams['page_id'] = $pageId;
        $apiParams['uuid'] = $uuid;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }
}