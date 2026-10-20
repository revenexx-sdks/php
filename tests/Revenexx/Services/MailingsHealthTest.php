<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;

final class MailingsHealthTest extends TestCase {
    private $client;
    private $mailingsHealth;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->mailingsHealth = new MailingsHealth($this->client);
    }

    public function testMethodMailingsHealthRead(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->mailingsHealth->mailingsHealthRead(
        );

        $this->assertSame($data, $response);
    }

}
