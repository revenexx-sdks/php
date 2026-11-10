# locale

## locale-get

Get user locale

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Locale;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$locale = new Locale($client);

$result = $locale->localeGet();
```

## locale-list-codes

List locale codes

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Locale;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$locale = new Locale($client);

$result = $locale->localeListCodes();
```

## locale-list-continents

List continents

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Locale;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$locale = new Locale($client);

$result = $locale->localeListContinents();
```

## locale-list-countries

List countries

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Locale;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$locale = new Locale($client);

$result = $locale->localeListCountries();
```

## locale-list-countries-eu

List EU countries

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Locale;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$locale = new Locale($client);

$result = $locale->localeListCountriesEU();
```

## locale-list-countries-phones

List countries phone codes

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Locale;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$locale = new Locale($client);

$result = $locale->localeListCountriesPhones();
```

## locale-list-currencies

List currencies

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Locale;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$locale = new Locale($client);

$result = $locale->localeListCurrencies();
```

## locale-list-languages

List languages

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Locale;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$locale = new Locale($client);

$result = $locale->localeListLanguages();
```
