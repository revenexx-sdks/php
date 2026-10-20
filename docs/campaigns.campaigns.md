# CampaignsCampaigns Service


```http request
GET https://api.revenexx.com/v1/campaigns/campaigns
```

** Every campaign of this tenant. Filter `?effective_state=running` for what runs now, `?utm_campaign=` to resolve the campaign a tracked landing names. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| limit | integer | Page size (default 50, max 200). |  |
| offset | integer | Row offset for pagination (default 0). |  |
| order | string | Sort by one column: 'column' | 'column.asc' | 'column.desc'. |  |
| trashed | string | `exclude` (default) leaves the trash out, `only` is the trash itself, `include` lists both. |  |
| id | string | Keep only rows whose `id` equals this. |  |
| code | string | Keep only rows whose `code` equals this. |  |
| name | string | Keep only rows whose `name` equals this. |  |
| description | string | Keep only rows whose `description` equals this. |  |
| status | string | Keep only rows whose `status` equals this. |  |
| effective_state | string | Keep only rows whose `effective_state` equals this. |  |
| owner_id | string | Keep only rows whose `owner_id` equals this. |  |
| utm_campaign | string | Keep only rows whose `utm_campaign` equals this. |  |
| goal_metric | string | Keep only rows whose `goal_metric` equals this. |  |
| currency | string | Keep only rows whose `currency` equals this. |  |
| orders_count | string | Keep only rows whose `orders_count` equals this. |  |
| external_id | string | Keep only rows whose `external_id` equals this. |  |


```http request
POST https://api.revenexx.com/v1/campaigns/campaigns
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| code | string | The short identifier a marketer recognises the campaign by. Unique per tenant. |  |
| currency | string | The currency the budget and the revenue figures are stated in. |  |
| description | string | What the campaign is for, in the marketer own words. |  |
| ends_at | string | When the window closes. Empty means open-ended. Never before `starts_at`. |  |
| external_id | string | The key of this record in the system that leads it — a marketing tool, an ERP, an ad platform. Unique per tenant when set; an import matches on it. |  |
| external_refs | any | Every OTHER system that knows this record, keyed by system name. `external_id` is the leading system; this is the rest. Not a query parameter: a jsonb column is compared as a whole document. |  |
| goal_metric | string | The one figure the campaign is judged by: revenue, orders, redemptions, leads, subscriptions or clicks. |  |
| goal_value | number | The target for `goal_metric`. Needs a metric. |  |
| metadata | any | Free-form JSON a caller may keep on the row. Nothing here reads it. |  |
| name | string | What the campaign is called, e.g. Black Week 2026. |  |
| owner_id | string | Who is responsible: a sales-rep code or a platform user. |  |
| source_data | any | The source system's own view of the record as the last sync saw it, kept for reconciliation. Nothing in this app reads it. |  |
| source_synced_at | string | When a sync last wrote this record from its source system. Null for a record only ever kept here. |  |
| starts_at | string | When the campaign window opens. Empty means it runs from its release. |  |
| status | string | What the marketer set: `draft`, `active` (released), `completed` or `archived`. What the campaign is doing right now also depends on its window — read `effective_state`. |  |
| tags | any | Free labels a marketer groups campaigns by, as a list of words. |  |
| utm_campaign | string | The value a tracked link carries as utm_campaign, lower case. Unique per tenant; an order arriving with it is credited to this campaign. Filter `?utm_campaign=` to resolve a campaign from a landing. |  |


```http request
POST https://api.revenexx.com/v1/campaigns/campaigns/trash/empty
```

** Every campaign in the trash is deleted for good on its own terms. One that something still blocks stays in the trash and is named with its reason, so a partial success says exactly what remained. Not for a storefront contact. **


```http request
POST https://api.revenexx.com/v1/campaigns/campaigns/trash/purge
```

** What the nightly purge does, callable by hand: every campaign in the trash for longer than the tenant trash retention (90 days unless the tenant set another) is deleted for good through the same rules as a second delete. A blocked one stays and carries its reason. When the retention cannot be read, nothing is deleted. Also the cron schedule. **


```http request
DELETE https://api.revenexx.com/v1/campaigns/campaigns/{id}
```

** The first DELETE moves the campaign into the trash: it stays, with everything hanging off it, and counts nowhere until it is restored. A campaign with attribution facts or touches is refused (`trash_blocked`, blocker `campaign_in_use`) — archive it instead; one still holding assets is not deleted for good (`delete_blocked`, blocker `campaign_has_assets`). A DELETE on a campaign already in the trash deletes it for good — refused while something still needs it, and not for a storefront contact. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |


```http request
GET https://api.revenexx.com/v1/campaigns/campaigns/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |


```http request
PUT https://api.revenexx.com/v1/campaigns/campaigns/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |
| code | string | The short identifier a marketer recognises the campaign by. Unique per tenant. |  |
| currency | string | The currency the budget and the revenue figures are stated in. |  |
| description | string | What the campaign is for, in the marketer own words. |  |
| ends_at | string | When the window closes. Empty means open-ended. Never before `starts_at`. |  |
| external_id | string | The key of this record in the system that leads it — a marketing tool, an ERP, an ad platform. Unique per tenant when set; an import matches on it. |  |
| external_refs | any | Every OTHER system that knows this record, keyed by system name. `external_id` is the leading system; this is the rest. Not a query parameter: a jsonb column is compared as a whole document. |  |
| goal_metric | string | The one figure the campaign is judged by: revenue, orders, redemptions, leads, subscriptions or clicks. |  |
| goal_value | number | The target for `goal_metric`. Needs a metric. |  |
| metadata | any | Free-form JSON a caller may keep on the row. Nothing here reads it. |  |
| name | string | What the campaign is called, e.g. Black Week 2026. |  |
| owner_id | string | Who is responsible: a sales-rep code or a platform user. |  |
| source_data | any | The source system's own view of the record as the last sync saw it, kept for reconciliation. Nothing in this app reads it. |  |
| source_synced_at | string | When a sync last wrote this record from its source system. Null for a record only ever kept here. |  |
| starts_at | string | When the campaign window opens. Empty means it runs from its release. |  |
| status | string | What the marketer set: `draft`, `active` (released), `completed` or `archived`. What the campaign is doing right now also depends on its window — read `effective_state`. |  |
| tags | any | Free labels a marketer groups campaigns by, as a list of words. |  |
| utm_campaign | string | The value a tracked link carries as utm_campaign, lower case. Unique per tenant; an order arriving with it is credited to this campaign. Filter `?utm_campaign=` to resolve a campaign from a landing. |  |


```http request
POST https://api.revenexx.com/v1/campaigns/campaigns/{id}/attach
```

** Claims a promotion, mailing, journey or form by writing the campaign id into its own campaign_ref through the owning app, and records the asset here. Pages and ad campaigns are recorded here only. Attaching what is already attached to this campaign answers the existing row. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |
| ad_campaign_link_id | string | Shorthand for an ad campaign link of the ads app. |  |
| asset_app | string | The app that owns the asset. |  |
| asset_entity | string | The kind of record in that app. Defaults per app: promotions, mailings, journeys, forms, pages, ad_campaign_links. |  |
| asset_id | string | The asset id in its own app. |  |
| form_id | string | Shorthand for a form. |  |
| journey_id | string | Shorthand for an automation. |  |
| label | string | What to call the asset here. Defaults to its own name. |  |
| library_item_id | string | Shorthand for a page library item, such as a pop-up. |  |
| mailing_id | string | Shorthand for a marketing mail. |  |
| page_id | string | Shorthand for a page. |  |
| promotion_id | string | Shorthand for a promotion. |  |


```http request
POST https://api.revenexx.com/v1/campaigns/campaigns/{id}/detach
```

** Clears the campaign_ref on the asset, if it still names this campaign, and removes the asset row. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |
| ad_campaign_link_id | string | Shorthand for an ad campaign link of the ads app. |  |
| asset_app | string | The app that owns the asset. |  |
| asset_entity | string | The kind of record in that app. Defaults per app: promotions, mailings, journeys, forms, pages, ad_campaign_links. |  |
| asset_id | string | The asset id in its own app. |  |
| form_id | string | Shorthand for a form. |  |
| journey_id | string | Shorthand for an automation. |  |
| label | string | What to call the asset here. Defaults to its own name. |  |
| library_item_id | string | Shorthand for a page library item, such as a pop-up. |  |
| mailing_id | string | Shorthand for a marketing mail. |  |
| page_id | string | Shorthand for a page. |  |
| promotion_id | string | Shorthand for a promotion. |  |


```http request
POST https://api.revenexx.com/v1/campaigns/campaigns/{id}/links
```

** Adds utm_source (default from the settings), utm_medium, utm_campaign and optionally utm_content and utm_term to a URL, replacing UTM values it already carried. A campaign without a UTM value gets its code slug the first time. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |
| content | string | Tells two links of one campaign apart. |  |
| medium | string | The channel the link travels in, e.g. email, social, print. |  |
| source | string | Overrides the default source. |  |
| term | string | A paid search term. |  |
| url | string | The absolute http(s) address to tag. |  |


```http request
GET https://api.revenexx.com/v1/campaigns/campaigns/{id}/performance
```

** Revenue and orders under the chosen model, returns netted out; redemptions, clicks, impressions, subscriptions and leads; goal progress; budget planned and spent with return on ad spend; the same figures per attached asset. `results`, `goal_rows`, `budget_rows` and `asset_rows` carry the same figures as rows of label and value, worded and formatted in the caller language (Accept-Language; German unless English is asked for); `days` carries clicks, redemptions, sign-ups and credited orders per day. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |
| model | string | Attribution model. Defaults to the tenant setting. |  |


```http request
POST https://api.revenexx.com/v1/campaigns/campaigns/{id}/restore
```

** Clears the trash marks on the campaign. Its parts were never touched, so they come back with it, in the state it was in. The same right as deleting. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |

