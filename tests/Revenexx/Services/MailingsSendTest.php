<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;

final class MailingsSendTest extends TestCase {
    private $client;
    private $mailingsSend;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->mailingsSend = new MailingsSend($this->client);
    }

    public function testMethodMailingsSendRun(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->mailingsSend->mailingsSendRun(
            array()
        );

        $this->assertSame($data, $response);
    }

}
