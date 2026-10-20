<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;
use Revenexx\Enums\Tone;

class CustomersRoles extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * What the role editor offers: every permission with its words per language,
     * its area, the app that owns it and whether the platform enforces it yet,
     * plus the built-in set of every built-in role — what resetting a role to
     * its default restores.
     *
     * @throws RevenexxException
     * @return array
     */
    public function customersPermissionsLedger(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/customers/permissions/ledger'
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
     * One call for a whole new role: its name, and the permissions it grants. The
     * key is made from the name when none is sent — 'Einkauf Zentrale' becomes
     * `einkauf-zentrale`, German letters spelled out — and it is fixed from
     * then on, because every contact holding the role stores it. Seeds the
     * built-in roles first when the tenant never wrote them down, so the first
     * role of a tenant's own leaves what every existing contact may do exactly as
     * it was.
     *
     * @param string $title
     * @param ?bool $active
     * @param ?string $description
     * @param ?array $descriptions
     * @param ?bool $isDefault
     * @param ?string $key
     * @param ?array $labels
     * @param ?array $permissions
     * @param ?int $position
     * @throws RevenexxException
     * @return array
     */
    public function customersRolesCreate(string $title, ?bool $active = null, ?string $description = null, ?array $descriptions = null, ?bool $isDefault = null, ?string $key = null, ?array $labels = null, ?array $permissions = null, ?int $position = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/customers/roles'
        );

        $apiParams = [];
        $apiParams['title'] = $title;

        if (!is_null($active)) {
            $apiParams['active'] = $active;
        }
        $apiParams['description'] = $description;
        $apiParams['descriptions'] = $descriptions;

        if (!is_null($isDefault)) {
            $apiParams['is_default'] = $isDefault;
        }

        if (!is_null($key)) {
            $apiParams['key'] = $key;
        }
        $apiParams['labels'] = $labels;

        if (!is_null($permissions)) {
            $apiParams['permissions'] = $permissions;
        }
        $apiParams['position'] = $position;

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
     * A role's words, its rank, the default flag and whether it is still offered
     * — not its key, which every contact holding the role stores, and not its
     * grants, which `PUT /customers/roles/{key}/permissions` replaces. A role
     * marked inactive is no longer offered when a contact gets a role (the roles
     * vocabulary leaves it out), while every contact that holds it keeps it and
     * keeps its grants. Two roles stay on offer: a built-in one, which is what
     * every tenant starts from, and the default, which is what a new contact
     * gets. Promoting a role to the default demotes the previous one; clearing
     * the flag on the default changes nothing. Seeds the built-in roles first
     * when the tenant never wrote them down.
     *
     * @param string $key
     * @param ?bool $active
     * @param ?string $description
     * @param ?array $descriptions
     * @param ?bool $isDefault
     * @param ?array $labels
     * @param ?int $position
     * @param ?string $title
     * @param ?Tone $tone
     * @throws RevenexxException
     * @return array
     */
    public function customersRolesUpdate(string $key, ?bool $active = null, ?string $description = null, ?array $descriptions = null, ?bool $isDefault = null, ?array $labels = null, ?int $position = null, ?string $title = null, ?Tone $tone = null): array
    {
        $apiPath = str_replace(
            ['{key}'],
            [$key],
            '/v1/customers/roles/{key}'
        );

        $apiParams = [];
        $apiParams['key'] = $key;

        if (!is_null($active)) {
            $apiParams['active'] = $active;
        }
        $apiParams['description'] = $description;
        $apiParams['descriptions'] = $descriptions;

        if (!is_null($isDefault)) {
            $apiParams['is_default'] = $isDefault;
        }
        $apiParams['labels'] = $labels;

        if (!is_null($position)) {
            $apiParams['position'] = $position;
        }

        if (!is_null($title)) {
            $apiParams['title'] = $title;
        }

        if (!is_null($tone)) {
            $apiParams['tone'] = $tone;
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
     * A new role with the permissions of `key` and a name of its own — the
     * quick way to a role that differs from a built-in by one grant. The source
     * may be a built-in the tenant never wrote down; the built-ins are seeded
     * first, exactly as a create does. The copy is the tenant's own role, never a
     * built-in, and it is not the default.
     *
     * @param string $key
     * @param string $title
     * @param ?string $description
     * @param ?string $keyBody
     * @throws RevenexxException
     * @return array
     */
    public function customersRolesCopy(string $key, string $title, ?string $description = null, ?string $keyBody = null): array
    {
        $apiPath = str_replace(
            ['{key}'],
            [$key],
            '/v1/customers/roles/{key}/copy'
        );

        $apiParams = [];
        $apiParams['key'] = $key;
        $apiParams['title'] = $title;
        $apiParams['description'] = $description;

        if (!is_null($keyBody)) {
            $apiParams['key'] = $keyBody;
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
     * The whole new set in one call — the shape a role editor actually
     * produces, and the one that cannot leave a half-applied grant behind if a
     * second call fails. Seeds the built-in roles first when the tenant never
     * wrote them down, so editing works without calling /defaults. Permission
     * keys are free text on purpose: they belong to whichever app declared them,
     * and a grant for an app that is not installed simply has nothing to act on.
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