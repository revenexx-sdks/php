<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;

class CustomersRoles extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * The whole catalogue in one read: every role a contact of this tenant can
     * hold, the permissions each one grants, and the built-in permission
     * vocabulary those grants are drawn from. Roles are held by a CONTACT and
     * apply inside that contact's organization; there is no global customer role.
     * Permissions are derived from the role at read time and never stored per
     * contact, so a role change takes effect immediately and cannot leave a stale
     * grant. The role to permission MAPPING is per tenant and configurable (PUT
     * /customers/roles/{key}/permissions); a tenant that has not configured
     * anything gets the built-ins and 'source' says which of the two answered.
     * Built-in roles, least to most privileged: viewer (Viewer), requester
     * (Requester), buyer (Buyer), approver (Approver), admin (Administrator). The
     * permission KEYS themselves come from the cross-app ledger — every
     * installed app declares what it enforces — so a tenant may grant a key
     * this list does not mention.
     *
     * @throws RevenexxException
     * @return array
     */
    public function customersRolesList(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/customers/roles'
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
     * Idempotent: a role that already exists is left completely alone, its
     * permissions included, so re-seeding never undoes a merchant's edits.
     * Creates viewer, requester, buyer, approver, admin with the built-in
     * mapping. A tenant that never calls this still behaves correctly — the
     * catalogue and every permission read fall back to the same built-ins.
     *
     * @param array $data
     * @throws RevenexxException
     * @return array
     */
    public function customersRolesDefaults(array $data): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/customers/roles/defaults'
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
     * The whole new set in one call — the shape a role editor actually
     * produces, and the one that cannot leave a half-applied grant behind if a
     * second call fails. Seeds the built-in roles first when the tenant has none,
     * so editing works without calling /defaults. Permission keys are free text
     * on purpose: they belong to whichever app declared them, and a grant for an
     * app that is not installed simply has nothing to act on.
     *
     * @param string $key
     * @param array $permissions
     * @throws RevenexxException
     * @return array
     */
    public function customersRolesPermissionsReplace(string $key, array $permissions): array
    {
        $apiPath = str_replace(
            ['{key}'],
            [$key],
            '/v1/customers/roles/{key}/permissions'
        );

        $apiParams = [];
        $apiParams['key'] = $key;
        $apiParams['permissions'] = $permissions;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PUT,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }
}