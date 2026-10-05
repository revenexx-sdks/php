# TagManagerTags Service


```http request
GET https://api.revenexx.com/v1/tag-manager/registry
```

** Every registry key a marketing tag may name, with its label, category, the consent catalogue vendor code it usually discloses as (`vendor`, repeated as `vendor_key` for looking up the catalogue logo), its hosts, the JSON Schema of its configuration and its default event map. Every configuration property carries `title` and `description` as English strings and `x-title` / `x-description` as { de, en } for the tag form. **


```http request
GET https://api.revenexx.com/v1/tag-manager/tags
```

** Every marketing tag of this tenant visible in the requested market, paged. Equality filters on plain columns; jsonb columns are answered but not filterable. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| limit | integer | Page size (default 50, max 200). |  |
| offset | integer | Row offset for pagination (default 0). |  |
| order | string | Sort as 'column.asc' | 'column.desc', e.g. 'created_at.desc'. |  |
| id | string | Only rows whose `id` equals this value. |  |
| code | string | Only rows whose `code` equals this value. |  |
| name | string | Only rows whose `name` equals this value. |  |
| description | string | Only rows whose `description` equals this value. |  |
| kind | string | Only rows whose `kind` equals this value. |  |
| registry_key | string | Only rows whose `registry_key` equals this value. |  |
| script_url | string | Only rows whose `script_url` equals this value. |  |
| vendor_code | string | Only rows whose `vendor_code` equals this value. |  |
| purpose_code | string | Only rows whose `purpose_code` equals this value. |  |
| load | string | Only rows whose `load` equals this value. |  |
| is_active | boolean | Only rows whose `is_active` equals this value. |  |
| created_at | string | Only rows whose `created_at` equals this value. |  |
| updated_at | string | Only rows whose `updated_at` equals this value. |  |


```http request
POST https://api.revenexx.com/v1/tag-manager/tags
```

** Create one marketing tag. Every rule is checked and every broken one is named in the 422. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| chained_vendor_codes | array | Vendors this tag loads by itself — Google Analytics under a Google Tag Manager container. They do not decide whether the tag loads, but each must be disclosed in the policy, or the publish is refused. |  |
| code | string | The row's stable handle, unique per tenant: lowercase letters, digits, '-' and '_'. |  |
| config | object | For a registry tag: the options passed to that registry entry, checked against its `config_schema` on every write. A value may be a `{{variable}}` placeholder, checked again once resolved at publish. Consent Mode defaults and personal data are never options. |  |
| description | string | Free text for the merchant: why this tag exists. |  |
| event_map | object | Theme event → the vendor's own call, `{ name, params? }` or a name. Overrides the registry's default map per event; `null` removes a default. Keys must be events of theme-events/1. |  |
| is_active | boolean | Whether the tag is part of the next published container. An inactive tag is kept but never published. |  |
| kind | string | `registry` (an entry of GET /tag-manager/registry) or `script` (an https address). There is no custom HTML kind, and anything else is refused with 422. |  |
| load | string | When the storefront starts loading the tag once allowed: `immediate`, `idle` or `interaction`. A new tag without one takes the market's `default_load` setting. |  |
| name | string | What the row is called, as a person reads it. |  |
| purpose_code | string | The purpose this tag serves (`statistics`, `marketing`, `necessary`, …). The vendor must be disclosed for exactly this purpose. Required. |  |
| registry_key | string | For a registry tag: the @nuxt/scripts registry key (`googleAnalytics`, `etracker`, …). Empty for a script tag. |  |
| script_url | string | For a script tag: the absolute https:// address it loads. Empty for a registry tag. |  |
| vendor_code | string | The vendor this tag loads, as the consent manager's published policy discloses it (`google-analytics`, `etracker`). Required. |  |


```http request
DELETE https://api.revenexx.com/v1/tag-manager/tags/{id}
```

** Delete one marketing tag. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The id of the marketing tag. |  |


```http request
GET https://api.revenexx.com/v1/tag-manager/tags/{id}
```

** One marketing tag by id. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The id of the marketing tag. |  |


```http request
PUT https://api.revenexx.com/v1/tag-manager/tags/{id}
```

** Edit one marketing tag. The row it would leave is checked whole. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The id of the marketing tag. |  |
| chained_vendor_codes | array | Vendors this tag loads by itself — Google Analytics under a Google Tag Manager container. They do not decide whether the tag loads, but each must be disclosed in the policy, or the publish is refused. |  |
| code | string | The row's stable handle, unique per tenant: lowercase letters, digits, '-' and '_'. |  |
| config | object | For a registry tag: the options passed to that registry entry, checked against its `config_schema` on every write. A value may be a `{{variable}}` placeholder, checked again once resolved at publish. Consent Mode defaults and personal data are never options. |  |
| description | string | Free text for the merchant: why this tag exists. |  |
| event_map | object | Theme event → the vendor's own call, `{ name, params? }` or a name. Overrides the registry's default map per event; `null` removes a default. Keys must be events of theme-events/1. |  |
| is_active | boolean | Whether the tag is part of the next published container. An inactive tag is kept but never published. |  |
| kind | string | `registry` (an entry of GET /tag-manager/registry) or `script` (an https address). There is no custom HTML kind, and anything else is refused with 422. |  |
| load | string | When the storefront starts loading the tag once allowed: `immediate`, `idle` or `interaction`. A new tag without one takes the market's `default_load` setting. |  |
| name | string | What the row is called, as a person reads it. |  |
| purpose_code | string | The purpose this tag serves (`statistics`, `marketing`, `necessary`, …). The vendor must be disclosed for exactly this purpose. Required. |  |
| registry_key | string | For a registry tag: the @nuxt/scripts registry key (`googleAnalytics`, `etracker`, …). Empty for a script tag. |  |
| script_url | string | For a script tag: the absolute https:// address it loads. Empty for a registry tag. |  |
| vendor_code | string | The vendor this tag loads, as the consent manager's published policy discloses it (`google-analytics`, `etracker`). Required. |  |


```http request
GET https://api.revenexx.com/v1/tag-manager/tags/{id}/triggers
```

** The triggers attached to one marketing tag. A tag with none loads on every page. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The id of the marketing tag. |  |


```http request
POST https://api.revenexx.com/v1/tag-manager/tags/{id}/triggers
```

** Attach one trigger to one marketing tag. A pair is attached once. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The id of the marketing tag. |  |
| trigger_id | string | The trigger to attach. |  |


```http request
DELETE https://api.revenexx.com/v1/tag-manager/tags/{id}/triggers/{trigger_id}
```

** Remove one trigger from one marketing tag. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The id of the marketing tag. |  |
| trigger_id | string | **Required** The id of the trigger. |  |


```http request
GET https://api.revenexx.com/v1/tag-manager/triggers
```

** Every trigger of this tenant visible in the requested market, paged. Equality filters on plain columns; jsonb columns are answered but not filterable. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| limit | integer | Page size (default 50, max 200). |  |
| offset | integer | Row offset for pagination (default 0). |  |
| order | string | Sort as 'column.asc' | 'column.desc', e.g. 'created_at.desc'. |  |
| id | string | Only rows whose `id` equals this value. |  |
| code | string | Only rows whose `code` equals this value. |  |
| name | string | Only rows whose `name` equals this value. |  |
| kind | string | Only rows whose `kind` equals this value. |  |
| event_name | string | Only rows whose `event_name` equals this value. |  |
| created_at | string | Only rows whose `created_at` equals this value. |  |
| updated_at | string | Only rows whose `updated_at` equals this value. |  |


```http request
POST https://api.revenexx.com/v1/tag-manager/triggers
```

** Create one trigger. Every rule is checked and every broken one is named in the 422. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| code | string | The row's stable handle, unique per tenant: lowercase letters, digits, '-' and '_'. |  |
| conditions | object | Narrowing, every key optional and all set keys must match: `path_prefixes` (paths starting with /), `page_types` (the contract's page types), `b2b` (true/false). |  |
| event_name | string | For a theme_event trigger: an event of theme-events/1. Empty for a page_view trigger. |  |
| kind | string | `page_view` (on page views matching the conditions) or `theme_event` (when the named event happens). |  |
| name | string | What the row is called, as a person reads it. |  |


```http request
DELETE https://api.revenexx.com/v1/tag-manager/triggers/{id}
```

** Delete one trigger. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The id of the trigger. |  |


```http request
GET https://api.revenexx.com/v1/tag-manager/triggers/{id}
```

** One trigger by id. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The id of the trigger. |  |


```http request
PUT https://api.revenexx.com/v1/tag-manager/triggers/{id}
```

** Edit one trigger. The row it would leave is checked whole. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The id of the trigger. |  |
| code | string | The row's stable handle, unique per tenant: lowercase letters, digits, '-' and '_'. |  |
| conditions | object | Narrowing, every key optional and all set keys must match: `path_prefixes` (paths starting with /), `page_types` (the contract's page types), `b2b` (true/false). |  |
| event_name | string | For a theme_event trigger: an event of theme-events/1. Empty for a page_view trigger. |  |
| kind | string | `page_view` (on page views matching the conditions) or `theme_event` (when the named event happens). |  |
| name | string | What the row is called, as a person reads it. |  |


```http request
GET https://api.revenexx.com/v1/tag-manager/variables
```

** Every variable of this tenant visible in the requested market, paged. Equality filters on plain columns; jsonb columns are answered but not filterable. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| limit | integer | Page size (default 50, max 200). |  |
| offset | integer | Row offset for pagination (default 0). |  |
| order | string | Sort as 'column.asc' | 'column.desc', e.g. 'created_at.desc'. |  |
| id | string | Only rows whose `id` equals this value. |  |
| code | string | Only rows whose `code` equals this value. |  |
| name | string | Only rows whose `name` equals this value. |  |
| kind | string | Only rows whose `kind` equals this value. |  |
| path | string | Only rows whose `path` equals this value. |  |
| created_at | string | Only rows whose `created_at` equals this value. |  |
| updated_at | string | Only rows whose `updated_at` equals this value. |  |


```http request
POST https://api.revenexx.com/v1/tag-manager/variables
```

** Create one variable. Every rule is checked and every broken one is named in the 422. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| code | string | The name a placeholder uses: `{{code}}`. Lowercase letters, digits and underscores, starting with a letter. |  |
| constant_value | any | For a constant variable: its value, of any JSON type. |  |
| kind | string | `constant` (a value kept here), `event_field` (a field of the theme event) or `page` (a field of the page). |  |
| name | string | What the row is called, as a person reads it. |  |
| path | string | For event_field and page variables: the dotted path, e.g. `ecommerce.value_net`. |  |


```http request
DELETE https://api.revenexx.com/v1/tag-manager/variables/{id}
```

** Delete one variable. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The id of the variable. |  |


```http request
GET https://api.revenexx.com/v1/tag-manager/variables/{id}
```

** One variable by id. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The id of the variable. |  |


```http request
PUT https://api.revenexx.com/v1/tag-manager/variables/{id}
```

** Edit one variable. The row it would leave is checked whole. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The id of the variable. |  |
| code | string | The name a placeholder uses: `{{code}}`. Lowercase letters, digits and underscores, starting with a letter. |  |
| constant_value | any | For a constant variable: its value, of any JSON type. |  |
| kind | string | `constant` (a value kept here), `event_field` (a field of the theme event) or `page` (a field of the page). |  |
| name | string | What the row is called, as a person reads it. |  |
| path | string | For event_field and page variables: the dotted path, e.g. `ecommerce.value_net`. |  |


```http request
GET https://api.revenexx.com/v1/tag-manager/vocabularies
```

** The event names of the theme event contract version this app supports (theme-events/1), which a trigger and an event map may name, plus the value sets of tags, triggers and variables. **

