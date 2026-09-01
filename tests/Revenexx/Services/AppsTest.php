<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;
use Revenexx\Enums\Runtime;
use Revenexx\Enums\Scopes;
use Revenexx\Enums\Runtimes;
use Revenexx\Enums\UseCases;
use Revenexx\Enums\Range;
use Revenexx\Enums\Type;
use Revenexx\Enums\AppsCreateVcsDeploymentType;
use Revenexx\Enums\AppsGetDeploymentDownloadType;
use Revenexx\Enums\Method;

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
            "total" => 1);

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
            "timeout" => 1,
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
            "total" => 1);

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
            "total" => 1);

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
            "total" => 1);

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
            "timeout" => 1,
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
            "buildsFailedTotal" => 1,
            "buildsMbSeconds" => array(),
            "buildsMbSecondsTotal" => 1,
            "buildsStorage" => array(),
            "buildsStorageTotal" => 1,
            "buildsSuccess" => array(),
            "buildsSuccessTotal" => 1,
            "buildsTime" => array(),
            "buildsTimeTotal" => 1,
            "buildsTotal" => 1,
            "deployments" => array(),
            "deploymentsStorage" => array(),
            "deploymentsStorageTotal" => 1,
            "deploymentsTotal" => 1,
            "executions" => array(),
            "executionsMbSeconds" => array(),
            "executionsMbSecondsTotal" => 1,
            "executionsTime" => array(),
            "executionsTimeTotal" => 1,
            "executionsTotal" => 1,
            "functions" => array(),
            "functionsTotal" => 1,
            "range" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->apps->appsListUsage(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAppsDelete(): void {

        $data = array();

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
            "timeout" => 1,
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
            "timeout" => 1,
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
            "timeout" => 1,
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
            "total" => 1);

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
            "buildDuration" => 1,
            "buildId" => "",
            "buildLogs" => "",
            "buildSize" => 1,
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
            "sourceSize" => 1,
            "status" => "waiting",
            "totalSize" => 1,
            "type" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->apps->appsCreateDeployment(
            "",
            true,
            InputFile::withData('', "image/png")
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
            "buildDuration" => 1,
            "buildId" => "",
            "buildLogs" => "",
            "buildSize" => 1,
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
            "sourceSize" => 1,
            "status" => "waiting",
            "totalSize" => 1,
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
            "buildDuration" => 1,
            "buildId" => "",
            "buildLogs" => "",
            "buildSize" => 1,
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
            "sourceSize" => 1,
            "status" => "waiting",
            "totalSize" => 1,
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
            "buildDuration" => 1,
            "buildId" => "",
            "buildLogs" => "",
            "buildSize" => 1,
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
            "sourceSize" => 1,
            "status" => "waiting",
            "totalSize" => 1,
            "type" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->apps->appsCreateVcsDeployment(
            "",
            "main",
            AppsCreateVcsDeploymentType::BRANCH()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAppsDeleteDeployment(): void {

        $data = array();

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
            "buildDuration" => 1,
            "buildId" => "",
            "buildLogs" => "",
            "buildSize" => 1,
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
            "sourceSize" => 1,
            "status" => "waiting",
            "totalSize" => 1,
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
            "buildDuration" => 1,
            "buildId" => "",
            "buildLogs" => "",
            "buildSize" => 1,
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
            "sourceSize" => 1,
            "status" => "waiting",
            "totalSize" => 1,
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
            "total" => 1);

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
            "duration" => 9.99,
            "errors" => "",
            "functionId" => "",
            "logs" => "",
            "requestHeaders" => array(),
            "requestMethod" => "",
            "requestPath" => "",
            "responseBody" => "",
            "responseHeaders" => array(),
            "responseStatusCode" => 1,
            "status" => "waiting",
            "trigger" => "http");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->apps->appsCreateExecution(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAppsDeleteExecution(): void {

        $data = array();

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
            "duration" => 9.99,
            "errors" => "",
            "functionId" => "",
            "logs" => "",
            "requestHeaders" => array(),
            "requestMethod" => "",
            "requestPath" => "",
            "responseBody" => "",
            "responseHeaders" => array(),
            "responseStatusCode" => 1,
            "status" => "waiting",
            "trigger" => "http");

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
            "buildsFailedTotal" => 1,
            "buildsMbSeconds" => array(),
            "buildsMbSecondsTotal" => 1,
            "buildsStorage" => array(),
            "buildsStorageTotal" => 1,
            "buildsSuccess" => array(),
            "buildsSuccessTotal" => 1,
            "buildsTime" => array(),
            "buildsTimeAverage" => 1,
            "buildsTimeTotal" => 1,
            "buildsTotal" => 1,
            "deployments" => array(),
            "deploymentsStorage" => array(),
            "deploymentsStorageTotal" => 1,
            "deploymentsTotal" => 1,
            "executions" => array(),
            "executionsMbSeconds" => array(),
            "executionsMbSecondsTotal" => 1,
            "executionsTime" => array(),
            "executionsTimeTotal" => 1,
            "executionsTotal" => 1,
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
            "total" => 1,
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

        $data = array();

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
