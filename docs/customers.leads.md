# CustomersLeads Service


```http request
POST https://api.revenexx.com/v1/customers/consent-mirror/run
```

** `consent_marketing` on a contact is a mirror of the consent app (revenexx/marketing-consents): true while the person holds at least one confirmed email subscription there. This reads the email subscriptions the consent app changed in the last three hours and sets each person's flag to what the consent app answers now. The hourly schedule `mirror-marketing-consents` runs the same code, and so does each subscription event the platform delivers. A person the consent app does not answer for keeps the flag. Only a change is written. **


```http request
POST https://api.revenexx.com/v1/customers/contacts/{contact_id}/handover
```

** Names the sales rep who owns the person (`owner_id`, a rep CODE of the sales-reps app) and files a task for that rep on the person's timeline — the Cockpit's "An Vertrieb übergeben". The stage is left alone: accepting the lead is the rep's own step (sql). A code the sales-reps app does not know is refused; where that app is not installed, the code is taken as given. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| contact_id | string | **Required** The person to hand over. |  |
| actor | string | Who handed it over. |  |
| due_at | string | When the rep should have called. |  |
| note | string | What the rep should know. |  |
| owner_id | string | The rep code who takes the lead. |  |
| subject | string | The task's line. Defaults to „Lead übernehmen: <name>“. |  |


```http request
POST https://api.revenexx.com/v1/customers/contacts/{contact_id}/lifecycle
```

** Sets the PERSON's lifecycle stage (subscriber, lead, mql, sql, opportunity, customer, or a stage of the tenant's own) and announces it once as `contact.lifecycle_changed` on the person's channel. A repeat of the stage the person already holds changes nothing, announces nothing and answers `changed: false`. A person without a lead source yet takes `lead_source` / `lead_source_ref` from the body; one that has a source keeps it. The journeys step `set_lifecycle_stage`, the Cockpit's Qualifizieren action and a form listener all call this. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| contact_id | string | **Required** The person to move. |  |
| actor | string | Who moved it (operator id or email). Rides on the event. |  |
| lead_source | string | Taken only when the person has no source yet. |  |
| lead_source_ref | string | Taken with `lead_source`. |  |
| reason | string | Why, in words. Rides on the event; not stored on the contact. |  |
| stage | string | The stage to move to — a code of GET /customers/contact-lifecycle-stages. |  |

