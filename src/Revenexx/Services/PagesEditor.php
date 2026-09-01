<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;
use Revenexx\Enums\PageEditStateStatus;

class PagesEditor extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * The drafts overview — the "what is unpublished right now" list, across
     * every page: who holds it, since when, and whether it is parked for a date.
     * Always newest-first — this route does not read `order`. An edit state
     * whose page has been deleted is dropped from `items` but still counted in
     * `total`.
     *
     * @param ?PageEditStateStatus $status
     * @param ?int $limit
     * @param ?int $offset
     * @throws RevenexxException
     * @return array
     */
    public function pagesEditorEditStates(?PageEditStateStatus $status = null, ?int $limit = null, ?int $offset = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/pages/editor/edit-states'
        );

        $apiParams = [];

        if (!is_null($status)) {
            $apiParams['status'] = $status;
        }

        if (!is_null($limit)) {
            $apiParams['limit'] = $limit;
        }

        if (!is_null($offset)) {
            $apiParams['offset'] = $offset;
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
     * The translation is the tenant's provider's, not this app's, and a tenant
     * that has configured none gets no translation at all. The endpoint comes
     * from the tenant setting `translate_endpoint` (PAGES_TRANSLATE_ENDPOINT
     * remains a fallback). The bearer token does NOT: the gateway masks every
     * setting flagged `sensitive`, so a key stored as one could never be read
     * back — it stays the PAGES_TRANSLATE_KEY function secret. This app does
     * not translate anything itself; it forwards `items` and hands the answer
     * back.
     *
     * @param ?array $items
     * @throws RevenexxException
     * @return array
     */
    public function pagesEditorTranslate(?array $items = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/pages/editor/translate'
        );

        $apiParams = [];
        $apiParams['items'] = $items;

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
     * Per-user editor preferences — one row per user, scoped to this app. Not
     * tenant configuration: nothing here changes what the API does, only how one
     * person's editor looks.
     *
     * @throws RevenexxException
     * @return array
     */
    public function pagesEditorUserSettingsGet(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/pages/editor/user-settings'
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
     * Replaces the caller's preferences wholesale — this is not a merge, so
     * send the whole bag.
     *
     * @param ?array $settings
     * @throws RevenexxException
     * @return array
     */
    public function pagesEditorUserSettingsPut(?array $settings = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/pages/editor/user-settings'
        );

        $apiParams = [];
        $apiParams['settings'] = $settings;

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
     * Undo and redo. The pointer is the edit state's `current_index`, the
     * position in the mutation log the page is materialized at, and this route is
     * the only thing that moves it — `GET …/state?index=` looks at another
     * position without going there. The log itself is never rewritten — only
     * the pointer moves — so redo stays available until the next change is
     * appended.
     *
     * @param string $pageId
     * @param int $index
     * @param ?string $langcode
     * @throws RevenexxException
     * @return array
     */
    public function pagesEditorHistory(string $pageId, int $index, ?string $langcode = null): array
    {
        $apiPath = str_replace(
            ['{page_id}'],
            [$pageId],
            '/v1/pages/editor/{page_id}/history'
        );

        $apiParams = [];
        $apiParams['page_id'] = $pageId;
        $apiParams['index'] = $index;
        $apiParams['langcode'] = $langcode;

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
     * The cheap poll behind "someone else is editing this page": one integer, the
     * moment the open edit state last moved, in epoch seconds rather than as a
     * timestamp so a comparison is a subtraction. Compare it with the `updatedAt`
     * you last saw and re-fetch the state only when it moved.
     *
     * @param string $pageId
     * @throws RevenexxException
     * @return array
     */
    public function pagesEditorLastChanged(string $pageId): array
    {
        $apiPath = str_replace(
            ['{page_id}'],
            [$pageId],
            '/v1/pages/editor/{page_id}/last-changed'
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
     * Take one change out of the replay without deleting it — "what would the
     * page look like without this edit". The entry stays in the history and can
     * be switched back on.
     *
     * @param string $pageId
     * @param bool $enabled
     * @param int $index
     * @param ?string $langcode
     * @throws RevenexxException
     * @return array
     */
    public function pagesEditorMutationStatus(string $pageId, bool $enabled, int $index, ?string $langcode = null): array
    {
        $apiPath = str_replace(
            ['{page_id}'],
            [$pageId],
            '/v1/pages/editor/{page_id}/mutation-status'
        );

        $apiParams = [];
        $apiParams['page_id'] = $pageId;
        $apiParams['enabled'] = $enabled;
        $apiParams['index'] = $index;
        $apiParams['langcode'] = $langcode;

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
     * The one way page CONTENT changes. Each call appends one entry to the
     * append-only log and answers the whole re-materialized state, so a client
     * never re-fetches. A page nobody has opened yet needs no separate call to
     * open it: the first mutation creates the edit state and takes ownership of
     * it, and every later one asks for that ownership, so a second person editing
     * the same page is refused until they take it over. Appending while the
     * pointer sits mid-history discards the redo branch, exactly as an editor
     * expects.
     *
     * @param string $pageId
     * @param string $plugin
     * @param ?string $langcode
     * @param ?array $payload
     * @throws RevenexxException
     * @return array
     */
    public function pagesEditorMutate(string $pageId, string $plugin, ?string $langcode = null, ?array $payload = null): array
    {
        $apiPath = str_replace(
            ['{page_id}'],
            [$pageId],
            '/v1/pages/editor/{page_id}/mutations'
        );

        $apiParams = [];
        $apiParams['page_id'] = $pageId;
        $apiParams['plugin'] = $plugin;
        $apiParams['langcode'] = $langcode;
        $apiParams['payload'] = $payload;

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
     * Mints a link that shows this page's current edit state — the UNPUBLISHED
     * one — to somebody without an editor account. The token is the whole
     * credential — anyone holding it sees the page — so it expires, and a new
     * one is cheap.
     *
     * @param string $pageId
     * @param ?int $ttlHours
     * @throws RevenexxException
     * @return array
     */
    public function pagesEditorPreviewGrant(string $pageId, ?int $ttlHours = null): array
    {
        $apiPath = str_replace(
            ['{page_id}'],
            [$pageId],
            '/v1/pages/editor/{page_id}/preview-grant'
        );

        $apiParams = [];
        $apiParams['page_id'] = $pageId;

        if (!is_null($ttlHours)) {
            $apiParams['ttlHours'] = $ttlHours;
        }

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
     * Four things in one call: the mutation log is replayed into a finished block
     * tree, that tree is snapshotted into a new revision, the page's canonical
     * blocks are replaced by it, and the edit state is archived — so the page
     * comes out of this with nothing unpublished and the working copy behind it
     * closed rather than deleted. The revision is written FIRST and the canonical
     * blocks replaced after, so a failure mid-way leaves the page recoverable.
     * Block uuids survive, which is why comments anchored to a block outlive the
     * publish.
     *
     * @param string $pageId
     * @param ?bool $force
     * @param ?string $label
     * @throws RevenexxException
     * @return array
     */
    public function pagesEditorPublish(string $pageId, ?bool $force = null, ?string $label = null): array
    {
        $apiPath = str_replace(
            ['{page_id}'],
            [$pageId],
            '/v1/pages/editor/{page_id}/publish'
        );

        $apiParams = [];
        $apiParams['page_id'] = $pageId;
        $apiParams['force'] = $force;
        $apiParams['label'] = $label;

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
     * Throws the whole working copy away: the edit state row is deleted and its
     * mutation log with it, so the history goes too — this is not an undo and
     * cannot itself be undone. Unlike publishing, which archives the edit state,
     * nothing of it survives to be reopened. The published page is untouched.
     *
     * @param string $pageId
     * @throws RevenexxException
     * @return array
     */
    public function pagesEditorRevert(string $pageId): array
    {
        $apiPath = str_replace(
            ['{page_id}'],
            [$pageId],
            '/v1/pages/editor/{page_id}/revert'
        );

        $apiParams = [];
        $apiParams['page_id'] = $pageId;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Gated on the tenant setting `enable_scheduled_publishing`, which is off by
     * default: nothing in the platform publishes a scheduled edit state yet, so a
     * date accepted here would be a promise the app cannot keep. Every editor
     * state carries `features.scheduledPublishing` so the control can be hidden
     * rather than the refusal discovered.
     *
     * @param string $pageId
     * @param string $scheduledAt
     * @throws RevenexxException
     * @return array
     */
    public function pagesEditorSchedule(string $pageId, string $scheduledAt): array
    {
        $apiPath = str_replace(
            ['{page_id}'],
            [$pageId],
            '/v1/pages/editor/{page_id}/schedule'
        );

        $apiParams = [];
        $apiParams['page_id'] = $pageId;
        $apiParams['scheduledAt'] = $scheduledAt;

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
     * The one call the visual editor boots on, and the only place the UNPUBLISHED
     * page can be seen whole: the canonical blocks with every enabled mutation of
     * the log replayed over them, the resulting field lists, the mutation history
     * itself, who owns the edit state and where the undo pointer sits, and the
     * tenant's editor feature flags. `langcode` decides which language the props
     * resolve in, falling back to the page's source language. `index` replays the
     * log up to a given position instead of the current one, which is how the
     * editor previews an undo without performing it — it changes nothing, so it
     * is safe to call at any position. Reading this creates nothing either: a
     * page nobody has opened answers with a null `editState`, an empty history,
     * and the published blocks as they stand.
     *
     * @param string $pageId
     * @param ?string $langcode
     * @param ?int $index
     * @throws RevenexxException
     * @return array
     */
    public function pagesEditorState(string $pageId, ?string $langcode = null, ?int $index = null): array
    {
        $apiPath = str_replace(
            ['{page_id}'],
            [$pageId],
            '/v1/pages/editor/{page_id}/state'
        );

        $apiParams = [];
        $apiParams['page_id'] = $pageId;

        if (!is_null($langcode)) {
            $apiParams['langcode'] = $langcode;
        }

        if (!is_null($index)) {
            $apiParams['index'] = $index;
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
     * One page has one writer. This is how the second person gets the pen — the
     * previous owner is notified rather than silently locked out.
     *
     * @param string $pageId
     * @throws RevenexxException
     * @return array
     */
    public function pagesEditorTakeOwnership(string $pageId): array
    {
        $apiPath = str_replace(
            ['{page_id}'],
            [$pageId],
            '/v1/pages/editor/{page_id}/take-ownership'
        );

        $apiParams = [];
        $apiParams['page_id'] = $pageId;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Freezes a selection into a reusable starting point. The blocks are read out
     * of the page's CURRENT edit state rather than out of what is published, so a
     * template can be cut from work in progress and the uuids you send are the
     * ones the editor is showing. Unlike making a block reusable, this COPIES:
     * pages later made from the template are independent of it and of each other.
     *
     * @param string $pageId
     * @param string $label
     * @param array $uuids
     * @param ?string $description
     * @param ?string $fieldName
     * @param ?bool $isDefault
     * @param ?string $pageBundle
     * @throws RevenexxException
     * @return array
     */
    public function pagesEditorTemplatesCreate(string $pageId, string $label, array $uuids, ?string $description = null, ?string $fieldName = null, ?bool $isDefault = null, ?string $pageBundle = null): array
    {
        $apiPath = str_replace(
            ['{page_id}'],
            [$pageId],
            '/v1/pages/editor/{page_id}/templates'
        );

        $apiParams = [];
        $apiParams['page_id'] = $pageId;
        $apiParams['label'] = $label;
        $apiParams['uuids'] = $uuids;
        $apiParams['description'] = $description;
        $apiParams['fieldName'] = $fieldName;
        $apiParams['isDefault'] = $isDefault;
        $apiParams['pageBundle'] = $pageBundle;

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
     * Takes a parked edit state back to `active` and clears its date, so the
     * scheduled publication simply does not happen. The work is not touched —
     * the mutation log, the undo position and the owner all stay as they were —
     * and the page can then be published by hand or scheduled again for a
     * different date. Like every other write to an edit state it asks for
     * ownership, and a page with no open edit state answers 404 rather than
     * pretending to have cancelled something.
     *
     * @param string $pageId
     * @throws RevenexxException
     * @return array
     */
    public function pagesEditorUnschedule(string $pageId): array
    {
        $apiPath = str_replace(
            ['{page_id}'],
            [$pageId],
            '/v1/pages/editor/{page_id}/unschedule'
        );

        $apiParams = [];
        $apiParams['page_id'] = $pageId;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }
}