<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;
use Revenexx\Enums\Event;
use Revenexx\Enums\ValueSource;

class AdsRules extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * Filter `?ad_account_id=`, `?event=`, `?active=true`.
     *
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @param ?string $id
     * @param ?string $adAccountId
     * @param ?string $name
     * @param ?string $event
     * @param ?string $valueSource
     * @param ?string $externalConversionRef
     * @param ?string $consentPurpose
     * @param ?string $active
     * @throws RevenexxException
     * @return array
     */
    public function adsRulesList(?int $limit = null, ?int $offset = null, ?string $order = null, ?string $id = null, ?string $adAccountId = null, ?string $name = null, ?string $event = null, ?string $valueSource = null, ?string $externalConversionRef = null, ?string $consentPurpose = null, ?string $active = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/ads/conversion-rules'
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

        if (!is_null($adAccountId)) {
            $apiParams['ad_account_id'] = $adAccountId;
        }

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

        if (!is_null($event)) {
            $apiParams['event'] = $event;
        }

        if (!is_null($valueSource)) {
            $apiParams['value_source'] = $valueSource;
        }

        if (!is_null($externalConversionRef)) {
            $apiParams['external_conversion_ref'] = $externalConversionRef;
        }

        if (!is_null($consentPurpose)) {
            $apiParams['consent_purpose'] = $consentPurpose;
        }

        if (!is_null($active)) {
            $apiParams['active'] = $active;
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
     * @param string $adAccountId
     * @param Event $event
     * @param string $name
     * @param ?bool $active
     * @param ?string $consentPurpose
     * @param ?string $externalConversionRef
     * @param ?float $fixedValue
     * @param ?mixed $metadata
     * @param ?ValueSource $valueSource
     * @throws RevenexxException
     * @return array
     */
    public function adsRulesCreate(string $adAccountId, Event $event, string $name, ?bool $active = null, ?string $consentPurpose = null, ?string $externalConversionRef = null, ?float $fixedValue = null, mixed $metadata = null, ?ValueSource $valueSource = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/ads/conversion-rules'
        );

        $apiParams = [];
        $apiParams['ad_account_id'] = $adAccountId;
        $apiParams['event'] = $event;
        $apiParams['name'] = $name;

        if (!is_null($active)) {
            $apiParams['active'] = $active;
        }

        if (!is_null($consentPurpose)) {
            $apiParams['consent_purpose'] = $consentPurpose;
        }
        $apiParams['external_conversion_ref'] = $externalConversionRef;
        $apiParams['fixed_value'] = $fixedValue;

        if (!is_null($metadata)) {
            $apiParams['metadata'] = $metadata;
        }

        if (!is_null($valueSource)) {
            $apiParams['value_source'] = $valueSource;
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
     * @throws RevenexxException
     * @return array
     */
    public function adsRulesDelete(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/ads/conversion-rules/{id}'
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
    public function adsRulesGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/ads/conversion-rules/{id}'
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
     * @param ?bool $active
     * @param ?string $adAccountId
     * @param ?string $consentPurpose
     * @param ?Event $event
     * @param ?string $externalConversionRef
     * @param ?float $fixedValue
     * @param ?mixed $metadata
     * @param ?string $name
     * @param ?ValueSource $valueSource
     * @throws RevenexxException
     * @return array
     */
    public function adsRulesUpdate(string $id, ?bool $active = null, ?string $adAccountId = null, ?string $consentPurpose = null, ?Event $event = null, ?string $externalConversionRef = null, ?float $fixedValue = null, mixed $metadata = null, ?string $name = null, ?ValueSource $valueSource = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/ads/conversion-rules/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($active)) {
            $apiParams['active'] = $active;
        }

        if (!is_null($adAccountId)) {
            $apiParams['ad_account_id'] = $adAccountId;
        }

        if (!is_null($consentPurpose)) {
            $apiParams['consent_purpose'] = $consentPurpose;
        }

        if (!is_null($event)) {
            $apiParams['event'] = $event;
        }
        $apiParams['external_conversion_ref'] = $externalConversionRef;
        $apiParams['fixed_value'] = $fixedValue;

        if (!is_null($metadata)) {
            $apiParams['metadata'] = $metadata;
        }

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

        if (!is_null($valueSource)) {
            $apiParams['value_source'] = $valueSource;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PUT,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }
}