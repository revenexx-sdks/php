<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;

final class MailingsAnalysisTest extends TestCase {
    private $client;
    private $mailingsAnalysis;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->mailingsAnalysis = new MailingsAnalysis($this->client);
    }

    public function testMethodMailingsAnalysisListClicks(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->mailingsAnalysis->mailingsAnalysisListClicks(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMailingsAnalysisGetClick(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->mailingsAnalysis->mailingsAnalysisGetClick(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMailingsAnalysisListEngagements(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->mailingsAnalysis->mailingsAnalysisListEngagements(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMailingsAnalysisGetEngagement(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->mailingsAnalysis->mailingsAnalysisGetEngagement(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMailingsAnalysisClicks(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->mailingsAnalysis->mailingsAnalysisClicks(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMailingsAnalysisStats(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->mailingsAnalysis->mailingsAnalysisStats(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMailingsAnalysisTimeline(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->mailingsAnalysis->mailingsAnalysisTimeline(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMailingsAnalysisListStats(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->mailingsAnalysis->mailingsAnalysisListStats(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMailingsAnalysisSweep(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->mailingsAnalysis->mailingsAnalysisSweep(
            array()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMailingsAnalysisGetStats(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->mailingsAnalysis->mailingsAnalysisGetStats(
            ""
        );

        $this->assertSame($data, $response);
    }

}
