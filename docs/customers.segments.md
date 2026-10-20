# CustomersSegments Service


```http request
GET https://api.revenexx.com/v1/customers/segment_members
```

** One organization inside one segment, plus the record of how it got there: `source: "manual"` for a company somebody put in, `source: "rule"` for one the rule engine matched. That distinction is what lets a recompute rewrite its own rows and leave every hand-picked one alone. The membership rows themselves — the answer to "which companies are in this segment" (`segment_id`) and to "which segments is this company in" (`organization_id`). Paged with `limit`/`offset`/`order`. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | Filter to rows whose `id` is exactly this value. Primary key of the membership row. |  |
| segment_id | string | Filter to one segment — its members. |  |
| organization_id | string | Filter to one company — the segments it belongs to. The same route answers both questions. |  |
| contact_id | string | Filter to rows whose `contact_id` is exactly this value. The member person, in a contact segment. Null in an organization segment. |  |
| source | string | Filter by how the membership came about. `manual` is the hand-picked set a recompute will never touch, `sync` the set an import from the owning system wrote, and `rule` the only one a recompute rewrites. |  |
| created_at | string | Exact timestamp equality — this API has no range filter. To bound a period, sort with `order` and page. When the organization joined the segment. |  |
| limit | integer | Page size (default 50, max 200). |  |
| offset | integer | Row offset for pagination (default 0). |  |
| order | string | Sort by one column: 'column' | 'column.asc' | 'column.desc'. A bare column sorts ascending. Anything else is refused with 400. |  |


```http request
POST https://api.revenexx.com/v1/customers/segment_members
```

** One organization inside one segment, plus the record of how it got there: `source: "manual"` for a company somebody put in, `source: "rule"` for one the rule engine matched. That distinction is what lets a recompute rewrite its own rows and leave every hand-picked one alone. Adds a company to a segment BY HAND. The row is `source: "manual"`, which is what protects it: a rule recompute rewrites the rule-derived rows of that segment and never touches this one. A create cannot omit `segment_id` and `organization_id`; everything else is optional or defaulted by the database. Two rows of this tenant may not share the combination of `segment_id` + `organization_id` (while contact_id IS NULL) or the combination of `segment_id` + `contact_id` (while contact_id IS NOT NULL). **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| created_at | string | When the organization joined the segment. Accepted on create only from a call naming no acting contact — an operator, an import, an ERP carrying a record over with its original date. A buyer sending it, or any update changing it, is a 400 `server_owned_field`. |  |
| organization_id | string | The member company. Segments group companies, never people — a person is reached through their organization. |  |
| segment_id | string | The segment. |  |
| source | string | How this membership came about: 'manual' is hand-picked, 'rule' was materialized by a recompute, 'sync' was written by an import from the system that owns the grouping — an ERP customer discount or price group arrives as a segment membership rather than as a column on the company. The distinction is load-bearing — a recompute only ever inserts and deletes 'rule' rows, so a hand-picked member and an imported one both survive every rule change. Default 'manual'. Send 'sync' from an import so the next recompute of the segment leaves the row alone; 'rule' rows are the recompute's own and it deletes the ones that stopped matching. |  |


```http request
DELETE https://api.revenexx.com/v1/customers/segment_members/{id}
```

** One organization inside one segment, plus the record of how it got there: `source: "manual"` for a company somebody put in, `source: "rule"` for one the rule engine matched. That distinction is what lets a recompute rewrite its own rows and leave every hand-picked one alone. Takes the company out of the segment. If the segment carries rules and the company still matches them, the next recompute puts it back; remove it from the rule, not from the list. Nothing else in this app points at it, so nothing else goes with it. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The segment membership to delete. |  |


```http request
GET https://api.revenexx.com/v1/customers/segment_members/{id}
```

** One organization inside one segment, plus the record of how it got there: `source: "manual"` for a company somebody put in, `source: "rule"` for one the rule engine matched. That distinction is what lets a recompute rewrite its own rows and leave every hand-picked one alone. One membership row by id, with the `source` that says how it came about. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The segment membership to read. |  |


```http request
PUT https://api.revenexx.com/v1/customers/segment_members/{id}
```

** One organization inside one segment, plus the record of how it got there: `source: "manual"` for a company somebody put in, `source: "rule"` for one the rule engine matched. That distinction is what lets a recompute rewrite its own rows and leave every hand-picked one alone. A partial update. In practice there is little to change — a membership is a pair of ids — so this exists for the `source` correction rather than as the normal path. Two rows of this tenant may not share the combination of `segment_id` + `organization_id` (while contact_id IS NULL) or the combination of `segment_id` + `contact_id` (while contact_id IS NOT NULL). **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The segment membership to update. |  |
| organization_id | string | The member company. Segments group companies, never people — a person is reached through their organization. |  |
| segment_id | string | The segment. |  |
| source | string | How this membership came about: 'manual' is hand-picked, 'rule' was materialized by a recompute, 'sync' was written by an import from the system that owns the grouping — an ERP customer discount or price group arrives as a segment membership rather than as a column on the company. The distinction is load-bearing — a recompute only ever inserts and deletes 'rule' rows, so a hand-picked member and an imported one both survive every rule change. Default 'manual'. Send 'sync' from an import so the next recompute of the segment leaves the row alone; 'rule' rows are the recompute's own and it deletes the ones that stopped matching. |  |


```http request
GET https://api.revenexx.com/v1/customers/segments
```

** A segment is a named group of ORGANIZATIONS — never of people — built by hand, by rule, or both at once. It is what a price list, a campaign or a shipping option is pointed at when the answer is "these customers, not those". Every segment this tenant keeps, with its stored rules. Any column filters and the page is `limit`/`offset`/`order`. Which companies are actually IN one is `segment_members`, because the rule half is materialized rather than evaluated on read. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | Filter to rows whose `id` is exactly this value. Primary key of the segment. |  |
| code | string | Filter by exact segment code. |  |
| position | integer | Filter to rows whose `position` is exactly this value. Sort order in the cockpit, ascending. Ties fall back to insertion order. |  |
| active | boolean | Filter to rows whose `active` is exactly this value. False when the merchant retired the segment. Its memberships stay exactly as they are and it still applies wherever it is named; it is only no longer offered as a choice, and its rules are not recomputed — neither by the schedule nor by hand — until it is active again. `?active=true` is the list of segments a picker should offer. |  |
| rule_match | string | Filter to rows whose `rule_match` is exactly this value. How the conditions combine: 'all' (default) is AND, 'any' is OR. Null means the same as 'all'. |  |
| member_type | string | Filter to rows whose `member_type` is exactly this value. What the segment holds: 'organization' (companies, the default) or 'contact' (people, each row naming their company too). Fixed once the segment has members. |  |
| rules_computed_at | string | Exact timestamp equality — this API has no range filter. To bound a period, sort with `order` and page. When the rule last finished a COMPLETE recompute. Null after a rule change, and while a chunked recompute is still running — so it doubles as "are the rule memberships trustworthy right now?". |  |
| external_id | string | Filter to rows whose `external_id` is exactly this value. The key this group has in the system that owns it — an ERP price group, discount group or bonus group arrives as a segment, and this is what it was called there. Unique per tenant where set. |  |
| source_synced_at | string | Exact timestamp equality — this API has no range filter. To bound a period, sort with `order` and page. When this row was last confirmed against its source. What a delta run asks for changes since, and what tells an operator that a feed has gone quiet — a row edited in the Cockpit does not touch it, because it says when the SOURCE was last seen, not when the row changed. Null for a row no source owns. |  |
| deleted_at | string | Exact timestamp equality — this API has no range filter. To bound a period, sort with `order` and page. When this segment was moved to the trash, or null while it is live. A segment in the trash is left out of every list unless `trashed` asks for it, so it stops applying: its memberships stay but act nowhere, its rules are not recomputed, and its code stays reserved. A second DELETE or the daily purge deletes it for good. |  |
| deleted_by | string | Filter to rows whose `deleted_by` is exactly this value. Who moved it to the trash, as the platform named them — an email, or `system`. Null while it is live. |  |
| deleted_by_id | string | Filter to rows whose `deleted_by_id` is exactly this value. The platform subject of whoever moved it to the trash. Kept beside the name so the person can be pseudonymised later without losing who acted. Null while it is live, and for the system. |  |
| trash_batch | string | Filter to rows whose `trash_batch` is exactly this value. The trash action this record went with. An organization and the contacts it took along share one; a restore brings back exactly the records that carry it. |  |
| purge_at | string | Exact timestamp equality — this API has no range filter. To bound a period, sort with `order` and page. When the daily purge deletes it for good unless it is restored first: `deleted_at` plus the tenant's trash retention (90 days unless the tenant says otherwise). Null while it is live. |  |
| purge_blocked_reason | string | Filter to rows whose `purge_blocked_reason` is exactly this value. Why the purge could not delete it for good — an active price list or promotion that still names its code, or a check nobody answered. Null when nothing stopped it. Cleared by a restore. |  |
| created_at | string | Exact timestamp equality — this API has no range filter. To bound a period, sort with `order` and page. When the segment was created. |  |
| updated_at | string | Exact timestamp equality — this API has no range filter. To bound a period, sort with `order` and page. When any column of this row last changed. |  |
| trashed | string | Whether the trash is part of the answer. `exclude` (the default) leaves records in the trash out, `only` answers the trash itself, `include` both. A call acting for a buyer is always `exclude`. |  |
| limit | integer | Page size (default 50, max 200). |  |
| offset | integer | Row offset for pagination (default 0). |  |
| order | string | Sort by one column: 'column' | 'column.asc' | 'column.desc'. A bare column sorts ascending. Anything else is refused with 400. |  |


```http request
POST https://api.revenexx.com/v1/customers/segments
```

** A segment is a named group of ORGANIZATIONS — never of people — built by hand, by rule, or both at once. It is what a price list, a campaign or a shipping option is pointed at when the answer is "these customers, not those". Creates the group. Rules are optional: leave them out for a hand-picked list, or store a rule document and let the recompute keep the membership up to date. The `code` is what other apps point at, so pick it deliberately. `code` is the only field a create cannot omit; everything else is optional or defaulted by the database. Two rows of this tenant may not share `code` or `external_id` (while external_id IS NOT NULL). **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| active | boolean | False when the merchant retired the segment. Its memberships stay exactly as they are and it still applies wherever it is named; it is only no longer offered as a choice, and its rules are not recomputed — neither by the schedule nor by hand — until it is active again. `?active=true` is the list of segments a picker should offer. Default true. |  |
| code | string | Stable identifier, unique per tenant — what other apps and integrations name the segment by. Free text, but lowercase with underscores is the convention every seeded vocabulary follows. |  |
| created_at | string | When the segment was created. Accepted on create only from a call naming no acting contact — an operator, an import, an ERP carrying a record over with its original date. A buyer sending it, or any update changing it, is a 400 `server_owned_field`. |  |
| labels | object | Localized display names keyed by language tag. Null means nobody translated it and a client falls back to showing the code. |  |
| position | integer | Sort order in the cockpit, ascending. Ties fall back to insertion order. Default 0. |  |
| rule_match | string | How the conditions combine: 'all' (default) is AND, 'any' is OR. Null means the same as 'all'. |  |
| rules | object | The selector that decides membership, stored verbatim. Null means the segment is manual-only. The same rule language product categories use, evaluated over organization columns, `setting:<key>` entries and the organization_metrics projection — so 'no order in 365 days' is expressible without joining the orders app. Null makes the segment manual-only. Changing it does not move a single membership — run the recompute. |  |


```http request
POST https://api.revenexx.com/v1/customers/segments/rules/recompute-all
```

** Same sync as the single-segment recompute, applied to every segment with non-null rules. A failing segment is reported in its result entry instead of aborting the run. The run shares one budget: a segment that does not fit reports done:false (or skipped:true) and keeps rules_computed_at null, so the next call resumes it from its own data. Repeat until the top-level done is true. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| data | object | Request body |  |


```http request
POST https://api.revenexx.com/v1/customers/segments/trash/empty
```

** Deletes every segment in the trash for good, oldest first and at most fifty per call, each checked on its own exactly like a second DELETE. A segment an active price list or promotion still names stays in the trash and is listed with the reason; the rest go. POST again while `more` is true. An administrator's right, never a buyer's. **


```http request
DELETE https://api.revenexx.com/v1/customers/segments/{id}
```

** A segment is a named group of ORGANIZATIONS — never of people — built by hand, by rule, or both at once. It is what a price list, a campaign or a shipping option is pointed at when the answer is "these customers, not those". The first DELETE moves the segment to the trash. Nothing is refused there: its memberships stay but stop applying, its rules are no longer recomputed, its market assignment stays, and its `code` stays reserved, so a restore loses nothing. The answer warns, with counts, about the members, and about the price lists and promotions that name the code. A second DELETE on a segment already in the trash deletes it for good, with its memberships — refused while an ACTIVE price list or an ACTIVE promotion still names its code. An app that does not answer blocks too; an app the tenant has not installed blocks nothing. The daily purge runs the same delete once the tenant's trash retention has run out. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The segment to delete. |  |


```http request
GET https://api.revenexx.com/v1/customers/segments/{id}
```

** A segment is a named group of ORGANIZATIONS — never of people — built by hand, by rule, or both at once. It is what a price list, a campaign or a shipping option is pointed at when the answer is "these customers, not those". One segment by id, including the rule document it carries. A segment with no rules is hand-picked and completely valid. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The segment to read. |  |


```http request
PUT https://api.revenexx.com/v1/customers/segments/{id}
```

** A segment is a named group of ORGANIZATIONS — never of people — built by hand, by rule, or both at once. It is what a price list, a campaign or a shipping option is pointed at when the answer is "these customers, not those". A partial update — send only what changes. Editing the rules does NOT re-evaluate them: that is `POST /customers/segments/{segment_id}/rules/recompute`, so a half-typed rule never silently empties a live segment. Two rows of this tenant may not share `code` or `external_id` (while external_id IS NOT NULL). **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The segment to update. |  |
| active | boolean | False when the merchant retired the segment. Its memberships stay exactly as they are and it still applies wherever it is named; it is only no longer offered as a choice, and its rules are not recomputed — neither by the schedule nor by hand — until it is active again. `?active=true` is the list of segments a picker should offer. Default true. |  |
| code | string | Stable identifier, unique per tenant — what other apps and integrations name the segment by. Free text, but lowercase with underscores is the convention every seeded vocabulary follows. |  |
| labels | object | Localized display names keyed by language tag. Null means nobody translated it and a client falls back to showing the code. |  |
| position | integer | Sort order in the cockpit, ascending. Ties fall back to insertion order. Default 0. |  |
| rule_match | string | How the conditions combine: 'all' (default) is AND, 'any' is OR. Null means the same as 'all'. |  |
| rules | object | The selector that decides membership, stored verbatim. Null means the segment is manual-only. The same rule language product categories use, evaluated over organization columns, `setting:<key>` entries and the organization_metrics projection — so 'no order in 365 days' is expressible without joining the orders app. Null makes the segment manual-only. Changing it does not move a single membership — run the recompute. |  |


```http request
POST https://api.revenexx.com/v1/customers/segments/{id}/restore
```

** Brings a segment back from the trash. Its memberships, its market assignment and every price list or promotion naming its code apply again as they did, because nothing was changed when it went. Needs the same right as the delete. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The segment to restore. |  |


```http request
POST https://api.revenexx.com/v1/customers/segments/{segment_id}/rules/preview
```

** A dry run: it answers how many organizations the rule would select, with a handful of them by name, and writes nothing at all. Evaluates the rule document in the REQUEST BODY (not the stored segments.rules), so the cockpit can preview an unsaved rule. Costs a single count query for the common single-query rule; 'any' rules and rules repeating a column are combined in the app and capped at 5000 ids, in which case 'capped' is true and 'count' is a LOWER bound. Membership is never touched. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| segment_id | string | **Required** The segment the preview is filed under. Its stored rules are NOT read — the rule comes from the body — but it has to exist. |  |
| conditions | array | The conditions, combined by `rule_match`. At least one, at most 25. |  |
| rule_match | string | How the conditions combine. Default 'all'. |  |
| target | string | Only 'organizations' is supported; any other value is rejected. A segment groups COMPANIES — the people are reached through them. |  |


```http request
POST https://api.revenexx.com/v1/customers/segments/{segment_id}/rules/recompute
```

** Evaluates segments.rules (NOT the request body), then inserts the newly matching organizations as source='rule' rows and deletes the rule rows that no longer match. Manual (source='manual') memberships are never inserted, deleted or shadowed. Bounded by a wall-clock budget below the gateway's upstream timeout: when 'done' is false, POST again with the returned 'cursor' until it is true. added/removed/processed count THIS call only. Omitting 'cursor' resumes an unfinished pass and starts a fresh one after a completed pass; an explicit null always restarts. segments.rules_computed_at is stamped only when the pass completes. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| segment_id | string | **Required** The segment whose stored rules are evaluated. |  |
| cursor | string | Continuation token from a previous response — the id of the last organization the pass touched. Omit to resume or start automatically; pass null to force a restart from the beginning. |  |

