<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;
use Revenexx\Enums\Protocol;
use Revenexx\Enums\PunchoutVocabulariesGetName;

class Punchout extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @throws RevenexxException
     * @return array
     */
    public function punchoutAccountsList(?int $limit = null, ?int $offset = null, ?string $order = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/punchout/accounts'
        );

        $apiParams = [];

        if (!is_null($limit)) {
            $apiParams['limit'] = $limit;
        }

        if (!is_null($offset)) {
            $apiParams['offset'] = $offset;
        }

        if (!is_null($order)) {
            $apiParams['order'] = $order;
        }

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * @param string $channelCode
     * @param string $code
     * @param string $name
     * @param string $protocol
     * @param ?string $authStrategy
     * @param ?array $behaviour
     * @param ?string $credentialDomain
     * @param ?string $credentialIdentity
     * @param ?string $credentialSecret
     * @param ?bool $enabled
     * @param ?string $fallbackContactId
     * @param ?string $idsCustomerName
     * @param ?string $loginToken
     * @param ?string $organizationId
     * @param ?string $protocolVersion
     * @param ?bool $secureOci
     * @param ?int $sessionTtlMinutes
     * @param ?string $sharedSecret
     * @param ?string $startPageUrl
     * @param ?string $unknownUserPolicy
     * @param ?bool $urlThreading
     * @throws RevenexxException
     * @return array
     */
    public function punchoutAccountsCreate(string $channelCode, string $code, string $name, string $protocol, ?string $authStrategy = null, ?array $behaviour = null, ?string $credentialDomain = null, ?string $credentialIdentity = null, ?string $credentialSecret = null, ?bool $enabled = null, ?string $fallbackContactId = null, ?string $idsCustomerName = null, ?string $loginToken = null, ?string $organizationId = null, ?string $protocolVersion = null, ?bool $secureOci = null, ?int $sessionTtlMinutes = null, ?string $sharedSecret = null, ?string $startPageUrl = null, ?string $unknownUserPolicy = null, ?bool $urlThreading = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/punchout/accounts'
        );

        $apiParams = [];
        $apiParams['channel_code'] = $channelCode;
        $apiParams['code'] = $code;
        $apiParams['name'] = $name;
        $apiParams['protocol'] = $protocol;

        if (!is_null($authStrategy)) {
            $apiParams['auth_strategy'] = $authStrategy;
        }

        if (!is_null($behaviour)) {
            $apiParams['behaviour'] = $behaviour;
        }

        if (!is_null($credentialDomain)) {
            $apiParams['credential_domain'] = $credentialDomain;
        }

        if (!is_null($credentialIdentity)) {
            $apiParams['credential_identity'] = $credentialIdentity;
        }

        if (!is_null($credentialSecret)) {
            $apiParams['credential_secret'] = $credentialSecret;
        }

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }

        if (!is_null($fallbackContactId)) {
            $apiParams['fallback_contact_id'] = $fallbackContactId;
        }

        if (!is_null($idsCustomerName)) {
            $apiParams['ids_customer_name'] = $idsCustomerName;
        }

        if (!is_null($loginToken)) {
            $apiParams['login_token'] = $loginToken;
        }

        if (!is_null($organizationId)) {
            $apiParams['organization_id'] = $organizationId;
        }

        if (!is_null($protocolVersion)) {
            $apiParams['protocol_version'] = $protocolVersion;
        }

        if (!is_null($secureOci)) {
            $apiParams['secure_oci'] = $secureOci;
        }

        if (!is_null($sessionTtlMinutes)) {
            $apiParams['session_ttl_minutes'] = $sessionTtlMinutes;
        }

        if (!is_null($sharedSecret)) {
            $apiParams['shared_secret'] = $sharedSecret;
        }

        if (!is_null($startPageUrl)) {
            $apiParams['start_page_url'] = $startPageUrl;
        }

        if (!is_null($unknownUserPolicy)) {
            $apiParams['unknown_user_policy'] = $unknownUserPolicy;
        }

        if (!is_null($urlThreading)) {
            $apiParams['url_threading'] = $urlThreading;
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

    /**
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function punchoutAccountsDelete(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/punchout/accounts/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function punchoutAccountsGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/punchout/accounts/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * @param string $id
     * @param ?string $authStrategy
     * @param ?array $behaviour
     * @param ?string $channelCode
     * @param ?string $code
     * @param ?string $credentialDomain
     * @param ?string $credentialIdentity
     * @param ?string $credentialSecret
     * @param ?bool $enabled
     * @param ?string $fallbackContactId
     * @param ?string $idsCustomerName
     * @param ?string $loginToken
     * @param ?string $name
     * @param ?string $organizationId
     * @param ?string $protocol
     * @param ?string $protocolVersion
     * @param ?bool $secureOci
     * @param ?int $sessionTtlMinutes
     * @param ?string $sharedSecret
     * @param ?string $startPageUrl
     * @param ?string $unknownUserPolicy
     * @param ?bool $urlThreading
     * @throws RevenexxException
     * @return array
     */
    public function punchoutAccountsUpdate(string $id, ?string $authStrategy = null, ?array $behaviour = null, ?string $channelCode = null, ?string $code = null, ?string $credentialDomain = null, ?string $credentialIdentity = null, ?string $credentialSecret = null, ?bool $enabled = null, ?string $fallbackContactId = null, ?string $idsCustomerName = null, ?string $loginToken = null, ?string $name = null, ?string $organizationId = null, ?string $protocol = null, ?string $protocolVersion = null, ?bool $secureOci = null, ?int $sessionTtlMinutes = null, ?string $sharedSecret = null, ?string $startPageUrl = null, ?string $unknownUserPolicy = null, ?bool $urlThreading = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/punchout/accounts/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($authStrategy)) {
            $apiParams['auth_strategy'] = $authStrategy;
        }

        if (!is_null($behaviour)) {
            $apiParams['behaviour'] = $behaviour;
        }

        if (!is_null($channelCode)) {
            $apiParams['channel_code'] = $channelCode;
        }

        if (!is_null($code)) {
            $apiParams['code'] = $code;
        }

        if (!is_null($credentialDomain)) {
            $apiParams['credential_domain'] = $credentialDomain;
        }

        if (!is_null($credentialIdentity)) {
            $apiParams['credential_identity'] = $credentialIdentity;
        }

        if (!is_null($credentialSecret)) {
            $apiParams['credential_secret'] = $credentialSecret;
        }

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }

        if (!is_null($fallbackContactId)) {
            $apiParams['fallback_contact_id'] = $fallbackContactId;
        }

        if (!is_null($idsCustomerName)) {
            $apiParams['ids_customer_name'] = $idsCustomerName;
        }

        if (!is_null($loginToken)) {
            $apiParams['login_token'] = $loginToken;
        }

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

        if (!is_null($organizationId)) {
            $apiParams['organization_id'] = $organizationId;
        }

        if (!is_null($protocol)) {
            $apiParams['protocol'] = $protocol;
        }

        if (!is_null($protocolVersion)) {
            $apiParams['protocol_version'] = $protocolVersion;
        }

        if (!is_null($secureOci)) {
            $apiParams['secure_oci'] = $secureOci;
        }

        if (!is_null($sessionTtlMinutes)) {
            $apiParams['session_ttl_minutes'] = $sessionTtlMinutes;
        }

        if (!is_null($sharedSecret)) {
            $apiParams['shared_secret'] = $sharedSecret;
        }

        if (!is_null($startPageUrl)) {
            $apiParams['start_page_url'] = $startPageUrl;
        }

        if (!is_null($unknownUserPolicy)) {
            $apiParams['unknown_user_policy'] = $unknownUserPolicy;
        }

        if (!is_null($urlThreading)) {
            $apiParams['url_threading'] = $urlThreading;
        }

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
     * What a buyer's system would receive, before a buyer is in the shop: the
     * account's mappings run over a cart that exists, through the same production
     * code a real hand-back runs, and the field set or the document that comes
     * out. Writes nothing — no visit, no transfer, no correlation key kept —
     * and posts nothing. `mapping` says which mappings produced nothing and why,
     * because a field the document deliberately leaves out reads exactly like one
     * whose source resolved to nothing and only one of the two is a fault.
     *
     * @param string $id
     * @param string $cartId
     * @throws RevenexxException
     * @return array
     */
    public function punchoutAccountsPreview(string $id, string $cartId): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/punchout/accounts/{id}/preview'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams['cart_id'] = $cartId;

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
     * Punchout entry is served on the tenant's own storefront host and never by
     * this app (adr/ADR-0002), so whether an account is reachable is a fact about
     * somebody else's runtime — a per-DOMAIN fact, which no install-time check
     * can see. The probe calls the account's own public entry address, carrying a
     * single-use token this app's entry route echoes back, and records what it
     * found: reachable, not_found, not_entry, wrong_host, tls, timeout,
     * unreachable, unconfigured. Only the echo counts as reachable — a
     * storefront that answers 200 with its own page for every unknown path is
     * exactly the setup this exists to catch. The outcome, the address it was
     * taken on and what came back are answered and kept on the account. Changing
     * the entry URL retires the finding.
     *
     * @param string $id
     * @param array $data
     * @throws RevenexxException
     * @return array
     */
    public function punchoutAccountsProbe(string $id, array $data): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/punchout/accounts/{id}/probe'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams = \array_merge($apiParams, $data);

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
     * The operator's way to tell "the ERP is configured wrong" from "we are
     * broken", with no procurement system in the loop. Builds the entry call this
     * account would receive — its own credentials, in the transport its
     * standard uses — hands it to the same adapter an ERP reaches, and answers
     * the status, the headers and the body the storefront would have written out,
     * rather than a summary of them. It leaves nothing that acts: an entry call
     * opens a visit, so the visit it opened is marked as the tester's and revoked
     * before the answer goes back, its refusals do not count against the
     * credential throttle, and it sends no action that imports a cart. It creates
     * no cart and records no transfer.
     *
     * @param string $id
     * @param array $data
     * @throws RevenexxException
     * @return array
     */
    public function punchoutAccountsTest(string $id, array $data): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/punchout/accounts/{id}/test'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams = \array_merge($apiParams, $data);

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
     * @param array $data
     * @throws RevenexxException
     * @return array
     */
    public function punchoutDefaults(array $data): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/punchout/defaults'
        );

        $apiParams = [];
        $apiParams = \array_merge($apiParams, $data);

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
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @throws RevenexxException
     * @return array
     */
    public function punchoutEntryRefusalsList(?int $limit = null, ?int $offset = null, ?string $order = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/punchout/entry-refusals'
        );

        $apiParams = [];

        if (!is_null($limit)) {
            $apiParams['limit'] = $limit;
        }

        if (!is_null($offset)) {
            $apiParams['offset'] = $offset;
        }

        if (!is_null($order)) {
            $apiParams['order'] = $order;
        }

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * cXML PunchOutSetupRequest for the account named in the path. The answer
     * must be the PunchOutSetupResponse itself, in the same HTTP response —
     * which is the whole reason ADR-0002 exists. What authenticates is
     * Sender/Credential, not From: in the usual shape a network hub has already
     * verified the buyer and presents its OWN credential (§5.3.2.2). Direct
     * PunchOut (§5.7) authenticates by MAC or client certificate and is not
     * supported. A requisition is reopened with operation — create, edit and
     * inspect are served, with the ERP sending the lines back in the request and
     * inspect recorded as view-only; source is not. Reached from the tenant's
     * storefront host, never from this app's own URL and never as a public
     * gateway route — see adr/ADR-0002. The storefront pass-through forwards
     * the ERP's request as the envelope above and returns this answer unchanged.
     *
     * @param string $accountCode
     * @param string $method
     * @param ?string $bodyB64
     * @param ?string $clientIp
     * @param ?string $contentType
     * @param ?array $headers
     * @param ?array $query
     * @throws RevenexxException
     * @return array
     */
    public function punchoutEntryCxml(string $accountCode, string $method, ?string $bodyB64 = null, ?string $clientIp = null, ?string $contentType = null, ?array $headers = null, ?array $query = null): array
    {
        $apiPath = str_replace(
            ['{account_code}'],
            [$accountCode],
            '/v1/punchout/entry/cxml/{account_code}'
        );

        $apiParams = [];
        $apiParams['account_code'] = $accountCode;
        $apiParams['method'] = $method;

        if (!is_null($bodyB64)) {
            $apiParams['body_b64'] = $bodyB64;
        }

        if (!is_null($clientIp)) {
            $apiParams['client_ip'] = $clientIp;
        }

        if (!is_null($contentType)) {
            $apiParams['content_type'] = $contentType;
        }

        if (!is_null($headers)) {
            $apiParams['headers'] = $headers;
        }

        if (!is_null($query)) {
            $apiParams['query'] = $query;
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

    /**
     * IDS entry on one shared endpoint: the account is resolved from
     * kndnr/name_kunde/pw_kunde in the body, because that is how IDS clients are
     * configured. POST-only with multipart/form-data — the standard rules GET
     * out because a cart does not fit in a query string (§5.1a) — and
     * parameter names are lower-case single words. WKE (shop), ADL (one article),
     * AS (a search) and WKS (a cart sent in, which always becomes a NEW cart)
     * authenticate; LI and SV are answered BEFORE authentication, because the
     * standard sends only the action code with them and they are what makes setup
     * self-service. HLS, the heating-label list, is refused as not implemented
     * rather than falling through to "come in and shop". Reached from the
     * tenant's storefront host, never from this app's own URL and never as a
     * public gateway route — see adr/ADR-0002. The storefront pass-through
     * forwards the ERP's request as the envelope above and returns this answer
     * unchanged.
     *
     * @param string $method
     * @param ?string $bodyB64
     * @param ?string $clientIp
     * @param ?string $contentType
     * @param ?array $headers
     * @param ?array $query
     * @throws RevenexxException
     * @return array
     */
    public function punchoutEntryIds(string $method, ?string $bodyB64 = null, ?string $clientIp = null, ?string $contentType = null, ?array $headers = null, ?array $query = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/punchout/entry/ids'
        );

        $apiParams = [];
        $apiParams['method'] = $method;

        if (!is_null($bodyB64)) {
            $apiParams['body_b64'] = $bodyB64;
        }

        if (!is_null($clientIp)) {
            $apiParams['client_ip'] = $clientIp;
        }

        if (!is_null($contentType)) {
            $apiParams['content_type'] = $contentType;
        }

        if (!is_null($headers)) {
            $apiParams['headers'] = $headers;
        }

        if (!is_null($query)) {
            $apiParams['query'] = $query;
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

    /**
     * OCI entry for the account named in the path — V8's externalIdentifier, so
     * an existing ERP configuration migrates unchanged. Answers a 302 to the
     * account's start page carrying the session handle, and nothing else: no
     * credential and no sign-in secret ride in a redirect. FUNCTION is a closed
     * upper-case set and only its ABSENCE means "let the buyer shop"; the Level 2
     * functions (DETAIL, VALIDATE, SOURCING, BACKGROUND_SEARCH, DOWNLOADJSON,
     * DETAILADD, QUANTITYCHECK) answer 501 naming the one asked for, and an
     * undefined one a 400 — neither counts against the credential throttle.
     * This address also carries Secure OCI's two backend legs, INITIALIZE and
     * RETRIEVEOCI, where the cart is FETCHED rather than posted. Reached from the
     * tenant's storefront host, never from this app's own URL and never as a
     * public gateway route — see adr/ADR-0002. The storefront pass-through
     * forwards the ERP's request as the envelope above and returns this answer
     * unchanged.
     *
     * @param string $accountCode
     * @param string $method
     * @param ?string $bodyB64
     * @param ?string $clientIp
     * @param ?string $contentType
     * @param ?array $headers
     * @param ?array $query
     * @throws RevenexxException
     * @return array
     */
    public function punchoutEntryOci(string $accountCode, string $method, ?string $bodyB64 = null, ?string $clientIp = null, ?string $contentType = null, ?array $headers = null, ?array $query = null): array
    {
        $apiPath = str_replace(
            ['{account_code}'],
            [$accountCode],
            '/v1/punchout/entry/oci/{account_code}'
        );

        $apiParams = [];
        $apiParams['account_code'] = $accountCode;
        $apiParams['method'] = $method;

        if (!is_null($bodyB64)) {
            $apiParams['body_b64'] = $bodyB64;
        }

        if (!is_null($clientIp)) {
            $apiParams['client_ip'] = $clientIp;
        }

        if (!is_null($contentType)) {
            $apiParams['content_type'] = $contentType;
        }

        if (!is_null($headers)) {
            $apiParams['headers'] = $headers;
        }

        if (!is_null($query)) {
            $apiParams['query'] = $query;
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

    /**
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @throws RevenexxException
     * @return array
     */
    public function punchoutFieldMappingsList(?int $limit = null, ?int $offset = null, ?string $order = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/punchout/field-mappings'
        );

        $apiParams = [];

        if (!is_null($limit)) {
            $apiParams['limit'] = $limit;
        }

        if (!is_null($offset)) {
            $apiParams['offset'] = $offset;
        }

        if (!is_null($order)) {
            $apiParams['order'] = $order;
        }

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * @param string $protocol
     * @param string $source
     * @param string $target
     * @param string $targetKind
     * @param ?string $accountId
     * @param ?string $document
     * @param ?string $emit
     * @param ?bool $enabled
     * @param ?array $mutators
     * @param ?int $position
     * @param ?string $scope
     * @param ?array $sourceConfig
     * @throws RevenexxException
     * @return array
     */
    public function punchoutFieldMappingsCreate(string $protocol, string $source, string $target, string $targetKind, ?string $accountId = null, ?string $document = null, ?string $emit = null, ?bool $enabled = null, ?array $mutators = null, ?int $position = null, ?string $scope = null, ?array $sourceConfig = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/punchout/field-mappings'
        );

        $apiParams = [];
        $apiParams['protocol'] = $protocol;
        $apiParams['source'] = $source;
        $apiParams['target'] = $target;
        $apiParams['target_kind'] = $targetKind;

        if (!is_null($accountId)) {
            $apiParams['account_id'] = $accountId;
        }

        if (!is_null($document)) {
            $apiParams['document'] = $document;
        }

        if (!is_null($emit)) {
            $apiParams['emit'] = $emit;
        }

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }

        if (!is_null($mutators)) {
            $apiParams['mutators'] = $mutators;
        }

        if (!is_null($position)) {
            $apiParams['position'] = $position;
        }

        if (!is_null($scope)) {
            $apiParams['scope'] = $scope;
        }

        if (!is_null($sourceConfig)) {
            $apiParams['source_config'] = $sourceConfig;
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

    /**
     * The inverse of the import, and what makes a configuration reviewable and
     * restorable outside the editor — and diffable against the installation it
     * came from. Not a perfect inverse, and it says so: a mapping whose source
     * the old platform has no driver for is left out and named in `dropped`.
     *
     * @param string $accountId
     * @throws RevenexxException
     * @return array
     */
    public function punchoutFieldMappingsExport(string $accountId): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/punchout/field-mappings/export'
        );

        $apiParams = [];
        $apiParams['account_id'] = $accountId;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Takes a V8 `field_mapping` — the whole column, one protocol's sub-object,
     * or what V8's own export action writes — and records it as mappings for
     * one account. Idempotent on the record's own key (protocol, document, scope,
     * target): re-importing a corrected configuration corrects the rows rather
     * than adding beside them, which is what makes a migration rehearsable. A
     * rule this vocabulary cannot express is NEVER stored and comes back in
     * `refused` with the target it filled, the type it named and why; `skipped`
     * names a group the old platform itself never read.
     *
     * @param string $accountId
     * @param array $configuration
     * @param ?Protocol $protocol
     * @throws RevenexxException
     * @return array
     */
    public function punchoutFieldMappingsImport(string $accountId, array $configuration, ?Protocol $protocol = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/punchout/field-mappings/import'
        );

        $apiParams = [];
        $apiParams['account_id'] = $accountId;
        $apiParams['configuration'] = $configuration;

        if (!is_null($protocol)) {
            $apiParams['protocol'] = $protocol;
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

    /**
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function punchoutFieldMappingsDelete(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/punchout/field-mappings/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function punchoutFieldMappingsGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/punchout/field-mappings/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * @param string $id
     * @param ?string $accountId
     * @param ?string $document
     * @param ?string $emit
     * @param ?bool $enabled
     * @param ?array $mutators
     * @param ?int $position
     * @param ?string $protocol
     * @param ?string $scope
     * @param ?string $source
     * @param ?array $sourceConfig
     * @param ?string $target
     * @param ?string $targetKind
     * @throws RevenexxException
     * @return array
     */
    public function punchoutFieldMappingsUpdate(string $id, ?string $accountId = null, ?string $document = null, ?string $emit = null, ?bool $enabled = null, ?array $mutators = null, ?int $position = null, ?string $protocol = null, ?string $scope = null, ?string $source = null, ?array $sourceConfig = null, ?string $target = null, ?string $targetKind = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/punchout/field-mappings/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($accountId)) {
            $apiParams['account_id'] = $accountId;
        }

        if (!is_null($document)) {
            $apiParams['document'] = $document;
        }

        if (!is_null($emit)) {
            $apiParams['emit'] = $emit;
        }

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }

        if (!is_null($mutators)) {
            $apiParams['mutators'] = $mutators;
        }

        if (!is_null($position)) {
            $apiParams['position'] = $position;
        }

        if (!is_null($protocol)) {
            $apiParams['protocol'] = $protocol;
        }

        if (!is_null($scope)) {
            $apiParams['scope'] = $scope;
        }

        if (!is_null($source)) {
            $apiParams['source'] = $source;
        }

        if (!is_null($sourceConfig)) {
            $apiParams['source_config'] = $sourceConfig;
        }

        if (!is_null($target)) {
            $apiParams['target'] = $target;
        }

        if (!is_null($targetKind)) {
            $apiParams['target_kind'] = $targetKind;
        }

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
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @throws RevenexxException
     * @return array
     */
    public function punchoutSessionsList(?int $limit = null, ?int $offset = null, ?string $order = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/punchout/sessions'
        );

        $apiParams = [];

        if (!is_null($limit)) {
            $apiParams['limit'] = $limit;
        }

        if (!is_null($offset)) {
            $apiParams['offset'] = $offset;
        }

        if (!is_null($order)) {
            $apiParams['order'] = $order;
        }

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * @param string $accountId
     * @param string $channelCode
     * @param string $expiresAt
     * @param string $protocol
     * @param string $psid
     * @param ?string $cartId
     * @param ?string $claimedAt
     * @param ?string $closedReason
     * @param ?string $contactId
     * @param ?string $correlationKey
     * @param ?string $entryAction
     * @param ?array $entryIntent
     * @param ?array $entryPayload
     * @param ?string $externalUserId
     * @param ?string $organizationId
     * @param ?string $origin
     * @param ?string $returnMethod
     * @param ?string $returnUrl
     * @param ?string $secureSessionId
     * @param ?string $secureSessionUsedAt
     * @param ?string $secureTransmissionId
     * @param ?string $status
     * @param ?string $transferredAt
     * @throws RevenexxException
     * @return array
     */
    public function punchoutSessionsCreate(string $accountId, string $channelCode, string $expiresAt, string $protocol, string $psid, ?string $cartId = null, ?string $claimedAt = null, ?string $closedReason = null, ?string $contactId = null, ?string $correlationKey = null, ?string $entryAction = null, ?array $entryIntent = null, ?array $entryPayload = null, ?string $externalUserId = null, ?string $organizationId = null, ?string $origin = null, ?string $returnMethod = null, ?string $returnUrl = null, ?string $secureSessionId = null, ?string $secureSessionUsedAt = null, ?string $secureTransmissionId = null, ?string $status = null, ?string $transferredAt = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/punchout/sessions'
        );

        $apiParams = [];
        $apiParams['account_id'] = $accountId;
        $apiParams['channel_code'] = $channelCode;
        $apiParams['expires_at'] = $expiresAt;
        $apiParams['protocol'] = $protocol;
        $apiParams['psid'] = $psid;

        if (!is_null($cartId)) {
            $apiParams['cart_id'] = $cartId;
        }

        if (!is_null($claimedAt)) {
            $apiParams['claimed_at'] = $claimedAt;
        }

        if (!is_null($closedReason)) {
            $apiParams['closed_reason'] = $closedReason;
        }

        if (!is_null($contactId)) {
            $apiParams['contact_id'] = $contactId;
        }

        if (!is_null($correlationKey)) {
            $apiParams['correlation_key'] = $correlationKey;
        }

        if (!is_null($entryAction)) {
            $apiParams['entry_action'] = $entryAction;
        }

        if (!is_null($entryIntent)) {
            $apiParams['entry_intent'] = $entryIntent;
        }

        if (!is_null($entryPayload)) {
            $apiParams['entry_payload'] = $entryPayload;
        }

        if (!is_null($externalUserId)) {
            $apiParams['external_user_id'] = $externalUserId;
        }

        if (!is_null($organizationId)) {
            $apiParams['organization_id'] = $organizationId;
        }

        if (!is_null($origin)) {
            $apiParams['origin'] = $origin;
        }

        if (!is_null($returnMethod)) {
            $apiParams['return_method'] = $returnMethod;
        }

        if (!is_null($returnUrl)) {
            $apiParams['return_url'] = $returnUrl;
        }

        if (!is_null($secureSessionId)) {
            $apiParams['secure_session_id'] = $secureSessionId;
        }

        if (!is_null($secureSessionUsedAt)) {
            $apiParams['secure_session_used_at'] = $secureSessionUsedAt;
        }

        if (!is_null($secureTransmissionId)) {
            $apiParams['secure_transmission_id'] = $secureTransmissionId;
        }

        if (!is_null($status)) {
            $apiParams['status'] = $status;
        }

        if (!is_null($transferredAt)) {
            $apiParams['transferred_at'] = $transferredAt;
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

    /**
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function punchoutSessionsDelete(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/punchout/sessions/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function punchoutSessionsGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/punchout/sessions/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * @param string $id
     * @param ?string $accountId
     * @param ?string $cartId
     * @param ?string $channelCode
     * @param ?string $claimedAt
     * @param ?string $closedReason
     * @param ?string $contactId
     * @param ?string $correlationKey
     * @param ?string $entryAction
     * @param ?array $entryIntent
     * @param ?array $entryPayload
     * @param ?string $expiresAt
     * @param ?string $externalUserId
     * @param ?string $organizationId
     * @param ?string $origin
     * @param ?string $protocol
     * @param ?string $psid
     * @param ?string $returnMethod
     * @param ?string $returnUrl
     * @param ?string $secureSessionId
     * @param ?string $secureSessionUsedAt
     * @param ?string $secureTransmissionId
     * @param ?string $status
     * @param ?string $transferredAt
     * @throws RevenexxException
     * @return array
     */
    public function punchoutSessionsUpdate(string $id, ?string $accountId = null, ?string $cartId = null, ?string $channelCode = null, ?string $claimedAt = null, ?string $closedReason = null, ?string $contactId = null, ?string $correlationKey = null, ?string $entryAction = null, ?array $entryIntent = null, ?array $entryPayload = null, ?string $expiresAt = null, ?string $externalUserId = null, ?string $organizationId = null, ?string $origin = null, ?string $protocol = null, ?string $psid = null, ?string $returnMethod = null, ?string $returnUrl = null, ?string $secureSessionId = null, ?string $secureSessionUsedAt = null, ?string $secureTransmissionId = null, ?string $status = null, ?string $transferredAt = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/punchout/sessions/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($accountId)) {
            $apiParams['account_id'] = $accountId;
        }

        if (!is_null($cartId)) {
            $apiParams['cart_id'] = $cartId;
        }

        if (!is_null($channelCode)) {
            $apiParams['channel_code'] = $channelCode;
        }

        if (!is_null($claimedAt)) {
            $apiParams['claimed_at'] = $claimedAt;
        }

        if (!is_null($closedReason)) {
            $apiParams['closed_reason'] = $closedReason;
        }

        if (!is_null($contactId)) {
            $apiParams['contact_id'] = $contactId;
        }

        if (!is_null($correlationKey)) {
            $apiParams['correlation_key'] = $correlationKey;
        }

        if (!is_null($entryAction)) {
            $apiParams['entry_action'] = $entryAction;
        }

        if (!is_null($entryIntent)) {
            $apiParams['entry_intent'] = $entryIntent;
        }

        if (!is_null($entryPayload)) {
            $apiParams['entry_payload'] = $entryPayload;
        }

        if (!is_null($expiresAt)) {
            $apiParams['expires_at'] = $expiresAt;
        }

        if (!is_null($externalUserId)) {
            $apiParams['external_user_id'] = $externalUserId;
        }

        if (!is_null($organizationId)) {
            $apiParams['organization_id'] = $organizationId;
        }

        if (!is_null($origin)) {
            $apiParams['origin'] = $origin;
        }

        if (!is_null($protocol)) {
            $apiParams['protocol'] = $protocol;
        }

        if (!is_null($psid)) {
            $apiParams['psid'] = $psid;
        }

        if (!is_null($returnMethod)) {
            $apiParams['return_method'] = $returnMethod;
        }

        if (!is_null($returnUrl)) {
            $apiParams['return_url'] = $returnUrl;
        }

        if (!is_null($secureSessionId)) {
            $apiParams['secure_session_id'] = $secureSessionId;
        }

        if (!is_null($secureSessionUsedAt)) {
            $apiParams['secure_session_used_at'] = $secureSessionUsedAt;
        }

        if (!is_null($secureTransmissionId)) {
            $apiParams['secure_transmission_id'] = $secureTransmissionId;
        }

        if (!is_null($status)) {
            $apiParams['status'] = $status;
        }

        if (!is_null($transferredAt)) {
            $apiParams['transferred_at'] = $transferredAt;
        }

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
     * The start of a punchout visit in the shop. Resolves the buyer the external
     * system named to an ordinary contact — the named one, else the account's
     * fallback contact, else whatever the account's policy for an unknown name
     * says — asks the app that owns buyer authentication to sign that contact
     * in, and answers the secret together with the channel, the action and the
     * cart the visit names. The secret is single-use and short-lived: redeem it
     * server-side, and keep it out of a redirect URL, a browser history and a
     * Referer. Answered exactly ONCE — the handle travelled through the
     * external system in the clear. A second claim, an expired or revoked visit,
     * one already handed back and a handle nobody minted all get the same answer,
     * deliberately.
     *
     * @param string $psid
     * @param array $data
     * @throws RevenexxException
     * @return array
     */
    public function punchoutSessionsClaim(string $psid, array $data): array
    {
        $apiPath = str_replace(
            ['{psid}'],
            [$psid],
            '/v1/punchout/sessions/{psid}/claim'
        );

        $apiParams = [];
        $apiParams['psid'] = $psid;
        $apiParams = \array_merge($apiParams, $data);

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
     * The end of a punchout visit. Answers where the cart goes, by which method
     * and encoding, and the mapped fields to submit — one shape for all three
     * protocols, whether that means dozens of named fields (OCI) or one field
     * holding a whole document (cXML, IDS). The payload is ANSWERED, never posted
     * from here: a request from this app carries none of the buyer's ERP session,
     * and the protocols that expect a browser form post would reject it even if
     * it did. Records a transfer with its normalised lines and the exact payload,
     * mints a correlation key into that payload so an order arriving weeks later
     * can be matched to it, and closes the visit as transferred. Creates NO order
     * and reserves NO stock — the procurement system has decided nothing. A
     * retried call answers the same payload and records no second transfer; a
     * visit that expired or was revoked is refused, with the same answer a handle
     * that never existed gets.
     *
     * @param string $psid
     * @param array $data
     * @throws RevenexxException
     * @return array
     */
    public function punchoutSessionsReturn(string $psid, array $data): array
    {
        $apiPath = str_replace(
            ['{psid}'],
            [$psid],
            '/v1/punchout/sessions/{psid}/return'
        );

        $apiParams = [];
        $apiParams['psid'] = $psid;
        $apiParams = \array_merge($apiParams, $data);

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
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @throws RevenexxException
     * @return array
     */
    public function punchoutTransferItemsList(?int $limit = null, ?int $offset = null, ?string $order = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/punchout/transfer-items'
        );

        $apiParams = [];

        if (!is_null($limit)) {
            $apiParams['limit'] = $limit;
        }

        if (!is_null($offset)) {
            $apiParams['offset'] = $offset;
        }

        if (!is_null($order)) {
            $apiParams['order'] = $order;
        }

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * @param string $name
     * @param float $quantity
     * @param string $transferId
     * @param ?string $currency
     * @param ?string $externalRef
     * @param ?float $lineGross
     * @param ?float $lineNet
     * @param ?array $metadata
     * @param ?int $position
     * @param ?string $productId
     * @param ?string $sku
     * @param ?float $taxRate
     * @param ?string $unit
     * @param ?float $unitPrice
     * @throws RevenexxException
     * @return array
     */
    public function punchoutTransferItemsCreate(string $name, float $quantity, string $transferId, ?string $currency = null, ?string $externalRef = null, ?float $lineGross = null, ?float $lineNet = null, ?array $metadata = null, ?int $position = null, ?string $productId = null, ?string $sku = null, ?float $taxRate = null, ?string $unit = null, ?float $unitPrice = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/punchout/transfer-items'
        );

        $apiParams = [];
        $apiParams['name'] = $name;
        $apiParams['quantity'] = $quantity;
        $apiParams['transfer_id'] = $transferId;

        if (!is_null($currency)) {
            $apiParams['currency'] = $currency;
        }

        if (!is_null($externalRef)) {
            $apiParams['external_ref'] = $externalRef;
        }

        if (!is_null($lineGross)) {
            $apiParams['line_gross'] = $lineGross;
        }

        if (!is_null($lineNet)) {
            $apiParams['line_net'] = $lineNet;
        }

        if (!is_null($metadata)) {
            $apiParams['metadata'] = $metadata;
        }

        if (!is_null($position)) {
            $apiParams['position'] = $position;
        }

        if (!is_null($productId)) {
            $apiParams['product_id'] = $productId;
        }

        if (!is_null($sku)) {
            $apiParams['sku'] = $sku;
        }

        if (!is_null($taxRate)) {
            $apiParams['tax_rate'] = $taxRate;
        }

        if (!is_null($unit)) {
            $apiParams['unit'] = $unit;
        }

        if (!is_null($unitPrice)) {
            $apiParams['unit_price'] = $unitPrice;
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

    /**
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function punchoutTransferItemsGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/punchout/transfer-items/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @throws RevenexxException
     * @return array
     */
    public function punchoutTransfersList(?int $limit = null, ?int $offset = null, ?string $order = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/punchout/transfers'
        );

        $apiParams = [];

        if (!is_null($limit)) {
            $apiParams['limit'] = $limit;
        }

        if (!is_null($offset)) {
            $apiParams['offset'] = $offset;
        }

        if (!is_null($order)) {
            $apiParams['order'] = $order;
        }

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * @param string $accountId
     * @param string $correlationKey
     * @param string $protocol
     * @param string $sessionId
     * @param ?string $cartId
     * @param ?string $contactId
     * @param ?string $currency
     * @param ?int $itemCount
     * @param ?string $matchedAt
     * @param ?string $matchedOrderId
     * @param ?string $organizationId
     * @param ?array $payload
     * @param ?string $targetUrl
     * @param ?float $totalGross
     * @param ?float $totalNet
     * @param ?string $transferredAt
     * @throws RevenexxException
     * @return array
     */
    public function punchoutTransfersCreate(string $accountId, string $correlationKey, string $protocol, string $sessionId, ?string $cartId = null, ?string $contactId = null, ?string $currency = null, ?int $itemCount = null, ?string $matchedAt = null, ?string $matchedOrderId = null, ?string $organizationId = null, ?array $payload = null, ?string $targetUrl = null, ?float $totalGross = null, ?float $totalNet = null, ?string $transferredAt = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/punchout/transfers'
        );

        $apiParams = [];
        $apiParams['account_id'] = $accountId;
        $apiParams['correlation_key'] = $correlationKey;
        $apiParams['protocol'] = $protocol;
        $apiParams['session_id'] = $sessionId;

        if (!is_null($cartId)) {
            $apiParams['cart_id'] = $cartId;
        }

        if (!is_null($contactId)) {
            $apiParams['contact_id'] = $contactId;
        }

        if (!is_null($currency)) {
            $apiParams['currency'] = $currency;
        }

        if (!is_null($itemCount)) {
            $apiParams['item_count'] = $itemCount;
        }

        if (!is_null($matchedAt)) {
            $apiParams['matched_at'] = $matchedAt;
        }

        if (!is_null($matchedOrderId)) {
            $apiParams['matched_order_id'] = $matchedOrderId;
        }

        if (!is_null($organizationId)) {
            $apiParams['organization_id'] = $organizationId;
        }

        if (!is_null($payload)) {
            $apiParams['payload'] = $payload;
        }

        if (!is_null($targetUrl)) {
            $apiParams['target_url'] = $targetUrl;
        }

        if (!is_null($totalGross)) {
            $apiParams['total_gross'] = $totalGross;
        }

        if (!is_null($totalNet)) {
            $apiParams['total_net'] = $totalNet;
        }

        if (!is_null($transferredAt)) {
            $apiParams['transferred_at'] = $transferredAt;
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

    /**
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function punchoutTransfersGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/punchout/transfers/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * @param string $id
     * @param ?string $accountId
     * @param ?string $cartId
     * @param ?string $contactId
     * @param ?string $correlationKey
     * @param ?string $currency
     * @param ?int $itemCount
     * @param ?string $matchedAt
     * @param ?string $matchedOrderId
     * @param ?string $organizationId
     * @param ?array $payload
     * @param ?string $protocol
     * @param ?string $sessionId
     * @param ?string $targetUrl
     * @param ?float $totalGross
     * @param ?float $totalNet
     * @param ?string $transferredAt
     * @throws RevenexxException
     * @return array
     */
    public function punchoutTransfersUpdate(string $id, ?string $accountId = null, ?string $cartId = null, ?string $contactId = null, ?string $correlationKey = null, ?string $currency = null, ?int $itemCount = null, ?string $matchedAt = null, ?string $matchedOrderId = null, ?string $organizationId = null, ?array $payload = null, ?string $protocol = null, ?string $sessionId = null, ?string $targetUrl = null, ?float $totalGross = null, ?float $totalNet = null, ?string $transferredAt = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/punchout/transfers/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($accountId)) {
            $apiParams['account_id'] = $accountId;
        }

        if (!is_null($cartId)) {
            $apiParams['cart_id'] = $cartId;
        }

        if (!is_null($contactId)) {
            $apiParams['contact_id'] = $contactId;
        }

        if (!is_null($correlationKey)) {
            $apiParams['correlation_key'] = $correlationKey;
        }

        if (!is_null($currency)) {
            $apiParams['currency'] = $currency;
        }

        if (!is_null($itemCount)) {
            $apiParams['item_count'] = $itemCount;
        }

        if (!is_null($matchedAt)) {
            $apiParams['matched_at'] = $matchedAt;
        }

        if (!is_null($matchedOrderId)) {
            $apiParams['matched_order_id'] = $matchedOrderId;
        }

        if (!is_null($organizationId)) {
            $apiParams['organization_id'] = $organizationId;
        }

        if (!is_null($payload)) {
            $apiParams['payload'] = $payload;
        }

        if (!is_null($protocol)) {
            $apiParams['protocol'] = $protocol;
        }

        if (!is_null($sessionId)) {
            $apiParams['session_id'] = $sessionId;
        }

        if (!is_null($targetUrl)) {
            $apiParams['target_url'] = $targetUrl;
        }

        if (!is_null($totalGross)) {
            $apiParams['total_gross'] = $totalGross;
        }

        if (!is_null($totalNet)) {
            $apiParams['total_net'] = $totalNet;
        }

        if (!is_null($transferredAt)) {
            $apiParams['transferred_at'] = $transferredAt;
        }

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
     * Discovery for the vocabulary routes: the enums this app enforces, each with
     * its name, its title and its description — and deliberately WITHOUT its
     * values, so a UI can cache this one small answer and fetch only the value
     * sets it renders. Names: entry-probe-outcome, mapping-mutators,
     * mapping-sources. Fetch one with GET /punchout/vocabularies/{name}.
     *
     * @throws RevenexxException
     * @return array
     */
    public function punchoutVocabulariesList(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/punchout/vocabularies'
        );

        $apiParams = [];

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * One vocabulary in full: every permitted value with its title, its
     * description and the badge tone a UI colours it with. The values are read
     * out of the column's CHECK constraint, so the served set IS the set the
     * database accepts and the set the mapping engine understands — a mapping
     * editor offering anything else would produce silently empty fields.
     * `mapping-sources` carries the 24 sources of ADR-0003 (three of them
     * namespaced `cxml.*`, offered only for a cXML account) and
     * `mapping-mutators` the 17 chainable mutators; each value's description
     * names the config keys it reads and which of them are required. Answers 404
     * for an unknown name.
     *
     * @param PunchoutVocabulariesGetName $name
     * @throws RevenexxException
     * @return array
     */
    public function punchoutVocabulariesGet(PunchoutVocabulariesGetName $name): array
    {
        $apiPath = str_replace(
            ['{name}'],
            [$name],
            '/v1/punchout/vocabularies/{name}'
        );

        $apiParams = [];
        $apiParams['name'] = $name;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }
}