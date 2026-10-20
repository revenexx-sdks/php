# AdsRules Service


```http request
GET https://api.revenexx.com/v1/ads/conversion-rules
```

** Filter `?ad_account_id=`, `?event=`, `?active=true`. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| limit | integer | Page size (default 50, max 200). |  |
| offset | integer | Row offset for pagination (default 0). |  |
| order | string | Sort by one column: 'column' | 'column.asc' | 'column.desc'. |  |
| id | string | Keep only rows whose `id` equals this. |  |
| ad_account_id | string | Keep only rows whose `ad_account_id` equals this. |  |
| name | string | Keep only rows whose `name` equals this. |  |
| event | string | Keep only rows whose `event` equals this. |  |
| value_source | string | Keep only rows whose `value_source` equals this. |  |
| external_conversion_ref | string | Keep only rows whose `external_conversion_ref` equals this. |  |
| consent_purpose | string | Keep only rows whose `consent_purpose` equals this. |  |
| active | string | Keep only rows whose `active` equals this. |  |


```http request
POST https://api.revenexx.com/v1/ads/conversion-rules
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| active | boolean | Switched on. A switched-off row stays for its history and does nothing. |  |
| ad_account_id | string | The ad account this row belongs to. |  |
| consent_purpose | string | The consent manager purpose the visitor must have allowed. |  |
| event | string | `order.placed`, `subscription.confirmed` or `form.submitted`. |  |
| external_conversion_ref | string | The conversion action or event name on the platform. |  |
| fixed_value | number | The value when value_source is fixed. |  |
| metadata | any | Free-form JSON a caller may keep on the row. Nothing here reads it. |  |
| name | string | What the merchant calls the rule. |  |
| value_source | string | `order_net` (goods after discount, no tax or freight), `order_gross`, `fixed` or `none`. |  |


```http request
DELETE https://api.revenexx.com/v1/ads/conversion-rules/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |


```http request
GET https://api.revenexx.com/v1/ads/conversion-rules/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |


```http request
PUT https://api.revenexx.com/v1/ads/conversion-rules/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |
| active | boolean | Switched on. A switched-off row stays for its history and does nothing. |  |
| ad_account_id | string | The ad account this row belongs to. |  |
| consent_purpose | string | The consent manager purpose the visitor must have allowed. |  |
| event | string | `order.placed`, `subscription.confirmed` or `form.submitted`. |  |
| external_conversion_ref | string | The conversion action or event name on the platform. |  |
| fixed_value | number | The value when value_source is fixed. |  |
| metadata | any | Free-form JSON a caller may keep on the row. Nothing here reads it. |  |
| name | string | What the merchant calls the rule. |  |
| value_source | string | `order_net` (goods after discount, no tax or freight), `order_gross`, `fixed` or `none`. |  |

