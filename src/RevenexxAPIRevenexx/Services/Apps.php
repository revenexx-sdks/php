<?php

namespace RevenexxAPIRevenexx\Services;

use RevenexxAPIRevenexx\RevenexxAPIRevenexxException;
use RevenexxAPIRevenexx\Client;
use RevenexxAPIRevenexx\Service;
use RevenexxAPIRevenexx\InputFile;
use RevenexxAPIRevenexx\Enums\Runtime;
use RevenexxAPIRevenexx\Enums\Scopes;
use RevenexxAPIRevenexx\Enums\Runtimes;
use RevenexxAPIRevenexx\Enums\UseCases;
use RevenexxAPIRevenexx\Enums\Range;
use RevenexxAPIRevenexx\Enums\Type;
use RevenexxAPIRevenexx\Enums\Method;

class Apps extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * List all Apps in the active project. Pass `search` to filter by name.
     *
     * @param ?array $queries
     * @param ?string $search
     * @param ?bool $total
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function appsList(?array $queries = null, ?string $search = null, ?bool $total = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/apps'
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
     * Create a new revenexx App. An App is the deployment surface for code that
     * runs on the platform — backend jobs, APIs, integrations. The created App
     * owns subsequent deployments and executions.
     * 
     * Phase 1 mirrors the underlying Functions runtime 1:1; future phases will
     * add manifest validation, registry coupling and schema migrations.
     *
     * @param string $functionId
     * @param string $name
     * @param Runtime $runtime
     * @param ?string $commands
     * @param ?bool $enabled
     * @param ?string $entrypoint
     * @param ?array $events
     * @param ?array $execute
     * @param ?string $installationId
     * @param ?bool $logging
     * @param ?string $providerBranch
     * @param ?string $providerRepositoryId
     * @param ?string $providerRootDirectory
     * @param ?bool $providerSilentMode
     * @param ?string $schedule
     * @param ?array $scopes
     * @param ?string $specification
     * @param ?int $timeout
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function appsCreate(string $functionId, string $name, Runtime $runtime, ?string $commands = null, ?bool $enabled = null, ?string $entrypoint = null, ?array $events = null, ?array $execute = null, ?string $installationId = null, ?bool $logging = null, ?string $providerBranch = null, ?string $providerRepositoryId = null, ?string $providerRootDirectory = null, ?bool $providerSilentMode = null, ?string $schedule = null, ?array $scopes = null, ?string $specification = null, ?int $timeout = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/apps'
        );

        $apiParams = [];
        $apiParams['functionId'] = $functionId;
        $apiParams['name'] = $name;
        $apiParams['runtime'] = $runtime;

        if (!is_null($commands)) {
            $apiParams['commands'] = $commands;
        }

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }

        if (!is_null($entrypoint)) {
            $apiParams['entrypoint'] = $entrypoint;
        }

        if (!is_null($events)) {
            $apiParams['events'] = $events;
        }

        if (!is_null($execute)) {
            $apiParams['execute'] = $execute;
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

        if (!is_null($schedule)) {
            $apiParams['schedule'] = $schedule;
        }

        if (!is_null($scopes)) {
            $apiParams['scopes'] = $scopes;
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
     * List apps published to the Marketplace. Proxies the App Registry on Console
     * with `?published=true` filter.
     *
     * @param ?string $search
     * @param ?int $perPage
     * @param ?int $page
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function appsListMarketplace(?string $search = null, ?int $perPage = null, ?int $page = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/apps/marketplace'
        );

        $apiParams = [];

        if (!is_null($search)) {
            $apiParams['search'] = $search;
        }

        if (!is_null($perPage)) {
            $apiParams['per_page'] = $perPage;
        }

        if (!is_null($page)) {
            $apiParams['page'] = $page;
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
     * Install a Marketplace app on the calling project's tenant. Body: { owner,
     * name }.
     *
     * @param string $name
     * @param string $owner
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function appsInstallFromMarketplace(string $name, string $owner): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/apps/marketplace/install'
        );

        $apiParams = [];
        $apiParams['name'] = $name;
        $apiParams['owner'] = $owner;

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
     * Get a list of all runtimes available for an App. Identical content to
     * `functions.listRuntimes()`.
     *
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function appsListRuntimes(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/apps/runtimes'
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
     * List the compute specifications (CPU + memory) available to Apps in this
     * project.
     *
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function appsListSpecifications(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/apps/specifications'
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
     * List the curated catalogue of App templates that can be used as starting
     * points.
     *
     * @param ?array $runtimes
     * @param ?array $useCases
     * @param ?int $limit
     * @param ?int $offset
     * @param ?bool $total
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function appsListTemplates(?array $runtimes = null, ?array $useCases = null, ?int $limit = null, ?int $offset = null, ?bool $total = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/apps/templates'
        );

        $apiParams = [];

        if (!is_null($runtimes)) {
            $apiParams['runtimes'] = $runtimes;
        }

        if (!is_null($useCases)) {
            $apiParams['useCases'] = $useCases;
        }

        if (!is_null($limit)) {
            $apiParams['limit'] = $limit;
        }

        if (!is_null($offset)) {
            $apiParams['offset'] = $offset;
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
     * Get a single App template by its ID.
     *
     * @param string $templateId
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function appsGetTemplate(string $templateId): array
    {
        $apiPath = str_replace(
            ['{templateId}'],
            [$templateId],
            '/v1/apps/templates/{templateId}'
        );

        $apiParams = [];
        $apiParams['templateId'] = $templateId;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Get aggregated usage stats across all Apps in the project for the requested
     * time range.
     *
     * @param ?Range $range
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function appsListUsage(?Range $range = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/apps/usage'
        );

        $apiParams = [];

        if (!is_null($range)) {
            $apiParams['range'] = $range;
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
     * Delete an App and all of its deployments. Cascades to the App Registry —
     * Console removes the matching `RegisteredApp` row.
     *
     * @param string $functionId
     * @throws RevenexxAPIRevenexxException
     * @return string
     */
    public function appsDelete(string $functionId): string
    {
        $apiPath = str_replace(
            ['{functionId}'],
            [$functionId],
            '/v1/apps/{functionId}'
        );

        $apiParams = [];
        $apiParams['functionId'] = $functionId;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Get an App by its unique ID.
     *
     * @param string $functionId
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function appsGet(string $functionId): array
    {
        $apiPath = str_replace(
            ['{functionId}'],
            [$functionId],
            '/v1/apps/{functionId}'
        );

        $apiParams = [];
        $apiParams['functionId'] = $functionId;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Update an App. Use this endpoint to rename, change runtime, schedule,
     * environment variables and other configuration.
     *
     * @param string $functionId
     * @param string $name
     * @param ?string $commands
     * @param ?bool $enabled
     * @param ?string $entrypoint
     * @param ?array $events
     * @param ?array $execute
     * @param ?string $installationId
     * @param ?bool $logging
     * @param ?string $providerBranch
     * @param ?string $providerRepositoryId
     * @param ?string $providerRootDirectory
     * @param ?bool $providerSilentMode
     * @param ?Runtime $runtime
     * @param ?string $schedule
     * @param ?array $scopes
     * @param ?string $specification
     * @param ?int $timeout
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function appsUpdate(string $functionId, string $name, ?string $commands = null, ?bool $enabled = null, ?string $entrypoint = null, ?array $events = null, ?array $execute = null, ?string $installationId = null, ?bool $logging = null, ?string $providerBranch = null, ?string $providerRepositoryId = null, ?string $providerRootDirectory = null, ?bool $providerSilentMode = null, ?Runtime $runtime = null, ?string $schedule = null, ?array $scopes = null, ?string $specification = null, ?int $timeout = null): array
    {
        $apiPath = str_replace(
            ['{functionId}'],
            [$functionId],
            '/v1/apps/{functionId}'
        );

        $apiParams = [];
        $apiParams['functionId'] = $functionId;
        $apiParams['name'] = $name;

        if (!is_null($commands)) {
            $apiParams['commands'] = $commands;
        }

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }

        if (!is_null($entrypoint)) {
            $apiParams['entrypoint'] = $entrypoint;
        }

        if (!is_null($events)) {
            $apiParams['events'] = $events;
        }

        if (!is_null($execute)) {
            $apiParams['execute'] = $execute;
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

        if (!is_null($runtime)) {
            $apiParams['runtime'] = $runtime;
        }

        if (!is_null($schedule)) {
            $apiParams['schedule'] = $schedule;
        }

        if (!is_null($scopes)) {
            $apiParams['scopes'] = $scopes;
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
     * Set the active deployment for an App. The chosen deployment must already be
     * `ready`.
     *
     * @param string $functionId
     * @param string $deploymentId
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function appsUpdateDeployment(string $functionId, string $deploymentId): array
    {
        $apiPath = str_replace(
            ['{functionId}'],
            [$functionId],
            '/v1/apps/{functionId}/deployment'
        );

        $apiParams = [];
        $apiParams['functionId'] = $functionId;
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
     * List the deployment history of an App.
     *
     * @param string $functionId
     * @param ?array $queries
     * @param ?string $search
     * @param ?bool $total
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function appsListDeployments(string $functionId, ?array $queries = null, ?string $search = null, ?bool $total = null): array
    {
        $apiPath = str_replace(
            ['{functionId}'],
            [$functionId],
            '/v1/apps/{functionId}/deployments'
        );

        $apiParams = [];
        $apiParams['functionId'] = $functionId;

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
     * Upload a new code deployment for an App. Accepts a `.tar.gz`
     * archive containing the App source. Phase 2 will extract the
     * manifest from this archive and validate it against the App
     * Registry before kicking off the build.
     *
     * @param string $functionId
     * @param bool $activate
     * @param string $code
     * @param ?string $commands
     * @param ?string $entrypoint
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function appsCreateDeployment(string $functionId, bool $activate, string $code, ?string $commands = null, ?string $entrypoint = null, ?callable $onProgress = null): array
    {
        $apiPath = str_replace(
            ['{functionId}'],
            [$functionId],
            '/v1/apps/{functionId}/deployments'
        );

        $apiParams = [];
        $apiParams['functionId'] = $functionId;
        $apiParams['activate'] = $activate;
        $apiParams['code'] = $code;

        if (!is_null($commands)) {
            $apiParams['commands'] = $commands;
        }

        if (!is_null($entrypoint)) {
            $apiParams['entrypoint'] = $entrypoint;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'multipart/form-data';

    }

    /**
     * Re-deploy an existing build under a new deployment ID. Useful for promoting
     * a known-good preview build to production without rebuilding.
     *
     * @param string $functionId
     * @param string $deploymentId
     * @param ?string $buildId
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function appsCreateDuplicateDeployment(string $functionId, string $deploymentId, ?string $buildId = null): array
    {
        $apiPath = str_replace(
            ['{functionId}'],
            [$functionId],
            '/v1/apps/{functionId}/deployments/duplicate'
        );

        $apiParams = [];
        $apiParams['functionId'] = $functionId;
        $apiParams['deploymentId'] = $deploymentId;

        if (!is_null($buildId)) {
            $apiParams['buildId'] = $buildId;
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
     * Create a new App deployment from a template in the App Templates catalogue.
     *
     * @param string $functionId
     * @param string $owner
     * @param string $reference
     * @param string $repository
     * @param string $rootDirectory
     * @param Type $type
     * @param ?bool $activate
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function appsCreateTemplateDeployment(string $functionId, string $owner, string $reference, string $repository, string $rootDirectory, Type $type, ?bool $activate = null): array
    {
        $apiPath = str_replace(
            ['{functionId}'],
            [$functionId],
            '/v1/apps/{functionId}/deployments/template'
        );

        $apiParams = [];
        $apiParams['functionId'] = $functionId;
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
     * Trigger a new deployment from the App's connected Git repository.
     *
     * @param string $functionId
     * @param string $reference
     * @param Type $type
     * @param ?bool $activate
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function appsCreateVcsDeployment(string $functionId, string $reference, Type $type, ?bool $activate = null): array
    {
        $apiPath = str_replace(
            ['{functionId}'],
            [$functionId],
            '/v1/apps/{functionId}/deployments/vcs'
        );

        $apiParams = [];
        $apiParams['functionId'] = $functionId;
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
     * Delete a deployment. The active deployment cannot be deleted while it is
     * active — switch first via the deployment-update endpoint.
     *
     * @param string $functionId
     * @param string $deploymentId
     * @throws RevenexxAPIRevenexxException
     * @return string
     */
    public function appsDeleteDeployment(string $functionId, string $deploymentId): string
    {
        $apiPath = str_replace(
            ['{functionId}', '{deploymentId}'],
            [$functionId, $deploymentId],
            '/v1/apps/{functionId}/deployments/{deploymentId}'
        );

        $apiParams = [];
        $apiParams['functionId'] = $functionId;
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
     * Get a deployment by its unique ID.
     *
     * @param string $functionId
     * @param string $deploymentId
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function appsGetDeployment(string $functionId, string $deploymentId): array
    {
        $apiPath = str_replace(
            ['{functionId}', '{deploymentId}'],
            [$functionId, $deploymentId],
            '/v1/apps/{functionId}/deployments/{deploymentId}'
        );

        $apiParams = [];
        $apiParams['functionId'] = $functionId;
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
     * Get a redirect URL to download the source archive of an App deployment.
     * Useful for re-running a build locally or auditing what was deployed.
     *
     * @param string $functionId
     * @param string $deploymentId
     * @param ?Type $type
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function appsGetDeploymentDownload(string $functionId, string $deploymentId, ?Type $type = null): array
    {
        $apiPath = str_replace(
            ['{functionId}', '{deploymentId}'],
            [$functionId, $deploymentId],
            '/v1/apps/{functionId}/deployments/{deploymentId}/download'
        );

        $apiParams = [];
        $apiParams['functionId'] = $functionId;
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
     * Cancel an in-progress deployment build. Used by the Cockpit "Cancel build"
     * affordance.
     *
     * @param string $functionId
     * @param string $deploymentId
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function appsUpdateDeploymentStatus(string $functionId, string $deploymentId): array
    {
        $apiPath = str_replace(
            ['{functionId}', '{deploymentId}'],
            [$functionId, $deploymentId],
            '/v1/apps/{functionId}/deployments/{deploymentId}/status'
        );

        $apiParams = [];
        $apiParams['functionId'] = $functionId;
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
     * List the execution history of an App.
     *
     * @param string $functionId
     * @param ?array $queries
     * @param ?bool $total
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function appsListExecutions(string $functionId, ?array $queries = null, ?bool $total = null): array
    {
        $apiPath = str_replace(
            ['{functionId}'],
            [$functionId],
            '/v1/apps/{functionId}/executions'
        );

        $apiParams = [];
        $apiParams['functionId'] = $functionId;

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
     * Trigger an App execution. Use the optional `body`, `path`, `method` and
     * `headers` parameters to invoke the App as if from an HTTP request.
     *
     * @param string $functionId
     * @param ?bool $async
     * @param ?string $body
     * @param ?array $headers
     * @param ?Method $method
     * @param ?string $xpath
     * @param ?string $scheduledAt
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function appsCreateExecution(string $functionId, ?bool $async = null, ?string $body = null, ?array $headers = null, ?Method $method = null, ?string $xpath = null, ?string $scheduledAt = null): array
    {
        $apiPath = str_replace(
            ['{functionId}'],
            [$functionId],
            '/v1/apps/{functionId}/executions'
        );

        $apiParams = [];
        $apiParams['functionId'] = $functionId;

        if (!is_null($async)) {
            $apiParams['async'] = $async;
        }

        if (!is_null($body)) {
            $apiParams['body'] = $body;
        }

        if (!is_null($headers)) {
            $apiParams['headers'] = $headers;
        }

        if (!is_null($method)) {
            $apiParams['method'] = $method;
        }

        if (!is_null($xpath)) {
            $apiParams['path'] = $xpath;
        }

        if (!is_null($scheduledAt)) {
            $apiParams['scheduledAt'] = $scheduledAt;
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
     * Delete an App execution by its unique ID.
     *
     * @param string $functionId
     * @param string $executionId
     * @throws RevenexxAPIRevenexxException
     * @return string
     */
    public function appsDeleteExecution(string $functionId, string $executionId): string
    {
        $apiPath = str_replace(
            ['{functionId}', '{executionId}'],
            [$functionId, $executionId],
            '/v1/apps/{functionId}/executions/{executionId}'
        );

        $apiParams = [];
        $apiParams['functionId'] = $functionId;
        $apiParams['executionId'] = $executionId;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Get an App execution by its unique ID.
     *
     * @param string $functionId
     * @param string $executionId
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function appsGetExecution(string $functionId, string $executionId): array
    {
        $apiPath = str_replace(
            ['{functionId}', '{executionId}'],
            [$functionId, $executionId],
            '/v1/apps/{functionId}/executions/{executionId}'
        );

        $apiParams = [];
        $apiParams['functionId'] = $functionId;
        $apiParams['executionId'] = $executionId;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Read-through view of the App's App Registry row — visibility +
     * Marketplace publish flag. Used by Cockpit to render the Publish/Unpublish
     * button correctly on cold load.
     *
     * @param string $functionId
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function appsGetMarketplaceStatus(string $functionId): array
    {
        $apiPath = str_replace(
            ['{functionId}'],
            [$functionId],
            '/v1/apps/{functionId}/marketplace-status'
        );

        $apiParams = [];
        $apiParams['functionId'] = $functionId;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Remove this App from the Marketplace listing. Existing tenant installations
     * are unaffected. Idempotent.
     *
     * @param string $functionId
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function appsUnpublish(string $functionId): array
    {
        $apiPath = str_replace(
            ['{functionId}'],
            [$functionId],
            '/v1/apps/{functionId}/publish'
        );

        $apiParams = [];
        $apiParams['functionId'] = $functionId;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Publish this App to the Marketplace. The App must have at
     * least one `ready` deployment with a registered manifest,
     * and its visibility (derived from `billing.json`) must be
     * `public` or `included`. Idempotent.
     *
     * @param string $functionId
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function appsPublish(string $functionId): array
    {
        $apiPath = str_replace(
            ['{functionId}'],
            [$functionId],
            '/v1/apps/{functionId}/publish'
        );

        $apiParams = [];
        $apiParams['functionId'] = $functionId;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Get usage stats for a single App over the requested time range.
     *
     * @param string $functionId
     * @param ?Range $range
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function appsGetUsage(string $functionId, ?Range $range = null): array
    {
        $apiPath = str_replace(
            ['{functionId}'],
            [$functionId],
            '/v1/apps/{functionId}/usage'
        );

        $apiParams = [];
        $apiParams['functionId'] = $functionId;

        if (!is_null($range)) {
            $apiParams['range'] = $range;
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
     * List all environment variables defined for the App.
     *
     * @param string $functionId
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function appsListVariables(string $functionId): array
    {
        $apiPath = str_replace(
            ['{functionId}'],
            [$functionId],
            '/v1/apps/{functionId}/variables'
        );

        $apiParams = [];
        $apiParams['functionId'] = $functionId;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Create a new App environment variable. These are passed into the App at
     * runtime as `process.env.*`.
     *
     * @param string $functionId
     * @param string $key
     * @param string $value
     * @param ?bool $secret
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function appsCreateVariable(string $functionId, string $key, string $value, ?bool $secret = null): array
    {
        $apiPath = str_replace(
            ['{functionId}'],
            [$functionId],
            '/v1/apps/{functionId}/variables'
        );

        $apiParams = [];
        $apiParams['functionId'] = $functionId;
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
     * Delete an App environment variable.
     *
     * @param string $functionId
     * @param string $variableId
     * @throws RevenexxAPIRevenexxException
     * @return string
     */
    public function appsDeleteVariable(string $functionId, string $variableId): string
    {
        $apiPath = str_replace(
            ['{functionId}', '{variableId}'],
            [$functionId, $variableId],
            '/v1/apps/{functionId}/variables/{variableId}'
        );

        $apiParams = [];
        $apiParams['functionId'] = $functionId;
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
     * Get an App variable by its unique ID.
     *
     * @param string $functionId
     * @param string $variableId
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function appsGetVariable(string $functionId, string $variableId): array
    {
        $apiPath = str_replace(
            ['{functionId}', '{variableId}'],
            [$functionId, $variableId],
            '/v1/apps/{functionId}/variables/{variableId}'
        );

        $apiParams = [];
        $apiParams['functionId'] = $functionId;
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
     * Update an App environment variable.
     *
     * @param string $functionId
     * @param string $variableId
     * @param string $key
     * @param ?bool $secret
     * @param ?string $value
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function appsUpdateVariable(string $functionId, string $variableId, string $key, ?bool $secret = null, ?string $value = null): array
    {
        $apiPath = str_replace(
            ['{functionId}', '{variableId}'],
            [$functionId, $variableId],
            '/v1/apps/{functionId}/variables/{variableId}'
        );

        $apiParams = [];
        $apiParams['functionId'] = $functionId;
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