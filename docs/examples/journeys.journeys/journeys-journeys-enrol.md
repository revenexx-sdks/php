```php
<?php

use Revenexx\Client;
use Revenexx\Services\JourneysJourneys;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$journeysJourneys = new JourneysJourneys($client);

$result = $journeysJourneys->journeysJourneysEnrol(
    id: '',
    contactId: '', // optional
    data: [], // optional
    email: '', // optional
    key: '', // optional
    market: '' // optional
);```
