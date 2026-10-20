# MailingsMailings Service


```http request
GET https://api.revenexx.com/v1/mailings/mailings
```

** Every mailing of this tenant. Filter `?folder=drafts|scheduled|sent|archived` for the four views, `?campaign_ref=` for the mailings a campaign claimed, `?state=` for one state. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| limit | integer | Page size (default 50, max 200). |  |
| offset | integer | Row offset for pagination (default 0). |  |
| order | string | Sort by one column: 'column' | 'column.asc' | 'column.desc'. |  |
| trashed | string | `exclude` (default) leaves the trash out, `only` is the trash itself, `include` lists both. |  |
| id | string | Keep only rows whose `id` equals this. |  |
| state | string | Keep only rows whose `state` equals this. |  |
| folder | string | Keep only rows whose `folder` equals this. |  |
| campaign_ref | string | Keep only rows whose `campaign_ref` equals this. |  |
| audience_id | string | Keep only rows whose `audience_id` equals this. |  |
| subscription_type | string | Keep only rows whose `subscription_type` equals this. |  |
| template_key | string | Keep only rows whose `template_key` equals this. |  |
| starter | string | Keep only rows whose `starter` equals this. |  |
| timezone_mode | string | Keep only rows whose `timezone_mode` equals this. |  |
| duplicated_from_id | string | Keep only rows whose `duplicated_from_id` equals this. |  |


```http request
POST https://api.revenexx.com/v1/mailings/mailings
```

** A new draft. The sender and its name default to the market settings when not given. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| audience_id | string | The audiences app audience the mailing goes to. |  |
| campaign_ref | string | The campaign that claimed this mailing. Written by the campaigns app; filter `?campaign_ref=` to list a campaign mails. |  |
| currency | string | Three-letter currency code, e.g. EUR. |  |
| exclude_audience_ids | array | Audiences whose members do not receive the mailing, as a list of ids (at most 10). |  |
| graymail | boolean | Hold back recipients who received many marketing mails without a click. On by default. |  |
| graymail_sends | integer | Overrides the graymail threshold of the settings for this mailing. |  |
| metadata | any | Free-form JSON a caller may keep on the row. Nothing here reads it. |  |
| name | string | What the marketer calls the mailing, e.g. Black Week Newsletter. Not shown to recipients. |  |
| preview_text | string | The line mail clients show after the subject. At most 200 characters. |  |
| reply_to | string | Where replies go, if not to the sender. |  |
| send_at | string | When the mailing goes out. Empty: as soon as it is scheduled. |  |
| sender | string | The From address. Empty: the market default sender from the settings. |  |
| sender_name | string | The name shown next to the From address. |  |
| starter | string | Where the design started from: blank, simple, newsletter or promotion. |  |
| subject | string | The subject line recipients see. At most 150 characters. |  |
| subscription_type | string | The marketing-consents subscription type code recipients must be allowed for. |  |
| template_key | string | The key of the sequencer template of message class marketing the mailing renders. |  |
| timezone_mode | string | `tenant`: everybody at send_at. `recipient`: send_at read as wall-clock time and applied in each recipient market time zone. |  |
| voucher_batch_id | string | The promotions voucher batch every recipient draws one code from at send time. |  |


```http request
POST https://api.revenexx.com/v1/mailings/mailings/trash/empty
```

** Every mailing in the trash is deleted for good on its own terms. One that something still blocks stays in the trash and is named with its reason, so a partial success says exactly what remained. Not for a storefront contact. **


```http request
POST https://api.revenexx.com/v1/mailings/mailings/trash/purge
```

** What the nightly purge does, callable by hand: every mailing in the trash for longer than the tenant trash retention (90 days unless the tenant set another) is deleted for good through the same rules as a second delete. A blocked one stays and carries its reason. When the retention cannot be read, nothing is deleted. Also the cron schedule. **


```http request
DELETE https://api.revenexx.com/v1/mailings/mailings/{id}
```

** The first DELETE moves the mailing into the trash: it stays, with everything hanging off it, and counts nowhere until it is restored. Only a mailing nobody received goes into the trash; a scheduled, sending or sent one is refused (`trash_blocked`, blocker `mailing_sent`) — cancel or archive it instead. A DELETE on a mailing already in the trash deletes it for good — refused while something still needs it, and not for a storefront contact. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |


```http request
GET https://api.revenexx.com/v1/mailings/mailings/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |


```http request
PUT https://api.revenexx.com/v1/mailings/mailings/{id}
```

** A draft (or a cancelled or failed mailing nobody received) changes freely. In every other state only `name`, `campaign_ref` and `metadata` change — the campaigns app claims a mailing in any state. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |
| audience_id | string | The audiences app audience the mailing goes to. |  |
| campaign_ref | string | The campaign that claimed this mailing. Written by the campaigns app; filter `?campaign_ref=` to list a campaign mails. |  |
| currency | string | Three-letter currency code, e.g. EUR. |  |
| exclude_audience_ids | array | Audiences whose members do not receive the mailing, as a list of ids (at most 10). |  |
| graymail | boolean | Hold back recipients who received many marketing mails without a click. On by default. |  |
| graymail_sends | integer | Overrides the graymail threshold of the settings for this mailing. |  |
| metadata | any | Free-form JSON a caller may keep on the row. Nothing here reads it. |  |
| name | string | What the marketer calls the mailing, e.g. Black Week Newsletter. Not shown to recipients. |  |
| preview_text | string | The line mail clients show after the subject. At most 200 characters. |  |
| reply_to | string | Where replies go, if not to the sender. |  |
| send_at | string | When the mailing goes out. Empty: as soon as it is scheduled. |  |
| sender | string | The From address. Empty: the market default sender from the settings. |  |
| sender_name | string | The name shown next to the From address. |  |
| starter | string | Where the design started from: blank, simple, newsletter or promotion. |  |
| subject | string | The subject line recipients see. At most 150 characters. |  |
| subscription_type | string | The marketing-consents subscription type code recipients must be allowed for. |  |
| template_key | string | The key of the sequencer template of message class marketing the mailing renders. |  |
| timezone_mode | string | `tenant`: everybody at send_at. `recipient`: send_at read as wall-clock time and applied in each recipient market time zone. |  |
| voucher_batch_id | string | The promotions voucher batch every recipient draws one code from at send time. |  |


```http request
POST https://api.revenexx.com/v1/mailings/mailings/{id}/archive
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |
| data | object | Request body |  |


```http request
POST https://api.revenexx.com/v1/mailings/mailings/{id}/cancel
```

** Nothing more is handed to the sequencer. Recipients already handed over keep their mail. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |
| data | object | Request body |  |


```http request
GET https://api.revenexx.com/v1/mailings/mailings/{id}/checklist
```

** Every item with ok, severity (error or warning), state (ok, warning or error), its label and the problem as a sentence in the caller language (Accept-Language; German unless English is asked for), and where to put it right (action: route and label); errors first, then warnings: subject, preview text, sender, audience, subscription type, marketing template, footer address, unsubscribe link, links, image descriptions, voucher batch, send time. `ready` is true when no error stands. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |


```http request
POST https://api.revenexx.com/v1/mailings/mailings/{id}/duplicate
```

** Any mailing, sent ones included. The copy keeps content, audience and settings, and drops the send time and the campaign. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |
| data | object | Request body |  |


```http request
POST https://api.revenexx.com/v1/mailings/mailings/{id}/preview
```

** Products priced for the market named, the footer of that market, a sample voucher code. No code is drawn and nothing is sent. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |
| contact_id | string |  |  |
| device | string |  |  |
| email | string |  |  |
| first_name | string |  |  |
| last_name | string |  |  |
| locale | string |  |  |
| market | string | The market code to price and render for. |  |


```http request
GET https://api.revenexx.com/v1/mailings/mailings/{id}/reach
```

** The audience member and eligible counts, the excluded audiences, and at most how many addresses graymail protection would hold back. `bars` carries the same counts as rows of label and value, worded in the caller language. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |


```http request
POST https://api.revenexx.com/v1/mailings/mailings/{id}/restore
```

** Clears the trash marks on the mailing. Its parts were never touched, so they come back with it, in the state it was in. The same right as deleting. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |


```http request
POST https://api.revenexx.com/v1/mailings/mailings/{id}/schedule
```

** Runs the checklist and refuses while an error stands. `send_at` empty or `now` sends at once (the first chunk is prepared in this call); a time sends then, in the shop or recipient time zone. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |
| send_at | string | An ISO time, `now`, or null for at once. Omitted: the mailing own send_at. |  |
| start | boolean | false leaves even a send-at-once mailing to the next pipeline run. |  |
| timezone_mode | string | Overrides the mailing time zone mode. |  |


```http request
POST https://api.revenexx.com/v1/mailings/mailings/{id}/test
```

** At most ten addresses, from the request or the test recipients setting. Marked as a test, with a sample voucher code; counts in no figure. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |
| locale | string |  |  |
| market | string |  |  |
| recipients | array |  |  |


```http request
POST https://api.revenexx.com/v1/mailings/mailings/{id}/unarchive
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |
| data | object | Request body |  |

