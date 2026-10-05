# TagManagerContainer Service


```http request
GET https://api.revenexx.com/v1/tag-manager/container-checks
```

** Every container check of this tenant visible in the requested market, paged. Equality filters on plain columns; jsonb columns are answered but not filterable. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| limit | integer | Page size (default 50, max 200). |  |
| offset | integer | Row offset for pagination (default 0). |  |
| order | string | Sort as 'column.asc' | 'column.desc', e.g. 'created_at.desc'. |  |
| id | string | Only rows whose `id` equals this value. |  |
| container_version_id | string | Only rows whose `container_version_id` equals this value. |  |
| container_version_number | integer | Only rows whose `container_version_number` equals this value. |  |
| policy_version_number | integer | Only rows whose `policy_version_number` equals this value. |  |
| reason | string | Only rows whose `reason` equals this value. |  |
| ok | boolean | Only rows whose `ok` equals this value. |  |
| checked_at | string | Only rows whose `checked_at` equals this value. |  |


```http request
GET https://api.revenexx.com/v1/tag-manager/container-checks/{id}
```

** One container check by id. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The id of the container check. |  |


```http request
GET https://api.revenexx.com/v1/tag-manager/container-versions
```

** Every container version of this tenant visible in the requested market, paged. Equality filters on plain columns; jsonb columns are answered but not filterable. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| limit | integer | Page size (default 50, max 200). |  |
| offset | integer | Row offset for pagination (default 0). |  |
| order | string | Sort as 'column.asc' | 'column.desc', e.g. 'created_at.desc'. |  |
| id | string | Only rows whose `id` equals this value. |  |
| number | integer | Only rows whose `number` equals this value. |  |
| market | string | Only rows whose `market` equals this value. |  |
| sha256 | string | Only rows whose `sha256` equals this value. |  |
| policy_version_number | integer | Only rows whose `policy_version_number` equals this value. |  |
| policy_sha256 | string | Only rows whose `policy_sha256` equals this value. |  |
| rolled_back_from | integer | Only rows whose `rolled_back_from` equals this value. |  |
| note | string | Only rows whose `note` equals this value. |  |
| published_by | string | Only rows whose `published_by` equals this value. |  |
| published_at | string | Only rows whose `published_at` equals this value. |  |


```http request
GET https://api.revenexx.com/v1/tag-manager/container-versions/{id}
```

** One container version by id. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The id of the container version. |  |


```http request
POST https://api.revenexx.com/v1/tag-manager/container/publish
```

** Freeze the active marketing tags, triggers and variables for the requested market into a new container version, after checking them against the consent manager's published policy. Every violation is answered at once. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| note | string | A note kept with the version. |  |


```http request
POST https://api.revenexx.com/v1/tag-manager/container/recheck
```

** Check every live container against the consent policy published now and record the result. Also runs on the consent manager's policy_version.published event. Changes no tag. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| data | object | Request body |  |


```http request
POST https://api.revenexx.com/v1/tag-manager/container/rollback
```

** Publish the snapshot of an earlier version as a NEW version, after the same checks against the policy published now. The old version is not touched. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| version | integer | The number of the version to publish again. |  |


```http request
GET https://api.revenexx.com/v1/tag-manager/container/status
```

** Per market: the live version, its hash and policy version, and the latest check with its violations — what the Studio shows as a notice when a new policy no longer discloses a live vendor. **


```http request
POST https://api.revenexx.com/v1/tag-manager/container/validate
```

** A dry run of the publish: builds the draft for the requested market, reads the consent manager's published policy for it and answers every violation. Writes nothing. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| data | object | Request body |  |


```http request
POST https://api.revenexx.com/v1/tag-manager/preview
```

** Mint a token that lets a storefront load the unpublished draft (`?rvx_tm_preview=<token>`). The token is answered once and stored only as its hash. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| ttl_minutes | integer | Lifetime in minutes, default 60, at most 7 days. |  |

