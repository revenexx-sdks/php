# InventoriesStock Service


```http request
POST https://api.revenexx.com/v1/inventories/adjust
```

** The batch correction route — a stocktake, breakage, shrinkage — and the manual way `on_hand` is ever put right. Quantities are SIGNED: a positive one adds to the balance, a negative one takes it away, and neither is written onto the row directly. Each item is booked into the movements ledger as an `adjustment` and the balance follows, so a correction leaves a record of who changed what and why instead of a number that silently differs from yesterday's. A batch is all-or-nothing: every item is judged against both guards before the first is booked, and a refusal books nothing. An item is named once with its whole correction; two lines for one item are refused. A reason is mandatory unless movement_reason_required is 'none'. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| items | array | The corrections, at most 200 in one call — a stocktake, breakage, shrinkage. Quantities are SIGNED deltas, not new balances. |  |
| location_code | string | Which location is being corrected. Omitted, the `default_location_code` setting decides. A correction is per location: the same SKU in two warehouses is two corrections. |  |
| product_id | string | Inline single-item form: the product to move, instead of a one-entry `items` array. The two forms are equivalent — nothing downstream knows which arrived. |  |
| quantity | number | Inline single-item form: the SIGNED correction (negative writes stock off, positive finds it). Non-zero. |  |
| reason | string | Why the stock is being corrected — this is the audit trail a stocktake leaves behind. Owed unless `movement_reason_required` is 'none' (its default, 'adjustments', asks for one exactly here); missing where it is owed, the call is 400. |  |
| sku | string | Inline single-item form: the article number to move (instead of `product_id`). |  |


```http request
POST https://api.revenexx.com/v1/inventories/availability
```

** THE stock call of this app, and a batch one: name any number of items and each comes back with `on_hand`, `reserved` and the derived `available` (their difference, computed on read and stored nowhere), summed across the locations in scope and broken down per location, plus `orderable` — whether this much of it can be promised at this moment. An item this app has never seen is NOT an error: it comes back tracked:false, and the storefront decides whether an untracked item sells freely. It answers the two facts a buyer would otherwise telephone sales about, per location and rolled up for the item: `expected_at`, when it is due back, and `availability_code`, what the source system says about it as one of the codes this tenant keeps — and `orderable` weighs that code's `orderable` policy as well as the quantity, with `unorderable_reason` saying which of the two said no. It is also the most customised surface this product has in the field. A tenant whose stock really lives in an ERP — SAP live stock is the ordinary case, not the exotic one — replaces exactly this one capability, 1:1, with a custom app through the gateway's capability override, while every other route here keeps doing the stock-keeping CRUD unchanged. That is why the request and response shapes below read as a contract to be implemented rather than as an implementation detail: whatever ends up answering this path has to answer in these terms, these six fields included. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| items | array | The items to check, at most 200 in one call. A cart, a category page, a feed row — one call answers them all, which is why this route is the batch one. |  |
| location_code | string | Restrict the check to ONE location, by its code — the stock a click-and-collect store can promise today. Omitted, every ENABLED location is summed; a disabled one is never counted either way, so a disabled location's code answers every item untracked. A code no location carries is answered 404 `unknown_location`. |  |
| product_id | string | Inline single-item form: the product to move, instead of a one-entry `items` array. The two forms are equivalent — nothing downstream knows which arrived. |  |
| quantity | number | Inline single-item form: how many are wanted, above zero (default 1). It decides `orderable` and nothing else. |  |
| sku | string | Inline single-item form: the article number to move (instead of `product_id`). |  |


```http request
GET https://api.revenexx.com/v1/inventories/availability-states
```

** An availability state is one of the codes THIS TENANT keeps for what a source system says about an article: a stock row stores one in `availability_code`, and the row's `expected_at` says when the article is due back. The set is a table rather than a fixed list because the number a source system delivers for availability is that system's number and what it means is the merchant's to state. Each value carries `orderable` — whether an item in this state may still be ordered — which is the fact a storefront needs in order to offer or withhold the order button without keeping a list of its own. This is the operator's view of the set — the rows, filterable and paged, in whatever order you ask for. A CLIENT that only wants to render a code does not want this route: GET /inventories/vocabularies/availability-states answers the same set keyed by code, ordered by `position`, with the titles per language and the `orderable` flag already merged, and it is the shape every other vocabulary in this platform is read in. A tenant who has never been seeded reads an EMPTY list here, because the seed runs on install and on POST /inventories/locations/defaults; the vocabulary route seeds on an empty read and this one does not. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| limit | integer | Page size (default 50, max 200). A larger value is clamped rather than refused. |  |
| offset | integer | Row offset for pagination (default 0). Page with `page.total` and `page.hasMore`. |  |
| order | string | Sort by one column: 'column' | 'column.asc' | 'column.desc' — a bare column sorts ascending. The column has to be one this entity has; anything else is refused with 400. |  |
| id | string | Exact-match filter on `id`. The row's own id, generated by the database. |  |
| code | string | Exact-match filter on `code`. Unique per tenant, so this resolves a code a stock row carries without paging the whole set. |  |
| title | string | Exact-match filter on `title`. What a person reads for this state, in the tenant's working language. |  |
| description | string | Exact-match filter on `description`. One sentence a screen can put under the title, in the tenant's working language — what this state means for a buyer looking at the article. |  |
| labels | string | Exact-match filter on `labels`. The title per language tag, for a shop that has to render it in the reader's language. The WHOLE jsonb document is compared, serialized as JSON — this is equality, not a key lookup or a containment query, and a value that does not parse is answered 400. |  |
| descriptions | string | Exact-match filter on `descriptions`. The description per language tag, on the same rule as `labels`: the tag if it is there, else `description`. The WHOLE jsonb document is compared, serialized as JSON — this is equality, not a key lookup or a containment query, and a value that does not parse is answered 400. |  |
| orderable | boolean | Exact-match filter on `orderable`. The states a shop keeps selling in. `false` is the subset that takes the order button away. |  |
| is_default | boolean | Exact-match filter on `is_default`. Whether this is the state an import falls back to when a source value maps to none of the others. |  |
| tone | string | Exact-match filter on `tone`. Semantic badge colour for this state — what it MEANS, not what it looks like: 'success' for sellable, 'info' for on its way, 'warning' for not right now, 'danger' for gone for good, 'neutral' for anything else. |  |
| position | integer | Exact-match filter on `position`. Where this state sits in a select or a legend: the set is served ASCENDING, so a lower number comes first, and states that tie fall back to their code. |  |
| is_system | boolean | Exact-match filter on `is_system`. `true` is the four this app seeded, `false` the ones this tenant added. |  |
| created_at | string | Exact-match filter on `created_at`. When the row was created. |  |
| updated_at | string | Exact-match filter on `updated_at`. When this state was last edited — a rename, a re-tone, a corrected `orderable`.. |  |


```http request
POST https://api.revenexx.com/v1/inventories/availability-states
```

** An availability state is one of the codes THIS TENANT keeps for what a source system says about an article: a stock row stores one in `availability_code`, and the row's `expected_at` says when the article is due back. The set is a table rather than a fixed list because the number a source system delivers for availability is that system's number and what it means is the merchant's to state. Each value carries `orderable` — whether an item in this state may still be ordered — which is the fact a storefront needs in order to offer or withhold the order button without keeping a list of its own. Reach for this when a source system distinguishes something the four seeded states do not — a partial delivery, a made-to-order line, a stock held for one customer. A create cannot omit `code` and `title`; every other column is optional or defaulted by the database. Two rows of this tenant may not share `code` — that is the 409, and it answers an update that moves a row onto a sibling's value exactly as it answers a second insert. Two fields decide what the state DOES rather than how it reads: `orderable`, which defaults to true and is what a shop acts on, and `code`, which is what a stock row stores and should be treated as permanent — nothing points at it, so renaming it later leaves every row carrying the old one. Creating a state changes nothing on its own: a stock row has to carry its code before it means anything, and the mapping from a source system's own values onto these codes is made where the import runs. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| code | string | The value a stock row's `availability_code` stores, and the key the vocabulary serves it under. Lowercase letters, digits, '-' and '_' (CHECK `code ~ '^[a-z][a-z0-9_-]*$'`), unique per tenant. Treat it as permanent: nothing in the database points at it, so renaming it here leaves every stock row carrying the old one, and the honest move is a new code plus an update of the rows that name it. |  |
| description | string | One sentence a screen can put under the title, in the tenant's working language — what this state means for a buyer looking at the article. Optional; a state with none is served with a null description rather than an invented one. |  |
| descriptions | object | The description per language tag, on the same rule as `labels`: the tag if it is there, else `description`. Keys are language tags, values plain strings. |  |
| is_default | boolean | Whether this is the state an import falls back to when a source value maps to none of the others. Nothing in this app reads it — the fallback happens where the mapping happens — and it is served on the vocabulary so an importer can find it here instead of keeping a convention of its own. No seeded state carries it: which state an unmapped value means is the tenant's to say. Defaults to false, and nothing enforces that at most one state carries it. |  |
| is_system | boolean | True for the four states this app seeds on install, false for anything the tenant added. It means "we put it there" and nothing more: a seeded state may be renamed, re-toned, reordered, corrected or deleted exactly like an added one, and the flag is there so a screen can say where a value came from. Send false, or leave it out: it marks the states this app seeded, and setting it on your own would only make one harder to tell apart. |  |
| labels | object | The title per language tag, for a shop that has to render it in the reader's language. Falls back to `title` when a tag is missing. Keys are language tags, values plain strings. |  |
| orderable | boolean | Whether an item in this state may still be ordered — the reason this set is a table and not a list of names. A code on its own tells a storefront nothing it can act on: it has to be matched against a list the theme keeps, and that list is wrong the first time a merchant adds a code. This flag travels with the value, so a shop asks the vocabulary whether to offer the order button instead of asking itself. POST /inventories/availability reads it: a state that says false takes the order button away from every item the governing row puts in that state, whatever the quantity says, and that call reports it as `unorderable_reason: 'state'`. It stays the merchant's policy about the STATE — it moves no stock and books no movement, and the per-location `state_orderable` in that answer is this flag, held apart from the verdict. Defaults to true, so a state created without an answer is one a shop keeps selling in — set it deliberately. |  |
| position | integer | Where this state sits in a select or a legend: the set is served ASCENDING, so a lower number comes first, and states that tie fall back to their code. It is presentation only — nothing sorts stock by it. Defaults to 0. |  |
| title | string | What a person reads for this state, in the tenant's working language. At least one character (CHECK `length(title) > 0`). A value nobody titled is served with its own code made readable, so this is a better label rather than the only one. |  |
| tone | string | Semantic badge colour for this state — what it MEANS, not what it looks like: 'success' for sellable, 'info' for on its way, 'warning' for not right now, 'danger' for gone for good, 'neutral' for anything else. The client owns the palette. One of five (CHECK `tone in ('neutral', 'info', 'success', 'warning', 'danger')`), defaulting to 'neutral'. Defaults to 'neutral'. |  |


```http request
DELETE https://api.revenexx.com/v1/inventories/availability-states/{id}
```

** Removes one of the tenant's availability codes. An availability state is one of the codes THIS TENANT keeps for what a source system says about an article: a stock row stores one in `availability_code`, and the row's `expected_at` says when the article is due back. The set is a table rather than a fixed list because the number a source system delivers for availability is that system's number and what it means is the merchant's to state. Each value carries `orderable` — whether an item in this state may still be ordered — which is the fact a storefront needs in order to offer or withhold the order button without keeping a list of its own. Nothing points at it by foreign key, so the database takes nothing else with it. Read that carefully before calling it, because the thing that is NOT checked is the thing that matters: a stock row stores the CODE and not this id, so nothing refuses the delete while rows still carry it, and those rows keep a code the vocabulary no longer resolves. The vocabulary is `closed`, so a client reads such a value as stale data rather than as a missing label — but it reads no `orderable` for it either, and a shop that was withholding the order button on that state stops knowing to. Move the rows onto another code first (PUT /inventories/stock/{id}), or leave the state in place and give it a `title` that says it is retired. Deleting all of them is undone by the next read of GET /inventories/vocabularies/availability-states, which seeds the shipped set back into an empty table. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id of the availability state to remove, as the list answered it. |  |


```http request
GET https://api.revenexx.com/v1/inventories/availability-states/{id}
```

** An availability state is one of the codes THIS TENANT keeps for what a source system says about an article: a stock row stores one in `availability_code`, and the row's `expected_at` says when the article is due back. The set is a table rather than a fixed list because the number a source system delivers for availability is that system's number and what it means is the merchant's to state. Each value carries `orderable` — whether an item in this state may still be ordered — which is the fact a storefront needs in order to offer or withhold the order button without keeping a list of its own. This reads one of them by ROW ID, which is what an editor holds after listing the set and is not what anything else stores: a stock row carries the CODE. A caller holding a code cannot use this route — filter the collection with `?code=`, or read GET /inventories/vocabularies/availability-states, which is keyed the way the rest of the platform refers to these values. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id of the availability state, as the list answered it. Not the code — a stock row carries the code, and this route does not accept one. |  |


```http request
PUT https://api.revenexx.com/v1/inventories/availability-states/{id}
```

** Partial update: send the fields that change. An availability state is one of the codes THIS TENANT keeps for what a source system says about an article: a stock row stores one in `availability_code`, and the row's `expected_at` says when the article is due back. The set is a table rather than a fixed list because the number a source system delivers for availability is that system's number and what it means is the merchant's to state. Each value carries `orderable` — whether an item in this state may still be ordered — which is the fact a storefront needs in order to offer or withhold the order button without keeping a list of its own. The safe edits are the readable ones — `title`, `labels`, `description`, `descriptions`, `tone`, `position` — and they reach every screen at once, which is the point of the set living here. `orderable` is the consequential one: flipping it to false takes the order button away from every article in this state on the next read, with no stock row touched and no movement booked. `code` is the one to leave alone — a stock row stores the code, nothing in the database points at it, so moving it orphans every row that names the old value. Two rows of this tenant may not share `code` — that is the 409, and it answers an update that moves a row onto a sibling's value exactly as it answers a second insert. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id of the availability state to change, as the list answered it. |  |
| code | string | The value a stock row's `availability_code` stores, and the key the vocabulary serves it under. Lowercase letters, digits, '-' and '_' (CHECK `code ~ '^[a-z][a-z0-9_-]*$'`), unique per tenant. Treat it as permanent: nothing in the database points at it, so renaming it here leaves every stock row carrying the old one, and the honest move is a new code plus an update of the rows that name it. |  |
| description | string | One sentence a screen can put under the title, in the tenant's working language — what this state means for a buyer looking at the article. Optional; a state with none is served with a null description rather than an invented one. |  |
| descriptions | object | The description per language tag, on the same rule as `labels`: the tag if it is there, else `description`. Keys are language tags, values plain strings. |  |
| is_default | boolean | Whether this is the state an import falls back to when a source value maps to none of the others. Nothing in this app reads it — the fallback happens where the mapping happens — and it is served on the vocabulary so an importer can find it here instead of keeping a convention of its own. No seeded state carries it: which state an unmapped value means is the tenant's to say. Defaults to false, and nothing enforces that at most one state carries it. |  |
| is_system | boolean | True for the four states this app seeds on install, false for anything the tenant added. It means "we put it there" and nothing more: a seeded state may be renamed, re-toned, reordered, corrected or deleted exactly like an added one, and the flag is there so a screen can say where a value came from. Send false, or leave it out: it marks the states this app seeded, and setting it on your own would only make one harder to tell apart. |  |
| labels | object | The title per language tag, for a shop that has to render it in the reader's language. Falls back to `title` when a tag is missing. Keys are language tags, values plain strings. |  |
| orderable | boolean | Whether an item in this state may still be ordered — the reason this set is a table and not a list of names. A code on its own tells a storefront nothing it can act on: it has to be matched against a list the theme keeps, and that list is wrong the first time a merchant adds a code. This flag travels with the value, so a shop asks the vocabulary whether to offer the order button instead of asking itself. POST /inventories/availability reads it: a state that says false takes the order button away from every item the governing row puts in that state, whatever the quantity says, and that call reports it as `unorderable_reason: 'state'`. It stays the merchant's policy about the STATE — it moves no stock and books no movement, and the per-location `state_orderable` in that answer is this flag, held apart from the verdict. Defaults to true, so a state created without an answer is one a shop keeps selling in — set it deliberately. |  |
| position | integer | Where this state sits in a select or a legend: the set is served ASCENDING, so a lower number comes first, and states that tie fall back to their code. It is presentation only — nothing sorts stock by it. Defaults to 0. |  |
| title | string | What a person reads for this state, in the tenant's working language. At least one character (CHECK `length(title) > 0`). A value nobody titled is served with its own code made readable, so this is a better label rather than the only one. |  |
| tone | string | Semantic badge colour for this state — what it MEANS, not what it looks like: 'success' for sellable, 'info' for on its way, 'warning' for not right now, 'danger' for gone for good, 'neutral' for anything else. The client owns the palette. One of five (CHECK `tone in ('neutral', 'info', 'success', 'warning', 'danger')`), defaulting to 'neutral'. Defaults to 'neutral'. |  |


```http request
GET https://api.revenexx.com/v1/inventories/movements
```

** The movements ledger, read end to end. Every stock change this app has ever made is a booking row in it — a receipt, a correction, a hold, a release, a shipment, a return — which is what lets one list be an audit trail and an event feed at the same time: these are the rows the `stock_movement.created` event carries, so a consumer that missed an event catches up by paging here. Append-only: the ledger has no update and no delete, because a correction is another booking. `order=created_at.desc` is the feed order. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| limit | integer | Page size (default 50, max 200). A larger value is clamped rather than refused. |  |
| offset | integer | Row offset for pagination (default 0). Page with `page.total` and `page.hasMore`. |  |
| order | string | Sort by one column: 'column' | 'column.asc' | 'column.desc' — a bare column sorts ascending. The column has to be one this entity has; anything else is refused with 400. |  |
| id | string | Exact-match filter on `id`. The row's own id, generated by the database. |  |
| location_id | string | Exact-match filter on `location_id`. Every booking at one location. |  |
| product_id | string | Exact-match filter on `product_id`. The product this booking is for, copied from the call. |  |
| sku | string | Exact-match filter on `sku`. Every booking for one SKU. |  |
| type | string | Exact-match filter on `type`. What the booking records. The permitted set is the CHECK constraint — GET /inventories/vocabularies/movement-types has the words for it. |  |
| quantity | number | Exact-match filter on `quantity`. Exact signed quantity, which is a needle-in-a-haystack filter rather than a range: `?quantity=-5` finds the bookings that moved exactly five out. |  |
| order_ref | string | Exact-match filter on `order_ref`. One order's whole stock history: its reserve, release, shipment and restock bookings. |  |
| reason | string | Exact-match filter on `reason`. Why the booking happened, in a person's words — a delivery note number, 'stocktake 2026-03', 'damaged in transit'. |  |
| metadata | string | Exact-match filter on `metadata`. Free-form, and two keys this app writes itself: `backordered` — on a `reserve` booking, how much of the hold was not covered by stock on hand; `shortfall` — on a `shipment` booking, how much was committed that was not physically there (`on_hand` floors at 0, so the difference is recorded here instead of vanishing). The WHOLE jsonb document is compared, serialized as JSON — this is equality, not a key lookup or a containment query, and a value that does not parse is answered 400. |  |
| created_at | string | Exact-match filter on `created_at`. Exact timestamp. There is no range filter on the ledger — page it with `?order=created_at.desc` instead. |  |


```http request
GET https://api.revenexx.com/v1/inventories/movements/{id}
```

** A movement is one booking row in the ledger, and the ledger is append-only: there is no update and no delete, because a correction is another booking. `quantity` is SIGNED and its sign follows the `type` — a receipt books +5 and the reserve that promises those goods books −5, even though the reservation it created carries +5 as a positive hold. GET /inventories/vocabularies/movement-types is the list of types with the words for them. A booking says what changed, not what the balance became: it carries no running total, so the row's story is read by listing the ledger for that location and item rather than by fetching one id. `location_id` is a plain uuid and not a foreign key, so a booking outlives the location it was made at and this route will happily hand back one whose location no longer resolves — that is the audit trail doing its job, not a broken row. Fixing a wrong booking is another booking (POST /inventories/adjust); nothing here can be edited or removed. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The ledger booking. |  |


```http request
POST https://api.revenexx.com/v1/inventories/receive
```

** Books a delivery into the receiving location (the caller's location_code, else the default_location_code setting), creating the stock row if the item is new. A reason is optional unless movement_reason_required is 'all'. Takes a batch or one item inline. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| items | array | The goods that arrived, at most 200 in one call — a delivery, a production batch, an opening balance. |  |
| location_code | string | Which location took the delivery. Omitted, the `default_location_code` setting decides; a code no location carries is answered 400 rather than booked somewhere else. |  |
| product_id | string | Inline single-item form: the product to move, instead of a one-entry `items` array. The two forms are equivalent — nothing downstream knows which arrived. |  |
| quantity | number | Inline single-item form: how many arrived. Positive. |  |
| reason | string | What the ledger should record about this receipt — a delivery note number, a production order. Owed only when `movement_reason_required` is 'all'; the contract does not require it, because whether it is owed is the tenant's setting and not this route's rule. |  |
| sku | string | Inline single-item form: the article number to move (instead of `product_id`). |  |


```http request
GET https://api.revenexx.com/v1/inventories/reorder-alerts
```

** The replenishment worklist: the stock rows that have run down far enough that somebody has to order more, in one list rather than as a query a caller has to build. Computed on read, so it is never stale: a row alerts when available (on_hand − reserved) has fallen to or below its own reorder_point, or the reorder_point_default setting when it carries none. A point of 0 never alerts. Answers enabled:false with an empty list when reorder_alert_enabled is off — a tenant replenishing from an ERP should not be told twice. **


```http request
POST https://api.revenexx.com/v1/inventories/reorder-alerts/scan
```

** Publishes `stock_level.low` on the event bus for every row GET /inventories/reorder-alerts currently lists, so replenishment can be driven by a subscriber instead of by somebody refreshing that page. Also runs hourly as the `reorder-scan` schedule; this route is for driving it on demand. The event id is derived from the stock row and the day, so a re-run — a second click, a retried cron tick — publishes nothing new and returns the ids the first run produced. Nothing is written to the app's own data: this reads the same figures the alerts list computes and hands them to the bus. Answers enabled:false without publishing when reorder_alert_enabled is off. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| data | object | Request body |  |


```http request
POST https://api.revenexx.com/v1/inventories/restock
```

** Whether a return rejoins sellable stock follows restock_on_return_default, overridable per call with 'restock'. When the answer is no the response says restocked:false and nothing moves — there is no movement to book, because no stock moved. That branch is why this route answers 200 and its sibling `receive` answers 201: a restock may legitimately create nothing. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| items | array | The goods that came back, at most 200 in one call. Whether they rejoin sellable stock is `restock`, not this list. |  |
| location_code | string | Where the goods came back to — a returns warehouse is a location like any other. Omitted, the `default_location_code` setting decides. |  |
| order_ref | string | The order the goods came back from. It is written onto the ledger booking, so the return shows up in that order's stock history next to its reserve and shipment — no reservation is touched by it. |  |
| product_id | string | Inline single-item form: the product to move, instead of a one-entry `items` array. The two forms are equivalent — nothing downstream knows which arrived. |  |
| quantity | number | Inline single-item form: how many came back. Positive. |  |
| reason | string | Why the goods came back — 'wrong size', 'damaged on arrival'. Owed only when `movement_reason_required` is 'all'. |  |
| restock | boolean | Do these goods rejoin SELLABLE stock? A merchant decision, not a fact: apparel usually restocks, hygiene articles never do, many merchants inspect first. Omit it to follow the `restock_on_return_default` setting. `false` answers `restocked: false`, moves nothing and books NOTHING — there is no movement to write, because no stock moved, and that is the branch that makes this route a 200 while its sibling `receive` is a 201. |  |
| sku | string | Inline single-item form: the article number to move (instead of `product_id`). |  |


```http request
GET https://api.revenexx.com/v1/inventories/stock
```

** A stock level is ONE item at ONE location, and it carries two numbers, neither of which is the sellable one: `on_hand` is what is physically there INCLUDING everything already promised, and `reserved` is what has been promised — it never reduces `on_hand`. What may still be sold is their difference, and it is derived on read and never stored, so there is no `available` column to read, filter or order by. This is the operator's view — the whole book, filtered by location or by item — not the shop's: a storefront asking "can I sell five of this" wants POST /inventories/availability, which sums an item across locations and answers `orderable` instead of leaving the caller to subtract. Two things this list will not do: it has no range filters, so "everything running low" is GET /inventories/reorder-alerts and not a query here; and it does not promise one row per item per location — no unique index enforces that. POST /inventories/stock refuses a duplicate with a 409, but that is a check and not a constraint, so a row written past it, or one that predates the guard, still splits an item's balance in two, and the write routes find and update whichever of them the database returns first. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| limit | integer | Page size (default 50, max 200). A larger value is clamped rather than refused. |  |
| offset | integer | Row offset for pagination (default 0). Page with `page.total` and `page.hasMore`. |  |
| order | string | Sort by one column: 'column' | 'column.asc' | 'column.desc' — a bare column sorts ascending. The column has to be one this entity has; anything else is refused with 400. |  |
| id | string | Exact-match filter on `id`. The row's own id, generated by the database. |  |
| location_id | string | Exact-match filter on `location_id`. The rows held at one location. An id no location carries is an empty page, not an error. |  |
| product_id | string | Exact-match filter on `product_id`. The rows tracking one product, across every location. |  |
| sku | string | Exact-match filter on `sku`. The rows tracking one SKU — the identity used when an item has no product id. |  |
| on_hand | number | Exact-match filter on `on_hand`. Exact balance, which is rarely what a reader wants: `?on_hand=0` finds the rows that are empty. There is no range filter here — GET /inventories/reorder-alerts is the "running low" question. |  |
| reserved | number | Exact-match filter on `reserved`. Exact reserved quantity. `?reserved=0` finds the rows nothing is holding. |  |
| reorder_point | number | Exact-match filter on `reorder_point`. The available quantity at or below which this row belongs on the replenishment worklist (GET /inventories/reorder-alerts). |  |
| expected_at | string | Exact-match filter on `expected_at`. When this item is expected back in stock at this location — a DATE, not a timestamp, because a supplier promises a day and not an hour. |  |
| availability_code | string | Exact-match filter on `availability_code`. What the source system says about this item's availability, as one of the codes THIS TENANT keeps (GET /inventories/availability-states, or GET /inventories/vocabularies/availability-states for the same set with its words and its `orderable` flag). |  |
| metadata | string | Exact-match filter on `metadata`. Free-form data the tenant keeps on this stock row, and ONE key this app reads: `backorder`. The WHOLE jsonb document is compared, serialized as JSON — this is equality, not a key lookup or a containment query, and a value that does not parse is answered 400. |  |
| external_id | string | Exact-match filter on `external_id`. The key this row has in the system that OWNS it. |  |
| external_refs | string | Exact-match filter on `external_refs`. Every OTHER system that knows this row, keyed by system name. The WHOLE jsonb document is compared, serialized as JSON — this is equality, not a key lookup or a containment query, and a value that does not parse is answered 400. |  |
| source_synced_at | string | Exact-match filter on `source_synced_at`. When this row was last confirmed against its source. |  |
| source_data | string | Exact-match filter on `source_data`. What the source said about this row, kept as it said it. The WHOLE jsonb document is compared, serialized as JSON — this is equality, not a key lookup or a containment query, and a value that does not parse is answered 400. |  |
| created_at | string | Exact-match filter on `created_at`. When the row was created. |  |
| updated_at | string | Exact-match filter on `updated_at`. When this row was last written. |  |


```http request
POST https://api.revenexx.com/v1/inventories/stock
```

** Registers an item at a location. The row is born at ZERO and never gets a balance from this call: `on_hand` and `reserved` are NOT accepted, because they are the running total of the movements ledger, so an opening balance is a receipt (POST /inventories/receive) rather than a field here, and the only thing that ever moves either number afterwards is another booking. What this row carries is its identity (location + `product_id`/`sku`), its `reorder_point` and its metadata. `location_id` is the only field a create cannot omit; every other column is optional or defaulted by the database. The one rule that is a CHECK rather than a column is that a row has to identify its item, so `product_id` or `sku` has to be there as well. Mostly you do not need this route at all — every stock call creates the row it is missing — and a second row for an item this location already tracks is answered 409: no unique index enforces one row per item per location, so that row would split the item's balance across two rows the write routes cannot tell apart, each of them updating whichever the database returns first. That guard is a check before the insert and not a constraint, so it closes a double click or a re-run import and does not claim to close a race between two simultaneous creates. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| availability_code | string | What the source system says about this item's availability, as one of the codes THIS TENANT keeps (GET /inventories/availability-states, or GET /inventories/vocabularies/availability-states for the same set with its words and its `orderable` flag). Deliberately not free text and deliberately not an enum of this app's: a code the tenant does not keep is refused with 400 naming the codes they do, and the set itself is a table they extend, because the number a source system delivers for this is that system's number and what it means is theirs to state. Null means nothing said so — which is not the same as unavailable, and a storefront reads `available` for that. A code this tenant does not keep is refused with 400 naming the ones it does, rather than stored as a value nothing can resolve. Null clears it. |  |
| expected_at | string | When this item is expected back in stock at this location — a DATE, not a timestamp, because a supplier promises a day and not an hour. It is the single most asked-for fact about an article that is out of stock, and the one a buyer telephones sales for: a storefront shows it on the article page next to the availability state. Nothing in this app COMPUTES it — no reorder alert, no allocation, no event: it is written by whoever knows (an ERP feed, or an operator on the stock row). It is read in one place, POST /inventories/availability, which answers it per location and rolls the earliest one up for an item that cannot be had now. A past date is stored as sent: it means the promise was missed, which is worth showing rather than hiding. Send it as YYYY-MM-DD; null clears it, which is what a receipt that arrived should do. |  |
| location_id | string | The location this balance is held at — a `locations` row of this tenant (GET /inventories/locations). There is ONE stock row per (location, item): the same SKU in three warehouses is three rows, and what a storefront shows is their sum (POST /inventories/availability). Deleting the location deletes its stock rows with it. It has to exist already (GET /inventories/locations); an id no location carries is answered 400 by the foreign key, not 404. |  |
| metadata | object | Free-form data the tenant keeps on this stock row, and ONE key this app reads: `backorder`. A literal boolean `true` there opts this item into backorders while `backorder_policy` is 'allow_per_sku' — anything else, including the string "true", does not, and the reservation is refused with 422. That is how a merchant backorders the supplier-stocked half of a catalogue without promising the rest. |  |
| product_id | string | The product this row tracks, as the products app knows it. A row tracks a `product_id` or a `sku` — the database insists on at least one (CHECK `product_id is not null or sku is not null`) — and matching is exact: a row keyed by SKU is not found by product id. |  |
| reorder_point | number | The available quantity at or below which this row belongs on the replenishment worklist (GET /inventories/reorder-alerts). Null falls back to the `reorder_point_default` setting, so replenishment works without a threshold per SKU; 0 never alerts, which is how one row opts out. |  |
| sku | string | The article number this row tracks when there is no product id, which is the normal case for an ERP-stocked catalogue. Exact match, and the identity every stock call may use instead of a uuid. |  |


```http request
DELETE https://api.revenexx.com/v1/inventories/stock/{id}
```

** Stops tracking one item at one location. A stock level is ONE item at ONE location, and it carries two numbers, neither of which is the sellable one: `on_hand` is what is physically there INCLUDING everything already promised, and `reserved` is what has been promised — it never reduces `on_hand`. What may still be sold is their difference, and it is derived on read and never stored, so there is no `available` column to read, filter or order by. A deleted balance is not recoverable: the ledger is the audit trail, not the source of truth, and nothing in this app ever replays it to rebuild a number — so the next receipt for the same item here creates a FRESH row at zero, standing next to movements that say otherwise. That used to be a trap a caller discovered afterwards. It is a stated property now, because the route REFUSES while the row still holds anything, and answers 409 with what it holds. The two things that block are the location delete's two, asked of one row. A reservation still `active` against this item at this location is the sharper one: /release and /commit look their stock row up by (location, item) on the very next call and would find nothing, so the hold would lower no `reserved` and /commit would book the whole quantity as a shortfall — orphaned immediately rather than eventually. `on_hand` above zero is the stronger one: deleting a LOCATION at least meant "close this warehouse" and took the balances as a side effect of the cascade, while this row IS the balance, so the delete can only ever mean "no longer tracked here" — true once the number is zero and a lie while it is not. POST /inventories/stock/{id}/adjust to zero is the operation that makes it true, and it BOOKS the movement, so the stock leaves through the ledger instead of vanishing with the row. Nothing points at it by foreign key, so the database takes nothing else with it. History therefore never blocks and is never deleted — the ledger is keyed on (location, item) and never on this id, so its bookings survive a row that is gone, BY DESIGN, exactly as they survive a location that is gone. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The stock row. |  |


```http request
GET https://api.revenexx.com/v1/inventories/stock/{id}
```

** A stock level is ONE item at ONE location, and it carries two numbers, neither of which is the sellable one: `on_hand` is what is physically there INCLUDING everything already promised, and `reserved` is what has been promised — it never reduces `on_hand`. What may still be sold is their difference, and it is derived on read and never stored, so there is no `available` column to read, filter or order by. Read it to see one item's position at one place, and to get the id the two row-scoped routes take: POST /inventories/stock/{id}/adjust corrects this balance, and GET /inventories/reorder-alerts reports it by this id. What it does not answer is how the balance got here — that is GET /inventories/movements filtered by the location and item on this row, because a movement points at (location, item) and never at a stock row id. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The stock row. |  |


```http request
PUT https://api.revenexx.com/v1/inventories/stock/{id}
```

** Partial update of everything on the row EXCEPT its balance: reorder_point, metadata, identity. on_hand and reserved are dropped from the body — every stock change is a movement, and a body carrying nothing else is answered 422 with the route that was meant (POST /inventories/stock/{id}/adjust). **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The stock row. |  |
| availability_code | string | What the source system says about this item's availability, as one of the codes THIS TENANT keeps (GET /inventories/availability-states, or GET /inventories/vocabularies/availability-states for the same set with its words and its `orderable` flag). Deliberately not free text and deliberately not an enum of this app's: a code the tenant does not keep is refused with 400 naming the codes they do, and the set itself is a table they extend, because the number a source system delivers for this is that system's number and what it means is theirs to state. Null means nothing said so — which is not the same as unavailable, and a storefront reads `available` for that. A code this tenant does not keep is refused with 400 naming the ones it does, rather than stored as a value nothing can resolve. Null clears it. |  |
| expected_at | string | When this item is expected back in stock at this location — a DATE, not a timestamp, because a supplier promises a day and not an hour. It is the single most asked-for fact about an article that is out of stock, and the one a buyer telephones sales for: a storefront shows it on the article page next to the availability state. Nothing in this app COMPUTES it — no reorder alert, no allocation, no event: it is written by whoever knows (an ERP feed, or an operator on the stock row). It is read in one place, POST /inventories/availability, which answers it per location and rolls the earliest one up for an item that cannot be had now. A past date is stored as sent: it means the promise was missed, which is worth showing rather than hiding. Send it as YYYY-MM-DD; null clears it, which is what a receipt that arrived should do. |  |
| location_id | string | The location this balance is held at — a `locations` row of this tenant (GET /inventories/locations). There is ONE stock row per (location, item): the same SKU in three warehouses is three rows, and what a storefront shows is their sum (POST /inventories/availability). Deleting the location deletes its stock rows with it. It has to exist already (GET /inventories/locations); an id no location carries is answered 400 by the foreign key, not 404. |  |
| metadata | object | Free-form data the tenant keeps on this stock row, and ONE key this app reads: `backorder`. A literal boolean `true` there opts this item into backorders while `backorder_policy` is 'allow_per_sku' — anything else, including the string "true", does not, and the reservation is refused with 422. That is how a merchant backorders the supplier-stocked half of a catalogue without promising the rest. |  |
| product_id | string | The product this row tracks, as the products app knows it. A row tracks a `product_id` or a `sku` — the database insists on at least one (CHECK `product_id is not null or sku is not null`) — and matching is exact: a row keyed by SKU is not found by product id. |  |
| reorder_point | number | The available quantity at or below which this row belongs on the replenishment worklist (GET /inventories/reorder-alerts). Null falls back to the `reorder_point_default` setting, so replenishment works without a threshold per SKU; 0 never alerts, which is how one row opts out. |  |
| sku | string | The article number this row tracks when there is no product id, which is the normal case for an ERP-stocked catalogue. Exact match, and the identity every stock call may use instead of a uuid. |  |


```http request
POST https://api.revenexx.com/v1/inventories/stock/{id}/adjust
```

** Corrects the balance of ONE stock row, and only that one. It is the row-scoped twin of POST /inventories/adjust: the row already knows its location and item, so a caller owes nothing but a SIGNED delta on `on_hand` — positive to add, negative to take away — and a reason for it. The delta is not written onto the balance either; it is booked into the movements ledger as an `adjustment` and the balance follows, which is why the answer hands back the row at its new value instead of an acknowledgement. This is the route that replaced the Cockpit's editable on_hand field. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The stock row to correct. |  |
| quantity | number | The SIGNED correction to this row's `on_hand`: −3 writes off three, +3 finds three. A delta, not the new balance. Zero is refused (400). A correction that would take `on_hand` below zero is a 422 the database insists on; one that would take it below this row's own `reserved` is a 422 the `allow_negative_stock` setting can permit. |  |
| reason | string | Why this row is being corrected, written onto the ledger booking. Owed unless `movement_reason_required` is 'none'. |  |


```http request
GET https://api.revenexx.com/v1/inventories/vocabularies
```

** Discovery for the vocabulary routes: the enums this app publishes, each with its name, its title and its description and deliberately WITHOUT its values, so finding out what exists costs one small call and not one per vocabulary. Names: availability-states, location-types, movement-types, reservation-statuses. Fetch one with GET /inventories/vocabularies/{name}; a client holding the qualified pair 'inventories.<name>' builds that URL from the pair alone. **


```http request
GET https://api.revenexx.com/v1/inventories/vocabularies/{name}
```

** One vocabulary in full: every permitted value, each carrying the title and description a person reads for it and the badge tone a UI colours it with, so a client renders a status or a movement type without a hard-coded table of its own. `source` says who OWNS the set. 'schema' — the values are read out of the column's CHECK constraint, so the served set IS the enforced set and the two cannot drift; a value added to the constraint appears here even before anyone labels it, titled from its own key, and they come back in constraint order, which is lifecycle order for a status. 'table' — the values are the TENANT's own rows, read per request and ordered by the position they gave them, so a merchant extends the set without waiting for a release of this app; those values carry `orderable`, `is_default`, `is_system` and their per-language labels as well, and reading the set is what seeds the shipped one into a tenant that has never had it. 'closed' is true either way: the set is exhaustive at this moment, so a value outside it is stale data rather than a missing label. Names: availability-states, location-types, movement-types, reservation-statuses. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| name | string | **Required** The vocabulary name — the part after the dot in the qualified id. One of: availability-states, location-types, movement-types, reservation-statuses. Anything else is a 404, so the enum is the complete set and not a suggestion. |  |

