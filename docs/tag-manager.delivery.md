# TagManagerDelivery Service


```http request
GET https://api.revenexx.com/v1/tag-manager/delivery/container
```

** The latest published container for the requested market (its own, else the one for every market), with active marketing tags only and the market's tag settings. Answers an empty container when nothing is published. Gateway-cached per tenant and market; a publish invalidates it. **


```http request
GET https://api.revenexx.com/v1/tag-manager/delivery/preview/{token}
```

** The unpublished draft, built now, for a valid preview token. Never cached. An unknown and an expired token are answered alike, with 404. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| token | string | **Required** The preview token. |  |

