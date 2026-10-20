<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;
use Revenexx\Enums\Event;
use Revenexx\Enums\ValueSource;

final class AdsRulesTest extends TestCase {
    private $client;
    private $adsRules;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->adsRules = new AdsRules($this->client);
    }

    public function testMethodAdsRulesList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->adsRules->adsRulesList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAdsRulesCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->adsRules->adsRulesCreate(
            "",
            Event::ORDERPLACED(),
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAdsRulesDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->adsRules->adsRulesDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAdsRulesGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->adsRules->adsRulesGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAdsRulesUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->adsRules->adsRulesUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

}
