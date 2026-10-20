# CustomersRoles Service


```http request
GET https://api.revenexx.com/v1/customers/permissions/ledger
```

** What the role editor offers: every permission with its words per language, its area, the app that owns it and whether the platform enforces it yet, plus the built-in set of every built-in role — what resetting a role to its default restores. **


```http request
GET https://api.revenexx.com/v1/customers/roles
```

** The whole catalogue in one read: every role a contact of this tenant can hold, the permissions each one grants, and the built-in permission vocabulary those grants are drawn from. Roles are held by a CONTACT and apply inside that contact's organization; there is no global customer role. Permissions are derived from the role at read time and never stored per contact, so a role change takes effect immediately and cannot leave a stale grant. The role to permission MAPPING is per tenant and configurable (PUT /customers/roles/{key}/permissions); a tenant that has not configured anything gets the built-ins and 'source' says which of the two answered. Built-in roles, least to most privileged: viewer (Viewer), requester (Requester), buyer (Buyer), approver (Approver), admin (Administrator). The permission KEYS themselves come from the cross-app ledger — every installed app declares what it enforces — so a tenant may grant a key this list does not mention. **


```http request
POST https://api.revenexx.com/v1/customers/roles
```

** One call for a whole new role: its name, and the permissions it grants. The key is made from the name when none is sent — 'Einkauf Zentrale' becomes `einkauf-zentrale`, German letters spelled out — and it is fixed from then on, because every contact holding the role stores it. Seeds the built-in roles first when the tenant never wrote them down, so the first role of a tenant's own leaves what every existing contact may do exactly as it was. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| active | boolean | Whether the role is offered when a contact gets one. Default true. An inactive role cannot be the default. |  |
| description | string | One line on what the role is for. |  |
| descriptions | object | The one line per locale. |  |
| is_default | boolean | Make this the role a contact created without one gets. The previous default stops being one. |  |
| key | string | Optional. Made from `title` when left out. |  |
| labels | object | The name per locale. |  |
| permissions | array | What the role grants. Duplicates and blanks are ignored; left out, it grants nothing yet. |  |
| position | integer | Optional. Defaults to after every existing role. |  |
| title | string | The name a merchant reads. |  |


```http request
POST https://api.revenexx.com/v1/customers/roles/defaults
```

** Idempotent: a role that already exists is left completely alone, its permissions included, so re-seeding never undoes a merchant's edits. Creates viewer, requester, buyer, approver, admin with the built-in mapping. A tenant that never calls this still behaves correctly — the catalogue and every permission read fall back to the same built-ins. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| data | object | Request body |  |


```http request
PUT https://api.revenexx.com/v1/customers/roles/{key}
```

** A role's words, its rank, the default flag and whether it is still offered — not its key, which every contact holding the role stores, and not its grants, which `PUT /customers/roles/{key}/permissions` replaces. A role marked inactive is no longer offered when a contact gets a role (the roles vocabulary leaves it out), while every contact that holds it keeps it and keeps its grants. Two roles stay on offer: a built-in one, which is what every tenant starts from, and the default, which is what a new contact gets. Promoting a role to the default demotes the previous one; clearing the flag on the default changes nothing. Seeds the built-in roles first when the tenant never wrote them down. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| key | string | **Required** The role key, or the role's id, which is what a record page holds. |  |
| active | boolean | False retires the role: contacts holding it keep it, it is no longer offered. Refused on a built-in role and on the default. |  |
| description | string | One line on what the role is for. |  |
| descriptions | object | The one line per locale. |  |
| is_default | boolean | Make this the role a contact created without one gets. Refused for an inactive role. |  |
| labels | object | The name per locale. |  |
| position | integer | Display order, least privileged first. Grants nothing by itself. |  |
| title | string | The name a merchant reads. |  |
| tone | string | Semantic badge colour. |  |


```http request
POST https://api.revenexx.com/v1/customers/roles/{key}/copy
```

** A new role with the permissions of `key` and a name of its own — the quick way to a role that differs from a built-in by one grant. The source may be a built-in the tenant never wrote down; the built-ins are seeded first, exactly as a create does. The copy is the tenant's own role, never a built-in, and it is not the default. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| key | string | **Required** The role to copy, by key or by id. |  |
| description | string | Optional. The source's description when left out. |  |
| key_body | string | Optional. Made from `title` when left out. |  |
| title | string | The name of the new role. |  |


```http request
PUT https://api.revenexx.com/v1/customers/roles/{key}/permissions
```

** The whole new set in one call — the shape a role editor actually produces, and the one that cannot leave a half-applied grant behind if a second call fails. Seeds the built-in roles first when the tenant never wrote them down, so editing works without calling /defaults. Permission keys are free text on purpose: they belong to whichever app declared them, and a grant for an app that is not installed simply has nothing to act on. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| key | string | **Required** The role key — one of the tenant's own roles (GET /customers/roles) — or the role's id, which is what a record page holds. |  |
| permissions | array | The complete new set. Duplicates and blanks are ignored; an empty array revokes everything. |  |

