<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;
use Revenexx\Enums\Code;
use Revenexx\Enums\AvatarsGetCreditCardCode;
use Revenexx\Enums\AvatarsGetFlagCode;
use Revenexx\Enums\Theme;
use Revenexx\Enums\Timezone;
use Revenexx\Enums\Permissions;
use Revenexx\Enums\Output;

final class AvatarsTest extends TestCase {
    private $client;
    private $avatars;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->avatars = new Avatars($this->client);
    }

    public function testMethodAvatarsGetBrowser(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->avatars->avatarsGetBrowser(
            Code::AA()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAvatarsGetCreditCard(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->avatars->avatarsGetCreditCard(
            AvatarsGetCreditCardCode::AMEX()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAvatarsGetFlag(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->avatars->avatarsGetFlag(
            AvatarsGetFlagCode::AF()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAvatarsGetImage(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->avatars->avatarsGetImage(
            "https://www.revenexx.com/img/hero-revenexx-poster.webp"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAvatarsGetInitials(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->avatars->avatarsGetInitials(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAvatarsGetQR(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->avatars->avatarsGetQR(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAvatarsGetScreenshot(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->avatars->avatarsGetScreenshot(
            "https://example.com"
        );

        $this->assertSame($data, $response);
    }

}
