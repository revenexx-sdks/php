<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;
use Revenexx\Enums\Conditions;
use Revenexx\Enums\CostCentersRestrictionsCreateType;

final class CostCentersTest extends TestCase {
    private $client;
    private $costCenters;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->costCenters = new CostCenters($this->client);
    }

    public function testMethodCostCentersBudgetChangesList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->costCenters->costCentersBudgetChangesList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCostCentersBudgetChangesGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->costCenters->costCentersBudgetChangesGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCostCentersBudgetsList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->costCenters->costCentersBudgetsList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCostCentersBudgetsCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->costCenters->costCentersBudgetsCreate(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCostCentersBudgetsRollover(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->costCenters->costCentersBudgetsRollover(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCostCentersBudgetsGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->costCenters->costCentersBudgetsGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCostCentersBudgetsUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->costCenters->costCentersBudgetsUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCostCentersBudgetsAdjust(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->costCenters->costCentersBudgetsAdjust(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCostCentersCommit(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->costCenters->costCentersCommit(
            array(),
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCostCentersConfirm(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->costCenters->costCentersConfirm(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCostCentersContactLimitsList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->costCenters->costCentersContactLimitsList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCostCentersContactLimitsCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->costCenters->costCentersContactLimitsCreate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCostCentersContactLimitsDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->costCenters->costCentersContactLimitsDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCostCentersContactLimitsGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->costCenters->costCentersContactLimitsGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCostCentersContactLimitsUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->costCenters->costCentersContactLimitsUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCostCentersCostCentersList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->costCenters->costCentersCostCentersList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCostCentersCostCentersCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->costCenters->costCentersCostCentersCreate(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCostCentersCostCentersDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->costCenters->costCentersCostCentersDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCostCentersCostCentersGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->costCenters->costCentersCostCentersGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCostCentersCostCentersUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->costCenters->costCentersCostCentersUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCostCentersCostCentersConsume(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->costCenters->costCentersCostCentersConsume(
            "",
            1.0
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCostCentersEvaluate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->costCenters->costCentersEvaluate(
            1.0
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCostCentersReserve(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->costCenters->costCentersReserve(
            array(),
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCostCentersReserveAdjust(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->costCenters->costCentersReserveAdjust(
            array(),
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCostCentersRestrictionsList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->costCenters->costCentersRestrictionsList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCostCentersRestrictionsCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->costCenters->costCentersRestrictionsCreate(
            "",
            array(),
            CostCentersRestrictionsCreateType::CONTACT()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCostCentersRestrictionsDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->costCenters->costCentersRestrictionsDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCostCentersRestrictionsGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->costCenters->costCentersRestrictionsGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCostCentersRestrictionsUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->costCenters->costCentersRestrictionsUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCostCentersUsable(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->costCenters->costCentersUsable(
            array()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCostCentersWithdraw(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->costCenters->costCentersWithdraw(
            ""
        );

        $this->assertSame($data, $response);
    }

}
