# JourneysEnrollments Service


```http request
GET https://api.revenexx.com/v1/journeys/enrollments
```

** Filter `?journey_id=`, `?state=`, `?contact_id=`, `?current_step=`. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| limit | integer | Page size (default 50, max 200). |  |
| offset | integer | Row offset for pagination (default 0). |  |
| order | string | Sort by one column: 'column' | 'column.asc' | 'column.desc'. |  |
| id | string | Keep only rows whose `id` equals this. |  |
| journey_id | string | Keep only rows whose `journey_id` equals this. |  |
| version | string | Keep only rows whose `version` equals this. |  |
| journey_version_id | string | Keep only rows whose `journey_version_id` equals this. |  |
| contact_id | string | Keep only rows whose `contact_id` equals this. |  |
| organization_id | string | Keep only rows whose `organization_id` equals this. |  |
| email | string | Keep only rows whose `email` equals this. |  |
| phone | string | Keep only rows whose `phone` equals this. |  |
| locale | string | Keep only rows whose `locale` equals this. |  |
| market | string | Keep only rows whose `market` equals this. |  |
| current_step | string | Keep only rows whose `current_step` equals this. |  |
| state | string | Keep only rows whose `state` equals this. |  |
| exit_reason | string | Keep only rows whose `exit_reason` equals this. |  |
| trigger_event_id | string | Keep only rows whose `trigger_event_id` equals this. |  |


```http request
GET https://api.revenexx.com/v1/journeys/enrollments/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |


```http request
POST https://api.revenexx.com/v1/journeys/enrollments/{id}/exit
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |
| data | object | Request body |  |

