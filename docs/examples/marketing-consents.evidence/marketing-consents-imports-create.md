```php
<?php

use Revenexx\Client;
use Revenexx\Services\MarketingConsentsEvidence;
use Revenexx\Enums\MarketingConsentsImportsListLegalBasis;
use Revenexx\Enums\Channel;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$marketingConsentsEvidence = new MarketingConsentsEvidence($client);

$result = $marketingConsentsEvidence->marketingConsentsImportsCreate(
    legalBasis: MarketingConsentsImportsListLegalBasis::CONSENTSINGLE(),
    proofNote: 'Altsystem Shopware, Double-Opt-in-Log 2019–2026',
    rows: [],
    subscriptionType: 'newsletter',
    channel: Channel::EMAIL(), // optional
    fileRef: 'newsletter-export-2026-09.csv' // optional
);```
