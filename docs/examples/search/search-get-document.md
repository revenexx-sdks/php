```php
<?php

use Revenexx\Client;
use Revenexx\Services\Search;
use Revenexx\Enums\Collection as CollectionEnum;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$search = new Search($client);

$result = $search->searchGetDocument(
    collection: CollectionEnum::PRODUCTS(),
    documentId: ''
);```
