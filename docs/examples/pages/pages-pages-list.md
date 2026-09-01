```php
<?php

use Revenexx\Client;
use Revenexx\Services\Pages;
use Revenexx\Enums\PageStatus;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$pages = new Pages($client);

$result = $pages->pagesPagesList(
    limit: 1, // optional
    offset: 1, // optional
    order: 'created_at.desc', // optional
    bundle: 'standard', // optional
    status: PageStatus::DRAFT(), // optional
    q: 'contact' // optional
);```
