# carts.io

## carts-export-all

Export many carts through one profile

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CartsIo;
use Revenexx\Enums\CartExportFormat;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$cartsIo = new CartsIo($client);

$result = $cartsIo->cartsExportAll(
    contactId: '', // optional
    createdFrom: '2026-09-01', // optional
    createdTo: '2026-09-30', // optional
    cursor: '', // optional
    format: CartExportFormat::JSON(), // optional
    limit: 1, // optional
    market: 'de', // optional
    profileId: '', // optional
    status:  // optional
);```

## carts-import

Import a cart from JSON, CSV or Excel

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CartsIo;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$cartsIo = new CartsIo($client);

$result = $cartsIo->cartsImport(
    sessionKey: 'a1b2c3d4e5f6', // optional
    contactId: '', // optional
    csv: 'sku,name,quantity,unit_price
BOLT-M8-30,Hex bolt M8,100,0.12
NUT-M8,Hex nut M8,100,0.04
', // optional
    name: 'Weekly order', // optional
    organizationId: '', // optional
    payload: [
        'cart' => [
            'currency' => 'EUR',
            'name' => 'Weekly order'
        ],
        'items' => [
            '0' => [
                'name' => 'Hex bolt M8',
                'quantity' => 100,
                'sku' => 'BOLT-M8-30',
                'unit_price' => 0.12
            ]
        ]
    ], // optional
    profileId: '', // optional
    sessionKeyBody: 'a1b2c3d4e5f6', // optional
    targetCartId: '', // optional
    xlsx: 'UEsDBBQABgAIAAAAIQ…' // optional
);```

## carts-io-fields

List the fields a profile can map

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CartsIo;
use Revenexx\Enums\CartIoFieldEntity;
use Revenexx\Enums\CartIoFieldRole;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$cartsIo = new CartsIo($client);

$result = $cartsIo->cartsIoFields(
    entity: CartIoFieldEntity::CARTITEMS(), // optional
    role: CartIoFieldRole::COLUMN() // optional
);```

## carts-io-profiles-list

List import/export profiles

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CartsIo;
use Revenexx\Enums\CartIoDirection;
use Revenexx\Enums\CartIoEntity;
use Revenexx\Enums\CartIoFormat;
use Revenexx\Enums\CartIoApplyMode;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$cartsIo = new CartsIo($client);

$result = $cartsIo->cartsIoProfilesList(
    id: '', // optional
    name: 'cart-export-csv', // optional
    direction: CartIoDirection::IMPORT(), // optional
    entity: CartIoEntity::CARTS(), // optional
    format: CartIoFormat::JSON(), // optional
    applyMode: CartIoApplyMode::INSERT(), // optional
    isTemplate: true, // optional
    active: true, // optional
    createdAt: '2026-01-01T12:00:00Z', // optional
    updatedAt: '2026-01-01T12:00:00Z', // optional
    limit: 1, // optional
    offset: 1, // optional
    order: 'created_at.desc' // optional
);```

## carts-io-profiles-create

Create an import/export profile

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CartsIo;
use Revenexx\Enums\CartIoDirection;
use Revenexx\Enums\CartIoApplyMode;
use Revenexx\Enums\CartIoEntity;
use Revenexx\Enums\CartIoFormat;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$cartsIo = new CartsIo($client);

$result = $cartsIo->cartsIoProfilesCreate(
    direction: CartIoDirection::IMPORT(),
    name: 'cart-export-csv',
    active: true, // optional
    applyMode: CartIoApplyMode::INSERT(), // optional
    entity: CartIoEntity::CARTS(), // optional
    format: CartIoFormat::JSON(), // optional
    isTemplate: true, // optional
    mapping: [], // optional
    options: [] // optional
);```

## carts-io-profiles-defaults

Seed the bundled profile templates

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CartsIo;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$cartsIo = new CartsIo($client);

$result = $cartsIo->cartsIoProfilesDefaults();
```

## carts-io-profiles-delete

Delete an import/export profile

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CartsIo;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$cartsIo = new CartsIo($client);

$result = $cartsIo->cartsIoProfilesDelete(
    id: ''
);```

## carts-io-profiles-get

Read one import/export profile

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CartsIo;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$cartsIo = new CartsIo($client);

$result = $cartsIo->cartsIoProfilesGet(
    id: ''
);```

## carts-io-profiles-update

Update an import/export profile

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CartsIo;
use Revenexx\Enums\CartIoApplyMode;
use Revenexx\Enums\CartIoDirection;
use Revenexx\Enums\CartIoEntity;
use Revenexx\Enums\CartIoFormat;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$cartsIo = new CartsIo($client);

$result = $cartsIo->cartsIoProfilesUpdate(
    id: '',
    active: true, // optional
    applyMode: CartIoApplyMode::INSERT(), // optional
    direction: CartIoDirection::IMPORT(), // optional
    entity: CartIoEntity::CARTS(), // optional
    format: CartIoFormat::JSON(), // optional
    isTemplate: true, // optional
    mapping: [], // optional
    name: 'cart-export-csv', // optional
    options: [] // optional
);```

## carts-io-profiles-copy

Copy an import/export profile

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CartsIo;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$cartsIo = new CartsIo($client);

$result = $cartsIo->cartsIoProfilesCopy(
    id: '',
    name: 'my-cart-import',
    parts: [] // optional
);```

## carts-export

Export a cart as JSON, CSV or Excel

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CartsIo;
use Revenexx\Enums\CartExportFormat;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$cartsIo = new CartsIo($client);

$result = $cartsIo->cartsExport(
    id: '',
    sessionKey: 'a1b2c3d4e5f6', // optional
    format: CartExportFormat::JSON(), // optional
    profileId: '' // optional
);```
