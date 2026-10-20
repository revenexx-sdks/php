<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;
use Revenexx\Enums\Trashed;
use Revenexx\Enums\Platform;
use Revenexx\Enums\Status;

class AdsAccounts extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * Every ad account, without the trash unless `trashed` asks for it. Filter
     * `?platform=`, `?status=connected`.
     *
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @param ?Trashed $trashed
     * @param ?string $id
     * @param ?string $platform
     * @param ?string $externalAccountId
     * @param ?string $name
     * @param ?string $connectionRef
     * @param ?string $status
     * @param ?string $currency
     * @param ?string $lastError
     * @param ?string $clicksTotal
     * @param ?string $conversionsTotal
     * @param ?string $deletedBy
     * @param ?string $deletedById
     * @param ?string $trashBatch
     * @param ?string $purgeBlockedReason
     * @throws RevenexxException
     * @return array
     */
    public function adsAccountsList(?int $limit = null, ?int $offset = null, ?string $order = null, ?Trashed $trashed = null, ?string $id = null, ?string $platform = null, ?string $externalAccountId = null, ?string $name = null, ?string $connectionRef = null, ?string $status = null, ?string $currency = null, ?string $lastError = null, ?string $clicksTotal = null, ?string $conversionsTotal = null, ?string $deletedBy = null, ?string $deletedById = null, ?string $trashBatch = null, ?string $purgeBlockedReason = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/ads/accounts'
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

        if (!is_null($platform)) {
            $apiParams['platform'] = $platform;
        }

        if (!is_null($externalAccountId)) {
            $apiParams['external_account_id'] = $externalAccountId;
        }

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

        if (!is_null($connectionRef)) {
            $apiParams['connection_ref'] = $connectionRef;
        }

        if (!is_null($status)) {
            $apiParams['status'] = $status;
        }

        if (!is_null($currency)) {
            $apiParams['currency'] = $currency;
        }

        if (!is_null($lastError)) {
            $apiParams['last_error'] = $lastError;
        }

        if (!is_null($clicksTotal)) {
            $apiParams['clicks_total'] = $clicksTotal;
        }

        if (!is_null($conversionsTotal)) {
            $apiParams['conversions_total'] = $conversionsTotal;
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
     * @param string $externalAccountId
     * @param string $name
     * @param Platform $platform
     * @param ?int $clicksTotal
     * @param ?string $connectionRef
     * @param ?float $conversionValueTotal
     * @param ?int $conversionsTotal
     * @param ?string $currency
     * @param ?mixed $externalRefs
     * @param ?string $figuresAt
     * @param ?mixed $metadata
     * @param ?float $roas
     * @param ?mixed $sourceData
     * @param ?string $sourceSyncedAt
     * @param ?float $spendTotal
     * @throws RevenexxException
     * @return array
     */
    public function adsAccountsCreate(string $externalAccountId, string $name, Platform $platform, ?int $clicksTotal = null, ?string $connectionRef = null, ?float $conversionValueTotal = null, ?int $conversionsTotal = null, ?string $currency = null, mixed $externalRefs = null, ?string $figuresAt = null, mixed $metadata = null, ?float $roas = null, mixed $sourceData = null, ?string $sourceSyncedAt = null, ?float $spendTotal = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/ads/accounts'
        );

        $apiParams = [];
        $apiParams['external_account_id'] = $externalAccountId;
        $apiParams['name'] = $name;
        $apiParams['platform'] = $platform;

        if (!is_null($clicksTotal)) {
            $apiParams['clicks_total'] = $clicksTotal;
        }
        $apiParams['connection_ref'] = $connectionRef;

        if (!is_null($conversionValueTotal)) {
            $apiParams['conversion_value_total'] = $conversionValueTotal;
        }

        if (!is_null($conversionsTotal)) {
            $apiParams['conversions_total'] = $conversionsTotal;
        }

        if (!is_null($currency)) {
            $apiParams['currency'] = $currency;
        }

        if (!is_null($externalRefs)) {
            $apiParams['external_refs'] = $externalRefs;
        }
        $apiParams['figures_at'] = $figuresAt;

        if (!is_null($metadata)) {
            $apiParams['metadata'] = $metadata;
        }
        $apiParams['roas'] = $roas;

        if (!is_null($sourceData)) {
            $apiParams['source_data'] = $sourceData;
        }
        $apiParams['source_synced_at'] = $sourceSyncedAt;

        if (!is_null($spendTotal)) {
            $apiParams['spend_total'] = $spendTotal;
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
     * Every ad account in the trash is deleted for good on its own terms. One
     * that something still blocks stays in the trash and is named with its
     * reason, so a partial success says exactly what remained. Not for a
     * storefront contact.
     *
     * @throws RevenexxException
     * @return array
     */
    public function adsAccountsEmptyTrash(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/ads/accounts/trash/empty'
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
     * What the nightly purge does, callable by hand: every ad account in the
     * trash for longer than the tenant trash retention (90 days unless the tenant
     * set another) is deleted for good through the same rules as a second delete.
     * A blocked one stays and carries its reason. When the retention cannot be
     * read, nothing is deleted. Also the cron schedule.
     *
     * @throws RevenexxException
     * @return array
     */
    public function adsAccountsPurge(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/ads/accounts/trash/purge'
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
     * The first DELETE moves the ad account into the trash: it stays, with
     * everything hanging off it, and counts nowhere until it is restored. Only an
     * account that never booked spend or sent a conversion goes into the trash;
     * one that did is refused (`trash_blocked`, blocker `has_history`) —
     * disconnect it instead. Its audience syncs, conversion rules and campaign
     * links stay untouched and do nothing while it is in the trash; they are
     * deleted with it for good. A DELETE on a ad account already in the trash
     * deletes it for good — refused while something still needs it, and not for
     * a storefront contact.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function adsAccountsDelete(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/ads/accounts/{id}'
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
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function adsAccountsGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/ads/accounts/{id}'
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
     * @param string $id
     * @param ?int $clicksTotal
     * @param ?string $connectionRef
     * @param ?float $conversionValueTotal
     * @param ?int $conversionsTotal
     * @param ?string $currency
     * @param ?string $externalAccountId
     * @param ?mixed $externalRefs
     * @param ?string $figuresAt
     * @param ?mixed $metadata
     * @param ?string $name
     * @param ?Platform $platform
     * @param ?float $roas
     * @param ?mixed $sourceData
     * @param ?string $sourceSyncedAt
     * @param ?float $spendTotal
     * @throws RevenexxException
     * @return array
     */
    public function adsAccountsUpdate(string $id, ?int $clicksTotal = null, ?string $connectionRef = null, ?float $conversionValueTotal = null, ?int $conversionsTotal = null, ?string $currency = null, ?string $externalAccountId = null, mixed $externalRefs = null, ?string $figuresAt = null, mixed $metadata = null, ?string $name = null, ?Platform $platform = null, ?float $roas = null, mixed $sourceData = null, ?string $sourceSyncedAt = null, ?float $spendTotal = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/ads/accounts/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($clicksTotal)) {
            $apiParams['clicks_total'] = $clicksTotal;
        }
        $apiParams['connection_ref'] = $connectionRef;

        if (!is_null($conversionValueTotal)) {
            $apiParams['conversion_value_total'] = $conversionValueTotal;
        }

        if (!is_null($conversionsTotal)) {
            $apiParams['conversions_total'] = $conversionsTotal;
        }

        if (!is_null($currency)) {
            $apiParams['currency'] = $currency;
        }

        if (!is_null($externalAccountId)) {
            $apiParams['external_account_id'] = $externalAccountId;
        }

        if (!is_null($externalRefs)) {
            $apiParams['external_refs'] = $externalRefs;
        }
        $apiParams['figures_at'] = $figuresAt;

        if (!is_null($metadata)) {
            $apiParams['metadata'] = $metadata;
        }

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

        if (!is_null($platform)) {
            $apiParams['platform'] = $platform;
        }
        $apiParams['roas'] = $roas;

        if (!is_null($sourceData)) {
            $apiParams['source_data'] = $sourceData;
        }
        $apiParams['source_synced_at'] = $sourceSyncedAt;

        if (!is_null($spendTotal)) {
            $apiParams['spend_total'] = $spendTotal;
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
     * Clears the trash marks on the ad account. Its parts were never touched, so
     * they come back with it, in the state it was in. The same right as deleting.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function adsAccountsRestore(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/ads/accounts/{id}/restore'
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
     * Called by a connector workflow when a login expired or works again.
     *
     * @param string $id
     * @param Status $status
     * @param ?string $error
     * @throws RevenexxException
     * @return array
     */
    public function adsAccountsStatus(string $id, Status $status, ?string $error = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/ads/accounts/{id}/status'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams['status'] = $status;

        if (!is_null($error)) {
            $apiParams['error'] = $error;
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
}