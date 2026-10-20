<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;
use Revenexx\Enums\Sort;

class ReviewsProducts extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * @param string $productId
     * @param ?string $market
     * @param ?Sort $sort
     * @param ?int $limit
     * @param ?int $offset
     * @throws RevenexxException
     * @return array
     */
    public function reviewsProductsGet(string $productId, ?string $market = null, ?Sort $sort = null, ?int $limit = null, ?int $offset = null): array
    {
        $apiPath = str_replace(
            ['{product_id}'],
            [$productId],
            '/v1/reviews/products/{product_id}'
        );

        $apiParams = [];
        $apiParams['product_id'] = $productId;

        if (!is_null($market)) {
            $apiParams['market'] = $market;
        }

        if (!is_null($sort)) {
            $apiParams['sort'] = $sort;
        }

        if (!is_null($limit)) {
            $apiParams['limit'] = $limit;
        }

        if (!is_null($offset)) {
            $apiParams['offset'] = $offset;
        }

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }
}