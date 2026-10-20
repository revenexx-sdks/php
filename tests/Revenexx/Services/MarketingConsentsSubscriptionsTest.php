<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;
use Revenexx\Enums\Channel;
use Revenexx\Enums\MarketingConsentsSubscriptionsListState;
use Revenexx\Enums\MarketingConsentsConsentEventsListLegalBasis;
use Revenexx\Enums\MarketingConsentsSubscriptionsListSource;
use Revenexx\Enums\MarketingConsentsSubscriptionsRequestSource;

final class MarketingConsentsSubscriptionsTest extends TestCase {
    private $client;
    private $marketingConsentsSubscriptions;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->marketingConsentsSubscriptions = new MarketingConsentsSubscriptions($this->client);
    }

    public function testMethodMarketingConsentsSubscriptionsConfirm(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->marketingConsentsSubscriptions->marketingConsentsSubscriptionsConfirm(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMarketingConsentsEligibilityCheck(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->marketingConsentsSubscriptions->marketingConsentsEligibilityCheck(
            array(),
            "newsletter"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMarketingConsentsPreferencesLinks(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->marketingConsentsSubscriptions->marketingConsentsPreferencesLinks(
            array()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMarketingConsentsPreferencesGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->marketingConsentsSubscriptions->marketingConsentsPreferencesGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMarketingConsentsPreferencesUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->marketingConsentsSubscriptions->marketingConsentsPreferencesUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMarketingConsentsSubscriptionsList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->marketingConsentsSubscriptions->marketingConsentsSubscriptionsList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMarketingConsentsSubscriptionsRequest(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->marketingConsentsSubscriptions->marketingConsentsSubscriptionsRequest(
            "newsletter"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMarketingConsentsSubscriptionsGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->marketingConsentsSubscriptions->marketingConsentsSubscriptionsGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMarketingConsentsSubscriptionsWithdraw(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->marketingConsentsSubscriptions->marketingConsentsSubscriptionsWithdraw(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

}
