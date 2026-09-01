# PaymentsMethods Service


```http request
GET https://api.revenexx.com/v1/payments/methods
```

** Every method this tenant has configured, enabled or not — what the Cockpit&#039;s Payment methods screen shows and how an integration finds out which codes exist. It answers CONFIGURATION, never an offer: nothing here is evaluated against a buyer, so a method restricted to Germany, one whose order-value bounds exclude this basket and one whose PSP was never set up all come back the same way. The call a checkout makes is POST /payments/methods/eligible. Rows come back in whatever order the database returns them, so a storefront-shaped list needs `?order=position.asc` — `position` is the merchant&#039;s intended sequence and nothing sorts by it here on its own. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| limit | integer | Page size (default 50, max 200). |  |
| offset | integer | Row offset for pagination (default 0). |  |
| order | string | Sort by one column: 'column' | 'column.asc' | 'column.desc'. A bare column sorts ascending. Anything else is refused with 400. |  |
| code | string | Exact method code. |  |
| kind | string | Restrict to self-managed or PSP-backed methods. |  |
| enabled | boolean | Restrict to enabled or disabled methods. Indexed. |  |
| provider | string | Exact PSP code. |  |


```http request
POST https://api.revenexx.com/v1/payments/methods
```

** Adds a line a checkout can offer. A create cannot omit `code` and `name`; every other column is optional or defaulted by the database. Two rows of this tenant may not share `code` — that is the 409. Two defaults are worth knowing before the first call: `enabled` is false, so a new method reaches no checkout until it is switched on, and `kind` is &#039;self_managed&#039; — a card or wallet method needs `kind: &quot;psp&quot;` plus a `provider` the catalog carries, or it falls back to the tenant&#039;s `default_provider` at payment time and fails there if none is set. The `code` is the value every payment, every checkout and every ERP will name this method by from now on, and once a single payment has been made under it a rename is refused with 409: choose it once. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| code | string | The machine name of the method, unique per tenant and lower case by convention ('invoice', 'prepayment', 'card', 'paypal'). It is the string the checkout asks for, the string every payment stores, and therefore the one value here that cannot be changed freely: renaming it would leave the ledger naming something that no longer exists, so it is refused with 409 for as long as any payment names it. Required on create. |  |
| countries | array | Allowed ISO 3166-1 alpha-2 country codes, compared upper-cased against the buyer country. null or an empty list means unrestricted — the invoice method this app seeds is restricted to DE, which is why an eligibility call without a country sees it excluded. |  |
| description | string | One line explaining the method where it is offered — payment terms, what happens after the order. Shown to the buyer, so it is the merchant's wording rather than the app's. |  |
| enabled | boolean | A disabled method is never eligible and never reaches a checkout. This is the switch an operator wants: deleting a method the ledger still names — or renaming its `code` — is refused with 409. Defaults to false, so a half-configured method cannot reach a checkout by accident. |  |
| fee_amount | number | The surcharge this method costs the buyer, read as an amount or as a percentage depending on `fee_type`. Never negative — a discount for paying a certain way is not expressible here. Defaults to 0. |  |
| fee_currency | string | ISO 4217 code a fixed fee is expressed in. The database bounds the length at three characters and nothing else, so lower case is stored as written. Defaults to EUR, and lower case is accepted here exactly as the handlers accept it. |  |
| fee_type | string | How `fee_amount` applies: 'none' (no surcharge), 'fixed' (that many units of `fee_currency`) or 'percent' (that share of the order amount). Defaults to 'none'. |  |
| kind | string | Who moves the money. 'self_managed' — invoice, prepayment — means the merchant fulfils and reconciles it outside any PSP, and such a payment authorizes the moment it is created. 'psp' means a configured provider authorizes, captures and refunds it. Defaults to 'self_managed'; 'psp' needs a 'provider' to transact. |  |
| labels | object | Buyer-facing names keyed by language tag — what a storefront shows instead of the operator-facing `name`. Free jsonb: the database constrains neither the tags nor the values, so a client reads the tag it wants and falls back to `en`. |  |
| max_order_value | number | Largest order amount this method may be used for — the usual credit-risk cap on invoice and prepayment. null means no upper bound. |  |
| metadata | object | Free-form merchant data carried on the configuration. This app never reads it — it is storage for the integrations that do (an ERP key for the method, a ledger account, a display hint). |  |
| min_order_value | number | Smallest order amount this method may be used for — the usual guard against paying a €5 order by invoice. null means no lower bound. |  |
| name | string | Operator-facing name, in the language the merchant administers in. What a buyer sees comes from `labels`. Required on create. |  |
| position | integer | Sort order at checkout, ascending — the merchant's preferred payment method first. Defaults to 0. |  |
| provider | string | The PSP code this method transacts through, from GET /payments/providers/catalog. Only meaningful for kind 'psp'; a PSP method that names none falls back to the tenant's `default_provider` setting. Must be a code GET /payments/providers/catalog carries. |  |
| provider_method | string | The provider's own payment-method id ('card', 'paypal', 'sepa_debit') — what the driver is told to charge. Copied onto every payment created with this method as `metadata.provider_method`. |  |


```http request
POST https://api.revenexx.com/v1/payments/methods/defaults
```

** Writes the four methods a shop starts with — invoice and prepayment as self-managed, card and PayPal routed at the mock PSP so a fresh install can complete a checkout end to end — together with the four provider rows behind them: the built-in mock plus Stripe, PayPal and Novalnet, the three connectors this app opens outbound. The app already runs this for itself when it is installed (it listens on app.installed), so calling the route is for the second time and after: a method someone deleted, or a row a later release added that an existing install never got. Stripe, PayPal and Novalnet arrive disabled, in test mode and without credentials — the operator fills those in — while the mock arrives enabled, because it moves no money. Re-running is safe by design: it never duplicates a row and never overwrites an existing one, so nothing an operator has set can be undone by calling it again. Only genuinely missing option keys (a logo added after the first install) are filled, and those rows are reported as &quot;updated&quot; rather than created. **


```http request
POST https://api.revenexx.com/v1/payments/methods/eligible
```

** The checkout&#039;s question — &quot;what can THIS buyer pay with?&quot; — answered server-side before any PSP is involved, so the storefront never renders a method the create would then refuse with 422. It evaluates the buyer context against every configured method: disabled, a country outside `countries`, an amount outside `min_order_value`/`max_order_value`. Restriction dimensions are ANDed and entries within one are ORed, and an empty dimension means unrestricted. Eligible methods come back sorted by `position` with their fee already computed for this amount; everything else lands in `excluded` with the reason in words, which is what makes a support question answerable. It reads only — nothing is written and no provider is called. Two things it does NOT check: whether the method&#039;s PSP is configured and enabled (a method whose provider is switched off is still offered here and fails at POST /payments — a provider a method names can no longer be deleted, which closes the other half of the same gap), and anything about the buyer beyond country and amount. A context that matches nothing is 200 with an empty `methods` list, never 404. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| amount | number | The order amount the order-value bounds are checked against and the percentage fees are computed from. Defaults to 0, which excludes every method carrying a minimum. Nothing is written, so the ledger's own amount bound does not apply here. |  |
| country | string | The buyer's ISO 3166-1 alpha-2 country code. A method restricted to countries is excluded without it — an unknown buyer sees only the unrestricted methods, which is the safe default and not a bug. |  |
| currency | string | ISO 4217 code the amount is in, echoed onto every computed fee. Defaults to EUR. This app does no conversion: the fee comes back in the currency it was asked with. |  |


```http request
DELETE https://api.revenexx.com/v1/payments/methods/{id}
```

** payments.method_code is a CODE, not a foreign key: a payment records what happened and has to survive the configuration it was made with. The cost of that looseness is that deleting a method turns every payment made with it into a row naming something that no longer exists. So the count is taken HERE and answered as 409 with the number, rather than left to whoever is about to click delete — a client that pre-counts asks a second question whose answer disagrees the moment a payment lands between the two calls. Disabling the method (enabled: false) is what an operator usually meant and stays available. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The payment method configuration. A uuid — the data plane casts this segment and answers 400, not 404, for anything else. |  |


```http request
GET https://api.revenexx.com/v1/payments/methods/{id}
```

** One configuration, every column, addressed by its row id — the edit form&#039;s read. It is addressed by ID and there is no route that takes a `code`, which matters because the CODE is what a checkout, a payment and an ERP name a method by: to resolve one, filter the list (`GET /payments/methods?code=invoice`), which answers a page of at most one row because (tenant_id, code) is unique. Reading a method says nothing about whether a buyer may use it — that is POST /payments/methods/eligible — and nothing about whether its PSP can transact, which is under the provider configuration. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The payment method configuration. A uuid — the data plane casts this segment and answers 400, not 404, for anything else. |  |


```http request
PUT https://api.revenexx.com/v1/payments/methods/{id}
```

** A PUT that PATCHES: only the keys in the body are written and every omitted column keeps its value, so `{&quot;enabled&quot;: false}` is the whole request for taking a method out of checkout. A body with no writable key is refused with 400 rather than treated as a no-op. This is the route for all three things an operator changes about a method after it exists — the `enabled` switch that puts it in or out of checkout, the fee it charges (`fee_type`, `fee_amount`, `fee_currency`) and the restrictions that decide who is offered it (`countries`, `min_order_value`, `max_order_value`) — alongside its labels, description and `position`. `enabled: false` is the safe way to retire one — it disappears from POST /payments/methods/eligible immediately and stays on every payment ever made with it. The one write this route refuses is a rename of `code` while the ledger still names the old one. The three tables of this app carry no foreign keys at all: a payment names its method by `method_code` and its acquirer by `provider`, both plain text, because a payment records what happened and has to survive the configuration it was made with. So the database will not stop this — whatever the ledger still names, it goes on naming. A rename would therefore leave every recorded payment pointing at a code no configuration carries, which is the same harm DELETE on this row answers 409 for — so it answers the same 409, with the same `method_in_use` code and the same count. Renaming a method nothing has been paid with is still free, and so is every other column at any time. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The payment method configuration. A uuid — the data plane casts this segment and answers 400, not 404, for anything else. |  |
| code | string | The machine name of the method, unique per tenant and lower case by convention ('invoice', 'prepayment', 'card', 'paypal'). It is the string the checkout asks for, the string every payment stores, and therefore the one value here that cannot be changed freely: renaming it would leave the ledger naming something that no longer exists, so it is refused with 409 for as long as any payment names it. Required on create. |  |
| countries | array | Allowed ISO 3166-1 alpha-2 country codes, compared upper-cased against the buyer country. null or an empty list means unrestricted — the invoice method this app seeds is restricted to DE, which is why an eligibility call without a country sees it excluded. |  |
| description | string | One line explaining the method where it is offered — payment terms, what happens after the order. Shown to the buyer, so it is the merchant's wording rather than the app's. |  |
| enabled | boolean | A disabled method is never eligible and never reaches a checkout. This is the switch an operator wants: deleting a method the ledger still names — or renaming its `code` — is refused with 409. Defaults to false, so a half-configured method cannot reach a checkout by accident. |  |
| fee_amount | number | The surcharge this method costs the buyer, read as an amount or as a percentage depending on `fee_type`. Never negative — a discount for paying a certain way is not expressible here. Defaults to 0. |  |
| fee_currency | string | ISO 4217 code a fixed fee is expressed in. The database bounds the length at three characters and nothing else, so lower case is stored as written. Defaults to EUR, and lower case is accepted here exactly as the handlers accept it. |  |
| fee_type | string | How `fee_amount` applies: 'none' (no surcharge), 'fixed' (that many units of `fee_currency`) or 'percent' (that share of the order amount). Defaults to 'none'. |  |
| kind | string | Who moves the money. 'self_managed' — invoice, prepayment — means the merchant fulfils and reconciles it outside any PSP, and such a payment authorizes the moment it is created. 'psp' means a configured provider authorizes, captures and refunds it. Defaults to 'self_managed'; 'psp' needs a 'provider' to transact. |  |
| labels | object | Buyer-facing names keyed by language tag — what a storefront shows instead of the operator-facing `name`. Free jsonb: the database constrains neither the tags nor the values, so a client reads the tag it wants and falls back to `en`. |  |
| max_order_value | number | Largest order amount this method may be used for — the usual credit-risk cap on invoice and prepayment. null means no upper bound. |  |
| metadata | object | Free-form merchant data carried on the configuration. This app never reads it — it is storage for the integrations that do (an ERP key for the method, a ledger account, a display hint). |  |
| min_order_value | number | Smallest order amount this method may be used for — the usual guard against paying a €5 order by invoice. null means no lower bound. |  |
| name | string | Operator-facing name, in the language the merchant administers in. What a buyer sees comes from `labels`. Required on create. |  |
| position | integer | Sort order at checkout, ascending — the merchant's preferred payment method first. Defaults to 0. |  |
| provider | string | The PSP code this method transacts through, from GET /payments/providers/catalog. Only meaningful for kind 'psp'; a PSP method that names none falls back to the tenant's `default_provider` setting. Must be a code GET /payments/providers/catalog carries. |  |
| provider_method | string | The provider's own payment-method id ('card', 'paypal', 'sepa_debit') — what the driver is told to charge. Copied onto every payment created with this method as `metadata.provider_method`. |  |

