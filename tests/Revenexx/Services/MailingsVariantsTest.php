<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;

final class MailingsVariantsTest extends TestCase {
    private $client;
    private $mailingsVariants;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->mailingsVariants = new MailingsVariants($this->client);
    }

    public function testMethodMailingsVariantsList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->mailingsVariants->mailingsVariantsList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMailingsVariantsGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->mailingsVariants->mailingsVariantsGet(
            ""
        );

        $this->assertSame($data, $response);
    }

}
