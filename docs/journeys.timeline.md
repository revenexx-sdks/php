# JourneysTimeline Service


```http request
GET https://api.revenexx.com/v1/journeys/enrollment-events
```

** Filter `?enrollment_id=` for one person's timeline. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| limit | integer | Page size (default 50, max 200). |  |
| offset | integer | Row offset for pagination (default 0). |  |
| order | string | Sort by one column: 'column' | 'column.asc' | 'column.desc'. |  |
| id | string | Keep only rows whose `id` equals this. |  |
| enrollment_id | string | Keep only rows whose `enrollment_id` equals this. |  |
| journey_id | string | Keep only rows whose `journey_id` equals this. |  |
| version | string | Keep only rows whose `version` equals this. |  |
| step_key | string | Keep only rows whose `step_key` equals this. |  |
| kind | string | Keep only rows whose `kind` equals this. |  |
| outcome | string | Keep only rows whose `outcome` equals this. |  |
| event_key | string | Keep only rows whose `event_key` equals this. |  |


```http request
GET https://api.revenexx.com/v1/journeys/enrollment-events/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |

