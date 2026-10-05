<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;
use Revenexx\Enums\Layout;

class ConsentManagerPolicy extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * The draft for the market in `x-revenexx-market`. A market without its own
     * answers the shop's draft with `inherited: true`. A tenant with no draft at
     * all gets the default one created.
     *
     * @throws RevenexxException
     * @return array
     */
    public function consentManagerBannerGet(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/consent-manager/banner'
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
     * Save the draft for the market in `x-revenexx-market` ('' = the shop). A
     * market's first save starts from a copy of the shop's draft. Nothing a
     * visitor sees changes until the next publish.
     *
     * @param ?string $imprintUrl
     * @param ?Layout $layout
     * @param ?string $privacyUrl
     * @param ?array $texts
     * @throws RevenexxException
     * @return array
     */
    public function consentManagerBannerUpdate(?string $imprintUrl = null, ?Layout $layout = null, ?string $privacyUrl = null, ?array $texts = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/consent-manager/banner'
        );

        $apiParams = [];
        $apiParams['imprint_url'] = $imprintUrl;
        $apiParams['layout'] = $layout;
        $apiParams['privacy_url'] = $privacyUrl;

        if (!is_null($texts)) {
            $apiParams['texts'] = $texts;
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
     * Every published version. There is no route that edits or deletes one —
     * both answer 405 — because a version is the evidence of what visitors
     * read.
     *
     * @param ?string $id
     * @param ?int $number
     * @param ?string $market
     * @param ?bool $material
     * @param ?int $materialNumber
     * @param ?string $sha256
     * @param ?string $note
     * @param ?string $publishedAt
     * @param ?string $publishedBy
     * @param ?string $createdAt
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @throws RevenexxException
     * @return array
     */
    public function consentManagerPolicyVersionsList(?string $id = null, ?int $number = null, ?string $market = null, ?bool $material = null, ?int $materialNumber = null, ?string $sha256 = null, ?string $note = null, ?string $publishedAt = null, ?string $publishedBy = null, ?string $createdAt = null, ?int $limit = null, ?int $offset = null, ?string $order = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/consent-manager/policy-versions'
        );

        $apiParams = [];

        if (!is_null($id)) {
            $apiParams['id'] = $id;
        }

        if (!is_null($number)) {
            $apiParams['number'] = $number;
        }

        if (!is_null($market)) {
            $apiParams['market'] = $market;
        }

        if (!is_null($material)) {
            $apiParams['material'] = $material;
        }

        if (!is_null($materialNumber)) {
            $apiParams['material_number'] = $materialNumber;
        }

        if (!is_null($sha256)) {
            $apiParams['sha256'] = $sha256;
        }

        if (!is_null($note)) {
            $apiParams['note'] = $note;
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
     * One version with its full frozen content and hash.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function consentManagerPolicyVersionsGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/consent-manager/policy-versions/{id}'
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
     * Renders the draft exactly as publishing would, without publishing it, and
     * answers a token that reads it at GET
     * /consent-manager/delivery/preview/{token} until it expires (72 hours by
     * default, at most 168). The same refusals as a publish apply.
     *
     * @param ?int $ttlHours
     * @throws RevenexxException
     * @return array
     */
    public function consentManagerPolicyPreview(?int $ttlHours = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/consent-manager/policy/preview'
        );

        $apiParams = [];

        if (!is_null($ttlHours)) {
            $apiParams['ttl_hours'] = $ttlHours;
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
     * Renders the draft, the active purposes and vendors and the settings in
     * every language the draft speaks, and stores them as a new immutable version
     * with a SHA-256 hash over the canonical content. The version is for the
     * market in `x-revenexx-market` ('' = the shop). `material: false` keeps
     * visitors' earlier decisions valid — unless the `reconsent_on_publish`
     * setting is `always`, or there is no earlier version.
     *
     * @param ?bool $material
     * @param ?string $note
     * @throws RevenexxException
     * @return array
     */
    public function consentManagerPolicyPublish(?bool $material = null, ?string $note = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/consent-manager/policy/publish'
        );

        $apiParams = [];

        if (!is_null($material)) {
            $apiParams['material'] = $material;
        }

        if (!is_null($note)) {
            $apiParams['note'] = $note;
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