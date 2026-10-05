<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;
use Revenexx\Enums\Tone;
use Revenexx\Enums\SalesRepsVocabulariesGetName;

class SalesRepsCoverage extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * An assignment role is one of the roles THIS TENANT keeps for what a rep
     * does for a customer they carry — field sales, inside sales, a key-account
     * desk, or whatever a merchant's own sales organisation distinguishes. A
     * coverage row stores the `code`; this row carries the words a person reads
     * for it and the tone a screen colours it in. The set is a table and not a
     * fixed list because what those desks are called is the merchant's to state.
     * This is the operator's view of the set — the rows, filterable and paged,
     * in whatever order you ask for. A CLIENT that only wants to render a role
     * does not want this route: GET /sales-reps/vocabularies/assignment-roles
     * answers the same set keyed by code, ordered by `position`, with the titles
     * per language already merged, and it is the shape every other vocabulary on
     * this platform is read in. A tenant who has never been seeded reads an EMPTY
     * list here, because the seed runs on install and on POST
     * /sales-reps/assignment-roles/defaults; the vocabulary route seeds on an
     * empty read and this one does not.
     *
     * @param ?string $id
     * @param ?string $code
     * @param ?string $title
     * @param ?string $description
     * @param ?bool $isDefault
     * @param ?Tone $tone
     * @param ?int $position
     * @param ?bool $isSystem
     * @param ?string $createdAt
     * @param ?string $updatedAt
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @throws RevenexxException
     * @return array
     */
    public function salesRepsAssignmentRolesList(?string $id = null, ?string $code = null, ?string $title = null, ?string $description = null, ?bool $isDefault = null, ?Tone $tone = null, ?int $position = null, ?bool $isSystem = null, ?string $createdAt = null, ?string $updatedAt = null, ?int $limit = null, ?int $offset = null, ?string $order = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/sales-reps/assignment-roles'
        );

        $apiParams = [];

        if (!is_null($id)) {
            $apiParams['id'] = $id;
        }

        if (!is_null($code)) {
            $apiParams['code'] = $code;
        }

        if (!is_null($title)) {
            $apiParams['title'] = $title;
        }

        if (!is_null($description)) {
            $apiParams['description'] = $description;
        }

        if (!is_null($isDefault)) {
            $apiParams['is_default'] = $isDefault;
        }

        if (!is_null($tone)) {
            $apiParams['tone'] = $tone;
        }

        if (!is_null($position)) {
            $apiParams['position'] = $position;
        }

        if (!is_null($isSystem)) {
            $apiParams['is_system'] = $isSystem;
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
     * An assignment role is one of the roles THIS TENANT keeps for what a rep
     * does for a customer they carry — field sales, inside sales, a key-account
     * desk, or whatever a merchant's own sales organisation distinguishes. A
     * coverage row stores the `code`; this row carries the words a person reads
     * for it and the tone a screen colours it in. The set is a table and not a
     * fixed list because what those desks are called is the merchant's to state.
     * Reach for this when a merchant's sales organisation distinguishes something
     * the three seeded roles do not — a technical adviser, a branch counter, a
     * desk that only handles framework terms. `code` and `title` are owed and the
     * code should be treated as permanent: a coverage row stores it, nothing in
     * the database points at it, so renaming it later leaves every row carrying
     * the old one. Adding a role changes nothing on its own — a coverage row
     * has to name it before it means anything, and the mapping from a source
     * system's own values onto these codes is made where the import runs.
     *
     * @param string $code
     * @param string $title
     * @param ?string $description
     * @param ?array $descriptions
     * @param ?bool $isDefault
     * @param ?bool $isSystem
     * @param ?array $labels
     * @param ?int $position
     * @param ?Tone $tone
     * @throws RevenexxException
     * @return array
     */
    public function salesRepsAssignmentRolesCreate(string $code, string $title, ?string $description = null, ?array $descriptions = null, ?bool $isDefault = null, ?bool $isSystem = null, ?array $labels = null, ?int $position = null, ?Tone $tone = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/sales-reps/assignment-roles'
        );

        $apiParams = [];
        $apiParams['code'] = $code;
        $apiParams['title'] = $title;
        $apiParams['description'] = $description;
        $apiParams['descriptions'] = $descriptions;

        if (!is_null($isDefault)) {
            $apiParams['is_default'] = $isDefault;
        }

        if (!is_null($isSystem)) {
            $apiParams['is_system'] = $isSystem;
        }
        $apiParams['labels'] = $labels;

        if (!is_null($position)) {
            $apiParams['position'] = $position;
        }

        if (!is_null($tone)) {
            $apiParams['tone'] = $tone;
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
     * Puts the three generic roles this app ships — `field_sales`,
     * `inside_sales`, `key_account` — into a tenant that does not have them,
     * and leaves alone every one they already do. Idempotent BY CODE: a role the
     * merchant renamed, re-toned, reordered or retired is untouched, so calling
     * it twice is free and calling it after a year changes nothing a merchant
     * did. It exists because the platform's installed announcement does NOT
     * reliably fire on a marketplace install, so anything that needs the set to
     * be there calls this rather than trusting it. Nothing else is seeded — no
     * rep and no coverage row, because a rep is somebody a merchant employs and
     * an invented one would be a person nobody hired appearing on a customer
     * record. None of the three carries `is_default`: which role an unmapped
     * source value means is the tenant's to say, and a default seeded here would
     * silently label every imported assignment.
     *
     * @param array $data
     * @throws RevenexxException
     * @return array
     */
    public function salesRepsAssignmentRolesDefaults(array $data): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/sales-reps/assignment-roles/defaults'
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
     * An assignment role is one of the roles THIS TENANT keeps for what a rep
     * does for a customer they carry — field sales, inside sales, a key-account
     * desk, or whatever a merchant's own sales organisation distinguishes. A
     * coverage row stores the `code`; this row carries the words a person reads
     * for it and the tone a screen colours it in. The set is a table and not a
     * fixed list because what those desks are called is the merchant's to state.
     * ⚠ What is NOT checked here is the thing that matters: a coverage row
     * stores the CODE and not this id, so nothing refuses the delete while rows
     * still carry it, and those rows keep a role code the vocabulary no longer
     * resolves. The set is `closed`, so a client reads such a value as stale data
     * rather than as a missing label — but it reads no title and no tone for it
     * either, and a screen that was showing "Inside sales" starts showing a bare
     * code. Move the rows onto another role first (PUT
     * /sales-reps/assignments/{id}), or leave the role in place and give it a
     * `title` that says it is retired. Deleting all of them is undone by the next
     * read of GET /sales-reps/vocabularies/assignment-roles, which seeds the
     * shipped set back into an empty table.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function salesRepsAssignmentRolesDelete(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/sales-reps/assignment-roles/{id}'
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
     * An assignment role is one of the roles THIS TENANT keeps for what a rep
     * does for a customer they carry — field sales, inside sales, a key-account
     * desk, or whatever a merchant's own sales organisation distinguishes. A
     * coverage row stores the `code`; this row carries the words a person reads
     * for it and the tone a screen colours it in. The set is a table and not a
     * fixed list because what those desks are called is the merchant's to state.
     * This reads one of them by ROW ID, which is what an editor holds after
     * listing the set and is not what anything else stores: a coverage row
     * carries the CODE. A caller holding a code cannot use this route — filter
     * the collection with `?code=`, or read GET
     * /sales-reps/vocabularies/assignment-roles, which is keyed the way the rest
     * of the platform refers to these values.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function salesRepsAssignmentRolesGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/sales-reps/assignment-roles/{id}'
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
     * An assignment role is one of the roles THIS TENANT keeps for what a rep
     * does for a customer they carry — field sales, inside sales, a key-account
     * desk, or whatever a merchant's own sales organisation distinguishes. A
     * coverage row stores the `code`; this row carries the words a person reads
     * for it and the tone a screen colours it in. The set is a table and not a
     * fixed list because what those desks are called is the merchant's to state.
     * A partial update: omitted fields keep their value, and a body carrying no
     * field at all is refused rather than answered as a no-op. The safe edits are
     * the readable ones — `title`, `labels`, `description`, `descriptions`,
     * `tone`, `position` — and they reach every screen at once, which is the
     * point of the set living here. `code` is the one to leave alone: a coverage
     * row stores it and nothing points at it, so moving it leaves every row that
     * named the old value carrying a code the vocabulary no longer resolves. A
     * role this app seeded may be edited exactly like one the tenant added;
     * `is_system` records who put it there and licenses nothing.
     *
     * @param string $id
     * @param ?string $code
     * @param ?string $description
     * @param ?array $descriptions
     * @param ?bool $isDefault
     * @param ?bool $isSystem
     * @param ?array $labels
     * @param ?int $position
     * @param ?string $title
     * @param ?Tone $tone
     * @throws RevenexxException
     * @return array
     */
    public function salesRepsAssignmentRolesUpdate(string $id, ?string $code = null, ?string $description = null, ?array $descriptions = null, ?bool $isDefault = null, ?bool $isSystem = null, ?array $labels = null, ?int $position = null, ?string $title = null, ?Tone $tone = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/sales-reps/assignment-roles/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($code)) {
            $apiParams['code'] = $code;
        }
        $apiParams['description'] = $description;
        $apiParams['descriptions'] = $descriptions;

        if (!is_null($isDefault)) {
            $apiParams['is_default'] = $isDefault;
        }

        if (!is_null($isSystem)) {
            $apiParams['is_system'] = $isSystem;
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
     * An assignment is one rep carrying one customer. The pair is the row and the
     * pair is unique per tenant: a rep carries many organizations, an
     * organization may have several reps, and the same pair cannot be recorded
     * twice. Two columns say what the pair alone cannot: `role` is what the rep
     * DOES for this customer, as one of the roles this tenant keeps, and
     * `is_primary` marks THE responsible rep — at most one per customer. Read
     * in either direction, and both are ordinary: `?rep_code=` is one rep's
     * customers, `?organization_id=` is one customer's reps. The second is the
     * reason this is a table and not a column on the organization — field sales
     * plus inside sales share a customer, and a single column could hold only one
     * of them. A deactivated rep's assignments are still here, and are not marked
     * in any way: join the rep by code to find out whether the person is still
     * working.
     *
     * @param ?string $id
     * @param ?string $repCode
     * @param ?string $organizationId
     * @param ?string $role
     * @param ?bool $isPrimary
     * @param ?string $createdAt
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @throws RevenexxException
     * @return array
     */
    public function salesRepsAssignmentsList(?string $id = null, ?string $repCode = null, ?string $organizationId = null, ?string $role = null, ?bool $isPrimary = null, ?string $createdAt = null, ?int $limit = null, ?int $offset = null, ?string $order = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/sales-reps/assignments'
        );

        $apiParams = [];

        if (!is_null($id)) {
            $apiParams['id'] = $id;
        }

        if (!is_null($repCode)) {
            $apiParams['rep_code'] = $repCode;
        }

        if (!is_null($organizationId)) {
            $apiParams['organization_id'] = $organizationId;
        }

        if (!is_null($role)) {
            $apiParams['role'] = $role;
        }

        if (!is_null($isPrimary)) {
            $apiParams['is_primary'] = $isPrimary;
        }

        if (!is_null($createdAt)) {
            $apiParams['created_at'] = $createdAt;
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
     * An assignment is one rep carrying one customer. The pair is the row and the
     * pair is unique per tenant: a rep carries many organizations, an
     * organization may have several reps, and the same pair cannot be recorded
     * twice. Two columns say what the pair alone cannot: `role` is what the rep
     * DOES for this customer, as one of the roles this tenant keeps, and
     * `is_primary` marks THE responsible rep — at most one per customer. Both
     * fields are owed. Recording the same pair twice is refused with a 409 that
     * carries the id of the row already there — not answered as a no-op — so
     * a caller that retried after a timeout learns which of the two things
     * happened. The unique index `(tenant_id, rep_code, organization_id)` is the
     * guard and the pre-flight read only makes the refusal readable. `rep_code`
     * has to name a rep this tenant keeps, checked on every write because there
     * is no foreign key to do it: the reference is by code precisely so an import
     * can write coverage before it has read an id out of this app. There is
     * deliberately no update route — changing either half of the pair is a
     * different pair.
     *
     * @param string $organizationId
     * @param string $repCode
     * @param ?string $role
     * @throws RevenexxException
     * @return array
     */
    public function salesRepsAssignmentsCreate(string $organizationId, string $repCode, ?string $role = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/sales-reps/assignments'
        );

        $apiParams = [];
        $apiParams['organization_id'] = $organizationId;
        $apiParams['rep_code'] = $repCode;
        $apiParams['role'] = $role;

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
     * An assignment is one rep carrying one customer. The pair is the row and the
     * pair is unique per tenant: a rep carries many organizations, an
     * organization may have several reps, and the same pair cannot be recorded
     * twice. Two columns say what the pair alone cannot: `role` is what the rep
     * DOES for this customer, as one of the roles this tenant keeps, and
     * `is_primary` marks THE responsible rep — at most one per customer.
     * Removing the pair says this rep no longer carries this customer. It touches
     * neither side: the rep stays, the organization is another app's row
     * entirely, and any impersonation entry recording that this rep once acted
     * inside that organization stays exactly where it is — that is a fact about
     * the past and not a permission. A rep who is leaving altogether is
     * deactivated instead, which keeps their coverage readable.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function salesRepsAssignmentsDelete(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/sales-reps/assignments/{id}'
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
     * An assignment is one rep carrying one customer. The pair is the row and the
     * pair is unique per tenant: a rep carries many organizations, an
     * organization may have several reps, and the same pair cannot be recorded
     * twice. Two columns say what the pair alone cannot: `role` is what the rep
     * DOES for this customer, as one of the roles this tenant keeps, and
     * `is_primary` marks THE responsible rep — at most one per customer. The
     * route that turns an id back into a pair. It exists for a client that held
     * one — the create answers the id, and the 409 for a duplicate carries the
     * id of the row that was already there — rather than because anything here
     * is worth reading on its own.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function salesRepsAssignmentsGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/sales-reps/assignments/{id}'
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
     * An assignment is one rep carrying one customer. The pair is the row and the
     * pair is unique per tenant: a rep carries many organizations, an
     * organization may have several reps, and the same pair cannot be recorded
     * twice. Two columns say what the pair alone cannot: `role` is what the rep
     * DOES for this customer, as one of the roles this tenant keeps, and
     * `is_primary` marks THE responsible rep — at most one per customer. This
     * route applies `role` and NOTHING else, and it exists for one reason: a
     * source system delivers coverage with no role, so the classification is made
     * here afterwards. The alternative — deleting the pair and recording it
     * again — resets `created_at`, which is the only answer to "since when has
     * this rep carried this account", and fires a delete and a create at every
     * consumer, telling them coverage ended and restarted when it never lapsed.
     * ⚠ The PAIR is still unchangeable: `rep_code` or `organization_id` sent
     * with a different value is refused rather than ignored, because swapping
     * either half is a different pair and a caller PUTting a whole record has to
     * learn that the field was never going to be applied. `is_primary` is refused
     * too, and for its own reason — promoting one rep has to demote the
     * incumbent in the same call, which is what POST
     * /sales-reps/assignments/{id}/make-primary is. Sending `role: null`, or an
     * empty string, takes the role off again.
     *
     * @param string $id
     * @param ?string $role
     * @throws RevenexxException
     * @return array
     */
    public function salesRepsAssignmentsUpdate(string $id, ?string $role = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/sales-reps/assignments/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams['role'] = $role;

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
     * An assignment is one rep carrying one customer. The pair is the row and the
     * pair is unique per tenant: a rep carries many organizations, an
     * organization may have several reps, and the same pair cannot be recorded
     * twice. Two columns say what the pair alone cannot: `role` is what the rep
     * DOES for this customer, as one of the roles this tenant keeps, and
     * `is_primary` marks THE responsible rep — at most one per customer. This
     * promotes THIS assignment and demotes whoever held the flag for the SAME
     * customer, in one call. The flag is a single answer per customer rather than
     * a per-row opinion: a source system carries exactly one responsible
     * salesperson per debtor while this table is many-to-many, so without it "the
     * responsible one" cannot be told apart from "also covers them", and with two
     * of them it cannot either.
     * 
     * It is a route and not a field for a reason worth knowing before reaching
     * for the write instead. A plain `is_primary: true` runs into the partial
     * unique index `(tenant_id, organization_id) WHERE is_primary` and answers
     * 409, which leaves the caller to unset the incumbent first: two writes, in
     * an order that matters, with a window in between where the customer has
     * either no responsible rep or — if the second call never lands — still
     * the old one, and no way to tell which happened.
     * 
     * The write is as small as the change: one write per row whose flag was
     * wrong, and none at all for the rows that were already right. So an
     * assignment that already holds the flag is answered 200 with nothing written
     * and an empty `demoted`, which is what makes a repeated call free; a
     * customer that had no responsible rep yet is answered with this one promoted
     * and an empty `demoted` as well — the two cases differ in what was
     * written, not in the answer's shape. A rep may be the responsible one for
     * any number of customers: what is exclusive is the customer's side of the
     * pair.
     *
     * @param string $id
     * @param array $data
     * @throws RevenexxException
     * @return array
     */
    public function salesRepsAssignmentsMakePrimary(string $id, array $data): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/sales-reps/assignments/{id}/make-primary'
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
     * Discovery for the vocabulary routes: the value sets this app publishes,
     * each with its name, its title and its description and deliberately WITHOUT
     * its values, so finding out what exists costs one small call and not one per
     * vocabulary. Names: assignment-roles. Fetch one with GET
     * /sales-reps/vocabularies/{name}; a client holding the qualified pair
     * 'sales-reps.<name>' builds that URL from the pair alone and needs to know
     * nothing else about this app.
     *
     * @throws RevenexxException
     * @return array
     */
    public function salesRepsVocabulariesList(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/sales-reps/vocabularies'
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
     * One vocabulary in full: every permitted value, each carrying the title and
     * description a person reads for it and the badge tone a UI colours it with,
     * so a client renders a role without a hard-coded table of its own. `source`
     * says who OWNS the set, and here it is always 'table' — the values are the
     * TENANT's own rows, read per request and ordered by the position they gave
     * them, so a merchant extends the set without waiting for a release of this
     * app, and reading the set is what seeds the shipped one into a tenant that
     * has never had it. `closed` is true all the same: the set is exhaustive at
     * this moment, so a value outside it is stale data rather than a missing
     * label — which is exactly the state a coverage row is left in when the
     * role it names is deleted. Names: assignment-roles.
     *
     * @param SalesRepsVocabulariesGetName $name
     * @throws RevenexxException
     * @return array
     */
    public function salesRepsVocabulariesGet(SalesRepsVocabulariesGetName $name): array
    {
        $apiPath = str_replace(
            ['{name}'],
            [$name],
            '/v1/sales-reps/vocabularies/{name}'
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