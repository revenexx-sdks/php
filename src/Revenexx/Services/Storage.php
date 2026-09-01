<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;
use Revenexx\Enums\Visibility;

class Storage extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * List the media assets in this tenant, newest first. Narrow the list with
     * `filter[folder_id]`, `filter[kind]`, `filter[status]` and a
     * `filter[created_at][gte]`/`[lte]` range; search original names, display
     * names, alt text and descriptions with `search`; order by `created_at`,
     * `size_bytes` or `original_name` (prefix with `-` to reverse). One page is
     * returned, 50 records by default and 200 at most.
     * 
     * Records only: no file content is returned — fetch bytes with
     * `GET /assets/{id}/download` or hand out a link with
     * `POST /assets/{id}/sign`. Deleted assets are not listed.
     *
     * @param ?string $search
     * @throws RevenexxException
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
     * Upload one file into this tenant's media library. The file is checked
     * against the tenant's single-file limit and its remaining storage quota,
     * its media type is sniffed from the content rather than trusted from the
     * request, and it is virus-scanned before anything is written. The stored
     * asset comes back with status `pending_processing`; metadata extraction
     * finishes asynchronously and moves it to `available`. `folder_id`,
     * `visibility`, `alt_text`, `description`, `display_name` and `tags` are
     * applied on the way in; set `unpack` to also queue an uploaded archive's
     * members for ingestion.
     * 
     * Every call creates a new asset — this never replaces the content of an
     * existing one — and it takes exactly one file. Use `POST /assets/bulk` for
     * several.
     *
     * @param InputFile $file
     * @param ?string $altText
     * @param ?string $description
     * @param ?string $displayName
     * @param ?string $folderId
     * @param ?bool $keepArchive
     * @param ?array $tags
     * @param ?bool $unpack
     * @param ?Visibility $visibility
     * @throws RevenexxException
     * @return array
     */
    public function assetStore(InputFile $file, ?string $altText = null, ?string $description = null, ?string $displayName = null, ?string $folderId = null, ?bool $keepArchive = null, ?array $tags = null, ?bool $unpack = null, ?Visibility $visibility = null, ?callable $onProgress = null): array
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
        // The API takes one multipart body per upload. It has no chunked or
        // resumable protocol — no content-range, no upload id, no per-chunk
        // endpoint — so the whole file always goes in a single request.
        $size = 0;
        $mimeType = null;
        $postedName = null;
        if(empty($file->getPath() ?? null)) {
            $size = strlen($file->getData());
            $mimeType = $file->getMimeType();
            $postedName = $file->getFilename();
            $apiParams['file'] = new \CURLFile('data://' . $mimeType . ';base64,' . base64_encode($file->getData()), $mimeType, $postedName);
        } else {
            $size = filesize($file->getPath());
            $mimeType = $file->getMimeType() ?? mime_content_type($file->getPath());
            $postedName = $file->getFilename() ?? basename($file->getPath());
            $apiParams['file'] = new \CURLFile($file->getPath(), $mimeType, $postedName);
        }

        $response = $this->client->call(Client::METHOD_POST, $apiPath, [
            'content-type' => 'multipart/form-data',
            ], $apiParams);

        if($onProgress !== null) {
            $onProgress([
                '$id' => $response['$id'] ?? null,
                'progress' => 100,
                'sizeUploaded' => $size,
                'chunksTotal' => 1,
                'chunksUploaded' => 1,
            ]);
        }

        return $response;

    }

    /**
     * Upload a batch of files in one request under `files`, each ingested
     * exactly as `POST /assets` ingests a single file. The batch is rejected as
     * a whole when it carries no files, more files than one request may carry,
     * or too many bytes in total. Past that point every file is attempted
     * independently and the call answers 207 with a `results` entry per file:
     * either the created asset or the error that rejected it. A partial failure
     * is therefore a successful call, not an error status — read `results`.
     * 
     * Only `folder_id` and `visibility` apply, and they apply to the whole
     * batch; per-file metadata is not accepted here. Set it afterwards with
     * `PATCH /assets/{id}`.
     *
     * @param ?string $folderId
     * @param ?string $visibility
     * @throws RevenexxException
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
     * Soft-delete an asset: it stops being listed and served, its status
     * becomes `soft_deleted`, and it is scheduled for permanent deletion once
     * the retention window has passed. Until then `POST /assets/{id}/restore`
     * brings it back.
     * 
     * The stored file is not erased at this point and its bytes still count
     * against the tenant's storage quota — use `DELETE /assets/{id}/permanent`
     * to erase it and free the quota immediately.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function assetDestroy(string $id): array
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
     * Fetch one asset's record by id: name, folder, media type, size, status,
     * tags, the extracted metadata and the delivery URL (null for a private
     * asset, which is reachable only through a signed URL). Metadata only — the
     * bytes are served by `GET /assets/{id}/download`. A deleted asset is not
     * visible here until `POST /assets/{id}/restore` brings it back.
     *
     * @param string $id
     * @throws RevenexxException
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
     * Change an asset's metadata: `display_name`, `alt_text`, `description`,
     * `visibility` and `tags`. Sending `folder_id` moves it and sending `name`
     * renames it; either re-derives the asset's public delivery path, so links
     * built from the old path stop resolving. Only the fields present in the
     * request are touched.
     * 
     * The stored file itself is never modified here — to change the content,
     * upload a new asset.
     *
     * @param string $id
     * @param ?string $altText
     * @param ?string $description
     * @param ?string $displayName
     * @param ?string $folderId
     * @param ?string $name
     * @param ?array $tags
     * @param ?Visibility $visibility
     * @throws RevenexxException
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
     * Stream the asset's original file back as an attachment, named after the
     * asset. This is the authenticated read path — every call carries the
     * caller's credentials — and the bytes are the ones that were uploaded: no
     * resizing, re-encoding or other transformation is applied.
     * 
     * To let a browser, an email or a third party fetch the file without an API
     * credential, mint a link with `POST /assets/{id}/sign` instead.
     *
     * @param string $id
     * @throws RevenexxException
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
     * Erase an asset and its stored file for good and credit its bytes back to
     * the tenant's used storage. Works on live and soft-deleted assets alike.
     * 
     * This cannot be undone: there is no restore afterwards, and links to the
     * asset stop resolving at once. Use `DELETE /assets/{id}` for the
     * reversible variant. Requires the elevated (admin) tier.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function assetPermanent(string $id): array
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
     * Re-run post-upload processing for one asset. It returns to
     * `pending_processing` and the job re-extracts its metadata — and, for a 3D
     * model, re-renders the preview and mesh derivatives — before marking it
     * `available` again. The usual reason is an asset stuck in
     * `processing_failed`.
     * 
     * The stored file is neither re-uploaded nor altered, and no thumbnails are
     * produced: delivery transforms are applied on the fly when the asset is
     * served, not here.
     *
     * @param string $id
     * @throws RevenexxException
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
     * Bring a soft-deleted asset back: the scheduled permanent deletion is
     * cleared and the asset returns to `available`, listed and served again
     * under its original path. Only works while the asset is still inside its
     * retention window — once it has been erased, by
     * `DELETE /assets/{id}/permanent` or by the retention sweep, there is
     * nothing left to restore.
     *
     * @param string $id
     * @throws RevenexxException
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
     * Mint a time-limited URL that serves this asset without an API credential
     * — the way to hand a private asset to a browser, an email or a third
     * party. `ttl_seconds` sets the lifetime: one hour by default, seven days
     * at most. The response carries the URL and the lifetime it was issued
     * with.
     * 
     * The signature is checked at the delivery edge. A link cannot be revoked
     * before it expires, so keep the lifetime short. A public asset already
     * carries an unsigned delivery URL on its record and does not need this.
     *
     * @param string $id
     * @param ?int $ttlSeconds
     * @throws RevenexxException
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
     * Ingest the members of an already-uploaded archive as individual assets.
     * They land in a folder named after the archive, created under
     * `target_folder_id` or, when that is omitted, under the archive's own
     * folder, and the archive's internal directory structure is mirrored
     * beneath it. Each member goes through the same pipeline as an upload —
     * media-type sniff, virus scan, quota — and a member that fails is skipped
     * rather than failing the run. `keep_archive` (true by default) decides
     * whether the archive asset itself survives.
     * 
     * Asynchronous: this answers 202 as soon as the work is queued, so poll the
     * folder or asset list for the results. Only an asset that is an archive of
     * a supported type can be unpacked; an upload can ask for the same thing
     * inline with `unpack`.
     *
     * @param string $id
     * @param ?bool $keepArchive
     * @param ?string $targetFolderId
     * @throws RevenexxException
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
     * Return every folder in this tenant as one flat list ordered by path, each
     * record carrying its `parent_id` and its materialized `path`, so a client
     * can rebuild the tree without walking it. Not paginated and not filtered.
     * 
     * Folders hold no file content of their own — list a folder's assets with
     * `GET /assets` and `filter[folder_id]`.
     *
     * @throws RevenexxException
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
     * Create a folder under `parent_id`, or at the library root when it is
     * omitted. The `name` is slugged into a path segment and appended to the
     * parent's path; that path is what the public delivery URL of every asset
     * inside it is built from, so two siblings may not slug to the same
     * segment.
     * 
     * Creating a folder moves nothing into it — assign assets with
     * `folder_id` on upload or with `PATCH /assets/{id}`.
     *
     * @param string $name
     * @param ?string $parentId
     * @throws RevenexxException
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
     * Delete a folder. By default it has to be empty: a folder that still holds
     * folders or assets is refused, so pass `recursive=true` to delete it
     * together with everything beneath it.
     * 
     * A recursive delete soft-deletes the assets it takes with it — their files
     * are not erased and their bytes still count against the tenant's storage
     * quota, and each remains restorable through `POST /assets/{id}/restore`.
     * System folders cannot be deleted.
     *
     * @param string $id
     * @param ?bool $recursive
     * @throws RevenexxException
     * @return array
     */
    public function folderDestroy(string $id, ?bool $recursive = null): array
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
     * Fetch one folder's record by id: its name, its parent, the materialized
     * path assets inside it are delivered under, and whether it is a system
     * folder (system folders cannot be renamed, moved or deleted).
     * 
     * Its contents are not included — list them with `GET /assets` and
     * `filter[folder_id]`, and its child folders with `GET /folders`.
     *
     * @param string $id
     * @throws RevenexxException
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
     * Rename a folder with `name`, move it under a different parent with
     * `parent_id` (null for the root), or both at once. Either rewrites the
     * folder's materialized path and the path of every folder beneath it, which
     * changes the public delivery URL of every asset they hold — existing links
     * built from the old path stop resolving.
     * 
     * Nothing else about the assets changes; they are not moved, re-uploaded or
     * reprocessed. A system folder cannot be changed, a folder cannot be moved
     * inside its own subtree, and the new name has to slug to a segment free
     * among its new siblings.
     *
     * @param string $id
     * @param ?string $name
     * @param ?string $parentId
     * @throws RevenexxException
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
     * Return this tenant's SFTP sync rules, newest first, each with the account
     * and remote path it pulls from, the folder it imports into, its cron
     * schedule, whether it is enabled and when it last ran. Not paginated and
     * not filtered.
     * 
     * These are the rules themselves, not what they moved: for the files a rule
     * has actually transferred, see `GET /sftp/sync-history`.
     *
     * @throws RevenexxException
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
     * Schedule a recurring one-way pull from a directory on the tenant's SFTP
     * storage box into this media library. `sftp_account_id` selects the
     * account, `source_path` the remote directory, `target_folder_id` the
     * folder imported assets land in, and `schedule` a cron expression (every
     * five minutes when omitted) at which the rule falls due. `options` carries
     * the per-rule knobs: recursion, include/exclude and size filters, how long
     * a remote file has to have stopped changing before it is taken, and
     * whether it is deleted from the remote after a successful transfer.
     * 
     * Each run ingests every matching remote file exactly as an upload would,
     * quota, media-type and virus checks included, and records one history
     * entry per file. Creating the rule transfers nothing: the first run
     * happens when the schedule next falls due, or immediately if you call
     * `POST /sftp/rules/{id}/run`. Nothing is ever pushed back to the remote,
     * beyond the optional delete after a successful transfer. Requires the
     * elevated (admin) tier.
     *
     * @param string $sftpAccountId
     * @param string $sourcePath
     * @param ?bool $enabled
     * @param ?array $options
     * @param ?string $schedule
     * @param ?string $targetFolderId
     * @throws RevenexxException
     * @return array
     */
    public function syncRuleStore(string $sftpAccountId, string $sourcePath, ?bool $enabled = null, ?array $options = null, ?string $schedule = null, ?string $targetFolderId = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/storage/sftp/rules'
        );

        $apiParams = [];
        $apiParams['sftp_account_id'] = $sftpAccountId;
        $apiParams['source_path'] = $sourcePath;
        $apiParams['enabled'] = $enabled;
        $apiParams['options'] = $options;
        $apiParams['schedule'] = $schedule;
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
     * Delete a sync rule so it is never scheduled again. The assets it already
     * imported stay exactly where they are, its recorded run history is kept,
     * and nothing on the remote is touched.
     * 
     * To stop a rule only for a while, set `enabled` to false with
     * `PATCH /sftp/rules/{id}` instead — a deleted rule cannot be restored.
     * Requires the elevated (admin) tier.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function syncRuleDestroy(string $id): array
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
     * Fetch one sync rule's configuration by id: the account and remote path it
     * pulls from, its target folder, its cron schedule, its `options` and
     * `last_run_at`.
     * 
     * Configuration only, and `last_run_at` says when a run was last attempted,
     * not whether it succeeded. What a run did is in
     * `GET /sftp/rules/{id}/runs/{runId}` and `GET /sftp/sync-history`.
     *
     * @param string $id
     * @throws RevenexxException
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
     * Change a sync rule in place: its account, remote path, target folder,
     * schedule or options, or `enabled` to pause and resume it without deleting
     * it. Only the fields present in the request are touched, but `options` is
     * replaced wholesale rather than merged — send the whole object.
     * 
     * A change takes effect from the next run; a run already in flight is not
     * affected, and nothing a previous run imported is revisited or undone.
     * Requires the elevated (admin) tier.
     *
     * @param string $id
     * @param ?bool $enabled
     * @param ?array $options
     * @param ?string $schedule
     * @param ?string $sftpAccountId
     * @param ?string $sourcePath
     * @param ?string $targetFolderId
     * @throws RevenexxException
     * @return array
     */
    public function syncRuleUpdate(string $id, ?bool $enabled = null, ?array $options = null, ?string $schedule = null, ?string $sftpAccountId = null, ?string $sourcePath = null, ?string $targetFolderId = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/storage/sftp/rules/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams['enabled'] = $enabled;
        $apiParams['options'] = $options;
        $apiParams['schedule'] = $schedule;

        if (!is_null($sftpAccountId)) {
            $apiParams['sftp_account_id'] = $sftpAccountId;
        }

        if (!is_null($sourcePath)) {
            $apiParams['source_path'] = $sourcePath;
        }
        $apiParams['target_folder_id'] = $targetFolderId;

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
     * Queue a run of this rule straight away, outside its schedule. Answers 202
     * with the rule id as soon as the job is queued — it does not wait for the
     * transfer and it does not hand back a run id, so follow the outcome in
     * `GET /sftp/sync-history`.
     * 
     * The rule's own schedule is untouched, and this does not enable a disabled
     * rule: the job is queued but does nothing when it picks a disabled rule
     * up. Requires the elevated (admin) tier.
     *
     * @param string $id
     * @throws RevenexxException
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
     * Return the per-file protocol of one run of one sync rule: every entry the
     * run recorded, oldest first, with the remote source path, the asset it
     * produced, the bytes transferred, the duration and the error where one
     * applies — plus a `summary` counting those entries by status (`success`,
     * `skipped`, `failed`, `quarantined`).
     * 
     * Use it to find out what one run actually did. It is not paginated, and it
     * does not list a rule's runs: take the `run_id` from
     * `GET /sftp/sync-history`. An unknown `runId` under a rule that does exist
     * is an empty protocol, not a 404.
     *
     * @param string $id
     * @param string $runId
     * @throws RevenexxException
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
     * Page through this tenant's per-file sync records across every rule,
     * newest first. Each entry names the run it belongs to, the rule, the
     * remote source path, the asset it produced where there is one, the
     * outcome — `success`, `skipped`, `failed` or `quarantined` — the bytes
     * transferred and how long it took. Narrow it with `rule_id` and a
     * `from`/`to` range on when the entry was recorded; one page is returned,
     * 50 entries by default and 200 at most.
     * 
     * This is the audit trail of what SFTP sync has brought in: every file
     * taken, skipped and rejected leaves an entry, and a run that matched
     * nothing leaves one too. To read a single run whole instead, group by
     * `run_id` and call `GET /sftp/rules/{id}/runs/{runId}`.
     *
     * @param ?string $ruleId
     * @param ?string $from
     * @param ?string $to
     * @throws RevenexxException
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
     * Break this tenant's library down by asset kind — `image`, `video`,
     * `audio`, `pdf`, `document`, `archive`, `model3d`, `other` — with a count
     * and a byte total for each kind that has at least one asset, alongside the
     * tenant-wide totals.
     * 
     * A dashboard figure, not a listing: no asset is named, and nothing here
     * can be filtered. The tenant-wide byte total is the same running figure
     * `GET /tenant/usage` reports, so soft-deleted assets are counted in it.
     *
     * @throws RevenexxException
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
     * Report this tenant's storage consumption: the bytes in use, the byte
     * quota in force (null when the tenant is uncapped) and how many assets it
     * holds. This is the figure the quota check on upload compares against — it
     * is maintained as a running total on every upload and permanent delete
     * rather than summed on read.
     * 
     * Soft-deleted assets are still counted, because their files are still
     * stored; their bytes come back only once they are permanently deleted. For
     * the breakdown by asset kind, see `GET /tenant/stats`.
     *
     * @throws RevenexxException
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