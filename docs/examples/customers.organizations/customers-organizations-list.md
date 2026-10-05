```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersOrganizations;
use Revenexx\Enums\CustomersOrganizationsListStatus;
use Revenexx\Enums\CreditLimitMode;
use Revenexx\Enums\ShippingAdvice;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersOrganizations = new CustomersOrganizations($client);

$result = $customersOrganizations->customersOrganizationsList(
    id: '', // optional
    name: 'Beispiel Industrietechnik GmbH', // optional
    vatId: 'DE123456789', // optional
    branche: 'Maschinenbau', // optional
    customerNumber: 'K-10042', // optional
    status: CustomersOrganizationsListStatus::ACTIVE(), // optional
    lifecycleStage: 'customer', // optional
    paymentTerms: 'net_30', // optional
    creditLimitMode: CreditLimitMode::UNSET(), // optional
    creditLimit: 9.99, // optional
    balance: 9.99, // optional
    balanceDue: 9.99, // optional
    priceList: 'standard', // optional
    shippingAdvice: ShippingAdvice::COMPLETE(), // optional
    locationCode: 'DE-NORD', // optional
    deliveryBlock: true, // optional
    externalTeamId: '', // optional
    externalId: 'KND-10042', // optional
    sourceSyncedAt: '2026-01-01T12:00:00Z', // optional
    createdAt: '2026-01-01T12:00:00Z', // optional
    updatedAt: '2026-01-01T12:00:00Z', // optional
    limit: 1, // optional
    offset: 1, // optional
    order: 'created_at.desc' // optional
);```
