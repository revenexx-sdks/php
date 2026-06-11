<?php

namespace RevenexxAPIRevenexx\Services;

use RevenexxAPIRevenexx\RevenexxAPIRevenexxException;
use RevenexxAPIRevenexx\Client;
use RevenexxAPIRevenexx\Service;
use RevenexxAPIRevenexx\InputFile;
use RevenexxAPIRevenexx\Enums\Collection;

class Search extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * The collections the tenant's installed apps have provisioned.
     *
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function searchListCollections(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/search/collections'
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

    /**
     * Full-text search within one collection using Typesense query parameters as
     * the query string.
     *
     * @param Collection $collection
     * @param ?string $q
     * @param ?string $queryBy
     * @param ?string $filterBy
     * @param ?string $sortBy
     * @param ?int $page
     * @param ?int $perPage
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function searchSearchDocumentsGet(Collection $collection, ?string $q = null, ?string $queryBy = null, ?string $filterBy = null, ?string $sortBy = null, ?int $page = null, ?int $perPage = null): array
    {
        $apiPath = str_replace(
            ['{collection}'],
            [$collection],
            '/v1/search/collections/{collection}/documents/search'
        );

        $apiParams = [];
        $apiParams['collection'] = $collection;

        if (!is_null($q)) {
            $apiParams['q'] = $q;
        }

        if (!is_null($queryBy)) {
            $apiParams['query_by'] = $queryBy;
        }

        if (!is_null($filterBy)) {
            $apiParams['filter_by'] = $filterBy;
        }

        if (!is_null($sortBy)) {
            $apiParams['sort_by'] = $sortBy;
        }

        if (!is_null($page)) {
            $apiParams['page'] = $page;
        }

        if (!is_null($perPage)) {
            $apiParams['per_page'] = $perPage;
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
     * Full-text search within one collection. The body holds Typesense search
     * parameters.
     *
     * @param Collection $collection
     * @param ?string $facetBy
     * @param ?string $filterBy
     * @param ?int $page
     * @param ?int $perPage
     * @param ?string $q
     * @param ?string $queryBy
     * @param ?string $sortBy
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function searchSearchDocuments(Collection $collection, ?string $facetBy = null, ?string $filterBy = null, ?int $page = null, ?int $perPage = null, ?string $q = null, ?string $queryBy = null, ?string $sortBy = null): array
    {
        $apiPath = str_replace(
            ['{collection}'],
            [$collection],
            '/v1/search/collections/{collection}/documents/search'
        );

        $apiParams = [];
        $apiParams['collection'] = $collection;

        if (!is_null($facetBy)) {
            $apiParams['facet_by'] = $facetBy;
        }

        if (!is_null($filterBy)) {
            $apiParams['filter_by'] = $filterBy;
        }

        if (!is_null($page)) {
            $apiParams['page'] = $page;
        }

        if (!is_null($perPage)) {
            $apiParams['per_page'] = $perPage;
        }

        if (!is_null($q)) {
            $apiParams['q'] = $q;
        }

        if (!is_null($queryBy)) {
            $apiParams['query_by'] = $queryBy;
        }

        if (!is_null($sortBy)) {
            $apiParams['sort_by'] = $sortBy;
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
     * Fetch a single document by id from a collection the tenant has installed.
     *
     * @param Collection $collection
     * @param string $documentId
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function searchGetDocument(Collection $collection, string $documentId): array
    {
        $apiPath = str_replace(
            ['{collection}', '{documentId}'],
            [$collection, $documentId],
            '/v1/search/collections/{collection}/documents/{documentId}'
        );

        $apiParams = [];
        $apiParams['collection'] = $collection;
        $apiParams['documentId'] = $documentId;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Run several searches in one request (the InstantSearch adapter uses this).
     * Each entry names its collection.
     *
     * @param array $searches
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function searchMultiSearch(array $searches): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/search/multi_search'
        );

        $apiParams = [];
        $apiParams['searches'] = $searches;

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