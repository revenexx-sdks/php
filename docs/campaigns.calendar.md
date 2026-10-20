# CampaignsCalendar Service


```http request
GET https://api.revenexx.com/v1/campaigns/calendar
```

** Campaign windows and due tasks from this app; mail send times, promotion windows, automation live periods and page publish dates read from their own apps on every call. `sources` says which app answered. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| from | string | Start of the range, a date or a time. Required. |  |
| to | string | End of the range; a bare date means the whole day. At most 400 days after from. |  |
| type | string | Comma-separated kinds: campaign, mailing, promotion, journey, page, task. |  |
| market | string | Only campaigns in this market, or in no market. |  |
| status | string | Only campaigns with this status. |  |
| owner_id | string | Only campaigns of this owner. |  |

