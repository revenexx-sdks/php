# LoyaltyTiers Service


```http request
GET https://api.revenexx.com/v1/loyalty/tiers
```

** Filter `?program_id=` for one programme, `?code=` to find a tier by the code a promotion or an audience names. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| limit | integer | Page size (default 50, max 200). |  |
| offset | integer | Row offset for pagination (default 0). |  |
| order | string | Sort by one column: 'column' | 'column.asc' | 'column.desc'. |  |
| trashed | string | `exclude` (default) leaves the trash out, `only` is the trash itself, `include` lists both. |  |
| id | string | Keep only rows whose `id` equals this. |  |
| program_id | string | Keep only rows whose `program_id` equals this. |  |
| code | string | Keep only rows whose `code` equals this. |  |
| position | string | Keep only rows whose `position` equals this. |  |
| threshold_kind | string | Keep only rows whose `threshold_kind` equals this. |  |
| active | string | Keep only rows whose `active` equals this. |  |
| external_id | string | Keep only rows whose `external_id` equals this. |  |
| deleted_by | string | Keep only rows whose `deleted_by` equals this. |  |
| deleted_by_id | string | Keep only rows whose `deleted_by_id` equals this. |  |
| trash_batch | string | Keep only rows whose `trash_batch` equals this. |  |
| purge_blocked_reason | string | Keep only rows whose `purge_blocked_reason` equals this. |  |


```http request
POST https://api.revenexx.com/v1/loyalty/tiers
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| active | boolean | Switched on. A switched-off row stays for its history and is not offered. |  |
| bonus_percent | number | Turnover bonus: the percentage of the whole year turnover paid at this tier. Not cumulative. |  |
| code | string | The tier code, unique within the programme. This is what a promotion condition and an audience rule name. |  |
| external_id | string | The key of this record in the system that leads it — a marketing tool, an ERP, an ad platform. Unique per tenant when set; an import matches on it. |  |
| external_refs | any | Every OTHER system that knows this record, keyed by system name. `external_id` is the leading system; this is the rest. Not a query parameter: a jsonb column is compared as a whole document. |  |
| labels | any | What it is called, as `{ de, en }`. A bare string is taken for both. |  |
| metadata | any | Free-form JSON a caller may keep on the row. Nothing here reads it. |  |
| perks | any | What the tier stands for, as a list of `{ de, en }` texts the storefront shows. The perk itself is a promotion. |  |
| points_multiplier | number | Points programme: earnings are multiplied by this while a member holds the tier. |  |
| position | integer | Order among tiers with the same threshold. |  |
| program_id | string | The programme this row belongs to. |  |
| source_data | any | The source system's own view of the record as the last sync saw it, kept for reconciliation. Nothing in this app reads it. |  |
| source_synced_at | string | When a sync last wrote this record from its source system. Null for a record only ever kept here. |  |
| threshold_kind | string | `absolute`: points earned in the period, or turnover in the programme currency. `relative_to_base`: a percentage of an agreement base turnover (100 = last year reached). |  |
| threshold_value | number | The threshold. 0 makes an entry tier every member holds. |  |


```http request
POST https://api.revenexx.com/v1/loyalty/tiers/trash/empty
```

** Every tier in the trash is deleted for good on its own terms. One that something still blocks stays in the trash and is named with its reason, so a partial success says exactly what remained. Not for a storefront contact. **


```http request
POST https://api.revenexx.com/v1/loyalty/tiers/trash/purge
```

** What the nightly purge does, callable by hand: every tier in the trash for longer than the tenant trash retention (90 days unless the tenant set another) is deleted for good through the same rules as a second delete. A blocked one stays and carries its reason. When the retention cannot be read, nothing is deleted. Also the cron schedule. **


```http request
DELETE https://api.revenexx.com/v1/loyalty/tiers/{id}
```

** The first DELETE moves the tier into the trash: it stays, with everything hanging off it, and counts nowhere until it is restored. A tier active members hold is refused (`trash_blocked`, blocker `tier_in_use`). Restoring waits for its programme to be restored (`parent_in_trash`). A DELETE on a tier already in the trash deletes it for good — refused while something still needs it, and not for a storefront contact. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |


```http request
GET https://api.revenexx.com/v1/loyalty/tiers/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |


```http request
PUT https://api.revenexx.com/v1/loyalty/tiers/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |
| active | boolean | Switched on. A switched-off row stays for its history and is not offered. |  |
| bonus_percent | number | Turnover bonus: the percentage of the whole year turnover paid at this tier. Not cumulative. |  |
| code | string | The tier code, unique within the programme. This is what a promotion condition and an audience rule name. |  |
| external_id | string | The key of this record in the system that leads it — a marketing tool, an ERP, an ad platform. Unique per tenant when set; an import matches on it. |  |
| external_refs | any | Every OTHER system that knows this record, keyed by system name. `external_id` is the leading system; this is the rest. Not a query parameter: a jsonb column is compared as a whole document. |  |
| labels | any | What it is called, as `{ de, en }`. A bare string is taken for both. |  |
| metadata | any | Free-form JSON a caller may keep on the row. Nothing here reads it. |  |
| perks | any | What the tier stands for, as a list of `{ de, en }` texts the storefront shows. The perk itself is a promotion. |  |
| points_multiplier | number | Points programme: earnings are multiplied by this while a member holds the tier. |  |
| position | integer | Order among tiers with the same threshold. |  |
| program_id | string | The programme this row belongs to. |  |
| source_data | any | The source system's own view of the record as the last sync saw it, kept for reconciliation. Nothing in this app reads it. |  |
| source_synced_at | string | When a sync last wrote this record from its source system. Null for a record only ever kept here. |  |
| threshold_kind | string | `absolute`: points earned in the period, or turnover in the programme currency. `relative_to_base`: a percentage of an agreement base turnover (100 = last year reached). |  |
| threshold_value | number | The threshold. 0 makes an entry tier every member holds. |  |


```http request
POST https://api.revenexx.com/v1/loyalty/tiers/{id}/restore
```

** Clears the trash marks on the tier. Its parts were never touched, so they come back with it, in the state it was in. The same right as deleting. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |

