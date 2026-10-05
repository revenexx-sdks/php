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
| dry_run | boolean | true runs the pre-flight (currency, no active budget, tracking-only centres) and answers as the real call would — same status, skipped and refusal — while writing nothing and claiming no key. The purchase request / order id may then be omitted. |  |
| note | string |  |  |
| order_id | string |  |  |


```http request
POST https://api.revenexx.com/v1/cost-centers/confirm
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| allocations | array | Optional: the request's allocations (the reserve's shape; an empty array is the same as none, and only cost_center_id is read), used only to classify its cost centres by budget type. A request holding no reservation whose every centre is tracking-only is then settled with nothing written; one naming a monetary centre, or naming none, is refused with 409 as before. Amounts are read from the ledger, never from here. |  |
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
| external_id | string | Exact-match filter on the key the system that OWNS the centre knows it by — how an import finds the row it wrote last run instead of opening a second centre and splitting a budget across the two. Unique per tenant, so this answers at most one centre; a centre nobody imported matches nothing. |  |


```http request
POST https://api.revenexx.com/v1/cost-centers/cost-centers
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| accountable_contact_id | string |  |  |
| active | boolean |  |  |
| budget_type | string |  |  |
| code | string |  |  |
| currency | string |  |  |
| external_id | string | The key this cost centre has in the system that OWNS it — the dimension value an ERP books against, which is rarely the `code` a controller types here. Unique per tenant where it is set, so a repeated import upserts on it instead of matching on a name; a centre opened in the Cockpit carries none and never will. |  |
| external_refs | object | Every OTHER system that knows this cost centre, keyed by system name — a second ERP, the procurement platform a punchout session comes from, the shop this tenant migrated off. `external_id` names the leading system; this is the rest, and the next one costs no column. Answered on read and carrying no query parameter: the store compares such a field as a WHOLE document, so a filter over part of one is refused. Look the centre up by `external_id` and read this off the answer. |  |
| metadata | object |  |  |
| name | string |  |  |
| organization_id | string |  |  |
| source_data | object | What the source said about this cost centre, kept as it said it: `{"system": …, "etag": …, "raw": {…}}`. The `etag` is what a write-back has to send back in `If-Match`, and there is nowhere else to keep it between two runs. `raw` holds the source fields this app does not model — a responsible department, an account range — so an edit here does not silently throw them away. |  |
| source_synced_at | string | When this cost centre was last confirmed against its source. A delta run asks the source for what changed since it, and a controller reads it to see that a feed has gone quiet. An edit made HERE does not touch it — it records when the source was last seen, not when the row changed — so a stale value beside a fresh `updated_at` means somebody is maintaining by hand what the ERP has stopped delivering. |  |


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
| budget_type | string |  |  |
| code | string |  |  |
| currency | string |  |  |
| external_id | string | The key this cost centre has in the system that OWNS it — the dimension value an ERP books against, which is rarely the `code` a controller types here. Unique per tenant where it is set, so a repeated import upserts on it instead of matching on a name; a centre opened in the Cockpit carries none and never will. |  |
| external_refs | object | Every OTHER system that knows this cost centre, keyed by system name — a second ERP, the procurement platform a punchout session comes from, the shop this tenant migrated off. `external_id` names the leading system; this is the rest, and the next one costs no column. Answered on read and carrying no query parameter: the store compares such a field as a WHOLE document, so a filter over part of one is refused. Look the centre up by `external_id` and read this off the answer. |  |
| metadata | object |  |  |
| name | string |  |  |
| organization_id | string |  |  |
| source_data | object | What the source said about this cost centre, kept as it said it: `{"system": …, "etag": …, "raw": {…}}`. The `etag` is what a write-back has to send back in `If-Match`, and there is nowhere else to keep it between two runs. `raw` holds the source fields this app does not model — a responsible department, an account range — so an edit here does not silently throw them away. |  |
| source_synced_at | string | When this cost centre was last confirmed against its source. A delta run asks the source for what changed since it, and a controller reads it to see that a feed has gone quiet. An edit made HERE does not touch it — it records when the source was last seen, not when the row changed — so a stale value beside a fresh `updated_at` means somebody is maintaining by hand what the ERP has stopped delivering. |  |


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
POST https://api.revenexx.com/v1/cost-centers/release
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| allocations | array | Optional: the amount to give back per cost centre, capped at what the order booked there. Omit to give back everything still booked for the order. |  |
| contact_id | string |  |  |
| currency | string | ISO 4217 code the amount is stated in. Omit to be read in the cost centre's (or the personal limit's) own currency; a code that differs from it is refused with 409 currency_mismatch. |  |
| key | string | Idempotency key of this cancellation within the order (e.g. the cancellation id, or cancellation_id:item_id for one item). A repeat under the same key gives nothing back again. |  |
| note | string |  |  |
| order_id | string |  |  |


```http request
POST https://api.revenexx.com/v1/cost-centers/reserve
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| allocations | array |  |  |
| contact_id | string |  |  |
| currency | string | ISO 4217 code the amount is stated in. Omit to be read in the cost centre's (or the personal limit's) own currency; a code that differs from it is refused with 409 currency_mismatch. |  |
| dry_run | boolean | true runs the pre-flight (currency, no active budget, tracking-only centres) and answers as the real call would — same status, skipped and refusal — while writing nothing and claiming no key. The purchase request / order id may then be omitted. |  |
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
GET https://api.revenexx.com/v1/cost-centers/vocabularies
```


```http request
GET https://api.revenexx.com/v1/cost-centers/vocabularies/{name}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| name | string | **Required** Which vocabulary to read. The enum is exhaustive; anything else is a 404. |  |


```http request
POST https://api.revenexx.com/v1/cost-centers/withdraw
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| allocations | array | Optional: the request's allocations (the reserve's shape; an empty array is the same as none, and only cost_center_id is read), used only to classify its cost centres by budget type. A request holding no reservation whose every centre is tracking-only is then settled with nothing written; one naming a monetary centre, or naming none, is refused with 409 as before. Amounts are read from the ledger, never from here. |  |
| currency | string | ISO 4217 code the amount is stated in. Omit to be read in the cost centre's (or the personal limit's) own currency; a code that differs from it is refused with 409 currency_mismatch. |  |
| note | string |  |  |
| purchase_request_id | string |  |  |

