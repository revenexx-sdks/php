<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;

final class MailingsRecipientsTest extends TestCase {
    private $client;
    private $mailingsRecipients;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->mailingsRecipients = new MailingsRecipients($this->client);
    }

    public function testMethodMailingsRecipientsList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->mailingsRecipients->mailingsRecipientsList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMailingsRecipientsGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->mailingsRecipients->mailingsRecipientsGet(
            ""
        );

        $this->assertSame($data, $response);
    }

}
