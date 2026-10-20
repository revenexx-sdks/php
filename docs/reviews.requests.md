# ReviewsRequests Service


```http request
GET https://api.revenexx.com/v1/reviews/requests
```

** Filter `?state=`, `?order_id=`, `?contact_id=`, `?journey_ref=`. A token is never part of the answer and cannot be filtered on. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| limit | integer | Page size (default 50, max 200). |  |
| offset | integer | Row offset for pagination (default 0). |  |
| order | string | Sort by one column: 'column' | 'column.asc' | 'column.desc'. |  |
| id | string | Keep only rows whose `id` equals this. |  |
| order_id | string | Keep only rows whose `order_id` equals this. |  |
| order_number | string | Keep only rows whose `order_number` equals this. |  |
| contact_id | string | Keep only rows whose `contact_id` equals this. |  |
| organization_id | string | Keep only rows whose `organization_id` equals this. |  |
| state | string | Keep only rows whose `state` equals this. |  |
| journey_ref | string | Keep only rows whose `journey_ref` equals this. |  |
| market | string | Keep only rows whose `market` equals this. |  |
| locale | string | Keep only rows whose `locale` equals this. |  |
| reviewed_count | string | Keep only rows whose `reviewed_count` equals this. |  |
| issued_count | string | Keep only rows whose `issued_count` equals this. |  |


```http request
POST https://api.revenexx.com/v1/reviews/requests
```

** Called by the journeys `request_review` step. The same order and contact answer the same link while it is valid; an expired link is replaced. The link names the order's products the contact has not reviewed yet. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| contact_id | string |  |  |
| journey_ref | string |  |  |
| locale | string |  |  |
| market | string | The market whose form address builds the link. |  |
| order_id | string |  |  |
| product_ids | array | Ask only for these products of the order. |  |


```http request
GET https://api.revenexx.com/v1/reviews/requests/{token}
```

** The products of the link and which of them are reviewed. The storefront renders the form from it. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| token | string | **Required** The token of the review link. |  |


```http request
POST https://api.revenexx.com/v1/reviews/submit/{token}
```

** One review per product of the link. Entries that cannot be accepted are named in `rejected` while the others are written. Reviews wait for moderation unless the tenant publishes high ratings at once. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| token | string | **Required** The token of the review link. |  |
| locale | string |  |  |
| reviews | array |  |  |

