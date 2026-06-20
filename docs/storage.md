# Storage Service


```http request
GET https://api.revenexx.com/v1/storage/assets
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| search | string |  |  |


```http request
POST https://api.revenexx.com/v1/storage/assets
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| alt_text | string |  |  |
| description | string |  |  |
| display_name | string |  |  |
| file | string |  |  |
| folder_id | string |  |  |
| keep_archive | boolean |  |  |
| tags | array |  |  |
| unpack | boolean | Archives only: unpack the members after upload (see AssetController). |  |
| visibility | string |  |  |


```http request
POST https://api.revenexx.com/v1/storage/assets/bulk
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| folder_id | string |  |  |
| visibility | string |  |  |


```http request
DELETE https://api.revenexx.com/v1/storage/assets/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
GET https://api.revenexx.com/v1/storage/assets/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
PATCH https://api.revenexx.com/v1/storage/assets/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |
| alt_text | string |  |  |
| description | string |  |  |
| display_name | string |  |  |
| folder_id | string |  |  |
| name | string |  |  |
| tags | array |  |  |
| visibility | string |  |  |


```http request
GET https://api.revenexx.com/v1/storage/assets/{id}/download
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
DELETE https://api.revenexx.com/v1/storage/assets/{id}/permanent
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
POST https://api.revenexx.com/v1/storage/assets/{id}/reprocess
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
POST https://api.revenexx.com/v1/storage/assets/{id}/restore
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
POST https://api.revenexx.com/v1/storage/assets/{id}/sign
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |
| ttl_seconds | integer |  |  |


```http request
POST https://api.revenexx.com/v1/storage/assets/{id}/unpack
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |
| keep_archive | boolean |  |  |
| target_folder_id | string |  |  |


```http request
GET https://api.revenexx.com/v1/storage/folders
```


```http request
POST https://api.revenexx.com/v1/storage/folders
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| name | string |  |  |
| parent_id | string |  |  |


```http request
DELETE https://api.revenexx.com/v1/storage/folders/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |
| recursive | boolean |  |  |


```http request
GET https://api.revenexx.com/v1/storage/folders/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
PATCH https://api.revenexx.com/v1/storage/folders/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |
| name | string |  |  |
| parent_id | string |  |  |


```http request
GET https://api.revenexx.com/v1/storage/sftp/rules
```


```http request
POST https://api.revenexx.com/v1/storage/sftp/rules
```


```http request
DELETE https://api.revenexx.com/v1/storage/sftp/rules/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
GET https://api.revenexx.com/v1/storage/sftp/rules/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
PATCH https://api.revenexx.com/v1/storage/sftp/rules/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
POST https://api.revenexx.com/v1/storage/sftp/rules/{id}/run
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
GET https://api.revenexx.com/v1/storage/sftp/rules/{id}/runs/{runId}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |
| runId | string | **Required**  |  |


```http request
GET https://api.revenexx.com/v1/storage/sftp/sync-history
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| rule_id | string |  |  |
| from | string |  |  |
| to | string |  |  |


```http request
GET https://api.revenexx.com/v1/storage/tenant/stats
```


```http request
GET https://api.revenexx.com/v1/storage/tenant/usage
```

