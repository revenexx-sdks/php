```php
<?php

use Revenexx\Client;
use Revenexx\Services\ReviewsProducts;
use Revenexx\Enums\Sort;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$reviewsProducts = new ReviewsProducts($client);

$result = $reviewsProducts->reviewsProductsGet(
    productId: '',
    market: '', // optional
    sort: Sort::NEWEST(), // optional
    limit: 1, // optional
    offset: 1 // optional
);```
