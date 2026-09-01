<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;
use Revenexx\Enums\Source;
use Revenexx\Enums\SegmentMemberSource;
use Revenexx\Enums\RuleMatch;
use Revenexx\Enums\SegmentRuleMatch;
use Revenexx\Enums\Target;

final class CustomersSegmentsTest extends TestCase {
    private $client;
    private $customersSegments;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->customersSegments = new CustomersSegments($this->client);
    }

    public function testMethodCustomersSegmentMembersList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customersSegments->customersSegmentMembersList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersSegmentMembersCreate(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customersSegments->customersSegmentMembersCreate(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersSegmentMembersDelete(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customersSegments->customersSegmentMembersDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersSegmentMembersGet(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customersSegments->customersSegmentMembersGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersSegmentMembersUpdate(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customersSegments->customersSegmentMembersUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersSegmentsList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customersSegments->customersSegmentsList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersSegmentsCreate(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customersSegments->customersSegmentsCreate(
            "key_accounts"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersSegmentsRulesRecomputeAll(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customersSegments->customersSegmentsRulesRecomputeAll(
            array()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersSegmentsDelete(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customersSegments->customersSegmentsDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersSegmentsGet(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customersSegments->customersSegmentsGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersSegmentsUpdate(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customersSegments->customersSegmentsUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersSegmentsRulesPreview(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customersSegments->customersSegmentsRulesPreview(
            "",
            array()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCustomersSegmentsRulesRecompute(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->customersSegments->customersSegmentsRulesRecompute(
            ""
        );

        $this->assertSame($data, $response);
    }

}
