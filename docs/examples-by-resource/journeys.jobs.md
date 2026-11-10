# journeys.jobs

## journeys-jobs-steps

Run the step job once

```php
<?php

use Revenexx\Client;
use Revenexx\Services\JourneysJobs;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$journeysJobs = new JourneysJobs($client);

$result = $journeysJobs->journeysJobsSteps(
    budgetMs: 1 // optional
);```

## journeys-jobs-triggers

Run date triggers and the sweep once

```php
<?php

use Revenexx\Client;
use Revenexx\Services\JourneysJobs;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$journeysJobs = new JourneysJobs($client);

$result = $journeysJobs->journeysJobsTriggers(
    force: true // optional
);```
