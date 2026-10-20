# AdsFeeds Service


```http request
GET https://api.revenexx.com/v1/ads/feed-refs
```

** One reference per market and destination. The feed itself is built by the seo service. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| limit | integer | Page size (default 50, max 200). |  |
| offset | integer | Row offset for pagination (default 0). |  |
| order | string | Sort by one column: 'column' | 'column.asc' | 'column.desc'. |  |
| id | string | Keep only rows whose `id` equals this. |  |
| market | string | Keep only rows whose `market` equals this. |  |
| destination | string | Keep only rows whose `destination` equals this. |  |
| feed_id | string | Keep only rows whose `feed_id` equals this. |  |
| feed_url | string | Keep only rows whose `feed_url` equals this. |  |
| label | string | Keep only rows whose `label` equals this. |  |
| active | string | Keep only rows whose `active` equals this. |  |


```http request
POST https://api.revenexx.com/v1/ads/feed-refs
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| active | boolean | Switched on. A switched-off row stays for its history and does nothing. |  |
| destination | string | `google_merchant_center`, `meta_catalog`, `linkedin` or `other`. |  |
| feed_id | string | The feed id in the seo service. |  |
| feed_url | string | The feed address the platform fetches. |  |
| label | string | A note for the merchant. |  |
| market | string | The market code. |  |
| metadata | any | Free-form JSON a caller may keep on the row. Nothing here reads it. |  |


```http request
DELETE https://api.revenexx.com/v1/ads/feed-refs/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |


```http request
GET https://api.revenexx.com/v1/ads/feed-refs/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |


```http request
PUT https://api.revenexx.com/v1/ads/feed-refs/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |
| active | boolean | Switched on. A switched-off row stays for its history and does nothing. |  |
| destination | string | `google_merchant_center`, `meta_catalog`, `linkedin` or `other`. |  |
| feed_id | string | The feed id in the seo service. |  |
| feed_url | string | The feed address the platform fetches. |  |
| label | string | A note for the merchant. |  |
| market | string | The market code. |  |
| metadata | any | Free-form JSON a caller may keep on the row. Nothing here reads it. |  |

