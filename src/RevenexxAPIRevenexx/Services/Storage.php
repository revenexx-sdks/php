<?php

namespace RevenexxAPIRevenexx\Services;

use RevenexxAPIRevenexx\RevenexxAPIRevenexxException;
use RevenexxAPIRevenexx\Client;
use RevenexxAPIRevenexx\Service;
use RevenexxAPIRevenexx\InputFile;
use RevenexxAPIRevenexx\Enums\Visibility;

class Storage extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * @param ?string $search
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function assetIndex(?string $search = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/storage/assets'
        );

        $apiParams = [];

        if (!is_null($search)) {
            $apiParams['search'] = $search;
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
     * @param string $file
     * @param ?string $altText
     * @param ?string $description
     * @param ?string $displayName
     * @param ?string $folderId
     * @param ?bool $keepArchive
     * @param ?array $tags
     * @param ?bool $unpack
     * @param ?Visibility $visibility
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function assetStore(string $file, ?string $altText = null, ?string $description = null, ?string $displayName = null, ?string $folderId = null, ?bool $keepArchive = null, ?array $tags = null, ?bool $unpack = null, ?Visibility $visibility = null, ?callable $onProgress = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/storage/assets'
        );

        $apiParams = [];
        $apiParams['file'] = $file;
        $apiParams['alt_text'] = $altText;
        $apiParams['description'] = $description;
        $apiParams['display_name'] = $displayName;
        $apiParams['folder_id'] = $folderId;
        $apiParams['keep_archive'] = $keepArchive;
        $apiParams['tags'] = $tags;
        $apiParams['unpack'] = $unpack;
        $apiParams['visibility'] = $visibility;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'multipart/form-data';

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * @param ?string $folderId
     * @param ?string $visibility
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function assetBulk(?string $folderId = null, ?string $visibility = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/storage/assets/bulk'
        );

        $apiParams = [];

        if (!is_null($folderId)) {
            $apiParams['folder_id'] = $folderId;
        }

        if (!is_null($visibility)) {
            $apiParams['visibility'] = $visibility;
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
     * @return string
     */
    public function assetDestroy(string $id): string
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/storage/assets/{id}'
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
    public function assetShow(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/storage/assets/{id}'
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
     * @param ?string $altText
     * @param ?string $description
     * @param ?string $displayName
     * @param ?string $folderId
     * @param ?string $name
     * @param ?array $tags
     * @param ?Visibility $visibility
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function assetUpdate(string $id, ?string $altText = null, ?string $description = null, ?string $displayName = null, ?string $folderId = null, ?string $name = null, ?array $tags = null, ?Visibility $visibility = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/storage/assets/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams['alt_text'] = $altText;
        $apiParams['description'] = $description;
        $apiParams['display_name'] = $displayName;
        $apiParams['folder_id'] = $folderId;
        $apiParams['name'] = $name;
        $apiParams['tags'] = $tags;
        $apiParams['visibility'] = $visibility;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PATCH,
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
    public function assetDownload(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/storage/assets/{id}/download'
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
     * @throws RevenexxAPIRevenexxException
     * @return string
     */
    public function assetPermanent(string $id): string
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/storage/assets/{id}/permanent'
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
    public function assetReprocess(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/storage/assets/{id}/reprocess'
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
     * @param string $id
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function assetRestore(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/storage/assets/{id}/restore'
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
     * @param string $id
     * @param ?int $ttlSeconds
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function assetSign(string $id, ?int $ttlSeconds = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/storage/assets/{id}/sign'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams['ttl_seconds'] = $ttlSeconds;

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
     * @param ?bool $keepArchive
     * @param ?string $targetFolderId
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function assetUnpack(string $id, ?bool $keepArchive = null, ?string $targetFolderId = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/storage/assets/{id}/unpack'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams['keep_archive'] = $keepArchive;
        $apiParams['target_folder_id'] = $targetFolderId;

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
    public function folderIndex(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/storage/folders'
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
     * @param string $name
     * @param ?string $parentId
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function folderStore(string $name, ?string $parentId = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/storage/folders'
        );

        $apiParams = [];
        $apiParams['name'] = $name;
        $apiParams['parent_id'] = $parentId;

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
     * @param ?bool $recursive
     * @throws RevenexxAPIRevenexxException
     * @return string
     */
    public function folderDestroy(string $id, ?bool $recursive = null): string
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/storage/folders/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($recursive)) {
            $apiParams['recursive'] = $recursive;
        }

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
    public function folderShow(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/storage/folders/{id}'
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
     * @param ?string $name
     * @param ?string $parentId
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function folderUpdate(string $id, ?string $name = null, ?string $parentId = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/storage/folders/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams['name'] = $name;
        $apiParams['parent_id'] = $parentId;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function syncRuleIndex(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/storage/sftp/rules'
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
    public function syncRuleStore(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/storage/sftp/rules'
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
     * @param string $id
     * @throws RevenexxAPIRevenexxException
     * @return string
     */
    public function syncRuleDestroy(string $id): string
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/storage/sftp/rules/{id}'
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
    public function syncRuleShow(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/storage/sftp/rules/{id}'
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
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function syncRuleUpdate(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/storage/sftp/rules/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_PATCH,
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
    public function syncRuleRun(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/storage/sftp/rules/{id}/run'
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
     * @param string $id
     * @param string $runId
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function syncRuleRunProtocol(string $id, string $runId): array
    {
        $apiPath = str_replace(
            ['{id}', '{runId}'],
            [$id, $runId],
            '/v1/storage/sftp/rules/{id}/runs/{runId}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams['runId'] = $runId;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * @param ?string $ruleId
     * @param ?string $from
     * @param ?string $to
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function syncRuleHistory(?string $ruleId = null, ?string $from = null, ?string $to = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/storage/sftp/sync-history'
        );

        $apiParams = [];

        if (!is_null($ruleId)) {
            $apiParams['rule_id'] = $ruleId;
        }

        if (!is_null($from)) {
            $apiParams['from'] = $from;
        }

        if (!is_null($to)) {
            $apiParams['to'] = $to;
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
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function tenantStats(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/storage/tenant/stats'
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
    public function tenantUsage(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/storage/tenant/usage'
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
}