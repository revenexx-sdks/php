<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;
use Revenexx\Enums\DocumentsDocumentsListSource;
use Revenexx\Enums\Visibility;
use Revenexx\Enums\DocumentSource;
use Revenexx\Enums\DocumentVisibility;

class DocumentsRegister extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * A document is one record a merchant issued and filed against a transaction
     * — an invoice, a delivery note, a credit note, a return receipt. The row
     * is the REGISTER entry: it says which transaction the document belongs to,
     * what kind of record it is, the number a customer quotes, who may read it
     * and where its bytes live. It never holds the bytes, and this app never
     * produces a document. This is the list an account area reads: filter
     * `?entity_type=order&entity_id=…` for one transaction's papers,
     * `?kind=invoice` for one sort of record, `?number=` for the one a customer
     * quoted. Read `visibility` before trusting the answer to be complete — a
     * STOREFRONT caller (one acting for a buyer, or one asking with
     * `?audience=customer`) is confined to the customer documents in the query
     * itself, so an internal one is absent from `items` AND from `page.total`,
     * which is what stops the count telling a buyer how many documents it is not
     * being shown. The narrowing only ever narrows: `?visibility=internal` from
     * such a caller answers the customer ones, not a 403.
     *
     * @param ?string $id
     * @param ?string $entityType
     * @param ?string $entityId
     * @param ?string $kind
     * @param ?string $number
     * @param ?DocumentsDocumentsListSource $source
     * @param ?string $storageAssetId
     * @param ?string $deliveryPath
     * @param ?string $externalUrl
     * @param ?string $filename
     * @param ?string $contentType
     * @param ?int $byteSize
     * @param ?string $issuedAt
     * @param ?string $dueDate
     * @param ?float $totalAmount
     * @param ?string $currency
     * @param ?Visibility $visibility
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
    public function documentsDocumentsList(?string $id = null, ?string $entityType = null, ?string $entityId = null, ?string $kind = null, ?string $number = null, ?DocumentsDocumentsListSource $source = null, ?string $storageAssetId = null, ?string $deliveryPath = null, ?string $externalUrl = null, ?string $filename = null, ?string $contentType = null, ?int $byteSize = null, ?string $issuedAt = null, ?string $dueDate = null, ?float $totalAmount = null, ?string $currency = null, ?Visibility $visibility = null, ?string $externalId = null, ?string $sourceSyncedAt = null, ?string $createdAt = null, ?string $updatedAt = null, ?int $limit = null, ?int $offset = null, ?string $order = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/documents/documents'
        );

        $apiParams = [];

        if (!is_null($id)) {
            $apiParams['id'] = $id;
        }

        if (!is_null($entityType)) {
            $apiParams['entity_type'] = $entityType;
        }

        if (!is_null($entityId)) {
            $apiParams['entity_id'] = $entityId;
        }

        if (!is_null($kind)) {
            $apiParams['kind'] = $kind;
        }

        if (!is_null($number)) {
            $apiParams['number'] = $number;
        }

        if (!is_null($source)) {
            $apiParams['source'] = $source;
        }

        if (!is_null($storageAssetId)) {
            $apiParams['storage_asset_id'] = $storageAssetId;
        }

        if (!is_null($deliveryPath)) {
            $apiParams['delivery_path'] = $deliveryPath;
        }

        if (!is_null($externalUrl)) {
            $apiParams['external_url'] = $externalUrl;
        }

        if (!is_null($filename)) {
            $apiParams['filename'] = $filename;
        }

        if (!is_null($contentType)) {
            $apiParams['content_type'] = $contentType;
        }

        if (!is_null($byteSize)) {
            $apiParams['byte_size'] = $byteSize;
        }

        if (!is_null($issuedAt)) {
            $apiParams['issued_at'] = $issuedAt;
        }

        if (!is_null($dueDate)) {
            $apiParams['due_date'] = $dueDate;
        }

        if (!is_null($totalAmount)) {
            $apiParams['total_amount'] = $totalAmount;
        }

        if (!is_null($currency)) {
            $apiParams['currency'] = $currency;
        }

        if (!is_null($visibility)) {
            $apiParams['visibility'] = $visibility;
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
     * A document is one record a merchant issued and filed against a transaction
     * — an invoice, a delivery note, a credit note, a return receipt. The row
     * is the REGISTER entry: it says which transaction the document belongs to,
     * what kind of record it is, the number a customer quotes, who may read it
     * and where its bytes live. It never holds the bytes, and this app never
     * produces a document. This route is written for a FEED, because a feed
     * re-runs: a body carrying an `external_id` this tenant already holds UPDATES
     * that document and answers 200, and a body with none is a plain create and
     * answers 201. That is what stops a retry, a restart or a full re-sync
     * showing a buyer one invoice three times; the unique index behind
     * `external_id` is the net under it rather than the mechanism. Four fields
     * are owed — `entity_type`, `entity_id`, `kind` and `filename` — and two
     * are decided for you: `source` defaults to 'storage' and `visibility` to
     * 'customer', because a document a finance system issues to a customer is the
     * normal case. Three refusals are worth knowing before the first call:
     * `entity_type` accepts `order` and nothing else yet and its refusal NAMES
     * what it accepts, `kind` has to be one this tenant keeps (GET
     * /documents/kinds) and its refusal lists them, and the byte binding is the
     * database's — `source: 'storage'` needs a `storage_asset_id`, `source:
     * 'external'` an `external_url`.
     *
     * @param string $entityId
     * @param string $entityType
     * @param string $filename
     * @param string $kind
     * @param ?int $byteSize
     * @param ?string $contentType
     * @param ?string $currency
     * @param ?string $deliveryPath
     * @param ?string $dueDate
     * @param ?string $externalId
     * @param ?array $externalRefs
     * @param ?string $externalUrl
     * @param ?string $issuedAt
     * @param ?array $metadata
     * @param ?string $number
     * @param ?DocumentSource $source
     * @param ?array $sourceData
     * @param ?string $sourceSyncedAt
     * @param ?string $storageAssetId
     * @param ?float $totalAmount
     * @param ?DocumentVisibility $visibility
     * @throws RevenexxException
     * @return array
     */
    public function documentsDocumentsCreate(string $entityId, string $entityType, string $filename, string $kind, ?int $byteSize = null, ?string $contentType = null, ?string $currency = null, ?string $deliveryPath = null, ?string $dueDate = null, ?string $externalId = null, ?array $externalRefs = null, ?string $externalUrl = null, ?string $issuedAt = null, ?array $metadata = null, ?string $number = null, ?DocumentSource $source = null, ?array $sourceData = null, ?string $sourceSyncedAt = null, ?string $storageAssetId = null, ?float $totalAmount = null, ?DocumentVisibility $visibility = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/documents/documents'
        );

        $apiParams = [];
        $apiParams['entity_id'] = $entityId;
        $apiParams['entity_type'] = $entityType;
        $apiParams['filename'] = $filename;
        $apiParams['kind'] = $kind;
        $apiParams['byte_size'] = $byteSize;
        $apiParams['content_type'] = $contentType;
        $apiParams['currency'] = $currency;
        $apiParams['delivery_path'] = $deliveryPath;
        $apiParams['due_date'] = $dueDate;
        $apiParams['external_id'] = $externalId;
        $apiParams['external_refs'] = $externalRefs;
        $apiParams['external_url'] = $externalUrl;
        $apiParams['issued_at'] = $issuedAt;
        $apiParams['metadata'] = $metadata;
        $apiParams['number'] = $number;

        if (!is_null($source)) {
            $apiParams['source'] = $source;
        }
        $apiParams['source_data'] = $sourceData;
        $apiParams['source_synced_at'] = $sourceSyncedAt;
        $apiParams['storage_asset_id'] = $storageAssetId;
        $apiParams['total_amount'] = $totalAmount;

        if (!is_null($visibility)) {
            $apiParams['visibility'] = $visibility;
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
     * A document is one record a merchant issued and filed against a transaction
     * — an invoice, a delivery note, a credit note, a return receipt. The row
     * is the REGISTER entry: it says which transaction the document belongs to,
     * what kind of record it is, the number a customer quotes, who may read it
     * and where its bytes live. It never holds the bytes, and this app never
     * produces a document. Deleting the register entry does NOT delete the file:
     * the bytes live in the platform's asset storage or on the tenant's own host,
     * and this app has never held them. So this is "stop offering this document",
     * not "destroy it" — and there is no undo here, because the row carried the
     * only record of which transaction the file belonged to. A feed that still
     * knows the document will re-file it on its next run, under the same
     * `external_id`.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function documentsDocumentsDelete(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/documents/documents/{id}'
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
     * A document is one record a merchant issued and filed against a transaction
     * — an invoice, a delivery note, a credit note, a return receipt. The row
     * is the REGISTER entry: it says which transaction the document belongs to,
     * what kind of record it is, the number a customer quotes, who may read it
     * and where its bytes live. It never holds the bytes, and this app never
     * produces a document. This is the route that turns an id back into a
     * document, and the one place the visibility promise is easiest to get wrong:
     * an `internal` document answers 404 to a storefront caller rather than 403,
     * because a refusal that admitted the document exists would confirm what a
     * guessed address was fishing for. An operator reads the same row at the same
     * address.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function documentsDocumentsGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/documents/documents/{id}'
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
     * A document is one record a merchant issued and filed against a transaction
     * — an invoice, a delivery note, a credit note, a return receipt. The row
     * is the REGISTER entry: it says which transaction the document belongs to,
     * what kind of record it is, the number a customer quotes, who may read it
     * and where its bytes live. It never holds the bytes, and this app never
     * produces a document. A partial update: omitted fields keep their value, and
     * a body carrying no field at all is refused rather than answered as a no-op.
     * The provenance columns are the ones to leave alone — `source_data` holds
     * the ETag a write-back to the issuing system has to return, and an edit here
     * does not touch it, so what the source said survives being re-filed as
     * internal. The same guards as the create apply to `entity_type`, `kind` and
     * the byte binding, and an internal document is a 404 to a storefront caller
     * here too.
     *
     * @param string $id
     * @param ?int $byteSize
     * @param ?string $contentType
     * @param ?string $currency
     * @param ?string $deliveryPath
     * @param ?string $dueDate
     * @param ?string $entityId
     * @param ?string $entityType
     * @param ?string $externalId
     * @param ?array $externalRefs
     * @param ?string $externalUrl
     * @param ?string $filename
     * @param ?string $issuedAt
     * @param ?string $kind
     * @param ?array $metadata
     * @param ?string $number
     * @param ?DocumentSource $source
     * @param ?array $sourceData
     * @param ?string $sourceSyncedAt
     * @param ?string $storageAssetId
     * @param ?float $totalAmount
     * @param ?DocumentVisibility $visibility
     * @throws RevenexxException
     * @return array
     */
    public function documentsDocumentsUpdate(string $id, ?int $byteSize = null, ?string $contentType = null, ?string $currency = null, ?string $deliveryPath = null, ?string $dueDate = null, ?string $entityId = null, ?string $entityType = null, ?string $externalId = null, ?array $externalRefs = null, ?string $externalUrl = null, ?string $filename = null, ?string $issuedAt = null, ?string $kind = null, ?array $metadata = null, ?string $number = null, ?DocumentSource $source = null, ?array $sourceData = null, ?string $sourceSyncedAt = null, ?string $storageAssetId = null, ?float $totalAmount = null, ?DocumentVisibility $visibility = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/documents/documents/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams['byte_size'] = $byteSize;
        $apiParams['content_type'] = $contentType;
        $apiParams['currency'] = $currency;
        $apiParams['delivery_path'] = $deliveryPath;
        $apiParams['due_date'] = $dueDate;

        if (!is_null($entityId)) {
            $apiParams['entity_id'] = $entityId;
        }

        if (!is_null($entityType)) {
            $apiParams['entity_type'] = $entityType;
        }
        $apiParams['external_id'] = $externalId;
        $apiParams['external_refs'] = $externalRefs;
        $apiParams['external_url'] = $externalUrl;

        if (!is_null($filename)) {
            $apiParams['filename'] = $filename;
        }
        $apiParams['issued_at'] = $issuedAt;

        if (!is_null($kind)) {
            $apiParams['kind'] = $kind;
        }
        $apiParams['metadata'] = $metadata;
        $apiParams['number'] = $number;

        if (!is_null($source)) {
            $apiParams['source'] = $source;
        }
        $apiParams['source_data'] = $sourceData;
        $apiParams['source_synced_at'] = $sourceSyncedAt;
        $apiParams['storage_asset_id'] = $storageAssetId;
        $apiParams['total_amount'] = $totalAmount;

        if (!is_null($visibility)) {
            $apiParams['visibility'] = $visibility;
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
     * A document is one record a merchant issued and filed against a transaction
     * — an invoice, a delivery note, a credit note, a return receipt. The row
     * is the REGISTER entry: it says which transaction the document belongs to,
     * what kind of record it is, the number a customer quotes, who may read it
     * and where its bytes live. It never holds the bytes, and this app never
     * produces a document. This is how the bytes are handed over, and the ONLY
     * way: the storage bucket is private, so the answer is a signed URL valid for
     * minutes, which the caller then fetches directly. Nothing streams through
     * this app — a 40 MB invoice through a function with a 15-second timeout is
     * a bad trade, and the signature is the authorisation, so proxying it would
     * add a second copy of a check that is already in the URL. There is no upload
     * route for the same reason in reverse: whoever ISSUES the document uploads
     * it to POST /v1/storage/assets itself, takes the `ast_…` id back and
     * records it here. It is a POST because each call mints a new signature with
     * a new expiry, so the answer must not be cached. ⚠ The AUDIENCE RULE
     * applies here exactly as it does at the document's own address: a storefront
     * caller asking for a link to an `internal` document is answered 404 — not
     * 403 — because a link is the one thing that would turn a guessed id into
     * another buyer's invoice. An `external` document has no asset of ours to
     * sign and is refused with its `external_url` instead.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function documentsDocumentsLink(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/documents/documents/{id}/link'
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
}