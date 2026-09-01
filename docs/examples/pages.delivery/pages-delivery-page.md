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

$result = $pagesDelivery->pagesDeliveryPage(
    slug: 'about-us', // optional
    id: '', // optional
    langcode: 'de' // optional
);```
