```php
<?php

use Revenexx\Client;
use Revenexx\Services\ReviewsRequests;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$reviewsRequests = new ReviewsRequests($client);

$result = $reviewsRequests->reviewsRequestsList(
    limit: 50, // optional
    offset: 0, // optional
    order: 'created_at.desc', // optional
    id: '', // optional
    orderId: '', // optional
    orderNumber: '', // optional
    contactId: '', // optional
    organizationId: '', // optional
    state: '', // optional
    journeyRef: '', // optional
    market: '', // optional
    locale: '', // optional
    reviewedCount: '', // optional
    issuedCount: '' // optional
);```
