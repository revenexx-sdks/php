# MailingsVariants Service


```http request
GET https://api.revenexx.com/v1/mailings/variants
```

** Reserved for the A/B test of a later version. Empty in this one. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| limit | integer | Page size (default 50, max 200). |  |
| offset | integer | Row offset for pagination (default 0). |  |
| order | string | Sort by one column: 'column' | 'column.asc' | 'column.desc'. |  |
| id | string | Keep only rows whose `id` equals this. |  |
| mailing_id | string | Keep only rows whose `mailing_id` equals this. |  |
| is_winner | string | Keep only rows whose `is_winner` equals this. |  |


```http request
GET https://api.revenexx.com/v1/mailings/variants/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |

