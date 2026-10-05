# ConsentManagerDelivery Service


```http request
GET https://api.revenexx.com/v1/consent-manager/delivery/policy
```

** The latest version published for the market in `x-revenexx-market`, else the shop's. Cached at the gateway for the whole tenant per market and dropped on every publish. With nothing published it answers 404 `no_policy_published` with `details.reason: nothing_published`, which the storefront treats as everything denied: no banner, nothing optional loads. **


```http request
GET https://api.revenexx.com/v1/consent-manager/delivery/preview/{token}
```

** A rendered draft, shaped like the delivered policy, with `version.preview: true` and no version id. Not cached. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| token | string | **Required** The preview token. |  |

