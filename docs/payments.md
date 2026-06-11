# Payments Service


```http request
GET https://api.revenexx.com/v1/payments
```


```http request
POST https://api.revenexx.com/v1/payments
```


```http request
GET https://api.revenexx.com/v1/payments/methods
```


```http request
POST https://api.revenexx.com/v1/payments/methods
```


```http request
POST https://api.revenexx.com/v1/payments/methods/defaults
```


```http request
POST https://api.revenexx.com/v1/payments/methods/eligible
```


```http request
DELETE https://api.revenexx.com/v1/payments/methods/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
GET https://api.revenexx.com/v1/payments/methods/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
PUT https://api.revenexx.com/v1/payments/methods/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
GET https://api.revenexx.com/v1/payments/providers
```


```http request
POST https://api.revenexx.com/v1/payments/providers
```


```http request
GET https://api.revenexx.com/v1/payments/providers/catalog
```


```http request
DELETE https://api.revenexx.com/v1/payments/providers/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
GET https://api.revenexx.com/v1/payments/providers/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
PUT https://api.revenexx.com/v1/payments/providers/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
GET https://api.revenexx.com/v1/payments/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
POST https://api.revenexx.com/v1/payments/{id}/cancel
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
POST https://api.revenexx.com/v1/payments/{id}/capture
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
POST https://api.revenexx.com/v1/payments/{id}/confirm
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
POST https://api.revenexx.com/v1/payments/{id}/refund
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |

