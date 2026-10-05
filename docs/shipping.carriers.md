# ShippingCarriers Service


```http request
GET https://api.revenexx.com/v1/shipping/carriers
```

** Filterable by exact column value — `?code=`, `?status=` and `?service_level=` are applied as equalities and echoed back in `filter`. A query key that names no column of this entity is SILENTLY IGNORED: the page comes back unfiltered, 200, with an empty `filter`, so compare the echo against what you sent rather than trusting the status. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| limit | integer | Page size (default 50, max 200). A value outside the range is clamped rather than refused, and `page.limit` echoes what was applied. |  |
| offset | integer | Row offset for pagination (default 0). The next page is `page.offset + page.returned`. |  |
| order | string | Sort as 'column.asc' | 'column.desc' — a bare 'column' sorts ascending. The column must be one this entity has; anything else is a 400 from the data plane. |  |
| code | string | Exact-match filter on `code`. Unique per tenant, so this resolves a code an order shipment already stores without paging the whole list. |  |
| status | string | Exact-match filter on `status`. Quoting state — the cheap way to list only the carriers that may currently be quoted. |  |
| service_level | string | Exact-match filter on `service_level`. A code into the tenant's own service levels (GET /shipping/service-levels). |  |
| external_id | string | Exact-match filter on `external_id`. The carrier one foreign system owns, by the key that system knows it by — how an import finds the row it wrote last run instead of creating a second one. Unique per tenant, so this answers at most one carrier; a carrier nobody imported matches nothing. |  |


```http request
POST https://api.revenexx.com/v1/shipping/carriers
```

** A carrier row is one company shipping one class of service: it owns the tracking-URL template, the service level, the transit days, the pickup cut-off and the handling days, and every method that ships with it inherits all of those unless it states its own. A carrier selling both a parcel and an express product is two rows. Reach for it for a carrier this app does not describe — a regional courier, a forwarder, an own fleet; for the DACH networks read GET /shipping/carriers/catalog and let POST /shipping/carriers/defaults write them. A create cannot omit `code` and `name`; every other column is optional or defaulted by the database. Two rows of this tenant may not share `code` or `external_id` — that is the 409. `service_level` has to name one of the tenant's own levels and `cutoff_time` has to be HH:MM in 24-hour UTC — both are refused rather than stored, because a cut-off the estimator cannot read would be dropped in silence and the shop would keep promising a ship date nobody computed. Creating a carrier quotes nothing on its own: a method has to reference it (`carrier_id`, or a `carrier` text equal to this code) before any of it is inherited. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| code | string | Stable carrier code, unique per tenant (e.g. dhl, dpd, gls), in lower case. A method whose `carrier` text equals this code resolves to this carrier — that is the migration path off the free-text field — and a tracking request finds it by code without regard to case. A code with a capital letter is refused with 400 `invalid_carrier_code`; a carrier stored with one before 1.0 keeps it and keeps resolving. |  |
| countries | array | The countries this carrier serves. ISO 3166-1 alpha-2 codes; null or an empty array means no restriction. Compared without regard to case, so a lower-case entry still matches; anything but a two-letter code is refused with 400 `invalid_countries`. Declared as an array rather than the bare object a jsonb column derives to — this one is always a list. ANDed with the method's own restriction: a method may not be offered into a country its carrier does not reach. |  |
| cutoff_time | string | This carrier's own daily pickup cut-off, HH:MM in 24-hour form, UTC. Overrides the tenant's cutoff_time for methods on this carrier — one shop-wide time cannot be both DHL's 16:00 and a forwarder's 12:00. Null or the empty string means this carrier declares none; any other shape is a 400, because a cut-off the estimator cannot read is a delivery promise silently computed without one. |  |
| eta_days_max | integer | Transit time upper bound, in calendar days from the ship date. |  |
| eta_days_min | integer | Transit time lower bound, in calendar days from the ship date — inherited by any method on this carrier that states no ETA of its own. |  |
| external_id | string | The key this carrier has in the system that OWNS it — the shipping agent as an ERP numbers it, which is rarely the `code` a merchant types here. Unique per tenant where it is set, so a repeated import upserts on it instead of matching on a name; a carrier created in the Cockpit carries none and never will. |  |
| external_refs | object | Every OTHER system that knows this carrier, keyed by system name — a second ERP, a TMS, the label printer's own agent list. `external_id` names the leading system; this is the rest, and the next one costs no column. Answered on read and carrying no query parameter: a jsonb column is compared as a WHOLE document, so a filter over part of one is refused. Look the row up by `external_id` and read this off the answer. |  |
| handling_days | integer | Days needed to make a consignment ready for THIS carrier, added to the ship date before the transit days — a whole number, 0 or more. Overrides the tenant's handling_days. |  |
| labels | object | Localized display names. A flat map keyed by locale — the Cockpit falls back to `en`. Null means the row has no translations and every client shows the untranslated column instead. |  |
| metadata | object | Free-form jsonb the platform never reads or validates — whatever the merchant or their integration needs to keep beside the row (a customer number with the carrier, an ERP key, a label-printer id). The shape varies BY INTEGRATION, not by anything this app knows, so no key is declared and none is reserved; the example is one plausible instance rather than a schema. A flat map of scalars is the convention, and nothing enforces it. |  |
| name | string | Display name, as an operator typed it. |  |
| position | integer | Sort order among the carriers; ties fall back to whatever the database returns. |  |
| service_level | string | The class of service this row represents (default 'standard'), as a CODE into the tenant's own service levels (GET /shipping/service-levels). One row is one class: a carrier selling both a parcel and an express product is two rows. Deliberately not an enum here — the set is the merchant's, so a fixed list in this contract would make the gateway reject a level they created. A code the tenant does not keep is a 400 naming the codes they do. |  |
| source_data | object | What the source said about this row, kept as it said it: `{"system": …, "etag": …, "raw": {…}}`. The `etag` is what a write-back has to send back in `If-Match`, and there is nowhere else to keep it between two runs. `raw` holds the source fields this app does not model, so an edit here does not silently throw them away. |  |
| source_synced_at | string | When this row was last confirmed against its source. A delta run asks the source for what changed since it, and an operator reads it to see that a feed has gone quiet. An edit made HERE does not touch it — it records when the source was last seen, not when the row changed — so a stale value beside a fresh `updated_at` means somebody is maintaining by hand what a feed has stopped delivering. |  |
| status | string | Whether this carrier may be quoted (default 'active'). Anything else excludes every method that ships with it from POST /shipping/rates, with a reason. Tracking links are NOT gated on it — a retired carrier's old shipments stay resolvable. |  |
| tracking_url_template | string | Tracking page URL with {tracking_code} where the number goes; {postal_code} and {country} are also substituted, URL-encoded. Null for a carrier with no public tracking page. |  |


```http request
GET https://api.revenexx.com/v1/shipping/carriers/catalog
```

** The DACH set — the three German parcel networks, the express carriers, the AT/CH incumbents and the pallet forwarders — each with the tracking template, service level, transit time and pickup cut-off it would be created with. `seeded` marks the four a fresh install already has. Adding a carrier is a data change, never a code change, and a merchant may of course create one that is not in here at all. **


```http request
POST https://api.revenexx.com/v1/shipping/carriers/defaults
```

** The four networks a DACH shop is expected to have — DHL, DPD, GLS and UPS — created by code, and only the ones that are missing. The app runs this itself on `app.installed`, so a fresh install already has them; calling it by hand afterwards is how a tenant that predates a catalog entry catches up, and calling it twice costs nothing, because it reconciles rather than seeds. An existing row belongs to the merchant: only columns that are genuinely EMPTY are filled in (a tracking template added to the catalog after their install), never a value they set. Nothing is deleted. **


```http request
DELETE https://api.revenexx.com/v1/shipping/carriers/{id}
```

** Deleting one clears `shipping_methods.carrier_id` rather than deleting those rows — the foreign keys decide that, not this route. So a method that referenced this carrier keeps working and resolves through its `carrier` code instead, which is also why this never answers a conflict — and it is the reason to prefer `status: 'retired'` where the carrier is merely finished. What the method silently LOSES is everything it was inheriting: the tracking template, the pickup cut-off, the handling days and the transit days. Unless its `carrier` text still matches another carrier, its ship date is recomputed on the market's own cut-off and handling settings, and a method that stated no `eta_days_min`/`max` of its own stops carrying a `delivery` estimate altogether. Nothing errors; the promise in the checkout just changes. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id. |  |


```http request
GET https://api.revenexx.com/v1/shipping/carriers/{id}
```

** A carrier row is one company shipping one class of service: it owns the tracking-URL template, the service level, the transit days, the pickup cut-off and the handling days, and every method that ships with it inherits all of those unless it states its own. A carrier selling both a parcel and an express product is two rows. Read it when you need to know what a method's delivery promise really is: `cutoff_time`, `handling_days` and `eta_days_min`/`max` are inherited from here, so a shop that seems to promise the wrong ship date is usually explained by this row rather than by the method. It does NOT say which methods ship with it — that is GET /shipping/methods?carrier_id=… for the ones holding a reference and ?carrier=… for the ones still resolving through the legacy code text. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id. |  |


```http request
PUT https://api.revenexx.com/v1/shipping/carriers/{id}
```

** A carrier row is one company shipping one class of service: it owns the tracking-URL template, the service level, the transit days, the pickup cut-off and the handling days, and every method that ships with it inherits all of those unless it states its own. A carrier selling both a parcel and an express product is two rows. A partial update — send only what changes, which is where a carrier is paused, given a different tracking template, or moved to another pickup cut-off or transit time. This is the one switch that acts on several methods at once, in both directions. Moving `status` off 'active' takes every method that ships with this carrier out of POST /shipping/rates with a reason, which beats disabling each of them and forgetting one; tracking links are deliberately not gated on it, so a retired carrier's old shipments stay resolvable. Editing `cutoff_time`, `handling_days` or `eta_days_min`/`max` MOVES THE PROMISED SHIP DATE of every method that states none of its own: the estimator adds the handling days, then one further day when the cut-off has already passed at the instant being evaluated — compared at or after, in UTC, and as calendar days that do not skip a weekend. Two rows of this tenant may not share `code` or `external_id` — that is the 409. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id. |  |
| code | string | Stable carrier code, unique per tenant (e.g. dhl, dpd, gls), in lower case. A method whose `carrier` text equals this code resolves to this carrier — that is the migration path off the free-text field — and a tracking request finds it by code without regard to case. A code with a capital letter is refused with 400 `invalid_carrier_code`; a carrier stored with one before 1.0 keeps it and keeps resolving. |  |
| countries | array | The countries this carrier serves. ISO 3166-1 alpha-2 codes; null or an empty array means no restriction. Compared without regard to case, so a lower-case entry still matches; anything but a two-letter code is refused with 400 `invalid_countries`. Declared as an array rather than the bare object a jsonb column derives to — this one is always a list. ANDed with the method's own restriction: a method may not be offered into a country its carrier does not reach. |  |
| cutoff_time | string | This carrier's own daily pickup cut-off, HH:MM in 24-hour form, UTC. Overrides the tenant's cutoff_time for methods on this carrier — one shop-wide time cannot be both DHL's 16:00 and a forwarder's 12:00. Null or the empty string means this carrier declares none; any other shape is a 400, because a cut-off the estimator cannot read is a delivery promise silently computed without one. |  |
| eta_days_max | integer | Transit time upper bound, in calendar days from the ship date. |  |
| eta_days_min | integer | Transit time lower bound, in calendar days from the ship date — inherited by any method on this carrier that states no ETA of its own. |  |
| external_id | string | The key this carrier has in the system that OWNS it — the shipping agent as an ERP numbers it, which is rarely the `code` a merchant types here. Unique per tenant where it is set, so a repeated import upserts on it instead of matching on a name; a carrier created in the Cockpit carries none and never will. |  |
| external_refs | object | Every OTHER system that knows this carrier, keyed by system name — a second ERP, a TMS, the label printer's own agent list. `external_id` names the leading system; this is the rest, and the next one costs no column. Answered on read and carrying no query parameter: a jsonb column is compared as a WHOLE document, so a filter over part of one is refused. Look the row up by `external_id` and read this off the answer. |  |
| handling_days | integer | Days needed to make a consignment ready for THIS carrier, added to the ship date before the transit days — a whole number, 0 or more. Overrides the tenant's handling_days. |  |
| labels | object | Localized display names. A flat map keyed by locale — the Cockpit falls back to `en`. Null means the row has no translations and every client shows the untranslated column instead. |  |
| metadata | object | Free-form jsonb the platform never reads or validates — whatever the merchant or their integration needs to keep beside the row (a customer number with the carrier, an ERP key, a label-printer id). The shape varies BY INTEGRATION, not by anything this app knows, so no key is declared and none is reserved; the example is one plausible instance rather than a schema. A flat map of scalars is the convention, and nothing enforces it. |  |
| name | string | Display name, as an operator typed it. |  |
| position | integer | Sort order among the carriers; ties fall back to whatever the database returns. |  |
| service_level | string | The class of service this row represents (default 'standard'), as a CODE into the tenant's own service levels (GET /shipping/service-levels). One row is one class: a carrier selling both a parcel and an express product is two rows. Deliberately not an enum here — the set is the merchant's, so a fixed list in this contract would make the gateway reject a level they created. A code the tenant does not keep is a 400 naming the codes they do. |  |
| source_data | object | What the source said about this row, kept as it said it: `{"system": …, "etag": …, "raw": {…}}`. The `etag` is what a write-back has to send back in `If-Match`, and there is nowhere else to keep it between two runs. `raw` holds the source fields this app does not model, so an edit here does not silently throw them away. |  |
| source_synced_at | string | When this row was last confirmed against its source. A delta run asks the source for what changed since it, and an operator reads it to see that a feed has gone quiet. An edit made HERE does not touch it — it records when the source was last seen, not when the row changed — so a stale value beside a fresh `updated_at` means somebody is maintaining by hand what a feed has stopped delivering. |  |
| status | string | Whether this carrier may be quoted (default 'active'). Anything else excludes every method that ships with it from POST /shipping/rates, with a reason. Tracking links are NOT gated on it — a retired carrier's old shipments stay resolvable. |  |
| tracking_url_template | string | Tracking page URL with {tracking_code} where the number goes; {postal_code} and {country} are also substituted, URL-encoded. Null for a carrier with no public tracking page. |  |


```http request
POST https://api.revenexx.com/v1/shipping/tracking
```

** Hand in a carrier code and the tracking number printed on the label, and this answers the URL a buyer follows. The carrier owns the URL format, so nobody else has to. `order_shipments` stores a tracking_url per shipment today, which is one carrier's URL shape copied into every row — the day it changes, every historic link is wrong. Ask here instead. Tracking is NOT gated on carrier status: a retired carrier's old shipments stay resolvable. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| carrier | string | Carrier code (what an order shipment already stores) or the carrier row id — a value matching the uuid form is read as the id, anything else as a code, case-insensitively. Must name a carrier THIS tenant keeps; one that does not is a 404. |  |
| country | string | Destination ISO 3166-1 alpha-2 code — only needed by a template that names {country}. Upper-cased before substitution. |  |
| postal_code | string | Destination postcode — only needed by a template that names {postal_code}. |  |
| tracking_code | string | The carrier's tracking number. Required by every template that names {tracking_code}, which is all of them in the shipped catalog. URL-encoded before substitution, so a code with a space or a slash cannot reshape the link. |  |

