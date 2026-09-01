<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;
use Revenexx\Enums\Tone;
use Revenexx\Enums\ShippingVocabulariesGetName;

final class ShippingValueListsTest extends TestCase {
    private $client;
    private $shippingValueLists;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->shippingValueLists = new ShippingValueLists($this->client);
    }

    public function testMethodShippingServiceLevelsList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->shippingValueLists->shippingServiceLevelsList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodShippingServiceLevelsCreate(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->shippingValueLists->shippingServiceLevelsCreate(
            "night_courier",
            "Night courier"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodShippingServiceLevelsDelete(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->shippingValueLists->shippingServiceLevelsDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodShippingServiceLevelsGet(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->shippingValueLists->shippingServiceLevelsGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodShippingServiceLevelsUpdate(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->shippingValueLists->shippingServiceLevelsUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodShippingServiceLevelsMakeDefault(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->shippingValueLists->shippingServiceLevelsMakeDefault(
            "",
            array()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodShippingVocabulariesList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->shippingValueLists->shippingVocabulariesList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodShippingVocabulariesGet(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->shippingValueLists->shippingVocabulariesGet(
            ShippingVocabulariesGetName::CARRIERSTATUSES()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodShippingWeightUnitsList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->shippingValueLists->shippingWeightUnitsList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodShippingWeightUnitsCreate(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->shippingValueLists->shippingWeightUnitsCreate(
            "t",
            1.0,
            "Tonne"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodShippingWeightUnitsDelete(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->shippingValueLists->shippingWeightUnitsDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodShippingWeightUnitsGet(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->shippingValueLists->shippingWeightUnitsGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodShippingWeightUnitsUpdate(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->shippingValueLists->shippingWeightUnitsUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodShippingWeightUnitsMakeDefault(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->shippingValueLists->shippingWeightUnitsMakeDefault(
            "",
            array()
        );

        $this->assertSame($data, $response);
    }

}
