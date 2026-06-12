# Inventories Service


```http request
POST https://api.revenexx.com/v1/inventories/adjust
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| items | array | The corrections — quantities are SIGNED deltas (at most 200). |  |
| location_code | string | Adjusted location (default 'main'). |  |
| reason | string | Mandatory audit reason — every adjustment is a ledger row. |  |


```http request
POST https://api.revenexx.com/v1/inventories/availability
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| items | array | The items to check (batch, at most 200). |  |
| location_code | string | Restrict the check to one location (default: all enabled locations). |  |


```http request
POST https://api.revenexx.com/v1/inventories/commit
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| order_ref | string | The order whose active reservations are committed (shipment). |  |


```http request
GET https://api.revenexx.com/v1/inventories/locations
```


```http request
POST https://api.revenexx.com/v1/inventories/locations
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| address | object |  |  |
| code | string | Unique location code (per tenant). |  |
| enabled | boolean | Disabled locations are skipped by availability and reserve (default true). |  |
| labels | object | Localised display names ({de, en, …}). |  |
| metadata | object | Free-form metadata. |  |
| name | string |  |  |
| priority | integer | Sourcing order — lower wins (default 0). |  |
| type | string | Default 'warehouse'. |  |


```http request
POST https://api.revenexx.com/v1/inventories/locations/defaults
```


```http request
DELETE https://api.revenexx.com/v1/inventories/locations/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
GET https://api.revenexx.com/v1/inventories/locations/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
PUT https://api.revenexx.com/v1/inventories/locations/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |
| address | object |  |  |
| code | string | Unique location code (per tenant). |  |
| enabled | boolean | Disabled locations are skipped by availability and reserve (default true). |  |
| labels | object | Localised display names ({de, en, …}). |  |
| metadata | object | Free-form metadata. |  |
| name | string |  |  |
| priority | integer | Sourcing order — lower wins (default 0). |  |
| type | string | Default 'warehouse'. |  |


```http request
GET https://api.revenexx.com/v1/inventories/movements
```


```http request
GET https://api.revenexx.com/v1/inventories/movements/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
POST https://api.revenexx.com/v1/inventories/receive
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| items | array | The inbound items (at most 200). |  |
| location_code | string | Receiving location (default 'main'). |  |
| reason | string | Ledger note (e.g. delivery note number). |  |


```http request
POST https://api.revenexx.com/v1/inventories/release
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| order_ref | string | The order whose active reservations are released. |  |


```http request
GET https://api.revenexx.com/v1/inventories/reservations
```


```http request
GET https://api.revenexx.com/v1/inventories/reservations/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
POST https://api.revenexx.com/v1/inventories/reserve
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| expires_at | string | Optional reservation expiry. |  |
| items | array | The items to reserve — all-or-nothing (at most 200). |  |
| order_ref | string | The order this reservation belongs to. |  |


```http request
POST https://api.revenexx.com/v1/inventories/restock
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| items | array | The returned items (at most 200). |  |
| location_code | string | Restocking location (default 'main'). |  |
| order_ref | string | Originating order (ledger reference). |  |
| reason | string | Ledger note (e.g. return reason). |  |


```http request
GET https://api.revenexx.com/v1/inventories/stock
```


```http request
POST https://api.revenexx.com/v1/inventories/stock
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| location_id | string | Owning location. |  |
| metadata | object | Free-form metadata. |  |
| on_hand | number | Physical stock (default 0). |  |
| product_id | string | Tracked product. |  |
| reorder_point | number |  |  |
| reserved | number | Reserved stock (default 0) — normally managed by reserve/release/commit. |  |
| sku | string | Tracked SKU (alternative to product_id). |  |


```http request
DELETE https://api.revenexx.com/v1/inventories/stock/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
GET https://api.revenexx.com/v1/inventories/stock/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
PUT https://api.revenexx.com/v1/inventories/stock/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |
| location_id | string | Owning location. |  |
| metadata | object | Free-form metadata. |  |
| on_hand | number | Physical stock (default 0). |  |
| product_id | string | Tracked product. |  |
| reorder_point | number |  |  |
| reserved | number | Reserved stock (default 0) — normally managed by reserve/release/commit. |  |
| sku | string | Tracked SKU (alternative to product_id). |  |

