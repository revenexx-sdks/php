# JourneysJobs Service


```http request
POST https://api.revenexx.com/v1/journeys/steps/run
```

** Executes due steps of all live journeys, oldest first, in chunks, within the budget (setting step_budget_ms). Also the five-minute schedule run-steps. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| budget_ms | integer | A shorter budget than the setting. |  |


```http request
POST https://api.revenexx.com/v1/journeys/triggers/run
```

** Date triggers that are due today, then the three-hour sweep over carts, orders, subscriptions and audience joins standing in for undelivered announcements (PE-748). Also the hourly schedule run-triggers. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| force | boolean | Run date triggers again today, before their time. |  |

