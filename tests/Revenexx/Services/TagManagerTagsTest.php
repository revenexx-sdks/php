<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;
use Revenexx\Enums\TagManagerTagsCreateKind;
use Revenexx\Enums\Load;
use Revenexx\Enums\TagManagerTriggersCreateKind;
use Revenexx\Enums\TagManagerVariablesCreateKind;

final class TagManagerTagsTest extends TestCase {
    private $client;
    private $tagManagerTags;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->tagManagerTags = new TagManagerTags($this->client);
    }

    public function testMethodTagManagerRegistryList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tagManagerTags->tagManagerRegistryList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodTagManagerTagsList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tagManagerTags->tagManagerTagsList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodTagManagerTagsCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tagManagerTags->tagManagerTagsCreate(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodTagManagerTagsDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tagManagerTags->tagManagerTagsDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodTagManagerTagsGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tagManagerTags->tagManagerTagsGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodTagManagerTagsUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tagManagerTags->tagManagerTagsUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodTagManagerTagsTriggersList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tagManagerTags->tagManagerTagsTriggersList(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodTagManagerTagsTriggersAttach(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tagManagerTags->tagManagerTagsTriggersAttach(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodTagManagerTagsTriggersDetach(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tagManagerTags->tagManagerTagsTriggersDetach(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodTagManagerTriggersList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tagManagerTags->tagManagerTriggersList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodTagManagerTriggersCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tagManagerTags->tagManagerTriggersCreate(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodTagManagerTriggersDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tagManagerTags->tagManagerTriggersDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodTagManagerTriggersGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tagManagerTags->tagManagerTriggersGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodTagManagerTriggersUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tagManagerTags->tagManagerTriggersUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodTagManagerVariablesList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tagManagerTags->tagManagerVariablesList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodTagManagerVariablesCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tagManagerTags->tagManagerVariablesCreate(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodTagManagerVariablesDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tagManagerTags->tagManagerVariablesDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodTagManagerVariablesGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tagManagerTags->tagManagerVariablesGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodTagManagerVariablesUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tagManagerTags->tagManagerVariablesUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodTagManagerVocabulariesList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tagManagerTags->tagManagerVocabulariesList(
        );

        $this->assertSame($data, $response);
    }

}
