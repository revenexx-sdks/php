<?php

namespace RevenexxAPIRevenexx\Services;

use RevenexxAPIRevenexx\Client;
use RevenexxAPIRevenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;
use RevenexxAPIRevenexx\Enums\ChannelStatus;
use RevenexxAPIRevenexx\Enums\ChannelType;

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
            "",
            ""
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
