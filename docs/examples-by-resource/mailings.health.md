# mailings.health

## mailings-health-read

Read the sending health of the last 30 days

```php
<?php

use Revenexx\Client;
use Revenexx\Services\MailingsHealth;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$mailingsHealth = new MailingsHealth($client);

$result = $mailingsHealth->mailingsHealthRead();
```
