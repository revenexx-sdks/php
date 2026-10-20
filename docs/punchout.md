# Punchout Service


```http request
GET https://api.revenexx.com/v1/punchout/accounts
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| limit | integer | Page size (default 50, max 200). |  |
| offset | integer | Row offset for pagination (default 0). |  |
| order | string | Sort as 'column.asc' | 'column.desc', e.g. 'created_at.desc'. |  |
| fallback_contact_id | string | The accounts that sign an unnamed buyer in as this contact. Asked by customers before a contact is deleted for good: an account whose fallback is gone turns every buyer the ERP does not name away. Applied and echoed in `filter`; any account, enabled or not. |  |


```http request
POST https://api.revenexx.com/v1/punchout/accounts
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| auth_strategy | string | Null is ignored: a new account takes the default, a corrected one keeps its value. |  |
| channel_code | string |  |  |
| code | string |  |  |
| credential_domain | string |  |  |
| credential_identity | string |  |  |
| credential_secret | string |  |  |
| echo_entry_parameters | boolean | OCI only: send the entry call's own query parameters back with the hand-back, for an SRM that expects them. Credential parameters are never sent back. Null is ignored: a new account takes the default, a corrected one keeps its value. |  |
| enabled | boolean | Null is ignored: a new account takes the default, a corrected one keeps its value. |  |
| external_id | string | The key this punchout account has in the system that OWNS it. An account is a partner identity, and the procurement platform on the other side knows the relationship by an id of its own — a supplier id, a vendor number, an IDS customer name. Unique per tenant where it is set, so a repeated import updates the account it wrote last time instead of adding a second one. `code` is what this shop calls the partner; this is what the partner calls itself. Null for an account an operator typed in, which is the ordinary case. |  |
| external_refs | object | Every OTHER system that knows this partner, keyed by system name — the ERP's vendor number beside the procurement platform's supplier id, because one customer commonly reaches this shop through both. `external_id` is the leading system; this is the rest, and the next one costs no column. Not something to search on: this contract publishes no column filter at all, and the store compares such a field as a whole document — look the account up by `external_id` and read this off the answer. |  |
| fallback_contact_id | string |  |  |
| ids_customer_name | string |  |  |
| login_token | string |  |  |
| metadata | object | Free-form jsonb this tenant owns, and the extension point this entity has never had — anything about the partner relationship that this app does not model, up to the day it earns a column. Nothing here is read when a visit is served: the account's own columns are what the app acts on, `source_data` is what the source said, and this is what you say. |  |
| name | string |  |  |
| organization_id | string |  |  |
| protocol | string |  |  |
| protocol_version | string | The version of its protocol the account speaks — one of GET /punchout/vocabularies/protocol-versions for that protocol: OCI 4.0 or 5.0 (it decides which fields a hand-back carries), an IDS version this shop answers `SV` with. A cXML account states none; each cXML document carries its own. Any other value is refused. Omitted means the protocol's default. |  |
| purchase_mode | string | Null is ignored: a new account takes the default, a corrected one keeps its value. |  |
| secure_oci | boolean | Null is ignored: a new account takes the default, a corrected one keeps its value. |  |
| session_ttl_override_minutes | integer | How long a visit of this account stays open, overriding the tenant's `session_ttl_minutes` setting. Null — the ordinary case — means the tenant's lifetime. |  |
| shared_secret | string |  |  |
| source_data | object | What the source said about this account, kept as it said it. Carries the ETag a write-back has to hand back in `If-Match`, and the source fields this app does not model — without it those are lost on the first edit made here. Not a place for anything the partner authenticates with: what an ERP sends to get in is written to the account's own write-only fields, which no route answers. |  |
| source_synced_at | string | When this account was last confirmed against its source. A delta run asks for changes since it, and an operator reads it to see that a feed has gone quiet. Editing the account here does not touch it: it says when the SOURCE was last seen, not when the row changed. Null for an account no source owns. |  |
| start_page_url | string | Where a buyer of THIS account lands after entry, overriding the tenant's `storefront_url` setting. Leave it empty: the entry URL is derived from the storefront address (`entry_url`), and an override is for a buyer who should land on a page of their own. Its host is the host the entry URL is derived from. |  |
| unknown_user_policy | string | Null is ignored: a new account takes the default, a corrected one keeps its value. |  |


```http request
DELETE https://api.revenexx.com/v1/punchout/accounts/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
GET https://api.revenexx.com/v1/punchout/accounts/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
PUT https://api.revenexx.com/v1/punchout/accounts/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |
| auth_strategy | string | Null is ignored: a new account takes the default, a corrected one keeps its value. |  |
| channel_code | string |  |  |
| code | string |  |  |
| credential_domain | string |  |  |
| credential_identity | string |  |  |
| credential_secret | string |  |  |
| echo_entry_parameters | boolean | OCI only: send the entry call's own query parameters back with the hand-back, for an SRM that expects them. Credential parameters are never sent back. Null is ignored: a new account takes the default, a corrected one keeps its value. |  |
| enabled | boolean | Null is ignored: a new account takes the default, a corrected one keeps its value. |  |
| external_id | string | The key this punchout account has in the system that OWNS it. An account is a partner identity, and the procurement platform on the other side knows the relationship by an id of its own — a supplier id, a vendor number, an IDS customer name. Unique per tenant where it is set, so a repeated import updates the account it wrote last time instead of adding a second one. `code` is what this shop calls the partner; this is what the partner calls itself. Null for an account an operator typed in, which is the ordinary case. |  |
| external_refs | object | Every OTHER system that knows this partner, keyed by system name — the ERP's vendor number beside the procurement platform's supplier id, because one customer commonly reaches this shop through both. `external_id` is the leading system; this is the rest, and the next one costs no column. Not something to search on: this contract publishes no column filter at all, and the store compares such a field as a whole document — look the account up by `external_id` and read this off the answer. |  |
| fallback_contact_id | string |  |  |
| ids_customer_name | string |  |  |
| login_token | string |  |  |
| metadata | object | Free-form jsonb this tenant owns, and the extension point this entity has never had — anything about the partner relationship that this app does not model, up to the day it earns a column. Nothing here is read when a visit is served: the account's own columns are what the app acts on, `source_data` is what the source said, and this is what you say. |  |
| name | string |  |  |
| organization_id | string |  |  |
| protocol | string |  |  |
| protocol_version | string | The version of its protocol the account speaks — one of GET /punchout/vocabularies/protocol-versions for that protocol: OCI 4.0 or 5.0 (it decides which fields a hand-back carries), an IDS version this shop answers `SV` with. A cXML account states none; each cXML document carries its own. Any other value is refused. Omitted means the protocol's default. |  |
| purchase_mode | string | Null is ignored: a new account takes the default, a corrected one keeps its value. |  |
| secure_oci | boolean | Null is ignored: a new account takes the default, a corrected one keeps its value. |  |
| session_ttl_override_minutes | integer | How long a visit of this account stays open, overriding the tenant's `session_ttl_minutes` setting. Null — the ordinary case — means the tenant's lifetime. |  |
| shared_secret | string |  |  |
| source_data | object | What the source said about this account, kept as it said it. Carries the ETag a write-back has to hand back in `If-Match`, and the source fields this app does not model — without it those are lost on the first edit made here. Not a place for anything the partner authenticates with: what an ERP sends to get in is written to the account's own write-only fields, which no route answers. |  |
| source_synced_at | string | When this account was last confirmed against its source. A delta run asks for changes since it, and an operator reads it to see that a feed has gone quiet. Editing the account here does not touch it: it says when the SOURCE was last seen, not when the row changed. Null for an account no source owns. |  |
| start_page_url | string | Where a buyer of THIS account lands after entry, overriding the tenant's `storefront_url` setting. Leave it empty: the entry URL is derived from the storefront address (`entry_url`), and an override is for a buyer who should land on a page of their own. Its host is the host the entry URL is derived from. |  |
| unknown_user_policy | string | Null is ignored: a new account takes the default, a corrected one keeps its value. |  |


```http request
POST https://api.revenexx.com/v1/punchout/accounts/{id}/preview
```

** What a buyer's system would receive, before a buyer is in the shop: the account's mappings run over a cart that exists, through the same production code a real hand-back runs, and the field set or the document that comes out. Writes nothing — no visit, no transfer, no correlation key kept — and posts nothing. `mapping` says which mappings produced nothing and why, because a field the document deliberately leaves out reads exactly like one whose source resolved to nothing and only one of the two is a fault. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |
| cart_id | string | The cart to produce the payload for — already priced, the way a hand-back reads one. |  |


```http request
POST https://api.revenexx.com/v1/punchout/accounts/{id}/probe
```

** Punchout entry is served on the tenant's own storefront host and never by this app (adr/ADR-0002), so whether an account is reachable is a fact about somebody else's runtime — a per-DOMAIN fact, which no install-time check can see. The probe calls the account's own public entry address, carrying a single-use token this app's entry route echoes back, and records what it found: reachable, not_found, not_entry, wrong_host, tls, timeout, unreachable, unconfigured. Only the echo counts as reachable — a storefront that answers 200 with its own page for every unknown path is exactly the setup this exists to catch. The outcome, the address it was taken on and what came back are answered and kept on the account. Changing the entry URL retires the finding. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |
| data | object | Request body |  |


```http request
POST https://api.revenexx.com/v1/punchout/accounts/{id}/test
```

** The operator's way to tell "the ERP is configured wrong" from "we are broken", with no procurement system in the loop. Builds the entry call this account would receive — its own credentials, in the transport its standard uses — hands it to the same adapter an ERP reaches, and answers the status, the headers and the body the storefront would have written out, rather than a summary of them. It leaves nothing that acts: an entry call opens a visit, so the visit it opened is marked as the tester's and revoked before the answer goes back, its refusals do not count against the credential throttle, and it sends no action that imports a cart. It creates no cart and records no transfer. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |
| data | object | Request body |  |


```http request
POST https://api.revenexx.com/v1/punchout/defaults
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| data | object | Request body |  |


```http request
GET https://api.revenexx.com/v1/punchout/entry-refusals
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| limit | integer | Page size (default 50, max 200). |  |
| offset | integer | Row offset for pagination (default 0). |  |
| order | string | Sort as 'column.asc' | 'column.desc', e.g. 'created_at.desc'. |  |


```http request
POST https://api.revenexx.com/v1/punchout/entry/cxml/{account_code}
```

** cXML PunchOutSetupRequest for the account named in the path. The answer must be the PunchOutSetupResponse itself, in the same HTTP response — which is the whole reason ADR-0002 exists. What authenticates is Sender/Credential, not From: in the usual shape a network hub has already verified the buyer and presents its OWN credential (§5.3.2.2). Direct PunchOut (§5.7) authenticates by MAC or client certificate and is not supported. A requisition is reopened with operation — create, edit and inspect are served, with the ERP sending the lines back in the request and inspect recorded as view-only; source is not. Reached from the tenant's storefront host, never from this app's own URL and never as a public gateway route — see adr/ADR-0002. The storefront pass-through forwards the ERP's request as the envelope above and returns this answer unchanged. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| account_code | string | **Required**  |  |
| body_b64 | string | The raw request body, base64-encoded. Base64 because a cXML or IDS document must survive byte-for-byte — re-serialising it breaks signatures and encodings. |  |
| client_ip | string | The external system's IP, for the session record and rate accounting. |  |
| content_type | string | The body content type as sent. |  |
| headers | object | Request headers as sent, minus hop-by-hop and storefront session headers. |  |
| method | string | The method the external system used ('GET' for a typical OCI entry, 'POST' for cXML/IDS). |  |
| query | object | Query parameters as sent — OCI carries USERNAME/PASSWORD/HOOK_URL here. |  |


```http request
POST https://api.revenexx.com/v1/punchout/entry/ids
```

** IDS entry on one shared endpoint: the account is resolved from kndnr/name_kunde/pw_kunde in the body, because that is how IDS clients are configured. POST-only with multipart/form-data — the standard rules GET out because a cart does not fit in a query string (§5.1a) — and parameter names are lower-case single words. WKE (shop), ADL (one article), AS (a search) and WKS (a cart sent in, which always becomes a NEW cart) authenticate; LI and SV are answered BEFORE authentication, because the standard sends only the action code with them and they are what makes setup self-service. HLS, the heating-label list, is refused as not implemented rather than falling through to "come in and shop". Reached from the tenant's storefront host, never from this app's own URL and never as a public gateway route — see adr/ADR-0002. The storefront pass-through forwards the ERP's request as the envelope above and returns this answer unchanged. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| body_b64 | string | The raw request body, base64-encoded. Base64 because a cXML or IDS document must survive byte-for-byte — re-serialising it breaks signatures and encodings. |  |
| client_ip | string | The external system's IP, for the session record and rate accounting. |  |
| content_type | string | The body content type as sent. |  |
| headers | object | Request headers as sent, minus hop-by-hop and storefront session headers. |  |
| method | string | The method the external system used ('GET' for a typical OCI entry, 'POST' for cXML/IDS). |  |
| query | object | Query parameters as sent — OCI carries USERNAME/PASSWORD/HOOK_URL here. |  |


```http request
POST https://api.revenexx.com/v1/punchout/entry/oci/{account_code}
```

** OCI entry for the account named in the path — V8's externalIdentifier, so an existing ERP configuration migrates unchanged. Answers a 302 to the account's start page carrying the session handle, and nothing else: no credential and no sign-in secret ride in a redirect. FUNCTION is a closed upper-case set and only its ABSENCE means "let the buyer shop"; the Level 2 functions (DETAIL, VALIDATE, SOURCING, BACKGROUND_SEARCH, DOWNLOADJSON, DETAILADD, QUANTITYCHECK) answer 501 naming the one asked for, and an undefined one a 400 — neither counts against the credential throttle. This address also carries Secure OCI's two backend legs, INITIALIZE and RETRIEVEOCI, where the cart is FETCHED rather than posted. Reached from the tenant's storefront host, never from this app's own URL and never as a public gateway route — see adr/ADR-0002. The storefront pass-through forwards the ERP's request as the envelope above and returns this answer unchanged. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| account_code | string | **Required**  |  |
| body_b64 | string | The raw request body, base64-encoded. Base64 because a cXML or IDS document must survive byte-for-byte — re-serialising it breaks signatures and encodings. |  |
| client_ip | string | The external system's IP, for the session record and rate accounting. |  |
| content_type | string | The body content type as sent. |  |
| headers | object | Request headers as sent, minus hop-by-hop and storefront session headers. |  |
| method | string | The method the external system used ('GET' for a typical OCI entry, 'POST' for cXML/IDS). |  |
| query | object | Query parameters as sent — OCI carries USERNAME/PASSWORD/HOOK_URL here. |  |


```http request
GET https://api.revenexx.com/v1/punchout/field-mappings
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| limit | integer | Page size (default 50, max 200). |  |
| offset | integer | Row offset for pagination (default 0). |  |
| order | string | Sort as 'column.asc' | 'column.desc', e.g. 'created_at.desc'. |  |


```http request
POST https://api.revenexx.com/v1/punchout/field-mappings
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| account_id | string |  |  |
| document | string |  |  |
| emit | string |  |  |
| enabled | boolean |  |  |
| mutators | object |  |  |
| position | integer |  |  |
| protocol | string |  |  |
| scope | string |  |  |
| source | string |  |  |
| source_config | object |  |  |
| target | string |  |  |
| target_kind | string |  |  |


```http request
GET https://api.revenexx.com/v1/punchout/field-mappings/export
```

** The inverse of the import, and what makes a configuration reviewable and restorable outside the editor — and diffable against the installation it came from. Not a perfect inverse, and it says so: a mapping whose source the old platform has no driver for is left out and named in `dropped`. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| account_id | string | **Required** The account whose mappings are written out. |  |


```http request
POST https://api.revenexx.com/v1/punchout/field-mappings/import
```

** Takes a V8 `field_mapping` — the whole column, one protocol's sub-object, or what V8's own export action writes — and records it as mappings for one account. Idempotent on the record's own key (protocol, document, scope, target): re-importing a corrected configuration corrects the rows rather than adding beside them, which is what makes a migration rehearsable. A rule this vocabulary cannot express is NEVER stored and comes back in `refused` with the target it filled, the type it named and why; `skipped` names a group the old platform itself never read. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| account_id | string | The account the configuration belongs to. |  |
| configuration | object | The configuration as the old platform stored it. |  |
| protocol | string | Optional, and only as a check: it has to be the protocol the account speaks. IDS has no configuration to carry over — the old platform held its document in code. |  |


```http request
DELETE https://api.revenexx.com/v1/punchout/field-mappings/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
GET https://api.revenexx.com/v1/punchout/field-mappings/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
PUT https://api.revenexx.com/v1/punchout/field-mappings/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |
| account_id | string |  |  |
| document | string |  |  |
| emit | string |  |  |
| enabled | boolean |  |  |
| mutators | object |  |  |
| position | integer |  |  |
| protocol | string |  |  |
| scope | string |  |  |
| source | string |  |  |
| source_config | object |  |  |
| target | string |  |  |
| target_kind | string |  |  |


```http request
GET https://api.revenexx.com/v1/punchout/sessions
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| limit | integer | Page size (default 50, max 200). |  |
| offset | integer | Row offset for pagination (default 0). |  |
| order | string | Sort as 'column.asc' | 'column.desc', e.g. 'created_at.desc'. |  |


```http request
POST https://api.revenexx.com/v1/punchout/sessions
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| account_id | string |  |  |
| cart_id | string |  |  |
| channel_code | string |  |  |
| claimed_at | string |  |  |
| closed_reason | string |  |  |
| contact_id | string |  |  |
| correlation_key | string |  |  |
| entry_action | string |  |  |
| entry_intent | object |  |  |
| entry_payload | object |  |  |
| expires_at | string |  |  |
| external_user_id | string |  |  |
| order_id | string |  |  |
| order_number | string |  |  |
| order_status | string |  |  |
| ordered_at | string |  |  |
| organization_id | string |  |  |
| origin | string |  |  |
| protocol | string |  |  |
| psid | string |  |  |
| purchase_mode | string |  |  |
| return_method | string |  |  |
| return_url | string |  |  |
| secure_session_id | string |  |  |
| secure_session_used_at | string |  |  |
| secure_transmission_id | string |  |  |
| status | string |  |  |
| transferred_at | string |  |  |


```http request
DELETE https://api.revenexx.com/v1/punchout/sessions/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
GET https://api.revenexx.com/v1/punchout/sessions/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
PUT https://api.revenexx.com/v1/punchout/sessions/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |
| account_id | string |  |  |
| cart_id | string |  |  |
| channel_code | string |  |  |
| claimed_at | string |  |  |
| closed_reason | string |  |  |
| contact_id | string |  |  |
| correlation_key | string |  |  |
| entry_action | string |  |  |
| entry_intent | object |  |  |
| entry_payload | object |  |  |
| expires_at | string |  |  |
| external_user_id | string |  |  |
| order_id | string |  |  |
| order_number | string |  |  |
| order_status | string |  |  |
| ordered_at | string |  |  |
| organization_id | string |  |  |
| origin | string |  |  |
| protocol | string |  |  |
| psid | string |  |  |
| purchase_mode | string |  |  |
| return_method | string |  |  |
| return_url | string |  |  |
| secure_session_id | string |  |  |
| secure_session_used_at | string |  |  |
| secure_transmission_id | string |  |  |
| status | string |  |  |
| transferred_at | string |  |  |


```http request
POST https://api.revenexx.com/v1/punchout/sessions/{psid}/claim
```

** The start of a punchout visit in the shop. Resolves the buyer the external system named to an ordinary contact — the named one, else the account's fallback contact, else whatever the account's policy for an unknown name says — gives the visit a cart of its own if it brought none (a new, empty one, owned by the visit's handle rather than by the contact, because one contact may carry several ERP users' visits at once), asks the app that owns buyer authentication to sign that contact in, and answers the secret together with the channel, the action and that cart. The secret is single-use and short-lived: redeem it server-side, and keep it out of a redirect URL, a browser history and a Referer. Answered exactly ONCE — the handle travelled through the external system in the clear. A second claim, an expired or revoked visit, one already handed back and a handle nobody minted all get the same answer, deliberately. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| psid | string | **Required**  |  |
| data | object | Request body |  |


```http request
POST https://api.revenexx.com/v1/punchout/sessions/{psid}/ordered
```

** The other way an IDS visit ends, for an account whose purchase mode is order: the buyer checked out in the shop, and the order is an ORDINARY order placed through the ordinary checkout. Call it after the checkout. This app believes the orders app, not the caller: it reads the order the visit's cart became, records its id, number and status on the visit and closes it as ordered. An order awaiting the buyer organisation's approval counts — the cart is converted either way — and a later decline changes nothing here. A visit that ran out while the buyer checked out is still closed as ordered when the order was created before it ran out. A retried call answers the visit as it was closed. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| psid | string | **Required**  |  |
| data | object | Request body |  |


```http request
POST https://api.revenexx.com/v1/punchout/sessions/{psid}/return
```

** The end of a punchout visit. Answers where the cart goes, by which method and encoding, and the mapped fields to submit — one shape for all three protocols, whether that means dozens of named fields (OCI) or one field holding a whole document (cXML, IDS). The payload is ANSWERED, never posted from here: a request from this app carries none of the buyer's ERP session, and the protocols that expect a browser form post would reject it even if it did. Records a transfer with its normalised lines and the exact payload, mints a correlation key into that payload so an order arriving weeks later can be matched to it, and closes the visit as transferred. Creates NO order and reserves NO stock — the procurement system has decided nothing. On an IDS account whose purchase mode is order_and_transfer the cart was already ordered through the ordinary checkout: the hand-back requires that order, reads it from the orders app, names it in the document (RueckgabeKZ, OrderConfNo) and on the transfer, and closes the visit as transferred. A retried call answers the same payload and records no second transfer; a visit that expired or was revoked is refused, with the same answer a handle that never existed gets. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| psid | string | **Required**  |  |
| data | object | Request body |  |


```http request
GET https://api.revenexx.com/v1/punchout/setup
```

** The steps are the ones cockpit.json declares under setup.steps: the shipped field mappings and the first punchout account. Each is done when its table holds a row, so none is marked by hand. **


```http request
GET https://api.revenexx.com/v1/punchout/transfer-items
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| limit | integer | Page size (default 50, max 200). |  |
| offset | integer | Row offset for pagination (default 0). |  |
| order | string | Sort as 'column.asc' | 'column.desc', e.g. 'created_at.desc'. |  |


```http request
POST https://api.revenexx.com/v1/punchout/transfer-items
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| currency | string |  |  |
| external_ref | string |  |  |
| line_gross | number |  |  |
| line_net | number |  |  |
| metadata | object |  |  |
| name | string |  |  |
| position | integer |  |  |
| product_id | string |  |  |
| quantity | number |  |  |
| sku | string |  |  |
| tax_rate | number |  |  |
| transfer_id | string |  |  |
| unit | string |  |  |
| unit_price | number |  |  |


```http request
GET https://api.revenexx.com/v1/punchout/transfer-items/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
GET https://api.revenexx.com/v1/punchout/transfers
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| limit | integer | Page size (default 50, max 200). |  |
| offset | integer | Row offset for pagination (default 0). |  |
| order | string | Sort as 'column.asc' | 'column.desc', e.g. 'created_at.desc'. |  |


```http request
POST https://api.revenexx.com/v1/punchout/transfers
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| account_id | string |  |  |
| cart_id | string |  |  |
| contact_id | string |  |  |
| correlation_key | string |  |  |
| currency | string |  |  |
| external_id | string | The id the receiving system has for this hand-back — a cXML `PayloadID`, the reference an ERP answers the posted cart with. It is the idempotency key of the protocol rather than of this app: unique per tenant where it is set, so a hand-back a buyer's browser replays cannot leave a second transfer on record. Distinct from `correlation_key`, which this app mints and stamps on the visit before the mapping runs — that one is ours and is always there, this one is theirs and is filled by whoever records the receipt. |  |
| external_refs | object | Every other system that knows this hand-back, keyed by system name — the procurement platform's own id beside the order number the ERP later gives it. `external_id` is the leading system; this is the rest. Not something to search on: this contract publishes no column filter at all, and the store compares such a field as a whole document. |  |
| item_count | integer |  |  |
| matched_at | string |  |  |
| matched_order_id | string |  |  |
| organization_id | string |  |  |
| payload | object |  |  |
| problems | array | Every field the payload is missing, and why: a mapping that failed, or a value the protocol's type could not take. Empty when nothing is missing. `transfer.degraded` announces the same, once. |  |
| protocol | string |  |  |
| session_id | string |  |  |
| source_data | object | What the receiving system said back, kept as it said it — the acknowledgement, its ETag, and the fields of it this app does not model. A transfer is evidence and is added to but never rewritten, so this is where a later answer about it goes rather than over `payload`, which is what was handed over and must stay as it was handed over. |  |
| source_synced_at | string | When this transfer was last confirmed against the system that received it — what an acknowledgement run stamps, and what tells an operator that the receipts have stopped arriving. Null while nobody has confirmed it, which is every transfer this app writes on its own: a hand-back answers a payload for a browser to submit, and whether it arrived is somebody else's answer. |  |
| target_url | string |  |  |
| total_gross | number |  |  |
| total_net | number |  |  |
| transferred_at | string |  |  |


```http request
GET https://api.revenexx.com/v1/punchout/transfers/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
PUT https://api.revenexx.com/v1/punchout/transfers/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |
| account_id | string |  |  |
| cart_id | string |  |  |
| contact_id | string |  |  |
| correlation_key | string |  |  |
| currency | string |  |  |
| external_id | string | The id the receiving system has for this hand-back — a cXML `PayloadID`, the reference an ERP answers the posted cart with. It is the idempotency key of the protocol rather than of this app: unique per tenant where it is set, so a hand-back a buyer's browser replays cannot leave a second transfer on record. Distinct from `correlation_key`, which this app mints and stamps on the visit before the mapping runs — that one is ours and is always there, this one is theirs and is filled by whoever records the receipt. |  |
| external_refs | object | Every other system that knows this hand-back, keyed by system name — the procurement platform's own id beside the order number the ERP later gives it. `external_id` is the leading system; this is the rest. Not something to search on: this contract publishes no column filter at all, and the store compares such a field as a whole document. |  |
| item_count | integer |  |  |
| matched_at | string |  |  |
| matched_order_id | string |  |  |
| organization_id | string |  |  |
| payload | object |  |  |
| problems | array | Every field the payload is missing, and why: a mapping that failed, or a value the protocol's type could not take. Empty when nothing is missing. `transfer.degraded` announces the same, once. |  |
| protocol | string |  |  |
| session_id | string |  |  |
| source_data | object | What the receiving system said back, kept as it said it — the acknowledgement, its ETag, and the fields of it this app does not model. A transfer is evidence and is added to but never rewritten, so this is where a later answer about it goes rather than over `payload`, which is what was handed over and must stay as it was handed over. |  |
| source_synced_at | string | When this transfer was last confirmed against the system that received it — what an acknowledgement run stamps, and what tells an operator that the receipts have stopped arriving. Null while nobody has confirmed it, which is every transfer this app writes on its own: a hand-back answers a payload for a browser to submit, and whether it arrived is somebody else's answer. |  |
| target_url | string |  |  |
| total_gross | number |  |  |
| total_net | number |  |  |
| transferred_at | string |  |  |


```http request
GET https://api.revenexx.com/v1/punchout/vocabularies
```

** Discovery for the vocabulary routes: the enums this app enforces, each with its name, its title and its description — and deliberately WITHOUT its values, so a UI can cache this one small answer and fetch only the value sets it renders. Names: auth-strategies, entry-actions, entry-probe-outcome, mapping-documents, mapping-emit, mapping-mutators, mapping-scopes, mapping-sources, mapping-target-kinds, origins, protocol-versions, protocols, purchase-modes, refusal-reasons, return-methods, session-statuses, unknown-user-policies. Fetch one with GET /punchout/vocabularies/{name}. **


```http request
GET https://api.revenexx.com/v1/punchout/vocabularies/{name}
```

** One vocabulary in full: every permitted value with its title, its description and the badge tone a UI colours it with. The values are read out of the column's CHECK constraint, so the served set IS the set the database accepts and the set the mapping engine understands — a mapping editor offering anything else would produce silently empty fields. `mapping-sources` carries the 25 sources of ADR-0003 (three of them namespaced `cxml.*`, offered only for a cXML account) and `mapping-mutators` the 20 chainable mutators; each value's description names the config keys it reads and which of them are required. Answers 404 for an unknown name. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| name | string | **Required** The vocabulary name — the part after the dot in the qualified id. |  |

