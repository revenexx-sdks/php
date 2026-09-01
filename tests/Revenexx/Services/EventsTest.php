<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;

final class EventsTest extends TestCase {
    private $client;
    private $events;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->events = new Events($this->client);
    }

    public function testMethodEventsGetCatalog(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->events->eventsGetCatalog(
        );

        $this->assertSame($data, $response);
    }

}
