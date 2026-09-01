# ShippingMethods Service


```http request
GET https://api.revenexx.com/v1/shipping/methods
```

** Filterable by exact column value — `?code=`, `?enabled=`, `?pricing_type=`, `?carrier_id=`, `?carrier=` and `?tax_class=` are applied as equalities and echoed back in `filter`. `?carrier_id=` and `?carrier=` are the two halves of one question: the first finds the methods holding a reference, the second the ones still resolving through the legacy code text. A query key that names no column of this entity is SILENTLY IGNORED — `?status=` on this route is the trap, since carriers have a status and methods do not: the page comes back unfiltered, 200, with an empty `filter`. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| limit | integer | Page size (default 50, max 200). A value outside the range is clamped rather than refused, and `page.limit` echoes what was applied. |  |
| offset | integer | Row offset for pagination (default 0). The next page is `page.offset + page.returned`. |  |
| order | string | Sort as 'column.asc' | 'column.desc' — a bare 'column' sorts ascending. The column must be one this entity has; anything else is a 400 from the data plane. |  |
| code | string | Exact-match filter on `code`. Unique per tenant, so this resolves a code a checkout already holds without paging the whole list. |  |
| enabled | boolean | Exact-match filter on `enabled`. Only enabled methods are ever quoted, so this is the storefront-facing subset. |  |
| pricing_type | string | Exact-match filter on `pricing_type`. Pricing model — `matrix` is the set whose tiers a rate-matrix editor has to load. |  |
| carrier_id | string | Exact-match filter on `carrier_id`. The methods that ship with one carrier — what a merchant needs before pausing it. Matches `carrier_id` only, never the legacy `carrier` text. |  |
| carrier | string | Exact-match filter on `carrier`. The other half of that question: the methods still resolving their carrier through the legacy free-text CODE rather than a reference. Together with `?carrier_id=` this is how a merchant finds what a carrier is still holding before retiring it. |  |
| tax_class | string | Exact-match filter on `tax_class`. The methods naming one tax class — the same question GET /shipping/tax-classes/{code}/usage counts, when the caller wants the rows rather than the count. Only a method's OWN class; a method falling back to the tenant setting does not match. |  |


```http request
POST https://api.revenexx.com/v1/shipping/methods
```

** A shipping method is the line a buyer picks in the checkout: a pricing model (&#039;fixed&#039;, &#039;free&#039; or &#039;matrix&#039;), the countries it may be offered into, a free-above threshold, and the carrier it ships with. The method owns the PRICE; the delivery promise — tracking template, cut-off, handling and transit days — is inherited from the carrier wherever the method states none of its own. A create cannot omit `code` and `name`; every other column is optional or defaulted by the database. Two rows of this tenant may not share `code` — that is the 409. The new method is quoted by nobody until two further things are true: `enabled` defaults to FALSE, and a &#039;matrix&#039; method has no tiers yet — until POST or PUT …/tiers gives it some it appears in `excluded` with &#039;matrix has no rate tiers configured&#039; rather than in the rates. `carrier_id` and the legacy `carrier` code are both accepted and neither is verified against the carrier table here: an unmatched code is a plain carrier name on the rate, not an error. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| carrier | string | Carrier CODE, kept from before shipping_carriers existed. Looked up in the carrier table when carrier_id is not set, so an existing value keeps working and gains a tracking template; a code nobody maintains is still reported as a plain name. |  |
| carrier_id | string | The carrier this method ships with. Wins over `carrier` and supplies the tracking template, pickup cut-off, handling time and transit days. |  |
| code | string | Stable method code, unique per tenant (e.g. standard, express). What a checkout and an order line store, so it is the value every integration joins on. |  |
| countries | array | The countries this method may be offered into. ISO 3166-1 alpha-2 codes; null or an empty array means no restriction. Compared upper-cased, so a lower-case entry still matches. Declared as an array rather than the bare object a jsonb column derives to — this one is always a list. ANDed with the carrier's own reach. |  |
| currency | string | ISO 4217 code (default EUR). Exactly three characters — the column says so. Echoed into a rate, never converted: this app prices in the currency the method carries. |  |
| description | string | The sentence under the name in the checkout — the delivery promise in words. Null when the name says enough. |  |
| enabled | boolean | Only enabled methods are ever quoted (default false); a disabled one is reported in `excluded` rather than hidden. |  |
| eta_days_max | integer | Transit time upper bound in calendar days. Falls back to the carrier's when null. |  |
| eta_days_min | integer | Transit time lower bound in calendar days, for the checkout. Falls back to the carrier's when null. |  |
| free_above | number | Free shipping at or above this order value — wins over every pricing model, including a matrix. Compared net or gross as the market's free_above_compares setting declares. Null falls back to the tenant's shop-wide free_shipping_threshold. |  |
| labels | object | Localized display names. A flat map keyed by locale — the Cockpit falls back to `en`. Null means the row has no translations and every client shows the untranslated column instead. |  |
| matrix_attribute | string | Attribute name for matrix_basis 'attribute' — the key the rate request's `attributes` map is read at. Free text: the set of attributes is the catalogue's, not this app's. |  |
| matrix_basis | string | The measure a matrix method prices its tiers over: total basket weight (in the market's weight unit), total item count, order value, or 'attribute' — any number the rate request carries under matrix_attribute. Null falls back to the tenant's matrix_basis_default. Ignored unless pricing_type is 'matrix'. |  |
| metadata | object | Free-form jsonb the platform never reads or validates — whatever the merchant or their integration needs to keep beside the row (a customer number with the carrier, an ERP key, a label-printer id). The shape varies BY INTEGRATION, not by anything this app knows, so no key is declared and none is reserved; the example is one plausible instance rather than a schema. A flat map of scalars is the convention, and nothing enforces it. |  |
| name | string | Display name shown in the checkout. |  |
| position | integer | Sort order in the checkout (default 0) — a rate answer is returned in this order. |  |
| price | number | The fixed price (default 0), in `currency` — ignored for 'free' and 'matrix'. |  |
| pricing_type | string | Pricing model (default 'fixed'): 'fixed' is one price for every basket, 'free' is no price at all, 'matrix' is a tiered price read off this method's rate tiers. Only 'matrix' looks at matrix_basis, quote_above and the tier table. |  |
| quote_above | number | Above this MATRIX MEASURE the method carries no automatic price: it is still offered, flagged `quote_required` with a reason, and the storefront shows 'shipping on request'. For bulky or overweight freight priced by hand. Null = every measure is priced automatically. |  |
| tax_class | string | This method's own tax class, as a CODE into the buyer market's tax classes (markets.tax_classes) — never a rate. First step of the tax chain: unset falls back to the tenant's shipping_tax_class setting, then the market default. Not a foreign key and it could not be (ADR-0055); GET /shipping/tax-classes/{code}/usage is the integrity question markets asks in its place. |  |


```http request
POST https://api.revenexx.com/v1/shipping/methods/defaults
```

** Runs the carrier seed first, then creates any missing method: the three lines a shop is expected to offer — standard, express and pickup. The app runs this itself on `app.installed`, so a fresh install already has them; calling it by hand afterwards is how a tenant that deleted one gets it back, and calling it twice costs nothing, because it reconciles rather than seeds. The seeded methods deliberately name no carrier: which carrier carries the standard method is a contract, not a default, and a method that says &#039;dhl&#039; resolves to the seeded DHL row anyway. **


```http request
DELETE https://api.revenexx.com/v1/shipping/methods/{id}
```

** Deleting one takes every `shipping_rate_tiers` row that points at it with it — the foreign keys decide that, not this route. So the whole rate matrix goes with the method, which is also why this never answers a conflict and why there is no way to recover the table afterwards — for a method a checkout may still be holding in a session, `enabled: false` is the safer edit. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id. |  |


```http request
GET https://api.revenexx.com/v1/shipping/methods/{id}
```

** A shipping method is the line a buyer picks in the checkout: a pricing model (&#039;fixed&#039;, &#039;free&#039; or &#039;matrix&#039;), the countries it may be offered into, a free-above threshold, and the carrier it ships with. The method owns the PRICE; the delivery promise — tracking template, cut-off, handling and transit days — is inherited from the carrier wherever the method states none of its own. This is the CONFIGURATION of one, by row id — not what a buyer would be charged. A matrix method&#039;s prices are not in here at all: they are its rate tiers, GET /shipping/methods/{method_id}/tiers, and the price for a given basket is POST /shipping/rates, which is the only place free-above thresholds, country restrictions, the carrier&#039;s reach and tax are applied. A checkout that reads `price` off this row prices a matrix method at 0. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id. |  |


```http request
PUT https://api.revenexx.com/v1/shipping/methods/{id}
```

** A shipping method is the line a buyer picks in the checkout: a pricing model (&#039;fixed&#039;, &#039;free&#039; or &#039;matrix&#039;), the countries it may be offered into, a free-above threshold, and the carrier it ships with. The method owns the PRICE; the delivery promise — tracking template, cut-off, handling and transit days — is inherited from the carrier wherever the method states none of its own. A partial update — send only what changes, whether that is taking the method in or out of the checkout, its pricing, the countries it is restricted to or the delivery estimate it states of its own; a payload carrying no column at all is refused rather than answering a row it did not touch. Flipping `enabled` is what puts the method in front of a buyer or takes it away, and a disabled method is reported in the rate answer&#039;s `excluded` rather than hidden. Changing `pricing_type` away from &#039;matrix&#039; does NOT delete the tier table — it stops being read, and changing back reinstates the old prices, so a method switched to &#039;fixed&#039; and back quotes what it quoted before. Two rows of this tenant may not share `code` — that is the 409. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id. |  |
| carrier | string | Carrier CODE, kept from before shipping_carriers existed. Looked up in the carrier table when carrier_id is not set, so an existing value keeps working and gains a tracking template; a code nobody maintains is still reported as a plain name. |  |
| carrier_id | string | The carrier this method ships with. Wins over `carrier` and supplies the tracking template, pickup cut-off, handling time and transit days. |  |
| code | string | Stable method code, unique per tenant (e.g. standard, express). What a checkout and an order line store, so it is the value every integration joins on. |  |
| countries | array | The countries this method may be offered into. ISO 3166-1 alpha-2 codes; null or an empty array means no restriction. Compared upper-cased, so a lower-case entry still matches. Declared as an array rather than the bare object a jsonb column derives to — this one is always a list. ANDed with the carrier's own reach. |  |
| currency | string | ISO 4217 code (default EUR). Exactly three characters — the column says so. Echoed into a rate, never converted: this app prices in the currency the method carries. |  |
| description | string | The sentence under the name in the checkout — the delivery promise in words. Null when the name says enough. |  |
| enabled | boolean | Only enabled methods are ever quoted (default false); a disabled one is reported in `excluded` rather than hidden. |  |
| eta_days_max | integer | Transit time upper bound in calendar days. Falls back to the carrier's when null. |  |
| eta_days_min | integer | Transit time lower bound in calendar days, for the checkout. Falls back to the carrier's when null. |  |
| free_above | number | Free shipping at or above this order value — wins over every pricing model, including a matrix. Compared net or gross as the market's free_above_compares setting declares. Null falls back to the tenant's shop-wide free_shipping_threshold. |  |
| labels | object | Localized display names. A flat map keyed by locale — the Cockpit falls back to `en`. Null means the row has no translations and every client shows the untranslated column instead. |  |
| matrix_attribute | string | Attribute name for matrix_basis 'attribute' — the key the rate request's `attributes` map is read at. Free text: the set of attributes is the catalogue's, not this app's. |  |
| matrix_basis | string | The measure a matrix method prices its tiers over: total basket weight (in the market's weight unit), total item count, order value, or 'attribute' — any number the rate request carries under matrix_attribute. Null falls back to the tenant's matrix_basis_default. Ignored unless pricing_type is 'matrix'. |  |
| metadata | object | Free-form jsonb the platform never reads or validates — whatever the merchant or their integration needs to keep beside the row (a customer number with the carrier, an ERP key, a label-printer id). The shape varies BY INTEGRATION, not by anything this app knows, so no key is declared and none is reserved; the example is one plausible instance rather than a schema. A flat map of scalars is the convention, and nothing enforces it. |  |
| name | string | Display name shown in the checkout. |  |
| position | integer | Sort order in the checkout (default 0) — a rate answer is returned in this order. |  |
| price | number | The fixed price (default 0), in `currency` — ignored for 'free' and 'matrix'. |  |
| pricing_type | string | Pricing model (default 'fixed'): 'fixed' is one price for every basket, 'free' is no price at all, 'matrix' is a tiered price read off this method's rate tiers. Only 'matrix' looks at matrix_basis, quote_above and the tier table. |  |
| quote_above | number | Above this MATRIX MEASURE the method carries no automatic price: it is still offered, flagged `quote_required` with a reason, and the storefront shows 'shipping on request'. For bulky or overweight freight priced by hand. Null = every measure is priced automatically. |  |
| tax_class | string | This method's own tax class, as a CODE into the buyer market's tax classes (markets.tax_classes) — never a rate. First step of the tax chain: unset falls back to the tenant's shipping_tax_class setting, then the market default. Not a foreign key and it could not be (ADR-0055); GET /shipping/tax-classes/{code}/usage is the integrity question markets asks in its place. |  |


```http request
GET https://api.revenexx.com/v1/shipping/methods/{method_id}/tiers
```

** The rate matrix of one method — every `from_value` threshold with the price charged at or above it — lowest threshold first. Filterable by `?from_value=` — the unique index is (tenant_id, method_id, from_value), so that addresses one row of the matrix by the threshold it prices rather than by an id a bulk replace has already discarded. The applied filters are echoed in `filter`, which always carries the `method_id` taken from the path. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| method_id | string | **Required** The shipping method these tiers belong to. A method this tenant does not have is a 404, never an empty page. |  |
| limit | integer | Page size (default 50, max 200). A value outside the range is clamped rather than refused, and `page.limit` echoes what was applied. |  |
| offset | integer | Row offset for pagination (default 0). The next page is `page.offset + page.returned`. |  |
| order | string | Sort as 'column.asc' | 'column.desc' — a bare 'column' sorts ascending. The column must be one this entity has; anything else is a 400 from the data plane. |  |
| from_value | number | Exact-match filter on `from_value`. The tier at exactly this threshold. (tenant_id, method_id, from_value) is unique, so this addresses one row of the matrix by what it MEANS rather than by an id a bulk replace has already thrown away. |  |


```http request
POST https://api.revenexx.com/v1/shipping/methods/{method_id}/tiers
```

** A rate tier is one row of a matrix method&#039;s price table: a `from_value` threshold and the price charged at or above it. The bound is INCLUSIVE and the winning tier is the one with the highest `from_value` at or below the measured value, so a measure of exactly 10 is priced by the tier at 10. What the number measures is the method&#039;s `matrix_basis` — kilograms in the market&#039;s own weight unit, items, money in the method&#039;s currency, or a named attribute — and the last tier has no upper bound. This adds ONE row to the table of the method in the path, leaving the rest alone — the edit for a merchant who has added a heavier bracket. To lay a whole table down at once use PUT …/tiers (set semantics) or POST …/tiers/ladder (evenly stepped), and note that both of those DISCARD the ids of the rows they replace. Two rows of this tenant may not share the combination of `method_id` + `from_value` — that is the 409. `method_id` is taken from the path on every write, so a body naming a different method is ignored rather than obeyed. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| method_id | string | **Required** The shipping method these tiers belong to. A method this tenant does not have is a 404, never an empty page. |  |
| from_value | number | Lower bound of this tier, in the method's matrix measure — kilograms (or whatever the market's `weight_unit` names, converted through its factor) for a weight matrix, items for quantity, money in the method's currency for order_value, and the raw attribute value for 'attribute'. INCLUSIVE: the tier applies from this value upward, and the tier that wins is the one with the highest from_value at or below the measured value, so a measure of exactly 10 is priced by the tier at 10 rather than the one below it. The last tier has no upper bound. Unique per method — a second tier at the same threshold is a 409, because which of the two won would be whatever the database returned first. Defaults to 0. |  |
| position | integer | Display order in the matrix editor (default 0; a bulk replace derives it from the array index). Pricing reads from_value, never this. |  |
| price | number | What this tier costs, in the method's currency. Charged in full for the whole consignment — a matrix is a lookup table, not a rate per unit. Defaults to 0. |  |


```http request
PUT https://api.revenexx.com/v1/shipping/methods/{method_id}/tiers
```

** The write behind a table editor: a merchant edits the whole matrix on screen and saves it in one call, rather than diffing it into a row added here and a row deleted there. Set semantics, and it replaces EVERY tier the method had: the tiers this method has afterwards are exactly the ones handed in, positions derived from the array order. An empty `tiers` array clears the table — and a matrix method with no tiers quotes nothing, with a reason. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| method_id | string | **Required** The shipping method these tiers belong to. A method this tenant does not have is a 404, never an empty page. |  |
| tiers | array | The complete new tier set (set semantics) — positions are derived from the array order. An empty array clears the matrix, and a matrix method with no tiers quotes nothing. |  |


```http request
POST https://api.revenexx.com/v1/shipping/methods/{method_id}/tiers/ladder
```

** The tier table a merchant describes in words — &quot;0 to 30 kg, every 5 kg, €4.90 plus €2 a step&quot; — without typing every row. Replaces the method&#039;s tiers by default (set replace=false to append). **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| method_id | string | **Required** The shipping method these tiers belong to. A method this tenant does not have is a 404, never an empty page. |  |
| base_price | number | Price of the first tier. |  |
| from_value | number | First tier threshold (default 0), in the method's matrix measure. |  |
| replace | boolean | Replace the whole table (default true) or append to it. |  |
| step | number | Distance between two tiers. Must be > 0. |  |
| step_price | number | Added to each subsequent tier (default 0). A negative value is allowed as long as no tier ends up below 0. |  |
| to_value | number | Last tier threshold. The final tier keeps applying above it — a matrix has no upper bound. Must be >= from_value. |  |


```http request
DELETE https://api.revenexx.com/v1/shipping/methods/{method_id}/tiers/{id}
```

** A rate tier is one row of a matrix method&#039;s price table: a `from_value` threshold and the price charged at or above it. The bound is INCLUSIVE and the winning tier is the one with the highest `from_value` at or below the measured value, so a measure of exactly 10 is priced by the tier at 10. What the number measures is the method&#039;s `matrix_basis` — kilograms in the market&#039;s own weight unit, items, money in the method&#039;s currency, or a named attribute — and the last tier has no upper bound. Removing a tier in the MIDDLE of a table is harmless — the measures it used to cover fall to the highest remaining threshold below them. Removing the LOWEST one is not: a measure under the new lowest threshold matches no tier at all, and the method is then left out of POST /shipping/rates with &#039;no tier covers measure …&#039; instead of being quoted at 0, so an entire band of baskets silently stops being offered this method. Deleting the last tier takes the method out of the checkout altogether. Rebuilding the table wholesale is PUT …/tiers or POST …/tiers/ladder; deleting the method deletes its tiers on its own. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| method_id | string | **Required** The shipping method these tiers belong to. A method this tenant does not have is a 404, never an empty page. |  |
| id | string | **Required** The row id. |  |


```http request
GET https://api.revenexx.com/v1/shipping/methods/{method_id}/tiers/{id}
```

** A rate tier is one row of a matrix method&#039;s price table: a `from_value` threshold and the price charged at or above it. The bound is INCLUSIVE and the winning tier is the one with the highest `from_value` at or below the measured value, so a measure of exactly 10 is priced by the tier at 10. What the number measures is the method&#039;s `matrix_basis` — kilograms in the market&#039;s own weight unit, items, money in the method&#039;s currency, or a named attribute — and the last tier has no upper bound. This reads one row of that table by id, under the method that owns it; a tier id belonging to another method is a 404 rather than somebody else&#039;s price. A tier id is not durable: PUT …/tiers and POST …/tiers/ladder replace the table by deleting and recreating it, so an id read before either of them names nothing afterwards. Where a caller wants a stable handle, address the row by what it MEANS — GET …/tiers?from_value=… — since (method_id, from_value) is unique. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| method_id | string | **Required** The shipping method these tiers belong to. A method this tenant does not have is a 404, never an empty page. |  |
| id | string | **Required** The row id. |  |


```http request
PUT https://api.revenexx.com/v1/shipping/methods/{method_id}/tiers/{id}
```

** A tier id is not stable across a bulk edit: `PUT …/tiers` and `POST …/tiers/ladder` replace the table by deleting and recreating it, so an id read before either of them is gone afterwards. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| method_id | string | **Required** The shipping method these tiers belong to. A method this tenant does not have is a 404, never an empty page. |  |
| id | string | **Required** The row id. |  |
| from_value | number | Lower bound of this tier, in the method's matrix measure — kilograms (or whatever the market's `weight_unit` names, converted through its factor) for a weight matrix, items for quantity, money in the method's currency for order_value, and the raw attribute value for 'attribute'. INCLUSIVE: the tier applies from this value upward, and the tier that wins is the one with the highest from_value at or below the measured value, so a measure of exactly 10 is priced by the tier at 10 rather than the one below it. The last tier has no upper bound. Unique per method — a second tier at the same threshold is a 409, because which of the two won would be whatever the database returned first. Defaults to 0. |  |
| position | integer | Display order in the matrix editor (default 0; a bulk replace derives it from the array index). Pricing reads from_value, never this. |  |
| price | number | What this tier costs, in the method's currency. Charged in full for the whole consignment — a matrix is a lookup table, not a rate per unit. Defaults to 0. |  |


```http request
POST https://api.revenexx.com/v1/shipping/rates
```

** The question a checkout asks, and the only route that answers a PRICE. Hand in the buyer context — the destination country, the order value, and whatever the matrix methods measure: a weight, a quantity or a named product attribute — and this comes back with the methods that may be offered and what each of them costs, free-above thresholds, country restrictions, the carrier&#039;s delivery promise and tax already applied. A method that does not apply is never an error: it moves to `excluded` with a reason. So is a tax rate that cannot be resolved — `tax.resolved: false` means the rates are UNKNOWN, not untaxed. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| at | string | The instant to evaluate the delivery estimate at (ISO 8601). Omitted: now. Lets a storefront compute the cut-off in its own timezone. |  |
| attributes | object | Measure values for attribute matrices, keyed by attribute NAME — the key a matrix method names in its matrix_attribute, and the value the number its tiers are matched against. Summed over the basket by the caller, not by this app. Only the key a method asks for is read; anything else in the map is carried along and ignored, and a value that is not a finite number excludes that method with a reason rather than failing the quote. |  |
| country | string | Destination ISO 3166-1 alpha-2 code — compared upper-cased against method and carrier country restrictions. Omitted or null: every method that restricts by country is excluded, with a reason. |  |
| currency | string | ISO 4217 code, echoed into the rates (default 'EUR'). Echoed, not converted: this app prices in the currency the method carries. |  |
| market_id | string | Buyer market for tax resolution. Omitted: the market matching `country`, else the tenant's sole market — never an arbitrary one. |  |
| order_value | number | Order value (default 0) — drives order_value matrices, and free-above thresholds when no sided value is sent. Read on the basis the tenant's free_above_compares setting declares. |  |
| order_value_gross | number | Order value including tax. Compared against free-above thresholds when free_above_compares is 'gross'. |  |
| order_value_net | number | Order value excluding tax. Compared against free-above thresholds when free_above_compares is 'net'. |  |
| quantity | number | Total quantity — measure for quantity matrices. |  |
| weight | number | Total weight — measure for weight matrices. Read in weight_unit and converted to the unit the tiers are keyed in. |  |
| weight_unit | string | The unit `weight` is expressed in, as a CODE into the tenant's own weight units (GET /shipping/weight-units). Omitted, it is the unit this market quotes in. A unit the tenant does not keep is a 400 — a mis-read weight prices the wrong bracket silently, and guessing is worse than refusing. |  |


```http request
GET https://api.revenexx.com/v1/shipping/tax-classes/{code}/usage
```

** markets.tax_classes is the source of record for the rate and this app points at it by CODE from two places: a method&#039;s own tax_class and the tenant&#039;s shipping_tax_class fallback. Neither is a foreign key and neither could be — a cross-app FK is what ADR-0055 forbids — so integrity is a question one app asks the other, and this is the answering half. It is asked before a destructive edit: markets calls it when an operator tries to delete a tax class, and a count above zero is what stops the delete rather than leaving these methods pointing at a code nobody serves. Matched as a CODE, not a row: a tax class is unique per market, so &#039;reduced&#039; may exist in several and a method naming it does not say which one it meant. Reports at most 500 methods and names the first 20. Every code answers, used or not — a code nobody points at is `in_use: false`, never a 404. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| code | string | **Required** The tax-class CODE, as markets spells it — not a row id. Matched against every shipping method's `tax_class` and against this market's `shipping_tax_class` setting. |  |

