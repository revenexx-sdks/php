# markets

## markets-list

List markets

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Markets;
use Revenexx\Enums\MarketsListStatus;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$markets = new Markets($client);

$result = $markets->marketsList(
    id: '', // optional
    code: 'northwind', // optional
    name: 'Northwind', // optional
    labels: '{"de-DE":"Nordwind","en-GB":"Northwind"}', // optional
    currency: 'EUR', // optional
    shipFromCountry: 'DE', // optional
    shipFromCountryReview: false, // optional
    status: MarketsListStatus::ACTIVE(), // optional
    isDefault: false, // optional
    position: 0, // optional
    createdAt: '2026-01-01T12:00:00Z', // optional
    updatedAt: '2026-01-01T12:00:00Z', // optional
    limit: 50, // optional
    offset: 0, // optional
    order: 'position.asc' // optional
);```

## markets-create

Create a market

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Markets;
use Revenexx\Enums\MarketStatus;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$markets = new Markets($client);

$result = $markets->marketsCreate(
    code: 'northwind',
    name: 'Northwind',
    currency: 'EUR', // optional
    isDefault: false, // optional
    labels: [
        'de-DE' => 'Nordwind',
        'en-GB' => 'Northwind'
    ], // optional
    position: 0, // optional
    shipFromCountry: 'DE', // optional
    shipFromCountryReview: false, // optional
    status: MarketStatus::ACTIVE() // optional
);```

## markets-defaults

Store the settings this app needs stored

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Markets;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$markets = new Markets($client);

$result = $markets->marketsDefaults(
    data: []
);```

## markets-locale-policy

Read the tenant-wide locale policy

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Markets;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$markets = new Markets($client);

$result = $markets->marketsLocalePolicy();
```

## markets-setup

Read the setup checklist

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Markets;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$markets = new Markets($client);

$result = $markets->marketsSetup();
```

## markets-vocabularies

List vocabularies

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Markets;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$markets = new Markets($client);

$result = $markets->marketsVocabularies();
```

## markets-vocabulary

Read one vocabulary with its values

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Markets;
use Revenexx\Enums\MarketsVocabularyName;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$markets = new Markets($client);

$result = $markets->marketsVocabulary(
    name: MarketsVocabularyName::MARKETSTATUSES()
);```

## markets-delete

Delete a market by id

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Markets;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$markets = new Markets($client);

$result = $markets->marketsDelete(
    id: ''
);```

## markets-get

Read one market by id

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Markets;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$markets = new Markets($client);

$result = $markets->marketsGet(
    id: ''
);```

## markets-update

Update a market by id

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Markets;
use Revenexx\Enums\MarketStatus;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$markets = new Markets($client);

$result = $markets->marketsUpdate(
    id: '',
    code: 'northwind', // optional
    currency: 'EUR', // optional
    isDefault: false, // optional
    labels: [
        'de-DE' => 'Nordwind',
        'en-GB' => 'Northwind'
    ], // optional
    name: 'Northwind', // optional
    position: 0, // optional
    shipFromCountry: 'DE', // optional
    shipFromCountryReview: false, // optional
    status: MarketStatus::ACTIVE() // optional
);```

## markets-backfill

Fill a market's gaps from another market

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Markets;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$markets = new Markets($client);

$result = $markets->marketsBackfill(
    id: 'northwind',
    source: 'northwind',
    currencies: true, // optional
    locales: true, // optional
    taxClasses: true // optional
);```

## markets-clone

Clone a market

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Markets;
use Revenexx\Enums\MarketStatus;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$markets = new Markets($client);

$result = $markets->marketsClone(
    id: 'northwind',
    code: 'northwind_b2b',
    copyCurrencies: true, // optional
    copyLocales: true, // optional
    copyTaxClasses: true, // optional
    currency: 'EUR', // optional
    name: 'Northwind B2B', // optional
    shipFromCountry: 'DE', // optional
    status: MarketStatus::ACTIVE() // optional
);```

## markets-confirm-ship-from

Confirm the ship-from country of a market

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Markets;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$markets = new Markets($client);

$result = $markets->marketsConfirmShipFrom(
    id: 'northwind',
    data: []
);```

## markets-context

Resolve the full market context

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Markets;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$markets = new Markets($client);

$result = $markets->marketsContext(
    id: ''
);```

## markets-make-default

Make this market the tenant default

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Markets;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$markets = new Markets($client);

$result = $markets->marketsMakeDefault(
    id: 'northwind',
    data: []
);```

## markets-readiness

Check whether a market can trade

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Markets;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$markets = new Markets($client);

$result = $markets->marketsReadiness(
    id: 'northwind'
);```

## markets-currencies-list

List currencies of a market

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Markets;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$markets = new Markets($client);

$result = $markets->marketsCurrenciesList(
    marketId: '',
    id: '', // optional
    code: 'EUR', // optional
    isDefault: true, // optional
    active: true, // optional
    position: 0, // optional
    createdAt: '2026-01-01T12:00:00Z', // optional
    updatedAt: '2026-01-01T12:00:00Z', // optional
    limit: 50, // optional
    offset: 0, // optional
    order: 'position.asc' // optional
);```

## markets-currencies-create

Create a currency of a market

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Markets;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$markets = new Markets($client);

$result = $markets->marketsCurrenciesCreate(
    marketId: '',
    code: 'EUR',
    active: true, // optional
    isDefault: true, // optional
    position: 0 // optional
);```

## markets-currencies-delete

Delete a currency of a market by id

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Markets;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$markets = new Markets($client);

$result = $markets->marketsCurrenciesDelete(
    marketId: '',
    id: ''
);```

## markets-currencies-get

Read one currency of a market by id

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Markets;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$markets = new Markets($client);

$result = $markets->marketsCurrenciesGet(
    marketId: '',
    id: ''
);```

## markets-currencies-update

Update a currency of a market by id

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Markets;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$markets = new Markets($client);

$result = $markets->marketsCurrenciesUpdate(
    marketId: '',
    id: '',
    active: true, // optional
    code: 'EUR', // optional
    isDefault: true, // optional
    position: 0 // optional
);```

## markets-locales-list

List locales of a market

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Markets;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$markets = new Markets($client);

$result = $markets->marketsLocalesList(
    marketId: '',
    id: '', // optional
    code: 'de-DE', // optional
    language: 'de', // optional
    country: 'DE', // optional
    isDefault: true, // optional
    position: 0, // optional
    status: 'active', // optional
    createdAt: '2026-01-01T12:00:00Z', // optional
    updatedAt: '2026-01-01T12:00:00Z', // optional
    limit: 50, // optional
    offset: 0, // optional
    order: 'position.asc' // optional
);```

## markets-locales-create

Create a locale of a market

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Markets;
use Revenexx\Enums\MarketsLocalesCreateStatus;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$markets = new Markets($client);

$result = $markets->marketsLocalesCreate(
    marketId: '',
    code: 'de-DE',
    country: 'DE', // optional
    isDefault: true, // optional
    language: 'de', // optional
    position: 0, // optional
    status: MarketsLocalesCreateStatus::ACTIVE() // optional
);```

## markets-locales-delete

Delete a locale of a market by id

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Markets;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$markets = new Markets($client);

$result = $markets->marketsLocalesDelete(
    marketId: '',
    id: ''
);```

## markets-locales-get

Read one locale of a market by id

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Markets;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$markets = new Markets($client);

$result = $markets->marketsLocalesGet(
    marketId: '',
    id: ''
);```

## markets-locales-update

Update a locale of a market by id

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Markets;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$markets = new Markets($client);

$result = $markets->marketsLocalesUpdate(
    marketId: '',
    id: '',
    code: 'de-DE', // optional
    country: 'DE', // optional
    isDefault: true, // optional
    language: 'de', // optional
    position: 0, // optional
    status: 'active' // optional
);```

## markets-tax-classes-list

List tax classes of a market

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Markets;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$markets = new Markets($client);

$result = $markets->marketsTaxClassesList(
    marketId: '',
    id: '', // optional
    code: 'standard', // optional
    name: 'Standard rate', // optional
    labels: '{"de-DE":"Regelsatz","en-GB":"Standard rate"}', // optional
    rate: 20, // optional
    isDefault: true, // optional
    active: true, // optional
    position: 0, // optional
    createdAt: '2026-01-01T12:00:00Z', // optional
    updatedAt: '2026-01-01T12:00:00Z', // optional
    limit: 50, // optional
    offset: 0, // optional
    order: 'position.asc' // optional
);```

## markets-tax-classes-create

Create a tax class of a market

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Markets;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$markets = new Markets($client);

$result = $markets->marketsTaxClassesCreate(
    marketId: '',
    code: 'standard',
    name: 'Standard rate',
    active: true, // optional
    isDefault: true, // optional
    labels: [
        'de-DE' => 'Regelsatz',
        'en-GB' => 'Standard rate'
    ], // optional
    position: 0, // optional
    rate: 20 // optional
);```

## markets-tax-classes-delete

Delete a tax class of a market by id

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Markets;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$markets = new Markets($client);

$result = $markets->marketsTaxClassesDelete(
    marketId: '',
    id: ''
);```

## markets-tax-classes-get

Read one tax class of a market by id

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Markets;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$markets = new Markets($client);

$result = $markets->marketsTaxClassesGet(
    marketId: '',
    id: ''
);```

## markets-tax-classes-update

Update a tax class of a market by id

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Markets;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$markets = new Markets($client);

$result = $markets->marketsTaxClassesUpdate(
    marketId: '',
    id: '',
    active: true, // optional
    code: 'standard', // optional
    isDefault: true, // optional
    labels: [
        'de-DE' => 'Regelsatz',
        'en-GB' => 'Standard rate'
    ], // optional
    name: 'Standard rate', // optional
    position: 0, // optional
    rate: 20 // optional
);```
