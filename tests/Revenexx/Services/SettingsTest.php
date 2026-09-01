<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;

final class SettingsTest extends TestCase {
    private $client;
    private $settings;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->settings = new Settings($this->client);
    }

    public function testMethodSettingsGetAppSettings(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->settings->settingsGetAppSettings(
            ""
        );

        $this->assertSame($data, $response);
    }

}
