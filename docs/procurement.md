# Procurement Service


```http request
GET https://api.revenexx.com/v1/procurement/approval-rules
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| limit | integer | Page size (default 50, max 200). |  |
| offset | integer | Row offset for pagination (default 0). |  |
| order | string | Sort as 'column.asc' | 'column.desc', e.g. 'created_at.desc'. |  |


```http request
POST https://api.revenexx.com/v1/procurement/approval-rules
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| active | boolean |  |  |
| approver_contact_id | string |  |  |
| approver_role | string |  |  |
| approver_type | string |  |  |
| condition | string |  |  |
| condition_parameters | object |  |  |
| cost_center_id | string |  |  |
| effect | string |  |  |
| effect_parameters | object |  |  |
| metadata | object |  |  |
| name | string |  |  |
| sequence | integer |  |  |
| show_condition | boolean |  |  |


```http request
DELETE https://api.revenexx.com/v1/procurement/approval-rules/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
GET https://api.revenexx.com/v1/procurement/approval-rules/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
PUT https://api.revenexx.com/v1/procurement/approval-rules/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |
| active | boolean |  |  |
| approver_contact_id | string |  |  |
| approver_role | string |  |  |
| approver_type | string |  |  |
| condition | string |  |  |
| condition_parameters | object |  |  |
| cost_center_id | string |  |  |
| effect | string |  |  |
| effect_parameters | object |  |  |
| metadata | object |  |  |
| name | string |  |  |
| sequence | integer |  |  |
| show_condition | boolean |  |  |


```http request
GET https://api.revenexx.com/v1/procurement/budget-releases
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| limit | integer | Page size (default 50, max 200). |  |
| offset | integer | Row offset for pagination (default 0). |  |
| order | string | Sort as 'column.asc' | 'column.desc', e.g. 'created_at.desc'. |  |


```http request
GET https://api.revenexx.com/v1/procurement/budget-releases/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
POST https://api.revenexx.com/v1/procurement/budget-releases/{id}/retry
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
POST https://api.revenexx.com/v1/procurement/budget-releases/{id}/settle
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |
| note | string | Required free-text reason, kept on the record. |  |


```http request
GET https://api.revenexx.com/v1/procurement/direct-orders
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| limit | integer | Page size (default 50, max 200). |  |
| offset | integer | Row offset for pagination (default 0). |  |
| order | string | Sort as 'column.asc' | 'column.desc', e.g. 'created_at.desc'. |  |


```http request
GET https://api.revenexx.com/v1/procurement/direct-orders/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
POST https://api.revenexx.com/v1/procurement/direct-orders/{id}/commit
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
POST https://api.revenexx.com/v1/procurement/direct-orders/{id}/settle
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |
| note | string | Required free-text reason, kept on the record. |  |


```http request
GET https://api.revenexx.com/v1/procurement/open-request-items
```

** The lines of purchase requests still going somewhere — waiting, or approved and not yet ordered — that name one product. Asked before a product is deleted for good (RAD-247): a request that names it would become an order line pointing at nothing. `status` widens or narrows which request states count. Each line carries its request's `request_number` and `request_status`; lines are ordered by request number, then position. Not narrowed for a storefront contact, like every read address here. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| product_id | string | **Required** The product whose open request lines to list. Required; 400 without it or when it is not a uuid. |  |
| status | string | Purchase-request states separated by commas (default `pending,approved`); one of pending, approved, ordered, declined, cancelled each, 400 otherwise. |  |
| limit | integer | Page size (default 50, max 200). |  |
| offset | integer | Row offset for pagination (default 0). |  |


```http request
GET https://api.revenexx.com/v1/procurement/pending-approvals
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| limit | integer | Page size (default 50, max 200). |  |
| offset | integer | Row offset for pagination (default 0). |  |
| order | string | Sort as 'column.asc' | 'column.desc', e.g. 'created_at.desc'. |  |


```http request
GET https://api.revenexx.com/v1/procurement/pending-approvals/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
POST https://api.revenexx.com/v1/procurement/pending-approvals/{id}/approve
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |
| reason | string | Free-text note (decline/cancel reason, approval remark). |  |


```http request
POST https://api.revenexx.com/v1/procurement/pending-approvals/{id}/decline
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |
| reason | string | Free-text note (decline/cancel reason, approval remark). |  |


```http request
GET https://api.revenexx.com/v1/procurement/purchase-request-events
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| limit | integer | Page size (default 50, max 200). |  |
| offset | integer | Row offset for pagination (default 0). |  |
| order | string | Sort as 'column.asc' | 'column.desc', e.g. 'created_at.desc'. |  |


```http request
GET https://api.revenexx.com/v1/procurement/purchase-request-events/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
GET https://api.revenexx.com/v1/procurement/purchase-request-items
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| limit | integer | Page size (default 50, max 200). |  |
| offset | integer | Row offset for pagination (default 0). |  |
| order | string | Sort as 'column.asc' | 'column.desc', e.g. 'created_at.desc'. |  |


```http request
POST https://api.revenexx.com/v1/procurement/purchase-request-items
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| configuration | object |  |  |
| cost_center | string |  |  |
| line_total | number |  |  |
| metadata | object |  |  |
| name | string |  |  |
| position | integer |  |  |
| position_text | string |  |  |
| product | object |  |  |
| product_id | string |  |  |
| purchase_request_id | string |  |  |
| quantity | number |  |  |
| sku | string |  |  |
| tax_amount | number |  |  |
| tax_rate | number |  |  |
| type | string |  |  |
| unit | string |  |  |
| unit_price | number |  |  |
| user_data | object |  |  |


```http request
DELETE https://api.revenexx.com/v1/procurement/purchase-request-items/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
GET https://api.revenexx.com/v1/procurement/purchase-request-items/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
PUT https://api.revenexx.com/v1/procurement/purchase-request-items/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |
| configuration | object |  |  |
| cost_center | string |  |  |
| line_total | number |  |  |
| metadata | object |  |  |
| name | string |  |  |
| position | integer |  |  |
| position_text | string |  |  |
| product | object |  |  |
| product_id | string |  |  |
| purchase_request_id | string |  |  |
| quantity | number |  |  |
| sku | string |  |  |
| tax_amount | number |  |  |
| tax_rate | number |  |  |
| type | string |  |  |
| unit | string |  |  |
| unit_price | number |  |  |
| user_data | object |  |  |


```http request
GET https://api.revenexx.com/v1/procurement/purchase-requests
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| limit | integer | Page size (default 50, max 200). |  |
| offset | integer | Row offset for pagination (default 0). |  |
| order | string | Sort as 'column.asc' | 'column.desc', e.g. 'created_at.desc'. |  |


```http request
GET https://api.revenexx.com/v1/procurement/purchase-requests/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
PUT https://api.revenexx.com/v1/procurement/purchase-requests/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |
| billing_address | object | An address of the platform address type (customers, https://schemas.revenexx.com/apps/customers/address/). The old flat shape (street, zip, city, country, …) and the storefront shape (companyName, contactName, postalCode, id) are accepted and stored as the type; an `id` becomes `source_address_id`; an invalid address is refused (400) naming the field. From submission on it carries `formatted` (the lines as printed) and `source_address_id`. Reads answer the type plus the old flat keys derived from it, until the storefront moves. Not correctable once the request is ordered (409). |  |
| buyer | object |  |  |
| cart_id | string |  |  |
| channel_id | string |  |  |
| contact_id | string |  |  |
| currency | string |  |  |
| customer_order_number | string |  |  |
| external_ref | string |  |  |
| grand_total | number |  |  |
| item_count | integer |  |  |
| metadata | object |  |  |
| number | string |  |  |
| organization_id | string |  |  |
| payment | object |  |  |
| sender_country | string | The country the goods are sent from, ISO 3166-1 alpha-2 (DE). It decides what the frozen address lines print in capitals: a destination's capitalised fields when the request goes abroad, none at home. Omit it and the sender country the request was submitted for counts (for a request stored without one, the market's). Used to print, not stored. Anything that is not a country's code is a 400. |  |
| shipping | object |  |  |
| shipping_address | object | An address of the platform address type (customers, https://schemas.revenexx.com/apps/customers/address/). The old flat shape (street, zip, city, country, …) and the storefront shape (companyName, contactName, postalCode, id) are accepted and stored as the type; an `id` becomes `source_address_id`; an invalid address is refused (400) naming the field. From submission on it carries `formatted` (the lines as printed) and `source_address_id`. Reads answer the type plus the old flat keys derived from it, until the storefront moves. Not correctable once the request is ordered (409). |  |
| shipping_total | number |  |  |
| subtotal | number |  |  |
| tax_total | number |  |  |
| user_data | object |  |  |


```http request
POST https://api.revenexx.com/v1/procurement/purchase-requests/{id}/approve
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |
| reason | string | Free-text note (decline/cancel reason, approval remark). |  |


```http request
POST https://api.revenexx.com/v1/procurement/purchase-requests/{id}/cancel
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |
| reason | string | Free-text note (decline/cancel reason, approval remark). |  |


```http request
POST https://api.revenexx.com/v1/procurement/purchase-requests/{id}/order
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
POST https://api.revenexx.com/v1/procurement/reconcile
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| limit | integer | Records examined per status (default 50, max 200). |  |


```http request
POST https://api.revenexx.com/v1/procurement/submit
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| billing_address | object | An address of the platform address type (customers, https://schemas.revenexx.com/apps/customers/address/). The old flat shape (street, zip, city, country, …) and the storefront shape (companyName, contactName, postalCode, id) are accepted and stored as the type; an `id` becomes `source_address_id`; an invalid address is refused (400) naming the field. From submission on it carries `formatted` (the lines as printed) and `source_address_id`. Reads answer the type plus the old flat keys derived from it, until the storefront moves. Not correctable once the request is ordered (409). |  |
| buyer | object |  |  |
| cart_id | string | Idempotency key — a re-submit for the same cart returns the existing PR/Order; a cart whose request was declined or cancelled is refused (409). |  |
| channel_id | string |  |  |
| contact_id | string |  |  |
| currency | string | ISO 4217 code the line amounts are stated in. It travels with every question and every movement put to cost-centers; a cost centre or personal limit holding another currency refuses the submission (409, outcome `currency_mismatch`). Omit to be read in the record's own currency. |  |
| customer_order_number | string |  |  |
| external_ref | string |  |  |
| items | array |  |  |
| metadata | object |  |  |
| organization_id | string |  |  |
| payment | object |  |  |
| sender_country | string | The country the goods are sent from, ISO 3166-1 alpha-2 (DE). It decides what the frozen address lines print in capitals: a destination's capitalised fields when the request goes abroad, none at home. Omit it and the market's ship-from country counts, else the market code when it is a country's code (de, at); otherwise nothing but the country line is in capitals. Stored on the request as what it was submitted for, with the market; the order an approval places is handed it and placed in that market. Anything that is not a country's code is a 400. |  |
| shipping | object |  |  |
| shipping_address | object | An address of the platform address type (customers, https://schemas.revenexx.com/apps/customers/address/). The old flat shape (street, zip, city, country, …) and the storefront shape (companyName, contactName, postalCode, id) are accepted and stored as the type; an `id` becomes `source_address_id`; an invalid address is refused (400) naming the field. From submission on it carries `formatted` (the lines as printed) and `source_address_id`. Reads answer the type plus the old flat keys derived from it, until the storefront moves. Not correctable once the request is ordered (409). |  |
| user_data | object |  |  |


```http request
POST https://api.revenexx.com/v1/procurement/submit-cart
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| cart_id | string | The cart to check out. It must be active (409 `cart_not_active` otherwise); a re-submit answers the order or request already made for it. |  |
| cost_center_id | string | The cost centre every line books to. A cart line names none, so without one no budget moves. |  |
| customer_order_number | string |  |  |


```http request
GET https://api.revenexx.com/v1/procurement/vocabularies
```


```http request
GET https://api.revenexx.com/v1/procurement/vocabularies/{name}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| name | string | **Required** Which vocabulary to read — the part after the dot in `procurement.<name>`. |  |

