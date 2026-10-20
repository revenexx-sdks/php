<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;

final class MailingsBlocksTest extends TestCase {
    private $client;
    private $mailingsBlocks;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->mailingsBlocks = new MailingsBlocks($this->client);
    }

    public function testMethodMailingsBlocksRead(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->mailingsBlocks->mailingsBlocksRead(
        );

        $this->assertSame($data, $response);
    }

}
