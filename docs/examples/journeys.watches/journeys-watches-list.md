```php
<?php

use Revenexx\Client;
use Revenexx\Services\JourneysWatches;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$journeysWatches = new JourneysWatches($client);

$result = $journeysWatches->journeysWatchesList(
    limit: 50, // optional
    offset: 0, // optional
    order: 'created_at.desc', // optional
    id: '', // optional
    contactId: '', // optional
    email: '', // optional
    productId: '', // optional
    sku: '', // optional
    market: '', // optional
    state: '', // optional
    source: '' // optional
);```
