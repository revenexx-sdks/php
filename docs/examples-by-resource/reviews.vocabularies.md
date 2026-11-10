# reviews.vocabularies

## reviews-vocabularies-list

List the closed vocabularies this app enforces

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ReviewsVocabularies;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$reviewsVocabularies = new ReviewsVocabularies($client);

$result = $reviewsVocabularies->reviewsVocabulariesList();
```

## reviews-vocabularies-get

Read one vocabulary with its values and labels

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ReviewsVocabularies;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$reviewsVocabularies = new ReviewsVocabularies($client);

$result = $reviewsVocabularies->reviewsVocabulariesGet(
    name: ''
);```
