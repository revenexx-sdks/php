<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;
use Revenexx\Enums\Format;
use Revenexx\Enums\Mode;
use Revenexx\Enums\CreateImportTarget;
use Revenexx\Enums\Direction;
use Revenexx\Enums\ApplyMode;

class Io extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * The calling tenant's bulk jobs, newest first. Jobs are created by the
     * feature blocks (import / export / A/B swap / tenant copy / sample) —
     * never here; this surface is read-only.
     * 
     *
     * @param ?mixed $type
     * @param ?mixed $status
     * @param ?string $vendor
     * @param ?string $app
     * @param ?string $entity
     * @param ?int $limit
     * @throws RevenexxException
     * @return array
     */
    public function listBulkJobs(mixed $type = null, mixed $status = null, ?string $vendor = null, ?string $app = null, ?string $entity = null, ?int $limit = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/io/bulk-jobs'
        );

        $apiParams = [];

        if (!is_null($type)) {
            $apiParams['type'] = $type;
        }

        if (!is_null($status)) {
            $apiParams['status'] = $status;
        }

        if (!is_null($vendor)) {
            $apiParams['vendor'] = $vendor;
        }

        if (!is_null($app)) {
            $apiParams['app'] = $app;
        }

        if (!is_null($entity)) {
            $apiParams['entity'] = $entity;
        }

        if (!is_null($limit)) {
            $apiParams['limit'] = $limit;
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
     * Status, row counts, and progress for one bulk job.
     * 
     * Tenant-scoped: an id belonging to another tenant is filtered out and
     * is therefore indistinguishable from a non-existent one — which is the
     * intent.
     * 
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function getBulkJob(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/io/bulk-jobs/{id}'
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
     * Flat list of the entities the calling tenant's installed apps expose,
     * sorted by vendor, app, entity. Feeds the entity pickers of the
     * Integration Studio I/O nodes.
     * 
     * The app set comes from `baseline.tenant_app_versions`. Per app the
     * entity list is resolved from the tenant's pinned schema version; when
     * that pointer is stale (missing or not applied) it falls back to the
     * latest applied version of `(vendor, app)`. Apps with no applied
     * schema at all contribute no entities.
     * 
     *
     * @throws RevenexxException
     * @return array
     */
    public function listIoEntities(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/io/entities'
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
     * Creates a `bulk_job` and dispatches the engine to export the tenant's
     * rows for an entity. CSV/XML stream row-by-row into an S3 multipart
     * upload (flat RAM); JSON/XLSX are buffered. The response carries the
     * object key the result will be written to.
     * 
     *
     * @param string $app
     * @param string $entity
     * @param string $vendor
     * @param ?Format $format
     * @param ?string $profileId
     * @throws RevenexxException
     * @return array
     */
    public function createExport(string $app, string $entity, string $vendor, ?Format $format = null, ?string $profileId = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/io/exports'
        );

        $apiParams = [];
        $apiParams['app'] = $app;
        $apiParams['entity'] = $entity;
        $apiParams['vendor'] = $vendor;

        if (!is_null($format)) {
            $apiParams['format'] = $format;
        }

        if (!is_null($profileId)) {
            $apiParams['profile_id'] = $profileId;
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
     * Mints a short-TTL signed S3 `GET` URL for the object a completed
     * export wrote. Tenant-scoped: an id belonging to another tenant — or
     * to a job that is not an export — is indistinguishable from a
     * non-existent one and answers `404`.
     * 
     * The job must have reached `completed` or `partial`; any earlier
     * state answers `409` and carries the current `job_status`.
     * 
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function getExportUrl(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/io/exports/{id}/url'
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
     * Creates a `bulk_job` and dispatches the engine to import a previously
     * uploaded object into the named entity. The engine streams CSV
     * row-by-row (flat RAM at 1M+ rows) and COPYs into the entity's staging
     * sibling before a merge / content-hash delta into the target.
     * 
     *
     * @param string $app
     * @param string $entity
     * @param string $objectKey
     * @param string $vendor
     * @param ?Format $format
     * @param ?array $keys
     * @param ?int $maxRejects
     * @param ?Mode $mode
     * @param ?string $profileId
     * @param ?CreateImportTarget $target
     * @throws RevenexxException
     * @return array
     */
    public function createImport(string $app, string $entity, string $objectKey, string $vendor, ?Format $format = null, ?array $keys = null, ?int $maxRejects = null, ?Mode $mode = null, ?string $profileId = null, ?CreateImportTarget $target = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/io/imports'
        );

        $apiParams = [];
        $apiParams['app'] = $app;
        $apiParams['entity'] = $entity;
        $apiParams['object_key'] = $objectKey;
        $apiParams['vendor'] = $vendor;

        if (!is_null($format)) {
            $apiParams['format'] = $format;
        }

        if (!is_null($keys)) {
            $apiParams['keys'] = $keys;
        }

        if (!is_null($maxRejects)) {
            $apiParams['max_rejects'] = $maxRejects;
        }

        if (!is_null($mode)) {
            $apiParams['mode'] = $mode;
        }

        if (!is_null($profileId)) {
            $apiParams['profile_id'] = $profileId;
        }

        if (!is_null($target)) {
            $apiParams['target'] = $target;
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
     * The calling tenant's saved profiles, ordered by name.
     * 
     * When `X-Revenexx-Market` is present the listing is filtered to the
     * profiles offered for that market — global profiles (`markets: null`)
     * plus those whose `markets` contain it. Omit the header to get every
     * profile, which is what the management view wants.
     * 
     *
     * @throws RevenexxException
     * @return array
     */
    public function listProfiles(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/io/profiles'
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
     * A tenant-secured, reusable mapping (field rename + transforms + keys)
     * for a direction (`import`/`export`), format, and entity. Runnable
     * on-click via `/io/profiles/{id}/run`.
     * 
     *
     * @param string $app
     * @param Direction $direction
     * @param string $entity
     * @param string $format
     * @param string $name
     * @param string $vendor
     * @param ?ApplyMode $applyMode
     * @param ?array $mapping
     * @param ?array $markets
     * @param ?array $options
     * @throws RevenexxException
     * @return array
     */
    public function createProfile(string $app, Direction $direction, string $entity, string $format, string $name, string $vendor, ?ApplyMode $applyMode = null, ?array $mapping = null, ?array $markets = null, ?array $options = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/io/profiles'
        );

        $apiParams = [];
        $apiParams['app'] = $app;
        $apiParams['direction'] = $direction;
        $apiParams['entity'] = $entity;
        $apiParams['format'] = $format;
        $apiParams['name'] = $name;
        $apiParams['vendor'] = $vendor;

        if (!is_null($applyMode)) {
            $apiParams['apply_mode'] = $applyMode;
        }

        if (!is_null($mapping)) {
            $apiParams['mapping'] = $mapping;
        }
        $apiParams['markets'] = $markets;

        if (!is_null($options)) {
            $apiParams['options'] = $options;
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
     * Permanently remove a saved profile owned by the calling tenant.
     * 
     * Idempotent, and deliberately not a `404` path: deleting an id that
     * does not belong to the tenant still answers `200`, with `deleted: 0`.
     * 
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function deleteProfile(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/io/profiles/{id}'
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
     * A single saved profile. Tenant-scoped: an id owned by another tenant
     * is indistinguishable from a non-existent one and answers `404`.
     * 
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function showProfile(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/io/profiles/{id}'
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
     * Replace a saved profile's mapping, format, or apply mode (tenant-scoped).
     *
     * @param string $id
     * @param string $app
     * @param Direction $direction
     * @param string $entity
     * @param string $format
     * @param string $name
     * @param string $vendor
     * @param ?ApplyMode $applyMode
     * @param ?array $mapping
     * @param ?array $markets
     * @param ?array $options
     * @throws RevenexxException
     * @return array
     */
    public function updateProfile(string $id, string $app, Direction $direction, string $entity, string $format, string $name, string $vendor, ?ApplyMode $applyMode = null, ?array $mapping = null, ?array $markets = null, ?array $options = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/io/profiles/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams['app'] = $app;
        $apiParams['direction'] = $direction;
        $apiParams['entity'] = $entity;
        $apiParams['format'] = $format;
        $apiParams['name'] = $name;
        $apiParams['vendor'] = $vendor;

        if (!is_null($applyMode)) {
            $apiParams['apply_mode'] = $applyMode;
        }

        if (!is_null($mapping)) {
            $apiParams['mapping'] = $mapping;
        }
        $apiParams['markets'] = $markets;

        if (!is_null($options)) {
            $apiParams['options'] = $options;
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
     * Dispatches the engine using the saved profile. An import run requires
     * `object_key` (upload first); an export run writes a generated key.
     * 
     *
     * @param string $id
     * @param ?array $markets
     * @param ?string $objectKey
     * @throws RevenexxException
     * @return array
     */
    public function runProfile(string $id, ?array $markets = null, ?string $objectKey = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/io/profiles/{id}/run'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($markets)) {
            $apiParams['markets'] = $markets;
        }

        if (!is_null($objectKey)) {
            $apiParams['object_key'] = $objectKey;
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
     * Returns a short-lived signed S3 `PUT` URL (+ required headers) and
     * the `object_key` to reference in a subsequent `/io/imports`. The
     * client uploads bytes directly to object storage — never through
     * Baseline.
     * 
     *
     * @param ?string $extension
     * @throws RevenexxException
     * @return array
     */
    public function createUpload(?string $extension = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/io/uploads'
        );

        $apiParams = [];

        if (!is_null($extension)) {
            $apiParams['extension'] = $extension;
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
}