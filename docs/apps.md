# Apps Service


```http request
GET https://api.revenexx.com/v1/apps
```

** List all Apps in the active project. Pass `search` to filter by name. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| queries | array | Result filters, paging and ordering. Repeat the parameter once per query — `?queries=…&queries=…` — and make each value a JSON object, e.g. `{"method":"limit","values":[25]}`. The bracketed spellings `queries[]=` and `queries[0]=` are accepted too; the `limit(25)` call syntax is not. See “Query parameters” in this document's introduction. Filterable attributes, besides `$id`, `$createdAt`, `$updatedAt` and `$sequence`: name, enabled, runtime, deploymentId, schedule, scheduleNext, schedulePrevious, timeout, entrypoint, commands, installationId |  |
| search | string | Search term to filter your list results. Max length: 256 chars. |  |
| total | boolean | When set to false, the total count returned will be 0 and will not be calculated. |  |


```http request
POST https://api.revenexx.com/v1/apps
```

** Create a new revenexx App. An App is the deployment surface for code that runs on the platform — backend jobs, APIs, integrations. The created App owns subsequent deployments and executions.

Phase 1 mirrors the underlying Functions runtime 1:1; future phases will add manifest validation, registry coupling and schema migrations. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| commands | string | Build Commands. |  |
| enabled | boolean | Is function enabled? When set to 'disabled', users cannot access the function but Server SDKs with and API key can still access the function. No data is lost when this is toggled. |  |
| entrypoint | string | Entrypoint File. This path is relative to the "providerRootDirectory". |  |
| events | array | Events list. Maximum of 100 events are allowed. |  |
| execute | array | An array of role strings with execution permissions. By default no user is granted with any execute permissions. Roles take the form `any`, `guests`, `users`, `user:<id>`, `team:<id>`, `member:<id>` or `label:<name>`, some of them with a `/<dimension>` suffix such as `users/verified` or `team:<id>/owner`. At most 100 entries. See “Role strings” in this document's introduction. |  |
| functionId | string | Function ID. Choose a custom ID or generate a random ID with `ID.unique()`. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can't start with a special char. Max length is 36 chars. |  |
| installationId | string | Installation ID of the platform's VCS (Version Control System) integration to deploy from. |  |
| logging | boolean | When disabled, executions will exclude logs and errors, and will be slightly faster. |  |
| name | string | Function name. Max length: 128 chars. |  |
| providerBranch | string | Production branch for the repo linked to the function. |  |
| providerRepositoryId | string | Repository ID of the repo linked to the function. |  |
| providerRootDirectory | string | Path to function code in the linked repo. |  |
| providerSilentMode | boolean | Is the VCS (Version Control System) connection in silent mode for the repo linked to the function? In silent mode, comments will not be made on commits and pull requests. |  |
| runtime | string | Execution runtime. |  |
| schedule | string | Schedule CRON syntax. |  |
| scopes | array | List of scopes allowed for API key auto-generated for every execution. Maximum of 100 scopes are allowed. |  |
| specification | string | Runtime specification for the function and builds. |  |
| timeout | integer | Function maximum execution time in seconds. |  |


```http request
GET https://api.revenexx.com/v1/apps/marketplace
```

** List apps published to the Marketplace. Proxies the App Registry on Console with `?published=true` filter. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| search | string | Search by app name, title or vendor. |  |
| per_page | integer | Items per page. |  |
| page | integer | Page number. |  |


```http request
POST https://api.revenexx.com/v1/apps/marketplace/install
```

** Install a Marketplace app on the calling project&#039;s tenant. Body: { owner, name }. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| name | string | App name. |  |
| owner | string | Owner tenant slug of the app being installed. |  |


```http request
GET https://api.revenexx.com/v1/apps/runtimes
```

** Get a list of all runtimes available for an App. Identical content to `functions.listRuntimes()`. **


```http request
GET https://api.revenexx.com/v1/apps/specifications
```

** List the compute specifications (CPU + memory) available to Apps in this project. **


```http request
GET https://api.revenexx.com/v1/apps/templates
```

** List the curated catalogue of App templates that can be used as starting points. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| runtimes | array | List of runtimes allowed for filtering function templates. Maximum of 100 runtimes are allowed. |  |
| useCases | array | List of use cases allowed for filtering function templates. Maximum of 100 use cases are allowed. |  |
| limit | integer | Limit the number of templates returned in the response. Default limit is 25, and maximum limit is 5000. |  |
| offset | integer | Offset the list of returned templates. Maximum offset is 5000. |  |
| total | boolean | When set to false, the total count returned will be 0 and will not be calculated. |  |


```http request
GET https://api.revenexx.com/v1/apps/templates/{templateId}
```

** Get a single App template by its ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| templateId | string | **Required** Template ID. |  |


```http request
GET https://api.revenexx.com/v1/apps/usage
```

** Get aggregated usage stats across all Apps in the project for the requested time range. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| range | string | Date range. |  |


```http request
DELETE https://api.revenexx.com/v1/apps/{functionId}
```

** Delete an App and all of its deployments. Cascades to the App Registry — Console removes the matching `RegisteredApp` row. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| functionId | string | **Required** App ID. |  |


```http request
GET https://api.revenexx.com/v1/apps/{functionId}
```

** Get an App by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| functionId | string | **Required** Function ID. |  |


```http request
PUT https://api.revenexx.com/v1/apps/{functionId}
```

** Update an App. Use this endpoint to rename, change runtime, schedule, environment variables and other configuration. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| functionId | string | **Required** Function ID. |  |
| commands | string | Build Commands. |  |
| enabled | boolean | Is function enabled? When set to 'disabled', users cannot access the function but Server SDKs with and API key can still access the function. No data is lost when this is toggled. |  |
| entrypoint | string | Entrypoint File. This path is relative to the "providerRootDirectory". |  |
| events | array | Events list. Maximum of 100 events are allowed. |  |
| execute | array | An array of role strings with execution permissions. By default no user is granted with any execute permissions. Roles take the form `any`, `guests`, `users`, `user:<id>`, `team:<id>`, `member:<id>` or `label:<name>`, some of them with a `/<dimension>` suffix such as `users/verified` or `team:<id>/owner`. At most 100 entries. See “Role strings” in this document's introduction. |  |
| installationId | string | Installation ID of the platform's VCS (Version Control System) integration to deploy from. |  |
| logging | boolean | When disabled, executions will exclude logs and errors, and will be slightly faster. |  |
| name | string | Function name. Max length: 128 chars. |  |
| providerBranch | string | Production branch for the repo linked to the function |  |
| providerRepositoryId | string | Repository ID of the repo linked to the function |  |
| providerRootDirectory | string | Path to function code in the linked repo. |  |
| providerSilentMode | boolean | Is the VCS (Version Control System) connection in silent mode for the repo linked to the function? In silent mode, comments will not be made on commits and pull requests. |  |
| runtime | string | Execution runtime. |  |
| schedule | string | Schedule CRON syntax. |  |
| scopes | array | List of scopes allowed for API Key auto-generated for every execution. Maximum of 100 scopes are allowed. |  |
| specification | string | Runtime specification for the function and builds. |  |
| timeout | integer | Maximum execution time in seconds. |  |


```http request
PATCH https://api.revenexx.com/v1/apps/{functionId}/deployment
```

** Set the active deployment for an App. The chosen deployment must already be `ready`. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| functionId | string | **Required** Function ID. |  |
| deploymentId | string | Deployment ID. |  |


```http request
GET https://api.revenexx.com/v1/apps/{functionId}/deployments
```

** List the deployment history of an App. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| functionId | string | **Required** Function ID. |  |
| queries | array | Result filters, paging and ordering. Repeat the parameter once per query — `?queries=…&queries=…` — and make each value a JSON object, e.g. `{"method":"limit","values":[25]}`. The bracketed spellings `queries[]=` and `queries[0]=` are accepted too; the `limit(25)` call syntax is not. See “Query parameters” in this document's introduction. Filterable attributes, besides `$id`, `$createdAt`, `$updatedAt` and `$sequence`: buildSize, sourceSize, totalSize, buildDuration, status, activate, type |  |
| search | string | Search term to filter your list results. Max length: 256 chars. |  |
| total | boolean | When set to false, the total count returned will be 0 and will not be calculated. |  |


```http request
POST https://api.revenexx.com/v1/apps/{functionId}/deployments
```

** Upload a new code deployment for an App. Accepts a `.tar.gz`
archive containing the App source. Phase 2 will extract the
manifest from this archive and validate it against the App
Registry before kicking off the build. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| functionId | string | **Required** Function ID. |  |
| activate | boolean | Automatically activate the deployment when it is finished building. |  |
| code | file | Your source directory packaged as a gzipped tar archive (`.tar.gz`), sent as the file part of the multipart request. |  |
| commands | string | Build Commands. |  |
| entrypoint | string | Entrypoint File. |  |


```http request
POST https://api.revenexx.com/v1/apps/{functionId}/deployments/duplicate
```

** Re-deploy an existing build under a new deployment ID. Useful for promoting a known-good preview build to production without rebuilding. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| functionId | string | **Required** Function ID. |  |
| buildId | string | Build unique ID. |  |
| deploymentId | string | Deployment ID. |  |


```http request
POST https://api.revenexx.com/v1/apps/{functionId}/deployments/template
```

** Create a new App deployment from a template in the App Templates catalogue. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| functionId | string | **Required** Function ID. |  |
| activate | boolean | Automatically activate the deployment when it is finished building. |  |
| owner | string | The name of the owner of the template. |  |
| reference | string | Reference value, can be a commit hash, branch name, or release tag |  |
| repository | string | Repository name of the template. |  |
| rootDirectory | string | Path to function code in the template repo. |  |
| type | string | Type for the reference provided. Can be commit, branch, or tag |  |


```http request
POST https://api.revenexx.com/v1/apps/{functionId}/deployments/vcs
```

** Trigger a new deployment from the App&#039;s connected Git repository. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| functionId | string | **Required** Function ID. |  |
| activate | boolean | Automatically activate the deployment when it is finished building. |  |
| reference | string | VCS reference to create deployment from. Depending on type this can be: branch name, commit hash |  |
| type | string | Type of reference passed. Allowed values are: branch, commit |  |


```http request
DELETE https://api.revenexx.com/v1/apps/{functionId}/deployments/{deploymentId}
```

** Delete a deployment. The active deployment cannot be deleted while it is active — switch first via the deployment-update endpoint. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| functionId | string | **Required** Function ID. |  |
| deploymentId | string | **Required** Deployment ID. |  |


```http request
GET https://api.revenexx.com/v1/apps/{functionId}/deployments/{deploymentId}
```

** Get a deployment by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| functionId | string | **Required** Function ID. |  |
| deploymentId | string | **Required** Deployment ID. |  |


```http request
GET https://api.revenexx.com/v1/apps/{functionId}/deployments/{deploymentId}/download
```

** Get a redirect URL to download the source archive of an App deployment. Useful for re-running a build locally or auditing what was deployed. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| functionId | string | **Required** Function ID. |  |
| deploymentId | string | **Required** Deployment ID. |  |
| type | string | Deployment file to download. Can be: "source", "output". |  |


```http request
PATCH https://api.revenexx.com/v1/apps/{functionId}/deployments/{deploymentId}/status
```

** Cancel an in-progress deployment build. Used by the Cockpit &quot;Cancel build&quot; affordance. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| functionId | string | **Required** Function ID. |  |
| deploymentId | string | **Required** Deployment ID. |  |


```http request
GET https://api.revenexx.com/v1/apps/{functionId}/executions
```

** List the execution history of an App. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| functionId | string | **Required** Function ID. |  |
| queries | array | Result filters, paging and ordering. Repeat the parameter once per query — `?queries=…&queries=…` — and make each value a JSON object, e.g. `{"method":"limit","values":[25]}`. The bracketed spellings `queries[]=` and `queries[0]=` are accepted too; the `limit(25)` call syntax is not. See “Query parameters” in this document's introduction. Filterable attributes, besides `$id`, `$createdAt`, `$updatedAt` and `$sequence`: trigger, status, responseStatusCode, duration, requestMethod, requestPath, deploymentId |  |
| total | boolean | When set to false, the total count returned will be 0 and will not be calculated. |  |


```http request
POST https://api.revenexx.com/v1/apps/{functionId}/executions
```

** Trigger an App execution. Use the optional `body`, `path`, `method` and `headers` parameters to invoke the App as if from an HTTP request. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| functionId | string | **Required** Function ID. |  |
| async | boolean | Execute code in the background. Default value is false. |  |
| body | string | HTTP body of execution. Default value is empty string. |  |
| headers | object | HTTP headers of execution. Defaults to empty. |  |
| method | string | HTTP method of execution. Default value is POST. |  |
| path | string | HTTP path of execution. Path can include query params. Default value is / |  |
| scheduledAt | string | Scheduled execution time in [ISO 8601](https://www.iso.org/iso-8601-date-and-time-format.html) format. DateTime value must be in future with precision in minutes. |  |


```http request
DELETE https://api.revenexx.com/v1/apps/{functionId}/executions/{executionId}
```

** Delete an App execution by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| functionId | string | **Required** Function ID. |  |
| executionId | string | **Required** Execution ID. |  |


```http request
GET https://api.revenexx.com/v1/apps/{functionId}/executions/{executionId}
```

** Get an App execution by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| functionId | string | **Required** Function ID. |  |
| executionId | string | **Required** Execution ID. |  |


```http request
GET https://api.revenexx.com/v1/apps/{functionId}/marketplace-status
```

** Read-through view of the App&#039;s App Registry row — visibility + Marketplace publish flag. Used by Cockpit to render the Publish/Unpublish button correctly on cold load. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| functionId | string | **Required** App ID. |  |


```http request
DELETE https://api.revenexx.com/v1/apps/{functionId}/publish
```

** Remove this App from the Marketplace listing. Existing tenant installations are unaffected. Idempotent. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| functionId | string | **Required** App ID. |  |


```http request
POST https://api.revenexx.com/v1/apps/{functionId}/publish
```

** Publish this App to the Marketplace. The App must have at
least one `ready` deployment with a registered manifest,
and its visibility (derived from `billing.json`) must be
`public` or `included`. Idempotent. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| functionId | string | **Required** App ID. |  |


```http request
GET https://api.revenexx.com/v1/apps/{functionId}/usage
```

** Get usage stats for a single App over the requested time range. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| functionId | string | **Required** Function ID. |  |
| range | string | Date range. |  |


```http request
GET https://api.revenexx.com/v1/apps/{functionId}/variables
```

** List all environment variables defined for the App. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| functionId | string | **Required** Function unique ID. |  |


```http request
POST https://api.revenexx.com/v1/apps/{functionId}/variables
```

** Create a new App environment variable. These are passed into the App at runtime as `process.env.*`. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| functionId | string | **Required** Function unique ID. |  |
| key | string | Variable key. Max length: 255 chars. |  |
| secret | boolean | Secret variables can be updated or deleted, but only functions can read them during build and runtime. |  |
| value | string | Variable value. Max length: 8192 chars. |  |


```http request
DELETE https://api.revenexx.com/v1/apps/{functionId}/variables/{variableId}
```

** Delete an App environment variable. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| functionId | string | **Required** Function unique ID. |  |
| variableId | string | **Required** Variable unique ID. |  |


```http request
GET https://api.revenexx.com/v1/apps/{functionId}/variables/{variableId}
```

** Get an App variable by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| functionId | string | **Required** Function unique ID. |  |
| variableId | string | **Required** Variable unique ID. |  |


```http request
PUT https://api.revenexx.com/v1/apps/{functionId}/variables/{variableId}
```

** Update an App environment variable. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| functionId | string | **Required** Function unique ID. |  |
| variableId | string | **Required** Variable unique ID. |  |
| key | string | Variable key. Max length: 255 chars. |  |
| secret | boolean | Secret variables can be updated or deleted, but only functions can read them during build and runtime. |  |
| value | string | Variable value. Max length: 8192 chars. |  |

