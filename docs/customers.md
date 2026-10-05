# Customers Service


```http request
POST https://api.revenexx.com/v1/customers/auth/handoff
```

** The same token `POST /customers/auth/magic-link` mints, answered WITH its secret instead of mailed — for a buyer another system has already authenticated and who therefore has no mailbox to check and no link to click. Punchout is the caller it exists for: an ERP hands its user over, this app decides whether that buyer may sign in, and the secret is redeemed through `PUT /customers/auth/magic-link` exactly as a mailed one is. Which is also why the method checked is the magic-link one: a store with `login_magic_link` off cannot redeem what this mints. Nothing is delivered, no account is founded (an address nobody holds is a 404 here, not a registration) and no `contact_event` is written — signing in is mechanics, and this app keeps it off the event bus. Not callable from a browser or a storefront: `handoff_key` is an operations secret configured on the calling app, and a deployment that has none has this capability switched off. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| contact_id | string | The buyer to sign in, as this app knows them. Exactly one of this and `email` is sent — this one when the caller already resolved the external name to a contact. |  |
| email | string | The buyer to sign in, by address, when the caller holds no contact id. Exactly one of this and `contact_id` is sent. An address nobody holds is a 404 — this route never registers. |  |
| handoff_key | string | The operations secret that makes the caller a trusted in-cluster app. Configured on both functions; never a value a browser or a storefront holds. In the body rather than a header because the gateway forwards a fixed header set, the same reason session material travels this way. |  |


```http request
POST https://api.revenexx.com/v1/customers/auth/login
```

** An identifier — email address, username or customer number, as the shop allows — and a password go in; a session and the CONTACT behind it come back, so a storefront knows in one call both that the buyer is signed in and who they are. The session is minted server-side rather than handed back from the credential check, because the account route hides the session secret from non-privileged responses and a trusted BFF needs it. `permissions` carries the buyer's effective grants, so a BFF does not need a second call to decide what to render. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| email | string | Deprecated alias of `identifier`, kept so every storefront written against the earlier contract keeps working. Read exactly like `identifier` — an address, a username or a customer number — and ignored when `identifier` is sent too. |  |
| identifier | string | Who is signing in: the buyer's email address, their username, or their company's customer number. Which of the three a shop accepts is the merchant's choice (`login_identifier_email`, `login_identifier_username`, `login_identifier_customer_number`); a shape the shop does not accept is a 403 `identifier_not_offered`. The shape is read from the value — anything holding an `@` is an address, only digits is a customer number, anything else a username. A customer number names a COMPANY and signs in as its primary contact, which makes it a shared account. |  |
| password | string | The password from registration or recovery. Wrong credentials are a 401; a correct one on an undecided application is a 403. |  |


```http request
POST https://api.revenexx.com/v1/customers/auth/logout
```

** Ends ONE session — the buyer signs out on this device and stays signed in on the others, because the session id is what is revoked and not the account. The contact row is untouched: signing out is not blocking, and a caller wanting the second thing wants `status: "blocked"` on the contact instead. Both ids come from what `/customers/auth/login` answered, and a BFF should drop its own cookie whatever this answers — the session is unusable afterwards either way. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| session_id | string | The session to revoke — `session.$id` from the login. |  |
| user_id | string | The platform user — `session.userId` from the login. |  |


```http request
POST https://api.revenexx.com/v1/customers/auth/magic-link
```

** Sign in without a password: a link goes to the address, and `PUT /customers/auth/magic-link` turns it into a session. Only a buyer this shop holds, with a login, who may sign in is sent one. For anybody else — an address nobody holds, a contact with no login, a blocked buyer or company, an undecided application — nothing is created and nothing is sent, and the answer is the same 201 in the same shape, so it cannot be used to find out who is a customer. It never founds an account. The mail is this shop's own template through the messaging service; the secret is not in this response, only in the link. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| email | string | Who to send the link to. An address that cannot sign in is answered exactly like one that can, and nothing is sent to it. |  |
| url | string | Where the mailed link points. `userId`, `secret` and `expire` are appended as query parameters; the first two are what the confirm call takes. |  |


```http request
PUT https://api.revenexx.com/v1/customers/auth/magic-link
```

** The buyer clicked the link and the storefront read `userId` and `secret` out of it. Answers exactly what a password login answers — session, contact and effective grants — because a shop must not have to branch on how somebody signed in. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| secret | string | The one-time secret the mailed link carried. Spent on first use and expiring, so a second attempt with the same one is a 401 rather than a second session. |  |
| user_id | string | The `userId` the mailed link carried. |  |


```http request
POST https://api.revenexx.com/v1/customers/auth/me
```

** The platform user, the customer record mirrored against it and the effective grants, in one call. The expected caller is a trusted storefront BFF holding the session on the buyer's behalf, which is why the ids travel in the body rather than in a browser-facing header. The grants are derived here on every call rather than returned from anywhere they could be cached, so a role changed a second ago is already reflected. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| session_id | string | The session the storefront holds for that user — `session.$id` from the login. A revoked or expired one is a 401. |  |
| user_id | string | The platform user to resolve — `session.userId` from the login. |  |


```http request
POST https://api.revenexx.com/v1/customers/auth/mfa/challenge
```

** Between the password and the finished session: the buyer has proved one thing and is asked for another. Created by user id, because the account route that creates challenges hides the code from whoever may call it — and answered with the half-finished session the sign-in is in the middle of, through `PUT /customers/auth/mfa/challenge`. Needs a platform build that returns the challenge code; without one there is no way to read what to send, and the call answers 502 rather than mailing an empty challenge. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| factor | string | Which factor to challenge. `email` (the default) is the only one this route sends; any other value is a 400 `factor_not_supported`. |  |
| user_id | string | The platform user being challenged. |  |


```http request
PUT https://api.revenexx.com/v1/customers/auth/mfa/challenge
```

** The code the buyer typed, against the challenge it was sent for. The session becomes fully authenticated when this answers. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| challenge_id | string | The `$id` the send answered with. |  |
| code | string | What the buyer typed. |  |
| session_secret | string | The same session the challenge was created with. |  |
| user_id | string | The platform user, for the caller's own bookkeeping. The challenge already knows whose it is. |  |


```http request
POST https://api.revenexx.com/v1/customers/auth/otp
```

** The same token as the sign-in link, delivered as a short code instead — for a buyer on a phone, where leaving for a mail client and coming back loses the checkout they were in the middle of. Redeemed with `PUT /customers/auth/otp`. Sent under the same rule as the link: only to a buyer who may sign in, and for anybody else nothing is created or sent while the answer looks exactly the same. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| email | string | Who to send the code to. As with the sign-in link, an address that cannot sign in is answered exactly like one that can, and nothing is sent to it. |  |


```http request
PUT https://api.revenexx.com/v1/customers/auth/otp
```

** The code the buyer typed, plus the `userId` the send answered with. Answers exactly what a password login answers — session, contact and effective grants — so a storefront never has to branch on how somebody signed in. The code is spent on first use and expires, so a second attempt with the same one is a 401 rather than a second session. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| secret | string | The one-time secret the mailed code carried. Spent on first use and expiring, so a second attempt with the same one is a 401 rather than a second session. |  |
| user_id | string | The `userId` the mailed code carried. |  |


```http request
POST https://api.revenexx.com/v1/customers/auth/recovery
```

** Step one of two: a link goes to the address given, and `PUT /customers/auth/recovery` is what the buyer's browser comes back to. The identity service mints the token; the MAIL is this shop's own — the tenant's template, layout, language and sending domain, through the messaging service. The secret is NOT in this answer: it exists only inside the mailed link, which is the whole point of the two-step shape, and echoing it here would make the mail decorative. One thing about the contact CAN change: a buyer this shop holds who carries no platform login — an address written straight into the record by an import — is given one here, because the alternative is telling the one person who cannot help themselves that no account exists, with no other way in. Nothing else about the contact moves, and the password only moves in step two. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| email | string | Who to send the recovery mail to. An address nobody holds is not distinguished here — do not build an account-existence check on the answer. |  |
| url | string | Where the mailed link points. `userId`, `secret` and `expire` are appended as query parameters — the first two are what the confirm call takes. Same shape the identity service's own mail used, so a storefront that already handles that link needs no change. |  |


```http request
PUT https://api.revenexx.com/v1/customers/auth/recovery
```

** Step two: the `userId` and `secret` the mailed link carried, plus the password the buyer just typed. The secret is spent on first use and expires, so a link cannot be replayed and a second attempt with the same one is a 401 rather than a second password change. The new password is in effect the moment this answers; what happens to sessions opened with the old one is the identity service's policy, not this app's. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| password | string | The new password. It replaces the old one immediately; existing sessions are the identity service's business, not this app's. |  |
| secret | string | The one-time secret from the mailed link. Only that value works — it is spent on first use and expires, and anything else is a 401, so no example here would be anything but a call that fails. |  |
| user_id | string | The `userId` the mailed link carried. |  |


```http request
POST https://api.revenexx.com/v1/customers/auth/register
```

** One call writes the whole buyer: the contact this app is the system of record for, and the platform user behind its login. When the body names a company it also FOUNDS one — an organization, mirrored into platform auth as a team, with this contact as its admin. The tenant setting registration_mode decides what a registration IS. 'open' (the default, unchanged behaviour) creates a finished account: registration_status='approved', status='active', login works. 'approval_required' creates an APPLICATION: registration_status='pending', status='invited', the platform user exists with the applicant's own password but is DISABLED, and a newly founded organization is parked as 'blocked' — check `approval_required` in the response and show a 'we will get back to you' screen instead of logging the buyer in. The registration gates below are all evaluated BEFORE anything is written, and a failure after that point rolls the organization and the contact back together. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| email | string | The buyer's address. It becomes the login AND the unique key of the contact, so a second registration with it is a 409 — including while the first one is still waiting for approval. |  |
| first_name | string | Given name. Optional: an ERP import often has only a mailbox. |  |
| last_name | string | Family name. Optional for the same reason. |  |
| locale | string | The language this person is written to in — BCP 47, and one of the store's configured locales. Null falls back to the store default. One of the store's own locales, or the call is a 400. |  |
| organization_id | string | REFUSED when set: joining an existing company is an invitation, not a registration, so a value here answers 403 `join_requires_invitation` (400 `organization_ambiguous` beside `organization_name`). Send null or leave it out. |  |
| organization_name | string | FOUND a new company, with this contact as its admin. This is what makes the registration a B2B one; leaving it out registers a standalone buyer. |  |
| password | string | The password the buyer chooses. It is hashed by the identity service at this moment and never travels again: an approval later enables the account, it does not issue a new credential. |  |
| url | string | Where the welcome mail's button points — the buyer's first stop in this shop. Absent, the mail still goes out and simply carries no button. Ignored when the registration is an APPLICATION: there is no account to send anybody to yet. |  |
| vat_id | string | VAT identification number (USt-IdNr. in Germany) — the closest thing a B2B buyer has to a legal identity. Validated against the EU VIES service when the tenant's `organization_vat_id_required` setting is on, and stored verbatim otherwise, including for buyers outside the EU. Required when the tenant's `organization_vat_id_required` is on, and checked BEFORE the company is created so a bad one leaves no half-founded organization behind. |  |
| verification_url | string | Where the address-confirmation link points, when the tenant's `email_verification` asks for one on registration. `userId`, `secret` and `expire` are appended, and `PUT /customers/auth/verification` takes the first two. Without it the registration still succeeds and `verification_sent` is false — this app cannot invent a storefront URL, and a link pointing nowhere is worse than none. |  |


```http request
POST https://api.revenexx.com/v1/customers/auth/verification
```

** Confirm that the address belongs to the buyer. Needs no session: the verification is created through the identity service's users surface, because its account counterpart reads the authenticated user and a caller authenticating AS the user cannot see the secret it just created. The buyer still confirms with their own session, through `PUT /customers/auth/verification` — only the creation moved. Send it right after a registration, or from an account page. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| url | string | Where the mailed link points. `userId`, `secret` and `expire` are appended as query parameters; the first two are what the confirm call takes. |  |
| user_id | string | The platform user whose address is being confirmed — `user_id` from the registration, or `session.userId` from a login. |  |


```http request
PUT https://api.revenexx.com/v1/customers/auth/verification
```

** The `userId` and `secret` the mailed link carried. The address counts as confirmed the moment this answers; the secret is spent, so the link cannot be replayed. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| secret | string | The one-time secret the mailed link carried. Spent on first use and expiring, so a second attempt with the same one is a 401 rather than a second session. |  |
| user_id | string | The `userId` the mailed link carried. |  |


```http request
POST https://api.revenexx.com/v1/customers/principal/resolve
```

** The capability the API gateway calls to turn whoever is acting into the permission set it forwards to every other app as X-Revenexx-Permissions. This app is the platform's role provider (manifest#provides_roles), and this is the hot path of every attributed request — one contact read plus the tenant's role map. Send EXACTLY ONE of two references. `contact_id` is the storefront plane: a BFF holding the tenant API key asserted a contact, and the gateway is resolving the assertion. `user_id` is the authenticated plane (RAD-12): the gateway verified a person's own Zitadel token and is resolving its subject against `contacts.external_user_id`, so the answer stands on a proven identity rather than a claimed one. The answer is the same shape either way — which plane a request came from is the gateway's business, not this app's. A blocked or pending contact always resolves with active=false; what its `permissions` then say is the tenant's blocked_contact_behavior setting — 'keep' (the default, the role's grants), 'catalog_only' or 'deny_all'. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| contact_id | string | The contact the caller asserted it is acting for. |  |
| user_id | string | The platform login the gateway authenticated, matched against `contacts.external_user_id` — the identity mirror this app maintains when it registers or invites a contact. Not a uuid: it is whatever the identity service issues as a subject. |  |

