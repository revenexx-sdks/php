# PagesCollaboration Service


```http request
GET https://api.revenexx.com/v1/pages/editor/notifications
```

** The caller&#039;s own notifications, newest first, 20 at a time. Paged by an opaque cursor rather than by offset, so new arrivals never shift a page under the reader. It is also the one read in this app that writes: `?markAsRead=true` flags the notifications on the page it just returned as read, which is how a feed that has been looked at empties its badge without a second call — leave it off and reading changes nothing. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| after | string | Continue after this cursor — pass back the `cursor` from the previous page. Omit for the first page. It encodes the last item's timestamp and id, so it is stable while new notifications arrive. |  |
| markAsRead | string | Send the literal `true` to mark the notifications ON THIS PAGE read as a side effect of reading them. Any other value, including `1` and `false`, is accepted and leaves them unread. |  |


```http request
POST https://api.revenexx.com/v1/pages/editor/notifications/mark-all-read
```

** Empties the badge in one call. Every unread notification of the CURRENT user is flagged read — the user is the one the request&#039;s context token names and there is no body with which to name another. Nothing is deleted: `GET /pages/editor/notifications` still returns the same feed, just with `read` set. The answer is the new unread count, so a client can set the badge straight from it without a second read. **


```http request
GET https://api.revenexx.com/v1/pages/editor/notifications/unread-count
```

** The cheap poll behind the badge. **


```http request
GET https://api.revenexx.com/v1/pages/editor/users
```

** What the @mention picker is filled from. When the identity service cannot be reached this degrades to the authors who have already commented on this tenant&#039;s pages rather than answering an error — a mention list that is short is more useful than one that is missing. **


```http request
GET https://api.revenexx.com/v1/pages/editor/{page_id}/comments
```

** Every comment on the page in one flat list, oldest first, roots and replies together and resolved threads included — there is no filter and no paging, because the editor nests and filters them itself from `parentUuid` and pins each root to its blocks with `blockUuids`. Comments hang off the PAGE, not off a revision or an edit state, so publishing and reverting leave them standing; that is what makes them usable as a review trail across several rounds of edits. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| page_id | string | **Required** The page being edited. |  |


```http request
POST https://api.revenexx.com/v1/pages/editor/{page_id}/comments
```

** The same route writes both kinds, and which one you get is decided by the body: `blockUuids` starts a new thread pinned to those blocks, `parentUuid` hangs a reply under an existing root. Everyone named with an @mention in the body is notified, and on a reply so is everybody already in the thread — the actor never notifies themselves. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| page_id | string | **Required** The page being edited. |  |
| blockUuids | array | The blocks this thread is about, so the editor can draw a marker next to them. Leave empty for a comment about the page as a whole. |  |
| body | string | The comment, as editor HTML. `<span data-type="mention" data-id="USER_ID">` is what this app reads to decide whom to notify; `<li data-type="taskItem" data-checked="false">` makes a checkbox the toggle-task route can flip. |  |
| parentUuid | string | The root comment this replies to. Omit for a new thread — only roots can be resolved. |  |


```http request
DELETE https://api.revenexx.com/v1/pages/editor/{page_id}/comments/{uuid}
```

** A hard delete, and deleting a root takes its replies with it. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| page_id | string | **Required** The page being edited. |  |
| uuid | string | **Required** The comment id — the `uuid` of a `PageCommentItem`, not a row id of any other shape. |  |


```http request
PUT https://api.revenexx.com/v1/pages/editor/{page_id}/comments/{uuid}
```

** Rewrites what a comment says, and only its author may — a comment carries an `author_id` and anybody else is refused with 403. Only the body moves: what the comment is pinned to, whether the thread is resolved and who wrote it are all fixed when it is created. Rewriting a body does NOT re-run the @mention notifications, so mentioning somebody new by editing will not reach them. Answers the page&#039;s whole comment list rather than the one row, so a client can re-render from the response. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| page_id | string | **Required** The page being edited. |  |
| uuid | string | **Required** The comment id — the `uuid` of a `PageCommentItem`, not a row id of any other shape. |  |
| body | string | The comment, as editor HTML. Replaces the old body completely. |  |


```http request
POST https://api.revenexx.com/v1/pages/editor/{page_id}/comments/{uuid}/resolve
```

** Marks a thread handled, so the editor stops surfacing it on the block it is pinned to. Only a ROOT can be resolved — resolved-ness is a property of the thread and not of a message in it, so pointing this at a reply is refused with 400 rather than quietly resolving its parent. Nothing is deleted, nobody is notified, and the thread stays in the list; `.../unresolve` is the way back. Answers the page&#039;s whole comment list. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| page_id | string | **Required** The page being edited. |  |
| uuid | string | **Required** The comment id — the `uuid` of a `PageCommentItem`, not a row id of any other shape. |  |


```http request
POST https://api.revenexx.com/v1/pages/editor/{page_id}/comments/{uuid}/toggle-task
```

** A comment body may carry a task list. This flips one checkbox by rewriting the body&#039;s markup, and answers the single comment rather than the whole list. A `taskIndex` that names no checkbox is refused and nothing is written — the comment&#039;s `updated_at` is the editor&#039;s &quot;edited&quot; marker, so a call that changes nothing must not move it. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| page_id | string | **Required** The page being edited. |  |
| uuid | string | **Required** The comment id — the `uuid` of a `PageCommentItem`, not a row id of any other shape. |  |
| taskIndex | integer | The task item to toggle, counted in document order from 0. A comment with fewer tasks than that answers 400, and so does anything that is not a whole number at or above 0. |  |


```http request
POST https://api.revenexx.com/v1/pages/editor/{page_id}/comments/{uuid}/unresolve
```

** Clears the resolved flag and puts the thread back in front of whoever is editing — the mirror of `.../resolve` in every respect, including that only a root can be reopened and that a reply answers 400. A thread that was already open is accepted and stays open. Answers the page&#039;s whole comment list. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| page_id | string | **Required** The page being edited. |  |
| uuid | string | **Required** The comment id — the `uuid` of a `PageCommentItem`, not a row id of any other shape. |  |

