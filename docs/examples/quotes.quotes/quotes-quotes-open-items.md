```php
<?php

use Revenexx\Client;
use Revenexx\Services\QuotesQuotes;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$quotesQuotes = new QuotesQuotes($client);

$result = $quotesQuotes->quotesQuotesOpenItems(
    productId: '',
    status: 'requested,in_review,quoted,partially_accepted', // optional
    limit: 50, // optional
    offset: 0 // optional
);```
