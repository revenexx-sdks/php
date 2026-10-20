# ReviewsAggregates Service


```http request
GET https://api.revenexx.com/v1/reviews/aggregates
```

** With `product_ids` (comma-separated, at most 200): one entry per product, zero for a product nobody reviewed. Without: the stored figures, paged, most reviewed first. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| product_ids | string | Comma-separated product ids. |  |
| market | string | A market code; default `*`, all markets together. |  |
| product_id | string | Without product_ids: one product. |  |
| limit | integer | Page size (default 50, max 200). |  |
| offset | integer | Row offset for pagination (default 0). |  |
| order | string | Sort by one column: 'column' | 'column.asc' | 'column.desc'. |  |


```http request
POST https://api.revenexx.com/v1/reviews/aggregates/rebuild
```

** For the named products, or for every product with reviews or figures (up to 1000 per call). **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| product_ids | array |  |  |


```http request
GET https://api.revenexx.com/v1/reviews/reviews/{id}/stars
```

** The stars of the review's product across all markets, five stars down to one, each with its count and share of the published reviews, worded in the caller language (Accept-Language; German unless English is asked for); average, count and verified purchases are `footer` rows, no published review answers no rows; the row of the review's own stars says so in `sub`. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |

