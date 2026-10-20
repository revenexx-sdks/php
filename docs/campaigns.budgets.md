# CampaignsBudgets Service


```http request
GET https://api.revenexx.com/v1/campaigns/budgets
```

** List budget lines **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| limit | integer | Page size (default 50, max 200). |  |
| offset | integer | Row offset for pagination (default 0). |  |
| order | string | Sort by one column: 'column' | 'column.asc' | 'column.desc'. |  |
| id | string | Keep only rows whose `id` equals this. |  |
| campaign_id | string | Keep only rows whose `campaign_id` equals this. |  |
| line | string | Keep only rows whose `line` equals this. |  |
| currency | string | Keep only rows whose `currency` equals this. |  |
| source | string | Keep only rows whose `source` equals this. |  |
| platform | string | Keep only rows whose `platform` equals this. |  |
| notes | string | Keep only rows whose `notes` equals this. |  |


```http request
POST https://api.revenexx.com/v1/campaigns/budgets
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| campaign_id | string | The campaign this row belongs to. |  |
| currency | string | Three-letter currency code, e.g. EUR. |  |
| line | string | The name of the line, unique within the campaign, e.g. Print or ads:meta. |  |
| notes | string | Anything worth saying about the line. |  |
| planned | number | Money planned for this line. |  |
| spent | number | Money spent. For a line fed by ad spend, the sum of the booked days. |  |


```http request
DELETE https://api.revenexx.com/v1/campaigns/budgets/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |


```http request
GET https://api.revenexx.com/v1/campaigns/budgets/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |


```http request
PUT https://api.revenexx.com/v1/campaigns/budgets/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |
| campaign_id | string | The campaign this row belongs to. |  |
| currency | string | Three-letter currency code, e.g. EUR. |  |
| line | string | The name of the line, unique within the campaign, e.g. Print or ads:meta. |  |
| notes | string | Anything worth saying about the line. |  |
| planned | number | Money planned for this line. |  |
| spent | number | Money spent. For a line fed by ad spend, the sum of the booked days. |  |

