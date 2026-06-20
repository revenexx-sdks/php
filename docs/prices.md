# Prices Service


```http request
GET https://api.revenexx.com/v1/prices/lists
```


```http request
POST https://api.revenexx.com/v1/prices/lists
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| channel_id | string | Scope: only this channel. |  |
| code | string | Unique list code per tenant. |  |
| contact_id | string | Scope: only this contact — beats every other scope. |  |
| currency | string | ISO 4217 code (default EUR) — resolution only considers lists matching the requested currency. |  |
| description | string |  |  |
| is_default | boolean | Default lists resolve last within their group. |  |
| labels | object | Localised names ({de, en, …}). |  |
| market_id | string | Scope: only this market. |  |
| metadata | object | Free-form metadata. |  |
| name | string |  |  |
| organization_id | string | Scope: only this organization. |  |
| priority | integer | Tie-breaker within a specificity group (higher wins, default 0). |  |
| status | string | Default 'active' — only active lists resolve. |  |
| tax_included | boolean | Gross (true) or net (false, default) prices. |  |
| valid_from | string | Validity window start. |  |
| valid_until | string | Validity window end. |  |


```http request
POST https://api.revenexx.com/v1/prices/lists/defaults
```


```http request
DELETE https://api.revenexx.com/v1/prices/lists/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
GET https://api.revenexx.com/v1/prices/lists/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
PUT https://api.revenexx.com/v1/prices/lists/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |
| channel_id | string | Scope: only this channel. |  |
| code | string | Unique list code per tenant. |  |
| contact_id | string | Scope: only this contact — beats every other scope. |  |
| currency | string | ISO 4217 code (default EUR) — resolution only considers lists matching the requested currency. |  |
| description | string |  |  |
| is_default | boolean | Default lists resolve last within their group. |  |
| labels | object | Localised names ({de, en, …}). |  |
| market_id | string | Scope: only this market. |  |
| metadata | object | Free-form metadata. |  |
| name | string |  |  |
| organization_id | string | Scope: only this organization. |  |
| priority | integer | Tie-breaker within a specificity group (higher wins, default 0). |  |
| status | string | Default 'active' — only active lists resolve. |  |
| tax_included | boolean | Gross (true) or net (false, default) prices. |  |
| valid_from | string | Validity window start. |  |
| valid_until | string | Validity window end. |  |


```http request
GET https://api.revenexx.com/v1/prices/lists/{list_id}/entries
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| list_id | string | **Required**  |  |


```http request
POST https://api.revenexx.com/v1/prices/lists/{list_id}/entries
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| list_id | string | **Required**  |  |
| metadata | object | Free-form metadata. |  |
| price_type | string | Default 'standard'; 'on_request' is the explicit no-price marker — it stops resolution and answers "price on request". |  |
| product_id | string | Priced product. |  |
| quantity_min | number | Tier threshold (Staffelpreis): this price applies from this quantity (default 1). |  |
| sku | string | Priced SKU (alternative to product_id). |  |
| unit | string |  |  |
| unit_price | number | Per-unit price (default 0). |  |
| valid_from | string | Per-entry validity start (promo prices). |  |
| valid_until | string | Per-entry validity end. |  |


```http request
PUT https://api.revenexx.com/v1/prices/lists/{list_id}/entries
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| list_id | string | **Required**  |  |
| entries | array | The complete new entry set (set semantics). |  |


```http request
POST https://api.revenexx.com/v1/prices/lists/{list_id}/entries/bulk
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| list_id | string | **Required**  |  |
| entries | array | The complete new entry set (set semantics). |  |


```http request
DELETE https://api.revenexx.com/v1/prices/lists/{list_id}/entries/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| list_id | string | **Required**  |  |
| id | string | **Required**  |  |


```http request
GET https://api.revenexx.com/v1/prices/lists/{list_id}/entries/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| list_id | string | **Required**  |  |
| id | string | **Required**  |  |


```http request
PUT https://api.revenexx.com/v1/prices/lists/{list_id}/entries/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| list_id | string | **Required**  |  |
| id | string | **Required**  |  |
| metadata | object | Free-form metadata. |  |
| price_type | string | Default 'standard'; 'on_request' is the explicit no-price marker — it stops resolution and answers "price on request". |  |
| product_id | string | Priced product. |  |
| quantity_min | number | Tier threshold (Staffelpreis): this price applies from this quantity (default 1). |  |
| sku | string | Priced SKU (alternative to product_id). |  |
| unit | string |  |  |
| unit_price | number | Per-unit price (default 0). |  |
| valid_from | string | Per-entry validity start (promo prices). |  |
| valid_until | string | Per-entry validity end. |  |


```http request
POST https://api.revenexx.com/v1/prices/resolve
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| at | string | Point in time for validity windows (ISO 8601 timestamp, default now). |  |
| channel_id | string | Buyer context: channel. |  |
| contact_id | string | Buyer context: contact — most specific scope. |  |
| currency | string | ISO 4217 code (default EUR) — only lists in this currency resolve. |  |
| items | array | Items to price (at most 200 per call). |  |
| market_id | string | Buyer context: market. |  |
| organization_id | string | Buyer context: organization. |  |

