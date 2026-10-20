# ReviewsModeration Service


```http request
POST https://api.revenexx.com/v1/reviews/reviews/{id}/publish
```

** Shows it in the shop and recomputes the product figures. Publishing a published review answers it unchanged. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |
| data | object | Request body |  |


```http request
POST https://api.revenexx.com/v1/reviews/reviews/{id}/reject
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |
| reason | string | Why the merchant will not quote. |  |


```http request
POST https://api.revenexx.com/v1/reviews/reviews/{id}/reply
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |
| reply | string | Empty or null removes the answer. |  |

