<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;
use Revenexx\Enums\Trashed;
use Revenexx\Enums\Channels;
use Revenexx\Enums\MarketingConsentsVocabulariesGetName;

class MarketingConsentsTypes extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * Every version of every wording, drafts included. Filter by
     * `subscription_type_id` and `locale`.
     *
     * @param ?string $id
     * @param ?string $subscriptionTypeId
     * @param ?int $version
     * @param ?string $locale
     * @param ?string $wording
     * @param ?string $publishedAt
     * @param ?string $publishedBy
     * @param ?string $createdAt
     * @param ?string $updatedAt
     * @param ?string $deletedAt
     * @param ?string $deletedBy
     * @param ?string $deletedById
     * @param ?string $trashBatch
     * @param ?string $purgeAt
     * @param ?string $purgeBlockedReason
     * @param ?Trashed $trashed
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @throws RevenexxException
     * @return array
     */
    public function marketingConsentsConsentTextsList(?string $id = null, ?string $subscriptionTypeId = null, ?int $version = null, ?string $locale = null, ?string $wording = null, ?string $publishedAt = null, ?string $publishedBy = null, ?string $createdAt = null, ?string $updatedAt = null, ?string $deletedAt = null, ?string $deletedBy = null, ?string $deletedById = null, ?string $trashBatch = null, ?string $purgeAt = null, ?string $purgeBlockedReason = null, ?Trashed $trashed = null, ?int $limit = null, ?int $offset = null, ?string $order = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/marketing-consents/consent-texts'
        );

        $apiParams = [];

        if (!is_null($id)) {
            $apiParams['id'] = $id;
        }

        if (!is_null($subscriptionTypeId)) {
            $apiParams['subscription_type_id'] = $subscriptionTypeId;
        }

        if (!is_null($version)) {
            $apiParams['version'] = $version;
        }

        if (!is_null($locale)) {
            $apiParams['locale'] = $locale;
        }

        if (!is_null($wording)) {
            $apiParams['wording'] = $wording;
        }

        if (!is_null($publishedAt)) {
            $apiParams['published_at'] = $publishedAt;
        }

        if (!is_null($publishedBy)) {
            $apiParams['published_by'] = $publishedBy;
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

        if (!is_null($trashed)) {
            $apiParams['trashed'] = $trashed;
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
     * A new draft for one type and language. The version is the next number for
     * that pair; nobody can agree to it until it is published.
     *
     * @param string $locale
     * @param string $subscriptionTypeId
     * @param string $wording
     * @throws RevenexxException
     * @return array
     */
    public function marketingConsentsConsentTextsCreate(string $locale, string $subscriptionTypeId, string $wording): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/marketing-consents/consent-texts'
        );

        $apiParams = [];
        $apiParams['locale'] = $locale;
        $apiParams['subscription_type_id'] = $subscriptionTypeId;
        $apiParams['wording'] = $wording;

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
     * Every consent text in the trash is deleted for good on its own terms. One
     * that something still blocks stays in the trash and is named with its
     * reason, so a partial success says exactly what remained. Not for a
     * storefront contact.
     *
     * @throws RevenexxException
     * @return array
     */
    public function marketingConsentsConsentTextsEmptyTrash(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/marketing-consents/consent-texts/trash/empty'
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
     * What the nightly purge does, callable by hand: every consent text in the
     * trash for longer than the tenant trash retention (90 days unless the tenant
     * set another) is deleted for good through the same rules as a second delete.
     * A blocked one stays and carries its reason. When the retention cannot be
     * read, nothing is deleted. Also the cron schedule.
     *
     * @throws RevenexxException
     * @return array
     */
    public function marketingConsentsConsentTextsPurge(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/marketing-consents/consent-texts/trash/purge'
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
     * The first DELETE moves the consent text into the trash: it stays, with
     * everything hanging off it, and counts nowhere until it is restored. Only a
     * draft goes in; a published version is proof and is refused
     * (`trash_blocked`, blocker `text_published`). A draft whose type is in the
     * trash comes back only after the type (`parent_in_trash`). A DELETE on a
     * consent text already in the trash deletes it for good — refused while
     * something still needs it, and not for a storefront contact.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function marketingConsentsConsentTextsDelete(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/marketing-consents/consent-texts/{id}'
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
     * One version of a wording by id.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function marketingConsentsConsentTextsGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/marketing-consents/consent-texts/{id}'
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
     * Changes the wording of a draft. A published version never changes —
     * people agreed to exactly that text.
     *
     * @param string $id
     * @param string $wording
     * @throws RevenexxException
     * @return array
     */
    public function marketingConsentsConsentTextsUpdate(string $id, string $wording): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/marketing-consents/consent-texts/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams['wording'] = $wording;

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
     * Freezes the draft. From now on sign-ups can agree to it, and the newest
     * published version per language is what a sign-up without a named text
     * records.
     *
     * @param string $id
     * @param array $data
     * @throws RevenexxException
     * @return array
     */
    public function marketingConsentsConsentTextsPublish(string $id, array $data): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/marketing-consents/consent-texts/{id}/publish'
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
     * Clears the trash marks on the consent text. Its parts were never touched,
     * so they come back with it, in the state it was in. The same right as
     * deleting.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function marketingConsentsConsentTextsRestore(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/marketing-consents/consent-texts/{id}/restore'
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
     * Every subscription type of this tenant visible in the market of the call,
     * archived ones included (filter on `archived_at`).
     *
     * @param ?string $id
     * @param ?string $code
     * @param ?bool $requiresDoi
     * @param ?bool $allowsExistingCustomer
     * @param ?int $position
     * @param ?string $archivedAt
     * @param ?string $externalId
     * @param ?string $sourceSyncedAt
     * @param ?string $createdAt
     * @param ?string $updatedAt
     * @param ?string $deletedAt
     * @param ?string $deletedBy
     * @param ?string $deletedById
     * @param ?string $trashBatch
     * @param ?string $purgeAt
     * @param ?string $purgeBlockedReason
     * @param ?Trashed $trashed
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @throws RevenexxException
     * @return array
     */
    public function marketingConsentsSubscriptionTypesList(?string $id = null, ?string $code = null, ?bool $requiresDoi = null, ?bool $allowsExistingCustomer = null, ?int $position = null, ?string $archivedAt = null, ?string $externalId = null, ?string $sourceSyncedAt = null, ?string $createdAt = null, ?string $updatedAt = null, ?string $deletedAt = null, ?string $deletedBy = null, ?string $deletedById = null, ?string $trashBatch = null, ?string $purgeAt = null, ?string $purgeBlockedReason = null, ?Trashed $trashed = null, ?int $limit = null, ?int $offset = null, ?string $order = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/marketing-consents/subscription-types'
        );

        $apiParams = [];

        if (!is_null($id)) {
            $apiParams['id'] = $id;
        }

        if (!is_null($code)) {
            $apiParams['code'] = $code;
        }

        if (!is_null($requiresDoi)) {
            $apiParams['requires_doi'] = $requiresDoi;
        }

        if (!is_null($allowsExistingCustomer)) {
            $apiParams['allows_existing_customer'] = $allowsExistingCustomer;
        }

        if (!is_null($position)) {
            $apiParams['position'] = $position;
        }

        if (!is_null($archivedAt)) {
            $apiParams['archived_at'] = $archivedAt;
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

        if (!is_null($trashed)) {
            $apiParams['trashed'] = $trashed;
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
     * A new purpose to write about. `code` and `labels` are owed; it needs a
     * published consent text before anybody can sign up.
     *
     * @param string $code
     * @param ?array $labels
     * @param ?bool $allowsExistingCustomer
     * @param ?array $channels
     * @param ?array $descriptions
     * @param ?int $position
     * @param ?bool $requiresDoi
     * @param ?array $similarGoodsNote
     * @throws RevenexxException
     * @return array
     */
    public function marketingConsentsSubscriptionTypesCreate(string $code, ?array $labels, ?bool $allowsExistingCustomer = null, ?array $channels = null, ?array $descriptions = null, ?int $position = null, ?bool $requiresDoi = null, ?array $similarGoodsNote = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/marketing-consents/subscription-types'
        );

        $apiParams = [];
        $apiParams['code'] = $code;
        $apiParams['labels'] = $labels;

        if (!is_null($allowsExistingCustomer)) {
            $apiParams['allows_existing_customer'] = $allowsExistingCustomer;
        }

        if (!is_null($channels)) {
            $apiParams['channels'] = $channels;
        }
        $apiParams['descriptions'] = $descriptions;

        if (!is_null($position)) {
            $apiParams['position'] = $position;
        }

        if (!is_null($requiresDoi)) {
            $apiParams['requires_doi'] = $requiresDoi;
        }
        $apiParams['similar_goods_note'] = $similarGoodsNote;

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
     * Every subscription type in the trash is deleted for good on its own terms.
     * One that something still blocks stays in the trash and is named with its
     * reason, so a partial success says exactly what remained. Not for a
     * storefront contact.
     *
     * @throws RevenexxException
     * @return array
     */
    public function marketingConsentsSubscriptionTypesEmptyTrash(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/marketing-consents/subscription-types/trash/empty'
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
     * What the nightly purge does, callable by hand: every subscription type in
     * the trash for longer than the tenant trash retention (90 days unless the
     * tenant set another) is deleted for good through the same rules as a second
     * delete. A blocked one stays and carries its reason. When the retention
     * cannot be read, nothing is deleted. Also the cron schedule.
     *
     * @throws RevenexxException
     * @return array
     */
    public function marketingConsentsSubscriptionTypesPurge(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/marketing-consents/subscription-types/trash/purge'
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
     * The first DELETE moves the subscription type into the trash: it stays, with
     * everything hanging off it, and counts nowhere until it is restored. Only a
     * type with neither subscriptions nor published consent texts goes in, and
     * its drafts stay with it; one with proof is refused (`trash_blocked`,
     * blocker `type_in_use`) — archive it instead. In the trash it takes no
     * sign-ups, answers no eligibility and keeps its code reserved. Its drafts go
     * with the final delete. A DELETE on a subscription type already in the trash
     * deletes it for good — refused while something still needs it, and not for
     * a storefront contact.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function marketingConsentsSubscriptionTypesDelete(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/marketing-consents/subscription-types/{id}'
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
     * One subscription type by id.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function marketingConsentsSubscriptionTypesGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/marketing-consents/subscription-types/{id}'
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
     * Partial update. The code may only be repeated unchanged. A channel can only
     * be removed while no pending or confirmed subscription holds it.
     *
     * @param string $id
     * @param ?bool $allowsExistingCustomer
     * @param ?array $channels
     * @param ?string $code
     * @param ?array $descriptions
     * @param ?array $labels
     * @param ?int $position
     * @param ?bool $requiresDoi
     * @param ?array $similarGoodsNote
     * @throws RevenexxException
     * @return array
     */
    public function marketingConsentsSubscriptionTypesUpdate(string $id, ?bool $allowsExistingCustomer = null, ?array $channels = null, ?string $code = null, ?array $descriptions = null, ?array $labels = null, ?int $position = null, ?bool $requiresDoi = null, ?array $similarGoodsNote = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/marketing-consents/subscription-types/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($allowsExistingCustomer)) {
            $apiParams['allows_existing_customer'] = $allowsExistingCustomer;
        }

        if (!is_null($channels)) {
            $apiParams['channels'] = $channels;
        }

        if (!is_null($code)) {
            $apiParams['code'] = $code;
        }
        $apiParams['descriptions'] = $descriptions;
        $apiParams['labels'] = $labels;

        if (!is_null($position)) {
            $apiParams['position'] = $position;
        }

        if (!is_null($requiresDoi)) {
            $apiParams['requires_doi'] = $requiresDoi;
        }
        $apiParams['similar_goods_note'] = $similarGoodsNote;

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
     * An archived type takes no sign-ups and answers no eligibility (422
     * `subscription_type_archived`); its subscriptions and proof stay. Archiving
     * twice changes nothing.
     *
     * @param string $id
     * @param array $data
     * @throws RevenexxException
     * @return array
     */
    public function marketingConsentsSubscriptionTypesArchive(string $id, array $data): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/marketing-consents/subscription-types/{id}/archive'
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
     * Clears the trash marks on the subscription type. Its parts were never
     * touched, so they come back with it, in the state it was in. The same right
     * as deleting.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function marketingConsentsSubscriptionTypesRestore(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/marketing-consents/subscription-types/{id}/restore'
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
     * Takes sign-ups and answers eligibility again. Subscriptions keep the state
     * they had.
     *
     * @param string $id
     * @param array $data
     * @throws RevenexxException
     * @return array
     */
    public function marketingConsentsSubscriptionTypesUnarchive(string $id, array $data): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/marketing-consents/subscription-types/{id}/unarchive'
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
     * The closed value sets behind this app's columns, with their words:
     * channels, subscription-states, legal-bases, consent-event-kinds,
     * consent-sources, eligibility-reasons, import-states.
     *
     * @throws RevenexxException
     * @return array
     */
    public function marketingConsentsVocabulariesList(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/marketing-consents/vocabularies'
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
     * One closed value set: every value with its label per language and a tone
     * for a badge.
     *
     * @param MarketingConsentsVocabulariesGetName $name
     * @throws RevenexxException
     * @return array
     */
    public function marketingConsentsVocabulariesGet(MarketingConsentsVocabulariesGetName $name): array
    {
        $apiPath = str_replace(
            ['{name}'],
            [$name],
            '/v1/marketing-consents/vocabularies/{name}'
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