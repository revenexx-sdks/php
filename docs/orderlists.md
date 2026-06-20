# Orderlists Service


```http request
GET https://api.revenexx.com/v1/orderlists
```


```http request
POST https://api.revenexx.com/v1/orderlists
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| items | array | Optional initial positions. |  |
| kind | string | List kind (default 'shopping'). |  |
| metadata | object |  |  |
| name | string |  |  |
| organization_id | string | Owning organization (scopes public sharing). |  |
| owner_id | string | Owning contact. |  |
| owner_name | string | Owner display name (snapshot). |  |
| public | boolean | Shared read-only across the organization (default false). |  |


```http request
POST https://api.revenexx.com/v1/orderlists/defaults
```


```http request
DELETE https://api.revenexx.com/v1/orderlists/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
GET https://api.revenexx.com/v1/orderlists/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
PUT https://api.revenexx.com/v1/orderlists/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |
| kind | string | List kind (default 'shopping'). |  |
| metadata | object |  |  |
| name | string |  |  |
| public | boolean |  |  |


```http request
GET https://api.revenexx.com/v1/orderlists/{list_id}/items
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| list_id | string | **Required**  |  |


```http request
POST https://api.revenexx.com/v1/orderlists/{list_id}/items
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| list_id | string | **Required**  |  |
| category_slug | string |  |  |
| cost_center_id | string | Cost center reference (free-text). |  |
| custom_sku | string | Customer's own article number. |  |
| image | string |  |  |
| metadata | object |  |  |
| name | string | Display name (snapshot). |  |
| position | integer | Sort order (assigned automatically when omitted). |  |
| position_texts | array | Per-position notes. |  |
| price | number | Unit price snapshot. |  |
| product_id | string | Catalog product (alternative to sku). |  |
| quantity | number | Default 1. |  |
| sku | string | Article SKU (alternative to product_id). |  |
| subcategory_slug | string |  |  |
| tax_rate | number |  |  |
| unit | string |  |  |


```http request
PUT https://api.revenexx.com/v1/orderlists/{list_id}/items
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| list_id | string | **Required**  |  |
| items | array | The new full set of positions. |  |


```http request
DELETE https://api.revenexx.com/v1/orderlists/{list_id}/items/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| list_id | string | **Required**  |  |
| id | string | **Required**  |  |


```http request
GET https://api.revenexx.com/v1/orderlists/{list_id}/items/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| list_id | string | **Required**  |  |
| id | string | **Required**  |  |


```http request
PUT https://api.revenexx.com/v1/orderlists/{list_id}/items/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| list_id | string | **Required**  |  |
| id | string | **Required**  |  |
| category_slug | string |  |  |
| cost_center_id | string | Cost center reference (free-text). |  |
| custom_sku | string | Customer's own article number. |  |
| image | string |  |  |
| metadata | object |  |  |
| name | string | Display name (snapshot). |  |
| position | integer | Sort order (assigned automatically when omitted). |  |
| position_texts | array | Per-position notes. |  |
| price | number | Unit price snapshot. |  |
| product_id | string | Catalog product (alternative to sku). |  |
| quantity | number | Default 1. |  |
| sku | string | Article SKU (alternative to product_id). |  |
| subcategory_slug | string |  |  |
| tax_rate | number |  |  |
| unit | string |  |  |

