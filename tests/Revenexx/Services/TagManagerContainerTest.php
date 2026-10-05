<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;

final class TagManagerContainerTest extends TestCase {
    private $client;
    private $tagManagerContainer;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->tagManagerContainer = new TagManagerContainer($this->client);
    }

    public function testMethodTagManagerContainerChecksList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tagManagerContainer->tagManagerContainerChecksList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodTagManagerContainerChecksGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tagManagerContainer->tagManagerContainerChecksGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodTagManagerContainerVersionsList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tagManagerContainer->tagManagerContainerVersionsList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodTagManagerContainerVersionsGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tagManagerContainer->tagManagerContainerVersionsGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodTagManagerContainerPublish(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tagManagerContainer->tagManagerContainerPublish(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodTagManagerContainerRecheck(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tagManagerContainer->tagManagerContainerRecheck(
            array()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodTagManagerContainerRollback(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tagManagerContainer->tagManagerContainerRollback(
            1
        );

        $this->assertSame($data, $response);
    }

    public function testMethodTagManagerContainerStatus(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tagManagerContainer->tagManagerContainerStatus(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodTagManagerContainerValidate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tagManagerContainer->tagManagerContainerValidate(
            array()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodTagManagerPreviewCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tagManagerContainer->tagManagerPreviewCreate(
        );

        $this->assertSame($data, $response);
    }

}
