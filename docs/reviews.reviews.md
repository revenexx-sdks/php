# ReviewsReviews Service


```http request
GET https://api.revenexx.com/v1/reviews/reviews
```

** Every review of this tenant in every state, without the trash unless `trashed` asks for it. Filter `?state=pending` for the moderation queue, `?product_id=`, `?contact_id=` (what the audiences rule reads), `?rating=`, `?verified_purchase=true`. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| limit | integer | Page size (default 50, max 200). |  |
| offset | integer | Row offset for pagination (default 0). |  |
| order | string | Sort by one column: 'column' | 'column.asc' | 'column.desc'. |  |
| trashed | string | `exclude` (default) leaves the trash out, `only` is the trash itself, `include` lists both. |  |
| id | string | Keep only rows whose `id` equals this. |  |
| product_id | string | Keep only rows whose `product_id` equals this. |  |
| sku | string | Keep only rows whose `sku` equals this. |  |
| product_name | string | Keep only rows whose `product_name` equals this. |  |
| order_id | string | Keep only rows whose `order_id` equals this. |  |
| order_number | string | Keep only rows whose `order_number` equals this. |  |
| request_id | string | Keep only rows whose `request_id` equals this. |  |
| contact_id | string | Keep only rows whose `contact_id` equals this. |  |
| organization_id | string | Keep only rows whose `organization_id` equals this. |  |
| author_first_name | string | Keep only rows whose `author_first_name` equals this. |  |
| author_last_name | string | Keep only rows whose `author_last_name` equals this. |  |
| rating | string | Keep only rows whose `rating` equals this. |  |
| title | string | Keep only rows whose `title` equals this. |  |
| body | string | Keep only rows whose `body` equals this. |  |
| locale | string | Keep only rows whose `locale` equals this. |  |
| market | string | Keep only rows whose `market` equals this. |  |
| verified_purchase | string | Keep only rows whose `verified_purchase` equals this. |  |
| source | string | Keep only rows whose `source` equals this. |  |
| state | string | Keep only rows whose `state` equals this. |  |
| rejection_reason | string | Keep only rows whose `rejection_reason` equals this. |  |
| moderated_by | string | Keep only rows whose `moderated_by` equals this. |  |
| merchant_reply | string | Keep only rows whose `merchant_reply` equals this. |  |
| replied_by | string | Keep only rows whose `replied_by` equals this. |  |
| external_id | string | Keep only rows whose `external_id` equals this. |  |


```http request
POST https://api.revenexx.com/v1/reviews/reviews
```

** For reviews collected elsewhere. The purchase is verified only when `order_id` and `contact_id` name a completed order of that contact holding the product — never because a caller says so. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| author_first_name | string |  |  |
| author_last_name | string |  |  |
| body | string |  |  |
| contact_id | string |  |  |
| external_id | string | The key of this record in the system that leads it — a marketing tool, an ERP, an ad platform. Unique per tenant when set; an import matches on it. |  |
| external_refs | object | Every OTHER system that knows this record, keyed by system name. `external_id` is the leading system; this is the rest. Not a query parameter: a jsonb column is compared as a whole document. |  |
| locale | string |  |  |
| market | string |  |  |
| order_id | string |  |  |
| product_id | string |  |  |
| product_name | string |  |  |
| published_at | string |  |  |
| rating | integer | Stars, a whole number from 1 to 5. A form may send it as text ("4"). |  |
| sku | string |  |  |
| source | string | Empty is `admin`. |  |
| source_data | object | The source system's own view of the record as the last sync saw it, kept for reconciliation. Nothing in this app reads it. |  |
| source_synced_at | string | When a sync last wrote this record from its source system. Null for a record only ever kept here. |  |
| state | string | Empty is `pending`. |  |
| title | string |  |  |


```http request
POST https://api.revenexx.com/v1/reviews/reviews/trash/empty
```

** Every review in the trash is deleted for good on its own terms. One that something still blocks stays in the trash and is named with its reason, so a partial success says exactly what remained. Not for a storefront contact. **


```http request
POST https://api.revenexx.com/v1/reviews/reviews/trash/purge
```

** What the nightly purge does, callable by hand: every review in the trash for longer than the tenant trash retention (90 days unless the tenant set another) is deleted for good through the same rules as a second delete. A blocked one stays and carries its reason. When the retention cannot be read, nothing is deleted. Also the cron schedule. **


```http request
DELETE https://api.revenexx.com/v1/reviews/reviews/{id}
```

** The first DELETE moves the review into the trash: it stays, with everything hanging off it, and counts nowhere until it is restored. Any review may go in, published or not; while it is in the trash it leaves the product page and the figures, which are recomputed. A DELETE on a review already in the trash deletes it for good — refused while something still needs it, and not for a storefront contact. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |


```http request
GET https://api.revenexx.com/v1/reviews/reviews/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |


```http request
POST https://api.revenexx.com/v1/reviews/reviews/{id}/restore
```

** Clears the trash marks on the review. Its parts were never touched, so they come back with it, in the state it was in. The same right as deleting. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |

