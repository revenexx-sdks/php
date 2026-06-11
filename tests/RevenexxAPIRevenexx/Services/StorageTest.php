<?php

namespace RevenexxAPIRevenexx\Services;

use RevenexxAPIRevenexx\Client;
use RevenexxAPIRevenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;
use RevenexxAPIRevenexx\Enums\Compression;
use RevenexxAPIRevenexx\Enums\Gravity;
use RevenexxAPIRevenexx\Enums\Output;

final class StorageTest extends TestCase {
    private $client;
    private $storage;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->storage = new Storage($this->client);
    }

    public function testMethodStorageListBuckets(): void {

        $data = array(
            "buckets" => array(),
            "total" => 0);

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->storage->storageListBuckets(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodStorageCreateBucket(): void {

        $data = array(
            "\$createdAt" => "",
            "\$id" => "",
            "\$permissions" => array(),
            "\$updatedAt" => "",
            "allowedFileExtensions" => array(),
            "antivirus" => true,
            "compression" => "",
            "enabled" => true,
            "encryption" => true,
            "fileSecurity" => true,
            "maximumFileSize" => 0,
            "name" => "",
            "totalSize" => 0,
            "transformations" => true);

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->storage->storageCreateBucket(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodStorageDeleteBucket(): void {

        $data = '';

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->storage->storageDeleteBucket(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodStorageGetBucket(): void {

        $data = array(
            "\$createdAt" => "",
            "\$id" => "",
            "\$permissions" => array(),
            "\$updatedAt" => "",
            "allowedFileExtensions" => array(),
            "antivirus" => true,
            "compression" => "",
            "enabled" => true,
            "encryption" => true,
            "fileSecurity" => true,
            "maximumFileSize" => 0,
            "name" => "",
            "totalSize" => 0,
            "transformations" => true);

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->storage->storageGetBucket(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodStorageUpdateBucket(): void {

        $data = array(
            "\$createdAt" => "",
            "\$id" => "",
            "\$permissions" => array(),
            "\$updatedAt" => "",
            "allowedFileExtensions" => array(),
            "antivirus" => true,
            "compression" => "",
            "enabled" => true,
            "encryption" => true,
            "fileSecurity" => true,
            "maximumFileSize" => 0,
            "name" => "",
            "totalSize" => 0,
            "transformations" => true);

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->storage->storageUpdateBucket(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodStorageListFiles(): void {

        $data = array(
            "files" => array(),
            "total" => 0);

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->storage->storageListFiles(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodStorageCreateFile(): void {

        $data = array(
            "\$createdAt" => "",
            "\$id" => "",
            "\$permissions" => array(),
            "\$updatedAt" => "",
            "bucketId" => "",
            "chunksTotal" => 0,
            "chunksUploaded" => 0,
            "compression" => "",
            "encryption" => true,
            "mimeType" => "",
            "name" => "",
            "signature" => "",
            "sizeOriginal" => 0);

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->storage->storageCreateFile(
            "",
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodStorageDeleteFile(): void {

        $data = '';

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->storage->storageDeleteFile(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodStorageGetFile(): void {

        $data = array(
            "\$createdAt" => "",
            "\$id" => "",
            "\$permissions" => array(),
            "\$updatedAt" => "",
            "bucketId" => "",
            "chunksTotal" => 0,
            "chunksUploaded" => 0,
            "compression" => "",
            "encryption" => true,
            "mimeType" => "",
            "name" => "",
            "signature" => "",
            "sizeOriginal" => 0);

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->storage->storageGetFile(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodStorageUpdateFile(): void {

        $data = array(
            "\$createdAt" => "",
            "\$id" => "",
            "\$permissions" => array(),
            "\$updatedAt" => "",
            "bucketId" => "",
            "chunksTotal" => 0,
            "chunksUploaded" => 0,
            "compression" => "",
            "encryption" => true,
            "mimeType" => "",
            "name" => "",
            "signature" => "",
            "sizeOriginal" => 0);

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->storage->storageUpdateFile(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodStorageGetFileDownload(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->storage->storageGetFileDownload(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodStorageGetFilePreview(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->storage->storageGetFilePreview(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodStorageGetFileView(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->storage->storageGetFileView(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

}
