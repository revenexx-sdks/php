# Customers Service


```http request
GET https://api.revenexx.com/v1/customers/addresses
```


```http request
POST https://api.revenexx.com/v1/customers/addresses
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| city | string |  |  |
| company | string |  |  |
| contact_id | string | Owning contact (personal address). |  |
| country | string | ISO 3166-1 alpha-2 code. |  |
| is_default | boolean | The default address of its owner and type. |  |
| name | string | Recipient name. |  |
| organization_id | string | Owning organization (company address). |  |
| phone | string |  |  |
| region | string |  |  |
| street | string |  |  |
| street2 | string |  |  |
| type | string | Default 'shipping'. |  |
| zip | string |  |  |


```http request
DELETE https://api.revenexx.com/v1/customers/addresses/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
GET https://api.revenexx.com/v1/customers/addresses/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
PUT https://api.revenexx.com/v1/customers/addresses/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |
| city | string |  |  |
| company | string |  |  |
| contact_id | string | Owning contact (personal address). |  |
| country | string | ISO 3166-1 alpha-2 code. |  |
| is_default | boolean | The default address of its owner and type. |  |
| name | string | Recipient name. |  |
| organization_id | string | Owning organization (company address). |  |
| phone | string |  |  |
| region | string |  |  |
| street | string |  |  |
| street2 | string |  |  |
| type | string | Default 'shipping'. |  |
| zip | string |  |  |


```http request
POST https://api.revenexx.com/v1/customers/auth/login
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| email | string |  |  |
| password | string |  |  |


```http request
POST https://api.revenexx.com/v1/customers/auth/logout
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| session_id | string |  |  |
| user_id | string |  |  |


```http request
POST https://api.revenexx.com/v1/customers/auth/me
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| user_id | string |  |  |


```http request
POST https://api.revenexx.com/v1/customers/auth/recovery
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| email | string |  |  |
| url | string | Redirect URL carrying userId + secret. |  |


```http request
PUT https://api.revenexx.com/v1/customers/auth/recovery
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| password | string |  |  |
| secret | string |  |  |
| user_id | string |  |  |


```http request
POST https://api.revenexx.com/v1/customers/auth/register
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| email | string |  |  |
| first_name | string |  |  |
| last_name | string |  |  |
| locale | string | BCP 47, e.g. de-DE |  |
| organization_id | string | Join an existing organization. |  |
| organization_name | string | Found a new organization; the contact becomes its admin. |  |
| password | string |  |  |


```http request
GET https://api.revenexx.com/v1/customers/contacts
```


```http request
POST https://api.revenexx.com/v1/customers/contacts
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| email | string |  |  |
| first_name | string |  |  |
| is_primary | boolean | The primary contact of its organization. |  |
| last_name | string |  |  |
| locale | string | BCP 47, e.g. de-DE |  |
| organization_id | string | Owning organization — membership is mirrored to the platform team. |  |
| phone | string |  |  |
| role | string | Default 'buyer' — also the team role on the platform mirror. |  |
| status | string | Default 'invited' on create. |  |


```http request
DELETE https://api.revenexx.com/v1/customers/contacts/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
GET https://api.revenexx.com/v1/customers/contacts/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
PUT https://api.revenexx.com/v1/customers/contacts/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |
| email | string |  |  |
| first_name | string |  |  |
| is_primary | boolean | The primary contact of its organization. |  |
| last_name | string |  |  |
| locale | string | BCP 47, e.g. de-DE |  |
| organization_id | string | Owning organization — membership is mirrored to the platform team. |  |
| phone | string |  |  |
| role | string | Default 'buyer' — also the team role on the platform mirror. |  |
| status | string | Default 'invited' on create. |  |


```http request
GET https://api.revenexx.com/v1/customers/organizations
```


```http request
POST https://api.revenexx.com/v1/customers/organizations
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| name | string | Company name — mirrored to the platform team. |  |
| settings | object | Free-form organization settings. |  |
| status | string | Default 'active'. |  |
| vat_id | string |  |  |


```http request
DELETE https://api.revenexx.com/v1/customers/organizations/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
GET https://api.revenexx.com/v1/customers/organizations/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
PUT https://api.revenexx.com/v1/customers/organizations/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |
| name | string | Company name — mirrored to the platform team. |  |
| settings | object | Free-form organization settings. |  |
| status | string | Default 'active'. |  |
| vat_id | string |  |  |

