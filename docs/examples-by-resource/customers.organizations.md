# customers.organizations

## customers-address-format-list

Read the address type and its countries

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersOrganizations;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersOrganizations = new CustomersOrganizations($client);

$result = $customersOrganizations->customersAddressFormatList();
```

## customers-address-format-get

Read the address rules of one country

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersOrganizations;
use Revenexx\Enums\Country;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersOrganizations = new CustomersOrganizations($client);

$result = $customersOrganizations->customersAddressFormatGet(
    country: Country::AC()
);```

## customers-addresses-list

Browse the stored postal addresses

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersOrganizations;
use Revenexx\Enums\DeliveryPointType;
use Revenexx\Enums\ValidationStatus;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersOrganizations = new CustomersOrganizations($client);

$result = $customersOrganizations->customersAddressesList(
    id: '', // optional
    organizationId: '', // optional
    contactId: '', // optional
    type: 'shipping', // optional
    company: 'Beispiel Industrietechnik GmbH', // optional
    name: 'Anna Berger', // optional
    name2: 'Abteilung Einkauf', // optional
    street: 'Musterstraße 12', // optional
    street2: 'Gebäude C, 2. OG', // optional
    zip: '10115', // optional
    city: 'Berlin', // optional
    region: 'Berlin', // optional
    country: 'DE', // optional
    phone: '+49 30 5550123', // optional
    email: 'wareneingang@example.com', // optional
    addressLine3: 'Building 4', // optional
    dependentLocality: 'Copacabana', // optional
    administrativeAreaCode: 'US-CA', // optional
    sortingCode: 'CEDEX 01', // optional
    streetName: 'Musterstraße', // optional
    houseNumber: '12', // optional
    houseNumberAddition: 'a', // optional
    deliveryPointType: DeliveryPointType::STREET(), // optional
    deliveryPointId: '123', // optional
    languageCode: 'ja', // optional
    script: 'Jpan', // optional
    validationStatus: ValidationStatus::UNCHECKED(), // optional
    validatedAt: '2026-01-01T12:00:00Z', // optional
    validationSource: 'endereco', // optional
    isDefault: true, // optional
    externalId: 'R_ADD000005', // optional
    sourceSyncedAt: '2026-01-01T12:00:00Z', // optional
    createdAt: '2026-01-01T12:00:00Z', // optional
    updatedAt: '2026-01-01T12:00:00Z', // optional
    limit: 1, // optional
    offset: 1, // optional
    order: 'created_at.desc' // optional
);```

## customers-addresses-create

Add a postal address

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersOrganizations;
use Revenexx\Enums\DeliveryPointType;
use Revenexx\Enums\ValidationStatus;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersOrganizations = new CustomersOrganizations($client);

$result = $customersOrganizations->customersAddressesCreate(
    addressLine1: '', // optional
    addressLine2: '', // optional
    addressLine3: 'Building 4', // optional
    administrativeAreaCode: 'US-CA', // optional
    administrativeAreaName: '', // optional
    careOf: '', // optional
    city: 'Berlin', // optional
    company: 'Beispiel Industrietechnik GmbH', // optional
    contactId: '', // optional
    country: 'DE', // optional
    countryCode: '', // optional
    createdAt: '2026-01-01T12:00:00Z', // optional
    deliveryPointId: '123', // optional
    deliveryPointType: DeliveryPointType::PACKSTATION(), // optional
    dependentLocality: 'Copacabana', // optional
    email: 'wareneingang@example.com', // optional
    externalId: 'R_ADD000005', // optional
    houseNumber: '12', // optional
    houseNumberAddition: 'a', // optional
    isDefault: true, // optional
    languageCode: 'ja', // optional
    latin: [
        'locality' => 'Tokyo'
    ], // optional
    locality: '', // optional
    name: 'Anna Berger', // optional
    name2: 'Abteilung Einkauf', // optional
    organizationId: '', // optional
    organizationName: '', // optional
    phone: '+49 30 5550123', // optional
    postalCode: '', // optional
    recipientName: '', // optional
    region: 'Berlin', // optional
    script: 'Jpan', // optional
    sortingCode: 'CEDEX 01', // optional
    street: 'Musterstraße 12', // optional
    street2: 'Gebäude C, 2. OG', // optional
    streetName: 'Musterstraße', // optional
    type: 'shipping', // optional
    validatedAt: '2026-01-01T12:00:00Z', // optional
    validationSource: 'endereco', // optional
    validationStatus: ValidationStatus::UNCHECKED(), // optional
    zip: '10115' // optional
);```

## customers-addresses-delete

Delete an address

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersOrganizations;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersOrganizations = new CustomersOrganizations($client);

$result = $customersOrganizations->customersAddressesDelete(
    id: ''
);```

## customers-addresses-get

Read one address

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersOrganizations;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersOrganizations = new CustomersOrganizations($client);

$result = $customersOrganizations->customersAddressesGet(
    id: ''
);```

## customers-addresses-update

Update an address

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersOrganizations;
use Revenexx\Enums\DeliveryPointType;
use Revenexx\Enums\ValidationStatus;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersOrganizations = new CustomersOrganizations($client);

$result = $customersOrganizations->customersAddressesUpdate(
    id: '',
    addressLine1: '', // optional
    addressLine2: '', // optional
    addressLine3: 'Building 4', // optional
    administrativeAreaCode: 'US-CA', // optional
    administrativeAreaName: '', // optional
    careOf: '', // optional
    city: 'Berlin', // optional
    company: 'Beispiel Industrietechnik GmbH', // optional
    contactId: '', // optional
    country: 'DE', // optional
    countryCode: '', // optional
    deliveryPointId: '123', // optional
    deliveryPointType: DeliveryPointType::PACKSTATION(), // optional
    dependentLocality: 'Copacabana', // optional
    email: 'wareneingang@example.com', // optional
    externalId: 'R_ADD000005', // optional
    houseNumber: '12', // optional
    houseNumberAddition: 'a', // optional
    isDefault: true, // optional
    languageCode: 'ja', // optional
    latin: [
        'locality' => 'Tokyo'
    ], // optional
    locality: '', // optional
    name: 'Anna Berger', // optional
    name2: 'Abteilung Einkauf', // optional
    organizationId: '', // optional
    organizationName: '', // optional
    phone: '+49 30 5550123', // optional
    postalCode: '', // optional
    recipientName: '', // optional
    region: 'Berlin', // optional
    script: 'Jpan', // optional
    sortingCode: 'CEDEX 01', // optional
    street: 'Musterstraße 12', // optional
    street2: 'Gebäude C, 2. OG', // optional
    streetName: 'Musterstraße', // optional
    type: 'shipping', // optional
    validatedAt: '2026-01-01T12:00:00Z', // optional
    validationSource: 'endereco', // optional
    validationStatus: ValidationStatus::UNCHECKED(), // optional
    zip: '10115' // optional
);```

## customers-contact-points-list

Browse where the documents go

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersOrganizations;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersOrganizations = new CustomersOrganizations($client);

$result = $customersOrganizations->customersContactPointsList(
    id: '', // optional
    organizationId: '', // optional
    addressId: '', // optional
    kind: 'invoice', // optional
    email: 'rechnungen@example.com', // optional
    phone: '+49 30 5550123', // optional
    isPrimary: true, // optional
    position: 1, // optional
    externalId: 'DSP-000047', // optional
    sourceSyncedAt: '2026-01-01T12:00:00Z', // optional
    createdAt: '2026-01-01T12:00:00Z', // optional
    updatedAt: '2026-01-01T12:00:00Z', // optional
    limit: 1, // optional
    offset: 1, // optional
    order: 'created_at.desc' // optional
);```

## customers-contact-points-create

Add a document recipient

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersOrganizations;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersOrganizations = new CustomersOrganizations($client);

$result = $customersOrganizations->customersContactPointsCreate(
    kind: 'invoice',
    organizationId: '',
    addressId: '', // optional
    createdAt: '2026-01-01T12:00:00Z', // optional
    email: 'rechnungen@example.com', // optional
    externalId: 'DSP-000047', // optional
    isPrimary: true, // optional
    phone: '+49 30 5550123', // optional
    position: 1 // optional
);```

## customers-contact-points-delete

Remove a contact point

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersOrganizations;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersOrganizations = new CustomersOrganizations($client);

$result = $customersOrganizations->customersContactPointsDelete(
    id: ''
);```

## customers-contact-points-get

Read one contact point

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersOrganizations;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersOrganizations = new CustomersOrganizations($client);

$result = $customersOrganizations->customersContactPointsGet(
    id: ''
);```

## customers-contact-points-update

Update a contact point

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersOrganizations;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersOrganizations = new CustomersOrganizations($client);

$result = $customersOrganizations->customersContactPointsUpdate(
    id: '',
    addressId: '', // optional
    email: 'rechnungen@example.com', // optional
    externalId: 'DSP-000047', // optional
    isPrimary: true, // optional
    kind: 'invoice', // optional
    organizationId: '', // optional
    phone: '+49 30 5550123', // optional
    position: 1 // optional
);```

## customers-derived-refresh

Recompute the derived columns

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersOrganizations;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersOrganizations = new CustomersOrganizations($client);

$result = $customersOrganizations->customersDerivedRefresh();
```

## customers-organization-metrics-list

Browse what each company has bought

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersOrganizations;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersOrganizations = new CustomersOrganizations($client);

$result = $customersOrganizations->customersOrganizationMetricsList(
    id: '', // optional
    organizationId: '', // optional
    orderCount: 1, // optional
    orderCount30d: 1, // optional
    orderCount90d: 1, // optional
    orderCount365d: 1, // optional
    revenueTotal: 9.99, // optional
    revenue30d: 9.99, // optional
    revenue90d: 9.99, // optional
    revenue365d: 9.99, // optional
    avgOrderValue: 9.99, // optional
    avgOrderValue365d: 9.99, // optional
    firstOrderAt: '2026-01-01T12:00:00Z', // optional
    lastOrderAt: '2026-01-01T12:00:00Z', // optional
    currency: 'EUR', // optional
    currencyMixed: true, // optional
    ordersAsOf: '2026-01-01T12:00:00Z', // optional
    computedAt: '2026-01-01T12:00:00Z', // optional
    createdAt: '2026-01-01T12:00:00Z', // optional
    updatedAt: '2026-01-01T12:00:00Z', // optional
    limit: 1, // optional
    offset: 1, // optional
    order: 'created_at.desc' // optional
);```

## customers-organization-metrics-freshness

Check how stale the buying metrics are

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersOrganizations;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersOrganizations = new CustomersOrganizations($client);

$result = $customersOrganizations->customersOrganizationMetricsFreshness();
```

## customers-organization-metrics-refresh

Refresh the buying metrics from orders

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersOrganizations;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersOrganizations = new CustomersOrganizations($client);

$result = $customersOrganizations->customersOrganizationMetricsRefresh(
    asOf: '2026-01-01T12:00:00Z', // optional
    cursor: '', // optional
    organizationIds: [] // optional
);```

## customers-organization-metrics-get

Read one company's buying metrics

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersOrganizations;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersOrganizations = new CustomersOrganizations($client);

$result = $customersOrganizations->customersOrganizationMetricsGet(
    id: ''
);```

## customers-organizations-list

Browse the buying companies

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersOrganizations;
use Revenexx\Enums\CustomersOrganizationsListStatus;
use Revenexx\Enums\CreditLimitMode;
use Revenexx\Enums\ShippingAdvice;
use Revenexx\Enums\Trashed;

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
    blockReason: 'Zahlungsverzug', // optional
    blockNote: '', // optional
    blockedAt: '2026-01-01T12:00:00Z', // optional
    blockedBy: '', // optional
    lifecycleStage: 'customer', // optional
    paymentTerms: 'net_30', // optional
    creditLimitMode: CreditLimitMode::UNSET(), // optional
    creditLimit: 9.99, // optional
    balance: 9.99, // optional
    balanceDue: 9.99, // optional
    creditAvailable: 9.99, // optional
    creditUtilisation: 1, // optional
    priceList: 'standard', // optional
    shippingAdvice: ShippingAdvice::COMPLETE(), // optional
    locationCode: 'DE-NORD', // optional
    deliveryBlock: true, // optional
    deliveryBlockReason: 'Offene Reklamation', // optional
    deliveryBlockedAt: '2026-01-01T12:00:00Z', // optional
    deliveryBlockedBy: '', // optional
    primaryContactId: '', // optional
    parentOrganizationId: '', // optional
    city: 'München', // optional
    accountManagerName: '', // optional
    revenue365d: 9.99, // optional
    lastOrderAt: '2026-01-01T12:00:00Z', // optional
    externalTeamId: '', // optional
    externalId: 'KND-10042', // optional
    sourceSyncedAt: '2026-01-01T12:00:00Z', // optional
    deletedAt: '2026-01-01T12:00:00Z', // optional
    deletedBy: 'vertrieb@example.com', // optional
    deletedById: '', // optional
    trashBatch: '', // optional
    purgeAt: '2026-01-01T12:00:00Z', // optional
    purgeBlockedReason: '', // optional
    createdAt: '2026-01-01T12:00:00Z', // optional
    updatedAt: '2026-01-01T12:00:00Z', // optional
    trashed: Trashed::EXCLUDE(), // optional
    limit: 1, // optional
    offset: 1, // optional
    order: 'created_at.desc' // optional
);```

## customers-organizations-create

Create an organization

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersOrganizations;
use Revenexx\Enums\CreditLimitMode;
use Revenexx\Enums\ShippingAdvice;
use Revenexx\Enums\OrganizationStatus;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersOrganizations = new CustomersOrganizations($client);

$result = $customersOrganizations->customersOrganizationsCreate(
    name: 'Beispiel Industrietechnik GmbH',
    balance: 12450.75, // optional
    balanceDue: 320, // optional
    branche: 'Maschinenbau', // optional
    createdAt: '2026-01-01T12:00:00Z', // optional
    creditLimit: 5000, // optional
    creditLimitMode: CreditLimitMode::LIMITED(), // optional
    customerNumber: 'K-10042', // optional
    deliveryBlock: true, // optional
    lifecycleStage: 'customer', // optional
    locationCode: 'DE-NORD', // optional
    paymentTerms: 'net_30', // optional
    priceList: 'standard', // optional
    settings: [
        'account_manager' => 'sales-north',
        'delivery_tour' => 'tuesday',
        'self_pickup' => true
    ], // optional
    shippingAdvice: ShippingAdvice::PARTIAL(), // optional
    status: OrganizationStatus::ACTIVE(), // optional
    vatId: 'DE123456789' // optional
);```

## customers-organizations-onboard

Onboard a business customer in one call

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersOrganizations;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersOrganizations = new CustomersOrganizations($client);

$result = $customersOrganizations->customersOrganizationsOnboard(
    name: '',
    accountManager: '', // optional
    billingCity: '', // optional
    billingCountry: '', // optional
    billingStreet: '', // optional
    billingZip: '', // optional
    branche: '', // optional
    contactEmail: '', // optional
    contactFirstName: '', // optional
    contactJobTitle: '', // optional
    contactLastName: '', // optional
    contactPhone: '', // optional
    contactRole: '', // optional
    customerNumber: '', // optional
    lifecycleStage: '', // optional
    paymentTerms: '', // optional
    sendInvite: true, // optional
    vatId: '' // optional
);```

## customers-organizations-trash-empty

Empty the organization trash

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersOrganizations;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersOrganizations = new CustomersOrganizations($client);

$result = $customersOrganizations->customersOrganizationsTrashEmpty();
```

## customers-organizations-delete

Delete an organization

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersOrganizations;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersOrganizations = new CustomersOrganizations($client);

$result = $customersOrganizations->customersOrganizationsDelete(
    id: ''
);```

## customers-organizations-get

Read one organization

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersOrganizations;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersOrganizations = new CustomersOrganizations($client);

$result = $customersOrganizations->customersOrganizationsGet(
    id: ''
);```

## customers-organizations-update

Update an organization

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersOrganizations;
use Revenexx\Enums\CreditLimitMode;
use Revenexx\Enums\ShippingAdvice;
use Revenexx\Enums\OrganizationStatus;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersOrganizations = new CustomersOrganizations($client);

$result = $customersOrganizations->customersOrganizationsUpdate(
    id: '',
    balance: 12450.75, // optional
    balanceDue: 320, // optional
    branche: 'Maschinenbau', // optional
    creditLimit: 5000, // optional
    creditLimitMode: CreditLimitMode::LIMITED(), // optional
    customerNumber: 'K-10042', // optional
    deliveryBlock: true, // optional
    lifecycleStage: 'customer', // optional
    locationCode: 'DE-NORD', // optional
    name: 'Beispiel Industrietechnik GmbH', // optional
    paymentTerms: 'net_30', // optional
    priceList: 'standard', // optional
    settings: [
        'account_manager' => 'sales-north',
        'delivery_tour' => 'tuesday',
        'self_pickup' => true
    ], // optional
    shippingAdvice: ShippingAdvice::PARTIAL(), // optional
    status: OrganizationStatus::ACTIVE(), // optional
    vatId: 'DE123456789' // optional
);```

## customers-organizations-block

Block a company from ordering or from delivery

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

## customers-organizations-care

Read who looks after a company

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersOrganizations;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersOrganizations = new CustomersOrganizations($client);

$result = $customersOrganizations->customersOrganizationsCare(
    id: ''
);```

## customers-organizations-change-credit

Change a company's credit, with a reason

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

## customers-organizations-restore

Restore an organization from the trash

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersOrganizations;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersOrganizations = new CustomersOrganizations($client);

$result = $customersOrganizations->customersOrganizationsRestore(
    id: ''
);```

## customers-organizations-set-account-manager

Name a company's responsible sales rep

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersOrganizations;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersOrganizations = new CustomersOrganizations($client);

$result = $customersOrganizations->customersOrganizationsSetAccountManager(
    id: '',
    repCode: ''
);```

## customers-organizations-set-primary-contact

Make a person the company's main contact

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersOrganizations;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersOrganizations = new CustomersOrganizations($client);

$result = $customersOrganizations->customersOrganizationsSetPrimaryContact(
    id: '',
    contactId: ''
);```

## customers-organizations-unblock-delivery

Lift the delivery block

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersOrganizations;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersOrganizations = new CustomersOrganizations($client);

$result = $customersOrganizations->customersOrganizationsUnblockDelivery(
    id: '',
    note: ''
);```

## customers-organizations-unblock-order

Lift the order block

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersOrganizations;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersOrganizations = new CustomersOrganizations($client);

$result = $customersOrganizations->customersOrganizationsUnblockOrder(
    id: '',
    note: ''
);```
