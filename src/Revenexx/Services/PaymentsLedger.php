<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;
use Revenexx\Enums\PaymentStatus;
use Revenexx\Enums\PaymentMethodKind;
use Revenexx\Enums\PaymentDunningStage;
use Revenexx\Enums\PaymentsVocabulariesGetName;

class PaymentsLedger extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * The ledger, paged and filtered — the Payments screen, the reconciliation
     * query and the way an order or a cart finds out what has been paid against
     * it. Every column of the entity is an exact-match filter, which is what
     * makes it useful: `?cart_id=` and `?contact_id=` are indexed,
     * `?status=authorized&kind=self_managed` is the awaiting-payment queue the
     * dunning scan classifies, and `?order_ref=` is the only way to resolve a
     * payment by its external reference. Rows come back in the database's own
     * order, so a newest-first list needs `?order=created_at.desc`.
     * `error_message` is answered from the failure taxonomy rather than echoed
     * out of the column, so what a driver or a PSP actually wrote is never
     * serialized here.
     *
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @param ?string $cartId
     * @param ?string $contactId
     * @param ?PaymentStatus $status
     * @param ?string $orderRef
     * @param ?string $methodCode
     * @param ?PaymentMethodKind $kind
     * @param ?string $provider
     * @param ?PaymentDunningStage $dunningStage
     * @param ?string $idempotencyKey
     * @throws RevenexxException
     * @return array
     */
    public function paymentsList(?int $limit = null, ?int $offset = null, ?string $order = null, ?string $cartId = null, ?string $contactId = null, ?PaymentStatus $status = null, ?string $orderRef = null, ?string $methodCode = null, ?PaymentMethodKind $kind = null, ?string $provider = null, ?PaymentDunningStage $dunningStage = null, ?string $idempotencyKey = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/payments'
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

        if (!is_null($cartId)) {
            $apiParams['cart_id'] = $cartId;
        }

        if (!is_null($contactId)) {
            $apiParams['contact_id'] = $contactId;
        }

        if (!is_null($status)) {
            $apiParams['status'] = $status;
        }

        if (!is_null($orderRef)) {
            $apiParams['order_ref'] = $orderRef;
        }

        if (!is_null($methodCode)) {
            $apiParams['method_code'] = $methodCode;
        }

        if (!is_null($kind)) {
            $apiParams['kind'] = $kind;
        }

        if (!is_null($provider)) {
            $apiParams['provider'] = $provider;
        }

        if (!is_null($dunningStage)) {
            $apiParams['dunning_stage'] = $dunningStage;
        }

        if (!is_null($idempotencyKey)) {
            $apiParams['idempotency_key'] = $idempotencyKey;
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
     * The checkout's write: it opens the ledger row and takes it as far as the
     * named method allows, in one call. A create cannot omit `method_code` and
     * `amount`; every other column is optional or defaulted by the database.
     * Nothing else about the money is the caller's to choose: `kind`, `provider`
     * and `fee_amount` are read off the method that `method_code` names, so a
     * caller can neither pick an acquirer nor discount its own fee. `amount: 0`
     * is legal (free orders); negative is 400. Eligibility is enforced HERE and
     * not only in the checkout UI — the same country and order-value rules POST
     * /payments/methods/eligible applies answer 422 if the method does not apply
     * to this buyer. What comes back depends on the method: a self-managed one
     * (invoice, prepayment) is `authorized` at once with the dunning clock
     * already started, and a PSP one is `captured` or `authorized`, or
     * `requires_action` with `next_action` — the instruction the storefront
     * must carry out, typically a redirect, set at that status and at no other.
     * Send an `idempotency_key` and a repeat of the same call answers 200 with
     * the payment that key already named, unchanged and not re-authorized. What
     * is never stored: the `instrument`, `token` or `card` is handed to the
     * driver in-process and no token or PAN is written to the row.
     *
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
     * @throws RevenexxException
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
        $apiParams['cart_id'] = $cartId;
        $apiParams['contact_id'] = $contactId;
        $apiParams['country'] = $country;

        if (!is_null($currency)) {
            $apiParams['currency'] = $currency;
        }
        $apiParams['idempotency_key'] = $idempotencyKey;
        $apiParams['metadata'] = $metadata;
        $apiParams['order_ref'] = $orderRef;
        $apiParams['return_url'] = $returnUrl;

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
     * Classifies every unpaid self-managed payment (invoice, prepayment) as on
     * time / reminder due / overdue from payment_reminder_after_days and
     * overdue_after_days, writes the stage and the next due date, and reports PSP
     * payments still waiting on a callback longer than
     * webhook_stale_after_minutes. Pure function of each payment's age, so it is
     * idempotent — it also runs daily as the 'dunning-scan' schedule. It
     * classifies and does not send: a stage change emits payment.updated, and
     * what a reminder looks like is the merchant's workflow.
     *
     * @throws RevenexxException
     * @return array
     */
    public function paymentsDunningScan(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/payments/dunning/scan'
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
     * Rows written before the failure taxonomy still store the
     * provider's/runtime's raw text in error_message. API responses never repeat
     * it (the read path projects), but the column is also read directly through
     * Baseline, so it needs rewriting once per tenant. Dry-run by default —
     * reports what it would touch and changes nothing until apply:true.
     * Idempotent: rows already carrying a taxonomy message are skipped.
     *
     * @param ?bool $apply
     * @param ?int $limit
     * @throws RevenexxException
     * @return array
     */
    public function paymentsErrorsRedact(?bool $apply = null, ?int $limit = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/payments/errors/redact'
        );

        $apiParams = [];
        $apiParams['apply'] = $apply;
        $apiParams['limit'] = $limit;

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
     * This is the hook the tenant's `auto_capture_policy: 'on_ship'` was written
     * for: fulfilment knows the order it shipped and not the payment ids behind
     * it, so the shipment calls this one route with the reference it already
     * holds and the money for that order is collected in a single request.
     * Resolves payments by their order_ref (the same key the PSP webhooks fall
     * back to), captures every authorized one and reports the rest instead of
     * failing — an order whose payment was already captured is a successful
     * no-op, and a provider that refuses one payment lands in `skipped` rather
     * than failing the call. Note that payments.order_ref is nullable with no
     * foreign key: this route is exactly as good as the reference the checkout
     * writes onto the payment.
     *
     * @param string $orderRef
     * @throws RevenexxException
     * @return array
     */
    public function paymentsOrdersCapture(string $orderRef): array
    {
        $apiPath = str_replace(
            ['{order_ref}'],
            [$orderRef],
            '/v1/payments/orders/{order_ref}/capture'
        );

        $apiParams = [];
        $apiParams['order_ref'] = $orderRef;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * The enums this app owns, four of them: statuses, method kinds, fee types
     * and dunning stages. This is the index and carries a name and a title per
     * set and nothing more — the values themselves, with their labels and badge
     * tones, are one call further down at GET /payments/vocabularies/{name}, so a
     * client that only needs to know which sets exist does not pay for all of
     * them. Values come out of the CHECK constraints, so what is served is what
     * the database enforces — a client renders a status this app adds without a
     * release of its own.
     *
     * @throws RevenexxException
     * @return array
     */
    public function paymentsVocabulariesList(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/payments/vocabularies'
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
     * One set in full: every value it permits, the label to show for each and the
     * badge tone to render it in, which is what a client needs to draw a status
     * chip without hard-coding this app's enums. The value set is parsed out of
     * the CHECK constraint in schema.json, so what is served IS what the database
     * enforces. Labels are curated on top and can only add words and colour — a
     * permitted value nobody labelled still appears, titled from its own key,
     * which is why `title` and `description` are a locale map on a labelled value
     * and a plain string on an unlabelled one.
     *
     * @param PaymentsVocabulariesGetName $name
     * @throws RevenexxException
     * @return array
     */
    public function paymentsVocabulariesGet(PaymentsVocabulariesGetName $name): array
    {
        $apiPath = str_replace(
            ['{name}'],
            [$name],
            '/v1/payments/vocabularies/{name}'
        );

        $apiParams = [];
        $apiParams['name'] = $name;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * The sink a PSP callback ends up in, and an inbound ingress endpoint in the
     * sense of ADR-0066: the provider never posts here directly, it posts to
     * webhooks.revenexx.com, which verifies and captures the delivery and
     * dispatches its envelope to this route through the gateway. That indirection
     * is also what makes this the one override point for PSP callback handling
     * — everything a callback does to the ledger happens here and nowhere else,
     * so a deployment that needs a provider's callbacks normalized differently
     * replaces this operation instead of touching the lifecycle routes. Consumes
     * the dispatch envelope from webhooks.revenexx.com: normalizes the provider
     * callback (stripe payment intents + a generic shape), resolves the payment
     * by psp_payment_id or order_ref and moves the ledger. Facts only move
     * forward — provider retries and redeliveries are idempotent no-ops;
     * unverified envelopes are refused.
     *
     * @param string $provider
     * @param ?mixed $id
     * @param ?array $request
     * @param ?mixed $verified
     * @throws RevenexxException
     * @return array
     */
    public function paymentsWebhooksIngest(string $provider, mixed $id = null, ?array $request = null, mixed $verified = null): array
    {
        $apiPath = str_replace(
            ['{provider}'],
            [$provider],
            '/v1/payments/webhooks/{provider}'
        );

        $apiParams = [];
        $apiParams['provider'] = $provider;

        if (!is_null($id)) {
            $apiParams['id'] = $id;
        }

        if (!is_null($request)) {
            $apiParams['request'] = $request;
        }

        if (!is_null($verified)) {
            $apiParams['verified'] = $verified;
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
     * One ledger row in full: the amount and the fee that were computed at
     * creation, the method code and PSP it was made through, where it stands in
     * the lifecycle, the timestamp of each transition it has been through
     * (`authorized_at`, `captured_at`, `failed_at`, `refunded_at`), the dunning
     * columns the daily scan maintains and, while the buyer still has something
     * to do, `next_action`. This is the call to poll after sending a buyer to a
     * PSP redirect. Two things it does not do: `error_message` is answered from
     * the failure taxonomy and never carries the provider's or the runtime's own
     * words, and there is no route that resolves a payment by `order_ref` —
     * that column is nullable and not unique, so it is a filter on the list (`GET
     * /payments?order_ref=…`) which may legitimately answer several rows.
     *
     * @param string $id
     * @throws RevenexxException
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
     * Drops the claim before any money has been taken — the abandoned basket,
     * the buyer who never came back from the redirect, the invoice an operator
     * writes off. It is the only transition that starts from three statuses
     * rather than one, because everything short of captured can still be
     * released. A captured payment is not cancellable at all: that is a refund,
     * and the lattice answers 400 rather than pretending. Unlike capture and
     * refund this transition has no time window — the merchant's
     * `capture_expiry_days` and `refund_window_days` do not apply, so a stale
     * authorization can always be released even once it is too old to collect. On
     * a PSP payment the provider is called and the `reason` in the body is passed
     * to it, so it reaches the PSP's own cancellation-reason field as well as
     * being stored under `metadata.cancel_reason`. Cancelling stops the dunning
     * clock: the stage goes back to `none` and the due date is cleared.
     *
     * @param string $id
     * @param ?string $reason
     * @throws RevenexxException
     * @return array
     */
    public function paymentsCancel(string $id, ?string $reason = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/payments/{id}/cancel'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams['reason'] = $reason;

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
     * Collects money that is currently only reserved. It starts from `authorized`
     * and from nothing else — under `auto_capture_policy: 'immediate'` a
     * payment is captured in the same request that created it and never passes
     * through here, so this is the route for the 'manual' and 'on_ship' policies,
     * and POST /payments/orders/{order_ref}/capture is the same operation
     * addressed by the order reference a warehouse actually holds. There is no
     * request body and no amount: the ledger carries one amount and one status,
     * so a capture is the whole authorization or nothing. On a self-managed
     * payment it takes no PSP anywhere near it — it records that an invoice or
     * a prepayment was paid, and stops the dunning clock. Refused with 422 once
     * the authorization is older than the tenant's `capture_expiry_days` (the
     * message carries both numbers), because an expired authorization is declined
     * by the provider anyway and a 422 here is the cheap version of finding out
     * later.
     *
     * @param string $id
     * @throws RevenexxException
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
     * The other half of a redirect. POST /payments answered `requires_action`
     * with a `next_action` the storefront carried out — a 3-D Secure step, a
     * wallet approval, a bank login — and this is the call that asks the PSP
     * how it went and writes the answer to the ledger. It starts from
     * `requires_action` and from nothing else, so a payment that already came
     * back authorized needs no confirm and the lattice answers 400 rather than
     * repeating one. `next_action` is cleared by this call whatever the outcome.
     * Where the tenant's `auto_capture_policy` is 'immediate' the money is taken
     * straight after the authorization, in the same request, so a successful
     * confirm can come back `captured` rather than `authorized`; a failed
     * auto-capture does not fail the confirm, because a good authorization is
     * worth more than a tidy status.
     *
     * @param string $id
     * @throws RevenexxException
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
     * Gives captured money back. It starts from `captured` and from nothing else
     * — money that was only authorized is cancelled, not refunded, and the
     * lattice answers 400 rather than guessing which was meant. All or nothing:
     * the ledger carries one amount and one status, so there is no partial refund
     * and no second one to express — a refunded payment is refunded in full,
     * and a repeat is a 400 because `refunded` is not a status a refund starts
     * from. The `reason` in the body is handed to the driver in the same call, so
     * it reaches the PSP's own refund-reason field rather than being a note only
     * this database ever sees, and it is stored under `metadata.refund_reason`.
     * On a self-managed payment nothing is sent anywhere: it records that the
     * merchant paid the buyer back by their own means. Refused with 422 once the
     * capture is older than the tenant's `refund_window_days` (the message
     * carries both numbers) — past that the provider stops accepting a refund
     * against the transaction and it has to be made by bank transfer.
     *
     * @param string $id
     * @param ?string $reason
     * @throws RevenexxException
     * @return array
     */
    public function paymentsRefund(string $id, ?string $reason = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/payments/{id}/refund'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams['reason'] = $reason;

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