# Markets Service


```http request
GET https://api.revenexx.com/v1/markets
```


```http request
POST https://api.revenexx.com/v1/markets
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| code | string | Market code (unique per tenant). |  |
| currency | string | ISO 4217 code (default 'EUR'). |  |
| is_default | boolean |  |  |
| labels | object | Localized display names ({locale: label}). |  |
| name | string |  |  |
| position | integer | Sort position (default 0). |  |
| status | string | Default 'active'. |  |


```http request
DELETE https://api.revenexx.com/v1/markets/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
GET https://api.revenexx.com/v1/markets/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
PUT https://api.revenexx.com/v1/markets/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |
| code | string | Market code (unique per tenant). |  |
| currency | string | ISO 4217 code (default 'EUR'). |  |
| is_default | boolean |  |  |
| labels | object | Localized display names ({locale: label}). |  |
| name | string |  |  |
| position | integer | Sort position (default 0). |  |
| status | string | Default 'active'. |  |


```http request
GET https://api.revenexx.com/v1/markets/{id}/context
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
GET https://api.revenexx.com/v1/markets/{market_id}/locales
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| market_id | string | **Required**  |  |


```http request
POST https://api.revenexx.com/v1/markets/{market_id}/locales
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| market_id | string | **Required**  |  |
| code | string | Locale code, e.g. 'de-DE' (unique per market). |  |
| country | string | ISO 3166-1 alpha-2 country code. |  |
| is_default | boolean |  |  |
| language | string | ISO 639-1 language code. |  |
| position | integer | Sort position (default 0). |  |


```http request
DELETE https://api.revenexx.com/v1/markets/{market_id}/locales/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| market_id | string | **Required**  |  |
| id | string | **Required**  |  |


```http request
GET https://api.revenexx.com/v1/markets/{market_id}/locales/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| market_id | string | **Required**  |  |
| id | string | **Required**  |  |


```http request
PUT https://api.revenexx.com/v1/markets/{market_id}/locales/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| market_id | string | **Required**  |  |
| id | string | **Required**  |  |
| code | string | Locale code, e.g. 'de-DE' (unique per market). |  |
| country | string | ISO 3166-1 alpha-2 country code. |  |
| is_default | boolean |  |  |
| language | string | ISO 639-1 language code. |  |
| position | integer | Sort position (default 0). |  |


```http request
GET https://api.revenexx.com/v1/markets/{market_id}/tax_classes
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| market_id | string | **Required**  |  |


```http request
POST https://api.revenexx.com/v1/markets/{market_id}/tax_classes
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| market_id | string | **Required**  |  |
| code | string | Tax class code (unique per market). |  |
| is_default | boolean |  |  |
| labels | object | Localized display names ({locale: label}). |  |
| name | string |  |  |
| position | integer | Sort position (default 0). |  |
| rate | number | Tax rate in percent, 0–100 (default 0). |  |


```http request
DELETE https://api.revenexx.com/v1/markets/{market_id}/tax_classes/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| market_id | string | **Required**  |  |
| id | string | **Required**  |  |


```http request
GET https://api.revenexx.com/v1/markets/{market_id}/tax_classes/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| market_id | string | **Required**  |  |
| id | string | **Required**  |  |


```http request
PUT https://api.revenexx.com/v1/markets/{market_id}/tax_classes/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| market_id | string | **Required**  |  |
| id | string | **Required**  |  |
| code | string | Tax class code (unique per market). |  |
| is_default | boolean |  |  |
| labels | object | Localized display names ({locale: label}). |  |
| name | string |  |  |
| position | integer | Sort position (default 0). |  |
| rate | number | Tax rate in percent, 0–100 (default 0). |  |

