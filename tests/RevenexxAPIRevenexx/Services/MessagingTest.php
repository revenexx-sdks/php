<?php

namespace RevenexxAPIRevenexx\Services;

use RevenexxAPIRevenexx\Client;
use RevenexxAPIRevenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;
use RevenexxAPIRevenexx\Enums\Priority;

final class MessagingTest extends TestCase {
    private $client;
    private $messaging;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->messaging = new Messaging($this->client);
    }

    public function testMethodMessagingListMessages(): void {

        $data = array(
            "messages" => array(),
            "total" => 0);

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->messagingListMessages(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMessagingCreateEmail(): void {

        $data = array(
            "\$createdAt" => "",
            "\$id" => "",
            "\$updatedAt" => "",
            "data" => array(),
            "deliveredTotal" => 0,
            "providerType" => "",
            "status" => "",
            "targets" => array(),
            "topics" => array(),
            "users" => array());

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->messagingCreateEmail(
            "",
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMessagingUpdateEmail(): void {

        $data = array(
            "\$createdAt" => "",
            "\$id" => "",
            "\$updatedAt" => "",
            "data" => array(),
            "deliveredTotal" => 0,
            "providerType" => "",
            "status" => "",
            "targets" => array(),
            "topics" => array(),
            "users" => array());

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->messagingUpdateEmail(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMessagingCreatePush(): void {

        $data = array(
            "\$createdAt" => "",
            "\$id" => "",
            "\$updatedAt" => "",
            "data" => array(),
            "deliveredTotal" => 0,
            "providerType" => "",
            "status" => "",
            "targets" => array(),
            "topics" => array(),
            "users" => array());

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->messagingCreatePush(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMessagingUpdatePush(): void {

        $data = array(
            "\$createdAt" => "",
            "\$id" => "",
            "\$updatedAt" => "",
            "data" => array(),
            "deliveredTotal" => 0,
            "providerType" => "",
            "status" => "",
            "targets" => array(),
            "topics" => array(),
            "users" => array());

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->messagingUpdatePush(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMessagingDelete(): void {

        $data = '';

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->messagingDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMessagingGetMessage(): void {

        $data = array(
            "\$createdAt" => "",
            "\$id" => "",
            "\$updatedAt" => "",
            "data" => array(),
            "deliveredTotal" => 0,
            "providerType" => "",
            "status" => "",
            "targets" => array(),
            "topics" => array(),
            "users" => array());

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->messagingGetMessage(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMessagingListMessageLogs(): void {

        $data = array(
            "logs" => array(),
            "total" => 0);

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->messagingListMessageLogs(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMessagingListTargets(): void {

        $data = array(
            "targets" => array(),
            "total" => 0);

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->messagingListTargets(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMessagingListProviders(): void {

        $data = array(
            "providers" => array(),
            "total" => 0);

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->messagingListProviders(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMessagingCreateMailgunProvider(): void {

        $data = array(
            "\$createdAt" => "",
            "\$id" => "",
            "\$updatedAt" => "",
            "credentials" => array(),
            "enabled" => true,
            "name" => "",
            "provider" => "",
            "type" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->messagingCreateMailgunProvider(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMessagingUpdateMailgunProvider(): void {

        $data = array(
            "\$createdAt" => "",
            "\$id" => "",
            "\$updatedAt" => "",
            "credentials" => array(),
            "enabled" => true,
            "name" => "",
            "provider" => "",
            "type" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->messagingUpdateMailgunProvider(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMessagingCreateMsg91Provider(): void {

        $data = array(
            "\$createdAt" => "",
            "\$id" => "",
            "\$updatedAt" => "",
            "credentials" => array(),
            "enabled" => true,
            "name" => "",
            "provider" => "",
            "type" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->messagingCreateMsg91Provider(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMessagingUpdateMsg91Provider(): void {

        $data = array(
            "\$createdAt" => "",
            "\$id" => "",
            "\$updatedAt" => "",
            "credentials" => array(),
            "enabled" => true,
            "name" => "",
            "provider" => "",
            "type" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->messagingUpdateMsg91Provider(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMessagingCreateResendProvider(): void {

        $data = array(
            "\$createdAt" => "",
            "\$id" => "",
            "\$updatedAt" => "",
            "credentials" => array(),
            "enabled" => true,
            "name" => "",
            "provider" => "",
            "type" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->messagingCreateResendProvider(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMessagingUpdateResendProvider(): void {

        $data = array(
            "\$createdAt" => "",
            "\$id" => "",
            "\$updatedAt" => "",
            "credentials" => array(),
            "enabled" => true,
            "name" => "",
            "provider" => "",
            "type" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->messagingUpdateResendProvider(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMessagingCreateSendgridProvider(): void {

        $data = array(
            "\$createdAt" => "",
            "\$id" => "",
            "\$updatedAt" => "",
            "credentials" => array(),
            "enabled" => true,
            "name" => "",
            "provider" => "",
            "type" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->messagingCreateSendgridProvider(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMessagingUpdateSendgridProvider(): void {

        $data = array(
            "\$createdAt" => "",
            "\$id" => "",
            "\$updatedAt" => "",
            "credentials" => array(),
            "enabled" => true,
            "name" => "",
            "provider" => "",
            "type" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->messagingUpdateSendgridProvider(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMessagingCreateTelesignProvider(): void {

        $data = array(
            "\$createdAt" => "",
            "\$id" => "",
            "\$updatedAt" => "",
            "credentials" => array(),
            "enabled" => true,
            "name" => "",
            "provider" => "",
            "type" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->messagingCreateTelesignProvider(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMessagingUpdateTelesignProvider(): void {

        $data = array(
            "\$createdAt" => "",
            "\$id" => "",
            "\$updatedAt" => "",
            "credentials" => array(),
            "enabled" => true,
            "name" => "",
            "provider" => "",
            "type" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->messagingUpdateTelesignProvider(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMessagingCreateTextmagicProvider(): void {

        $data = array(
            "\$createdAt" => "",
            "\$id" => "",
            "\$updatedAt" => "",
            "credentials" => array(),
            "enabled" => true,
            "name" => "",
            "provider" => "",
            "type" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->messagingCreateTextmagicProvider(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMessagingUpdateTextmagicProvider(): void {

        $data = array(
            "\$createdAt" => "",
            "\$id" => "",
            "\$updatedAt" => "",
            "credentials" => array(),
            "enabled" => true,
            "name" => "",
            "provider" => "",
            "type" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->messagingUpdateTextmagicProvider(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMessagingCreateTwilioProvider(): void {

        $data = array(
            "\$createdAt" => "",
            "\$id" => "",
            "\$updatedAt" => "",
            "credentials" => array(),
            "enabled" => true,
            "name" => "",
            "provider" => "",
            "type" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->messagingCreateTwilioProvider(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMessagingUpdateTwilioProvider(): void {

        $data = array(
            "\$createdAt" => "",
            "\$id" => "",
            "\$updatedAt" => "",
            "credentials" => array(),
            "enabled" => true,
            "name" => "",
            "provider" => "",
            "type" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->messagingUpdateTwilioProvider(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMessagingCreateVonageProvider(): void {

        $data = array(
            "\$createdAt" => "",
            "\$id" => "",
            "\$updatedAt" => "",
            "credentials" => array(),
            "enabled" => true,
            "name" => "",
            "provider" => "",
            "type" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->messagingCreateVonageProvider(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMessagingUpdateVonageProvider(): void {

        $data = array(
            "\$createdAt" => "",
            "\$id" => "",
            "\$updatedAt" => "",
            "credentials" => array(),
            "enabled" => true,
            "name" => "",
            "provider" => "",
            "type" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->messagingUpdateVonageProvider(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMessagingDeleteProvider(): void {

        $data = '';

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->messagingDeleteProvider(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMessagingGetProvider(): void {

        $data = array(
            "\$createdAt" => "",
            "\$id" => "",
            "\$updatedAt" => "",
            "credentials" => array(),
            "enabled" => true,
            "name" => "",
            "provider" => "",
            "type" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->messagingGetProvider(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMessagingListProviderLogs(): void {

        $data = array(
            "logs" => array(),
            "total" => 0);

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->messagingListProviderLogs(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMessagingListSubscriberLogs(): void {

        $data = array(
            "logs" => array(),
            "total" => 0);

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->messagingListSubscriberLogs(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMessagingListTopics(): void {

        $data = array(
            "topics" => array(),
            "total" => 0);

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->messagingListTopics(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMessagingCreateTopic(): void {

        $data = array(
            "\$createdAt" => "",
            "\$id" => "",
            "\$updatedAt" => "",
            "emailTotal" => 0,
            "name" => "",
            "pushTotal" => 0,
            "smsTotal" => 0,
            "subscribe" => array());

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->messagingCreateTopic(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMessagingDeleteTopic(): void {

        $data = '';

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->messagingDeleteTopic(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMessagingGetTopic(): void {

        $data = array(
            "\$createdAt" => "",
            "\$id" => "",
            "\$updatedAt" => "",
            "emailTotal" => 0,
            "name" => "",
            "pushTotal" => 0,
            "smsTotal" => 0,
            "subscribe" => array());

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->messagingGetTopic(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMessagingUpdateTopic(): void {

        $data = array(
            "\$createdAt" => "",
            "\$id" => "",
            "\$updatedAt" => "",
            "emailTotal" => 0,
            "name" => "",
            "pushTotal" => 0,
            "smsTotal" => 0,
            "subscribe" => array());

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->messagingUpdateTopic(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMessagingListTopicLogs(): void {

        $data = array(
            "logs" => array(),
            "total" => 0);

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->messagingListTopicLogs(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMessagingListSubscribers(): void {

        $data = array(
            "subscribers" => array(),
            "total" => 0);

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->messagingListSubscribers(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMessagingCreateSubscriber(): void {

        $data = array(
            "\$createdAt" => "",
            "\$id" => "",
            "\$updatedAt" => "",
            "providerType" => "",
            "target" => array(),
            "targetId" => "",
            "topicId" => "",
            "userId" => "",
            "userName" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->messagingCreateSubscriber(
            "",
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMessagingDeleteSubscriber(): void {

        $data = '';

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->messagingDeleteSubscriber(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMessagingGetSubscriber(): void {

        $data = array(
            "\$createdAt" => "",
            "\$id" => "",
            "\$updatedAt" => "",
            "providerType" => "",
            "target" => array(),
            "targetId" => "",
            "topicId" => "",
            "userId" => "",
            "userName" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->messaging->messagingGetSubscriber(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

}
