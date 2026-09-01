```php
<?php

use Revenexx\Client;
use Revenexx\Services\Forms;
use Revenexx\Enums\FormsSubmissionsPruneStatus;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$forms = new Forms($client);

$result = $forms->formsSubmissionsPrune(
    dryRun: true, // optional
    formSlug: 'contact', // optional
    olderThanDays: 1, // optional
    status: FormsSubmissionsPruneStatus::NEW() // optional
);```
