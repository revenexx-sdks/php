<?php

namespace RevenexxAPIRevenexx\Services;

use RevenexxAPIRevenexx\Client;
use RevenexxAPIRevenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;
use RevenexxAPIRevenexx\Enums\Visibility;

final class StorageTest extends TestCase {
    private $client;
    private $storage;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->storage = new Storage($this->client);
    }

    public function testMethodAssetIndex(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->storage->assetIndex(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAssetStore(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->storage->assetStore(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAssetBulk(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->storage->assetBulk(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAssetDestroy(): void {

        $data = '';

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->storage->assetDestroy(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAssetShow(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->storage->assetShow(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAssetUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->storage->assetUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAssetDownload(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->storage->assetDownload(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAssetPermanent(): void {

        $data = '';

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->storage->assetPermanent(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAssetReprocess(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->storage->assetReprocess(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAssetRestore(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->storage->assetRestore(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAssetSign(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->storage->assetSign(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAssetUnpack(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->storage->assetUnpack(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodFolderIndex(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->storage->folderIndex(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodFolderStore(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->storage->folderStore(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodFolderDestroy(): void {

        $data = '';

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->storage->folderDestroy(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodFolderShow(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->storage->folderShow(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodFolderUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->storage->folderUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodSyncRuleIndex(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->storage->syncRuleIndex(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodSyncRuleStore(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->storage->syncRuleStore(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodSyncRuleDestroy(): void {

        $data = '';

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->storage->syncRuleDestroy(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodSyncRuleShow(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->storage->syncRuleShow(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodSyncRuleUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->storage->syncRuleUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodSyncRuleRun(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->storage->syncRuleRun(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodSyncRuleRunProtocol(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->storage->syncRuleRunProtocol(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodSyncRuleHistory(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->storage->syncRuleHistory(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodTenantStats(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->storage->tenantStats(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodTenantUsage(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->storage->tenantUsage(
        );

        $this->assertSame($data, $response);
    }

}
