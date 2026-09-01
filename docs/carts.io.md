# CartsIo Service


```http request
POST https://api.revenexx.com/v1/carts/import
```

** Reads a payload of lines into a cart — the bulk-order path a buyer pastes a spreadsheet into. With `target_cart_id` the lines land in that cart, which must be active, and the profile&#039;s `apply_mode` decides what happens to the lines already there: &#039;replace&#039; clears them first, &#039;insert&#039; and &#039;append&#039; both add. Without a target a new cart is created, and an OWNER is then required — `contact_id` or `session_key` — because a cart with neither cannot exist. `profile_id` names an IMPORT profile; without one the payload is read ad hoc, as CSV when `csv` is present and as JSON otherwise. The lines fold into identical product lines exactly as carts.items.create does, so `imported_lines` counts the lines READ and the cart may have gained fewer rows than that. A payload that parses to no line at all is a 400 rather than a quiet no-op. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| contact_id | string | Owner of the cart this import creates. Ignored when target_cart_id is sent. |  |
| csv | string | The CSV rows, when that is easier than putting them in `payload`. First line is the header, and its names are the ones the profile's mapping expects (the bundled quick-order template reads sku, name, quantity, unit_price). Numbers are coerced; a JSON column survives as a JSON string. |  |
| name | string | Name for the cart this import creates. A name in the payload's own `cart` block wins over it; without either the cart is called 'Imported cart'. |  |
| payload | object | The import itself. As an object: `{ "cart": { name, status, currency, channel_id, metadata }, "items": [ … ] }` — the same document carts.export produces, so an export round-trips. As a string: that document as raw JSON, or CSV rows when the profile is a csv one. A line with neither `name` nor `sku` is dropped, and a payload that leaves no line at all is a 400. |  |
| profile_id | string | The import profile to run — one of the ids `GET /carts/io/profiles?direction=import` lists. Omit it for an ad-hoc import: the payload is then read in the canonical shape, and as CSV if `csv` is what carried it. |  |
| session_key | string | Guest owner of the cart this import creates — the storefront's own session key. Ignored when target_cart_id is sent. |  |
| target_cart_id | string | An existing ACTIVE cart to import into. The lines are added to it (merging identical product lines), unless the profile says `apply_mode: replace`, which clears it first. Without this a new cart is created and an owner is required. |  |


```http request
GET https://api.revenexx.com/v1/carts/io/profiles
```

** The filters are what make this list usable: `?direction=export` is how a client offers the profiles that carts.export will accept, and `?is_template=true` separates the four bundled templates from what a merchant wrote. An unknown column is dropped rather than refused — `filter` echoes what was understood. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | One profile, in list form. |  |
| name | string | Exact profile name — how the bundled templates are addressed, since they are identified by name. |  |
| direction | string | Import or export profiles. `?direction=export` is how a client offers exactly the profiles carts.export will accept — the other half is a 400. |  |
| entity | string | Profiles that carry whole carts, or profiles that carry lines. |  |
| format | string | JSON profiles or CSV profiles. |  |
| apply_mode | string | Profiles that replace a target cart's lines, as against those that add to them. |  |
| is_template | boolean | The four bundled templates, or everything a merchant wrote. |  |
| created_at | string | Exact instant, not a range. |  |
| updated_at | string | Exact instant, not a range. |  |
| limit | integer | Page size (default 50, max 200). |  |
| offset | integer | Row offset for pagination (default 0). |  |
| order | string | Sort by one column: 'column' | 'column.asc' | 'column.desc'. A bare column sorts ascending. Anything else is refused with 400. |  |


```http request
POST https://api.revenexx.com/v1/carts/io/profiles
```

** Defines a new import/export profile. Two fields are required and have no default — `name`, which must be unique within the tenant, and `direction`, which fixes the one way this profile will ever run. Everything else defaults to the common case: whole carts, JSON, `apply_mode` &#039;insert&#039;, not a template. The uniqueness of the name is a unique index rather than a check in this app, so a reused name is a 409 no matter which route wrote the other one, including the four bundled templates. The shape is Baseline-IO-compatible, so a mapping written for another app&#039;s import reads the same way here. Creating a profile does not move any data: carts.export and carts.import are what execute one, and each refuses a profile pointed the wrong way. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| apply_mode | string | What an import does with the lines the target cart already has: 'replace' clears them first, 'insert' and 'append' both add and behave identically today. Read only when the import names a target_cart_id. Default 'insert'. |  |
| direction | string | Which way this profile runs. A profile only ever runs in the direction it declares: handing an import profile to carts.export is a 400, and the other way round. |  |
| entity | string | What the profile carries: whole carts (the `{cart, items}` document) or bare cart lines. Default 'carts'. |  |
| format | string | The wire format. 'json' is the canonical, re-importable document; 'csv' is the spreadsheet form, and only line fields survive it. Default 'json'. |  |
| is_template | boolean | One of the bundled templates. Set by carts.io.profiles.defaults; a profile a merchant writes is not one. |  |
| mapping | object | Baseline-IO-compatible column mapping. An empty object (or null) is identity: the full canonical shape, every field under its own name. |  |
| name | string | What a merchant picks this profile by. Unique within the tenant — reusing a name is a 409. |  |
| options | object | Free-form options carried with the profile. The four bundled templates put one human sentence under `description` and nothing else; no other key is read by this app, so anything a merchant needs alongside a profile can live here. |  |


```http request
POST https://api.revenexx.com/v1/carts/io/profiles/defaults
```

** Seeds the 4 bundled templates and reports which of them it had to create — the call that gives a fresh tenant something to export through before anybody has written a profile. Idempotent and matched by NAME, so a second call answers with everything under &#039;existing&#039; and writes nothing, and a template a merchant has edited is left exactly as they left it rather than reset. It also runs by itself on app.installed; call it by hand where that event cannot be relied on, and after deleting a template to get it back. **


```http request
DELETE https://api.revenexx.com/v1/carts/io/profiles/{id}
```

** Removes a profile. Nothing in this app points at one — no cart and no line stores the profile it was imported through — so no foreign key holds the delete up and nothing is orphaned by it; what breaks is the caller still holding that `profile_id`, which answers 404 on its next run. Deleting one of the four bundled templates is not permanent either: the next carts.io.profiles.defaults, and the next install of this app, seeds it again by name, in the shape it ships with rather than the shape a merchant had edited it into. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The import/export profile, by its id — one of the ids `GET /carts/io/profiles` lists. |  |


```http request
GET https://api.revenexx.com/v1/carts/io/profiles/{id}
```

** One profile by id — the id carts.export and carts.import name in `profile_id`. Read it to see what a run will do before starting one: `direction`, because a profile only ever runs the way it declares; `entity`, whole carts or bare lines; `format`, where json round-trips and csv carries line fields only; `mapping`, what the external columns are called; and `apply_mode`, which decides what an import does with the lines a target cart already has. `is_template` says whether this is one of the four the app ships with or something a merchant wrote. Reading a profile runs nothing and changes nothing. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The import/export profile, by its id — one of the ids `GET /carts/io/profiles` lists. |  |


```http request
PUT https://api.revenexx.com/v1/carts/io/profiles/{id}
```

** Edits a profile in place, the four bundled templates included — seeding matches on name and never rewrites what it finds, so an edit made here survives every later call to carts.io.profiles.defaults and every reinstall of the app. The name stays unique in the tenant, so renaming onto another profile&#039;s name is a 409, and a payload carrying no updatable field answers 400 rather than storing nothing quietly. Runs that already happened are unaffected: a profile is read at the moment carts.export or carts.import executes and nothing is kept pointing back at it, so changing a mapping changes the next run and no earlier one. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The import/export profile, by its id — one of the ids `GET /carts/io/profiles` lists. |  |
| apply_mode | string | What an import does with the lines the target cart already has: 'replace' clears them first, 'insert' and 'append' both add and behave identically today. Read only when the import names a target_cart_id. Default 'insert'. |  |
| direction | string | Which way this profile runs. A profile only ever runs in the direction it declares: handing an import profile to carts.export is a 400, and the other way round. |  |
| entity | string | What the profile carries: whole carts (the `{cart, items}` document) or bare cart lines. Default 'carts'. |  |
| format | string | The wire format. 'json' is the canonical, re-importable document; 'csv' is the spreadsheet form, and only line fields survive it. Default 'json'. |  |
| is_template | boolean | One of the bundled templates. Set by carts.io.profiles.defaults; a profile a merchant writes is not one. |  |
| mapping | object | Baseline-IO-compatible column mapping. An empty object (or null) is identity: the full canonical shape, every field under its own name. |  |
| name | string | What a merchant picks this profile by. Unique within the tenant — reusing a name is a 409. |  |
| options | object | Free-form options carried with the profile. The four bundled templates put one human sentence under `description` and nothing else; no other key is read by this app, so anything a merchant needs alongside a profile can live here. |  |


```http request
POST https://api.revenexx.com/v1/carts/{id}/export
```

** Renders one cart as a document somebody can take away. With `profile_id` the named EXPORT profile decides the format, the entity and the column names; handing it an import profile is a 400, because a profile only runs the way it declares. Without one the call runs ad hoc — JSON, unless `format: &#039;csv&#039;` says otherwise. The JSON form is `{cart: {…}, items: […]}` and is exactly what carts.import takes back, so an export round-trips; the CSV form is the lines only, header first, and drops everything that lives on the cart rather than on a line. Nothing is stored and nothing about the cart changes — `filename` is a suggestion for a browser download, not a file this app keeps — and a cart of any status can be exported, including one already ordered. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The cart, by its id — the `id` every cart answer carries. A uuid: the data plane casts the segment, so a code or a slug is refused before the cart is looked up. |  |
| format | string | Format of an ad-hoc export, read only when no profile_id is sent. 'json' returns the whole `{cart, items}` document, 'csv' the lines alone. Default 'json'. |  |
| profile_id | string | The export profile to run — one of the ids `GET /carts/io/profiles?direction=export` lists. Omit it for an ad-hoc export in the canonical shape, which is what `format` is for. |  |

