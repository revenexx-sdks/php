```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersContacts;
use Revenexx\Enums\CustomersContactsListStatus;
use Revenexx\Enums\ShopAccess;
use Revenexx\Enums\OrderApprovalMode;
use Revenexx\Enums\RegistrationStatus;
use Revenexx\Enums\LeadSource;
use Revenexx\Enums\Trashed;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersContacts = new CustomersContacts($client);

$result = $customersContacts->customersContactsList(
    id: '', // optional
    organizationId: '', // optional
    email: 'einkauf@example.com', // optional
    username: '10024-berger', // optional
    firstName: 'Anna', // optional
    lastName: 'Berger', // optional
    phone: '+49 30 5550123', // optional
    jobTitle: 'Einkaufsleitung', // optional
    role: 'buyer', // optional
    status: CustomersContactsListStatus::INVITED(), // optional
    shopAccess: ShopAccess::CANORDER(), // optional
    invitedAt: '2026-01-01T12:00:00Z', // optional
    accessBlockedReason: '', // optional
    orderApprovalMode: OrderApprovalMode::NONE(), // optional
    orderApprovalLimit: 9.99, // optional
    registrationStatus: RegistrationStatus::PENDING(), // optional
    registrationDecidedAt: '2026-01-01T12:00:00Z', // optional
    registrationDecidedBy: 'vertrieb@example.com', // optional
    registrationReason: 'Could not be verified as a commercial buyer.', // optional
    locale: 'de-DE', // optional
    consentMarketing: true, // optional
    lifecycleStage: 'lead', // optional
    lifecycleChangedAt: '2026-01-01T12:00:00Z', // optional
    leadSource: LeadSource::FORM(), // optional
    leadSourceRef: 'form:6f1c2d3e-4a5b-4c6d-8e7f-9a0b1c2d3e4f:81b2c3d4-e5f6-4a7b-8c9d-0e1f2a3b4c5d', // optional
    ownerId: 'AD-07', // optional
    leadScore: 1, // optional
    consentMarketingSyncedAt: '2026-01-01T12:00:00Z', // optional
    isPrimary: true, // optional
    externalUserId: '', // optional
    externalId: 'ASP000047', // optional
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
