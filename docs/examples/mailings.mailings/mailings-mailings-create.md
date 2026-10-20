```php
<?php

use Revenexx\Client;
use Revenexx\Services\MailingsMailings;
use Revenexx\Enums\Starter;
use Revenexx\Enums\TimezoneMode;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$mailingsMailings = new MailingsMailings($client);

$result = $mailingsMailings->mailingsMailingsCreate(
    name: '',
    audienceId: '', // optional
    campaignRef: '', // optional
    currency: '', // optional
    excludeAudienceIds: [], // optional
    graymail: true, // optional
    graymailSends: 1, // optional
    metadata: , // optional
    previewText: '', // optional
    replyTo: '', // optional
    sendAt: '2026-01-01T12:00:00Z', // optional
    sender: '', // optional
    senderName: '', // optional
    starter: Starter::BLANK(), // optional
    subject: '', // optional
    subscriptionType: '', // optional
    templateKey: '', // optional
    timezoneMode: TimezoneMode::TENANT(), // optional
    voucherBatchId: '' // optional
);```
