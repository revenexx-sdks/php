<?php

namespace RevenexxAPIRevenexx\Services;

use RevenexxAPIRevenexx\Client;
use RevenexxAPIRevenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;
use RevenexxAPIRevenexx\Enums\Code;
use RevenexxAPIRevenexx\Enums\Theme;
use RevenexxAPIRevenexx\Enums\Timezone;
use RevenexxAPIRevenexx\Enums\Permissions;
use RevenexxAPIRevenexx\Enums\Output;

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
            Code::AMEX()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAvatarsGetFavicon(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->avatars->avatarsGetFavicon(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAvatarsGetFlag(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->avatars->avatarsGetFlag(
            Code::AF()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAvatarsGetImage(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->avatars->avatarsGetImage(
            ""
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
            ""
        );

        $this->assertSame($data, $response);
    }

}
