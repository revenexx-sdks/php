# consent-manager.delivery

## consent-manager-delivery-policy

Read the published policy for this market (storefront)

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ConsentManagerDelivery;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$consentManagerDelivery = new ConsentManagerDelivery($client);

$result = $consentManagerDelivery->consentManagerDeliveryPolicy();
```

## consent-manager-delivery-preview

Read a draft preview by token

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ConsentManagerDelivery;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$consentManagerDelivery = new ConsentManagerDelivery($client);

$result = $consentManagerDelivery->consentManagerDeliveryPreview(
    token: ''
);```
