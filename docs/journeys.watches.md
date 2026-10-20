# JourneysWatches Service


```http request
GET https://api.revenexx.com/v1/journeys/stock-watches
```

** Filter `?product_id=&state=waiting`. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| limit | integer | Page size (default 50, max 200). |  |
| offset | integer | Row offset for pagination (default 0). |  |
| order | string | Sort by one column: 'column' | 'column.asc' | 'column.desc'. |  |
| id | string | Keep only rows whose `id` equals this. |  |
| contact_id | string | Keep only rows whose `contact_id` equals this. |  |
| email | string | Keep only rows whose `email` equals this. |  |
| product_id | string | Keep only rows whose `product_id` equals this. |  |
| sku | string | Keep only rows whose `sku` equals this. |  |
| market | string | Keep only rows whose `market` equals this. |  |
| state | string | Keep only rows whose `state` equals this. |  |
| source | string | Keep only rows whose `source` equals this. |  |


```http request
POST https://api.revenexx.com/v1/journeys/stock-watches
```

** What the storefront posts from a sold-out product page. A person already waiting for the product gets the existing request back. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| contact_id | string |  |  |
| email | string |  |  |
| market | string |  |  |
| product_id | string |  |  |
| sku | string |  |  |
| source | string |  |  |


```http request
DELETE https://api.revenexx.com/v1/journeys/stock-watches/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |


```http request
GET https://api.revenexx.com/v1/journeys/stock-watches/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |

