# PagesDelivery Service


```http request
GET https://api.revenexx.com/v1/pages/delivery/menus
```

** One call gives a theme its whole chrome: header, footer and account navigation, each under the key the theme looks it up by. This route reads no filter — fetch all of them once and index by `id`. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| limit | integer | Page size (default 50, max 200). |  |
| offset | integer | Row offset for pagination (default 0). |  |
| order | string | Sort by one column: 'column' | 'column.asc' | 'column.desc'. A bare column sorts ascending. A column this entity does not have, or any other shape, is refused with 400. |  |


```http request
GET https://api.revenexx.com/v1/pages/delivery/page
```

** What a storefront calls to render a URL: `GET /pages/delivery/page?slug=about-us&amp;langcode=de`. Send exactly one selector — `slug` or `id`. `slug` is matched against the page and then against its translations, so a localized URL resolves to its page. Only the PUBLISHED revision is served, so an edit in progress never leaks. What comes back is finished rather than raw: `langcode` is resolved field by field with the page&#039;s source language behind it, blocks whose publish window has not opened or has already closed are left out, and every library reference is expanded into the subtree it points at — so a renderer walks the tree it is given and makes no second call for any of it. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| slug | string | The page slug, or the slug of one of its translations, without a leading slash — the path segment the storefront routes. Either this or `id`. |  |
| id | string | The page id, for a storefront that already holds one (from `GET /pages/delivery/pages`). Either this or `slug`. |  |
| langcode | string | Language to resolve the tree for, e.g. `de`. Falls back to the page's source language per field, so a partly translated page still renders whole. |  |


```http request
GET https://api.revenexx.com/v1/pages/delivery/pages
```

** The route a sitemap, a static build or a link picker is generated from. Only published pages, never a soft-deleted one — `filter` echoes both predicates the route applies on its own. A `?status=` of your own is ignored: this route is the published view by definition. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| limit | integer | Page size (default 100, max 200). |  |
| offset | integer | Row offset for pagination (default 0). |  |
| order | string | Sort by one column: 'column' | 'column.asc' | 'column.desc'. A bare column sorts ascending. A column this entity does not have, or any other shape, is refused with 400. |  |
| bundle | string | Exact page type — how a theme asks for just its landing pages. The value set belongs to the active theme. |  |


```http request
GET https://api.revenexx.com/v1/pages/delivery/preview/{token}
```

** The same shape `GET /pages/delivery/page` answers, built from the UNPUBLISHED working copy instead of the published revision — so a reviewer without an editor account sees exactly what the storefront would render. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| token | string | **Required** The token handed out by POST /pages/editor/{page_id}/preview-grant. |  |
| langcode | string | Language to resolve the tree for. Falls back to the page's source language, per field. |  |

