```php
<?php

use Revenexx\Client;
use Revenexx\Services\AdsAccounts;
use Revenexx\Enums\Status;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$adsAccounts = new AdsAccounts($client);

$result = $adsAccounts->adsAccountsStatus(
    id: '',
    status: Status::CONNECTED(),
    error: '' // optional
);```
