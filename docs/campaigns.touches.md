# CampaignsTouches Service


```http request
GET https://api.revenexx.com/v1/campaigns/touches
```

** Filter `?campaign_id=`, `?kind=`, `?contact_id=`. Read-only. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| limit | integer | Page size (default 50, max 200). |  |
| offset | integer | Row offset for pagination (default 0). |  |
| order | string | Sort by one column: 'column' | 'column.asc' | 'column.desc'. |  |
| id | string | Keep only rows whose `id` equals this. |  |
| touch_key | string | Keep only rows whose `touch_key` equals this. |  |
| campaign_id | string | Keep only rows whose `campaign_id` equals this. |  |
| kind | string | Keep only rows whose `kind` equals this. |  |
| ref | string | Keep only rows whose `ref` equals this. |  |
| contact_id | string | Keep only rows whose `contact_id` equals this. |  |
| session_key | string | Keep only rows whose `session_key` equals this. |  |
| order_id | string | Keep only rows whose `order_id` equals this. |  |
| market | string | Keep only rows whose `market` equals this. |  |


```http request
POST https://api.revenexx.com/v1/campaigns/touches
```

** A batch of at most 500 on-site impressions, on-site clicks and ad clicks. Each item is judged on its own; an item with a key already recorded is counted as a duplicate. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| touches | array |  |  |


```http request
GET https://api.revenexx.com/v1/campaigns/touches/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |

