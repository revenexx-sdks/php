```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersOrganizations;
use Revenexx\Enums\CustomersOrganizationsBlockReason;
use Revenexx\Enums\CustomersOrganizationsBlockKind;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersOrganizations = new CustomersOrganizations($client);

$result = $customersOrganizations->customersOrganizationsBlock(
    id: '',
    reason: CustomersOrganizationsBlockReason::PAYMENTOVERDUE(),
    actor: '', // optional
    kind: CustomersOrganizationsBlockKind::ORDER(), // optional
    note: '' // optional
);```
