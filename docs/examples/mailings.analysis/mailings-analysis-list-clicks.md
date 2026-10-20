```php
<?php

use Revenexx\Client;
use Revenexx\Services\MailingsAnalysis;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$mailingsAnalysis = new MailingsAnalysis($client);

$result = $mailingsAnalysis->mailingsAnalysisListClicks(
    limit: 50, // optional
    offset: 0, // optional
    order: 'created_at.desc', // optional
    id: '', // optional
    mailingId: '', // optional
    url: '' // optional
);```
