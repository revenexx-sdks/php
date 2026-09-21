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


```http request
POST https://api.revenexx.com/v1/punchout/accounts
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| auth_strategy | string |  |  |
| behaviour | object |  |  |
| channel_code | string |  |  |
| code | string |  |  |
| credential_domain | string |  |  |
| credential_identity | string |  |  |
| credential_secret | string |  |  |
| enabled | boolean |  |  |
| fallback_contact_id | string |  |  |
| ids_customer_name | string |  |  |
| login_token | string |  |  |
| name | string |  |  |
| organization_id | string |  |  |
| protocol | string |  |  |
| protocol_version | string |  |  |
| secure_oci | boolean |  |  |
| session_ttl_minutes | integer |  |  |
| shared_secret | string |  |  |
| start_page_url | string |  |  |
| unknown_user_policy | string |  |  |
| url_threading | boolean |  |  |


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
| auth_strategy | string |  |  |
| behaviour | object |  |  |
| channel_code | string |  |  |
| code | string |  |  |
| credential_domain | string |  |  |
| credential_identity | string |  |  |
| credential_secret | string |  |  |
| enabled | boolean |  |  |
| fallback_contact_id | string |  |  |
| ids_customer_name | string |  |  |
| login_token | string |  |  |
| name | string |  |  |
| organization_id | string |  |  |
| protocol | string |  |  |
| protocol_version | string |  |  |
| secure_oci | boolean |  |  |
| session_ttl_minutes | integer |  |  |
| shared_secret | string |  |  |
| start_page_url | string |  |  |
| unknown_user_policy | string |  |  |
| url_threading | boolean |  |  |


```http request
POST https://api.revenexx.com/v1/punchout/accounts/{id}/preview
```

** What a buyer&#039;s system would receive, before a buyer is in the shop: the account&#039;s mappings run over a cart that exists, through the same production code a real hand-back runs, and the field set or the document that comes out. Writes nothing — no visit, no transfer, no correlation key kept — and posts nothing. `mapping` says which mappings produced nothing and why, because a field the document deliberately leaves out reads exactly like one whose source resolved to nothing and only one of the two is a fault. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |
| cart_id | string | The cart to produce the payload for — already priced, the way a hand-back reads one. |  |


```http request
POST https://api.revenexx.com/v1/punchout/accounts/{id}/probe
```

** Punchout entry is served on the tenant&#039;s own storefront host and never by this app (adr/ADR-0002), so whether an account is reachable is a fact about somebody else&#039;s runtime — a per-DOMAIN fact, which no install-time check can see. The probe calls the account&#039;s own public entry address, carrying a single-use token this app&#039;s entry route echoes back, and records what it found: reachable, not_found, not_entry, wrong_host, tls, timeout, unreachable, unconfigured. Only the echo counts as reachable — a storefront that answers 200 with its own page for every unknown path is exactly the setup this exists to catch. The outcome, the address it was taken on and what came back are answered and kept on the account. Changing the entry URL retires the finding. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |
| data | object | Request body |  |


```http request
POST https://api.revenexx.com/v1/punchout/accounts/{id}/test
```

** The operator&#039;s way to tell &quot;the ERP is configured wrong&quot; from &quot;we are broken&quot;, with no procurement system in the loop. Builds the entry call this account would receive — its own credentials, in the transport its standard uses — hands it to the same adapter an ERP reaches, and answers the status, the headers and the body the storefront would have written out, rather than a summary of them. It leaves nothing that acts: an entry call opens a visit, so the visit it opened is marked as the tester&#039;s and revoked before the answer goes back, its refusals do not count against the credential throttle, and it sends no action that imports a cart. It creates no cart and records no transfer. **

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

** cXML PunchOutSetupRequest for the account named in the path. The answer must be the PunchOutSetupResponse itself, in the same HTTP response — which is the whole reason ADR-0002 exists. What authenticates is Sender/Credential, not From: in the usual shape a network hub has already verified the buyer and presents its OWN credential (§5.3.2.2). Direct PunchOut (§5.7) authenticates by MAC or client certificate and is not supported. A requisition is reopened with operation — create, edit and inspect are served, with the ERP sending the lines back in the request and inspect recorded as view-only; source is not. Reached from the tenant&#039;s storefront host, never from this app&#039;s own URL and never as a public gateway route — see adr/ADR-0002. The storefront pass-through forwards the ERP&#039;s request as the envelope above and returns this answer unchanged. **

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

** IDS entry on one shared endpoint: the account is resolved from kndnr/name_kunde/pw_kunde in the body, because that is how IDS clients are configured. POST-only with multipart/form-data — the standard rules GET out because a cart does not fit in a query string (§5.1a) — and parameter names are lower-case single words. WKE (shop), ADL (one article), AS (a search) and WKS (a cart sent in, which always becomes a NEW cart) authenticate; LI and SV are answered BEFORE authentication, because the standard sends only the action code with them and they are what makes setup self-service. HLS, the heating-label list, is refused as not implemented rather than falling through to &quot;come in and shop&quot;. Reached from the tenant&#039;s storefront host, never from this app&#039;s own URL and never as a public gateway route — see adr/ADR-0002. The storefront pass-through forwards the ERP&#039;s request as the envelope above and returns this answer unchanged. **

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

** OCI entry for the account named in the path — V8&#039;s externalIdentifier, so an existing ERP configuration migrates unchanged. Answers a 302 to the account&#039;s start page carrying the session handle, and nothing else: no credential and no sign-in secret ride in a redirect. FUNCTION is a closed upper-case set and only its ABSENCE means &quot;let the buyer shop&quot;; the Level 2 functions (DETAIL, VALIDATE, SOURCING, BACKGROUND_SEARCH, DOWNLOADJSON, DETAILADD, QUANTITYCHECK) answer 501 naming the one asked for, and an undefined one a 400 — neither counts against the credential throttle. This address also carries Secure OCI&#039;s two backend legs, INITIALIZE and RETRIEVEOCI, where the cart is FETCHED rather than posted. Reached from the tenant&#039;s storefront host, never from this app&#039;s own URL and never as a public gateway route — see adr/ADR-0002. The storefront pass-through forwards the ERP&#039;s request as the envelope above and returns this answer unchanged. **

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

** Takes a V8 `field_mapping` — the whole column, one protocol&#039;s sub-object, or what V8&#039;s own export action writes — and records it as mappings for one account. Idempotent on the record&#039;s own key (protocol, document, scope, target): re-importing a corrected configuration corrects the rows rather than adding beside them, which is what makes a migration rehearsable. A rule this vocabulary cannot express is NEVER stored and comes back in `refused` with the target it filled, the type it named and why; `skipped` names a group the old platform itself never read. **

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
| organization_id | string |  |  |
| origin | string |  |  |
| protocol | string |  |  |
| psid | string |  |  |
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
| organization_id | string |  |  |
| origin | string |  |  |
| protocol | string |  |  |
| psid | string |  |  |
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

** The start of a punchout visit in the shop. Resolves the buyer the external system named to an ordinary contact — the named one, else the account&#039;s fallback contact, else whatever the account&#039;s policy for an unknown name says — asks the app that owns buyer authentication to sign that contact in, and answers the secret together with the channel, the action and the cart the visit names. The secret is single-use and short-lived: redeem it server-side, and keep it out of a redirect URL, a browser history and a Referer. Answered exactly ONCE — the handle travelled through the external system in the clear. A second claim, an expired or revoked visit, one already handed back and a handle nobody minted all get the same answer, deliberately. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| psid | string | **Required**  |  |
| data | object | Request body |  |


```http request
POST https://api.revenexx.com/v1/punchout/sessions/{psid}/return
```

** The end of a punchout visit. Answers where the cart goes, by which method and encoding, and the mapped fields to submit — one shape for all three protocols, whether that means dozens of named fields (OCI) or one field holding a whole document (cXML, IDS). The payload is ANSWERED, never posted from here: a request from this app carries none of the buyer&#039;s ERP session, and the protocols that expect a browser form post would reject it even if it did. Records a transfer with its normalised lines and the exact payload, mints a correlation key into that payload so an order arriving weeks later can be matched to it, and closes the visit as transferred. Creates NO order and reserves NO stock — the procurement system has decided nothing. A retried call answers the same payload and records no second transfer; a visit that expired or was revoked is refused, with the same answer a handle that never existed gets. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| psid | string | **Required**  |  |
| data | object | Request body |  |


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
| item_count | integer |  |  |
| matched_at | string |  |  |
| matched_order_id | string |  |  |
| organization_id | string |  |  |
| payload | object |  |  |
| protocol | string |  |  |
| session_id | string |  |  |
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
| item_count | integer |  |  |
| matched_at | string |  |  |
| matched_order_id | string |  |  |
| organization_id | string |  |  |
| payload | object |  |  |
| protocol | string |  |  |
| session_id | string |  |  |
| target_url | string |  |  |
| total_gross | number |  |  |
| total_net | number |  |  |
| transferred_at | string |  |  |


```http request
GET https://api.revenexx.com/v1/punchout/vocabularies
```

** Discovery for the vocabulary routes: the enums this app enforces, each with its name, its title and its description — and deliberately WITHOUT its values, so a UI can cache this one small answer and fetch only the value sets it renders. Names: entry-probe-outcome, mapping-mutators, mapping-sources. Fetch one with GET /punchout/vocabularies/{name}. **


```http request
GET https://api.revenexx.com/v1/punchout/vocabularies/{name}
```

** One vocabulary in full: every permitted value with its title, its description and the badge tone a UI colours it with. The values are read out of the column&#039;s CHECK constraint, so the served set IS the set the database accepts and the set the mapping engine understands — a mapping editor offering anything else would produce silently empty fields. `mapping-sources` carries the 24 sources of ADR-0003 (three of them namespaced `cxml.*`, offered only for a cXML account) and `mapping-mutators` the 17 chainable mutators; each value&#039;s description names the config keys it reads and which of them are required. Answers 404 for an unknown name. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| name | string | **Required** The vocabulary name — the part after the dot in the qualified id. |  |

