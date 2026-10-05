<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;

class QuotesAcceptance extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * The buyer takes the offer. Sent with no positions it takes everything still
     * open; sent with positions it decides exactly those, which leaves the quote
     * `partially_accepted` and open for the rest — a second acceptance later
     * produces a SECOND order. The answer carries an `order_draft` shaped the way
     * order management takes it, with the negotiated price as `unit_price`,
     * covering only what THIS call accepted. Refused past `valid_until`, and
     * refused entirely when the merchant does not allow a basket to be taken
     * apart.
     *
     * @param string $id
     * @param ?array $items
     * @throws RevenexxException
     * @return array
     */
    public function quotesAcceptanceAccept(string $id, ?array $items = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/quotes/quotes/{id}/accept'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($items)) {
            $apiParams['items'] = $items;
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
     * The buyer refuses the offer. Every position still open is declined with it.
     *
     * @param string $id
     * @param ?string $reason
     * @throws RevenexxException
     * @return array
     */
    public function quotesAcceptanceDecline(string $id, ?string $reason = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/quotes/quotes/{id}/decline'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($reason)) {
            $apiParams['reason'] = $reason;
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
     * Writes back which order took which positions. This app cannot know the
     * order id — order management mints it after the draft was handed over —
     * so without this call the record could not answer "which order came out of
     * this quote".
     *
     * @param string $id
     * @param string $orderId
     * @param ?array $itemIds
     * @throws RevenexxException
     * @return array
     */
    public function quotesAcceptanceOrdered(string $id, string $orderId, ?array $itemIds = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/quotes/quotes/{id}/ordered'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams['order_id'] = $orderId;

        if (!is_null($itemIds)) {
            $apiParams['item_ids'] = $itemIds;
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
     * The merchant will not make an offer — not deliverable, not a customer
     * they serve, a quantity they cannot do. The reason is required: a refusal
     * the buyer cannot read is not a refusal.
     *
     * @param string $id
     * @param string $reason
     * @throws RevenexxException
     * @return array
     */
    public function quotesAcceptanceReject(string $id, string $reason): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/quotes/quotes/{id}/reject'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams['reason'] = $reason;

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