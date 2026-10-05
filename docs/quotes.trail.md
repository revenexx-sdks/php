# QuotesTrail Service


```http request
POST https://api.revenexx.com/v1/quotes/quotes/{id}/attachments
```

** Records a drawing, a datasheet or a signed document against the quote. This app stores the reference and serves no bytes — the file itself lives in whatever storage the tenant uses. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The quote. |  |
| byte_size | integer | How large it is, in bytes. |  |
| content_type | string | The media type. |  |
| direction | string | Who put it there. |  |
| file_ref | string | Where the file lives. |  |
| filename | string | What to call it. |  |
| metadata | object | Free-form data carried with the file — what a document management system needs to find it again. |  |
| visibility | string | Who sees it. |  |


```http request
POST https://api.revenexx.com/v1/quotes/quotes/{id}/events
```

** Adds an entry to the trail. `internal` is the merchant's own note and the customer never sees it; `customer` is what appears on the quote the buyer reads. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The quote. |  |
| actor | string | Which side wrote it. |  |
| body | string | What to write. |  |
| visibility | string | Who sees it. Internal when left out. |  |

