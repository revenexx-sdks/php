<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;

final class CampaignsCalendarTest extends TestCase {
    private $client;
    private $campaignsCalendar;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->campaignsCalendar = new CampaignsCalendar($this->client);
    }

    public function testMethodCampaignsCalendarRead(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->campaignsCalendar->campaignsCalendarRead(
        );

        $this->assertSame($data, $response);
    }

}
