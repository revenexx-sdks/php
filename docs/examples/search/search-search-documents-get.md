```php
<?php

use Revenexx\Client;
use Revenexx\Services\Search;
use Revenexx\Enums\Collection;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$search = new Search($client);

$result = $search->searchSearchDocumentsGet(
    collection: Collection::PRODUCTS(),
    q: '', // optional
    queryBy: '', // optional
    filterBy: '', // optional
    sortBy: '', // optional
    facetBy: '', // optional
    maxFacetValues: 1, // optional
    groupBy: '', // optional
    includeFields: '', // optional
    excludeFields: '', // optional
    highlightFullFields: '', // optional
    numTypos: 1, // optional
    prefix: '', // optional
    page: 1, // optional
    perPage: 1 // optional
);```
