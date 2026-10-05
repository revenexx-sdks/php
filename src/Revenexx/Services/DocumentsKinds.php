<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;
use Revenexx\Enums\Tone;
use Revenexx\Enums\DocumentKindTone;
use Revenexx\Enums\DocumentVocabularyPathName;

class DocumentsKinds extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * A document kind is a value the MERCHANT keeps: a code every document
     * stores, the words a person reads for it and the badge colour a screen
     * renders. Four arrive with the app because an order produces them; a
     * merchant adds a proforma invoice or a dunning letter without a release of
     * this app. This is the list `documents.kind` is validated against on every
     * write, so it is the first thing to read when a document is refused as an
     * unknown kind. It SEEDS on read: a tenant whose table is empty — one whose
     * install announcement never arrived — is given the four kinds here rather
     * than being told it has none and then being unable to file anything. Exactly
     * one row carries `is_default`, and the read repairs that too, so a client
     * may rely on finding one.
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
    public function documentsKindsList(?string $id = null, ?string $code = null, ?string $title = null, ?string $description = null, ?bool $isDefault = null, ?Tone $tone = null, ?int $position = null, ?bool $isSystem = null, ?string $createdAt = null, ?string $updatedAt = null, ?int $limit = null, ?int $offset = null, ?string $order = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/documents/kinds'
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
     * A document kind is a value the MERCHANT keeps: a code every document
     * stores, the words a person reads for it and the badge colour a screen
     * renders. Four arrive with the app because an order produces them; a
     * merchant adds a proforma invoice or a dunning letter without a release of
     * this app. This is the route that makes the set open. A proforma invoice, a
     * dunning letter, a works certificate or a scrap certificate is a kind this
     * app was never going to enumerate, and a document may name it the moment it
     * exists here — no release, no migration. `code` is lowercase letters,
     * digits, `-` and `_`, unique per tenant and FIXED from here on; `title` is
     * what a merchant renames later. The value is created as the merchant's own
     * (`is_system: false`) and not as the default unless `is_default: true` says
     * so, in which case whichever row held the flag is demoted in the same call.
     *
     * @param string $code
     * @param string $title
     * @param ?string $description
     * @param ?array $descriptions
     * @param ?bool $isDefault
     * @param ?array $labels
     * @param ?int $position
     * @param ?DocumentKindTone $tone
     * @throws RevenexxException
     * @return array
     */
    public function documentsKindsCreate(string $code, string $title, ?string $description = null, ?array $descriptions = null, ?bool $isDefault = null, ?array $labels = null, ?int $position = null, ?DocumentKindTone $tone = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/documents/kinds'
        );

        $apiParams = [];
        $apiParams['code'] = $code;
        $apiParams['title'] = $title;
        $apiParams['description'] = $description;
        $apiParams['descriptions'] = $descriptions;
        $apiParams['is_default'] = $isDefault;
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
     * A document kind is a value the MERCHANT keeps: a code every document
     * stores, the words a person reads for it and the badge colour a screen
     * renders. Four arrive with the app because an order produces them; a
     * merchant adds a proforma invoice or a dunning letter without a release of
     * this app. Seeds `invoice`, `delivery_note`, `credit_note` and
     * `return_receipt`, with `invoice` as the default. IDEMPOTENT BY CODE: a kind
     * the tenant already has is left exactly as it is, including a title they
     * changed and a tone they re-picked, so a second call reports it under
     * `existing` and writes nothing. The same seed runs on the app.installed
     * announcement and lazily on the first list read — three paths, because the
     * marketplace does not reliably fire the install event and a tenant with no
     * kinds can file no documents.
     *
     * @param array $data
     * @throws RevenexxException
     * @return array
     */
    public function documentsKindsDefaults(array $data): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/documents/kinds/defaults'
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
     * A document kind is a value the MERCHANT keeps: a code every document
     * stores, the words a person reads for it and the badge colour a screen
     * renders. Four arrive with the app because an order produces them; a
     * merchant adds a proforma invoice or a dunning letter without a release of
     * this app. Two refusals stand in for the foreign key these rows deliberately
     * have not got. A kind at least one document still carries is a 409, because
     * there is no reference to break — the alternative is a document whose kind
     * nothing can render. And the LAST kind is a 409 whatever else is true,
     * because every document carries one and a merchant with none could file
     * nothing. Deleting the default hands the flag to the first remaining row, so
     * a client may still rely on finding one.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function documentsKindsDelete(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/documents/kinds/{id}'
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
     * A document kind is a value the MERCHANT keeps: a code every document
     * stores, the words a person reads for it and the badge colour a screen
     * renders. Four arrive with the app because an order produces them; a
     * merchant adds a proforma invoice or a dunning letter without a release of
     * this app. The route that turns an id back into a kind. Unlike the list it
     * does NOT seed, so on a fresh tenant read the list first — and note that a
     * document stores the `code`, never this id, which is why the code cannot
     * change.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function documentsKindsGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/documents/kinds/{id}'
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
     * A document kind is a value the MERCHANT keeps: a code every document
     * stores, the words a person reads for it and the badge colour a screen
     * renders. Four arrive with the app because an order produces them; a
     * merchant adds a proforma invoice or a dunning letter without a release of
     * this app. What a merchant edits here is the WORDS: the title, the
     * per-language labels, the description, the badge tone and the position in a
     * select. What they cannot edit is the `code` — every document stores it,
     * so renaming it would orphan each one, and a body that changes it is refused
     * with a 400 that says to create a new kind and move the documents over. A
     * seeded kind is as editable as any other: `is_system` records that this app
     * put the row there and grants it no protection.
     *
     * @param string $id
     * @param ?string $code
     * @param ?string $description
     * @param ?array $descriptions
     * @param ?bool $isDefault
     * @param ?array $labels
     * @param ?int $position
     * @param ?string $title
     * @param ?DocumentKindTone $tone
     * @throws RevenexxException
     * @return array
     */
    public function documentsKindsUpdate(string $id, ?string $code = null, ?string $description = null, ?array $descriptions = null, ?bool $isDefault = null, ?array $labels = null, ?int $position = null, ?string $title = null, ?DocumentKindTone $tone = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/documents/kinds/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($code)) {
            $apiParams['code'] = $code;
        }
        $apiParams['description'] = $description;
        $apiParams['descriptions'] = $descriptions;
        $apiParams['is_default'] = $isDefault;
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
     * A document kind is a value the MERCHANT keeps: a code every document
     * stores, the words a person reads for it and the badge colour a screen
     * renders. Four arrive with the app because an order produces them; a
     * merchant adds a proforma invoice or a dunning letter without a release of
     * this app. The default flag is a SINGLE answer, not a per-row opinion, so
     * moving it is a single call: this row is promoted and whichever held it is
     * demoted, in one request. `PUT` with `is_default: true` does the same thing
     * as a side effect of an edit — this exists because a client that wants
     * nothing but the flag moved should not have to send one, and because
     * promoting and demoting in two calls can leave two defaults or none.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function documentsKindsMakeDefault(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/documents/kinds/{id}/make-default'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * The index of the value sets this app owns, with their titles and no values
     * — the cheap read a client makes once. Two are published, and they differ
     * in WHO owns the set: `kinds` is the merchant's own table, so it is read per
     * request and a merchant may extend it; `visibilities` is the database CHECK,
     * so it is closed and a merchant cannot. A client holding `'documents.kinds'`
     * builds `GET /documents/vocabularies/kinds` with no further knowledge, which
     * is the point of every app serving these two routes under its own prefix.
     *
     * @throws RevenexxException
     * @return array
     */
    public function documentsVocabulariesList(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/documents/vocabularies'
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
     * One vocabulary and every value in it, each with the title, description and
     * badge tone a screen renders — which is the reason this route exists at
     * all: a UI that keeps its own copy of the list is a UI that eventually
     * offers a value the data refuses. `source` says where the set comes from and
     * is the field to branch on: 'table' means the merchant owns it (`kinds`), so
     * the answer is their rows in their order and `is_default` marks the
     * fallback; 'schema' means a database CHECK owns it (`visibilities`), so the
     * served set is the enforced set by construction. `closed` is true either way
     * — the set is exhaustive at this moment, so a value outside it is stale
     * data rather than a missing label. Reading `kinds` SEEDS an empty table,
     * exactly as the kinds list does.
     *
     * @param DocumentVocabularyPathName $name
     * @throws RevenexxException
     * @return array
     */
    public function documentsVocabulariesGet(DocumentVocabularyPathName $name): array
    {
        $apiPath = str_replace(
            ['{name}'],
            [$name],
            '/v1/documents/vocabularies/{name}'
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