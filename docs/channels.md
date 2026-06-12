# Channels Service


```http request
GET https://api.revenexx.com/v1/channels
```


```http request
POST https://api.revenexx.com/v1/channels
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| code | string | Stable channel code, unique per tenant (e.g. shop, punchout-acme). |  |
| is_default | boolean | Mark as the default channel (default false). |  |
| labels | object | Localized display names keyed by locale. |  |
| name | string | Display name. |  |
| position | integer | Sort position (default 0). |  |
| status | string | Lifecycle status (default 'active'). |  |
| type | string | Where business happens (default 'storefront'). |  |


```http request
POST https://api.revenexx.com/v1/channels/defaults
```


```http request
DELETE https://api.revenexx.com/v1/channels/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
GET https://api.revenexx.com/v1/channels/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
PUT https://api.revenexx.com/v1/channels/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |
| code | string | Stable channel code, unique per tenant (e.g. shop, punchout-acme). |  |
| is_default | boolean | Mark as the default channel (default false). |  |
| labels | object | Localized display names keyed by locale. |  |
| name | string | Display name. |  |
| position | integer | Sort position (default 0). |  |
| status | string | Lifecycle status (default 'active'). |  |
| type | string | Where business happens (default 'storefront'). |  |

