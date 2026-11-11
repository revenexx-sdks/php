# Cubes Service


```http request
GET https://api.revenexx.com/v1/cubes
```

** Get a list of all the project's Cubes. You can use the query params to filter your results. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| queries | array | Result filters, paging and ordering. Repeat the parameter once per query — `?queries=…&queries=…` — and make each value a JSON object, e.g. `{"method":"limit","values":[25]}`. The bracketed spellings `queries[]=` and `queries[0]=` are accepted too; the `limit(25)` call syntax is not. See “Query parameters” in this document's introduction. Filterable attributes, besides `$id`, `$createdAt`, `$updatedAt` and `$sequence`: name, enabled, deploymentId, installationId |  |
| search | string | Search term to filter your list results. Max length: 256 chars. |  |
| total | boolean | When set to false, the total count returned will be 0 and will not be calculated. |  |


```http request
POST https://api.revenexx.com/v1/cubes
```

** Create a new Cube. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| cubeId | string | Cube ID. Choose a custom ID or generate a random ID with `ID.unique()`. |  |
| enabled | boolean | Is Cube enabled? |  |
| installationId | string | Installation ID of the platform's VCS (Version Control System) integration to deploy from. |  |
| logging | boolean | When disabled, build logs and errors are excluded. |  |
| name | string | Cube name. Max length: 128 chars. |  |
| providerBranch | string | Production branch for the repo linked to the Cube. |  |
| providerRepositoryId | string | Repository ID of the repo linked to the Cube. |  |
| providerRootDirectory | string | Path to the Cube in the linked repo. |  |
| providerSilentMode | boolean | In silent mode, no comments are made on commits and pull requests. |  |
| vcsTriggerMode | string | Controls when a VCS deployment is triggered. "push" deploys on every branch push, "tag" deploys only when a tag is pushed or a GitHub release is published. |  |


```http request
DELETE https://api.revenexx.com/v1/cubes/{cubeId}
```

** Delete a Cube by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| cubeId | string | **Required** Cube ID. |  |


```http request
GET https://api.revenexx.com/v1/cubes/{cubeId}
```

** Get a Cube by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| cubeId | string | **Required** Cube ID. |  |


```http request
PUT https://api.revenexx.com/v1/cubes/{cubeId}
```

** Update a Cube by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| cubeId | string | **Required** Cube ID. |  |
| enabled | boolean | Is Cube enabled? |  |
| installationId | string | Installation ID of the platform's VCS (Version Control System) integration to deploy from. |  |
| logging | boolean | When disabled, build logs and errors are excluded. |  |
| name | string | Cube name. Max length: 128 chars. |  |
| providerBranch | string | Production branch for the repo linked to the Cube. |  |
| providerRepositoryId | string | Repository ID of the repo linked to the Cube. |  |
| providerRootDirectory | string | Path to the Cube in the linked repo. |  |
| providerSilentMode | boolean | In silent mode, no comments are made on commits and pull requests. |  |
| vcsTriggerMode | string | Controls when a VCS deployment is triggered. "push" deploys on every branch push, "tag" deploys only when a tag is pushed or a GitHub release is published. |  |


```http request
GET https://api.revenexx.com/v1/cubes/{cubeId}/deployments
```

** Get a list of all the Cube's code deployments. You can use the query params to filter your results. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| cubeId | string | **Required** Cube ID. |  |
| queries | array | Result filters, paging and ordering. Repeat the parameter once per query — `?queries=…&queries=…` — and make each value a JSON object, e.g. `{"method":"limit","values":[25]}`. The bracketed spellings `queries[]=` and `queries[0]=` are accepted too; the `limit(25)` call syntax is not. See “Query parameters” in this document's introduction. Filterable attributes, besides `$id`, `$createdAt`, `$updatedAt` and `$sequence`: buildSize, sourceSize, totalSize, buildDuration, status, activate, type |  |
| search | string | Search term to filter your list results. Max length: 256 chars. |  |
| total | boolean | When set to false, the total count returned will be 0 and will not be calculated. |  |


```http request
POST https://api.revenexx.com/v1/cubes/{cubeId}/deployments
```

** Create a new Cube deployment from a gzipped tar archive of the Cube directory. The build bundles the Cube and submits it as a release for review. The deployment ends `ready` once the release is submitted, or `failed` when it is rejected, with one line per problem in `buildLogs`. The review itself is not reported through this API. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| cubeId | string | **Required** Cube ID. |  |
| activate | boolean | Automatically activate the deployment when it is finished building. |  |
| code | file | The Cube directory packaged as a gzipped tar archive (`.tar.gz`) with `cube.json` at its root, sent as the file part of the multipart request. |  |
| releaseMode | string | Release mode: `deploy` releases the Cube once its round is approved; `preview` makes it a candidate the vendor accepts after checking it. |  |


```http request
POST https://api.revenexx.com/v1/cubes/{cubeId}/deployments/vcs
```

** Create a deployment when a Cube is connected to VCS.

This endpoint lets you create a deployment from a branch or commit. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| cubeId | string | **Required** Cube ID. |  |
| activate | boolean | Automatically activate the deployment when it is finished building. |  |
| reference | string | VCS reference to create deployment from. Depending on type this can be: branch name, commit hash, tag name |  |
| type | string | Type of reference passed. Allowed values are: branch, commit, tag |  |


```http request
GET https://api.revenexx.com/v1/cubes/{cubeId}/deployments/{deploymentId}
```

** Get a Cube deployment by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| cubeId | string | **Required** Cube ID. |  |
| deploymentId | string | **Required** Deployment ID. |  |


```http request
GET https://api.revenexx.com/v1/cubes/{cubeId}/releases
```

** List the release rounds of this Cube as the registry holds
them: version, round number, state (submitted, candidate,
approved, rejected), release mode, gate results, decision
deadline, rejection reason and the deployment that opened it. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| cubeId | string | **Required** Cube ID. |  |


```http request
POST https://api.revenexx.com/v1/cubes/{cubeId}/releases/accept
```

** Accept a preview candidate of this Cube after checking it.
Without `version` the version of the latest released
deployment is accepted; without `rc` its newest candidate
round. Only the Cube's vendor can accept, and only a candidate
in preview mode. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| cubeId | string | **Required** Cube ID. |  |
| rc | integer | Release round to accept. Defaults to the newest candidate round of the version. |  |
| version | string | Version to accept. Defaults to the version of the latest released deployment. |  |


```http request
POST https://api.revenexx.com/v1/cubes/{cubeId}/releases/rebuild
```

** Release the source a version of this Cube was built from
again, so it is linted and judged again in a new release
round. Takes the round's deployment, or the newest deployment
whose manifest names this version; `commit` narrows that. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| cubeId | string | **Required** Cube ID. |  |
| commit | string | Commit SHA the round recorded (7 to 64 hex characters). Optional. |  |
| deploymentId | string | Deployment the round was built as. Optional. |  |
| version | string | Version to rebuild. |  |

