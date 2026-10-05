<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;
use Revenexx\Enums\PagesSeedMode;

class QuotesRanges extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * The counters quote numbers are drawn from. A market points at one by its
     * `code`; the app seeds `quote` with the prefix `ANG-`.
     *
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @throws RevenexxException
     * @return array
     */
    public function quotesRangesList(?int $limit = null, ?int $offset = null, ?string $order = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/quotes/number-ranges'
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

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Adds a counter, so one market can number its quotes differently from
     * another. The code is unique per tenant.
     *
     * @param string $code
     * @param ?int $counter
     * @param ?string $createdAt
     * @param ?string $id
     * @param ?int $padding
     * @param ?int $positionStep
     * @param ?string $prefix
     * @param ?int $step
     * @param ?string $suffix
     * @param ?string $tenantId
     * @param ?string $updatedAt
     * @throws RevenexxException
     * @return array
     */
    public function quotesRangesCreate(string $code, ?int $counter = null, ?string $createdAt = null, ?string $id = null, ?int $padding = null, ?int $positionStep = null, ?string $prefix = null, ?int $step = null, ?string $suffix = null, ?string $tenantId = null, ?string $updatedAt = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/quotes/number-ranges'
        );

        $apiParams = [];
        $apiParams['code'] = $code;

        if (!is_null($counter)) {
            $apiParams['counter'] = $counter;
        }

        if (!is_null($createdAt)) {
            $apiParams['created_at'] = $createdAt;
        }

        if (!is_null($id)) {
            $apiParams['id'] = $id;
        }

        if (!is_null($padding)) {
            $apiParams['padding'] = $padding;
        }

        if (!is_null($positionStep)) {
            $apiParams['position_step'] = $positionStep;
        }

        if (!is_null($prefix)) {
            $apiParams['prefix'] = $prefix;
        }

        if (!is_null($step)) {
            $apiParams['step'] = $step;
        }

        if (!is_null($suffix)) {
            $apiParams['suffix'] = $suffix;
        }

        if (!is_null($tenantId)) {
            $apiParams['tenant_id'] = $tenantId;
        }

        if (!is_null($updatedAt)) {
            $apiParams['updated_at'] = $updatedAt;
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
     * Creates the `quote` range if it is missing. Idempotent, and what an
     * integration calls first — the install event does not reliably fire on a
     * marketplace install.
     *
     * @param ?array $library
     * @param ?array $menus
     * @param ?PagesSeedMode $mode
     * @param ?array $pages
     * @param ?array $settings
     * @throws RevenexxException
     * @return array
     */
    public function quotesRangesDefaults(?array $library = null, ?array $menus = null, ?PagesSeedMode $mode = null, ?array $pages = null, ?array $settings = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/quotes/number-ranges/defaults'
        );

        $apiParams = [];
        $apiParams['library'] = $library;
        $apiParams['menus'] = $menus;

        if (!is_null($mode)) {
            $apiParams['mode'] = $mode;
        }
        $apiParams['pages'] = $pages;
        $apiParams['settings'] = $settings;

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
     * Removes a counter. The standard one comes back on the next draw rather than
     * breaking quoting.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function quotesRangesDelete(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/quotes/number-ranges/{id}'
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
     * Reads one counter, including where it currently stands.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function quotesRangesGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/quotes/number-ranges/{id}'
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
     * Changes a counter — its prefix, its padding, or the counter itself.
     * Lowering the counter will hand out numbers that already exist, which the
     * unique index then refuses.
     *
     * @param string $id
     * @param ?string $code
     * @param ?int $counter
     * @param ?string $createdAt
     * @param ?string $idBody
     * @param ?int $padding
     * @param ?int $positionStep
     * @param ?string $prefix
     * @param ?int $step
     * @param ?string $suffix
     * @param ?string $tenantId
     * @param ?string $updatedAt
     * @throws RevenexxException
     * @return array
     */
    public function quotesRangesUpdate(string $id, ?string $code = null, ?int $counter = null, ?string $createdAt = null, ?string $idBody = null, ?int $padding = null, ?int $positionStep = null, ?string $prefix = null, ?int $step = null, ?string $suffix = null, ?string $tenantId = null, ?string $updatedAt = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/quotes/number-ranges/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($code)) {
            $apiParams['code'] = $code;
        }

        if (!is_null($counter)) {
            $apiParams['counter'] = $counter;
        }

        if (!is_null($createdAt)) {
            $apiParams['created_at'] = $createdAt;
        }

        if (!is_null($idBody)) {
            $apiParams['id'] = $idBody;
        }

        if (!is_null($padding)) {
            $apiParams['padding'] = $padding;
        }

        if (!is_null($positionStep)) {
            $apiParams['position_step'] = $positionStep;
        }

        if (!is_null($prefix)) {
            $apiParams['prefix'] = $prefix;
        }

        if (!is_null($step)) {
            $apiParams['step'] = $step;
        }

        if (!is_null($suffix)) {
            $apiParams['suffix'] = $suffix;
        }

        if (!is_null($tenantId)) {
            $apiParams['tenant_id'] = $tenantId;
        }

        if (!is_null($updatedAt)) {
            $apiParams['updated_at'] = $updatedAt;
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
}