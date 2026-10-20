# LoyaltyPoints Service


```http request
GET https://api.revenexx.com/v1/loyalty/point-ledger
```

** The ledger. Filter `?membership_id=`, `?kind=`, `?order_id=`. Read-only. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| limit | integer | Page size (default 50, max 200). |  |
| offset | integer | Row offset for pagination (default 0). |  |
| order | string | Sort by one column: 'column' | 'column.asc' | 'column.desc'. |  |
| id | string | Keep only rows whose `id` equals this. |  |
| membership_id | string | Keep only rows whose `membership_id` equals this. |  |
| entry_key | string | Keep only rows whose `entry_key` equals this. |  |
| kind | string | Keep only rows whose `kind` equals this. |  |
| points | string | Keep only rows whose `points` equals this. |  |
| remaining | string | Keep only rows whose `remaining` equals this. |  |
| order_id | string | Keep only rows whose `order_id` equals this. |  |
| reward_id | string | Keep only rows whose `reward_id` equals this. |  |
| redemption_id | string | Keep only rows whose `redemption_id` equals this. |  |
| reason | string | Keep only rows whose `reason` equals this. |  |


```http request
GET https://api.revenexx.com/v1/loyalty/point-ledger/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |


```http request
POST https://api.revenexx.com/v1/loyalty/points/award
```

** What the journeys award_points step calls. Names the member by membership, contact or company (`program_code` when the holder collects in several programmes). A `key` makes a retry book once. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| contact_id | string |  |  |
| key | string |  |  |
| membership_id | string |  |  |
| organization_id | string |  |  |
| points | integer |  |  |
| program_code | string |  |  |
| reason | string |  |  |

