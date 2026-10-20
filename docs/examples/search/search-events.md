```php
<?php

use Revenexx\Client;
use Revenexx\Services\Search;
use Revenexx\Enums\SearchEventsType;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$search = new Search($client);

$result = $search->searchEvents(
    collection: '',
    type: SearchEventsType::CLICK(),
    docId: '', // optional
    position: 1, // optional
    q: '', // optional
    queryId: '', // optional
    userToken: '' // optional
);```
