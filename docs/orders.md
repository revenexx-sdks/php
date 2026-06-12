# Orders Service


```http request
GET https://api.revenexx.com/v1/orders
```


```http request
GET https://api.revenexx.com/v1/orders/number-ranges
```


```http request
POST https://api.revenexx.com/v1/orders/number-ranges
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| channel_id | string |  |  |
| code | string | Range key drawn by the app ('order', 'delivery', 'return') — unique per tenant. |  |
| counter | integer | Current counter value (default 0) — the next number draws counter+step. |  |
| metadata | object | Free-form metadata. |  |
| padding | integer | Zero-padding width of the counter (default 6). |  |
| position_step | integer | Position numbering increment for order items (default 10). |  |
| prefix | string | Default ''. |  |
| step | integer | Counter increment per drawn number (default 1). |  |
| suffix | string | Default ''. |  |


```http request
POST https://api.revenexx.com/v1/orders/number-ranges/defaults
```


```http request
DELETE https://api.revenexx.com/v1/orders/number-ranges/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
GET https://api.revenexx.com/v1/orders/number-ranges/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
PUT https://api.revenexx.com/v1/orders/number-ranges/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |
| channel_id | string |  |  |
| code | string | Range key drawn by the app ('order', 'delivery', 'return') — unique per tenant. |  |
| counter | integer | Current counter value (default 0) — the next number draws counter+step. |  |
| metadata | object | Free-form metadata. |  |
| padding | integer | Zero-padding width of the counter (default 6). |  |
| position_step | integer | Position numbering increment for order items (default 10). |  |
| prefix | string | Default ''. |  |
| step | integer | Counter increment per drawn number (default 1). |  |
| suffix | string | Default ''. |  |


```http request
POST https://api.revenexx.com/v1/orders/place
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| billing_address | object | Frozen billing address. |  |
| buyer | object | Frozen buyer snapshot (name, email, …). |  |
| cart_id | string | Source cart (the carts.order hand-over). |  |
| channel_id | string |  |  |
| contact_id | string | Ordering customer contact. |  |
| currency | string | ISO 4217 code (default EUR). |  |
| customer_order_number | string | The buyer's own order/PO number. |  |
| grand_total | number | Override — computed as subtotal + shipping + tax when omitted. |  |
| items | array | The order positions (at most 500). |  |
| market_id | string |  |  |
| metadata | object | Free-form metadata. |  |
| organization_id | string | B2B organization. |  |
| payment | object | Frozen payment snapshot — a known 'payment.status' seeds payment_status (otherwise 'open'). |  |
| shipping | object | Frozen shipping snapshot — 'shipping.price' seeds shipping_total. |  |
| shipping_address | object | Frozen shipping address. |  |
| shipping_total | number | Shipping total (fallback when 'shipping.price' is absent). |  |
| user_data | object | Free-form user data. |  |


```http request
GET https://api.revenexx.com/v1/orders/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
PUT https://api.revenexx.com/v1/orders/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |
| billing_address | object |  |  |
| buyer | object |  |  |
| customer_order_number | string |  |  |
| metadata | object | Free-form metadata. |  |
| shipping_address | object |  |  |
| user_data | object | Free-form user data. |  |


```http request
POST https://api.revenexx.com/v1/orders/{id}/acknowledge
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |
| external_ref | string | The fulfilling system's order reference (e.g. the ERP order number). |  |


```http request
POST https://api.revenexx.com/v1/orders/{id}/cancel
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |
| cancelled_by | string | Acting user/system. |  |
| reason | string |  |  |


```http request
GET https://api.revenexx.com/v1/orders/{id}/comments
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
POST https://api.revenexx.com/v1/orders/{id}/comments
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |
| author | string |  |  |
| body | string |  |  |
| visibility | string | Default 'internal'. |  |


```http request
GET https://api.revenexx.com/v1/orders/{id}/events
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
POST https://api.revenexx.com/v1/orders/{id}/hold
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |
| reason | string | Why the order is blocked (shown on the shipping guard). |  |


```http request
POST https://api.revenexx.com/v1/orders/{id}/items/cancel
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |
| cancelled_by | string | Acting user/system. |  |
| positions | array |  |  |
| reason | string |  |  |


```http request
POST https://api.revenexx.com/v1/orders/{id}/payment-status
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |
| payment_id | string | Reference into the payment system — merged into the order's payment snapshot. |  |
| status | string | The new payment dimension value. |  |


```http request
POST https://api.revenexx.com/v1/orders/{id}/return
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |
| metadata | object | Free-form metadata. |  |
| positions | array |  |  |
| reason | string |  |  |


```http request
POST https://api.revenexx.com/v1/orders/{id}/returns/{rid}/complete
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |
| rid | string | **Required**  |  |
| resolution | string | How the return was settled (refund, replacement, …). |  |


```http request
POST https://api.revenexx.com/v1/orders/{id}/returns/{rid}/receive
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |
| rid | string | **Required**  |  |
| data | object | Request body |  |


```http request
POST https://api.revenexx.com/v1/orders/{id}/returns/{rid}/reject
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |
| rid | string | **Required**  |  |
| reason | string | Fallback for 'resolution'. |  |
| resolution | string | Why the return was rejected. |  |


```http request
POST https://api.revenexx.com/v1/orders/{id}/ship
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |
| carrier | string |  |  |
| metadata | object | Free-form metadata. |  |
| number | string | Delivery note number — drawn from the 'delivery' range when omitted. |  |
| positions | array | Omitted = every position with open quantity, in full. |  |
| shipped_at | string | Defaults to now. |  |
| tracking_code | string |  |  |
| tracking_url | string |  |  |


```http request
POST https://api.revenexx.com/v1/orders/{id}/unhold
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |
| data | object | Request body |  |

