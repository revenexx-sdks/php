<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;

class CampaignsBudgets extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * List budget lines
     *
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @param ?string $id
     * @param ?string $campaignId
     * @param ?string $line
     * @param ?string $currency
     * @param ?string $source
     * @param ?string $platform
     * @param ?string $notes
     * @throws RevenexxException
     * @return array
     */
    public function campaignsBudgetsList(?int $limit = null, ?int $offset = null, ?string $order = null, ?string $id = null, ?string $campaignId = null, ?string $line = null, ?string $currency = null, ?string $source = null, ?string $platform = null, ?string $notes = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/campaigns/budgets'
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

        if (!is_null($id)) {
            $apiParams['id'] = $id;
        }

        if (!is_null($campaignId)) {
            $apiParams['campaign_id'] = $campaignId;
        }

        if (!is_null($line)) {
            $apiParams['line'] = $line;
        }

        if (!is_null($currency)) {
            $apiParams['currency'] = $currency;
        }

        if (!is_null($source)) {
            $apiParams['source'] = $source;
        }

        if (!is_null($platform)) {
            $apiParams['platform'] = $platform;
        }

        if (!is_null($notes)) {
            $apiParams['notes'] = $notes;
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
     * @param string $campaignId
     * @param string $line
     * @param ?string $currency
     * @param ?string $notes
     * @param ?float $planned
     * @param ?float $spent
     * @throws RevenexxException
     * @return array
     */
    public function campaignsBudgetsCreate(string $campaignId, string $line, ?string $currency = null, ?string $notes = null, ?float $planned = null, ?float $spent = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/campaigns/budgets'
        );

        $apiParams = [];
        $apiParams['campaign_id'] = $campaignId;
        $apiParams['line'] = $line;

        if (!is_null($currency)) {
            $apiParams['currency'] = $currency;
        }
        $apiParams['notes'] = $notes;

        if (!is_null($planned)) {
            $apiParams['planned'] = $planned;
        }

        if (!is_null($spent)) {
            $apiParams['spent'] = $spent;
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
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function campaignsBudgetsDelete(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/campaigns/budgets/{id}'
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
    public function campaignsBudgetsGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/campaigns/budgets/{id}'
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
     * @param ?string $campaignId
     * @param ?string $currency
     * @param ?string $line
     * @param ?string $notes
     * @param ?float $planned
     * @param ?float $spent
     * @throws RevenexxException
     * @return array
     */
    public function campaignsBudgetsUpdate(string $id, ?string $campaignId = null, ?string $currency = null, ?string $line = null, ?string $notes = null, ?float $planned = null, ?float $spent = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/campaigns/budgets/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($campaignId)) {
            $apiParams['campaign_id'] = $campaignId;
        }

        if (!is_null($currency)) {
            $apiParams['currency'] = $currency;
        }

        if (!is_null($line)) {
            $apiParams['line'] = $line;
        }
        $apiParams['notes'] = $notes;

        if (!is_null($planned)) {
            $apiParams['planned'] = $planned;
        }

        if (!is_null($spent)) {
            $apiParams['spent'] = $spent;
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