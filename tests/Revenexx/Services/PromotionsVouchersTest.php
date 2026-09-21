<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;
use Revenexx\Enums\PromotionsBatchesCreateStatus;

final class PromotionsVouchersTest extends TestCase {
    private $client;
    private $promotionsVouchers;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->promotionsVouchers = new PromotionsVouchers($this->client);
    }

    public function testMethodPromotionsBatchesList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->promotionsVouchers->promotionsBatchesList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPromotionsBatchesCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->promotionsVouchers->promotionsBatchesCreate(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPromotionsBatchesDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->promotionsVouchers->promotionsBatchesDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPromotionsBatchesGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->promotionsVouchers->promotionsBatchesGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPromotionsBatchesUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->promotionsVouchers->promotionsBatchesUpdate(
            "",
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPromotionsBatchesExport(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->promotionsVouchers->promotionsBatchesExport(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPromotionsBatchesGenerate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->promotionsVouchers->promotionsBatchesGenerate(
            "",
            1
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPromotionsBatchesGenerateFor(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->promotionsVouchers->promotionsBatchesGenerateFor(
            "",
            array()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPromotionsBatchesImport(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->promotionsVouchers->promotionsBatchesImport(
            "",
            array()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPromotionsVoucherReservationsList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->promotionsVouchers->promotionsVoucherReservationsList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPromotionsVoucherReservationsCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->promotionsVouchers->promotionsVoucherReservationsCreate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPromotionsVoucherReservationsDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->promotionsVouchers->promotionsVoucherReservationsDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPromotionsVoucherReservationsGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->promotionsVouchers->promotionsVoucherReservationsGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPromotionsVoucherReservationsUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->promotionsVouchers->promotionsVoucherReservationsUpdate(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPromotionsVouchersList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->promotionsVouchers->promotionsVouchersList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPromotionsVouchersCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->promotionsVouchers->promotionsVouchersCreate(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPromotionsVouchersDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->promotionsVouchers->promotionsVouchersDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPromotionsVouchersGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->promotionsVouchers->promotionsVouchersGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPromotionsVouchersUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->promotionsVouchers->promotionsVouchersUpdate(
            "",
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

}
