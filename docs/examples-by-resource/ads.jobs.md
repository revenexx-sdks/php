# ads.jobs

## ads-jobs-run

Run the hourly ads job by hand

```php
<?php

use Revenexx\Client;
use Revenexx\Services\AdsJobs;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$adsJobs = new AdsJobs($client);

$result = $adsJobs->adsJobsRun(
    data: []
);```
