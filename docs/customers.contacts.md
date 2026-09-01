# CustomersContacts Service


```http request
GET https://api.revenexx.com/v1/customers/contact_events
```

** A contact event is one entry on a customer&#039;s timeline: an activity somebody logged (a call, a visit, a meeting, a note) or a registration decision this app recorded itself. Every entry is keyed by a CONTACT and stamped with the organization derived from that contact, so a company&#039;s history is one indexed read rather than a join. Append-only — there is no update and no delete, which is what makes it usable as evidence. The activity feed, filtered by whichever column the question needs: `contact_id` for one person, `organization_id` for a whole company, `kind` for one type of activity. `kind: &quot;system&quot;` is this app&#039;s own registration decision trail (`registration.submitted` / `.approved` / `.rejected`), and no caller may file one of those. Paged with `limit`/`offset`/`order`; newest first is `order=occurred_at.desc`. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | Filter to rows whose `id` is exactly this value. Primary key of the timeline entry. |  |
| contact_id | string | Filter to one person's timeline. |  |
| organization_id | string | Filter to one company timeline — the whole history, without fanning out over its people. |  |
| kind | string | Filter by entry kind. One of the tenant's own activity types (GET /customers/contact-event-kinds); 'system' is the registration decision trail and is the one a caller may not file. |  |
| name | string | Filter by event name — registration.submitted | registration.approved | registration.rejected | activity.<kind>. This one IS this app's own vocabulary, not the tenant's. |  |
| subject | string | Filter to rows whose `subject` is exactly this value. One line a person can scan in a timeline. Required for an activity; a decision row carries the app's own wording. |  |
| actor | string | Filter to rows whose `actor` is exactly this value. Who logged the entry — free text as the client supplied it (operator id or email). Null for a row the app wrote itself. |  |
| occurred_at | string | Exact timestamp equality on when it happened — there is no range filter on this API. Use `order=occurred_at.desc` with limit/offset to walk a timeline. |  |
| created_at | string | Exact timestamp equality — this API has no range filter. To bound a period, sort with `order` and page. When the row was written. Together with `occurred_at` this is what tells a late entry from a live one. |  |
| limit | integer | Page size (default 50, max 200). |  |
| offset | integer | Row offset for pagination (default 0). |  |
| order | string | Sort by one column: 'column' | 'column.asc' | 'column.desc'. A bare column sorts ascending. Anything else is refused with 400. |  |


```http request
GET https://api.revenexx.com/v1/customers/contact_events/{id}
```

** A contact event is one entry on a customer&#039;s timeline: an activity somebody logged (a call, a visit, a meeting, a note) or a registration decision this app recorded itself. Every entry is keyed by a CONTACT and stamped with the organization derived from that contact, so a company&#039;s history is one indexed read rather than a join. Append-only — there is no update and no delete, which is what makes it usable as evidence. One timeline entry by id, as it was written. Entries are never edited, so what this answers is what was recorded at the time. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The contact event to read. |  |


```http request
GET https://api.revenexx.com/v1/customers/contacts
```

** A contact is a PERSON, and the unit that logs in: one platform user, one email address, one role held inside its organization. A contact without an organization is a standalone buyer rather than an error, and two people at the same company are two contacts sharing an `organization_id`. The people list, and the read behind an approval queue: `registration_status=pending` is every application waiting for a decision. Every column is a filter — `external_user_id` in particular is how a storefront turns a platform auth id back into a customer — and the page is `limit`/`offset`/`order`. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | Filter to exactly one person. |  |
| organization_id | string | Filter to one company's people. The company address book. |  |
| email | string | Filter by exact email — the one lookup that is guaranteed to return at most one person, because the address is unique per tenant. |  |
| first_name | string | Filter to rows whose `first_name` is exactly this value. Given name. Optional: an ERP import often has only a mailbox. |  |
| last_name | string | Filter to rows whose `last_name` is exactly this value. Family name. Optional for the same reason. |  |
| phone | string | Filter to rows whose `phone` is exactly this value. Direct number of this person, as somebody typed it — free text, no format is enforced or normalized. E.164 is what an integration should send. |  |
| job_title | string | Filter to rows whose `job_title` is exactly this value. What this person does at the company — free text on purpose, because it is a title and not a grant. The permission ladder is `role`; overloading a job title with authority silently un-grants everyone the day the ledger is enforced. |  |
| role | string | Filter by role. One of the tenant's own roles (GET /customers/roles) — a tenant that never edited the ledger has viewer, requester, buyer, approver, admin. |  |
| status | string | Filter by status. |  |
| order_approval_limit | number | Filter to rows whose `order_approval_limit` is exactly this value. Amount ceiling for this person, in the market's currency: with the `orders.approve` permission it is the most they may sign off. Null means no ceiling. An amount, never a grant — the grant comes from the role. |  |
| registration_status | string | Filter by registration state. `pending` IS the approval inbox — there is no second entity for it. |  |
| registration_decided_at | string | Exact timestamp equality — this API has no range filter. To bound a period, sort with `order` and page. When a merchant approved or rejected the application. Null while nobody has decided. |  |
| registration_decided_by | string | Filter to rows whose `registration_decided_by` is exactly this value. Who decided — free text as the deciding client supplied it (an operator id or an email address), not a resolvable user reference. |  |
| registration_reason | string | Filter to rows whose `registration_reason` is exactly this value. Why the application was declined. Always recorded here; whether the APPLICANT is ever told it is the tenant's `registration_reason_disclosed` setting, because that is a legal decision and not a template one. |  |
| locale | string | Filter to rows whose `locale` is exactly this value. The language this person is written to in — BCP 47, and one of the store's configured locales. Null falls back to the store default. |  |
| is_primary | boolean | Filter to the primary contacts — with `organization_id`, the one person a merchant calls first at that company. |  |
| external_user_id | string | Find the contact behind a platform user id. What a storefront session resolves with when it has an auth id and needs the customer record. |  |
| created_at | string | Exact timestamp equality — this API has no range filter. To bound a period, sort with `order` and page. When this person record was created in this app. |  |
| updated_at | string | Exact timestamp equality — this API has no range filter. To bound a period, sort with `order` and page. When any column of this row last changed. |  |
| limit | integer | Page size (default 50, max 200). |  |
| offset | integer | Row offset for pagination (default 0). |  |
| order | string | Sort by one column: 'column' | 'column.asc' | 'column.desc'. A bare column sorts ascending. Anything else is refused with 400. |  |


```http request
POST https://api.revenexx.com/v1/customers/contacts
```

** A contact is a PERSON, and the unit that logs in: one platform user, one email address, one role held inside its organization. A contact without an organization is a standalone buyer rather than an error, and two people at the same company are two contacts sharing an `organization_id`. Creates the person and their platform login together, so a contact that exists can always sign in. `role` names one of this tenant&#039;s own roles and decides what they may do; `registration_status` may only be set to `pending` or `approved` here, because a rejection has to carry a reason and that is the reject route&#039;s job. `email` is the only field a create cannot omit; everything else is optional or defaulted by the database. Two rows of this tenant may not share `email` or `external_user_id` (while external_user_id IS NOT NULL). **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| email | string | Login identity and the unique key of a person within the tenant. Changing it changes the platform login with it. Two people at the same company therefore need two addresses — a shared purchasing mailbox is one contact, not several. |  |
| first_name | string | Given name. Optional: an ERP import often has only a mailbox. |  |
| is_primary | boolean | The main contact of its organization — who a merchant calls first. At most one per company is the intent; the tenant's `primary_contact_required` setting decides whether the last one may be demoted or deleted. |  |
| job_title | string | What this person does at the company — free text on purpose, because it is a title and not a grant. The permission ladder is `role`; overloading a job title with authority silently un-grants everyone the day the ledger is enforced. |  |
| last_name | string | Family name. Optional for the same reason. |  |
| locale | string | The language this person is written to in — BCP 47, and one of the store's configured locales. Null falls back to the store default. |  |
| order_approval_limit | number | Amount ceiling for this person, in the market's currency: with the `orders.approve` permission it is the most they may sign off. Null means no ceiling. An amount, never a grant — the grant comes from the role. |  |
| organization_id | string | The company this person belongs to. NULL is a legitimate state, not a defect: a standalone buyer with no company behind them. Deleting the organization sets this null and keeps the person. Membership is mirrored to the platform team. |  |
| phone | string | Direct number of this person, as somebody typed it — free text, no format is enforced or normalized. E.164 is what an integration should send. |  |
| registration_status | string | Where this person's own application stands: 'approved' (the default, and what an open store creates), 'pending' while a merchant has yet to decide, 'rejected' once they declined. Only the approve/reject routes move it; it is ignored on an ordinary update. On CREATE only, and only to file the contact as an application: 'pending' creates the platform user disabled and routes the contact through approve/reject. Ignored on update. |  |
| role | string | The person's role INSIDE its organization, and the only thing permissions are derived from. One of the tenant's own roles (GET /customers/roles); a tenant that never edited the ledger has viewer, requester, buyer, approver, admin. Also the team role on the platform mirror. There is no global role — the same person in two companies is two contacts. A tenant that never edited the ledger has viewer, requester, buyer, approver, admin; a create without a role gets the one flagged as default, and a role the tenant does not keep is a 400. |  |
| status | string | Whether this person may act: 'invited' has been created but has not accepted, 'active' works, 'blocked' cannot log in. A create through the API defaults to 'invited'; a self-registration in an open store lands 'active'. Default 'invited' on create. |  |


```http request
POST https://api.revenexx.com/v1/customers/contacts/{contact_id}/events
```

** This is how a call, a visit, a meeting, an email or a plain note reaches one person&#039;s timeline. It writes a contact_events row with kind != &#039;system&#039; and emits contact_event.created, so an activity travels on the same bus as a registration decision and a timeline is one query rather than a union. organization_id is DERIVED from the contact, never taken from the body — an activity cannot be filed under a company the person does not belong to. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| contact_id | string | **Required** The person the entry is about. The organization is derived from them. |  |
| actor | string | Who logged it (operator id or email). Free text; this app does not resolve it. |  |
| kind | string | What happened. 'system' is deliberately NOT accepted — those rows are the registration decision trail and are written by the approve/reject routes. Default 'note'. |  |
| note | string | The long form. Stored inside the event payload as `note`, not as a column of its own. |  |
| occurred_at | string | When it actually happened. Defaults to now — a call logged on Monday about Friday should say Friday. |  |
| subject | string | One line a person can scan in a timeline. Required — an entry nobody can read at a glance is not worth the row. |  |


```http request
POST https://api.revenexx.com/v1/customers/contacts/{contact_id}/invite
```

** Tell somebody they were added to a company. A deliberate act rather than a side effect of creating the contact: a merchant entering a colleague from a business card is not always ready to mail them, and &quot;added&quot; and &quot;told&quot; are different decisions. No secret travels — the platform team membership is confirmed as it is created, so there is nothing to accept; the message says &quot;you are in, here is the way in&quot;. Unlike the auth mails, a failure here IS a failure: the identity service sends nothing for this occasion, so this is the only message the person gets. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| contact_id | string | **Required** The person being told. They are already a member — this only sends the message. |  |
| invited_by | string | Who did the inviting, as the recipient should read it. Absent, the company name is used — "Beispiel GmbH invited you" reads better than the name of somebody they have never heard of. |  |
| url | string | Where the invitation points — the storefront sign-in, normally. There is no token in it: the person is already a member and only has to sign in. |  |


```http request
GET https://api.revenexx.com/v1/customers/contacts/{contact_id}/permissions
```

** Computed from contacts.role on every call — the grants are never persisted, so this always reflects the role the contact holds right now. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| contact_id | string | **Required** The person whose grants are being read. |  |


```http request
POST https://api.revenexx.com/v1/customers/contacts/{contact_id}/registration/approve
```

** Only reachable for a contact whose registration_status is &#039;pending&#039; or &#039;rejected&#039; (approving a rejection reinstates it). Enables the platform user FIRST — the password the applicant chose at submit time works immediately, no new credential is issued — then sets registration_status=&#039;approved&#039; and status=&#039;active&#039;, and un-blocks the organization this registration itself founded. Approving an already-approved registration is a no-op that emits nothing, so a retry is safe. Writes a contact_events row named &#039;registration.approved&#039;. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| contact_id | string | **Required** The applicant. It is the CONTACT that is approved — the organization it founded is unblocked with it. |  |
| decided_by | string | Who approved it — recorded on the contact and carried in the event. Free text (operator id or email); this app does not resolve it. |  |


```http request
POST https://api.revenexx.com/v1/customers/contacts/{contact_id}/registration/reject
```

** Only reachable from &#039;pending&#039;. Sets registration_status=&#039;rejected&#039; and status=&#039;blocked&#039;, keeps the platform user in place but disabled — the email must not fall free for a silent second identity, and the merchant keeps the record. Delete the contact to remove both. &#039;reason&#039; is mandatory and is stored on the contact plus carried in the event payload, so the applicant can be told why. Rejecting an already-rejected registration is a no-op. Writes a contact_events row named &#039;registration.rejected&#039;. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| contact_id | string | **Required** The applicant being declined. |  |
| decided_by | string | Who rejected it — recorded on the contact and carried in the event. |  |
| reason | string | Why the application was declined. Always stored on the contact. It only reaches the APPLICANT when the tenant's registration_reason_disclosed setting is on — the event payload then carries it, and so does the 403 the login answers. |  |


```http request
DELETE https://api.revenexx.com/v1/customers/contacts/{id}
```

** A contact is a PERSON, and the unit that logs in: one platform user, one email address, one role held inside its organization. A contact without an organization is a standalone buyer rather than an error, and two people at the same company are two contacts sharing an `organization_id`. Removes the person and their platform login, so they can no longer sign in anywhere. Their company keeps trading; use `status: &quot;blocked&quot;` instead when the intent is to stop one person without erasing what they did. Deleting one takes every `contact_events` and `addresses` row that points at it with it — the foreign keys decide, not this route. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The contact to delete. |  |


```http request
GET https://api.revenexx.com/v1/customers/contacts/{id}
```

** A contact is a PERSON, and the unit that logs in: one platform user, one email address, one role held inside its organization. A contact without an organization is a standalone buyer rather than an error, and two people at the same company are two contacts sharing an `organization_id`. One person by id. What they are ALLOWED to do is not in here: permissions are derived from `role` at read time and answered by `GET /customers/contacts/{contact_id}/permissions`. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The contact to read. |  |


```http request
PUT https://api.revenexx.com/v1/customers/contacts/{id}
```

** A contact is a PERSON, and the unit that logs in: one platform user, one email address, one role held inside its organization. A contact without an organization is a standalone buyer rather than an error, and two people at the same company are two contacts sharing an `organization_id`. A partial update — send only what changes. `external_user_id` and every `registration_*` column are ignored: the link to platform auth is mirror-managed, and registration state is only ever moved by the approve and reject routes, which record why. Two rows of this tenant may not share `email` or `external_user_id` (while external_user_id IS NOT NULL). **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The contact to update. |  |
| email | string | Login identity and the unique key of a person within the tenant. Changing it changes the platform login with it. Two people at the same company therefore need two addresses — a shared purchasing mailbox is one contact, not several. |  |
| first_name | string | Given name. Optional: an ERP import often has only a mailbox. |  |
| is_primary | boolean | The main contact of its organization — who a merchant calls first. At most one per company is the intent; the tenant's `primary_contact_required` setting decides whether the last one may be demoted or deleted. |  |
| job_title | string | What this person does at the company — free text on purpose, because it is a title and not a grant. The permission ladder is `role`; overloading a job title with authority silently un-grants everyone the day the ledger is enforced. |  |
| last_name | string | Family name. Optional for the same reason. |  |
| locale | string | The language this person is written to in — BCP 47, and one of the store's configured locales. Null falls back to the store default. |  |
| order_approval_limit | number | Amount ceiling for this person, in the market's currency: with the `orders.approve` permission it is the most they may sign off. Null means no ceiling. An amount, never a grant — the grant comes from the role. |  |
| organization_id | string | The company this person belongs to. NULL is a legitimate state, not a defect: a standalone buyer with no company behind them. Deleting the organization sets this null and keeps the person. Membership is mirrored to the platform team. |  |
| phone | string | Direct number of this person, as somebody typed it — free text, no format is enforced or normalized. E.164 is what an integration should send. |  |
| registration_status | string | Where this person's own application stands: 'approved' (the default, and what an open store creates), 'pending' while a merchant has yet to decide, 'rejected' once they declined. Only the approve/reject routes move it; it is ignored on an ordinary update. On CREATE only, and only to file the contact as an application: 'pending' creates the platform user disabled and routes the contact through approve/reject. Ignored on update. |  |
| role | string | The person's role INSIDE its organization, and the only thing permissions are derived from. One of the tenant's own roles (GET /customers/roles); a tenant that never edited the ledger has viewer, requester, buyer, approver, admin. Also the team role on the platform mirror. There is no global role — the same person in two companies is two contacts. A tenant that never edited the ledger has viewer, requester, buyer, approver, admin; a create without a role gets the one flagged as default, and a role the tenant does not keep is a 400. |  |
| status | string | Whether this person may act: 'invited' has been created but has not accepted, 'active' works, 'blocked' cannot log in. A create through the API defaults to 'invited'; a self-registration in an open store lands 'active'. Default 'invited' on create. |  |


```http request
POST https://api.revenexx.com/v1/customers/organizations/{organization_id}/events
```

** Same row as the contact route, reached from the organization. &#039;contact_id&#039; is required and must belong to THIS organization — the picker offering the contacts is not filtered, so the membership check here is what stops a call with one company being filed under someone else&#039;s person. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| organization_id | string | **Required** The company the entry is filed under. The `contact_id` in the body has to belong to it. |  |
| actor | string | Who logged it (operator id or email). Free text; this app does not resolve it. |  |
| contact_id | string | The person dealt with. Must be a contact of this organization. |  |
| kind | string | What happened. 'system' is deliberately NOT accepted — those rows are the registration decision trail and are written by the approve/reject routes. Default 'note'. |  |
| note | string | The long form. Stored inside the event payload as `note`, not as a column of its own. |  |
| occurred_at | string | When it actually happened. Defaults to now — a call logged on Monday about Friday should say Friday. |  |
| subject | string | One line a person can scan in a timeline. Required — an entry nobody can read at a glance is not worth the row. |  |

