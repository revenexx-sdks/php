```php
<?php

use Revenexx\Client;
use Revenexx\Services\Punchout;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$punchout = new Punchout($client);

$result = $punchout->punchoutTransferItemsCreate(
    name: '',
    quantity: 9.99,
    transferId: '',
    currency: '', // optional
    externalRef: '', // optional
    lineGross: 9.99, // optional
    lineNet: 9.99, // optional
    metadata: [], // optional
    position: 1, // optional
    productId: '', // optional
    sku: '', // optional
    taxRate: 9.99, // optional
    unit: '', // optional
    unitPrice: 9.99 // optional
);```
