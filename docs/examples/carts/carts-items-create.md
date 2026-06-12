```php
<?php

use RevenexxAPIRevenexx\Client;
use RevenexxAPIRevenexx\Services\Carts;
use RevenexxAPIRevenexx\Enums\CartItemType;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$carts = new Carts($client);

$result = $carts->cartsItemsCreate(
    cartId: '',
    configuration: [], // optional
    currency: '', // optional
    metadata: [], // optional
    name: '', // optional
    position: null, // optional
    productId: '', // optional
    quantity: null, // optional
    sku: '', // optional
    snapshot: [], // optional
    taxRate: null, // optional
    type: CartItemType::PRODUCT(), // optional
    unit: '', // optional
    unitPrice: null // optional
);```
