<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;
use Revenexx\Enums\CartIoDirection;
use Revenexx\Enums\CartIoEntity;
use Revenexx\Enums\CartIoFormat;
use Revenexx\Enums\CartIoApplyMode;
use Revenexx\Enums\CartExportFormat;

class CartsIo extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * Reads a payload of lines into a cart — the bulk-order path a buyer pastes
     * a spreadsheet into. With `target_cart_id` the lines land in that cart,
     * which must be active, and the profile's `apply_mode` decides what happens
     * to the lines already there: 'replace' clears them first, 'insert' and
     * 'append' both add. Without a target a new cart is created, and an OWNER is
     * then required — `contact_id` or `session_key` — because a cart with
     * neither cannot exist. `profile_id` names an IMPORT profile; without one the
     * payload is read ad hoc, as CSV when `csv` is present and as JSON otherwise.
     * The lines fold into identical product lines exactly as carts.items.create
     * does, so `imported_lines` counts the lines READ and the cart may have
     * gained fewer rows than that. A payload that parses to no line at all is a
     * 400 rather than a quiet no-op.
     *
     * @param ?string $contactId
     * @param ?string $csv
     * @param ?string $name
     * @param ?array $payload
     * @param ?string $profileId
     * @param ?string $sessionKey
     * @param ?string $targetCartId
     * @throws RevenexxException
     * @return array
     */
    public function cartsImport(?string $contactId = null, ?string $csv = null, ?string $name = null, ?array $payload = null, ?string $profileId = null, ?string $sessionKey = null, ?string $targetCartId = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/carts/import'
        );

        $apiParams = [];
        $apiParams['contact_id'] = $contactId;

        if (!is_null($csv)) {
            $apiParams['csv'] = $csv;
        }

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

        if (!is_null($payload)) {
            $apiParams['payload'] = $payload;
        }
        $apiParams['profile_id'] = $profileId;

        if (!is_null($sessionKey)) {
            $apiParams['session_key'] = $sessionKey;
        }
        $apiParams['target_cart_id'] = $targetCartId;

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
     * The filters are what make this list usable: `?direction=export` is how a
     * client offers the profiles that carts.export will accept, and
     * `?is_template=true` separates the four bundled templates from what a
     * merchant wrote. An unknown column is dropped rather than refused —
     * `filter` echoes what was understood.
     *
     * @param ?string $id
     * @param ?string $name
     * @param ?CartIoDirection $direction
     * @param ?CartIoEntity $entity
     * @param ?CartIoFormat $format
     * @param ?CartIoApplyMode $applyMode
     * @param ?bool $isTemplate
     * @param ?string $createdAt
     * @param ?string $updatedAt
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @throws RevenexxException
     * @return array
     */
    public function cartsIoProfilesList(?string $id = null, ?string $name = null, ?CartIoDirection $direction = null, ?CartIoEntity $entity = null, ?CartIoFormat $format = null, ?CartIoApplyMode $applyMode = null, ?bool $isTemplate = null, ?string $createdAt = null, ?string $updatedAt = null, ?int $limit = null, ?int $offset = null, ?string $order = null): array
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
     * the other one, including the four bundled templates. The shape is
     * Baseline-IO-compatible, so a mapping written for another app's import reads
     * the same way here. Creating a profile does not move any data: carts.export
     * and carts.import are what execute one, and each refuses a profile pointed
     * the wrong way.
     *
     * @param CartIoDirection $direction
     * @param string $name
     * @param ?CartIoApplyMode $applyMode
     * @param ?CartIoEntity $entity
     * @param ?CartIoFormat $format
     * @param ?bool $isTemplate
     * @param ?array $mapping
     * @param ?array $options
     * @throws RevenexxException
     * @return array
     */
    public function cartsIoProfilesCreate(CartIoDirection $direction, string $name, ?CartIoApplyMode $applyMode = null, ?CartIoEntity $entity = null, ?CartIoFormat $format = null, ?bool $isTemplate = null, ?array $mapping = null, ?array $options = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/carts/io/profiles'
        );

        $apiParams = [];
        $apiParams['direction'] = $direction;
        $apiParams['name'] = $name;

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
     * Seeds the 4 bundled templates and reports which of them it had to create
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
     * Deleting one of the four bundled templates is not permanent either: the
     * next carts.io.profiles.defaults, and the next install of this app, seeds it
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
     * csv carries line fields only; `mapping`, what the external columns are
     * called; and `apply_mode`, which decides what an import does with the lines
     * a target cart already has. `is_template` says whether this is one of the
     * four the app ships with or something a merchant wrote. Reading a profile
     * runs nothing and changes nothing.
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
     * Edits a profile in place, the four bundled templates included — seeding
     * matches on name and never rewrites what it finds, so an edit made here
     * survives every later call to carts.io.profiles.defaults and every reinstall
     * of the app. The name stays unique in the tenant, so renaming onto another
     * profile's name is a 409, and a payload carrying no updatable field answers
     * 400 rather than storing nothing quietly. Runs that already happened are
     * unaffected: a profile is read at the moment carts.export or carts.import
     * executes and nothing is kept pointing back at it, so changing a mapping
     * changes the next run and no earlier one.
     *
     * @param string $id
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
    public function cartsIoProfilesUpdate(string $id, ?CartIoApplyMode $applyMode = null, ?CartIoDirection $direction = null, ?CartIoEntity $entity = null, ?CartIoFormat $format = null, ?bool $isTemplate = null, ?array $mapping = null, ?string $name = null, ?array $options = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/carts/io/profiles/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

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
     * @param ?CartExportFormat $format
     * @param ?string $profileId
     * @throws RevenexxException
     * @return array
     */
    public function cartsExport(string $id, ?CartExportFormat $format = null, ?string $profileId = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/carts/{id}/export'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

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