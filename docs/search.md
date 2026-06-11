# Search Service


```http request
GET https://api.revenexx.com/v1/search/collections
```

** The collections the tenant&#039;s installed apps have provisioned. **


```http request
GET https://api.revenexx.com/v1/search/collections/{collection}/documents/search
```

** Full-text search within one collection using Typesense query parameters as the query string. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| collection | string | **Required** Collection key (one the tenant has installed). |  |
| q | string | Query text. Use `*` to match all. |  |
| query_by | string | Comma-separated fields to search. |  |
| filter_by | string | Filter expression. |  |
| sort_by | string | Sort expression. |  |
| page | integer | 1-based page. |  |
| per_page | integer | Hits per page (max 250). |  |


```http request
POST https://api.revenexx.com/v1/search/collections/{collection}/documents/search
```

** Full-text search within one collection. The body holds Typesense search parameters. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| collection | string | **Required** Collection key (one the tenant has installed). |  |
| facet_by | string | Comma-separated fields to facet on. |  |
| filter_by | string | Filter expression, e.g. `in_stock:=true`. |  |
| page | integer |  |  |
| per_page | integer |  |  |
| q | string | Query text. Use `*` to match all. |  |
| query_by | string | Comma-separated fields to search. |  |
| sort_by | string | Sort expression, e.g. `price:desc`. |  |


```http request
GET https://api.revenexx.com/v1/search/collections/{collection}/documents/{documentId}
```

** Fetch a single document by id from a collection the tenant has installed. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| collection | string | **Required** Collection key (one the tenant has installed). |  |
| documentId | string | **Required** Document id within the collection. |  |


```http request
POST https://api.revenexx.com/v1/search/multi_search
```

** Run several searches in one request (the InstantSearch adapter uses this). Each entry names its collection. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| searches | array |  |  |

