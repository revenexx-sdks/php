<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;
use Revenexx\Enums\ChannelStatus;
use Revenexx\Enums\ChannelUnassignedVisibility;
use Revenexx\Enums\ChannelTypeTone;
use Revenexx\Enums\ChannelsVocabulariesGetName;

final class ChannelsTest extends TestCase {
    private $client;
    private $channels;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->channels = new Channels($this->client);
    }

    public function testMethodChannelsList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->channels->channelsList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodChannelsCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->channels->channelsCreate(
            "shop",
            "Shop"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodChannelsContext(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->channels->channelsContext(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodChannelsDefaults(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->channels->channelsDefaults(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodChannelsTypesList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->channels->channelsTypesList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodChannelsTypesCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->channels->channelsTypesCreate(
            "feed",
            "Product feed"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodChannelsTypesDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->channels->channelsTypesDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodChannelsTypesGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->channels->channelsTypesGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodChannelsTypesUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->channels->channelsTypesUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodChannelsVisibility(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->channels->channelsVisibility(
            array()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodChannelsVocabulariesList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->channels->channelsVocabulariesList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodChannelsVocabulariesGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->channels->channelsVocabulariesGet(
            ChannelsVocabulariesGetName::STATUSES()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodChannelsDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->channels->channelsDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodChannelsGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->channels->channelsGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodChannelsUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->channels->channelsUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

}
