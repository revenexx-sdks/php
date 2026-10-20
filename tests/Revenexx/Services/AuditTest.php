<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;

final class AuditTest extends TestCase {
    private $client;
    private $audit;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->audit = new Audit($this->client);
    }

    public function testMethodAuditGetSettings(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->audit->auditGetSettings(
        );

        $this->assertSame($data, $response);
    }

}
