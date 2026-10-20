# QuotesPricing Service


```http request
POST https://api.revenexx.com/v1/quotes/expire
```

** Moves every quote past its validity to expired. Runs on a schedule and on demand, and is idempotent — a quote already expired is not touched twice. Switching the sweep off does NOT soften the deadline: acceptance past `valid_until` is refused either way. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| data | object | Request body |  |


```http request
POST https://api.revenexx.com/v1/quotes/items/{id}/remove
```

** Removes one position while its quote is `requested` or `in_review`, and re-totals the quote. The last position stays: a quote with nothing on it is declined or rejected instead. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The position. |  |
| data | object | Request body |  |


```http request
POST https://api.revenexx.com/v1/quotes/quotes/{id}/follow-up
```

** Sets or clears `follow_up_at` on an open quote and writes it to the internal trail. The buyer is not told; nothing happens on the day by itself. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The quote. |  |
| follow_up_at | string | The day, YYYY-MM-DD. `null` clears it. |  |


```http request
POST https://api.revenexx.com/v1/quotes/quotes/{id}/items
```

** Adds one position while the quote is `requested` or `in_review`. The line is the shape a quote's lines always take — the caller names the article (`name`, else `sku`, is required); this app does not read the catalogue. It goes in after the last position and the quote re-totals. A sent quote takes no new position: it changes by pricing it again, which leaves a revision. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The quote. |  |
| configuration | object | What was configured on this line, in the configurator's vocabulary. |  |
| discount_percent | number | A discount on the list price instead of a quoted price. |  |
| external_id | string | The key this position has in the system that owns it. Left out on anything this shop raised itself. |  |
| external_refs | object | Every other system that knows this position, keyed by system name. |  |
| lead_time_days | integer | Quoted delivery time in days. |  |
| list_price | number | The catalogue price per unit. Leave it out for a position that has none — that is what "price on request" is. |  |
| metadata | object | Free-form data carried with the line. |  |
| name | string | What the position is called. Falls back to the SKU. |  |
| position | integer | Sort order. Left out, positions are numbered in steps of ten. |  |
| price_reason | string | Why the price is what it is. |  |
| product_id | string | The catalogue product, when the line names one. |  |
| quantity | number | How many units. 1 when left out. |  |
| quoted_price | number | A negotiated price, when the caller already knows one. Normally set later, by pricing. |  |
| sku | string | The article number. Free text. |  |
| source_data | object | What the source said, kept as it said it: `{"system": …, "etag": …, "raw": {…}}`. The `etag` is what a write-back has to hand back in `If-Match`. |  |
| source_synced_at | string | When this position was last confirmed against its source. |  |
| tax_rate | number | The rate in percent. |  |
| unit | string | The unit the quantity is counted in. |  |


```http request
PATCH https://api.revenexx.com/v1/quotes/quotes/{id}/items/{item_id}
```

** The desk calculating line by line. Sets the quantity, the negotiated price (or the discount on the list price, which moves it), its reason and the lead time of one position, re-totals the line and the quote, and tells nobody: no event, no trail entry, no status change. Allowed while the quote is `requested`, `in_review` or `quoted`; the buyer learns of it when the quote is sent through `POST /quotes/quotes/{id}/price`. A key left out keeps what it has; `null` clears it, and a position without a negotiated price counts at its list price. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The quote. |  |
| item_id | string | **Required** The position. |  |
| discount_percent | number | The discount on the list price, in percent. Sets the negotiated price to the list price less this share; ignored when `quoted_price` is sent too. `null` clears both. |  |
| lead_time_days | integer | Quoted delivery time in days. |  |
| price_reason | string | Why that price. |  |
| quantity | number | How many units the position is for. |  |
| quoted_price | number | The negotiated price per unit, net. `null` falls back to the list price. |  |


```http request
POST https://api.revenexx.com/v1/quotes/quotes/{id}/price
```

** The merchant's side of the desk, and THE designated override point of this app: a tenant whose prices come out of an ERP replaces this one capability at the gateway and keeps everything else. Sets a negotiated price per position, a validity, and the note the customer reads. Re-pricing a quote the buyer has already seen writes a new revision by default, so every round of a negotiation stays readable. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The quote. |  |
| external_id | string | The key this quote has in the system that owns it. Left out on anything this shop raised itself. |  |
| external_refs | object | Every other system that knows this quote, keyed by system name. |  |
| items | array | The positions to price. A position left out keeps what it has. |  |
| seller_note | string | What the customer reads with the quote. |  |
| sender_country | string | The country the goods are sent from, ISO 3166-1 alpha-2 (DE). It decides what the address lines frozen on this send print in capitals: a destination's capitalised fields when the quote goes abroad, none at home. Omit it and the request's market counts when its code is a country's code (de, at); otherwise nothing but the country line is in capitals. Used to print, never stored. Anything that is not a country's code is a 400. |  |
| shipping_amount | number | Carriage quoted alongside the goods, net. It enters `grand_total` and the first order out of the quote. |  |
| shipping_tax_rate | number | The rate carriage is taxed at, in percent (0–100). |  |
| source_data | object | What the source said, kept as it said it: `{"system": …, "etag": …, "raw": {…}}`. The `etag` is what a write-back has to hand back in `If-Match`. |  |
| source_synced_at | string | When this quote was last confirmed against its source. |  |
| valid_until | string | When the offer stops standing. Left out, the configured default validity is used. |  |


```http request
POST https://api.revenexx.com/v1/quotes/quotes/{id}/review
```

** Claims a request: it moves out of the unattended queue and gets an owner, which is what a sales worklist filters by. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The quote. |  |
| contact_id | string | The person, as customers knows them. Null once anonymised. |  |
| created_at | string | When the row was created. Written by the database. |  |
| expires_at | string | Until when the link can be used. |  |
| id_body | string | The row's own id, generated by the database. A caller never sends one. |  |
| issued_count | integer | How often a link was issued for this order and contact; above 1 after an expired link was replaced. |  |
| items | any | Those products as the order named them: `{ product_id, sku, name }`. |  |
| journey_ref | string | The journey step that asked for the link, e.g. `journey:<id>:<step>`. |  |
| locale | string | The language the review is written in, e.g. de-DE. |  |
| market | string | The market code the row belongs to. |  |
| metadata | any | Free-form JSON a caller may keep on the row. Nothing here reads it. |  |
| order_id | string | The order, as the orders app knows it. |  |
| order_number | string | The order number, copied for display. |  |
| organization_id | string | The company of the order, as customers knows it. |  |
| product_ids | any | The products of the order the link asks to review. |  |
| reviewed_count | integer | How many of the products are reviewed. |  |
| state | string | `issued` (open), `used` (every product reviewed) or `expired`. |  |
| updated_at | string | When the row last changed. |  |
| used_at | string | When the last product was reviewed. |  |


```http request
POST https://api.revenexx.com/v1/quotes/quotes/{id}/send-reminder
```

** Announces `quote.expiring` now, with `manual: true`, instead of waiting for the sweep — so whatever mails the expiry warning mails this too — and writes it to the trail the buyer reads. Only for a quote the buyer holds (`quoted`, `partially_accepted`). **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The quote. |  |
| data | object | Request body |  |

