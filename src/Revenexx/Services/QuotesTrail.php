<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;
use Revenexx\Enums\QuotesTrailAttachDirection;
use Revenexx\Enums\Visibility;

class QuotesTrail extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * Records a drawing, a datasheet or a signed document against the quote. This
     * app stores the reference and serves no bytes — the file itself lives in
     * whatever storage the tenant uses.
     *
     * @param string $id
     * @param string $fileRef
     * @param string $filename
     * @param ?int $byteSize
     * @param ?string $contentType
     * @param ?QuotesTrailAttachDirection $direction
     * @param ?array $metadata
     * @param ?Visibility $visibility
     * @throws RevenexxException
     * @return array
     */
    public function quotesTrailAttach(string $id, string $fileRef, string $filename, ?int $byteSize = null, ?string $contentType = null, ?QuotesTrailAttachDirection $direction = null, ?array $metadata = null, ?Visibility $visibility = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/quotes/quotes/{id}/attachments'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams['file_ref'] = $fileRef;
        $apiParams['filename'] = $filename;

        if (!is_null($byteSize)) {
            $apiParams['byte_size'] = $byteSize;
        }

        if (!is_null($contentType)) {
            $apiParams['content_type'] = $contentType;
        }

        if (!is_null($direction)) {
            $apiParams['direction'] = $direction;
        }

        if (!is_null($metadata)) {
            $apiParams['metadata'] = $metadata;
        }

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
     * Adds an entry to the trail. `internal` is the merchant's own note and the
     * customer never sees it; `customer` is what appears on the quote the buyer
     * reads.
     *
     * @param string $id
     * @param string $body
     * @param ?string $actor
     * @param ?Visibility $visibility
     * @throws RevenexxException
     * @return array
     */
    public function quotesTrailNote(string $id, string $body, ?string $actor = null, ?Visibility $visibility = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/quotes/quotes/{id}/events'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams['body'] = $body;

        if (!is_null($actor)) {
            $apiParams['actor'] = $actor;
        }

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
}