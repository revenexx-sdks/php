# LoyaltyJobs Service


```http request
POST https://api.revenexx.com/v1/loyalty/recalculate/run
```

** Credits orders of the last 48 hours, books their completed returns and cancellations, expires due points, moves agreement projections on and re-reads tiers — the same as the hourly schedule. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| data | object | Request body |  |

