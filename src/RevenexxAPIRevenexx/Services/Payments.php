<?php

namespace RevenexxAPIRevenexx\Services;

use RevenexxAPIRevenexx\RevenexxAPIRevenexxException;
use RevenexxAPIRevenexx\Client;
use RevenexxAPIRevenexx\Service;
use RevenexxAPIRevenexx\InputFile;
use RevenexxAPIRevenexx\Enums\PaymentFeeType;
use RevenexxAPIRevenexx\Enums\PaymentMethodKind;

class Payments extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function paymentsList(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/payments'
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
     * @param float $amount
     * @param string $methodCode
     * @param ?string $cartId
     * @param ?string $contactId
     * @param ?string $country
     * @param ?string $currency
     * @param ?string $idempotencyKey
     * @param ?array $metadata
     * @param ?string $orderRef
     * @param ?string $returnUrl
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function paymentsCreate(float $amount, string $methodCode, ?string $cartId = null, ?string $contactId = null, ?string $country = null, ?string $currency = null, ?string $idempotencyKey = null, ?array $metadata = null, ?string $orderRef = null, ?string $returnUrl = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/payments'
        );

        $apiParams = [];
        $apiParams['amount'] = $amount;
        $apiParams['method_code'] = $methodCode;

        if (!is_null($cartId)) {
            $apiParams['cart_id'] = $cartId;
        }

        if (!is_null($contactId)) {
            $apiParams['contact_id'] = $contactId;
        }

        if (!is_null($country)) {
            $apiParams['country'] = $country;
        }

        if (!is_null($currency)) {
            $apiParams['currency'] = $currency;
        }

        if (!is_null($idempotencyKey)) {
            $apiParams['idempotency_key'] = $idempotencyKey;
        }

        if (!is_null($metadata)) {
            $apiParams['metadata'] = $metadata;
        }

        if (!is_null($orderRef)) {
            $apiParams['order_ref'] = $orderRef;
        }

        if (!is_null($returnUrl)) {
            $apiParams['return_url'] = $returnUrl;
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
    public function paymentsMethodsList(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/payments/methods'
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
     * @param string $code
     * @param string $name
     * @param ?array $countries
     * @param ?string $description
     * @param ?bool $enabled
     * @param ?float $feeAmount
     * @param ?string $feeCurrency
     * @param ?PaymentFeeType $feeType
     * @param ?PaymentMethodKind $kind
     * @param ?array $labels
     * @param ?float $maxOrderValue
     * @param ?array $metadata
     * @param ?float $minOrderValue
     * @param ?int $position
     * @param ?string $provider
     * @param ?string $providerMethod
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function paymentsMethodsCreate(string $code, string $name, ?array $countries = null, ?string $description = null, ?bool $enabled = null, ?float $feeAmount = null, ?string $feeCurrency = null, ?PaymentFeeType $feeType = null, ?PaymentMethodKind $kind = null, ?array $labels = null, ?float $maxOrderValue = null, ?array $metadata = null, ?float $minOrderValue = null, ?int $position = null, ?string $provider = null, ?string $providerMethod = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/payments/methods'
        );

        $apiParams = [];
        $apiParams['code'] = $code;
        $apiParams['name'] = $name;

        if (!is_null($countries)) {
            $apiParams['countries'] = $countries;
        }

        if (!is_null($description)) {
            $apiParams['description'] = $description;
        }

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }

        if (!is_null($feeAmount)) {
            $apiParams['fee_amount'] = $feeAmount;
        }

        if (!is_null($feeCurrency)) {
            $apiParams['fee_currency'] = $feeCurrency;
        }

        if (!is_null($feeType)) {
            $apiParams['fee_type'] = $feeType;
        }

        if (!is_null($kind)) {
            $apiParams['kind'] = $kind;
        }

        if (!is_null($labels)) {
            $apiParams['labels'] = $labels;
        }

        if (!is_null($maxOrderValue)) {
            $apiParams['max_order_value'] = $maxOrderValue;
        }

        if (!is_null($metadata)) {
            $apiParams['metadata'] = $metadata;
        }

        if (!is_null($minOrderValue)) {
            $apiParams['min_order_value'] = $minOrderValue;
        }

        if (!is_null($position)) {
            $apiParams['position'] = $position;
        }

        if (!is_null($provider)) {
            $apiParams['provider'] = $provider;
        }

        if (!is_null($providerMethod)) {
            $apiParams['provider_method'] = $providerMethod;
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
    public function paymentsMethodsDefaults(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/payments/methods/defaults'
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
     * @param ?float $amount
     * @param ?string $country
     * @param ?string $currency
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function paymentsMethodsEligible(?float $amount = null, ?string $country = null, ?string $currency = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/payments/methods/eligible'
        );

        $apiParams = [];

        if (!is_null($amount)) {
            $apiParams['amount'] = $amount;
        }

        if (!is_null($country)) {
            $apiParams['country'] = $country;
        }

        if (!is_null($currency)) {
            $apiParams['currency'] = $currency;
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
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function paymentsMethodsDelete(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/payments/methods/{id}'
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
    public function paymentsMethodsGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/payments/methods/{id}'
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
     * @param ?string $code
     * @param ?array $countries
     * @param ?string $description
     * @param ?bool $enabled
     * @param ?float $feeAmount
     * @param ?string $feeCurrency
     * @param ?PaymentFeeType $feeType
     * @param ?PaymentMethodKind $kind
     * @param ?array $labels
     * @param ?float $maxOrderValue
     * @param ?array $metadata
     * @param ?float $minOrderValue
     * @param ?string $name
     * @param ?int $position
     * @param ?string $provider
     * @param ?string $providerMethod
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function paymentsMethodsUpdate(string $id, ?string $code = null, ?array $countries = null, ?string $description = null, ?bool $enabled = null, ?float $feeAmount = null, ?string $feeCurrency = null, ?PaymentFeeType $feeType = null, ?PaymentMethodKind $kind = null, ?array $labels = null, ?float $maxOrderValue = null, ?array $metadata = null, ?float $minOrderValue = null, ?string $name = null, ?int $position = null, ?string $provider = null, ?string $providerMethod = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/payments/methods/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($code)) {
            $apiParams['code'] = $code;
        }

        if (!is_null($countries)) {
            $apiParams['countries'] = $countries;
        }

        if (!is_null($description)) {
            $apiParams['description'] = $description;
        }

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }

        if (!is_null($feeAmount)) {
            $apiParams['fee_amount'] = $feeAmount;
        }

        if (!is_null($feeCurrency)) {
            $apiParams['fee_currency'] = $feeCurrency;
        }

        if (!is_null($feeType)) {
            $apiParams['fee_type'] = $feeType;
        }

        if (!is_null($kind)) {
            $apiParams['kind'] = $kind;
        }

        if (!is_null($labels)) {
            $apiParams['labels'] = $labels;
        }

        if (!is_null($maxOrderValue)) {
            $apiParams['max_order_value'] = $maxOrderValue;
        }

        if (!is_null($metadata)) {
            $apiParams['metadata'] = $metadata;
        }

        if (!is_null($minOrderValue)) {
            $apiParams['min_order_value'] = $minOrderValue;
        }

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

        if (!is_null($position)) {
            $apiParams['position'] = $position;
        }

        if (!is_null($provider)) {
            $apiParams['provider'] = $provider;
        }

        if (!is_null($providerMethod)) {
            $apiParams['provider_method'] = $providerMethod;
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
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function paymentsProvidersList(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/payments/providers'
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
     * @param string $provider
     * @param ?array $credentials
     * @param ?bool $enabled
     * @param ?string $name
     * @param ?array $options
     * @param ?bool $testMode
     * @param ?string $webhookSecret
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function paymentsProvidersCreate(string $provider, ?array $credentials = null, ?bool $enabled = null, ?string $name = null, ?array $options = null, ?bool $testMode = null, ?string $webhookSecret = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/payments/providers'
        );

        $apiParams = [];
        $apiParams['provider'] = $provider;

        if (!is_null($credentials)) {
            $apiParams['credentials'] = $credentials;
        }

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

        if (!is_null($options)) {
            $apiParams['options'] = $options;
        }

        if (!is_null($testMode)) {
            $apiParams['test_mode'] = $testMode;
        }

        if (!is_null($webhookSecret)) {
            $apiParams['webhook_secret'] = $webhookSecret;
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
    public function paymentsProvidersCatalog(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/payments/providers/catalog'
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
     * @param string $id
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function paymentsProvidersDelete(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/payments/providers/{id}'
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
    public function paymentsProvidersGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/payments/providers/{id}'
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
     * @param ?array $credentials
     * @param ?bool $enabled
     * @param ?string $name
     * @param ?array $options
     * @param ?string $provider
     * @param ?bool $testMode
     * @param ?string $webhookSecret
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function paymentsProvidersUpdate(string $id, ?array $credentials = null, ?bool $enabled = null, ?string $name = null, ?array $options = null, ?string $provider = null, ?bool $testMode = null, ?string $webhookSecret = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/payments/providers/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($credentials)) {
            $apiParams['credentials'] = $credentials;
        }

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

        if (!is_null($options)) {
            $apiParams['options'] = $options;
        }

        if (!is_null($provider)) {
            $apiParams['provider'] = $provider;
        }

        if (!is_null($testMode)) {
            $apiParams['test_mode'] = $testMode;
        }

        if (!is_null($webhookSecret)) {
            $apiParams['webhook_secret'] = $webhookSecret;
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
     * Consumes the dispatch envelope from webhooks.revenexx.com: normalizes the
     * provider callback (stripe payment intents + a generic shape), resolves the
     * payment by psp_payment_id or order_ref and moves the ledger. Facts only
     * move forward — provider retries and redeliveries are idempotent no-ops;
     * unverified envelopes are refused.
     *
     * @param string $provider
     * @param array $data
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function paymentsWebhooksIngest(string $provider, array $data): array
    {
        $apiPath = str_replace(
            ['{provider}'],
            [$provider],
            '/v1/payments/webhooks/{provider}'
        );

        $apiParams = [];
        $apiParams['provider'] = $provider;
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
     * @param string $id
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function paymentsGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/payments/{id}'
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
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function paymentsCancel(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/payments/{id}/cancel'
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
    public function paymentsCapture(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/payments/{id}/capture'
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
    public function paymentsConfirm(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/payments/{id}/confirm'
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
    public function paymentsRefund(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/payments/{id}/refund'
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