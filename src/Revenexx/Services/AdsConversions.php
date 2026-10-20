<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;

class AdsConversions extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * The workflow reads `?state=ready`; filter also `?order_id=`, `?rule_id=`,
     * `?platform=`.
     *
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @param ?string $id
     * @param ?string $ruleId
     * @param ?string $adAccountId
     * @param ?string $eventKey
     * @param ?string $event
     * @param ?string $platform
     * @param ?string $sourceRef
     * @param ?string $orderId
     * @param ?string $clickId
     * @param ?string $clickIdKind
     * @param ?string $hashedEmail
     * @param ?string $currency
     * @param ?string $state
     * @param ?string $attempts
     * @param ?string $externalRef
     * @param ?string $lastError
     * @throws RevenexxException
     * @return array
     */
    public function adsConversionsList(?int $limit = null, ?int $offset = null, ?string $order = null, ?string $id = null, ?string $ruleId = null, ?string $adAccountId = null, ?string $eventKey = null, ?string $event = null, ?string $platform = null, ?string $sourceRef = null, ?string $orderId = null, ?string $clickId = null, ?string $clickIdKind = null, ?string $hashedEmail = null, ?string $currency = null, ?string $state = null, ?string $attempts = null, ?string $externalRef = null, ?string $lastError = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/ads/conversions'
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

        if (!is_null($id)) {
            $apiParams['id'] = $id;
        }

        if (!is_null($ruleId)) {
            $apiParams['rule_id'] = $ruleId;
        }

        if (!is_null($adAccountId)) {
            $apiParams['ad_account_id'] = $adAccountId;
        }

        if (!is_null($eventKey)) {
            $apiParams['event_key'] = $eventKey;
        }

        if (!is_null($event)) {
            $apiParams['event'] = $event;
        }

        if (!is_null($platform)) {
            $apiParams['platform'] = $platform;
        }

        if (!is_null($sourceRef)) {
            $apiParams['source_ref'] = $sourceRef;
        }

        if (!is_null($orderId)) {
            $apiParams['order_id'] = $orderId;
        }

        if (!is_null($clickId)) {
            $apiParams['click_id'] = $clickId;
        }

        if (!is_null($clickIdKind)) {
            $apiParams['click_id_kind'] = $clickIdKind;
        }

        if (!is_null($hashedEmail)) {
            $apiParams['hashed_email'] = $hashedEmail;
        }

        if (!is_null($currency)) {
            $apiParams['currency'] = $currency;
        }

        if (!is_null($state)) {
            $apiParams['state'] = $state;
        }

        if (!is_null($attempts)) {
            $apiParams['attempts'] = $attempts;
        }

        if (!is_null($externalRef)) {
            $apiParams['external_ref'] = $externalRef;
        }

        if (!is_null($lastError)) {
            $apiParams['last_error'] = $lastError;
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
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function adsConversionsGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/ads/conversions/{id}'
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
     * @param string $id
     * @param ?string $error
     * @param ?string $externalRef
     * @param ?bool $ok
     * @throws RevenexxException
     * @return array
     */
    public function adsConversionsResult(string $id, ?string $error = null, ?string $externalRef = null, ?bool $ok = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/ads/conversions/{id}/result'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($error)) {
            $apiParams['error'] = $error;
        }

        if (!is_null($externalRef)) {
            $apiParams['external_ref'] = $externalRef;
        }

        if (!is_null($ok)) {
            $apiParams['ok'] = $ok;
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
    public function adsConversionsRetry(string $id, array $data): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/ads/conversions/{id}/retry'
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