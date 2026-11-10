# consent-manager.registry

## consent-manager-catalog-list

List the shipped vendor catalogue

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ConsentManagerRegistry;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$consentManagerRegistry = new ConsentManagerRegistry($client);

$result = $consentManagerRegistry->consentManagerCatalogList(
    category: 'analytics' // optional
);```

## consent-manager-catalog-adopt

Copy a catalogue vendor into this tenant

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ConsentManagerRegistry;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$consentManagerRegistry = new ConsentManagerRegistry($client);

$result = $consentManagerRegistry->consentManagerCatalogAdopt(
    key: 'etracker',
    purposes: ["statistics"], // optional
    refresh: true // optional
);```

## consent-manager-cookies-list

List cookies and storage entries

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ConsentManagerRegistry;
use Revenexx\Enums\ConsentManagerCookiesListKind;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$consentManagerRegistry = new ConsentManagerRegistry($client);

$result = $consentManagerRegistry->consentManagerCookiesList(
    id: '', // optional
    vendorId: '', // optional
    name: '_ga', // optional
    kind: ConsentManagerCookiesListKind::COOKIE(), // optional
    host: 'first-party', // optional
    position: 1, // optional
    createdAt: '2026-01-01T12:00:00Z', // optional
    updatedAt: '2026-01-01T12:00:00Z', // optional
    limit: 50, // optional
    offset: 0, // optional
    order: 'created_at.desc' // optional
);```

## consent-manager-cookies-create

Declare a cookie under a vendor

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ConsentManagerRegistry;
use Revenexx\Enums\ConsentManagerCookiesListKind;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$consentManagerRegistry = new ConsentManagerRegistry($client);

$result = $consentManagerRegistry->consentManagerCookiesCreate(
    name: '_ga',
    vendorId: '',
    description: [], // optional
    duration: [
        'de' => '2 Jahre',
        'en' => '2 years'
    ], // optional
    host: 'first-party', // optional
    kind: ConsentManagerCookiesListKind::COOKIE(), // optional
    position: 1 // optional
);```

## consent-manager-cookies-delete

Remove a cookie

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ConsentManagerRegistry;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$consentManagerRegistry = new ConsentManagerRegistry($client);

$result = $consentManagerRegistry->consentManagerCookiesDelete(
    id: ''
);```

## consent-manager-cookies-get

Read one cookie

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ConsentManagerRegistry;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$consentManagerRegistry = new ConsentManagerRegistry($client);

$result = $consentManagerRegistry->consentManagerCookiesGet(
    id: ''
);```

## consent-manager-cookies-update

Edit a cookie

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ConsentManagerRegistry;
use Revenexx\Enums\ConsentManagerCookiesListKind;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$consentManagerRegistry = new ConsentManagerRegistry($client);

$result = $consentManagerRegistry->consentManagerCookiesUpdate(
    id: '',
    description: [], // optional
    duration: [
        'de' => '2 Jahre',
        'en' => '2 years'
    ], // optional
    host: 'first-party', // optional
    kind: ConsentManagerCookiesListKind::COOKIE(), // optional
    name: '_ga', // optional
    position: 1, // optional
    vendorId: '' // optional
);```

## consent-manager-defaults-run

Seed the five purposes and the default banner

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ConsentManagerRegistry;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$consentManagerRegistry = new ConsentManagerRegistry($client);

$result = $consentManagerRegistry->consentManagerDefaultsRun(
    data: []
);```

## consent-manager-purposes-list

List the purposes and their legal basis

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ConsentManagerRegistry;
use Revenexx\Enums\LegalBasis;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$consentManagerRegistry = new ConsentManagerRegistry($client);

$result = $consentManagerRegistry->consentManagerPurposesList(
    id: '', // optional
    code: 'statistics', // optional
    legalBasis: LegalBasis::CONSENT(), // optional
    position: 1, // optional
    isActive: true, // optional
    isSystem: true, // optional
    createdAt: '2026-01-01T12:00:00Z', // optional
    updatedAt: '2026-01-01T12:00:00Z', // optional
    limit: 50, // optional
    offset: 0, // optional
    order: 'created_at.desc' // optional
);```

## consent-manager-purposes-create

Add a purpose

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ConsentManagerRegistry;
use Revenexx\Enums\LegalBasis;
use Revenexx\Enums\GoogleSignals;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$consentManagerRegistry = new ConsentManagerRegistry($client);

$result = $consentManagerRegistry->consentManagerPurposesCreate(
    code: 'statistics',
    legalBasis: LegalBasis::CONSENT(),
    name: [
        'de' => 'Statistik',
        'en' => 'Statistics'
    ],
    description: [], // optional
    googleSignals: [GoogleSignals::ANALYTICSSTORAGE()], // optional
    isActive: true, // optional
    position: 1 // optional
);```

## consent-manager-purposes-delete

Remove a purpose no vendor serves

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ConsentManagerRegistry;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$consentManagerRegistry = new ConsentManagerRegistry($client);

$result = $consentManagerRegistry->consentManagerPurposesDelete(
    id: ''
);```

## consent-manager-purposes-get

Read one purpose

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ConsentManagerRegistry;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$consentManagerRegistry = new ConsentManagerRegistry($client);

$result = $consentManagerRegistry->consentManagerPurposesGet(
    id: ''
);```

## consent-manager-purposes-update

Edit a purpose; its code is fixed

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ConsentManagerRegistry;
use Revenexx\Enums\GoogleSignals;
use Revenexx\Enums\LegalBasis;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$consentManagerRegistry = new ConsentManagerRegistry($client);

$result = $consentManagerRegistry->consentManagerPurposesUpdate(
    id: '',
    code: 'statistics', // optional
    description: [], // optional
    googleSignals: [GoogleSignals::ANALYTICSSTORAGE()], // optional
    isActive: true, // optional
    legalBasis: LegalBasis::CONSENT(), // optional
    name: [
        'de' => 'Statistik',
        'en' => 'Statistics'
    ], // optional
    position: 1 // optional
);```

## consent-manager-vendors-list

List the vendors, flagged when the catalogue is newer

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ConsentManagerRegistry;
use Revenexx\Enums\LegalBasisOverride;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$consentManagerRegistry = new ConsentManagerRegistry($client);

$result = $consentManagerRegistry->consentManagerVendorsList(
    id: '', // optional
    code: 'google-analytics', // optional
    name: 'Google Analytics 4', // optional
    category: 'analytics', // optional
    company: 'Google Ireland Limited', // optional
    address: 'Gordon House, Barrow Street, Dublin 4, Ireland', // optional
    country: 'IE', // optional
    privacyPolicyUrl: 'https://policies.google.com/privacy', // optional
    dpaUrl: 'https://business.safety.google/adsprocessorterms/', // optional
    thirdCountryTransfer: true, // optional
    transferBasis: 'EU-US Data Privacy Framework; standard contractual clauses', // optional
    registryKey: 'googleAnalytics', // optional
    logo: 'data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciLz4=', // optional
    legalBasisOverride: LegalBasisOverride::CONSENT(), // optional
    catalogKey: 'google-analytics', // optional
    catalogVersion: '2026.10.1', // optional
    position: 1, // optional
    isActive: true, // optional
    createdAt: '2026-01-01T12:00:00Z', // optional
    updatedAt: '2026-01-01T12:00:00Z', // optional
    limit: 50, // optional
    offset: 0, // optional
    order: 'created_at.desc' // optional
);```

## consent-manager-vendors-create

Declare a vendor

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ConsentManagerRegistry;
use Revenexx\Enums\LegalBasisOverride;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$consentManagerRegistry = new ConsentManagerRegistry($client);

$result = $consentManagerRegistry->consentManagerVendorsCreate(
    code: 'google-analytics',
    name: 'Google Analytics 4',
    address: 'Gordon House, Barrow Street, Dublin 4, Ireland', // optional
    category: 'analytics', // optional
    chains: ["google-analytics"], // optional
    company: 'Google Ireland Limited', // optional
    country: 'IE', // optional
    description: [], // optional
    dpaUrl: 'https://business.safety.google/adsprocessorterms/', // optional
    hosts: ["www.google-analytics.com"], // optional
    isActive: true, // optional
    legalBasisOverride: LegalBasisOverride::LEGITIMATEINTEREST(), // optional
    logo: 'data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciLz4=', // optional
    position: 1, // optional
    privacyPolicyUrl: 'https://policies.google.com/privacy', // optional
    purposes: ["statistics"], // optional
    registryKey: 'googleAnalytics', // optional
    retentionNote: [], // optional
    thirdCountryTransfer: true, // optional
    transferBasis: 'EU-US Data Privacy Framework; standard contractual clauses' // optional
);```

## consent-manager-vendors-delete

Remove a vendor with its cookies and purpose links

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ConsentManagerRegistry;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$consentManagerRegistry = new ConsentManagerRegistry($client);

$result = $consentManagerRegistry->consentManagerVendorsDelete(
    id: ''
);```

## consent-manager-vendors-get

Read one vendor with its purposes and cookies

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ConsentManagerRegistry;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$consentManagerRegistry = new ConsentManagerRegistry($client);

$result = $consentManagerRegistry->consentManagerVendorsGet(
    id: ''
);```

## consent-manager-vendors-update

Edit a vendor; its code is fixed

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ConsentManagerRegistry;
use Revenexx\Enums\LegalBasisOverride;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$consentManagerRegistry = new ConsentManagerRegistry($client);

$result = $consentManagerRegistry->consentManagerVendorsUpdate(
    id: '',
    address: 'Gordon House, Barrow Street, Dublin 4, Ireland', // optional
    category: 'analytics', // optional
    chains: ["google-analytics"], // optional
    code: 'google-analytics', // optional
    company: 'Google Ireland Limited', // optional
    country: 'IE', // optional
    description: [], // optional
    dpaUrl: 'https://business.safety.google/adsprocessorterms/', // optional
    hosts: ["www.google-analytics.com"], // optional
    isActive: true, // optional
    legalBasisOverride: LegalBasisOverride::LEGITIMATEINTEREST(), // optional
    logo: 'data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciLz4=', // optional
    name: 'Google Analytics 4', // optional
    position: 1, // optional
    privacyPolicyUrl: 'https://policies.google.com/privacy', // optional
    purposes: ["statistics"], // optional
    registryKey: 'googleAnalytics', // optional
    retentionNote: [], // optional
    thirdCountryTransfer: true, // optional
    transferBasis: 'EU-US Data Privacy Framework; standard contractual clauses' // optional
);```

## consent-manager-vocabularies-list

List the value sets this app owns

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ConsentManagerRegistry;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$consentManagerRegistry = new ConsentManagerRegistry($client);

$result = $consentManagerRegistry->consentManagerVocabulariesList();
```

## consent-manager-vocabularies-get

Read one value set in full

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ConsentManagerRegistry;
use Revenexx\Enums\ConsentManagerVocabulariesGetName;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$consentManagerRegistry = new ConsentManagerRegistry($client);

$result = $consentManagerRegistry->consentManagerVocabulariesGet(
    name: ConsentManagerVocabulariesGetName::LEGALBASES()
);```
