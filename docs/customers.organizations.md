# CustomersOrganizations Service


```http request
GET https://api.revenexx.com/v1/customers/addresses
```

** A postal address used for billing or for shipping, owned by exactly one of the two parties: an organization (the company address everyone in it may use) or a contact (a private one only that person uses). Both owner columns are nullable and exactly one is set — sending both, or neither, is refused. Every address this tenant holds, filterable by owner (`organization_id`, `contact_id`), by `type` and by any other column. It is how the addresses tab of a company or a person is filled; the page is `limit`/`offset`/`order`. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | Filter to rows whose `id` is exactly this value. Primary key of the address. |  |
| organization_id | string | Filter to one owning company. |  |
| contact_id | string | Filter to one owning contact — a personal address book. |  |
| type | string | Filter by address type (GET /customers/address-types) — 'billing' or 'shipping' unless the merchant added their own. |  |
| company | string | Filter to rows whose `company` is exactly this value. Company line on the label. Often the owning organization's name, but not always — a delivery to a construction site carries the site. |  |
| name | string | Filter to rows whose `name` is exactly this value. Recipient line on the label — the person or department the parcel is addressed to. |  |
| name2 | string | Filter to rows whose `name2` is exactly this value. The second recipient line: a department beneath a person, an attention line, a c/o. What `street2` is for the street, this is for the recipient — and it is a line of its own rather than more text in `name`, because a label prints two lines and an ERP delivers two fields. Null when there is none. |  |
| street | string | Filter to rows whose `street` is exactly this value. Street and house number, on one line, as the local post expects it. OPTIONAL, because a deliverable address does not always have one: a German PO box is addressed by its number, its postcode and its town, and an ERP that holds thousands of them would otherwise have every one of them refused. The postcode and the town stay required — a PO box has both. |  |
| street2 | string | Filter to rows whose `street2` is exactly this value. The second address line: building, floor, gate, c/o. Null when there is none. |  |
| zip | string | Filter to rows whose `zip` is exactly this value. Postal code, as text — leading zeros are real in most countries. |  |
| city | string | Filter to rows whose `city` is exactly this value. City or town. |  |
| region | string | Filter to rows whose `region` is exactly this value. State, province or Bundesland. Required by some destinations (US, CA), unused by most European ones. |  |
| country | string | Filter by ISO 3166-1 alpha-2 country code. |  |
| phone | string | Filter to rows whose `phone` is exactly this value. Phone number for the carrier to reach at this address — often a different one from the contact's own. |  |
| is_default | boolean | Filter to the default addresses. With `type` and an owner, this is the one address a checkout should preselect. |  |
| external_id | string | Filter to rows whose `external_id` is exactly this value. Id of this address in the system it came from — an ERP address number. Nullable and unique per tenant where it is set. It is also the id a line-based order export has to hand back, because the receiving system names a delivery or invoice address by it rather than by its street. |  |
| source_synced_at | string | Exact timestamp equality — this API has no range filter. To bound a period, sort with `order` and page. When this row was last confirmed against its source. What a delta run asks for changes since, and what tells an operator that a feed has gone quiet — a row edited in the Cockpit does not touch it, because it says when the SOURCE was last seen, not when the row changed. Null for a row no source owns. |  |
| created_at | string | Exact timestamp equality — this API has no range filter. To bound a period, sort with `order` and page. When the address was created. |  |
| updated_at | string | Exact timestamp equality — this API has no range filter. To bound a period, sort with `order` and page. When any column of this row last changed. |  |
| limit | integer | Page size (default 50, max 200). |  |
| offset | integer | Row offset for pagination (default 0). |  |
| order | string | Sort by one column: 'column' | 'column.asc' | 'column.desc'. A bare column sorts ascending. Anything else is refused with 400. |  |


```http request
POST https://api.revenexx.com/v1/customers/addresses
```

** A postal address used for billing or for shipping, owned by exactly one of the two parties: an organization (the company address everyone in it may use) or a contact (a private one only that person uses). Both owner columns are nullable and exactly one is set — sending both, or neither, is refused. `type` names one of this tenant's own address types — billing and shipping are seeded, and a merchant may add a works entrance or a central accounts office without a release of this app. `is_default` picks the one a checkout should preselect for that owner and that type. A create cannot omit `zip`, `city` and `country`; everything else is optional or defaulted by the database. Two rows of this tenant may not share `external_id` (while external_id IS NOT NULL). **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| city | string | City or town. |  |
| company | string | Company line on the label. Often the owning organization's name, but not always — a delivery to a construction site carries the site. |  |
| contact_id | string | Owning person — a personal address only that contact uses. Exactly one of organization_id / contact_id is set. |  |
| country | string | ISO 3166-1 alpha-2 country code, exactly two letters. Uppercase by convention; it is what shipping and tax both key off. |  |
| created_at | string | When the address was created. Accepted on create only from a call naming no acting contact — an operator, an import, an ERP carrying a record over with its original date. A buyer sending it, or any update changing it, is a 400 `server_owned_field`. |  |
| external_id | string | Id of this address in the system it came from — an ERP address number. Nullable and unique per tenant where it is set. It is also the id a line-based order export has to hand back, because the receiving system names a delivery or invoice address by it rather than by its street. Writable, so a record can be adopted or a wrong id corrected — but it is the key a repeated import matches on, so changing it on a row an import owns makes the next run create a second one rather than update this. |  |
| is_default | boolean | The default address of its owner AND type: one default billing and one default shipping address per owner. Setting it moves the flag off the previous holder. Default false. |  |
| name | string | Recipient line on the label — the person or department the parcel is addressed to. |  |
| name2 | string | The second recipient line: a department beneath a person, an attention line, a c/o. What `street2` is for the street, this is for the recipient — and it is a line of its own rather than more text in `name`, because a label prints two lines and an ERP delivers two fields. Null when there is none. |  |
| organization_id | string | Owning company — a company address, shared by everyone in it. Exactly one of organization_id / contact_id is set. |  |
| phone | string | Phone number for the carrier to reach at this address — often a different one from the contact's own. |  |
| region | string | State, province or Bundesland. Required by some destinations (US, CA), unused by most European ones. |  |
| street | string | Street and house number, on one line, as the local post expects it. OPTIONAL, because a deliverable address does not always have one: a German PO box is addressed by its number, its postcode and its town, and an ERP that holds thousands of them would otherwise have every one of them refused. The postcode and the town stay required — a PO box has both. |  |
| street2 | string | The second address line: building, floor, gate, c/o. Null when there is none. |  |
| type | string | What the address is FOR — one of the tenant's own address types (GET /customers/address-types), seeded with billing and shipping. A merchant may add their own (a works entrance, a central accounts office) without a release of this app. A create without it gets the type flagged as default; a type the tenant does not keep is a 400. |  |
| zip | string | Postal code, as text — leading zeros are real in most countries. |  |


```http request
DELETE https://api.revenexx.com/v1/customers/addresses/{id}
```

** A postal address used for billing or for shipping, owned by exactly one of the two parties: an organization (the company address everyone in it may use) or a contact (a private one only that person uses). Both owner columns are nullable and exactly one is set — sending both, or neither, is refused. Removes the address. Orders already placed keep the address they were placed with; nothing in this app reaches back. Deleting one takes every `contact_points` row that points at it with it — the foreign keys decide, not this route. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The address to delete. |  |


```http request
GET https://api.revenexx.com/v1/customers/addresses/{id}
```

** A postal address used for billing or for shipping, owned by exactly one of the two parties: an organization (the company address everyone in it may use) or a contact (a private one only that person uses). Both owner columns are nullable and exactly one is set — sending both, or neither, is refused. One address by id, whichever of the two owners it hangs off. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The address to read. |  |


```http request
PUT https://api.revenexx.com/v1/customers/addresses/{id}
```

** A postal address used for billing or for shipping, owned by exactly one of the two parties: an organization (the company address everyone in it may use) or a contact (a private one only that person uses). Both owner columns are nullable and exactly one is set — sending both, or neither, is refused. A partial update — send only what changes. An empty body is refused rather than answered as a no-op, so a client that built the wrong patch finds out. Two rows of this tenant may not share `external_id` (while external_id IS NOT NULL). **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The address to update. |  |
| city | string | City or town. |  |
| company | string | Company line on the label. Often the owning organization's name, but not always — a delivery to a construction site carries the site. |  |
| contact_id | string | Owning person — a personal address only that contact uses. Exactly one of organization_id / contact_id is set. |  |
| country | string | ISO 3166-1 alpha-2 country code, exactly two letters. Uppercase by convention; it is what shipping and tax both key off. |  |
| external_id | string | Id of this address in the system it came from — an ERP address number. Nullable and unique per tenant where it is set. It is also the id a line-based order export has to hand back, because the receiving system names a delivery or invoice address by it rather than by its street. Writable, so a record can be adopted or a wrong id corrected — but it is the key a repeated import matches on, so changing it on a row an import owns makes the next run create a second one rather than update this. |  |
| is_default | boolean | The default address of its owner AND type: one default billing and one default shipping address per owner. Setting it moves the flag off the previous holder. Default false. |  |
| name | string | Recipient line on the label — the person or department the parcel is addressed to. |  |
| name2 | string | The second recipient line: a department beneath a person, an attention line, a c/o. What `street2` is for the street, this is for the recipient — and it is a line of its own rather than more text in `name`, because a label prints two lines and an ERP delivers two fields. Null when there is none. |  |
| organization_id | string | Owning company — a company address, shared by everyone in it. Exactly one of organization_id / contact_id is set. |  |
| phone | string | Phone number for the carrier to reach at this address — often a different one from the contact's own. |  |
| region | string | State, province or Bundesland. Required by some destinations (US, CA), unused by most European ones. |  |
| street | string | Street and house number, on one line, as the local post expects it. OPTIONAL, because a deliverable address does not always have one: a German PO box is addressed by its number, its postcode and its town, and an ERP that holds thousands of them would otherwise have every one of them refused. The postcode and the town stay required — a PO box has both. |  |
| street2 | string | The second address line: building, floor, gate, c/o. Null when there is none. |  |
| type | string | What the address is FOR — one of the tenant's own address types (GET /customers/address-types), seeded with billing and shipping. A merchant may add their own (a works entrance, a central accounts office) without a release of this app. A create without it gets the type flagged as default; a type the tenant does not keep is a 400. |  |
| zip | string | Postal code, as text — leading zeros are real in most countries. |  |


```http request
GET https://api.revenexx.com/v1/customers/contact_points
```

** A contact point is WHERE one kind of document goes for one company: the invoice to accounts payable, the order confirmation to the buyer who placed it, the shipping notice to goods-in, the dunning letter to whoever settles it. An ERP keeps these as four separate addresses per debtor and they had nowhere to land here — `addresses` carries a `phone` column and has never had an `email` one — so these rows create a home rather than moving one. Exactly one point per company and kind is flagged as the one to use. Every contact point this tenant holds, filtered by `organization_id` for one company, by `kind` for one kind of document, by `is_primary` for the ones actually in use. `?organization_id=…&kind=invoice&is_primary=true` is the single read behind "where does this company's invoice go" — and it answers at most one row, because this app keeps the flag single. The page is `limit`/`offset`/`order`. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | Filter to rows whose `id` is exactly this value. Primary key of the contact point. |  |
| organization_id | string | Filter to one company's document recipients. |  |
| address_id | string | Filter to the points carried on one postal address — the ERP case of a mail address on a delivery address. |  |
| kind | string | Filter by which document goes there. One of the tenant's own document recipient types (GET /customers/contact-point-kinds). |  |
| email | string | Filter to rows whose `email` is exactly this value. The mail address this document is sent to. Nullable, because a point may carry a phone number instead — but a point with neither is refused, since it delivers nothing. Note that `addresses` has never had a column for this: a mail address per document had nowhere to live before these rows. |  |
| phone | string | Filter to rows whose `phone` is exactly this value. The number this document is sent to or announced on — a fax for an order confirmation, a mobile for a delivery notice. Free text, as somebody typed it; E.164 is what an integration should send. |  |
| is_primary | boolean | Filter to the points actually in use. With `organization_id` and `kind` this answers at most one row, because exactly one point of a kind carries the flag. |  |
| position | integer | Filter to rows whose `position` is exactly this value. Where this point sits among the others of its kind, ascending. It orders the ones that are NOT flagged — a fallback list for a caller that wants every invoice recipient rather than the one. |  |
| external_id | string | Filter to rows whose `external_id` is exactly this value. The key this point has in the system that owns it — an ERP's own id for a document sending address. Unique per tenant where set, so a repeated import updates this row instead of adding a second one. Null for a point somebody typed in here. |  |
| source_synced_at | string | Exact timestamp equality — this API has no range filter. To bound a period, sort with `order` and page. When this row was last confirmed against its source. What a delta run asks for changes since, and what tells an operator that a feed has gone quiet — a row edited in the Cockpit does not touch it, because it says when the SOURCE was last seen, not when the row changed. Null for a row no source owns. |  |
| created_at | string | Exact timestamp equality — this API has no range filter. To bound a period, sort with `order` and page. When the point was created. |  |
| updated_at | string | Exact timestamp equality — this API has no range filter. To bound a period, sort with `order` and page. When any column of this row last changed. |  |
| limit | integer | Page size (default 50, max 200). |  |
| offset | integer | Row offset for pagination (default 0). |  |
| order | string | Sort by one column: 'column' | 'column.asc' | 'column.desc'. A bare column sorts ascending. Anything else is refused with 400. |  |


```http request
POST https://api.revenexx.com/v1/customers/contact_points
```

** A contact point is WHERE one kind of document goes for one company: the invoice to accounts payable, the order confirmation to the buyer who placed it, the shipping notice to goods-in, the dunning letter to whoever settles it. An ERP keeps these as four separate addresses per debtor and they had nowhere to land here — `addresses` carries a `phone` column and has never had an `email` one — so these rows create a home rather than moving one. Exactly one point per company and kind is flagged as the one to use. `kind` is required and names one of this tenant's own document recipient types — nothing is defaulted, because a point filed as the wrong document is worse than a point refused. A point needs an `email` or a `phone`, since one with neither delivers nothing. The FIRST point of a kind becomes the one to use on its own; a later one takes over only when it is sent as `is_primary`, which demotes the incumbent in the same call. A create cannot omit `organization_id` and `kind`; everything else is optional or defaulted by the database. Two rows of this tenant may not share the combination of `organization_id` + `kind` (while is_primary) or `external_id` (while external_id IS NOT NULL). **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| address_id | string | The postal address this point belongs to, for the one case an ERP has it: a mail address carried ON a delivery address, so the notice about a shipment goes to whoever receives it there. Null is the ordinary case and means the point is the company's rather than one address's. It has to be an address of the same company (or of one of its people), and deleting the address takes the point with it. |  |
| created_at | string | When the point was created. Accepted on create only from a call naming no acting contact — an operator, an import, an ERP carrying a record over with its original date. A buyer sending it, or any update changing it, is a 400 `server_owned_field`. |  |
| email | string | The mail address this document is sent to. Nullable, because a point may carry a phone number instead — but a point with neither is refused, since it delivers nothing. Note that `addresses` has never had a column for this: a mail address per document had nowhere to live before these rows. |  |
| external_id | string | The key this point has in the system that owns it — an ERP's own id for a document sending address. Unique per tenant where set, so a repeated import updates this row instead of adding a second one. Null for a point somebody typed in here. Writable, so a record can be adopted or a wrong id corrected — but it is the key a repeated import matches on, so changing it on a row an import owns makes the next run create a second one rather than update this. |  |
| is_primary | boolean | The point THIS kind of document actually goes to. Exactly one point per company and kind carries it: the first point of a kind is flagged as it is created, flagging another demotes the incumbent, and it is never simply switched off — so the question has one answer while the kind has any point at all, and none only when it has none. The first point of a kind gets it on its own. Sending true on a later one demotes the incumbent in the same call; sending false on the one that holds it is refused — flag the point that should take over instead. |  |
| kind | string | WHICH document goes here — one of the tenant's own document recipient types (GET /customers/contact-point-kinds), seeded with invoice, order_confirmation, shipping_notice and dunning. Required and never defaulted: a point filed as the wrong document is worse than no point at all, because nothing downstream can tell that nobody chose. A merchant whose ERP mails a credit note separately adds their own type without a release of this app. Required on create, and nothing is defaulted: a kind the tenant does not keep is a 400 naming the ones on offer. |  |
| organization_id | string | The company whose document this is. Required — a contact point with no company is an address for nobody, and deleting the company takes its points with it. Fixed once created — the flag that says which point of a kind to use is scoped by the company, so moving a point would move an invariant with it. |  |
| phone | string | The number this document is sent to or announced on — a fax for an order confirmation, a mobile for a delivery notice. Free text, as somebody typed it; E.164 is what an integration should send. |  |
| position | integer | Where this point sits among the others of its kind, ascending. It orders the ones that are NOT flagged — a fallback list for a caller that wants every invoice recipient rather than the one. Default 0. |  |


```http request
DELETE https://api.revenexx.com/v1/customers/contact_points/{id}
```

** A contact point is WHERE one kind of document goes for one company: the invoice to accounts payable, the order confirmation to the buyer who placed it, the shipping notice to goods-in, the dunning letter to whoever settles it. An ERP keeps these as four separate addresses per debtor and they had nowhere to land here — `addresses` carries a `phone` column and has never had an `email` one — so these rows create a home rather than moving one. Exactly one point per company and kind is flagged as the one to use. Removes the point. If it was the flagged one, the next point of that kind takes over — so the kind keeps an answer for as long as it has any point at all, and the company is left with none only once the last one goes. Nothing else in this app points at it, so nothing else goes with it. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The contact point to delete. |  |


```http request
GET https://api.revenexx.com/v1/customers/contact_points/{id}
```

** A contact point is WHERE one kind of document goes for one company: the invoice to accounts payable, the order confirmation to the buyer who placed it, the shipping notice to goods-in, the dunning letter to whoever settles it. An ERP keeps these as four separate addresses per debtor and they had nowhere to land here — `addresses` carries a `phone` column and has never had an `email` one — so these rows create a home rather than moving one. Exactly one point per company and kind is flagged as the one to use. One contact point by id. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The contact point to read. |  |


```http request
PUT https://api.revenexx.com/v1/customers/contact_points/{id}
```

** A contact point is WHERE one kind of document goes for one company: the invoice to accounts payable, the order confirmation to the buyer who placed it, the shipping notice to goods-in, the dunning letter to whoever settles it. An ERP keeps these as four separate addresses per debtor and they had nowhere to land here — `addresses` carries a `phone` column and has never had an `email` one — so these rows create a home rather than moving one. Exactly one point per company and kind is flagged as the one to use. A partial update — send only what changes. The owning company is fixed (the flag is scoped by it, so moving a point between companies would move an invariant with it) and an empty body is refused. A flag MOVES rather than switching off: send `is_primary` on the point that should take over, because a kind with points and no flag is a question with no answer. Two rows of this tenant may not share the combination of `organization_id` + `kind` (while is_primary) or `external_id` (while external_id IS NOT NULL). **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The contact point to update. |  |
| address_id | string | The postal address this point belongs to, for the one case an ERP has it: a mail address carried ON a delivery address, so the notice about a shipment goes to whoever receives it there. Null is the ordinary case and means the point is the company's rather than one address's. It has to be an address of the same company (or of one of its people), and deleting the address takes the point with it. |  |
| email | string | The mail address this document is sent to. Nullable, because a point may carry a phone number instead — but a point with neither is refused, since it delivers nothing. Note that `addresses` has never had a column for this: a mail address per document had nowhere to live before these rows. |  |
| external_id | string | The key this point has in the system that owns it — an ERP's own id for a document sending address. Unique per tenant where set, so a repeated import updates this row instead of adding a second one. Null for a point somebody typed in here. Writable, so a record can be adopted or a wrong id corrected — but it is the key a repeated import matches on, so changing it on a row an import owns makes the next run create a second one rather than update this. |  |
| is_primary | boolean | The point THIS kind of document actually goes to. Exactly one point per company and kind carries it: the first point of a kind is flagged as it is created, flagging another demotes the incumbent, and it is never simply switched off — so the question has one answer while the kind has any point at all, and none only when it has none. The first point of a kind gets it on its own. Sending true on a later one demotes the incumbent in the same call; sending false on the one that holds it is refused — flag the point that should take over instead. |  |
| kind | string | WHICH document goes here — one of the tenant's own document recipient types (GET /customers/contact-point-kinds), seeded with invoice, order_confirmation, shipping_notice and dunning. Required and never defaulted: a point filed as the wrong document is worse than no point at all, because nothing downstream can tell that nobody chose. A merchant whose ERP mails a credit note separately adds their own type without a release of this app. Required on create, and nothing is defaulted: a kind the tenant does not keep is a 400 naming the ones on offer. |  |
| organization_id | string | The company whose document this is. Required — a contact point with no company is an address for nobody, and deleting the company takes its points with it. Fixed once created — the flag that says which point of a kind to use is scoped by the company, so moving a point would move an invariant with it. |  |
| phone | string | The number this document is sent to or announced on — a fax for an order confirmation, a mobile for a delivery notice. Free text, as somebody typed it; E.164 is what an integration should send. |  |
| position | integer | Where this point sits among the others of its kind, ascending. It orders the ones that are NOT flagged — a fallback list for a caller that wants every invoice recipient rather than the one. Default 0. |  |


```http request
GET https://api.revenexx.com/v1/customers/organization_metrics
```

** What an organization has BOUGHT, materialized into this app from the orders app: lifetime revenue, revenue over the last 30/90/365 days, order count, average order value, and the first and last order dates. Revenue lives in orders and may not be joined (ADR-0055: no cross-app foreign key, grant or view), so it is pulled on a schedule and stored here — one row per organization, all-zero for a company that never ordered, so that a "never bought anything" rule has something to match. The customer-value list: sort by `revenue_365d` for the best customers, filter `last_order_at` for the dormant ones. Every row carries `computed_at`, and a row is only as current as the last refresh — `GET /customers/organization_metrics/freshness` says how stale the set is before a number is shown to anybody. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | Filter to rows whose `id` is exactly this value. Primary key of the projection row. |  |
| organization_id | string | Read the metrics of one company. |  |
| order_count | integer | Filter to rows whose `order_count` is exactly this value. Orders ever counted for this company. |  |
| order_count_30d | integer | Filter to rows whose `order_count_30d` is exactly this value. Orders in the 30 days before `orders_as_of`. A rolling window, not a calendar month. |  |
| order_count_90d | integer | Filter to rows whose `order_count_90d` is exactly this value. Orders in the 90 days before `orders_as_of`. |  |
| order_count_365d | integer | Filter to rows whose `order_count_365d` is exactly this value. Orders in the 365 days before `orders_as_of`. |  |
| revenue_total | number | Filter to rows whose `revenue_total` is exactly this value. Revenue ever counted, in `currency`. Which orders count is the orders app's decision, not this app's. |  |
| revenue_30d | number | Filter to rows whose `revenue_30d` is exactly this value. Revenue in the 30 days before `orders_as_of`. |  |
| revenue_90d | number | Filter to rows whose `revenue_90d` is exactly this value. Revenue in the 90 days before `orders_as_of`. |  |
| revenue_365d | number | Filter to rows whose `revenue_365d` is exactly this value. Revenue in the 365 days before `orders_as_of`. The usual "how big is this customer" number, and the one a key-account rule should read. |  |
| avg_order_value | number | Filter to rows whose `avg_order_value` is exactly this value. revenue_total / order_count, computed here from the sums rather than averaged upstream. Zero when there are no orders. |  |
| avg_order_value_365d | number | Filter to rows whose `avg_order_value_365d` is exactly this value. revenue_365d / order_count_365d. Zero when there were none in the window. |  |
| first_order_at | string | Exact timestamp equality — this API has no range filter. To bound a period, sort with `order` and page. When this company first ordered. Null if it never has — that is what makes it usable as "is this a customer at all?". |  |
| last_order_at | string | Exact timestamp equality — this API has no range filter. To bound a period, sort with `order` and page. When this company last ordered. Null if it never has, which is why the virtual `days_since_last_order` rule field never matches those companies: use `last_order_at is_empty` for them. |  |
| currency | string | Filter to rows whose `currency` is exactly this value. The single ISO 4217 currency all counted orders were in. NULL when there were none, and also when there were several — read `currency_mixed` to tell those two apart. |  |
| currency_mixed | boolean | Filter to rows whose `currency_mixed` is exactly this value. True when this company ordered in more than one currency. The sums are still stored (dropping money is worse), but they are not comparable against a threshold, and a rule reading revenue should say so. |  |
| orders_as_of | string | Exact timestamp equality — this API has no range filter. To bound a period, sort with `order` and page. The instant the rolling windows were measured from. Pinned across a chunked refresh, so a multi-call pass cannot let the windows slide underneath it. |  |
| computed_at | string | Exact timestamp equality — this API has no range filter. To bound a period, sort with `order` and page. When this row was last written. The projection is materialized, so this is how stale the numbers are. |  |
| created_at | string | Exact timestamp equality — this API has no range filter. To bound a period, sort with `order` and page. When the projection row first appeared. |  |
| updated_at | string | Exact timestamp equality — this API has no range filter. To bound a period, sort with `order` and page. When the row last changed. Unchanged numbers are not rewritten, so this can lag `computed_at`. |  |
| limit | integer | Page size (default 50, max 200). |  |
| offset | integer | Row offset for pagination (default 0). |  |
| order | string | Sort by one column: 'column' | 'column.asc' | 'column.desc'. A bare column sorts ascending. Anything else is refused with 400. |  |


```http request
GET https://api.revenexx.com/v1/customers/organization_metrics/freshness
```

** The projection is materialized, so it is only as true as its last refresh. This is that fact as one answer: the OLDEST computed_at in the table (the floor, not an average), the anchor those numbers were measured from, and how many organizations are not covered at all yet. **


```http request
POST https://api.revenexx.com/v1/customers/organization_metrics/refresh
```

** Revenue lives in the orders app and cannot be joined (ADR-0055: no cross-app FK, grant or view), so it is PULLED: this route walks organizations in id order, asks orders.reports.customer-rollup about a batch of them at a time and materializes the answer into organization_metrics — one row per organization, all-zero for those that never ordered, so that 'never bought' rules match something. Rows are only rewritten when a value actually changed, so a routine refresh costs almost no writes. Bounded by a wall-clock budget below the gateway's upstream timeout: while 'done' is false, POST again with the returned 'cursor' AND 'as_of' (pinning as_of is what stops the rolling windows sliding during a multi-call refresh). 'organization_ids' refreshes exactly those organizations in a single call — the targeted path after a customer ordered. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| as_of | string | Anchor for the rolling windows — pass back the value the previous call returned. |  |
| cursor | string | Continue an unfinished refresh: the value the previous call returned, verbatim. It is the id of the last organization processed, so only a value this API handed out ever resolves. |  |
| organization_ids | array | Refresh exactly these organizations in one call instead of walking all of them. |  |


```http request
GET https://api.revenexx.com/v1/customers/organization_metrics/{id}
```

** What an organization has BOUGHT, materialized into this app from the orders app: lifetime revenue, revenue over the last 30/90/365 days, order count, average order value, and the first and last order dates. Revenue lives in orders and may not be joined (ADR-0055: no cross-app foreign key, grant or view), so it is pulled on a schedule and stored here — one row per organization, all-zero for a company that never ordered, so that a "never bought anything" rule has something to match. One company's numbers by the metrics row id. All zeroes mean the company has never ordered, not that the projection is missing — a missing row means the refresh has not reached that company yet. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The organization metrics row to read. |  |


```http request
GET https://api.revenexx.com/v1/customers/organizations
```

** An organization is a buying COMPANY — the unit a contract, a credit limit, a price list and a payment term belong to, and the unit an order is placed on behalf of. It is not a household and not a person: the people are `contacts`, and a company with no contacts yet is a perfectly normal row. Every organization is mirrored into platform auth as a team, so a name written here is the name storefront authentication shows. The company list a sales or service desk works from, and the read a segment rule is written against. Every column of the table is a filter and the page is `limit`/`offset`/`order` — including the two that are constantly confused: `status` is ACCESS (active or blocked) and `lifecycle_stage` is the sales PIPELINE, so filtering the wrong one answers with the wrong companies rather than with an error. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | Filter to exactly one company. `GET /customers/organizations/{id}` is the direct form; this exists because the list honours it too. |  |
| name | string | Filter by the EXACT company name — this is an equality, not a search. There is no substring or fuzzy match on this API. |  |
| vat_id | string | Look a company up by its VAT id — the check an integration runs before founding a duplicate. |  |
| branche | string | Filter by exact industry. Free text a merchant typed, matched exactly and case-sensitively — 'Maschinenbau' does not find 'maschinenbau', and there is no substring search to fall back on. |  |
| customer_number | string | Look a company up by its ERP number — the lookup an ERP integration and a service desk both start from. Exact match; the real numbers come from the merchant, so the example here resolves nowhere. |  |
| status | string | Filter by status — access, not pipeline. |  |
| lifecycle_stage | string | Filter by pipeline stage. One of the tenant's own stages (GET /customers/lifecycle-stages); a fresh install starts with lead, prospect, customer, churned. |  |
| payment_terms | string | Filter to rows whose `payment_terms` is exactly this value. When this company has to pay — one of the tenant's own terms (GET /customers/payment-terms, seeded with prepayment, direct_debit, net_7/14/30/60/90). Null means nothing was agreed and the order flow falls back to the market's `default_payment_terms`. This is a commercial term, not a payment method: HOW they pay is the payments app's business. |  |
| credit_limit_mode | string | Filter to rows whose `credit_limit_mode` is exactly this value. Whether this company buys on credit, and how far: 'unset' (nobody decided — whoever checks credit applies its own fallback), 'limited' (open receivables up to `credit_limit`) or 'unlimited' (no ceiling, by decision). The mode is the decision; the amount exists only for 'limited'. |  |
| credit_limit | number | Filter to rows whose `credit_limit` is exactly this value. Ceiling on open receivables in the market's currency, and one of the inputs that decide whether an order is accepted at all. Set exactly when `credit_limit_mode` is 'limited', and then above 0; null otherwise — read the mode, never the null, to know whether there is a ceiling. |  |
| balance | number | Filter to rows whose `balance` is exactly this value. What this company owes right now, in the market's currency, as its accounting system last reported it — the figure a credit limit is compared against, and the reason the limit could check nothing on its own. A COPY, never a live read: this app asks no accounting system anything, so the number is exactly as old as `source_synced_at` says and the tenant's `credit_check_max_age_hours` setting says how old is too old. Null means no source has ever reported one, which is NOT a balance of zero — reading it as nothing owed is the mistake this column exists to prevent. A negative figure is a credit balance. |  |
| balance_due | number | Filter to rows whose `balance_due` is exactly this value. How much of `balance` is already OVERDUE, in the same currency and from the same report. The difference between warning a customer and blocking one: a company at its limit with nothing overdue is buying normally, and one below its limit with an unpaid invoice from March is not. Null means no source has reported it; zero means nothing is overdue, and the two are not the same answer. |  |
| price_list | string | Filter to rows whose `price_list` is exactly this value. Code of the price list this company buys on — plain text pointing into the prices app. ADR-0055 forbids the cross-app foreign key, so nothing here checks it: a code that names no list simply prices nothing. `standard` is the list the prices app seeds on install. |  |
| shipping_advice | string | Filter by whether a part delivery is accepted. `complete` is the set of companies whose orders may not be split, which is what a warehouse wanting to know its constrained customers asks for. |  |
| location_code | string | Filter to the companies served out of one warehouse. Exact match on the code the inventories app owns; the real codes come from the merchant, so the example here resolves nowhere. |  |
| delivery_block | boolean | Filter to companies whose shipments are stopped. |  |
| external_team_id | string | Find the organization behind a platform team id. The reverse of the mirror, and the way an auth-side id becomes a customer record. |  |
| external_id | string | Filter to rows whose `external_id` is exactly this value. The key this company has in the system that OWNS it — the ERP's own key for the customer, not the number a human quotes (that is `customer_number`). Often a GUID; it is stored verbatim, whatever shape the source uses. Unique per tenant where set, so an import upserts on it instead of matching on a name. Null for a company the shop itself created. |  |
| source_synced_at | string | Exact timestamp equality — this API has no range filter. To bound a period, sort with `order` and page. When this row was last confirmed against its source. What a delta run asks for changes since, and what tells an operator that a feed has gone quiet — a row edited in the Cockpit does not touch it, because it says when the SOURCE was last seen, not when the row changed. Null for a row no source owns. |  |
| created_at | string | Exact timestamp equality — this API has no range filter. To bound a period, sort with `order` and page. When this company record was created in this app. Not when the customer relationship began — an ERP import creates decade-old customers today. |  |
| updated_at | string | Exact timestamp equality — this API has no range filter. To bound a period, sort with `order` and page. When any column of this row last changed. |  |
| limit | integer | Page size (default 50, max 200). |  |
| offset | integer | Row offset for pagination (default 0). |  |
| order | string | Sort by one column: 'column' | 'column.asc' | 'column.desc'. A bare column sorts ascending. Anything else is refused with 400. |  |


```http request
POST https://api.revenexx.com/v1/customers/organizations
```

** An organization is a buying COMPANY — the unit a contract, a credit limit, a price list and a payment term belong to, and the unit an order is placed on behalf of. It is not a household and not a person: the people are `contacts`, and a company with no contacts yet is a perfectly normal row. Every organization is mirrored into platform auth as a team, so a name written here is the name storefront authentication shows. Registers a company as a customer. It is mirrored into platform auth as a team in the same call, so a failure of the identity service fails the create rather than leaving half a company behind. `payment_terms` and `lifecycle_stage` name values from this tenant's own sets, and a newly founded company inherits the tenant's `default_payment_terms` / `default_credit_limit` where the merchant set them. `name` is the only field a create cannot omit; everything else is optional or defaulted by the database. Two rows of this tenant may not share `customer_number` (while customer_number IS NOT NULL), `external_team_id` (while external_team_id IS NOT NULL) or `external_id` (while external_id IS NOT NULL). **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| balance | number | What this company owes right now, in the market's currency, as its accounting system last reported it — the figure a credit limit is compared against, and the reason the limit could check nothing on its own. A COPY, never a live read: this app asks no accounting system anything, so the number is exactly as old as `source_synced_at` says and the tenant's `credit_check_max_age_hours` setting says how old is too old. Null means no source has ever reported one, which is NOT a balance of zero — reading it as nothing owed is the mistake this column exists to prevent. A negative figure is a credit balance. Written by whatever imports the accounting figures. Send `source_synced_at` with it — a balance whose age nobody knows cannot be used for a credit decision at all. |  |
| balance_due | number | How much of `balance` is already OVERDUE, in the same currency and from the same report. The difference between warning a customer and blocking one: a company at its limit with nothing overdue is buying normally, and one below its limit with an unpaid invoice from March is not. Null means no source has reported it; zero means nothing is overdue, and the two are not the same answer. Written by the same import, and null rather than 0 where the source reported nothing. |  |
| branche | string | Industry / line of business, in the merchant's own words. Free text: no NACE code, no WZ number, no list to pick from — whatever somebody typed on the company. Segment rules read it, and both `?branche=` and an `eq` condition match it EXACTLY and case-sensitively, so 'Maschinenbau' and 'maschinenbau' are two different industries. Indexed, so it stays cheap to filter on. |  |
| created_at | string | When this company record was created in this app. Not when the customer relationship began — an ERP import creates decade-old customers today. Accepted on create only from a call naming no acting contact — an operator, an import, an ERP carrying a record over with its original date. A buyer sending it, or any update changing it, is a 400 `server_owned_field`. |  |
| credit_limit | number | Ceiling on open receivables in the market's currency, and one of the inputs that decide whether an order is accepted at all. Set exactly when `credit_limit_mode` is 'limited', and then above 0; null otherwise — read the mode, never the null, to know whether there is a ceiling. Required with `credit_limit_mode` 'limited' and refused with any other mode (400 `limited_mode_requires_limit` / `limit_requires_limited_mode`). |  |
| credit_limit_mode | string | Whether this company buys on credit, and how far: 'unset' (nobody decided — whoever checks credit applies its own fallback), 'limited' (open receivables up to `credit_limit`) or 'unlimited' (no ceiling, by decision). The mode is the decision; the amount exists only for 'limited'. A create naming neither this nor `credit_limit` inherits the market's `default_credit_limit_mode` (and, for 'limited', `default_credit_limit`). Leaving 'limited' without sending `credit_limit` clears the amount. |  |
| customer_number | string | The number this company carries in the merchant's own ERP — the key an ERP integration joins on, and what a service desk asks for on the phone. Free text with NO enforced format (a letter prefix and a running number is the common shape, but plain digits are just as valid), unique per tenant while it is set, and one of the fields duplicate detection can be pointed at. The real values come out of the merchant's ERP; nothing published here can name one that exists. A second company with the same number is a 409. |  |
| delivery_block | boolean | True stops SHIPMENTS to this company while leaving login and ordering alone — the "they may order, we are just not sending anything until this is settled" state. Separate from `status` on purpose: blocking the login to stop a delivery locks out the people who could settle it. Default false. |  |
| lifecycle_stage | string | Where the company stands in the SALES PIPELINE, and a deliberately separate axis from `status`: a prospect that may log in and a customer that may not are both ordinary states, and one column cannot say that. One of the tenant's own stages (GET /customers/lifecycle-stages) — a fresh install starts with lead, prospect, customer, churned, and the merchant may add their own. Nothing moves it automatically; a stage changes when a person or an integration says so. A create without it gets the stage flagged as default; a value the tenant does not keep is a 400. |  |
| location_code | string | Code of the warehouse this company's availability is computed against — plain text naming `locations.code` in the inventories app. A CODE and not a foreign key: ADR-0055 forbids the cross-app one, and nothing here checks it, so a code that names no location simply computes availability against the default. It belongs on the customer rather than in inventories because inventories models what is IN a warehouse and not which customer buys out of which — a company served from the northern depot is a fact about the company. Null means no warehouse was agreed. Not validated against the inventories app — ADR-0055 forbids the cross-app read, so a code that names no location is stored and computes availability against the default. |  |
| name | string | Legal or trading name of the COMPANY — never a person. Mirrored to the platform team, so a rename here is a rename in storefront auth too. |  |
| payment_terms | string | When this company has to pay — one of the tenant's own terms (GET /customers/payment-terms, seeded with prepayment, direct_debit, net_7/14/30/60/90). Null means nothing was agreed and the order flow falls back to the market's `default_payment_terms`. This is a commercial term, not a payment method: HOW they pay is the payments app's business. A create without it inherits the market's `default_payment_terms`; a value the tenant does not keep is a 400. |  |
| price_list | string | Code of the price list this company buys on — plain text pointing into the prices app. ADR-0055 forbids the cross-app foreign key, so nothing here checks it: a code that names no list simply prices nothing. `standard` is the list the prices app seeds on install. |  |
| settings | object | Free-form per-organization settings, keyed by whatever the merchant's own integrations agree on — this app never branches on a key in here. Segment rules can address a TOP-LEVEL key as `setting:<key>`, which is the whole reason the blob survives: a flag an ERP writes here selects a segment without a schema change. Commercial terms are typed columns now (payment_terms, credit_limit); writing them back in here leaves the checkout reading the column and finding nothing. Replaced wholesale on an update — send the whole object, not a patch of it. |  |
| shipping_advice | string | Whether this company accepts a PART delivery: 'partial' ships what is available and lets the rest follow, 'complete' holds the whole order until every line can go at once. It decides whether a basket may offer a part quantity in the first place, so a checkout that ignores it promises a delivery date the warehouse cannot keep. Null means nothing was agreed and the store's own default applies. Only these two values — it is an ERP's own delivery flag, and there is no third way to ship an order. Null leaves it unagreed. |  |
| status | string | ACCESS, not pipeline: 'blocked' stops this company's people from logging in and is where a rejected registration parks the company it founded. 'active' is the default. For how far along a company is, read `lifecycle_stage` — reading this one for that is how a won deal gets locked out. Default 'active'. |  |
| vat_id | string | VAT identification number (USt-IdNr. in Germany) — the closest thing a B2B buyer has to a legal identity. Validated against the EU VIES service when the tenant's `organization_vat_id_required` setting is on, and stored verbatim otherwise, including for buyers outside the EU. |  |


```http request
DELETE https://api.revenexx.com/v1/customers/organizations/{id}
```

** An organization is a buying COMPANY — the unit a contract, a credit limit, a price list and a payment term belong to, and the unit an order is placed on behalf of. It is not a household and not a person: the people are `contacts`, and a company with no contacts yet is a perfectly normal row. Every organization is mirrored into platform auth as a team, so a name written here is the name storefront authentication shows. Removes the company and its mirrored team. Its people are NOT deleted: they become standalone buyers who can still sign in and still order, which is the behaviour a merchant winding down a subsidiary wants. Deleting one takes every `contact_events`, `addresses`, `contact_points`, `organization_metrics` and `segment_members` row that points at it with it and clears `contacts.organization_id` rather than deleting those rows — the foreign keys decide, not this route. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The organization to delete. |  |


```http request
GET https://api.revenexx.com/v1/customers/organizations/{id}
```

** An organization is a buying COMPANY — the unit a contract, a credit limit, a price list and a payment term belong to, and the unit an order is placed on behalf of. It is not a household and not a person: the people are `contacts`, and a company with no contacts yet is a perfectly normal row. Every organization is mirrored into platform auth as a team, so a name written here is the name storefront authentication shows. One company by id, with its commercial terms as stored. What it has BOUGHT is not in here — that is the `organization_metrics` row for the same id, refreshed on its own schedule. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The organization to read. |  |


```http request
PUT https://api.revenexx.com/v1/customers/organizations/{id}
```

** An organization is a buying COMPANY — the unit a contract, a credit limit, a price list and a payment term belong to, and the unit an order is placed on behalf of. It is not a household and not a person: the people are `contacts`, and a company with no contacts yet is a perfectly normal row. Every organization is mirrored into platform auth as a team, so a name written here is the name storefront authentication shows. A partial update — send only what changes. `external_team_id` is mirror-managed and ignored if sent. Blocking a company here is what stops it trading; moving it through the pipeline is `lifecycle_stage`, and the two are independent. Two rows of this tenant may not share `customer_number` (while customer_number IS NOT NULL), `external_team_id` (while external_team_id IS NOT NULL) or `external_id` (while external_id IS NOT NULL). **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The organization to update. |  |
| balance | number | What this company owes right now, in the market's currency, as its accounting system last reported it — the figure a credit limit is compared against, and the reason the limit could check nothing on its own. A COPY, never a live read: this app asks no accounting system anything, so the number is exactly as old as `source_synced_at` says and the tenant's `credit_check_max_age_hours` setting says how old is too old. Null means no source has ever reported one, which is NOT a balance of zero — reading it as nothing owed is the mistake this column exists to prevent. A negative figure is a credit balance. Written by whatever imports the accounting figures. Send `source_synced_at` with it — a balance whose age nobody knows cannot be used for a credit decision at all. |  |
| balance_due | number | How much of `balance` is already OVERDUE, in the same currency and from the same report. The difference between warning a customer and blocking one: a company at its limit with nothing overdue is buying normally, and one below its limit with an unpaid invoice from March is not. Null means no source has reported it; zero means nothing is overdue, and the two are not the same answer. Written by the same import, and null rather than 0 where the source reported nothing. |  |
| branche | string | Industry / line of business, in the merchant's own words. Free text: no NACE code, no WZ number, no list to pick from — whatever somebody typed on the company. Segment rules read it, and both `?branche=` and an `eq` condition match it EXACTLY and case-sensitively, so 'Maschinenbau' and 'maschinenbau' are two different industries. Indexed, so it stays cheap to filter on. |  |
| credit_limit | number | Ceiling on open receivables in the market's currency, and one of the inputs that decide whether an order is accepted at all. Set exactly when `credit_limit_mode` is 'limited', and then above 0; null otherwise — read the mode, never the null, to know whether there is a ceiling. Required with `credit_limit_mode` 'limited' and refused with any other mode (400 `limited_mode_requires_limit` / `limit_requires_limited_mode`). |  |
| credit_limit_mode | string | Whether this company buys on credit, and how far: 'unset' (nobody decided — whoever checks credit applies its own fallback), 'limited' (open receivables up to `credit_limit`) or 'unlimited' (no ceiling, by decision). The mode is the decision; the amount exists only for 'limited'. A create naming neither this nor `credit_limit` inherits the market's `default_credit_limit_mode` (and, for 'limited', `default_credit_limit`). Leaving 'limited' without sending `credit_limit` clears the amount. |  |
| customer_number | string | The number this company carries in the merchant's own ERP — the key an ERP integration joins on, and what a service desk asks for on the phone. Free text with NO enforced format (a letter prefix and a running number is the common shape, but plain digits are just as valid), unique per tenant while it is set, and one of the fields duplicate detection can be pointed at. The real values come out of the merchant's ERP; nothing published here can name one that exists. A second company with the same number is a 409. |  |
| delivery_block | boolean | True stops SHIPMENTS to this company while leaving login and ordering alone — the "they may order, we are just not sending anything until this is settled" state. Separate from `status` on purpose: blocking the login to stop a delivery locks out the people who could settle it. Default false. |  |
| lifecycle_stage | string | Where the company stands in the SALES PIPELINE, and a deliberately separate axis from `status`: a prospect that may log in and a customer that may not are both ordinary states, and one column cannot say that. One of the tenant's own stages (GET /customers/lifecycle-stages) — a fresh install starts with lead, prospect, customer, churned, and the merchant may add their own. Nothing moves it automatically; a stage changes when a person or an integration says so. A create without it gets the stage flagged as default; a value the tenant does not keep is a 400. |  |
| location_code | string | Code of the warehouse this company's availability is computed against — plain text naming `locations.code` in the inventories app. A CODE and not a foreign key: ADR-0055 forbids the cross-app one, and nothing here checks it, so a code that names no location simply computes availability against the default. It belongs on the customer rather than in inventories because inventories models what is IN a warehouse and not which customer buys out of which — a company served from the northern depot is a fact about the company. Null means no warehouse was agreed. Not validated against the inventories app — ADR-0055 forbids the cross-app read, so a code that names no location is stored and computes availability against the default. |  |
| name | string | Legal or trading name of the COMPANY — never a person. Mirrored to the platform team, so a rename here is a rename in storefront auth too. |  |
| payment_terms | string | When this company has to pay — one of the tenant's own terms (GET /customers/payment-terms, seeded with prepayment, direct_debit, net_7/14/30/60/90). Null means nothing was agreed and the order flow falls back to the market's `default_payment_terms`. This is a commercial term, not a payment method: HOW they pay is the payments app's business. A create without it inherits the market's `default_payment_terms`; a value the tenant does not keep is a 400. |  |
| price_list | string | Code of the price list this company buys on — plain text pointing into the prices app. ADR-0055 forbids the cross-app foreign key, so nothing here checks it: a code that names no list simply prices nothing. `standard` is the list the prices app seeds on install. |  |
| settings | object | Free-form per-organization settings, keyed by whatever the merchant's own integrations agree on — this app never branches on a key in here. Segment rules can address a TOP-LEVEL key as `setting:<key>`, which is the whole reason the blob survives: a flag an ERP writes here selects a segment without a schema change. Commercial terms are typed columns now (payment_terms, credit_limit); writing them back in here leaves the checkout reading the column and finding nothing. Replaced wholesale on an update — send the whole object, not a patch of it. |  |
| shipping_advice | string | Whether this company accepts a PART delivery: 'partial' ships what is available and lets the rest follow, 'complete' holds the whole order until every line can go at once. It decides whether a basket may offer a part quantity in the first place, so a checkout that ignores it promises a delivery date the warehouse cannot keep. Null means nothing was agreed and the store's own default applies. Only these two values — it is an ERP's own delivery flag, and there is no third way to ship an order. Null leaves it unagreed. |  |
| status | string | ACCESS, not pipeline: 'blocked' stops this company's people from logging in and is where a rejected registration parks the company it founded. 'active' is the default. For how far along a company is, read `lifecycle_stage` — reading this one for that is how a won deal gets locked out. Default 'active'. |  |
| vat_id | string | VAT identification number (USt-IdNr. in Germany) — the closest thing a B2B buyer has to a legal identity. Validated against the EU VIES service when the tenant's `organization_vat_id_required` setting is on, and stored verbatim otherwise, including for buyers outside the EU. |  |

