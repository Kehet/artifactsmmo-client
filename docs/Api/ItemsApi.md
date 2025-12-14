# \Kehet\ArtifactsMMO\\ItemsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAllItemsItemsGet()**](ItemsApi.md#getAllItemsItemsGet) | **GET** /items | Get All Items |
| [**getItemItemsCodeGet()**](ItemsApi.md#getItemItemsCodeGet) | **GET** /items/{code} | Get Item |


## `getAllItemsItemsGet()`

```php
getAllItemsItemsGet($name, $min_level, $max_level, $type, $craft_skill, $craft_material, $page, $size): \\Kehet\ArtifactsMMO\\Model\DataPageItemSchema
```

Get All Items

Fetch items details.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new \Kehet\ArtifactsMMO\\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = 'name_example'; // string | Name of the item.
$min_level = 56; // int | Minimum level.
$max_level = 56; // int | Maximum level.
$type = new \\Kehet\ArtifactsMMO\\Model\\\KehetArtifactsMMO\ModelItemType(); // \\KehetArtifactsMMO\ModelItemType | Type of items.
$craft_skill = new \\Kehet\ArtifactsMMO\\Model\\\KehetArtifactsMMO\ModelCraftSkill(); // \\KehetArtifactsMMO\ModelCraftSkill | Skill to craft items.
$craft_material = 'craft_material_example'; // string | Item code of items used as material for crafting.
$page = 1; // int | Page number
$size = 50; // int | Page size

try {
    $result = $apiInstance->getAllItemsItemsGet($name, $min_level, $max_level, $type, $craft_skill, $craft_material, $page, $size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->getAllItemsItemsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Name of the item. | [optional] |
| **min_level** | **int**| Minimum level. | [optional] |
| **max_level** | **int**| Maximum level. | [optional] |
| **type** | [**\\KehetArtifactsMMO\ModelItemType**](../Model/.md)| Type of items. | [optional] |
| **craft_skill** | [**\\KehetArtifactsMMO\ModelCraftSkill**](../Model/.md)| Skill to craft items. | [optional] |
| **craft_material** | **string**| Item code of items used as material for crafting. | [optional] |
| **page** | **int**| Page number | [optional] [default to 1] |
| **size** | **int**| Page size | [optional] [default to 50] |

### Return type

[**\\Kehet\ArtifactsMMO\\Model\DataPageItemSchema**](../Model/DataPageItemSchema.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getItemItemsCodeGet()`

```php
getItemItemsCodeGet($code): \\Kehet\ArtifactsMMO\\Model\ItemResponseSchema
```

Get Item

Retrieve the details of a item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new \Kehet\ArtifactsMMO\\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$code = 'code_example'; // string | The code of the item.

try {
    $result = $apiInstance->getItemItemsCodeGet($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->getItemItemsCodeGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| The code of the item. | |

### Return type

[**\\Kehet\ArtifactsMMO\\Model\ItemResponseSchema**](../Model/ItemResponseSchema.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
