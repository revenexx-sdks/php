# CartsIo Service


```http request
POST https://api.revenexx.com/v1/carts/export
```

** Renders every cart a filter selects, through one export profile, a page at a time. Each cart's document is exactly what carts.export answers for it through the same profile — as JSON `{carts: [{cart, items}, …]}`, every element importable on its own through carts.import; as CSV the lines of every cart under one header, each row led by `cart_id`. Owner, status, a creation-date range and a market narrow the selection; `filter` echoes what was applied. The call never answers "all": it scans at most `limit` carts in id order and hands back `next_cursor` until the scan is through. Because the end of the date range and the market are held against each scanned cart, a page can carry fewer carts than `limit`, even none, and still have a next one — keep calling until `next_cursor` is null. Nothing is stored and nothing about any cart changes. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| contact_id | string | Only the carts this contact owns. |  |
| created_from | string | Only carts opened at or after this ISO date or timestamp. |  |
| created_to | string | Only carts opened at or before this ISO date or timestamp. A bare date includes the whole day. |  |
| cursor | string | The `next_cursor` the previous page answered. Omit it for the first page. |  |
| format | string | Format when no profile_id is sent. Default 'json'. |  |
| limit | integer | Carts scanned per call. Default 50. |  |
| market | string | Only carts assigned to this market, by its code (case does not matter). A cart in no market is left out. |  |
| profile_id | string | The export profile every cart runs through — one of the ids `GET /carts/io/profiles?direction=export&active=true` lists, the same profile carts.export takes. Omit it for the canonical shape in `format`. |  |
| status | any | Only carts in these states — one status, an array, or a comma-separated list. An unknown status is a 400. |  |


```http request
POST https://api.revenexx.com/v1/carts/import
```

** Reads a payload of lines into a cart — the bulk-order path a buyer pastes a spreadsheet into. With `target_cart_id` the lines land in that cart, which must be active, and the profile's `apply_mode` decides what happens to the lines already there: 'replace' clears them first, 'insert' and 'append' both add. Without a target a new cart is created, and an OWNER is then required — `contact_id` or `session_key` — because a cart with neither cannot exist. `profile_id` names an IMPORT profile; without one the payload is read ad hoc, as Excel when `xlsx` is present, as CSV when `csv` is present and as JSON otherwise. The lines fold into identical product lines exactly as carts.items.create does, so `imported_lines` counts the lines READ and the cart may have gained fewer rows than that. A payload that parses to no line at all is a 400 rather than a quiet no-op. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| session_key | string | The session key of a cart owned by no contact — a guest's, or a punchout visit's pSid. Accepted and not yet checked; from 3.0.0 on, a call acting for a contact reaches such a cart only with it. |  |
| contact_id | string | Owner of the cart this import creates. Ignored when target_cart_id is sent. |  |
| csv | string | The CSV rows, when that is easier than putting them in `payload`. First line is the header, and its names are the ones the profile's mapping expects (the bundled quick-order template reads sku, name, quantity, unit_price). Numbers are coerced; a JSON column survives as a JSON string. |  |
| name | string | Name for the cart this import creates. A name in the payload's own `cart` block wins over it; without either the cart is called 'Imported cart'. |  |
| organization_id | string | The owner's company, stored on the cart this import creates. Ignored when target_cart_id is sent. |  |
| payload | object | The import itself. As an object: `{ "cart": { name, status, currency, channel_id, metadata }, "items": [ … ] }` — the same document carts.export produces, so an export round-trips. As a string: that document as raw JSON, or CSV rows when the profile is a csv one. A line with neither `name` nor `sku` is dropped, and a payload that leaves no line at all is a 400. |  |
| profile_id | string | The import profile to run — one of the ids `GET /carts/io/profiles?direction=import&active=true` lists. Omit it for an ad-hoc import: the payload is then read in the canonical shape, and as CSV if `csv` is what carried it. |  |
| session_key_body | string | Guest owner of the cart this import creates — the storefront's own session key. Ignored when target_cart_id is sent. |  |
| target_cart_id | string | An existing ACTIVE cart to import into. The lines are added to it (merging identical product lines), unless the profile says `apply_mode: replace`, which clears it first. Without this a new cart is created and an owner is required. |  |
| xlsx | string | An Excel workbook (.xlsx), base64-encoded — read when the profile is an xlsx one, or ad hoc when no profile is named. The first sheet is read: its first non-empty row is the header, named as the profile's mapping expects (the bundled template reads sku, name, quantity, unit_price); empty rows are skipped, number cells stay numbers and date cells become ISO dates. A file that is not an .xlsx workbook, or cannot be opened, is a 400 `invalid_xlsx`. |  |


```http request
GET https://api.revenexx.com/v1/carts/io/fields
```

** The fields an import/export profile's column mapping can name, for one entity — what a mapping editor offers as `mapping.columns[].from` instead of a free text box, each with its name and a label to show. A line profile (`entity=cart_items`) maps the line fields; a whole-cart profile (`entity=carts`, the default) maps the cart's own fields and its lines', because one mapping renames both. `role=key` answers only the fields a line is recognised by — the candidates for `mapping.keys`. The answer is the same for every tenant and changes only with the app. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| entity | string | The profile's entity. Default 'carts'. |  |
| role | string | 'column' (default) for every mappable field, 'key' for the match keys only. |  |


```http request
GET https://api.revenexx.com/v1/carts/io/profiles
```

** The filters are what make this list usable: `?direction=export` is how a client offers the profiles that carts.export will accept, `?is_template=true` separates the six bundled templates from what a merchant wrote, and `?active=true` leaves out what a merchant switched off — a picker sends both `direction` and `active`. An unknown column is dropped rather than refused — `filter` echoes what was understood. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | One profile, in list form. |  |
| name | string | Exact profile name — how the bundled templates are addressed, since they are identified by name. |  |
| direction | string | Import or export profiles. `?direction=export` is how a client offers exactly the profiles carts.export will accept — the other half is a 400. |  |
| entity | string | Profiles that carry whole carts, or profiles that carry lines. |  |
| format | string | JSON, CSV or Excel (xlsx) profiles. |  |
| apply_mode | string | Profiles that replace a target cart's lines, as against those that add to them. |  |
| is_template | boolean | The six bundled templates, or everything a merchant wrote. |  |
| active | boolean | Active or switched-off profiles. `?active=true` is what a picker lists, so a switched-off profile is not offered. |  |
| created_at | string | Exact instant, not a range. |  |
| updated_at | string | Exact instant, not a range. |  |
| limit | integer | Page size (default 50, max 200). |  |
| offset | integer | Row offset for pagination (default 0). |  |
| order | string | Sort by one column: 'column' | 'column.asc' | 'column.desc'. A bare column sorts ascending. Anything else is refused with 400. |  |


```http request
POST https://api.revenexx.com/v1/carts/io/profiles
```

** Defines a new import/export profile. Two fields are required and have no default — `name`, which must be unique within the tenant, and `direction`, which fixes the one way this profile will ever run. Everything else defaults to the common case: whole carts, JSON, `apply_mode` 'insert', not a template. The uniqueness of the name is a unique index rather than a check in this app, so a reused name is a 409 no matter which route wrote the other one, including the six bundled templates. The shape is Baseline-IO-compatible, so a mapping written for another app's import reads the same way here. Creating a profile does not move any data: carts.export and carts.import are what execute one, and each refuses a profile pointed the wrong way. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| active | boolean | Whether this profile is offered and runs. Default true. False switches it off: the pickers leave it out and a run through it is a 422 'profile_inactive'. A bundled template can be switched off too. |  |
| apply_mode | string | What an import does with the lines the target cart already has: 'replace' clears them first, 'insert' and 'append' both add and behave identically today. Read only when the import names a target_cart_id. Default 'insert'. |  |
| direction | string | Which way this profile runs. A profile only ever runs in the direction it declares: handing an import profile to carts.export is a 400, and the other way round. |  |
| entity | string | What the profile carries: whole carts (the `{cart, items}` document) or bare cart lines. Default 'carts'. |  |
| format | string | The wire format. 'json' is the canonical, re-importable document; 'csv' and 'xlsx' (an Excel workbook, base64 in the JSON body) are the spreadsheet forms, and only line fields survive them. Default 'json'. |  |
| is_template | boolean | One of the bundled templates. Set by carts.io.profiles.defaults; a profile a merchant writes is not one. |  |
| mapping | object | Baseline-IO-compatible column mapping. An empty object (or null) is identity: the full canonical shape, every field under its own name. |  |
| name | string | What a merchant picks this profile by. Unique within the tenant — reusing a name is a 409. |  |
| options | object | Free-form options carried with the profile. The six bundled templates put one human sentence under `description` and nothing else; no other key is read by this app, so anything a merchant needs alongside a profile can live here. |  |


```http request
POST https://api.revenexx.com/v1/carts/io/profiles/defaults
```

** Seeds the 6 bundled templates and reports which of them it had to create — the call that gives a fresh tenant something to export through before anybody has written a profile. Idempotent and matched by NAME, so a second call answers with everything under 'existing' and writes nothing, and a template a merchant has edited is left exactly as they left it rather than reset. It also runs by itself on app.installed; call it by hand where that event cannot be relied on, and after deleting a template to get it back. **


```http request
DELETE https://api.revenexx.com/v1/carts/io/profiles/{id}
```

** Removes a profile. Nothing in this app points at one — no cart and no line stores the profile it was imported through — so no foreign key holds the delete up and nothing is orphaned by it; what breaks is the caller still holding that `profile_id`, which answers 404 on its next run. Deleting one of the six bundled templates is not permanent either: the next carts.io.profiles.defaults, and the next install of this app, seeds it again by name, in the shape it ships with rather than the shape a merchant had edited it into. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The import/export profile, by its id — one of the ids `GET /carts/io/profiles` lists. |  |


```http request
GET https://api.revenexx.com/v1/carts/io/profiles/{id}
```

** One profile by id — the id carts.export and carts.import name in `profile_id`. Read it to see what a run will do before starting one: `direction`, because a profile only ever runs the way it declares; `entity`, whole carts or bare lines; `format`, where json round-trips and csv and xlsx carry line fields only; `mapping`, what the external columns are called; and `apply_mode`, which decides what an import does with the lines a target cart already has. `is_template` says whether this is one of the six the app ships with or something a merchant wrote, and `active` whether it runs at all. Reading a profile runs nothing and changes nothing. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The import/export profile, by its id — one of the ids `GET /carts/io/profiles` lists. |  |


```http request
PUT https://api.revenexx.com/v1/carts/io/profiles/{id}
```

** Edits a profile in place, the six bundled templates included — seeding matches on name and never rewrites what it finds, so an edit made here survives every later call to carts.io.profiles.defaults and every reinstall of the app. The name stays unique in the tenant, so renaming onto another profile's name is a 409, and a payload carrying no updatable field answers 400 rather than storing nothing quietly. Runs that already happened are unaffected: a profile is read at the moment carts.export or carts.import executes and nothing is kept pointing back at it, so changing a mapping changes the next run and no earlier one. `active: false` switches a profile off, a bundled template as much as one a merchant wrote: it is no longer offered and a run through it is refused, until it is switched back on. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The import/export profile, by its id — one of the ids `GET /carts/io/profiles` lists. |  |
| active | boolean | Whether this profile is offered and runs. Default true. False switches it off: the pickers leave it out and a run through it is a 422 'profile_inactive'. A bundled template can be switched off too. |  |
| apply_mode | string | What an import does with the lines the target cart already has: 'replace' clears them first, 'insert' and 'append' both add and behave identically today. Read only when the import names a target_cart_id. Default 'insert'. |  |
| direction | string | Which way this profile runs. A profile only ever runs in the direction it declares: handing an import profile to carts.export is a 400, and the other way round. |  |
| entity | string | What the profile carries: whole carts (the `{cart, items}` document) or bare cart lines. Default 'carts'. |  |
| format | string | The wire format. 'json' is the canonical, re-importable document; 'csv' and 'xlsx' (an Excel workbook, base64 in the JSON body) are the spreadsheet forms, and only line fields survive them. Default 'json'. |  |
| is_template | boolean | One of the bundled templates. Set by carts.io.profiles.defaults; a profile a merchant writes is not one. |  |
| mapping | object | Baseline-IO-compatible column mapping. An empty object (or null) is identity: the full canonical shape, every field under its own name. |  |
| name | string | What a merchant picks this profile by. Unique within the tenant — reusing a name is a 409. |  |
| options | object | Free-form options carried with the profile. The six bundled templates put one human sentence under `description` and nothing else; no other key is read by this app, so anything a merchant needs alongside a profile can live here. |  |


```http request
POST https://api.revenexx.com/v1/carts/io/profiles/{id}/copy
```

** Creates a new profile from an existing one under a new `name` — how a merchant changes one of the bundled templates without touching the template itself. The copy takes the source's `direction`, `entity`, `format`, `apply_mode`, `mapping`, `options` and `active`, and is never a template, whatever the source was. The name is unique within the tenant, so a missing name is a 400 and one another profile holds is a 409; neither writes anything. The source is left as it was, and the copy starts without a market assignment. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The import/export profile, by its id — one of the ids `GET /carts/io/profiles` lists. |  |
| name | string | The name the copy is stored under. Unique within the tenant, so it cannot be the source's own name or any other profile's. |  |
| parts | array | Accepted for the Cockpit's copy dialog, which always sends it. A profile is copied whole. |  |


```http request
POST https://api.revenexx.com/v1/carts/{id}/export
```

** Renders one cart as a document somebody can take away. With `profile_id` the named EXPORT profile decides the format, the entity and the column names; handing it an import profile is a 400, because a profile only runs the way it declares. Without one the call runs ad hoc — JSON, unless `format: 'csv'` says otherwise. The JSON form is `{cart: {…}, items: […]}` and is exactly what carts.import takes back, so an export round-trips; the CSV form is the lines only, header first, and drops everything that lives on the cart rather than on a line. Nothing is stored and nothing about the cart changes — `filename` is a suggestion for a browser download, not a file this app keeps — and a cart of any status can be exported, including one already ordered. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The cart, by its id — the `id` every cart answer carries. A uuid: the data plane casts the segment, so a code or a slug is refused before the cart is looked up. |  |
| session_key | string | The session key of a cart owned by no contact — a guest's, or a punchout visit's pSid. Accepted and not yet checked; from 3.0.0 on, a call acting for a contact reaches such a cart only with it. |  |
| format | string | Format of an ad-hoc export, read only when no profile_id is sent. 'json' returns the whole `{cart, items}` document, 'csv' the lines alone, 'xlsx' the lines as an Excel workbook (base64). Default 'json'. |  |
| profile_id | string | The export profile to run — one of the ids `GET /carts/io/profiles?direction=export&active=true` lists. Omit it for an ad-hoc export in the canonical shape, which is what `format` is for. |  |

