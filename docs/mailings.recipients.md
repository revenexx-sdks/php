# MailingsRecipients Service


```http request
GET https://api.revenexx.com/v1/mailings/recipients
```

** Filter `?mailing_id=` for one mailing, `?outcome=` for one outcome. Written by the send pipeline only. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| limit | integer | Page size (default 50, max 200). |  |
| offset | integer | Row offset for pagination (default 0). |  |
| order | string | Sort by one column: 'column' | 'column.asc' | 'column.desc'. |  |
| id | string | Keep only rows whose `id` equals this. |  |
| mailing_id | string | Keep only rows whose `mailing_id` equals this. |  |
| contact_id | string | Keep only rows whose `contact_id` equals this. |  |
| email | string | Keep only rows whose `email` equals this. |  |
| outcome | string | Keep only rows whose `outcome` equals this. |  |
| reason | string | Keep only rows whose `reason` equals this. |  |
| market | string | Keep only rows whose `market` equals this. |  |
| message_id | string | Keep only rows whose `message_id` equals this. |  |


```http request
GET https://api.revenexx.com/v1/mailings/recipients/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |

