# avatars

## avatars-get-browser

Get browser icon

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Avatars;
use Revenexx\Enums\Code;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$avatars = new Avatars($client);

$result = $avatars->avatarsGetBrowser(
    code: Code::AA(),
    width: 1, // optional
    height: 1, // optional
    quality: 1 // optional
);```

## avatars-get-credit-card

Get credit card icon

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Avatars;
use Revenexx\Enums\AvatarsGetCreditCardCode;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$avatars = new Avatars($client);

$result = $avatars->avatarsGetCreditCard(
    code: AvatarsGetCreditCardCode::AMEX(),
    width: 1, // optional
    height: 1, // optional
    quality: 1 // optional
);```

## avatars-get-flag

Get country flag

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Avatars;
use Revenexx\Enums\AvatarsGetFlagCode;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$avatars = new Avatars($client);

$result = $avatars->avatarsGetFlag(
    code: AvatarsGetFlagCode::AF(),
    width: 1, // optional
    height: 1, // optional
    quality: 1 // optional
);```

## avatars-get-image

Get image from URL

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Avatars;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$avatars = new Avatars($client);

$result = $avatars->avatarsGetImage(
    url: 'https://www.revenexx.com/img/hero-revenexx-poster.webp',
    width: 1, // optional
    height: 1 // optional
);```

## avatars-get-initials

Get user initials

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Avatars;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$avatars = new Avatars($client);

$result = $avatars->avatarsGetInitials(
    name: 'Ada Lovelace', // optional
    width: 1, // optional
    height: 1, // optional
    background: '1a73e8' // optional
);```

## avatars-get-qr

Get QR code

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Avatars;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$avatars = new Avatars($client);

$result = $avatars->avatarsGetQR(
    text: '',
    size: 1, // optional
    margin: 1, // optional
    download: true // optional
);```

## avatars-get-screenshot

Get webpage screenshot

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Avatars;
use Revenexx\Enums\Theme;
use Revenexx\Enums\Timezone;
use Revenexx\Enums\Permissions;
use Revenexx\Enums\Output;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$avatars = new Avatars($client);

$result = $avatars->avatarsGetScreenshot(
    url: 'https://example.com',
    headers: [], // optional
    viewportWidth: 1, // optional
    viewportHeight: 1, // optional
    scale: 1, // optional
    theme: Theme::LIGHT(), // optional
    userAgent: 'Mozilla/5.0 (iPhone; CPU iPhone OS 14_0 like Mac OS X) AppleWebKit/605.1.15', // optional
    fullpage: true, // optional
    locale: 'en-US', // optional
    timezone: Timezone::AFRICAABIDJAN(), // optional
    latitude: 9.99, // optional
    longitude: 9.99, // optional
    accuracy: 9.99, // optional
    touch: true, // optional
    permissions: [Permissions::GEOLOCATION()], // optional
    sleep: 1, // optional
    width: 1, // optional
    height: 1, // optional
    quality: 1, // optional
    output: Output::JPG() // optional
);```
