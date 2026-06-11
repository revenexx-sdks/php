<?php

namespace RevenexxAPIRevenexx\Services;

use RevenexxAPIRevenexx\Client;
use RevenexxAPIRevenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;

final class TokensTest extends TestCase {
    private $client;
    private $tokens;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->tokens = new Tokens($this->client);
    }

    public function testMethodTokensList(): void {

        $data = array(
            "tokens" => array(),
            "total" => 0);

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tokens->tokensList(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodTokensCreateFileToken(): void {

        $data = array(
            "\$createdAt" => "",
            "\$id" => "",
            "accessedAt" => "",
            "expire" => "",
            "resourceId" => "",
            "resourceType" => "",
            "secret" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tokens->tokensCreateFileToken(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodTokensDelete(): void {

        $data = '';

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tokens->tokensDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodTokensGet(): void {

        $data = array(
            "\$createdAt" => "",
            "\$id" => "",
            "accessedAt" => "",
            "expire" => "",
            "resourceId" => "",
            "resourceType" => "",
            "secret" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tokens->tokensGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodTokensUpdate(): void {

        $data = array(
            "\$createdAt" => "",
            "\$id" => "",
            "accessedAt" => "",
            "expire" => "",
            "resourceId" => "",
            "resourceType" => "",
            "secret" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tokens->tokensUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

}
