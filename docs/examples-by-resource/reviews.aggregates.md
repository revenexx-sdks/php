# reviews.aggregates

## reviews-aggregates-list

Read the review figures of many products

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ReviewsAggregates;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$reviewsAggregates = new ReviewsAggregates($client);

$result = $reviewsAggregates->reviewsAggregatesList(
    productIds: '', // optional
    market: '', // optional
    productId: '', // optional
    limit: 50, // optional
    offset: 0, // optional
    order: 'created_at.desc' // optional
);```

## reviews-aggregates-rebuild

Recompute review figures from the published reviews

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ReviewsAggregates;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$reviewsAggregates = new ReviewsAggregates($client);

$result = $reviewsAggregates->reviewsAggregatesRebuild(
    productIds: [] // optional
);```

## reviews-aggregates-review-stars

Read how the review's product is rated, as bar rows

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ReviewsAggregates;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$reviewsAggregates = new ReviewsAggregates($client);

$result = $reviewsAggregates->reviewsAggregatesReviewStars(
    id: ''
);```
