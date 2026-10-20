<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;
use Revenexx\Enums\Channel;
use Revenexx\Enums\AudiencesRulesCreateKind;
use Revenexx\Enums\MatchMode;

final class AudiencesRulesTest extends TestCase {
    private $client;
    private $audiencesRules;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->audiencesRules = new AudiencesRules($this->client);
    }

    public function testMethodAudiencesRulesList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->audiencesRules->audiencesRulesList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAudiencesRulesCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->audiencesRules->audiencesRulesCreate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAudiencesRulesDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->audiencesRules->audiencesRulesDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAudiencesRulesGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->audiencesRules->audiencesRulesGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAudiencesRulesUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->audiencesRules->audiencesRulesUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

}
