# Shipping Service


```http request
GET https://api.revenexx.com/v1/shipping/methods
```


```http request
POST https://api.revenexx.com/v1/shipping/methods
```


```http request
POST https://api.revenexx.com/v1/shipping/methods/defaults
```


```http request
DELETE https://api.revenexx.com/v1/shipping/methods/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
GET https://api.revenexx.com/v1/shipping/methods/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
PUT https://api.revenexx.com/v1/shipping/methods/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
GET https://api.revenexx.com/v1/shipping/methods/{method_id}/tiers
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| method_id | string | **Required**  |  |


```http request
POST https://api.revenexx.com/v1/shipping/methods/{method_id}/tiers
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| method_id | string | **Required**  |  |


```http request
PUT https://api.revenexx.com/v1/shipping/methods/{method_id}/tiers
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| method_id | string | **Required**  |  |


```http request
DELETE https://api.revenexx.com/v1/shipping/methods/{method_id}/tiers/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| method_id | string | **Required**  |  |
| id | string | **Required**  |  |


```http request
GET https://api.revenexx.com/v1/shipping/methods/{method_id}/tiers/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| method_id | string | **Required**  |  |
| id | string | **Required**  |  |


```http request
PUT https://api.revenexx.com/v1/shipping/methods/{method_id}/tiers/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| method_id | string | **Required**  |  |
| id | string | **Required**  |  |


```http request
POST https://api.revenexx.com/v1/shipping/rates
```

