# reviews.moderation

## reviews-moderation-publish

Publish a review

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ReviewsModeration;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$reviewsModeration = new ReviewsModeration($client);

$result = $reviewsModeration->reviewsModerationPublish(
    id: '',
    data: []
);```

## reviews-moderation-reject

Reject a review, or take a published one down

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ReviewsModeration;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$reviewsModeration = new ReviewsModeration($client);

$result = $reviewsModeration->reviewsModerationReject(
    id: '',
    reason: ''
);```

## reviews-moderation-reply

Answer a review publicly, or remove the answer

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ReviewsModeration;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$reviewsModeration = new ReviewsModeration($client);

$result = $reviewsModeration->reviewsModerationReply(
    id: '',
    reply: '' // optional
);```
