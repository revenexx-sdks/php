# AdsAccounts Service


```http request
GET https://api.revenexx.com/v1/ads/accounts
```

** Every ad account, without the trash unless `trashed` asks for it. Filter `?platform=`, `?status=connected`. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| limit | integer | Page size (default 50, max 200). |  |
| offset | integer | Row offset for pagination (default 0). |  |
| order | string | Sort by one column: 'column' | 'column.asc' | 'column.desc'. |  |
| trashed | string | `exclude` (default) leaves the trash out, `only` is the trash itself, `include` lists both. |  |
| id | string | Keep only rows whose `id` equals this. |  |
| platform | string | Keep only rows whose `platform` equals this. |  |
| external_account_id | string | Keep only rows whose `external_account_id` equals this. |  |
| name | string | Keep only rows whose `name` equals this. |  |
| connection_ref | string | Keep only rows whose `connection_ref` equals this. |  |
| status | string | Keep only rows whose `status` equals this. |  |
| currency | string | Keep only rows whose `currency` equals this. |  |
| last_error | string | Keep only rows whose `last_error` equals this. |  |
| clicks_total | string | Keep only rows whose `clicks_total` equals this. |  |
| conversions_total | string | Keep only rows whose `conversions_total` equals this. |  |
| deleted_by | string | Keep only rows whose `deleted_by` equals this. |  |
| deleted_by_id | string | Keep only rows whose `deleted_by_id` equals this. |  |
| trash_batch | string | Keep only rows whose `trash_batch` equals this. |  |
| purge_blocked_reason | string | Keep only rows whose `purge_blocked_reason` equals this. |  |


```http request
POST https://api.revenexx.com/v1/ads/accounts
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| clicks_total | integer | All clicks the spend imports reported. Recounted with spend_total. |  |
| connection_ref | string | The Integration Studio connection that holds the platform login. Without one the account is not connected. |  |
| conversion_value_total | number | The value of those conversions in the account's currency. Recounted with spend_total. |  |
| conversions_total | integer | Conversions recorded with consent — skipped ones not counted. Recounted with spend_total. |  |
| currency | string | Three-letter currency code, e.g. EUR. |  |
| external_account_id | string | The account id on the platform (ad account, customer id, LinkedIn account). |  |
| external_refs | any | Every OTHER system that knows this record, keyed by system name. `external_id` is the leading system; this is the rest. Not a query parameter: a jsonb column is compared as a whole document. |  |
| figures_at | string | When the totals were last recounted. |  |
| metadata | any | Free-form JSON a caller may keep on the row. Nothing here reads it. |  |
| name | string | What the merchant calls the account. |  |
| platform | string | `meta`, `google_ads` or `linkedin`. |  |
| roas | number | conversion_value_total divided by spend_total, two decimals; empty while nothing was spent. |  |
| source_data | any | The source system's own view of the record as the last sync saw it, kept for reconciliation. Nothing in this app reads it. |  |
| source_synced_at | string | When a sync last wrote this record from its source system. Null for a record only ever kept here. |  |
| spend_total | number | All spend imported for the account, in its currency. Recounted by the hourly run and after each spend import; never written by a caller. |  |


```http request
POST https://api.revenexx.com/v1/ads/accounts/trash/empty
```

** Every ad account in the trash is deleted for good on its own terms. One that something still blocks stays in the trash and is named with its reason, so a partial success says exactly what remained. Not for a storefront contact. **


```http request
POST https://api.revenexx.com/v1/ads/accounts/trash/purge
```

** What the nightly purge does, callable by hand: every ad account in the trash for longer than the tenant trash retention (90 days unless the tenant set another) is deleted for good through the same rules as a second delete. A blocked one stays and carries its reason. When the retention cannot be read, nothing is deleted. Also the cron schedule. **


```http request
DELETE https://api.revenexx.com/v1/ads/accounts/{id}
```

** The first DELETE moves the ad account into the trash: it stays, with everything hanging off it, and counts nowhere until it is restored. Only an account that never booked spend or sent a conversion goes into the trash; one that did is refused (`trash_blocked`, blocker `has_history`) — disconnect it instead. Its audience syncs, conversion rules and campaign links stay untouched and do nothing while it is in the trash; they are deleted with it for good. A DELETE on a ad account already in the trash deletes it for good — refused while something still needs it, and not for a storefront contact. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |


```http request
GET https://api.revenexx.com/v1/ads/accounts/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |


```http request
PUT https://api.revenexx.com/v1/ads/accounts/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |
| clicks_total | integer | All clicks the spend imports reported. Recounted with spend_total. |  |
| connection_ref | string | The Integration Studio connection that holds the platform login. Without one the account is not connected. |  |
| conversion_value_total | number | The value of those conversions in the account's currency. Recounted with spend_total. |  |
| conversions_total | integer | Conversions recorded with consent — skipped ones not counted. Recounted with spend_total. |  |
| currency | string | Three-letter currency code, e.g. EUR. |  |
| external_account_id | string | The account id on the platform (ad account, customer id, LinkedIn account). |  |
| external_refs | any | Every OTHER system that knows this record, keyed by system name. `external_id` is the leading system; this is the rest. Not a query parameter: a jsonb column is compared as a whole document. |  |
| figures_at | string | When the totals were last recounted. |  |
| metadata | any | Free-form JSON a caller may keep on the row. Nothing here reads it. |  |
| name | string | What the merchant calls the account. |  |
| platform | string | `meta`, `google_ads` or `linkedin`. |  |
| roas | number | conversion_value_total divided by spend_total, two decimals; empty while nothing was spent. |  |
| source_data | any | The source system's own view of the record as the last sync saw it, kept for reconciliation. Nothing in this app reads it. |  |
| source_synced_at | string | When a sync last wrote this record from its source system. Null for a record only ever kept here. |  |
| spend_total | number | All spend imported for the account, in its currency. Recounted by the hourly run and after each spend import; never written by a caller. |  |


```http request
POST https://api.revenexx.com/v1/ads/accounts/{id}/restore
```

** Clears the trash marks on the ad account. Its parts were never touched, so they come back with it, in the state it was in. The same right as deleting. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |


```http request
POST https://api.revenexx.com/v1/ads/accounts/{id}/status
```

** Called by a connector workflow when a login expired or works again. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |
| error | string |  |  |
| status | string |  |  |

