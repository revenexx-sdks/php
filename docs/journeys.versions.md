# JourneysVersions Service


```http request
GET https://api.revenexx.com/v1/journeys/versions
```

** Filter `?journey_id=`. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| limit | integer | Page size (default 50, max 200). |  |
| offset | integer | Row offset for pagination (default 0). |  |
| order | string | Sort by one column: 'column' | 'column.asc' | 'column.desc'. |  |
| id | string | Keep only rows whose `id` equals this. |  |
| journey_id | string | Keep only rows whose `journey_id` equals this. |  |
| version | string | Keep only rows whose `version` equals this. |  |
| state | string | Keep only rows whose `state` equals this. |  |
| entry_key | string | Keep only rows whose `entry_key` equals this. |  |
| step_count | string | Keep only rows whose `step_count` equals this. |  |
| published_by | string | Keep only rows whose `published_by` equals this. |  |
| notes | string | Keep only rows whose `notes` equals this. |  |


```http request
GET https://api.revenexx.com/v1/journeys/versions/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |

