```php
<?php

use Revenexx\Client;
use Revenexx\Services\TagManagerContainer;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$tagManagerContainer = new TagManagerContainer($client);

$result = $tagManagerContainer->tagManagerContainerVersionsList(
    limit: 1, // optional
    offset: 1, // optional
    order: '', // optional
    id: '', // optional
    number: 1, // optional
    market: '', // optional
    sha256: '', // optional
    policyVersionNumber: 1, // optional
    policySha256: '', // optional
    rolledBackFrom: 1, // optional
    note: '', // optional
    publishedBy: '', // optional
    publishedAt: '' // optional
);```
