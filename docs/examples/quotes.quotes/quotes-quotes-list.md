```php
<?php

use Revenexx\Client;
use Revenexx\Services\QuotesQuotes;
use Revenexx\Enums\Origin;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$quotesQuotes = new QuotesQuotes($client);

$result = $quotesQuotes->quotesQuotesList(
    limit: 50, // optional
    offset: 0, // optional
    order: 'created_at.desc', // optional
    status: '', // optional
    origin: Origin::BUYER(), // optional
    organizationId: '', // optional
    contactId: '', // optional
    ownerId: '', // optional
    cartId: '', // optional
    number: '', // optional
    externalId: 'ANG-20481' // optional
);```
