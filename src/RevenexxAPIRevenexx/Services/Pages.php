<?php

namespace RevenexxAPIRevenexx\Services;

use RevenexxAPIRevenexx\RevenexxAPIRevenexxException;
use RevenexxAPIRevenexx\Client;
use RevenexxAPIRevenexx\Service;
use RevenexxAPIRevenexx\InputFile;
use RevenexxAPIRevenexx\Enums\PageStatus;

class Pages extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function pagesDeliveryPage(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/pages/delivery/page'
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
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function pagesDeliveryPages(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/pages/delivery/pages'
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
     * @param string $token
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function pagesDeliveryPreview(string $token): array
    {
        $apiPath = str_replace(
            ['{token}'],
            [$token],
            '/v1/pages/delivery/preview/{token}'
        );

        $apiParams = [];
        $apiParams['token'] = $token;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function pagesEditorEditStates(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/pages/editor/edit-states'
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
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function pagesEditorNotificationsList(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/pages/editor/notifications'
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
     * @throws RevenexxAPIRevenexxException
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
     * @throws RevenexxAPIRevenexxException
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
     * @param ?array $items
     * @throws RevenexxAPIRevenexxException
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
     * @throws RevenexxAPIRevenexxException
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
     * @param ?array $settings
     * @throws RevenexxAPIRevenexxException
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

        if (!is_null($settings)) {
            $apiParams['settings'] = $settings;
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
     * @throws RevenexxAPIRevenexxException
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
     * @param string $pageId
     * @throws RevenexxAPIRevenexxException
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
     * @param string $pageId
     * @param string $body
     * @param ?array $blockUuids
     * @param ?string $parentUuid
     * @throws RevenexxAPIRevenexxException
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

        if (!is_null($blockUuids)) {
            $apiParams['blockUuids'] = $blockUuids;
        }

        if (!is_null($parentUuid)) {
            $apiParams['parentUuid'] = $parentUuid;
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
     * @param string $pageId
     * @param string $uuid
     * @throws RevenexxAPIRevenexxException
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
     * @param string $pageId
     * @param string $uuid
     * @param string $body
     * @throws RevenexxAPIRevenexxException
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
     * @param string $pageId
     * @param string $uuid
     * @throws RevenexxAPIRevenexxException
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
     * @param string $pageId
     * @param string $uuid
     * @param int $taskIndex
     * @throws RevenexxAPIRevenexxException
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
     * @param string $pageId
     * @param string $uuid
     * @throws RevenexxAPIRevenexxException
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

    /**
     * @param string $pageId
     * @param int $index
     * @param ?string $langcode
     * @throws RevenexxAPIRevenexxException
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

        if (!is_null($langcode)) {
            $apiParams['langcode'] = $langcode;
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
     * @param string $pageId
     * @throws RevenexxAPIRevenexxException
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
     * @param string $pageId
     * @param bool $enabled
     * @param int $index
     * @param ?string $langcode
     * @throws RevenexxAPIRevenexxException
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

        if (!is_null($langcode)) {
            $apiParams['langcode'] = $langcode;
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
     * @param string $pageId
     * @param string $plugin
     * @param ?string $langcode
     * @param ?array $payload
     * @throws RevenexxAPIRevenexxException
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

        if (!is_null($langcode)) {
            $apiParams['langcode'] = $langcode;
        }

        if (!is_null($payload)) {
            $apiParams['payload'] = $payload;
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
     * @param string $pageId
     * @param ?int $ttlHours
     * @throws RevenexxAPIRevenexxException
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
     * @param string $pageId
     * @param ?bool $force
     * @param ?string $label
     * @throws RevenexxAPIRevenexxException
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

        if (!is_null($force)) {
            $apiParams['force'] = $force;
        }

        if (!is_null($label)) {
            $apiParams['label'] = $label;
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
     * @param string $pageId
     * @throws RevenexxAPIRevenexxException
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
     * @param string $pageId
     * @param string $scheduledAt
     * @throws RevenexxAPIRevenexxException
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
     * @param string $pageId
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function pagesEditorState(string $pageId): array
    {
        $apiPath = str_replace(
            ['{page_id}'],
            [$pageId],
            '/v1/pages/editor/{page_id}/state'
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
     * @param string $pageId
     * @throws RevenexxAPIRevenexxException
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
     * @param string $pageId
     * @param string $label
     * @param array $uuids
     * @param ?string $description
     * @param ?string $fieldName
     * @param ?bool $isDefault
     * @param ?string $pageBundle
     * @throws RevenexxAPIRevenexxException
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

        if (!is_null($description)) {
            $apiParams['description'] = $description;
        }

        if (!is_null($fieldName)) {
            $apiParams['fieldName'] = $fieldName;
        }

        if (!is_null($isDefault)) {
            $apiParams['isDefault'] = $isDefault;
        }

        if (!is_null($pageBundle)) {
            $apiParams['pageBundle'] = $pageBundle;
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
     * @param string $pageId
     * @throws RevenexxAPIRevenexxException
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

    /**
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function pagesLibraryList(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/pages/library'
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
     * @param string $id
     * @throws RevenexxAPIRevenexxException
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
     * @param string $id
     * @throws RevenexxAPIRevenexxException
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
     * @param string $id
     * @param ?string $bundle
     * @param ?string $label
     * @param ?array $tree
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function pagesLibraryUpdate(string $id, ?string $bundle = null, ?string $label = null, ?array $tree = null): array
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
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function pagesPagesList(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/pages/pages'
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
     * @param string $title
     * @param ?string $bundle
     * @param ?array $hostOptions
     * @param ?array $meta
     * @param ?string $slug
     * @param ?string $sourceLanguage
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function pagesPagesCreate(string $title, ?string $bundle = null, ?array $hostOptions = null, ?array $meta = null, ?string $slug = null, ?string $sourceLanguage = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/pages/pages'
        );

        $apiParams = [];
        $apiParams['title'] = $title;

        if (!is_null($bundle)) {
            $apiParams['bundle'] = $bundle;
        }

        if (!is_null($hostOptions)) {
            $apiParams['hostOptions'] = $hostOptions;
        }

        if (!is_null($meta)) {
            $apiParams['meta'] = $meta;
        }

        if (!is_null($slug)) {
            $apiParams['slug'] = $slug;
        }

        if (!is_null($sourceLanguage)) {
            $apiParams['sourceLanguage'] = $sourceLanguage;
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
     * @param string $id
     * @throws RevenexxAPIRevenexxException
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
     * @param string $id
     * @throws RevenexxAPIRevenexxException
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
     * @param string $id
     * @param ?string $bundle
     * @param ?array $meta
     * @param ?string $slug
     * @param ?PageStatus $status
     * @param ?string $title
     * @throws RevenexxAPIRevenexxException
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
     * @param string $id
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function pagesPagesRevisions(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/pages/pages/{id}/revisions'
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
     * @param ?array $pages
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function pagesSeed(?array $pages = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/pages/seed'
        );

        $apiParams = [];

        if (!is_null($pages)) {
            $apiParams['pages'] = $pages;
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
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function pagesTemplatesList(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/pages/templates'
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
     * @param string $id
     * @throws RevenexxAPIRevenexxException
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
     * @param string $id
     * @throws RevenexxAPIRevenexxException
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
     * @param string $id
     * @param ?string $description
     * @param ?string $fieldName
     * @param ?bool $isDefault
     * @param ?string $label
     * @param ?string $pageBundle
     * @param ?array $tree
     * @throws RevenexxAPIRevenexxException
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
}