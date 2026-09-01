<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;
use Revenexx\Enums\BuildRuntime;
use Revenexx\Enums\Framework;
use Revenexx\Enums\Adapter;
use Revenexx\Enums\SitesCreateTemplateDeploymentType;
use Revenexx\Enums\AppsGetDeploymentDownloadType;

class Sites extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * Get a list of all the project's sites. You can use the query params to
     * filter your results.
     *
     * @param ?array $queries
     * @param ?string $search
     * @param ?bool $total
     * @throws RevenexxException
     * @return array
     */
    public function sitesList(?array $queries = null, ?string $search = null, ?bool $total = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/sites'
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
     * Create a new site.
     *
     * @param BuildRuntime $buildRuntime
     * @param Framework $framework
     * @param string $name
     * @param string $siteId
     * @param ?Adapter $adapter
     * @param ?string $buildCommand
     * @param ?bool $enabled
     * @param ?string $fallbackFile
     * @param ?string $installCommand
     * @param ?string $installationId
     * @param ?bool $logging
     * @param ?string $outputDirectory
     * @param ?string $providerBranch
     * @param ?string $providerRepositoryId
     * @param ?string $providerRootDirectory
     * @param ?bool $providerSilentMode
     * @param ?string $specification
     * @param ?int $timeout
     * @throws RevenexxException
     * @return array
     */
    public function sitesCreate(BuildRuntime $buildRuntime, Framework $framework, string $name, string $siteId, ?Adapter $adapter = null, ?string $buildCommand = null, ?bool $enabled = null, ?string $fallbackFile = null, ?string $installCommand = null, ?string $installationId = null, ?bool $logging = null, ?string $outputDirectory = null, ?string $providerBranch = null, ?string $providerRepositoryId = null, ?string $providerRootDirectory = null, ?bool $providerSilentMode = null, ?string $specification = null, ?int $timeout = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/sites'
        );

        $apiParams = [];
        $apiParams['buildRuntime'] = $buildRuntime;
        $apiParams['framework'] = $framework;
        $apiParams['name'] = $name;
        $apiParams['siteId'] = $siteId;

        if (!is_null($adapter)) {
            $apiParams['adapter'] = $adapter;
        }

        if (!is_null($buildCommand)) {
            $apiParams['buildCommand'] = $buildCommand;
        }

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }

        if (!is_null($fallbackFile)) {
            $apiParams['fallbackFile'] = $fallbackFile;
        }

        if (!is_null($installCommand)) {
            $apiParams['installCommand'] = $installCommand;
        }

        if (!is_null($installationId)) {
            $apiParams['installationId'] = $installationId;
        }

        if (!is_null($logging)) {
            $apiParams['logging'] = $logging;
        }

        if (!is_null($outputDirectory)) {
            $apiParams['outputDirectory'] = $outputDirectory;
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

        if (!is_null($specification)) {
            $apiParams['specification'] = $specification;
        }

        if (!is_null($timeout)) {
            $apiParams['timeout'] = $timeout;
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
     * Get a list of all frameworks that are currently available on the server
     * instance.
     *
     * @throws RevenexxException
     * @return array
     */
    public function sitesListFrameworks(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/sites/frameworks'
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
     * List allowed site specifications for this instance.
     *
     * @throws RevenexxException
     * @return array
     */
    public function sitesListSpecifications(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/sites/specifications'
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
     * Delete a site by its unique ID.
     *
     * @param string $siteId
     * @throws RevenexxException
     * @return array
     */
    public function sitesDelete(string $siteId): array
    {
        $apiPath = str_replace(
            ['{siteId}'],
            [$siteId],
            '/v1/sites/{siteId}'
        );

        $apiParams = [];
        $apiParams['siteId'] = $siteId;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Get a site by its unique ID.
     *
     * @param string $siteId
     * @throws RevenexxException
     * @return array
     */
    public function sitesGet(string $siteId): array
    {
        $apiPath = str_replace(
            ['{siteId}'],
            [$siteId],
            '/v1/sites/{siteId}'
        );

        $apiParams = [];
        $apiParams['siteId'] = $siteId;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Update site by its unique ID.
     *
     * @param string $siteId
     * @param Framework $framework
     * @param string $name
     * @param ?Adapter $adapter
     * @param ?string $buildCommand
     * @param ?BuildRuntime $buildRuntime
     * @param ?bool $enabled
     * @param ?string $fallbackFile
     * @param ?string $installCommand
     * @param ?string $installationId
     * @param ?bool $logging
     * @param ?string $outputDirectory
     * @param ?string $providerBranch
     * @param ?string $providerRepositoryId
     * @param ?string $providerRootDirectory
     * @param ?bool $providerSilentMode
     * @param ?string $specification
     * @param ?int $timeout
     * @throws RevenexxException
     * @return array
     */
    public function sitesUpdate(string $siteId, Framework $framework, string $name, ?Adapter $adapter = null, ?string $buildCommand = null, ?BuildRuntime $buildRuntime = null, ?bool $enabled = null, ?string $fallbackFile = null, ?string $installCommand = null, ?string $installationId = null, ?bool $logging = null, ?string $outputDirectory = null, ?string $providerBranch = null, ?string $providerRepositoryId = null, ?string $providerRootDirectory = null, ?bool $providerSilentMode = null, ?string $specification = null, ?int $timeout = null): array
    {
        $apiPath = str_replace(
            ['{siteId}'],
            [$siteId],
            '/v1/sites/{siteId}'
        );

        $apiParams = [];
        $apiParams['siteId'] = $siteId;
        $apiParams['framework'] = $framework;
        $apiParams['name'] = $name;

        if (!is_null($adapter)) {
            $apiParams['adapter'] = $adapter;
        }

        if (!is_null($buildCommand)) {
            $apiParams['buildCommand'] = $buildCommand;
        }

        if (!is_null($buildRuntime)) {
            $apiParams['buildRuntime'] = $buildRuntime;
        }

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }

        if (!is_null($fallbackFile)) {
            $apiParams['fallbackFile'] = $fallbackFile;
        }

        if (!is_null($installCommand)) {
            $apiParams['installCommand'] = $installCommand;
        }

        if (!is_null($installationId)) {
            $apiParams['installationId'] = $installationId;
        }

        if (!is_null($logging)) {
            $apiParams['logging'] = $logging;
        }

        if (!is_null($outputDirectory)) {
            $apiParams['outputDirectory'] = $outputDirectory;
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

        if (!is_null($specification)) {
            $apiParams['specification'] = $specification;
        }

        if (!is_null($timeout)) {
            $apiParams['timeout'] = $timeout;
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
     * Update the site active deployment. Use this endpoint to switch the code
     * deployment that should be used when visitor opens your site.
     *
     * @param string $siteId
     * @param string $deploymentId
     * @throws RevenexxException
     * @return array
     */
    public function sitesUpdateSiteDeployment(string $siteId, string $deploymentId): array
    {
        $apiPath = str_replace(
            ['{siteId}'],
            [$siteId],
            '/v1/sites/{siteId}/deployment'
        );

        $apiParams = [];
        $apiParams['siteId'] = $siteId;
        $apiParams['deploymentId'] = $deploymentId;

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
     * Get a list of all the site's code deployments. You can use the query params
     * to filter your results.
     *
     * @param string $siteId
     * @param ?array $queries
     * @param ?string $search
     * @param ?bool $total
     * @throws RevenexxException
     * @return array
     */
    public function sitesListDeployments(string $siteId, ?array $queries = null, ?string $search = null, ?bool $total = null): array
    {
        $apiPath = str_replace(
            ['{siteId}'],
            [$siteId],
            '/v1/sites/{siteId}/deployments'
        );

        $apiParams = [];
        $apiParams['siteId'] = $siteId;

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
     * Create a new site code deployment. Use this endpoint to upload a new
     * version of your site code. To activate your newly uploaded code, you'll
     * need to update the site's deployment to use your new deployment ID.
     *
     * @param string $siteId
     * @param bool $activate
     * @param InputFile $code
     * @param ?string $buildCommand
     * @param ?string $installCommand
     * @param ?string $outputDirectory
     * @throws RevenexxException
     * @return array
     */
    public function sitesCreateDeployment(string $siteId, bool $activate, InputFile $code, ?string $buildCommand = null, ?string $installCommand = null, ?string $outputDirectory = null, ?callable $onProgress = null): array
    {
        $apiPath = str_replace(
            ['{siteId}'],
            [$siteId],
            '/v1/sites/{siteId}/deployments'
        );

        $apiParams = [];
        $apiParams['siteId'] = $siteId;
        $apiParams['activate'] = $activate;
        $apiParams['code'] = $code;

        if (!is_null($buildCommand)) {
            $apiParams['buildCommand'] = $buildCommand;
        }

        if (!is_null($installCommand)) {
            $apiParams['installCommand'] = $installCommand;
        }

        if (!is_null($outputDirectory)) {
            $apiParams['outputDirectory'] = $outputDirectory;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'multipart/form-data';
        // The API takes one multipart body per upload. It has no chunked or
        // resumable protocol — no content-range, no upload id, no per-chunk
        // endpoint — so the whole file always goes in a single request.
        $size = 0;
        $mimeType = null;
        $postedName = null;
        if(empty($code->getPath() ?? null)) {
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
     * Create a new build for an existing site deployment. This endpoint allows
     * you to rebuild a deployment with the updated site configuration, including
     * its commands and output directory if they have been modified. The build
     * process will be queued and executed asynchronously. The original
     * deployment's code will be preserved and used for the new build.
     *
     * @param string $siteId
     * @param string $deploymentId
     * @throws RevenexxException
     * @return array
     */
    public function sitesCreateDuplicateDeployment(string $siteId, string $deploymentId): array
    {
        $apiPath = str_replace(
            ['{siteId}'],
            [$siteId],
            '/v1/sites/{siteId}/deployments/duplicate'
        );

        $apiParams = [];
        $apiParams['siteId'] = $siteId;
        $apiParams['deploymentId'] = $deploymentId;

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
     * Create a deployment based on a template.
     * 
     * Unlike app templates, site templates have no listing on this API — that
     * catalogue is the vendor's and is not reproduced here. Take `repository`,
     * `owner`, `rootDirectory` and `reference` from wherever the template is
     * published.
     *
     * @param string $siteId
     * @param string $owner
     * @param string $reference
     * @param string $repository
     * @param string $rootDirectory
     * @param SitesCreateTemplateDeploymentType $type
     * @param ?bool $activate
     * @throws RevenexxException
     * @return array
     */
    public function sitesCreateTemplateDeployment(string $siteId, string $owner, string $reference, string $repository, string $rootDirectory, SitesCreateTemplateDeploymentType $type, ?bool $activate = null): array
    {
        $apiPath = str_replace(
            ['{siteId}'],
            [$siteId],
            '/v1/sites/{siteId}/deployments/template'
        );

        $apiParams = [];
        $apiParams['siteId'] = $siteId;
        $apiParams['owner'] = $owner;
        $apiParams['reference'] = $reference;
        $apiParams['repository'] = $repository;
        $apiParams['rootDirectory'] = $rootDirectory;
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
     * Create a deployment when a site is connected to VCS.
     * 
     * This endpoint lets you create deployment from a branch, commit, or a tag.
     *
     * @param string $siteId
     * @param string $reference
     * @param SitesCreateTemplateDeploymentType $type
     * @param ?bool $activate
     * @throws RevenexxException
     * @return array
     */
    public function sitesCreateVcsDeployment(string $siteId, string $reference, SitesCreateTemplateDeploymentType $type, ?bool $activate = null): array
    {
        $apiPath = str_replace(
            ['{siteId}'],
            [$siteId],
            '/v1/sites/{siteId}/deployments/vcs'
        );

        $apiParams = [];
        $apiParams['siteId'] = $siteId;
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
     * Delete a site deployment by its unique ID.
     *
     * @param string $siteId
     * @param string $deploymentId
     * @throws RevenexxException
     * @return array
     */
    public function sitesDeleteDeployment(string $siteId, string $deploymentId): array
    {
        $apiPath = str_replace(
            ['{siteId}', '{deploymentId}'],
            [$siteId, $deploymentId],
            '/v1/sites/{siteId}/deployments/{deploymentId}'
        );

        $apiParams = [];
        $apiParams['siteId'] = $siteId;
        $apiParams['deploymentId'] = $deploymentId;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Get a site deployment by its unique ID.
     *
     * @param string $siteId
     * @param string $deploymentId
     * @throws RevenexxException
     * @return array
     */
    public function sitesGetDeployment(string $siteId, string $deploymentId): array
    {
        $apiPath = str_replace(
            ['{siteId}', '{deploymentId}'],
            [$siteId, $deploymentId],
            '/v1/sites/{siteId}/deployments/{deploymentId}'
        );

        $apiParams = [];
        $apiParams['siteId'] = $siteId;
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
     * Get a site deployment content by its unique ID. The endpoint response
     * return with a 'Content-Disposition: attachment' header that tells the
     * browser to start downloading the file to user downloads directory.
     *
     * @param string $siteId
     * @param string $deploymentId
     * @param ?AppsGetDeploymentDownloadType $type
     * @throws RevenexxException
     * @return array
     */
    public function sitesGetDeploymentDownload(string $siteId, string $deploymentId, ?AppsGetDeploymentDownloadType $type = null): array
    {
        $apiPath = str_replace(
            ['{siteId}', '{deploymentId}'],
            [$siteId, $deploymentId],
            '/v1/sites/{siteId}/deployments/{deploymentId}/download'
        );

        $apiParams = [];
        $apiParams['siteId'] = $siteId;
        $apiParams['deploymentId'] = $deploymentId;

        if (!is_null($type)) {
            $apiParams['type'] = $type;
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
     * Cancel an ongoing site deployment build. If the build is already in
     * progress, it will be stopped and marked as canceled. If the build hasn't
     * started yet, it will be marked as canceled without executing. You cannot
     * cancel builds that have already completed (status 'ready') or failed. The
     * response includes the final build status and details.
     *
     * @param string $siteId
     * @param string $deploymentId
     * @throws RevenexxException
     * @return array
     */
    public function sitesUpdateDeploymentStatus(string $siteId, string $deploymentId): array
    {
        $apiPath = str_replace(
            ['{siteId}', '{deploymentId}'],
            [$siteId, $deploymentId],
            '/v1/sites/{siteId}/deployments/{deploymentId}/status'
        );

        $apiParams = [];
        $apiParams['siteId'] = $siteId;
        $apiParams['deploymentId'] = $deploymentId;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Get a list of all site logs. You can use the query params to filter your
     * results.
     *
     * @param string $siteId
     * @param ?array $queries
     * @param ?bool $total
     * @throws RevenexxException
     * @return array
     */
    public function sitesListLogs(string $siteId, ?array $queries = null, ?bool $total = null): array
    {
        $apiPath = str_replace(
            ['{siteId}'],
            [$siteId],
            '/v1/sites/{siteId}/logs'
        );

        $apiParams = [];
        $apiParams['siteId'] = $siteId;

        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
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
     * Delete a site log by its unique ID.
     *
     * @param string $siteId
     * @param string $logId
     * @throws RevenexxException
     * @return array
     */
    public function sitesDeleteLog(string $siteId, string $logId): array
    {
        $apiPath = str_replace(
            ['{siteId}', '{logId}'],
            [$siteId, $logId],
            '/v1/sites/{siteId}/logs/{logId}'
        );

        $apiParams = [];
        $apiParams['siteId'] = $siteId;
        $apiParams['logId'] = $logId;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Get a site request log by its unique ID.
     *
     * @param string $siteId
     * @param string $logId
     * @throws RevenexxException
     * @return array
     */
    public function sitesGetLog(string $siteId, string $logId): array
    {
        $apiPath = str_replace(
            ['{siteId}', '{logId}'],
            [$siteId, $logId],
            '/v1/sites/{siteId}/logs/{logId}'
        );

        $apiParams = [];
        $apiParams['siteId'] = $siteId;
        $apiParams['logId'] = $logId;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Get a list of all variables of a specific site.
     *
     * @param string $siteId
     * @throws RevenexxException
     * @return array
     */
    public function sitesListVariables(string $siteId): array
    {
        $apiPath = str_replace(
            ['{siteId}'],
            [$siteId],
            '/v1/sites/{siteId}/variables'
        );

        $apiParams = [];
        $apiParams['siteId'] = $siteId;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Create a new site variable. These variables can be accessed during build
     * and runtime (server-side rendering) as environment variables.
     *
     * @param string $siteId
     * @param string $key
     * @param string $value
     * @param ?bool $secret
     * @throws RevenexxException
     * @return array
     */
    public function sitesCreateVariable(string $siteId, string $key, string $value, ?bool $secret = null): array
    {
        $apiPath = str_replace(
            ['{siteId}'],
            [$siteId],
            '/v1/sites/{siteId}/variables'
        );

        $apiParams = [];
        $apiParams['siteId'] = $siteId;
        $apiParams['key'] = $key;
        $apiParams['value'] = $value;

        if (!is_null($secret)) {
            $apiParams['secret'] = $secret;
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
     * Delete a variable by its unique ID.
     *
     * @param string $siteId
     * @param string $variableId
     * @throws RevenexxException
     * @return array
     */
    public function sitesDeleteVariable(string $siteId, string $variableId): array
    {
        $apiPath = str_replace(
            ['{siteId}', '{variableId}'],
            [$siteId, $variableId],
            '/v1/sites/{siteId}/variables/{variableId}'
        );

        $apiParams = [];
        $apiParams['siteId'] = $siteId;
        $apiParams['variableId'] = $variableId;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Get a variable by its unique ID.
     *
     * @param string $siteId
     * @param string $variableId
     * @throws RevenexxException
     * @return array
     */
    public function sitesGetVariable(string $siteId, string $variableId): array
    {
        $apiPath = str_replace(
            ['{siteId}', '{variableId}'],
            [$siteId, $variableId],
            '/v1/sites/{siteId}/variables/{variableId}'
        );

        $apiParams = [];
        $apiParams['siteId'] = $siteId;
        $apiParams['variableId'] = $variableId;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Update variable by its unique ID.
     *
     * @param string $siteId
     * @param string $variableId
     * @param string $key
     * @param ?bool $secret
     * @param ?string $value
     * @throws RevenexxException
     * @return array
     */
    public function sitesUpdateVariable(string $siteId, string $variableId, string $key, ?bool $secret = null, ?string $value = null): array
    {
        $apiPath = str_replace(
            ['{siteId}', '{variableId}'],
            [$siteId, $variableId],
            '/v1/sites/{siteId}/variables/{variableId}'
        );

        $apiParams = [];
        $apiParams['siteId'] = $siteId;
        $apiParams['variableId'] = $variableId;
        $apiParams['key'] = $key;

        if (!is_null($secret)) {
            $apiParams['secret'] = $secret;
        }

        if (!is_null($value)) {
            $apiParams['value'] = $value;
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