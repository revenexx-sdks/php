```php
<?php

use Revenexx\Client;
use Revenexx\Services\ProductsCategories;
use Revenexx\Enums\ProductCategoriesSource;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$productsCategories = new ProductsCategories($client);

$result = $productsCategories->productsProductCategoriesUpdate(
    id: '',
    categoryId: '', // optional
    position: 1, // optional
    productId: '', // optional
    source: ProductCategoriesSource::MANUAL() // optional
);```
