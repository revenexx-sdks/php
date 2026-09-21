# PromotionsRedemptions Service


```http request
POST https://api.revenexx.com/v1/promotions/commit
```

** The order is what survives the cart, so this is where a redemption stops pointing at something temporary. Idempotent on the order: a checkout retries a call it did not see answered, and a second commitment would count the budget twice for one sale. A caller with no prior hold may commit directly, which is what a back-office or an imported order needs. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| cart_id | string | The cart whose hold is being committed. |  |
| contact_id | string | The person buying, for a direct commitment. |  |
| currency | string | The currency, for a direct commitment. |  |
| market | string | The market, carried onto the published fact. |  |
| order_id | string | The order the redemptions are recorded against. |  |
| organization_id | string | The company, for a direct commitment. |  |
| promotions | array | What to record, for a commitment with no prior hold. |  |
| terms | object | Per promotion, the effects that produced it — what a re-decided return is settled against, because an order is a snapshot everywhere else in this platform. |  |


```http request
POST https://api.revenexx.com/v1/promotions/holds/sweep
```

** Housekeeping, and nothing depends on it: an expired hold stops counting when the promotion is next looked at, whether or not this ever runs. It publishes nothing, because an expiry is not a fact anybody wants mailed. Also the cron schedule. **


```http request
GET https://api.revenexx.com/v1/promotions/redemptions
```

** The ledger. Every row is the outcome of a hold, a commitment, a release or a return — a hand-written one would be a discount nobody gave, so this is read-only. It is the row that answers why a past order was cheaper, for support, for the margin report and for the export to a buying organisation. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| limit | integer | Page size (default 50, max 200). A larger value is clamped rather than refused. |  |
| offset | integer | Row offset for pagination (default 0). Page with `page.total` and `page.hasMore`. |  |
| order | string | Sort by one column: 'column' | 'column.asc' | 'column.desc'. The column has to be one this entity has. |  |
| id | string | Keep only rows whose `id` equals this. |  |
| promotion_id | string | Keep only rows whose `promotion_id` equals this. |  |
| voucher_id | string | Keep only rows whose `voucher_id` equals this. |  |
| cart_id | string | Keep only rows whose `cart_id` equals this. |  |
| order_id | string | Keep only rows whose `order_id` equals this. |  |
| contact_id | string | Keep only rows whose `contact_id` equals this. |  |
| organization_id | string | Keep only rows whose `organization_id` equals this. |  |
| state | string | Keep only rows whose `state` equals this. |  |
| currency | string | Keep only rows whose `currency` equals this. |  |


```http request
GET https://api.revenexx.com/v1/promotions/redemptions/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |


```http request
POST https://api.revenexx.com/v1/promotions/release
```

** Abandoned carts are the majority of carts, and a hold that never came back would exhaust every campaign within a day. Releasing is not terminal: a buyer returning to a recovered cart may hold again, which is the journey every recovery mail is sent for. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| cart_id | string | Release this cart hold. |  |
| order_id | string | Release this order redemptions — a cancellation. |  |
| reason | string | Why they came back. Carried onto the published fact. |  |


```http request
POST https://api.revenexx.com/v1/promotions/reserve
```

** A budget nobody holds is a budget every concurrent checkout is promised, and the merchant pays the difference. The whole set is replaced rather than added to, because a buyer edits a cart until the last moment. Naming `from_cart_id` moves a hold instead of duplicating it, which is what a merging cart needs. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| cart_id | string | The cart the hold is taken on. |  |
| contact_id | string | The person buying. |  |
| currency | string | The currency the amounts are stated in. |  |
| from_cart_id | string | A cart being merged into this one. Its hold is released in the same call, so the promotion is never scarcer than it really is. |  |
| organization_id | string | The company they buy for. |  |
| promotions | array | What this cart intends to use, as the evaluation answered it. |  |


```http request
POST https://api.revenexx.com/v1/promotions/returns
```

** A returned line gives back the discount recorded against it, and nothing else moves — unless the promotion re-decides, which is a merchant choice and not an algorithm. Idempotent on the return reference: order management retries, and a return credited twice hands a budget back money it never spent. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| all | boolean | Everything came back. The same result as a cancellation, so a merchant watching campaign figures sees one answer either way. |  |
| lines | array | Which lines came back. |  |
| order_id | string | The order goods came back from. |  |
| remaining_amounts | object | Per promotion, what the kept goods are owed — for a promotion that re-decides rather than reversing in proportion. |  |
| return_ref | string | The return identifier, so a repeated report credits nothing further. |  |

