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

$result = $search->searchSearchDocuments(
    collection: Collection::PRODUCTS(),
    excludeFields: '', // optional
    facetBy: '', // optional
    filterBy: '', // optional
    groupBy: '', // optional
    highlightFullFields: '', // optional
    includeFields: '', // optional
    maxFacetValues: 1, // optional
    numTypos: 1, // optional
    page: 1, // optional
    perPage: 1, // optional
    prefix: '', // optional
    q: '', // optional
    queryBy: '', // optional
    sortBy: '' // optional
);```
