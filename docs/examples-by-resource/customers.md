# customers

## customers-auth-handoff

Sign a buyer in for a trusted app

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Customers;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customers = new Customers($client);

$result = $customers->customersAuthHandoff(
    handoffKey: '',
    contactId: '', // optional
    email: 'einkauf@example.com' // optional
);```

## customers-auth-login

Create a platform session

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Customers;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customers = new Customers($client);

$result = $customers->customersAuthLogin(
    password: '',
    email: 'einkauf@example.com', // optional
    identifier: 'einkauf@example.com' // optional
);```

## customers-auth-logout

Revoke a platform session

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Customers;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customers = new Customers($client);

$result = $customers->customersAuthLogout(
    sessionId: '',
    userId: ''
);```

## customers-auth-magic-link

Send a sign-in link

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Customers;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customers = new Customers($client);

$result = $customers->customersAuthMagicLink(
    email: 'einkauf@example.com',
    url: 'https://example.com'
);```

## customers-auth-magic-link-confirm

Sign in with a mailed link

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Customers;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customers = new Customers($client);

$result = $customers->customersAuthMagicLinkConfirm(
    secret: '',
    userId: ''
);```

## customers-auth-me

Resolve the signed-in buyer

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Customers;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customers = new Customers($client);

$result = $customers->customersAuthMe(
    sessionId: '',
    userId: ''
);```

## customers-auth-mfa-challenge

Send a second-factor code

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Customers;
use Revenexx\Enums\Factor;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customers = new Customers($client);

$result = $customers->customersAuthMfaChallenge(
    userId: '',
    factor: Factor::EMAIL() // optional
);```

## customers-auth-mfa-challenge-confirm

Answer a second-factor challenge

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Customers;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customers = new Customers($client);

$result = $customers->customersAuthMfaChallengeConfirm(
    challengeId: '',
    code: '',
    sessionSecret: '',
    userId: '' // optional
);```

## customers-auth-otp

Send a sign-in code

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Customers;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customers = new Customers($client);

$result = $customers->customersAuthOtp(
    email: 'einkauf@example.com'
);```

## customers-auth-otp-confirm

Sign in with a mailed code

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Customers;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customers = new Customers($client);

$result = $customers->customersAuthOtpConfirm(
    secret: '',
    userId: ''
);```

## customers-auth-recovery

Start password recovery

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Customers;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customers = new Customers($client);

$result = $customers->customersAuthRecovery(
    email: 'einkauf@example.com',
    url: 'https://example.com'
);```

## customers-auth-recovery-confirm

Confirm password recovery

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Customers;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customers = new Customers($client);

$result = $customers->customersAuthRecoveryConfirm(
    password: '',
    secret: '',
    userId: ''
);```

## customers-auth-register

Register a buyer

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Customers;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customers = new Customers($client);

$result = $customers->customersAuthRegister(
    email: 'einkauf@example.com',
    password: '',
    firstName: 'Anna', // optional
    lastName: 'Berger', // optional
    locale: 'de-DE', // optional
    organizationId: '', // optional
    organizationName: 'Beispiel Industrietechnik GmbH', // optional
    url: 'https://shop.example.com/account', // optional
    vatId: 'DE123456789', // optional
    verificationUrl: 'https://shop.example.com/bestaetigen' // optional
);```

## customers-auth-verification

Send an address verification

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Customers;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customers = new Customers($client);

$result = $customers->customersAuthVerification(
    url: 'https://example.com',
    userId: ''
);```

## customers-auth-verification-confirm

Confirm an address

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Customers;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customers = new Customers($client);

$result = $customers->customersAuthVerificationConfirm(
    secret: '',
    userId: ''
);```

## customers-principal-resolve

Resolve an acting principal

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Customers;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customers = new Customers($client);

$result = $customers->customersPrincipalResolve(
    contactId: '', // optional
    userId: '284392058374652910' // optional
);```
