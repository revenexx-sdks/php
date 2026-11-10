# marketing-consents.types

## marketing-consents-consent-texts-list

List the consent texts and their versions

```php
<?php

use Revenexx\Client;
use Revenexx\Services\MarketingConsentsTypes;
use Revenexx\Enums\Trashed;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$marketingConsentsTypes = new MarketingConsentsTypes($client);

$result = $marketingConsentsTypes->marketingConsentsConsentTextsList(
    id: '', // optional
    subscriptionTypeId: '', // optional
    version: 1, // optional
    locale: '', // optional
    wording: '', // optional
    publishedAt: '2026-01-01T12:00:00Z', // optional
    publishedBy: '', // optional
    createdAt: '2026-01-01T12:00:00Z', // optional
    updatedAt: '2026-01-01T12:00:00Z', // optional
    deletedAt: '2026-01-01T12:00:00Z', // optional
    deletedBy: '', // optional
    deletedById: '', // optional
    trashBatch: '', // optional
    purgeAt: '2026-01-01T12:00:00Z', // optional
    purgeBlockedReason: '', // optional
    trashed: Trashed::EXCLUDE(), // optional
    limit: 50, // optional
    offset: 0, // optional
    order: 'created_at.desc' // optional
);```

## marketing-consents-consent-texts-create

Write a new draft version of a consent text

```php
<?php

use Revenexx\Client;
use Revenexx\Services\MarketingConsentsTypes;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$marketingConsentsTypes = new MarketingConsentsTypes($client);

$result = $marketingConsentsTypes->marketingConsentsConsentTextsCreate(
    locale: 'de',
    subscriptionTypeId: '',
    wording: 'Ja, ich möchte den Newsletter mit Neuheiten und Aktionen erhalten. Abmeldung jederzeit über den Link in jeder Mail.'
);```

## marketing-consents-consent-texts-empty-trash

Empty the consent text trash, deleting each one for good

```php
<?php

use Revenexx\Client;
use Revenexx\Services\MarketingConsentsTypes;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$marketingConsentsTypes = new MarketingConsentsTypes($client);

$result = $marketingConsentsTypes->marketingConsentsConsentTextsEmptyTrash();
```

## marketing-consents-consent-texts-purge

Delete the consent texts that outlived the trash retention

```php
<?php

use Revenexx\Client;
use Revenexx\Services\MarketingConsentsTypes;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$marketingConsentsTypes = new MarketingConsentsTypes($client);

$result = $marketingConsentsTypes->marketingConsentsConsentTextsPurge();
```

## marketing-consents-consent-texts-delete

Move a consent text to the trash, or delete it for good from there

```php
<?php

use Revenexx\Client;
use Revenexx\Services\MarketingConsentsTypes;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$marketingConsentsTypes = new MarketingConsentsTypes($client);

$result = $marketingConsentsTypes->marketingConsentsConsentTextsDelete(
    id: ''
);```

## marketing-consents-consent-texts-get

Read one consent text

```php
<?php

use Revenexx\Client;
use Revenexx\Services\MarketingConsentsTypes;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$marketingConsentsTypes = new MarketingConsentsTypes($client);

$result = $marketingConsentsTypes->marketingConsentsConsentTextsGet(
    id: ''
);```

## marketing-consents-consent-texts-update

Edit a draft consent text

```php
<?php

use Revenexx\Client;
use Revenexx\Services\MarketingConsentsTypes;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$marketingConsentsTypes = new MarketingConsentsTypes($client);

$result = $marketingConsentsTypes->marketingConsentsConsentTextsUpdate(
    id: '',
    wording: 'Ja, ich möchte den Newsletter mit Neuheiten und Aktionen erhalten. Abmeldung jederzeit über den Link in jeder Mail.'
);```

## marketing-consents-consent-texts-publish

Publish a consent text version

```php
<?php

use Revenexx\Client;
use Revenexx\Services\MarketingConsentsTypes;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$marketingConsentsTypes = new MarketingConsentsTypes($client);

$result = $marketingConsentsTypes->marketingConsentsConsentTextsPublish(
    id: '',
    data: []
);```

## marketing-consents-consent-texts-restore

Bring a consent text back out of the trash

```php
<?php

use Revenexx\Client;
use Revenexx\Services\MarketingConsentsTypes;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$marketingConsentsTypes = new MarketingConsentsTypes($client);

$result = $marketingConsentsTypes->marketingConsentsConsentTextsRestore(
    id: ''
);```

## marketing-consents-subscription-types-list

List the subscription types

```php
<?php

use Revenexx\Client;
use Revenexx\Services\MarketingConsentsTypes;
use Revenexx\Enums\Trashed;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$marketingConsentsTypes = new MarketingConsentsTypes($client);

$result = $marketingConsentsTypes->marketingConsentsSubscriptionTypesList(
    id: '', // optional
    code: '', // optional
    requiresDoi: true, // optional
    allowsExistingCustomer: true, // optional
    position: 1, // optional
    archivedAt: '2026-01-01T12:00:00Z', // optional
    externalId: '', // optional
    sourceSyncedAt: '2026-01-01T12:00:00Z', // optional
    createdAt: '2026-01-01T12:00:00Z', // optional
    updatedAt: '2026-01-01T12:00:00Z', // optional
    deletedAt: '2026-01-01T12:00:00Z', // optional
    deletedBy: '', // optional
    deletedById: '', // optional
    trashBatch: '', // optional
    purgeAt: '2026-01-01T12:00:00Z', // optional
    purgeBlockedReason: '', // optional
    trashed: Trashed::EXCLUDE(), // optional
    limit: 50, // optional
    offset: 0, // optional
    order: 'created_at.desc' // optional
);```

## marketing-consents-subscription-types-create

Create a subscription type

```php
<?php

use Revenexx\Client;
use Revenexx\Services\MarketingConsentsTypes;
use Revenexx\Enums\Channels;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$marketingConsentsTypes = new MarketingConsentsTypes($client);

$result = $marketingConsentsTypes->marketingConsentsSubscriptionTypesCreate(
    code: 'newsletter',
    labels: [
        'de' => 'Newsletter',
        'en' => 'Newsletter'
    ],
    allowsExistingCustomer: true, // optional
    channels: [Channels::EMAIL(), Channels::SMS()], // optional
    descriptions: [], // optional
    position: 10, // optional
    requiresDoi: true, // optional
    similarGoodsNote: [
        'de' => 'Ersatzteile und Zubehör zu gekauften Geräten.',
        'en' => 'Spare parts and accessories for purchased devices.'
    ] // optional
);```

## marketing-consents-subscription-types-empty-trash

Empty the subscription type trash, deleting each one for good

```php
<?php

use Revenexx\Client;
use Revenexx\Services\MarketingConsentsTypes;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$marketingConsentsTypes = new MarketingConsentsTypes($client);

$result = $marketingConsentsTypes->marketingConsentsSubscriptionTypesEmptyTrash();
```

## marketing-consents-subscription-types-purge

Delete the subscription types that outlived the trash retention

```php
<?php

use Revenexx\Client;
use Revenexx\Services\MarketingConsentsTypes;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$marketingConsentsTypes = new MarketingConsentsTypes($client);

$result = $marketingConsentsTypes->marketingConsentsSubscriptionTypesPurge();
```

## marketing-consents-subscription-types-delete

Move a subscription type to the trash, or delete it for good from there

```php
<?php

use Revenexx\Client;
use Revenexx\Services\MarketingConsentsTypes;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$marketingConsentsTypes = new MarketingConsentsTypes($client);

$result = $marketingConsentsTypes->marketingConsentsSubscriptionTypesDelete(
    id: ''
);```

## marketing-consents-subscription-types-get

Read one subscription type

```php
<?php

use Revenexx\Client;
use Revenexx\Services\MarketingConsentsTypes;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$marketingConsentsTypes = new MarketingConsentsTypes($client);

$result = $marketingConsentsTypes->marketingConsentsSubscriptionTypesGet(
    id: ''
);```

## marketing-consents-subscription-types-update

Edit a subscription type; its code is fixed

```php
<?php

use Revenexx\Client;
use Revenexx\Services\MarketingConsentsTypes;
use Revenexx\Enums\Channels;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$marketingConsentsTypes = new MarketingConsentsTypes($client);

$result = $marketingConsentsTypes->marketingConsentsSubscriptionTypesUpdate(
    id: '',
    allowsExistingCustomer: true, // optional
    channels: [Channels::EMAIL(), Channels::SMS()], // optional
    code: 'newsletter', // optional
    descriptions: [], // optional
    labels: [
        'de' => 'Newsletter',
        'en' => 'Newsletter'
    ], // optional
    position: 10, // optional
    requiresDoi: true, // optional
    similarGoodsNote: [
        'de' => 'Ersatzteile und Zubehör zu gekauften Geräten.',
        'en' => 'Spare parts and accessories for purchased devices.'
    ] // optional
);```

## marketing-consents-subscription-types-archive

Archive a subscription type

```php
<?php

use Revenexx\Client;
use Revenexx\Services\MarketingConsentsTypes;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$marketingConsentsTypes = new MarketingConsentsTypes($client);

$result = $marketingConsentsTypes->marketingConsentsSubscriptionTypesArchive(
    id: '',
    data: []
);```

## marketing-consents-subscription-types-restore

Bring a subscription type back out of the trash

```php
<?php

use Revenexx\Client;
use Revenexx\Services\MarketingConsentsTypes;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$marketingConsentsTypes = new MarketingConsentsTypes($client);

$result = $marketingConsentsTypes->marketingConsentsSubscriptionTypesRestore(
    id: ''
);```

## marketing-consents-subscription-types-unarchive

Bring an archived subscription type back

```php
<?php

use Revenexx\Client;
use Revenexx\Services\MarketingConsentsTypes;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$marketingConsentsTypes = new MarketingConsentsTypes($client);

$result = $marketingConsentsTypes->marketingConsentsSubscriptionTypesUnarchive(
    id: '',
    data: []
);```

## marketing-consents-vocabularies-list

List the value sets this app owns

```php
<?php

use Revenexx\Client;
use Revenexx\Services\MarketingConsentsTypes;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$marketingConsentsTypes = new MarketingConsentsTypes($client);

$result = $marketingConsentsTypes->marketingConsentsVocabulariesList();
```

## marketing-consents-vocabularies-get

Read one value set with its words

```php
<?php

use Revenexx\Client;
use Revenexx\Services\MarketingConsentsTypes;
use Revenexx\Enums\MarketingConsentsVocabulariesGetName;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$marketingConsentsTypes = new MarketingConsentsTypes($client);

$result = $marketingConsentsTypes->marketingConsentsVocabulariesGet(
    name: MarketingConsentsVocabulariesGetName::CHANNELS()
);```
