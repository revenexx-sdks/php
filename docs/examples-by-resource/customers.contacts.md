# customers.contacts

## customers-contact-events-list

Browse the customer activity timeline

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersContacts;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersContacts = new CustomersContacts($client);

$result = $customersContacts->customersContactEventsList(
    id: '', // optional
    contactId: '', // optional
    organizationId: '', // optional
    kind: 'call', // optional
    name: 'activity.call', // optional
    subject: 'Called about the annual requirement', // optional
    actor: 'vertrieb@example.com', // optional
    occurredAt: '2026-01-01T12:00:00Z', // optional
    dueAt: '2026-01-01T12:00:00Z', // optional
    assignee: '', // optional
    doneAt: '2026-01-01T12:00:00Z', // optional
    createdAt: '2026-01-01T12:00:00Z', // optional
    limit: 1, // optional
    offset: 1, // optional
    order: 'created_at.desc' // optional
);```

## customers-contact-events-get

Read one timeline entry

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersContacts;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersContacts = new CustomersContacts($client);

$result = $customersContacts->customersContactEventsGet(
    id: ''
);```

## customers-contacts-list

Browse the people at the buying companies

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

## customers-contacts-create

Create a contact

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersContacts;
use Revenexx\Enums\OrderApprovalMode;
use Revenexx\Enums\CustomersContactsCreateRegistrationStatus;
use Revenexx\Enums\ContactStatus;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersContacts = new CustomersContacts($client);

$result = $customersContacts->customersContactsCreate(
    email: 'einkauf@example.com',
    createdAt: '2026-01-01T12:00:00Z', // optional
    externalId: 'ASP000047', // optional
    firstName: 'Anna', // optional
    isPrimary: true, // optional
    jobTitle: 'Einkaufsleitung', // optional
    lastName: 'Berger', // optional
    locale: 'de-DE', // optional
    orderApprovalLimit: 25000, // optional
    orderApprovalMode: OrderApprovalMode::LIMITED(), // optional
    organizationId: '', // optional
    phone: '+49 30 5550123', // optional
    registrationStatus: CustomersContactsCreateRegistrationStatus::PENDING(), // optional
    role: 'buyer', // optional
    status: ContactStatus::INVITED() // optional
);```

## customers-contacts-trash-empty

Empty the contact trash

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersContacts;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersContacts = new CustomersContacts($client);

$result = $customersContacts->customersContactsTrashEmpty();
```

## customers-contacts-events-create

Log an activity on a contact

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersContacts;
use Revenexx\Enums\ContactActivityKind;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersContacts = new CustomersContacts($client);

$result = $customersContacts->customersContactsEventsCreate(
    contactId: '',
    subject: 'Called about the annual requirement',
    actor: 'vertrieb@example.com', // optional
    kind: ContactActivityKind::NOTE(), // optional
    note: 'Asked for a quote on the annual bolt requirement; call back in week 34.', // optional
    occurredAt: '2026-01-01T12:00:00Z' // optional
);```

## customers-contacts-identity

Give a contact the login it has none of

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersContacts;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersContacts = new CustomersContacts($client);

$result = $customersContacts->customersContactsIdentity(
    contactId: '',
    createdBy: '' // optional
);```

## customers-contacts-invite

Invite a contact into their company

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersContacts;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersContacts = new CustomersContacts($client);

$result = $customersContacts->customersContactsInvite(
    contactId: '',
    invitedBy: '', // optional
    url: 'https://shop.example.com/anmelden' // optional
);```

## customers-contacts-permissions

Read a contact's effective permissions

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersContacts;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersContacts = new CustomersContacts($client);

$result = $customersContacts->customersContactsPermissions(
    contactId: ''
);```

## customers-registrations-approve

Approve a pending registration

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersContacts;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersContacts = new CustomersContacts($client);

$result = $customersContacts->customersRegistrationsApprove(
    contactId: '',
    decidedBy: 'vertrieb@example.com' // optional
);```

## customers-registrations-reject

Reject a pending registration

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersContacts;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersContacts = new CustomersContacts($client);

$result = $customersContacts->customersRegistrationsReject(
    contactId: '',
    reason: 'Could not be verified as a commercial buyer.',
    decidedBy: 'vertrieb@example.com' // optional
);```

## customers-contacts-reinvite

Send a shop invitation again

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersContacts;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersContacts = new CustomersContacts($client);

$result = $customersContacts->customersContactsReinvite(
    contactId: '',
    url: 'https://example.com' // optional
);```

## customers-contacts-restore-access

Give a person's shop access back

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersContacts;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersContacts = new CustomersContacts($client);

$result = $customersContacts->customersContactsRestoreAccess(
    contactId: '',
    actor: '' // optional
);```

## customers-contacts-revoke-access

Revoke a person's shop access

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersContacts;
use Revenexx\Enums\Reason;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersContacts = new CustomersContacts($client);

$result = $customersContacts->customersContactsRevokeAccess(
    contactId: '',
    reason: Reason::LEFTCOMPANY(),
    actor: '', // optional
    note: '' // optional
);```

## customers-contacts-delete

Delete a contact

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersContacts;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersContacts = new CustomersContacts($client);

$result = $customersContacts->customersContactsDelete(
    id: ''
);```

## customers-contacts-get

Read one contact

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersContacts;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersContacts = new CustomersContacts($client);

$result = $customersContacts->customersContactsGet(
    id: ''
);```

## customers-contacts-update

Update a contact

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersContacts;
use Revenexx\Enums\OrderApprovalMode;
use Revenexx\Enums\ContactStatus;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersContacts = new CustomersContacts($client);

$result = $customersContacts->customersContactsUpdate(
    id: '',
    email: 'einkauf@example.com', // optional
    externalId: 'ASP000047', // optional
    firstName: 'Anna', // optional
    isPrimary: true, // optional
    jobTitle: 'Einkaufsleitung', // optional
    lastName: 'Berger', // optional
    locale: 'de-DE', // optional
    orderApprovalLimit: 25000, // optional
    orderApprovalMode: OrderApprovalMode::LIMITED(), // optional
    organizationId: '', // optional
    phone: '+49 30 5550123', // optional
    role: 'buyer', // optional
    status: ContactStatus::INVITED() // optional
);```

## customers-contacts-erase

Erase personal data

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersContacts;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersContacts = new CustomersContacts($client);

$result = $customersContacts->customersContactsErase(
    id: ''
);```

## customers-contacts-restore

Restore a contact from the trash

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersContacts;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersContacts = new CustomersContacts($client);

$result = $customersContacts->customersContactsRestore(
    id: ''
);```

## customers-organizations-events-create

Log an activity from the company page

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersContacts;
use Revenexx\Enums\ContactActivityKind;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersContacts = new CustomersContacts($client);

$result = $customersContacts->customersOrganizationsEventsCreate(
    organizationId: '',
    contactId: '',
    subject: 'Called about the annual requirement',
    actor: 'vertrieb@example.com', // optional
    kind: ContactActivityKind::NOTE(), // optional
    note: 'Asked for a quote on the annual bolt requirement; call back in week 34.', // optional
    occurredAt: '2026-01-01T12:00:00Z' // optional
);```
