# Carts Service


```http request
GET https://api.revenexx.com/v1/carts
```


```http request
POST https://api.revenexx.com/v1/carts
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| channel_id | string |  |  |
| contact_id | string | Owning customer contact. |  |
| currency | string | ISO 4217 code (default EUR). |  |
| is_current | boolean | Make this THE current cart of its owner. |  |
| market_id | string |  |  |
| metadata | object | Free-form metadata. |  |
| name | string | Display name (default 'Cart'). |  |
| session_key | string | Owning guest session. |  |


```http request
POST https://api.revenexx.com/v1/carts/claim
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| contact_id | string | Contact taking ownership. |  |
| session_key | string | Guest session whose active carts are handed over. |  |
| target_cart_id | string | Merge the session carts into this cart instead of adopting them. |  |


```http request
POST https://api.revenexx.com/v1/carts/import
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| contact_id | string | Owner of a newly created cart. |  |
| csv | string | Raw CSV content (alternative to payload for csv profiles). |  |
| name | string | Name for a newly created cart. |  |
| payload | object | The import payload: '{cart, items}' object, or a raw JSON/CSV string in the profile's format. |  |
| profile_id | string | Import profile to run; ad-hoc import when omitted. |  |
| session_key | string | Guest owner of a newly created cart. |  |
| target_cart_id | string | Existing active cart to import into. |  |


```http request
GET https://api.revenexx.com/v1/carts/io/profiles
```


```http request
POST https://api.revenexx.com/v1/carts/io/profiles
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| apply_mode | string | Default 'insert'. |  |
| direction | string |  |  |
| entity | string | Default 'carts'. |  |
| format | string | Default 'json'. |  |
| is_template | boolean |  |  |
| mapping | object | Column mapping (Baseline-IO-compatible). |  |
| name | string |  |  |
| options | object |  |  |


```http request
POST https://api.revenexx.com/v1/carts/io/profiles/defaults
```


```http request
DELETE https://api.revenexx.com/v1/carts/io/profiles/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
GET https://api.revenexx.com/v1/carts/io/profiles/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
PUT https://api.revenexx.com/v1/carts/io/profiles/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |
| apply_mode | string | Default 'insert'. |  |
| direction | string |  |  |
| entity | string | Default 'carts'. |  |
| format | string | Default 'json'. |  |
| is_template | boolean |  |  |
| mapping | object | Column mapping (Baseline-IO-compatible). |  |
| name | string |  |  |
| options | object |  |  |


```http request
POST https://api.revenexx.com/v1/carts/merge
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| source_cart_id | string | Cart whose lines move into the target (becomes status merged). |  |
| target_cart_id | string | Receiving cart (must be active). |  |


```http request
GET https://api.revenexx.com/v1/carts/{cart_id}/items
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| cart_id | string | **Required**  |  |


```http request
POST https://api.revenexx.com/v1/carts/{cart_id}/items
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| cart_id | string | **Required**  |  |
| configuration | object | Free-form configuration — configured lines never merge. |  |
| currency | string | Defaults to the cart's currency. |  |
| metadata | object | Free-form metadata. |  |
| name | string | Falls back to 'sku' when omitted. |  |
| position | integer |  |  |
| product_id | string |  |  |
| quantity | number | Default 1. |  |
| sku | string |  |  |
| snapshot | object | Loose product snapshot at add-time (price, name, image, …). |  |
| tax_rate | number |  |  |
| type | string | Line type (default 'product'). Plain product lines merge by product+price; configurations always stand alone. |  |
| unit | string |  |  |
| unit_price | number | Per-unit net price — line_total is always derived. |  |


```http request
PUT https://api.revenexx.com/v1/carts/{cart_id}/items
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| cart_id | string | **Required**  |  |
| items | array | The complete new item set (set semantics). |  |


```http request
DELETE https://api.revenexx.com/v1/carts/{cart_id}/items/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| cart_id | string | **Required**  |  |
| id | string | **Required**  |  |


```http request
GET https://api.revenexx.com/v1/carts/{cart_id}/items/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| cart_id | string | **Required**  |  |
| id | string | **Required**  |  |


```http request
PUT https://api.revenexx.com/v1/carts/{cart_id}/items/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| cart_id | string | **Required**  |  |
| id | string | **Required**  |  |
| configuration | object | Free-form configuration — configured lines never merge. |  |
| currency | string | Defaults to the cart's currency. |  |
| metadata | object | Free-form metadata. |  |
| name | string | Falls back to 'sku' when omitted. |  |
| position | integer |  |  |
| product_id | string |  |  |
| quantity | number | Default 1. |  |
| sku | string |  |  |
| snapshot | object | Loose product snapshot at add-time (price, name, image, …). |  |
| tax_rate | number |  |  |
| type | string | Line type (default 'product'). Plain product lines merge by product+price; configurations always stand alone. |  |
| unit | string |  |  |
| unit_price | number | Per-unit net price — line_total is always derived. |  |


```http request
DELETE https://api.revenexx.com/v1/carts/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
GET https://api.revenexx.com/v1/carts/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
PUT https://api.revenexx.com/v1/carts/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |
| channel_id | string |  |  |
| currency | string | ISO 4217 code. |  |
| market_id | string |  |  |
| metadata | object | Free-form metadata. |  |
| name | string |  |  |


```http request
POST https://api.revenexx.com/v1/carts/{id}/abandon
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
POST https://api.revenexx.com/v1/carts/{id}/activate
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
POST https://api.revenexx.com/v1/carts/{id}/export
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |
| format | string | Ad-hoc export format (only without profile_id). |  |
| profile_id | string | Export profile to run; ad-hoc JSON/CSV export when omitted. |  |


```http request
POST https://api.revenexx.com/v1/carts/{id}/order
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |
| order_ref | string | External order reference from order management. |  |


```http request
POST https://api.revenexx.com/v1/carts/{id}/reopen
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |

