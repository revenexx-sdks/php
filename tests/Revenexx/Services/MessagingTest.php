<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;
use Revenexx\Enums\ResourceType;
use Revenexx\Enums\Scope;
use Revenexx\Enums\Reason;
use Revenexx\Enums\MessageClass;
use Revenexx\Enums\WhatsappCategory;

final class MessagingTest extends TestCase {
    private $client;
    private $messaging;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->messaging = new Messaging($this->client);
    }

    public function testMethodAuditIndex(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->auditIndex(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodBindingIndex(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->bindingIndex(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodBindingStore(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->bindingStore(
            "",
            "",
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodBindingDestroy(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->bindingDestroy(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodBindingShow(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->bindingShow(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodBindingUpdatePatch(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->bindingUpdatePatch(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodBindingUpdate(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->bindingUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodChannelCredentialIndex(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->channelCredentialIndex(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodChannelCredentialDestroy(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->channelCredentialDestroy(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodChannelCredentialUpdatePatch(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->channelCredentialUpdatePatch(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodChannelCredentialUpdate(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->channelCredentialUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodChannelCredentialVerify(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->channelCredentialVerify(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodChannelIndex(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->channelIndex(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodConfigShow(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->configShow(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodConfigUpdatePatch(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->configUpdatePatch(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodConfigUpdate(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->configUpdate(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodLayoutIndex(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->layoutIndex(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodLayoutStore(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->layoutStore(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodLayoutDestroy(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->layoutDestroy(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodLayoutShow(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->layoutShow(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodLayoutUpdate(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->layoutUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodLibraryIndex(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->libraryIndex(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMessageIndex(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->messageIndex(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMessageShow(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->messageShow(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodSendPreview(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->sendPreview(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodErasureStore(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->erasureStore(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPushSubscriptionDestroy(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->pushSubscriptionDestroy(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPushSubscriptionIndex(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->pushSubscriptionIndex(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPushSubscriptionStore(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->pushSubscriptionStore(
            "https://example.com",
            array(),
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodSendSend(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->sendSend(
            "",
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodStatsIndex(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->statsIndex(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodSuppressionIndex(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->suppressionIndex(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodSuppressionStore(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->suppressionStore(
            "",
            "",
            Reason::HARDBOUNCE()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodSuppressionDestroy(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->suppressionDestroy(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodSuppressionShow(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->suppressionShow(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodTemplateIndex(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->templateIndex(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodTemplateStore(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->templateStore(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodTemplateDestroy(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->templateDestroy(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodTemplateShow(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->templateShow(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodTemplateUpdatePatch(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->templateUpdatePatch(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodTemplateUpdate(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->templateUpdate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodTemplateVersionStore(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->templateVersionStore(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodTemplateVersionIndex(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->templateVersionIndex(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodTemplateVersionShow(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->templateVersionShow(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodTemplateVersionRestore(): void {

        $data = array(
            "error" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->templateVersionRestore(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

}
