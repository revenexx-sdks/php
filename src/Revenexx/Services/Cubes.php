<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;
use Revenexx\Enums\VcsTriggerMode;
use Revenexx\Enums\CubesCreateVcsDeploymentType;

class Cubes extends Service
{
    public function __construct(Client $client)
    {
        parent::__construct($client);
    }

    /**
     * Get a list of all the project's Cubes. You can use the query params to
     * filter your results.
     *
     * @param ?array $queries
     * @param ?string $search
     * @param ?bool $total
     * @throws RevenexxException
     * @return array
     */
    public function cubesList(?array $queries = null, ?string $search = null, ?bool $total = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/cubes'
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
     * Create a new Cube.
     *
     * @param string $cubeId
     * @param string $name
     * @param ?bool $enabled
     * @param ?string $installationId
     * @param ?bool $logging
     * @param ?string $providerBranch
     * @param ?string $providerRepositoryId
     * @param ?string $providerRootDirectory
     * @param ?bool $providerSilentMode
     * @param ?VcsTriggerMode $vcsTriggerMode
     * @throws RevenexxException
     * @return array
     */
    public function cubesCreate(string $cubeId, string $name, ?bool $enabled = null, ?string $installationId = null, ?bool $logging = null, ?string $providerBranch = null, ?string $providerRepositoryId = null, ?string $providerRootDirectory = null, ?bool $providerSilentMode = null, ?VcsTriggerMode $vcsTriggerMode = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/cubes'
        );

        $apiParams = [];
        $apiParams['cubeId'] = $cubeId;
        $apiParams['name'] = $name;

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }

        if (!is_null($installationId)) {
            $apiParams['installationId'] = $installationId;
        }

        if (!is_null($logging)) {
            $apiParams['logging'] = $logging;
        }

        if (!is_null($providerBranch)) {
            $apiParams['providerBranch'] = $providerBranch;
        }

        if (!is_null($providerRepositoryId)) {
            $apiParams['providerRepositoryId'] = $providerRepositoryId;
        }

        if (!is_null($providerRootDirectory)) {
            $apiParams['providerRootDirectory'] = $providerRootDirectory;
        }

        if (!is_null($providerSilentMode)) {
            $apiParams['providerSilentMode'] = $providerSilentMode;
        }

        if (!is_null($vcsTriggerMode)) {
            $apiParams['vcsTriggerMode'] = $vcsTriggerMode;
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
     * Delete a Cube by its unique ID.
     *
     * @param string $cubeId
     * @throws RevenexxException
     * @return array
     */
    public function cubesDelete(string $cubeId): array
    {
        $apiPath = str_replace(
            ['{cubeId}'],
            [$cubeId],
            '/v1/cubes/{cubeId}'
        );

        $apiParams = [];
        $apiParams['cubeId'] = $cubeId;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Get a Cube by its unique ID.
     *
     * @param string $cubeId
     * @throws RevenexxException
     * @return array
     */
    public function cubesGet(string $cubeId): array
    {
        $apiPath = str_replace(
            ['{cubeId}'],
            [$cubeId],
            '/v1/cubes/{cubeId}'
        );

        $apiParams = [];
        $apiParams['cubeId'] = $cubeId;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Update a Cube by its unique ID.
     *
     * @param string $cubeId
     * @param string $name
     * @param ?bool $enabled
     * @param ?string $installationId
     * @param ?bool $logging
     * @param ?string $providerBranch
     * @param ?string $providerRepositoryId
     * @param ?string $providerRootDirectory
     * @param ?bool $providerSilentMode
     * @param ?VcsTriggerMode $vcsTriggerMode
     * @throws RevenexxException
     * @return array
     */
    public function cubesUpdate(string $cubeId, string $name, ?bool $enabled = null, ?string $installationId = null, ?bool $logging = null, ?string $providerBranch = null, ?string $providerRepositoryId = null, ?string $providerRootDirectory = null, ?bool $providerSilentMode = null, ?VcsTriggerMode $vcsTriggerMode = null): array
    {
        $apiPath = str_replace(
            ['{cubeId}'],
            [$cubeId],
            '/v1/cubes/{cubeId}'
        );

        $apiParams = [];
        $apiParams['cubeId'] = $cubeId;
        $apiParams['name'] = $name;

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }

        if (!is_null($installationId)) {
            $apiParams['installationId'] = $installationId;
        }

        if (!is_null($logging)) {
            $apiParams['logging'] = $logging;
        }

        if (!is_null($providerBranch)) {
            $apiParams['providerBranch'] = $providerBranch;
        }

        if (!is_null($providerRepositoryId)) {
            $apiParams['providerRepositoryId'] = $providerRepositoryId;
        }

        if (!is_null($providerRootDirectory)) {
            $apiParams['providerRootDirectory'] = $providerRootDirectory;
        }

        if (!is_null($providerSilentMode)) {
            $apiParams['providerSilentMode'] = $providerSilentMode;
        }

        if (!is_null($vcsTriggerMode)) {
            $apiParams['vcsTriggerMode'] = $vcsTriggerMode;
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
     * Get a list of all the Cube's code deployments. You can use the query params
     * to filter your results.
     *
     * @param string $cubeId
     * @param ?array $queries
     * @param ?string $search
     * @param ?bool $total
     * @throws RevenexxException
     * @return array
     */
    public function cubesListDeployments(string $cubeId, ?array $queries = null, ?string $search = null, ?bool $total = null): array
    {
        $apiPath = str_replace(
            ['{cubeId}'],
            [$cubeId],
            '/v1/cubes/{cubeId}/deployments'
        );

        $apiParams = [];
        $apiParams['cubeId'] = $cubeId;

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
     * Create a new Cube deployment from a gzipped tar archive of the Cube
     * directory. The build bundles the Cube and submits it as a release for
     * review. The deployment ends `ready` once the release is submitted, or
     * `failed` when it is rejected, with one line per problem in `buildLogs`. The
     * review itself is not reported through this API.
     *
     * @param string $cubeId
     * @param InputFile $code
     * @param ?bool $activate
     * @throws RevenexxException
     * @return array
     */
    public function cubesCreateDeployment(string $cubeId, InputFile $code, ?bool $activate = null, ?callable $onProgress = null): array
    {
        $apiPath = str_replace(
            ['{cubeId}'],
            [$cubeId],
            '/v1/cubes/{cubeId}/deployments'
        );

        $apiParams = [];
        $apiParams['cubeId'] = $cubeId;
        $apiParams['code'] = $code;

        if (!is_null($activate)) {
            $apiParams['activate'] = $activate;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'multipart/form-data';
        // The API takes one multipart body per upload. It has no chunked or
        // resumable protocol — no content-range, no upload id, no per-chunk
        // endpoint — so the whole file always goes in a single request.
        $size = 0;
        $mimeType = null;
        $postedName = null;
        if (empty($code->getPath() ?? null)) {
            $size = strlen($code->getData());
            $mimeType = $code->getMimeType();
            $postedName = $code->getFilename();
            $apiParams['code'] = new \CURLFile('data://' . $mimeType . ';base64,' . base64_encode($code->getData()), $mimeType, $postedName);
        } else {
            $size = filesize($code->getPath());
            $mimeType = $code->getMimeType() ?? mime_content_type($code->getPath());
            $postedName = $code->getFilename() ?? basename($code->getPath());
            $apiParams['code'] = new \CURLFile($code->getPath(), $mimeType, $postedName);
        }

        $response = $this->client->call(Client::METHOD_POST, $apiPath, [
            'content-type' => 'multipart/form-data',
            ], $apiParams);

        if ($onProgress !== null) {
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
     * Create a deployment when a Cube is connected to VCS.
     *
     * This endpoint lets you create a deployment from a branch or commit.
     *
     * @param string $cubeId
     * @param string $reference
     * @param CubesCreateVcsDeploymentType $type
     * @param ?bool $activate
     * @throws RevenexxException
     * @return array
     */
    public function cubesCreateVcsDeployment(string $cubeId, string $reference, CubesCreateVcsDeploymentType $type, ?bool $activate = null): array
    {
        $apiPath = str_replace(
            ['{cubeId}'],
            [$cubeId],
            '/v1/cubes/{cubeId}/deployments/vcs'
        );

        $apiParams = [];
        $apiParams['cubeId'] = $cubeId;
        $apiParams['reference'] = $reference;
        $apiParams['type'] = $type;

        if (!is_null($activate)) {
            $apiParams['activate'] = $activate;
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
     * Get a Cube deployment by its unique ID.
     *
     * @param string $cubeId
     * @param string $deploymentId
     * @throws RevenexxException
     * @return array
     */
    public function cubesGetDeployment(string $cubeId, string $deploymentId): array
    {
        $apiPath = str_replace(
            ['{cubeId}', '{deploymentId}'],
            [$cubeId, $deploymentId],
            '/v1/cubes/{cubeId}/deployments/{deploymentId}'
        );

        $apiParams = [];
        $apiParams['cubeId'] = $cubeId;
        $apiParams['deploymentId'] = $deploymentId;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }
}
