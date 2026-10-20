```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersOrganizations;
use Revenexx\Enums\CustomersOrganizationsChangeCreditReason;
use Revenexx\Enums\CreditLimitMode;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersOrganizations = new CustomersOrganizations($client);

$result = $customersOrganizations->customersOrganizationsChangeCredit(
    id: '',
    reason: CustomersOrganizationsChangeCreditReason::RATINGCHANGED(),
    creditLimit: 9.99, // optional
    creditLimitMode: CreditLimitMode::UNSET(), // optional
    note: '' // optional
);```
