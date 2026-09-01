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

$result = $pages->pagesPagesUpdate(
    id: '',
    bundle: 'standard', // optional
    meta: [], // optional
    slug: 'about-us', // optional
    status: PageStatus::DRAFT(), // optional
    title: 'About us' // optional
);```
