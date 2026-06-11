<?php

namespace RevenexxAPIRevenexx\Services;

use RevenexxAPIRevenexx\Client;
use RevenexxAPIRevenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;
use RevenexxAPIRevenexx\Enums\Runtime;
use RevenexxAPIRevenexx\Enums\Scopes;
use RevenexxAPIRevenexx\Enums\Runtimes;
use RevenexxAPIRevenexx\Enums\UseCases;
use RevenexxAPIRevenexx\Enums\Range;
use RevenexxAPIRevenexx\Enums\Type;
use RevenexxAPIRevenexx\Enums\Method;

final class AppsTest extends TestCase {
    private $client;
    private $apps;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->apps = new Apps($this->client);
    }

    public function testMethodAppsList(): void {

        $data = array(
            "functions" => array(),
            "total" => );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->apps->appsList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAppsCreate(): void {

        $data = array(
            "\$createdAt" => "",
            "\$id" => "",
            "\$updatedAt" => "",
            "commands" => "",
            "deploymentCreatedAt" => "",
            "deploymentId" => "",
            "enabled" => true,
            "entrypoint" => "",
            "events" => array(),
            "execute" => array(),
            "installationId" => "",
            "latestDeploymentCreatedAt" => "",
            "latestDeploymentId" => "",
            "latestDeploymentStatus" => "",
            "live" => true,
            "logging" => true,
            "name" => "",
            "providerBranch" => "",
            "providerRepositoryId" => "",
            "providerRootDirectory" => "",
            "providerSilentMode" => true,
            "runtime" => "",
            "schedule" => "",
            "scopes" => array(),
            "specification" => "",
            "timeout" => ,
            "vars" => array(),
            "version" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->apps->appsCreate(
            "",
            "",
            Runtime::NODE180()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAppsListMarketplace(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->apps->appsListMarketplace(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAppsInstallFromMarketplace(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->apps->appsInstallFromMarketplace(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAppsListRuntimes(): void {

        $data = array(
            "runtimes" => array(),
            "total" => );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->apps->appsListRuntimes(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAppsListSpecifications(): void {

        $data = array(
            "specifications" => array(),
            "total" => );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->apps->appsListSpecifications(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAppsListTemplates(): void {

        $data = array(
            "templates" => array(),
            "total" => );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->apps->appsListTemplates(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAppsGetTemplate(): void {

        $data = array(
            "cron" => "",
            "events" => array(),
            "icon" => "",
            "id" => "",
            "instructions" => "",
            "name" => "",
            "permissions" => array(),
            "providerOwner" => "",
            "providerRepositoryId" => "",
            "providerVersion" => "",
            "runtimes" => array(),
            "scopes" => array(),
            "tagline" => "",
            "timeout" => ,
            "useCases" => array(),
            "variables" => array(),
            "vcsProvider" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->apps->appsGetTemplate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAppsListUsage(): void {

        $data = array(
            "builds" => array(),
            "buildsFailed" => array(),
            "buildsFailedTotal" => ,
            "buildsMbSeconds" => array(),
            "buildsMbSecondsTotal" => ,
            "buildsStorage" => array(),
            "buildsStorageTotal" => ,
            "buildsSuccess" => array(),
            "buildsSuccessTotal" => ,
            "buildsTime" => array(),
            "buildsTimeTotal" => ,
            "buildsTotal" => ,
            "deployments" => array(),
            "deploymentsStorage" => array(),
            "deploymentsStorageTotal" => ,
            "deploymentsTotal" => ,
            "executions" => array(),
            "executionsMbSeconds" => array(),
            "executionsMbSecondsTotal" => ,
            "executionsTime" => array(),
            "executionsTimeTotal" => ,
            "executionsTotal" => ,
            "functions" => array(),
            "functionsTotal" => ,
            "range" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->apps->appsListUsage(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAppsDelete(): void {

        $data = '';

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->apps->appsDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAppsGet(): void {

        $data = array(
            "\$createdAt" => "",
            "\$id" => "",
            "\$updatedAt" => "",
            "commands" => "",
            "deploymentCreatedAt" => "",
            "deploymentId" => "",
            "enabled" => true,
            "entrypoint" => "",
            "events" => array(),
            "execute" => array(),
            "installationId" => "",
            "latestDeploymentCreatedAt" => "",
            "latestDeploymentId" => "",
            "latestDeploymentStatus" => "",
            "live" => true,
            "logging" => true,
            "name" => "",
            "providerBranch" => "",
            "providerRepositoryId" => "",
            "providerRootDirectory" => "",
            "providerSilentMode" => true,
            "runtime" => "",
            "schedule" => "",
            "scopes" => array(),
            "specification" => "",
            "timeout" => ,
            "vars" => array(),
            "version" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->apps->appsGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAppsUpdate(): void {

        $data = array(
            "\$createdAt" => "",
            "\$id" => "",
            "\$updatedAt" => "",
            "commands" => "",
            "deploymentCreatedAt" => "",
            "deploymentId" => "",
            "enabled" => true,
            "entrypoint" => "",
            "events" => array(),
            "execute" => array(),
            "installationId" => "",
            "latestDeploymentCreatedAt" => "",
            "latestDeploymentId" => "",
            "latestDeploymentStatus" => "",
            "live" => true,
            "logging" => true,
            "name" => "",
            "providerBranch" => "",
            "providerRepositoryId" => "",
            "providerRootDirectory" => "",
            "providerSilentMode" => true,
            "runtime" => "",
            "schedule" => "",
            "scopes" => array(),
            "specification" => "",
            "timeout" => ,
            "vars" => array(),
            "version" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->apps->appsUpdate(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAppsUpdateDeployment(): void {

        $data = array(
            "\$createdAt" => "",
            "\$id" => "",
            "\$updatedAt" => "",
            "commands" => "",
            "deploymentCreatedAt" => "",
            "deploymentId" => "",
            "enabled" => true,
            "entrypoint" => "",
            "events" => array(),
            "execute" => array(),
            "installationId" => "",
            "latestDeploymentCreatedAt" => "",
            "latestDeploymentId" => "",
            "latestDeploymentStatus" => "",
            "live" => true,
            "logging" => true,
            "name" => "",
            "providerBranch" => "",
            "providerRepositoryId" => "",
            "providerRootDirectory" => "",
            "providerSilentMode" => true,
            "runtime" => "",
            "schedule" => "",
            "scopes" => array(),
            "specification" => "",
            "timeout" => ,
            "vars" => array(),
            "version" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->apps->appsUpdateDeployment(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAppsListDeployments(): void {

        $data = array(
            "deployments" => array(),
            "total" => );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->apps->appsListDeployments(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAppsCreateDeployment(): void {

        $data = array(
            "\$createdAt" => "",
            "\$id" => "",
            "\$updatedAt" => "",
            "activate" => true,
            "billingJson" => "",
            "buildDuration" => ,
            "buildId" => "",
            "buildLogs" => "",
            "buildSize" => ,
            "entrypoint" => "",
            "manifestJson" => "",
            "providerBranch" => "",
            "providerBranchUrl" => "",
            "providerCommitAuthor" => "",
            "providerCommitAuthorUrl" => "",
            "providerCommitHash" => "",
            "providerCommitMessage" => "",
            "providerCommitUrl" => "",
            "providerRepositoryName" => "",
            "providerRepositoryOwner" => "",
            "providerRepositoryUrl" => "",
            "resourceId" => "",
            "resourceType" => "",
            "screenshotDark" => "",
            "screenshotLight" => "",
            "sourceSize" => ,
            "status" => "",
            "totalSize" => ,
            "type" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->apps->appsCreateDeployment(
            "",
            true,
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAppsCreateDuplicateDeployment(): void {

        $data = array(
            "\$createdAt" => "",
            "\$id" => "",
            "\$updatedAt" => "",
            "activate" => true,
            "billingJson" => "",
            "buildDuration" => ,
            "buildId" => "",
            "buildLogs" => "",
            "buildSize" => ,
            "entrypoint" => "",
            "manifestJson" => "",
            "providerBranch" => "",
            "providerBranchUrl" => "",
            "providerCommitAuthor" => "",
            "providerCommitAuthorUrl" => "",
            "providerCommitHash" => "",
            "providerCommitMessage" => "",
            "providerCommitUrl" => "",
            "providerRepositoryName" => "",
            "providerRepositoryOwner" => "",
            "providerRepositoryUrl" => "",
            "resourceId" => "",
            "resourceType" => "",
            "screenshotDark" => "",
            "screenshotLight" => "",
            "sourceSize" => ,
            "status" => "",
            "totalSize" => ,
            "type" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->apps->appsCreateDuplicateDeployment(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAppsCreateTemplateDeployment(): void {

        $data = array(
            "\$createdAt" => "",
            "\$id" => "",
            "\$updatedAt" => "",
            "activate" => true,
            "billingJson" => "",
            "buildDuration" => ,
            "buildId" => "",
            "buildLogs" => "",
            "buildSize" => ,
            "entrypoint" => "",
            "manifestJson" => "",
            "providerBranch" => "",
            "providerBranchUrl" => "",
            "providerCommitAuthor" => "",
            "providerCommitAuthorUrl" => "",
            "providerCommitHash" => "",
            "providerCommitMessage" => "",
            "providerCommitUrl" => "",
            "providerRepositoryName" => "",
            "providerRepositoryOwner" => "",
            "providerRepositoryUrl" => "",
            "resourceId" => "",
            "resourceType" => "",
            "screenshotDark" => "",
            "screenshotLight" => "",
            "sourceSize" => ,
            "status" => "",
            "totalSize" => ,
            "type" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->apps->appsCreateTemplateDeployment(
            "",
            "",
            "",
            "",
            "",
            Type::COMMIT()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAppsCreateVcsDeployment(): void {

        $data = array(
            "\$createdAt" => "",
            "\$id" => "",
            "\$updatedAt" => "",
            "activate" => true,
            "billingJson" => "",
            "buildDuration" => ,
            "buildId" => "",
            "buildLogs" => "",
            "buildSize" => ,
            "entrypoint" => "",
            "manifestJson" => "",
            "providerBranch" => "",
            "providerBranchUrl" => "",
            "providerCommitAuthor" => "",
            "providerCommitAuthorUrl" => "",
            "providerCommitHash" => "",
            "providerCommitMessage" => "",
            "providerCommitUrl" => "",
            "providerRepositoryName" => "",
            "providerRepositoryOwner" => "",
            "providerRepositoryUrl" => "",
            "resourceId" => "",
            "resourceType" => "",
            "screenshotDark" => "",
            "screenshotLight" => "",
            "sourceSize" => ,
            "status" => "",
            "totalSize" => ,
            "type" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->apps->appsCreateVcsDeployment(
            "",
            "",
            Type::BRANCH()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAppsDeleteDeployment(): void {

        $data = '';

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->apps->appsDeleteDeployment(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAppsGetDeployment(): void {

        $data = array(
            "\$createdAt" => "",
            "\$id" => "",
            "\$updatedAt" => "",
            "activate" => true,
            "billingJson" => "",
            "buildDuration" => ,
            "buildId" => "",
            "buildLogs" => "",
            "buildSize" => ,
            "entrypoint" => "",
            "manifestJson" => "",
            "providerBranch" => "",
            "providerBranchUrl" => "",
            "providerCommitAuthor" => "",
            "providerCommitAuthorUrl" => "",
            "providerCommitHash" => "",
            "providerCommitMessage" => "",
            "providerCommitUrl" => "",
            "providerRepositoryName" => "",
            "providerRepositoryOwner" => "",
            "providerRepositoryUrl" => "",
            "resourceId" => "",
            "resourceType" => "",
            "screenshotDark" => "",
            "screenshotLight" => "",
            "sourceSize" => ,
            "status" => "",
            "totalSize" => ,
            "type" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->apps->appsGetDeployment(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAppsGetDeploymentDownload(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->apps->appsGetDeploymentDownload(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAppsUpdateDeploymentStatus(): void {

        $data = array(
            "\$createdAt" => "",
            "\$id" => "",
            "\$updatedAt" => "",
            "activate" => true,
            "billingJson" => "",
            "buildDuration" => ,
            "buildId" => "",
            "buildLogs" => "",
            "buildSize" => ,
            "entrypoint" => "",
            "manifestJson" => "",
            "providerBranch" => "",
            "providerBranchUrl" => "",
            "providerCommitAuthor" => "",
            "providerCommitAuthorUrl" => "",
            "providerCommitHash" => "",
            "providerCommitMessage" => "",
            "providerCommitUrl" => "",
            "providerRepositoryName" => "",
            "providerRepositoryOwner" => "",
            "providerRepositoryUrl" => "",
            "resourceId" => "",
            "resourceType" => "",
            "screenshotDark" => "",
            "screenshotLight" => "",
            "sourceSize" => ,
            "status" => "",
            "totalSize" => ,
            "type" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->apps->appsUpdateDeploymentStatus(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAppsListExecutions(): void {

        $data = array(
            "executions" => array(),
            "total" => );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->apps->appsListExecutions(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAppsCreateExecution(): void {

        $data = array(
            "\$createdAt" => "",
            "\$id" => "",
            "\$permissions" => array(),
            "\$updatedAt" => "",
            "deploymentId" => "",
            "duration" => ,
            "errors" => "",
            "functionId" => "",
            "logs" => "",
            "requestHeaders" => array(),
            "requestMethod" => "",
            "requestPath" => "",
            "responseBody" => "",
            "responseHeaders" => array(),
            "responseStatusCode" => ,
            "status" => "",
            "trigger" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->apps->appsCreateExecution(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAppsDeleteExecution(): void {

        $data = '';

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->apps->appsDeleteExecution(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAppsGetExecution(): void {

        $data = array(
            "\$createdAt" => "",
            "\$id" => "",
            "\$permissions" => array(),
            "\$updatedAt" => "",
            "deploymentId" => "",
            "duration" => ,
            "errors" => "",
            "functionId" => "",
            "logs" => "",
            "requestHeaders" => array(),
            "requestMethod" => "",
            "requestPath" => "",
            "responseBody" => "",
            "responseHeaders" => array(),
            "responseStatusCode" => ,
            "status" => "",
            "trigger" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->apps->appsGetExecution(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAppsGetMarketplaceStatus(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->apps->appsGetMarketplaceStatus(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAppsUnpublish(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->apps->appsUnpublish(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAppsPublish(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->apps->appsPublish(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAppsGetUsage(): void {

        $data = array(
            "builds" => array(),
            "buildsFailed" => array(),
            "buildsFailedTotal" => ,
            "buildsMbSeconds" => array(),
            "buildsMbSecondsTotal" => ,
            "buildsStorage" => array(),
            "buildsStorageTotal" => ,
            "buildsSuccess" => array(),
            "buildsSuccessTotal" => ,
            "buildsTime" => array(),
            "buildsTimeAverage" => ,
            "buildsTimeTotal" => ,
            "buildsTotal" => ,
            "deployments" => array(),
            "deploymentsStorage" => array(),
            "deploymentsStorageTotal" => ,
            "deploymentsTotal" => ,
            "executions" => array(),
            "executionsMbSeconds" => array(),
            "executionsMbSecondsTotal" => ,
            "executionsTime" => array(),
            "executionsTimeTotal" => ,
            "executionsTotal" => ,
            "range" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->apps->appsGetUsage(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAppsListVariables(): void {

        $data = array(
            "total" => ,
            "variables" => array());

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->apps->appsListVariables(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAppsCreateVariable(): void {

        $data = array(
            "\$createdAt" => "",
            "\$id" => "",
            "\$updatedAt" => "",
            "key" => "",
            "resourceId" => "",
            "resourceType" => "",
            "secret" => true,
            "value" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->apps->appsCreateVariable(
            "",
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAppsDeleteVariable(): void {

        $data = '';

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->apps->appsDeleteVariable(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAppsGetVariable(): void {

        $data = array(
            "\$createdAt" => "",
            "\$id" => "",
            "\$updatedAt" => "",
            "key" => "",
            "resourceId" => "",
            "resourceType" => "",
            "secret" => true,
            "value" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->apps->appsGetVariable(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAppsUpdateVariable(): void {

        $data = array(
            "\$createdAt" => "",
            "\$id" => "",
            "\$updatedAt" => "",
            "key" => "",
            "resourceId" => "",
            "resourceType" => "",
            "secret" => true,
            "value" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->apps->appsUpdateVariable(
            "",
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

}
