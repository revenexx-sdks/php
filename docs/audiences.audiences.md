# AudiencesAudiences Service


```http request
GET https://api.revenexx.com/v1/audiences/audiences
```

** Every audience of this tenant, active and static, with its member count and how many of them someone may write to. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| limit | integer | Page size (default 50, max 200). A larger value is clamped rather than refused. |  |
| offset | integer | Row offset for pagination (default 0). Page with `page.total` and `page.hasMore`. |  |
| order | string | Sort by one column: 'column' | 'column.asc' | 'column.desc'. The column has to be one this entity has. |  |
| trashed | string | `exclude` (default) leaves the trash out, `only` is the trash itself, `include` lists both. |  |
| id | string | Keep only rows whose `id` equals this. |  |
| code | string | Keep only rows whose `code` equals this. |  |
| description | string | Keep only rows whose `description` equals this. |  |
| kind | string | Keep only rows whose `kind` equals this. |  |
| rule_match | string | Keep only rows whose `rule_match` equals this. |  |
| active | string | Keep only rows whose `active` equals this. |  |
| member_count | string | Keep only rows whose `member_count` equals this. |  |
| eligible_count | string | Keep only rows whose `eligible_count` equals this. |  |
| rules_summary | string | Keep only rows whose `rules_summary` equals this. |  |
| recompute_state | string | Keep only rows whose `recompute_state` equals this. |  |
| recompute_error | string | Keep only rows whose `recompute_error` equals this. |  |
| frozen_from_id | string | Keep only rows whose `frozen_from_id` equals this. |  |


```http request
POST https://api.revenexx.com/v1/audiences/audiences
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| active | boolean | An inactive audience is not recomputed and is left out of a person's memberships; its members stay as they are. |  |
| code | string | The stable identifier other apps and the storefront refer to the audience by. Unique per tenant, and fixed once created. |  |
| description | string | What the audience is for, in the merchant's own words. |  |
| external_id | string | The key of this record in the system that leads it — a marketing tool, an ERP, an ad platform. Unique per tenant when set; an import matches on it. |  |
| external_refs | any | Every OTHER system that knows this record, keyed by system name. `external_id` is the leading system; this is the rest. Not a query parameter: a jsonb column is compared as a whole document. |  |
| kind | string | `active` — defined by rules and recomputed; `static` — holds an import, a hand-picked list or a frozen copy. Fixed once created. |  |
| labels | any | Display text per locale, e.g. `{"de": "Newsletter DE", "en": "Newsletter DE"}`. |  |
| metadata | any | Free-form JSON a caller may keep on the row. Nothing here reads it. |  |
| rule_match | string | How the top-level rules of an active audience are held together: `all` or `any`. |  |
| source_data | any | The source system's own view of the record as the last sync saw it, kept for reconciliation. Nothing in this app reads it. |  |
| source_synced_at | string | When a sync last wrote this record from its source system. Null for a record only ever kept here. |  |


```http request
POST https://api.revenexx.com/v1/audiences/audiences/recompute-all
```

** What the hourly schedule runs, by hand: every active audience, unfinished passes first, one shared budget. One audience failing does not stop the others. **


```http request
POST https://api.revenexx.com/v1/audiences/audiences/trash/empty
```

** Every audience in the trash is deleted for good on its own terms. One that something still blocks stays in the trash and is named with its reason, so a partial success says exactly what remained. Not for a storefront contact. **


```http request
POST https://api.revenexx.com/v1/audiences/audiences/trash/purge
```

** What the nightly purge does, callable by hand: every audience in the trash for longer than the tenant trash retention (90 days unless the tenant set another) is deleted for good through the same rules as a second delete. A blocked one stays and carries its reason. When the retention cannot be read, nothing is deleted. Also the cron schedule. **


```http request
DELETE https://api.revenexx.com/v1/audiences/audiences/{id}
```

** The first DELETE moves the audience into the trash: it stays, with everything hanging off it, and counts nowhere until it is restored. An audience another audience asks for members of is refused (`trash_blocked`, blocker `audience_in_use` with `audience_ids`) — change their rules first. Its rules and members stay with it. A DELETE on a audience already in the trash deletes it for good — refused while something still needs it, and not for a storefront contact. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |


```http request
GET https://api.revenexx.com/v1/audiences/audiences/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |


```http request
PUT https://api.revenexx.com/v1/audiences/audiences/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |
| active | boolean | An inactive audience is not recomputed and is left out of a person's memberships; its members stay as they are. |  |
| code | string | The stable identifier other apps and the storefront refer to the audience by. Unique per tenant, and fixed once created. |  |
| description | string | What the audience is for, in the merchant's own words. |  |
| external_id | string | The key of this record in the system that leads it — a marketing tool, an ERP, an ad platform. Unique per tenant when set; an import matches on it. |  |
| external_refs | any | Every OTHER system that knows this record, keyed by system name. `external_id` is the leading system; this is the rest. Not a query parameter: a jsonb column is compared as a whole document. |  |
| kind | string | `active` — defined by rules and recomputed; `static` — holds an import, a hand-picked list or a frozen copy. Fixed once created. |  |
| labels | any | Display text per locale, e.g. `{"de": "Newsletter DE", "en": "Newsletter DE"}`. |  |
| metadata | any | Free-form JSON a caller may keep on the row. Nothing here reads it. |  |
| rule_match | string | How the top-level rules of an active audience are held together: `all` or `any`. |  |
| source_data | any | The source system's own view of the record as the last sync saw it, kept for reconciliation. Nothing in this app reads it. |  |
| source_synced_at | string | When a sync last wrote this record from its source system. Null for a record only ever kept here. |  |


```http request
POST https://api.revenexx.com/v1/audiences/audiences/{id}/freeze
```

** Creates a static audience holding exactly who is in the active one now, so a big send's list does not move. Chunked: an unfinished copy answers `done: false` with the new audience's id, and a call naming it in `target_id` continues. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |
| code | string | The new audience's code. Required on the first call. |  |
| description | string |  |  |
| labels | object |  |  |
| target_id | string | Continue an unfinished freeze into this audience. |  |


```http request
POST https://api.revenexx.com/v1/audiences/audiences/{id}/preview
```

** Evaluates the stored rules — or a candidate tree sent in `rules`, for a form not yet saved — over the tenant's contacts and counts the matches. Bounded by a short budget: when the population does not fit, the answer says how many were examined and estimates the rest. Nothing is written. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |
| rule_match | string |  |  |
| rules | array | A candidate rule tree. Omitted: the stored rules. |  |


```http request
POST https://api.revenexx.com/v1/audiences/audiences/{id}/recompute
```

** Evaluates the rules over the tenant's contacts and writes who joined and who left, for as long as the tenant's budget allows. An unfinished pass answers `done: false` and continues on the next call. `restart: true` drops an unfinished pass and starts over. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |
| restart | boolean | Start a fresh pass even if one is unfinished. |  |


```http request
POST https://api.revenexx.com/v1/audiences/audiences/{id}/restore
```

** Clears the trash marks on the audience. Its parts were never touched, so they come back with it, in the state it was in. The same right as deleting. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |


```http request
GET https://api.revenexx.com/v1/audiences/vocabularies
```


```http request
GET https://api.revenexx.com/v1/audiences/vocabularies/{name}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| name | string | **Required** The vocabulary, e.g. `subjects` or `operators`. |  |

