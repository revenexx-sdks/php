<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;

final class PromotionsEvaluationTest extends TestCase {
    private $client;
    private $promotionsEvaluation;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->promotionsEvaluation = new PromotionsEvaluation($this->client);
    }

    public function testMethodPromotionsEvaluationAvailable(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->promotionsEvaluation->promotionsEvaluationAvailable(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPromotionsEvaluationCheckCode(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->promotionsEvaluation->promotionsEvaluationCheckCode(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPromotionsEvaluationEvaluate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->promotionsEvaluation->promotionsEvaluationEvaluate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPromotionsEvaluationVocabularies(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->promotionsEvaluation->promotionsEvaluationVocabularies(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPromotionsEvaluationVocabulary(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->promotionsEvaluation->promotionsEvaluationVocabulary(
            ""
        );

        $this->assertSame($data, $response);
    }

}
