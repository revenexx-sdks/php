```php
<?php

use Revenexx\Client;
use Revenexx\Services\MailingsRecipients;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$mailingsRecipients = new MailingsRecipients($client);

$result = $mailingsRecipients->mailingsRecipientsList(
    limit: 50, // optional
    offset: 0, // optional
    order: 'created_at.desc', // optional
    id: '', // optional
    mailingId: '', // optional
    contactId: '', // optional
    email: '', // optional
    outcome: '', // optional
    reason: '', // optional
    market: '', // optional
    messageId: '' // optional
);```
