<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;
use Revenexx\Enums\VcsTriggerMode;
use Revenexx\Enums\CubesCreateVcsDeploymentType;

final class CubesTest extends TestCase
{
    private $client;
    private $cubes;

    protected function setUp(): void
    {
        $this->client = Mockery::mock(Client::class);
        $this->cubes = new Cubes($this->client);
    }

    public function testMethodCubesList(): void
    {

        $data = array(
            "cubes" => array(),
            "total" => 1);

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->cubes->cubesList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCubesCreate(): void
    {

        $data = array(
            "\$createdAt" => "",
            "\$id" => "",
            "\$updatedAt" => "",
            "deploymentCreatedAt" => "",
            "deploymentId" => "",
            "enabled" => true,
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
            "vcsTriggerMode" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->cubes->cubesCreate(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCubesDelete(): void
    {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->cubes->cubesDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCubesGet(): void
    {

        $data = array(
            "\$createdAt" => "",
            "\$id" => "",
            "\$updatedAt" => "",
            "deploymentCreatedAt" => "",
            "deploymentId" => "",
            "enabled" => true,
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
            "vcsTriggerMode" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->cubes->cubesGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCubesUpdate(): void
    {

        $data = array(
            "\$createdAt" => "",
            "\$id" => "",
            "\$updatedAt" => "",
            "deploymentCreatedAt" => "",
            "deploymentId" => "",
            "enabled" => true,
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
            "vcsTriggerMode" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->cubes->cubesUpdate(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCubesListDeployments(): void
    {

        $data = array(
            "deployments" => array(),
            "total" => 1);

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->cubes->cubesListDeployments(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCubesCreateDeployment(): void
    {

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

        $response = $this->cubes->cubesCreateDeployment(
            "",
            InputFile::withData('', "image/png")
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCubesCreateVcsDeployment(): void
    {

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

        $response = $this->cubes->cubesCreateVcsDeployment(
            "",
            "",
            CubesCreateVcsDeploymentType::BRANCH()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCubesGetDeployment(): void
    {

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

        $response = $this->cubes->cubesGetDeployment(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

}
