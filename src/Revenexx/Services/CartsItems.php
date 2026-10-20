<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;
use Revenexx\Enums\CartItemType;

class CartsItems extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * The array is still called 'items'; the response also carries 'page' and
     * 'filter' like every other list, and an unknown cart_id answers 404 instead
     * of an empty page. A cart with more lines than the page size is not silently
     * truncated — 'page.hasMore' says so. Lines come back in position order
     * unless 'order' says otherwise.
     *
     * @param string $cartId
     * @param ?string $id
     * @param ?CartItemType $type
     * @param ?string $productId
     * @param ?string $sku
     * @param ?string $name
     * @param ?float $quantity
     * @param ?string $unit
     * @param ?float $unitPrice
     * @param ?float $taxRate
     * @param ?float $lineTotal
     * @param ?int $position
     * @param ?string $createdAt
     * @param ?string $updatedAt
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @param ?string $sessionKey
     * @throws RevenexxException
     * @return array
     */
    public function cartsItemsList(string $cartId, ?string $id = null, ?CartItemType $type = null, ?string $productId = null, ?string $sku = null, ?string $name = null, ?float $quantity = null, ?string $unit = null, ?float $unitPrice = null, ?float $taxRate = null, ?float $lineTotal = null, ?int $position = null, ?string $createdAt = null, ?string $updatedAt = null, ?int $limit = null, ?int $offset = null, ?string $order = null, ?string $sessionKey = null): array
    {
        $apiPath = str_replace(
            ['{cart_id}'],
            [$cartId],
            '/v1/carts/{cart_id}/items'
        );

        $apiParams = [];
        $apiParams['cart_id'] = $cartId;

        if (!is_null($id)) {
            $apiParams['id'] = $id;
        }

        if (!is_null($type)) {
            $apiParams['type'] = $type;
        }

        if (!is_null($productId)) {
            $apiParams['product_id'] = $productId;
        }

        if (!is_null($sku)) {
            $apiParams['sku'] = $sku;
        }

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

        if (!is_null($quantity)) {
            $apiParams['quantity'] = $quantity;
        }

        if (!is_null($unit)) {
            $apiParams['unit'] = $unit;
        }

        if (!is_null($unitPrice)) {
            $apiParams['unit_price'] = $unitPrice;
        }

        if (!is_null($taxRate)) {
            $apiParams['tax_rate'] = $taxRate;
        }

        if (!is_null($lineTotal)) {
            $apiParams['line_total'] = $lineTotal;
        }

        if (!is_null($position)) {
            $apiParams['position'] = $position;
        }

        if (!is_null($createdAt)) {
            $apiParams['created_at'] = $createdAt;
        }

        if (!is_null($updatedAt)) {
            $apiParams['updated_at'] = $updatedAt;
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

        if (!is_null($sessionKey)) {
            $apiParams['session_key'] = $sessionKey;
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
     * Adds one line to an ACTIVE cart — the add-to-basket call. `name` or `sku`
     * is required (a line sent with only a SKU takes the SKU as its name, so a
     * line always has something to show) and `quantity` must be greater than
     * zero; everything else defaults. The line is priced in the CART's currency
     * and stores none of its own, so a `currency` in the payload may only repeat
     * the cart's — a different one is a 409. The one thing that surprises a
     * caller: a plain product line with the same product/sku AND the same
     * `unit_price` as a line already in the cart does not open a second row —
     * its quantity is added to that line, and the 201 names a row that already
     * existed. Price is part of that identity on purpose, so a changed price
     * never averages into an old line. A configured or custom line always stands
     * alone. The cart's `item_count` (the sum of QUANTITIES) and `subtotal` are
     * recomputed before the answer, and `max_items_per_cart` /
     * `max_quantity_per_line` are checked on the RESULT of the merge (422), so
     * ten calls of one piece cannot walk past a limit one call of ten would hit.
     *
     * @param string $cartId
     * @param ?string $sessionKey
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
     * @throws RevenexxException
     * @return array
     */
    public function cartsItemsCreate(string $cartId, ?string $sessionKey = null, ?array $configuration = null, ?string $currency = null, ?array $metadata = null, ?string $name = null, ?int $position = null, ?string $productId = null, ?float $quantity = null, ?string $sku = null, ?array $snapshot = null, ?float $taxRate = null, ?CartItemType $type = null, ?string $unit = null, ?float $unitPrice = null): array
    {
        $apiPath = str_replace(
            ['{cart_id}'],
            [$cartId],
            '/v1/carts/{cart_id}/items'
        );

        $apiParams = [];
        $apiParams['cart_id'] = $cartId;

        if (!is_null($sessionKey)) {
            $apiParams['session_key'] = $sessionKey;
        }
        $apiParams['configuration'] = $configuration;
        $apiParams['currency'] = $currency;
        $apiParams['metadata'] = $metadata;
        $apiParams['name'] = $name;
        $apiParams['position'] = $position;
        $apiParams['product_id'] = $productId;
        $apiParams['quantity'] = $quantity;
        $apiParams['sku'] = $sku;

        if (!is_null($snapshot)) {
            $apiParams['snapshot'] = $snapshot;
        }
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
     * Set semantics: the payload IS the cart. Every existing line is dropped and
     * the payload is written in its place, so a line left out of the array is a
     * line removed — this is the storefront sync, not a bulk add, and
     * carts.items.create is what adds. Lines are numbered by their place in the
     * array unless they carry their own `position`, and nothing merges: two
     * identical lines in one payload stay two rows. The limits are checked
     * against the payload BEFORE a single existing line is destroyed, so a sync
     * refused with 422 leaves the cart exactly as it was. The cart must be
     * active, and its totals are recomputed before the answer.
     *
     * @param string $cartId
     * @param array $items
     * @param ?string $sessionKey
     * @throws RevenexxException
     * @return array
     */
    public function cartsItemsReplace(string $cartId, array $items, ?string $sessionKey = null): array
    {
        $apiPath = str_replace(
            ['{cart_id}'],
            [$cartId],
            '/v1/carts/{cart_id}/items'
        );

        $apiParams = [];
        $apiParams['cart_id'] = $cartId;
        $apiParams['items'] = $items;

        if (!is_null($sessionKey)) {
            $apiParams['session_key'] = $sessionKey;
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
     * The operator's add-to-basket. The caller names an article and a quantity;
     * the line is written with the article's name and SKU from the products
     * catalogue and the price the prices app resolves for THIS cart's buyer —
     * contact, organization, currency and market (the request's market, else the
     * cart's own) — so a cart filled in a customer's name carries the prices
     * that customer sees in the shop. This app still sets no price: it asks,
     * exactly as a storefront asks before it adds. An agreed price may be stated
     * as `unit_price`; the snapshot then keeps the resolved price beside it. From
     * there the line goes the way every add goes — an identical product line at
     * the same price folds into the existing one, the line limits apply and the
     * totals are recomputed. It fails closed: an article prices cannot price for
     * this buyer answers 422 `no_price` unless an agreed price was sent, and a
     * tax rate that cannot be resolved is a refusal, never a line at 0 %. A
     * request acting for a contact is refused with 403.
     *
     * @param string $cartId
     * @param ?string $sessionKey
     * @param ?string $productId
     * @param ?float $quantity
     * @param ?string $sku
     * @param ?float $taxRate
     * @param ?float $unitPrice
     * @throws RevenexxException
     * @return array
     */
    public function cartsItemsPriced(string $cartId, ?string $sessionKey = null, ?string $productId = null, ?float $quantity = null, ?string $sku = null, ?float $taxRate = null, ?float $unitPrice = null): array
    {
        $apiPath = str_replace(
            ['{cart_id}'],
            [$cartId],
            '/v1/carts/{cart_id}/items/priced'
        );

        $apiParams = [];
        $apiParams['cart_id'] = $cartId;

        if (!is_null($sessionKey)) {
            $apiParams['session_key'] = $sessionKey;
        }
        $apiParams['product_id'] = $productId;
        $apiParams['quantity'] = $quantity;
        $apiParams['sku'] = $sku;
        $apiParams['tax_rate'] = $taxRate;
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
     * Removes one line from an ACTIVE cart and recomputes the owning cart's
     * `item_count` and `subtotal` before answering. This is how a quantity
     * reaches zero: `quantity` is constrained to be greater than zero, so "none
     * of it" is a DELETE and never an update to 0. The cart in the path is part
     * of the address — a line belonging to a different cart answers 404 and is
     * left where it is. Deleting the last line leaves an empty cart, not a
     * deleted one; the cart itself goes through carts.delete, which takes every
     * line with it in one call.
     *
     * @param string $cartId
     * @param string $id
     * @param ?string $sessionKey
     * @throws RevenexxException
     * @return array
     */
    public function cartsItemsDelete(string $cartId, string $id, ?string $sessionKey = null): array
    {
        $apiPath = str_replace(
            ['{cart_id}', '{id}'],
            [$cartId, $id],
            '/v1/carts/{cart_id}/items/{id}'
        );

        $apiParams = [];
        $apiParams['cart_id'] = $cartId;
        $apiParams['id'] = $id;

        if (!is_null($sessionKey)) {
            $apiParams['session_key'] = $sessionKey;
        }

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * One line, addressed through the cart that owns it. Both ids are checked,
     * not just the line's: a line that exists but belongs to a different cart
     * answers 404 rather than the row, so an id copied out of another cart never
     * resolves here and a caller can trust that what came back is a line of the
     * cart they asked about. The line carries both of its prices — the working
     * `unit_price`, which a resync or a repricing job may have moved, and the
     * `snapshot` the buyer was shown when the line was added — and its own
     * `line_total`, which is always quantity × unit_price and never what a
     * payload claimed. To read a whole cart's lines, list them: this route is for
     * one known line.
     *
     * @param string $cartId
     * @param string $id
     * @param ?string $sessionKey
     * @throws RevenexxException
     * @return array
     */
    public function cartsItemsGet(string $cartId, string $id, ?string $sessionKey = null): array
    {
        $apiPath = str_replace(
            ['{cart_id}', '{id}'],
            [$cartId, $id],
            '/v1/carts/{cart_id}/items/{id}'
        );

        $apiParams = [];
        $apiParams['cart_id'] = $cartId;
        $apiParams['id'] = $id;

        if (!is_null($sessionKey)) {
            $apiParams['session_key'] = $sessionKey;
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
     * Changes one line of an ACTIVE cart — the quantity stepper on the cart
     * page, and the route a repricing job writes through. The fields sent are
     * merged onto the stored line and the whole line is validated again, so
     * `quantity` must still be greater than zero and `type` still one of the
     * three. `line_total` is not settable: it is recomputed as quantity ×
     * unit_price, and the cart's `item_count` and `subtotal` follow before the
     * answer. What it will NOT do is merge — only carts.items.create folds one
     * line into another, so giving this line the same product and price as a
     * sibling leaves two rows standing, and the next add joins whichever it
     * matches. `max_quantity_per_line` is enforced on the result (422). A
     * quantity of zero is not the way to remove a line; the delete is.
     *
     * @param string $cartId
     * @param string $id
     * @param ?string $sessionKey
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
     * @throws RevenexxException
     * @return array
     */
    public function cartsItemsUpdate(string $cartId, string $id, ?string $sessionKey = null, ?array $configuration = null, ?string $currency = null, ?array $metadata = null, ?string $name = null, ?int $position = null, ?string $productId = null, ?float $quantity = null, ?string $sku = null, ?array $snapshot = null, ?float $taxRate = null, ?CartItemType $type = null, ?string $unit = null, ?float $unitPrice = null): array
    {
        $apiPath = str_replace(
            ['{cart_id}', '{id}'],
            [$cartId, $id],
            '/v1/carts/{cart_id}/items/{id}'
        );

        $apiParams = [];
        $apiParams['cart_id'] = $cartId;
        $apiParams['id'] = $id;

        if (!is_null($sessionKey)) {
            $apiParams['session_key'] = $sessionKey;
        }
        $apiParams['configuration'] = $configuration;
        $apiParams['currency'] = $currency;
        $apiParams['metadata'] = $metadata;
        $apiParams['name'] = $name;
        $apiParams['position'] = $position;
        $apiParams['product_id'] = $productId;
        $apiParams['quantity'] = $quantity;
        $apiParams['sku'] = $sku;

        if (!is_null($snapshot)) {
            $apiParams['snapshot'] = $snapshot;
        }
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
}