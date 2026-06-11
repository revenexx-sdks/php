<?php

namespace RevenexxAPIRevenexx\Services;

use RevenexxAPIRevenexx\RevenexxAPIRevenexxException;
use RevenexxAPIRevenexx\Client;
use RevenexxAPIRevenexx\Service;
use RevenexxAPIRevenexx\InputFile;
use RevenexxAPIRevenexx\Enums\Priority;

class Messaging extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * Get a list of all messages from the current Revenexx project.
     *
     * @param ?array $queries
     * @param ?string $search
     * @param ?bool $total
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function messagingListMessages(?array $queries = null, ?string $search = null, ?bool $total = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/messaging/messages'
        );

        $apiParams = [];

        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
        }

        if (!is_null($search)) {
            $apiParams['search'] = $search;
        }

        if (!is_null($total)) {
            $apiParams['total'] = $total;
        }

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Create a new email message.
     *
     * @param string $content
     * @param string $messageId
     * @param string $subject
     * @param ?array $attachments
     * @param ?array $bcc
     * @param ?array $cc
     * @param ?bool $draft
     * @param ?bool $html
     * @param ?string $scheduledAt
     * @param ?array $targets
     * @param ?array $topics
     * @param ?array $users
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function messagingCreateEmail(string $content, string $messageId, string $subject, ?array $attachments = null, ?array $bcc = null, ?array $cc = null, ?bool $draft = null, ?bool $html = null, ?string $scheduledAt = null, ?array $targets = null, ?array $topics = null, ?array $users = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/messaging/messages/email'
        );

        $apiParams = [];
        $apiParams['content'] = $content;
        $apiParams['messageId'] = $messageId;
        $apiParams['subject'] = $subject;

        if (!is_null($attachments)) {
            $apiParams['attachments'] = $attachments;
        }

        if (!is_null($bcc)) {
            $apiParams['bcc'] = $bcc;
        }

        if (!is_null($cc)) {
            $apiParams['cc'] = $cc;
        }

        if (!is_null($draft)) {
            $apiParams['draft'] = $draft;
        }

        if (!is_null($html)) {
            $apiParams['html'] = $html;
        }

        if (!is_null($scheduledAt)) {
            $apiParams['scheduledAt'] = $scheduledAt;
        }

        if (!is_null($targets)) {
            $apiParams['targets'] = $targets;
        }

        if (!is_null($topics)) {
            $apiParams['topics'] = $topics;
        }

        if (!is_null($users)) {
            $apiParams['users'] = $users;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Update an email message by its unique ID. This endpoint only works on
     * messages that are in draft status. Messages that are already processing,
     * sent, or failed cannot be updated.
     * 
     *
     * @param string $messageId
     * @param ?array $attachments
     * @param ?array $bcc
     * @param ?array $cc
     * @param ?string $content
     * @param ?bool $draft
     * @param ?bool $html
     * @param ?string $scheduledAt
     * @param ?string $subject
     * @param ?array $targets
     * @param ?array $topics
     * @param ?array $users
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function messagingUpdateEmail(string $messageId, ?array $attachments = null, ?array $bcc = null, ?array $cc = null, ?string $content = null, ?bool $draft = null, ?bool $html = null, ?string $scheduledAt = null, ?string $subject = null, ?array $targets = null, ?array $topics = null, ?array $users = null): array
    {
        $apiPath = str_replace(
            ['{messageId}'],
            [$messageId],
            '/v1/messaging/messages/email/{messageId}'
        );

        $apiParams = [];
        $apiParams['messageId'] = $messageId;

        if (!is_null($attachments)) {
            $apiParams['attachments'] = $attachments;
        }

        if (!is_null($bcc)) {
            $apiParams['bcc'] = $bcc;
        }

        if (!is_null($cc)) {
            $apiParams['cc'] = $cc;
        }

        if (!is_null($content)) {
            $apiParams['content'] = $content;
        }

        if (!is_null($draft)) {
            $apiParams['draft'] = $draft;
        }

        if (!is_null($html)) {
            $apiParams['html'] = $html;
        }

        if (!is_null($scheduledAt)) {
            $apiParams['scheduledAt'] = $scheduledAt;
        }

        if (!is_null($subject)) {
            $apiParams['subject'] = $subject;
        }

        if (!is_null($targets)) {
            $apiParams['targets'] = $targets;
        }

        if (!is_null($topics)) {
            $apiParams['topics'] = $topics;
        }

        if (!is_null($users)) {
            $apiParams['users'] = $users;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Create a new push notification.
     *
     * @param string $messageId
     * @param ?string $action
     * @param ?int $badge
     * @param ?string $body
     * @param ?string $color
     * @param ?bool $contentAvailable
     * @param ?bool $critical
     * @param ?array $data
     * @param ?bool $draft
     * @param ?string $icon
     * @param ?string $image
     * @param ?Priority $priority
     * @param ?string $scheduledAt
     * @param ?string $sound
     * @param ?string $tag
     * @param ?array $targets
     * @param ?string $title
     * @param ?array $topics
     * @param ?array $users
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function messagingCreatePush(string $messageId, ?string $action = null, ?int $badge = null, ?string $body = null, ?string $color = null, ?bool $contentAvailable = null, ?bool $critical = null, ?array $data = null, ?bool $draft = null, ?string $icon = null, ?string $image = null, ?Priority $priority = null, ?string $scheduledAt = null, ?string $sound = null, ?string $tag = null, ?array $targets = null, ?string $title = null, ?array $topics = null, ?array $users = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/messaging/messages/push'
        );

        $apiParams = [];
        $apiParams['messageId'] = $messageId;

        if (!is_null($action)) {
            $apiParams['action'] = $action;
        }

        if (!is_null($badge)) {
            $apiParams['badge'] = $badge;
        }

        if (!is_null($body)) {
            $apiParams['body'] = $body;
        }

        if (!is_null($color)) {
            $apiParams['color'] = $color;
        }

        if (!is_null($contentAvailable)) {
            $apiParams['contentAvailable'] = $contentAvailable;
        }

        if (!is_null($critical)) {
            $apiParams['critical'] = $critical;
        }

        if (!is_null($data)) {
            $apiParams['data'] = $data;
        }

        if (!is_null($draft)) {
            $apiParams['draft'] = $draft;
        }

        if (!is_null($icon)) {
            $apiParams['icon'] = $icon;
        }

        if (!is_null($image)) {
            $apiParams['image'] = $image;
        }

        if (!is_null($priority)) {
            $apiParams['priority'] = $priority;
        }

        if (!is_null($scheduledAt)) {
            $apiParams['scheduledAt'] = $scheduledAt;
        }

        if (!is_null($sound)) {
            $apiParams['sound'] = $sound;
        }

        if (!is_null($tag)) {
            $apiParams['tag'] = $tag;
        }

        if (!is_null($targets)) {
            $apiParams['targets'] = $targets;
        }

        if (!is_null($title)) {
            $apiParams['title'] = $title;
        }

        if (!is_null($topics)) {
            $apiParams['topics'] = $topics;
        }

        if (!is_null($users)) {
            $apiParams['users'] = $users;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Update a push notification by its unique ID. This endpoint only works on
     * messages that are in draft status. Messages that are already processing,
     * sent, or failed cannot be updated.
     * 
     *
     * @param string $messageId
     * @param ?string $action
     * @param ?int $badge
     * @param ?string $body
     * @param ?string $color
     * @param ?bool $contentAvailable
     * @param ?bool $critical
     * @param ?array $data
     * @param ?bool $draft
     * @param ?string $icon
     * @param ?string $image
     * @param ?Priority $priority
     * @param ?string $scheduledAt
     * @param ?string $sound
     * @param ?string $tag
     * @param ?array $targets
     * @param ?string $title
     * @param ?array $topics
     * @param ?array $users
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function messagingUpdatePush(string $messageId, ?string $action = null, ?int $badge = null, ?string $body = null, ?string $color = null, ?bool $contentAvailable = null, ?bool $critical = null, ?array $data = null, ?bool $draft = null, ?string $icon = null, ?string $image = null, ?Priority $priority = null, ?string $scheduledAt = null, ?string $sound = null, ?string $tag = null, ?array $targets = null, ?string $title = null, ?array $topics = null, ?array $users = null): array
    {
        $apiPath = str_replace(
            ['{messageId}'],
            [$messageId],
            '/v1/messaging/messages/push/{messageId}'
        );

        $apiParams = [];
        $apiParams['messageId'] = $messageId;

        if (!is_null($action)) {
            $apiParams['action'] = $action;
        }

        if (!is_null($badge)) {
            $apiParams['badge'] = $badge;
        }

        if (!is_null($body)) {
            $apiParams['body'] = $body;
        }

        if (!is_null($color)) {
            $apiParams['color'] = $color;
        }

        if (!is_null($contentAvailable)) {
            $apiParams['contentAvailable'] = $contentAvailable;
        }

        if (!is_null($critical)) {
            $apiParams['critical'] = $critical;
        }

        if (!is_null($data)) {
            $apiParams['data'] = $data;
        }

        if (!is_null($draft)) {
            $apiParams['draft'] = $draft;
        }

        if (!is_null($icon)) {
            $apiParams['icon'] = $icon;
        }

        if (!is_null($image)) {
            $apiParams['image'] = $image;
        }

        if (!is_null($priority)) {
            $apiParams['priority'] = $priority;
        }

        if (!is_null($scheduledAt)) {
            $apiParams['scheduledAt'] = $scheduledAt;
        }

        if (!is_null($sound)) {
            $apiParams['sound'] = $sound;
        }

        if (!is_null($tag)) {
            $apiParams['tag'] = $tag;
        }

        if (!is_null($targets)) {
            $apiParams['targets'] = $targets;
        }

        if (!is_null($title)) {
            $apiParams['title'] = $title;
        }

        if (!is_null($topics)) {
            $apiParams['topics'] = $topics;
        }

        if (!is_null($users)) {
            $apiParams['users'] = $users;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Delete a message. If the message is not a draft or scheduled, but has been
     * sent, this will not recall the message.
     *
     * @param string $messageId
     * @throws RevenexxAPIRevenexxException
     * @return string
     */
    public function messagingDelete(string $messageId): string
    {
        $apiPath = str_replace(
            ['{messageId}'],
            [$messageId],
            '/v1/messaging/messages/{messageId}'
        );

        $apiParams = [];
        $apiParams['messageId'] = $messageId;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Get a message by its unique ID.
     * 
     *
     * @param string $messageId
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function messagingGetMessage(string $messageId): array
    {
        $apiPath = str_replace(
            ['{messageId}'],
            [$messageId],
            '/v1/messaging/messages/{messageId}'
        );

        $apiParams = [];
        $apiParams['messageId'] = $messageId;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Get the message activity logs listed by its unique ID.
     *
     * @param string $messageId
     * @param ?array $queries
     * @param ?bool $total
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function messagingListMessageLogs(string $messageId, ?array $queries = null, ?bool $total = null): array
    {
        $apiPath = str_replace(
            ['{messageId}'],
            [$messageId],
            '/v1/messaging/messages/{messageId}/logs'
        );

        $apiParams = [];
        $apiParams['messageId'] = $messageId;

        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
        }

        if (!is_null($total)) {
            $apiParams['total'] = $total;
        }

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Get a list of the targets associated with a message.
     *
     * @param string $messageId
     * @param ?array $queries
     * @param ?bool $total
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function messagingListTargets(string $messageId, ?array $queries = null, ?bool $total = null): array
    {
        $apiPath = str_replace(
            ['{messageId}'],
            [$messageId],
            '/v1/messaging/messages/{messageId}/targets'
        );

        $apiParams = [];
        $apiParams['messageId'] = $messageId;

        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
        }

        if (!is_null($total)) {
            $apiParams['total'] = $total;
        }

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Get a list of all providers from the current Revenexx project.
     *
     * @param ?array $queries
     * @param ?string $search
     * @param ?bool $total
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function messagingListProviders(?array $queries = null, ?string $search = null, ?bool $total = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/messaging/providers'
        );

        $apiParams = [];

        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
        }

        if (!is_null($search)) {
            $apiParams['search'] = $search;
        }

        if (!is_null($total)) {
            $apiParams['total'] = $total;
        }

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Create a new Mailgun provider.
     *
     * @param string $name
     * @param string $providerId
     * @param ?string $apiKey
     * @param ?string $domain
     * @param ?bool $enabled
     * @param ?string $fromEmail
     * @param ?string $fromName
     * @param ?bool $isEuRegion
     * @param ?string $replyToEmail
     * @param ?string $replyToName
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function messagingCreateMailgunProvider(string $name, string $providerId, ?string $apiKey = null, ?string $domain = null, ?bool $enabled = null, ?string $fromEmail = null, ?string $fromName = null, ?bool $isEuRegion = null, ?string $replyToEmail = null, ?string $replyToName = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/messaging/providers/mailgun'
        );

        $apiParams = [];
        $apiParams['name'] = $name;
        $apiParams['providerId'] = $providerId;

        if (!is_null($apiKey)) {
            $apiParams['apiKey'] = $apiKey;
        }

        if (!is_null($domain)) {
            $apiParams['domain'] = $domain;
        }

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }

        if (!is_null($fromEmail)) {
            $apiParams['fromEmail'] = $fromEmail;
        }

        if (!is_null($fromName)) {
            $apiParams['fromName'] = $fromName;
        }

        if (!is_null($isEuRegion)) {
            $apiParams['isEuRegion'] = $isEuRegion;
        }

        if (!is_null($replyToEmail)) {
            $apiParams['replyToEmail'] = $replyToEmail;
        }

        if (!is_null($replyToName)) {
            $apiParams['replyToName'] = $replyToName;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Update a Mailgun provider by its unique ID.
     *
     * @param string $providerId
     * @param ?string $apiKey
     * @param ?string $domain
     * @param ?bool $enabled
     * @param ?string $fromEmail
     * @param ?string $fromName
     * @param ?bool $isEuRegion
     * @param ?string $name
     * @param ?string $replyToEmail
     * @param ?string $replyToName
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function messagingUpdateMailgunProvider(string $providerId, ?string $apiKey = null, ?string $domain = null, ?bool $enabled = null, ?string $fromEmail = null, ?string $fromName = null, ?bool $isEuRegion = null, ?string $name = null, ?string $replyToEmail = null, ?string $replyToName = null): array
    {
        $apiPath = str_replace(
            ['{providerId}'],
            [$providerId],
            '/v1/messaging/providers/mailgun/{providerId}'
        );

        $apiParams = [];
        $apiParams['providerId'] = $providerId;

        if (!is_null($apiKey)) {
            $apiParams['apiKey'] = $apiKey;
        }

        if (!is_null($domain)) {
            $apiParams['domain'] = $domain;
        }

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }

        if (!is_null($fromEmail)) {
            $apiParams['fromEmail'] = $fromEmail;
        }

        if (!is_null($fromName)) {
            $apiParams['fromName'] = $fromName;
        }

        if (!is_null($isEuRegion)) {
            $apiParams['isEuRegion'] = $isEuRegion;
        }

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

        if (!is_null($replyToEmail)) {
            $apiParams['replyToEmail'] = $replyToEmail;
        }

        if (!is_null($replyToName)) {
            $apiParams['replyToName'] = $replyToName;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Create a new MSG91 provider.
     *
     * @param string $name
     * @param string $providerId
     * @param ?string $authKey
     * @param ?bool $enabled
     * @param ?string $senderId
     * @param ?string $templateId
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function messagingCreateMsg91Provider(string $name, string $providerId, ?string $authKey = null, ?bool $enabled = null, ?string $senderId = null, ?string $templateId = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/messaging/providers/msg91'
        );

        $apiParams = [];
        $apiParams['name'] = $name;
        $apiParams['providerId'] = $providerId;

        if (!is_null($authKey)) {
            $apiParams['authKey'] = $authKey;
        }

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }

        if (!is_null($senderId)) {
            $apiParams['senderId'] = $senderId;
        }

        if (!is_null($templateId)) {
            $apiParams['templateId'] = $templateId;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Update a MSG91 provider by its unique ID.
     *
     * @param string $providerId
     * @param ?string $authKey
     * @param ?bool $enabled
     * @param ?string $name
     * @param ?string $senderId
     * @param ?string $templateId
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function messagingUpdateMsg91Provider(string $providerId, ?string $authKey = null, ?bool $enabled = null, ?string $name = null, ?string $senderId = null, ?string $templateId = null): array
    {
        $apiPath = str_replace(
            ['{providerId}'],
            [$providerId],
            '/v1/messaging/providers/msg91/{providerId}'
        );

        $apiParams = [];
        $apiParams['providerId'] = $providerId;

        if (!is_null($authKey)) {
            $apiParams['authKey'] = $authKey;
        }

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

        if (!is_null($senderId)) {
            $apiParams['senderId'] = $senderId;
        }

        if (!is_null($templateId)) {
            $apiParams['templateId'] = $templateId;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Create a new Resend provider.
     *
     * @param string $name
     * @param string $providerId
     * @param ?string $apiKey
     * @param ?bool $enabled
     * @param ?string $fromEmail
     * @param ?string $fromName
     * @param ?string $replyToEmail
     * @param ?string $replyToName
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function messagingCreateResendProvider(string $name, string $providerId, ?string $apiKey = null, ?bool $enabled = null, ?string $fromEmail = null, ?string $fromName = null, ?string $replyToEmail = null, ?string $replyToName = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/messaging/providers/resend'
        );

        $apiParams = [];
        $apiParams['name'] = $name;
        $apiParams['providerId'] = $providerId;

        if (!is_null($apiKey)) {
            $apiParams['apiKey'] = $apiKey;
        }

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }

        if (!is_null($fromEmail)) {
            $apiParams['fromEmail'] = $fromEmail;
        }

        if (!is_null($fromName)) {
            $apiParams['fromName'] = $fromName;
        }

        if (!is_null($replyToEmail)) {
            $apiParams['replyToEmail'] = $replyToEmail;
        }

        if (!is_null($replyToName)) {
            $apiParams['replyToName'] = $replyToName;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Update a Resend provider by its unique ID.
     *
     * @param string $providerId
     * @param ?string $apiKey
     * @param ?bool $enabled
     * @param ?string $fromEmail
     * @param ?string $fromName
     * @param ?string $name
     * @param ?string $replyToEmail
     * @param ?string $replyToName
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function messagingUpdateResendProvider(string $providerId, ?string $apiKey = null, ?bool $enabled = null, ?string $fromEmail = null, ?string $fromName = null, ?string $name = null, ?string $replyToEmail = null, ?string $replyToName = null): array
    {
        $apiPath = str_replace(
            ['{providerId}'],
            [$providerId],
            '/v1/messaging/providers/resend/{providerId}'
        );

        $apiParams = [];
        $apiParams['providerId'] = $providerId;

        if (!is_null($apiKey)) {
            $apiParams['apiKey'] = $apiKey;
        }

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }

        if (!is_null($fromEmail)) {
            $apiParams['fromEmail'] = $fromEmail;
        }

        if (!is_null($fromName)) {
            $apiParams['fromName'] = $fromName;
        }

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

        if (!is_null($replyToEmail)) {
            $apiParams['replyToEmail'] = $replyToEmail;
        }

        if (!is_null($replyToName)) {
            $apiParams['replyToName'] = $replyToName;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Create a new Sendgrid provider.
     *
     * @param string $name
     * @param string $providerId
     * @param ?string $apiKey
     * @param ?bool $enabled
     * @param ?string $fromEmail
     * @param ?string $fromName
     * @param ?string $replyToEmail
     * @param ?string $replyToName
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function messagingCreateSendgridProvider(string $name, string $providerId, ?string $apiKey = null, ?bool $enabled = null, ?string $fromEmail = null, ?string $fromName = null, ?string $replyToEmail = null, ?string $replyToName = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/messaging/providers/sendgrid'
        );

        $apiParams = [];
        $apiParams['name'] = $name;
        $apiParams['providerId'] = $providerId;

        if (!is_null($apiKey)) {
            $apiParams['apiKey'] = $apiKey;
        }

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }

        if (!is_null($fromEmail)) {
            $apiParams['fromEmail'] = $fromEmail;
        }

        if (!is_null($fromName)) {
            $apiParams['fromName'] = $fromName;
        }

        if (!is_null($replyToEmail)) {
            $apiParams['replyToEmail'] = $replyToEmail;
        }

        if (!is_null($replyToName)) {
            $apiParams['replyToName'] = $replyToName;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Update a Sendgrid provider by its unique ID.
     *
     * @param string $providerId
     * @param ?string $apiKey
     * @param ?bool $enabled
     * @param ?string $fromEmail
     * @param ?string $fromName
     * @param ?string $name
     * @param ?string $replyToEmail
     * @param ?string $replyToName
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function messagingUpdateSendgridProvider(string $providerId, ?string $apiKey = null, ?bool $enabled = null, ?string $fromEmail = null, ?string $fromName = null, ?string $name = null, ?string $replyToEmail = null, ?string $replyToName = null): array
    {
        $apiPath = str_replace(
            ['{providerId}'],
            [$providerId],
            '/v1/messaging/providers/sendgrid/{providerId}'
        );

        $apiParams = [];
        $apiParams['providerId'] = $providerId;

        if (!is_null($apiKey)) {
            $apiParams['apiKey'] = $apiKey;
        }

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }

        if (!is_null($fromEmail)) {
            $apiParams['fromEmail'] = $fromEmail;
        }

        if (!is_null($fromName)) {
            $apiParams['fromName'] = $fromName;
        }

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

        if (!is_null($replyToEmail)) {
            $apiParams['replyToEmail'] = $replyToEmail;
        }

        if (!is_null($replyToName)) {
            $apiParams['replyToName'] = $replyToName;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Create a new Telesign provider.
     *
     * @param string $name
     * @param string $providerId
     * @param ?string $apiKey
     * @param ?string $customerId
     * @param ?bool $enabled
     * @param ?string $from
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function messagingCreateTelesignProvider(string $name, string $providerId, ?string $apiKey = null, ?string $customerId = null, ?bool $enabled = null, ?string $from = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/messaging/providers/telesign'
        );

        $apiParams = [];
        $apiParams['name'] = $name;
        $apiParams['providerId'] = $providerId;

        if (!is_null($apiKey)) {
            $apiParams['apiKey'] = $apiKey;
        }

        if (!is_null($customerId)) {
            $apiParams['customerId'] = $customerId;
        }

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }

        if (!is_null($from)) {
            $apiParams['from'] = $from;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Update a Telesign provider by its unique ID.
     *
     * @param string $providerId
     * @param ?string $apiKey
     * @param ?string $customerId
     * @param ?bool $enabled
     * @param ?string $from
     * @param ?string $name
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function messagingUpdateTelesignProvider(string $providerId, ?string $apiKey = null, ?string $customerId = null, ?bool $enabled = null, ?string $from = null, ?string $name = null): array
    {
        $apiPath = str_replace(
            ['{providerId}'],
            [$providerId],
            '/v1/messaging/providers/telesign/{providerId}'
        );

        $apiParams = [];
        $apiParams['providerId'] = $providerId;

        if (!is_null($apiKey)) {
            $apiParams['apiKey'] = $apiKey;
        }

        if (!is_null($customerId)) {
            $apiParams['customerId'] = $customerId;
        }

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }

        if (!is_null($from)) {
            $apiParams['from'] = $from;
        }

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Create a new Textmagic provider.
     *
     * @param string $name
     * @param string $providerId
     * @param ?string $apiKey
     * @param ?bool $enabled
     * @param ?string $from
     * @param ?string $username
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function messagingCreateTextmagicProvider(string $name, string $providerId, ?string $apiKey = null, ?bool $enabled = null, ?string $from = null, ?string $username = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/messaging/providers/textmagic'
        );

        $apiParams = [];
        $apiParams['name'] = $name;
        $apiParams['providerId'] = $providerId;

        if (!is_null($apiKey)) {
            $apiParams['apiKey'] = $apiKey;
        }

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }

        if (!is_null($from)) {
            $apiParams['from'] = $from;
        }

        if (!is_null($username)) {
            $apiParams['username'] = $username;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Update a Textmagic provider by its unique ID.
     *
     * @param string $providerId
     * @param ?string $apiKey
     * @param ?bool $enabled
     * @param ?string $from
     * @param ?string $name
     * @param ?string $username
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function messagingUpdateTextmagicProvider(string $providerId, ?string $apiKey = null, ?bool $enabled = null, ?string $from = null, ?string $name = null, ?string $username = null): array
    {
        $apiPath = str_replace(
            ['{providerId}'],
            [$providerId],
            '/v1/messaging/providers/textmagic/{providerId}'
        );

        $apiParams = [];
        $apiParams['providerId'] = $providerId;

        if (!is_null($apiKey)) {
            $apiParams['apiKey'] = $apiKey;
        }

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }

        if (!is_null($from)) {
            $apiParams['from'] = $from;
        }

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

        if (!is_null($username)) {
            $apiParams['username'] = $username;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Create a new Twilio provider.
     *
     * @param string $name
     * @param string $providerId
     * @param ?string $accountSid
     * @param ?string $authToken
     * @param ?bool $enabled
     * @param ?string $from
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function messagingCreateTwilioProvider(string $name, string $providerId, ?string $accountSid = null, ?string $authToken = null, ?bool $enabled = null, ?string $from = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/messaging/providers/twilio'
        );

        $apiParams = [];
        $apiParams['name'] = $name;
        $apiParams['providerId'] = $providerId;

        if (!is_null($accountSid)) {
            $apiParams['accountSid'] = $accountSid;
        }

        if (!is_null($authToken)) {
            $apiParams['authToken'] = $authToken;
        }

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }

        if (!is_null($from)) {
            $apiParams['from'] = $from;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Update a Twilio provider by its unique ID.
     *
     * @param string $providerId
     * @param ?string $accountSid
     * @param ?string $authToken
     * @param ?bool $enabled
     * @param ?string $from
     * @param ?string $name
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function messagingUpdateTwilioProvider(string $providerId, ?string $accountSid = null, ?string $authToken = null, ?bool $enabled = null, ?string $from = null, ?string $name = null): array
    {
        $apiPath = str_replace(
            ['{providerId}'],
            [$providerId],
            '/v1/messaging/providers/twilio/{providerId}'
        );

        $apiParams = [];
        $apiParams['providerId'] = $providerId;

        if (!is_null($accountSid)) {
            $apiParams['accountSid'] = $accountSid;
        }

        if (!is_null($authToken)) {
            $apiParams['authToken'] = $authToken;
        }

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }

        if (!is_null($from)) {
            $apiParams['from'] = $from;
        }

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Create a new Vonage provider.
     *
     * @param string $name
     * @param string $providerId
     * @param ?string $apiKey
     * @param ?string $apiSecret
     * @param ?bool $enabled
     * @param ?string $from
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function messagingCreateVonageProvider(string $name, string $providerId, ?string $apiKey = null, ?string $apiSecret = null, ?bool $enabled = null, ?string $from = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/messaging/providers/vonage'
        );

        $apiParams = [];
        $apiParams['name'] = $name;
        $apiParams['providerId'] = $providerId;

        if (!is_null($apiKey)) {
            $apiParams['apiKey'] = $apiKey;
        }

        if (!is_null($apiSecret)) {
            $apiParams['apiSecret'] = $apiSecret;
        }

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }

        if (!is_null($from)) {
            $apiParams['from'] = $from;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Update a Vonage provider by its unique ID.
     *
     * @param string $providerId
     * @param ?string $apiKey
     * @param ?string $apiSecret
     * @param ?bool $enabled
     * @param ?string $from
     * @param ?string $name
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function messagingUpdateVonageProvider(string $providerId, ?string $apiKey = null, ?string $apiSecret = null, ?bool $enabled = null, ?string $from = null, ?string $name = null): array
    {
        $apiPath = str_replace(
            ['{providerId}'],
            [$providerId],
            '/v1/messaging/providers/vonage/{providerId}'
        );

        $apiParams = [];
        $apiParams['providerId'] = $providerId;

        if (!is_null($apiKey)) {
            $apiParams['apiKey'] = $apiKey;
        }

        if (!is_null($apiSecret)) {
            $apiParams['apiSecret'] = $apiSecret;
        }

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }

        if (!is_null($from)) {
            $apiParams['from'] = $from;
        }

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Delete a provider by its unique ID.
     *
     * @param string $providerId
     * @throws RevenexxAPIRevenexxException
     * @return string
     */
    public function messagingDeleteProvider(string $providerId): string
    {
        $apiPath = str_replace(
            ['{providerId}'],
            [$providerId],
            '/v1/messaging/providers/{providerId}'
        );

        $apiParams = [];
        $apiParams['providerId'] = $providerId;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Get a provider by its unique ID.
     * 
     *
     * @param string $providerId
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function messagingGetProvider(string $providerId): array
    {
        $apiPath = str_replace(
            ['{providerId}'],
            [$providerId],
            '/v1/messaging/providers/{providerId}'
        );

        $apiParams = [];
        $apiParams['providerId'] = $providerId;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Get the provider activity logs listed by its unique ID.
     *
     * @param string $providerId
     * @param ?array $queries
     * @param ?bool $total
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function messagingListProviderLogs(string $providerId, ?array $queries = null, ?bool $total = null): array
    {
        $apiPath = str_replace(
            ['{providerId}'],
            [$providerId],
            '/v1/messaging/providers/{providerId}/logs'
        );

        $apiParams = [];
        $apiParams['providerId'] = $providerId;

        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
        }

        if (!is_null($total)) {
            $apiParams['total'] = $total;
        }

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Get the subscriber activity logs listed by its unique ID.
     *
     * @param string $subscriberId
     * @param ?array $queries
     * @param ?bool $total
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function messagingListSubscriberLogs(string $subscriberId, ?array $queries = null, ?bool $total = null): array
    {
        $apiPath = str_replace(
            ['{subscriberId}'],
            [$subscriberId],
            '/v1/messaging/subscribers/{subscriberId}/logs'
        );

        $apiParams = [];
        $apiParams['subscriberId'] = $subscriberId;

        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
        }

        if (!is_null($total)) {
            $apiParams['total'] = $total;
        }

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Get a list of all topics from the current Revenexx project.
     *
     * @param ?array $queries
     * @param ?string $search
     * @param ?bool $total
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function messagingListTopics(?array $queries = null, ?string $search = null, ?bool $total = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/messaging/topics'
        );

        $apiParams = [];

        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
        }

        if (!is_null($search)) {
            $apiParams['search'] = $search;
        }

        if (!is_null($total)) {
            $apiParams['total'] = $total;
        }

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Create a new topic.
     *
     * @param string $name
     * @param string $topicId
     * @param ?array $subscribe
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function messagingCreateTopic(string $name, string $topicId, ?array $subscribe = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/messaging/topics'
        );

        $apiParams = [];
        $apiParams['name'] = $name;
        $apiParams['topicId'] = $topicId;

        if (!is_null($subscribe)) {
            $apiParams['subscribe'] = $subscribe;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Delete a topic by its unique ID.
     *
     * @param string $topicId
     * @throws RevenexxAPIRevenexxException
     * @return string
     */
    public function messagingDeleteTopic(string $topicId): string
    {
        $apiPath = str_replace(
            ['{topicId}'],
            [$topicId],
            '/v1/messaging/topics/{topicId}'
        );

        $apiParams = [];
        $apiParams['topicId'] = $topicId;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Get a topic by its unique ID.
     * 
     *
     * @param string $topicId
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function messagingGetTopic(string $topicId): array
    {
        $apiPath = str_replace(
            ['{topicId}'],
            [$topicId],
            '/v1/messaging/topics/{topicId}'
        );

        $apiParams = [];
        $apiParams['topicId'] = $topicId;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Update a topic by its unique ID.
     * 
     *
     * @param string $topicId
     * @param ?string $name
     * @param ?array $subscribe
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function messagingUpdateTopic(string $topicId, ?string $name = null, ?array $subscribe = null): array
    {
        $apiPath = str_replace(
            ['{topicId}'],
            [$topicId],
            '/v1/messaging/topics/{topicId}'
        );

        $apiParams = [];
        $apiParams['topicId'] = $topicId;

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

        if (!is_null($subscribe)) {
            $apiParams['subscribe'] = $subscribe;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Get the topic activity logs listed by its unique ID.
     *
     * @param string $topicId
     * @param ?array $queries
     * @param ?bool $total
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function messagingListTopicLogs(string $topicId, ?array $queries = null, ?bool $total = null): array
    {
        $apiPath = str_replace(
            ['{topicId}'],
            [$topicId],
            '/v1/messaging/topics/{topicId}/logs'
        );

        $apiParams = [];
        $apiParams['topicId'] = $topicId;

        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
        }

        if (!is_null($total)) {
            $apiParams['total'] = $total;
        }

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Get a list of all subscribers from the current Revenexx project.
     *
     * @param string $topicId
     * @param ?array $queries
     * @param ?string $search
     * @param ?bool $total
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function messagingListSubscribers(string $topicId, ?array $queries = null, ?string $search = null, ?bool $total = null): array
    {
        $apiPath = str_replace(
            ['{topicId}'],
            [$topicId],
            '/v1/messaging/topics/{topicId}/subscribers'
        );

        $apiParams = [];
        $apiParams['topicId'] = $topicId;

        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
        }

        if (!is_null($search)) {
            $apiParams['search'] = $search;
        }

        if (!is_null($total)) {
            $apiParams['total'] = $total;
        }

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Create a new subscriber.
     *
     * @param string $topicId
     * @param string $subscriberId
     * @param string $targetId
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function messagingCreateSubscriber(string $topicId, string $subscriberId, string $targetId): array
    {
        $apiPath = str_replace(
            ['{topicId}'],
            [$topicId],
            '/v1/messaging/topics/{topicId}/subscribers'
        );

        $apiParams = [];
        $apiParams['topicId'] = $topicId;
        $apiParams['subscriberId'] = $subscriberId;
        $apiParams['targetId'] = $targetId;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Delete a subscriber by its unique ID.
     *
     * @param string $topicId
     * @param string $subscriberId
     * @throws RevenexxAPIRevenexxException
     * @return string
     */
    public function messagingDeleteSubscriber(string $topicId, string $subscriberId): string
    {
        $apiPath = str_replace(
            ['{topicId}', '{subscriberId}'],
            [$topicId, $subscriberId],
            '/v1/messaging/topics/{topicId}/subscribers/{subscriberId}'
        );

        $apiParams = [];
        $apiParams['topicId'] = $topicId;
        $apiParams['subscriberId'] = $subscriberId;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Get a subscriber by its unique ID.
     * 
     *
     * @param string $topicId
     * @param string $subscriberId
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function messagingGetSubscriber(string $topicId, string $subscriberId): array
    {
        $apiPath = str_replace(
            ['{topicId}', '{subscriberId}'],
            [$topicId, $subscriberId],
            '/v1/messaging/topics/{topicId}/subscribers/{subscriberId}'
        );

        $apiParams = [];
        $apiParams['topicId'] = $topicId;
        $apiParams['subscriberId'] = $subscriberId;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }
}