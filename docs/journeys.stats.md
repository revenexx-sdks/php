# JourneysStats Service


```http request
GET https://api.revenexx.com/v1/journeys/step-stats
```

** List step counters **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| limit | integer | Page size (default 50, max 200). |  |
| offset | integer | Row offset for pagination (default 0). |  |
| order | string | Sort by one column: 'column' | 'column.asc' | 'column.desc'. |  |
| id | string | Keep only rows whose `id` equals this. |  |
| journey_id | string | Keep only rows whose `journey_id` equals this. |  |
| version | string | Keep only rows whose `version` equals this. |  |
| step_key | string | Keep only rows whose `step_key` equals this. |  |
| entered | string | Keep only rows whose `entered` equals this. |  |
| passed | string | Keep only rows whose `passed` equals this. |  |
| sent | string | Keep only rows whose `sent` equals this. |  |
| skipped | string | Keep only rows whose `skipped` equals this. |  |
| failed | string | Keep only rows whose `failed` equals this. |  |
| exited | string | Keep only rows whose `exited` equals this. |  |
| clicked | string | Keep only rows whose `clicked` equals this. |  |
| goal_reached | string | Keep only rows whose `goal_reached` equals this. |  |


```http request
GET https://api.revenexx.com/v1/journeys/step-stats/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |

