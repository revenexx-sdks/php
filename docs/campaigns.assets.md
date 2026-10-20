# CampaignsAssets Service


```http request
GET https://api.revenexx.com/v1/campaigns/assets
```

** Filter `?campaign_id=` for one campaign, `?asset_app=&asset_id=` for the campaign that holds an asset. Written only through attach and detach. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| limit | integer | Page size (default 50, max 200). |  |
| offset | integer | Row offset for pagination (default 0). |  |
| order | string | Sort by one column: 'column' | 'column.asc' | 'column.desc'. |  |
| id | string | Keep only rows whose `id` equals this. |  |
| campaign_id | string | Keep only rows whose `campaign_id` equals this. |  |
| asset_app | string | Keep only rows whose `asset_app` equals this. |  |
| asset_entity | string | Keep only rows whose `asset_entity` equals this. |  |
| asset_id | string | Keep only rows whose `asset_id` equals this. |  |
| label | string | Keep only rows whose `label` equals this. |  |
| claim | string | Keep only rows whose `claim` equals this. |  |
| added_by | string | Keep only rows whose `added_by` equals this. |  |


```http request
GET https://api.revenexx.com/v1/campaigns/assets/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |


```http request
POST https://api.revenexx.com/v1/campaigns/assets/{id}/detach
```

** The same as detaching from the campaign, addressed by the asset row — what a list row offers. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |
| data | object | Request body |  |

