<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;

class ReviewsAggregates extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * With `product_ids` (comma-separated, at most 200): one entry per product,
     * zero for a product nobody reviewed. Without: the stored figures, paged,
     * most reviewed first.
     *
     * @param ?string $productIds
     * @param ?string $market
     * @param ?string $productId
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @throws RevenexxException
     * @return array
     */
    public function reviewsAggregatesList(?string $productIds = null, ?string $market = null, ?string $productId = null, ?int $limit = null, ?int $offset = null, ?string $order = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/reviews/aggregates'
        );

        $apiParams = [];

        if (!is_null($productIds)) {
            $apiParams['product_ids'] = $productIds;
        }

        if (!is_null($market)) {
            $apiParams['market'] = $market;
        }

        if (!is_null($productId)) {
            $apiParams['product_id'] = $productId;
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
     * For the named products, or for every product with reviews or figures (up to
     * 1000 per call).
     *
     * @param ?array $productIds
     * @throws RevenexxException
     * @return array
     */
    public function reviewsAggregatesRebuild(?array $productIds = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/reviews/aggregates/rebuild'
        );

        $apiParams = [];

        if (!is_null($productIds)) {
            $apiParams['product_ids'] = $productIds;
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
     * The stars of the review's product across all markets, five stars down to
     * one, each with its count and share of the published reviews, worded in the
     * caller language (Accept-Language; German unless English is asked for);
     * average, count and verified purchases are `footer` rows, no published
     * review answers no rows; the row of the review's own stars says so in `sub`.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function reviewsAggregatesReviewStars(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/reviews/reviews/{id}/stars'
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
}