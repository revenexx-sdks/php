# CampaignsTasks Service


```http request
GET https://api.revenexx.com/v1/campaigns/tasks
```

** List campaign tasks **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| limit | integer | Page size (default 50, max 200). |  |
| offset | integer | Row offset for pagination (default 0). |  |
| order | string | Sort by one column: 'column' | 'column.asc' | 'column.desc'. |  |
| id | string | Keep only rows whose `id` equals this. |  |
| campaign_id | string | Keep only rows whose `campaign_id` equals this. |  |
| title | string | Keep only rows whose `title` equals this. |  |
| notes | string | Keep only rows whose `notes` equals this. |  |
| assignee | string | Keep only rows whose `assignee` equals this. |  |


```http request
POST https://api.revenexx.com/v1/campaigns/tasks
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| assignee | string | Who does it: a name, an email or a sales-rep code. |  |
| campaign_id | string | The campaign this row belongs to. |  |
| done_at | string | When it was ticked off. Empty while open. |  |
| due_at | string | When it is due. A task with a due date appears on the calendar. |  |
| notes | string | Anything else the assignee needs. |  |
| title | string | What has to be done. |  |


```http request
DELETE https://api.revenexx.com/v1/campaigns/tasks/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |


```http request
GET https://api.revenexx.com/v1/campaigns/tasks/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |


```http request
PUT https://api.revenexx.com/v1/campaigns/tasks/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |
| assignee | string | Who does it: a name, an email or a sales-rep code. |  |
| campaign_id | string | The campaign this row belongs to. |  |
| done_at | string | When it was ticked off. Empty while open. |  |
| due_at | string | When it is due. A task with a due date appears on the calendar. |  |
| notes | string | Anything else the assignee needs. |  |
| title | string | What has to be done. |  |


```http request
POST https://api.revenexx.com/v1/campaigns/tasks/{id}/complete
```

** Stamps done_at now. A task already done keeps its first stamp. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |


```http request
POST https://api.revenexx.com/v1/campaigns/tasks/{id}/reopen
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |

