```php
<?php

use Revenexx\Client;
use Revenexx\Services\Sites;
use Revenexx\Enums\SitesCreateTemplateDeploymentType;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$sites = new Sites($client);

$result = $sites->sitesCreateVcsDeployment(
    siteId: '',
    reference: 'main',
    type: SitesCreateTemplateDeploymentType::BRANCH(),
    activate: true // optional
);```
