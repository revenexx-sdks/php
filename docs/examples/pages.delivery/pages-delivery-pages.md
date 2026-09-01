```php
<?php

use Revenexx\Client;
use Revenexx\Services\PagesDelivery;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$pagesDelivery = new PagesDelivery($client);

$result = $pagesDelivery->pagesDeliveryPages(
    limit: 1, // optional
    offset: 1, // optional
    order: 'created_at.desc', // optional
    bundle: 'standard' // optional
);```
