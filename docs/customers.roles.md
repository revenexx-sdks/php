# CustomersRoles Service


```http request
GET https://api.revenexx.com/v1/customers/roles
```

** The whole catalogue in one read: every role a contact of this tenant can hold, the permissions each one grants, and the built-in permission vocabulary those grants are drawn from. Roles are held by a CONTACT and apply inside that contact&#039;s organization; there is no global customer role. Permissions are derived from the role at read time and never stored per contact, so a role change takes effect immediately and cannot leave a stale grant. The role to permission MAPPING is per tenant and configurable (PUT /customers/roles/{key}/permissions); a tenant that has not configured anything gets the built-ins and &#039;source&#039; says which of the two answered. Built-in roles, least to most privileged: viewer (Viewer), requester (Requester), buyer (Buyer), approver (Approver), admin (Administrator). The permission KEYS themselves come from the cross-app ledger — every installed app declares what it enforces — so a tenant may grant a key this list does not mention. **


```http request
POST https://api.revenexx.com/v1/customers/roles/defaults
```

** Idempotent: a role that already exists is left completely alone, its permissions included, so re-seeding never undoes a merchant&#039;s edits. Creates viewer, requester, buyer, approver, admin with the built-in mapping. A tenant that never calls this still behaves correctly — the catalogue and every permission read fall back to the same built-ins. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| data | object | Request body |  |


```http request
PUT https://api.revenexx.com/v1/customers/roles/{key}/permissions
```

** The whole new set in one call — the shape a role editor actually produces, and the one that cannot leave a half-applied grant behind if a second call fails. Seeds the built-in roles first when the tenant has none, so editing works without calling /defaults. Permission keys are free text on purpose: they belong to whichever app declared them, and a grant for an app that is not installed simply has nothing to act on. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| key | string | **Required** The role key — one of the tenant's own roles (GET /customers/roles). |  |
| permissions | array | The complete new set. Duplicates and blanks are ignored; an empty array revokes everything. |  |

