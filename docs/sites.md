# Sites Service


```http request
GET https://api.revenexx.com/v1/sites
```

** Get a list of all the project&#039;s sites. You can use the query params to filter your results. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| queries | array | Result filters, paging and ordering. Repeat the parameter once per query — `?queries=…&queries=…` — and make each value a JSON object, e.g. `{"method":"limit","values":[25]}`. The bracketed spellings `queries[]=` and `queries[0]=` are accepted too; the `limit(25)` call syntax is not. See “Query parameters” in this document's introduction. Filterable attributes, besides `$id`, `$createdAt`, `$updatedAt` and `$sequence`: name, enabled, framework, deploymentId, buildCommand, installCommand, outputDirectory, installationId |  |
| search | string | Search term to filter your list results. Max length: 256 chars. |  |
| total | boolean | When set to false, the total count returned will be 0 and will not be calculated. |  |


```http request
POST https://api.revenexx.com/v1/sites
```

** Create a new site. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| adapter | string | Framework adapter defining rendering strategy. Allowed values are: static, ssr |  |
| buildCommand | string | Build Command. |  |
| buildRuntime | string | Runtime to use during build step. |  |
| enabled | boolean | Is site enabled? When set to 'disabled', users cannot access the site but Server SDKs with and API key can still access the site. No data is lost when this is toggled. |  |
| fallbackFile | string | Fallback file for single page application sites. |  |
| framework | string | Sites framework. |  |
| installCommand | string | Install Command. |  |
| installationId | string | Installation ID of the platform's VCS (Version Control System) integration to deploy from. |  |
| logging | boolean | When disabled, request logs will exclude logs and errors, and site responses will be slightly faster. |  |
| name | string | Site name. Max length: 128 chars. |  |
| outputDirectory | string | Output Directory for site. |  |
| providerBranch | string | Production branch for the repo linked to the site. |  |
| providerRepositoryId | string | Repository ID of the repo linked to the site. |  |
| providerRootDirectory | string | Path to site code in the linked repo. |  |
| providerSilentMode | boolean | Is the VCS (Version Control System) connection in silent mode for the repo linked to the site? In silent mode, comments will not be made on commits and pull requests. |  |
| siteId | string | Site ID. Choose a custom ID or generate a random ID with `ID.unique()`. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can't start with a special char. Max length is 36 chars. |  |
| specification | string | Framework specification for the site and builds. |  |
| timeout | integer | Maximum request time in seconds. |  |


```http request
GET https://api.revenexx.com/v1/sites/frameworks
```

** Get a list of all frameworks that are currently available on the server instance. **


```http request
GET https://api.revenexx.com/v1/sites/specifications
```

** List allowed site specifications for this instance. **


```http request
DELETE https://api.revenexx.com/v1/sites/{siteId}
```

** Delete a site by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| siteId | string | **Required** Site ID. |  |


```http request
GET https://api.revenexx.com/v1/sites/{siteId}
```

** Get a site by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| siteId | string | **Required** Site ID. |  |


```http request
PUT https://api.revenexx.com/v1/sites/{siteId}
```

** Update site by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| siteId | string | **Required** Site ID. |  |
| adapter | string | Framework adapter defining rendering strategy. Allowed values are: static, ssr |  |
| buildCommand | string | Build Command. |  |
| buildRuntime | string | Runtime to use during build step. |  |
| enabled | boolean | Is site enabled? When set to 'disabled', users cannot access the site but Server SDKs with and API key can still access the site. No data is lost when this is toggled. |  |
| fallbackFile | string | Fallback file for single page application sites. |  |
| framework | string | Sites framework. |  |
| installCommand | string | Install Command. |  |
| installationId | string | Installation ID of the platform's VCS (Version Control System) integration to deploy from. |  |
| logging | boolean | When disabled, request logs will exclude logs and errors, and site responses will be slightly faster. |  |
| name | string | Site name. Max length: 128 chars. |  |
| outputDirectory | string | Output Directory for site. |  |
| providerBranch | string | Production branch for the repo linked to the site. |  |
| providerRepositoryId | string | Repository ID of the repo linked to the site. |  |
| providerRootDirectory | string | Path to site code in the linked repo. |  |
| providerSilentMode | boolean | Is the VCS (Version Control System) connection in silent mode for the repo linked to the site? In silent mode, comments will not be made on commits and pull requests. |  |
| specification | string | Framework specification for the site and builds. |  |
| timeout | integer | Maximum request time in seconds. |  |


```http request
PATCH https://api.revenexx.com/v1/sites/{siteId}/deployment
```

** Update the site active deployment. Use this endpoint to switch the code deployment that should be used when visitor opens your site. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| siteId | string | **Required** Site ID. |  |
| deploymentId | string | Deployment ID. |  |


```http request
GET https://api.revenexx.com/v1/sites/{siteId}/deployments
```

** Get a list of all the site&#039;s code deployments. You can use the query params to filter your results. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| siteId | string | **Required** Site ID. |  |
| queries | array | Result filters, paging and ordering. Repeat the parameter once per query — `?queries=…&queries=…` — and make each value a JSON object, e.g. `{"method":"limit","values":[25]}`. The bracketed spellings `queries[]=` and `queries[0]=` are accepted too; the `limit(25)` call syntax is not. See “Query parameters” in this document's introduction. Filterable attributes, besides `$id`, `$createdAt`, `$updatedAt` and `$sequence`: buildSize, sourceSize, totalSize, buildDuration, status, activate, type |  |
| search | string | Search term to filter your list results. Max length: 256 chars. |  |
| total | boolean | When set to false, the total count returned will be 0 and will not be calculated. |  |


```http request
POST https://api.revenexx.com/v1/sites/{siteId}/deployments
```

** Create a new site code deployment. Use this endpoint to upload a new version of your site code. To activate your newly uploaded code, you&#039;ll need to update the site&#039;s deployment to use your new deployment ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| siteId | string | **Required** Site ID. |  |
| activate | boolean | Automatically activate the deployment when it is finished building. |  |
| buildCommand | string | Build Commands. |  |
| code | file | Your source directory packaged as a gzipped tar archive (`.tar.gz`), sent as the file part of the multipart request. |  |
| installCommand | string | Install Commands. |  |
| outputDirectory | string | Output Directory. |  |


```http request
POST https://api.revenexx.com/v1/sites/{siteId}/deployments/duplicate
```

** Create a new build for an existing site deployment. This endpoint allows you to rebuild a deployment with the updated site configuration, including its commands and output directory if they have been modified. The build process will be queued and executed asynchronously. The original deployment&#039;s code will be preserved and used for the new build. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| siteId | string | **Required** Site ID. |  |
| deploymentId | string | Deployment ID. |  |


```http request
POST https://api.revenexx.com/v1/sites/{siteId}/deployments/template
```

** Create a deployment based on a template.

Unlike app templates, site templates have no listing on this API — that catalogue is the vendor&#039;s and is not reproduced here. Take `repository`, `owner`, `rootDirectory` and `reference` from wherever the template is published. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| siteId | string | **Required** Site ID. |  |
| activate | boolean | Automatically activate the deployment when it is finished building. |  |
| owner | string | The name of the owner of the template. |  |
| reference | string | Reference value, can be a commit hash, branch name, or release tag |  |
| repository | string | Repository name of the template. |  |
| rootDirectory | string | Path to site code in the template repo. |  |
| type | string | Type for the reference provided. Can be commit, branch, or tag |  |


```http request
POST https://api.revenexx.com/v1/sites/{siteId}/deployments/vcs
```

** Create a deployment when a site is connected to VCS.

This endpoint lets you create deployment from a branch, commit, or a tag. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| siteId | string | **Required** Site ID. |  |
| activate | boolean | Automatically activate the deployment when it is finished building. |  |
| reference | string | VCS reference to create deployment from. Depending on type this can be: branch name, commit hash |  |
| type | string | Type of reference passed. Allowed values are: branch, commit |  |


```http request
DELETE https://api.revenexx.com/v1/sites/{siteId}/deployments/{deploymentId}
```

** Delete a site deployment by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| siteId | string | **Required** Site ID. |  |
| deploymentId | string | **Required** Deployment ID. |  |


```http request
GET https://api.revenexx.com/v1/sites/{siteId}/deployments/{deploymentId}
```

** Get a site deployment by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| siteId | string | **Required** Site ID. |  |
| deploymentId | string | **Required** Deployment ID. |  |


```http request
GET https://api.revenexx.com/v1/sites/{siteId}/deployments/{deploymentId}/download
```

** Get a site deployment content by its unique ID. The endpoint response return with a &#039;Content-Disposition: attachment&#039; header that tells the browser to start downloading the file to user downloads directory. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| siteId | string | **Required** Site ID. |  |
| deploymentId | string | **Required** Deployment ID. |  |
| type | string | Deployment file to download. Can be: "source", "output". |  |


```http request
PATCH https://api.revenexx.com/v1/sites/{siteId}/deployments/{deploymentId}/status
```

** Cancel an ongoing site deployment build. If the build is already in progress, it will be stopped and marked as canceled. If the build hasn&#039;t started yet, it will be marked as canceled without executing. You cannot cancel builds that have already completed (status &#039;ready&#039;) or failed. The response includes the final build status and details. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| siteId | string | **Required** Site ID. |  |
| deploymentId | string | **Required** Deployment ID. |  |


```http request
GET https://api.revenexx.com/v1/sites/{siteId}/logs
```

** Get a list of all site logs. You can use the query params to filter your results. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| siteId | string | **Required** Site ID. |  |
| queries | array | Result filters, paging and ordering. Repeat the parameter once per query — `?queries=…&queries=…` — and make each value a JSON object, e.g. `{"method":"limit","values":[25]}`. The bracketed spellings `queries[]=` and `queries[0]=` are accepted too; the `limit(25)` call syntax is not. See “Query parameters” in this document's introduction. Filterable attributes, besides `$id`, `$createdAt`, `$updatedAt` and `$sequence`: trigger, status, responseStatusCode, duration, requestMethod, requestPath, deploymentId |  |
| total | boolean | When set to false, the total count returned will be 0 and will not be calculated. |  |


```http request
DELETE https://api.revenexx.com/v1/sites/{siteId}/logs/{logId}
```

** Delete a site log by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| siteId | string | **Required** Site ID. |  |
| logId | string | **Required** Log ID. |  |


```http request
GET https://api.revenexx.com/v1/sites/{siteId}/logs/{logId}
```

** Get a site request log by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| siteId | string | **Required** Site ID. |  |
| logId | string | **Required** Log ID. |  |


```http request
GET https://api.revenexx.com/v1/sites/{siteId}/variables
```

** Get a list of all variables of a specific site. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| siteId | string | **Required** Site unique ID. |  |


```http request
POST https://api.revenexx.com/v1/sites/{siteId}/variables
```

** Create a new site variable. These variables can be accessed during build and runtime (server-side rendering) as environment variables. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| siteId | string | **Required** Site unique ID. |  |
| key | string | Variable key. Max length: 255 chars. |  |
| secret | boolean | Secret variables can be updated or deleted, but only sites can read them during build and runtime. |  |
| value | string | Variable value. Max length: 8192 chars. |  |


```http request
DELETE https://api.revenexx.com/v1/sites/{siteId}/variables/{variableId}
```

** Delete a variable by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| siteId | string | **Required** Site unique ID. |  |
| variableId | string | **Required** Variable unique ID. |  |


```http request
GET https://api.revenexx.com/v1/sites/{siteId}/variables/{variableId}
```

** Get a variable by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| siteId | string | **Required** Site unique ID. |  |
| variableId | string | **Required** Variable unique ID. |  |


```http request
PUT https://api.revenexx.com/v1/sites/{siteId}/variables/{variableId}
```

** Update variable by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| siteId | string | **Required** Site unique ID. |  |
| variableId | string | **Required** Variable unique ID. |  |
| key | string | Variable key. Max length: 255 chars. |  |
| secret | boolean | Secret variables can be updated or deleted, but only sites can read them during build and runtime. |  |
| value | string | Variable value. Max length: 8192 chars. |  |

