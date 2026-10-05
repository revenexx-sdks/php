<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;
use Revenexx\Enums\QuotesTrailAttachDirection;
use Revenexx\Enums\Visibility;

final class QuotesTrailTest extends TestCase {
    private $client;
    private $quotesTrail;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->quotesTrail = new QuotesTrail($this->client);
    }

    public function testMethodQuotesTrailAttach(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->quotesTrail->quotesTrailAttach(
            "",
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodQuotesTrailNote(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->quotesTrail->quotesTrailNote(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

}
