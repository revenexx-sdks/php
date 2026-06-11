<?php

namespace RevenexxAPIRevenexx\Services;

use RevenexxAPIRevenexx\Client;
use RevenexxAPIRevenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;
use RevenexxAPIRevenexx\Enums\BuildRuntime;
use RevenexxAPIRevenexx\Enums\Framework;
use RevenexxAPIRevenexx\Enums\Adapter;
use RevenexxAPIRevenexx\Enums\Type;

final class SitesTest extends TestCase {
    private $client;
    private $sites;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->sites = new Sites($this->client);
    }

    public function testMethodSitesList(): void {

        $data = array(
            "sites" => array(),
            "total" => 0);

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->sites->sitesList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodSitesCreate(): void {

        $data = array(
            "\$createdAt" => "",
            "\$id" => "",
            "\$updatedAt" => "",
            "adapter" => "",
            "buildCommand" => "",
            "buildRuntime" => "",
            "deploymentCreatedAt" => "",
            "deploymentId" => "",
            "deploymentScreenshotDark" => "",
            "deploymentScreenshotLight" => "",
            "enabled" => true,
            "fallbackFile" => "",
            "framework" => "",
            "installCommand" => "",
            "installationId" => "",
            "latestDeploymentCreatedAt" => "",
            "latestDeploymentId" => "",
            "latestDeploymentStatus" => "",
            "live" => true,
            "logging" => true,
            "name" => "",
            "outputDirectory" => "",
            "providerBranch" => "",
            "providerRepositoryId" => "",
            "providerRootDirectory" => "",
            "providerSilentMode" => true,
            "specification" => "",
            "timeout" => 0,
            "vars" => array());

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->sites->sitesCreate(
            BuildRuntime::NODE180(),
            Framework::ANALOG(),
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodSitesListFrameworks(): void {

        $data = array(
            "frameworks" => array(),
            "total" => 0);

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->sites->sitesListFrameworks(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodSitesListSpecifications(): void {

        $data = array(
            "specifications" => array(),
            "total" => 0);

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->sites->sitesListSpecifications(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodSitesDelete(): void {

        $data = '';

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->sites->sitesDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodSitesGet(): void {

        $data = array(
            "\$createdAt" => "",
            "\$id" => "",
            "\$updatedAt" => "",
            "adapter" => "",
            "buildCommand" => "",
            "buildRuntime" => "",
            "deploymentCreatedAt" => "",
            "deploymentId" => "",
            "deploymentScreenshotDark" => "",
            "deploymentScreenshotLight" => "",
            "enabled" => true,
            "fallbackFile" => "",
            "framework" => "",
            "installCommand" => "",
            "installationId" => "",
            "latestDeploymentCreatedAt" => "",
            "latestDeploymentId" => "",
            "latestDeploymentStatus" => "",
            "live" => true,
            "logging" => true,
            "name" => "",
            "outputDirectory" => "",
            "providerBranch" => "",
            "providerRepositoryId" => "",
            "providerRootDirectory" => "",
            "providerSilentMode" => true,
            "specification" => "",
            "timeout" => 0,
            "vars" => array());

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->sites->sitesGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodSitesUpdate(): void {

        $data = array(
            "\$createdAt" => "",
            "\$id" => "",
            "\$updatedAt" => "",
            "adapter" => "",
            "buildCommand" => "",
            "buildRuntime" => "",
            "deploymentCreatedAt" => "",
            "deploymentId" => "",
            "deploymentScreenshotDark" => "",
            "deploymentScreenshotLight" => "",
            "enabled" => true,
            "fallbackFile" => "",
            "framework" => "",
            "installCommand" => "",
            "installationId" => "",
            "latestDeploymentCreatedAt" => "",
            "latestDeploymentId" => "",
            "latestDeploymentStatus" => "",
            "live" => true,
            "logging" => true,
            "name" => "",
            "outputDirectory" => "",
            "providerBranch" => "",
            "providerRepositoryId" => "",
            "providerRootDirectory" => "",
            "providerSilentMode" => true,
            "specification" => "",
            "timeout" => 0,
            "vars" => array());

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->sites->sitesUpdate(
            "",
            Framework::ANALOG(),
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodSitesUpdateSiteDeployment(): void {

        $data = array(
            "\$createdAt" => "",
            "\$id" => "",
            "\$updatedAt" => "",
            "adapter" => "",
            "buildCommand" => "",
            "buildRuntime" => "",
            "deploymentCreatedAt" => "",
            "deploymentId" => "",
            "deploymentScreenshotDark" => "",
            "deploymentScreenshotLight" => "",
            "enabled" => true,
            "fallbackFile" => "",
            "framework" => "",
            "installCommand" => "",
            "installationId" => "",
            "latestDeploymentCreatedAt" => "",
            "latestDeploymentId" => "",
            "latestDeploymentStatus" => "",
            "live" => true,
            "logging" => true,
            "name" => "",
            "outputDirectory" => "",
            "providerBranch" => "",
            "providerRepositoryId" => "",
            "providerRootDirectory" => "",
            "providerSilentMode" => true,
            "specification" => "",
            "timeout" => 0,
            "vars" => array());

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->sites->sitesUpdateSiteDeployment(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodSitesListDeployments(): void {

        $data = array(
            "deployments" => array(),
            "total" => 0);

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->sites->sitesListDeployments(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodSitesCreateDeployment(): void {

        $data = array(
            "\$createdAt" => "",
            "\$id" => "",
            "\$updatedAt" => "",
            "activate" => true,
            "billingJson" => "",
            "buildDuration" => 0,
            "buildId" => "",
            "buildLogs" => "",
            "buildSize" => 0,
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
            "sourceSize" => 0,
            "status" => "",
            "totalSize" => 0,
            "type" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->sites->sitesCreateDeployment(
            "",
            true,
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodSitesCreateDuplicateDeployment(): void {

        $data = array(
            "\$createdAt" => "",
            "\$id" => "",
            "\$updatedAt" => "",
            "activate" => true,
            "billingJson" => "",
            "buildDuration" => 0,
            "buildId" => "",
            "buildLogs" => "",
            "buildSize" => 0,
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
            "sourceSize" => 0,
            "status" => "",
            "totalSize" => 0,
            "type" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->sites->sitesCreateDuplicateDeployment(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodSitesCreateTemplateDeployment(): void {

        $data = array(
            "\$createdAt" => "",
            "\$id" => "",
            "\$updatedAt" => "",
            "activate" => true,
            "billingJson" => "",
            "buildDuration" => 0,
            "buildId" => "",
            "buildLogs" => "",
            "buildSize" => 0,
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
            "sourceSize" => 0,
            "status" => "",
            "totalSize" => 0,
            "type" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->sites->sitesCreateTemplateDeployment(
            "",
            "",
            "",
            "",
            "",
            Type::BRANCH()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodSitesCreateVcsDeployment(): void {

        $data = array(
            "\$createdAt" => "",
            "\$id" => "",
            "\$updatedAt" => "",
            "activate" => true,
            "billingJson" => "",
            "buildDuration" => 0,
            "buildId" => "",
            "buildLogs" => "",
            "buildSize" => 0,
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
            "sourceSize" => 0,
            "status" => "",
            "totalSize" => 0,
            "type" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->sites->sitesCreateVcsDeployment(
            "",
            "",
            Type::BRANCH()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodSitesDeleteDeployment(): void {

        $data = '';

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->sites->sitesDeleteDeployment(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodSitesGetDeployment(): void {

        $data = array(
            "\$createdAt" => "",
            "\$id" => "",
            "\$updatedAt" => "",
            "activate" => true,
            "billingJson" => "",
            "buildDuration" => 0,
            "buildId" => "",
            "buildLogs" => "",
            "buildSize" => 0,
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
            "sourceSize" => 0,
            "status" => "",
            "totalSize" => 0,
            "type" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->sites->sitesGetDeployment(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodSitesGetDeploymentDownload(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->sites->sitesGetDeploymentDownload(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodSitesUpdateDeploymentStatus(): void {

        $data = array(
            "\$createdAt" => "",
            "\$id" => "",
            "\$updatedAt" => "",
            "activate" => true,
            "billingJson" => "",
            "buildDuration" => 0,
            "buildId" => "",
            "buildLogs" => "",
            "buildSize" => 0,
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
            "sourceSize" => 0,
            "status" => "",
            "totalSize" => 0,
            "type" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->sites->sitesUpdateDeploymentStatus(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodSitesListLogs(): void {

        $data = array(
            "executions" => array(),
            "total" => 0);

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->sites->sitesListLogs(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodSitesDeleteLog(): void {

        $data = '';

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->sites->sitesDeleteLog(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodSitesGetLog(): void {

        $data = array(
            "\$createdAt" => "",
            "\$id" => "",
            "\$permissions" => array(),
            "\$updatedAt" => "",
            "deploymentId" => "",
            "duration" => 0,
            "errors" => "",
            "functionId" => "",
            "logs" => "",
            "requestHeaders" => array(),
            "requestMethod" => "",
            "requestPath" => "",
            "responseBody" => "",
            "responseHeaders" => array(),
            "responseStatusCode" => 0,
            "status" => "",
            "trigger" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->sites->sitesGetLog(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodSitesListVariables(): void {

        $data = array(
            "total" => 0,
            "variables" => array());

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->sites->sitesListVariables(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodSitesCreateVariable(): void {

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

        $response = $this->sites->sitesCreateVariable(
            "",
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodSitesDeleteVariable(): void {

        $data = '';

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->sites->sitesDeleteVariable(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodSitesGetVariable(): void {

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

        $response = $this->sites->sitesGetVariable(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodSitesUpdateVariable(): void {

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

        $response = $this->sites->sitesUpdateVariable(
            "",
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

}
