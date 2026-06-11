# Messaging Service


```http request
GET https://api.revenexx.com/v1/messaging/messages
```

** Get a list of all messages from the current Revenexx project. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Maximum of 100 queries are allowed, each 4096 characters long. You may filter on the following attributes: scheduledAt, deliveredAt, deliveredTotal, status, description, providerType |  |
| search | string | Search term to filter your list results. Max length: 256 chars. |  |
| total | boolean | When set to false, the total count returned will be 0 and will not be calculated. |  |


```http request
POST https://api.revenexx.com/v1/messaging/messages/email
```

** Create a new email message. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| attachments | array | Array of compound ID strings of bucket IDs and file IDs to be attached to the email. They should be formatted as <BUCKET_ID>:<FILE_ID>. |  |
| bcc | array | Array of target IDs to be added as BCC. |  |
| cc | array | Array of target IDs to be added as CC. |  |
| content | string | Email Content. |  |
| draft | boolean | Is message a draft |  |
| html | boolean | Is content of type HTML |  |
| messageId | string | Message ID. Choose a custom ID or generate a random ID with `ID.unique()`. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can't start with a special char. Max length is 36 chars. |  |
| scheduledAt | string | Scheduled delivery time for message in [ISO 8601](https://www.iso.org/iso-8601-date-and-time-format.html) format. DateTime value must be in future. |  |
| subject | string | Email Subject. |  |
| targets | array | List of Targets IDs. |  |
| topics | array | List of Topic IDs. |  |
| users | array | List of User IDs. |  |


```http request
PATCH https://api.revenexx.com/v1/messaging/messages/email/{messageId}
```

** Update an email message by its unique ID. This endpoint only works on messages that are in draft status. Messages that are already processing, sent, or failed cannot be updated.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| messageId | string | **Required** Message ID. |  |
| attachments | array | Array of compound ID strings of bucket IDs and file IDs to be attached to the email. They should be formatted as <BUCKET_ID>:<FILE_ID>. |  |
| bcc | array | Array of target IDs to be added as BCC. |  |
| cc | array | Array of target IDs to be added as CC. |  |
| content | string | Email Content. |  |
| draft | boolean | Is message a draft |  |
| html | boolean | Is content of type HTML |  |
| scheduledAt | string | Scheduled delivery time for message in [ISO 8601](https://www.iso.org/iso-8601-date-and-time-format.html) format. DateTime value must be in future. |  |
| subject | string | Email Subject. |  |
| targets | array | List of Targets IDs. |  |
| topics | array | List of Topic IDs. |  |
| users | array | List of User IDs. |  |


```http request
POST https://api.revenexx.com/v1/messaging/messages/push
```

** Create a new push notification. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| action | string | Action for push notification. |  |
| badge | integer | Badge for push notification. Available only for iOS Platform. |  |
| body | string | Body for push notification. |  |
| color | string | Color for push notification. Available only for Android Platform. |  |
| contentAvailable | boolean | If set to true, the notification will be delivered in the background. Available only for iOS Platform. |  |
| critical | boolean | If set to true, the notification will be marked as critical. This requires the app to have the critical notification entitlement. Available only for iOS Platform. |  |
| data | object | Additional key-value pair data for push notification. |  |
| draft | boolean | Is message a draft |  |
| icon | string | Icon for push notification. Available only for Android and Web Platform. |  |
| image | string | Image for push notification. Must be a compound bucket ID to file ID of a jpeg, png, or bmp image in Appwrite Storage. It should be formatted as <BUCKET_ID>:<FILE_ID>. |  |
| messageId | string | Message ID. Choose a custom ID or generate a random ID with `ID.unique()`. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can't start with a special char. Max length is 36 chars. |  |
| priority | string | Set the notification priority. "normal" will consider device state and may not deliver notifications immediately. "high" will always attempt to immediately deliver the notification. |  |
| scheduledAt | string | Scheduled delivery time for message in [ISO 8601](https://www.iso.org/iso-8601-date-and-time-format.html) format. DateTime value must be in future. |  |
| sound | string | Sound for push notification. Available only for Android and iOS Platform. |  |
| tag | string | Tag for push notification. Available only for Android Platform. |  |
| targets | array | List of Targets IDs. |  |
| title | string | Title for push notification. |  |
| topics | array | List of Topic IDs. |  |
| users | array | List of User IDs. |  |


```http request
PATCH https://api.revenexx.com/v1/messaging/messages/push/{messageId}
```

** Update a push notification by its unique ID. This endpoint only works on messages that are in draft status. Messages that are already processing, sent, or failed cannot be updated.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| messageId | string | **Required** Message ID. |  |
| action | string | Action for push notification. |  |
| badge | integer | Badge for push notification. Available only for iOS platforms. |  |
| body | string | Body for push notification. |  |
| color | string | Color for push notification. Available only for Android platforms. |  |
| contentAvailable | boolean | If set to true, the notification will be delivered in the background. Available only for iOS Platform. |  |
| critical | boolean | If set to true, the notification will be marked as critical. This requires the app to have the critical notification entitlement. Available only for iOS Platform. |  |
| data | object | Additional Data for push notification. |  |
| draft | boolean | Is message a draft |  |
| icon | string | Icon for push notification. Available only for Android and Web platforms. |  |
| image | string | Image for push notification. Must be a compound bucket ID to file ID of a jpeg, png, or bmp image in Appwrite Storage. It should be formatted as <BUCKET_ID>:<FILE_ID>. |  |
| priority | string | Set the notification priority. "normal" will consider device battery state and may send notifications later. "high" will always attempt to immediately deliver the notification. |  |
| scheduledAt | string | Scheduled delivery time for message in [ISO 8601](https://www.iso.org/iso-8601-date-and-time-format.html) format. DateTime value must be in future. |  |
| sound | string | Sound for push notification. Available only for Android and iOS platforms. |  |
| tag | string | Tag for push notification. Available only for Android platforms. |  |
| targets | array | List of Targets IDs. |  |
| title | string | Title for push notification. |  |
| topics | array | List of Topic IDs. |  |
| users | array | List of User IDs. |  |


```http request
DELETE https://api.revenexx.com/v1/messaging/messages/{messageId}
```

** Delete a message. If the message is not a draft or scheduled, but has been sent, this will not recall the message. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| messageId | string | **Required** Message ID. |  |


```http request
GET https://api.revenexx.com/v1/messaging/messages/{messageId}
```

** Get a message by its unique ID.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| messageId | string | **Required** Message ID. |  |


```http request
GET https://api.revenexx.com/v1/messaging/messages/{messageId}/logs
```

** Get the message activity logs listed by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| messageId | string | **Required** Message ID. |  |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Only supported methods are limit and offset |  |
| total | boolean | When set to false, the total count returned will be 0 and will not be calculated. |  |


```http request
GET https://api.revenexx.com/v1/messaging/messages/{messageId}/targets
```

** Get a list of the targets associated with a message. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| messageId | string | **Required** Message ID. |  |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Maximum of 100 queries are allowed, each 4096 characters long. You may filter on the following attributes: userId, providerId, identifier, providerType |  |
| total | boolean | When set to false, the total count returned will be 0 and will not be calculated. |  |


```http request
GET https://api.revenexx.com/v1/messaging/providers
```

** Get a list of all providers from the current Revenexx project. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Maximum of 100 queries are allowed, each 4096 characters long. You may filter on the following attributes: name, provider, type, enabled |  |
| search | string | Search term to filter your list results. Max length: 256 chars. |  |
| total | boolean | When set to false, the total count returned will be 0 and will not be calculated. |  |


```http request
POST https://api.revenexx.com/v1/messaging/providers/mailgun
```

** Create a new Mailgun provider. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| apiKey | string | Mailgun API Key. |  |
| domain | string | Mailgun Domain. |  |
| enabled | boolean | Set as enabled. |  |
| fromEmail | string | Sender email address. |  |
| fromName | string | Sender Name. |  |
| isEuRegion | boolean | Set as EU region. |  |
| name | string | Provider name. |  |
| providerId | string | Provider ID. Choose a custom ID or generate a random ID with `ID.unique()`. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can't start with a special char. Max length is 36 chars. |  |
| replyToEmail | string | Email set in the reply to field for the mail. Default value is sender email. Reply to email must have reply to name as well. |  |
| replyToName | string | Name set in the reply to field for the mail. Default value is sender name. Reply to name must have reply to email as well. |  |


```http request
PATCH https://api.revenexx.com/v1/messaging/providers/mailgun/{providerId}
```

** Update a Mailgun provider by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| providerId | string | **Required** Provider ID. |  |
| apiKey | string | Mailgun API Key. |  |
| domain | string | Mailgun Domain. |  |
| enabled | boolean | Set as enabled. |  |
| fromEmail | string | Sender email address. |  |
| fromName | string | Sender Name. |  |
| isEuRegion | boolean | Set as EU region. |  |
| name | string | Provider name. |  |
| replyToEmail | string | Email set in the reply to field for the mail. Default value is sender email. |  |
| replyToName | string | Name set in the reply to field for the mail. Default value is sender name. |  |


```http request
POST https://api.revenexx.com/v1/messaging/providers/msg91
```

** Create a new MSG91 provider. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| authKey | string | Msg91 auth key. |  |
| enabled | boolean | Set as enabled. |  |
| name | string | Provider name. |  |
| providerId | string | Provider ID. Choose a custom ID or generate a random ID with `ID.unique()`. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can't start with a special char. Max length is 36 chars. |  |
| senderId | string | Msg91 sender ID. |  |
| templateId | string | Msg91 template ID |  |


```http request
PATCH https://api.revenexx.com/v1/messaging/providers/msg91/{providerId}
```

** Update a MSG91 provider by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| providerId | string | **Required** Provider ID. |  |
| authKey | string | Msg91 auth key. |  |
| enabled | boolean | Set as enabled. |  |
| name | string | Provider name. |  |
| senderId | string | Msg91 sender ID. |  |
| templateId | string | Msg91 template ID. |  |


```http request
POST https://api.revenexx.com/v1/messaging/providers/resend
```

** Create a new Resend provider. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| apiKey | string | Resend API key. |  |
| enabled | boolean | Set as enabled. |  |
| fromEmail | string | Sender email address. |  |
| fromName | string | Sender Name. |  |
| name | string | Provider name. |  |
| providerId | string | Provider ID. Choose a custom ID or generate a random ID with `ID.unique()`. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can't start with a special char. Max length is 36 chars. |  |
| replyToEmail | string | Email set in the reply to field for the mail. Default value is sender email. |  |
| replyToName | string | Name set in the reply to field for the mail. Default value is sender name. |  |


```http request
PATCH https://api.revenexx.com/v1/messaging/providers/resend/{providerId}
```

** Update a Resend provider by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| providerId | string | **Required** Provider ID. |  |
| apiKey | string | Resend API key. |  |
| enabled | boolean | Set as enabled. |  |
| fromEmail | string | Sender email address. |  |
| fromName | string | Sender Name. |  |
| name | string | Provider name. |  |
| replyToEmail | string | Email set in the Reply To field for the mail. Default value is Sender Email. |  |
| replyToName | string | Name set in the Reply To field for the mail. Default value is Sender Name. |  |


```http request
POST https://api.revenexx.com/v1/messaging/providers/sendgrid
```

** Create a new Sendgrid provider. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| apiKey | string | Sendgrid API key. |  |
| enabled | boolean | Set as enabled. |  |
| fromEmail | string | Sender email address. |  |
| fromName | string | Sender Name. |  |
| name | string | Provider name. |  |
| providerId | string | Provider ID. Choose a custom ID or generate a random ID with `ID.unique()`. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can't start with a special char. Max length is 36 chars. |  |
| replyToEmail | string | Email set in the reply to field for the mail. Default value is sender email. |  |
| replyToName | string | Name set in the reply to field for the mail. Default value is sender name. |  |


```http request
PATCH https://api.revenexx.com/v1/messaging/providers/sendgrid/{providerId}
```

** Update a Sendgrid provider by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| providerId | string | **Required** Provider ID. |  |
| apiKey | string | Sendgrid API key. |  |
| enabled | boolean | Set as enabled. |  |
| fromEmail | string | Sender email address. |  |
| fromName | string | Sender Name. |  |
| name | string | Provider name. |  |
| replyToEmail | string | Email set in the Reply To field for the mail. Default value is Sender Email. |  |
| replyToName | string | Name set in the Reply To field for the mail. Default value is Sender Name. |  |


```http request
POST https://api.revenexx.com/v1/messaging/providers/telesign
```

** Create a new Telesign provider. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| apiKey | string | Telesign API key. |  |
| customerId | string | Telesign customer ID. |  |
| enabled | boolean | Set as enabled. |  |
| from | string | Sender Phone number. Format this number with a leading '+' and a country code, e.g., +16175551212. |  |
| name | string | Provider name. |  |
| providerId | string | Provider ID. Choose a custom ID or generate a random ID with `ID.unique()`. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can't start with a special char. Max length is 36 chars. |  |


```http request
PATCH https://api.revenexx.com/v1/messaging/providers/telesign/{providerId}
```

** Update a Telesign provider by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| providerId | string | **Required** Provider ID. |  |
| apiKey | string | Telesign API key. |  |
| customerId | string | Telesign customer ID. |  |
| enabled | boolean | Set as enabled. |  |
| from | string | Sender number. |  |
| name | string | Provider name. |  |


```http request
POST https://api.revenexx.com/v1/messaging/providers/textmagic
```

** Create a new Textmagic provider. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| apiKey | string | Textmagic apiKey. |  |
| enabled | boolean | Set as enabled. |  |
| from | string | Sender Phone number. Format this number with a leading '+' and a country code, e.g., +16175551212. |  |
| name | string | Provider name. |  |
| providerId | string | Provider ID. Choose a custom ID or generate a random ID with `ID.unique()`. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can't start with a special char. Max length is 36 chars. |  |
| username | string | Textmagic username. |  |


```http request
PATCH https://api.revenexx.com/v1/messaging/providers/textmagic/{providerId}
```

** Update a Textmagic provider by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| providerId | string | **Required** Provider ID. |  |
| apiKey | string | Textmagic apiKey. |  |
| enabled | boolean | Set as enabled. |  |
| from | string | Sender number. |  |
| name | string | Provider name. |  |
| username | string | Textmagic username. |  |


```http request
POST https://api.revenexx.com/v1/messaging/providers/twilio
```

** Create a new Twilio provider. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| accountSid | string | Twilio account secret ID. |  |
| authToken | string | Twilio authentication token. |  |
| enabled | boolean | Set as enabled. |  |
| from | string | Sender Phone number. Format this number with a leading '+' and a country code, e.g., +16175551212. |  |
| name | string | Provider name. |  |
| providerId | string | Provider ID. Choose a custom ID or generate a random ID with `ID.unique()`. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can't start with a special char. Max length is 36 chars. |  |


```http request
PATCH https://api.revenexx.com/v1/messaging/providers/twilio/{providerId}
```

** Update a Twilio provider by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| providerId | string | **Required** Provider ID. |  |
| accountSid | string | Twilio account secret ID. |  |
| authToken | string | Twilio authentication token. |  |
| enabled | boolean | Set as enabled. |  |
| from | string | Sender number. |  |
| name | string | Provider name. |  |


```http request
POST https://api.revenexx.com/v1/messaging/providers/vonage
```

** Create a new Vonage provider. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| apiKey | string | Vonage API key. |  |
| apiSecret | string | Vonage API secret. |  |
| enabled | boolean | Set as enabled. |  |
| from | string | Sender Phone number. Format this number with a leading '+' and a country code, e.g., +16175551212. |  |
| name | string | Provider name. |  |
| providerId | string | Provider ID. Choose a custom ID or generate a random ID with `ID.unique()`. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can't start with a special char. Max length is 36 chars. |  |


```http request
PATCH https://api.revenexx.com/v1/messaging/providers/vonage/{providerId}
```

** Update a Vonage provider by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| providerId | string | **Required** Provider ID. |  |
| apiKey | string | Vonage API key. |  |
| apiSecret | string | Vonage API secret. |  |
| enabled | boolean | Set as enabled. |  |
| from | string | Sender number. |  |
| name | string | Provider name. |  |


```http request
DELETE https://api.revenexx.com/v1/messaging/providers/{providerId}
```

** Delete a provider by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| providerId | string | **Required** Provider ID. |  |


```http request
GET https://api.revenexx.com/v1/messaging/providers/{providerId}
```

** Get a provider by its unique ID.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| providerId | string | **Required** Provider ID. |  |


```http request
GET https://api.revenexx.com/v1/messaging/providers/{providerId}/logs
```

** Get the provider activity logs listed by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| providerId | string | **Required** Provider ID. |  |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Only supported methods are limit and offset |  |
| total | boolean | When set to false, the total count returned will be 0 and will not be calculated. |  |


```http request
GET https://api.revenexx.com/v1/messaging/subscribers/{subscriberId}/logs
```

** Get the subscriber activity logs listed by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| subscriberId | string | **Required** Subscriber ID. |  |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Only supported methods are limit and offset |  |
| total | boolean | When set to false, the total count returned will be 0 and will not be calculated. |  |


```http request
GET https://api.revenexx.com/v1/messaging/topics
```

** Get a list of all topics from the current Revenexx project. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Maximum of 100 queries are allowed, each 4096 characters long. You may filter on the following attributes: name, description, emailTotal, smsTotal, pushTotal |  |
| search | string | Search term to filter your list results. Max length: 256 chars. |  |
| total | boolean | When set to false, the total count returned will be 0 and will not be calculated. |  |


```http request
POST https://api.revenexx.com/v1/messaging/topics
```

** Create a new topic. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| name | string | Topic Name. |  |
| subscribe | array | An array of role strings with subscribe permission. By default all users are granted with any subscribe permission. [learn more about roles](https://appwrite.io/docs/permissions#permission-roles). Maximum of 100 roles are allowed, each 64 characters long. |  |
| topicId | string | Topic ID. Choose a custom Topic ID or a new Topic ID. |  |


```http request
DELETE https://api.revenexx.com/v1/messaging/topics/{topicId}
```

** Delete a topic by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| topicId | string | **Required** Topic ID. |  |


```http request
GET https://api.revenexx.com/v1/messaging/topics/{topicId}
```

** Get a topic by its unique ID.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| topicId | string | **Required** Topic ID. |  |


```http request
PATCH https://api.revenexx.com/v1/messaging/topics/{topicId}
```

** Update a topic by its unique ID.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| topicId | string | **Required** Topic ID. |  |
| name | string | Topic Name. |  |
| subscribe | array | An array of role strings with subscribe permission. By default all users are granted with any subscribe permission. [learn more about roles](https://appwrite.io/docs/permissions#permission-roles). Maximum of 100 roles are allowed, each 64 characters long. |  |


```http request
GET https://api.revenexx.com/v1/messaging/topics/{topicId}/logs
```

** Get the topic activity logs listed by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| topicId | string | **Required** Topic ID. |  |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Only supported methods are limit and offset |  |
| total | boolean | When set to false, the total count returned will be 0 and will not be calculated. |  |


```http request
GET https://api.revenexx.com/v1/messaging/topics/{topicId}/subscribers
```

** Get a list of all subscribers from the current Revenexx project. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| topicId | string | **Required** Topic ID. The topic ID subscribed to. |  |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Maximum of 100 queries are allowed, each 4096 characters long. You may filter on the following attributes: name, provider, type, enabled |  |
| search | string | Search term to filter your list results. Max length: 256 chars. |  |
| total | boolean | When set to false, the total count returned will be 0 and will not be calculated. |  |


```http request
POST https://api.revenexx.com/v1/messaging/topics/{topicId}/subscribers
```

** Create a new subscriber. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| topicId | string | **Required** Topic ID. The topic ID to subscribe to. |  |
| subscriberId | string | Subscriber ID. Choose a custom Subscriber ID or a new Subscriber ID. |  |
| targetId | string | Target ID. The target ID to link to the specified Topic ID. |  |


```http request
DELETE https://api.revenexx.com/v1/messaging/topics/{topicId}/subscribers/{subscriberId}
```

** Delete a subscriber by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| topicId | string | **Required** Topic ID. The topic ID subscribed to. |  |
| subscriberId | string | **Required** Subscriber ID. |  |


```http request
GET https://api.revenexx.com/v1/messaging/topics/{topicId}/subscribers/{subscriberId}
```

** Get a subscriber by its unique ID.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| topicId | string | **Required** Topic ID. The topic ID subscribed to. |  |
| subscriberId | string | **Required** Subscriber ID. |  |

