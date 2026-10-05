```php
<?php

use Revenexx\Client;
use Revenexx\Services\QuotesQuotes;
use Revenexx\Enums\Audience;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$quotesQuotes = new QuotesQuotes($client);

$result = $quotesQuotes->quotesQuotesDetail(
    id: '',
    audience: Audience::CUSTOMER() // optional
);```
