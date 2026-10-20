# LoyaltyReferrals Service


```http request
GET https://api.revenexx.com/v1/loyalty/referral-codes
```

** Filter `?membership_id=`, `?contact_id=`, `?code=`. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| limit | integer | Page size (default 50, max 200). |  |
| offset | integer | Row offset for pagination (default 0). |  |
| order | string | Sort by one column: 'column' | 'column.asc' | 'column.desc'. |  |
| id | string | Keep only rows whose `id` equals this. |  |
| membership_id | string | Keep only rows whose `membership_id` equals this. |  |
| contact_id | string | Keep only rows whose `contact_id` equals this. |  |
| code | string | Keep only rows whose `code` equals this. |  |
| uses | string | Keep only rows whose `uses` equals this. |  |
| active | string | Keep only rows whose `active` equals this. |  |


```http request
GET https://api.revenexx.com/v1/loyalty/referral-codes/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |


```http request
POST https://api.revenexx.com/v1/loyalty/referral-codes/{id}/deactivate
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |
| data | object | Request body |  |


```http request
GET https://api.revenexx.com/v1/loyalty/referrals
```

** Filter `?state=`, `?referrer_contact_id=`, `?referee_contact_id=`. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| limit | integer | Page size (default 50, max 200). |  |
| offset | integer | Row offset for pagination (default 0). |  |
| order | string | Sort by one column: 'column' | 'column.asc' | 'column.desc'. |  |
| id | string | Keep only rows whose `id` equals this. |  |
| referral_code_id | string | Keep only rows whose `referral_code_id` equals this. |  |
| referrer_membership_id | string | Keep only rows whose `referrer_membership_id` equals this. |  |
| referrer_contact_id | string | Keep only rows whose `referrer_contact_id` equals this. |  |
| referee_contact_id | string | Keep only rows whose `referee_contact_id` equals this. |  |
| state | string | Keep only rows whose `state` equals this. |  |
| order_id | string | Keep only rows whose `order_id` equals this. |  |
| reason | string | Keep only rows whose `reason` equals this. |  |
| referee_voucher_code | string | Keep only rows whose `referee_voucher_code` equals this. |  |
| referrer_voucher_code | string | Keep only rows whose `referrer_voucher_code` equals this. |  |


```http request
POST https://api.revenexx.com/v1/loyalty/referrals/claim
```

** The storefront calls it at sign-up. Records the referral and, when the tenant set one, issues a welcome voucher. Claiming the same code again answers the first claim. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| code | string |  |  |
| contact_id | string |  |  |


```http request
GET https://api.revenexx.com/v1/loyalty/referrals/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |


```http request
POST https://api.revenexx.com/v1/loyalty/referrals/{id}/reject
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |
| reason | string |  |  |


```http request
POST https://api.revenexx.com/v1/loyalty/referrals/{id}/reward
```

** For a referral that qualified while promotions could not issue the voucher. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |
| data | object | Request body |  |

