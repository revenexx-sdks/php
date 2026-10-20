```php
<?php

use Revenexx\Client;
use Revenexx\Services\Search;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$search = new Search($client);

$result = $search->searchQuery(
    collection: '',
    filters: [], // optional
    page: 1, // optional
    perPage: 1, // optional
    q: '', // optional
    sort: '', // optional
    view: '' // optional
);```
