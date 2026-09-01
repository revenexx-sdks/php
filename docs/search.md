# Search Service


```http request
GET https://api.revenexx.com/v1/search/collections
```

** The collections the tenant&#039;s installed apps have provisioned. Available on the API-gateway-trust path only — a `revx_` key authorises a single collection, so discovery is a gateway concern and a key-authenticated caller gets 403. **


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

** Fetch a single document by id. The document shape is the collection&#039;s own schema, so it is described as a free-form object. Requires the `documents:get` action. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| collection | string | **Required** A collection the tenant owns (see `GET /api/v1/collections`). Resolved to its namespaced Typesense name server-side; a collection the tenant does not own is a 404. |  |
| documentId | string | **Required** The document's `id` within the collection. |  |


```http request
POST https://api.revenexx.com/v1/search/facets/resync
```

** Idempotent, and bounded by the tenant&#039;s own configuration: it can add
no field for an attribute the tenant has not marked `is_filterable`,
and drops only fields whose attribute it has itself un-marked. A run
that changes nothing makes zero calls to Typesense.

Body (optional) narrows the sweep to one app:

    {&quot;vendor&quot;: &quot;revenexx&quot;, &quot;app&quot;: &quot;products&quot;}

Omitted, every app the tenant has installed is swept. Apps outside the
facet-sync allowlist are included in the response with
`skipped: app_not_enabled` rather than silently dropped — a caller
asking for an app that cannot have facets deserves to be told so.

The response shape below is DECLARED rather than inferred. Its entries
are built by spreading AttributeFacetSyncer::syncForCollection()&#039;s
summary, and the generator cannot see through an array spread: left to
itself it emits an unnamed property and a null in `required`, which
Spectral rejects as `&quot;1&quot; property must be string`.
AppController::resyncFacets() carries the same declaration for the same
reason — keep both in step with syncForApp()&#039;s return type. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| app | string |  |  |
| vendor | string |  |  |


```http request
POST https://api.revenexx.com/v1/search/multi_search
```

** Run several searches in one round trip — the endpoint the typesense-js `multiSearch` helper and the InstantSearch adapter use for every query. On the gateway-trust path each entry must name a collection the tenant owns. With a `revx_` key `collection_name` is optional and is forced to the key&#039;s own collection. Requires the `documents:search` action. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| searches | array | The searches to run, in order. Must not be empty. |  |

