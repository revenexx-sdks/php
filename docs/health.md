# Health Service


```http request
GET https://api.revenexx.com/health/live
```

** Answers as long as the process is running. Never touches a dependency, so it stays 200 while the gateway is degraded — use readiness to decide whether to send traffic. **


```http request
GET https://api.revenexx.com/health/ready
```

** Answers 200 once the gateway&#039;s registry source is reachable, 503 until then. **

