<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;
use Revenexx\Enums\ProductsListTrashed;

class ProductsManufacturers extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * A manufacturer is the company a product is made by, kept once and pointed
     * at by every product it makes (`products.manufacturer_id`) instead of
     * repeated as free text on each. It carries what a brand page shows (name,
     * logo, a description per language, website) and what the EU General Product
     * Safety Regulation requires an offer to name: the legal name, postal address
     * and e-mail address of the manufacturer, and for one outside the European
     * Economic Area the responsible person in the EEA. `gpsr_complete` says
     * whether those are all there. A manufacturer is maintained globally —
     * visible in every market — and can be restricted to markets like a
     * category.
     * 
     * Every column of `manufacturers` is an exact-match query parameter, `order`
     * sorts by one column, and `limit`/`offset` page through `page.total`. A
     * query key that is NOT a column is dropped rather than refused, and the
     * `filter` object echoes the ones that were understood — that echo is the
     * only way to tell an unfiltered answer from an empty one. It reads rows
     * exactly as they are stored: no join is resolved, no jsonb value is
     * unpacked.
     * 
     * Records in the trash are left out: `trashed=only` reads the trash itself,
     * `trashed=include` both. Any other value of `trashed` is refused with 400.
     * 
     * Answered from the gateway's tenant cache for up to 30 minutes and dropped
     * the moment this entity is written, because the data model changes weekly at
     * most and every product page asks the same question.
     *
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @param ?ProductsListTrashed $trashed
     * @param ?string $id
     * @param ?string $code
     * @param ?string $name
     * @param ?string $descriptions
     * @param ?string $logo
     * @param ?string $website
     * @param ?string $legalName
     * @param ?string $street
     * @param ?string $postalCode
     * @param ?string $city
     * @param ?string $country
     * @param ?string $email
     * @param ?string $eeaResponsibleName
     * @param ?string $eeaResponsibleStreet
     * @param ?string $eeaResponsiblePostalCode
     * @param ?string $eeaResponsibleCity
     * @param ?string $eeaResponsibleCountry
     * @param ?string $eeaResponsibleEmail
     * @param ?string $postalAddress
     * @param ?string $eeaResponsibleAddress
     * @param ?bool $gpsrComplete
     * @param ?bool $active
     * @param ?string $externalId
     * @param ?string $externalRefs
     * @param ?string $sourceSyncedAt
     * @param ?string $sourceData
     * @param ?string $metadata
     * @param ?string $createdAt
     * @param ?string $updatedAt
     * @param ?string $deletedAt
     * @param ?string $deletedBy
     * @param ?string $deletedById
     * @param ?string $trashBatch
     * @param ?string $purgeAt
     * @param ?string $purgeBlockedReason
     * @throws RevenexxException
     * @return array
     */
    public function productsManufacturersList(?int $limit = null, ?int $offset = null, ?string $order = null, ?ProductsListTrashed $trashed = null, ?string $id = null, ?string $code = null, ?string $name = null, ?string $descriptions = null, ?string $logo = null, ?string $website = null, ?string $legalName = null, ?string $street = null, ?string $postalCode = null, ?string $city = null, ?string $country = null, ?string $email = null, ?string $eeaResponsibleName = null, ?string $eeaResponsibleStreet = null, ?string $eeaResponsiblePostalCode = null, ?string $eeaResponsibleCity = null, ?string $eeaResponsibleCountry = null, ?string $eeaResponsibleEmail = null, ?string $postalAddress = null, ?string $eeaResponsibleAddress = null, ?bool $gpsrComplete = null, ?bool $active = null, ?string $externalId = null, ?string $externalRefs = null, ?string $sourceSyncedAt = null, ?string $sourceData = null, ?string $metadata = null, ?string $createdAt = null, ?string $updatedAt = null, ?string $deletedAt = null, ?string $deletedBy = null, ?string $deletedById = null, ?string $trashBatch = null, ?string $purgeAt = null, ?string $purgeBlockedReason = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/products/manufacturers'
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

        if (!is_null($trashed)) {
            $apiParams['trashed'] = $trashed;
        }

        if (!is_null($id)) {
            $apiParams['id'] = $id;
        }

        if (!is_null($code)) {
            $apiParams['code'] = $code;
        }

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

        if (!is_null($descriptions)) {
            $apiParams['descriptions'] = $descriptions;
        }

        if (!is_null($logo)) {
            $apiParams['logo'] = $logo;
        }

        if (!is_null($website)) {
            $apiParams['website'] = $website;
        }

        if (!is_null($legalName)) {
            $apiParams['legal_name'] = $legalName;
        }

        if (!is_null($street)) {
            $apiParams['street'] = $street;
        }

        if (!is_null($postalCode)) {
            $apiParams['postal_code'] = $postalCode;
        }

        if (!is_null($city)) {
            $apiParams['city'] = $city;
        }

        if (!is_null($country)) {
            $apiParams['country'] = $country;
        }

        if (!is_null($email)) {
            $apiParams['email'] = $email;
        }

        if (!is_null($eeaResponsibleName)) {
            $apiParams['eea_responsible_name'] = $eeaResponsibleName;
        }

        if (!is_null($eeaResponsibleStreet)) {
            $apiParams['eea_responsible_street'] = $eeaResponsibleStreet;
        }

        if (!is_null($eeaResponsiblePostalCode)) {
            $apiParams['eea_responsible_postal_code'] = $eeaResponsiblePostalCode;
        }

        if (!is_null($eeaResponsibleCity)) {
            $apiParams['eea_responsible_city'] = $eeaResponsibleCity;
        }

        if (!is_null($eeaResponsibleCountry)) {
            $apiParams['eea_responsible_country'] = $eeaResponsibleCountry;
        }

        if (!is_null($eeaResponsibleEmail)) {
            $apiParams['eea_responsible_email'] = $eeaResponsibleEmail;
        }

        if (!is_null($postalAddress)) {
            $apiParams['postal_address'] = $postalAddress;
        }

        if (!is_null($eeaResponsibleAddress)) {
            $apiParams['eea_responsible_address'] = $eeaResponsibleAddress;
        }

        if (!is_null($gpsrComplete)) {
            $apiParams['gpsr_complete'] = $gpsrComplete;
        }

        if (!is_null($active)) {
            $apiParams['active'] = $active;
        }

        if (!is_null($externalId)) {
            $apiParams['external_id'] = $externalId;
        }

        if (!is_null($externalRefs)) {
            $apiParams['external_refs'] = $externalRefs;
        }

        if (!is_null($sourceSyncedAt)) {
            $apiParams['source_synced_at'] = $sourceSyncedAt;
        }

        if (!is_null($sourceData)) {
            $apiParams['source_data'] = $sourceData;
        }

        if (!is_null($metadata)) {
            $apiParams['metadata'] = $metadata;
        }

        if (!is_null($createdAt)) {
            $apiParams['created_at'] = $createdAt;
        }

        if (!is_null($updatedAt)) {
            $apiParams['updated_at'] = $updatedAt;
        }

        if (!is_null($deletedAt)) {
            $apiParams['deleted_at'] = $deletedAt;
        }

        if (!is_null($deletedBy)) {
            $apiParams['deleted_by'] = $deletedBy;
        }

        if (!is_null($deletedById)) {
            $apiParams['deleted_by_id'] = $deletedById;
        }

        if (!is_null($trashBatch)) {
            $apiParams['trash_batch'] = $trashBatch;
        }

        if (!is_null($purgeAt)) {
            $apiParams['purge_at'] = $purgeAt;
        }

        if (!is_null($purgeBlockedReason)) {
            $apiParams['purge_blocked_reason'] = $purgeBlockedReason;
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
     * Creates one manufacturer and answers 201 with the stored row, including the
     * id and the timestamps the database filled in — a client never sends an
     * id, it reads one back and uses it in the path of every later call.
     * 
     * A manufacturer is the company a product is made by, kept once and pointed
     * at by every product it makes (`products.manufacturer_id`) instead of
     * repeated as free text on each. It carries what a brand page shows (name,
     * logo, a description per language, website) and what the EU General Product
     * Safety Regulation requires an offer to name: the legal name, postal address
     * and e-mail address of the manufacturer, and for one outside the European
     * Economic Area the responsible person in the EEA. `gpsr_complete` says
     * whether those are all there. A manufacturer is maintained globally —
     * visible in every market — and can be restricted to markets like a
     * category.
     * 
     * `code` and `name` are the only columns the database refuses the row
     * without; everything else has a default or is nullable. A second row with
     * the same `code` answers 409.
     *
     * @param string $code
     * @param ?string $country
     * @param string $name
     * @param ?bool $active
     * @param ?string $city
     * @param ?string $deletedAt
     * @param ?string $deletedBy
     * @param ?string $deletedById
     * @param ?array $descriptions
     * @param ?array $eeaResponsibleAddress
     * @param ?string $eeaResponsibleCity
     * @param ?string $eeaResponsibleCountry
     * @param ?string $eeaResponsibleEmail
     * @param ?string $eeaResponsibleName
     * @param ?string $eeaResponsiblePostalCode
     * @param ?string $eeaResponsibleStreet
     * @param ?string $email
     * @param ?string $externalId
     * @param ?array $externalRefs
     * @param ?string $legalName
     * @param ?string $logo
     * @param ?array $metadata
     * @param ?array $postalAddress
     * @param ?string $postalCode
     * @param ?string $purgeAt
     * @param ?string $purgeBlockedReason
     * @param ?array $sourceData
     * @param ?string $sourceSyncedAt
     * @param ?string $street
     * @param ?string $trashBatch
     * @param ?string $website
     * @throws RevenexxException
     * @return array
     */
    public function productsManufacturersCreate(string $code, ?string $country, string $name, ?bool $active = null, ?string $city = null, ?string $deletedAt = null, ?string $deletedBy = null, ?string $deletedById = null, ?array $descriptions = null, ?array $eeaResponsibleAddress = null, ?string $eeaResponsibleCity = null, ?string $eeaResponsibleCountry = null, ?string $eeaResponsibleEmail = null, ?string $eeaResponsibleName = null, ?string $eeaResponsiblePostalCode = null, ?string $eeaResponsibleStreet = null, ?string $email = null, ?string $externalId = null, ?array $externalRefs = null, ?string $legalName = null, ?string $logo = null, ?array $metadata = null, ?array $postalAddress = null, ?string $postalCode = null, ?string $purgeAt = null, ?string $purgeBlockedReason = null, ?array $sourceData = null, ?string $sourceSyncedAt = null, ?string $street = null, ?string $trashBatch = null, ?string $website = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/products/manufacturers'
        );

        $apiParams = [];
        $apiParams['code'] = $code;
        $apiParams['country'] = $country;
        $apiParams['name'] = $name;

        if (!is_null($active)) {
            $apiParams['active'] = $active;
        }
        $apiParams['city'] = $city;
        $apiParams['deleted_at'] = $deletedAt;
        $apiParams['deleted_by'] = $deletedBy;
        $apiParams['deleted_by_id'] = $deletedById;
        $apiParams['descriptions'] = $descriptions;
        $apiParams['eea_responsible_address'] = $eeaResponsibleAddress;
        $apiParams['eea_responsible_city'] = $eeaResponsibleCity;
        $apiParams['eea_responsible_country'] = $eeaResponsibleCountry;
        $apiParams['eea_responsible_email'] = $eeaResponsibleEmail;
        $apiParams['eea_responsible_name'] = $eeaResponsibleName;
        $apiParams['eea_responsible_postal_code'] = $eeaResponsiblePostalCode;
        $apiParams['eea_responsible_street'] = $eeaResponsibleStreet;
        $apiParams['email'] = $email;
        $apiParams['external_id'] = $externalId;
        $apiParams['external_refs'] = $externalRefs;
        $apiParams['legal_name'] = $legalName;
        $apiParams['logo'] = $logo;
        $apiParams['metadata'] = $metadata;
        $apiParams['postal_address'] = $postalAddress;
        $apiParams['postal_code'] = $postalCode;
        $apiParams['purge_at'] = $purgeAt;
        $apiParams['purge_blocked_reason'] = $purgeBlockedReason;
        $apiParams['source_data'] = $sourceData;
        $apiParams['source_synced_at'] = $sourceSyncedAt;
        $apiParams['street'] = $street;
        $apiParams['trash_batch'] = $trashBatch;
        $apiParams['website'] = $website;

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
     * Moves a catalog from the free text `attribute_values.common.manufacturer`
     * to manufacturer records: one record per distinct name (trimmed, whitespace
     * collapsed, case ignored — 'Paul Horn' and 'PAUL HORN' are one), each
     * product linked through `manufacturer_id`. A name an existing record already
     * carries — by name, or by the code it would get — is linked to that
     * record instead of founding a second one. The free text is left where it is.
     * 
     * **Founded records are global and incomplete.** A record the migration
     * founds is assigned to no market — visible in every market, whichever
     * market the caller is working in — and carries only `code` and `name`: no
     * country, so `gpsr_complete` is false until somebody fills in the GPSR data.
     * 
     * **Dry run by default.** Without `"dry_run": false` nothing is written and
     * the answer says what WOULD be created and linked for the products this call
     * walked.
     * 
     * **Chunked and caller-driven**, like a category recompute: a call walks the
     * products that carry no `manufacturer_id` in id order for as long as the
     * gateway budget allows, and answers `done` and, while there is more, the
     * `cursor` to send back. Counts are per call. Idempotent: a product is linked
     * with a compare-and-set on `manufacturer_id` being empty, so one linked by
     * hand in the meantime keeps its link and a second run links nothing twice.
     *
     * @param ?string $cursor
     * @param ?bool $dryRun
     * @throws RevenexxException
     * @return array
     */
    public function productsManufacturersMigrate(?string $cursor = null, ?bool $dryRun = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/products/manufacturers/migrate'
        );

        $apiParams = [];
        $apiParams['cursor'] = $cursor;

        if (!is_null($dryRun)) {
            $apiParams['dry_run'] = $dryRun;
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
     * Deletes the manufacturers in the trash for good, oldest first, up to 200
     * per call, each through the same checks as a second `DELETE`. One that is
     * held is reported with its reason and the rest go on; `more` says another
     * call has work left. Refused with 403 for a storefront contact.
     *
     * @throws RevenexxException
     * @return array
     */
    public function productsManufacturersEmptyTrash(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/products/manufacturers/trash/empty'
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
     * Moves one manufacturer to the trash — or, called on one that is already
     * there, deletes it for good.
     * 
     * The first call stamps the manufacturer, and nothing goes with it; all of
     * them share one `trash_batch` and come back together on `POST
     * …/{id}/restore`. Nothing that points at it changes: its assignments stay
     * and stop acting, and the answer lists them as warnings with a count. Its
     * code stays reserved while it is in the trash.
     * 
     * The second call deletes it for good, with the rows of its group, and only
     * then do the cascades and `*.deleted` happen. It is refused with 409 while a
     * blocker holds: a switched-on product still made by the manufacturer holds
     * it; any other product is unlinked. A blocker that could not be checked
     * counts as one. It is refused with 403 for a storefront contact — deleting
     * for good is back-office work.
     * 
     * An id no manufacturer of this tenant carries answers 404.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function productsManufacturersDelete(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/products/manufacturers/{id}'
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
     * Reads one manufacturer by its id — the whole row, every column, as it is
     * stored.
     * 
     * A manufacturer is the company a product is made by, kept once and pointed
     * at by every product it makes (`products.manufacturer_id`) instead of
     * repeated as free text on each. It carries what a brand page shows (name,
     * logo, a description per language, website) and what the EU General Product
     * Safety Regulation requires an offer to name: the legal name, postal address
     * and e-mail address of the manufacturer, and for one outside the European
     * Economic Area the responsible person in the EEA. `gpsr_complete` says
     * whether those are all there. A manufacturer is maintained globally —
     * visible in every market — and can be restricted to markets like a
     * category.
     * 
     * An id no manufacturer of this tenant carries answers 404, and so does one
     * belonging to another tenant: row-level security makes that row invisible
     * rather than forbidden. A malformed id answers 400 before the route is
     * reached.
     * 
     * Answered from the gateway's tenant cache for up to 30 minutes and dropped
     * the moment this entity is written, because the data model changes weekly at
     * most and every product page asks the same question.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function productsManufacturersGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/products/manufacturers/{id}'
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
     * Updates one manufacturer by id. A partial patch: the body names only the
     * columns to change and every column it leaves out keeps its current value,
     * so there is no read-modify-write and no way to blank a field by forgetting
     * it.
     * 
     * A manufacturer is the company a product is made by, kept once and pointed
     * at by every product it makes (`products.manufacturer_id`) instead of
     * repeated as free text on each. It carries what a brand page shows (name,
     * logo, a description per language, website) and what the EU General Product
     * Safety Regulation requires an offer to name: the legal name, postal address
     * and e-mail address of the manufacturer, and for one outside the European
     * Economic Area the responsible person in the EEA. `gpsr_complete` says
     * whether those are all there. A manufacturer is maintained globally —
     * visible in every market — and can be restricted to markets like a
     * category.
     * 
     * A body that names nothing writable is refused with 400 rather than answered
     * as a no-op, an id nobody carries answers 404, and a value that collides on
     * `code` answers 409.
     *
     * @param string $id
     * @param ?bool $active
     * @param ?string $city
     * @param ?string $code
     * @param ?string $country
     * @param ?string $deletedAt
     * @param ?string $deletedBy
     * @param ?string $deletedById
     * @param ?array $descriptions
     * @param ?array $eeaResponsibleAddress
     * @param ?string $eeaResponsibleCity
     * @param ?string $eeaResponsibleCountry
     * @param ?string $eeaResponsibleEmail
     * @param ?string $eeaResponsibleName
     * @param ?string $eeaResponsiblePostalCode
     * @param ?string $eeaResponsibleStreet
     * @param ?string $email
     * @param ?string $externalId
     * @param ?array $externalRefs
     * @param ?string $legalName
     * @param ?string $logo
     * @param ?array $metadata
     * @param ?string $name
     * @param ?array $postalAddress
     * @param ?string $postalCode
     * @param ?string $purgeAt
     * @param ?string $purgeBlockedReason
     * @param ?array $sourceData
     * @param ?string $sourceSyncedAt
     * @param ?string $street
     * @param ?string $trashBatch
     * @param ?string $website
     * @throws RevenexxException
     * @return array
     */
    public function productsManufacturersUpdate(string $id, ?bool $active = null, ?string $city = null, ?string $code = null, ?string $country = null, ?string $deletedAt = null, ?string $deletedBy = null, ?string $deletedById = null, ?array $descriptions = null, ?array $eeaResponsibleAddress = null, ?string $eeaResponsibleCity = null, ?string $eeaResponsibleCountry = null, ?string $eeaResponsibleEmail = null, ?string $eeaResponsibleName = null, ?string $eeaResponsiblePostalCode = null, ?string $eeaResponsibleStreet = null, ?string $email = null, ?string $externalId = null, ?array $externalRefs = null, ?string $legalName = null, ?string $logo = null, ?array $metadata = null, ?string $name = null, ?array $postalAddress = null, ?string $postalCode = null, ?string $purgeAt = null, ?string $purgeBlockedReason = null, ?array $sourceData = null, ?string $sourceSyncedAt = null, ?string $street = null, ?string $trashBatch = null, ?string $website = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/products/manufacturers/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($active)) {
            $apiParams['active'] = $active;
        }
        $apiParams['city'] = $city;

        if (!is_null($code)) {
            $apiParams['code'] = $code;
        }
        $apiParams['country'] = $country;
        $apiParams['deleted_at'] = $deletedAt;
        $apiParams['deleted_by'] = $deletedBy;
        $apiParams['deleted_by_id'] = $deletedById;
        $apiParams['descriptions'] = $descriptions;
        $apiParams['eea_responsible_address'] = $eeaResponsibleAddress;
        $apiParams['eea_responsible_city'] = $eeaResponsibleCity;
        $apiParams['eea_responsible_country'] = $eeaResponsibleCountry;
        $apiParams['eea_responsible_email'] = $eeaResponsibleEmail;
        $apiParams['eea_responsible_name'] = $eeaResponsibleName;
        $apiParams['eea_responsible_postal_code'] = $eeaResponsiblePostalCode;
        $apiParams['eea_responsible_street'] = $eeaResponsibleStreet;
        $apiParams['email'] = $email;
        $apiParams['external_id'] = $externalId;
        $apiParams['external_refs'] = $externalRefs;
        $apiParams['legal_name'] = $legalName;
        $apiParams['logo'] = $logo;
        $apiParams['metadata'] = $metadata;

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }
        $apiParams['postal_address'] = $postalAddress;
        $apiParams['postal_code'] = $postalCode;
        $apiParams['purge_at'] = $purgeAt;
        $apiParams['purge_blocked_reason'] = $purgeBlockedReason;
        $apiParams['source_data'] = $sourceData;
        $apiParams['source_synced_at'] = $sourceSyncedAt;
        $apiParams['street'] = $street;
        $apiParams['trash_batch'] = $trashBatch;
        $apiParams['website'] = $website;

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
     * Which of the data the EU General Product Safety Regulation (GPSR) requires
     * an online offer to name about its manufacturer this record carries, and
     * which it is missing: the legal name, a postal address with country and an
     * e-mail address, always; and for a manufacturer outside the European
     * Economic Area (EU plus Iceland, Liechtenstein, Norway) the responsible
     * person in the EEA with address and e-mail. The same rule as the stored
     * `gpsr_complete` column, spelled out per field so a form can say what to
     * fill in. It also answers both addresses as an offer prints them
     * (`address_lines`, `eea_responsible_address_lines`), so a product page or a
     * printout shows the lines rather than assembling them. Writes nothing.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function productsManufacturersGpsr(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/products/manufacturers/{id}/gpsr'
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
     * Clears the manufacturer's `logo`, so a brand page shows its name instead.
     * Reach for it when a logo is wrong or outdated and there is no replacement
     * yet; to swap one logo for another, set the new one directly. The asset or
     * the stored file it pointed at is left alone — other records, or a
     * product's media, may still show it.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function productsManufacturersLogoRemove(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/products/manufacturers/{id}/logo'
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
     * Links the manufacturer's `logo` to an asset of this catalog by its code —
     * the search index resolves it to the asset's current delivery path or URL,
     * so a moved logo follows on its own — or sets a path or https URL given
     * directly. Uploading the bytes is the storage service's job (the Cockpit's
     * media picker does it and writes the path through the plain update); this
     * call is for a logo that already exists as an asset, which is the case after
     * an import.
     *
     * @param string $id
     * @param ?string $assetId
     * @param ?string $xpath
     * @throws RevenexxException
     * @return array
     */
    public function productsManufacturersLogoSet(string $id, ?string $assetId = null, ?string $xpath = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/products/manufacturers/{id}/logo'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($assetId)) {
            $apiParams['asset_id'] = $assetId;
        }

        if (!is_null($xpath)) {
            $apiParams['path'] = $xpath;
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
     * The products linked to one manufacturer through `products.manufacturer_id`,
     * paged — what a brand page lists and what an operator checks before
     * deleting a manufacturer. A product that still names the manufacturer only
     * in the older free text `attribute_values.common.manufacturer` is not
     * listed: it is not linked yet, and `POST /products/manufacturers/migrate` is
     * what links it. Answers the short product shape; read a product by id for
     * the whole row.
     *
     * @param string $id
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @throws RevenexxException
     * @return array
     */
    public function productsManufacturersProducts(string $id, ?int $limit = null, ?int $offset = null, ?string $order = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/products/manufacturers/{id}/products'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

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
     * Brings a manufacturer back from the trash, together with every record that
     * went with it (its `trash_batch`). A record trashed on its own before stays
     * in the trash. Everything that pointed at it acts again as it did, because
     * nothing was changed when it went.
     * 
     * Restoring needs the same right as deleting.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function productsManufacturersRestore(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/products/manufacturers/{id}/restore'
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