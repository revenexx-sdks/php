# Events Service


```http request
GET https://api.revenexx.com/v1/events/catalog
```

** Every event type this tenant&#039;s installed apps and platform services declare — what can be published and subscribed to, independent of whether one has fired yet. Each entry says what causes it (`trigger`) and what it carries (`sample`, `data_schema`). **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| fields | string | Comma-separated keys to keep on each emit. Omit for the full entry. A consumer that reads two fields should say so: the response carries a sample and a JSON Schema per event, and asking for less is the difference between a few kB and tens. An unknown key is ignored; a list naming nothing this response has returns the full entry rather than an empty one. |  |

