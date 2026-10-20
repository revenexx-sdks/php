# LoyaltyRewards Service


```http request
GET https://api.revenexx.com/v1/loyalty/reward-redemptions
```

** Filter `?membership_id=`, `?reward_id=`, `?state=`. Read-only. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| limit | integer | Page size (default 50, max 200). |  |
| offset | integer | Row offset for pagination (default 0). |  |
| order | string | Sort by one column: 'column' | 'column.asc' | 'column.desc'. |  |
| id | string | Keep only rows whose `id` equals this. |  |
| membership_id | string | Keep only rows whose `membership_id` equals this. |  |
| reward_id | string | Keep only rows whose `reward_id` equals this. |  |
| points | string | Keep only rows whose `points` equals this. |  |
| voucher_code | string | Keep only rows whose `voucher_code` equals this. |  |
| ledger_entry_id | string | Keep only rows whose `ledger_entry_id` equals this. |  |
| request_key | string | Keep only rows whose `request_key` equals this. |  |
| state | string | Keep only rows whose `state` equals this. |  |
| used_order_id | string | Keep only rows whose `used_order_id` equals this. |  |


```http request
GET https://api.revenexx.com/v1/loyalty/reward-redemptions/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |


```http request
GET https://api.revenexx.com/v1/loyalty/rewards
```

** Filter `?program_id=`, `?active=true`. **

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
| description | string | Keep only rows whose `description` equals this. |  |
| points_cost | string | Keep only rows whose `points_cost` equals this. |  |
| promotion_id | string | Keep only rows whose `promotion_id` equals this. |  |
| voucher_batch_id | string | Keep only rows whose `voucher_batch_id` equals this. |  |
| min_tier_id | string | Keep only rows whose `min_tier_id` equals this. |  |
| active | string | Keep only rows whose `active` equals this. |  |
| redeemed_count | string | Keep only rows whose `redeemed_count` equals this. |  |
| external_id | string | Keep only rows whose `external_id` equals this. |  |
| deleted_by | string | Keep only rows whose `deleted_by` equals this. |  |
| deleted_by_id | string | Keep only rows whose `deleted_by_id` equals this. |  |
| trash_batch | string | Keep only rows whose `trash_batch` equals this. |  |
| purge_blocked_reason | string | Keep only rows whose `purge_blocked_reason` equals this. |  |


```http request
POST https://api.revenexx.com/v1/loyalty/rewards
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| active | boolean | Switched on. A switched-off row stays for its history and is not offered. |  |
| code | string | The reward code, unique within the programme. |  |
| description | string | What it is, in the merchant own words. |  |
| external_id | string | The key of this record in the system that leads it — a marketing tool, an ERP, an ad platform. Unique per tenant when set; an import matches on it. |  |
| external_refs | any | Every OTHER system that knows this record, keyed by system name. `external_id` is the leading system; this is the rest. Not a query parameter: a jsonb column is compared as a whole document. |  |
| labels | any | What it is called, as `{ de, en }`. A bare string is taken for both. |  |
| metadata | any | Free-form JSON a caller may keep on the row. Nothing here reads it. |  |
| min_tier_id | string | The lowest tier allowed to redeem it. Empty: every member. |  |
| points_cost | integer | How many points the reward costs. |  |
| program_id | string | The programme this row belongs to. |  |
| promotion_id | string | The promotion whose voucher the member receives. |  |
| source_data | any | The source system's own view of the record as the last sync saw it, kept for reconciliation. Nothing in this app reads it. |  |
| source_synced_at | string | When a sync last wrote this record from its source system. Null for a record only ever kept here. |  |
| voucher_batch_id | string | The voucher series the code is drawn from. Empty: the oldest series of the promotion that can still issue codes. |  |


```http request
POST https://api.revenexx.com/v1/loyalty/rewards/trash/empty
```

** Every reward in the trash is deleted for good on its own terms. One that something still blocks stays in the trash and is named with its reason, so a partial success says exactly what remained. Not for a storefront contact. **


```http request
POST https://api.revenexx.com/v1/loyalty/rewards/trash/purge
```

** What the nightly purge does, callable by hand: every reward in the trash for longer than the tenant trash retention (90 days unless the tenant set another) is deleted for good through the same rules as a second delete. A blocked one stays and carries its reason. When the retention cannot be read, nothing is deleted. Also the cron schedule. **


```http request
DELETE https://api.revenexx.com/v1/loyalty/rewards/{id}
```

** The first DELETE moves the reward into the trash: it stays, with everything hanging off it, and counts nowhere until it is restored. A redeemed reward is refused (`trash_blocked`, blocker `redeemed`) — deactivate it instead. Restoring waits for its programme to be restored (`parent_in_trash`). A DELETE on a reward already in the trash deletes it for good — refused while something still needs it, and not for a storefront contact. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |


```http request
GET https://api.revenexx.com/v1/loyalty/rewards/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |


```http request
PUT https://api.revenexx.com/v1/loyalty/rewards/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |
| active | boolean | Switched on. A switched-off row stays for its history and is not offered. |  |
| code | string | The reward code, unique within the programme. |  |
| description | string | What it is, in the merchant own words. |  |
| external_id | string | The key of this record in the system that leads it — a marketing tool, an ERP, an ad platform. Unique per tenant when set; an import matches on it. |  |
| external_refs | any | Every OTHER system that knows this record, keyed by system name. `external_id` is the leading system; this is the rest. Not a query parameter: a jsonb column is compared as a whole document. |  |
| labels | any | What it is called, as `{ de, en }`. A bare string is taken for both. |  |
| metadata | any | Free-form JSON a caller may keep on the row. Nothing here reads it. |  |
| min_tier_id | string | The lowest tier allowed to redeem it. Empty: every member. |  |
| points_cost | integer | How many points the reward costs. |  |
| program_id | string | The programme this row belongs to. |  |
| promotion_id | string | The promotion whose voucher the member receives. |  |
| source_data | any | The source system's own view of the record as the last sync saw it, kept for reconciliation. Nothing in this app reads it. |  |
| source_synced_at | string | When a sync last wrote this record from its source system. Null for a record only ever kept here. |  |
| voucher_batch_id | string | The voucher series the code is drawn from. Empty: the oldest series of the promotion that can still issue codes. |  |


```http request
POST https://api.revenexx.com/v1/loyalty/rewards/{id}/redeem
```

** Draws a single-use voucher for the member from promotions, then takes the points. No voucher, no points taken. A `key` makes a retry answer the first redemption. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |
| contact_id | string | The member, or for a company membership the person the voucher is for. |  |
| key | string |  |  |
| membership_id | string |  |  |
| organization_id | string |  |  |


```http request
POST https://api.revenexx.com/v1/loyalty/rewards/{id}/restore
```

** Clears the trash marks on the reward. Its parts were never touched, so they come back with it, in the state it was in. The same right as deleting. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |

