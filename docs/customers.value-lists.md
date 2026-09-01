# CustomersValueLists Service


```http request
GET https://api.revenexx.com/v1/customers/address-types
```

** What an address is used for. Billing and shipping are what a checkout needs; a works entrance or a central accounts office is the tenant&#039;s own. A fresh install is seeded with billing, shipping, and the set seeds on first read too, so the page is never empty and `addresses.type` always has a value it may carry. The whole set comes back in one page in the tenant&#039;s own order — this route takes no limit/offset/order and no column filters, so `page` describes the full set and `filter` is always empty. **


```http request
POST https://api.revenexx.com/v1/customers/address-types
```

** Extends this tenant&#039;s address types set with a value of their own — the whole reason these four stopped being CHECK constraints. What an address is used for. Billing and shipping are what a checkout needs; a works entrance or a central accounts office is the tenant&#039;s own. The code is lowercase and becomes what `addresses.type` stores; it cannot be changed afterwards, because every record carrying it would be orphaned. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| code | string | What `addresses.type` will store. Lowercase, starting with a letter; immutable afterwards. |  |
| description | string | One line of help for whoever picks this value. |  |
| descriptions | object | Localized descriptions, keyed by language tag ({ "en": …, "de": … }). Null when nobody translated this value — a client then falls back to `description`. |  |
| is_default | boolean | Promote this value; the previous default is demoted in the same call. |  |
| labels | object | Localized titles, keyed by language tag ({ "en": …, "de": … }). Null when nobody translated this value — a client then falls back to `title`. |  |
| position | integer | Where it sits in the set, ascending. Default 0. |  |
| title | string | The fallback name shown when no locale matches. |  |
| tone | string | Semantic badge colour. |  |


```http request
DELETE https://api.revenexx.com/v1/customers/address-types/{id}
```

** Takes a value out of the address types set. There is no foreign key behind `addresses.type` — one added to a table that starts empty fails the migration of every existing tenant — so this route IS the integrity: it refuses while any record still carries the code, and it refuses to empty the set. Retiring a value that is in use is therefore a two-step job: move the records onto another value first, then remove it. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The address type to remove. |  |


```http request
GET https://api.revenexx.com/v1/customers/address-types/{id}
```

** One value of the address types set, by its id — its code, its fallback title, the per-language `labels` an operator reads and the badge `tone` a client renders it with. What an address is used for. Billing and shipping are what a checkout needs; a works entrance or a central accounts office is the tenant&#039;s own. Reading one value is the rare path: `GET /customers/address-types` answers the whole set in a single page, which is what a select needs. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The address type to read. Note that records store the CODE, not this id. |  |


```http request
PUT https://api.revenexx.com/v1/customers/address-types/{id}
```

** Everything about a value except the value itself: its titles, its help text, its badge tone, its `position` in the select, and which one of the set is the default. The `code` is immutable, so no record carrying it is ever orphaned by an edit here — a merchant who retitles `shipping` to wording of their own changes what people READ and nothing about what `addresses.type` stores. Seeded values (`is_system`) are renameable like any other, and re-seeding leaves the rename alone. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The address type to edit. |  |
| description | string | One line of help for whoever picks this value. |  |
| descriptions | object | Localized descriptions, keyed by language tag ({ "en": …, "de": … }). Null when nobody translated this value — a client then falls back to `description`. |  |
| is_default | boolean | Promote this value; the previous default is demoted. |  |
| labels | object | Localized titles, keyed by language tag ({ "en": …, "de": … }). Null when nobody translated this value — a client then falls back to `title`. |  |
| position | integer | Where it sits in the set, ascending. |  |
| title | string | The fallback name shown when no locale matches. |  |
| tone | string | Semantic badge colour. |  |


```http request
GET https://api.revenexx.com/v1/customers/contact-event-kinds
```

** What kind of entry lands on a customer timeline. &#039;system&#039; is the app&#039;s own decision trail and a caller may not file one, whatever the set says. A fresh install is seeded with system, note, call, email, meeting, visit, task, and the set seeds on first read too, so the page is never empty and `contact_events.kind` always has a value it may carry. The whole set comes back in one page in the tenant&#039;s own order — this route takes no limit/offset/order and no column filters, so `page` describes the full set and `filter` is always empty. **


```http request
POST https://api.revenexx.com/v1/customers/contact-event-kinds
```

** Extends this tenant&#039;s activity types set with a value of their own — the whole reason these four stopped being CHECK constraints. What kind of entry lands on a customer timeline. &#039;system&#039; is the app&#039;s own decision trail and a caller may not file one, whatever the set says. The code is lowercase and becomes what `contact_events.kind` stores; it cannot be changed afterwards, because every record carrying it would be orphaned. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| code | string | What `contact_events.kind` will store. Lowercase, starting with a letter; immutable afterwards. |  |
| description | string | One line of help for whoever picks this value. |  |
| descriptions | object | Localized descriptions, keyed by language tag ({ "en": …, "de": … }). Null when nobody translated this value — a client then falls back to `description`. |  |
| is_default | boolean | Promote this value; the previous default is demoted in the same call. |  |
| labels | object | Localized titles, keyed by language tag ({ "en": …, "de": … }). Null when nobody translated this value — a client then falls back to `title`. |  |
| position | integer | Where it sits in the set, ascending. Default 0. |  |
| title | string | The fallback name shown when no locale matches. |  |
| tone | string | Semantic badge colour. |  |


```http request
DELETE https://api.revenexx.com/v1/customers/contact-event-kinds/{id}
```

** Takes a value out of the activity types set. There is no foreign key behind `contact_events.kind` — one added to a table that starts empty fails the migration of every existing tenant — so this route IS the integrity: it refuses while any record still carries the code, and it refuses to empty the set. Retiring a value that is in use is therefore a two-step job: move the records onto another value first, then remove it. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The activity type to remove. |  |


```http request
GET https://api.revenexx.com/v1/customers/contact-event-kinds/{id}
```

** One value of the activity types set, by its id — its code, its fallback title, the per-language `labels` an operator reads and the badge `tone` a client renders it with. What kind of entry lands on a customer timeline. &#039;system&#039; is the app&#039;s own decision trail and a caller may not file one, whatever the set says. Reading one value is the rare path: `GET /customers/contact-event-kinds` answers the whole set in a single page, which is what a select needs. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The activity type to read. Note that records store the CODE, not this id. |  |


```http request
PUT https://api.revenexx.com/v1/customers/contact-event-kinds/{id}
```

** Everything about a value except the value itself: its titles, its help text, its badge tone, its `position` in the select, and which one of the set is the default. The `code` is immutable, so no record carrying it is ever orphaned by an edit here — a merchant who retitles `call` to wording of their own changes what people READ and nothing about what `contact_events.kind` stores. Seeded values (`is_system`) are renameable like any other, and re-seeding leaves the rename alone. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The activity type to edit. |  |
| description | string | One line of help for whoever picks this value. |  |
| descriptions | object | Localized descriptions, keyed by language tag ({ "en": …, "de": … }). Null when nobody translated this value — a client then falls back to `description`. |  |
| is_default | boolean | Promote this value; the previous default is demoted. |  |
| labels | object | Localized titles, keyed by language tag ({ "en": …, "de": … }). Null when nobody translated this value — a client then falls back to `title`. |  |
| position | integer | Where it sits in the set, ascending. |  |
| title | string | The fallback name shown when no locale matches. |  |
| tone | string | Semantic badge colour. |  |


```http request
POST https://api.revenexx.com/v1/customers/defaults
```

** What the app.installed event runs. It fills all four of the value sets a tenant needs before anything else works — the payment terms, the address types, the lifecycle stages and the activity types — in one call. Idempotent by code: a set that already has its rows is left completely alone, so a re-delivered event and a merchant&#039;s renames both survive. A tenant installed before these tables existed is seeded lazily instead, by the first read that finds one empty. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| data | object | Request body |  |


```http request
GET https://api.revenexx.com/v1/customers/lifecycle-stages
```

** Where a company stands in the sales pipeline — a separate axis from status, and one whose steps are a sales team&#039;s own. A fresh install is seeded with lead, prospect, customer, churned, and the set seeds on first read too, so the page is never empty and `organizations.lifecycle_stage` always has a value it may carry. The whole set comes back in one page in the tenant&#039;s own order — this route takes no limit/offset/order and no column filters, so `page` describes the full set and `filter` is always empty. **


```http request
POST https://api.revenexx.com/v1/customers/lifecycle-stages
```

** Extends this tenant&#039;s lifecycle stages set with a value of their own — the whole reason these four stopped being CHECK constraints. Where a company stands in the sales pipeline — a separate axis from status, and one whose steps are a sales team&#039;s own. The code is lowercase and becomes what `organizations.lifecycle_stage` stores; it cannot be changed afterwards, because every record carrying it would be orphaned. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| code | string | What `organizations.lifecycle_stage` will store. Lowercase, starting with a letter; immutable afterwards. |  |
| description | string | One line of help for whoever picks this value. |  |
| descriptions | object | Localized descriptions, keyed by language tag ({ "en": …, "de": … }). Null when nobody translated this value — a client then falls back to `description`. |  |
| is_default | boolean | Promote this value; the previous default is demoted in the same call. |  |
| labels | object | Localized titles, keyed by language tag ({ "en": …, "de": … }). Null when nobody translated this value — a client then falls back to `title`. |  |
| position | integer | Where it sits in the set, ascending. Default 0. |  |
| title | string | The fallback name shown when no locale matches. |  |
| tone | string | Semantic badge colour. |  |


```http request
DELETE https://api.revenexx.com/v1/customers/lifecycle-stages/{id}
```

** Takes a value out of the lifecycle stages set. There is no foreign key behind `organizations.lifecycle_stage` — one added to a table that starts empty fails the migration of every existing tenant — so this route IS the integrity: it refuses while any record still carries the code, and it refuses to empty the set. Retiring a value that is in use is therefore a two-step job: move the records onto another value first, then remove it. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The lifecycle stage to remove. |  |


```http request
GET https://api.revenexx.com/v1/customers/lifecycle-stages/{id}
```

** One value of the lifecycle stages set, by its id — its code, its fallback title, the per-language `labels` an operator reads and the badge `tone` a client renders it with. Where a company stands in the sales pipeline — a separate axis from status, and one whose steps are a sales team&#039;s own. Reading one value is the rare path: `GET /customers/lifecycle-stages` answers the whole set in a single page, which is what a select needs. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The lifecycle stage to read. Note that records store the CODE, not this id. |  |


```http request
PUT https://api.revenexx.com/v1/customers/lifecycle-stages/{id}
```

** Everything about a value except the value itself: its titles, its help text, its badge tone, its `position` in the select, and which one of the set is the default. The `code` is immutable, so no record carrying it is ever orphaned by an edit here — a merchant who retitles `customer` to wording of their own changes what people READ and nothing about what `organizations.lifecycle_stage` stores. Seeded values (`is_system`) are renameable like any other, and re-seeding leaves the rename alone. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The lifecycle stage to edit. |  |
| description | string | One line of help for whoever picks this value. |  |
| descriptions | object | Localized descriptions, keyed by language tag ({ "en": …, "de": … }). Null when nobody translated this value — a client then falls back to `description`. |  |
| is_default | boolean | Promote this value; the previous default is demoted. |  |
| labels | object | Localized titles, keyed by language tag ({ "en": …, "de": … }). Null when nobody translated this value — a client then falls back to `title`. |  |
| position | integer | Where it sits in the set, ascending. |  |
| title | string | The fallback name shown when no locale matches. |  |
| tone | string | Semantic badge colour. |  |


```http request
GET https://api.revenexx.com/v1/customers/payment-terms
```

** When a company has to pay. A wholesaler who agrees net 45 with one customer used to need a release of this app to say so. A fresh install is seeded with prepayment, direct_debit, net_7, net_14, net_30, net_60, net_90, and the set seeds on first read too, so the page is never empty and `organizations.payment_terms` always has a value it may carry. The whole set comes back in one page in the tenant&#039;s own order — this route takes no limit/offset/order and no column filters, so `page` describes the full set and `filter` is always empty. **


```http request
POST https://api.revenexx.com/v1/customers/payment-terms
```

** Extends this tenant&#039;s payment terms set with a value of their own — the whole reason these four stopped being CHECK constraints. When a company has to pay. A wholesaler who agrees net 45 with one customer used to need a release of this app to say so. The code is lowercase and becomes what `organizations.payment_terms` stores; it cannot be changed afterwards, because every record carrying it would be orphaned. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| code | string | What `organizations.payment_terms` will store. Lowercase, starting with a letter; immutable afterwards. |  |
| description | string | One line of help for whoever picks this value. |  |
| descriptions | object | Localized descriptions, keyed by language tag ({ "en": …, "de": … }). Null when nobody translated this value — a client then falls back to `description`. |  |
| is_default | boolean | Promote this value; the previous default is demoted in the same call. |  |
| labels | object | Localized titles, keyed by language tag ({ "en": …, "de": … }). Null when nobody translated this value — a client then falls back to `title`. |  |
| position | integer | Where it sits in the set, ascending. Default 0. |  |
| title | string | The fallback name shown when no locale matches. |  |
| tone | string | Semantic badge colour. |  |


```http request
DELETE https://api.revenexx.com/v1/customers/payment-terms/{id}
```

** Takes a value out of the payment terms set. There is no foreign key behind `organizations.payment_terms` — one added to a table that starts empty fails the migration of every existing tenant — so this route IS the integrity: it refuses while any record still carries the code, and it refuses to empty the set. Retiring a value that is in use is therefore a two-step job: move the records onto another value first, then remove it. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The payment term to remove. |  |


```http request
GET https://api.revenexx.com/v1/customers/payment-terms/{id}
```

** One value of the payment terms set, by its id — its code, its fallback title, the per-language `labels` an operator reads and the badge `tone` a client renders it with. When a company has to pay. A wholesaler who agrees net 45 with one customer used to need a release of this app to say so. Reading one value is the rare path: `GET /customers/payment-terms` answers the whole set in a single page, which is what a select needs. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The payment term to read. Note that records store the CODE, not this id. |  |


```http request
PUT https://api.revenexx.com/v1/customers/payment-terms/{id}
```

** Everything about a value except the value itself: its titles, its help text, its badge tone, its `position` in the select, and which one of the set is the default. The `code` is immutable, so no record carrying it is ever orphaned by an edit here — a merchant who retitles `net_30` to wording of their own changes what people READ and nothing about what `organizations.payment_terms` stores. Seeded values (`is_system`) are renameable like any other, and re-seeding leaves the rename alone. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The payment term to edit. |  |
| description | string | One line of help for whoever picks this value. |  |
| descriptions | object | Localized descriptions, keyed by language tag ({ "en": …, "de": … }). Null when nobody translated this value — a client then falls back to `description`. |  |
| is_default | boolean | Promote this value; the previous default is demoted. |  |
| labels | object | Localized titles, keyed by language tag ({ "en": …, "de": … }). Null when nobody translated this value — a client then falls back to `title`. |  |
| position | integer | Where it sits in the set, ascending. |  |
| title | string | The fallback name shown when no locale matches. |  |
| tone | string | Semantic badge colour. |  |


```http request
GET https://api.revenexx.com/v1/customers/vocabularies
```

** Discovery for the vocabulary routes: every enum this app publishes, each as a name, a title and a description. The VALUES are deliberately left out — this is the call that says which vocabularies exist, and the detail route is the one that answers what is in them. Names: address-types, contact-event-kinds, contact-statuses, lifecycle-stages, locales, organization-statuses, payment-terms, registration-statuses, roles, rule-matches, segment-sources. Fetch one with GET /customers/vocabularies/{name}; a client holding the qualified pair &#039;customers.&lt;name&gt;&#039; builds that URL from the pair alone. **


```http request
GET https://api.revenexx.com/v1/customers/vocabularies/{name}
```

** One vocabulary in full: every permitted value, each with its title, its description and the badge tone a client renders it with — enough to build a select without a second call. Two kinds of set, and &#039;source&#039; says which one answered. &#039;schema&#039; — the values are read out of the column&#039;s CHECK constraint, so the served set IS the enforced set and the two cannot drift; a value added to the constraint appears here even before anyone labels it, titled from its own key. &#039;table&#039; — the values are the TENANT&#039;s own rows (payment terms, address types, lifecycle stages, activity types, roles), so they carry labels/descriptions per locale, is_system and is_default, and a merchant may add to them without a release of this app. &#039;tenant&#039;/&#039;defaults&#039; are the two answers for a set the merchant configures but may not extend. Either way &#039;closed&#039; is true: the set is exhaustive at this moment, so a value outside it is stale data rather than a missing label. Values come back in the order a select should offer them — lifecycle order for a status, the merchant&#039;s own position for a table. Names: address-types, contact-event-kinds, contact-statuses, lifecycle-stages, locales, organization-statuses, payment-terms, registration-statuses, roles, rule-matches, segment-sources. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| name | string | **Required** The vocabulary name — the part after the dot in the qualified id. |  |

