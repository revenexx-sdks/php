# Orders Service


```http request
GET https://api.revenexx.com/v1/orders
```

** The route behind every order overview: the open orders of one customer, everything on hold, everything a market placed last week, or the one order somebody is quoting a number for (?number=ORD-000123 — the number is not the id, and this is how one becomes the other). The order LIST: the order rows without their positions, shipments, returns or cancellations — read GET /orders/{id} for the aggregate of one. Every parameter below is an exact match on the column it names, and combining them is an AND. Two kinds of key are not offered: one that names NO column is not a filter — the SDK release after app-sdks#30 answers it 400 unknown_filter, and until then a mistyped ?stauts=placed is dropped and answers the whole list (compare the 'filter' echo against what you sent) — and the jsonb columns buyer, billing_address, shipping_address, payment, shipping, user_data and metadata reach the database as a text comparison and answer 400 invalid_value for anything that is not a whole JSON document. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | Filter to exactly one order. GET /orders/{id} is the direct form and answers the aggregate; this exists because the list honours it too. Primary key of the order, and the id every other route takes. Not the order number. |  |
| number | string | Look an order up by its NUMBER — the one filter a service desk starts from, and the way to turn the number a customer quotes into the uuid every other route wants. Exact match; there is no substring search on this API. The order number a human quotes — drawn from the tenant's order range at place-time, unique per tenant and never reused. It is NOT the id: every route addresses an order by uuid, and GET /orders?number=… is how a number becomes one. |  |
| customer_order_number | string | Look an order up by the BUYER's own PO number. Not unique: the same buyer reference can legitimately sit on several orders. The BUYER's own reference — their purchase-order number. Free text, not unique, never generated here: it exists so the paperwork can carry the number the buyer's accounts payable will look for. One of the few fields PUT /orders/{id} may still change. |  |
| external_ref | string | Find the order behind a reference in the fulfilling system — the ERP order number. Exact match, and null on everything not yet acknowledged. The FULFILLING system's reference for this order, typically the ERP order number. Written once by POST /orders/{id}/acknowledge and null until an integration acknowledged it. |  |
| acknowledged_at | string | Exact timestamp equality — this API has no range filter. To bound a period, sort with `order` and page. When the fulfilling system took the order over. Written once. While it is null the order can still be modified here; afterwards modification goes through that system, unless the tenant sets allow_modification_after_acknowledge. |  |
| cart_id | string | Find the order a given cart became. The reverse of the carts hand-over, and how a storefront checks whether a checkout already went through. The cart this order was placed from, when a storefront handed one over. A reference across an app boundary (the carts app), not a foreign key — nothing here checks that it resolves. Null for an order an integration or an operator created. |  |
| contact_id | string | Filter to one person's orders — their order history. The PERSON who ordered — a contact in the customers app. Resolved from the acting principal whenever the caller carries one, and a body value that disagrees is refused rather than silently overridden. Null for a guest checkout. |  |
| organization_id | string | Filter to one company's orders, across everyone who ordered for it. The B2B view, and the same attribution orders.reports.customer-rollup aggregates by. The COMPANY the order is booked on — an organization in the customers app, and the B2B half of who ordered. This is what orders.reports.customer-rollup aggregates by and what makes an order visible to a buyer's colleagues. Null on a private or guest order, which the rollup counts separately because it cannot attribute it. |  |
| channel_id | string | Filter to rows whose `channel_id` is exactly this value. The sales channel the order arrived through — webshop, app, phone desk, EDI. Null when the caller named none. |  |
| currency | string | Filter by ISO 4217 code. Worth remembering before summing `grand_total` over a mixed list: nothing on an order is ever converted. ISO 4217 code of EVERY amount on this order. Frozen at place-time from the market's default_currency unless the caller named one. Nothing on this order is ever converted, and the approval threshold is read in this currency — which is why the threshold is a per-market setting. |  |
| status | string | Filter by lifecycle status. `pending` IS the approval queue — there is no second entity for it. Where the order stands in its LIFECYCLE, and one of three independent status dimensions. 'pending' = created but not placed, an order waiting for approval; 'placed' = accepted, nothing shipped; 'in_fulfillment' = part of it has gone out, or all of it has and the tenant does not close on shipment; 'completed' and 'cancelled' end it. Moved by the action routes only — it is not writable through PUT /orders/{id}. |  |
| payment_status | string | Filter by the payment dimension, independently of the lifecycle: `payment_status=open&status=completed` is the delivered-but-unpaid list. Whether the order is PAID, and the dimension this app does not decide: it is fed from outside through POST /orders/{id}/payment-status (the payments app or an ERP), and only seeded at place-time from payment.status. Orthogonal to the lifecycle — a completed order can still be open, and a paid one can still be pending. |  |
| fulfillment_status | string | Filter by the derived shipping dimension. `unfulfilled` with `status=placed` is the work queue a warehouse picks from. Whether the order has SHIPPED, and the one dimension nobody writes: it is DERIVED after every quantity change from the positions' own bookkeeping. 'fulfilled' means shipped >= ordered − cancelled across all positions, 'partial' means something went out. Sending it has no effect; ship, cancel or return something and it moves. |  |
| on_hold | boolean | Filter to the held orders — the list somebody has to work through before anything of theirs can ship. A business stop, ORTHOGONAL to status: a held order keeps its lifecycle state and is refused at the guards. How far the hold reaches is the tenant's call (on_hold_blocks: shipping only, shipping and cancellation, or nothing at all). |  |
| hold_reason | string | Filter to rows whose `hold_reason` is exactly this value. Why the order is held, in the words the shipping guard quotes back. Null when it is not held — releasing a hold clears it. |  |
| item_count | integer | Filter to rows whose `item_count` is exactly this value. The summed ORDERED quantity over all positions, rounded to a whole number — a headline figure for a list, computed once at place-time. It is deliberately not reduced when something is cancelled or returned; the positions carry that arithmetic. |  |
| subtotal | number | Filter to rows whose `subtotal` is exactly this value. NET total of the positions (the sum of their line_total), COMPUTED here at place-time. In `currency`, four decimal places. A caller cannot set it. |  |
| discount_total | number | Filter to rows whose `discount_total` is exactly this value. Every discount a promotion took off this order, summed: the positions' discounts, a head-level voucher distributed across them, a discount placed as its own position, and any reduction of the shipping charge. COMPUTED here from the components the caller evaluated — a caller cannot set it. `subtotal` stays the UNDISCOUNTED sum, so the two together say what was charged and what was given away. |  |
| shipping_total | number | Filter to rows whose `shipping_total` is exactly this value. NET shipping cost, taken from shipping.price or, when the snapshot carries no price, from the request's shipping_total. In `currency`. This is the price BEFORE any promotion reduced it; the reduction is a row in the discount components. |  |
| shipping_tax_rate | number | Filter to rows whose `shipping_tax_rate` is exactly this value. The tax percentage the shipping charge was taxed at, frozen at place-time (19 means 19 %). Stored rather than only used, because otherwise nobody could say afterwards how much of tax_total was shipping — which an ERP export of a discounted shipping charge needs. |  |
| shipping_tax_amount | number | Filter to rows whose `shipping_tax_amount` is exactly this value. Tax on the shipping charge, computed on what is OWED after any promotion reduced it. Part of tax_total, and stored separately so the shipping line can be stated on its own. |  |
| payment_fee_amount | number | Filter to rows whose `payment_fee_amount` is exactly this value. The payment surcharge this order was placed with, NET — what the payments app computed for the chosen method (a fixed amount, or a share of the order). Zero for a method that charges nothing, which is most of them. Passed in with the payment arrangement the way the shipping price is, and stored rather than folded into the `payment` blob: a grand_total that silently included a fee nobody could point at is a reconciliation nobody can finish. |  |
| payment_fee_tax_rate | number | Filter to rows whose `payment_fee_tax_rate` is exactly this value. The rate the payment surcharge was taxed at, frozen at place-time (19 means 19 %). A surcharge is a Nebenleistung and is taxed like one. |  |
| payment_fee_tax_amount | number | Filter to rows whose `payment_fee_tax_amount` is exactly this value. Tax on the payment surcharge, part of tax_total and stored separately so the fee can be stated on its own line of an invoice or an export. |  |
| tax_total | number | Filter to rows whose `tax_total` is exactly this value. All tax on this order: the positions' tax_amount plus the tax on shipping (shipping_total × shipping.tax_rate). COMPUTED here — a caller cannot set it. |  |
| grand_total | number | Filter to rows whose `grand_total` is exactly this value. What the buyer owes: the positions' discounted totals plus the discounted shipping charge plus the payment surcharge plus tax_total, COMPUTED by this app and NEVER taken from the caller — trusting a supplied total is how inconsistent orders happened. This is the number the approval threshold is compared against and the number the revenue rollup sums. |  |
| placed_at | string | Exact timestamp equality — this API has no range filter. To bound a period, sort with `order` and page. When the order was PLACED. Null while it is pending approval: an order awaiting sign-off exists but was never placed, and that is exactly the difference this field records. |  |
| completed_at | string | Exact timestamp equality — this API has no range filter. To bound a period, sort with `order` and page. When the order was closed — by a full shipment, by payment or by hand, depending on the tenant's auto_complete_on. Null until then. |  |
| cancelled_at | string | Exact timestamp equality — this API has no range filter. To bound a period, sort with `order` and page. When the order was cancelled, whether by a full cancel or by the last open quantity being cancelled position by position. Null otherwise. |  |
| external_id | string | Filter to rows whose `external_id` is exactly this value. The key this order has in the system that OWNS it — the ERP's own handle on the sales order, which is what a write-back addresses. Distinct from `external_ref`, which is the readable ORDER NUMBER that system quotes at a human, and from `number`, which is the one this app issued. Unique per tenant where set, so a retried import that sends the same key again is refused rather than founding a second order. Null for an order the shop owns. |  |
| source_synced_at | string | Exact timestamp equality — this API has no range filter. To bound a period, sort with `order` and page. When this order was last confirmed against its source. What a delta run asks for changes since, and what tells an operator that a feed has gone quiet — an edit made here does not touch it, because it says when the SOURCE was last seen, not when the row changed. Null for a order no source owns. |  |
| requested_delivery_date | string | The dispatch list for one day: every order the buyer asked to have on it. Exact equality on the DAY — there is no range filter here, so a week is seven calls or a sort with `order=requested_delivery_date.asc` and paging. It answers about the ORDER's date; a position that named its own is not found this way. The calendar day the BUYER asked to be delivered on, as a date and not a moment — a buyer asks for Tuesday, not for Tuesday at 14:03 in a timezone nobody named. It is a wish and nothing here judges it: a date in the past, a weekend or a day inside the lead time is stored as sent, because what is deliverable is the merchant's answer and this app reads neither stock nor carrier calendar. The positions carry their own, and A POSITION'S DATE WINS over this one — this is the proposal for every position that names none. Null on an order that asked for nothing, which is the ordinary case. It was collected in `user_data.requested_date` before this column existed and is still echoed there by callers that have not moved over; the column is what is compared, sorted and mapped. |  |
| created_at | string | Exact timestamp equality — this API has no range filter. To bound a period, sort with `order` and page. When the order row was written. For a placed order this is placed_at; for a requested one it is when the request was submitted. |  |
| updated_at | string | Exact timestamp equality — this API has no range filter. To bound a period, sort with `order` and page. When any column of the order last changed — every status move, every re-derived fulfillment, every modification. |  |
| limit | integer | Page size (default 50, max 200). A larger value is clamped to 200 rather than refused. |  |
| offset | integer | Row offset for pagination (default 0). |  |
| order | string | Sort by one column: 'column' | 'column.asc' | 'column.desc'. A bare column sorts ascending, the direction is lower case, and the column has to exist — the value reaches the data plane verbatim and anything else is a 400. |  |


```http request
POST https://api.revenexx.com/v1/orders/migrations/requested-delivery-date
```

** A one-off per tenant, and a MIGRATION rather than a feature: the day a buyer asked to be delivered on was collected long before it had a field of its own, in `user_data.requested_date` — a free-form blob, so the date was present and neither filterable, sortable nor visible to any ERP mapping. This copies what is already there into `requested_delivery_date` on every order that carries no date yet, and it is safe to run again: a second call finds nothing to fill and says so. It reads only the orders with no date, so it is cheap; `filled` is what it changed and `scanned` what it had to look at, and `scanned` never falls to zero, because an order that genuinely asked for no day is read by every later run. THE JSONB KEY IS LEFT WHERE IT IS: `user_data` belongs to the caller and is handed back untouched, so the key stays as a deprecated echo of the column — the column is what is compared, sorted and mapped from here on. `updated_at` is not touched either: it says when the row last changed for the merchant, and stamping the whole table with today would destroy that reading for every reader of it, a delta run included. A value in the key that is not a calendar day is counted under `skipped` and left alone rather than refusing the run. The scan stops itself before the gateway's timeout and hands back a `cursor`; send it back unchanged until `done` is true. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| cursor | string | Continue an unfinished run: the exact value the previous call returned, which is the id of the last order it read. Do not construct one — it is a resume point, not an offset. Omit it on the first call. |  |
| limit | integer | Orders read per page of the scan (default 500, clamped to 1000). It is the page size, not a cap on the run: the scan keeps paging until it finishes or runs out of time. |  |


```http request
GET https://api.revenexx.com/v1/orders/number-ranges
```

** The counters this tenant numbers its orders, delivery notes and returns from — what an operator sees on the Number ranges settings page, and what a migration reads to check the prefixes and the padding before it imports anything. Every parameter below is an exact-match filter on the column it names (?code=order finds the order counter). Two things are not: a key that names NO column is not a filter — the SDK release after app-sdks#30 answers it 400 unknown_filter, and until then it is dropped and absent from the 'filter' echo, so compare that echo against what you sent — and the jsonb column 'metadata' is honoured by the router but refused by the database (400 invalid_value) unless the value is a whole JSON document, which is why it is not offered here. It does not draw a number: `counter` is the last number DRAWN, and only placing an order, a shipment or a return moves it. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | Filter to rows whose `id` is exactly this value. Primary key of the number range. |  |
| code | string | Look a range up by its code — 'order', 'delivery', 'return', or whatever a settings key points at. Which counter this is, in the app's own words: 'order' numbers orders, 'delivery' numbers delivery notes, 'return' numbers returns. Unique per tenant, and the value the order_number_range_code / delivery_number_range_code / return_number_range_code settings point at — a setting naming a code no range carries is the 422 'number_range_missing'. |  |
| prefix | string | Filter to rows whose `prefix` is exactly this value. Literal text in front of the counter: 'ORD-' turns counter 123 into ORD-000123. Empty by default. |  |
| suffix | string | Filter to rows whose `suffix` is exactly this value. Literal text after the counter — a market or year marker on merchants who number that way. Empty by default, which is what most of them use. |  |
| padding | integer | Filter to rows whose `padding` is exactly this value. How wide the counter is written, zero-padded: 6 makes 123 into 000123. 0 writes the bare number. Widening it later does not renumber what was already drawn. |  |
| counter | integer | Filter to rows whose `counter` is exactly this value. The last number DRAWN — state, not configuration. The next draw is counter + step and writes the new value back, so moving this forward skips numbers and moving it back re-issues them (and the unique index then answers 409). |  |
| step | integer | Filter to rows whose `step` is exactly this value. How far the counter moves per draw. 1 is consecutive numbering; a larger step is what a merchant chooses who does not want their order volume readable off an invoice. |  |
| position_step | integer | Filter to rows whose `position_step` is exactly this value. The gap between the position numbers of a new order: 10 numbers the lines 10, 20, 30 — room to slot a line in between later without renumbering the rest. Read from the ORDER range only. |  |
| channel_id | string | Filter to rows whose `channel_id` is exactly this value. The sales channel this range was created for, as a label. It does NOT select the range: a draw finds the range by `code` alone, and the unique index (tenant, code) means one code is one range per tenant — so an order on another channel draws from the same range this one names. Null on the three seeded ranges, which is every tenant-wide range. |  |
| created_at | string | Exact timestamp equality — this API has no range filter. To bound a period, sort with `order` and page. When the range was created. |  |
| updated_at | string | Exact timestamp equality — this API has no range filter. To bound a period, sort with `order` and page. When the range last changed — which includes every single number draw, because a draw writes the counter. |  |
| limit | integer | Page size (default 50, max 200). A larger value is clamped to 200 rather than refused. |  |
| offset | integer | Row offset for pagination (default 0). |  |
| order | string | Sort by one column: 'column' | 'column.asc' | 'column.desc'. A bare column sorts ascending, the direction is lower case, and the column has to exist — the value reaches the data plane verbatim and anything else is a 400. |  |


```http request
POST https://api.revenexx.com/v1/orders/number-ranges
```

** Add a counter beyond the three a tenant is seeded with, and give it the shape a merchant's numbers actually have: {prefix}{counter padded to `padding`}{suffix}, moving by `step` per draw. A new range is what the order_number_range_code / delivery_number_range_code / return_number_range_code settings can then be pointed at — the code is the name those settings use, and a setting naming a code no range carries makes placing an order answer 422. `code` is unique per tenant, so this is a 409 for one that is taken rather than a second counter under the same name. It does not renumber anything that already exists, and setting `counter` to a value already issued re-issues those numbers, which the unique index on the order number then refuses. created_at and updated_at are the server's: a body carrying either is 400 server_owned_field. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| channel_id | string | The sales channel this range was created for, as a label. It does NOT select the range: a draw finds the range by `code` alone, and the unique index (tenant, code) means one code is one range per tenant — so an order on another channel draws from the same range this one names. Null on the three seeded ranges, which is every tenant-wide range. |  |
| code | string | Which counter this is, in the app's own words: 'order' numbers orders, 'delivery' numbers delivery notes, 'return' numbers returns. Unique per tenant, and the value the order_number_range_code / delivery_number_range_code / return_number_range_code settings point at — a setting naming a code no range carries is the 422 'number_range_missing'. |  |
| counter | integer | The last number DRAWN — state, not configuration. The next draw is counter + step and writes the new value back, so moving this forward skips numbers and moving it back re-issues them (and the unique index then answers 409). Defaults to 0, so the first number drawn is step. |  |
| metadata | object | Free-form data for the caller. This app stores it and returns it, and reads nothing out of it. |  |
| padding | integer | How wide the counter is written, zero-padded: 6 makes 123 into 000123. 0 writes the bare number. Widening it later does not renumber what was already drawn. Defaults to 6. |  |
| position_step | integer | The gap between the position numbers of a new order: 10 numbers the lines 10, 20, 30 — room to slot a line in between later without renumbering the rest. Read from the ORDER range only. Defaults to 10. |  |
| prefix | string | Literal text in front of the counter: 'ORD-' turns counter 123 into ORD-000123. Empty by default. Defaults to ''. |  |
| step | integer | How far the counter moves per draw. 1 is consecutive numbering; a larger step is what a merchant chooses who does not want their order volume readable off an invoice. Defaults to 1. |  |
| suffix | string | Literal text after the counter — a market or year marker on merchants who number that way. Empty by default, which is what most of them use. Defaults to ''. |  |


```http request
POST https://api.revenexx.com/v1/orders/number-ranges/defaults
```

** Make sure the three codes this app draws from exist: 'order' (ORD-), 'delivery' (DEL-) and 'return' (RET-), each padded to six digits and stepping by one. The app runs it for you on install, so a fresh tenant needs nothing; call it by hand after a range was deleted, or to check what a tenant has. Idempotent: a code that already exists comes back under 'existing' and is left EXACTLY as it is, counter included, so a merchant who changed the prefix keeps their change. Answers 200, never 201 — it is a reconcile, not a create — and it never repairs or renames a range that is already there. **


```http request
DELETE https://api.revenexx.com/v1/orders/number-ranges/{id}
```

** Remove a counter a tenant no longer numbers anything from. It touches nothing that was numbered out of it: existing orders, delivery notes and returns keep the numbers they were given, because a number is copied onto the row at place-time and is not a reference to this table. Only a range that has never drawn a number can be removed: one whose counter is above 0 answers 409 range_in_use, because a standard code would come back at 0 on the next draw and hand out numbers that already exist. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The number range id (uuid). |  |


```http request
GET https://api.revenexx.com/v1/orders/number-ranges/{id}
```

** One counter with its whole configuration: the prefix and suffix around the number, how wide it is padded, how far each draw moves it, where it currently stands, and the position_step new order lines are numbered in. Reach for it when you hold the id — from the list, or from what a create answered — and want the row as it stands now. Reading does not draw a number and does not move `counter`; the id is the range's uuid, not its `code`, and a code is turned into a range through GET /orders/number-ranges?code=order. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The number range id (uuid). |  |


```http request
PUT https://api.revenexx.com/v1/orders/number-ranges/{id}
```

** Change the format or the state of an existing counter: a new prefix or suffix, a wider padding, a different step, a different position_step for new order lines — or `counter` itself, which is state rather than configuration. Everything takes effect on the NEXT draw only: nothing that was already numbered is renumbered, so widening the padding leaves ORD-000123 and starts writing ORD-0000124. Moving `counter` forward skips numbers; moving it BACK is refused (422 counter_rewind), because it would hand out numbers orders already carry — resending the counter the range already has is fine, only a change is checked. Renaming `code` to one another range of this tenant already holds is a 409. updated_at is stamped by the server; a body carrying created_at or updated_at is 400 server_owned_field. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The number range id (uuid). |  |
| channel_id | string | The sales channel this range was created for, as a label. It does NOT select the range: a draw finds the range by `code` alone, and the unique index (tenant, code) means one code is one range per tenant — so an order on another channel draws from the same range this one names. Null on the three seeded ranges, which is every tenant-wide range. |  |
| code | string | Which counter this is, in the app's own words: 'order' numbers orders, 'delivery' numbers delivery notes, 'return' numbers returns. Unique per tenant, and the value the order_number_range_code / delivery_number_range_code / return_number_range_code settings point at — a setting naming a code no range carries is the 422 'number_range_missing'. |  |
| counter | integer | The last number DRAWN — state, not configuration. The next draw is counter + step and writes the new value back, so moving this forward skips numbers and moving it back re-issues them (and the unique index then answers 409). Defaults to 0, so the first number drawn is step. |  |
| metadata | object | Free-form data for the caller. This app stores it and returns it, and reads nothing out of it. |  |
| padding | integer | How wide the counter is written, zero-padded: 6 makes 123 into 000123. 0 writes the bare number. Widening it later does not renumber what was already drawn. Defaults to 6. |  |
| position_step | integer | The gap between the position numbers of a new order: 10 numbers the lines 10, 20, 30 — room to slot a line in between later without renumbering the rest. Read from the ORDER range only. Defaults to 10. |  |
| prefix | string | Literal text in front of the counter: 'ORD-' turns counter 123 into ORD-000123. Empty by default. Defaults to ''. |  |
| step | integer | How far the counter moves per draw. 1 is consecutive numbering; a larger step is what a merchant chooses who does not want their order volume readable off an invoice. Defaults to 1. |  |
| suffix | string | Literal text after the counter — a market or year marker on merchants who number that way. Empty by default, which is what most of them use. Defaults to ''. |  |


```http request
POST https://api.revenexx.com/v1/orders/place
```

** The way an order comes into existence — the call a checkout, a punch-out or an ERP import makes once the basket is final. The body is a SNAPSHOT: items with their product copies, plus the buyer, the addresses and the payment and shipping choices frozen as they were at this moment, so the order stays readable when the catalogue or the customer changes underneath it. The app draws the order number from the tenant's order range, numbers the positions, computes subtotal, tax and grand_total from the lines, and writes the order.placed event that carries the order onto the bus. It does not reserve stock, take payment or talk to an ERP: those are separate capabilities, and this route's job ends when the event is on the bus. Two things can turn a placement into a REQUEST awaiting approval, and both still answer 201 — with status='pending' and no placed_at: a principal holding only orders.request, and an order worth more than the tenant's require_approval_above_value (a principal holding orders.approve is exempt from the threshold). The order.requested event says which, in 'approval_reason'. The currency defaults to the market's default_currency setting and the position cap is the tenant's max_items_per_order. PRICES ARE THE CALLER'S: this app reads no price list, so the unit price, the tax rate, the shipping charge and the promotions a caller evaluated are taken as sent — refused only when they cannot be money (a negative price or shipping charge, a tax rate outside 0–100). Totals, tax amounts and the discount split are computed here. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| billing_address | object | The invoice address, FROZEN at place-time. Changing the customer's address afterwards does not change what this order was billed to. |  |
| buyer | object | The ordering party as it was at place-time, FROZEN: a copy, not a reference, so the order still reads correctly after the customer record is renamed, merged or deleted. The caller decides what goes in; this app stores it and reads nothing out of it. |  |
| cart_id | string | The cart this order was placed from, when a storefront handed one over. A reference across an app boundary (the carts app), not a foreign key — nothing here checks that it resolves. Null for an order an integration or an operator created. The carts.order hand-over sets it. |  |
| channel_id | string | The sales channel the order arrived through — webshop, app, phone desk, EDI. Null when the caller named none. |  |
| contact_id | string | The PERSON who ordered — a contact in the customers app. Resolved from the acting principal whenever the caller carries one, and a body value that disagrees is refused rather than silently overridden. Null for a guest checkout. Ignored when the caller carries a principal — the RESOLVED contact wins, and a body value that disagrees is a 400 rather than a silent override. |  |
| currency | string | ISO 4217 code of EVERY amount on this order. Frozen at place-time from the market's default_currency unless the caller named one. Nothing on this order is ever converted, and the approval threshold is read in this currency — which is why the threshold is a per-market setting. Defaults to the market's default_currency setting. |  |
| customer_order_number | string | The BUYER's own reference — their purchase-order number. Free text, not unique, never generated here: it exists so the paperwork can carry the number the buyer's accounts payable will look for. One of the few fields PUT /orders/{id} may still change. |  |
| external_id | string | The key this order has in the system that OWNS it — the ERP's own handle on the sales order, which is what a write-back addresses. Distinct from `external_ref`, which is the readable ORDER NUMBER that system quotes at a human, and from `number`, which is the one this app issued. Unique per tenant where set, so a retried import that sends the same key again is refused rather than founding a second order. Null for an order the shop owns. Sending it a second time is a 409, not a second order: the key is unique per tenant, which is what makes a retried import safe to run. Recover by reading the order back with GET /orders?external_id=… and correcting that one. |  |
| external_refs | object | Every OTHER system that knows this order, keyed by system name — a second ERP, a procurement platform, a portal. `external_id` is the leading system; this is the rest. Not a query parameter: a jsonb column is compared as a whole document, so look the row up by `external_id` and read this off the answer. |  |
| grand_total | number | Optional, and CHECKED rather than used: the order always computes its own total from the positions, the shipping cost and the tax. Send it as a checksum on that arithmetic — if it agrees the order is placed, and if it disagrees the call is refused with 400 naming both numbers, yours and the computed one. The comparison is at 2 decimal places (this app stores 4, ERPs work to 2, so a difference below a cent is agreement). It is never taken as the order value: the approval threshold and the revenue rollup read the computed number, which is why a total that disagrees is an error rather than an override. |  |
| items | array | The order positions — at least one, and at most the tenant's max_items_per_order (500 out of the box; a longer list is a 400 naming the limit). |  |
| metadata | object | Free-form data belonging to the INTEGRATION side — an ERP's own bookkeeping about this order. Stored and returned untouched; nothing here reads it. |  |
| organization_id | string | The COMPANY the order is booked on — an organization in the customers app, and the B2B half of who ordered. This is what orders.reports.customer-rollup aggregates by and what makes an order visible to a buyer's colleagues. Null on a private or guest order, which the rollup counts separately because it cannot attribute it. A principal's own organization wins over this when it has one. |  |
| payment | object | The payment arrangement as it was chosen, FROZEN. This app reads exactly two keys and stores the rest untouched: 'status' seeds payment_status at place-time when it names one of the permitted values (anything else is ignored and the order starts 'open'; a buyer's own call may only send 'open'), and 'payment_id' is merged in by POST /orders/{id}/payment-status. The method itself, its provider fields and any redirect state belong to the payments app. |  |
| requested_delivery_date | string | The calendar day the BUYER asked to be delivered on, as a date and not a moment — a buyer asks for Tuesday, not for Tuesday at 14:03 in a timezone nobody named. It is a wish and nothing here judges it: a date in the past, a weekend or a day inside the lead time is stored as sent, because what is deliverable is the merchant's answer and this app reads neither stock nor carrier calendar. The positions carry their own, and A POSITION'S DATE WINS over this one — this is the proposal for every position that names none. Null on an order that asked for nothing, which is the ordinary case. It was collected in `user_data.requested_date` before this column existed and is still echoed there by callers that have not moved over; the column is what is compared, sorted and mapped. 'YYYY-MM-DD'. A value that is not a day that exists is a 400. Omit it and `user_data.requested_date` is taken instead, which is where a caller written before this field existed puts it — send the field and that copy is ignored. |  |
| shipping | object | The shipping arrangement as it was chosen, FROZEN. Two keys are READ at place-time and feed the totals: 'price' becomes shipping_total (the shipping_total field is only the fallback when this is absent) and 'tax_rate' is what shipping is taxed at, because shipping is a Nebenleistung and is taxed too. Everything else — the carrier product, the delivery window, the pickup point — is stored untouched and belongs to the shipping app. |  |
| shipping_address | object | The delivery address, FROZEN at place-time — what goes on the label of every shipment of this order. Null on an order that is never delivered (a service, a digital item, a collection). |  |
| shipping_total | number | NET shipping cost, taken from shipping.price or, when the snapshot carries no price, from the request's shipping_total. In `currency`. This is the price BEFORE any promotion reduced it; the reduction is a row in the discount components. Only read when the shipping snapshot carries no 'price'. Below zero is a 400, and so is a 'shipping.price' below zero or a 'shipping.tax_rate' outside 0–100. |  |
| source_data | object | What the source said about this row, kept as it said it: `{"system": …, "etag": …, "raw": {…}}`. The `etag` is what a write-back has to send back in `If-Match`, and there is nowhere else to keep it between two runs. `raw` holds the source fields this app does not model, so they survive a round trip instead of being lost on the first edit. Nothing here reads it, and no transition clears it. |  |
| source_synced_at | string | When this order was last confirmed against its source. What a delta run asks for changes since, and what tells an operator that a feed has gone quiet — an edit made here does not touch it, because it says when the SOURCE was last seen, not when the row changed. Null for a order no source owns. |  |
| user_data | object | Free-form data belonging to the ORDERING side — carried through from the storefront or the cart and handed back untouched. One of the few fields PUT /orders/{id} may still change. One key of it is read: `requested_date`, which is where the wanted delivery date was collected before it had a column, and which is taken as the date only when `requested_delivery_date` names none. The blob itself is never rewritten by that reading. |  |


```http request
POST https://api.revenexx.com/v1/orders/reports/customer-rollup
```

** What each company has bought, as numbers another app can keep: order count, lifetime revenue, first and last order date, and the same count and revenue over the last 30, 90 and 365 days. This is what a customer segment like "bought for more than 100k last year" is built on, and the customers app materialises it into a local projection its segment rules query. It answers about ORGANIZATIONS only — a private or guest order carries none and is counted in orders_without_organization rather than attributed to anybody — and it converts nothing, so an organization that ordered in two currencies gets both listed and one summed number to read with care. Revenue lives in orders, customer segments live in the customers app, and the two may not join (ADR-0055: no cross-app FK, grant or view). This capability is the hand-over. Every number is additive (count/sum/min/max) so partial answers merge; the average order value is deliberately not returned — it is revenue_total / order_count over the merged parts. Windows are anchored at as_of, which is echoed back so a loop measures one consistent picture. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| as_of | string | Anchor for the rolling windows (default now). Pin it and send it back on every call of a loop, otherwise the windows drift by the duration of the loop. |  |
| cursor | string | Continue an unfinished scan: the exact value the previous call returned, which is the id of the last order it read. Do not construct one — it is a resume point, not an offset. Omit it on the first call. It is honoured in BOTH call shapes, organization_ids included: send the whole batch again alongside it whenever `done` came back false, or the part of the batch after the cursor is simply never read. |  |
| organization_ids | array | Roll up exactly these organizations and no others — at most 200, because the ids travel to the data plane as one in.() filter. Naming them does NOT make the answer complete by itself: the scan is the same paged, time-budgeted loop either way, so a batch with more orders than one page can still stop early with `done: false` and a cursor. Small batches finish in one call, which is the normal case, but check `done` rather than assume it. Omitted = scan every order and answer for every organization that appears on one. |  |
| statuses | array | Which lifecycle statuses count as revenue. Defaults to placed, in_fulfillment and completed: a pending order was never placed, and a cancelled one is not revenue. Widening this is how a merchant who books on approval gets their own definition of the same numbers. |  |


```http request
GET https://api.revenexx.com/v1/orders/return-reasons
```

** The reasons a merchant takes goods back under, in their own words and in the order a picker should offer them — what a returns dialog fills its reason select from, and what turns the `reason_code` on a return into a title somebody can read. It is the one vocabulary of this app the MERCHANT keeps rather than the database: why a customer sent something back differs per trade, so it is a table and a merchant gets their own without a release of this app. The set is served whole and seeds itself: a tenant that has never read it is given the nine standard reasons on the way, so this route never answers an empty select. Exactly one row carries `is_default` — the reason a picker preselects, repaired on read if nothing holds it — and it is deliberately 'other' rather than a real reason, because `order_returns.reason_code` is nullable and nothing here falls back to the flag. Every parameter below is an exact match on the column it names, and a key that names no column is 400 unknown_filter; limit, offset and order ('column.asc' | 'column.desc') page and sort it. The jsonb columns `labels` and `descriptions` are not offered, because the data plane answers 400 for anything that is not a whole JSON document. Adding, renaming and retiring a reason has no address here yet. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | Filter to rows whose `id` is exactly this value. Primary key of the reason. The {id} segment of the item route; `code` is what a return stores. |  |
| code | string | Look one reason up by the code a return carries. Exact match, and the way to turn a `reason_code` off a return into the row that titles it. The stable identifier a return carries in `reason_code`, and the one thing about a reason that is not a label: lowercase, starting with a letter, with digits, '-' and '_' after it. It is what a report groups by and what an ERP mapping keys on, so it is fixed once created — the title is what a merchant renames. |  |
| title | string | Filter to rows whose `title` is exactly this value. What an operator reads in the picker, in the tenant's own words. Renaming it rewrites no return, because a return stores the code. |  |
| description | string | Filter to rows whose `description` is exactly this value. One sentence on when to pick this reason, for whoever is choosing between two that sound alike. Null where nobody wrote one. |  |
| is_default | boolean | Filter to the one reason a picker preselects. Exactly one row of a tenant carries it. Exactly one reason of the tenant carries this: the one a picker preselects. It is NOT a fallback — `order_returns.reason_code` is nullable and a return registered without a code carries none, deliberately, because a default of 'Damaged in transit' would label returns that were never damaged. The seeded flag sits on 'other' for that reason. The set repairs itself on read when no row holds it. |  |
| tone | string | Filter to rows whose `tone` is exactly this value. The semantic badge colour a client renders this reason in — the same five tones every vocabulary of this platform uses. The client owns what each tone looks like. |  |
| position | integer | Filter to rows whose `position` is exactly this value. Where the reason sits in the picker, ascending. Ties fall back to whatever the database returns, so a merchant who cares about the order gives every row its own number. |  |
| is_system | boolean | Filter to rows whose `is_system` is exactly this value. True for a reason the app seeded, and it means only 'we put it there' — not that it is protected. A merchant may rename, re-tone and reorder a seeded reason like any other; nothing here branches on this flag. |  |
| created_at | string | Exact timestamp equality — this API has no range filter. To bound a period, sort with `order` and page. When the reason was created — the seed writes the nine standard ones on install. |  |
| updated_at | string | Exact timestamp equality — this API has no range filter. To bound a period, sort with `order` and page. When the reason last changed. |  |
| limit | integer | Page size (default 50, max 200). A larger value is clamped to 200 rather than refused. |  |
| offset | integer | Row offset for pagination (default 0). |  |
| order | string | Sort by one column: 'column' | 'column.asc' | 'column.desc'. A bare column sorts ascending, the direction is lower case, and the column has to exist — the value reaches the data plane verbatim and anything else is a 400. |  |


```http request
GET https://api.revenexx.com/v1/orders/return-reasons/{id}
```

** One reason with its code, its title, the labels and descriptions per locale and the badge tone a client renders it in. Reach for it when you hold the id — from the list, or off a Cockpit row. Addressed by uuid and not by code: a `reason_code` read off a return becomes a row through GET /orders/return-reasons?code=… . Unlike the list this route does NOT seed, because an id can only have come from a set that was already read. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The return reason id (uuid) — not its code. A code is turned into a row through GET /orders/return-reasons?code=damaged. |  |


```http request
GET https://api.revenexx.com/v1/orders/vocabularies
```

** Which value sets this app will describe for you, by name — order statuses, payment statuses, fulfillment statuses, item types, return statuses and return resolutions — so a client can discover them instead of shipping its own copy of five statuses that goes stale one release later. The values themselves are deliberately NOT here: this is the index, and each set is fetched on its own. Discovery for the vocabulary routes. Names: cancellation-scopes, comment-visibilities, discount-applies-to, discount-effect-kinds, discount-placements, discount-sources, discount-value-types, fulfillment-statuses, item-types, payment-statuses, refund-modes, return-reason-tones, return-resolutions, return-statuses, statuses. Fetch one with GET /orders/vocabularies/{name}; a client holding the qualified pair 'orders.<name>' builds that URL from the pair alone. 'title' and 'description' are locale maps wherever somebody wrote the copy and plain strings where the fallback did — read both forms. **


```http request
GET https://api.revenexx.com/v1/orders/vocabularies/{name}
```

** Everything a UI needs to render one of this app's value sets without knowing it: every permitted value, in order, each with a title and description in the locales somebody wrote and a badge tone to colour it. Fetch it once and a status filter, a status badge and a resolution picker all stay correct through a lifecycle change, because the set served IS the set enforced. It answers about values, not about rows — nothing here says how many orders are in a status. The values are read out of the column's CHECK constraint, so the served set IS the enforced set and the two cannot drift — a value added to the constraint appears here even before anyone labels it, titled from its own key. Values come back in constraint order, which is lifecycle order for a status, and 'final' marks the values that END the lifecycle (completed, cancelled) so a client can ask "is this order still open?" instead of matching names it guessed. Every set is exhaustive ('closed' is always true); 'source' says who enforces it — 'schema' for a CHECK constraint, 'app' for 'return-resolutions', whose column carries none and whose words the return routes enforce instead. Those values additionally carry 'stage' (complete | reject): the transition that accepts them. 'title' and 'description' are locale maps where the copy was written and plain strings where the key-derived fallback answered, on the vocabulary and on every value alike. Names: cancellation-scopes, comment-visibilities, discount-applies-to, discount-effect-kinds, discount-placements, discount-sources, discount-value-types, fulfillment-statuses, item-types, payment-statuses, refund-modes, return-reason-tones, return-resolutions, return-statuses, statuses. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| name | string | **Required** The vocabulary name — the part after the dot in the qualified id. |  |


```http request
GET https://api.revenexx.com/v1/orders/{id}
```

** The single source of order information, and what an order detail screen is built from: the order row plus its positions, its shipments with the shipment_items each one booked, its returns and its cancellations — one call, no assembling five lists. A cancellation's and a return's 'positions' are ARRAYS of {order_item_id, quantity}; a return's entries additionally carry 'restock'. Two things it does not carry: the comments and the event trail, which are their own paginated routes because both grow without bound. Addressed by uuid — an order number goes through GET /orders?number=… first. The fields currency, grand_total, contact_id and status and the five statuses are read by other apps (payments checks a payment against them) and are stable from 1.0. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The order id (uuid). This segment reaches a uuid column: an order NUMBER is not accepted here — filter GET /orders by ?number= to resolve one. |  |


```http request
PUT https://api.revenexx.com/v1/orders/{id}
```

** The narrow correction window a service desk needs: the customer gave the wrong delivery address, the buyer's name is misspelled, their purchase-order number was missing. Ten columns and no others — customer_order_number, buyer, billing_address, shipping_address, user_data, metadata, and the four that say where the order came from (external_id, external_refs, source_synced_at, source_data) — and each is REPLACED whole, not merged, so send the entire address rather than the one line that changed. The last four are the only ones a delta run needs, and this is the only address that refreshes them without moving the order: a new ETag and a new confirmation time arrive here. It moves nothing: status, payment_status, fulfillment_status and the quantities belong to the action routes, and a body carrying them is accepted with those keys quietly dropped — except created_at and updated_at, which are the server's and answer 400 server_owned_field. The window closes when the fulfilling system acknowledges the order, because from then on the ERP holds the copy that ships — unless the tenant set allow_modification_after_acknowledge. Every accepted change writes an order.updated event naming the columns it touched. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The order id (uuid). This segment reaches a uuid column: an order NUMBER is not accepted here — filter GET /orders by ?number= to resolve one. |  |
| billing_address | object | The invoice address, FROZEN at place-time. Changing the customer's address afterwards does not change what this order was billed to. Replaced wholesale — send the whole address, not a patch of it. |  |
| buyer | object | The ordering party as it was at place-time, FROZEN: a copy, not a reference, so the order still reads correctly after the customer record is renamed, merged or deleted. The caller decides what goes in; this app stores it and reads nothing out of it. Replaced wholesale — send the whole snapshot, not a patch of it. |  |
| customer_order_number | string | The BUYER's own reference — their purchase-order number. Free text, not unique, never generated here: it exists so the paperwork can carry the number the buyer's accounts payable will look for. One of the few fields PUT /orders/{id} may still change. |  |
| external_id | string | The key this order has in the system that OWNS it — the ERP's own handle on the sales order, which is what a write-back addresses. Distinct from `external_ref`, which is the readable ORDER NUMBER that system quotes at a human, and from `number`, which is the one this app issued. Unique per tenant where set, so a retried import that sends the same key again is refused rather than founding a second order. Null for an order the shop owns. Replaced wholesale, and null disowns the order — no source then answers for it. Moving it to a key another order of this tenant holds is a 409. |  |
| external_refs | object | Every OTHER system that knows this order, keyed by system name — a second ERP, a procurement platform, a portal. `external_id` is the leading system; this is the rest. Not a query parameter: a jsonb column is compared as a whole document, so look the row up by `external_id` and read this off the answer. Replaced wholesale — send the whole map, not the one system that changed. |  |
| metadata | object | Free-form data belonging to the INTEGRATION side — an ERP's own bookkeeping about this order. Stored and returned untouched; nothing here reads it. Replaced wholesale. |  |
| requested_delivery_date | string | The calendar day the BUYER asked to be delivered on, as a date and not a moment — a buyer asks for Tuesday, not for Tuesday at 14:03 in a timezone nobody named. It is a wish and nothing here judges it: a date in the past, a weekend or a day inside the lead time is stored as sent, because what is deliverable is the merchant's answer and this app reads neither stock nor carrier calendar. The positions carry their own, and A POSITION'S DATE WINS over this one — this is the proposal for every position that names none. Null on an order that asked for nothing, which is the ordinary case. It was collected in `user_data.requested_date` before this column existed and is still echoed there by callers that have not moved over; the column is what is compared, sorted and mapped. The buyer rang up and asked for a different day. 'YYYY-MM-DD', and null withdraws the request entirely. It moves the ORDER's date only — a position that named its own keeps it, because the line wins. It is not held to any lead time here: a date the merchant cannot serve is a conversation, not a 400. |  |
| shipping_address | object | The delivery address, FROZEN at place-time — what goes on the label of every shipment of this order. Null on an order that is never delivered (a service, a digital item, a collection). Replaced wholesale. This is the one correction that actually matters after placement: the label of every shipment still to go out is printed from it. |  |
| source_data | object | What the source said about this row, kept as it said it: `{"system": …, "etag": …, "raw": {…}}`. The `etag` is what a write-back has to send back in `If-Match`, and there is nowhere else to keep it between two runs. `raw` holds the source fields this app does not model, so they survive a round trip instead of being lost on the first edit. Nothing here reads it, and no transition clears it. Replaced wholesale, which is how a fresh ETag arrives: send what the source said THIS time, not a patch of what it said last time. |  |
| source_synced_at | string | When this order was last confirmed against its source. What a delta run asks for changes since, and what tells an operator that a feed has gone quiet — an edit made here does not touch it, because it says when the SOURCE was last seen, not when the row changed. Null for a order no source owns. This is where a delta run stamps the run it confirmed the order in. |  |
| user_data | object | Free-form data belonging to the ORDERING side — carried through from the storefront or the cart and handed back untouched. One of the few fields PUT /orders/{id} may still change. One key of it is read: `requested_date`, which is where the wanted delivery date was collected before it had a column, and which is taken as the date only when `requested_delivery_date` names none. The blob itself is never rewritten by that reading. Replaced wholesale — the `requested_date` key included, so a body that rewrites this blob without it drops that echo. The typed column is unaffected either way. |  |


```http request
POST https://api.revenexx.com/v1/orders/{id}/acknowledge
```

** The return channel for whatever fulfils the order. An Integration Studio workflow picks up order.placed, books the order into the ERP, and calls this with what the ERP gave it — the readable order number in external_ref, the ERP's own key in external_id, and the token a later write-back has to hand back in source_data. That is what makes the two systems mutually findable, and an external_id another order of this tenant already holds is a 409 rather than a silent second claim on the same ERP record. It stamps acknowledged_at from the server's clock, and that timestamp is what closes the correction window: PUT /orders/{id} refuses afterwards, because the copy that ships now lives elsewhere. It is a handshake and nothing more — it does not change status, payment_status or fulfillment_status, and it does not ship anything. Once only: a second call is a 422 rather than a silent overwrite of the first system's reference. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The order id (uuid). This segment reaches a uuid column: an order NUMBER is not accepted here — filter GET /orders by ?number= to resolve one. |  |
| external_id | string | The key this order has in the system that OWNS it — the ERP's own handle on the sales order, which is what a write-back addresses. Distinct from `external_ref`, which is the readable ORDER NUMBER that system quotes at a human, and from `number`, which is the one this app issued. Unique per tenant where set, so a retried import that sends the same key again is refused rather than founding a second order. Null for an order the shop owns. The key beside the document number, and the one a write-back addresses. Keeps the existing value when omitted; a key another order of this tenant already holds is a 409. |  |
| external_ref | string | The FULFILLING system's reference for this order, typically the ERP order number. Written once by POST /orders/{id}/acknowledge and null until an integration acknowledged it. Keeps the existing value when omitted. |  |
| external_refs | object | Every OTHER system that knows this order, keyed by system name — a second ERP, a procurement platform, a portal. `external_id` is the leading system; this is the rest. Not a query parameter: a jsonb column is compared as a whole document, so look the row up by `external_id` and read this off the answer. Keeps the existing value when omitted. |  |
| source_data | object | What the source said about this row, kept as it said it: `{"system": …, "etag": …, "raw": {…}}`. The `etag` is what a write-back has to send back in `If-Match`, and there is nowhere else to keep it between two runs. `raw` holds the source fields this app does not model, so they survive a round trip instead of being lost on the first edit. Nothing here reads it, and no transition clears it. Where the ETag of the handover belongs. Keeps the existing value when omitted. |  |
| source_synced_at | string | When this order was last confirmed against its source. What a delta run asks for changes since, and what tells an operator that a feed has gone quiet — an edit made here does not touch it, because it says when the SOURCE was last seen, not when the row changed. Null for a order no source owns. Keeps the existing value when omitted — the acknowledgement itself is stamped in acknowledged_at, which is a different fact. |  |


```http request
POST https://api.revenexx.com/v1/orders/{id}/cancel
```

** Call the whole order off: every position's full quantity is booked as cancelled, the order moves to 'cancelled', a cancellation record is written with the reason and who gave it, and an order.cancelled event goes onto the bus. Only while NOTHING has shipped — once a single position has gone out the order is partly real and this answers 422; take the remaining quantities off with POST /orders/{id}/items/cancel instead, and handle what already shipped as a return. It refunds nothing and returns nothing to stock: payment travels through /payment-status and restocking is an explicit inventories call by the orchestrator. A tenant may require a reason (cancel_requires_reason), and a hold may block it (on_hold_blocks = 'shipping_and_cancel'). A pending order may be cancelled. A BUYER's own call reaches further back only: the buyer cancels while the order is pending or placed, not acknowledged by a fulfilling system and with nothing shipped — otherwise 422 order_not_cancellable, and the merchant decides. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The order id (uuid). This segment reaches a uuid column: an order NUMBER is not accepted here — filter GET /orders by ?number= to resolve one. |  |
| cancelled_by | string | Who cancelled, as the caller reported it — an operator, a desk, a system. Free text; this app does not resolve it against a user directory. |  |
| reason | string | Why it was cancelled, free text. Mandatory when the tenant sets cancel_requires_reason — for those merchants an unexplained cancellation is refused with a 400. |  |


```http request
GET https://api.revenexx.com/v1/orders/{id}/comments
```

** What people have written about this order, oldest first: the service desk's own notes and the messages meant for the customer, in one list. Filter by ?visibility=customer to build the version a customer may see, and by ?visibility=internal for the desk's own — on a back-office call the route does NOT decide that for you; on a buyer's own call it does, and only the customer-visible ones exist (asking for ?visibility=internal is 403 buyer_not_permitted). Comments are prose about the order and never move it; the lifecycle lives in the event trail. Every parameter below is an exact match on the column it names. `order_id` is deliberately absent: the route fixes it from the path AFTER the query filter is read, so sending one is accepted and then overwritten — it filters nothing. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The order id (uuid). This segment reaches a uuid column: an order NUMBER is not accepted here — filter GET /orders by ?number= to resolve one. |  |
| id_query | string | Filter to rows whose `id` is exactly this value. Primary key of the comment. |  |
| body | string | Filter to rows whose `body` is exactly this value. The comment itself. Plain text; this app neither renders nor sanitizes it. |  |
| visibility | string | Filter to internal notes or to the customer-visible ones. `visibility=customer` is what a customer order view should read. Who may see it: 'internal' is a note between operators, 'customer' is meant to be shown in the customer's order view. Nothing here enforces that — this app labels the comment and the client showing it decides. Defaults to the tenant's default_comment_visibility. |  |
| author | string | Filter by exact author, as it was reported. Free text — this is not resolved against a user directory, so it matches only what was written. Who wrote it, as the caller reported it. Free text; not resolved against a user directory. |  |
| created_at | string | Exact timestamp equality — this API has no range filter. To bound a period, sort with `order` and page. When the comment was written. Comments come back oldest first. |  |
| limit | integer | Page size (default 50, max 200). A larger value is clamped to 200 rather than refused. |  |
| offset | integer | Row offset for pagination (default 0). |  |
| order | string | Sort by one column: 'column' | 'column.asc' | 'column.desc'. A bare column sorts ascending, the direction is lower case, and the column has to exist — the value reaches the data plane verbatim and anything else is a 400. |  |


```http request
POST https://api.revenexx.com/v1/orders/{id}/comments
```

** Write down what happened that the state machine cannot record: what the customer said on the phone, why an exception was made, what the warehouse found in the box. `visibility` decides who the note is for — 'internal' for the service desk, 'customer' for text meant to be shown to the buyer — and it defaults to the tenant's default_comment_visibility, which is 'internal' out of the box, so a note is never accidentally customer-facing. Adding one writes an order.comment.added event, so the trail shows that a note was made and its visibility, without copying the text onto the bus. It changes nothing about the order, and it sends nothing to anybody: this stores a comment, it does not email the customer. On a buyer's own call the note is always 'customer' — a buyer writes to the merchant, not into the desk's internal notes, and asking for 'internal' is 403 buyer_not_permitted. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The order id (uuid). This segment reaches a uuid column: an order NUMBER is not accepted here — filter GET /orders by ?number= to resolve one. |  |
| author | string | Who wrote it, as the caller reported it. Free text; not resolved against a user directory. |  |
| body | string | The comment itself. Plain text; this app neither renders nor sanitizes it. |  |
| visibility | string | Who may see it: 'internal' is a note between operators, 'customer' is meant to be shown in the customer's order view. Nothing here enforces that — this app labels the comment and the client showing it decides. Defaults to the tenant's default_comment_visibility. Defaults to the tenant's default_comment_visibility setting, which is 'internal' out of the box. |  |


```http request
POST https://api.revenexx.com/v1/orders/{id}/complete
```

** Declare the order finished, whatever the quantities say — the service was delivered, the download was fetched, or an operator has decided the rest is not coming. status moves to 'completed' and completed_at is stamped from the server's clock. It does NOT ship anything or change the quantities, so fulfillment_status stays whatever the positions make it, and an order completed with lines still open shows exactly that. A completed order is final: modification, shipping and cancellation all refuse afterwards, and only a return may still be registered against it. The counterpart of auto_complete_on = 'payment' | 'manual': something has to close an order that shipping no longer closes by itself, and it is also the honest end for a service or digital order that never ships. Writes an order_events row 'order.completed' with via='manual'. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The order id (uuid). This segment reaches a uuid column: an order NUMBER is not accepted here — filter GET /orders by ?number= to resolve one. |  |
| completed_by | string | Who closed the order, as the caller reports it. Not stored on the order: it is carried in the order.completed event's payload, which is where the audit trail keeps who did what. Free text, not resolved against a user directory. |  |


```http request
GET https://api.revenexx.com/v1/orders/{id}/events
```

** Everything that has ever happened to this order, oldest first: placed or requested, updated, acknowledged, shipped, held, paid, returned, completed, cancelled — each with the payload the action carried. This is the audit trail an operator reads to answer "why is this order in this state", and it is the same row the platform publishes as a domain event, so what a workflow reacted to and what a person sees here cannot diverge. It is append-only and this route is read-only: rows are written by the action routes and there is no way to add, edit or remove one. An order's trail grows for as long as the order lives, so it is paginated like every other list — 'page.hasMore' says whether more of it exists. Every parameter below is an exact match on the column it names; `order_id` is deliberately absent, because the route fixes it from the path after the query filter is read and a value sent for it is overwritten rather than honoured. The jsonb column 'payload' is not offered for the same reason it is not offered on the order list: the data plane answers 400 for anything that is not a whole JSON document. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The order id (uuid). This segment reaches a uuid column: an order NUMBER is not accepted here — filter GET /orders by ?number= to resolve one. |  |
| id_query | string | Filter to rows whose `id` is exactly this value. Primary key of the event row. |  |
| name | string | Filter the trail to one kind of event — `order.shipment.created` for the dispatch history, `order.return.completed` for the settled returns. WHAT happened, and this is the domain event: the manifest emits order_event.created on insert and this value is the event name on the bus. The names this app writes are order.placed, order.requested, order.updated, order.acknowledged, order.cancelled, order.item.cancelled, order.shipment.created, order.completed, order.held, order.unheld, order.payment_status.changed, order.comment.added, order.return.registered, order.return.received, order.return.completed and order.return.rejected. |  |
| actor | string | Filter to the events one principal caused. Only order.placed and order.requested carry an actor, so this filters to those two names by construction. Who caused it: the resolved contact id of the acting principal. Only order.placed and order.requested carry one today — every other row is null — so filtering on it filters to those two names. The database constrains nothing here (the column is text); the uuid shape is what this app WRITES, which is also why no example is published: no id an app invents names a row a tenant holds. |  |
| created_at | string | Exact timestamp equality — this API has no range filter. To bound a period, sort with `order` and page. When it happened. The trail comes back oldest first, which is the order a human reads a history in. |  |
| limit | integer | Page size (default 50, max 200). A larger value is clamped to 200 rather than refused. |  |
| offset | integer | Row offset for pagination (default 0). |  |
| order | string | Sort by one column: 'column' | 'column.asc' | 'column.desc'. A bare column sorts ascending, the direction is lower case, and the column has to exist — the value reaches the data plane verbatim and anything else is a 400. |  |


```http request
POST https://api.revenexx.com/v1/orders/{id}/hold
```

** Stop an order from moving while a human sorts something out — a credit check, a suspected fraud, an address nobody can deliver to. It sets a flag with the reason attached, and the flag is deliberately ORTHOGONAL to the lifecycle: the order keeps its status, its payment status and its quantities, and appears on a worklist as 'held' rather than being pushed into a state it will have to come back out of. How far the hold reaches is the tenant's setting on_hold_blocks: shipping only, shipping and cancellation (the credit-check case, where the order must move in neither direction), or nothing at all, which leaves the flag advisory. Holding an order twice is allowed and simply replaces the reason; releasing it is POST /orders/{id}/unhold. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The order id (uuid). This segment reaches a uuid column: an order NUMBER is not accepted here — filter GET /orders by ?number= to resolve one. |  |
| reason | string | Why the order is held, in the words the shipping guard quotes back. Null when it is not held — releasing a hold clears it. |  |


```http request
POST https://api.revenexx.com/v1/orders/{id}/items/cancel
```

** Take quantities off an order that is otherwise going ahead — three of the ten are discontinued, one line is out of stock and the customer would rather not wait. Each named quantity is booked onto its position as cancelled and guarded against the OPEN quantity (ordered − shipped − cancelled), so nothing already shipped can be cancelled away underneath a shipment. The order's fulfillment_status is re-derived afterwards, and when every position ends up fully cancelled the order itself moves to 'cancelled' — which is how this becomes a full cancel by arithmetic rather than by a second call. Positions are REQUIRED here, unlike on /ship and /return: cancelling an entire order by omitting a field is not something anybody should be able to do by accident; that is what POST /orders/{id}/cancel is for. Read GET /orders/{id}/shippable for the open quantity per position before calling. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The order id (uuid). This segment reaches a uuid column: an order NUMBER is not accepted here — filter GET /orders by ?number= to resolve one. |  |
| cancelled_by | string | Who cancelled, as the caller reported it — an operator, a desk, a system. Free text; this app does not resolve it against a user directory. |  |
| positions | array | The quantities to take off the order. Required here, unlike on /ship and /return: cancelling everything by default is not a thing anybody should be able to do by omission — that is what /cancel is for. |  |
| reason | string | Why it was cancelled, free text. Mandatory when the tenant sets cancel_requires_reason — for those merchants an unexplained cancellation is refused with a 400. |  |


```http request
POST https://api.revenexx.com/v1/orders/{id}/payment-status
```

** Payment is the one status dimension this app does not decide for itself: it is FED IN from whatever took the money — the payments app, a PSP webhook relayed by a workflow, or a finance clerk marking an invoice settled. This route writes that word onto the order and records the change as an order.payment_status.changed event carrying the previous value, so the trail shows the sequence and not just the current state. Optionally attach the payment_id of the transaction it came from. It takes no money, refunds none and validates nothing about the amount — it records a fact somebody else established, and any of the seven words may follow any other. The other half of auto_complete_on = 'payment': an order that has shipped in full is completed by this call when the status becomes 'paid'. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The order id (uuid). This segment reaches a uuid column: an order NUMBER is not accepted here — filter GET /orders by ?number= to resolve one. |  |
| payment_id | string | The reference into the payment system. MERGED into the order's payment snapshot under 'payment_id' — the rest of the snapshot is left alone — and carried in the order.payment_status.changed event. Omitted leaves the snapshot untouched. |  |
| status | string | The new value of the payment dimension. Whether the order is PAID, and the dimension this app does not decide: it is fed from outside through POST /orders/{id}/payment-status (the payments app or an ERP), and only seeded at place-time from payment.status. Orthogonal to the lifecycle — a completed order can still be open, and a paid one can still be pending. |  |


```http request
POST https://api.revenexx.com/v1/orders/{id}/return
```

** Open a return case: the customer has announced goods are coming back, and this is where that becomes a tracked thing with a return number of its own, drawn from the tenant's return range. Positions are guarded against what actually SHIPPED and is neither back nor already claimed by another open return, so two returns cannot claim the same pieces. Each position carries a `restock` flag saying whether the item is expected to be sellable again — recorded now, acted on only when the return completes. Omitting `positions` registers everything still returnable, the 'the customer sent the whole delivery back' case. Nothing is booked yet: quantity_returned stays where it is and the order does not move — the return starts as 'registered' and travels through receive and complete or reject. Allowed on a completed order, refused on a cancelled one. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The order id (uuid). This segment reaches a uuid column: an order NUMBER is not accepted here — filter GET /orders by ?number= to resolve one. |  |
| external_id | string | The key this return case has in the system that owns it — an ERP return order, an RMA portal's case handle. `number` beside it is the return number the customer writes on the parcel; this is what a write-back addresses. Unique per tenant where set. Null for a return registered here. Send it when the case was opened in an RMA portal or an ERP — that system then finds this return again by its own key. The three transitions below do not take it: a return is registered once, and its provenance is set there. |  |
| external_refs | object | Every OTHER system that knows this return, keyed by system name — a second ERP, a procurement platform, a portal. `external_id` is the leading system; this is the rest. Not a query parameter: a jsonb column is compared as a whole document, so look the row up by `external_id` and read this off the answer. |  |
| metadata | object | Free-form data for the caller — the returns portal's own reference. Stored and returned untouched. |  |
| positions | array | What is coming back. Omitted = every position with a returnable (shipped, not yet returned) quantity, in full. |  |
| reason | string | Why the goods are coming back, free text as the customer or the desk stated it — the sentence beside the code, not a replacement for it. Also what /reject stores when it is given no resolution out of the published set. |  |
| reason_code | string | Why the goods are coming back, as a code out of the set THIS TENANT keeps — GET /orders/return-reasons lists them. This is the field a report groups by; `reason` beside it is the sentence somebody wrote about this one return, and the two are separate because 'Damaged', 'damaged' and 'arrived broken' were one reason counted three times. Null on a return registered without one, which is allowed. There is no foreign key behind it: the registration refuses a code the tenant does not keep, and a code retired afterwards leaves the return carrying it rather than breaking it. Read the codes from GET /orders/return-reasons. Lowercased on the way in. A code this tenant does not keep is a 400 that names the ones it does; omit it and the return is registered without a code, which is allowed. Send `reason` beside it for the sentence — the two are not alternatives. |  |
| restock | boolean | The default restock flag for positions that carry none of their own — and the only way to say "put it all back into stock" when the positions are defaulted. It does not restock anything itself: it decides what the completion REPORTS for the orchestrator's inventories.restock call. |  |
| source_data | object | What the source said about this row, kept as it said it: `{"system": …, "etag": …, "raw": {…}}`. The `etag` is what a write-back has to send back in `If-Match`, and there is nowhere else to keep it between two runs. `raw` holds the source fields this app does not model, so they survive a round trip instead of being lost on the first edit. Nothing here reads it, and no transition clears it. |  |
| source_synced_at | string | When this return was last confirmed against its source. What a delta run asks for changes since, and what tells an operator that a feed has gone quiet — an edit made here does not touch it, because it says when the SOURCE was last seen, not when the row changed. Null for a return no source owns. |  |


```http request
POST https://api.revenexx.com/v1/orders/{id}/returns/{rid}/complete
```

** Accept the return and close the case: the goods are taken back on the order's books and the settlement is recorded as one of the published words — refunded, credited, replaced and so on. This is the step a refund or a credit note hangs off, and the only step that moves quantity_returned. It does not refund money and does not put stock back itself: the answer's 'restock' array names what the orchestrator should hand to inventories.restock, and payment travels through /payment-status. Once completed the return is final — receive, complete and reject all refuse afterwards. The goods accounting moves here and nowhere else: quantity_returned is booked onto each position, completed_at is stamped by the SERVER, and positions flagged restock are reported back in the answer's 'restock' array for the orchestrator's inventories.restock call. 'resolution' is validated against the settlement words this app publishes (refund, partial_refund, replacement, repair, store_credit — see GET /orders/vocabularies/return-resolutions); anything else is refused rather than stored as a word no reader knows. It is checked before the positions are booked, so a rejected value leaves nothing behind. The refunds of all completed returns of one order together never exceed its grand_total: a refund_total that would cross it is 422 refund_exceeds_order, checked before anything is booked. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The order id (uuid). This segment reaches a uuid column: an order NUMBER is not accepted here — filter GET /orders by ?number= to resolve one. |  |
| rid | string | **Required** The return id (uuid). It must belong to the order in {id} — a return of another order is a 404, not a cross-order write. |  |
| resolution | string | How the return was settled. Omitted = settled without recording how. |  |


```http request
POST https://api.revenexx.com/v1/orders/{id}/returns/{rid}/receive
```

** The goods-in scan: the parcel is physically back, warehouse staff have it in their hands, and nobody has decided yet whether the customer gets their money. It moves the return from 'registered' to 'received' and stamps received_at, which is what separates 'announced' from 'here' on a returns worklist. It books nothing — quantity_returned is written by the complete step and by nothing else — so a return that arrives damaged can still be rejected afterwards. Only a registered return can be received; a second call, or one against a settled return, is a 422. This step is skippable: a return may be completed straight from 'registered' where a merchant does not scan goods in. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The order id (uuid). This segment reaches a uuid column: an order NUMBER is not accepted here — filter GET /orders by ?number= to resolve one. |  |
| rid | string | **Required** The return id (uuid). It must belong to the order in {id} — a return of another order is a 404, not a cross-order write. |  |
| data | object | Request body |  |


```http request
POST https://api.revenexx.com/v1/orders/{id}/returns/{rid}/reject
```

** Close the case against the customer: the goods came back used, outside the window, or were never covered in the first place. The return moves to 'rejected', rejected_at is stamped, and the refusal is recorded either as one of the published refusal words or as a sentence somebody wrote about this one return. The order is untouched — the quantities still count as shipped and not returned, which is the point: a rejected return must leave the books exactly as they were. Rejection is final, and it says nothing about where the physical goods go. Nothing is booked onto the positions. 'resolution' is validated against the refusal words (wear_and_tear, not_returnable); 'reason' stays free text — a sentence about this one return rather than a value out of a set — and is what is stored when no resolution is named. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The order id (uuid). This segment reaches a uuid column: an order NUMBER is not accepted here — filter GET /orders by ?number= to resolve one. |  |
| rid | string | **Required** The return id (uuid). It must belong to the order in {id} — a return of another order is a 404, not a cross-order write. |  |
| reason | string | Free-text fallback for 'resolution' — a sentence about this one return, not a value out of the set. |  |
| resolution | string | Why the return was refused. |  |


```http request
POST https://api.revenexx.com/v1/orders/{id}/ship
```

** Book goods out: which positions and how much of each, with the carrier and the tracking code that go to the customer. It draws a delivery-note number from the tenant's delivery range, books quantity_shipped onto every named position, re-derives the order's fulfillment_status from the arithmetic (unfulfilled → partial → fulfilled) and emits order.shipment.created. Omitting `positions` means everything still open, in full, which is the ordinary 'send the rest' case and the only one a UI without a line editor can express; the answer always names the quantities that actually went out. It does not print a label, buy postage or notify anybody — a shipping workflow reacts to the event. Whether a full shipment CLOSES the order is the tenant's call (setting auto_complete_on): 'shipment' completes it here, 'payment' leaves it in_fulfillment until payment_status becomes paid, 'manual' waits for orders.complete. The order.completed event follows the order, so it is only emitted when the order actually completed. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The order id (uuid). This segment reaches a uuid column: an order NUMBER is not accepted here — filter GET /orders by ?number= to resolve one. |  |
| carrier | string | Who is carrying it, in the merchant's own words. Free text — this app neither validates it nor knows the carrier's API. |  |
| external_id | string | The key this shipment has in the system that issued it — the ERP's or the warehouse's handle on the delivery. `number` beside it is the DELIVERY NOTE number, which is what a customer asking after their parcel quotes; this is what a write-back addresses. Unique per tenant where set. Null for a shipment booked here. Send it when the delivery was issued elsewhere — `number` then carries that system's delivery-note number and this carries its key. A key another shipment of this tenant holds is a 409. |  |
| external_refs | object | Every OTHER system that knows this shipment, keyed by system name — a second ERP, a procurement platform, a portal. `external_id` is the leading system; this is the rest. Not a query parameter: a jsonb column is compared as a whole document, so look the row up by `external_id` and read this off the answer. |  |
| metadata | object | Free-form data for the caller — the warehouse system's own reference for this handover. Stored and returned untouched. |  |
| number | string | The DELIVERY NOTE number — drawn from the tenant's delivery range, unique per tenant, and a different series from the order number. A caller may supply its own when the number is issued by the warehouse system instead. Drawn from the 'delivery' range when omitted; supply one only when the number is issued elsewhere. |  |
| positions | array | What this shipment carries. Omitted = every position with an open quantity, in full. GET /orders/{id}/shippable answers exactly the budget each one is guarded against. |  |
| shipped_at | string | When the goods actually left. Defaults to now, and a caller may backdate it — a shipment booked on Monday for a Friday handover says Friday. |  |
| source_data | object | What the source said about this row, kept as it said it: `{"system": …, "etag": …, "raw": {…}}`. The `etag` is what a write-back has to send back in `If-Match`, and there is nowhere else to keep it between two runs. `raw` holds the source fields this app does not model, so they survive a round trip instead of being lost on the first edit. Nothing here reads it, and no transition clears it. |  |
| source_synced_at | string | When this shipment was last confirmed against its source. What a delta run asks for changes since, and what tells an operator that a feed has gone quiet — an edit made here does not touch it, because it says when the SOURCE was last seen, not when the row changed. Null for a shipment no source owns. |  |
| tracking_code | string | The consignment number the carrier issued. Free text: every carrier formats it differently and this app stores whatever it is given. |  |
| tracking_url | string | Where a human can follow the parcel. Supplied by the caller — this app does not build it, because only the caller knows the carrier's tracking address. |  |


```http request
GET https://api.revenexx.com/v1/orders/{id}/shippable
```

** What a shipment dialog needs before it can offer anything: the open quantity per position, and one boolean saying whether a shipment would be accepted at all. Reach for it to fill a picking screen or to decide whether a 'create shipment' button is enabled, instead of subtracting the quantities client-side. It changes nothing and books nothing — it is the question POST /orders/{id}/ship answers with an action. The read half of orders.ship. The open quantity per position and the two guards (cancelled/completed order, hold) are the SAME code the ship route runs, so what this answers and what that accepts cannot drift — a client subtracting the quantities itself eventually offers a shipment the server refuses, or one it should have refused. 'shippable' is false with a 'blocked_reason' when the order is held, cancelled, completed, still pending approval or has nothing open. A discount placed as a position of its own is money, not goods, and is not listed. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The order id (uuid). This segment reaches a uuid column: an order NUMBER is not accepted here — filter GET /orders by ?number= to resolve one. |  |


```http request
POST https://api.revenexx.com/v1/orders/{id}/unhold
```

** The whole of the release: the flag comes off, the reason is cleared, and an order.unheld event says the order may move again. Whatever the hold was blocking — shipping, and cancellation on tenants configured that way — is accepted from this call on. It restores nothing else and skips nothing: the order continues from exactly the status and quantities it had when it was held, and any shipping that was due meanwhile still has to be done by hand. An order that is not on hold answers 422 rather than pretending to release one, so this is safe to give to a worklist and not to a loop that calls it blindly. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The order id (uuid). This segment reaches a uuid column: an order NUMBER is not accepted here — filter GET /orders by ?number= to resolve one. |  |
| data | object | Request body |  |

