# Audit Service


```http request
GET https://api.revenexx.com/v1/audit/settings
```

** Read-only. The values are the tenant's settings in Console; they are changed there, not here. `defaults` is true while Console holds none for the tenant (two years of history, 90 days of trash). An app's trash purge reads `trash_retention_days` here. **

