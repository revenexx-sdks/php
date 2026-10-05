<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;

class SalesRepsRoster extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * A rep is one field sales person, as a record this platform owns. They are
     * identified by a `code` an ERP already holds — never by their email
     * address, which is an ordinary nullable attribute here — and that code is
     * fixed once created, because every assignment and every impersonation entry
     * stores it. This is the roster: `?code=` resolves the one rep an ERP or a
     * customer record names, `?active=false` is the list of the ones who have
     * left, and `?territory=` groups a patch. Nothing in the answer is narrowed
     * by who is asking — this app resolves no principal of its own, so an
     * operator and a storefront caller read the same rows. That is a stated gap
     * rather than an oversight: the gateway injects its identity with no subject
     * header, and a rep resolved as a principal would arrive at every other app
     * as a buyer.
     *
     * @param ?string $id
     * @param ?string $code
     * @param ?string $name
     * @param ?string $email
     * @param ?string $phone
     * @param ?string $territory
     * @param ?bool $active
     * @param ?string $platformUserId
     * @param ?string $externalId
     * @param ?string $sourceSyncedAt
     * @param ?string $createdAt
     * @param ?string $updatedAt
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @throws RevenexxException
     * @return array
     */
    public function salesRepsRepsList(?string $id = null, ?string $code = null, ?string $name = null, ?string $email = null, ?string $phone = null, ?string $territory = null, ?bool $active = null, ?string $platformUserId = null, ?string $externalId = null, ?string $sourceSyncedAt = null, ?string $createdAt = null, ?string $updatedAt = null, ?int $limit = null, ?int $offset = null, ?string $order = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/sales-reps/reps'
        );

        $apiParams = [];

        if (!is_null($id)) {
            $apiParams['id'] = $id;
        }

        if (!is_null($code)) {
            $apiParams['code'] = $code;
        }

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

        if (!is_null($email)) {
            $apiParams['email'] = $email;
        }

        if (!is_null($phone)) {
            $apiParams['phone'] = $phone;
        }

        if (!is_null($territory)) {
            $apiParams['territory'] = $territory;
        }

        if (!is_null($active)) {
            $apiParams['active'] = $active;
        }

        if (!is_null($platformUserId)) {
            $apiParams['platform_user_id'] = $platformUserId;
        }

        if (!is_null($externalId)) {
            $apiParams['external_id'] = $externalId;
        }

        if (!is_null($sourceSyncedAt)) {
            $apiParams['source_synced_at'] = $sourceSyncedAt;
        }

        if (!is_null($createdAt)) {
            $apiParams['created_at'] = $createdAt;
        }

        if (!is_null($updatedAt)) {
            $apiParams['updated_at'] = $updatedAt;
        }

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
     * A rep is one field sales person, as a record this platform owns. They are
     * identified by a `code` an ERP already holds — never by their email
     * address, which is an ordinary nullable attribute here — and that code is
     * fixed once created, because every assignment and every impersonation entry
     * stores it. Two fields are owed and no more: `code` and `name`. That is
     * deliberate and it is the whole difference from the package this replaces
     * — an import that knows only a salesperson code and a name records a
     * usable rep, where an app keyed on the email address would have had to
     * invent one. A code this tenant already holds is refused with 409 rather
     * than merged into: the unique index `(tenant_id, code)` is the guard, the
     * pre-flight read only makes the refusal readable, and two simultaneous
     * creates are separated by the index rather than by that read. Nothing is
     * mailed and nobody is told — creating a rep grants no access at all,
     * because this release has no login to grant.
     *
     * @param string $code
     * @param string $name
     * @param ?bool $active
     * @param ?string $email
     * @param ?string $externalId
     * @param ?array $externalRefs
     * @param ?array $metadata
     * @param ?string $phone
     * @param ?string $platformUserId
     * @param ?array $sourceData
     * @param ?string $sourceSyncedAt
     * @param ?string $territory
     * @throws RevenexxException
     * @return array
     */
    public function salesRepsRepsCreate(string $code, string $name, ?bool $active = null, ?string $email = null, ?string $externalId = null, ?array $externalRefs = null, ?array $metadata = null, ?string $phone = null, ?string $platformUserId = null, ?array $sourceData = null, ?string $sourceSyncedAt = null, ?string $territory = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/sales-reps/reps'
        );

        $apiParams = [];
        $apiParams['code'] = $code;
        $apiParams['name'] = $name;

        if (!is_null($active)) {
            $apiParams['active'] = $active;
        }
        $apiParams['email'] = $email;
        $apiParams['external_id'] = $externalId;
        $apiParams['external_refs'] = $externalRefs;
        $apiParams['metadata'] = $metadata;
        $apiParams['phone'] = $phone;
        $apiParams['platform_user_id'] = $platformUserId;
        $apiParams['source_data'] = $sourceData;
        $apiParams['source_synced_at'] = $sourceSyncedAt;
        $apiParams['territory'] = $territory;

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
     * A rep is one field sales person, as a record this platform owns. They are
     * identified by a `code` an ERP already holds — never by their email
     * address, which is an ordinary nullable attribute here — and that code is
     * fixed once created, because every assignment and every impersonation entry
     * stores it. Almost always the wrong call, and the refusals say so. A rep who
     * still carries customers is a 409 naming how many, and a rep who has ever
     * acted for a buyer is a 409 too — the log references them by code and has
     * no reference this app could cascade, so deleting them would leave the only
     * record that a person acted for a buyer pointing at nobody. `PUT` with
     * `active: false` is what "this person has left" means, and it keeps
     * everything the history needs. What this route is for is a row created by
     * mistake: a typo in a code, a duplicate an import filed before it was fixed.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function salesRepsRepsDelete(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/sales-reps/reps/{id}'
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
     * A rep is one field sales person, as a record this platform owns. They are
     * identified by a `code` an ERP already holds — never by their email
     * address, which is an ordinary nullable attribute here — and that code is
     * fixed once created, because every assignment and every impersonation entry
     * stores it. The route that turns an id back into a rep. Note which handle
     * goes where: this path takes the row's own `id`, while `assignments` and
     * `impersonations` reference the rep by `code` — so a caller holding a code
     * reads GET /sales-reps/reps?code=… instead of putting it here, where it
     * would fail the uuid cast.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function salesRepsRepsGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/sales-reps/reps/{id}'
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
     * A rep is one field sales person, as a record this platform owns. They are
     * identified by a `code` an ERP already holds — never by their email
     * address, which is an ordinary nullable attribute here — and that code is
     * fixed once created, because every assignment and every impersonation entry
     * stores it. A partial update: omitted fields keep their value, and a body
     * carrying no field at all is refused rather than answered as a no-op. ⚠
     * This is where a rep is DEACTIVATED, with `active: false`, and that is what
     * "this person has left" means here — the record stays, the assignments
     * stay, and the impersonation entries naming their code keep pointing at
     * somebody, so the history stays answerable. `code` may be sent only
     * unchanged: both other tables store it and neither has a reference this app
     * could follow, so a rename would silently orphan every one of them. The
     * provenance columns are the other ones to leave alone — `source_data`
     * holds the ETag a write-back to the ERP has to return, and an edit here does
     * not touch it.
     *
     * @param string $id
     * @param ?bool $active
     * @param ?string $code
     * @param ?string $email
     * @param ?string $externalId
     * @param ?array $externalRefs
     * @param ?array $metadata
     * @param ?string $name
     * @param ?string $phone
     * @param ?string $platformUserId
     * @param ?array $sourceData
     * @param ?string $sourceSyncedAt
     * @param ?string $territory
     * @throws RevenexxException
     * @return array
     */
    public function salesRepsRepsUpdate(string $id, ?bool $active = null, ?string $code = null, ?string $email = null, ?string $externalId = null, ?array $externalRefs = null, ?array $metadata = null, ?string $name = null, ?string $phone = null, ?string $platformUserId = null, ?array $sourceData = null, ?string $sourceSyncedAt = null, ?string $territory = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/sales-reps/reps/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($active)) {
            $apiParams['active'] = $active;
        }

        if (!is_null($code)) {
            $apiParams['code'] = $code;
        }
        $apiParams['email'] = $email;
        $apiParams['external_id'] = $externalId;
        $apiParams['external_refs'] = $externalRefs;
        $apiParams['metadata'] = $metadata;

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }
        $apiParams['phone'] = $phone;
        $apiParams['platform_user_id'] = $platformUserId;
        $apiParams['source_data'] = $sourceData;
        $apiParams['source_synced_at'] = $sourceSyncedAt;
        $apiParams['territory'] = $territory;

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