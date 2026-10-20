# CustomersFollowUps Service


```http request
POST https://api.revenexx.com/v1/customers/contact_events/{id}/done
```

** A follow-up — a task, or any entry with a due date — is done: `done_at` is set and it leaves every list of open tasks. The entry stays on the timeline as it was filed. Done twice answers the entry as it is. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The timeline entry. |  |

