<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;

class JourneysTemplates extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * List the shipped flows
     *
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @param ?string $id
     * @param ?string $code
     * @param ?string $tier
     * @param ?string $triggerKind
     * @param ?string $position
     * @param ?string $active
     * @throws RevenexxException
     * @return array
     */
    public function journeysTemplatesList(?int $limit = null, ?int $offset = null, ?string $order = null, ?string $id = null, ?string $code = null, ?string $tier = null, ?string $triggerKind = null, ?string $position = null, ?string $active = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/journeys/templates'
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

        if (!is_null($code)) {
            $apiParams['code'] = $code;
        }

        if (!is_null($tier)) {
            $apiParams['tier'] = $tier;
        }

        if (!is_null($triggerKind)) {
            $apiParams['trigger_kind'] = $triggerKind;
        }

        if (!is_null($position)) {
            $apiParams['position'] = $position;
        }

        if (!is_null($active)) {
            $apiParams['active'] = $active;
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
     * @param string $code
     * @param ?string $name
     * @throws RevenexxException
     * @return array
     */
    public function journeysTemplatesCopy(string $code, ?string $name = null): array
    {
        $apiPath = str_replace(
            ['{code}'],
            [$code],
            '/v1/journeys/templates/{code}/copy'
        );

        $apiParams = [];
        $apiParams['code'] = $code;

        if (!is_null($name)) {
            $apiParams['name'] = $name;
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
    public function journeysTemplatesGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/journeys/templates/{id}'
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
}