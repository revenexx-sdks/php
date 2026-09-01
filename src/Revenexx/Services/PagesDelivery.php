<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;

class PagesDelivery extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * One call gives a theme its whole chrome: header, footer and account
     * navigation, each under the key the theme looks it up by. This route reads
     * no filter — fetch all of them once and index by `id`.
     *
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @throws RevenexxException
     * @return array
     */
    public function pagesDeliveryMenus(?int $limit = null, ?int $offset = null, ?string $order = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/pages/delivery/menus'
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
     * What a storefront calls to render a URL: `GET
     * /pages/delivery/page?slug=about-us&langcode=de`. Send exactly one selector
     * — `slug` or `id`. `slug` is matched against the page and then against its
     * translations, so a localized URL resolves to its page. Only the PUBLISHED
     * revision is served, so an edit in progress never leaks. What comes back is
     * finished rather than raw: `langcode` is resolved field by field with the
     * page's source language behind it, blocks whose publish window has not
     * opened or has already closed are left out, and every library reference is
     * expanded into the subtree it points at — so a renderer walks the tree it
     * is given and makes no second call for any of it.
     *
     * @param ?string $slug
     * @param ?string $id
     * @param ?string $langcode
     * @throws RevenexxException
     * @return array
     */
    public function pagesDeliveryPage(?string $slug = null, ?string $id = null, ?string $langcode = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/pages/delivery/page'
        );

        $apiParams = [];

        if (!is_null($slug)) {
            $apiParams['slug'] = $slug;
        }

        if (!is_null($id)) {
            $apiParams['id'] = $id;
        }

        if (!is_null($langcode)) {
            $apiParams['langcode'] = $langcode;
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
     * The route a sitemap, a static build or a link picker is generated from.
     * Only published pages, never a soft-deleted one — `filter` echoes both
     * predicates the route applies on its own. A `?status=` of your own is
     * ignored: this route is the published view by definition.
     *
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @param ?string $bundle
     * @throws RevenexxException
     * @return array
     */
    public function pagesDeliveryPages(?int $limit = null, ?int $offset = null, ?string $order = null, ?string $bundle = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/pages/delivery/pages'
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

        if (!is_null($bundle)) {
            $apiParams['bundle'] = $bundle;
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
     * The same shape `GET /pages/delivery/page` answers, built from the
     * UNPUBLISHED working copy instead of the published revision — so a
     * reviewer without an editor account sees exactly what the storefront would
     * render.
     *
     * @param string $token
     * @param ?string $langcode
     * @throws RevenexxException
     * @return array
     */
    public function pagesDeliveryPreview(string $token, ?string $langcode = null): array
    {
        $apiPath = str_replace(
            ['{token}'],
            [$token],
            '/v1/pages/delivery/preview/{token}'
        );

        $apiParams = [];
        $apiParams['token'] = $token;

        if (!is_null($langcode)) {
            $apiParams['langcode'] = $langcode;
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