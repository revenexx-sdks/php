<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;
use Revenexx\Enums\Format;
use Revenexx\Enums\Mode;
use Revenexx\Enums\CreateImportTarget;
use Revenexx\Enums\Direction;
use Revenexx\Enums\ApplyMode;

final class IoTest extends TestCase {
    private $client;
    private $io;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->io = new Io($this->client);
    }

    public function testMethodListBulkJobs(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->io->listBulkJobs(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGetBulkJob(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->io->getBulkJob(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodListIoEntities(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->io->listIoEntities(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateExport(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->io->createExport(
            "",
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGetExportUrl(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->io->getExportUrl(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateImport(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->io->createImport(
            "",
            "",
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodListProfiles(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->io->listProfiles(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateProfile(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->io->createProfile(
            "",
            Direction::IMPORT(),
            "",
            "",
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodDeleteProfile(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->io->deleteProfile(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodShowProfile(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->io->showProfile(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateProfile(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->io->updateProfile(
            "",
            "",
            Direction::IMPORT(),
            "",
            "",
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodRunProfile(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->io->runProfile(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateUpload(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->io->createUpload(
        );

        $this->assertSame($data, $response);
    }

}
