# CampaignsSpend Service


```http request
GET https://api.revenexx.com/v1/campaigns/spend
```

** List booked days of ad spend **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| limit | integer | Page size (default 50, max 200). |  |
| offset | integer | Row offset for pagination (default 0). |  |
| order | string | Sort by one column: 'column' | 'column.asc' | 'column.desc'. |  |
| id | string | Keep only rows whose `id` equals this. |  |
| campaign_id | string | Keep only rows whose `campaign_id` equals this. |  |
| budget_id | string | Keep only rows whose `budget_id` equals this. |  |
| platform | string | Keep only rows whose `platform` equals this. |  |
| spend_date | string | Keep only rows whose `spend_date` equals this. |  |
| currency | string | Keep only rows whose `currency` equals this. |  |
| impressions | string | Keep only rows whose `impressions` equals this. |  |
| clicks | string | Keep only rows whose `clicks` equals this. |  |


```http request
POST https://api.revenexx.com/v1/campaigns/spend
```

** At most 500 rows. Each books one day of one platform into the campaign ads budget line, created on first use; booking a day again replaces it. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| rows | array |  |  |


```http request
GET https://api.revenexx.com/v1/campaigns/spend/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |

