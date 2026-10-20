<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;
use Revenexx\Enums\Trashed;
use Revenexx\Enums\Platform;
use Revenexx\Enums\Status;

final class AdsAccountsTest extends TestCase {
    private $client;
    private $adsAccounts;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->adsAccounts = new AdsAccounts($this->client);
    }

    public function testMethodAdsAccountsList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->adsAccounts->adsAccountsList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAdsAccountsCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->adsAccounts->adsAccountsCreate(
            "",
            "",
            Platform::META()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAdsAccountsEmptyTrash(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->adsAccounts->adsAccountsEmptyTrash(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAdsAccountsPurge(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->adsAccounts->adsAccountsPurge(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAdsAccountsDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->adsAccounts->adsAccountsDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAdsAccountsGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->adsAccounts->adsAccountsGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAdsAccountsUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->adsAccounts->adsAccountsUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAdsAccountsRestore(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->adsAccounts->adsAccountsRestore(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAdsAccountsStatus(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->adsAccounts->adsAccountsStatus(
            "",
            Status::CONNECTED()
        );

        $this->assertSame($data, $response);
    }

}
