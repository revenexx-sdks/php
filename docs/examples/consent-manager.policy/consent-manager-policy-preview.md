```php
<?php

use Revenexx\Client;
use Revenexx\Services\ConsentManagerPolicy;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$consentManagerPolicy = new ConsentManagerPolicy($client);

$result = $consentManagerPolicy->consentManagerPolicyPreview(
    ttlHours: 72 // optional
);```
