<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;
use Revenexx\Enums\Collection;

class Search extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * The collections the tenant's installed apps have provisioned. Available on
     * the API-gateway-trust path only — a `revx_` key authorises a single
     * collection, so discovery is a gateway concern and a key-authenticated
     * caller gets 403.
     *
     * @throws RevenexxException
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
     * Returns the Typesense collection definition (fields, defaults, document
     * count). Requires the `collections:read` action.
     *
     * @param Collection $collection
     * @throws RevenexxException
     * @return array
     */
    public function searchGetCollection(Collection $collection): array
    {
        $apiPath = str_replace(
            ['{collection}'],
            [$collection],
            '/v1/search/collections/{collection}'
        );

        $apiParams = [];
        $apiParams['collection'] = $collection;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Full-text search within one collection. Typesense search parameters are
     * passed through verbatim as the query string, so parameters not listed here
     * still reach Typesense. Requires the `documents:search` action.
     *
     * @param Collection $collection
     * @param ?string $q
     * @param ?string $queryBy
     * @param ?string $filterBy
     * @param ?string $sortBy
     * @param ?string $facetBy
     * @param ?int $maxFacetValues
     * @param ?string $groupBy
     * @param ?string $includeFields
     * @param ?string $excludeFields
     * @param ?string $highlightFullFields
     * @param ?int $numTypos
     * @param ?string $prefix
     * @param ?int $page
     * @param ?int $perPage
     * @throws RevenexxException
     * @return array
     */
    public function searchSearchDocumentsGet(Collection $collection, ?string $q = null, ?string $queryBy = null, ?string $filterBy = null, ?string $sortBy = null, ?string $facetBy = null, ?int $maxFacetValues = null, ?string $groupBy = null, ?string $includeFields = null, ?string $excludeFields = null, ?string $highlightFullFields = null, ?int $numTypos = null, ?string $prefix = null, ?int $page = null, ?int $perPage = null): array
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

        if (!is_null($facetBy)) {
            $apiParams['facet_by'] = $facetBy;
        }

        if (!is_null($maxFacetValues)) {
            $apiParams['max_facet_values'] = $maxFacetValues;
        }

        if (!is_null($groupBy)) {
            $apiParams['group_by'] = $groupBy;
        }

        if (!is_null($includeFields)) {
            $apiParams['include_fields'] = $includeFields;
        }

        if (!is_null($excludeFields)) {
            $apiParams['exclude_fields'] = $excludeFields;
        }

        if (!is_null($highlightFullFields)) {
            $apiParams['highlight_full_fields'] = $highlightFullFields;
        }

        if (!is_null($numTypos)) {
            $apiParams['num_typos'] = $numTypos;
        }

        if (!is_null($prefix)) {
            $apiParams['prefix'] = $prefix;
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
     * Full-text search within one collection, with the Typesense search
     * parameters in the body. Requires the `documents:search` action.
     *
     * @param Collection $collection
     * @param ?string $excludeFields
     * @param ?string $facetBy
     * @param ?string $filterBy
     * @param ?string $groupBy
     * @param ?string $highlightFullFields
     * @param ?string $includeFields
     * @param ?int $maxFacetValues
     * @param ?int $numTypos
     * @param ?int $page
     * @param ?int $perPage
     * @param ?string $prefix
     * @param ?string $q
     * @param ?string $queryBy
     * @param ?string $sortBy
     * @throws RevenexxException
     * @return array
     */
    public function searchSearchDocuments(Collection $collection, ?string $excludeFields = null, ?string $facetBy = null, ?string $filterBy = null, ?string $groupBy = null, ?string $highlightFullFields = null, ?string $includeFields = null, ?int $maxFacetValues = null, ?int $numTypos = null, ?int $page = null, ?int $perPage = null, ?string $prefix = null, ?string $q = null, ?string $queryBy = null, ?string $sortBy = null): array
    {
        $apiPath = str_replace(
            ['{collection}'],
            [$collection],
            '/v1/search/collections/{collection}/documents/search'
        );

        $apiParams = [];
        $apiParams['collection'] = $collection;

        if (!is_null($excludeFields)) {
            $apiParams['exclude_fields'] = $excludeFields;
        }

        if (!is_null($facetBy)) {
            $apiParams['facet_by'] = $facetBy;
        }

        if (!is_null($filterBy)) {
            $apiParams['filter_by'] = $filterBy;
        }

        if (!is_null($groupBy)) {
            $apiParams['group_by'] = $groupBy;
        }

        if (!is_null($highlightFullFields)) {
            $apiParams['highlight_full_fields'] = $highlightFullFields;
        }

        if (!is_null($includeFields)) {
            $apiParams['include_fields'] = $includeFields;
        }

        if (!is_null($maxFacetValues)) {
            $apiParams['max_facet_values'] = $maxFacetValues;
        }

        if (!is_null($numTypos)) {
            $apiParams['num_typos'] = $numTypos;
        }

        if (!is_null($page)) {
            $apiParams['page'] = $page;
        }

        if (!is_null($perPage)) {
            $apiParams['per_page'] = $perPage;
        }

        if (!is_null($prefix)) {
            $apiParams['prefix'] = $prefix;
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
     * Fetch a single document by id. The document shape is the collection's own
     * schema, so it is described as a free-form object. Requires the
     * `documents:get` action.
     *
     * @param Collection $collection
     * @param string $documentId
     * @throws RevenexxException
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
     * Idempotent, and bounded by the tenant's own configuration: it can add
     * no field for an attribute the tenant has not marked `is_filterable`,
     * and drops only fields whose attribute it has itself un-marked. A run
     * that changes nothing makes zero calls to Typesense.
     * 
     * Body (optional) narrows the sweep to one app:
     * 
     *     {"vendor": "revenexx", "app": "products"}
     * 
     * Omitted, every app the tenant has installed is swept. Apps outside the
     * facet-sync allowlist are included in the response with
     * `skipped: app_not_enabled` rather than silently dropped — a caller
     * asking for an app that cannot have facets deserves to be told so.
     * 
     * The response shape below is DECLARED rather than inferred. Its entries
     * are built by spreading AttributeFacetSyncer::syncForCollection()'s
     * summary, and the generator cannot see through an array spread: left to
     * itself it emits an unnamed property and a null in `required`, which
     * Spectral rejects as `"1" property must be string`.
     * AppController::resyncFacets() carries the same declaration for the same
     * reason — keep both in step with syncForApp()'s return type.
     *
     * @param ?string $app
     * @param ?string $vendor
     * @throws RevenexxException
     * @return array
     */
    public function gatewayFacetResync(?string $app = null, ?string $vendor = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/search/facets/resync'
        );

        $apiParams = [];

        if (!is_null($app)) {
            $apiParams['app'] = $app;
        }

        if (!is_null($vendor)) {
            $apiParams['vendor'] = $vendor;
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
     * Run several searches in one round trip — the endpoint the typesense-js
     * `multiSearch` helper and the InstantSearch adapter use for every query. On
     * the gateway-trust path each entry must name a collection the tenant owns.
     * With a `revx_` key `collection_name` is optional and is forced to the key's
     * own collection. Requires the `documents:search` action.
     *
     * @param array $searches
     * @throws RevenexxException
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