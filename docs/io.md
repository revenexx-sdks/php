# Io Service


```http request
GET https://api.revenexx.com/v1/io/bulk-jobs
```

** The calling tenant&#039;s bulk jobs, newest first. Jobs are created by the
feature blocks (import / export / A/B swap / tenant copy / sample) —
never here; this surface is read-only.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| type | any |  |  |
| status | any |  |  |
| vendor | string |  |  |
| app | string |  |  |
| entity | string |  |  |
| limit | integer |  | 50 |


```http request
GET https://api.revenexx.com/v1/io/bulk-jobs/{id}
```

** Status, row counts, and progress for one bulk job.

Tenant-scoped: an id belonging to another tenant is filtered out and
is therefore indistinguishable from a non-existent one — which is the
intent.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
GET https://api.revenexx.com/v1/io/entities
```

** Flat list of the entities the calling tenant&#039;s installed apps expose,
sorted by vendor, app, entity. Feeds the entity pickers of the
Integration Studio I/O nodes.

The app set comes from `baseline.tenant_app_versions`. Per app the
entity list is resolved from the tenant&#039;s pinned schema version; when
that pointer is stale (missing or not applied) it falls back to the
latest applied version of `(vendor, app)`. Apps with no applied
schema at all contribute no entities.
 **


```http request
POST https://api.revenexx.com/v1/io/exports
```

** Creates a `bulk_job` and dispatches the engine to export the tenant&#039;s
rows for an entity. CSV/XML stream row-by-row into an S3 multipart
upload (flat RAM); JSON/XLSX are buffered. The response carries the
object key the result will be written to.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| app | string |  |  |
| entity | string |  |  |
| format | string |  | csv |
| profile_id | string |  |  |
| vendor | string |  |  |


```http request
GET https://api.revenexx.com/v1/io/exports/{id}/url
```

** Mints a short-TTL signed S3 `GET` URL for the object a completed
export wrote. Tenant-scoped: an id belonging to another tenant — or
to a job that is not an export — is indistinguishable from a
non-existent one and answers `404`.

The job must have reached `completed` or `partial`; any earlier
state answers `409` and carries the current `job_status`.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The export job's id. |  |


```http request
POST https://api.revenexx.com/v1/io/imports
```

** Creates a `bulk_job` and dispatches the engine to import a previously
uploaded object into the named entity. The engine streams CSV
row-by-row (flat RAM at 1M+ rows) and COPYs into the entity&#039;s staging
sibling before a merge / content-hash delta into the target.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| app | string |  |  |
| entity | string |  |  |
| format | string |  | csv |
| keys | array | Natural-key columns for upsert / delta. |  |
| max_rejects | integer | Rejected rows tolerated before the import fails. Omit for
unlimited (reject-and-continue); `0` = fail-fast.
 |  |
| mode | string |  | upsert |
| object_key | string |  |  |
| profile_id | string |  |  |
| target | string | `shadow` stages the dataset into the A/B `{table}__shadow`
sibling for diff + switch-over instead of writing live.
 | live |
| vendor | string |  |  |


```http request
GET https://api.revenexx.com/v1/io/profiles
```

** The calling tenant&#039;s saved profiles, ordered by name.

When `X-Revenexx-Market` is present the listing is filtered to the
profiles offered for that market — global profiles (`markets: null`)
plus those whose `markets` contain it. Omit the header to get every
profile, which is what the management view wants.
 **


```http request
POST https://api.revenexx.com/v1/io/profiles
```

** A tenant-secured, reusable mapping (field rename + transforms + keys)
for a direction (`import`/`export`), format, and entity. Runnable
on-click via `/io/profiles/{id}/run`.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| app | string |  |  |
| apply_mode | string |  | upsert |
| direction | string |  |  |
| entity | string |  |  |
| format | string |  |  |
| mapping | object | Field mapping. `fields[]` carry `target` (DB column),
`source` (external name) and ordered `transforms`; `keys[]`
are natural-key columns. Optional `max_rejects`/`target`
ride along for import runs.
 |  |
| markets | array | Markets this profile applies to (n:m). Omitted, `null` or
empty means global — offered for every market.
 |  |
| name | string |  |  |
| options | object | Free-form per-profile engine options. |  |
| vendor | string |  |  |


```http request
DELETE https://api.revenexx.com/v1/io/profiles/{id}
```

** Permanently remove a saved profile owned by the calling tenant.

Idempotent, and deliberately not a `404` path: deleting an id that
does not belong to the tenant still answers `200`, with `deleted: 0`.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
GET https://api.revenexx.com/v1/io/profiles/{id}
```

** A single saved profile. Tenant-scoped: an id owned by another tenant
is indistinguishable from a non-existent one and answers `404`.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
PUT https://api.revenexx.com/v1/io/profiles/{id}
```

** Replace a saved profile&#039;s mapping, format, or apply mode (tenant-scoped). **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |
| app | string |  |  |
| apply_mode | string |  | upsert |
| direction | string |  |  |
| entity | string |  |  |
| format | string |  |  |
| mapping | object | Field mapping. `fields[]` carry `target` (DB column),
`source` (external name) and ordered `transforms`; `keys[]`
are natural-key columns. Optional `max_rejects`/`target`
ride along for import runs.
 |  |
| markets | array | Markets this profile applies to (n:m). Omitted, `null` or
empty means global — offered for every market.
 |  |
| name | string |  |  |
| options | object | Free-form per-profile engine options. |  |
| vendor | string |  |  |


```http request
POST https://api.revenexx.com/v1/io/profiles/{id}/run
```

** Dispatches the engine using the saved profile. An import run requires
`object_key` (upload first); an export run writes a generated key.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |
| markets | array | Target market(s) the imported rows are assigned to (n:m).
Overrides the profile's own `markets` for this run; an
empty array means global (no assignment).
 |  |
| object_key | string | The uploaded object to import. Required for an import
run; ignored for an export run, which generates its own
key. Omitting it on an import answers `422` with
`RUN_NO_OBJECT`.
 |  |


```http request
POST https://api.revenexx.com/v1/io/uploads
```

** Returns a short-lived signed S3 `PUT` URL (+ required headers) and
the `object_key` to reference in a subsequent `/io/imports`. The
client uploads bytes directly to object storage — never through
Baseline.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| extension | string | File extension for the generated key. | csv |

