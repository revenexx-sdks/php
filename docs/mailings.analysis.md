# MailingsAnalysis Service


```http request
GET https://api.revenexx.com/v1/mailings/clicks
```

** List clicked links of mailings **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| limit | integer | Page size (default 50, max 200). |  |
| offset | integer | Row offset for pagination (default 0). |  |
| order | string | Sort by one column: 'column' | 'column.asc' | 'column.desc'. |  |
| id | string | Keep only rows whose `id` equals this. |  |
| mailing_id | string | Keep only rows whose `mailing_id` equals this. |  |
| url | string | Keep only rows whose `url` equals this. |  |


```http request
GET https://api.revenexx.com/v1/mailings/clicks/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |


```http request
GET https://api.revenexx.com/v1/mailings/engagements
```

** The ledger of sequencer announcements, one row per announcement. Read-only. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| limit | integer | Page size (default 50, max 200). |  |
| offset | integer | Row offset for pagination (default 0). |  |
| order | string | Sort by one column: 'column' | 'column.asc' | 'column.desc'. |  |
| id | string | Keep only rows whose `id` equals this. |  |
| mailing_id | string | Keep only rows whose `mailing_id` equals this. |  |
| kind | string | Keep only rows whose `kind` equals this. |  |
| email | string | Keep only rows whose `email` equals this. |  |
| contact_id | string | Keep only rows whose `contact_id` equals this. |  |
| message_id | string | Keep only rows whose `message_id` equals this. |  |
| is_machine | string | Keep only rows whose `is_machine` equals this. |  |


```http request
GET https://api.revenexx.com/v1/mailings/engagements/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |


```http request
GET https://api.revenexx.com/v1/mailings/mailings/{id}/clicks
```

** Every clicked link with clicks, unique clickers and its share of all clicks, the most clicked first. `top` carries the most clicked links as rows of label and value, worded in the caller language. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |


```http request
GET https://api.revenexx.com/v1/mailings/mailings/{id}/stats
```

** Recipient outcomes, deliveries, bounces, opens by people and by machines apart, clicks, click rate, click-to-open, unsubscribes, complaints and revenue. Rates are computed from unique clicks and human opens only. `funnel`, `attention` and `outcomes` carry the same figures as rows of label and value, worded in the caller language. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |


```http request
GET https://api.revenexx.com/v1/mailings/mailings/{id}/timeline
```

** Human opens and clicks per day in the tenant time zone, from the first reaction to the last with every day between, at most the latest 60 days. Machine opens are left out. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |


```http request
GET https://api.revenexx.com/v1/mailings/stats
```

** List the figures of mailings **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| limit | integer | Page size (default 50, max 200). |  |
| offset | integer | Row offset for pagination (default 0). |  |
| order | string | Sort by one column: 'column' | 'column.asc' | 'column.desc'. |  |
| id | string | Keep only rows whose `id` equals this. |  |
| mailing_id | string | Keep only rows whose `mailing_id` equals this. |  |


```http request
POST https://api.revenexx.com/v1/mailings/stats/sweep
```

** The hourly schedule, callable by hand: recomputes revenue from the campaigns ledger and lifts delivered and clicked figures to what the sequencer messages say. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| data | object | Request body |  |


```http request
GET https://api.revenexx.com/v1/mailings/stats/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |

