```php
<?php

use Revenexx\Client;
use Revenexx\Services\Punchout;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$punchout = new Punchout($client);

$result = $punchout->punchoutAccountsCreate(
    channelCode: '',
    code: '',
    name: '',
    protocol: '',
    authStrategy: '', // optional
    behaviour: [], // optional
    credentialDomain: '', // optional
    credentialIdentity: '', // optional
    credentialSecret: '', // optional
    enabled: true, // optional
    fallbackContactId: '', // optional
    idsCustomerName: '', // optional
    loginToken: '', // optional
    organizationId: '', // optional
    protocolVersion: '', // optional
    secureOci: true, // optional
    sessionTtlMinutes: 1, // optional
    sharedSecret: '', // optional
    startPageUrl: '', // optional
    unknownUserPolicy: '', // optional
    urlThreading: true // optional
);```
