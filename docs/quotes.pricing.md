# QuotesPricing Service


```http request
POST https://api.revenexx.com/v1/quotes/expire
```

** Moves every quote past its validity to expired. Runs on a schedule and on demand, and is idempotent — a quote already expired is not touched twice. Switching the sweep off does NOT soften the deadline: acceptance past `valid_until` is refused either way. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| data | object | Request body |  |


```http request
POST https://api.revenexx.com/v1/quotes/quotes/{id}/price
```

** The merchant's side of the desk, and THE designated override point of this app: a tenant whose prices come out of an ERP replaces this one capability at the gateway and keeps everything else. Sets a negotiated price per position, a validity, and the note the customer reads. Re-pricing a quote the buyer has already seen writes a new revision by default, so every round of a negotiation stays readable. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The quote. |  |
| external_id | string | The key this quote has in the system that owns it. Left out on anything this shop raised itself. |  |
| external_refs | object | Every other system that knows this quote, keyed by system name. |  |
| items | array | The positions to price. A position left out keeps what it has. |  |
| seller_note | string | What the customer reads with the quote. |  |
| shipping_amount | number | Carriage quoted alongside the goods, net. It enters `grand_total` and the first order out of the quote. |  |
| shipping_tax_rate | number | The rate carriage is taxed at, in percent (0–100). |  |
| source_data | object | What the source said, kept as it said it: `{"system": …, "etag": …, "raw": {…}}`. The `etag` is what a write-back has to hand back in `If-Match`. |  |
| source_synced_at | string | When this quote was last confirmed against its source. |  |
| valid_until | string | When the offer stops standing. Left out, the configured default validity is used. |  |


```http request
POST https://api.revenexx.com/v1/quotes/quotes/{id}/review
```

** Claims a request: it moves out of the unattended queue and gets an owner, which is what a sales worklist filters by. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The quote. |  |
| owner_id | string | Who takes it. The caller when left out. |  |

