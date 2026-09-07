<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;
use Revenexx\Enums\OrderStatus;
use Revenexx\Enums\OrderPaymentStatus;
use Revenexx\Enums\OrderFulfillmentStatus;
use Revenexx\Enums\OrdersVocabulariesGetName;
use Revenexx\Enums\OrderCommentVisibility;
use Revenexx\Enums\OrderReturnSettlement;
use Revenexx\Enums\OrderReturnRefusal;

final class OrdersTest extends TestCase {
    private $client;
    private $orders;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->orders = new Orders($this->client);
    }

    public function testMethodOrdersList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->orders->ordersList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodOrdersNumberRangesList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->orders->ordersNumberRangesList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodOrdersNumberRangesCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->orders->ordersNumberRangesCreate(
            "order"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodOrdersNumberRangesDefaults(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->orders->ordersNumberRangesDefaults(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodOrdersNumberRangesDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->orders->ordersNumberRangesDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodOrdersNumberRangesGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->orders->ordersNumberRangesGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodOrdersNumberRangesUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->orders->ordersNumberRangesUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodOrdersPlace(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->orders->ordersPlace(
            array()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodOrdersReportsCustomerRollup(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->orders->ordersReportsCustomerRollup(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodOrdersVocabulariesList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->orders->ordersVocabulariesList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodOrdersVocabulariesGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->orders->ordersVocabulariesGet(
            OrdersVocabulariesGetName::CANCELLATIONSCOPES()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodOrdersGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->orders->ordersGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodOrdersUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->orders->ordersUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodOrdersAcknowledge(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->orders->ordersAcknowledge(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodOrdersCancel(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->orders->ordersCancel(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodOrdersCommentsList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->orders->ordersCommentsList(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodOrdersCommentsCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->orders->ordersCommentsCreate(
            "",
            "Called the customer, delivery agreed for next week."
        );

        $this->assertSame($data, $response);
    }

    public function testMethodOrdersComplete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->orders->ordersComplete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodOrdersEventsList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->orders->ordersEventsList(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodOrdersHold(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->orders->ordersHold(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodOrdersItemsCancel(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->orders->ordersItemsCancel(
            "",
            array()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodOrdersPaymentStatusUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->orders->ordersPaymentStatusUpdate(
            "",
            OrderPaymentStatus::OPEN()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodOrdersReturn(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->orders->ordersReturn(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodOrdersReturnsComplete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->orders->ordersReturnsComplete(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodOrdersReturnsReceive(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->orders->ordersReturnsReceive(
            "",
            "",
            array()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodOrdersReturnsReject(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->orders->ordersReturnsReject(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodOrdersShip(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->orders->ordersShip(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodOrdersShippable(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->orders->ordersShippable(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodOrdersUnhold(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->orders->ordersUnhold(
            "",
            array()
        );

        $this->assertSame($data, $response);
    }

}
