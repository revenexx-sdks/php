# ReviewsPrivacy Service


```http request
POST https://api.revenexx.com/v1/reviews/contacts/{contact_id}/anonymise
```

** Stars and text stay so product figures do not move; name, contact and company are cleared, and the person's review links are removed. The same happens on `customers.contact.deleted` and `marketing_consents.consents.erased`. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| contact_id | string | **Required** The contact. |  |
| data | object | Request body |  |

