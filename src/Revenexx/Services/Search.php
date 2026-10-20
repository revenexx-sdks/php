<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;
use Revenexx\Enums\Collection as CollectionEnum;
use Revenexx\Enums\SearchEventsType;

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
     * @param CollectionEnum $collection
     * @throws RevenexxException
     * @return array
     */
    public function searchGetCollection(CollectionEnum $collection): array
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
     * @param CollectionEnum $collection
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
    public function searchSearchDocumentsGet(CollectionEnum $collection, ?string $q = null, ?string $queryBy = null, ?string $filterBy = null, ?string $sortBy = null, ?string $facetBy = null, ?int $maxFacetValues = null, ?string $groupBy = null, ?string $includeFields = null, ?string $excludeFields = null, ?string $highlightFullFields = null, ?int $numTypos = null, ?string $prefix = null, ?int $page = null, ?int $perPage = null): array
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
     * @param CollectionEnum $collection
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
    public function searchSearchDocuments(CollectionEnum $collection, ?string $excludeFields = null, ?string $facetBy = null, ?string $filterBy = null, ?string $groupBy = null, ?string $highlightFullFields = null, ?string $includeFields = null, ?int $maxFacetValues = null, ?int $numTypos = null, ?int $page = null, ?int $perPage = null, ?string $prefix = null, ?string $q = null, ?string $queryBy = null, ?string $sortBy = null): array
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
     * @param CollectionEnum $collection
     * @param string $documentId
     * @throws RevenexxException
     * @return array
     */
    public function searchGetDocument(CollectionEnum $collection, string $documentId): array
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
     * A click on a result, an add-to-cart or a purchase, tied to the search it
     * came from by `query_id` (from `/api/v1/query` or `/api/v1/suggest`). The
     * search analytics count it per language and search type; with an events key
     * configured the proxy also writes it to the collection's Typesense event
     * log.
     * 
     * `user_token` is a pseudonymous id the storefront chooses (a random value
     * kept in a cookie, never an e-mail or a customer number); it is stored only
     * salted and hashed. The locale comes from `X-Revenexx-Locale`.
     * 
     * Answers 202 at once: recording happens in the background, and an event is
     * dropped rather than slowing the shop down. Requires the `documents:search`
     * action; a `revx_` key may report events for its own collection only.
     *
     * @param string $collection
     * @param SearchEventsType $type
     * @param ?string $docId
     * @param ?int $position
     * @param ?string $q
     * @param ?string $queryId
     * @param ?string $userToken
     * @throws RevenexxException
     * @return array
     */
    public function searchEvents(string $collection, SearchEventsType $type, ?string $docId = null, ?int $position = null, ?string $q = null, ?string $queryId = null, ?string $userToken = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/search/events'
        );

        $apiParams = [];
        $apiParams['collection'] = $collection;
        $apiParams['type'] = $type;

        if (!is_null($docId)) {
            $apiParams['doc_id'] = $docId;
        }

        if (!is_null($position)) {
            $apiParams['position'] = $position;
        }

        if (!is_null($q)) {
            $apiParams['q'] = $q;
        }

        if (!is_null($queryId)) {
            $apiParams['query_id'] = $queryId;
        }

        if (!is_null($userToken)) {
            $apiParams['user_token'] = $userToken;
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
     * the gateway-trust path each entry must name a collection the tenant owns in
     * `collection`. With a `revx_` key it is optional and is forced to the key's
     * own collection. Requires the `documents:search` action.
     * 
     * Use this instead of the single-collection search when the query outgrows a
     * URL: Typesense caps a GET query string at 4000 characters, which a long
     * `facet_by` reaches sooner than expected.
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

    /**
     * Search one collection by intent rather than by Typesense parameters. The
     * caller says what to look for (`q`, `filters`, `sort`, paging) and which
     * `view` it is rendering; how to search comes from the collection's preset
     * for that view (`<typesense_collection>__<view>`, managed through the admin
     * API) or, without one, from a built-in default per view.
     * 
     * Always applied and not overridable: the tenant scope, `enabled:=true` when
     * the collection has a boolean `enabled` field, the channel from
     * `X-Revenexx-Channel` when the collection has `channels`, and the locale
     * from `X-Revenexx-Locale` when the collection has `locale` (both the full
     * and the bare code, e.g. `de-DE` and `de`).
     * 
     * Relevance parameters in the body (`query_by`, `sort_by`, `preset`,
     * `facet_by`, …) are ignored, as is any other unknown key. Filters on
     * fields the schema does not have, or cannot filter on, are dropped and
     * listed in `ignored_filters`; a sort on a field without `sort: true` is
     * dropped and echoed in `ignored_sort`.
     * 
     * Answers 404 while the proxy runs without its metadata key, which callers
     * should treat like a missing route and fall back to `multi_search`. Requires
     * the `documents:search` action; a `revx_` key may query its own collection
     * only.
     *
     * @param string $collection
     * @param ?array $filters
     * @param ?int $page
     * @param ?int $perPage
     * @param ?string $q
     * @param ?string $sort
     * @param ?string $view
     * @throws RevenexxException
     * @return array
     */
    public function searchQuery(string $collection, ?array $filters = null, ?int $page = null, ?int $perPage = null, ?string $q = null, ?string $sort = null, ?string $view = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/search/query'
        );

        $apiParams = [];
        $apiParams['collection'] = $collection;

        if (!is_null($filters)) {
            $apiParams['filters'] = $filters;
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

        if (!is_null($sort)) {
            $apiParams['sort'] = $sort;
        }

        if (!is_null($view)) {
            $apiParams['view'] = $view;
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
     * One request for a quick search: products and the category, manufacturer and
     * page tiles beside them. Every collection is searched with its `suggest`
     * preset or, without one, the built-in suggest default (prefix matching, few
     * hits), under the same mandatory filters as `/api/v1/query` (tenant, locale,
     * channel, `enabled`).
     * 
     * Without `collections` the proxy asks `products`, `categories`,
     * `manufacturers` and `pages`, and leaves out those the tenant does not have;
     * groups come back in that order. A collection whose search fails is left out
     * rather than failing the request. Storefront actions (a redirect for the
     * query) come from the first group that has any.
     * 
     * Send the `query_id` back with the events the result leads to (`POST
     * /api/v1/events`). Answers 404 while the proxy runs without its metadata
     * key. Requires the `documents:search` action; a `revx_` key asks its own
     * collection only.
     *
     * @param string $q
     * @param ?array $collections
     * @param ?int $perPage
     * @throws RevenexxException
     * @return array
     */
    public function searchSuggest(string $q, ?array $collections = null, ?int $perPage = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/search/suggest'
        );

        $apiParams = [];
        $apiParams['q'] = $q;

        if (!is_null($collections)) {
            $apiParams['collections'] = $collections;
        }

        if (!is_null($perPage)) {
            $apiParams['per_page'] = $perPage;
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