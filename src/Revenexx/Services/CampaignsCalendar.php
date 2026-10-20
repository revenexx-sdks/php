<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;

class CampaignsCalendar extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * Campaign windows and due tasks from this app; mail send times, promotion
     * windows, automation live periods and page publish dates read from their own
     * apps on every call. `sources` says which app answered.
     *
     * @param ?string $from
     * @param ?string $to
     * @param ?string $type
     * @param ?string $market
     * @param ?string $status
     * @param ?string $ownerId
     * @throws RevenexxException
     * @return array
     */
    public function campaignsCalendarRead(?string $from = null, ?string $to = null, ?string $type = null, ?string $market = null, ?string $status = null, ?string $ownerId = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/campaigns/calendar'
        );

        $apiParams = [];

        if (!is_null($from)) {
            $apiParams['from'] = $from;
        }

        if (!is_null($to)) {
            $apiParams['to'] = $to;
        }

        if (!is_null($type)) {
            $apiParams['type'] = $type;
        }

        if (!is_null($market)) {
            $apiParams['market'] = $market;
        }

        if (!is_null($status)) {
            $apiParams['status'] = $status;
        }

        if (!is_null($ownerId)) {
            $apiParams['owner_id'] = $ownerId;
        }

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }
}