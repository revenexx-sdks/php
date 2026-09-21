# CostCenters Service


```http request
GET https://api.revenexx.com/v1/cost-centers/budget-changes
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| limit | integer | Page size (default 50, max 200). |  |
| offset | integer | Row offset for pagination (default 0). |  |
| order | string | Sort as 'column.asc' | 'column.desc', e.g. 'created_at.desc'. |  |


```http request
GET https://api.revenexx.com/v1/cost-centers/budget-changes/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
GET https://api.revenexx.com/v1/cost-centers/budgets
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| limit | integer | Page size (default 50, max 200). |  |
| offset | integer | Row offset for pagination (default 0). |  |
| order | string | Sort as 'column.asc' | 'column.desc', e.g. 'created_at.desc'. |  |


```http request
POST https://api.revenexx.com/v1/cost-centers/budgets
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| active | boolean |  |  |
| cost_center_id | string |  |  |
| initial_value | number |  |  |
| metadata | object |  |  |
| name | string |  |  |
| period_length | integer |  |  |
| period_start | string |  |  |
| recurring | boolean |  |  |
| sequence | integer |  |  |
| takeover | object |  |  |


```http request
POST https://api.revenexx.com/v1/cost-centers/budgets/rollover/run
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| today | string |  |  |


```http request
GET https://api.revenexx.com/v1/cost-centers/budgets/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
PUT https://api.revenexx.com/v1/cost-centers/budgets/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |
| active | boolean |  |  |
| cost_center_id | string |  |  |
| initial_value | number |  |  |
| metadata | object |  |  |
| name | string |  |  |
| period_length | integer |  |  |
| period_start | string |  |  |
| recurring | boolean |  |  |
| sequence | integer |  |  |
| takeover | object |  |  |


```http request
POST https://api.revenexx.com/v1/cost-centers/budgets/{id}/adjust
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |
| actor | string |  |  |
| amount | number |  |  |
| currency | string | ISO 4217 code the amount is stated in. Omit to be read in the cost centre's (or the personal limit's) own currency; a code that differs from it is refused with 409 currency_mismatch. |  |
| note | string |  |  |
| target | number |  |  |


```http request
POST https://api.revenexx.com/v1/cost-centers/commit
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| allocations | array |  |  |
| contact_id | string |  |  |
| currency | string | ISO 4217 code the amount is stated in. Omit to be read in the cost centre's (or the personal limit's) own currency; a code that differs from it is refused with 409 currency_mismatch. |  |
| note | string |  |  |
| order_id | string |  |  |


```http request
POST https://api.revenexx.com/v1/cost-centers/confirm
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| currency | string | ISO 4217 code the amount is stated in. Omit to be read in the cost centre's (or the personal limit's) own currency; a code that differs from it is refused with 409 currency_mismatch. |  |
| note | string |  |  |
| order_id | string |  |  |
| purchase_request_id | string |  |  |


```http request
GET https://api.revenexx.com/v1/cost-centers/contact-limits
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| limit | integer | Page size (default 50, max 200). |  |
| offset | integer | Row offset for pagination (default 0). |  |
| order | string | Sort as 'column.asc' | 'column.desc', e.g. 'created_at.desc'. |  |


```http request
POST https://api.revenexx.com/v1/cost-centers/contact-limits
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| contact_id | string |  |  |
| currency | string |  |  |
| metadata | object |  |  |
| monetary_limit | number |  |  |


```http request
DELETE https://api.revenexx.com/v1/cost-centers/contact-limits/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
GET https://api.revenexx.com/v1/cost-centers/contact-limits/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
PUT https://api.revenexx.com/v1/cost-centers/contact-limits/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |
| contact_id | string |  |  |
| currency | string |  |  |
| metadata | object |  |  |
| monetary_limit | number |  |  |


```http request
GET https://api.revenexx.com/v1/cost-centers/cost-centers
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| limit | integer | Page size (default 50, max 200). |  |
| offset | integer | Row offset for pagination (default 0). |  |
| order | string | Sort as 'column.asc' | 'column.desc', e.g. 'created_at.desc'. |  |
| punchout_account_code | string | Code of the punchout account the list is read for. Centres a punchout restriction keeps out of reach of that account are left out (and the total counts only what is returned). Omit for the administrative list, which holds nothing back. A value that is not a non-empty string is refused with 400. |  |


```http request
POST https://api.revenexx.com/v1/cost-centers/cost-centers
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| accountable_contact_id | string |  |  |
| active | boolean |  |  |
| code | string |  |  |
| currency | string |  |  |
| metadata | object |  |  |
| name | string |  |  |
| organization_id | string |  |  |


```http request
DELETE https://api.revenexx.com/v1/cost-centers/cost-centers/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
GET https://api.revenexx.com/v1/cost-centers/cost-centers/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
PUT https://api.revenexx.com/v1/cost-centers/cost-centers/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |
| accountable_contact_id | string |  |  |
| active | boolean |  |  |
| code | string |  |  |
| currency | string |  |  |
| metadata | object |  |  |
| name | string |  |  |
| organization_id | string |  |  |


```http request
POST https://api.revenexx.com/v1/cost-centers/cost-centers/{id}/consume
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |
| actor | string |  |  |
| amount | number |  |  |
| currency | string | ISO 4217 code the amount is stated in. Omit to be read in the cost centre's (or the personal limit's) own currency; a code that differs from it is refused with 409 currency_mismatch. |  |
| note | string |  |  |
| order_id | string |  |  |
| purchase_request_id | string |  |  |


```http request
POST https://api.revenexx.com/v1/cost-centers/evaluate
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| amount | number |  |  |
| conditions | array |  |  |
| contact_id | string |  |  |
| cost_center_id | string |  |  |
| currency | string | ISO 4217 code the amount is stated in. Omit to be read in the cost centre's (or the personal limit's) own currency; a code that differs from it is refused with 409 currency_mismatch. |  |
| punchout_account_code | string | Code of the punchout account the request is made in. Omit outside a punchout session: a cost centre restricted with mode 'only' is then out of reach, and one restricted with 'except' is offered. A value that is not a non-empty string is refused with 400. |  |


```http request
POST https://api.revenexx.com/v1/cost-centers/reserve
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| allocations | array |  |  |
| contact_id | string |  |  |
| currency | string | ISO 4217 code the amount is stated in. Omit to be read in the cost centre's (or the personal limit's) own currency; a code that differs from it is refused with 409 currency_mismatch. |  |
| note | string |  |  |
| purchase_request_id | string |  |  |


```http request
POST https://api.revenexx.com/v1/cost-centers/reserve/adjust
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| allocations | array |  |  |
| contact_id | string |  |  |
| currency | string | ISO 4217 code the amount is stated in. Omit to be read in the cost centre's (or the personal limit's) own currency; a code that differs from it is refused with 409 currency_mismatch. |  |
| note | string |  |  |
| purchase_request_id | string |  |  |


```http request
GET https://api.revenexx.com/v1/cost-centers/restrictions
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| limit | integer | Page size (default 50, max 200). |  |
| offset | integer | Row offset for pagination (default 0). |  |
| order | string | Sort as 'column.asc' | 'column.desc', e.g. 'created_at.desc'. |  |


```http request
POST https://api.revenexx.com/v1/cost-centers/restrictions
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| active | boolean |  |  |
| cost_center_id | string |  |  |
| parameters | object |  |  |
| type | string |  |  |


```http request
DELETE https://api.revenexx.com/v1/cost-centers/restrictions/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
GET https://api.revenexx.com/v1/cost-centers/restrictions/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
PUT https://api.revenexx.com/v1/cost-centers/restrictions/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |
| active | boolean |  |  |
| cost_center_id | string |  |  |
| parameters | object |  |  |
| type | string |  |  |


```http request
POST https://api.revenexx.com/v1/cost-centers/usable
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| contact_id | string |  |  |
| lines | array |  |  |
| organization_id | string |  |  |
| punchout_account_code | string | Code of the punchout account the request is made in. Omit outside a punchout session: a cost centre restricted with mode 'only' is then out of reach, and one restricted with 'except' is offered. A value that is not a non-empty string is refused with 400. |  |
| roles | array |  |  |


```http request
POST https://api.revenexx.com/v1/cost-centers/withdraw
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| currency | string | ISO 4217 code the amount is stated in. Omit to be read in the cost centre's (or the personal limit's) own currency; a code that differs from it is refused with 409 currency_mismatch. |  |
| note | string |  |  |
| purchase_request_id | string |  |  |

