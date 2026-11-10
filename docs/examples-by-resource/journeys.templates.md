# journeys.templates

## journeys-templates-list

List the shipped flows

```php
<?php

use Revenexx\Client;
use Revenexx\Services\JourneysTemplates;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$journeysTemplates = new JourneysTemplates($client);

$result = $journeysTemplates->journeysTemplatesList(
    limit: 50, // optional
    offset: 0, // optional
    order: 'created_at.desc', // optional
    id: '', // optional
    code: '', // optional
    tier: '', // optional
    triggerKind: '', // optional
    position: '', // optional
    active: '' // optional
);```

## journeys-templates-copy

Copy a template into a new draft journey

```php
<?php

use Revenexx\Client;
use Revenexx\Services\JourneysTemplates;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$journeysTemplates = new JourneysTemplates($client);

$result = $journeysTemplates->journeysTemplatesCopy(
    code: '',
    name: '' // optional
);```

## journeys-templates-get

Read one template

```php
<?php

use Revenexx\Client;
use Revenexx\Services\JourneysTemplates;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$journeysTemplates = new JourneysTemplates($client);

$result = $journeysTemplates->journeysTemplatesGet(
    id: ''
);```
