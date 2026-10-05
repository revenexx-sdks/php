<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;
use Revenexx\Enums\Origin;
use Revenexx\Enums\Audience;

class QuotesQuotes extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * The quote list — a merchant's work queue and a buyer's history, depending
     * on who is asking. Filter `?status=quoted` for what is waiting on the
     * customer, `?status=requested` for what nobody has picked up yet, and
     * `?owner_id=` for one salesperson's desk; `status` takes several values
     * separated by commas. A call the gateway attributes to a buyer is narrowed
     * to that buyer's organisation whatever it asks for. Newest first unless
     * `order` says otherwise.
     *
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @param ?string $status
     * @param ?Origin $origin
     * @param ?string $organizationId
     * @param ?string $contactId
     * @param ?string $ownerId
     * @param ?string $cartId
     * @param ?string $number
     * @param ?string $externalId
     * @throws RevenexxException
     * @return array
     */
    public function quotesQuotesList(?int $limit = null, ?int $offset = null, ?string $order = null, ?string $status = null, ?Origin $origin = null, ?string $organizationId = null, ?string $contactId = null, ?string $ownerId = null, ?string $cartId = null, ?string $number = null, ?string $externalId = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/quotes/quotes'
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

        if (!is_null($status)) {
            $apiParams['status'] = $status;
        }

        if (!is_null($origin)) {
            $apiParams['origin'] = $origin;
        }

        if (!is_null($organizationId)) {
            $apiParams['organization_id'] = $organizationId;
        }

        if (!is_null($contactId)) {
            $apiParams['contact_id'] = $contactId;
        }

        if (!is_null($ownerId)) {
            $apiParams['owner_id'] = $ownerId;
        }

        if (!is_null($cartId)) {
            $apiParams['cart_id'] = $cartId;
        }

        if (!is_null($number)) {
            $apiParams['number'] = $number;
        }

        if (!is_null($externalId)) {
            $apiParams['external_id'] = $externalId;
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
     * Sales opens a quote for a customer who never sent a cart — the normal
     * case when a salesperson quotes over the phone. It starts on the desk rather
     * than in the queue, because the person opening it IS the desk.
     *
     * @param string $currency
     * @param array $items
     * @param ?array $billingAddress
     * @param ?array $buyer
     * @param ?string $contactId
     * @param ?string $externalId
     * @param ?array $externalRefs
     * @param ?array $metadata
     * @param ?string $organizationId
     * @param ?string $ownerId
     * @param ?string $reason
     * @param ?string $sellerNote
     * @param ?array $shippingAddress
     * @param ?array $sourceData
     * @param ?string $sourceSyncedAt
     * @throws RevenexxException
     * @return array
     */
    public function quotesQuotesCreate(string $currency, array $items, ?array $billingAddress = null, ?array $buyer = null, ?string $contactId = null, ?string $externalId = null, ?array $externalRefs = null, ?array $metadata = null, ?string $organizationId = null, ?string $ownerId = null, ?string $reason = null, ?string $sellerNote = null, ?array $shippingAddress = null, ?array $sourceData = null, ?string $sourceSyncedAt = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/quotes/quotes'
        );

        $apiParams = [];
        $apiParams['currency'] = $currency;
        $apiParams['items'] = $items;

        if (!is_null($billingAddress)) {
            $apiParams['billing_address'] = $billingAddress;
        }

        if (!is_null($buyer)) {
            $apiParams['buyer'] = $buyer;
        }

        if (!is_null($contactId)) {
            $apiParams['contact_id'] = $contactId;
        }

        if (!is_null($externalId)) {
            $apiParams['external_id'] = $externalId;
        }

        if (!is_null($externalRefs)) {
            $apiParams['external_refs'] = $externalRefs;
        }

        if (!is_null($metadata)) {
            $apiParams['metadata'] = $metadata;
        }

        if (!is_null($organizationId)) {
            $apiParams['organization_id'] = $organizationId;
        }

        if (!is_null($ownerId)) {
            $apiParams['owner_id'] = $ownerId;
        }

        if (!is_null($reason)) {
            $apiParams['reason'] = $reason;
        }

        if (!is_null($sellerNote)) {
            $apiParams['seller_note'] = $sellerNote;
        }

        if (!is_null($shippingAddress)) {
            $apiParams['shipping_address'] = $shippingAddress;
        }

        if (!is_null($sourceData)) {
            $apiParams['source_data'] = $sourceData;
        }

        if (!is_null($sourceSyncedAt)) {
            $apiParams['source_synced_at'] = $sourceSyncedAt;
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
     * The quote record without its positions. For everything at once —
     * positions, trail and attachments — read the detail.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function quotesQuotesGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/quotes/quotes/{id}'
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
     * The whole quote in one call: the record, its positions in order, the trail
     * of every move and note, and the attachments. This is what a record page and
     * a storefront both read. A buyer — or any caller asking with
     * `audience=customer` — reads only the entries and files meant for the
     * customer; the merchant's internal notes stay on the merchant's side.
     * Another organisation's quote does not exist for a buyer.
     *
     * @param string $id
     * @param ?Audience $audience
     * @throws RevenexxException
     * @return array
     */
    public function quotesQuotesDetail(string $id, ?Audience $audience = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/quotes/quotes/{id}/detail'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($audience)) {
            $apiParams['audience'] = $audience;
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
     * The positions alone, in position order. Unpaged — a quote carries what it
     * carries.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function quotesQuotesItems(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/quotes/quotes/{id}/items'
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
     * A buyer sends a basket in and asks for a price. The positions are COPIED
     * onto the quote rather than referenced, so the buyer can keep shopping and
     * the quote does not change under the merchant's desk. Commits the buyer to
     * nothing: the answer is a numbered request waiting for a price.
     *
     * @param string $currency
     * @param array $items
     * @param ?array $billingAddress
     * @param ?array $buyer
     * @param ?string $buyerNote
     * @param ?string $cartId
     * @param ?string $contactId
     * @param ?string $externalId
     * @param ?array $externalRefs
     * @param ?array $metadata
     * @param ?string $organizationId
     * @param ?string $reason
     * @param ?array $shippingAddress
     * @param ?array $sourceData
     * @param ?string $sourceSyncedAt
     * @throws RevenexxException
     * @return array
     */
    public function quotesQuotesRequest(string $currency, array $items, ?array $billingAddress = null, ?array $buyer = null, ?string $buyerNote = null, ?string $cartId = null, ?string $contactId = null, ?string $externalId = null, ?array $externalRefs = null, ?array $metadata = null, ?string $organizationId = null, ?string $reason = null, ?array $shippingAddress = null, ?array $sourceData = null, ?string $sourceSyncedAt = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/quotes/request'
        );

        $apiParams = [];
        $apiParams['currency'] = $currency;
        $apiParams['items'] = $items;

        if (!is_null($billingAddress)) {
            $apiParams['billing_address'] = $billingAddress;
        }

        if (!is_null($buyer)) {
            $apiParams['buyer'] = $buyer;
        }

        if (!is_null($buyerNote)) {
            $apiParams['buyer_note'] = $buyerNote;
        }

        if (!is_null($cartId)) {
            $apiParams['cart_id'] = $cartId;
        }

        if (!is_null($contactId)) {
            $apiParams['contact_id'] = $contactId;
        }

        if (!is_null($externalId)) {
            $apiParams['external_id'] = $externalId;
        }

        if (!is_null($externalRefs)) {
            $apiParams['external_refs'] = $externalRefs;
        }

        if (!is_null($metadata)) {
            $apiParams['metadata'] = $metadata;
        }

        if (!is_null($organizationId)) {
            $apiParams['organization_id'] = $organizationId;
        }

        if (!is_null($reason)) {
            $apiParams['reason'] = $reason;
        }

        if (!is_null($shippingAddress)) {
            $apiParams['shipping_address'] = $shippingAddress;
        }

        if (!is_null($sourceData)) {
            $apiParams['source_data'] = $sourceData;
        }

        if (!is_null($sourceSyncedAt)) {
            $apiParams['source_synced_at'] = $sourceSyncedAt;
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
     * The values this app accepts, so a client renders a picker instead of
     * guessing: the statuses a quote can stand in, what a position's decision can
     * be, and why a price is what it is.
     *
     * @throws RevenexxException
     * @return array
     */
    public function quotesQuotesVocabularies(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/quotes/vocabularies'
        );

        $apiParams = [];

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }
}