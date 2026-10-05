```php
<?php

use Revenexx\Client;
use Revenexx\Services\TagManagerContainer;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$tagManagerContainer = new TagManagerContainer($client);

$result = $tagManagerContainer->tagManagerContainerRecheck(
    data: []
);```
