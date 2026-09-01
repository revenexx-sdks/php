# CartsItems Service


```http request
GET https://api.revenexx.com/v1/carts/{cart_id}/items
```

** The array is still called &#039;items&#039;; the response also carries &#039;page&#039; and &#039;filter&#039; like every other list, and an unknown cart_id answers 404 instead of an empty page. A cart with more lines than the page size is not silently truncated — &#039;page.hasMore&#039; says so. Lines come back in position order unless &#039;order&#039; says otherwise. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| cart_id | string | **Required** The cart the line belongs to, by its id. An id no cart in this tenant has answers 404 rather than an empty list, so a wrong cart is never mistaken for an empty one. |  |
| id | string | One line, in list form. |  |
| type | string | Product lines, configured lines or custom lines. |  |
| product_id | string | Lines for one catalogue product. |  |
| sku | string | Exact article number — the join every ERP integration makes. Not a search: no prefix, no wildcard. |  |
| name | string | Exact line name. Not a search. |  |
| quantity | number | Exact quantity — equality, so it matches a line of exactly this many, never 'at least'. |  |
| unit | string | Lines counted in one unit ('pcs', 'm'). |  |
| unit_price | number | Exact unit price — the lines still sitting at one particular number after a repricing run. |  |
| currency | string | Lines priced in one currency — normally the cart's, so this earns its place only where a cart mixes them. |  |
| tax_rate | number | Lines at one VAT rate. |  |
| line_total | number | Exact line total. Equality only — there is no range form, so this finds `0` and little else. |  |
| position | integer | The line at one position. |  |
| created_at | string | Exact instant, not a range. |  |
| updated_at | string | Exact instant, not a range. |  |
| limit | integer | Page size (default 50, max 200). |  |
| offset | integer | Row offset for pagination (default 0). |  |
| order | string | Sort by one column: 'column' | 'column.asc' | 'column.desc'. A bare column sorts ascending. Anything else is refused with 400. |  |


```http request
POST https://api.revenexx.com/v1/carts/{cart_id}/items
```

** Adds one line to an ACTIVE cart — the add-to-basket call. `name` or `sku` is required (a line sent with only a SKU takes the SKU as its name, so a line always has something to show) and `quantity` must be greater than zero; everything else defaults, including the currency, which falls back to the cart&#039;s. The one thing that surprises a caller: a plain product line with the same product/sku AND the same `unit_price` as a line already in the cart does not open a second row — its quantity is added to that line, and the 201 names a row that already existed. Price is part of that identity on purpose, so a changed price never averages into an old line. A configured or custom line always stands alone. The cart&#039;s `item_count` (the sum of QUANTITIES) and `subtotal` are recomputed before the answer, and `max_items_per_cart` / `max_quantity_per_line` are checked on the RESULT of the merge (422), so ten calls of one piece cannot walk past a limit one call of ten would hit. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| cart_id | string | **Required** The cart the line belongs to, by its id. An id no cart in this tenant has answers 404 rather than an empty list, so a wrong cart is never mistaken for an empty one. |  |
| configuration | object | What was configured on this line, in the configurator's own vocabulary — this app stores it and reads nothing out of it. Its mere PRESENCE is behaviour: a line that carries a configuration never merges with another, because two differently configured units of the same article are not one line. Keys are the configurator's; the example is one shape, not the shape. |  |
| currency | string | ISO 4217 code. Defaults to the cart's currency. |  |
| metadata | object | Free-form data the storefront hangs on the line. Stored and returned verbatim; no key in here is read by this app. |  |
| name | string | What the line reads as on the cart page. Falls back to 'sku' when omitted, so a line always has something to show. |  |
| position | integer | Sort order within the cart, ascending. Default 0 when adding a line; in a bulk replace the payload order fills it in. |  |
| product_id | string | The catalogue product, when the line comes from one. Part of the merge identity: same product, same price, one line. |  |
| quantity | number | How much of it — default 1. Fractional is legal (2.5 m of cable); zero and negative are not. On a plain product line that merges into an existing one, this is ADDED to what is already there, and max_quantity_per_line is checked on the result. |  |
| sku | string | The article number, exactly as the merchant knows it. Free text — this app does not resolve it against the catalogue — and part of the merge identity together with product_id and unit_price. The example only shows the shape of a real article number; nothing here enforces one. |  |
| snapshot | object | The product as the buyer was shown it when this line was added — the cart's own copy, so it stays honest when the catalogue moves underneath it. Free-form apart from the price: conversion reads `unit_price` (or `price` as a fallback) and nothing else. A snapshot without a readable price leaves the line alone in both price modes, which is deliberate — a missing snapshot must never be read as "free". |  |
| tax_rate | number | VAT percent for this line, as a number (19 means 19 %). Stored for the order to use — no total in this app includes tax. |  |
| type | string | Line type (default 'product'). Plain product lines merge by product+price; configurations always stand alone. |  |
| unit | string | The unit the quantity is counted in. Display and ERP hand-over only — this app converts nothing. |  |
| unit_price | number | Net price of one unit — line_total is always derived from it, never sent. Part of the merge identity: the same article at a different price opens a new line rather than averaging into the old one. |  |


```http request
PUT https://api.revenexx.com/v1/carts/{cart_id}/items
```

** Set semantics: the payload IS the cart. Every existing line is dropped and the payload is written in its place, so a line left out of the array is a line removed — this is the storefront sync, not a bulk add, and carts.items.create is what adds. Lines are numbered by their place in the array unless they carry their own `position`, and nothing merges: two identical lines in one payload stay two rows. The limits are checked against the payload BEFORE a single existing line is destroyed, so a sync refused with 422 leaves the cart exactly as it was. The cart must be active, and its totals are recomputed before the answer. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| cart_id | string | **Required** The cart the line belongs to, by its id. An id no cart in this tenant has answers 404 rather than an empty list, so a wrong cart is never mistaken for an empty one. |  |
| items | array | The complete new item set (set semantics). |  |


```http request
DELETE https://api.revenexx.com/v1/carts/{cart_id}/items/{id}
```

** Removes one line from an ACTIVE cart and recomputes the owning cart&#039;s `item_count` and `subtotal` before answering. This is how a quantity reaches zero: `quantity` is constrained to be greater than zero, so &quot;none of it&quot; is a DELETE and never an update to 0. The cart in the path is part of the address — a line belonging to a different cart answers 404 and is left where it is. Deleting the last line leaves an empty cart, not a deleted one; the cart itself goes through carts.delete, which takes every line with it in one call. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| cart_id | string | **Required** The cart the line belongs to, by its id. An id no cart in this tenant has answers 404 rather than an empty list, so a wrong cart is never mistaken for an empty one. |  |
| id | string | **Required** The line, by its id. The cart in the path is checked too: a line that belongs to a different cart answers 404, so an id guessed from another cart never resolves here. |  |


```http request
GET https://api.revenexx.com/v1/carts/{cart_id}/items/{id}
```

** One line, addressed through the cart that owns it. Both ids are checked, not just the line&#039;s: a line that exists but belongs to a different cart answers 404 rather than the row, so an id copied out of another cart never resolves here and a caller can trust that what came back is a line of the cart they asked about. The line carries both of its prices — the working `unit_price`, which a resync or a repricing job may have moved, and the `snapshot` the buyer was shown when the line was added — and its own `line_total`, which is always quantity × unit_price and never what a payload claimed. To read a whole cart&#039;s lines, list them: this route is for one known line. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| cart_id | string | **Required** The cart the line belongs to, by its id. An id no cart in this tenant has answers 404 rather than an empty list, so a wrong cart is never mistaken for an empty one. |  |
| id | string | **Required** The line, by its id. The cart in the path is checked too: a line that belongs to a different cart answers 404, so an id guessed from another cart never resolves here. |  |


```http request
PUT https://api.revenexx.com/v1/carts/{cart_id}/items/{id}
```

** Changes one line of an ACTIVE cart — the quantity stepper on the cart page, and the route a repricing job writes through. The fields sent are merged onto the stored line and the whole line is validated again, so `quantity` must still be greater than zero and `type` still one of the three. `line_total` is not settable: it is recomputed as quantity × unit_price, and the cart&#039;s `item_count` and `subtotal` follow before the answer. What it will NOT do is merge — only carts.items.create folds one line into another, so giving this line the same product and price as a sibling leaves two rows standing, and the next add joins whichever it matches. `max_quantity_per_line` is enforced on the result (422). A quantity of zero is not the way to remove a line; the delete is. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| cart_id | string | **Required** The cart the line belongs to, by its id. An id no cart in this tenant has answers 404 rather than an empty list, so a wrong cart is never mistaken for an empty one. |  |
| id | string | **Required** The line, by its id. The cart in the path is checked too: a line that belongs to a different cart answers 404, so an id guessed from another cart never resolves here. |  |
| configuration | object | What was configured on this line, in the configurator's own vocabulary — this app stores it and reads nothing out of it. Its mere PRESENCE is behaviour: a line that carries a configuration never merges with another, because two differently configured units of the same article are not one line. Keys are the configurator's; the example is one shape, not the shape. |  |
| currency | string | ISO 4217 code. Defaults to the cart's currency. |  |
| metadata | object | Free-form data the storefront hangs on the line. Stored and returned verbatim; no key in here is read by this app. |  |
| name | string | What the line reads as on the cart page. Falls back to 'sku' when omitted, so a line always has something to show. |  |
| position | integer | Sort order within the cart, ascending. Default 0 when adding a line; in a bulk replace the payload order fills it in. |  |
| product_id | string | The catalogue product, when the line comes from one. Part of the merge identity: same product, same price, one line. |  |
| quantity | number | How much of it — default 1. Fractional is legal (2.5 m of cable); zero and negative are not. On a plain product line that merges into an existing one, this is ADDED to what is already there, and max_quantity_per_line is checked on the result. |  |
| sku | string | The article number, exactly as the merchant knows it. Free text — this app does not resolve it against the catalogue — and part of the merge identity together with product_id and unit_price. The example only shows the shape of a real article number; nothing here enforces one. |  |
| snapshot | object | The product as the buyer was shown it when this line was added — the cart's own copy, so it stays honest when the catalogue moves underneath it. Free-form apart from the price: conversion reads `unit_price` (or `price` as a fallback) and nothing else. A snapshot without a readable price leaves the line alone in both price modes, which is deliberate — a missing snapshot must never be read as "free". |  |
| tax_rate | number | VAT percent for this line, as a number (19 means 19 %). Stored for the order to use — no total in this app includes tax. |  |
| type | string | Line type (default 'product'). Plain product lines merge by product+price; configurations always stand alone. |  |
| unit | string | The unit the quantity is counted in. Display and ERP hand-over only — this app converts nothing. |  |
| unit_price | number | Net price of one unit — line_total is always derived from it, never sent. Part of the merge identity: the same article at a different price opens a new line rather than averaging into the old one. |  |

