# JourneysSteps Service


```http request
GET https://api.revenexx.com/v1/journeys/steps
```

** Filter `?journey_version_id=` or `?journey_id=&version=`. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| limit | integer | Page size (default 50, max 200). |  |
| offset | integer | Row offset for pagination (default 0). |  |
| order | string | Sort by one column: 'column' | 'column.asc' | 'column.desc'. |  |
| id | string | Keep only rows whose `id` equals this. |  |
| journey_version_id | string | Keep only rows whose `journey_version_id` equals this. |  |
| journey_id | string | Keep only rows whose `journey_id` equals this. |  |
| version | string | Keep only rows whose `version` equals this. |  |
| key | string | Keep only rows whose `key` equals this. |  |
| kind | string | Keep only rows whose `kind` equals this. |  |
| label | string | Keep only rows whose `label` equals this. |  |
| next_key | string | Keep only rows whose `next_key` equals this. |  |
| yes_key | string | Keep only rows whose `yes_key` equals this. |  |
| no_key | string | Keep only rows whose `no_key` equals this. |  |
| position | string | Keep only rows whose `position` equals this. |  |


```http request
GET https://api.revenexx.com/v1/journeys/steps/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |

