# customers.roles

## customers-permissions-ledger

Read the permission ledger

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersRoles;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersRoles = new CustomersRoles($client);

$result = $customersRoles->customersPermissionsLedger();
```

## customers-roles-list

List the customer role catalogue

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersRoles;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersRoles = new CustomersRoles($client);

$result = $customersRoles->customersRolesList();
```

## customers-roles-create

Create a customer role with its permissions

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersRoles;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersRoles = new CustomersRoles($client);

$result = $customersRoles->customersRolesCreate(
    title: 'Einkauf Zentrale',
    active: true, // optional
    description: '', // optional
    descriptions: [], // optional
    isDefault: true, // optional
    key: 'einkauf-zentrale', // optional
    labels: [], // optional
    permissions: [], // optional
    position: 1 // optional
);```

## customers-roles-defaults

Seed the built-in customer roles

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersRoles;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersRoles = new CustomersRoles($client);

$result = $customersRoles->customersRolesDefaults(
    data: []
);```

## customers-roles-update

Edit a customer role

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersRoles;
use Revenexx\Enums\Tone;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersRoles = new CustomersRoles($client);

$result = $customersRoles->customersRolesUpdate(
    key: 'einkauf-zentrale',
    active: true, // optional
    description: '', // optional
    descriptions: [], // optional
    isDefault: true, // optional
    labels: [], // optional
    position: 1, // optional
    title: 'Einkauf Zentrale', // optional
    tone: Tone::NEUTRAL() // optional
);```

## customers-roles-copy

Start a new role from an existing one

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersRoles;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersRoles = new CustomersRoles($client);

$result = $customersRoles->customersRolesCopy(
    key: 'buyer',
    title: 'Einkäufer Werk 2',
    description: '', // optional
    keyBody: '' // optional
);```

## customers-roles-permissions-replace

Replace a role's permission set

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersRoles;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersRoles = new CustomersRoles($client);

$result = $customersRoles->customersRolesPermissionsReplace(
    key: 'buyer',
    permissions: []
);```
