```php
<?php

use Revenexx\Client;
use Revenexx\Services\Forms;
use Revenexx\Enums\FormStatus;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$forms = new Forms($client);

$result = $forms->formsList(
    id: '', // optional
    name: 'Contact request', // optional
    slug: 'contact', // optional
    status: FormStatus::DRAFT(), // optional
    createdAt: '2026-01-31T09:15:00Z', // optional
    updatedAt: '2026-01-31T09:15:00Z', // optional
    limit: 50, // optional
    offset: 0, // optional
    order: 'created_at.desc' // optional
);```
