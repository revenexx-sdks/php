# JourneysJourneys Service


```http request
GET https://api.revenexx.com/v1/journeys/journeys
```

** Every journey of this tenant, without the trash unless `trashed` asks for it. Filter `?status=live`, `?campaign_ref=` for the journeys a campaign claimed (the calendar reads `live_from`/`live_until`). **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| limit | integer | Page size (default 50, max 200). |  |
| offset | integer | Row offset for pagination (default 0). |  |
| order | string | Sort by one column: 'column' | 'column.asc' | 'column.desc'. |  |
| trashed | string | `exclude` (default) leaves the trash out, `only` is the trash itself, `include` lists both. |  |
| id | string | Keep only rows whose `id` equals this. |  |
| name | string | Keep only rows whose `name` equals this. |  |
| description | string | Keep only rows whose `description` equals this. |  |
| status | string | Keep only rows whose `status` equals this. |  |
| trigger_kind | string | Keep only rows whose `trigger_kind` equals this. |  |
| reenrol | string | Keep only rows whose `reenrol` equals this. |  |
| reenrol_gap_days | string | Keep only rows whose `reenrol_gap_days` equals this. |  |
| campaign_ref | string | Keep only rows whose `campaign_ref` equals this. |  |
| template_code | string | Keep only rows whose `template_code` equals this. |  |
| current_version | string | Keep only rows whose `current_version` equals this. |  |
| draft_version | string | Keep only rows whose `draft_version` equals this. |  |
| trigger_ran_on | string | Keep only rows whose `trigger_ran_on` equals this. |  |
| enrolled_count | string | Keep only rows whose `enrolled_count` equals this. |  |
| active_count | string | Keep only rows whose `active_count` equals this. |  |


```http request
POST https://api.revenexx.com/v1/journeys/journeys
```

** Creates the journey as a draft with version 1. `steps` and `entry` may come along; otherwise the draft starts empty. The answer carries `problems` — what stands between the draft and going live. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| campaign_ref | string | The campaign that claimed this journey, written by the campaigns app. |  |
| currency | string | The currency revenue is stated in. |  |
| description | string | What the journey is for. |  |
| entry | string | The first step. Defaults to the first listed. |  |
| goal_config | any | The goal: `{ kind: event, topic, match }` or `{ kind: condition, match, rules }`; empty for none. Frozen while live. |  |
| metadata | any | Free-form JSON a caller may keep on the row. Nothing here reads it. |  |
| name | string | What the journey is called, e.g. Warenkorb-Erinnerung. |  |
| reenrol | boolean | Whether a person who finished may enter again. Off by default. |  |
| reenrol_gap_days | integer | The least number of days between two entries. Empty means the tenant default. |  |
| steps | array |  |  |
| trigger_config | any | The trigger: `{ topic, filter: [{ field, op, value }] }` for an event, `{ audience_id | audience_code }`, `{ stage }`, `{ field, offset_days }`. Frozen while live. |  |
| trigger_kind | string | What enrols: `event`, `audience_join`, `lifecycle_stage` or `date_field`. Frozen while live. |  |


```http request
POST https://api.revenexx.com/v1/journeys/journeys/trash/empty
```

** Every journey in the trash is deleted for good on its own terms. One that something still blocks stays in the trash and is named with its reason, so a partial success says exactly what remained. Not for a storefront contact. **


```http request
POST https://api.revenexx.com/v1/journeys/journeys/trash/purge
```

** What the nightly purge does, callable by hand: every journey in the trash for longer than the tenant trash retention (90 days unless the tenant set another) is deleted for good through the same rules as a second delete. A blocked one stays and carries its reason. When the retention cannot be read, nothing is deleted. Also the cron schedule. **


```http request
DELETE https://api.revenexx.com/v1/journeys/journeys/{id}
```

** The first DELETE moves the journey into the trash: it stays, with everything hanging off it, and counts nowhere until it is restored. Only a draft that never went live goes into the trash; a journey people have been through is refused (`trash_blocked`, blocker `journey_published`) — archive it instead. A DELETE on a journey already in the trash deletes it for good — refused while something still needs it, and not for a storefront contact. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |


```http request
GET https://api.revenexx.com/v1/journeys/journeys/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |


```http request
PUT https://api.revenexx.com/v1/journeys/journeys/{id}
```

** Name, description, re-enrolment, campaign. The trigger and the goal change only while the journey is not live. Status changes go through publish, pause, resume and archive. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |
| campaign_ref | string | The campaign that claimed this journey, written by the campaigns app. |  |
| currency | string | The currency revenue is stated in. |  |
| description | string | What the journey is for. |  |
| goal_config | any | The goal: `{ kind: event, topic, match }` or `{ kind: condition, match, rules }`; empty for none. Frozen while live. |  |
| metadata | any | Free-form JSON a caller may keep on the row. Nothing here reads it. |  |
| name | string | What the journey is called, e.g. Warenkorb-Erinnerung. |  |
| reenrol | boolean | Whether a person who finished may enter again. Off by default. |  |
| reenrol_gap_days | integer | The least number of days between two entries. Empty means the tenant default. |  |
| trigger_config | any | The trigger: `{ topic, filter: [{ field, op, value }] }` for an event, `{ audience_id | audience_code }`, `{ stage }`, `{ field, offset_days }`. Frozen while live. |  |
| trigger_kind | string | What enrols: `event`, `audience_join`, `lifecycle_stage` or `date_field`. Frozen while live. |  |


```http request
POST https://api.revenexx.com/v1/journeys/journeys/{id}/archive
```

** Nobody enters again; everyone still inside leaves with the reason journey_archived (up to 500 at once, the rest with the next runs). **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |
| data | object | Request body |  |


```http request
POST https://api.revenexx.com/v1/journeys/journeys/{id}/enrol
```

** For a test or for support: the person enters the live version now, under the same re-enrolment rules as a trigger. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |
| contact_id | string |  |  |
| data | object | Payload the steps may read, as a trigger would carry it. |  |
| email | string |  |  |
| key | string | Makes a resent request enrol once. |  |
| market | string |  |  |


```http request
GET https://api.revenexx.com/v1/journeys/journeys/{id}/graph
```

** What the canvas draws: the steps and edges of one version, the trigger, the goal, and the problems that would refuse publishing. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |
| version | string | `draft` (default: the draft, else the live version), `live`, or a number. |  |


```http request
PUT https://api.revenexx.com/v1/journeys/journeys/{id}/graph
```

** Writes the draft, creating it as the next version when the journey has none — a live version is never edited. A graph with problems is saved; publishing refuses it. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |
| entry | string | The first step. Defaults to the first listed. |  |
| notes | string | What changed. |  |
| steps | array |  |  |


```http request
POST https://api.revenexx.com/v1/journeys/journeys/{id}/pause
```

** Nobody enters, nobody moves; everyone stays at their step. Waits that pass during the pause run after resume, in the job's budgeted chunks. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |
| data | object | Request body |  |


```http request
POST https://api.revenexx.com/v1/journeys/journeys/{id}/publish
```

** Checks the draft, the trigger and the goal; makes the draft the live version and retires the one before. Running enrollments finish on their own version. A paused journey stays paused. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |
| data | object | Request body |  |


```http request
GET https://api.revenexx.com/v1/journeys/journeys/{id}/report
```

** Per step: waiting now, entered, passed, sent, skipped and why, failed, exited and why, clicked, goal reached, revenue. Per version: enrolled, active, completed, goal reached, exited, failed, conversion. `step_bars` and `exit_bars` are the same figures as bar-list rows in the language of Accept-Language: who entered each step with the drop-off, and why people left. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |
| version | string | A version number, `live` (default) or `draft`. |  |


```http request
POST https://api.revenexx.com/v1/journeys/journeys/{id}/restore
```

** Clears the trash marks on the journey. Its parts were never touched, so they come back with it, in the state it was in. The same right as deleting. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |


```http request
POST https://api.revenexx.com/v1/journeys/journeys/{id}/resume
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |
| data | object | Request body |  |


```http request
POST https://api.revenexx.com/v1/journeys/journeys/{id}/run
```

** The step job, limited to one live journey — what the Cockpit offers on a test journey instead of waiting for the next five-minute tick. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |
| data | object | Request body |  |


```http request
GET https://api.revenexx.com/v1/journeys/journeys/{id}/timeline
```

** Entries and reached goals per day over all versions, in the tenant time zone, from the first entry to the last with every day between, at most the latest 60 days. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |

