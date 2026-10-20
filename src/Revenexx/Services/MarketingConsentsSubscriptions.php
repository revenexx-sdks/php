<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;
use Revenexx\Enums\Channel;
use Revenexx\Enums\MarketingConsentsSubscriptionsListState;
use Revenexx\Enums\MarketingConsentsConsentEventsListLegalBasis;
use Revenexx\Enums\MarketingConsentsSubscriptionsListSource;
use Revenexx\Enums\MarketingConsentsSubscriptionsRequestSource;

class MarketingConsentsSubscriptions extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * The double opt-in click, called by the storefront's confirmation page.
     * Turns the pending subscription confirmed on the consent_doi basis and
     * writes the proof with the person's IP and browser. A second click answers
     * the same without writing anything. An expired link lapses the sign-up.
     *
     * @param string $token
     * @param string $purchaseRequestId
     * @param ?array $allocations
     * @param ?string $currency
     * @param ?string $note
     * @param ?string $orderId
     * @throws RevenexxException
     * @return array
     */
    public function marketingConsentsSubscriptionsConfirm(string $token, string $purchaseRequestId, ?array $allocations = null, ?string $currency = null, ?string $note = null, ?string $orderId = null): array
    {
        $apiPath = str_replace(
            ['{token}'],
            [$token],
            '/v1/marketing-consents/confirm/{token}'
        );

        $apiParams = [];
        $apiParams['token'] = $token;
        $apiParams['purchase_request_id'] = $purchaseRequestId;

        if (!is_null($allocations)) {
            $apiParams['allocations'] = $allocations;
        }
        $apiParams['currency'] = $currency;
        $apiParams['note'] = $note;
        $apiParams['order_id'] = $orderId;

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
     * The one call `mailings` and `journeys` make before every batch. Per
     * recipient: allowed or not, with the legal basis or the reason. Only a
     * confirmed subscription allows; `contract` never does; `existing_customer`
     * only on a type that allows it; an erased address answers `erased`. At most
     * 500 recipients per call. The sequencer's suppression stays the last refusal
     * at send time.
     *
     * @param array $recipients
     * @param string $subscriptionType
     * @param ?Channel $channel
     * @throws RevenexxException
     * @return array
     */
    public function marketingConsentsEligibilityCheck(array $recipients, string $subscriptionType, ?Channel $channel = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/marketing-consents/eligibility'
        );

        $apiParams = [];
        $apiParams['recipients'] = $recipients;
        $apiParams['subscription_type'] = $subscriptionType;

        if (!is_null($channel)) {
            $apiParams['channel'] = $channel;
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
     * One stable personal link per address and channel, for the mandatory footer
     * of every marketing message. The same address gets the same token every
     * time. At most 500 per call.
     *
     * @param array $recipients
     * @param ?Channel $channel
     * @throws RevenexxException
     * @return array
     */
    public function marketingConsentsPreferencesLinks(array $recipients, ?Channel $channel = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/marketing-consents/preferences/links'
        );

        $apiParams = [];
        $apiParams['recipients'] = $recipients;

        if (!is_null($channel)) {
            $apiParams['channel'] = $channel;
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
     * Behind a personal link: every active type the channel offers, where the
     * address stands on each, and the wording to show. The storefront renders the
     * page.
     *
     * @param string $token
     * @param ?string $locale
     * @throws RevenexxException
     * @return array
     */
    public function marketingConsentsPreferencesGet(string $token, ?string $locale = null): array
    {
        $apiPath = str_replace(
            ['{token}'],
            [$token],
            '/v1/marketing-consents/preferences/{token}'
        );

        $apiParams = [];
        $apiParams['token'] = $token;

        if (!is_null($locale)) {
            $apiParams['locale'] = $locale;
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
     * Per type: `subscribed: false` withdraws at once (source preference_centre,
     * pushed to the sequencer); `subscribed: true` signs up — with a
     * confirmation first when the type requires double opt-in. `unsubscribe_all:
     * true` withdraws every type of the channel. Answers the page as it now
     * stands, with what changed.
     *
     * @param string $token
     * @param ?array $choices
     * @param ?string $ip
     * @param ?string $locale
     * @param ?bool $unsubscribeAll
     * @param ?string $userAgent
     * @throws RevenexxException
     * @return array
     */
    public function marketingConsentsPreferencesUpdate(string $token, ?array $choices = null, ?string $ip = null, ?string $locale = null, ?bool $unsubscribeAll = null, ?string $userAgent = null): array
    {
        $apiPath = str_replace(
            ['{token}'],
            [$token],
            '/v1/marketing-consents/preferences/{token}'
        );

        $apiParams = [];
        $apiParams['token'] = $token;

        if (!is_null($choices)) {
            $apiParams['choices'] = $choices;
        }

        if (!is_null($ip)) {
            $apiParams['ip'] = $ip;
        }

        if (!is_null($locale)) {
            $apiParams['locale'] = $locale;
        }

        if (!is_null($unsubscribeAll)) {
            $apiParams['unsubscribe_all'] = $unsubscribeAll;
        }

        if (!is_null($userAgent)) {
            $apiParams['user_agent'] = $userAgent;
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
     * Every subscription. Filter by `subscription_type_id`, `state`, `channel`,
     * `contact_id`, `address`.
     *
     * @param ?string $id
     * @param ?string $contactId
     * @param ?Channel $channel
     * @param ?string $address
     * @param ?string $addressHash
     * @param ?string $subscriptionTypeId
     * @param ?MarketingConsentsSubscriptionsListState $state
     * @param ?MarketingConsentsConsentEventsListLegalBasis $legalBasis
     * @param ?string $consentTextId
     * @param ?string $locale
     * @param ?string $market
     * @param ?string $campaignRef
     * @param ?MarketingConsentsSubscriptionsListSource $source
     * @param ?string $sourceRef
     * @param ?string $requestedAt
     * @param ?string $confirmationSentAt
     * @param ?string $confirmedAt
     * @param ?string $withdrawnAt
     * @param ?string $lapseAt
     * @param ?string $erasedAt
     * @param ?string $suppressionWrittenAt
     * @param ?string $suppressionRef
     * @param ?string $externalId
     * @param ?string $sourceSyncedAt
     * @param ?string $createdAt
     * @param ?string $updatedAt
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @throws RevenexxException
     * @return array
     */
    public function marketingConsentsSubscriptionsList(?string $id = null, ?string $contactId = null, ?Channel $channel = null, ?string $address = null, ?string $addressHash = null, ?string $subscriptionTypeId = null, ?MarketingConsentsSubscriptionsListState $state = null, ?MarketingConsentsConsentEventsListLegalBasis $legalBasis = null, ?string $consentTextId = null, ?string $locale = null, ?string $market = null, ?string $campaignRef = null, ?MarketingConsentsSubscriptionsListSource $source = null, ?string $sourceRef = null, ?string $requestedAt = null, ?string $confirmationSentAt = null, ?string $confirmedAt = null, ?string $withdrawnAt = null, ?string $lapseAt = null, ?string $erasedAt = null, ?string $suppressionWrittenAt = null, ?string $suppressionRef = null, ?string $externalId = null, ?string $sourceSyncedAt = null, ?string $createdAt = null, ?string $updatedAt = null, ?int $limit = null, ?int $offset = null, ?string $order = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/marketing-consents/subscriptions'
        );

        $apiParams = [];

        if (!is_null($id)) {
            $apiParams['id'] = $id;
        }

        if (!is_null($contactId)) {
            $apiParams['contact_id'] = $contactId;
        }

        if (!is_null($channel)) {
            $apiParams['channel'] = $channel;
        }

        if (!is_null($address)) {
            $apiParams['address'] = $address;
        }

        if (!is_null($addressHash)) {
            $apiParams['address_hash'] = $addressHash;
        }

        if (!is_null($subscriptionTypeId)) {
            $apiParams['subscription_type_id'] = $subscriptionTypeId;
        }

        if (!is_null($state)) {
            $apiParams['state'] = $state;
        }

        if (!is_null($legalBasis)) {
            $apiParams['legal_basis'] = $legalBasis;
        }

        if (!is_null($consentTextId)) {
            $apiParams['consent_text_id'] = $consentTextId;
        }

        if (!is_null($locale)) {
            $apiParams['locale'] = $locale;
        }

        if (!is_null($market)) {
            $apiParams['market'] = $market;
        }

        if (!is_null($campaignRef)) {
            $apiParams['campaign_ref'] = $campaignRef;
        }

        if (!is_null($source)) {
            $apiParams['source'] = $source;
        }

        if (!is_null($sourceRef)) {
            $apiParams['source_ref'] = $sourceRef;
        }

        if (!is_null($requestedAt)) {
            $apiParams['requested_at'] = $requestedAt;
        }

        if (!is_null($confirmationSentAt)) {
            $apiParams['confirmation_sent_at'] = $confirmationSentAt;
        }

        if (!is_null($confirmedAt)) {
            $apiParams['confirmed_at'] = $confirmedAt;
        }

        if (!is_null($withdrawnAt)) {
            $apiParams['withdrawn_at'] = $withdrawnAt;
        }

        if (!is_null($lapseAt)) {
            $apiParams['lapse_at'] = $lapseAt;
        }

        if (!is_null($erasedAt)) {
            $apiParams['erased_at'] = $erasedAt;
        }

        if (!is_null($suppressionWrittenAt)) {
            $apiParams['suppression_written_at'] = $suppressionWrittenAt;
        }

        if (!is_null($suppressionRef)) {
            $apiParams['suppression_ref'] = $suppressionRef;
        }

        if (!is_null($externalId)) {
            $apiParams['external_id'] = $externalId;
        }

        if (!is_null($sourceSyncedAt)) {
            $apiParams['source_synced_at'] = $sourceSyncedAt;
        }

        if (!is_null($createdAt)) {
            $apiParams['created_at'] = $createdAt;
        }

        if (!is_null($updatedAt)) {
            $apiParams['updated_at'] = $updatedAt;
        }

        if (!is_null($limit)) {
            $apiParams['limit'] = $limit;
        }

        if (!is_null($offset)) {
            $apiParams['offset'] = $offset;
        }

        if (!is_null($order)) {
            $apiParams['order'] = $order;
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
     * Used by the forms listener and the storefront. Opens (or reopens) a pending
     * subscription, creates the `customers` contact when the address has none
     * (stage `subscriber`), writes the `requested` proof and asks the sequencer
     * for the advertising-free confirmation. The token is in that message only
     * — never in this answer. A confirmed address is answered as it is; a
     * pending one asked again within ten minutes gets no second mail. A type
     * without double opt-in is confirmed at once on the single-opt-in basis.
     *
     * @param string $subscriptionType
     * @param ?string $address
     * @param ?string $campaignRef
     * @param ?Channel $channel
     * @param ?string $consentTextId
     * @param ?string $contactId
     * @param ?string $email
     * @param ?string $firstName
     * @param ?string $ip
     * @param ?string $lastName
     * @param ?string $locale
     * @param ?string $pageUrl
     * @param ?string $phone
     * @param ?MarketingConsentsSubscriptionsRequestSource $source
     * @param ?string $sourceRef
     * @param ?string $userAgent
     * @throws RevenexxException
     * @return array
     */
    public function marketingConsentsSubscriptionsRequest(string $subscriptionType, ?string $address = null, ?string $campaignRef = null, ?Channel $channel = null, ?string $consentTextId = null, ?string $contactId = null, ?string $email = null, ?string $firstName = null, ?string $ip = null, ?string $lastName = null, ?string $locale = null, ?string $pageUrl = null, ?string $phone = null, ?MarketingConsentsSubscriptionsRequestSource $source = null, ?string $sourceRef = null, ?string $userAgent = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/marketing-consents/subscriptions/request'
        );

        $apiParams = [];
        $apiParams['subscription_type'] = $subscriptionType;

        if (!is_null($address)) {
            $apiParams['address'] = $address;
        }

        if (!is_null($campaignRef)) {
            $apiParams['campaign_ref'] = $campaignRef;
        }

        if (!is_null($channel)) {
            $apiParams['channel'] = $channel;
        }

        if (!is_null($consentTextId)) {
            $apiParams['consent_text_id'] = $consentTextId;
        }

        if (!is_null($contactId)) {
            $apiParams['contact_id'] = $contactId;
        }

        if (!is_null($email)) {
            $apiParams['email'] = $email;
        }

        if (!is_null($firstName)) {
            $apiParams['first_name'] = $firstName;
        }

        if (!is_null($ip)) {
            $apiParams['ip'] = $ip;
        }

        if (!is_null($lastName)) {
            $apiParams['last_name'] = $lastName;
        }

        if (!is_null($locale)) {
            $apiParams['locale'] = $locale;
        }

        if (!is_null($pageUrl)) {
            $apiParams['page_url'] = $pageUrl;
        }

        if (!is_null($phone)) {
            $apiParams['phone'] = $phone;
        }

        if (!is_null($source)) {
            $apiParams['source'] = $source;
        }

        if (!is_null($sourceRef)) {
            $apiParams['source_ref'] = $sourceRef;
        }

        if (!is_null($userAgent)) {
            $apiParams['user_agent'] = $userAgent;
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
     * One subscription by id.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function marketingConsentsSubscriptionsGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/marketing-consents/subscriptions/{id}'
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
     * Ends the subscription at once, writes the `withdrawn` proof (source admin)
     * and pushes the address into the sequencer's suppression for the type.
     * Withdrawing twice changes nothing.
     *
     * @param string $id
     * @param string $purchaseRequestId
     * @param ?array $allocations
     * @param ?string $currency
     * @param ?string $note
     * @throws RevenexxException
     * @return array
     */
    public function marketingConsentsSubscriptionsWithdraw(string $id, string $purchaseRequestId, ?array $allocations = null, ?string $currency = null, ?string $note = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/marketing-consents/subscriptions/{id}/withdraw'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams['purchase_request_id'] = $purchaseRequestId;

        if (!is_null($allocations)) {
            $apiParams['allocations'] = $allocations;
        }
        $apiParams['currency'] = $currency;
        $apiParams['note'] = $note;

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