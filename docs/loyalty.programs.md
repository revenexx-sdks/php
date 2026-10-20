# LoyaltyPrograms Service


```http request
GET https://api.revenexx.com/v1/loyalty/programs
```

** Every programme of this tenant. Filter `?kind=turnover_bonus` for the B2B bonus programmes, `?active=true` for those running. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| limit | integer | Page size (default 50, max 200). |  |
| offset | integer | Row offset for pagination (default 0). |  |
| order | string | Sort by one column: 'column' | 'column.asc' | 'column.desc'. |  |
| trashed | string | `exclude` (default) leaves the trash out, `only` is the trash itself, `include` lists both. |  |
| id | string | Keep only rows whose `id` equals this. |  |
| code | string | Keep only rows whose `code` equals this. |  |
| description | string | Keep only rows whose `description` equals this. |  |
| kind | string | Keep only rows whose `kind` equals this. |  |
| holder | string | Keep only rows whose `holder` equals this. |  |
| currency | string | Keep only rows whose `currency` equals this. |  |
| period | string | Keep only rows whose `period` equals this. |  |
| auto_enroll | string | Keep only rows whose `auto_enroll` equals this. |  |
| active | string | Keep only rows whose `active` equals this. |  |
| member_count | string | Keep only rows whose `member_count` equals this. |  |
| external_id | string | Keep only rows whose `external_id` equals this. |  |
| deleted_by | string | Keep only rows whose `deleted_by` equals this. |  |
| deleted_by_id | string | Keep only rows whose `deleted_by_id` equals this. |  |
| trash_batch | string | Keep only rows whose `trash_batch` equals this. |  |
| purge_blocked_reason | string | Keep only rows whose `purge_blocked_reason` equals this. |  |


```http request
POST https://api.revenexx.com/v1/loyalty/programs
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| active | boolean | Switched on. A switched-off row stays for its history and is not offered. |  |
| auto_enroll | boolean | When on, a customer becomes a member with their first credited order (and a contact on registration), without being enrolled by hand. |  |
| code | string | The short identifier of the programme, unique per tenant, e.g. premium or club. |  |
| currency | string | The currency thresholds and bonuses are stated in. |  |
| description | string | What it is, in the merchant own words. |  |
| external_id | string | The key of this record in the system that leads it — a marketing tool, an ERP, an ad platform. Unique per tenant when set; an import matches on it. |  |
| external_refs | any | Every OTHER system that knows this record, keyed by system name. `external_id` is the leading system; this is the rest. Not a query parameter: a jsonb column is compared as a whole document. |  |
| holder | string | Who collects: `contact` (one person) or `organization` (a company whose orders all count together). A turnover bonus is always `organization`. Fixed once created. |  |
| kind | string | `points` (points per order, rewards) or `turnover_bonus` (a yearly bonus agreement per company). Fixed once created. |  |
| labels | any | What it is called, as `{ de, en }`. A bare string is taken for both. |  |
| metadata | any | Free-form JSON a caller may keep on the row. Nothing here reads it. |  |
| period | string | The window tiers are measured over: `calendar_year` or `rolling_12m`. A turnover bonus runs per calendar year. |  |
| source_data | any | The source system's own view of the record as the last sync saw it, kept for reconciliation. Nothing in this app reads it. |  |
| source_synced_at | string | When a sync last wrote this record from its source system. Null for a record only ever kept here. |  |


```http request
POST https://api.revenexx.com/v1/loyalty/programs/trash/empty
```

** Every programme in the trash is deleted for good on its own terms. One that something still blocks stays in the trash and is named with its reason, so a partial success says exactly what remained. Not for a storefront contact. **


```http request
POST https://api.revenexx.com/v1/loyalty/programs/trash/purge
```

** What the nightly purge does, callable by hand: every programme in the trash for longer than the tenant trash retention (90 days unless the tenant set another) is deleted for good through the same rules as a second delete. A blocked one stays and carries its reason. When the retention cannot be read, nothing is deleted. Also the cron schedule. **


```http request
DELETE https://api.revenexx.com/v1/loyalty/programs/{id}
```

** The first DELETE moves the programme into the trash: it stays, with everything hanging off it, and counts nowhere until it is restored. A programme with members or agreements is refused (`trash_blocked`, blocker `has_members`) — deactivate it instead. Its tiers and rewards go into the trash with it and come back with it. A DELETE on a programme already in the trash deletes it for good — refused while something still needs it, and not for a storefront contact. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |


```http request
GET https://api.revenexx.com/v1/loyalty/programs/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |


```http request
PUT https://api.revenexx.com/v1/loyalty/programs/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |
| active | boolean | Switched on. A switched-off row stays for its history and is not offered. |  |
| auto_enroll | boolean | When on, a customer becomes a member with their first credited order (and a contact on registration), without being enrolled by hand. |  |
| code | string | The short identifier of the programme, unique per tenant, e.g. premium or club. |  |
| currency | string | The currency thresholds and bonuses are stated in. |  |
| description | string | What it is, in the merchant own words. |  |
| external_id | string | The key of this record in the system that leads it — a marketing tool, an ERP, an ad platform. Unique per tenant when set; an import matches on it. |  |
| external_refs | any | Every OTHER system that knows this record, keyed by system name. `external_id` is the leading system; this is the rest. Not a query parameter: a jsonb column is compared as a whole document. |  |
| holder | string | Who collects: `contact` (one person) or `organization` (a company whose orders all count together). A turnover bonus is always `organization`. Fixed once created. |  |
| kind | string | `points` (points per order, rewards) or `turnover_bonus` (a yearly bonus agreement per company). Fixed once created. |  |
| labels | any | What it is called, as `{ de, en }`. A bare string is taken for both. |  |
| metadata | any | Free-form JSON a caller may keep on the row. Nothing here reads it. |  |
| period | string | The window tiers are measured over: `calendar_year` or `rolling_12m`. A turnover bonus runs per calendar year. |  |
| source_data | any | The source system's own view of the record as the last sync saw it, kept for reconciliation. Nothing in this app reads it. |  |
| source_synced_at | string | When a sync last wrote this record from its source system. Null for a record only ever kept here. |  |


```http request
GET https://api.revenexx.com/v1/loyalty/programs/{id}/figures
```

** Active members per tier, the highest tier first and members without a tier last, each with its share; the total is a `footer` row. No active member answers no rows. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |


```http request
POST https://api.revenexx.com/v1/loyalty/programs/{id}/open-period
```

** Opens one agreement per active member for the year (default: this year), each with its base derived from last year. Members who already have one keep it. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |
| period | string | The calendar year, e.g. 2027. |  |


```http request
POST https://api.revenexx.com/v1/loyalty/programs/{id}/restore
```

** Clears the trash marks on the programme. Its parts were never touched, so they come back with it, in the state it was in. The same right as deleting. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |

