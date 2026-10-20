# AdsLinks Service


```http request
GET https://api.revenexx.com/v1/ads/campaign-links
```

** Filter `?campaign_id=` for one campaign, `?campaign_id=` empty via the Cockpit for unmapped ones, `?ad_account_id=`. Mapping books the imported spend into the campaign. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| limit | integer | Page size (default 50, max 200). |  |
| offset | integer | Row offset for pagination (default 0). |  |
| order | string | Sort by one column: 'column' | 'column.asc' | 'column.desc'. |  |
| id | string | Keep only rows whose `id` equals this. |  |
| ad_account_id | string | Keep only rows whose `ad_account_id` equals this. |  |
| external_campaign_id | string | Keep only rows whose `external_campaign_id` equals this. |  |
| external_name | string | Keep only rows whose `external_name` equals this. |  |
| campaign_id | string | Keep only rows whose `campaign_id` equals this. |  |


```http request
POST https://api.revenexx.com/v1/ads/campaign-links
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| ad_account_id | string | The ad account this row belongs to. |  |
| campaign_id | string | The campaign, as the campaigns app knows it. |  |
| external_campaign_id | string | The ad campaign id on the platform. |  |
| external_name | string | Its name on the platform. |  |
| external_refs | any | Every OTHER system that knows this record, keyed by system name. `external_id` is the leading system; this is the rest. Not a query parameter: a jsonb column is compared as a whole document. |  |
| metadata | any | Free-form JSON a caller may keep on the row. Nothing here reads it. |  |
| source_data | any | The source system's own view of the record as the last sync saw it, kept for reconciliation. Nothing in this app reads it. |  |
| source_synced_at | string | When a sync last wrote this record from its source system. Null for a record only ever kept here. |  |


```http request
DELETE https://api.revenexx.com/v1/ads/campaign-links/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |


```http request
GET https://api.revenexx.com/v1/ads/campaign-links/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |


```http request
PUT https://api.revenexx.com/v1/ads/campaign-links/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |
| ad_account_id | string | The ad account this row belongs to. |  |
| campaign_id | string | The campaign, as the campaigns app knows it. |  |
| external_campaign_id | string | The ad campaign id on the platform. |  |
| external_name | string | Its name on the platform. |  |
| external_refs | any | Every OTHER system that knows this record, keyed by system name. `external_id` is the leading system; this is the rest. Not a query parameter: a jsonb column is compared as a whole document. |  |
| metadata | any | Free-form JSON a caller may keep on the row. Nothing here reads it. |  |
| source_data | any | The source system's own view of the record as the last sync saw it, kept for reconciliation. Nothing in this app reads it. |  |
| source_synced_at | string | When a sync last wrote this record from its source system. Null for a record only ever kept here. |  |

