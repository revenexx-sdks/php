# Greetings Service


```http request
GET https://api.revenexx.com/v1/digest
```


```http request
GET https://api.revenexx.com/v1/greetings
```


```http request
POST https://api.revenexx.com/v1/greetings
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| locale | string | BCP-47 locale | en |
| name | string | Who to greet |  |


```http request
DELETE https://api.revenexx.com/v1/greetings/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
GET https://api.revenexx.com/v1/greetings/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
PUT https://api.revenexx.com/v1/greetings/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |
| locale | string |  |  |
| message | string |  |  |
| metadata | object |  |  |
| name | string |  |  |

