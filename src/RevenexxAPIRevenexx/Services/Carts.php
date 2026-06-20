<?php

namespace RevenexxAPIRevenexx\Services;

use RevenexxAPIRevenexx\RevenexxAPIRevenexxException;
use RevenexxAPIRevenexx\Client;
use RevenexxAPIRevenexx\Service;
use RevenexxAPIRevenexx\InputFile;
use RevenexxAPIRevenexx\Enums\CartIoDirection;
use RevenexxAPIRevenexx\Enums\CartIoApplyMode;
use RevenexxAPIRevenexx\Enums\CartIoEntity;
use RevenexxAPIRevenexx\Enums\CartIoFormat;
use RevenexxAPIRevenexx\Enums\CartItemType;
use RevenexxAPIRevenexx\Enums\CartExportFormat;

class Carts extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function cartsList(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/carts'
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
     * @param ?string $channelId
     * @param ?string $contactId
     * @param ?string $currency
     * @param ?bool $isCurrent
     * @param ?string $marketId
     * @param ?array $metadata
     * @param ?string $name
     * @param ?string $sessionKey
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function cartsCreate(?string $channelId = null, ?string $contactId = null, ?string $currency = null, ?bool $isCurrent = null, ?string $marketId = null, ?array $metadata = null, ?string $name = null, ?string $sessionKey = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/carts'
        );

        $apiParams = [];
        $apiParams['channel_id'] = $channelId;
        $apiParams['contact_id'] = $contactId;
        $apiParams['currency'] = $currency;
        $apiParams['is_current'] = $isCurrent;
        $apiParams['market_id'] = $marketId;
        $apiParams['metadata'] = $metadata;
        $apiParams['name'] = $name;
        $apiParams['session_key'] = $sessionKey;

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
     * @param string $contactId
     * @param string $sessionKey
     * @param ?string $targetCartId
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function cartsClaim(string $contactId, string $sessionKey, ?string $targetCartId = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/carts/claim'
        );

        $apiParams = [];
        $apiParams['contact_id'] = $contactId;
        $apiParams['session_key'] = $sessionKey;
        $apiParams['target_cart_id'] = $targetCartId;

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
     * @param ?string $contactId
     * @param ?string $csv
     * @param ?string $name
     * @param ?array $payload
     * @param ?string $profileId
     * @param ?string $sessionKey
     * @param ?string $targetCartId
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function cartsImport(?string $contactId = null, ?string $csv = null, ?string $name = null, ?array $payload = null, ?string $profileId = null, ?string $sessionKey = null, ?string $targetCartId = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/carts/import'
        );

        $apiParams = [];
        $apiParams['contact_id'] = $contactId;

        if (!is_null($csv)) {
            $apiParams['csv'] = $csv;
        }

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

        if (!is_null($payload)) {
            $apiParams['payload'] = $payload;
        }
        $apiParams['profile_id'] = $profileId;

        if (!is_null($sessionKey)) {
            $apiParams['session_key'] = $sessionKey;
        }
        $apiParams['target_cart_id'] = $targetCartId;

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
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function cartsIoProfilesList(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/carts/io/profiles'
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
     * @param CartIoDirection $direction
     * @param string $name
     * @param ?CartIoApplyMode $applyMode
     * @param ?CartIoEntity $entity
     * @param ?CartIoFormat $format
     * @param ?bool $isTemplate
     * @param ?array $mapping
     * @param ?array $options
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function cartsIoProfilesCreate(CartIoDirection $direction, string $name, ?CartIoApplyMode $applyMode = null, ?CartIoEntity $entity = null, ?CartIoFormat $format = null, ?bool $isTemplate = null, ?array $mapping = null, ?array $options = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/carts/io/profiles'
        );

        $apiParams = [];
        $apiParams['direction'] = $direction;
        $apiParams['name'] = $name;

        if (!is_null($applyMode)) {
            $apiParams['apply_mode'] = $applyMode;
        }

        if (!is_null($entity)) {
            $apiParams['entity'] = $entity;
        }

        if (!is_null($format)) {
            $apiParams['format'] = $format;
        }

        if (!is_null($isTemplate)) {
            $apiParams['is_template'] = $isTemplate;
        }

        if (!is_null($mapping)) {
            $apiParams['mapping'] = $mapping;
        }

        if (!is_null($options)) {
            $apiParams['options'] = $options;
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
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function cartsIoProfilesDefaults(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/carts/io/profiles/defaults'
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
     * @param string $id
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function cartsIoProfilesDelete(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/carts/io/profiles/{id}'
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
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function cartsIoProfilesGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/carts/io/profiles/{id}'
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
     * @param ?CartIoApplyMode $applyMode
     * @param ?CartIoDirection $direction
     * @param ?CartIoEntity $entity
     * @param ?CartIoFormat $format
     * @param ?bool $isTemplate
     * @param ?array $mapping
     * @param ?string $name
     * @param ?array $options
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function cartsIoProfilesUpdate(string $id, ?CartIoApplyMode $applyMode = null, ?CartIoDirection $direction = null, ?CartIoEntity $entity = null, ?CartIoFormat $format = null, ?bool $isTemplate = null, ?array $mapping = null, ?string $name = null, ?array $options = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/carts/io/profiles/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($applyMode)) {
            $apiParams['apply_mode'] = $applyMode;
        }

        if (!is_null($direction)) {
            $apiParams['direction'] = $direction;
        }

        if (!is_null($entity)) {
            $apiParams['entity'] = $entity;
        }

        if (!is_null($format)) {
            $apiParams['format'] = $format;
        }

        if (!is_null($isTemplate)) {
            $apiParams['is_template'] = $isTemplate;
        }

        if (!is_null($mapping)) {
            $apiParams['mapping'] = $mapping;
        }

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

        if (!is_null($options)) {
            $apiParams['options'] = $options;
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
     * @param string $sourceCartId
     * @param string $targetCartId
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function cartsMerge(string $sourceCartId, string $targetCartId): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/carts/merge'
        );

        $apiParams = [];
        $apiParams['source_cart_id'] = $sourceCartId;
        $apiParams['target_cart_id'] = $targetCartId;

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
     * @param string $cartId
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function cartsItemsList(string $cartId): array
    {
        $apiPath = str_replace(
            ['{cart_id}'],
            [$cartId],
            '/v1/carts/{cart_id}/items'
        );

        $apiParams = [];
        $apiParams['cart_id'] = $cartId;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * @param string $cartId
     * @param ?array $configuration
     * @param ?string $currency
     * @param ?array $metadata
     * @param ?string $name
     * @param ?int $position
     * @param ?string $productId
     * @param ?float $quantity
     * @param ?string $sku
     * @param ?array $snapshot
     * @param ?float $taxRate
     * @param ?CartItemType $type
     * @param ?string $unit
     * @param ?float $unitPrice
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function cartsItemsCreate(string $cartId, ?array $configuration = null, ?string $currency = null, ?array $metadata = null, ?string $name = null, ?int $position = null, ?string $productId = null, ?float $quantity = null, ?string $sku = null, ?array $snapshot = null, ?float $taxRate = null, ?CartItemType $type = null, ?string $unit = null, ?float $unitPrice = null): array
    {
        $apiPath = str_replace(
            ['{cart_id}'],
            [$cartId],
            '/v1/carts/{cart_id}/items'
        );

        $apiParams = [];
        $apiParams['cart_id'] = $cartId;
        $apiParams['configuration'] = $configuration;
        $apiParams['currency'] = $currency;
        $apiParams['metadata'] = $metadata;
        $apiParams['name'] = $name;
        $apiParams['position'] = $position;
        $apiParams['product_id'] = $productId;
        $apiParams['quantity'] = $quantity;
        $apiParams['sku'] = $sku;
        $apiParams['snapshot'] = $snapshot;
        $apiParams['tax_rate'] = $taxRate;

        if (!is_null($type)) {
            $apiParams['type'] = $type;
        }
        $apiParams['unit'] = $unit;
        $apiParams['unit_price'] = $unitPrice;

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
     * @param string $cartId
     * @param array $items
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function cartsItemsReplace(string $cartId, array $items): array
    {
        $apiPath = str_replace(
            ['{cart_id}'],
            [$cartId],
            '/v1/carts/{cart_id}/items'
        );

        $apiParams = [];
        $apiParams['cart_id'] = $cartId;
        $apiParams['items'] = $items;

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
     * @param string $cartId
     * @param string $id
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function cartsItemsDelete(string $cartId, string $id): array
    {
        $apiPath = str_replace(
            ['{cart_id}', '{id}'],
            [$cartId, $id],
            '/v1/carts/{cart_id}/items/{id}'
        );

        $apiParams = [];
        $apiParams['cart_id'] = $cartId;
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
     * @param string $cartId
     * @param string $id
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function cartsItemsGet(string $cartId, string $id): array
    {
        $apiPath = str_replace(
            ['{cart_id}', '{id}'],
            [$cartId, $id],
            '/v1/carts/{cart_id}/items/{id}'
        );

        $apiParams = [];
        $apiParams['cart_id'] = $cartId;
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
     * @param string $cartId
     * @param string $id
     * @param ?array $configuration
     * @param ?string $currency
     * @param ?array $metadata
     * @param ?string $name
     * @param ?int $position
     * @param ?string $productId
     * @param ?float $quantity
     * @param ?string $sku
     * @param ?array $snapshot
     * @param ?float $taxRate
     * @param ?CartItemType $type
     * @param ?string $unit
     * @param ?float $unitPrice
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function cartsItemsUpdate(string $cartId, string $id, ?array $configuration = null, ?string $currency = null, ?array $metadata = null, ?string $name = null, ?int $position = null, ?string $productId = null, ?float $quantity = null, ?string $sku = null, ?array $snapshot = null, ?float $taxRate = null, ?CartItemType $type = null, ?string $unit = null, ?float $unitPrice = null): array
    {
        $apiPath = str_replace(
            ['{cart_id}', '{id}'],
            [$cartId, $id],
            '/v1/carts/{cart_id}/items/{id}'
        );

        $apiParams = [];
        $apiParams['cart_id'] = $cartId;
        $apiParams['id'] = $id;
        $apiParams['configuration'] = $configuration;
        $apiParams['currency'] = $currency;
        $apiParams['metadata'] = $metadata;
        $apiParams['name'] = $name;
        $apiParams['position'] = $position;
        $apiParams['product_id'] = $productId;
        $apiParams['quantity'] = $quantity;
        $apiParams['sku'] = $sku;
        $apiParams['snapshot'] = $snapshot;
        $apiParams['tax_rate'] = $taxRate;

        if (!is_null($type)) {
            $apiParams['type'] = $type;
        }
        $apiParams['unit'] = $unit;
        $apiParams['unit_price'] = $unitPrice;

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
     * @param string $id
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function cartsDelete(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/carts/{id}'
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
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function cartsGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/carts/{id}'
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
     * @param ?string $channelId
     * @param ?string $currency
     * @param ?string $marketId
     * @param ?array $metadata
     * @param ?string $name
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function cartsUpdate(string $id, ?string $channelId = null, ?string $currency = null, ?string $marketId = null, ?array $metadata = null, ?string $name = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/carts/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams['channel_id'] = $channelId;
        $apiParams['currency'] = $currency;
        $apiParams['market_id'] = $marketId;
        $apiParams['metadata'] = $metadata;
        $apiParams['name'] = $name;

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
     * @param string $id
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function cartsAbandon(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/carts/{id}/abandon'
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
     * @param string $id
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function cartsActivate(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/carts/{id}/activate'
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
     * @param string $id
     * @param ?CartExportFormat $format
     * @param ?string $profileId
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function cartsExport(string $id, ?CartExportFormat $format = null, ?string $profileId = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/carts/{id}/export'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($format)) {
            $apiParams['format'] = $format;
        }
        $apiParams['profile_id'] = $profileId;

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
     * @param ?string $orderRef
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function cartsOrder(string $id, ?string $orderRef = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/carts/{id}/order'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams['order_ref'] = $orderRef;

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
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function cartsReopen(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/carts/{id}/reopen'
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