```php
<?php

use Revenexx\Client;
use Revenexx\Services\QuotesPricing;
use Revenexx\Enums\PriceReason;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$quotesPricing = new QuotesPricing($client);

$result = $quotesPricing->quotesPricingItem(
    id: '',
    itemId: '',
    discountPercent: 8, // optional
    leadTimeDays: 1, // optional
    priceReason: PriceReason::VOLUME(), // optional
    quantity: 12, // optional
    quotedPrice: 980 // optional
);```
