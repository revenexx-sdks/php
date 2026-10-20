```php
<?php

use Revenexx\Client;
use Revenexx\Services\CampaignsCalendar;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$campaignsCalendar = new CampaignsCalendar($client);

$result = $campaignsCalendar->campaignsCalendarRead(
    from: '', // optional
    to: '', // optional
    type: '', // optional
    market: '', // optional
    status: '', // optional
    ownerId: '' // optional
);```
