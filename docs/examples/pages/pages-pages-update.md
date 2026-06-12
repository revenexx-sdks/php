```php
<?php

use RevenexxAPIRevenexx\Client;
use RevenexxAPIRevenexx\Services\Pages;
use RevenexxAPIRevenexx\Enums\PageStatus;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$pages = new Pages($client);

$result = $pages->pagesPagesUpdate(
    id: '',
    bundle: '', // optional
    meta: [], // optional
    slug: '', // optional
    status: PageStatus::DRAFT(), // optional
    title: '' // optional
);```
