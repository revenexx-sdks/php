# PromotionsPromotions Service


```http request
GET https://api.revenexx.com/v1/promotions/bundles
```

** The offers that count items rather than money: buy three pay two, the cheapest of any four free, a packet of coffee with every machine. A bundle forms from the units a cart holds and repeats up to a cap. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| limit | integer | Page size (default 50, max 200). A larger value is clamped rather than refused. |  |
| offset | integer | Row offset for pagination (default 0). Page with `page.total` and `page.hasMore`. |  |
| order | string | Sort by one column: 'column' | 'column.asc' | 'column.desc'. The column has to be one this entity has. |  |
| id | string | Keep only rows whose `id` equals this. |  |
| promotion_id | string | Keep only rows whose `promotion_id` equals this. |  |
| name | string | Keep only rows whose `name` equals this. |  |
| units_required | string | Keep only rows whose `units_required` equals this. |  |
| max_per_cart | string | Keep only rows whose `max_per_cart` equals this. |  |
| allocation | string | Keep only rows whose `allocation` equals this. |  |


```http request
POST https://api.revenexx.com/v1/promotions/bundles
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| allocation | string | How the units that form a bundle are picked: `best_for_buyer` ranks them by price so whichever unit the effect discounts is worth as much as the cart permits, `cart_order` takes the first it finds. Empty follows the tenant default. |  |
| max_per_cart | integer | How often the bundle may repeat in one cart. Empty repeats as often as the cart allows. |  |
| name | string | What the bundle is called, and what every discount it produces is attributed to. |  |
| promotion_id | string | The promotion this row belongs to. Deleting the promotion deletes it. |  |
| selectors | object | What counts towards the bundle, as a list of `{match, quantity}` — which is what expresses "one machine and one packet of coffee" rather than two units of anything. |  |
| units_required | integer | How many units make one bundle, when no selectors are stated. |  |


```http request
DELETE https://api.revenexx.com/v1/promotions/bundles/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |


```http request
GET https://api.revenexx.com/v1/promotions/bundles/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |


```http request
PUT https://api.revenexx.com/v1/promotions/bundles/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |
| allocation | string | How the units that form a bundle are picked: `best_for_buyer` ranks them by price so whichever unit the effect discounts is worth as much as the cart permits, `cart_order` takes the first it finds. Empty follows the tenant default. |  |
| max_per_cart | integer | How often the bundle may repeat in one cart. Empty repeats as often as the cart allows. |  |
| name | string | What the bundle is called, and what every discount it produces is attributed to. |  |
| promotion_id | string | The promotion this row belongs to. Deleting the promotion deletes it. |  |
| selectors | object | What counts towards the bundle, as a list of `{match, quantity}` — which is what expresses "one machine and one packet of coffee" rather than two units of anything. |  |
| units_required | integer | How many units make one bundle, when no selectors are stated. |  |


```http request
GET https://api.revenexx.com/v1/promotions/conditions
```

** The tree that decides which purchases a promotion catches. A row is either a group, which says whether all or any of what it holds must hold, or a question, which asks one thing from a closed vocabulary. Read the assembled tree at GET /promotions/promotions/{id}/conditions. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| limit | integer | Page size (default 50, max 200). A larger value is clamped rather than refused. |  |
| offset | integer | Row offset for pagination (default 0). Page with `page.total` and `page.hasMore`. |  |
| order | string | Sort by one column: 'column' | 'column.asc' | 'column.desc'. The column has to be one this entity has. |  |
| id | string | Keep only rows whose `id` equals this. |  |
| promotion_id | string | Keep only rows whose `promotion_id` equals this. |  |
| parent_id | string | Keep only rows whose `parent_id` equals this. |  |
| kind | string | Keep only rows whose `kind` equals this. |  |
| match_mode | string | Keep only rows whose `match_mode` equals this. |  |
| negate | string | Keep only rows whose `negate` equals this. |  |
| subject | string | Keep only rows whose `subject` equals this. |  |
| comparison | string | Keep only rows whose `comparison` equals this. |  |
| right_subject | string | Keep only rows whose `right_subject` equals this. |  |
| position | string | Keep only rows whose `position` equals this. |  |


```http request
POST https://api.revenexx.com/v1/promotions/conditions
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| addend | number | Added to the right-hand subject after the factor. |  |
| compare_value | object | What the subject is compared against. |  |
| compare_value_to | object | The upper end of a `between` comparison. |  |
| comparison | string | How the subject is compared: eq, neq, gt, gte, lt, lte, between, in, not_in, is_true, is_false. |  |
| factor | number | Multiplies the right-hand subject before the comparison. |  |
| kind | string | Whether this row is a `group` (which holds others) or a `question` (which asks one thing). |  |
| match_mode | string | For a group: whether `all` of it must hold, or `any` of it. |  |
| negate | boolean | Turns the row around. Excluding a range from an offer is how a merchant protects their margin. |  |
| parent_id | string | The group this row sits inside. Rows with no parent are the outermost level. |  |
| position | integer | Order among siblings, ascending. Two rows with the same position are ordered by their id, so a list never shuffles between reads. |  |
| promotion_id | string | The promotion this row belongs to. Deleting the promotion deletes it. |  |
| right_subject | string | Compare against another subject instead of a literal — "a fifth more than they usually spend", which no fixed threshold can express for a thousand buyers. |  |
| subject | string | What a question asks about — one of a closed vocabulary. A subject accepted at write time and unrecognised at checkout is a promotion that silently never fires, so an unknown one is refused here. |  |


```http request
POST https://api.revenexx.com/v1/promotions/conditions/validate
```

** What an editor calls while a merchant is still typing, so an unknown subject or a comparison that needs a second value is caught in the form rather than on save. **


```http request
DELETE https://api.revenexx.com/v1/promotions/conditions/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |


```http request
GET https://api.revenexx.com/v1/promotions/conditions/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |


```http request
PUT https://api.revenexx.com/v1/promotions/conditions/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |
| addend | number | Added to the right-hand subject after the factor. |  |
| compare_value | object | What the subject is compared against. |  |
| compare_value_to | object | The upper end of a `between` comparison. |  |
| comparison | string | How the subject is compared: eq, neq, gt, gte, lt, lte, between, in, not_in, is_true, is_false. |  |
| factor | number | Multiplies the right-hand subject before the comparison. |  |
| kind | string | Whether this row is a `group` (which holds others) or a `question` (which asks one thing). |  |
| match_mode | string | For a group: whether `all` of it must hold, or `any` of it. |  |
| negate | boolean | Turns the row around. Excluding a range from an offer is how a merchant protects their margin. |  |
| parent_id | string | The group this row sits inside. Rows with no parent are the outermost level. |  |
| position | integer | Order among siblings, ascending. Two rows with the same position are ordered by their id, so a list never shuffles between reads. |  |
| promotion_id | string | The promotion this row belongs to. Deleting the promotion deletes it. |  |
| right_subject | string | Compare against another subject instead of a literal — "a fifth more than they usually spend", which no fixed threshold can express for a thousand buyers. |  |
| subject | string | What a question asks about — one of a closed vocabulary. A subject accepted at write time and unrecognised at checkout is a promotion that silently never fires, so an unknown one is refused here. |  |


```http request
GET https://api.revenexx.com/v1/promotions/custom-effect-types
```

** Effects a tenant invents: unlock a download, extend a warranty, add a gift message. The engine validates the payload when the promotion is WRITTEN and hands it back verbatim when it applies — it never interprets one. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| limit | integer | Page size (default 50, max 200). A larger value is clamped rather than refused. |  |
| offset | integer | Row offset for pagination (default 0). Page with `page.total` and `page.hasMore`. |  |
| order | string | Sort by one column: 'column' | 'column.asc' | 'column.desc'. The column has to be one this entity has. |  |
| id | string | Keep only rows whose `id` equals this. |  |
| name | string | Keep only rows whose `name` equals this. |  |
| shape_version | string | Keep only rows whose `shape_version` equals this. |  |
| carries_amount | string | Keep only rows whose `carries_amount` equals this. |  |


```http request
POST https://api.revenexx.com/v1/promotions/custom-effect-types
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| carries_amount | boolean | When true, an effect of this type must also name an amount shape and a target scope, and then goes through exactly the caps, budgets, stacking and rounding a discount does. When false it carries no money at all. |  |
| description | object | What the type is for, for the person configuring a promotion — rarely the person who registered it. |  |
| metadata | object | Free-form JSON a caller may keep on the row. Nothing here reads it. |  |
| name | string | The identifier whatever consumes this effect dispatches on. Unique per tenant. |  |
| payload_shape | object | The JSON Schema an effect payload of this type is checked against, when the promotion is WRITTEN rather than at a till. It may grow and may not shrink while effects exist against it. |  |
| title | object | What the type is called where an effect is written. Per locale. |  |


```http request
DELETE https://api.revenexx.com/v1/promotions/custom-effect-types/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |


```http request
GET https://api.revenexx.com/v1/promotions/custom-effect-types/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |


```http request
PUT https://api.revenexx.com/v1/promotions/custom-effect-types/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |
| carries_amount | boolean | When true, an effect of this type must also name an amount shape and a target scope, and then goes through exactly the caps, budgets, stacking and rounding a discount does. When false it carries no money at all. |  |
| description | object | What the type is for, for the person configuring a promotion — rarely the person who registered it. |  |
| metadata | object | Free-form JSON a caller may keep on the row. Nothing here reads it. |  |
| name | string | The identifier whatever consumes this effect dispatches on. Unique per tenant. |  |
| payload_shape | object | The JSON Schema an effect payload of this type is checked against, when the promotion is WRITTEN rather than at a till. It may grow and may not shrink while effects exist against it. |  |
| title | object | What the type is called where an effect is written. Per locale. |  |


```http request
GET https://api.revenexx.com/v1/promotions/effects
```

** What a promotion takes off. Three amount shapes against six target scopes — the unit price, the line total, the cart subtotal, the grand total, the shipping cost, the payment fee — plus free items, surcharges, notices, bundles and types a tenant registered itself. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| limit | integer | Page size (default 50, max 200). A larger value is clamped rather than refused. |  |
| offset | integer | Row offset for pagination (default 0). Page with `page.total` and `page.hasMore`. |  |
| order | string | Sort by one column: 'column' | 'column.asc' | 'column.desc'. The column has to be one this entity has. |  |
| id | string | Keep only rows whose `id` equals this. |  |
| promotion_id | string | Keep only rows whose `promotion_id` equals this. |  |
| position | string | Keep only rows whose `position` equals this. |  |
| kind | string | Keep only rows whose `kind` equals this. |  |
| value_type | string | Keep only rows whose `value_type` equals this. |  |
| target_scope | string | Keep only rows whose `target_scope` equals this. |  |
| bundle_id | string | Keep only rows whose `bundle_id` equals this. |  |
| unit_choice | string | Keep only rows whose `unit_choice` equals this. |  |
| unit_position | string | Keep only rows whose `unit_position` equals this. |  |
| spread | string | Keep only rows whose `spread` equals this. |  |
| free_item_quantity | string | Keep only rows whose `free_item_quantity` equals this. |  |
| requires_choice | string | Keep only rows whose `requires_choice` equals this. |  |


```http request
POST https://api.revenexx.com/v1/promotions/effects
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| amount | number | The figure the value type is read with. |  |
| applies_to | object | Which goods the effect touches, as `{skus, product_ids, categories, attribute}`. Empty touches every line. |  |
| bundle_id | string | The bundle a bundle effect discounts. |  |
| custom_payload | object | What a custom effect carries. Checked against the type shape when the promotion is written, and handed back unchanged when it applies. |  |
| custom_shape_version | integer | The shape version the payload was checked against. |  |
| custom_type_id | string | The registered type a custom effect is of. |  |
| free_item_quantity | integer | How many of the free item. |  |
| free_items | object | The items a free-item effect adds, or offers a choice between. |  |
| kind | string | What the effect does: `discount`, `free_item`, `surcharge`, `notice`, `bundle` or `custom`. |  |
| max_discount | number | A ceiling on a percentage effect. "20% off, up to 50 euro" is an ordinary offer, and a merchant who cannot express the cap writes the percentage smaller. |  |
| message | object | What a notice says, per locale. A notice carries no amount. |  |
| metadata | object | Free-form JSON a caller may keep on the row. Nothing here reads it. |  |
| position | integer | Order among siblings, ascending. Two rows with the same position are ordered by their id, so a list never shuffles between reads. |  |
| promotion_id | string | The promotion this row belongs to. Deleting the promotion deletes it. |  |
| requires_choice | boolean | When true, the buyer picks one of the items and the chosen one is what is held and committed. |  |
| spread | boolean | Whether the discount is distributed across the bundle units in proportion to price. A bill showing one line at minus thirty and three at full price cannot be returned line by line. |  |
| target_scope | string | Which amount the effect is measured against: the unit price, the line total, the cart subtotal, the grand total, the shipping cost or the payment fee. |  |
| unit_choice | string | Which unit inside a formed bundle is discounted: `cheapest`, `dearest`, `position` or `all`. |  |
| unit_position | integer | Which unit, when unit_choice is `position`. |  |
| value_type | string | How the amount is stated: `percentage`, `amount`, or `fixed_price` (charge this instead). |  |


```http request
DELETE https://api.revenexx.com/v1/promotions/effects/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |


```http request
GET https://api.revenexx.com/v1/promotions/effects/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |


```http request
PUT https://api.revenexx.com/v1/promotions/effects/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |
| amount | number | The figure the value type is read with. |  |
| applies_to | object | Which goods the effect touches, as `{skus, product_ids, categories, attribute}`. Empty touches every line. |  |
| bundle_id | string | The bundle a bundle effect discounts. |  |
| custom_payload | object | What a custom effect carries. Checked against the type shape when the promotion is written, and handed back unchanged when it applies. |  |
| custom_shape_version | integer | The shape version the payload was checked against. |  |
| custom_type_id | string | The registered type a custom effect is of. |  |
| free_item_quantity | integer | How many of the free item. |  |
| free_items | object | The items a free-item effect adds, or offers a choice between. |  |
| kind | string | What the effect does: `discount`, `free_item`, `surcharge`, `notice`, `bundle` or `custom`. |  |
| max_discount | number | A ceiling on a percentage effect. "20% off, up to 50 euro" is an ordinary offer, and a merchant who cannot express the cap writes the percentage smaller. |  |
| message | object | What a notice says, per locale. A notice carries no amount. |  |
| metadata | object | Free-form JSON a caller may keep on the row. Nothing here reads it. |  |
| position | integer | Order among siblings, ascending. Two rows with the same position are ordered by their id, so a list never shuffles between reads. |  |
| promotion_id | string | The promotion this row belongs to. Deleting the promotion deletes it. |  |
| requires_choice | boolean | When true, the buyer picks one of the items and the chosen one is what is held and committed. |  |
| spread | boolean | Whether the discount is distributed across the bundle units in proportion to price. A bill showing one line at minus thirty and three at full price cannot be returned line by line. |  |
| target_scope | string | Which amount the effect is measured against: the unit price, the line total, the cart subtotal, the grand total, the shipping cost or the payment fee. |  |
| unit_choice | string | Which unit inside a formed bundle is discounted: `cheapest`, `dearest`, `position` or `all`. |  |
| unit_position | integer | Which unit, when unit_choice is `position`. |  |
| value_type | string | How the amount is stated: `percentage`, `amount`, or `fixed_price` (charge this instead). |  |


```http request
GET https://api.revenexx.com/v1/promotions/groups
```

** The sets promotions are weighed in. Whether two offers add up, compete on value or shadow each other is a property of the SET, which a flag on one promotion cannot state. Groups nest, and a nested group competes in its parent as one entry worth what it gives in total. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| limit | integer | Page size (default 50, max 200). A larger value is clamped rather than refused. |  |
| offset | integer | Row offset for pagination (default 0). Page with `page.total` and `page.hasMore`. |  |
| order | string | Sort by one column: 'column' | 'column.asc' | 'column.desc'. The column has to be one this entity has. |  |
| id | string | Keep only rows whose `id` equals this. |  |
| code | string | Keep only rows whose `code` equals this. |  |
| name | string | Keep only rows whose `name` equals this. |  |
| mode | string | Keep only rows whose `mode` equals this. |  |
| parent_id | string | Keep only rows whose `parent_id` equals this. |  |
| position | string | Keep only rows whose `position` equals this. |  |


```http request
POST https://api.revenexx.com/v1/promotions/groups
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| code | string | The stable identifier a merchant refers to the group by. Unique per tenant. |  |
| labels | object | Display text per locale, e.g. `{"de": "Sommeraktion", "en": "Summer sale"}`. What a storefront shows; `name` is what a merchant searches by. |  |
| metadata | object | Free-form JSON a caller may keep on the row. Nothing here reads it. |  |
| mode | string | How the promotions in this group are weighed: `stack` (all of them add up), `highest_value` (only the one worth most) or `first_match` (only the first that matches, by priority). |  |
| name | string | What the group is called in the Cockpit. |  |
| parent_id | string | The group this one sits inside. A nested group is weighed among its own members first, then competes in its parent as ONE entry worth what it gives in total. |  |
| position | integer | Order among siblings, ascending. Two rows with the same position are ordered by their id, so a list never shuffles between reads. |  |


```http request
DELETE https://api.revenexx.com/v1/promotions/groups/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |


```http request
GET https://api.revenexx.com/v1/promotions/groups/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |


```http request
PUT https://api.revenexx.com/v1/promotions/groups/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |
| code | string | The stable identifier a merchant refers to the group by. Unique per tenant. |  |
| labels | object | Display text per locale, e.g. `{"de": "Sommeraktion", "en": "Summer sale"}`. What a storefront shows; `name` is what a merchant searches by. |  |
| metadata | object | Free-form JSON a caller may keep on the row. Nothing here reads it. |  |
| mode | string | How the promotions in this group are weighed: `stack` (all of them add up), `highest_value` (only the one worth most) or `first_match` (only the first that matches, by priority). |  |
| name | string | What the group is called in the Cockpit. |  |
| parent_id | string | The group this one sits inside. A nested group is weighed among its own members first, then competes in its parent as ONE entry worth what it gives in total. |  |
| position | integer | Order among siblings, ascending. Two rows with the same position are ordered by their id, so a list never shuffles between reads. |  |


```http request
GET https://api.revenexx.com/v1/promotions/promotions
```

** Every promotion this tenant has written down, whatever state it is in. Filter `?status=active` for the ones that may apply at all — whether one is live ALSO depends on its window and its recurrence, which GET /promotions/promotions/{id}/state answers. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| limit | integer | Page size (default 50, max 200). A larger value is clamped rather than refused. |  |
| offset | integer | Row offset for pagination (default 0). Page with `page.total` and `page.hasMore`. |  |
| order | string | Sort by one column: 'column' | 'column.asc' | 'column.desc'. The column has to be one this entity has. |  |
| id | string | Keep only rows whose `id` equals this. |  |
| code | string | Keep only rows whose `code` equals this. |  |
| name | string | Keep only rows whose `name` equals this. |  |
| description | string | Keep only rows whose `description` equals this. |  |
| reach | string | Keep only rows whose `reach` equals this. |  |
| status | string | Keep only rows whose `status` equals this. |  |
| priority | string | Keep only rows whose `priority` equals this. |  |
| exclusive | string | Keep only rows whose `exclusive` equals this. |  |
| group_id | string | Keep only rows whose `group_id` equals this. |  |
| search_best_combination | string | Keep only rows whose `search_best_combination` equals this. |  |
| condition_match | string | Keep only rows whose `condition_match` equals this. |  |
| recurrence_kind | string | Keep only rows whose `recurrence_kind` equals this. |  |


```http request
POST https://api.revenexx.com/v1/promotions/promotions
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| budget_discount | number | The most this promotion may give away in total. Reaching it stops the promotion rather than refusing the cart. |  |
| budget_redemptions | integer | The most times it may be redeemed in total. |  |
| campaign_ref | string | A loose reference to a campaign. Nothing here reads it, and a reference to a campaign that does not exist changes nothing. |  |
| channel_id | string | The sales channel this promotion is limited to. Empty applies in every channel. |  |
| code | string | The short identifier a merchant recognises the promotion by. Unique per tenant. |  |
| condition_match | string | How the outermost conditions are held together when they are a flat list: `all` or `any`. |  |
| currency | string | The currency this promotion is stated in. A cart in another currency skips it rather than inventing an exchange rate. Empty applies in every currency. |  |
| description | string | What the promotion is for, in the merchant own words. |  |
| ends_at | string | When it stops. Empty means it runs until somebody stops it. |  |
| exclusive | boolean | When true, this promotion applying ends the whole evaluation across every group — the "cannot be combined with anything" printed on a voucher. |  |
| group_id | string | The stacking group this promotion is weighed in. A promotion in no group follows the tenant default. |  |
| labels | object | Display text per locale, e.g. `{"de": "Sommeraktion", "en": "Summer sale"}`. What a storefront shows; `name` is what a merchant searches by. |  |
| limit_per_contact | integer | How often one person may redeem it. |  |
| limit_per_organization | integer | How often one company may redeem it. In B2B this is usually what a merchant means by "once per customer". |  |
| metadata | object | Free-form JSON a caller may keep on the row. Nothing here reads it. |  |
| name | string | What the promotion is called. |  |
| priority | integer | Higher goes first. The order decides the money as soon as two effects touch the same amount, and a tie is settled by creation time so one cart never produces two different bills. |  |
| reach | string | How a buyer arrives at it: `automatic` applies on its own, `code` applies only to a buyer who entered one of its vouchers. |  |
| recurrence_days | object | Days of the month it runs on: numbers from 1 to 31, or the word `last`. A day a month does not have simply does not occur that month. |  |
| recurrence_from | string | Time of day it starts, as HH:MM. A range that crosses midnight is honoured as one range. |  |
| recurrence_kind | string | Whether it recurs inside its window, and how: `none`, `weekdays` or `days_of_month`. Never both shapes at once. |  |
| recurrence_until | string | Time of day it stops, as HH:MM. |  |
| recurrence_weekdays | object | Day numbers from 1 (Monday) to 7 (Sunday) the promotion runs on. |  |
| return_behaviour | string | What a return does to this promotion discounts: `reverse_proportionally` gives back what the returned lines carried, `reevaluate` decides again on the goods that were kept. Empty follows the tenant default. |  |
| search_best_combination | boolean | When true, this promotion is searched against the others that asked for it, and the order giving the buyer most is used. Bounded by a tenant setting; beyond it the stated order is used and the answer says so. |  |
| starts_at | string | When the promotion becomes live. Empty means it is live as soon as it is active. |  |
| status | string | What the merchant set: `draft`, `active`, `paused` or `archived`. What the promotion IS right now also depends on the clock — read `effective_state`. |  |
| tags | object | Free labels a merchant groups promotions by. Carried onto every fact this app publishes. |  |
| timezone | string | The IANA timezone the window and the recurrence are read in. Empty follows the market, then the tenant setting — a merchant means their own midnight. |  |


```http request
DELETE https://api.revenexx.com/v1/promotions/promotions/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |


```http request
GET https://api.revenexx.com/v1/promotions/promotions/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |


```http request
PUT https://api.revenexx.com/v1/promotions/promotions/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |
| budget_discount | number | The most this promotion may give away in total. Reaching it stops the promotion rather than refusing the cart. |  |
| budget_redemptions | integer | The most times it may be redeemed in total. |  |
| campaign_ref | string | A loose reference to a campaign. Nothing here reads it, and a reference to a campaign that does not exist changes nothing. |  |
| channel_id | string | The sales channel this promotion is limited to. Empty applies in every channel. |  |
| code | string | The short identifier a merchant recognises the promotion by. Unique per tenant. |  |
| condition_match | string | How the outermost conditions are held together when they are a flat list: `all` or `any`. |  |
| currency | string | The currency this promotion is stated in. A cart in another currency skips it rather than inventing an exchange rate. Empty applies in every currency. |  |
| description | string | What the promotion is for, in the merchant own words. |  |
| ends_at | string | When it stops. Empty means it runs until somebody stops it. |  |
| exclusive | boolean | When true, this promotion applying ends the whole evaluation across every group — the "cannot be combined with anything" printed on a voucher. |  |
| group_id | string | The stacking group this promotion is weighed in. A promotion in no group follows the tenant default. |  |
| labels | object | Display text per locale, e.g. `{"de": "Sommeraktion", "en": "Summer sale"}`. What a storefront shows; `name` is what a merchant searches by. |  |
| limit_per_contact | integer | How often one person may redeem it. |  |
| limit_per_organization | integer | How often one company may redeem it. In B2B this is usually what a merchant means by "once per customer". |  |
| metadata | object | Free-form JSON a caller may keep on the row. Nothing here reads it. |  |
| name | string | What the promotion is called. |  |
| priority | integer | Higher goes first. The order decides the money as soon as two effects touch the same amount, and a tie is settled by creation time so one cart never produces two different bills. |  |
| reach | string | How a buyer arrives at it: `automatic` applies on its own, `code` applies only to a buyer who entered one of its vouchers. |  |
| recurrence_days | object | Days of the month it runs on: numbers from 1 to 31, or the word `last`. A day a month does not have simply does not occur that month. |  |
| recurrence_from | string | Time of day it starts, as HH:MM. A range that crosses midnight is honoured as one range. |  |
| recurrence_kind | string | Whether it recurs inside its window, and how: `none`, `weekdays` or `days_of_month`. Never both shapes at once. |  |
| recurrence_until | string | Time of day it stops, as HH:MM. |  |
| recurrence_weekdays | object | Day numbers from 1 (Monday) to 7 (Sunday) the promotion runs on. |  |
| return_behaviour | string | What a return does to this promotion discounts: `reverse_proportionally` gives back what the returned lines carried, `reevaluate` decides again on the goods that were kept. Empty follows the tenant default. |  |
| search_best_combination | boolean | When true, this promotion is searched against the others that asked for it, and the order giving the buyer most is used. Bounded by a tenant setting; beyond it the stated order is used and the answer says so. |  |
| starts_at | string | When the promotion becomes live. Empty means it is live as soon as it is active. |  |
| status | string | What the merchant set: `draft`, `active`, `paused` or `archived`. What the promotion IS right now also depends on the clock — read `effective_state`. |  |
| tags | object | Free labels a merchant groups promotions by. Carried onto every fact this app publishes. |  |
| timezone | string | The IANA timezone the window and the recurrence are read in. Empty follows the market, then the tenant setting — a merchant means their own midnight. |  |


```http request
GET https://api.revenexx.com/v1/promotions/promotions/{id}/conditions
```

** The rows of the condition list, built into the tree the engine evaluates, with the depth it reaches. What an editor renders and what a reader checks an offer against. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |


```http request
POST https://api.revenexx.com/v1/promotions/promotions/{id}/conditions/check
```

** An empty group holds for nothing or for everything, so whichever a merchant meant, one of the two silently ruins the promotion. This finds those, and a tree deeper than the tenant allows, before a shopper does. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |


```http request
GET https://api.revenexx.com/v1/promotions/promotions/{id}/state
```

** Two facts, never one: the state a merchant set, and what the clock has made of it. A surface showing only the first tells a merchant their finished campaign is still running. Also reports whether any buyer can reach it, and what is left of its budget. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |

