# AdsConversions Service


```http request
GET https://api.revenexx.com/v1/ads/conversions
```

** The workflow reads `?state=ready`; filter also `?order_id=`, `?rule_id=`, `?platform=`. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| limit | integer | Page size (default 50, max 200). |  |
| offset | integer | Row offset for pagination (default 0). |  |
| order | string | Sort by one column: 'column' | 'column.asc' | 'column.desc'. |  |
| id | string | Keep only rows whose `id` equals this. |  |
| rule_id | string | Keep only rows whose `rule_id` equals this. |  |
| ad_account_id | string | Keep only rows whose `ad_account_id` equals this. |  |
| event_key | string | Keep only rows whose `event_key` equals this. |  |
| event | string | Keep only rows whose `event` equals this. |  |
| platform | string | Keep only rows whose `platform` equals this. |  |
| source_ref | string | Keep only rows whose `source_ref` equals this. |  |
| order_id | string | Keep only rows whose `order_id` equals this. |  |
| click_id | string | Keep only rows whose `click_id` equals this. |  |
| click_id_kind | string | Keep only rows whose `click_id_kind` equals this. |  |
| hashed_email | string | Keep only rows whose `hashed_email` equals this. |  |
| currency | string | Keep only rows whose `currency` equals this. |  |
| state | string | Keep only rows whose `state` equals this. |  |
| attempts | string | Keep only rows whose `attempts` equals this. |  |
| external_ref | string | Keep only rows whose `external_ref` equals this. |  |
| last_error | string | Keep only rows whose `last_error` equals this. |  |


```http request
GET https://api.revenexx.com/v1/ads/conversions/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |


```http request
POST https://api.revenexx.com/v1/ads/conversions/{id}/result
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |
| error | string |  |  |
| external_ref | string |  |  |
| ok | boolean |  |  |


```http request
POST https://api.revenexx.com/v1/ads/conversions/{id}/retry
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |
| data | object | Request body |  |

