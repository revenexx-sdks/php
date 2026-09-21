<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;

class Customers extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * The same token `POST /customers/auth/magic-link` mints, answered WITH its
     * secret instead of mailed — for a buyer another system has already
     * authenticated and who therefore has no mailbox to check and no link to
     * click. Punchout is the caller it exists for: an ERP hands its user over,
     * this app decides whether that buyer may sign in, and the secret is redeemed
     * through `PUT /customers/auth/magic-link` exactly as a mailed one is. Which
     * is also why the method checked is the magic-link one: a store with
     * `login_magic_link` off cannot redeem what this mints. Nothing is delivered,
     * no account is founded (an address nobody holds is a 404 here, not a
     * registration) and no `contact_event` is written — signing in is
     * mechanics, and this app keeps it off the event bus. Not callable from a
     * browser or a storefront: `handoff_key` is an operations secret configured
     * on the calling app, and a deployment that has none has this capability
     * switched off.
     *
     * @param string $handoffKey
     * @param ?string $contactId
     * @param ?string $email
     * @throws RevenexxException
     * @return array
     */
    public function customersAuthHandoff(string $handoffKey, ?string $contactId = null, ?string $email = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/customers/auth/handoff'
        );

        $apiParams = [];
        $apiParams['handoff_key'] = $handoffKey;
        $apiParams['contact_id'] = $contactId;
        $apiParams['email'] = $email;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * An email and a password go in; a session and the CONTACT behind it come
     * back, so a storefront knows in one call both that the buyer is signed in
     * and who they are. The session is minted server-side rather than handed back
     * from the credential check, because the account route hides the session
     * secret from non-privileged responses and a trusted BFF needs it.
     * `permissions` carries the buyer's effective grants, so a BFF does not need
     * a second call to decide what to render.
     *
     * @param string $email
     * @param string $password
     * @throws RevenexxException
     * @return array
     */
    public function customersAuthLogin(string $email, string $password): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/customers/auth/login'
        );

        $apiParams = [];
        $apiParams['email'] = $email;
        $apiParams['password'] = $password;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Ends ONE session — the buyer signs out on this device and stays signed in
     * on the others, because the session id is what is revoked and not the
     * account. The contact row is untouched: signing out is not blocking, and a
     * caller wanting the second thing wants `status: "blocked"` on the contact
     * instead. Both ids come from what `/customers/auth/login` answered, and a
     * BFF should drop its own cookie whatever this answers — the session is
     * unusable afterwards either way.
     *
     * @param string $sessionId
     * @param string $userId
     * @throws RevenexxException
     * @return array
     */
    public function customersAuthLogout(string $sessionId, string $userId): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/customers/auth/logout'
        );

        $apiParams = [];
        $apiParams['session_id'] = $sessionId;
        $apiParams['user_id'] = $userId;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Sign in without a password: a link goes to the address, and `PUT
     * /customers/auth/magic-link` turns it into a session. Creates the account
     * when the address is new, which makes this a registration path as much as a
     * sign-in one — and why an address nobody holds is not distinguished in the
     * answer. The mail is this shop's own template through the messaging service;
     * the secret is not in this response, only in the link.
     *
     * @param string $email
     * @param string $url
     * @throws RevenexxException
     * @return array
     */
    public function customersAuthMagicLink(string $email, string $url): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/customers/auth/magic-link'
        );

        $apiParams = [];
        $apiParams['email'] = $email;
        $apiParams['url'] = $url;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * The buyer clicked the link and the storefront read `userId` and `secret`
     * out of it. Answers exactly what a password login answers — session,
     * contact and effective grants — because a shop must not have to branch on
     * how somebody signed in.
     *
     * @param string $secret
     * @param string $userId
     * @throws RevenexxException
     * @return array
     */
    public function customersAuthMagicLinkConfirm(string $secret, string $userId): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/customers/auth/magic-link'
        );

        $apiParams = [];
        $apiParams['secret'] = $secret;
        $apiParams['user_id'] = $userId;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PUT,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * The platform user, the customer record mirrored against it and the
     * effective grants, in one call. The expected caller is a trusted storefront
     * BFF holding the session on the buyer's behalf, which is why the ids travel
     * in the body rather than in a browser-facing header. The grants are derived
     * here on every call rather than returned from anywhere they could be cached,
     * so a role changed a second ago is already reflected.
     *
     * @param string $userId
     * @param ?string $sessionId
     * @throws RevenexxException
     * @return array
     */
    public function customersAuthMe(string $userId, ?string $sessionId = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/customers/auth/me'
        );

        $apiParams = [];
        $apiParams['user_id'] = $userId;
        $apiParams['session_id'] = $sessionId;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Between the password and the finished session: the buyer has proved one
     * thing and is asked for another. Created by user id, because the account
     * route that creates challenges hides the code from whoever may call it —
     * and answered with the half-finished session the sign-in is in the middle
     * of, through `PUT /customers/auth/mfa/challenge`. Needs a platform build
     * that returns the challenge code; without one there is no way to read what
     * to send, and the call answers 502 rather than mailing an empty challenge.
     *
     * @param string $userId
     * @param ?string $factor
     * @throws RevenexxException
     * @return array
     */
    public function customersAuthMfaChallenge(string $userId, ?string $factor = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/customers/auth/mfa/challenge'
        );

        $apiParams = [];
        $apiParams['user_id'] = $userId;
        $apiParams['factor'] = $factor;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * The code the buyer typed, against the challenge it was sent for. The
     * session becomes fully authenticated when this answers.
     *
     * @param string $challengeId
     * @param string $code
     * @param string $sessionSecret
     * @param ?string $userId
     * @throws RevenexxException
     * @return array
     */
    public function customersAuthMfaChallengeConfirm(string $challengeId, string $code, string $sessionSecret, ?string $userId = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/customers/auth/mfa/challenge'
        );

        $apiParams = [];
        $apiParams['challenge_id'] = $challengeId;
        $apiParams['code'] = $code;
        $apiParams['session_secret'] = $sessionSecret;
        $apiParams['user_id'] = $userId;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PUT,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * The same token as the sign-in link, delivered as a short code instead —
     * for a buyer on a phone, where leaving for a mail client and coming back
     * loses the checkout they were in the middle of. Redeemed with `PUT
     * /customers/auth/otp`.
     *
     * @param string $email
     * @throws RevenexxException
     * @return array
     */
    public function customersAuthOtp(string $email): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/customers/auth/otp'
        );

        $apiParams = [];
        $apiParams['email'] = $email;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * The code the buyer typed, plus the `userId` the send answered with. Answers
     * exactly what a password login answers — session, contact and effective
     * grants — so a storefront never has to branch on how somebody signed in.
     * The code is spent on first use and expires, so a second attempt with the
     * same one is a 401 rather than a second session.
     *
     * @param string $secret
     * @param string $userId
     * @throws RevenexxException
     * @return array
     */
    public function customersAuthOtpConfirm(string $secret, string $userId): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/customers/auth/otp'
        );

        $apiParams = [];
        $apiParams['secret'] = $secret;
        $apiParams['user_id'] = $userId;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PUT,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Step one of two: a link goes to the address given, and `PUT
     * /customers/auth/recovery` is what the buyer's browser comes back to. The
     * identity service mints the token; the MAIL is this shop's own — the
     * tenant's template, layout, language and sending domain, through the
     * messaging service. The secret is NOT in this answer: it exists only inside
     * the mailed link, which is the whole point of the two-step shape, and
     * echoing it here would make the mail decorative. Nothing about the contact
     * changes; the password only moves in step two.
     *
     * @param string $email
     * @param string $url
     * @throws RevenexxException
     * @return array
     */
    public function customersAuthRecovery(string $email, string $url): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/customers/auth/recovery'
        );

        $apiParams = [];
        $apiParams['email'] = $email;
        $apiParams['url'] = $url;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Step two: the `userId` and `secret` the mailed link carried, plus the
     * password the buyer just typed. The secret is spent on first use and
     * expires, so a link cannot be replayed and a second attempt with the same
     * one is a 401 rather than a second password change. The new password is in
     * effect the moment this answers; what happens to sessions opened with the
     * old one is the identity service's policy, not this app's.
     *
     * @param string $password
     * @param string $secret
     * @param string $userId
     * @throws RevenexxException
     * @return array
     */
    public function customersAuthRecoveryConfirm(string $password, string $secret, string $userId): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/customers/auth/recovery'
        );

        $apiParams = [];
        $apiParams['password'] = $password;
        $apiParams['secret'] = $secret;
        $apiParams['user_id'] = $userId;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PUT,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * One call writes the whole buyer: the contact this app is the system of
     * record for, and the platform user behind its login. When the body names a
     * company it also FOUNDS one — an organization, mirrored into platform auth
     * as a team, with this contact as its admin. The tenant setting
     * registration_mode decides what a registration IS. 'open' (the default,
     * unchanged behaviour) creates a finished account:
     * registration_status='approved', status='active', login works.
     * 'approval_required' creates an APPLICATION: registration_status='pending',
     * status='invited', the platform user exists with the applicant's own
     * password but is DISABLED, and a newly founded organization is parked as
     * 'blocked' — check `approval_required` in the response and show a 'we will
     * get back to you' screen instead of logging the buyer in. The registration
     * gates below are all evaluated BEFORE anything is written, and a failure
     * after that point rolls the organization and the contact back together.
     *
     * @param string $email
     * @param string $password
     * @param ?string $firstName
     * @param ?string $lastName
     * @param ?string $locale
     * @param ?string $organizationId
     * @param ?string $organizationName
     * @param ?string $url
     * @param ?string $vatId
     * @param ?string $verificationUrl
     * @throws RevenexxException
     * @return array
     */
    public function customersAuthRegister(string $email, string $password, ?string $firstName = null, ?string $lastName = null, ?string $locale = null, ?string $organizationId = null, ?string $organizationName = null, ?string $url = null, ?string $vatId = null, ?string $verificationUrl = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/customers/auth/register'
        );

        $apiParams = [];
        $apiParams['email'] = $email;
        $apiParams['password'] = $password;
        $apiParams['first_name'] = $firstName;
        $apiParams['last_name'] = $lastName;
        $apiParams['locale'] = $locale;
        $apiParams['organization_id'] = $organizationId;
        $apiParams['organization_name'] = $organizationName;
        $apiParams['url'] = $url;
        $apiParams['vat_id'] = $vatId;
        $apiParams['verification_url'] = $verificationUrl;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Confirm that the address belongs to the buyer. Needs no session: the
     * verification is created through the identity service's users surface,
     * because its account counterpart reads the authenticated user and a caller
     * authenticating AS the user cannot see the secret it just created. The buyer
     * still confirms with their own session, through `PUT
     * /customers/auth/verification` — only the creation moved. Send it right
     * after a registration, or from an account page.
     *
     * @param string $url
     * @param string $userId
     * @throws RevenexxException
     * @return array
     */
    public function customersAuthVerification(string $url, string $userId): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/customers/auth/verification'
        );

        $apiParams = [];
        $apiParams['url'] = $url;
        $apiParams['user_id'] = $userId;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * The `userId` and `secret` the mailed link carried. The address counts as
     * confirmed the moment this answers; the secret is spent, so the link cannot
     * be replayed.
     *
     * @param string $secret
     * @param string $userId
     * @throws RevenexxException
     * @return array
     */
    public function customersAuthVerificationConfirm(string $secret, string $userId): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/customers/auth/verification'
        );

        $apiParams = [];
        $apiParams['secret'] = $secret;
        $apiParams['user_id'] = $userId;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PUT,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * The capability the API gateway calls to turn whoever is acting into the
     * permission set it forwards to every other app as X-Revenexx-Permissions.
     * This app is the platform's role provider (manifest#provides_roles), and
     * this is the hot path of every attributed request — one contact read plus
     * the tenant's role map. Send EXACTLY ONE of two references. `contact_id` is
     * the storefront plane: a BFF holding the tenant API key asserted a contact,
     * and the gateway is resolving the assertion. `user_id` is the authenticated
     * plane (RAD-12): the gateway verified a person's own Zitadel token and is
     * resolving its subject against `contacts.external_user_id`, so the answer
     * stands on a proven identity rather than a claimed one. The answer is the
     * same shape either way — which plane a request came from is the gateway's
     * business, not this app's. A blocked or pending contact always resolves with
     * active=false; what its `permissions` then say is the tenant's
     * blocked_contact_behavior setting — 'keep' (the default, the role's
     * grants), 'catalog_only' or 'deny_all'.
     *
     * @param ?string $contactId
     * @param ?string $userId
     * @throws RevenexxException
     * @return array
     */
    public function customersPrincipalResolve(?string $contactId = null, ?string $userId = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/customers/principal/resolve'
        );

        $apiParams = [];

        if (!is_null($contactId)) {
            $apiParams['contact_id'] = $contactId;
        }

        if (!is_null($userId)) {
            $apiParams['user_id'] = $userId;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }
}