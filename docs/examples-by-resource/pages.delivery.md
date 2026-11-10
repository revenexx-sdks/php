# pages.delivery

## pages-delivery-menus

List navigation menus for the renderer

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PagesDelivery;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$pagesDelivery = new PagesDelivery($client);

$result = $pagesDelivery->pagesDeliveryMenus(
    limit: 1, // optional
    offset: 1, // optional
    order: 'created_at.desc' // optional
);```

## pages-delivery-page

Resolve a published page by slug or id

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PagesDelivery;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$pagesDelivery = new PagesDelivery($client);

$result = $pagesDelivery->pagesDeliveryPage(
    slug: 'about-us', // optional
    id: '', // optional
    langcode: 'de', // optional
    audiences: 'newsletter-de,stammkunden', // optional
    consents: 'marketing,analytics' // optional
);```

## pages-delivery-pages

List published pages

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PagesDelivery;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$pagesDelivery = new PagesDelivery($client);

$result = $pagesDelivery->pagesDeliveryPages(
    limit: 1, // optional
    offset: 1, // optional
    order: 'created_at.desc', // optional
    bundle: 'standard' // optional
);```

## pages-delivery-popups

List the pop-ups a visitor may see

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PagesDelivery;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$pagesDelivery = new PagesDelivery($client);

$result = $pagesDelivery->pagesDeliveryPopups(
    langcode: 'de', // optional
    audiences: 'newsletter-de,stammkunden', // optional
    consents: 'marketing,analytics' // optional
);```

## pages-delivery-preview

Resolve a preview token to a page

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PagesDelivery;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$pagesDelivery = new PagesDelivery($client);

$result = $pagesDelivery->pagesDeliveryPreview(
    token: '',
    langcode: 'de' // optional
);```

## pages-delivery-site-settings

Read the site settings for rendering

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PagesDelivery;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$pagesDelivery = new PagesDelivery($client);

$result = $pagesDelivery->pagesDeliverySiteSettings();
```

## pages-delivery-template

Resolve the template page of a record

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PagesDelivery;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$pagesDelivery = new PagesDelivery($client);

$result = $pagesDelivery->pagesDeliveryTemplate(
    type: 'product', // optional
    id: '5137' // optional
);```
