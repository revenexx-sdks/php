# customers.value-lists

## customers-address-types-list

The address types this tenant keeps

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersValueLists;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersValueLists = new CustomersValueLists($client);

$result = $customersValueLists->customersAddressTypesList(
    active: true // optional
);```

## customers-address-types-create

Add an address type

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersValueLists;
use Revenexx\Enums\Tone;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersValueLists = new CustomersValueLists($client);

$result = $customersValueLists->customersAddressTypesCreate(
    code: '',
    title: 'Shipping address',
    active: true, // optional
    description: 'Where the goods go.', // optional
    descriptions: [
        'de' => 'Wohin die Ware geliefert wird.',
        'en' => 'Where the goods go.'
    ], // optional
    isDefault: true, // optional
    labels: [
        'de' => 'Lieferadresse',
        'en' => 'Shipping address'
    ], // optional
    position: 1, // optional
    tone: Tone::NEUTRAL() // optional
);```

## customers-address-types-delete

Remove an address type nothing uses

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersValueLists;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersValueLists = new CustomersValueLists($client);

$result = $customersValueLists->customersAddressTypesDelete(
    id: ''
);```

## customers-address-types-get

Read one address type

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersValueLists;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersValueLists = new CustomersValueLists($client);

$result = $customersValueLists->customersAddressTypesGet(
    id: ''
);```

## customers-address-types-update

Rename an address type or move it in the order

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersValueLists;
use Revenexx\Enums\Tone;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersValueLists = new CustomersValueLists($client);

$result = $customersValueLists->customersAddressTypesUpdate(
    id: '',
    active: true, // optional
    description: 'Where the goods go.', // optional
    descriptions: [
        'de' => 'Wohin die Ware geliefert wird.',
        'en' => 'Where the goods go.'
    ], // optional
    isDefault: true, // optional
    labels: [
        'de' => 'Lieferadresse',
        'en' => 'Shipping address'
    ], // optional
    position: 1, // optional
    title: 'Shipping address', // optional
    tone: Tone::NEUTRAL() // optional
);```

## customers-contact-event-kinds-list

The activity types this tenant keeps

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersValueLists;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersValueLists = new CustomersValueLists($client);

$result = $customersValueLists->customersContactEventKindsList(
    active: true // optional
);```

## customers-contact-event-kinds-create

Add an activity type

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersValueLists;
use Revenexx\Enums\Tone;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersValueLists = new CustomersValueLists($client);

$result = $customersValueLists->customersContactEventKindsCreate(
    code: '',
    title: 'Phone call',
    active: true, // optional
    description: 'Somebody spoke to this person on the phone.', // optional
    descriptions: [
        'de' => 'Es wurde mit dieser Person telefoniert.',
        'en' => 'Somebody spoke to this person on the phone.'
    ], // optional
    isDefault: true, // optional
    labels: [
        'de' => 'Telefonat',
        'en' => 'Phone call'
    ], // optional
    position: 1, // optional
    tone: Tone::NEUTRAL() // optional
);```

## customers-contact-event-kinds-delete

Remove an activity type nothing uses

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersValueLists;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersValueLists = new CustomersValueLists($client);

$result = $customersValueLists->customersContactEventKindsDelete(
    id: ''
);```

## customers-contact-event-kinds-get

Read one activity type

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersValueLists;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersValueLists = new CustomersValueLists($client);

$result = $customersValueLists->customersContactEventKindsGet(
    id: ''
);```

## customers-contact-event-kinds-update

Rename an activity type or move it in the order

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersValueLists;
use Revenexx\Enums\Tone;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersValueLists = new CustomersValueLists($client);

$result = $customersValueLists->customersContactEventKindsUpdate(
    id: '',
    active: true, // optional
    description: 'Somebody spoke to this person on the phone.', // optional
    descriptions: [
        'de' => 'Es wurde mit dieser Person telefoniert.',
        'en' => 'Somebody spoke to this person on the phone.'
    ], // optional
    isDefault: true, // optional
    labels: [
        'de' => 'Telefonat',
        'en' => 'Phone call'
    ], // optional
    position: 1, // optional
    title: 'Phone call', // optional
    tone: Tone::NEUTRAL() // optional
);```

## customers-contact-lifecycle-stages-list

The contact stages this tenant keeps

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersValueLists;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersValueLists = new CustomersValueLists($client);

$result = $customersValueLists->customersContactLifecycleStagesList(
    active: true // optional
);```

## customers-contact-lifecycle-stages-create

Add a contact stage

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersValueLists;
use Revenexx\Enums\Tone;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersValueLists = new CustomersValueLists($client);

$result = $customersValueLists->customersContactLifecycleStagesCreate(
    code: '',
    title: 'Lead',
    active: true, // optional
    description: 'Showed an interest of their own — a form, a fair, a call.', // optional
    descriptions: [
        'de' => 'Hat selbst Interesse gezeigt.',
        'en' => 'Showed an interest of their own.'
    ], // optional
    isDefault: true, // optional
    labels: [
        'de' => 'Lead',
        'en' => 'Lead'
    ], // optional
    position: 1, // optional
    tone: Tone::NEUTRAL() // optional
);```

## customers-contact-lifecycle-stages-delete

Remove a contact stage nothing uses

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersValueLists;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersValueLists = new CustomersValueLists($client);

$result = $customersValueLists->customersContactLifecycleStagesDelete(
    id: ''
);```

## customers-contact-lifecycle-stages-get

Read one contact stage

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersValueLists;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersValueLists = new CustomersValueLists($client);

$result = $customersValueLists->customersContactLifecycleStagesGet(
    id: ''
);```

## customers-contact-lifecycle-stages-update

Rename a contact stage or move it in the order

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersValueLists;
use Revenexx\Enums\Tone;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersValueLists = new CustomersValueLists($client);

$result = $customersValueLists->customersContactLifecycleStagesUpdate(
    id: '',
    active: true, // optional
    description: 'Showed an interest of their own — a form, a fair, a call.', // optional
    descriptions: [
        'de' => 'Hat selbst Interesse gezeigt.',
        'en' => 'Showed an interest of their own.'
    ], // optional
    isDefault: true, // optional
    labels: [
        'de' => 'Lead',
        'en' => 'Lead'
    ], // optional
    position: 1, // optional
    title: 'Lead', // optional
    tone: Tone::NEUTRAL() // optional
);```

## customers-contact-point-kinds-list

The recipient types this tenant keeps

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersValueLists;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersValueLists = new CustomersValueLists($client);

$result = $customersValueLists->customersContactPointKindsList(
    active: true // optional
);```

## customers-contact-point-kinds-create

Add a recipient type

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersValueLists;
use Revenexx\Enums\Tone;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersValueLists = new CustomersValueLists($client);

$result = $customersValueLists->customersContactPointKindsCreate(
    code: '',
    title: 'Invoice',
    active: true, // optional
    description: 'Where the invoice is sent.', // optional
    descriptions: [
        'de' => 'Wohin die Rechnung geschickt wird.',
        'en' => 'Where the invoice is sent.'
    ], // optional
    isDefault: true, // optional
    labels: [
        'de' => 'Rechnung',
        'en' => 'Invoice'
    ], // optional
    position: 1, // optional
    tone: Tone::NEUTRAL() // optional
);```

## customers-contact-point-kinds-delete

Remove a recipient type nothing uses

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersValueLists;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersValueLists = new CustomersValueLists($client);

$result = $customersValueLists->customersContactPointKindsDelete(
    id: ''
);```

## customers-contact-point-kinds-get

Read one recipient type

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersValueLists;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersValueLists = new CustomersValueLists($client);

$result = $customersValueLists->customersContactPointKindsGet(
    id: ''
);```

## customers-contact-point-kinds-update

Rename a recipient type or move it in the order

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersValueLists;
use Revenexx\Enums\Tone;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersValueLists = new CustomersValueLists($client);

$result = $customersValueLists->customersContactPointKindsUpdate(
    id: '',
    active: true, // optional
    description: 'Where the invoice is sent.', // optional
    descriptions: [
        'de' => 'Wohin die Rechnung geschickt wird.',
        'en' => 'Where the invoice is sent.'
    ], // optional
    isDefault: true, // optional
    labels: [
        'de' => 'Rechnung',
        'en' => 'Invoice'
    ], // optional
    position: 1, // optional
    title: 'Invoice', // optional
    tone: Tone::NEUTRAL() // optional
);```

## customers-defaults

Seed this tenant's value sets

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersValueLists;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersValueLists = new CustomersValueLists($client);

$result = $customersValueLists->customersDefaults(
    data: []
);```

## customers-lifecycle-stages-list

The lifecycle stages this tenant keeps

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersValueLists;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersValueLists = new CustomersValueLists($client);

$result = $customersValueLists->customersLifecycleStagesList(
    active: true // optional
);```

## customers-lifecycle-stages-create

Add a lifecycle stage

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersValueLists;
use Revenexx\Enums\Tone;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersValueLists = new CustomersValueLists($client);

$result = $customersValueLists->customersLifecycleStagesCreate(
    code: '',
    title: 'Customer',
    active: true, // optional
    description: 'Has ordered at least once and is being served.', // optional
    descriptions: [
        'de' => 'Hat mindestens einmal bestellt und wird betreut.',
        'en' => 'Has ordered at least once and is being served.'
    ], // optional
    isDefault: true, // optional
    labels: [
        'de' => 'Kunde',
        'en' => 'Customer'
    ], // optional
    position: 1, // optional
    tone: Tone::NEUTRAL() // optional
);```

## customers-lifecycle-stages-delete

Remove a lifecycle stage nothing uses

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersValueLists;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersValueLists = new CustomersValueLists($client);

$result = $customersValueLists->customersLifecycleStagesDelete(
    id: ''
);```

## customers-lifecycle-stages-get

Read one lifecycle stage

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersValueLists;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersValueLists = new CustomersValueLists($client);

$result = $customersValueLists->customersLifecycleStagesGet(
    id: ''
);```

## customers-lifecycle-stages-update

Rename a lifecycle stage or move it in the order

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersValueLists;
use Revenexx\Enums\Tone;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersValueLists = new CustomersValueLists($client);

$result = $customersValueLists->customersLifecycleStagesUpdate(
    id: '',
    active: true, // optional
    description: 'Has ordered at least once and is being served.', // optional
    descriptions: [
        'de' => 'Hat mindestens einmal bestellt und wird betreut.',
        'en' => 'Has ordered at least once and is being served.'
    ], // optional
    isDefault: true, // optional
    labels: [
        'de' => 'Kunde',
        'en' => 'Customer'
    ], // optional
    position: 1, // optional
    title: 'Customer', // optional
    tone: Tone::NEUTRAL() // optional
);```

## customers-payment-terms-list

The payment terms this tenant keeps

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersValueLists;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersValueLists = new CustomersValueLists($client);

$result = $customersValueLists->customersPaymentTermsList(
    active: true // optional
);```

## customers-payment-terms-create

Add a payment term

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersValueLists;
use Revenexx\Enums\Tone;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersValueLists = new CustomersValueLists($client);

$result = $customersValueLists->customersPaymentTermsCreate(
    code: '',
    title: 'Net 30 days',
    active: true, // optional
    description: 'Invoice due 30 days after the delivery note.', // optional
    descriptions: [
        'de' => 'Rechnung 30 Tage nach Lieferschein fällig.',
        'en' => 'Invoice due 30 days after the delivery note.'
    ], // optional
    isDefault: true, // optional
    labels: [
        'de' => 'Zahlbar in 30 Tagen',
        'en' => 'Net 30 days'
    ], // optional
    position: 1, // optional
    tone: Tone::NEUTRAL() // optional
);```

## customers-payment-terms-delete

Remove a payment term nothing uses

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersValueLists;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersValueLists = new CustomersValueLists($client);

$result = $customersValueLists->customersPaymentTermsDelete(
    id: ''
);```

## customers-payment-terms-get

Read one payment term

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersValueLists;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersValueLists = new CustomersValueLists($client);

$result = $customersValueLists->customersPaymentTermsGet(
    id: ''
);```

## customers-payment-terms-update

Rename a payment term or move it in the order

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersValueLists;
use Revenexx\Enums\Tone;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersValueLists = new CustomersValueLists($client);

$result = $customersValueLists->customersPaymentTermsUpdate(
    id: '',
    active: true, // optional
    description: 'Invoice due 30 days after the delivery note.', // optional
    descriptions: [
        'de' => 'Rechnung 30 Tage nach Lieferschein fällig.',
        'en' => 'Invoice due 30 days after the delivery note.'
    ], // optional
    isDefault: true, // optional
    labels: [
        'de' => 'Zahlbar in 30 Tagen',
        'en' => 'Net 30 days'
    ], // optional
    position: 1, // optional
    title: 'Net 30 days', // optional
    tone: Tone::NEUTRAL() // optional
);```

## customers-vocabularies-list

List the vocabularies

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersValueLists;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersValueLists = new CustomersValueLists($client);

$result = $customersValueLists->customersVocabulariesList();
```

## customers-vocabularies-get

Read one vocabulary

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersValueLists;
use Revenexx\Enums\CustomersVocabulariesGetName;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersValueLists = new CustomersValueLists($client);

$result = $customersValueLists->customersVocabulariesGet(
    name: CustomersVocabulariesGetName::ADDRESSTYPES()
);```
