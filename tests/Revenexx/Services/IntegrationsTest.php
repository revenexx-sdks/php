<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;
use Revenexx\Enums\VcsTriggerMode;
use Revenexx\Enums\ReleaseMode;
use Revenexx\Enums\CubesCreateVcsDeploymentType;

final class IntegrationsTest extends TestCase
{
    private $client;
    private $integrations;

    protected function setUp(): void
    {
        $this->client = Mockery::mock(Client::class);
        $this->integrations = new Integrations($this->client);
    }

    public function testMethodIntegrationsList(): void
    {

        $data = array(
            "integrations" => array(),
            "total" => 1);

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->integrations->integrationsList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodIntegrationsCreate(): void
    {

        $data = array(
            "\$createdAt" => "",
            "\$id" => "",
            "\$updatedAt" => "",
            "buildCommand" => "",
            "buildRuntime" => "",
            "deploymentCreatedAt" => "",
            "deploymentId" => "",
            "enabled" => true,
            "installCommand" => "",
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
            "vars" => array(),
            "vcsPreviewsEnabled" => true,
            "vcsTriggerMode" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->integrations->integrationsCreate(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodIntegrationsDelete(): void
    {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->integrations->integrationsDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodIntegrationsGet(): void
    {

        $data = array(
            "\$createdAt" => "",
            "\$id" => "",
            "\$updatedAt" => "",
            "buildCommand" => "",
            "buildRuntime" => "",
            "deploymentCreatedAt" => "",
            "deploymentId" => "",
            "enabled" => true,
            "installCommand" => "",
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
            "vars" => array(),
            "vcsPreviewsEnabled" => true,
            "vcsTriggerMode" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->integrations->integrationsGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodIntegrationsUpdate(): void
    {

        $data = array(
            "\$createdAt" => "",
            "\$id" => "",
            "\$updatedAt" => "",
            "buildCommand" => "",
            "buildRuntime" => "",
            "deploymentCreatedAt" => "",
            "deploymentId" => "",
            "enabled" => true,
            "installCommand" => "",
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
            "vars" => array(),
            "vcsPreviewsEnabled" => true,
            "vcsTriggerMode" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->integrations->integrationsUpdate(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodIntegrationsListDeployments(): void
    {

        $data = array(
            "deployments" => array(),
            "total" => 1);

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->integrations->integrationsListDeployments(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodIntegrationsCreateDeployment(): void
    {

        $data = array(
            "\$createdAt" => "",
            "\$id" => "",
            "\$updatedAt" => "",
            "activate" => true,
            "billingJson" => "",
            "buildDigest" => "",
            "buildDuration" => 1,
            "buildId" => "",
            "buildLogs" => "",
            "buildSize" => 1,
            "entrypoint" => "",
            "gateResultsJson" => "",
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
            "releaseMode" => "",
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

        $response = $this->integrations->integrationsCreateDeployment(
            "",
            InputFile::withData('', "image/png")
        );

        $this->assertSame($data, $response);
    }

    public function testMethodIntegrationsCreateVcsDeployment(): void
    {

        $data = array(
            "\$createdAt" => "",
            "\$id" => "",
            "\$updatedAt" => "",
            "activate" => true,
            "billingJson" => "",
            "buildDigest" => "",
            "buildDuration" => 1,
            "buildId" => "",
            "buildLogs" => "",
            "buildSize" => 1,
            "entrypoint" => "",
            "gateResultsJson" => "",
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
            "releaseMode" => "",
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

        $response = $this->integrations->integrationsCreateVcsDeployment(
            "",
            "",
            CubesCreateVcsDeploymentType::BRANCH()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodIntegrationsGetDeployment(): void
    {

        $data = array(
            "\$createdAt" => "",
            "\$id" => "",
            "\$updatedAt" => "",
            "activate" => true,
            "billingJson" => "",
            "buildDigest" => "",
            "buildDuration" => 1,
            "buildId" => "",
            "buildLogs" => "",
            "buildSize" => 1,
            "entrypoint" => "",
            "gateResultsJson" => "",
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
            "releaseMode" => "",
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

        $response = $this->integrations->integrationsGetDeployment(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodIntegrationsListReleases(): void
    {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->integrations->integrationsListReleases(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodIntegrationsAcceptRelease(): void
    {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->integrations->integrationsAcceptRelease(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodIntegrationsRebuildRelease(): void
    {

        $data = array(
            "\$createdAt" => "",
            "\$id" => "",
            "\$updatedAt" => "",
            "activate" => true,
            "billingJson" => "",
            "buildDigest" => "",
            "buildDuration" => 1,
            "buildId" => "",
            "buildLogs" => "",
            "buildSize" => 1,
            "entrypoint" => "",
            "gateResultsJson" => "",
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
            "releaseMode" => "",
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

        $response = $this->integrations->integrationsRebuildRelease(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

}
