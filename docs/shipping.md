# Shipping Service


```http request
GET https://api.revenexx.com/v1/shipping/methods
```


```http request
POST https://api.revenexx.com/v1/shipping/methods
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| carrier | string | Carrier anchor for the upcoming carrier connect (dynamic rates, tracking links). |  |
| code | string | Stable method code, unique per tenant (e.g. standard, express). |  |
| countries | array | Allowed ISO 3166-1 alpha-2 codes; null or empty = worldwide. |  |
| currency | string | ISO 4217 code (default EUR). |  |
| description | string |  |  |
| enabled | boolean | Only enabled methods appear in rate responses (default false). |  |
| eta_days_max | integer | Delivery-time estimate for the checkout (days, upper bound). |  |
| eta_days_min | integer | Delivery-time estimate for the checkout (days, lower bound). |  |
| free_above | number | Free shipping at or above this order value — wins over every pricing model. |  |
| labels | object | Localized display names keyed by locale (e.g. {de, en}). |  |
| matrix_attribute | string | Attribute name for matrix_basis 'attribute'. |  |
| matrix_basis | string | The measure a matrix method prices over; 'attribute' reads matrix_attribute from the rate request. |  |
| metadata | object | Free-form metadata. |  |
| name | string | Display name. |  |
| position | integer | Sort order in the checkout (default 0). |  |
| price | number | The fixed price (default 0) — ignored for 'free' and 'matrix'. |  |
| pricing_type | string | Pricing model (default 'fixed'): one price, no price, or tiered over a measure. |  |


```http request
POST https://api.revenexx.com/v1/shipping/methods/defaults
```


```http request
DELETE https://api.revenexx.com/v1/shipping/methods/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
GET https://api.revenexx.com/v1/shipping/methods/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
PUT https://api.revenexx.com/v1/shipping/methods/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |
| carrier | string | Carrier anchor for the upcoming carrier connect (dynamic rates, tracking links). |  |
| code | string | Stable method code, unique per tenant (e.g. standard, express). |  |
| countries | array | Allowed ISO 3166-1 alpha-2 codes; null or empty = worldwide. |  |
| currency | string | ISO 4217 code (default EUR). |  |
| description | string |  |  |
| enabled | boolean | Only enabled methods appear in rate responses (default false). |  |
| eta_days_max | integer | Delivery-time estimate for the checkout (days, upper bound). |  |
| eta_days_min | integer | Delivery-time estimate for the checkout (days, lower bound). |  |
| free_above | number | Free shipping at or above this order value — wins over every pricing model. |  |
| labels | object | Localized display names keyed by locale (e.g. {de, en}). |  |
| matrix_attribute | string | Attribute name for matrix_basis 'attribute'. |  |
| matrix_basis | string | The measure a matrix method prices over; 'attribute' reads matrix_attribute from the rate request. |  |
| metadata | object | Free-form metadata. |  |
| name | string | Display name. |  |
| position | integer | Sort order in the checkout (default 0). |  |
| price | number | The fixed price (default 0) — ignored for 'free' and 'matrix'. |  |
| pricing_type | string | Pricing model (default 'fixed'): one price, no price, or tiered over a measure. |  |


```http request
GET https://api.revenexx.com/v1/shipping/methods/{method_id}/tiers
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| method_id | string | **Required**  |  |


```http request
POST https://api.revenexx.com/v1/shipping/methods/{method_id}/tiers
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| method_id | string | **Required**  |  |
| from_value | number | Tier threshold (default 0) — the tier with the highest from_value at or below the measured value wins. |  |
| position | integer | Sort order (default 0; bulk replace derives it from the array index). |  |
| price | number | Price of this tier (default 0). |  |


```http request
PUT https://api.revenexx.com/v1/shipping/methods/{method_id}/tiers
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| method_id | string | **Required**  |  |
| tiers | array | The complete new tier set (set semantics) — positions are derived from the array order. |  |


```http request
DELETE https://api.revenexx.com/v1/shipping/methods/{method_id}/tiers/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| method_id | string | **Required**  |  |
| id | string | **Required**  |  |


```http request
GET https://api.revenexx.com/v1/shipping/methods/{method_id}/tiers/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| method_id | string | **Required**  |  |
| id | string | **Required**  |  |


```http request
PUT https://api.revenexx.com/v1/shipping/methods/{method_id}/tiers/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| method_id | string | **Required**  |  |
| id | string | **Required**  |  |
| from_value | number | Tier threshold (default 0) — the tier with the highest from_value at or below the measured value wins. |  |
| position | integer | Sort order (default 0; bulk replace derives it from the array index). |  |
| price | number | Price of this tier (default 0). |  |


```http request
POST https://api.revenexx.com/v1/shipping/rates
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| attributes | object | Measure values for attribute matrices, keyed by attribute name. |  |
| country | string | Destination ISO 3166-1 alpha-2 code — checked against method country restrictions. |  |
| currency | string | Echoed into the rates (default 'EUR'). |  |
| market_id | string | Buyer market for tax resolution (else inferred from country, else first market). |  |
| order_value | number | Order value (default 0) — drives free-above thresholds and order_value matrices. |  |
| quantity | number | Total quantity — measure for quantity matrices. |  |
| weight | number | Total weight — measure for weight matrices. |  |

