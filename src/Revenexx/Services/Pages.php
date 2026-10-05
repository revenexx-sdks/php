<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;
use Revenexx\Enums\PageStatus;
use Revenexx\Enums\Deleted;
use Revenexx\Enums\PagesSeedMode;
use Revenexx\Enums\PagesVocabulariesGetName;

class Pages extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * The pool an editor picks a reusable block from. A library item is ONE block
     * subtree that many pages share BY REFERENCE — edit the item and every page
     * using it changes — which is what separates it from a template, the other
     * reusable thing here, which copies instead and is at `GET /pages/templates`.
     * So the two filters are the two questions the picker asks: `bundles` narrows
     * to the block types that fit the field being filled, `text` matches the
     * label a person gave the item.
     *
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @param ?string $bundles
     * @param ?string $text
     * @throws RevenexxException
     * @return array
     */
    public function pagesLibraryList(?int $limit = null, ?int $offset = null, ?string $order = null, ?string $bundles = null, ?string $text = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/pages/library'
        );

        $apiParams = [];

        if (!is_null($limit)) {
            $apiParams['limit'] = $limit;
        }

        if (!is_null($offset)) {
            $apiParams['offset'] = $offset;
        }

        if (!is_null($order)) {
            $apiParams['order'] = $order;
        }

        if (!is_null($bundles)) {
            $apiParams['bundles'] = $bundles;
        }

        if (!is_null($text)) {
            $apiParams['text'] = $text;
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
     * Retires a reusable block. It leaves the picker and every list, but the
     * blocks pointing at it keep their `library_item_id` — the FK's `set null`
     * belongs to a hard delete, and this writes a tombstone. Delivery then skips
     * the expansion for a struck item rather than failing on it, so a page that
     * used it falls back to the block content stored in its own published
     * revision: nothing breaks, but the pages quietly stop tracking each other.
     * Nothing here tells you which pages those are, so establish that before
     * striking it.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function pagesLibraryDelete(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/pages/library/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * The stored subtree behind one reusable block, so a picker can preview what
     * dropping it into a page would produce. Because delivery expands the
     * reference against THIS row at read time, what comes back is also what every
     * page already using the item is currently rendering — which makes this the
     * call to make before editing one.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function pagesLibraryGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/pages/library/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * The one write in this app whose blast radius is not a single page. Delivery
     * expands a library reference against this row every time it serves, so
     * replacing `tree` re-renders every page that points at the item —
     * published ones included — without any of them being edited, republished
     * or even touched. Nothing warns you first and no revision records it,
     * because the pages did not change; the item did. Changing `label` or
     * `bundle` only moves the item around the picker. Detaching one page from the
     * item, so it keeps a copy of its own, is an editor mutation and not this
     * route.
     *
     * @param string $id
     * @param ?string $bundle
     * @param ?string $label
     * @param ?array $metadata
     * @param ?array $tree
     * @throws RevenexxException
     * @return array
     */
    public function pagesLibraryUpdate(string $id, ?string $bundle = null, ?string $label = null, ?array $metadata = null, ?array $tree = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/pages/library/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($bundle)) {
            $apiParams['bundle'] = $bundle;
        }

        if (!is_null($label)) {
            $apiParams['label'] = $label;
        }

        if (!is_null($metadata)) {
            $apiParams['metadata'] = $metadata;
        }

        if (!is_null($tree)) {
            $apiParams['tree'] = $tree;
        }

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
     * The management view of the menus a tenant keeps — `main`, `footer`,
     * `account` and whatever else the theme asks for, each with the key it is
     * looked up by. This route reads no filter at all — a `?menu_key=` is
     * ignored, which the empty `filter` echo shows — so fetch a page and pick,
     * or address one by id.
     *
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @throws RevenexxException
     * @return array
     */
    public function pagesMenusList(?int $limit = null, ?int $offset = null, ?string $order = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/pages/menus'
        );

        $apiParams = [];

        if (!is_null($limit)) {
            $apiParams['limit'] = $limit;
        }

        if (!is_null($offset)) {
            $apiParams['offset'] = $offset;
        }

        if (!is_null($order)) {
            $apiParams['order'] = $order;
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
     * Writes a menu by its KEY rather than by its id, which is what makes theme
     * seeding safe to repeat: a key the tenant already has has its label and
     * items replaced in place, a key it does not have is created. `items` is
     * replaced wholesale and never merged, so sending an empty list empties the
     * navigation. One caveat worth reading before you rely on the idempotence:
     * the key's uniqueness is this route's doing and not the database's —
     * `menu_key` carries an index but no unique constraint — so a duplicate key
     * created any other way leaves this route updating whichever row it finds
     * first.
     *
     * @param string $label
     * @param string $menuKey
     * @param ?array $items
     * @throws RevenexxException
     * @return array
     */
    public function pagesMenusUpsert(string $label, string $menuKey, ?array $items = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/pages/menus'
        );

        $apiParams = [];
        $apiParams['label'] = $label;
        $apiParams['menuKey'] = $menuKey;

        if (!is_null($items)) {
            $apiParams['items'] = $items;
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
     * Writes the tombstone. The menu drops out of the management list and out of
     * `GET /pages/delivery/menus` in the same moment, so a theme that reads its
     * key gets nothing back and renders nothing — there is no fallback and no
     * error a storefront could act on. The key is free immediately, which means
     * re-seeding the theme is the way back. Check what reads the key before
     * striking it.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function pagesMenusDelete(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/pages/menus/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * One menu and its whole item tree — the ordered links a theme renders as
     * its header, footer or account navigation. `items` is nested, not one level,
     * so this is the entire navigation for that key in a single read. Addressed
     * by ROW ID here; the key a theme knows it by is `menu_key` on the body, and
     * the route that works by key is the upsert.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function pagesMenusGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/pages/menus/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * The same write as the upsert, for a caller that already holds the row id
     * — use this when editing a menu a person picked from a list, and the
     * upsert when reconciling a theme's defaults. `menu_key` is deliberately not
     * editable here: the key is the handle every theme reads the menu by, so
     * changing it would empty whatever is rendering that key without anything
     * reporting an error.
     *
     * @param string $id
     * @param ?array $items
     * @param ?string $label
     * @param ?array $metadata
     * @throws RevenexxException
     * @return array
     */
    public function pagesMenusUpdate(string $id, ?array $items = null, ?string $label = null, ?array $metadata = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/pages/menus/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($items)) {
            $apiParams['items'] = $items;
        }

        if (!is_null($label)) {
            $apiParams['label'] = $label;
        }

        if (!is_null($metadata)) {
            $apiParams['metadata'] = $metadata;
        }

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
     * The EDITORIAL index — every live page of the tenant, whatever its status,
     * newest change first. This is the list the Cockpit shows a person: drafts
     * and archived pages are in it, and a row here says nothing about whether a
     * visitor can see the page, because a published status without a published
     * revision still delivers nothing. A storefront wants `GET
     * /pages/delivery/pages` instead, which answers only what is actually
     * servable. Soft-deleted pages are not returned unless `?deleted=only` asks
     * for the trash instead: then ONLY soft-deleted pages come back, most
     * recently deleted first, each carrying its `deleted_at`, and `POST
     * /pages/pages/{id}/restore` brings one back. The two collections never mix
     * in one answer.
     *
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @param ?string $bundle
     * @param ?PageStatus $status
     * @param ?string $q
     * @param ?Deleted $deleted
     * @throws RevenexxException
     * @return array
     */
    public function pagesPagesList(?int $limit = null, ?int $offset = null, ?string $order = null, ?string $bundle = null, ?PageStatus $status = null, ?string $q = null, ?Deleted $deleted = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/pages/pages'
        );

        $apiParams = [];

        if (!is_null($limit)) {
            $apiParams['limit'] = $limit;
        }

        if (!is_null($offset)) {
            $apiParams['offset'] = $offset;
        }

        if (!is_null($order)) {
            $apiParams['order'] = $order;
        }

        if (!is_null($bundle)) {
            $apiParams['bundle'] = $bundle;
        }

        if (!is_null($status)) {
            $apiParams['status'] = $status;
        }

        if (!is_null($q)) {
            $apiParams['q'] = $q;
        }

        if (!is_null($deleted)) {
            $apiParams['deleted'] = $deleted;
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
     * Writes two rows, not one: the page itself and the translation row for its
     * source language, so a page is never without the language it was authored in
     * and `GET /pages/delivery/page?slug=` can match a localized URL from the
     * first moment. Everything the caller leaves out comes from the tenant's
     * settings, not from a literal in this app: `bundle` from
     * default_page_bundle, `sourceLanguage` from default_source_language
     * (resolved for the request's market), and the status of both the page and
     * its source translation from default_page_status (draft | published).
     *
     * @param string $title
     * @param ?string $bundle
     * @param ?array $hostOptions
     * @param ?array $meta
     * @param ?string $slug
     * @param ?string $sourceLanguage
     * @param ?string $templateId
     * @throws RevenexxException
     * @return array
     */
    public function pagesPagesCreate(string $title, ?string $bundle = null, ?array $hostOptions = null, ?array $meta = null, ?string $slug = null, ?string $sourceLanguage = null, ?string $templateId = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/pages/pages'
        );

        $apiParams = [];
        $apiParams['title'] = $title;
        $apiParams['bundle'] = $bundle;
        $apiParams['hostOptions'] = $hostOptions;
        $apiParams['meta'] = $meta;
        $apiParams['slug'] = $slug;
        $apiParams['sourceLanguage'] = $sourceLanguage;
        $apiParams['templateId'] = $templateId;

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
     * Writes a tombstone. The page leaves every list, every read and all delivery
     * at once, and its slug is immediately free for another page — the unique
     * index counts live rows only. Nothing is erased: the translations, blocks,
     * edit state, revisions, comments and preview grants that hang off the page
     * all keep their rows, because their `on delete cascade` belongs to a hard
     * delete and this is not one. So a page comes back intact through `POST
     * /pages/pages/{id}/restore`, and until then it is listed in the trash at
     * `GET /pages/pages?deleted=only`.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function pagesPagesDelete(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/pages/pages/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * One page RECORD: what it is called, where it routes, what type it is, which
     * revision is live. Not its content — the blocks are not on this row and no
     * expansion here returns them. The editor reads them with `GET
     * /pages/editor/{page_id}/state`, a renderer with `GET /pages/delivery/page`.
     * A soft-deleted page answers 404 exactly like one that never existed, so
     * this is also the check for whether an id is still good.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function pagesPagesGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/pages/pages/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Corrects the page RECORD — the five fields an editor changes without
     * opening the visual editor, which are `title`, `slug`, `status`, `meta` and
     * `bundle`, and no others. Anything else in the body is dropped rather than
     * refused, and the block tree is unreachable from here by design: content
     * moves only through the editor's mutation log, so a caller cannot half-edit
     * a page behind the undo history's back. Two consequences worth knowing
     * before you call it: a slug is unique among live pages, so claiming one that
     * is held answers 409; and setting `status` to published does NOT put
     * anything in front of a visitor — delivery needs a revision, which only
     * `POST /pages/editor/{page_id}/publish` writes.
     *
     * @param string $id
     * @param ?string $bundle
     * @param ?array $meta
     * @param ?string $slug
     * @param ?PageStatus $status
     * @param ?string $title
     * @throws RevenexxException
     * @return array
     */
    public function pagesPagesUpdate(string $id, ?string $bundle = null, ?array $meta = null, ?string $slug = null, ?PageStatus $status = null, ?string $title = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/pages/pages/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($bundle)) {
            $apiParams['bundle'] = $bundle;
        }

        if (!is_null($meta)) {
            $apiParams['meta'] = $meta;
        }
        $apiParams['slug'] = $slug;

        if (!is_null($status)) {
            $apiParams['status'] = $status;
        }

        if (!is_null($title)) {
            $apiParams['title'] = $title;
        }

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
     * Creates a new page from what the source SHOWS: its blocks as they stand,
     * which after a publish are the live tree, every language's title, its type,
     * language, display options and metadata. An open draft on the source is not
     * copied — it lives in the source's edit state, not in its blocks. Every
     * block of the copy gets a new id, so editing the copy never touches the
     * source, while a block that references a library item keeps referencing it.
     * The copy is unpublished, has no revisions and no edit state, and starts at
     * default_page_status. With an empty body (`{}`) its title is the source's
     * plus a copy suffix in the source language and it has no slug, so it
     * collides with nothing.
     *
     * @param string $id
     * @param ?string $slug
     * @param ?string $title
     * @throws RevenexxException
     * @return array
     */
    public function pagesPagesDuplicate(string $id, ?string $slug = null, ?string $title = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/pages/pages/{id}/duplicate'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams['slug'] = $slug;

        if (!is_null($title)) {
            $apiParams['title'] = $title;
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
     * Clears the tombstone, and that is the whole restore: a soft delete never
     * touched the translations, blocks, edit state, revisions, comments or
     * preview grants, so the page returns to every list, read and delivery
     * exactly as it was, including its published revision. Only the slug can have
     * moved on — deleting freed it, so another live page may hold it now. Then
     * the page stays in the trash and the call answers 409; free or change the
     * other page's slug and restore again.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function pagesPagesRestore(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/pages/pages/{id}/restore'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * One entry per publication, newest first, which is the order a history is
     * read in and the one this route sorts by unless `order` says otherwise. The
     * `snapshot` — the whole published page, in every language — is
     * deliberately not in the index: it is page-sized, and nothing that renders a
     * history needs it.
     *
     * @param string $id
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @param ?string $label
     * @param ?string $createdBy
     * @param ?string $createdByName
     * @param ?string $createdAt
     * @throws RevenexxException
     * @return array
     */
    public function pagesPagesRevisions(string $id, ?int $limit = null, ?int $offset = null, ?string $order = null, ?string $label = null, ?string $createdBy = null, ?string $createdByName = null, ?string $createdAt = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/pages/pages/{id}/revisions'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($limit)) {
            $apiParams['limit'] = $limit;
        }

        if (!is_null($offset)) {
            $apiParams['offset'] = $offset;
        }

        if (!is_null($order)) {
            $apiParams['order'] = $order;
        }

        if (!is_null($label)) {
            $apiParams['label'] = $label;
        }

        if (!is_null($createdBy)) {
            $apiParams['created_by'] = $createdBy;
        }

        if (!is_null($createdByName)) {
            $apiParams['created_by_name'] = $createdByName;
        }

        if (!is_null($createdAt)) {
            $apiParams['created_at'] = $createdAt;
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
     * The target of a theme install: hand it the theme's default pages, menus,
     * library items and site settings. In `fill` mode — the default — it
     * creates whatever is missing and leaves everything else alone: idempotent by
     * page `slug`, menu key, library item label and setting key, so re-running
     * after a theme update adds only the new ones and never overwrites what an
     * editor has since changed, and a setting the tenant has set keeps its value.
     * In `reset` mode every section the body carries REPLACES the tenant's own
     * content of that kind: the live pages, menus or library items are
     * soft-deleted first, exactly as their delete does it — so they wait in the
     * trash and can be restored — and the site settings are removed, then the
     * section is seeded as in fill. A section the body leaves out is not touched
     * in either mode, and nothing reaches beyond the calling tenant. A seeded
     * page is published on the spot, immediately servable by delivery: the
     * default_page_status setting deliberately does not apply, because a theme
     * that activates with invisible pages looks broken.
     *
     * @param ?array $library
     * @param ?array $menus
     * @param ?PagesSeedMode $mode
     * @param ?array $pages
     * @param ?array $settings
     * @throws RevenexxException
     * @return array
     */
    public function pagesSeed(?array $library = null, ?array $menus = null, ?PagesSeedMode $mode = null, ?array $pages = null, ?array $settings = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/pages/seed'
        );

        $apiParams = [];
        $apiParams['library'] = $library;
        $apiParams['menus'] = $menus;

        if (!is_null($mode)) {
            $apiParams['mode'] = $mode;
        }
        $apiParams['pages'] = $pages;
        $apiParams['settings'] = $settings;

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
     * Every site setting the tenant has set, ordered by key — what a theme
     * styles the whole storefront with: its appearance, its design tokens, its
     * custom CSS. Not paged: a tenant holds a handful of keys, and this is the
     * whole set in one read. A key nobody set is simply absent here; `GET
     * /pages/delivery/site-settings` is the read that answers it as `null`.
     *
     * @throws RevenexxException
     * @return array
     */
    public function pagesSettingsSiteList(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/pages/settings/site'
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
     * Takes the value away, so the key reads as unset again — absent from the
     * list, `null` on delivery, which is where a theme falls back to its own
     * default. Not a tombstone: there is nothing to restore, and setting the key
     * again starts afresh.
     *
     * @param string $key
     * @throws RevenexxException
     * @return array
     */
    public function pagesSettingsSiteDelete(string $key): array
    {
        $apiPath = str_replace(
            ['{key}'],
            [$key],
            '/v1/pages/settings/site/{key}'
        );

        $apiParams = [];
        $apiParams['key'] = $key;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * One key, with who set it and when. A key the tenant never set answers 404
     * rather than an empty value, so an editor can tell "not set" from "set to
     * nothing".
     *
     * @param string $key
     * @throws RevenexxException
     * @return array
     */
    public function pagesSettingsSiteGet(string $key): array
    {
        $apiPath = str_replace(
            ['{key}'],
            [$key],
            '/v1/pages/settings/site/{key}'
        );

        $apiParams = [];
        $apiParams['key'] = $key;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Stores the value under the key, creating the key or replacing its value —
     * both answer 200 with the stored row, because after either call the key
     * holds exactly what was sent. The value is replaced whole, never merged, and
     * it is not checked against what a theme expects: this app stores JSON and
     * the theme reading the key decides its shape. It reaches every storefront of
     * the tenant at once, through `GET /pages/delivery/site-settings`.
     *
     * @param string $key
     * @param array $value
     * @throws RevenexxException
     * @return array
     */
    public function pagesSettingsSitePut(string $key, array $value): array
    {
        $apiPath = str_replace(
            ['{key}'],
            [$key],
            '/v1/pages/settings/site/{key}'
        );

        $apiParams = [];
        $apiParams['key'] = $key;
        $apiParams['value'] = $value;

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
     * Which records render with which page: one entry per product or category
     * that has a page of its own as its template. Every other record renders with
     * the theme's default template, so an absent record is not an error. Filter
     * by `resource_type` for one kind of record, by `page_slug` for everything
     * one page is the template of.
     *
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @param ?string $resourceType
     * @param ?string $pageSlug
     * @throws RevenexxException
     * @return array
     */
    public function pagesTemplateAssignmentsList(?int $limit = null, ?int $offset = null, ?string $order = null, ?string $resourceType = null, ?string $pageSlug = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/pages/template-assignments'
        );

        $apiParams = [];

        if (!is_null($limit)) {
            $apiParams['limit'] = $limit;
        }

        if (!is_null($offset)) {
            $apiParams['offset'] = $offset;
        }

        if (!is_null($order)) {
            $apiParams['order'] = $order;
        }

        if (!is_null($resourceType)) {
            $apiParams['resource_type'] = $resourceType;
        }

        if (!is_null($pageSlug)) {
            $apiParams['page_slug'] = $pageSlug;
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
     * Takes the page away from the record, which then renders with the theme's
     * default template again. The page itself is not touched. Not a tombstone:
     * the assignment is gone, and assigning a page again starts afresh.
     *
     * @param string $resourceType
     * @param string $resourceId
     * @throws RevenexxException
     * @return array
     */
    public function pagesTemplateAssignmentsDelete(string $resourceType, string $resourceId): array
    {
        $apiPath = str_replace(
            ['{resource_type}', '{resource_id}'],
            [$resourceType, $resourceId],
            '/v1/pages/template-assignments/{resource_type}/{resource_id}'
        );

        $apiParams = [];
        $apiParams['resource_type'] = $resourceType;
        $apiParams['resource_id'] = $resourceId;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Makes a page the template one record renders with, replacing any page
     * assigned before — the record is the address, so a second PUT moves it
     * rather than adding another. The page is named by its slug and has to be a
     * live page when the call is made; it need not be published yet, but the
     * storefront only uses it once it is. Answers 200 with the stored assignment
     * either way.
     *
     * @param string $resourceType
     * @param string $resourceId
     * @param string $pageSlug
     * @throws RevenexxException
     * @return array
     */
    public function pagesTemplateAssignmentsPut(string $resourceType, string $resourceId, string $pageSlug): array
    {
        $apiPath = str_replace(
            ['{resource_type}', '{resource_id}'],
            [$resourceType, $resourceId],
            '/v1/pages/template-assignments/{resource_type}/{resource_id}'
        );

        $apiParams = [];
        $apiParams['resource_type'] = $resourceType;
        $apiParams['resource_id'] = $resourceId;
        $apiParams['pageSlug'] = $pageSlug;

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
     * Every column of a template is an exact-match filter here:
     * `?page_bundle=standard&field_name=content` is how a picker asks for the
     * templates offered in one place, and `?is_default=true` is how a "new page"
     * flow finds the one to start from.
     *
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @param ?string $id
     * @param ?string $label
     * @param ?string $description
     * @param ?string $pageBundle
     * @param ?string $fieldName
     * @param ?bool $isDefault
     * @param ?string $createdBy
     * @param ?string $createdAt
     * @param ?string $updatedAt
     * @throws RevenexxException
     * @return array
     */
    public function pagesTemplatesList(?int $limit = null, ?int $offset = null, ?string $order = null, ?string $id = null, ?string $label = null, ?string $description = null, ?string $pageBundle = null, ?string $fieldName = null, ?bool $isDefault = null, ?string $createdBy = null, ?string $createdAt = null, ?string $updatedAt = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/pages/templates'
        );

        $apiParams = [];

        if (!is_null($limit)) {
            $apiParams['limit'] = $limit;
        }

        if (!is_null($offset)) {
            $apiParams['offset'] = $offset;
        }

        if (!is_null($order)) {
            $apiParams['order'] = $order;
        }

        if (!is_null($id)) {
            $apiParams['id'] = $id;
        }

        if (!is_null($label)) {
            $apiParams['label'] = $label;
        }

        if (!is_null($description)) {
            $apiParams['description'] = $description;
        }

        if (!is_null($pageBundle)) {
            $apiParams['page_bundle'] = $pageBundle;
        }

        if (!is_null($fieldName)) {
            $apiParams['field_name'] = $fieldName;
        }

        if (!is_null($isDefault)) {
            $apiParams['is_default'] = $isDefault;
        }

        if (!is_null($createdBy)) {
            $apiParams['created_by'] = $createdBy;
        }

        if (!is_null($createdAt)) {
            $apiParams['created_at'] = $createdAt;
        }

        if (!is_null($updatedAt)) {
            $apiParams['updated_at'] = $updatedAt;
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
     * Removes the template row outright. This is the one delete in the app that
     * is not a tombstone — `templates` carries no `deleted_at` — so it cannot
     * be undone and the id will not come back. Nothing else breaks by it: pages
     * built from the template hold their own copy of the blocks and never
     * referenced the row.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function pagesTemplatesDelete(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/pages/templates/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * The blocks a page would START from if an editor picked this template —
     * read it to preview the insert. A template is a COPY source, the opposite of
     * a library item: nothing links back from the pages already built from it, so
     * this tells you what future pages get and nothing about existing ones.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function pagesTemplatesGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/pages/templates/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Edits what a future page will start from. Because templates copy rather
     * than share, this reaches nothing that already exists — pages built from
     * it keep the blocks they were handed, which is exactly the property that
     * makes a template safe to edit and a library item dangerous. `is_default` is
     * the one field with an effect past the picker: it decides what a new page of
     * `page_bundle` starts with, and nothing here stops two templates of the same
     * bundle from both claiming it, so which one wins is left to whoever reads
     * the list.
     *
     * @param string $id
     * @param ?string $description
     * @param ?string $fieldName
     * @param ?bool $isDefault
     * @param ?string $label
     * @param ?string $pageBundle
     * @param ?array $tree
     * @throws RevenexxException
     * @return array
     */
    public function pagesTemplatesUpdate(string $id, ?string $description = null, ?string $fieldName = null, ?bool $isDefault = null, ?string $label = null, ?string $pageBundle = null, ?array $tree = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/pages/templates/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams['description'] = $description;
        $apiParams['field_name'] = $fieldName;

        if (!is_null($isDefault)) {
            $apiParams['is_default'] = $isDefault;
        }

        if (!is_null($label)) {
            $apiParams['label'] = $label;
        }
        $apiParams['page_bundle'] = $pageBundle;

        if (!is_null($tree)) {
            $apiParams['tree'] = $tree;
        }

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
     * Discovery for the vocabulary routes: the enums this app publishes, each
     * with its name, its title and what it is for, and none of them unpacked —
     * the permitted values are not on this route, only on the one that serves a
     * single vocabulary. Names: edit-state-statuses, page-statuses,
     * translation-statuses. Fetch one with GET /pages/vocabularies/{name}; a
     * client holding the qualified pair 'pages.<name>' builds that URL from the
     * pair alone.
     *
     * @throws RevenexxException
     * @return array
     */
    public function pagesVocabulariesList(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/pages/vocabularies'
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
     * One vocabulary unpacked: every value the column permits, each with the
     * title to show for it, the sentence explaining it and the badge tone to
     * render it in — everything a select or a status pill needs, so nothing
     * downstream keeps its own copy of the labels. The values are read out of the
     * column's CHECK constraint, so the served set IS the enforced set and the
     * two cannot drift — a value added to the constraint appears here even
     * before anyone labels it, titled from its own key. Values come back in
     * constraint order, which is the order a select should offer. 'closed' says
     * the set is exhaustive, so a value outside it is stale data rather than a
     * missing label. Names: edit-state-statuses, page-statuses,
     * translation-statuses.
     *
     * @param PagesVocabulariesGetName $name
     * @throws RevenexxException
     * @return array
     */
    public function pagesVocabulariesGet(PagesVocabulariesGetName $name): array
    {
        $apiPath = str_replace(
            ['{name}'],
            [$name],
            '/v1/pages/vocabularies/{name}'
        );

        $apiParams = [];
        $apiParams['name'] = $name;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }
}