# PromotionsEvaluation Service


```http request
POST https://api.revenexx.com/v1/promotions/available
```

** A different question from what a cart is owed: a shop that can only answer the second can only tell a buyer about a discount after they have earned it. With a cart, each promotion states how far away it is — &quot;12 euro more&quot; is the sentence that raises an order value. A promotion needing a code is listed as needing one, and no code appears in the answer. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| channel | string | The sales channel. |  |
| contact_id | string | The person buying. |  |
| currency | string | The three-letter currency the cart is stated in. A promotion in another currency is skipped rather than converted. |  |
| item_count | integer | Units in the cart, for a quantity condition. Derived from the lines when absent. |  |
| lines | array | The priced cart lines. At most 500. |  |
| market | string | The market the call is for. Also taken from the x-revenexx-market header. |  |
| organization_id | string | The company they buy for. |  |
| payment_fee | number | The payment fee, so an effect can reduce it. |  |
| precision | integer | Decimals every derived amount is rounded to. Follows the tenant price policy. |  |
| rounding | string | How a fraction of a cent is rounded: half_up, half_even, up or down. |  |
| shipping | number | The freight cost, so an effect can reduce it. |  |
| subtotal | number | The goods value before any promotion. Derived from the lines when absent. |  |
| tax_included | boolean | Whether the prices are gross. A net discount subtracted from a gross line is wrong by exactly the tax rate. |  |


```http request
POST https://api.revenexx.com/v1/promotions/codes/check
```

** A landing page shows an offer before a buyer has added anything, and should not have to invent a cart to find out whether it is still live. The answer never says WHO a code belongs to — the address is reachable by anyone who can guess a code, and one that answered with a customer name would be a data leak with a search box. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| code | string | The code to check. |  |
| contact_id | string | Who is asking, so a code held for them is reported as usable. |  |


```http request
POST https://api.revenexx.com/v1/promotions/evaluate
```

** THE promotion call, and the designated override point. A priced cart goes in; a list of attributed effects comes out, each naming the promotion behind it and the amount it takes off. It writes nothing, so a storefront may call it on every keystroke, and it prices nothing, so a line with no resolved unit price is refused rather than guessed at. Promotions that matched and lost are named with the reason, unless the tenant switched disclosure off. The answer carries the policy it was computed under, so a discount can be re-derived from its own payload. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| channel | string | The sales channel. |  |
| codes | array | Codes the buyer entered. Matched trimmed and case-insensitively unless the tenant made codes case-sensitive. |  |
| contact_id | string | The person buying. |  |
| currency | string | The three-letter currency the cart is stated in. A promotion in another currency is skipped rather than converted. |  |
| item_count | integer | Units in the cart, for a quantity condition. Derived from the lines when absent. |  |
| lines | array | The priced cart lines. At most 500. |  |
| market | string | The market the call is for. Also taken from the x-revenexx-market header. |  |
| organization_id | string | The company they buy for. |  |
| payment_fee | number | The payment fee, so an effect can reduce it. |  |
| precision | integer | Decimals every derived amount is rounded to. Follows the tenant price policy. |  |
| preview_promotion_ids | array | Promotions to evaluate although they are not live — a merchant testing a drafted offer against a real cart. Nothing about them is changed. |  |
| rounding | string | How a fraction of a cent is rounded: half_up, half_even, up or down. |  |
| shipping | number | The freight cost, so an effect can reduce it. |  |
| subtotal | number | The goods value before any promotion. Derived from the lines when absent. |  |
| tax_included | boolean | Whether the prices are gross. A net discount subtracted from a gross line is wrong by exactly the tax rate. |  |


```http request
GET https://api.revenexx.com/v1/promotions/vocabularies
```

** The subjects a condition may ask about, the comparisons it may use, the effect kinds and target scopes, the stacking modes, and the closed lists of refusal, skip and release reasons. A caller building a form reads these rather than hardcoding them. **


```http request
GET https://api.revenexx.com/v1/promotions/vocabularies/{name}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| name | string | **Required** The vocabulary name, as the list answers it. |  |

