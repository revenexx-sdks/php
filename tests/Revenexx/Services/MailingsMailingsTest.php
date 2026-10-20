<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;
use Revenexx\Enums\Trashed;
use Revenexx\Enums\Starter;
use Revenexx\Enums\TimezoneMode;
use Revenexx\Enums\Device;

final class MailingsMailingsTest extends TestCase {
    private $client;
    private $mailingsMailings;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->mailingsMailings = new MailingsMailings($this->client);
    }

    public function testMethodMailingsMailingsList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->mailingsMailings->mailingsMailingsList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMailingsMailingsCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->mailingsMailings->mailingsMailingsCreate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMailingsMailingsEmptyTrash(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->mailingsMailings->mailingsMailingsEmptyTrash(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMailingsMailingsPurge(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->mailingsMailings->mailingsMailingsPurge(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMailingsMailingsDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->mailingsMailings->mailingsMailingsDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMailingsMailingsGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->mailingsMailings->mailingsMailingsGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMailingsMailingsUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->mailingsMailings->mailingsMailingsUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMailingsMailingsArchive(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->mailingsMailings->mailingsMailingsArchive(
            "",
            array()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMailingsMailingsCancel(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->mailingsMailings->mailingsMailingsCancel(
            "",
            array()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMailingsMailingsChecklist(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->mailingsMailings->mailingsMailingsChecklist(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMailingsMailingsDuplicate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->mailingsMailings->mailingsMailingsDuplicate(
            "",
            array()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMailingsMailingsPreview(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->mailingsMailings->mailingsMailingsPreview(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMailingsMailingsReach(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->mailingsMailings->mailingsMailingsReach(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMailingsMailingsRestore(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->mailingsMailings->mailingsMailingsRestore(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMailingsMailingsSchedule(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->mailingsMailings->mailingsMailingsSchedule(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMailingsMailingsTest(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->mailingsMailings->mailingsMailingsTest(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMailingsMailingsUnarchive(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->mailingsMailings->mailingsMailingsUnarchive(
            "",
            array()
        );

        $this->assertSame($data, $response);
    }

}
