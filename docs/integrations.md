# Integrations Service


```http request
GET https://api.revenexx.com/v1/integrations
```

** Get a list of all the project's integration node packages. You can use the query params to filter your results. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| queries | array | Result filters, paging and ordering. Repeat the parameter once per query — `?queries=…&queries=…` — and make each value a JSON object, e.g. `{"method":"limit","values":[25]}`. The bracketed spellings `queries[]=` and `queries[0]=` are accepted too; the `limit(25)` call syntax is not. See “Query parameters” in this document's introduction. Filterable attributes, besides `$id`, `$createdAt`, `$updatedAt` and `$sequence`: name, enabled, deploymentId, buildCommand, installCommand, installationId |  |
| search | string | Search term to filter your list results. Max length: 256 chars. |  |
| total | boolean | When set to false, the total count returned will be 0 and will not be calculated. |  |


```http request
POST https://api.revenexx.com/v1/integrations
```

** Create a new integration node package. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| enabled | boolean | Is integration enabled? |  |
| installationId | string | Installation ID of the platform's VCS (Version Control System) integration to deploy from. |  |
| integrationId | string | Integration ID. Choose a custom ID or generate a random ID with `ID.unique()`. |  |
| logging | boolean | When disabled, build logs and errors are excluded. |  |
| name | string | Integration name. Max length: 128 chars. |  |
| providerBranch | string | Production branch for the repo linked to the integration. |  |
| providerRepositoryId | string | Repository ID of the repo linked to the integration. |  |
| providerRootDirectory | string | Path to the package in the linked repo. |  |
| providerSilentMode | boolean | In silent mode, no comments are made on commits and pull requests. |  |
| vcsPreviewsEnabled | boolean | Whether pull request events create preview deployments and PR comments. |  |
| vcsTriggerMode | string | Controls when a VCS deployment is triggered. "push" deploys on every branch push, "tag" deploys only when a tag is pushed or a GitHub release is published. |  |


```http request
DELETE https://api.revenexx.com/v1/integrations/{integrationId}
```

** Delete an integration by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| integrationId | string | **Required** Integration ID. |  |


```http request
GET https://api.revenexx.com/v1/integrations/{integrationId}
```

** Get an integration by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| integrationId | string | **Required** Integration ID. |  |


```http request
PUT https://api.revenexx.com/v1/integrations/{integrationId}
```

** Update an integration by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| integrationId | string | **Required** Integration ID. |  |
| enabled | boolean | Is integration enabled? |  |
| installationId | string | Installation ID of the platform's VCS (Version Control System) integration to deploy from. |  |
| logging | boolean | When disabled, build logs and errors are excluded. |  |
| name | string | Integration name. Max length: 128 chars. |  |
| providerBranch | string | Production branch for the repo linked to the integration. |  |
| providerRepositoryId | string | Repository ID of the repo linked to the integration. |  |
| providerRootDirectory | string | Path to the package in the linked repo. |  |
| providerSilentMode | boolean | In silent mode, no comments are made on commits and pull requests. |  |
| vcsPreviewsEnabled | boolean | Whether pull request events create preview deployments and PR comments. |  |
| vcsTriggerMode | string | Controls when a VCS deployment is triggered. "push" deploys on every branch push, "tag" deploys only when a tag is pushed or a GitHub release is published. |  |


```http request
GET https://api.revenexx.com/v1/integrations/{integrationId}/deployments
```

** Get a list of all the integration's code deployments. You can use the query params to filter your results. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| integrationId | string | **Required** Integration ID. |  |
| queries | array | Result filters, paging and ordering. Repeat the parameter once per query — `?queries=…&queries=…` — and make each value a JSON object, e.g. `{"method":"limit","values":[25]}`. The bracketed spellings `queries[]=` and `queries[0]=` are accepted too; the `limit(25)` call syntax is not. See “Query parameters” in this document's introduction. Filterable attributes, besides `$id`, `$createdAt`, `$updatedAt` and `$sequence`: buildSize, sourceSize, totalSize, buildDuration, status, activate, type |  |
| search | string | Search term to filter your list results. Max length: 256 chars. |  |
| total | boolean | When set to false, the total count returned will be 0 and will not be calculated. |  |


```http request
POST https://api.revenexx.com/v1/integrations/{integrationId}/deployments
```

** Create a new integration deployment from a gzipped tar archive of the node package directory. The build publishes the package and registers the version in the integrations registry as a release round. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| integrationId | string | **Required** Integration ID. |  |
| activate | boolean | Automatically activate the deployment when it is finished building. |  |
| code | file | Gzip file with the node package directory (package.json at its root). When used with the CLI, pass the path to the package directory, and the CLI will package it. |  |
| releaseMode | string | Release mode: `deploy` releases the version once its round is approved; `preview` makes it a candidate the vendor accepts after checking it. |  |


```http request
POST https://api.revenexx.com/v1/integrations/{integrationId}/deployments/vcs
```

** Create a deployment when an integration is connected to VCS.

This endpoint lets you create a deployment from a branch or commit. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| integrationId | string | **Required** Integration ID. |  |
| activate | boolean | Automatically activate the deployment when it is finished building. |  |
| reference | string | VCS reference to create deployment from. Depending on type this can be: branch name, commit hash |  |
| type | string | Type of reference passed. Allowed values are: branch, commit |  |


```http request
GET https://api.revenexx.com/v1/integrations/{integrationId}/deployments/{deploymentId}
```

** Get an integration deployment by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| integrationId | string | **Required** Integration ID. |  |
| deploymentId | string | **Required** Deployment ID. |  |


```http request
GET https://api.revenexx.com/v1/integrations/{integrationId}/releases
```

** List the release rounds of this integration as the
integrations registry holds them: version, round number,
state (submitted, candidate, approved, rejected), release
mode, gate results, decision deadline and rejection reason. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| integrationId | string | **Required** Integration ID. |  |


```http request
POST https://api.revenexx.com/v1/integrations/{integrationId}/releases/accept
```

** Accept a preview candidate of this integration after checking
it. Without `version` the version of the latest registered
deployment is accepted; without `rc` its newest candidate
round. Only the integration's vendor can accept, and only a
candidate in preview mode. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| integrationId | string | **Required** Integration ID. |  |
| rc | integer | Release round to accept. Defaults to the newest candidate round of the version. |  |
| version | string | Version to accept. Defaults to the version of the latest registered deployment. |  |


```http request
POST https://api.revenexx.com/v1/integrations/{integrationId}/releases/rebuild
```

** Rebuild the source a release of this integration was built
from, so its release gates run again and a new release round
opens. Picks the newest deployment whose manifest names this
version; `commit` narrows it to that commit. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| integrationId | string | **Required** Integration ID. |  |
| commit | string | Commit SHA the round recorded (7 to 64 hex characters). Optional. |  |
| version | string | Version to rebuild. |  |

