# shipping.value-lists

## shipping-service-levels-list

The service levels this tenant keeps

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ShippingValueLists;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$shippingValueLists = new ShippingValueLists($client);

$result = $shippingValueLists->shippingServiceLevelsList(
    limit: 1, // optional
    offset: 1, // optional
    active: true // optional
);```

## shipping-service-levels-create

Add a service level

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ShippingValueLists;
use Revenexx\Enums\Tone;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$shippingValueLists = new ShippingValueLists($client);

$result = $shippingValueLists->shippingServiceLevelsCreate(
    code: 'night_courier',
    title: 'Night courier',
    active: true, // optional
    description: 'When to pick this service level.', // optional
    descriptions: [
        'de' => 'Wann diese Option zu wählen ist.',
        'en' => 'When to pick this service level.'
    ], // optional
    isDefault: true, // optional
    labels: [
        'de' => 'Night courier',
        'en' => 'Night courier'
    ], // optional
    position: 1, // optional
    tone: Tone::NEUTRAL() // optional
);```

## shipping-service-levels-delete

Remove a service level no carrier uses

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ShippingValueLists;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$shippingValueLists = new ShippingValueLists($client);

$result = $shippingValueLists->shippingServiceLevelsDelete(
    id: ''
);```

## shipping-service-levels-get

Read one service level

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ShippingValueLists;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$shippingValueLists = new ShippingValueLists($client);

$result = $shippingValueLists->shippingServiceLevelsGet(
    id: ''
);```

## shipping-service-levels-update

Rename a service level or move it in the order

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ShippingValueLists;
use Revenexx\Enums\Tone;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$shippingValueLists = new ShippingValueLists($client);

$result = $shippingValueLists->shippingServiceLevelsUpdate(
    id: '',
    active: true, // optional
    description: 'When to pick this service level.', // optional
    descriptions: [
        'de' => 'Wann diese Option zu wählen ist.',
        'en' => 'When to pick this service level.'
    ], // optional
    isDefault: true, // optional
    labels: [
        'de' => 'Night courier',
        'en' => 'Night courier'
    ], // optional
    position: 1, // optional
    title: 'Night courier', // optional
    tone: Tone::NEUTRAL() // optional
);```

## shipping-service-levels-make-default

Make this the default service level

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ShippingValueLists;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$shippingValueLists = new ShippingValueLists($client);

$result = $shippingValueLists->shippingServiceLevelsMakeDefault(
    id: '',
    data: []
);```

## shipping-vocabularies-list

List vocabularies

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ShippingValueLists;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$shippingValueLists = new ShippingValueLists($client);

$result = $shippingValueLists->shippingVocabulariesList();
```

## shipping-vocabularies-get

Read one vocabulary

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ShippingValueLists;
use Revenexx\Enums\ShippingVocabulariesGetName;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$shippingValueLists = new ShippingValueLists($client);

$result = $shippingValueLists->shippingVocabulariesGet(
    name: ShippingVocabulariesGetName::CARRIERSTATUSES()
);```

## shipping-weight-units-list

The weight units this tenant quotes in

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ShippingValueLists;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$shippingValueLists = new ShippingValueLists($client);

$result = $shippingValueLists->shippingWeightUnitsList(
    limit: 1, // optional
    offset: 1, // optional
    active: true // optional
);```

## shipping-weight-units-create

Add a weight unit

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ShippingValueLists;
use Revenexx\Enums\Tone;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$shippingValueLists = new ShippingValueLists($client);

$result = $shippingValueLists->shippingWeightUnitsCreate(
    code: 't',
    factor: 1000,
    title: 'Tonne',
    active: true, // optional
    description: 'When to pick this weight unit.', // optional
    descriptions: [
        'de' => 'Wann diese Option zu wählen ist.',
        'en' => 'When to pick this weight unit.'
    ], // optional
    isDefault: true, // optional
    labels: [
        'de' => 'Tonne',
        'en' => 'Tonne'
    ], // optional
    position: 1, // optional
    tone: Tone::NEUTRAL() // optional
);```

## shipping-weight-units-delete

Remove a weight unit nothing quotes in

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ShippingValueLists;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$shippingValueLists = new ShippingValueLists($client);

$result = $shippingValueLists->shippingWeightUnitsDelete(
    id: ''
);```

## shipping-weight-units-get

Read one weight unit

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ShippingValueLists;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$shippingValueLists = new ShippingValueLists($client);

$result = $shippingValueLists->shippingWeightUnitsGet(
    id: ''
);```

## shipping-weight-units-update

Rename a weight unit or correct its factor

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ShippingValueLists;
use Revenexx\Enums\Tone;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$shippingValueLists = new ShippingValueLists($client);

$result = $shippingValueLists->shippingWeightUnitsUpdate(
    id: '',
    active: true, // optional
    description: 'When to pick this weight unit.', // optional
    descriptions: [
        'de' => 'Wann diese Option zu wählen ist.',
        'en' => 'When to pick this weight unit.'
    ], // optional
    factor: 1000, // optional
    isDefault: true, // optional
    labels: [
        'de' => 'Tonne',
        'en' => 'Tonne'
    ], // optional
    position: 1, // optional
    title: 'Tonne', // optional
    tone: Tone::NEUTRAL() // optional
);```

## shipping-weight-units-make-base

Make this the base weight unit

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ShippingValueLists;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$shippingValueLists = new ShippingValueLists($client);

$result = $shippingValueLists->shippingWeightUnitsMakeBase(
    id: '',
    data: []
);```

## shipping-weight-units-make-default

Make this the default weight unit

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ShippingValueLists;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$shippingValueLists = new ShippingValueLists($client);

$result = $shippingValueLists->shippingWeightUnitsMakeDefault(
    id: '',
    data: []
);```
