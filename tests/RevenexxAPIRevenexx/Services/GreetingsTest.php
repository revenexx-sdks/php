<?php

namespace RevenexxAPIRevenexx\Services;

use RevenexxAPIRevenexx\Client;
use RevenexxAPIRevenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;

final class GreetingsTest extends TestCase {
    private $client;
    private $greetings;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->greetings = new Greetings($this->client);
    }

    public function testMethodGreetingsDigest(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->greetings->greetingsDigest(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGreetingsList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->greetings->greetingsList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGreetingsCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->greetings->greetingsCreate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGreetingsDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->greetings->greetingsDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGreetingsGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->greetings->greetingsGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGreetingsUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->greetings->greetingsUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

}
