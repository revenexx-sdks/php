# Pages Service


```http request
GET https://api.revenexx.com/v1/pages/delivery/page
```


```http request
GET https://api.revenexx.com/v1/pages/delivery/pages
```


```http request
GET https://api.revenexx.com/v1/pages/delivery/preview/{token}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| token | string | **Required**  |  |


```http request
GET https://api.revenexx.com/v1/pages/editor/edit-states
```


```http request
GET https://api.revenexx.com/v1/pages/editor/notifications
```


```http request
POST https://api.revenexx.com/v1/pages/editor/notifications/mark-all-read
```


```http request
GET https://api.revenexx.com/v1/pages/editor/notifications/unread-count
```


```http request
POST https://api.revenexx.com/v1/pages/editor/translate
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| items | array |  |  |


```http request
GET https://api.revenexx.com/v1/pages/editor/user-settings
```


```http request
PUT https://api.revenexx.com/v1/pages/editor/user-settings
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| settings | object |  |  |


```http request
GET https://api.revenexx.com/v1/pages/editor/users
```


```http request
GET https://api.revenexx.com/v1/pages/editor/{page_id}/comments
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| page_id | string | **Required**  |  |


```http request
POST https://api.revenexx.com/v1/pages/editor/{page_id}/comments
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| page_id | string | **Required**  |  |
| blockUuids | array |  |  |
| body | string |  |  |
| parentUuid | string |  |  |


```http request
DELETE https://api.revenexx.com/v1/pages/editor/{page_id}/comments/{uuid}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| page_id | string | **Required**  |  |
| uuid | string | **Required**  |  |


```http request
PUT https://api.revenexx.com/v1/pages/editor/{page_id}/comments/{uuid}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| page_id | string | **Required**  |  |
| uuid | string | **Required**  |  |
| body | string |  |  |


```http request
POST https://api.revenexx.com/v1/pages/editor/{page_id}/comments/{uuid}/resolve
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| page_id | string | **Required**  |  |
| uuid | string | **Required**  |  |


```http request
POST https://api.revenexx.com/v1/pages/editor/{page_id}/comments/{uuid}/toggle-task
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| page_id | string | **Required**  |  |
| uuid | string | **Required**  |  |
| taskIndex | integer |  |  |


```http request
POST https://api.revenexx.com/v1/pages/editor/{page_id}/comments/{uuid}/unresolve
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| page_id | string | **Required**  |  |
| uuid | string | **Required**  |  |


```http request
POST https://api.revenexx.com/v1/pages/editor/{page_id}/history
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| page_id | string | **Required**  |  |
| index | integer |  |  |
| langcode | string |  |  |


```http request
GET https://api.revenexx.com/v1/pages/editor/{page_id}/last-changed
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| page_id | string | **Required**  |  |


```http request
POST https://api.revenexx.com/v1/pages/editor/{page_id}/mutation-status
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| page_id | string | **Required**  |  |
| enabled | boolean |  |  |
| index | integer |  |  |
| langcode | string |  |  |


```http request
POST https://api.revenexx.com/v1/pages/editor/{page_id}/mutations
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| page_id | string | **Required**  |  |
| langcode | string |  |  |
| payload | object |  |  |
| plugin | string | Mutation plugin id (add, move, delete, duplicate, update_field_value, ...). |  |


```http request
POST https://api.revenexx.com/v1/pages/editor/{page_id}/preview-grant
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| page_id | string | **Required**  |  |
| ttlHours | integer |  |  |


```http request
POST https://api.revenexx.com/v1/pages/editor/{page_id}/publish
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| page_id | string | **Required**  |  |
| force | boolean | Publish despite violations. |  |
| label | string |  |  |


```http request
POST https://api.revenexx.com/v1/pages/editor/{page_id}/revert
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| page_id | string | **Required**  |  |


```http request
POST https://api.revenexx.com/v1/pages/editor/{page_id}/schedule
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| page_id | string | **Required**  |  |
| scheduledAt | string |  |  |


```http request
GET https://api.revenexx.com/v1/pages/editor/{page_id}/state
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| page_id | string | **Required**  |  |


```http request
POST https://api.revenexx.com/v1/pages/editor/{page_id}/take-ownership
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| page_id | string | **Required**  |  |


```http request
POST https://api.revenexx.com/v1/pages/editor/{page_id}/templates
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| page_id | string | **Required**  |  |
| description | string |  |  |
| fieldName | string |  |  |
| isDefault | boolean |  |  |
| label | string |  |  |
| pageBundle | string |  |  |
| uuids | array |  |  |


```http request
POST https://api.revenexx.com/v1/pages/editor/{page_id}/unschedule
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| page_id | string | **Required**  |  |


```http request
GET https://api.revenexx.com/v1/pages/library
```


```http request
DELETE https://api.revenexx.com/v1/pages/library/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
GET https://api.revenexx.com/v1/pages/library/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
PUT https://api.revenexx.com/v1/pages/library/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |
| bundle | string |  |  |
| label | string |  |  |
| tree | object | Serialized block tree ({ bundle, props, props_i18n, options, children }). |  |


```http request
GET https://api.revenexx.com/v1/pages/pages
```


```http request
POST https://api.revenexx.com/v1/pages/pages
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| bundle | string |  |  |
| hostOptions | object |  |  |
| meta | object |  |  |
| slug | string |  |  |
| sourceLanguage | string |  |  |
| title | string |  |  |


```http request
DELETE https://api.revenexx.com/v1/pages/pages/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
GET https://api.revenexx.com/v1/pages/pages/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
PUT https://api.revenexx.com/v1/pages/pages/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |
| bundle | string |  |  |
| meta | object |  |  |
| slug | string |  |  |
| status | string |  |  |
| title | string |  |  |


```http request
GET https://api.revenexx.com/v1/pages/pages/{id}/revisions
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
POST https://api.revenexx.com/v1/pages/seed
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| pages | array |  |  |


```http request
GET https://api.revenexx.com/v1/pages/templates
```


```http request
DELETE https://api.revenexx.com/v1/pages/templates/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
GET https://api.revenexx.com/v1/pages/templates/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
PUT https://api.revenexx.com/v1/pages/templates/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |
| description | string |  |  |
| field_name | string |  |  |
| is_default | boolean |  |  |
| label | string |  |  |
| page_bundle | string |  |  |
| tree | array | Serialized block trees ({ bundle, props, props_i18n, options, children }). |  |

