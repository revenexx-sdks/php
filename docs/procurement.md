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
| approver_ref | string |  |  |
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
| approver_ref | string |  |  |
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
| by | string | Who acted (contact id / ref); recorded as resolved_by. |  |
| reason | string | Free-text note (decline/cancel reason, approval remark). |  |


```http request
POST https://api.revenexx.com/v1/procurement/pending-approvals/{id}/decline
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |
| by | string | Who acted (contact id / ref); recorded as resolved_by. |  |
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
| billing_address | object |  |  |
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
| shipping | object |  |  |
| shipping_address | object |  |  |
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
| by | string | Who acted (contact id / ref); recorded as resolved_by. |  |
| reason | string | Free-text note (decline/cancel reason, approval remark). |  |


```http request
POST https://api.revenexx.com/v1/procurement/purchase-requests/{id}/cancel
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |
| by | string | Who acted (contact id / ref); recorded as resolved_by. |  |
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
| limit | integer | Requests examined per status (default 50, max 200). |  |


```http request
POST https://api.revenexx.com/v1/procurement/submit
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| billing_address | object |  |  |
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
| shipping | object |  |  |
| shipping_address | object |  |  |
| user_data | object |  |  |

