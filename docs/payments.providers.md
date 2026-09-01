# PaymentsProviders Service


```http request
GET https://api.revenexx.com/v1/payments/logos/{slug}
```

** Answers the SVG document for a catalog provider code (a shipped assets/logos/{code}.svg, otherwise a generated monogram tile), with content-type image/svg+xml and a one-day cache. It is the one route in this app that needs no tenant identity: the logos are bundled with the app rather than owned by anyone, so nothing here is tenant data and no key or tenant header is required to fetch one — which is what lets a storefront or a Cockpit screen point an &lt;img&gt; straight at it. Called directly on the app domain (https://revenexx-payments.apps.revenexx.io/payments/logos/stripe) the response carries its real content-type; through the gateway the body is passed through but labelled application/json, so use the app domain for &lt;img&gt; sources. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| slug | string | **Required** A catalog provider code, as GET /payments/providers/catalog lists it. Case-insensitive, and a trailing '.svg' is ignored. Not tenant data: the logos ship with the app and are identical for everyone. |  |


```http request
GET https://api.revenexx.com/v1/payments/providers
```

** PSP secrets are write-only: &#039;credentials&#039; and &#039;webhook_secret&#039; are accepted on create/update, stored for the drivers, and never returned by any route — the responses carry the public columns only (id, provider, name, enabled, test_mode, options, timestamps). To rotate a secret, write the new value; there is no way to read the current one back. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| limit | integer | Page size (default 50, max 200). |  |
| offset | integer | Row offset for pagination (default 0). |  |
| order | string | Sort by one column: 'column' | 'column.asc' | 'column.desc'. A bare column sorts ascending. Anything else is refused with 400. |  |
| provider | string | Exact provider code. |  |
| enabled | boolean | Restrict to enabled or disabled providers. |  |
| test_mode | boolean | Restrict to sandbox or live configurations. |  |


```http request
POST https://api.revenexx.com/v1/payments/providers
```

** Activates one PSP account of this tenant. The `provider` code is not free text: it has to be one the catalog carries, and anything else is refused with 400 and a message listing the codes that are — so GET /payments/providers/catalog is the call that comes first, both for the code itself and for the credential field names this provider expects. PSP secrets are write-only: &#039;credentials&#039; and &#039;webhook_secret&#039; are accepted on create/update, stored for the drivers, and never returned by any route — the responses carry the public columns only (id, provider, name, enabled, test_mode, options, timestamps). To rotate a secret, write the new value; there is no way to read the current one back. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| credentials | object | The PSP's own API credentials, under the key names its auth scheme expects — `GET /payments/providers/catalog` publishes them per provider as `credential_fields` (Stripe: `api_key`; PayPal: `client_id` + `client_secret`; Novalnet: `api_key` + `payment_access_key` + `tariff_id`). They come from the provider's own dashboard, are handed to the driver in-process, and are never read back by any route. Write-only: to rotate one, write the new value. Whatever a document shows here is a placeholder. |  |
| enabled | boolean | Only an enabled provider takes NEW payments: a method pointing at a disabled one falls through to the tenant's `fallback_provider`, and to a 422 if there is none. Nothing else reads it — capture, cancel and refund on the payments this PSP already holds go on working — which is what makes disabling the safe retirement and deleting the refused one. Defaults to false — finish the credentials before switching it on. |  |
| name | string | Operator-facing name of the configuration. Defaults to the catalog label, and is worth changing when a tenant runs two accounts with one PSP. null, omitted or empty falls back to the catalog label. |  |
| options | object | Per-provider switches this app understands, plus anything the merchant keeps beside them. Three keys are the app's own: `logo_url` (the bundled logo, filled in when the provider is seeded), `capture_method` and `three_ds` (what the prism driver does today). Free jsonb — an unknown key is stored and ignored. |  |
| provider | string | The catalog code of the PSP this row configures — one row per provider per tenant. GET /payments/providers/catalog lists every code that may appear here. It is what every payment and every method naming this PSP resolves it by, so changing it is refused with 409 for as long as one of them does. Required on create, and refused with 400 when the catalog does not carry it. |  |
| test_mode | boolean | Whether the driver talks to the PSP's sandbox. New configurations start in test mode: a provider nobody verified must not touch live money. Unstated takes the tenant's own `test_mode_default` setting. |  |
| webhook_secret | string | The signing secret the PSP issues when its webhook endpoint is created, in the provider's own dashboard. webhooks.revenexx.com verifies each callback against it before the dispatcher hands the envelope to this app. Write-only, like `credentials`: it is stored, used, and never read back by any route, so there is nothing to compare a value against — to rotate it, write the new one. Whatever a document shows here is a generated placeholder, not a usable secret — writing it verbatim leaves every callback failing verification. |  |


```http request
GET https://api.revenexx.com/v1/payments/providers/catalog
```

** The closed set of `provider` codes POST /payments/providers accepts — anything else is refused with 400 and a message listing these. It runs to roughly thirty connectors, and each entry says which `driver` moves the money for it: nearly all of them go through the one connector layer this app embeds, hyperswitch-prism, with the built-in mock PSP alongside for demos and E2E. Read it to build the picker on an &quot;add provider&quot; form and to know what a credentials form has to ask for: `auth_type` is the scheme the connector authenticates with and `credential_fields` are the KEY NAMES to put inside `credentials` (never values, which come from the PSP&#039;s own dashboard). It says nothing about this tenant: no credential, no enabled flag, no test mode — that is GET /payments/providers. Watch `available`: a code with `false` has no driver in this deployment yet, so it can be created and stored and every transaction through it fails with `provider_unavailable`. The list is app-shipped and identical for everyone, so it is safe to cache hard and it changes only with a release of this app. **


```http request
DELETE https://api.revenexx.com/v1/payments/providers/{id}
```

** Removes the PSP account row and its stored secrets, once nothing depends on it any more. The three tables of this app carry no foreign keys at all: a payment names its method by `method_code` and its acquirer by `provider`, both plain text, because a payment records what happened and has to survive the configuration it was made with. So the database will not stop this — whatever the ledger still names, it goes on naming. So the database will not stop this and the count is taken HERE, exactly as DELETE /payments/methods/{id} takes it, and answered as one 409 carrying both numbers. Counted first: every payment still in a status a transition starts from — created, requires_action, authorized or captured — because capture, cancel and refund all resolve the provider BY CODE and would answer 422 `provider_not_configured` with the row gone, leaving an authorization that can neither be collected nor released and a captured payment that can no longer be refunded here at all. Counted second: every payment method naming this provider, because POST /payments/methods/eligible does not check providers, so a checkout would go on offering a method whose next POST /payments fails at authorization unless the tenant&#039;s `fallback_provider` names one that is still configured. What is deliberately NOT counted is a settled payment — failed, cancelled or refunded: no transition starts there, so nothing will ask this provider about it again, and a `provider` code is closed catalog data that goes on meaning Stripe or PayPal with no configuration behind it. The refusal names `enabled: false` because that is usually what was meant: a disabled provider stops taking NEW payments exactly as a deleted one does, and every transition on the payments it already holds keeps working, since only the create path asks whether it is enabled. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The PSP configuration. A uuid — the data plane casts this segment and answers 400, not 404, for anything else. |  |


```http request
GET https://api.revenexx.com/v1/payments/providers/{id}
```

** PSP secrets are write-only: &#039;credentials&#039; and &#039;webhook_secret&#039; are accepted on create/update, stored for the drivers, and never returned by any route — the responses carry the public columns only (id, provider, name, enabled, test_mode, options, timestamps). To rotate a secret, write the new value; there is no way to read the current one back. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The PSP configuration. A uuid — the data plane casts this segment and answers 400, not 404, for anything else. |  |


```http request
PUT https://api.revenexx.com/v1/payments/providers/{id}
```

** A partial write: omitted fields keep their value. Three things are changed here in practice — the `credentials` (and `webhook_secret`) when a key is rotated, `test_mode` when an account moves from the PSP&#039;s sandbox to live, and `enabled` when it is switched on or taken out of service. PSP secrets are write-only: &#039;credentials&#039; and &#039;webhook_secret&#039; are accepted on create/update, stored for the drivers, and never returned by any route — the responses carry the public columns only (id, provider, name, enabled, test_mode, options, timestamps). To rotate a secret, write the new value; there is no way to read the current one back. One field is not like the others: `provider` is the CODE every payment and every method resolves this PSP by, so writing a different one is the delete through another door and is refused with the same 409 while anything still names the current code. Switching acquirer is a second configuration plus `enabled: false` on this one, never a rename. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The PSP configuration. A uuid — the data plane casts this segment and answers 400, not 404, for anything else. |  |
| credentials | object | The PSP's own API credentials, under the key names its auth scheme expects — `GET /payments/providers/catalog` publishes them per provider as `credential_fields` (Stripe: `api_key`; PayPal: `client_id` + `client_secret`; Novalnet: `api_key` + `payment_access_key` + `tariff_id`). They come from the provider's own dashboard, are handed to the driver in-process, and are never read back by any route. Write-only: to rotate one, write the new value. Whatever a document shows here is a placeholder. |  |
| enabled | boolean | Only an enabled provider takes NEW payments: a method pointing at a disabled one falls through to the tenant's `fallback_provider`, and to a 422 if there is none. Nothing else reads it — capture, cancel and refund on the payments this PSP already holds go on working — which is what makes disabling the safe retirement and deleting the refused one. Defaults to false — finish the credentials before switching it on. |  |
| name | string | Operator-facing name of the configuration. Defaults to the catalog label, and is worth changing when a tenant runs two accounts with one PSP. Written straight to the database, which refuses an empty one. |  |
| options | object | Per-provider switches this app understands, plus anything the merchant keeps beside them. Three keys are the app's own: `logo_url` (the bundled logo, filled in when the provider is seeded), `capture_method` and `three_ds` (what the prism driver does today). Free jsonb — an unknown key is stored and ignored. |  |
| provider | string | The catalog code of the PSP this row configures — one row per provider per tenant. GET /payments/providers/catalog lists every code that may appear here. It is what every payment and every method naming this PSP resolves it by, so changing it is refused with 409 for as long as one of them does. Required on create, and refused with 400 when the catalog does not carry it. |  |
| test_mode | boolean | Whether the driver talks to the PSP's sandbox. New configurations start in test mode: a provider nobody verified must not touch live money. Unstated takes the tenant's own `test_mode_default` setting. |  |
| webhook_secret | string | The signing secret the PSP issues when its webhook endpoint is created, in the provider's own dashboard. webhooks.revenexx.com verifies each callback against it before the dispatcher hands the envelope to this app. Write-only, like `credentials`: it is stored, used, and never read back by any route, so there is nothing to compare a value against — to rotate it, write the new one. Whatever a document shows here is a generated placeholder, not a usable secret — writing it verbatim leaves every callback failing verification. |  |

