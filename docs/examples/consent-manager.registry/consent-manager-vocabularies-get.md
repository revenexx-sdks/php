```php
<?php

use Revenexx\Client;
use Revenexx\Services\ConsentManagerRegistry;
use Revenexx\Enums\ConsentManagerVocabulariesGetName;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$consentManagerRegistry = new ConsentManagerRegistry($client);

$result = $consentManagerRegistry->consentManagerVocabulariesGet(
    name: ConsentManagerVocabulariesGetName::LEGALBASES()
);```
