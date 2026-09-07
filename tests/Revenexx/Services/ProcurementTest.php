<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;
use Revenexx\Enums\Condition;
use Revenexx\Enums\Effect;
use Revenexx\Enums\ApproverType;
use Revenexx\Enums\ProcurementPurchaseRequestItemsCreateType;

final class ProcurementTest extends TestCase {
    private $client;
    private $procurement;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->procurement = new Procurement($this->client);
    }

    public function testMethodProcurementApprovalRulesList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->procurement->procurementApprovalRulesList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProcurementApprovalRulesCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->procurement->procurementApprovalRulesCreate(
            Condition::ALWAYS(),
            Effect::PENDINGORDER(),
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProcurementApprovalRulesDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->procurement->procurementApprovalRulesDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProcurementApprovalRulesGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->procurement->procurementApprovalRulesGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProcurementApprovalRulesUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->procurement->procurementApprovalRulesUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProcurementPendingApprovalsList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->procurement->procurementPendingApprovalsList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProcurementPendingApprovalsGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->procurement->procurementPendingApprovalsGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProcurementPendingApprovalsApprove(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->procurement->procurementPendingApprovalsApprove(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProcurementPendingApprovalsDecline(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->procurement->procurementPendingApprovalsDecline(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProcurementPurchaseRequestEventsList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->procurement->procurementPurchaseRequestEventsList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProcurementPurchaseRequestEventsGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->procurement->procurementPurchaseRequestEventsGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProcurementPurchaseRequestItemsList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->procurement->procurementPurchaseRequestItemsList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProcurementPurchaseRequestItemsCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->procurement->procurementPurchaseRequestItemsCreate(
            "",
            "",
            1.0
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProcurementPurchaseRequestItemsDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->procurement->procurementPurchaseRequestItemsDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProcurementPurchaseRequestItemsGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->procurement->procurementPurchaseRequestItemsGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProcurementPurchaseRequestItemsUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->procurement->procurementPurchaseRequestItemsUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProcurementPurchaseRequestsList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->procurement->procurementPurchaseRequestsList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProcurementPurchaseRequestsGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->procurement->procurementPurchaseRequestsGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProcurementPurchaseRequestsUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->procurement->procurementPurchaseRequestsUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProcurementPurchaseRequestsApprove(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->procurement->procurementPurchaseRequestsApprove(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProcurementPurchaseRequestsCancel(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->procurement->procurementPurchaseRequestsCancel(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProcurementPurchaseRequestsOrder(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->procurement->procurementPurchaseRequestsOrder(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProcurementReconcile(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->procurement->procurementReconcile(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodProcurementSubmit(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->procurement->procurementSubmit(
            "",
            array()
        );

        $this->assertSame($data, $response);
    }

}
