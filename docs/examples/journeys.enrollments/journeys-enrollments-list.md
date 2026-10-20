```php
<?php

use Revenexx\Client;
use Revenexx\Services\JourneysEnrollments;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$journeysEnrollments = new JourneysEnrollments($client);

$result = $journeysEnrollments->journeysEnrollmentsList(
    limit: 50, // optional
    offset: 0, // optional
    order: 'created_at.desc', // optional
    id: '', // optional
    journeyId: '', // optional
    version: '', // optional
    journeyVersionId: '', // optional
    contactId: '', // optional
    organizationId: '', // optional
    email: '', // optional
    phone: '', // optional
    locale: '', // optional
    market: '', // optional
    currentStep: '', // optional
    state: '', // optional
    exitReason: '', // optional
    triggerEventId: '' // optional
);```
