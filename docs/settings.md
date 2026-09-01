# Settings Service


```http request
GET https://api.revenexx.com/v1/settings/apps/{app}
```

** The tenant&#039;s effective settings for the app — the declared schema&#039;s defaults merged with stored tenant/market values. Sensitive settings are masked (listed in `masked`, omitted from `settings`). **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| app | string | **Required** App name, e.g. `pages`. |  |
| market | string | Resolve market-scoped settings for this market code; falls back to the tenant value. |  |

