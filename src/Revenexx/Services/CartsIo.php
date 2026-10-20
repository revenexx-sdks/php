<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;
use Revenexx\Enums\CartExportFormat;
use Revenexx\Enums\CartIoFieldEntity;
use Revenexx\Enums\CartIoFieldRole;
use Revenexx\Enums\CartIoDirection;
use Revenexx\Enums\CartIoEntity;
use Revenexx\Enums\CartIoFormat;
use Revenexx\Enums\CartIoApplyMode;

class CartsIo extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * Renders every cart a filter selects, through one export profile, a page at
     * a time. Each cart's document is exactly what carts.export answers for it
     * through the same profile — as JSON `{carts: [{cart, items}, …]}`, every
     * element importable on its own through carts.import; as CSV the lines of
     * every cart under one header, each row led by `cart_id`. Owner, status, a
     * creation-date range and a market narrow the selection; `filter` echoes what
     * was applied. The call never answers "all": it scans at most `limit` carts
     * in id order and hands back `next_cursor` until the scan is through. Because
     * the end of the date range and the market are held against each scanned
     * cart, a page can carry fewer carts than `limit`, even none, and still have
     * a next one — keep calling until `next_cursor` is null. Nothing is stored
     * and nothing about any cart changes.
     *
     * @param ?string $contactId
     * @param ?string $createdFrom
     * @param ?string $createdTo
     * @param ?string $cursor
     * @param ?CartExportFormat $format
     * @param ?int $limit
     * @param ?string $market
     * @param ?string $profileId
     * @param ?mixed $status
     * @throws RevenexxException
     * @return array
     */
    public function cartsExportAll(?string $contactId = null, ?string $createdFrom = null, ?string $createdTo = null, ?string $cursor = null, ?CartExportFormat $format = null, ?int $limit = null, ?string $market = null, ?string $profileId = null, mixed $status = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/carts/export'
        );

        $apiParams = [];
        $apiParams['contact_id'] = $contactId;

        if (!is_null($createdFrom)) {
            $apiParams['created_from'] = $createdFrom;
        }

        if (!is_null($createdTo)) {
            $apiParams['created_to'] = $createdTo;
        }
        $apiParams['cursor'] = $cursor;

        if (!is_null($format)) {
            $apiParams['format'] = $format;
        }

        if (!is_null($limit)) {
            $apiParams['limit'] = $limit;
        }

        if (!is_null($market)) {
            $apiParams['market'] = $market;
        }
        $apiParams['profile_id'] = $profileId;

        if (!is_null($status)) {
            $apiParams['status'] = $status;
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
     * Reads a payload of lines into a cart — the bulk-order path a buyer pastes
     * a spreadsheet into. With `target_cart_id` the lines land in that cart,
     * which must be active, and the profile's `apply_mode` decides what happens
     * to the lines already there: 'replace' clears them first, 'insert' and
     * 'append' both add. Without a target a new cart is created, and an OWNER is
     * then required — `contact_id` or `session_key` — because a cart with
     * neither cannot exist. `profile_id` names an IMPORT profile; without one the
     * payload is read ad hoc, as Excel when `xlsx` is present, as CSV when `csv`
     * is present and as JSON otherwise. The lines fold into identical product
     * lines exactly as carts.items.create does, so `imported_lines` counts the
     * lines READ and the cart may have gained fewer rows than that. A payload
     * that parses to no line at all is a 400 rather than a quiet no-op.
     *
     * @param ?string $sessionKey
     * @param ?string $contactId
     * @param ?string $csv
     * @param ?string $name
     * @param ?string $organizationId
     * @param ?array $payload
     * @param ?string $profileId
     * @param ?string $sessionKeyBody
     * @param ?string $targetCartId
     * @param ?string $xlsx
     * @throws RevenexxException
     * @return array
     */
    public function cartsImport(?string $sessionKey = null, ?string $contactId = null, ?string $csv = null, ?string $name = null, ?string $organizationId = null, ?array $payload = null, ?string $profileId = null, ?string $sessionKeyBody = null, ?string $targetCartId = null, ?string $xlsx = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/carts/import'
        );

        $apiParams = [];

        if (!is_null($sessionKey)) {
            $apiParams['session_key'] = $sessionKey;
        }
        $apiParams['contact_id'] = $contactId;

        if (!is_null($csv)) {
            $apiParams['csv'] = $csv;
        }

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }
        $apiParams['organization_id'] = $organizationId;

        if (!is_null($payload)) {
            $apiParams['payload'] = $payload;
        }
        $apiParams['profile_id'] = $profileId;

        if (!is_null($sessionKeyBody)) {
            $apiParams['session_key'] = $sessionKeyBody;
        }
        $apiParams['target_cart_id'] = $targetCartId;

        if (!is_null($xlsx)) {
            $apiParams['xlsx'] = $xlsx;
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
     * The fields an import/export profile's column mapping can name, for one
     * entity — what a mapping editor offers as `mapping.columns[].from` instead
     * of a free text box, each with its name and a label to show. A line profile
     * (`entity=cart_items`) maps the line fields; a whole-cart profile
     * (`entity=carts`, the default) maps the cart's own fields and its lines',
     * because one mapping renames both. `role=key` answers only the fields a line
     * is recognised by — the candidates for `mapping.keys`. The answer is the
     * same for every tenant and changes only with the app.
     *
     * @param ?CartIoFieldEntity $entity
     * @param ?CartIoFieldRole $role
     * @throws RevenexxException
     * @return array
     */
    public function cartsIoFields(?CartIoFieldEntity $entity = null, ?CartIoFieldRole $role = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/carts/io/fields'
        );

        $apiParams = [];

        if (!is_null($entity)) {
            $apiParams['entity'] = $entity;
        }

        if (!is_null($role)) {
            $apiParams['role'] = $role;
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
     * The filters are what make this list usable: `?direction=export` is how a
     * client offers the profiles that carts.export will accept,
     * `?is_template=true` separates the six bundled templates from what a
     * merchant wrote, and `?active=true` leaves out what a merchant switched off
     * — a picker sends both `direction` and `active`. An unknown column is
     * dropped rather than refused — `filter` echoes what was understood.
     *
     * @param ?string $id
     * @param ?string $name
     * @param ?CartIoDirection $direction
     * @param ?CartIoEntity $entity
     * @param ?CartIoFormat $format
     * @param ?CartIoApplyMode $applyMode
     * @param ?bool $isTemplate
     * @param ?bool $active
     * @param ?string $createdAt
     * @param ?string $updatedAt
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @throws RevenexxException
     * @return array
     */
    public function cartsIoProfilesList(?string $id = null, ?string $name = null, ?CartIoDirection $direction = null, ?CartIoEntity $entity = null, ?CartIoFormat $format = null, ?CartIoApplyMode $applyMode = null, ?bool $isTemplate = null, ?bool $active = null, ?string $createdAt = null, ?string $updatedAt = null, ?int $limit = null, ?int $offset = null, ?string $order = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/carts/io/profiles'
        );

        $apiParams = [];

        if (!is_null($id)) {
            $apiParams['id'] = $id;
        }

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

        if (!is_null($direction)) {
            $apiParams['direction'] = $direction;
        }

        if (!is_null($entity)) {
            $apiParams['entity'] = $entity;
        }

        if (!is_null($format)) {
            $apiParams['format'] = $format;
        }

        if (!is_null($applyMode)) {
            $apiParams['apply_mode'] = $applyMode;
        }

        if (!is_null($isTemplate)) {
            $apiParams['is_template'] = $isTemplate;
        }

        if (!is_null($active)) {
            $apiParams['active'] = $active;
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
     * Defines a new import/export profile. Two fields are required and have no
     * default — `name`, which must be unique within the tenant, and
     * `direction`, which fixes the one way this profile will ever run. Everything
     * else defaults to the common case: whole carts, JSON, `apply_mode` 'insert',
     * not a template. The uniqueness of the name is a unique index rather than a
     * check in this app, so a reused name is a 409 no matter which route wrote
     * the other one, including the six bundled templates. The shape is
     * Baseline-IO-compatible, so a mapping written for another app's import reads
     * the same way here. Creating a profile does not move any data: carts.export
     * and carts.import are what execute one, and each refuses a profile pointed
     * the wrong way.
     *
     * @param CartIoDirection $direction
     * @param string $name
     * @param ?bool $active
     * @param ?CartIoApplyMode $applyMode
     * @param ?CartIoEntity $entity
     * @param ?CartIoFormat $format
     * @param ?bool $isTemplate
     * @param ?array $mapping
     * @param ?array $options
     * @throws RevenexxException
     * @return array
     */
    public function cartsIoProfilesCreate(CartIoDirection $direction, string $name, ?bool $active = null, ?CartIoApplyMode $applyMode = null, ?CartIoEntity $entity = null, ?CartIoFormat $format = null, ?bool $isTemplate = null, ?array $mapping = null, ?array $options = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/carts/io/profiles'
        );

        $apiParams = [];
        $apiParams['direction'] = $direction;
        $apiParams['name'] = $name;

        if (!is_null($active)) {
            $apiParams['active'] = $active;
        }

        if (!is_null($applyMode)) {
            $apiParams['apply_mode'] = $applyMode;
        }

        if (!is_null($entity)) {
            $apiParams['entity'] = $entity;
        }

        if (!is_null($format)) {
            $apiParams['format'] = $format;
        }

        if (!is_null($isTemplate)) {
            $apiParams['is_template'] = $isTemplate;
        }

        if (!is_null($mapping)) {
            $apiParams['mapping'] = $mapping;
        }
        $apiParams['options'] = $options;

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
     * Seeds the 6 bundled templates and reports which of them it had to create
     * — the call that gives a fresh tenant something to export through before
     * anybody has written a profile. Idempotent and matched by NAME, so a second
     * call answers with everything under 'existing' and writes nothing, and a
     * template a merchant has edited is left exactly as they left it rather than
     * reset. It also runs by itself on app.installed; call it by hand where that
     * event cannot be relied on, and after deleting a template to get it back.
     *
     * @throws RevenexxException
     * @return array
     */
    public function cartsIoProfilesDefaults(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/carts/io/profiles/defaults'
        );

        $apiParams = [];

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Removes a profile. Nothing in this app points at one — no cart and no
     * line stores the profile it was imported through — so no foreign key holds
     * the delete up and nothing is orphaned by it; what breaks is the caller
     * still holding that `profile_id`, which answers 404 on its next run.
     * Deleting one of the six bundled templates is not permanent either: the next
     * carts.io.profiles.defaults, and the next install of this app, seeds it
     * again by name, in the shape it ships with rather than the shape a merchant
     * had edited it into.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function cartsIoProfilesDelete(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/carts/io/profiles/{id}'
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
     * One profile by id — the id carts.export and carts.import name in
     * `profile_id`. Read it to see what a run will do before starting one:
     * `direction`, because a profile only ever runs the way it declares;
     * `entity`, whole carts or bare lines; `format`, where json round-trips and
     * csv and xlsx carry line fields only; `mapping`, what the external columns
     * are called; and `apply_mode`, which decides what an import does with the
     * lines a target cart already has. `is_template` says whether this is one of
     * the six the app ships with or something a merchant wrote, and `active`
     * whether it runs at all. Reading a profile runs nothing and changes nothing.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function cartsIoProfilesGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/carts/io/profiles/{id}'
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
     * Edits a profile in place, the six bundled templates included — seeding
     * matches on name and never rewrites what it finds, so an edit made here
     * survives every later call to carts.io.profiles.defaults and every reinstall
     * of the app. The name stays unique in the tenant, so renaming onto another
     * profile's name is a 409, and a payload carrying no updatable field answers
     * 400 rather than storing nothing quietly. Runs that already happened are
     * unaffected: a profile is read at the moment carts.export or carts.import
     * executes and nothing is kept pointing back at it, so changing a mapping
     * changes the next run and no earlier one. `active: false` switches a profile
     * off, a bundled template as much as one a merchant wrote: it is no longer
     * offered and a run through it is refused, until it is switched back on.
     *
     * @param string $id
     * @param ?bool $active
     * @param ?CartIoApplyMode $applyMode
     * @param ?CartIoDirection $direction
     * @param ?CartIoEntity $entity
     * @param ?CartIoFormat $format
     * @param ?bool $isTemplate
     * @param ?array $mapping
     * @param ?string $name
     * @param ?array $options
     * @throws RevenexxException
     * @return array
     */
    public function cartsIoProfilesUpdate(string $id, ?bool $active = null, ?CartIoApplyMode $applyMode = null, ?CartIoDirection $direction = null, ?CartIoEntity $entity = null, ?CartIoFormat $format = null, ?bool $isTemplate = null, ?array $mapping = null, ?string $name = null, ?array $options = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/carts/io/profiles/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($active)) {
            $apiParams['active'] = $active;
        }

        if (!is_null($applyMode)) {
            $apiParams['apply_mode'] = $applyMode;
        }

        if (!is_null($direction)) {
            $apiParams['direction'] = $direction;
        }

        if (!is_null($entity)) {
            $apiParams['entity'] = $entity;
        }

        if (!is_null($format)) {
            $apiParams['format'] = $format;
        }

        if (!is_null($isTemplate)) {
            $apiParams['is_template'] = $isTemplate;
        }

        if (!is_null($mapping)) {
            $apiParams['mapping'] = $mapping;
        }

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }
        $apiParams['options'] = $options;

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
     * Creates a new profile from an existing one under a new `name` — how a
     * merchant changes one of the bundled templates without touching the template
     * itself. The copy takes the source's `direction`, `entity`, `format`,
     * `apply_mode`, `mapping`, `options` and `active`, and is never a template,
     * whatever the source was. The name is unique within the tenant, so a missing
     * name is a 400 and one another profile holds is a 409; neither writes
     * anything. The source is left as it was, and the copy starts without a
     * market assignment.
     *
     * @param string $id
     * @param string $name
     * @param ?array $parts
     * @throws RevenexxException
     * @return array
     */
    public function cartsIoProfilesCopy(string $id, string $name, ?array $parts = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/carts/io/profiles/{id}/copy'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams['name'] = $name;

        if (!is_null($parts)) {
            $apiParams['parts'] = $parts;
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
     * Renders one cart as a document somebody can take away. With `profile_id`
     * the named EXPORT profile decides the format, the entity and the column
     * names; handing it an import profile is a 400, because a profile only runs
     * the way it declares. Without one the call runs ad hoc — JSON, unless
     * `format: 'csv'` says otherwise. The JSON form is `{cart: {…}, items:
     * […]}` and is exactly what carts.import takes back, so an export
     * round-trips; the CSV form is the lines only, header first, and drops
     * everything that lives on the cart rather than on a line. Nothing is stored
     * and nothing about the cart changes — `filename` is a suggestion for a
     * browser download, not a file this app keeps — and a cart of any status
     * can be exported, including one already ordered.
     *
     * @param string $id
     * @param ?string $sessionKey
     * @param ?CartExportFormat $format
     * @param ?string $profileId
     * @throws RevenexxException
     * @return array
     */
    public function cartsExport(string $id, ?string $sessionKey = null, ?CartExportFormat $format = null, ?string $profileId = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/carts/{id}/export'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($sessionKey)) {
            $apiParams['session_key'] = $sessionKey;
        }

        if (!is_null($format)) {
            $apiParams['format'] = $format;
        }
        $apiParams['profile_id'] = $profileId;

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