```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersOrganizations;
use Revenexx\Enums\OrganizationStatus;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersOrganizations = new CustomersOrganizations($client);

$result = $customersOrganizations->customersOrganizationsCreate(
    name: 'Beispiel Industrietechnik GmbH',
    branche: 'Maschinenbau', // optional
    creditLimit: 5000, // optional
    customerNumber: 'K-10042', // optional
    deliveryBlock: true, // optional
    lifecycleStage: 'customer', // optional
    paymentTerms: 'net_30', // optional
    priceList: 'standard', // optional
    settings: [
        'account_manager' => 'sales-north',
        'delivery_tour' => 'tuesday',
        'self_pickup' => true
    ], // optional
    status: OrganizationStatus::ACTIVE(), // optional
    vatId: 'DE123456789' // optional
);```
