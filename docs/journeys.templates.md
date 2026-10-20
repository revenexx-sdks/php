# JourneysTemplates Service


```http request
GET https://api.revenexx.com/v1/journeys/templates
```

** List the shipped flows **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| limit | integer | Page size (default 50, max 200). |  |
| offset | integer | Row offset for pagination (default 0). |  |
| order | string | Sort by one column: 'column' | 'column.asc' | 'column.desc'. |  |
| id | string | Keep only rows whose `id` equals this. |  |
| code | string | Keep only rows whose `code` equals this. |  |
| tier | string | Keep only rows whose `tier` equals this. |  |
| trigger_kind | string | Keep only rows whose `trigger_kind` equals this. |  |
| position | string | Keep only rows whose `position` equals this. |  |
| active | string | Keep only rows whose `active` equals this. |  |


```http request
POST https://api.revenexx.com/v1/journeys/templates/{code}/copy
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| code | string | **Required** e.g. cart_recovery |  |
| name | string | Defaults to the template name. |  |


```http request
GET https://api.revenexx.com/v1/journeys/templates/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |

