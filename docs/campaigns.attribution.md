# CampaignsAttribution Service


```http request
GET https://api.revenexx.com/v1/campaigns/attribution-facts
```

** The ledger. Filter `?campaign_id=`, `?order_id=`, `?is_last_touch=true`. Read-only: facts are written from orders, redemptions and touches. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| limit | integer | Page size (default 50, max 200). |  |
| offset | integer | Row offset for pagination (default 0). |  |
| order | string | Sort by one column: 'column' | 'column.asc' | 'column.desc'. |  |
| id | string | Keep only rows whose `id` equals this. |  |
| fact_key | string | Keep only rows whose `fact_key` equals this. |  |
| campaign_id | string | Keep only rows whose `campaign_id` equals this. |  |
| order_id | string | Keep only rows whose `order_id` equals this. |  |
| order_number | string | Keep only rows whose `order_number` equals this. |  |
| contact_id | string | Keep only rows whose `contact_id` equals this. |  |
| organization_id | string | Keep only rows whose `organization_id` equals this. |  |
| currency | string | Keep only rows whose `currency` equals this. |  |
| market | string | Keep only rows whose `market` equals this. |  |
| touch_kind | string | Keep only rows whose `touch_kind` equals this. |  |
| touch_ref | string | Keep only rows whose `touch_ref` equals this. |  |
| is_first_touch | string | Keep only rows whose `is_first_touch` equals this. |  |


```http request
GET https://api.revenexx.com/v1/campaigns/attribution-facts/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |


```http request
POST https://api.revenexx.com/v1/campaigns/attribution/sweep
```

** The hourly schedule, callable by hand: reads committed redemptions of attached promotions and orders placed in the last 48 hours from their apps, and records facts under the same keys the event handlers use. Also moves campaigns whose window opened or closed. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| data | object | Request body |  |

