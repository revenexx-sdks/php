<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;

final class PagesDeliveryTest extends TestCase {
    private $client;
    private $pagesDelivery;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->pagesDelivery = new PagesDelivery($this->client);
    }

    public function testMethodPagesDeliveryMenus(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->pagesDelivery->pagesDeliveryMenus(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPagesDeliveryPage(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->pagesDelivery->pagesDeliveryPage(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPagesDeliveryPages(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->pagesDelivery->pagesDeliveryPages(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPagesDeliveryPreview(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->pagesDelivery->pagesDeliveryPreview(
            ""
        );

        $this->assertSame($data, $response);
    }

}
