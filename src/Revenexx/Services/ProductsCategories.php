<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;
use Revenexx\Enums\RuleMatch;
use Revenexx\Enums\CategoriesRuleMatch;
use Revenexx\Enums\CategoryRuleMatch;
use Revenexx\Enums\Source;
use Revenexx\Enums\ProductCategoriesSource;

class ProductsCategories extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * One node of the category tree. `parent_id` is the structure this app
     * navigates — null is a root — while `path` is kept only for importers
     * that carry one and nothing here reads or writes it. A category is
     * hand-picked or RULE-DRIVEN: a non-null `rules` selector makes every
     * matching product a `product_categories` row with source `rule`, alongside
     * the hand-picked ones, and `rules_computed_at` says when that last
     * completed.
     * 
     * Every column of `categories` is an exact-match query parameter, `order`
     * sorts by one column, and `limit`/`offset` page through `page.total`. A
     * query key that is NOT a column is dropped rather than refused, and the
     * `filter` object echoes the ones that were understood — that echo is the
     * only way to tell an unfiltered answer from an empty one. It reads rows
     * exactly as they are stored: no join is resolved, no jsonb value is
     * unpacked.
     * 
     * Answered from the gateway's tenant cache for up to 30 minutes and dropped
     * the moment this entity is written, because the data model changes weekly at
     * most and every product page asks the same question.
     *
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @param ?string $id
     * @param ?string $code
     * @param ?string $parentId
     * @param ?string $xpath
     * @param ?int $position
     * @param ?string $labels
     * @param ?string $values
     * @param ?string $rules
     * @param ?RuleMatch $ruleMatch
     * @param ?string $rulesComputedAt
     * @param ?string $createdAt
     * @param ?string $updatedAt
     * @throws RevenexxException
     * @return array
     */
    public function productsCategoriesList(?int $limit = null, ?int $offset = null, ?string $order = null, ?string $id = null, ?string $code = null, ?string $parentId = null, ?string $xpath = null, ?int $position = null, ?string $labels = null, ?string $values = null, ?string $rules = null, ?RuleMatch $ruleMatch = null, ?string $rulesComputedAt = null, ?string $createdAt = null, ?string $updatedAt = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/products/categories'
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

        if (!is_null($parentId)) {
            $apiParams['parent_id'] = $parentId;
        }

        if (!is_null($xpath)) {
            $apiParams['path'] = $xpath;
        }

        if (!is_null($position)) {
            $apiParams['position'] = $position;
        }

        if (!is_null($labels)) {
            $apiParams['labels'] = $labels;
        }

        if (!is_null($values)) {
            $apiParams['values'] = $values;
        }

        if (!is_null($rules)) {
            $apiParams['rules'] = $rules;
        }

        if (!is_null($ruleMatch)) {
            $apiParams['rule_match'] = $ruleMatch;
        }

        if (!is_null($rulesComputedAt)) {
            $apiParams['rules_computed_at'] = $rulesComputedAt;
        }

        if (!is_null($createdAt)) {
            $apiParams['created_at'] = $createdAt;
        }

        if (!is_null($updatedAt)) {
            $apiParams['updated_at'] = $updatedAt;
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
     * Creates one category and answers 201 with the stored row, including the id
     * and the timestamps the database filled in — a client never sends an id,
     * it reads one back and uses it in the path of every later call.
     * 
     * One node of the category tree. `parent_id` is the structure this app
     * navigates — null is a root — while `path` is kept only for importers
     * that carry one and nothing here reads or writes it. A category is
     * hand-picked or RULE-DRIVEN: a non-null `rules` selector makes every
     * matching product a `product_categories` row with source `rule`, alongside
     * the hand-picked ones, and `rules_computed_at` says when that last
     * completed.
     * 
     * `code` is the only column the database refuses the row without; everything
     * else has a default or is nullable. A second row with the same `code`
     * answers 409.
     *
     * @param string $code
     * @param ?array $labels
     * @param ?string $parentId
     * @param ?string $xpath
     * @param ?int $position
     * @param ?CategoriesRuleMatch $ruleMatch
     * @param ?array $rules
     * @param ?string $rulesComputedAt
     * @param ?array $values
     * @throws RevenexxException
     * @return array
     */
    public function productsCategoriesCreate(string $code, ?array $labels = null, ?string $parentId = null, ?string $xpath = null, ?int $position = null, ?CategoriesRuleMatch $ruleMatch = null, ?array $rules = null, ?string $rulesComputedAt = null, ?array $values = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/products/categories'
        );

        $apiParams = [];
        $apiParams['code'] = $code;
        $apiParams['labels'] = $labels;
        $apiParams['parent_id'] = $parentId;
        $apiParams['path'] = $xpath;

        if (!is_null($position)) {
            $apiParams['position'] = $position;
        }
        $apiParams['rule_match'] = $ruleMatch;
        $apiParams['rules'] = $rules;
        $apiParams['rules_computed_at'] = $rulesComputedAt;
        $apiParams['values'] = $values;

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
     * What the nightly `recompute-category-rules` schedule calls, and the call to
     * reach for after a bulk import has changed what the rules select. Same sync
     * as the single-category recompute, applied to every category with non-null
     * rules. The whole run shares ONE budget: a category the budget no longer
     * reaches is reported as `skipped` and picked up by the next run, and a
     * failing category is reported in its result entry instead of aborting the
     * run.
     *
     * @param array $data
     * @throws RevenexxException
     * @return array
     */
    public function productsCategoriesRulesRecomputeAll(array $data): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/products/categories/rules/recompute-all'
        );

        $apiParams = [];
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
     * Dry-runs a rule: how many products it selects, plus a sample of up to ten,
     * and it WRITES NOTHING. Evaluates the rule in the request body against the
     * live catalog WITHOUT touching product_categories — this powers the
     * cockpit's "matches N products" preview while an operator edits a rule.
     * Soft-deleted products are excluded. Counting is delegated to the database,
     * never enumerated: a rule that compiles to a single query is answered by one
     * exact-count request whatever its match set. A rule that needs several
     * queries (rule_match "any", or a repeated column such as a range) is
     * combined in the app and stops at `cap` ids — check `capped` before
     * showing `count` as a total.
     *
     * @param string $categoryId
     * @param array $conditions
     * @param ?CategoryRuleMatch $ruleMatch
     * @throws RevenexxException
     * @return array
     */
    public function productsCategoriesRulesPreview(string $categoryId, array $conditions, ?CategoryRuleMatch $ruleMatch = null): array
    {
        $apiPath = str_replace(
            ['{category_id}'],
            [$categoryId],
            '/v1/products/categories/{category_id}/rules/preview'
        );

        $apiParams = [];
        $apiParams['category_id'] = $categoryId;
        $apiParams['conditions'] = $conditions;
        $apiParams['rule_match'] = $ruleMatch;

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
     * Syncs one category's rule-derived memberships to what its stored rule
     * selects today. Evaluates categories.rules (NOT the request body), then
     * inserts the newly matching products as source='rule' rows and deletes the
     * rule rows that no longer match. Manual (source='manual') memberships are
     * never inserted, deleted or shadowed. Stamps categories.rules_computed_at.
     * 
     * A large category does NOT finish in one call: the run stops when its
     * wall-clock budget is spent and answers `done: false` with the `cursor` to
     * send back, so drive it in a loop until `done` is true.
     *
     * @param string $categoryId
     * @param ?string $cursor
     * @throws RevenexxException
     * @return array
     */
    public function productsCategoriesRulesRecompute(string $categoryId, ?string $cursor = null): array
    {
        $apiPath = str_replace(
            ['{category_id}'],
            [$categoryId],
            '/v1/products/categories/{category_id}/rules/recompute'
        );

        $apiParams = [];
        $apiParams['category_id'] = $categoryId;
        $apiParams['cursor'] = $cursor;

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
     * Deletes one category by id. It is a hard delete — the row is gone, and
     * the answer is a confirmation rather than a result to branch on.
     * 
     * It takes what hangs off it: product category memberships (`category_id`)
     * are deleted with it. `categories.parent_id` is set to null instead, so the
     * rows that pointed at it survive the delete rather than going with it.
     * 
     * An id no category of this tenant carries answers 404; there is no 409,
     * because every foreign key pointing at this entity resolves itself on delete
     * rather than blocking one.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function productsCategoriesDelete(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/products/categories/{id}'
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
     * Reads one category by its id — the whole row, every column, as it is
     * stored.
     * 
     * One node of the category tree. `parent_id` is the structure this app
     * navigates — null is a root — while `path` is kept only for importers
     * that carry one and nothing here reads or writes it. A category is
     * hand-picked or RULE-DRIVEN: a non-null `rules` selector makes every
     * matching product a `product_categories` row with source `rule`, alongside
     * the hand-picked ones, and `rules_computed_at` says when that last
     * completed.
     * 
     * An id no category of this tenant carries answers 404, and so does one
     * belonging to another tenant: row-level security makes that row invisible
     * rather than forbidden. A malformed id answers 400 before the route is
     * reached.
     * 
     * Answered from the gateway's tenant cache for up to 30 minutes and dropped
     * the moment this entity is written, because the data model changes weekly at
     * most and every product page asks the same question.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function productsCategoriesGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/products/categories/{id}'
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
     * Updates one category by id. A partial patch: the body names only the
     * columns to change and every column it leaves out keeps its current value,
     * so there is no read-modify-write and no way to blank a field by forgetting
     * it.
     * 
     * One node of the category tree. `parent_id` is the structure this app
     * navigates — null is a root — while `path` is kept only for importers
     * that carry one and nothing here reads or writes it. A category is
     * hand-picked or RULE-DRIVEN: a non-null `rules` selector makes every
     * matching product a `product_categories` row with source `rule`, alongside
     * the hand-picked ones, and `rules_computed_at` says when that last
     * completed.
     * 
     * A body that names nothing writable is refused with 400 rather than answered
     * as a no-op, an id nobody carries answers 404, and a value that collides on
     * `code` answers 409.
     *
     * @param string $id
     * @param ?string $code
     * @param ?array $labels
     * @param ?string $parentId
     * @param ?string $xpath
     * @param ?int $position
     * @param ?CategoriesRuleMatch $ruleMatch
     * @param ?array $rules
     * @param ?string $rulesComputedAt
     * @param ?array $values
     * @throws RevenexxException
     * @return array
     */
    public function productsCategoriesUpdate(string $id, ?string $code = null, ?array $labels = null, ?string $parentId = null, ?string $xpath = null, ?int $position = null, ?CategoriesRuleMatch $ruleMatch = null, ?array $rules = null, ?string $rulesComputedAt = null, ?array $values = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/products/categories/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($code)) {
            $apiParams['code'] = $code;
        }
        $apiParams['labels'] = $labels;
        $apiParams['parent_id'] = $parentId;
        $apiParams['path'] = $xpath;

        if (!is_null($position)) {
            $apiParams['position'] = $position;
        }
        $apiParams['rule_match'] = $ruleMatch;
        $apiParams['rules'] = $rules;
        $apiParams['rules_computed_at'] = $rulesComputedAt;
        $apiParams['values'] = $values;

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
     * One membership: this product is filed in this category. `source` says how
     * it got there — `manual` is hand-picked, `rule` was materialized by a
     * category rule — and the two never touch each other: a recompute only ever
     * inserts and deletes `rule` rows, so a hand-picked membership survives every
     * pass. `POST /products/{id}/categories` is the friendlier way to create one,
     * because it takes the product from the path and answers with the category
     * code and the SKU.
     * 
     * Every column of `product_categories` is an exact-match query parameter,
     * `order` sorts by one column, and `limit`/`offset` page through
     * `page.total`. A query key that is NOT a column is dropped rather than
     * refused, and the `filter` object echoes the ones that were understood —
     * that echo is the only way to tell an unfiltered answer from an empty one.
     * It reads rows exactly as they are stored: no join is resolved, no jsonb
     * value is unpacked.
     * 
     * Answered from the gateway's tenant cache for up to 30 minutes and dropped
     * the moment this entity is written, because the data model changes weekly at
     * most and every product page asks the same question.
     *
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @param ?string $id
     * @param ?string $productId
     * @param ?string $categoryId
     * @param ?int $position
     * @param ?Source $source
     * @param ?string $createdAt
     * @throws RevenexxException
     * @return array
     */
    public function productsProductCategoriesList(?int $limit = null, ?int $offset = null, ?string $order = null, ?string $id = null, ?string $productId = null, ?string $categoryId = null, ?int $position = null, ?Source $source = null, ?string $createdAt = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/products/product_categories'
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

        if (!is_null($productId)) {
            $apiParams['product_id'] = $productId;
        }

        if (!is_null($categoryId)) {
            $apiParams['category_id'] = $categoryId;
        }

        if (!is_null($position)) {
            $apiParams['position'] = $position;
        }

        if (!is_null($source)) {
            $apiParams['source'] = $source;
        }

        if (!is_null($createdAt)) {
            $apiParams['created_at'] = $createdAt;
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
     * Creates one product category membership and answers 201 with the stored
     * row, including the id and the timestamps the database filled in — a
     * client never sends an id, it reads one back and uses it in the path of
     * every later call.
     * 
     * One membership: this product is filed in this category. `source` says how
     * it got there — `manual` is hand-picked, `rule` was materialized by a
     * category rule — and the two never touch each other: a recompute only ever
     * inserts and deletes `rule` rows, so a hand-picked membership survives every
     * pass. `POST /products/{id}/categories` is the friendlier way to create one,
     * because it takes the product from the path and answers with the category
     * code and the SKU.
     * 
     * `product_id` and `category_id` are the only columns the database refuses
     * the row without; everything else has a default or is nullable. A second row
     * with the same `product_id` and `category_id` answers 409.
     *
     * @param string $categoryId
     * @param string $productId
     * @param ?int $position
     * @param ?ProductCategoriesSource $source
     * @throws RevenexxException
     * @return array
     */
    public function productsProductCategoriesCreate(string $categoryId, string $productId, ?int $position = null, ?ProductCategoriesSource $source = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/products/product_categories'
        );

        $apiParams = [];
        $apiParams['category_id'] = $categoryId;
        $apiParams['product_id'] = $productId;

        if (!is_null($position)) {
            $apiParams['position'] = $position;
        }

        if (!is_null($source)) {
            $apiParams['source'] = $source;
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
     * Deletes one product category membership by id. It is a hard delete — the
     * row is gone, and the answer is a confirmation rather than a result to
     * branch on.
     * 
     * Nothing in this schema references it, so nothing else changes.
     * 
     * An id no product category membership of this tenant carries answers 404;
     * there is no 409, because every foreign key pointing at this entity resolves
     * itself on delete rather than blocking one.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function productsProductCategoriesDelete(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/products/product_categories/{id}'
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
     * Reads one product category membership by its id — the whole row, every
     * column, as it is stored.
     * 
     * One membership: this product is filed in this category. `source` says how
     * it got there — `manual` is hand-picked, `rule` was materialized by a
     * category rule — and the two never touch each other: a recompute only ever
     * inserts and deletes `rule` rows, so a hand-picked membership survives every
     * pass. `POST /products/{id}/categories` is the friendlier way to create one,
     * because it takes the product from the path and answers with the category
     * code and the SKU.
     * 
     * An id no product category membership of this tenant carries answers 404,
     * and so does one belonging to another tenant: row-level security makes that
     * row invisible rather than forbidden. A malformed id answers 400 before the
     * route is reached.
     * 
     * Answered from the gateway's tenant cache for up to 30 minutes and dropped
     * the moment this entity is written, because the data model changes weekly at
     * most and every product page asks the same question.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function productsProductCategoriesGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/products/product_categories/{id}'
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
     * Updates one product category membership by id. A partial patch: the body
     * names only the columns to change and every column it leaves out keeps its
     * current value, so there is no read-modify-write and no way to blank a field
     * by forgetting it.
     * 
     * One membership: this product is filed in this category. `source` says how
     * it got there — `manual` is hand-picked, `rule` was materialized by a
     * category rule — and the two never touch each other: a recompute only ever
     * inserts and deletes `rule` rows, so a hand-picked membership survives every
     * pass. `POST /products/{id}/categories` is the friendlier way to create one,
     * because it takes the product from the path and answers with the category
     * code and the SKU.
     * 
     * A body that names nothing writable is refused with 400 rather than answered
     * as a no-op, an id nobody carries answers 404, and a value that collides on
     * `product_id` and `category_id` answers 409.
     *
     * @param string $id
     * @param ?string $categoryId
     * @param ?int $position
     * @param ?string $productId
     * @param ?ProductCategoriesSource $source
     * @throws RevenexxException
     * @return array
     */
    public function productsProductCategoriesUpdate(string $id, ?string $categoryId = null, ?int $position = null, ?string $productId = null, ?ProductCategoriesSource $source = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/products/product_categories/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($categoryId)) {
            $apiParams['category_id'] = $categoryId;
        }

        if (!is_null($position)) {
            $apiParams['position'] = $position;
        }

        if (!is_null($productId)) {
            $apiParams['product_id'] = $productId;
        }

        if (!is_null($source)) {
            $apiParams['source'] = $source;
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
     * Files one product into one category by hand, and the membership is always
     * `source: 'manual'` — a rule recompute never deletes or shadows it.
     * product_categories holds 28 758 rows and had no write surface that named
     * the product it was filing. This takes the product from the route and the
     * category from the body, which is what a bulk 'add the selected products to
     * …' needs. The membership is always source='manual', so a rule recompute
     * never deletes or shadows it.
     *
     * @param string $id
     * @param string $categoryId
     * @param ?int $position
     * @throws RevenexxException
     * @return array
     */
    public function productsCategoriesAssign(string $id, string $categoryId, ?int $position = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/products/{id}/categories'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams['category_id'] = $categoryId;

        if (!is_null($position)) {
            $apiParams['position'] = $position;
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