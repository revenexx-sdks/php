# reviews.reviews

## reviews-reviews-list

List reviews

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ReviewsReviews;
use Revenexx\Enums\Trashed;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$reviewsReviews = new ReviewsReviews($client);

$result = $reviewsReviews->reviewsReviewsList(
    limit: 50, // optional
    offset: 0, // optional
    order: 'created_at.desc', // optional
    trashed: Trashed::EXCLUDE(), // optional
    id: '', // optional
    productId: '', // optional
    sku: '', // optional
    productName: '', // optional
    orderId: '', // optional
    orderNumber: '', // optional
    requestId: '', // optional
    contactId: '', // optional
    organizationId: '', // optional
    authorFirstName: '', // optional
    authorLastName: '', // optional
    rating: '', // optional
    title: '', // optional
    body: '', // optional
    locale: '', // optional
    market: '', // optional
    verifiedPurchase: '', // optional
    source: '', // optional
    state: '', // optional
    rejectionReason: '', // optional
    moderatedBy: '', // optional
    merchantReply: '', // optional
    repliedBy: '', // optional
    externalId: '' // optional
);```

## reviews-reviews-create

Record a review by hand or from an import

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ReviewsReviews;
use Revenexx\Enums\ReviewsReviewsCreateSource;
use Revenexx\Enums\ReviewsReviewsCreateState;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$reviewsReviews = new ReviewsReviews($client);

$result = $reviewsReviews->reviewsReviewsCreate(
    productId: '',
    rating: 1,
    authorFirstName: '', // optional
    authorLastName: '', // optional
    body: '', // optional
    contactId: '', // optional
    externalId: '', // optional
    externalRefs: [], // optional
    locale: '', // optional
    market: '', // optional
    orderId: '', // optional
    productName: '', // optional
    publishedAt: '2026-01-01T12:00:00Z', // optional
    sku: '', // optional
    source: ReviewsReviewsCreateSource::ADMIN(), // optional
    sourceData: [], // optional
    sourceSyncedAt: '2026-01-01T12:00:00Z', // optional
    state: ReviewsReviewsCreateState::PENDING(), // optional
    title: '' // optional
);```

## reviews-reviews-empty-trash

Empty the review trash, deleting each one for good

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ReviewsReviews;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$reviewsReviews = new ReviewsReviews($client);

$result = $reviewsReviews->reviewsReviewsEmptyTrash();
```

## reviews-reviews-purge

Delete the reviews that outlived the trash retention

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ReviewsReviews;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$reviewsReviews = new ReviewsReviews($client);

$result = $reviewsReviews->reviewsReviewsPurge();
```

## reviews-reviews-delete

Move a review to the trash, or delete it for good from there

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ReviewsReviews;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$reviewsReviews = new ReviewsReviews($client);

$result = $reviewsReviews->reviewsReviewsDelete(
    id: ''
);```

## reviews-reviews-get

Read one review

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ReviewsReviews;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$reviewsReviews = new ReviewsReviews($client);

$result = $reviewsReviews->reviewsReviewsGet(
    id: ''
);```

## reviews-reviews-restore

Bring a review back out of the trash

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ReviewsReviews;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$reviewsReviews = new ReviewsReviews($client);

$result = $reviewsReviews->reviewsReviewsRestore(
    id: ''
);```
