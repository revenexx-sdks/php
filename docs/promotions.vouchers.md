# PromotionsVouchers Service


```http request
GET https://api.revenexx.com/v1/promotions/batches
```

** The unit a mailing is accounted for by. &quot;How many of the spring codes have been used&quot; is a question about a batch, not about fifty thousand rows. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| limit | integer | Page size (default 50, max 200). A larger value is clamped rather than refused. |  |
| offset | integer | Row offset for pagination (default 0). Page with `page.total` and `page.hasMore`. |  |
| order | string | Sort by one column: 'column' | 'column.asc' | 'column.desc'. The column has to be one this entity has. |  |
| id | string | Keep only rows whose `id` equals this. |  |
| promotion_id | string | Keep only rows whose `promotion_id` equals this. |  |
| name | string | Keep only rows whose `name` equals this. |  |
| pattern | string | Keep only rows whose `pattern` equals this. |  |
| alphabet | string | Keep only rows whose `alphabet` equals this. |  |
| requested | string | Keep only rows whose `requested` equals this. |  |
| created_count | string | Keep only rows whose `created_count` equals this. |  |
| redeemed_count | string | Keep only rows whose `redeemed_count` equals this. |  |
| status | string | Keep only rows whose `status` equals this. |  |
| request_ref | string | Keep only rows whose `request_ref` equals this. |  |


```http request
POST https://api.revenexx.com/v1/promotions/batches
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| alphabet | string | The characters generated codes may use. The default omits the ones people confuse reading a code off paper. |  |
| metadata | object | Free-form JSON a caller may keep on the row. Nothing here reads it. |  |
| name | string | What the batch is called — the unit a mailing is accounted for by afterwards. |  |
| pattern | string | The shape generated codes take. `#` draws a character from the alphabet; every other character is kept. |  |
| promotion_id | string | The promotion this row belongs to. Deleting the promotion deletes it. |  |
| request_ref | string | A reference the caller chose, so a retried generation makes no second batch. A timed-out call is retried by whoever sent it, and a retry that doubled a mailing is discovered when the codes are in the post. |  |
| requested | integer | How many codes have been asked for. |  |
| status | string | A leaked batch is `disabled`, which refuses every code in it at once — a leak is discovered as a batch and has to be stopped as one. |  |


```http request
DELETE https://api.revenexx.com/v1/promotions/batches/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |


```http request
GET https://api.revenexx.com/v1/promotions/batches/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |


```http request
PUT https://api.revenexx.com/v1/promotions/batches/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |
| alphabet | string | The characters generated codes may use. The default omits the ones people confuse reading a code off paper. |  |
| metadata | object | Free-form JSON a caller may keep on the row. Nothing here reads it. |  |
| name | string | What the batch is called — the unit a mailing is accounted for by afterwards. |  |
| pattern | string | The shape generated codes take. `#` draws a character from the alphabet; every other character is kept. |  |
| promotion_id | string | The promotion this row belongs to. Deleting the promotion deletes it. |  |
| request_ref | string | A reference the caller chose, so a retried generation makes no second batch. A timed-out call is retried by whoever sent it, and a retry that doubled a mailing is discovered when the codes are in the post. |  |
| requested | integer | How many codes have been asked for. |  |
| status | string | A leaked batch is `disabled`, which refuses every code in it at once — a leak is discovered as a batch and has to be stopped as one. |  |


```http request
GET https://api.revenexx.com/v1/promotions/batches/{id}/export
```

** The codes are only useful once they are out of this system and in a mailing tool, so a batch that cannot leave was made for nobody. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |


```http request
POST https://api.revenexx.com/v1/promotions/batches/{id}/generate
```

** Fifty thousand codes from one pattern, in one call, accounted for as one batch. The alphabet omits the characters people confuse reading a code off paper. A request carrying a reference makes no second batch when it is retried — a retry that doubled a mailing is discovered when the codes are in the post. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |
| alphabet | string | The characters they may use. |  |
| count | integer | How many codes to make. Bounded by the tenant setting. |  |
| pattern | string | The shape they take. Defaults to the batch pattern, then the tenant default. |  |
| request_ref | string | A reference the caller chose, so a retry makes nothing further. |  |
| usage_limit | integer | How often each code may be redeemed. Zero is unlimited. |  |


```http request
POST https://api.revenexx.com/v1/promotions/batches/{id}/generate-for
```

** A personalised mailing needs one code per recipient, issued to them alone. Generating them separately would turn one campaign into ten thousand calls. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |
| recipients | array | The contacts to issue a code to, one each. |  |


```http request
POST https://api.revenexx.com/v1/promotions/batches/{id}/import
```

** A migrated shop has codes already printed on cards, and a code the new system rewrote is a card in somebody wallet that no longer works. Every collision is named rather than silently skipped — an import that quietly dropped duplicates leaves a merchant believing they issued codes they did not. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |
| codes | array | The codes to take, exactly as they are. |  |
| usage_limit | integer | How often each may be redeemed. |  |


```http request
GET https://api.revenexx.com/v1/promotions/voucher-reservations
```

** A code held FOR a buyer without being given to them — which is what a shop handing a limited code to the first hundred who ask actually needs. An expired reservation stops counting when the code is next looked at. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| limit | integer | Page size (default 50, max 200). A larger value is clamped rather than refused. |  |
| offset | integer | Row offset for pagination (default 0). Page with `page.total` and `page.hasMore`. |  |
| order | string | Sort by one column: 'column' | 'column.asc' | 'column.desc'. The column has to be one this entity has. |  |
| id | string | Keep only rows whose `id` equals this. |  |
| voucher_id | string | Keep only rows whose `voucher_id` equals this. |  |
| contact_id | string | Keep only rows whose `contact_id` equals this. |  |
| organization_id | string | Keep only rows whose `organization_id` equals this. |  |


```http request
POST https://api.revenexx.com/v1/promotions/voucher-reservations
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| contact_id | string | Who it is held for. |  |
| expires_at | string | When the hold stops counting. Empty is held until it is used or deleted. |  |
| organization_id | string | Which company it is held for. |  |
| voucher_id | string | The code being held. |  |


```http request
DELETE https://api.revenexx.com/v1/promotions/voucher-reservations/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |


```http request
GET https://api.revenexx.com/v1/promotions/voucher-reservations/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |


```http request
PUT https://api.revenexx.com/v1/promotions/voucher-reservations/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |
| contact_id | string | Who it is held for. |  |
| expires_at | string | When the hold stops counting. Empty is held until it is used or deleted. |  |
| organization_id | string | Which company it is held for. |  |
| voucher_id | string | The code being held. |  |


```http request
GET https://api.revenexx.com/v1/promotions/vouchers
```

** The codes buyers type. A voucher belongs to exactly one promotion and carries four independent limits — how often it may be redeemed, an amount spent down rather than used up, the buyer it was issued to, and its own validity window. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| limit | integer | Page size (default 50, max 200). A larger value is clamped rather than refused. |  |
| offset | integer | Row offset for pagination (default 0). Page with `page.total` and `page.hasMore`. |  |
| order | string | Sort by one column: 'column' | 'column.asc' | 'column.desc'. The column has to be one this entity has. |  |
| id | string | Keep only rows whose `id` equals this. |  |
| promotion_id | string | Keep only rows whose `promotion_id` equals this. |  |
| batch_id | string | Keep only rows whose `batch_id` equals this. |  |
| code | string | Keep only rows whose `code` equals this. |  |
| code_key | string | Keep only rows whose `code_key` equals this. |  |
| status | string | Keep only rows whose `status` equals this. |  |
| usage_limit | string | Keep only rows whose `usage_limit` equals this. |  |
| usage_count | string | Keep only rows whose `usage_count` equals this. |  |
| currency | string | Keep only rows whose `currency` equals this. |  |
| contact_id | string | Keep only rows whose `contact_id` equals this. |  |
| organization_id | string | Keep only rows whose `organization_id` equals this. |  |
| reservation_required | string | Keep only rows whose `reservation_required` equals this. |  |


```http request
POST https://api.revenexx.com/v1/promotions/vouchers
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| batch_id | string | The batch this code was made in, when it was made in one. |  |
| code | string | The code as it is printed and as a buyer types it. |  |
| contact_id | string | The person the code was issued to. Anybody else is refused — a personal apology code is worthless if it can be forwarded. |  |
| currency | string | The currency a residual value is stated in. |  |
| ends_at | string | When it expires. A merchant runs one promotion for a quarter and hands out codes that expire in a fortnight. |  |
| metadata | object | Free-form JSON a caller may keep on the row. Nothing here reads it. |  |
| organization_id | string | The company it was issued to. Any of its contacts may redeem it. |  |
| promotion_id | string | The promotion this row belongs to. Deleting the promotion deletes it. |  |
| reservation_limit | integer | How many reservations may be held at once. A reservation that never ran out would promise a limited code to everybody who asked. |  |
| reservation_required | boolean | When true the code works only for a buyer who has reserved it — which is what makes a code printed in a public place usable at all. |  |
| residual_value | number | An amount the code is worth, spent down rather than used up — how a goodwill amount survives a smaller first purchase. |  |
| starts_at | string | When the code becomes valid. Empty is bounded only by the promotion. |  |
| status | string | A leaked code is `disabled`, not deleted: it has to stop working within the minute, and deleting it would take the evidence with it. |  |
| usage_limit | integer | How often the code may be redeemed. Zero is unlimited, though the promotion own limits still apply. |  |


```http request
DELETE https://api.revenexx.com/v1/promotions/vouchers/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |


```http request
GET https://api.revenexx.com/v1/promotions/vouchers/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |


```http request
PUT https://api.revenexx.com/v1/promotions/vouchers/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |
| batch_id | string | The batch this code was made in, when it was made in one. |  |
| code | string | The code as it is printed and as a buyer types it. |  |
| contact_id | string | The person the code was issued to. Anybody else is refused — a personal apology code is worthless if it can be forwarded. |  |
| currency | string | The currency a residual value is stated in. |  |
| ends_at | string | When it expires. A merchant runs one promotion for a quarter and hands out codes that expire in a fortnight. |  |
| metadata | object | Free-form JSON a caller may keep on the row. Nothing here reads it. |  |
| organization_id | string | The company it was issued to. Any of its contacts may redeem it. |  |
| promotion_id | string | The promotion this row belongs to. Deleting the promotion deletes it. |  |
| reservation_limit | integer | How many reservations may be held at once. A reservation that never ran out would promise a limited code to everybody who asked. |  |
| reservation_required | boolean | When true the code works only for a buyer who has reserved it — which is what makes a code printed in a public place usable at all. |  |
| residual_value | number | An amount the code is worth, spent down rather than used up — how a goodwill amount survives a smaller first purchase. |  |
| starts_at | string | When the code becomes valid. Empty is bounded only by the promotion. |  |
| status | string | A leaked code is `disabled`, not deleted: it has to stop working within the minute, and deleting it would take the evidence with it. |  |
| usage_limit | integer | How often the code may be redeemed. Zero is unlimited, though the promotion own limits still apply. |  |

