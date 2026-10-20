# AudiencesMembers Service


```http request
GET https://api.revenexx.com/v1/audiences/audiences/{id}/composition
```

** Members per market (largest first, at most eight named, the rest summed, members without a market last) and per source (rule, import, by hand), each with its share. Labels follow Accept-Language (de or en). **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |


```http request
POST https://api.revenexx.com/v1/audiences/audiences/{id}/import
```

** Each row names a contact id or a mail address of an existing contact. A row that matches nobody is refused with its reason rather than creating a person. At most 1000 rows per call. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |
| emails | string | Addresses separated by lines, commas or semicolons — what a form field sends. Used when `rows` is absent. |  |
| filename | string |  |  |
| rows | array |  |  |


```http request
GET https://api.revenexx.com/v1/audiences/audiences/{id}/members
```

** The page a send reads: members in contact-id order after `cursor`. Hand `next_cursor` back until `done`. Stable while a recompute runs — a page never repeats or skips a member who stays. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |
| cursor | string | The `next_cursor` of the previous page. Omitted: the first page. |  |
| limit | integer | Page size (default 200, max 500). |  |


```http request
POST https://api.revenexx.com/v1/audiences/audiences/{id}/members
```

** Hand-picked members — also what a journey's "add to audience" step calls. At most 500 contacts per call; a contact that does not exist is refused with its reason. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |
| contact_id | string |  |  |
| contact_ids | array |  |  |


```http request
DELETE https://api.revenexx.com/v1/audiences/audiences/{id}/members/{contact_id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |
| contact_id | string | **Required** The contact to take out. |  |


```http request
GET https://api.revenexx.com/v1/audiences/audiences/{id}/timeline
```

** Joins and leaves per day in Europe/Berlin, from the first change to the last with every day between, at most the latest 90 days. Counted from the join/leave history; `capped` says the history was longer than one read covers. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |


```http request
GET https://api.revenexx.com/v1/audiences/imports
```

** Every import into a static audience, with its counts and refused rows. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| limit | integer | Page size (default 50, max 200). A larger value is clamped rather than refused. |  |
| offset | integer | Row offset for pagination (default 0). Page with `page.total` and `page.hasMore`. |  |
| order | string | Sort by one column: 'column' | 'column.asc' | 'column.desc'. The column has to be one this entity has. |  |
| id | string | Keep only rows whose `id` equals this. |  |
| audience_id | string | Keep only rows whose `audience_id` equals this. |  |
| filename | string | Keep only rows whose `filename` equals this. |  |
| rows | string | Keep only rows whose `rows` equals this. |  |
| accepted | string | Keep only rows whose `accepted` equals this. |  |
| rejected | string | Keep only rows whose `rejected` equals this. |  |
| state | string | Keep only rows whose `state` equals this. |  |


```http request
GET https://api.revenexx.com/v1/audiences/imports/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |


```http request
GET https://api.revenexx.com/v1/audiences/member-events
```

** The join/leave history; filter `?audience_id=` or `?contact_id=`. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| limit | integer | Page size (default 50, max 200). A larger value is clamped rather than refused. |  |
| offset | integer | Row offset for pagination (default 0). Page with `page.total` and `page.hasMore`. |  |
| order | string | Sort by one column: 'column' | 'column.asc' | 'column.desc'. The column has to be one this entity has. |  |
| id | string | Keep only rows whose `id` equals this. |  |
| audience_id | string | Keep only rows whose `audience_id` equals this. |  |
| contact_id | string | Keep only rows whose `contact_id` equals this. |  |
| kind | string | Keep only rows whose `kind` equals this. |  |
| source | string | Keep only rows whose `source` equals this. |  |
| reason | string | Keep only rows whose `reason` equals this. |  |


```http request
GET https://api.revenexx.com/v1/audiences/member-events/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |


```http request
GET https://api.revenexx.com/v1/audiences/members
```

** Membership rows across audiences; filter `?audience_id=` or `?contact_id=`. For a send, read GET /audiences/audiences/{id}/members instead. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| limit | integer | Page size (default 50, max 200). A larger value is clamped rather than refused. |  |
| offset | integer | Row offset for pagination (default 0). Page with `page.total` and `page.hasMore`. |  |
| order | string | Sort by one column: 'column' | 'column.asc' | 'column.desc'. The column has to be one this entity has. |  |
| id | string | Keep only rows whose `id` equals this. |  |
| audience_id | string | Keep only rows whose `audience_id` equals this. |  |
| audience_code | string | Keep only rows whose `audience_code` equals this. |  |
| contact_id | string | Keep only rows whose `contact_id` equals this. |  |
| organization_id | string | Keep only rows whose `organization_id` equals this. |  |
| email | string | Keep only rows whose `email` equals this. |  |
| locale | string | Keep only rows whose `locale` equals this. |  |
| market | string | Keep only rows whose `market` equals this. |  |
| eligible | string | Keep only rows whose `eligible` equals this. |  |
| source | string | Keep only rows whose `source` equals this. |  |


```http request
GET https://api.revenexx.com/v1/audiences/members/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |


```http request
POST https://api.revenexx.com/v1/audiences/memberships
```

** For the storefront's personalisation: the active audiences one logged-in contact belongs to, by id and by code. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| contact_id | string |  |  |

