# PagesEditor Service


```http request
GET https://api.revenexx.com/v1/pages/editor/edit-states
```

** The drafts overview — the &quot;what is unpublished right now&quot; list, across every page: who holds it, since when, and whether it is parked for a date. Always newest-first — this route does not read `order`. An edit state whose page has been deleted is dropped from `items` but still counted in `total`. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| status | string | Which kind of working copy to list. Omitted means `active` — the drafts somebody is actually holding, which is what this route is opened for. |  |
| limit | integer | Page size (default 50). Unlike the list routes this one applies no ceiling of its own. |  |
| offset | integer | Row offset for pagination (default 0). |  |


```http request
POST https://api.revenexx.com/v1/pages/editor/translate
```

** The translation is the tenant&#039;s provider&#039;s, not this app&#039;s, and a tenant that has configured none gets no translation at all. The endpoint comes from the tenant setting `translate_endpoint` (PAGES_TRANSLATE_ENDPOINT remains a fallback). The bearer token does NOT: the gateway masks every setting flagged `sensitive`, so a key stored as one could never be read back — it stays the PAGES_TRANSLATE_KEY function secret. This app does not translate anything itself; it forwards `items` and hands the answer back. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| items | array | The strings to translate. This app reads no element of the list — the provider defines the contract, and the blökkli adapter sends the fields below. |  |


```http request
GET https://api.revenexx.com/v1/pages/editor/user-settings
```

** Per-user editor preferences — one row per user, scoped to this app. Not tenant configuration: nothing here changes what the API does, only how one person&#039;s editor looks. **


```http request
PUT https://api.revenexx.com/v1/pages/editor/user-settings
```

** Replaces the caller&#039;s preferences wholesale — this is not a merge, so send the whole bag. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| settings | object | The whole preferences bag — replaced, not merged, so send all of it. Its keys vary by the editor build and this app reads none of them. Null or omitted stores `{}`, which is how a user resets their editor. |  |


```http request
POST https://api.revenexx.com/v1/pages/editor/{page_id}/history
```

** Undo and redo. The pointer is the edit state&#039;s `current_index`, the position in the mutation log the page is materialized at, and this route is the only thing that moves it — `GET …/state?index=` looks at another position without going there. The log itself is never rewritten — only the pointer moves — so redo stays available until the next change is appended. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| page_id | string | **Required** The page being edited. |  |
| index | integer | The position in the mutation log to materialize at. `-1` undoes everything; the last position redoes everything. Values outside the log are clamped rather than refused. |  |
| langcode | string | Which language the returned state should be resolved for. |  |


```http request
GET https://api.revenexx.com/v1/pages/editor/{page_id}/last-changed
```

** The cheap poll behind &quot;someone else is editing this page&quot;: one integer, the moment the open edit state last moved, in epoch seconds rather than as a timestamp so a comparison is a subtraction. Compare it with the `updatedAt` you last saw and re-fetch the state only when it moved. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| page_id | string | **Required** The page being edited. |  |


```http request
POST https://api.revenexx.com/v1/pages/editor/{page_id}/mutation-status
```

** Take one change out of the replay without deleting it — &quot;what would the page look like without this edit&quot;. The entry stays in the history and can be switched back on. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| page_id | string | **Required** The page being edited. |  |
| enabled | boolean | Whether the entry takes part in the replay. |  |
| index | integer | The position in the mutation log to switch. Unknown positions answer 404. |  |
| langcode | string | Which language the returned state should be resolved for. |  |


```http request
POST https://api.revenexx.com/v1/pages/editor/{page_id}/mutations
```

** The one way page CONTENT changes. Each call appends one entry to the append-only log and answers the whole re-materialized state, so a client never re-fetches. A page nobody has opened yet needs no separate call to open it: the first mutation creates the edit state and takes ownership of it, and every later one asks for that ownership, so a second person editing the same page is refused until they take it over. Appending while the pointer sits mid-history discards the redo branch, exactly as an editor expects. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| page_id | string | **Required** The page being edited. |  |
| langcode | string | Which language the returned state should be resolved for. Not the language the change is written in — that lives in the payload. |  |
| payload | object | The arguments of that change; the keys depend on the plugin (`add` takes `{ bundle, hostEntityType, hostEntityUuid, hostField }`, `move` takes `{ uuid, preceedingUuid }`, and so on). Anything non-deterministic in it — new uuids, a library item's tree, a copied subtree — is resolved once here and stored, so replaying the log is deterministic forever. |  |
| plugin | string | Which kind of change this is — `add`, `move`, `delete`, `duplicate`, `update_field_value`, `update_options`, … An id this app does not implement is refused with 400 rather than stored, because the log has to replay. |  |


```http request
POST https://api.revenexx.com/v1/pages/editor/{page_id}/preview-grant
```

** Mints a link that shows this page&#039;s current edit state — the UNPUBLISHED one — to somebody without an editor account. The token is the whole credential — anyone holding it sees the page — so it expires, and a new one is cheap. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| page_id | string | **Required** The page being edited. |  |
| ttlHours | integer | Hours until the link expires. Defaults to 72. After that `GET /pages/delivery/preview/{token}` answers 410 rather than 404, so the holder can tell "expired" from "wrong link". |  |


```http request
POST https://api.revenexx.com/v1/pages/editor/{page_id}/publish
```

** Four things in one call: the mutation log is replayed into a finished block tree, that tree is snapshotted into a new revision, the page&#039;s canonical blocks are replaced by it, and the edit state is archived — so the page comes out of this with nothing unpublished and the working copy behind it closed rather than deleted. The revision is written FIRST and the canonical blocks replaced after, so a failure mid-way leaves the page recoverable. Block uuids survive, which is why comments anchored to a block outlive the publish. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| page_id | string | **Required** The page being edited. |  |
| force | boolean | Publish despite violations. Without it a page with unresolved violations answers 422 and nothing is written. |  |
| label | string | What to call this publication in the page's history — "Autumn campaign" rather than a timestamp. |  |


```http request
POST https://api.revenexx.com/v1/pages/editor/{page_id}/revert
```

** Throws the whole working copy away: the edit state row is deleted and its mutation log with it, so the history goes too — this is not an undo and cannot itself be undone. Unlike publishing, which archives the edit state, nothing of it survives to be reopened. The published page is untouched. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| page_id | string | **Required** The page being edited. |  |


```http request
POST https://api.revenexx.com/v1/pages/editor/{page_id}/schedule
```

** Gated on the tenant setting `enable_scheduled_publishing`, which is off by default: nothing in the platform publishes a scheduled edit state yet, so a date accepted here would be a promise the app cannot keep. Every editor state carries `features.scheduledPublishing` so the control can be hidden rather than the refusal discovered. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| page_id | string | **Required** The page being edited. |  |
| scheduledAt | string | The moment to publish at. Stored on the edit state and echoed back normalized to UTC. |  |


```http request
GET https://api.revenexx.com/v1/pages/editor/{page_id}/state
```

** The one call the visual editor boots on, and the only place the UNPUBLISHED page can be seen whole: the canonical blocks with every enabled mutation of the log replayed over them, the resulting field lists, the mutation history itself, who owns the edit state and where the undo pointer sits, and the tenant&#039;s editor feature flags. `langcode` decides which language the props resolve in, falling back to the page&#039;s source language. `index` replays the log up to a given position instead of the current one, which is how the editor previews an undo without performing it — it changes nothing, so it is safe to call at any position. Reading this creates nothing either: a page nobody has opened answers with a null `editState`, an empty history, and the published blocks as they stand. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| page_id | string | **Required** The page being edited. |  |
| langcode | string | Language to resolve every field for. Falls back to the page's source language, per field, so a half-translated page still comes back whole. |  |
| index | integer | Materialize the state at this point of the undo history instead of at the pointer the edit state carries. `-1` is "before the first change". It is how a diff view shows what one step did, and it does NOT move the pointer — `POST …/history` does that. |  |


```http request
POST https://api.revenexx.com/v1/pages/editor/{page_id}/take-ownership
```

** One page has one writer. This is how the second person gets the pen — the previous owner is notified rather than silently locked out. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| page_id | string | **Required** The page being edited. |  |


```http request
POST https://api.revenexx.com/v1/pages/editor/{page_id}/templates
```

** Freezes a selection into a reusable starting point. The blocks are read out of the page&#039;s CURRENT edit state rather than out of what is published, so a template can be cut from work in progress and the uuids you send are the ones the editor is showing. Unlike making a block reusable, this COPIES: pages later made from the template are independent of it and of each other. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| page_id | string | **Required** The page being edited. |  |
| description | string | A sentence about when to reach for it. |  |
| fieldName | string | The field this template should be offered in. Null offers it in every field. |  |
| isDefault | boolean | Whether a new page of that type should start from this template. |  |
| label | string | What the template is called in the picker. |  |
| pageBundle | string | The page type this template should be offered on. Omit to take the current page's own type. |  |
| uuids | array | The blocks to serialize into the template, each with its whole subtree. They are read from the CURRENT edit state, so unpublished changes are included. |  |


```http request
POST https://api.revenexx.com/v1/pages/editor/{page_id}/unschedule
```

** Takes a parked edit state back to `active` and clears its date, so the scheduled publication simply does not happen. The work is not touched — the mutation log, the undo position and the owner all stay as they were — and the page can then be published by hand or scheduled again for a different date. Like every other write to an edit state it asks for ownership, and a page with no open edit state answers 404 rather than pretending to have cancelled something. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| page_id | string | **Required** The page being edited. |  |

