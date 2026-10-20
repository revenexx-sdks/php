```php
<?php

use Revenexx\Client;
use Revenexx\Services\MailingsMailings;
use Revenexx\Enums\Trashed;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$mailingsMailings = new MailingsMailings($client);

$result = $mailingsMailings->mailingsMailingsList(
    limit: 50, // optional
    offset: 0, // optional
    order: 'created_at.desc', // optional
    trashed: Trashed::EXCLUDE(), // optional
    id: '', // optional
    state: '', // optional
    folder: '', // optional
    campaignRef: '', // optional
    audienceId: '', // optional
    subscriptionType: '', // optional
    templateKey: '', // optional
    starter: '', // optional
    timezoneMode: '', // optional
    duplicatedFromId: '' // optional
);```
