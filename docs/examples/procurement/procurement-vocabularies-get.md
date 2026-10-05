```php
<?php

use Revenexx\Client;
use Revenexx\Services\Procurement;
use Revenexx\Enums\ProcurementVocabulariesGetName;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$procurement = new Procurement($client);

$result = $procurement->procurementVocabulariesGet(
    name: ProcurementVocabulariesGetName::APPROVALSTATUSES()
);```
