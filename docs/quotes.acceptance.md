# QuotesAcceptance Service


```http request
POST https://api.revenexx.com/v1/quotes/quotes/{id}/accept
```

** The buyer takes the offer. Sent with no positions it takes everything still open; sent with positions it decides exactly those, which leaves the quote `partially_accepted` and open for the rest — a second acceptance later produces a SECOND order. The answer carries an `order_draft` shaped the way order management takes it, with the negotiated price as `unit_price`, covering only what THIS call accepted. Refused past `valid_until`, and refused entirely when the merchant does not allow a basket to be taken apart. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The quote. |  |
| items | array | The positions to decide. Left out, every position still open is accepted. |  |


```http request
POST https://api.revenexx.com/v1/quotes/quotes/{id}/decline
```

** The buyer refuses the offer. Every position still open is declined with it. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The quote. |  |
| reason | string | Why, in the words the merchant will read. |  |


```http request
POST https://api.revenexx.com/v1/quotes/quotes/{id}/ordered
```

** Writes back which order took which positions. This app cannot know the order id — order management mints it after the draft was handed over — so without this call the record could not answer "which order came out of this quote". **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The quote. |  |
| item_ids | array | Which positions went into it. Left out, every accepted position not yet on an order. |  |
| order_id | string | The order order management created. |  |


```http request
POST https://api.revenexx.com/v1/quotes/quotes/{id}/reject
```

** The merchant will not make an offer — not deliverable, not a customer they serve, a quantity they cannot do. The reason is required: a refusal the buyer cannot read is not a refusal. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The quote. |  |
| reason | string | Why the merchant will not quote. |  |

