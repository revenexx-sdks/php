<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;
use Revenexx\Enums\PriceReason;
use Revenexx\Enums\QuotesPricingReviewState;

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
     * Removes one position while its quote is `requested` or `in_review`, and
     * re-totals the quote. The last position stays: a quote with nothing on it is
     * declined or rejected instead.
     *
     * @param string $id
     * @param array $data
     * @throws RevenexxException
     * @return array
     */
    public function quotesPricingRemoveItem(string $id, array $data): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/quotes/items/{id}/remove'
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
     * Sets or clears `follow_up_at` on an open quote and writes it to the
     * internal trail. The buyer is not told; nothing happens on the day by
     * itself.
     *
     * @param string $id
     * @param ?string $followUpAt
     * @throws RevenexxException
     * @return array
     */
    public function quotesPricingFollowUp(string $id, ?string $followUpAt = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/quotes/quotes/{id}/follow-up'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams['follow_up_at'] = $followUpAt;

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
     * Adds one position while the quote is `requested` or `in_review`. The line
     * is the shape a quote's lines always take — the caller names the article
     * (`name`, else `sku`, is required); this app does not read the catalogue. It
     * goes in after the last position and the quote re-totals. A sent quote takes
     * no new position: it changes by pricing it again, which leaves a revision.
     *
     * @param string $id
     * @param ?array $configuration
     * @param ?float $discountPercent
     * @param ?string $externalId
     * @param ?array $externalRefs
     * @param ?int $leadTimeDays
     * @param ?float $listPrice
     * @param ?array $metadata
     * @param ?string $name
     * @param ?int $position
     * @param ?PriceReason $priceReason
     * @param ?string $productId
     * @param ?float $quantity
     * @param ?float $quotedPrice
     * @param ?string $sku
     * @param ?array $sourceData
     * @param ?string $sourceSyncedAt
     * @param ?float $taxRate
     * @param ?string $unit
     * @throws RevenexxException
     * @return array
     */
    public function quotesPricingAddItem(string $id, ?array $configuration = null, ?float $discountPercent = null, ?string $externalId = null, ?array $externalRefs = null, ?int $leadTimeDays = null, ?float $listPrice = null, ?array $metadata = null, ?string $name = null, ?int $position = null, ?PriceReason $priceReason = null, ?string $productId = null, ?float $quantity = null, ?float $quotedPrice = null, ?string $sku = null, ?array $sourceData = null, ?string $sourceSyncedAt = null, ?float $taxRate = null, ?string $unit = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/quotes/quotes/{id}/items'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($configuration)) {
            $apiParams['configuration'] = $configuration;
        }

        if (!is_null($discountPercent)) {
            $apiParams['discount_percent'] = $discountPercent;
        }

        if (!is_null($externalId)) {
            $apiParams['external_id'] = $externalId;
        }

        if (!is_null($externalRefs)) {
            $apiParams['external_refs'] = $externalRefs;
        }

        if (!is_null($leadTimeDays)) {
            $apiParams['lead_time_days'] = $leadTimeDays;
        }

        if (!is_null($listPrice)) {
            $apiParams['list_price'] = $listPrice;
        }

        if (!is_null($metadata)) {
            $apiParams['metadata'] = $metadata;
        }

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

        if (!is_null($position)) {
            $apiParams['position'] = $position;
        }

        if (!is_null($priceReason)) {
            $apiParams['price_reason'] = $priceReason;
        }

        if (!is_null($productId)) {
            $apiParams['product_id'] = $productId;
        }

        if (!is_null($quantity)) {
            $apiParams['quantity'] = $quantity;
        }

        if (!is_null($quotedPrice)) {
            $apiParams['quoted_price'] = $quotedPrice;
        }

        if (!is_null($sku)) {
            $apiParams['sku'] = $sku;
        }

        if (!is_null($sourceData)) {
            $apiParams['source_data'] = $sourceData;
        }

        if (!is_null($sourceSyncedAt)) {
            $apiParams['source_synced_at'] = $sourceSyncedAt;
        }

        if (!is_null($taxRate)) {
            $apiParams['tax_rate'] = $taxRate;
        }

        if (!is_null($unit)) {
            $apiParams['unit'] = $unit;
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
     * The desk calculating line by line. Sets the quantity, the negotiated price
     * (or the discount on the list price, which moves it), its reason and the
     * lead time of one position, re-totals the line and the quote, and tells
     * nobody: no event, no trail entry, no status change. Allowed while the quote
     * is `requested`, `in_review` or `quoted`; the buyer learns of it when the
     * quote is sent through `POST /quotes/quotes/{id}/price`. A key left out
     * keeps what it has; `null` clears it, and a position without a negotiated
     * price counts at its list price.
     *
     * @param string $id
     * @param string $itemId
     * @param ?float $discountPercent
     * @param ?int $leadTimeDays
     * @param ?PriceReason $priceReason
     * @param ?float $quantity
     * @param ?float $quotedPrice
     * @throws RevenexxException
     * @return array
     */
    public function quotesPricingItem(string $id, string $itemId, ?float $discountPercent = null, ?int $leadTimeDays = null, ?PriceReason $priceReason = null, ?float $quantity = null, ?float $quotedPrice = null): array
    {
        $apiPath = str_replace(
            ['{id}', '{item_id}'],
            [$id, $itemId],
            '/v1/quotes/quotes/{id}/items/{item_id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams['item_id'] = $itemId;
        $apiParams['discount_percent'] = $discountPercent;
        $apiParams['lead_time_days'] = $leadTimeDays;
        $apiParams['price_reason'] = $priceReason;

        if (!is_null($quantity)) {
            $apiParams['quantity'] = $quantity;
        }
        $apiParams['quoted_price'] = $quotedPrice;

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
     * @param ?string $senderCountry
     * @param ?float $shippingAmount
     * @param ?float $shippingTaxRate
     * @param ?array $sourceData
     * @param ?string $sourceSyncedAt
     * @param ?string $validUntil
     * @throws RevenexxException
     * @return array
     */
    public function quotesPricingPrice(string $id, ?string $externalId = null, ?array $externalRefs = null, ?array $items = null, ?string $sellerNote = null, ?string $senderCountry = null, ?float $shippingAmount = null, ?float $shippingTaxRate = null, ?array $sourceData = null, ?string $sourceSyncedAt = null, ?string $validUntil = null): array
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

        if (!is_null($senderCountry)) {
            $apiParams['sender_country'] = $senderCountry;
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
     * @param ?string $contactId
     * @param ?string $createdAt
     * @param ?string $expiresAt
     * @param ?string $idBody
     * @param ?int $issuedCount
     * @param ?mixed $items
     * @param ?string $journeyRef
     * @param ?string $locale
     * @param ?string $market
     * @param ?mixed $metadata
     * @param ?string $orderId
     * @param ?string $orderNumber
     * @param ?string $organizationId
     * @param ?mixed $productIds
     * @param ?int $reviewedCount
     * @param ?QuotesPricingReviewState $state
     * @param ?string $updatedAt
     * @param ?string $usedAt
     * @throws RevenexxException
     * @return array
     */
    public function quotesPricingReview(string $id, ?string $contactId = null, ?string $createdAt = null, ?string $expiresAt = null, ?string $idBody = null, ?int $issuedCount = null, mixed $items = null, ?string $journeyRef = null, ?string $locale = null, ?string $market = null, mixed $metadata = null, ?string $orderId = null, ?string $orderNumber = null, ?string $organizationId = null, mixed $productIds = null, ?int $reviewedCount = null, ?QuotesPricingReviewState $state = null, ?string $updatedAt = null, ?string $usedAt = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/quotes/quotes/{id}/review'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($contactId)) {
            $apiParams['contact_id'] = $contactId;
        }

        if (!is_null($createdAt)) {
            $apiParams['created_at'] = $createdAt;
        }

        if (!is_null($expiresAt)) {
            $apiParams['expires_at'] = $expiresAt;
        }
        $apiParams['id'] = $idBody;

        if (!is_null($issuedCount)) {
            $apiParams['issued_count'] = $issuedCount;
        }

        if (!is_null($items)) {
            $apiParams['items'] = $items;
        }
        $apiParams['journey_ref'] = $journeyRef;
        $apiParams['locale'] = $locale;
        $apiParams['market'] = $market;

        if (!is_null($metadata)) {
            $apiParams['metadata'] = $metadata;
        }

        if (!is_null($orderId)) {
            $apiParams['order_id'] = $orderId;
        }
        $apiParams['order_number'] = $orderNumber;
        $apiParams['organization_id'] = $organizationId;

        if (!is_null($productIds)) {
            $apiParams['product_ids'] = $productIds;
        }

        if (!is_null($reviewedCount)) {
            $apiParams['reviewed_count'] = $reviewedCount;
        }

        if (!is_null($state)) {
            $apiParams['state'] = $state;
        }

        if (!is_null($updatedAt)) {
            $apiParams['updated_at'] = $updatedAt;
        }
        $apiParams['used_at'] = $usedAt;

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
     * Announces `quote.expiring` now, with `manual: true`, instead of waiting for
     * the sweep — so whatever mails the expiry warning mails this too — and
     * writes it to the trail the buyer reads. Only for a quote the buyer holds
     * (`quoted`, `partially_accepted`).
     *
     * @param string $id
     * @param array $data
     * @throws RevenexxException
     * @return array
     */
    public function quotesPricingRemind(string $id, array $data): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/quotes/quotes/{id}/send-reminder'
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