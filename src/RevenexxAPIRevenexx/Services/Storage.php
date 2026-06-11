<?php

namespace RevenexxAPIRevenexx\Services;

use RevenexxAPIRevenexx\RevenexxAPIRevenexxException;
use RevenexxAPIRevenexx\Client;
use RevenexxAPIRevenexx\Service;
use RevenexxAPIRevenexx\InputFile;
use RevenexxAPIRevenexx\Enums\Compression;
use RevenexxAPIRevenexx\Enums\Gravity;
use RevenexxAPIRevenexx\Enums\Output;

class Storage extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * Get a list of all the storage buckets. You can use the query params to
     * filter your results.
     *
     * @param ?array $queries
     * @param ?string $search
     * @param ?bool $total
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function storageListBuckets(?array $queries = null, ?string $search = null, ?bool $total = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/storage/buckets'
        );

        $apiParams = [];

        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
        }

        if (!is_null($search)) {
            $apiParams['search'] = $search;
        }

        if (!is_null($total)) {
            $apiParams['total'] = $total;
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
     * Create a new storage bucket.
     *
     * @param string $bucketId
     * @param string $name
     * @param ?array $allowedFileExtensions
     * @param ?bool $antivirus
     * @param ?Compression $compression
     * @param ?bool $enabled
     * @param ?bool $encryption
     * @param ?bool $fileSecurity
     * @param ?int $maximumFileSize
     * @param ?array $permissions
     * @param ?bool $transformations
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function storageCreateBucket(string $bucketId, string $name, ?array $allowedFileExtensions = null, ?bool $antivirus = null, ?Compression $compression = null, ?bool $enabled = null, ?bool $encryption = null, ?bool $fileSecurity = null, ?int $maximumFileSize = null, ?array $permissions = null, ?bool $transformations = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/storage/buckets'
        );

        $apiParams = [];
        $apiParams['bucketId'] = $bucketId;
        $apiParams['name'] = $name;

        if (!is_null($allowedFileExtensions)) {
            $apiParams['allowedFileExtensions'] = $allowedFileExtensions;
        }

        if (!is_null($antivirus)) {
            $apiParams['antivirus'] = $antivirus;
        }

        if (!is_null($compression)) {
            $apiParams['compression'] = $compression;
        }

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }

        if (!is_null($encryption)) {
            $apiParams['encryption'] = $encryption;
        }

        if (!is_null($fileSecurity)) {
            $apiParams['fileSecurity'] = $fileSecurity;
        }

        if (!is_null($maximumFileSize)) {
            $apiParams['maximumFileSize'] = $maximumFileSize;
        }

        if (!is_null($permissions)) {
            $apiParams['permissions'] = $permissions;
        }

        if (!is_null($transformations)) {
            $apiParams['transformations'] = $transformations;
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
     * Delete a storage bucket by its unique ID.
     *
     * @param string $bucketId
     * @throws RevenexxAPIRevenexxException
     * @return string
     */
    public function storageDeleteBucket(string $bucketId): string
    {
        $apiPath = str_replace(
            ['{bucketId}'],
            [$bucketId],
            '/v1/storage/buckets/{bucketId}'
        );

        $apiParams = [];
        $apiParams['bucketId'] = $bucketId;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Get a storage bucket by its unique ID. This endpoint response returns a
     * JSON object with the storage bucket metadata.
     *
     * @param string $bucketId
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function storageGetBucket(string $bucketId): array
    {
        $apiPath = str_replace(
            ['{bucketId}'],
            [$bucketId],
            '/v1/storage/buckets/{bucketId}'
        );

        $apiParams = [];
        $apiParams['bucketId'] = $bucketId;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Update a storage bucket by its unique ID.
     *
     * @param string $bucketId
     * @param string $name
     * @param ?array $allowedFileExtensions
     * @param ?bool $antivirus
     * @param ?Compression $compression
     * @param ?bool $enabled
     * @param ?bool $encryption
     * @param ?bool $fileSecurity
     * @param ?int $maximumFileSize
     * @param ?array $permissions
     * @param ?bool $transformations
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function storageUpdateBucket(string $bucketId, string $name, ?array $allowedFileExtensions = null, ?bool $antivirus = null, ?Compression $compression = null, ?bool $enabled = null, ?bool $encryption = null, ?bool $fileSecurity = null, ?int $maximumFileSize = null, ?array $permissions = null, ?bool $transformations = null): array
    {
        $apiPath = str_replace(
            ['{bucketId}'],
            [$bucketId],
            '/v1/storage/buckets/{bucketId}'
        );

        $apiParams = [];
        $apiParams['bucketId'] = $bucketId;
        $apiParams['name'] = $name;

        if (!is_null($allowedFileExtensions)) {
            $apiParams['allowedFileExtensions'] = $allowedFileExtensions;
        }

        if (!is_null($antivirus)) {
            $apiParams['antivirus'] = $antivirus;
        }

        if (!is_null($compression)) {
            $apiParams['compression'] = $compression;
        }

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }

        if (!is_null($encryption)) {
            $apiParams['encryption'] = $encryption;
        }

        if (!is_null($fileSecurity)) {
            $apiParams['fileSecurity'] = $fileSecurity;
        }

        if (!is_null($maximumFileSize)) {
            $apiParams['maximumFileSize'] = $maximumFileSize;
        }

        if (!is_null($permissions)) {
            $apiParams['permissions'] = $permissions;
        }

        if (!is_null($transformations)) {
            $apiParams['transformations'] = $transformations;
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
     * Get a list of all the user files. You can use the query params to filter
     * your results.
     *
     * @param string $bucketId
     * @param ?array $queries
     * @param ?string $search
     * @param ?bool $total
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function storageListFiles(string $bucketId, ?array $queries = null, ?string $search = null, ?bool $total = null): array
    {
        $apiPath = str_replace(
            ['{bucketId}'],
            [$bucketId],
            '/v1/storage/buckets/{bucketId}/files'
        );

        $apiParams = [];
        $apiParams['bucketId'] = $bucketId;

        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
        }

        if (!is_null($search)) {
            $apiParams['search'] = $search;
        }

        if (!is_null($total)) {
            $apiParams['total'] = $total;
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
     * Create a new file. Before using this route, you should create a new bucket
     * resource using either a [server
     * integration](https://app.revenexx.com/docs/server/storage#storageCreateBucket)
     * API or directly from your Revenexx console.
     * 
     * Larger files should be uploaded using multiple requests with the
     * [content-range](https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Content-Range)
     * header to send a partial request with a maximum supported chunk of `5MB`.
     * The `content-range` header values should always be in bytes.
     * 
     * When the first request is sent, the server will return the **File** object,
     * and the subsequent part request must include the file's **id** in
     * `x-revenexx-id` header to allow the server to know that the partial upload
     * is for the existing file and not for a new one.
     * 
     * If you're creating a new file using one of the Revenexx SDKs, all the
     * chunking logic will be managed by the SDK internally.
     * 
     *
     * @param string $bucketId
     * @param string $file
     * @param string $fileId
     * @param ?array $permissions
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function storageCreateFile(string $bucketId, string $file, string $fileId, ?array $permissions = null, ?callable $onProgress = null): array
    {
        $apiPath = str_replace(
            ['{bucketId}'],
            [$bucketId],
            '/v1/storage/buckets/{bucketId}/files'
        );

        $apiParams = [];
        $apiParams['bucketId'] = $bucketId;
        $apiParams['file'] = $file;
        $apiParams['fileId'] = $fileId;

        if (!is_null($permissions)) {
            $apiParams['permissions'] = $permissions;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'multipart/form-data';

    }

    /**
     * Delete a file by its unique ID. Only users with write permissions have
     * access to delete this resource.
     *
     * @param string $bucketId
     * @param string $fileId
     * @throws RevenexxAPIRevenexxException
     * @return string
     */
    public function storageDeleteFile(string $bucketId, string $fileId): string
    {
        $apiPath = str_replace(
            ['{bucketId}', '{fileId}'],
            [$bucketId, $fileId],
            '/v1/storage/buckets/{bucketId}/files/{fileId}'
        );

        $apiParams = [];
        $apiParams['bucketId'] = $bucketId;
        $apiParams['fileId'] = $fileId;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Get a file by its unique ID. This endpoint response returns a JSON object
     * with the file metadata.
     *
     * @param string $bucketId
     * @param string $fileId
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function storageGetFile(string $bucketId, string $fileId): array
    {
        $apiPath = str_replace(
            ['{bucketId}', '{fileId}'],
            [$bucketId, $fileId],
            '/v1/storage/buckets/{bucketId}/files/{fileId}'
        );

        $apiParams = [];
        $apiParams['bucketId'] = $bucketId;
        $apiParams['fileId'] = $fileId;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Update a file by its unique ID. Only users with write permissions have
     * access to update this resource.
     *
     * @param string $bucketId
     * @param string $fileId
     * @param ?string $name
     * @param ?array $permissions
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function storageUpdateFile(string $bucketId, string $fileId, ?string $name = null, ?array $permissions = null): array
    {
        $apiPath = str_replace(
            ['{bucketId}', '{fileId}'],
            [$bucketId, $fileId],
            '/v1/storage/buckets/{bucketId}/files/{fileId}'
        );

        $apiParams = [];
        $apiParams['bucketId'] = $bucketId;
        $apiParams['fileId'] = $fileId;

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

        if (!is_null($permissions)) {
            $apiParams['permissions'] = $permissions;
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
     * Get a file content by its unique ID. The endpoint response return with a
     * 'Content-Disposition: attachment' header that tells the browser to start
     * downloading the file to user downloads directory.
     *
     * @param string $bucketId
     * @param string $fileId
     * @param ?string $token
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function storageGetFileDownload(string $bucketId, string $fileId, ?string $token = null): array
    {
        $apiPath = str_replace(
            ['{bucketId}', '{fileId}'],
            [$bucketId, $fileId],
            '/v1/storage/buckets/{bucketId}/files/{fileId}/download'
        );

        $apiParams = [];
        $apiParams['bucketId'] = $bucketId;
        $apiParams['fileId'] = $fileId;

        if (!is_null($token)) {
            $apiParams['token'] = $token;
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
     * Get a file preview image. Currently, this method supports preview for image
     * files (jpg, png, and gif), other supported formats, like pdf, docs, slides,
     * and spreadsheets, will return the file icon image. You can also pass query
     * string arguments for cutting and resizing your preview image. Preview is
     * supported only for image files smaller than 10MB.
     *
     * @param string $bucketId
     * @param string $fileId
     * @param ?int $width
     * @param ?int $height
     * @param ?Gravity $gravity
     * @param ?int $quality
     * @param ?int $borderWidth
     * @param ?string $borderColor
     * @param ?int $borderRadius
     * @param ?float $opacity
     * @param ?int $rotation
     * @param ?string $background
     * @param ?Output $output
     * @param ?string $token
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function storageGetFilePreview(string $bucketId, string $fileId, ?int $width = null, ?int $height = null, ?Gravity $gravity = null, ?int $quality = null, ?int $borderWidth = null, ?string $borderColor = null, ?int $borderRadius = null, ?float $opacity = null, ?int $rotation = null, ?string $background = null, ?Output $output = null, ?string $token = null): array
    {
        $apiPath = str_replace(
            ['{bucketId}', '{fileId}'],
            [$bucketId, $fileId],
            '/v1/storage/buckets/{bucketId}/files/{fileId}/preview'
        );

        $apiParams = [];
        $apiParams['bucketId'] = $bucketId;
        $apiParams['fileId'] = $fileId;

        if (!is_null($width)) {
            $apiParams['width'] = $width;
        }

        if (!is_null($height)) {
            $apiParams['height'] = $height;
        }

        if (!is_null($gravity)) {
            $apiParams['gravity'] = $gravity;
        }

        if (!is_null($quality)) {
            $apiParams['quality'] = $quality;
        }

        if (!is_null($borderWidth)) {
            $apiParams['borderWidth'] = $borderWidth;
        }

        if (!is_null($borderColor)) {
            $apiParams['borderColor'] = $borderColor;
        }

        if (!is_null($borderRadius)) {
            $apiParams['borderRadius'] = $borderRadius;
        }

        if (!is_null($opacity)) {
            $apiParams['opacity'] = $opacity;
        }

        if (!is_null($rotation)) {
            $apiParams['rotation'] = $rotation;
        }

        if (!is_null($background)) {
            $apiParams['background'] = $background;
        }

        if (!is_null($output)) {
            $apiParams['output'] = $output;
        }

        if (!is_null($token)) {
            $apiParams['token'] = $token;
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
     * Get a file content by its unique ID. This endpoint is similar to the
     * download method but returns with no  'Content-Disposition: attachment'
     * header.
     *
     * @param string $bucketId
     * @param string $fileId
     * @param ?string $token
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function storageGetFileView(string $bucketId, string $fileId, ?string $token = null): array
    {
        $apiPath = str_replace(
            ['{bucketId}', '{fileId}'],
            [$bucketId, $fileId],
            '/v1/storage/buckets/{bucketId}/files/{fileId}/view'
        );

        $apiParams = [];
        $apiParams['bucketId'] = $bucketId;
        $apiParams['fileId'] = $fileId;

        if (!is_null($token)) {
            $apiParams['token'] = $token;
        }

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }
}