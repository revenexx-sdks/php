<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;

class ReviewsModeration extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * Shows it in the shop and recomputes the product figures. Publishing a
     * published review answers it unchanged.
     *
     * @param string $id
     * @param array $data
     * @throws RevenexxException
     * @return array
     */
    public function reviewsModerationPublish(string $id, array $data): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/reviews/reviews/{id}/publish'
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
     * @param string $id
     * @param string $reason
     * @throws RevenexxException
     * @return array
     */
    public function reviewsModerationReject(string $id, string $reason): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/reviews/reviews/{id}/reject'
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

    /**
     * @param string $id
     * @param ?string $reply
     * @throws RevenexxException
     * @return array
     */
    public function reviewsModerationReply(string $id, ?string $reply = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/reviews/reviews/{id}/reply'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams['reply'] = $reply;

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