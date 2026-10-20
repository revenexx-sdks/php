# Search Service


```http request
GET https://api.revenexx.com/v1/search/collections
```

** The collections the tenant's installed apps have provisioned. Available on the API-gateway-trust path only — a `revx_` key authorises a single collection, so discovery is a gateway concern and a key-authenticated caller gets 403. **


```http request
GET https://api.revenexx.com/v1/search/collections/{collection}
```

** Returns the Typesense collection definition (fields, defaults, document count). Requires the `collections:read` action. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| collection | string | **Required** A collection the tenant owns (see `GET /api/v1/collections`). Resolved to its namespaced Typesense name server-side; a collection the tenant does not own is a 404. |  |


```http request
GET https://api.revenexx.com/v1/search/collections/{collection}/documents/search
```

** Full-text search within one collection. Typesense search parameters are passed through verbatim as the query string, so parameters not listed here still reach Typesense. Requires the `documents:search` action. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| collection | string | **Required** A collection the tenant owns (see `GET /api/v1/collections`). Resolved to its namespaced Typesense name server-side; a collection the tenant does not own is a 404. |  |
| q | string | Query text. Use `*` to match everything. |  |
| query_by | string | Comma-separated fields to search, in weight order. |  |
| filter_by | string | Filter expression, e.g. `in_stock:=true && price:<100`. ANDed with the tenant filter the proxy injects. |  |
| sort_by | string | Sort expression, e.g. `price:desc`. |  |
| facet_by | string | Comma-separated fields to facet on. |  |
| max_facet_values | integer | Facet values to return per field. |  |
| group_by | string | Comma-separated fields to group results by. |  |
| include_fields | string | Comma-separated document fields to return. |  |
| exclude_fields | string | Comma-separated document fields to omit. |  |
| highlight_full_fields | string | Comma-separated fields to highlight in full. |  |
| num_typos | integer | Typos tolerated per query token. |  |
| prefix | string | Whether the last token is a prefix; per-field when comma-separated. |  |
| page | integer | 1-based page number. |  |
| per_page | integer | Hits per page. |  |


```http request
POST https://api.revenexx.com/v1/search/collections/{collection}/documents/search
```

** Full-text search within one collection, with the Typesense search parameters in the body. Requires the `documents:search` action. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| collection | string | **Required** A collection the tenant owns (see `GET /api/v1/collections`). Resolved to its namespaced Typesense name server-side; a collection the tenant does not own is a 404. |  |
| exclude_fields | string | Comma-separated document fields to omit. |  |
| facet_by | string | Comma-separated fields to facet on. |  |
| filter_by | string | Filter expression, e.g. `in_stock:=true && price:<100`. ANDed with the tenant filter the proxy injects. |  |
| group_by | string | Comma-separated fields to group results by. |  |
| highlight_full_fields | string | Comma-separated fields to highlight in full. |  |
| include_fields | string | Comma-separated document fields to return. |  |
| max_facet_values | integer | Facet values to return per field. |  |
| num_typos | integer | Typos tolerated per query token. |  |
| page | integer | 1-based page number. |  |
| per_page | integer | Hits per page. |  |
| prefix | string | Whether the last token is a prefix; per-field when comma-separated. |  |
| q | string | Query text. Use `*` to match everything. |  |
| query_by | string | Comma-separated fields to search, in weight order. |  |
| sort_by | string | Sort expression, e.g. `price:desc`. |  |


```http request
GET https://api.revenexx.com/v1/search/collections/{collection}/documents/{documentId}
```

** Fetch a single document by id. The document shape is the collection's own schema, so it is described as a free-form object. Requires the `documents:get` action. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| collection | string | **Required** A collection the tenant owns (see `GET /api/v1/collections`). Resolved to its namespaced Typesense name server-side; a collection the tenant does not own is a 404. |  |
| documentId | string | **Required** The document's `id` within the collection. |  |


```http request
POST https://api.revenexx.com/v1/search/events
```

** A click on a result, an add-to-cart or a purchase, tied to the search it came from by `query_id` (from `/api/v1/query` or `/api/v1/suggest`). The search analytics count it per language and search type; with an events key configured the proxy also writes it to the collection's Typesense event log.

`user_token` is a pseudonymous id the storefront chooses (a random value kept in a cookie, never an e-mail or a customer number); it is stored only salted and hashed. The locale comes from `X-Revenexx-Locale`.

Answers 202 at once: recording happens in the background, and an event is dropped rather than slowing the shop down. Requires the `documents:search` action; a `revx_` key may report events for its own collection only. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| collection | string | The collection of the document — `categories` for a category tile. |  |
| doc_id | string | The document's `id`. Required except for a purchase. |  |
| position | integer | 1-based position of the document in the result list. |  |
| q | string |  |  |
| query_id | string | The `query_id` of the search the event came from. Required for a click. |  |
| type | string |  |  |
| user_token | string | Pseudonymous shopper id; stored salted and hashed. |  |


```http request
POST https://api.revenexx.com/v1/search/facets/resync
```

** Idempotent, and bounded by the tenant's own configuration: it can add
no field for an attribute the tenant has not marked `is_filterable`,
and drops only fields whose attribute it has itself un-marked. A run
that changes nothing makes zero calls to Typesense.

Body (optional) narrows the sweep to one app:

    {"vendor": "revenexx", "app": "products"}

Omitted, every app the tenant has installed is swept. Apps outside the
facet-sync allowlist are included in the response with
`skipped: app_not_enabled` rather than silently dropped — a caller
asking for an app that cannot have facets deserves to be told so.

The response shape below is DECLARED rather than inferred. Its entries
are built by spreading AttributeFacetSyncer::syncForCollection()'s
summary, and the generator cannot see through an array spread: left to
itself it emits an unnamed property and a null in `required`, which
Spectral rejects as `"1" property must be string`.
AppController::resyncFacets() carries the same declaration for the same
reason — keep both in step with syncForApp()'s return type. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| app | string |  |  |
| vendor | string |  |  |


```http request
POST https://api.revenexx.com/v1/search/multi_search
```

** Run several searches in one round trip — the endpoint the typesense-js `multiSearch` helper and the InstantSearch adapter use for every query. On the gateway-trust path each entry must name a collection the tenant owns in `collection`. With a `revx_` key it is optional and is forced to the key's own collection. Requires the `documents:search` action.

Use this instead of the single-collection search when the query outgrows a URL: Typesense caps a GET query string at 4000 characters, which a long `facet_by` reaches sooner than expected. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| searches | array | The searches to run, in order. Must not be empty. |  |


```http request
POST https://api.revenexx.com/v1/search/query
```

** Search one collection by intent rather than by Typesense parameters. The caller says what to look for (`q`, `filters`, `sort`, paging) and which `view` it is rendering; how to search comes from the collection's preset for that view (`<typesense_collection>__<view>`, managed through the admin API) or, without one, from a built-in default per view.

Always applied and not overridable: the tenant scope, `enabled:=true` when the collection has a boolean `enabled` field, the channel from `X-Revenexx-Channel` when the collection has `channels`, and the locale from `X-Revenexx-Locale` when the collection has `locale` (both the full and the bare code, e.g. `de-DE` and `de`).

Relevance parameters in the body (`query_by`, `sort_by`, `preset`, `facet_by`, …) are ignored, as is any other unknown key. Filters on fields the schema does not have, or cannot filter on, are dropped and listed in `ignored_filters`; a sort on a field without `sort: true` is dropped and echoed in `ignored_sort`.

Answers 404 while the proxy runs without its metadata key, which callers should treat like a missing route and fall back to `multi_search`. Requires the `documents:search` action; a `revx_` key may query its own collection only. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| collection | string | A collection the tenant owns, by its public name. |  |
| filters | object | Filters, ANDed across fields. A list matches any of its values; a scalar matches exactly; `{min, max}` is a range on a numeric field, either bound optional. Field names must exist in the collection schema and be filterable. |  |
| page | integer |  | 1 |
| per_page | integer | Hits per page. Defaults to the preset's, else the view's built-in default (20 for most views). |  |
| q | string | Query text. Empty or `*` matches everything. | * |
| sort | string | `relevance` (the preset decides), or `<field>_asc` / `<field>_desc` for a field with `sort: true` in the schema. | relevance |
| view | string | What the result is for — `search`, `category`, `suggest`, `brand`, `listing`, or any other name a preset exists for. Selects the preset `<typesense_collection>__<view>`; without one, the built-in default of the view (a view without its own default behaves like `search`). | search |


```http request
POST https://api.revenexx.com/v1/search/suggest
```

** One request for a quick search: products and the category, manufacturer and page tiles beside them. Every collection is searched with its `suggest` preset or, without one, the built-in suggest default (prefix matching, few hits), under the same mandatory filters as `/api/v1/query` (tenant, locale, channel, `enabled`).

Without `collections` the proxy asks `products`, `categories`, `manufacturers` and `pages`, and leaves out those the tenant does not have; groups come back in that order. A collection whose search fails is left out rather than failing the request. Storefront actions (a redirect for the query) come from the first group that has any.

Send the `query_id` back with the events the result leads to (`POST /api/v1/events`). Answers 404 while the proxy runs without its metadata key. Requires the `documents:search` action; a `revx_` key asks its own collection only. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| collections | array | Collections to ask, in the order the groups should come back. Default: products, categories, manufacturers, pages. |  |
| per_page | integer | Hits per collection. Defaults to the preset's, else the built-in suggest default. |  |
| q | string | What the shopper typed. |  |

