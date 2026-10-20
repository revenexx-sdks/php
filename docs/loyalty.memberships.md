# LoyaltyMemberships Service


```http request
GET https://api.revenexx.com/v1/loyalty/memberships
```

** Filter `?program_id=`, `?contact_id=`, `?organization_id=`, `?tier_id=` or `?tier_code=` (what the audiences rule reads), `?status=active`. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| limit | integer | Page size (default 50, max 200). |  |
| offset | integer | Row offset for pagination (default 0). |  |
| order | string | Sort by one column: 'column' | 'column.asc' | 'column.desc'. |  |
| id | string | Keep only rows whose `id` equals this. |  |
| program_id | string | Keep only rows whose `program_id` equals this. |  |
| holder | string | Keep only rows whose `holder` equals this. |  |
| holder_key | string | Keep only rows whose `holder_key` equals this. |  |
| contact_id | string | Keep only rows whose `contact_id` equals this. |  |
| organization_id | string | Keep only rows whose `organization_id` equals this. |  |
| tier_id | string | Keep only rows whose `tier_id` equals this. |  |
| tier_code | string | Keep only rows whose `tier_code` equals this. |  |
| status | string | Keep only rows whose `status` equals this. |  |
| points_balance | string | Keep only rows whose `points_balance` equals this. |  |
| points_period | string | Keep only rows whose `points_period` equals this. |  |
| points_lifetime | string | Keep only rows whose `points_lifetime` equals this. |  |
| market | string | Keep only rows whose `market` equals this. |  |
| external_id | string | Keep only rows whose `external_id` equals this. |  |


```http request
POST https://api.revenexx.com/v1/loyalty/memberships
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| contact_id | string | The person, as customers knows them. |  |
| external_id | string | The key of this record in the system that leads it — a marketing tool, an ERP, an ad platform. Unique per tenant when set; an import matches on it. |  |
| external_refs | any | Every OTHER system that knows this record, keyed by system name. `external_id` is the leading system; this is the rest. Not a query parameter: a jsonb column is compared as a whole document. |  |
| market | string | The market the member joined in, when known. |  |
| metadata | any | Free-form JSON a caller may keep on the row. Nothing here reads it. |  |
| organization_id | string | The company, as customers knows it. |  |
| program_id | string | The programme this row belongs to. |  |
| source_data | any | The source system's own view of the record as the last sync saw it, kept for reconciliation. Nothing in this app reads it. |  |
| source_synced_at | string | When a sync last wrote this record from its source system. Null for a record only ever kept here. |  |
| status | string | `active`, `paused` (nothing earned or redeemed) or `ended` (final). |  |


```http request
GET https://api.revenexx.com/v1/loyalty/memberships/lookup
```

** What the storefront account page and cart perk hint, the loyalty_tier condition in promotions and the loyalty_tier rule in audiences ask. A contact counts together with its company. Only active memberships of active programmes answer; `tier_codes` lists every tier held. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| contact_id | string | The person. Their company is looked up with them. |  |
| organization_id | string | The company. |  |


```http request
DELETE https://api.revenexx.com/v1/loyalty/memberships/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |


```http request
GET https://api.revenexx.com/v1/loyalty/memberships/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |


```http request
PUT https://api.revenexx.com/v1/loyalty/memberships/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |
| contact_id | string | The person, as customers knows them. |  |
| external_id | string | The key of this record in the system that leads it — a marketing tool, an ERP, an ad platform. Unique per tenant when set; an import matches on it. |  |
| external_refs | any | Every OTHER system that knows this record, keyed by system name. `external_id` is the leading system; this is the rest. Not a query parameter: a jsonb column is compared as a whole document. |  |
| market | string | The market the member joined in, when known. |  |
| metadata | any | Free-form JSON a caller may keep on the row. Nothing here reads it. |  |
| organization_id | string | The company, as customers knows it. |  |
| program_id | string | The programme this row belongs to. |  |
| source_data | any | The source system's own view of the record as the last sync saw it, kept for reconciliation. Nothing in this app reads it. |  |
| source_synced_at | string | When a sync last wrote this record from its source system. Null for a record only ever kept here. |  |
| status | string | `active`, `paused` (nothing earned or redeemed) or `ended` (final). |  |


```http request
POST https://api.revenexx.com/v1/loyalty/memberships/{id}/adjust
```

** A credit or a debit with a reason. A debit never takes the balance below zero. A `key` makes a retry book once. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |
| key | string |  |  |
| points | integer | Positive to credit, negative to debit. |  |
| reason | string |  |  |


```http request
GET https://api.revenexx.com/v1/loyalty/memberships/{id}/progress
```

** Every tier of the programme, lowest first, with how far the member has come towards it: points of this period for a points programme, this year's turnover through the agreement for a turnover bonus. Reached tiers say so, the next says how much is missing. No tiers, or no agreement this year, answers no rows. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |


```http request
POST https://api.revenexx.com/v1/loyalty/memberships/{id}/referral-code
```

** Answers the active code of the membership, making one on first ask. A company membership names the person who refers with `contact_id`. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |
| contact_id | string |  |  |

