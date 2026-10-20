# AudiencesRules Service


```http request
GET https://api.revenexx.com/v1/audiences/rules
```

** The rule rows of every active audience; filter `?audience_id=` for one audience's tree. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| limit | integer | Page size (default 50, max 200). A larger value is clamped rather than refused. |  |
| offset | integer | Row offset for pagination (default 0). Page with `page.total` and `page.hasMore`. |  |
| order | string | Sort by one column: 'column' | 'column.asc' | 'column.desc'. The column has to be one this entity has. |  |
| id | string | Keep only rows whose `id` equals this. |  |
| audience_id | string | Keep only rows whose `audience_id` equals this. |  |
| parent_id | string | Keep only rows whose `parent_id` equals this. |  |
| kind | string | Keep only rows whose `kind` equals this. |  |
| match_mode | string | Keep only rows whose `match_mode` equals this. |  |
| negate | string | Keep only rows whose `negate` equals this. |  |
| subject | string | Keep only rows whose `subject` equals this. |  |
| field | string | Keep only rows whose `field` equals this. |  |
| operator | string | Keep only rows whose `operator` equals this. |  |
| window_days | string | Keep only rows whose `window_days` equals this. |  |
| channel | string | Keep only rows whose `channel` equals this. |  |
| position | string | Keep only rows whose `position` equals this. |  |


```http request
POST https://api.revenexx.com/v1/audiences/rules
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| audience_id | string | The audience this row belongs to. Deleting the audience deletes it. |  |
| channel | string | For a subscription question: `email`, `sms` or `whatsapp`. |  |
| field | string | Which contact column, organisation figure, order window or subscription type the question reads, where the subject needs one. |  |
| kind | string | `group` holds further rules; `question` asks one thing about a person. |  |
| match_mode | string | For a group: `all` or `any` of its rules. |  |
| negate | boolean | Turns the answer around. An unanswered question stays unanswered. |  |
| operator | string | How it compares — one of GET /audiences/vocabularies/operators, limited per subject. |  |
| parent_id | string | The group this rule sits inside. Empty at the top level. |  |
| position | integer | Order among siblings, ascending; ties are ordered by id. |  |
| subject | string | What the question asks about — one of the subjects in GET /audiences/vocabularies/subjects. |  |
| value | any | What it compares against: a list of codes, a text or a number. |  |
| value_to | any | The upper bound of a `between`. |  |
| window_days | integer | How many days back a time-bound question looks. |  |


```http request
DELETE https://api.revenexx.com/v1/audiences/rules/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |


```http request
GET https://api.revenexx.com/v1/audiences/rules/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |


```http request
PUT https://api.revenexx.com/v1/audiences/rules/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required** The row id, as it came back from the list. |  |
| audience_id | string | The audience this row belongs to. Deleting the audience deletes it. |  |
| channel | string | For a subscription question: `email`, `sms` or `whatsapp`. |  |
| field | string | Which contact column, organisation figure, order window or subscription type the question reads, where the subject needs one. |  |
| kind | string | `group` holds further rules; `question` asks one thing about a person. |  |
| match_mode | string | For a group: `all` or `any` of its rules. |  |
| negate | boolean | Turns the answer around. An unanswered question stays unanswered. |  |
| operator | string | How it compares — one of GET /audiences/vocabularies/operators, limited per subject. |  |
| parent_id | string | The group this rule sits inside. Empty at the top level. |  |
| position | integer | Order among siblings, ascending; ties are ordered by id. |  |
| subject | string | What the question asks about — one of the subjects in GET /audiences/vocabularies/subjects. |  |
| value | any | What it compares against: a list of codes, a text or a number. |  |
| value_to | any | The upper bound of a `between`. |  |
| window_days | integer | How many days back a time-bound question looks. |  |

