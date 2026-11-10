# reviews.requests

## reviews-requests-list

List issued review links, without their tokens

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

## reviews-requests-issue

Issue the review link for one completed order and its contact

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

$result = $reviewsRequests->reviewsRequestsIssue(
    contactId: '',
    orderId: '',
    journeyRef: '', // optional
    locale: '', // optional
    market: '', // optional
    productIds: [] // optional
);```

## reviews-requests-form

Read what the review form shows for a link

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

$result = $reviewsRequests->reviewsRequestsForm(
    token: ''
);```

## reviews-requests-submit

Submit reviews through a link

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
