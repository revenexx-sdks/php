<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;

class QuotesPricing extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * Moves every quote past its validity to expired. Runs on a schedule and on
     * demand, and is idempotent — a quote already expired is not touched twice.
     * Switching the sweep off does NOT soften the deadline: acceptance past
     * `valid_until` is refused either way.
     *
     * @param array $data
     * @throws RevenexxException
     * @return array
     */
    public function quotesPricingExpire(array $data): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/quotes/expire'
        );

        $apiParams = [];
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
     * The merchant's side of the desk, and THE designated override point of this
     * app: a tenant whose prices come out of an ERP replaces this one capability
     * at the gateway and keeps everything else. Sets a negotiated price per
     * position, a validity, and the note the customer reads. Re-pricing a quote
     * the buyer has already seen writes a new revision by default, so every round
     * of a negotiation stays readable.
     *
     * @param string $id
     * @param ?string $externalId
     * @param ?array $externalRefs
     * @param ?array $items
     * @param ?string $sellerNote
     * @param ?float $shippingAmount
     * @param ?float $shippingTaxRate
     * @param ?array $sourceData
     * @param ?string $sourceSyncedAt
     * @param ?string $validUntil
     * @throws RevenexxException
     * @return array
     */
    public function quotesPricingPrice(string $id, ?string $externalId = null, ?array $externalRefs = null, ?array $items = null, ?string $sellerNote = null, ?float $shippingAmount = null, ?float $shippingTaxRate = null, ?array $sourceData = null, ?string $sourceSyncedAt = null, ?string $validUntil = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/quotes/quotes/{id}/price'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($externalId)) {
            $apiParams['external_id'] = $externalId;
        }

        if (!is_null($externalRefs)) {
            $apiParams['external_refs'] = $externalRefs;
        }

        if (!is_null($items)) {
            $apiParams['items'] = $items;
        }

        if (!is_null($sellerNote)) {
            $apiParams['seller_note'] = $sellerNote;
        }

        if (!is_null($shippingAmount)) {
            $apiParams['shipping_amount'] = $shippingAmount;
        }

        if (!is_null($shippingTaxRate)) {
            $apiParams['shipping_tax_rate'] = $shippingTaxRate;
        }

        if (!is_null($sourceData)) {
            $apiParams['source_data'] = $sourceData;
        }

        if (!is_null($sourceSyncedAt)) {
            $apiParams['source_synced_at'] = $sourceSyncedAt;
        }

        if (!is_null($validUntil)) {
            $apiParams['valid_until'] = $validUntil;
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
     * Claims a request: it moves out of the unattended queue and gets an owner,
     * which is what a sales worklist filters by.
     *
     * @param string $id
     * @param ?string $ownerId
     * @throws RevenexxException
     * @return array
     */
    public function quotesPricingReview(string $id, ?string $ownerId = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/quotes/quotes/{id}/review'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($ownerId)) {
            $apiParams['owner_id'] = $ownerId;
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
}