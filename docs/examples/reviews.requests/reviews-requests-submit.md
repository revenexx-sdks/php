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

$result = $reviewsRequests->reviewsRequestsSubmit(
    token: '',
    locale: '', // optional
    reviews: [] // optional
);```
