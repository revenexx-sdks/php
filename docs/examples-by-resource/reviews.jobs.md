# reviews.jobs

## reviews-jobs-maintain

Run the hourly reviews job by hand

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ReviewsJobs;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$reviewsJobs = new ReviewsJobs($client);

$result = $reviewsJobs->reviewsJobsMaintain(
    data: []
);```
