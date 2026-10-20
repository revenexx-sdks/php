# LoyaltyBonus Service


```http request
GET https://api.revenexx.com/v1/loyalty/bonus-agreements
```

** Filter `?organization_id=`, `?period=2026`, `?state=calculated` for the year-end queue. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| limit | integer | Page size (default 50, max 200). |  |
| offset | integer | Row offset for pagination (default 0). |  |
| order | string | Sort by one column: 'column' | 'column.asc' | 'column.desc'. |  |
| id | string | Keep only rows whose `id` equals this. |  |
| program_id | string | Keep only rows whose `program_id` equals this. |  |
| membership_id | string | Keep only rows whose `membership_id` equals this. |  |
| organization_id | string | Keep only rows whose `organization_id` equals this. |  |
| period | string | Keep only rows whose `period` equals this. |  |
| period_start | string | Keep only rows whose `period_start` equals this. |  |
| period_end | string | Keep only rows whose `period_end` equals this. |  |
| base_source | string | Keep only rows whose `base_source` equals this. |  |
| turnover_source | string | Keep only rows whose `turnover_source` equals this. |  |
| reached_tier_id | string | Keep only rows whose `reached_tier_id` equals this. |  |
| reached_tier_code | string | Keep only rows whose `reached_tier_code` equals this. |  |
| projected_tier_code | string | Keep only rows whose `projected_tier_code` equals this. |  |
| currency | string | Keep only rows whose `currency` equals this. |  |
| state | string | Keep only rows whose `state` equals this. |  |
| receivables_cleared | string | Keep only rows whose `receivables_cleared` equals this. |  |
| receivables_checked_by | string | Keep only rows whose `receivables_checked_by` equals this. |  |
| forfeit_reason | string | Keep only rows whose `forfeit_reason` equals this. |  |
| document_ref | string | Keep only rows whose `document_ref` equals this. |  |
| payout_ref | string | Keep only rows whose `payout_ref` equals this. |  |
| approved_by | string | Keep only rows whose `approved_by` equals this. |  |
| external_id | string | Keep only rows whose `external_id` equals this. |  |


```http request
POST https://api.revenexx.com/v1/loyalty/bonus-agreements
```

** Enrols the company if needed, freezes the programme tiers against the base, and reads the year so far from orders. Without `base_turnover` the base is last year: the previous agreement, else last year completed orders. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| base_turnover | number |  |  |
| contact_id | string |  |  |
| document_ref | string |  |  |
| organization_id | string |  |  |
| period | string |  |  |
| program_id | string |  |  |


```http request
GET https://api.revenexx.com/v1/loyalty/bonus-agreements/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |


```http request
PUT https://api.revenexx.com/v1/loyalty/bonus-agreements/{id}
```

** Changing the base re-prices the frozen tiers; only while the year runs. Everything else on an agreement is kept by this app. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |
| base_turnover | number |  |  |
| document_ref | string |  |  |
| metadata | any | Free-form data kept with the agreement, stored as given. |  |
| turnover_source | string |  |  |


```http request
POST https://api.revenexx.com/v1/loyalty/bonus-agreements/{id}/approve
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |
| checked_by | string |  |  |
| receivables_cleared | boolean | All receivables due at settlement are paid. |  |


```http request
POST https://api.revenexx.com/v1/loyalty/bonus-agreements/{id}/calculate
```

** Final turnover, reached tier and bonus (that tier percentage of the whole year). Announces bonus_agreement.calculated. A calculated agreement may be calculated again after a late return. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |
| data | object | Request body |  |


```http request
POST https://api.revenexx.com/v1/loyalty/bonus-agreements/{id}/forfeit
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |
| reason | string |  |  |


```http request
POST https://api.revenexx.com/v1/loyalty/bonus-agreements/{id}/pay
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |
| payout_ref | string | The credit note or payment. |  |


```http request
GET https://api.revenexx.com/v1/loyalty/bonus-agreements/{id}/progress
```

** Turnover so far, projection to year end, every tier with its range, the tier reached, the gap to the next with its projected date, the bonus now and the expected bonus — the storefront Premium page and the cockpit panel read it. `bars` carries the tiers as rows of label and value, worded in the caller language, with the year gone and the bonus now as `footer` rows. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |


```http request
POST https://api.revenexx.com/v1/loyalty/bonus-agreements/{id}/rebuild
```

** Adds every completed order of the year not yet counted; an order already counted is not counted twice. Not for agreements fed by ERP imports. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |
| data | object | Request body |  |


```http request
GET https://api.revenexx.com/v1/loyalty/turnover-entries
```

** Filter `?agreement_id=`, `?source=`. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| limit | integer | Page size (default 50, max 200). |  |
| offset | integer | Row offset for pagination (default 0). |  |
| order | string | Sort by one column: 'column' | 'column.asc' | 'column.desc'. |  |
| id | string | Keep only rows whose `id` equals this. |  |
| agreement_id | string | Keep only rows whose `agreement_id` equals this. |  |
| entry_key | string | Keep only rows whose `entry_key` equals this. |  |
| source | string | Keep only rows whose `source` equals this. |  |
| ref | string | Keep only rows whose `ref` equals this. |  |
| order_id | string | Keep only rows whose `order_id` equals this. |  |


```http request
POST https://api.revenexx.com/v1/loyalty/turnover-entries
```

** A signed correction line with a reason (`ref`). A `key` makes a retry book once. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| agreement_id | string |  |  |
| amount | number |  |  |
| at | string |  |  |
| key | string |  |  |
| ref | string |  |  |


```http request
GET https://api.revenexx.com/v1/loyalty/turnover-entries/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |


```http request
POST https://api.revenexx.com/v1/loyalty/turnover-imports
```

** At most 500 rows, each one line under its own reference. From the first imported line an agreement counts imported lines only. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| rows | array |  |  |

