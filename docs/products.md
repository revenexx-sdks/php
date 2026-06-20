# Products Service


```http request
GET https://api.revenexx.com/v1/products
```


```http request
POST https://api.revenexx.com/v1/products
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| attribute_values | object |  |  |
| completeness | object |  |  |
| deleted_at | string |  |  |
| enabled | boolean |  |  |
| family_id | string |  |  |
| family_variant_id | string |  |  |
| kind | string |  |  |
| parent_id | string |  |  |
| quantified_associations | object |  |  |
| sku | string |  |  |
| tax_class | string |  |  |


```http request
GET https://api.revenexx.com/v1/products/asset_families
```


```http request
POST https://api.revenexx.com/v1/products/asset_families
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| code | string |  |  |
| labels | object |  |  |
| naming_convention | object |  |  |


```http request
DELETE https://api.revenexx.com/v1/products/asset_families/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
GET https://api.revenexx.com/v1/products/asset_families/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
PUT https://api.revenexx.com/v1/products/asset_families/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |
| code | string |  |  |
| labels | object |  |  |
| naming_convention | object |  |  |


```http request
GET https://api.revenexx.com/v1/products/assets
```


```http request
POST https://api.revenexx.com/v1/products/assets
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| asset_family_id | string |  |  |
| attribute_values | object |  |  |
| code | string |  |  |
| media_uuid | string |  |  |


```http request
DELETE https://api.revenexx.com/v1/products/assets/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
GET https://api.revenexx.com/v1/products/assets/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
PUT https://api.revenexx.com/v1/products/assets/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |
| asset_family_id | string |  |  |
| attribute_values | object |  |  |
| code | string |  |  |
| media_uuid | string |  |  |


```http request
GET https://api.revenexx.com/v1/products/association_types
```


```http request
POST https://api.revenexx.com/v1/products/association_types
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| code | string |  |  |
| is_quantified | boolean |  |  |
| is_two_way | boolean |  |  |
| labels | object |  |  |


```http request
DELETE https://api.revenexx.com/v1/products/association_types/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
GET https://api.revenexx.com/v1/products/association_types/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
PUT https://api.revenexx.com/v1/products/association_types/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |
| code | string |  |  |
| is_quantified | boolean |  |  |
| is_two_way | boolean |  |  |
| labels | object |  |  |


```http request
GET https://api.revenexx.com/v1/products/attribute_groups
```


```http request
POST https://api.revenexx.com/v1/products/attribute_groups
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| code | string |  |  |
| labels | object |  |  |
| position | integer |  |  |


```http request
DELETE https://api.revenexx.com/v1/products/attribute_groups/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
GET https://api.revenexx.com/v1/products/attribute_groups/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
PUT https://api.revenexx.com/v1/products/attribute_groups/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |
| code | string |  |  |
| labels | object |  |  |
| position | integer |  |  |


```http request
GET https://api.revenexx.com/v1/products/attribute_options
```


```http request
POST https://api.revenexx.com/v1/products/attribute_options
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| attribute_id | string |  |  |
| code | string |  |  |
| labels | object |  |  |
| position | integer |  |  |
| swatch | object |  |  |


```http request
DELETE https://api.revenexx.com/v1/products/attribute_options/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
GET https://api.revenexx.com/v1/products/attribute_options/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
PUT https://api.revenexx.com/v1/products/attribute_options/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |
| attribute_id | string |  |  |
| code | string |  |  |
| labels | object |  |  |
| position | integer |  |  |
| swatch | object |  |  |


```http request
GET https://api.revenexx.com/v1/products/attributes
```


```http request
POST https://api.revenexx.com/v1/products/attributes
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| code | string |  |  |
| config | object |  |  |
| entity_ref | string |  |  |
| entity_type | string |  |  |
| group_id | string |  |  |
| is_filterable | boolean |  |  |
| is_unique | boolean |  |  |
| labels | object |  |  |
| localizable | boolean |  |  |
| position | integer |  |  |
| scopable | boolean |  |  |
| type | string |  |  |
| usable_in_grid | boolean |  |  |
| validation | object |  |  |


```http request
DELETE https://api.revenexx.com/v1/products/attributes/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
GET https://api.revenexx.com/v1/products/attributes/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
PUT https://api.revenexx.com/v1/products/attributes/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |
| code | string |  |  |
| config | object |  |  |
| entity_ref | string |  |  |
| entity_type | string |  |  |
| group_id | string |  |  |
| is_filterable | boolean |  |  |
| is_unique | boolean |  |  |
| labels | object |  |  |
| localizable | boolean |  |  |
| position | integer |  |  |
| scopable | boolean |  |  |
| type | string |  |  |
| usable_in_grid | boolean |  |  |
| validation | object |  |  |


```http request
POST https://api.revenexx.com/v1/products/batch
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| ids | array |  |  |
| skus | array |  |  |


```http request
GET https://api.revenexx.com/v1/products/categories
```


```http request
POST https://api.revenexx.com/v1/products/categories
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| code | string |  |  |
| labels | object |  |  |
| parent_id | string |  |  |
| path | string |  |  |
| position | integer |  |  |
| values | object |  |  |


```http request
DELETE https://api.revenexx.com/v1/products/categories/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
GET https://api.revenexx.com/v1/products/categories/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
PUT https://api.revenexx.com/v1/products/categories/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |
| code | string |  |  |
| labels | object |  |  |
| parent_id | string |  |  |
| path | string |  |  |
| position | integer |  |  |
| values | object |  |  |


```http request
GET https://api.revenexx.com/v1/products/families
```


```http request
POST https://api.revenexx.com/v1/products/families
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| code | string |  |  |
| image_attribute | string |  |  |
| label_attribute | string |  |  |
| labels | object |  |  |


```http request
DELETE https://api.revenexx.com/v1/products/families/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
GET https://api.revenexx.com/v1/products/families/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
PUT https://api.revenexx.com/v1/products/families/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |
| code | string |  |  |
| image_attribute | string |  |  |
| label_attribute | string |  |  |
| labels | object |  |  |


```http request
GET https://api.revenexx.com/v1/products/family_attributes
```


```http request
POST https://api.revenexx.com/v1/products/family_attributes
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| attribute_id | string |  |  |
| family_id | string |  |  |
| is_required | boolean |  |  |
| position | integer |  |  |
| required_channels | object |  |  |


```http request
DELETE https://api.revenexx.com/v1/products/family_attributes/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
GET https://api.revenexx.com/v1/products/family_attributes/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
PUT https://api.revenexx.com/v1/products/family_attributes/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |
| attribute_id | string |  |  |
| family_id | string |  |  |
| is_required | boolean |  |  |
| position | integer |  |  |
| required_channels | object |  |  |


```http request
GET https://api.revenexx.com/v1/products/family_variants
```


```http request
POST https://api.revenexx.com/v1/products/family_variants
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| axes | object |  |  |
| code | string |  |  |
| family_id | string |  |  |
| labels | object |  |  |


```http request
DELETE https://api.revenexx.com/v1/products/family_variants/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
GET https://api.revenexx.com/v1/products/family_variants/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
PUT https://api.revenexx.com/v1/products/family_variants/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |
| axes | object |  |  |
| code | string |  |  |
| family_id | string |  |  |
| labels | object |  |  |


```http request
GET https://api.revenexx.com/v1/products/measurement_families
```


```http request
POST https://api.revenexx.com/v1/products/measurement_families
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| code | string |  |  |
| labels | object |  |  |
| standard_unit | string |  |  |
| units | object |  |  |


```http request
DELETE https://api.revenexx.com/v1/products/measurement_families/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
GET https://api.revenexx.com/v1/products/measurement_families/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
PUT https://api.revenexx.com/v1/products/measurement_families/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |
| code | string |  |  |
| labels | object |  |  |
| standard_unit | string |  |  |
| units | object |  |  |


```http request
GET https://api.revenexx.com/v1/products/product_associations
```


```http request
POST https://api.revenexx.com/v1/products/product_associations
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| association_type_id | string |  |  |
| position | integer |  |  |
| product_id | string |  |  |
| quantity | number |  |  |
| target_product_id | string |  |  |


```http request
DELETE https://api.revenexx.com/v1/products/product_associations/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
GET https://api.revenexx.com/v1/products/product_associations/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
PUT https://api.revenexx.com/v1/products/product_associations/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |
| association_type_id | string |  |  |
| position | integer |  |  |
| product_id | string |  |  |
| quantity | number |  |  |
| target_product_id | string |  |  |


```http request
GET https://api.revenexx.com/v1/products/product_categories
```


```http request
POST https://api.revenexx.com/v1/products/product_categories
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| category_id | string |  |  |
| position | integer |  |  |
| product_id | string |  |  |


```http request
DELETE https://api.revenexx.com/v1/products/product_categories/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
GET https://api.revenexx.com/v1/products/product_categories/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
PUT https://api.revenexx.com/v1/products/product_categories/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |
| category_id | string |  |  |
| position | integer |  |  |
| product_id | string |  |  |


```http request
GET https://api.revenexx.com/v1/products/reference_entities
```


```http request
POST https://api.revenexx.com/v1/products/reference_entities
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| code | string |  |  |
| image | string |  |  |
| labels | object |  |  |


```http request
DELETE https://api.revenexx.com/v1/products/reference_entities/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
GET https://api.revenexx.com/v1/products/reference_entities/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
PUT https://api.revenexx.com/v1/products/reference_entities/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |
| code | string |  |  |
| image | string |  |  |
| labels | object |  |  |


```http request
GET https://api.revenexx.com/v1/products/reference_entity_records
```


```http request
POST https://api.revenexx.com/v1/products/reference_entity_records
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| attribute_values | object |  |  |
| code | string |  |  |
| labels | object |  |  |
| reference_entity_id | string |  |  |


```http request
DELETE https://api.revenexx.com/v1/products/reference_entity_records/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
GET https://api.revenexx.com/v1/products/reference_entity_records/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
PUT https://api.revenexx.com/v1/products/reference_entity_records/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |
| attribute_values | object |  |  |
| code | string |  |  |
| labels | object |  |  |
| reference_entity_id | string |  |  |


```http request
DELETE https://api.revenexx.com/v1/products/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
GET https://api.revenexx.com/v1/products/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |


```http request
PUT https://api.revenexx.com/v1/products/{id}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| id | string | **Required**  |  |
| attribute_values | object |  |  |
| completeness | object |  |  |
| deleted_at | string |  |  |
| enabled | boolean |  |  |
| family_id | string |  |  |
| family_variant_id | string |  |  |
| kind | string |  |  |
| parent_id | string |  |  |
| quantified_associations | object |  |  |
| sku | string |  |  |
| tax_class | string |  |  |

