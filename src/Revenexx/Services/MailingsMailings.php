<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;
use Revenexx\Enums\Trashed;
use Revenexx\Enums\Starter;
use Revenexx\Enums\TimezoneMode;
use Revenexx\Enums\Device;

class MailingsMailings extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * Every mailing of this tenant. Filter
     * `?folder=drafts|scheduled|sent|archived` for the four views,
     * `?campaign_ref=` for the mailings a campaign claimed, `?state=` for one
     * state.
     *
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @param ?Trashed $trashed
     * @param ?string $id
     * @param ?string $state
     * @param ?string $folder
     * @param ?string $campaignRef
     * @param ?string $audienceId
     * @param ?string $subscriptionType
     * @param ?string $templateKey
     * @param ?string $starter
     * @param ?string $timezoneMode
     * @param ?string $duplicatedFromId
     * @throws RevenexxException
     * @return array
     */
    public function mailingsMailingsList(?int $limit = null, ?int $offset = null, ?string $order = null, ?Trashed $trashed = null, ?string $id = null, ?string $state = null, ?string $folder = null, ?string $campaignRef = null, ?string $audienceId = null, ?string $subscriptionType = null, ?string $templateKey = null, ?string $starter = null, ?string $timezoneMode = null, ?string $duplicatedFromId = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/mailings/mailings'
        );

        $apiParams = [];

        if (!is_null($limit)) {
            $apiParams['limit'] = $limit;
        }

        if (!is_null($offset)) {
            $apiParams['offset'] = $offset;
        }

        if (!is_null($order)) {
            $apiParams['order'] = $order;
        }

        if (!is_null($trashed)) {
            $apiParams['trashed'] = $trashed;
        }

        if (!is_null($id)) {
            $apiParams['id'] = $id;
        }

        if (!is_null($state)) {
            $apiParams['state'] = $state;
        }

        if (!is_null($folder)) {
            $apiParams['folder'] = $folder;
        }

        if (!is_null($campaignRef)) {
            $apiParams['campaign_ref'] = $campaignRef;
        }

        if (!is_null($audienceId)) {
            $apiParams['audience_id'] = $audienceId;
        }

        if (!is_null($subscriptionType)) {
            $apiParams['subscription_type'] = $subscriptionType;
        }

        if (!is_null($templateKey)) {
            $apiParams['template_key'] = $templateKey;
        }

        if (!is_null($starter)) {
            $apiParams['starter'] = $starter;
        }

        if (!is_null($timezoneMode)) {
            $apiParams['timezone_mode'] = $timezoneMode;
        }

        if (!is_null($duplicatedFromId)) {
            $apiParams['duplicated_from_id'] = $duplicatedFromId;
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
     * A new draft. The sender and its name default to the market settings when
     * not given.
     *
     * @param string $name
     * @param ?string $audienceId
     * @param ?string $campaignRef
     * @param ?string $currency
     * @param ?array $excludeAudienceIds
     * @param ?bool $graymail
     * @param ?int $graymailSends
     * @param ?mixed $metadata
     * @param ?string $previewText
     * @param ?string $replyTo
     * @param ?string $sendAt
     * @param ?string $sender
     * @param ?string $senderName
     * @param ?Starter $starter
     * @param ?string $subject
     * @param ?string $subscriptionType
     * @param ?string $templateKey
     * @param ?TimezoneMode $timezoneMode
     * @param ?string $voucherBatchId
     * @throws RevenexxException
     * @return array
     */
    public function mailingsMailingsCreate(string $name, ?string $audienceId = null, ?string $campaignRef = null, ?string $currency = null, ?array $excludeAudienceIds = null, ?bool $graymail = null, ?int $graymailSends = null, mixed $metadata = null, ?string $previewText = null, ?string $replyTo = null, ?string $sendAt = null, ?string $sender = null, ?string $senderName = null, ?Starter $starter = null, ?string $subject = null, ?string $subscriptionType = null, ?string $templateKey = null, ?TimezoneMode $timezoneMode = null, ?string $voucherBatchId = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/mailings/mailings'
        );

        $apiParams = [];
        $apiParams['name'] = $name;
        $apiParams['audience_id'] = $audienceId;
        $apiParams['campaign_ref'] = $campaignRef;

        if (!is_null($currency)) {
            $apiParams['currency'] = $currency;
        }
        $apiParams['exclude_audience_ids'] = $excludeAudienceIds;

        if (!is_null($graymail)) {
            $apiParams['graymail'] = $graymail;
        }
        $apiParams['graymail_sends'] = $graymailSends;

        if (!is_null($metadata)) {
            $apiParams['metadata'] = $metadata;
        }
        $apiParams['preview_text'] = $previewText;
        $apiParams['reply_to'] = $replyTo;
        $apiParams['send_at'] = $sendAt;
        $apiParams['sender'] = $sender;
        $apiParams['sender_name'] = $senderName;

        if (!is_null($starter)) {
            $apiParams['starter'] = $starter;
        }
        $apiParams['subject'] = $subject;
        $apiParams['subscription_type'] = $subscriptionType;
        $apiParams['template_key'] = $templateKey;

        if (!is_null($timezoneMode)) {
            $apiParams['timezone_mode'] = $timezoneMode;
        }
        $apiParams['voucher_batch_id'] = $voucherBatchId;

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
     * Every mailing in the trash is deleted for good on its own terms. One that
     * something still blocks stays in the trash and is named with its reason, so
     * a partial success says exactly what remained. Not for a storefront contact.
     *
     * @throws RevenexxException
     * @return array
     */
    public function mailingsMailingsEmptyTrash(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/mailings/mailings/trash/empty'
        );

        $apiParams = [];

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * What the nightly purge does, callable by hand: every mailing in the trash
     * for longer than the tenant trash retention (90 days unless the tenant set
     * another) is deleted for good through the same rules as a second delete. A
     * blocked one stays and carries its reason. When the retention cannot be
     * read, nothing is deleted. Also the cron schedule.
     *
     * @throws RevenexxException
     * @return array
     */
    public function mailingsMailingsPurge(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/mailings/mailings/trash/purge'
        );

        $apiParams = [];

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * The first DELETE moves the mailing into the trash: it stays, with
     * everything hanging off it, and counts nowhere until it is restored. Only a
     * mailing nobody received goes into the trash; a scheduled, sending or sent
     * one is refused (`trash_blocked`, blocker `mailing_sent`) — cancel or
     * archive it instead. A DELETE on a mailing already in the trash deletes it
     * for good — refused while something still needs it, and not for a
     * storefront contact.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function mailingsMailingsDelete(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/mailings/mailings/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function mailingsMailingsGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/mailings/mailings/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * A draft (or a cancelled or failed mailing nobody received) changes freely.
     * In every other state only `name`, `campaign_ref` and `metadata` change —
     * the campaigns app claims a mailing in any state.
     *
     * @param string $id
     * @param ?string $audienceId
     * @param ?string $campaignRef
     * @param ?string $currency
     * @param ?array $excludeAudienceIds
     * @param ?bool $graymail
     * @param ?int $graymailSends
     * @param ?mixed $metadata
     * @param ?string $name
     * @param ?string $previewText
     * @param ?string $replyTo
     * @param ?string $sendAt
     * @param ?string $sender
     * @param ?string $senderName
     * @param ?Starter $starter
     * @param ?string $subject
     * @param ?string $subscriptionType
     * @param ?string $templateKey
     * @param ?TimezoneMode $timezoneMode
     * @param ?string $voucherBatchId
     * @throws RevenexxException
     * @return array
     */
    public function mailingsMailingsUpdate(string $id, ?string $audienceId = null, ?string $campaignRef = null, ?string $currency = null, ?array $excludeAudienceIds = null, ?bool $graymail = null, ?int $graymailSends = null, mixed $metadata = null, ?string $name = null, ?string $previewText = null, ?string $replyTo = null, ?string $sendAt = null, ?string $sender = null, ?string $senderName = null, ?Starter $starter = null, ?string $subject = null, ?string $subscriptionType = null, ?string $templateKey = null, ?TimezoneMode $timezoneMode = null, ?string $voucherBatchId = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/mailings/mailings/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams['audience_id'] = $audienceId;
        $apiParams['campaign_ref'] = $campaignRef;

        if (!is_null($currency)) {
            $apiParams['currency'] = $currency;
        }
        $apiParams['exclude_audience_ids'] = $excludeAudienceIds;

        if (!is_null($graymail)) {
            $apiParams['graymail'] = $graymail;
        }
        $apiParams['graymail_sends'] = $graymailSends;

        if (!is_null($metadata)) {
            $apiParams['metadata'] = $metadata;
        }

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }
        $apiParams['preview_text'] = $previewText;
        $apiParams['reply_to'] = $replyTo;
        $apiParams['send_at'] = $sendAt;
        $apiParams['sender'] = $sender;
        $apiParams['sender_name'] = $senderName;

        if (!is_null($starter)) {
            $apiParams['starter'] = $starter;
        }
        $apiParams['subject'] = $subject;
        $apiParams['subscription_type'] = $subscriptionType;
        $apiParams['template_key'] = $templateKey;

        if (!is_null($timezoneMode)) {
            $apiParams['timezone_mode'] = $timezoneMode;
        }
        $apiParams['voucher_batch_id'] = $voucherBatchId;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PUT,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * @param string $id
     * @param array $data
     * @throws RevenexxException
     * @return array
     */
    public function mailingsMailingsArchive(string $id, array $data): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/mailings/mailings/{id}/archive'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams = \array_merge($apiParams, $data);

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
     * Nothing more is handed to the sequencer. Recipients already handed over
     * keep their mail.
     *
     * @param string $id
     * @param array $data
     * @throws RevenexxException
     * @return array
     */
    public function mailingsMailingsCancel(string $id, array $data): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/mailings/mailings/{id}/cancel'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams = \array_merge($apiParams, $data);

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
     * Every item with ok, severity (error or warning), state (ok, warning or
     * error), its label and the problem as a sentence in the caller language
     * (Accept-Language; German unless English is asked for), and where to put it
     * right (action: route and label); errors first, then warnings: subject,
     * preview text, sender, audience, subscription type, marketing template,
     * footer address, unsubscribe link, links, image descriptions, voucher batch,
     * send time. `ready` is true when no error stands.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function mailingsMailingsChecklist(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/mailings/mailings/{id}/checklist'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Any mailing, sent ones included. The copy keeps content, audience and
     * settings, and drops the send time and the campaign.
     *
     * @param string $id
     * @param array $data
     * @throws RevenexxException
     * @return array
     */
    public function mailingsMailingsDuplicate(string $id, array $data): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/mailings/mailings/{id}/duplicate'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams = \array_merge($apiParams, $data);

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
     * Products priced for the market named, the footer of that market, a sample
     * voucher code. No code is drawn and nothing is sent.
     *
     * @param string $id
     * @param ?string $contactId
     * @param ?Device $device
     * @param ?string $email
     * @param ?string $firstName
     * @param ?string $lastName
     * @param ?string $locale
     * @param ?string $market
     * @throws RevenexxException
     * @return array
     */
    public function mailingsMailingsPreview(string $id, ?string $contactId = null, ?Device $device = null, ?string $email = null, ?string $firstName = null, ?string $lastName = null, ?string $locale = null, ?string $market = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/mailings/mailings/{id}/preview'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($contactId)) {
            $apiParams['contact_id'] = $contactId;
        }

        if (!is_null($device)) {
            $apiParams['device'] = $device;
        }

        if (!is_null($email)) {
            $apiParams['email'] = $email;
        }

        if (!is_null($firstName)) {
            $apiParams['first_name'] = $firstName;
        }

        if (!is_null($lastName)) {
            $apiParams['last_name'] = $lastName;
        }

        if (!is_null($locale)) {
            $apiParams['locale'] = $locale;
        }

        if (!is_null($market)) {
            $apiParams['market'] = $market;
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
     * The audience member and eligible counts, the excluded audiences, and at
     * most how many addresses graymail protection would hold back. `bars` carries
     * the same counts as rows of label and value, worded in the caller language.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function mailingsMailingsReach(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/mailings/mailings/{id}/reach'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Clears the trash marks on the mailing. Its parts were never touched, so
     * they come back with it, in the state it was in. The same right as deleting.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function mailingsMailingsRestore(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/mailings/mailings/{id}/restore'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Runs the checklist and refuses while an error stands. `send_at` empty or
     * `now` sends at once (the first chunk is prepared in this call); a time
     * sends then, in the shop or recipient time zone.
     *
     * @param string $id
     * @param ?string $sendAt
     * @param ?bool $start
     * @param ?TimezoneMode $timezoneMode
     * @throws RevenexxException
     * @return array
     */
    public function mailingsMailingsSchedule(string $id, ?string $sendAt = null, ?bool $start = null, ?TimezoneMode $timezoneMode = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/mailings/mailings/{id}/schedule'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams['send_at'] = $sendAt;

        if (!is_null($start)) {
            $apiParams['start'] = $start;
        }

        if (!is_null($timezoneMode)) {
            $apiParams['timezone_mode'] = $timezoneMode;
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
     * At most ten addresses, from the request or the test recipients setting.
     * Marked as a test, with a sample voucher code; counts in no figure.
     *
     * @param string $id
     * @param ?string $locale
     * @param ?string $market
     * @param ?array $recipients
     * @throws RevenexxException
     * @return array
     */
    public function mailingsMailingsTest(string $id, ?string $locale = null, ?string $market = null, ?array $recipients = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/mailings/mailings/{id}/test'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($locale)) {
            $apiParams['locale'] = $locale;
        }

        if (!is_null($market)) {
            $apiParams['market'] = $market;
        }

        if (!is_null($recipients)) {
            $apiParams['recipients'] = $recipients;
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
     * @param string $id
     * @param array $data
     * @throws RevenexxException
     * @return array
     */
    public function mailingsMailingsUnarchive(string $id, array $data): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/mailings/mailings/{id}/unarchive'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams = \array_merge($apiParams, $data);

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }
}