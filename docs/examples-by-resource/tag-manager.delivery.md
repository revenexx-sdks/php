# tag-manager.delivery

## tag-manager-delivery-container

Read the storefront's published container

```php
<?php

use Revenexx\Client;
use Revenexx\Services\TagManagerDelivery;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$tagManagerDelivery = new TagManagerDelivery($client);

$result = $tagManagerDelivery->tagManagerDeliveryContainer();
```

## tag-manager-delivery-preview

Read the draft container by preview token

```php
<?php

use Revenexx\Client;
use Revenexx\Services\TagManagerDelivery;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$tagManagerDelivery = new TagManagerDelivery($client);

$result = $tagManagerDelivery->tagManagerDeliveryPreview(
    token: ''
);```
