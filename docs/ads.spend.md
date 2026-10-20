# AdsSpend Service


```http request
GET https://api.revenexx.com/v1/ads/accounts/{id}/figures
```

** Spend per day, clicks and consented conversions per day, from the first active day to the last with every day between, at most the latest 60; and spend per ad campaign, largest first. Spend in the account's currency only; words in the caller's language. Reads only. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The ad account. |  |


```http request
GET https://api.revenexx.com/v1/ads/campaigns/{campaign_id}/roas
```

** Revenue as campaigns attributes it under the model, divided by the ad spend booked here in the campaign's currency, with spend per platform. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| campaign_id | string | **Required** The campaign. |  |
| model | string | Default last_touch. |  |


```http request
GET https://api.revenexx.com/v1/ads/spend
```

** Filter `?campaign_id=`, `?ad_account_id=`, `?booking_state=unlinked`, `?spend_date=`. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| limit | integer | Page size (default 50, max 200). |  |
| offset | integer | Row offset for pagination (default 0). |  |
| order | string | Sort by one column: 'column' | 'column.asc' | 'column.desc'. |  |
| id | string | Keep only rows whose `id` equals this. |  |
| ad_account_id | string | Keep only rows whose `ad_account_id` equals this. |  |
| external_campaign_id | string | Keep only rows whose `external_campaign_id` equals this. |  |
| link_id | string | Keep only rows whose `link_id` equals this. |  |
| campaign_id | string | Keep only rows whose `campaign_id` equals this. |  |
| platform | string | Keep only rows whose `platform` equals this. |  |
| spend_date | string | Keep only rows whose `spend_date` equals this. |  |
| currency | string | Keep only rows whose `currency` equals this. |  |
| impressions | string | Keep only rows whose `impressions` equals this. |  |
| clicks | string | Keep only rows whose `clicks` equals this. |  |
| booking_state | string | Keep only rows whose `booking_state` equals this. |  |
| booking_error | string | Keep only rows whose `booking_error` equals this. |  |


```http request
POST https://api.revenexx.com/v1/ads/spend
```

** Called by the daily spend workflow. Each row is kept per account, ad campaign and day; a second import of a day replaces it. Mapped spend is booked into the campaign budget, summed per campaign, platform and day. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| rows | array |  |  |


```http request
GET https://api.revenexx.com/v1/ads/spend/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |

