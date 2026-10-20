```php
<?php

use Revenexx\Client;
use Revenexx\Services\AdsVocabularies;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$adsVocabularies = new AdsVocabularies($client);

$result = $adsVocabularies->adsVocabulariesList();
```
