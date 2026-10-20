```php
<?php

use Revenexx\Client;
use Revenexx\Services\JourneysTimeline;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$journeysTimeline = new JourneysTimeline($client);

$result = $journeysTimeline->journeysTimelineList(
    limit: 50, // optional
    offset: 0, // optional
    order: 'created_at.desc', // optional
    id: '', // optional
    enrollmentId: '', // optional
    journeyId: '', // optional
    version: '', // optional
    stepKey: '', // optional
    kind: '', // optional
    outcome: '', // optional
    eventKey: '' // optional
);```
