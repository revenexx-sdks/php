```php
<?php

use Revenexx\Client;
use Revenexx\Services\Messaging;
use Revenexx\Enums\MessageClass;
use Revenexx\Enums\WhatsappCategory;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$messaging = new Messaging($client);

$result = $messaging->templateStore(
    channel: '',
    key: '',
    bodyHtml: '', // optional
    bodyText: '', // optional
    contentSid: '', // optional
    design: [], // optional
    enabled: true, // optional
    layoutId: '', // optional
    locale: '', // optional
    markets: [], // optional
    messageClass: MessageClass::TRANSACTIONAL(), // optional
    subject: '', // optional
    testMode: true, // optional
    title: '', // optional
    validFrom: '2026-01-01T12:00:00Z', // optional
    validUntil: '2026-01-01T12:00:00Z', // optional
    variableDefaults: [], // optional
    variables: [], // optional
    whatsappCategory: WhatsappCategory::MARKETING() // optional
);```
