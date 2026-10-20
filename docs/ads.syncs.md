# AdsSyncs Service


```http request
GET https://api.revenexx.com/v1/ads/audience-syncs
```

** Filter `?ad_account_id=`, `?audience_id=`, `?state=failed`. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| limit | integer | Page size (default 50, max 200). |  |
| offset | integer | Row offset for pagination (default 0). |  |
| order | string | Sort by one column: 'column' | 'column.asc' | 'column.desc'. |  |
| id | string | Keep only rows whose `id` equals this. |  |
| ad_account_id | string | Keep only rows whose `ad_account_id` equals this. |  |
| audience_id | string | Keep only rows whose `audience_id` equals this. |  |
| audience_code | string | Keep only rows whose `audience_code` equals this. |  |
| subscription_type | string | Keep only rows whose `subscription_type` equals this. |  |
| external_audience_id | string | Keep only rows whose `external_audience_id` equals this. |  |
| state | string | Keep only rows whose `state` equals this. |  |
| active | string | Keep only rows whose `active` equals this. |  |
| stale | string | Keep only rows whose `stale` equals this. |  |
| member_count | string | Keep only rows whose `member_count` equals this. |  |
| matched_count | string | Keep only rows whose `matched_count` equals this. |  |
| uploaded_count | string | Keep only rows whose `uploaded_count` equals this. |  |
| skipped_count | string | Keep only rows whose `skipped_count` equals this. |  |
| last_error | string | Keep only rows whose `last_error` equals this. |  |


```http request
POST https://api.revenexx.com/v1/ads/audience-syncs
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| active | boolean | Switched on. A switched-off row stays for its history and does nothing. |  |
| ad_account_id | string | The ad account this row belongs to. |  |
| audience_code | string | Its code, copied for display. |  |
| audience_id | string | The audience in the audiences app. |  |
| external_audience_id | string | The custom audience id on the platform, once the workflow created it. |  |
| metadata | any | Free-form JSON a caller may keep on the row. Nothing here reads it. |  |
| subscription_type | string | The marketing-consents subscription type whose confirmed consent covers uploading a member. |  |


```http request
DELETE https://api.revenexx.com/v1/ads/audience-syncs/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |


```http request
GET https://api.revenexx.com/v1/ads/audience-syncs/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |


```http request
PUT https://api.revenexx.com/v1/ads/audience-syncs/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |
| active | boolean | Switched on. A switched-off row stays for its history and does nothing. |  |
| ad_account_id | string | The ad account this row belongs to. |  |
| audience_code | string | Its code, copied for display. |  |
| audience_id | string | The audience in the audiences app. |  |
| external_audience_id | string | The custom audience id on the platform, once the workflow created it. |  |
| metadata | any | Free-form JSON a caller may keep on the row. Nothing here reads it. |  |
| subscription_type | string | The marketing-consents subscription type whose confirmed consent covers uploading a member. |  |


```http request
GET https://api.revenexx.com/v1/ads/audience-syncs/{id}/members
```

** SHA-256 of the trimmed, lower-cased e-mail of every member holding a confirmed subscription of the sync type — by default only consent, not the existing-customer exemption. Members without it are counted as skipped and never served. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |
| cursor | string | The next_cursor of the previous page. |  |
| limit | integer | Page size (default and max 500). |  |


```http request
POST https://api.revenexx.com/v1/ads/audience-syncs/{id}/request
```

** Announces `audience_sync.requested` for the workflow of the platform. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |
| data | object | Request body |  |


```http request
POST https://api.revenexx.com/v1/ads/audience-syncs/{id}/result
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |
| error | string |  |  |
| external_audience_id | string |  |  |
| matched_count | integer |  |  |
| member_count | integer |  |  |
| ok | boolean |  |  |
| skipped_count | integer |  |  |
| uploaded_count | integer |  |  |

