# ReviewsProducts Service


```http request
GET https://api.revenexx.com/v1/reviews/products/{product_id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| product_id | string | **Required** The product. |  |
| market | string | Only reviews written in this market, with its figures. Without it: all markets. |  |
| sort | string | Default newest. |  |
| limit | integer | Page size (default 10). |  |
| offset | integer | Row offset. |  |

