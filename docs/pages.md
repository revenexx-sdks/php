# Pages Service


```http request
GET https://api.revenexx.com/v1/pages/library
```

** The pool an editor picks a reusable block from. A library item is ONE block subtree that many pages share BY REFERENCE — edit the item and every page using it changes — which is what separates it from a template, the other reusable thing here, which copies instead and is at `GET /pages/templates`. So the two filters are the two questions the picker asks: `bundles` narrows to the block types that fit the field being filled, `text` matches the label a person gave the item. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| limit | integer | Page size (default 24, max 200). |  |
| offset | integer | Row offset for pagination (default 0). |  |
| order | string | Sort by one column: 'column' | 'column.asc' | 'column.desc'. A bare column sorts ascending. A column this entity does not have, or any other shape, is refused with 400. |  |
| bundles | string | Comma-separated block types; an item matching any of them is returned. Note the plural — `?bundle=` (singular) is not read by this route and is ignored. Empty means no filter. |  |
| text | string | Case-insensitive substring search over the item label. Runs in the query, so `page.total` counts the matches. Empty means no search. |  |


```http request
DELETE https://api.revenexx.com/v1/pages/library/{id}
```

** Retires a reusable block. It leaves the picker and every list, but the blocks pointing at it keep their `library_item_id` — the FK&#039;s `set null` belongs to a hard delete, and this writes a tombstone. Delivery then skips the expansion for a struck item rather than failing on it, so a page that used it falls back to the block content stored in its own published revision: nothing breaks, but the pages quietly stop tracking each other. Nothing here tells you which pages those are, so establish that before striking it. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The library item id. |  |


```http request
GET https://api.revenexx.com/v1/pages/library/{id}
```

** The stored subtree behind one reusable block, so a picker can preview what dropping it into a page would produce. Because delivery expands the reference against THIS row at read time, what comes back is also what every page already using the item is currently rendering — which makes this the call to make before editing one. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The library item id. |  |


```http request
PUT https://api.revenexx.com/v1/pages/library/{id}
```

** The one write in this app whose blast radius is not a single page. Delivery expands a library reference against this row every time it serves, so replacing `tree` re-renders every page that points at the item — published ones included — without any of them being edited, republished or even touched. Nothing warns you first and no revision records it, because the pages did not change; the item did. Changing `label` or `bundle` only moves the item around the picker. Detaching one page from the item, so it keeps a copy of its own, is an editor mutation and not this route. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The library item id. |  |
| bundle | string | The block type this item instantiates. Changing it moves the item to a different part of the picker. |  |
| label | string | What the item is called in the picker. |  |
| tree | object | A block and its whole subtree, serialized. Produced by the editor when a selection is made reusable or saved as a template, and instantiated back into real blocks when one is inserted. |  |


```http request
GET https://api.revenexx.com/v1/pages/menus
```

** The management view of the menus a tenant keeps — `main`, `footer`, `account` and whatever else the theme asks for, each with the key it is looked up by. This route reads no filter at all — a `?menu_key=` is ignored, which the empty `filter` echo shows — so fetch a page and pick, or address one by id. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| limit | integer | Page size (default 50, max 200). |  |
| offset | integer | Row offset for pagination (default 0). |  |
| order | string | Sort by one column: 'column' | 'column.asc' | 'column.desc'. A bare column sorts ascending. A column this entity does not have, or any other shape, is refused with 400. |  |


```http request
POST https://api.revenexx.com/v1/pages/menus
```

** Writes a menu by its KEY rather than by its id, which is what makes theme seeding safe to repeat: a key the tenant already has has its label and items replaced in place, a key it does not have is created. `items` is replaced wholesale and never merged, so sending an empty list empties the navigation. One caveat worth reading before you rely on the idempotence: the key&#039;s uniqueness is this route&#039;s doing and not the database&#039;s — `menu_key` carries an index but no unique constraint — so a duplicate key created any other way leaves this route updating whichever row it finds first. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| items | array | The ordered navigation tree. Replaces the stored one completely. |  |
| label | string | What this menu is called for the people who edit it. Required on a create; an update keeps the label it had when this is left out. |  |
| menuKey | string | The stable slot the theme asks for this menu by. Idempotency is keyed on it: sending an existing key replaces that menu instead of creating a second one. |  |


```http request
DELETE https://api.revenexx.com/v1/pages/menus/{id}
```

** Writes the tombstone. The menu drops out of the management list and out of `GET /pages/delivery/menus` in the same moment, so a theme that reads its key gets nothing back and renders nothing — there is no fallback and no error a storefront could act on. The key is free immediately, which means re-seeding the theme is the way back. Check what reads the key before striking it. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The menu row id. |  |


```http request
GET https://api.revenexx.com/v1/pages/menus/{id}
```

** One menu and its whole item tree — the ordered links a theme renders as its header, footer or account navigation. `items` is nested, not one level, so this is the entire navigation for that key in a single read. Addressed by ROW ID here; the key a theme knows it by is `menu_key` on the body, and the route that works by key is the upsert. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The menu row id — not the menu key. |  |


```http request
PUT https://api.revenexx.com/v1/pages/menus/{id}
```

** The same write as the upsert, for a caller that already holds the row id — use this when editing a menu a person picked from a list, and the upsert when reconciling a theme&#039;s defaults. `menu_key` is deliberately not editable here: the key is the handle every theme reads the menu by, so changing it would empty whatever is rendering that key without anything reporting an error. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The menu row id. |  |
| items | array | The ordered navigation tree. Replaces the stored one completely. |  |
| label | string | What this menu is called for the people who edit it. |  |


```http request
GET https://api.revenexx.com/v1/pages/pages
```

** The EDITORIAL index — every live page of the tenant, whatever its status, newest change first. This is the list the Cockpit shows a person: drafts and archived pages are in it, and a row here says nothing about whether a visitor can see the page, because a published status without a published revision still delivers nothing. A storefront wants `GET /pages/delivery/pages` instead, which answers only what is actually servable. Soft-deleted pages are never returned and the predicate is this route&#039;s own, not something a caller can switch off. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| limit | integer | Page size (default 50, max 200). |  |
| offset | integer | Row offset for pagination (default 0). |  |
| order | string | Sort by one column: 'column' | 'column.asc' | 'column.desc'. A bare column sorts ascending. A column this entity does not have, or any other shape, is refused with 400. |  |
| bundle | string | Exact page type. The value set belongs to the active theme, so this app constrains it to a non-empty string and nothing more. |  |
| status | string | Exact lifecycle status. |  |
| q | string | Case-insensitive substring search over the page title. Runs in the query, so `page.total` counts the matches. Empty means no search. |  |


```http request
POST https://api.revenexx.com/v1/pages/pages
```

** Writes two rows, not one: the page itself and the translation row for its source language, so a page is never without the language it was authored in and `GET /pages/delivery/page?slug=` can match a localized URL from the first moment. Everything the caller leaves out comes from the tenant&#039;s settings, not from a literal in this app: `bundle` from default_page_bundle, `sourceLanguage` from default_source_language (resolved for the request&#039;s market), and the status of both the page and its source translation from default_page_status (draft | published). **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| bundle | string | The page type. Omit to take the default_page_bundle setting. |  |
| hostOptions | object | Page-level blökkli display options as a flat `option key → value` map. Theme-defined; usually left out and set later from the editor. |  |
| meta | object | The page's metadata bag (SEO and social fields). Stored and handed back untouched — this app reads no key of it, so the theme decides what goes in. |  |
| slug | string | The path segment the storefront routes it under, without a leading slash. Unique per tenant among live pages; omit or send null for a page reached only by id. Nothing here derives one from the title. |  |
| sourceLanguage | string | The language you are authoring in, and the fallback for every later translation. Omit to take the default_source_language setting for the request market. |  |
| title | string | What the page is called, in its source language. Shown in the editorial list and searched by `?q=`. |  |


```http request
DELETE https://api.revenexx.com/v1/pages/pages/{id}
```

** Writes a tombstone. The page leaves every list, every read and all delivery at once, and its slug is immediately free for another page — the unique index counts live rows only. Nothing is erased: the translations, blocks, edit state, revisions, comments and preview grants that hang off the page all keep their rows, because their `on delete cascade` belongs to a hard delete and this is not one. So a page can be brought back intact by clearing `deleted_at` — but not through this app, which publishes no route that does it. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The page id. |  |


```http request
GET https://api.revenexx.com/v1/pages/pages/{id}
```

** One page RECORD: what it is called, where it routes, what type it is, which revision is live. Not its content — the blocks are not on this row and no expansion here returns them. The editor reads them with `GET /pages/editor/{page_id}/state`, a renderer with `GET /pages/delivery/page`. A soft-deleted page answers 404 exactly like one that never existed, so this is also the check for whether an id is still good. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The page id. |  |


```http request
PUT https://api.revenexx.com/v1/pages/pages/{id}
```

** Corrects the page RECORD — the five fields an editor changes without opening the visual editor, which are `title`, `slug`, `status`, `meta` and `bundle`, and no others. Anything else in the body is dropped rather than refused, and the block tree is unreachable from here by design: content moves only through the editor&#039;s mutation log, so a caller cannot half-edit a page behind the undo history&#039;s back. Two consequences worth knowing before you call it: a slug is unique among live pages, so claiming one that is held answers 409; and setting `status` to published does NOT put anything in front of a visitor — delivery needs a revision, which only `POST /pages/editor/{page_id}/publish` writes. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The page id. |  |
| bundle | string | The page type. Changing it changes which template the theme renders. |  |
| meta | object | The page's metadata bag. Replaced wholesale, not merged. |  |
| slug | string | The path segment the storefront routes it under. Sending a slug another live page holds answers 409; sending null makes the page unreachable by path. |  |
| status | string | The lifecycle status. Setting `published` here does NOT publish content — delivery still needs a revision, which only `POST /pages/editor/{page_id}/publish` writes. |  |
| title | string | The page title in its source language. |  |


```http request
GET https://api.revenexx.com/v1/pages/pages/{id}/revisions
```

** One entry per publication, newest first, which is the order a history is read in and the one this route sorts by unless `order` says otherwise. The `snapshot` — the whole published page, in every language — is deliberately not in the index: it is page-sized, and nothing that renders a history needs it. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The page whose history to read. |  |
| limit | integer | Page size (default 50, max 200). |  |
| offset | integer | Row offset for pagination (default 0). |  |
| order | string | Sort by one column: 'column' | 'column.asc' | 'column.desc'. A bare column sorts ascending. A column this entity does not have, or any other shape, is refused with 400. |  |
| label | string | Exact revision label — the name a publication was made under. An equality, not a search. |  |
| created_by | string | Exact user id of whoever published. |  |
| created_by_name | string | Exact display name recorded at publish time. |  |
| created_at | string | Exact publication timestamp, RFC 3339. Equality only — this data plane has no range operator, so walk the history with `order=created_at.desc` and `limit` instead. |  |


```http request
POST https://api.revenexx.com/v1/pages/seed
```

** The target of a theme activation hook: hand it the theme&#039;s default pages and menus and it creates whatever is missing. Idempotent by `slug` and by menu key — a slug or a key the tenant already holds is skipped rather than rewritten, so re-running after a theme update adds only the new ones and never overwrites what an editor has since changed. A seeded page is published on the spot, immediately servable by delivery: the default_page_status setting deliberately does not apply, because a theme that activates with invisible pages looks broken. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| menus | array | The menus to create. One with no key or no label is reported under `skipped`. |  |
| pages | array | The pages to create. One that has no `slug` or no `title` is reported under `skipped` rather than refused, so one bad entry never loses the rest. |  |


```http request
GET https://api.revenexx.com/v1/pages/templates
```

** Every column of a template is an exact-match filter here: `?page_bundle=standard&amp;field_name=content` is how a picker asks for the templates offered in one place, and `?is_default=true` is how a &quot;new page&quot; flow finds the one to start from. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| limit | integer | Page size (default 50, max 200). |  |
| offset | integer | Row offset for pagination (default 0). |  |
| order | string | Sort by one column: 'column' | 'column.asc' | 'column.desc'. A bare column sorts ascending. A column this entity does not have, or any other shape, is refused with 400. |  |
| id | string | Exact template id. |  |
| label | string | Exact label. An equality, not a search — there is no substring search on this route. |  |
| description | string | Exact description text. An equality, so it is the round-trip of the value a picker already showed, not a search. |  |
| page_bundle | string | Exact page type the template is offered on. A template offered everywhere has no page_bundle and is not returned by this filter. |  |
| field_name | string | Exact field the template is offered in. |  |
| is_default | boolean | Whether the template is the starting point for new pages of its bundle. |  |
| created_by | string | Exact user id of whoever saved the template. |  |
| created_at | string | Exact creation timestamp, RFC 3339. Equality only — there is no range operator here, so walk the list with `order` instead. |  |
| updated_at | string | Exact last-change timestamp, RFC 3339. Equality only. |  |


```http request
DELETE https://api.revenexx.com/v1/pages/templates/{id}
```

** Removes the template row outright. This is the one delete in the app that is not a tombstone — `templates` carries no `deleted_at` — so it cannot be undone and the id will not come back. Nothing else breaks by it: pages built from the template hold their own copy of the blocks and never referenced the row. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The template id. |  |


```http request
GET https://api.revenexx.com/v1/pages/templates/{id}
```

** The blocks a page would START from if an editor picked this template — read it to preview the insert. A template is a COPY source, the opposite of a library item: nothing links back from the pages already built from it, so this tells you what future pages get and nothing about existing ones. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The template id. |  |


```http request
PUT https://api.revenexx.com/v1/pages/templates/{id}
```

** Edits what a future page will start from. Because templates copy rather than share, this reaches nothing that already exists — pages built from it keep the blocks they were handed, which is exactly the property that makes a template safe to edit and a library item dangerous. `is_default` is the one field with an effect past the picker: it decides what a new page of `page_bundle` starts with, and nothing here stops two templates of the same bundle from both claiming it, so which one wins is left to whoever reads the list. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The template id. |  |
| description | string | A sentence about when to reach for it, shown next to the label. |  |
| field_name | string | The field this template is offered in. Null offers it in every field. |  |
| is_default | boolean | Whether a new page of this bundle starts from this template. |  |
| label | string | What the template is called in the picker. |  |
| page_bundle | string | The page type this template is offered on. Null offers it on every page type. |  |
| tree | array | The blocks the template inserts, in order. Replaces the stored tree completely. |  |


```http request
GET https://api.revenexx.com/v1/pages/vocabularies
```

** Discovery for the vocabulary routes: the enums this app publishes, each with its name, its title and what it is for, and none of them unpacked — the permitted values are not on this route, only on the one that serves a single vocabulary. Names: edit-state-statuses, page-statuses, translation-statuses. Fetch one with GET /pages/vocabularies/{name}; a client holding the qualified pair &#039;pages.&lt;name&gt;&#039; builds that URL from the pair alone. **


```http request
GET https://api.revenexx.com/v1/pages/vocabularies/{name}
```

** One vocabulary unpacked: every value the column permits, each with the title to show for it, the sentence explaining it and the badge tone to render it in — everything a select or a status pill needs, so nothing downstream keeps its own copy of the labels. The values are read out of the column&#039;s CHECK constraint, so the served set IS the enforced set and the two cannot drift — a value added to the constraint appears here even before anyone labels it, titled from its own key. Values come back in constraint order, which is the order a select should offer. &#039;closed&#039; says the set is exhaustive, so a value outside it is stale data rather than a missing label. Names: edit-state-statuses, page-statuses, translation-statuses. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| name | string | **Required** The vocabulary name — the part after the dot in the qualified id. |  |

