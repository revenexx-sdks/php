```php
<?php

use Revenexx\Client;
use Revenexx\Services\PagesEditor;
use Revenexx\Enums\PageEditStateStatus;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$pagesEditor = new PagesEditor($client);

$result = $pagesEditor->pagesEditorEditStates(
    status: PageEditStateStatus::ACTIVE(), // optional
    limit: 1, // optional
    offset: 1 // optional
);```
