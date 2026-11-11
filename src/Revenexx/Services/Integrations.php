<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;
use Revenexx\Enums\VcsTriggerMode;
use Revenexx\Enums\ReleaseMode;
use Revenexx\Enums\CubesCreateVcsDeploymentType;

class Integrations extends Service
{
    public function __construct(Client $client)
    {
        parent::__construct($client);
    }

    /**
     * Get a list of all the project's integration node packages. You can use the
     * query params to filter your results.
     *
     * @param ?array $queries
     * @param ?string $search
     * @param ?bool $total
     * @throws RevenexxException
     * @return array
     */
    public function integrationsList(?array $queries = null, ?string $search = null, ?bool $total = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/integrations'
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
     * Create a new integration node package.
     *
     * @param string $integrationId
     * @param string $name
     * @param ?bool $enabled
     * @param ?string $installationId
     * @param ?bool $logging
     * @param ?string $providerBranch
     * @param ?string $providerRepositoryId
     * @param ?string $providerRootDirectory
     * @param ?bool $providerSilentMode
     * @param ?bool $vcsPreviewsEnabled
     * @param ?VcsTriggerMode $vcsTriggerMode
     * @throws RevenexxException
     * @return array
     */
    public function integrationsCreate(string $integrationId, string $name, ?bool $enabled = null, ?string $installationId = null, ?bool $logging = null, ?string $providerBranch = null, ?string $providerRepositoryId = null, ?string $providerRootDirectory = null, ?bool $providerSilentMode = null, ?bool $vcsPreviewsEnabled = null, ?VcsTriggerMode $vcsTriggerMode = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/integrations'
        );

        $apiParams = [];
        $apiParams['integrationId'] = $integrationId;
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

        if (!is_null($vcsPreviewsEnabled)) {
            $apiParams['vcsPreviewsEnabled'] = $vcsPreviewsEnabled;
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
     * Delete an integration by its unique ID.
     *
     * @param string $integrationId
     * @throws RevenexxException
     * @return array
     */
    public function integrationsDelete(string $integrationId): array
    {
        $apiPath = str_replace(
            ['{integrationId}'],
            [$integrationId],
            '/v1/integrations/{integrationId}'
        );

        $apiParams = [];
        $apiParams['integrationId'] = $integrationId;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Get an integration by its unique ID.
     *
     * @param string $integrationId
     * @throws RevenexxException
     * @return array
     */
    public function integrationsGet(string $integrationId): array
    {
        $apiPath = str_replace(
            ['{integrationId}'],
            [$integrationId],
            '/v1/integrations/{integrationId}'
        );

        $apiParams = [];
        $apiParams['integrationId'] = $integrationId;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Update an integration by its unique ID.
     *
     * @param string $integrationId
     * @param string $name
     * @param ?bool $enabled
     * @param ?string $installationId
     * @param ?bool $logging
     * @param ?string $providerBranch
     * @param ?string $providerRepositoryId
     * @param ?string $providerRootDirectory
     * @param ?bool $providerSilentMode
     * @param ?bool $vcsPreviewsEnabled
     * @param ?VcsTriggerMode $vcsTriggerMode
     * @throws RevenexxException
     * @return array
     */
    public function integrationsUpdate(string $integrationId, string $name, ?bool $enabled = null, ?string $installationId = null, ?bool $logging = null, ?string $providerBranch = null, ?string $providerRepositoryId = null, ?string $providerRootDirectory = null, ?bool $providerSilentMode = null, ?bool $vcsPreviewsEnabled = null, ?VcsTriggerMode $vcsTriggerMode = null): array
    {
        $apiPath = str_replace(
            ['{integrationId}'],
            [$integrationId],
            '/v1/integrations/{integrationId}'
        );

        $apiParams = [];
        $apiParams['integrationId'] = $integrationId;
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

        if (!is_null($vcsPreviewsEnabled)) {
            $apiParams['vcsPreviewsEnabled'] = $vcsPreviewsEnabled;
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
     * Get a list of all the integration's code deployments. You can use the query
     * params to filter your results.
     *
     * @param string $integrationId
     * @param ?array $queries
     * @param ?string $search
     * @param ?bool $total
     * @throws RevenexxException
     * @return array
     */
    public function integrationsListDeployments(string $integrationId, ?array $queries = null, ?string $search = null, ?bool $total = null): array
    {
        $apiPath = str_replace(
            ['{integrationId}'],
            [$integrationId],
            '/v1/integrations/{integrationId}/deployments'
        );

        $apiParams = [];
        $apiParams['integrationId'] = $integrationId;

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
     * Create a new integration deployment from a gzipped tar archive of the node
     * package directory. The build publishes the package and registers the
     * version in the integrations registry as a release round.
     *
     * @param string $integrationId
     * @param InputFile $code
     * @param ?bool $activate
     * @param ?ReleaseMode $releaseMode
     * @throws RevenexxException
     * @return array
     */
    public function integrationsCreateDeployment(string $integrationId, InputFile $code, ?bool $activate = null, ?ReleaseMode $releaseMode = null, ?callable $onProgress = null): array
    {
        $apiPath = str_replace(
            ['{integrationId}'],
            [$integrationId],
            '/v1/integrations/{integrationId}/deployments'
        );

        $apiParams = [];
        $apiParams['integrationId'] = $integrationId;
        $apiParams['code'] = $code;

        if (!is_null($activate)) {
            $apiParams['activate'] = $activate;
        }

        if (!is_null($releaseMode)) {
            $apiParams['releaseMode'] = $releaseMode;
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
     * Create a deployment when an integration is connected to VCS.
     *
     * This endpoint lets you create a deployment from a branch or commit.
     *
     * @param string $integrationId
     * @param string $reference
     * @param CubesCreateVcsDeploymentType $type
     * @param ?bool $activate
     * @throws RevenexxException
     * @return array
     */
    public function integrationsCreateVcsDeployment(string $integrationId, string $reference, CubesCreateVcsDeploymentType $type, ?bool $activate = null): array
    {
        $apiPath = str_replace(
            ['{integrationId}'],
            [$integrationId],
            '/v1/integrations/{integrationId}/deployments/vcs'
        );

        $apiParams = [];
        $apiParams['integrationId'] = $integrationId;
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
     * Get an integration deployment by its unique ID.
     *
     * @param string $integrationId
     * @param string $deploymentId
     * @throws RevenexxException
     * @return array
     */
    public function integrationsGetDeployment(string $integrationId, string $deploymentId): array
    {
        $apiPath = str_replace(
            ['{integrationId}', '{deploymentId}'],
            [$integrationId, $deploymentId],
            '/v1/integrations/{integrationId}/deployments/{deploymentId}'
        );

        $apiParams = [];
        $apiParams['integrationId'] = $integrationId;
        $apiParams['deploymentId'] = $deploymentId;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * List the release rounds of this integration as the
     * integrations registry holds them: version, round number,
     * state (submitted, candidate, approved, rejected), release
     * mode, gate results, decision deadline and rejection reason.
     *
     * @param string $integrationId
     * @throws RevenexxException
     * @return array
     */
    public function integrationsListReleases(string $integrationId): array
    {
        $apiPath = str_replace(
            ['{integrationId}'],
            [$integrationId],
            '/v1/integrations/{integrationId}/releases'
        );

        $apiParams = [];
        $apiParams['integrationId'] = $integrationId;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Accept a preview candidate of this integration after checking
     * it. Without `version` the version of the latest registered
     * deployment is accepted; without `rc` its newest candidate
     * round. Only the integration's vendor can accept, and only a
     * candidate in preview mode.
     *
     * @param string $integrationId
     * @param ?int $rc
     * @param ?string $version
     * @throws RevenexxException
     * @return array
     */
    public function integrationsAcceptRelease(string $integrationId, ?int $rc = null, ?string $version = null): array
    {
        $apiPath = str_replace(
            ['{integrationId}'],
            [$integrationId],
            '/v1/integrations/{integrationId}/releases/accept'
        );

        $apiParams = [];
        $apiParams['integrationId'] = $integrationId;

        if (!is_null($rc)) {
            $apiParams['rc'] = $rc;
        }

        if (!is_null($version)) {
            $apiParams['version'] = $version;
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
     * Rebuild the source a release of this integration was built
     * from, so its release gates run again and a new release round
     * opens. Picks the newest deployment whose manifest names this
     * version; `commit` narrows it to that commit.
     *
     * @param string $integrationId
     * @param string $version
     * @param ?string $commit
     * @throws RevenexxException
     * @return array
     */
    public function integrationsRebuildRelease(string $integrationId, string $version, ?string $commit = null): array
    {
        $apiPath = str_replace(
            ['{integrationId}'],
            [$integrationId],
            '/v1/integrations/{integrationId}/releases/rebuild'
        );

        $apiParams = [];
        $apiParams['integrationId'] = $integrationId;
        $apiParams['version'] = $version;

        if (!is_null($commit)) {
            $apiParams['commit'] = $commit;
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
