# Payments Service


```http request
GET https://api.revenexx.com/v1/payments
```


```http request
POST https://api.revenexx.com/v1/payments
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| amount | number | Order amount — 0 is legal (free orders), negative is not. |  |
| cart_id | string | The cart this payment pays for. |  |
| contact_id | string | Paying customer contact. |  |
| country | string | Buyer ISO country code for the eligibility check. |  |
| currency | string | ISO 4217 code (default EUR). |  |
| idempotency_key | string | Same key answers the same payment instead of a duplicate. |  |
| metadata | object | Free-form metadata. |  |
| method_code | string | Code of a configured payment method. |  |
| order_ref | string | External order reference — also the webhook fallback key. |  |
| return_url | string | Where the PSP redirect flow returns the buyer to. |  |


```http request
GET https://api.revenexx.com/v1/payments/methods
```


```http request
POST https://api.revenexx.com/v1/payments/methods
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| code | string | Stable method code (unique per tenant, e.g. 'invoice', 'card'). |  |
| countries | array | Allowed ISO country codes — empty/omitted = unrestricted. |  |
| description | string |  |  |
| enabled | boolean | Disabled methods are never eligible (default false). |  |
| fee_amount | number | Fixed amount or percent value, per fee_type (default 0). |  |
| fee_currency | string | ISO 4217 code (default EUR). |  |
| fee_type | string | How 'fee_amount' applies (default 'none'). |  |
| kind | string | Self-managed (merchant fulfils, default) or PSP-backed ('provider' required to transact). |  |
| labels | object | Localized display names ({ de, en, … }). |  |
| max_order_value | number | Maximum order amount — omitted = no upper bound. |  |
| metadata | object | Free-form metadata. |  |
| min_order_value | number | Minimum order amount — omitted = no lower bound. |  |
| name | string | Display name. |  |
| position | integer | Sort position in the checkout (default 0). |  |
| provider | string | PSP code from the catalog — only for kind 'psp'. |  |
| provider_method | string | The provider's payment method id (e.g. 'card', 'paypal'). |  |


```http request
POST https://api.revenexx.com/v1/payments/methods/defaults
```


```http request
POST https://api.revenexx.com/v1/payments/methods/eligible
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| amount | number | Order amount the fees are computed against (default 0). |  |
| country | string | Buyer ISO country code — methods with country restrictions need it. |  |
| currency | string | ISO 4217 code (default EUR). |  |


```http request
DELETE https://api.revenexx.com/v1/payments/methods/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
GET https://api.revenexx.com/v1/payments/methods/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
PUT https://api.revenexx.com/v1/payments/methods/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |
| code | string | Stable method code (unique per tenant, e.g. 'invoice', 'card'). |  |
| countries | array | Allowed ISO country codes — empty/omitted = unrestricted. |  |
| description | string |  |  |
| enabled | boolean | Disabled methods are never eligible (default false). |  |
| fee_amount | number | Fixed amount or percent value, per fee_type (default 0). |  |
| fee_currency | string | ISO 4217 code (default EUR). |  |
| fee_type | string | How 'fee_amount' applies (default 'none'). |  |
| kind | string | Self-managed (merchant fulfils, default) or PSP-backed ('provider' required to transact). |  |
| labels | object | Localized display names ({ de, en, … }). |  |
| max_order_value | number | Maximum order amount — omitted = no upper bound. |  |
| metadata | object | Free-form metadata. |  |
| min_order_value | number | Minimum order amount — omitted = no lower bound. |  |
| name | string | Display name. |  |
| position | integer | Sort position in the checkout (default 0). |  |
| provider | string | PSP code from the catalog — only for kind 'psp'. |  |
| provider_method | string | The provider's payment method id (e.g. 'card', 'paypal'). |  |


```http request
GET https://api.revenexx.com/v1/payments/providers
```


```http request
POST https://api.revenexx.com/v1/payments/providers
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| credentials | object | PSP credentials — the catalog's credential_fields say which keys the auth scheme expects. |  |
| enabled | boolean | Only enabled providers transact (default false). |  |
| name | string | Display name — defaults to the catalog label. |  |
| options | object | Free-form provider options. |  |
| provider | string | Provider code — must exist in the catalog (GET /payments/providers/catalog). |  |
| test_mode | boolean | Sandbox/test credentials (default true). |  |
| webhook_secret | string | Shared secret for PSP callback verification. |  |


```http request
GET https://api.revenexx.com/v1/payments/providers/catalog
```


```http request
DELETE https://api.revenexx.com/v1/payments/providers/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
GET https://api.revenexx.com/v1/payments/providers/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
PUT https://api.revenexx.com/v1/payments/providers/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |
| credentials | object | PSP credentials — the catalog's credential_fields say which keys the auth scheme expects. |  |
| enabled | boolean | Only enabled providers transact (default false). |  |
| name | string | Display name — defaults to the catalog label. |  |
| options | object | Free-form provider options. |  |
| provider | string | Provider code — must exist in the catalog (GET /payments/providers/catalog). |  |
| test_mode | boolean | Sandbox/test credentials (default true). |  |
| webhook_secret | string | Shared secret for PSP callback verification. |  |


```http request
POST https://api.revenexx.com/v1/payments/webhooks/{provider}
```

** Consumes the dispatch envelope from webhooks.revenexx.com: normalizes the provider callback (stripe payment intents + a generic shape), resolves the payment by psp_payment_id or order_ref and moves the ledger. Facts only move forward — provider retries and redeliveries are idempotent no-ops; unverified envelopes are refused. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| provider | string | **Required**  |  |
| data | object | Request body |  |


```http request
GET https://api.revenexx.com/v1/payments/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
POST https://api.revenexx.com/v1/payments/{id}/cancel
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
POST https://api.revenexx.com/v1/payments/{id}/capture
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
POST https://api.revenexx.com/v1/payments/{id}/confirm
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
POST https://api.revenexx.com/v1/payments/{id}/refund
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |

