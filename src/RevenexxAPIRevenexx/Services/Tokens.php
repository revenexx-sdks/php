<?php

namespace RevenexxAPIRevenexx\Services;

use RevenexxAPIRevenexx\RevenexxAPIRevenexxException;
use RevenexxAPIRevenexx\Client;
use RevenexxAPIRevenexx\Service;
use RevenexxAPIRevenexx\InputFile;

class Tokens extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * List all the tokens created for a specific file or bucket. You can use the
     * query params to filter your results.
     *
     * @param string $bucketId
     * @param string $fileId
     * @param ?array $queries
     * @param ?bool $total
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function tokensList(string $bucketId, string $fileId, ?array $queries = null, ?bool $total = null): array
    {
        $apiPath = str_replace(
            ['{bucketId}', '{fileId}'],
            [$bucketId, $fileId],
            '/v1/tokens/buckets/{bucketId}/files/{fileId}'
        );

        $apiParams = [];
        $apiParams['bucketId'] = $bucketId;
        $apiParams['fileId'] = $fileId;

        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
        }

        if (!is_null($total)) {
            $apiParams['total'] = $total;
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
     * Create a new token. A token is linked to a file. Token can be passed as a
     * request URL search parameter.
     *
     * @param string $bucketId
     * @param string $fileId
     * @param ?string $expire
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function tokensCreateFileToken(string $bucketId, string $fileId, ?string $expire = null): array
    {
        $apiPath = str_replace(
            ['{bucketId}', '{fileId}'],
            [$bucketId, $fileId],
            '/v1/tokens/buckets/{bucketId}/files/{fileId}'
        );

        $apiParams = [];
        $apiParams['bucketId'] = $bucketId;
        $apiParams['fileId'] = $fileId;

        if (!is_null($expire)) {
            $apiParams['expire'] = $expire;
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
     * Delete a token by its unique ID.
     *
     * @param string $tokenId
     * @throws RevenexxAPIRevenexxException
     * @return string
     */
    public function tokensDelete(string $tokenId): string
    {
        $apiPath = str_replace(
            ['{tokenId}'],
            [$tokenId],
            '/v1/tokens/{tokenId}'
        );

        $apiParams = [];
        $apiParams['tokenId'] = $tokenId;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Get a token by its unique ID.
     *
     * @param string $tokenId
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function tokensGet(string $tokenId): array
    {
        $apiPath = str_replace(
            ['{tokenId}'],
            [$tokenId],
            '/v1/tokens/{tokenId}'
        );

        $apiParams = [];
        $apiParams['tokenId'] = $tokenId;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Update a token by its unique ID. Use this endpoint to update a token's
     * expiry date.
     *
     * @param string $tokenId
     * @param ?string $expire
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function tokensUpdate(string $tokenId, ?string $expire = null): array
    {
        $apiPath = str_replace(
            ['{tokenId}'],
            [$tokenId],
            '/v1/tokens/{tokenId}'
        );

        $apiParams = [];
        $apiParams['tokenId'] = $tokenId;

        if (!is_null($expire)) {
            $apiParams['expire'] = $expire;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }
}