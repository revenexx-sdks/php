# QuotesQuotes Service


```http request
GET https://api.revenexx.com/v1/quotes/quotes
```

** The quote list — a merchant's work queue and a buyer's history, depending on who is asking. Filter `?status=quoted` for what is waiting on the customer, `?status=requested` for what nobody has picked up yet, and `?owner_id=` for one salesperson's desk; `status` takes several values separated by commas. A call the gateway attributes to a buyer is narrowed to that buyer's organisation whatever it asks for. Newest first unless `order` says otherwise. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| limit | integer | Page size (default 50, max 200). A larger value is clamped rather than refused. |  |
| offset | integer | Row offset for pagination (default 0). Page with `page.total` and `page.hasMore`. |  |
| order | string | Sort by one column: 'column' | 'column.asc' | 'column.desc'. The column has to be one this entity has. |  |
| status | string | One status, or several separated by commas: `quoted,partially_accepted`. |  |
| origin | string | Which door the quote came through. |  |
| organization_id | string | One company's quotes — how a storefront lists a buyer's history. |  |
| contact_id | string | One person's quotes. |  |
| owner_id | string | One salesperson's desk. |  |
| cart_id | string | The quote a cart became. |  |
| number | string | A quote by its number. |  |
| external_id | string | The quote the system that owns it knows by this key — what a mirror asks before it decides whether to create a second. The other three provenance columns carry no parameter: such a value is compared as a whole document, so a filter over part of one is refused rather than answered. |  |


```http request
POST https://api.revenexx.com/v1/quotes/quotes
```

** Sales opens a quote for a customer who never sent a cart — the normal case when a salesperson quotes over the phone. It starts on the desk rather than in the queue, because the person opening it IS the desk. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| billing_address | object | Where an invoice would go. |  |
| buyer | object | Name and address of the customer. |  |
| contact_id | string | Who the quote is for. |  |
| currency | string | ISO 4217 code every amount is read in. |  |
| external_id | string | The key this quote has in the system that owns it. Left out on anything this shop raised itself. |  |
| external_refs | object | Every other system that knows this quote, keyed by system name. |  |
| items | array | The positions. At least one. |  |
| metadata | object | Free-form data carried with the quote. |  |
| organization_id | string | Which company. |  |
| owner_id | string | Who at the merchant owns it. Taken from the caller identity when left out. |  |
| reason | string | What the quote is about. |  |
| seller_note | string | What the merchant wants the customer to read. |  |
| shipping_address | object | Where the goods would go. |  |
| source_data | object | What the source said, kept as it said it: `{"system": …, "etag": …, "raw": {…}}`. The `etag` is what a write-back has to hand back in `If-Match`. |  |
| source_synced_at | string | When this quote was last confirmed against its source. |  |


```http request
GET https://api.revenexx.com/v1/quotes/quotes/{id}
```

** The quote record without its positions. For everything at once — positions, trail and attachments — read the detail. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The quote. |  |


```http request
GET https://api.revenexx.com/v1/quotes/quotes/{id}/detail
```

** The whole quote in one call: the record, its positions in order, the trail of every move and note, and the attachments. This is what a record page and a storefront both read. A buyer — or any caller asking with `audience=customer` — reads only the entries and files meant for the customer; the merchant's internal notes stay on the merchant's side. Another organisation's quote does not exist for a buyer. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The quote. |  |
| audience | string | Read the quote as its customer sees it: internal notes and files left out. |  |


```http request
GET https://api.revenexx.com/v1/quotes/quotes/{id}/items
```

** The positions alone, in position order. Unpaged — a quote carries what it carries. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The quote. |  |


```http request
POST https://api.revenexx.com/v1/quotes/request
```

** A buyer sends a basket in and asks for a price. The positions are COPIED onto the quote rather than referenced, so the buyer can keep shopping and the quote does not change under the merchant's desk. Commits the buyer to nothing: the answer is a numbered request waiting for a price. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| billing_address | object | Where an invoice would go. |  |
| buyer | object | Name and address of who is asking. |  |
| buyer_note | string | What the buyer wants to say about the request. |  |
| cart_id | string | The cart this came from, for the trail back. |  |
| contact_id | string | Who is asking. Taken from the caller identity when left out. |  |
| currency | string | ISO 4217 code every amount is read in. |  |
| external_id | string | The key this quote has in the system that owns it. Left out on anything this shop raised itself. |  |
| external_refs | object | Every other system that knows this quote, keyed by system name. |  |
| items | array | The positions asked about. At least one. |  |
| metadata | object | Free-form data carried with the quote. |  |
| organization_id | string | Which company they buy for. |  |
| reason | string | Why a quote is being asked for — too heavy to ship, price on request, a volume the list does not cover. |  |
| shipping_address | object | Where the goods would go. |  |
| source_data | object | What the source said, kept as it said it: `{"system": …, "etag": …, "raw": {…}}`. The `etag` is what a write-back has to hand back in `If-Match`. |  |
| source_synced_at | string | When this quote was last confirmed against its source. |  |


```http request
GET https://api.revenexx.com/v1/quotes/vocabularies
```

** The values this app accepts, so a client renders a picker instead of guessing: the statuses a quote can stand in, what a position's decision can be, and why a price is what it is. **

