# \Kehet\ArtifactsMMO\\MapsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAllMapsMapsGet()**](MapsApi.md#getAllMapsMapsGet) | **GET** /maps | Get All Maps |
| [**getLayerMapsMapsLayerGet()**](MapsApi.md#getLayerMapsMapsLayerGet) | **GET** /maps/{layer} | Get Layer Maps |
| [**getMapByIdMapsIdMapIdGet()**](MapsApi.md#getMapByIdMapsIdMapIdGet) | **GET** /maps/id/{map_id} | Get Map By Id |
| [**getMapByPositionMapsLayerXYGet()**](MapsApi.md#getMapByPositionMapsLayerXYGet) | **GET** /maps/{layer}/{x}/{y} | Get Map By Position |


## `getAllMapsMapsGet()`

```php
getAllMapsMapsGet($layer, $content_type, $content_code, $hide_blocked_maps, $page, $size): \\Kehet\ArtifactsMMO\\Model\DataPageMapSchema
```

Get All Maps

Fetch maps details.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new \Kehet\ArtifactsMMO\\Api\MapsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$layer = new \\Kehet\ArtifactsMMO\\Model\\\KehetArtifactsMMO\ModelMapLayer(); // \\KehetArtifactsMMO\ModelMapLayer | Filter maps by layer.
$content_type = new \\Kehet\ArtifactsMMO\\Model\\\KehetArtifactsMMO\ModelMapContentType(); // \\KehetArtifactsMMO\ModelMapContentType | Type of maps.
$content_code = 'content_code_example'; // string | Content code on the map.
$hide_blocked_maps = false; // bool | When true, excludes maps with access_type 'blocked' from the results.
$page = 1; // int | Page number
$size = 50; // int | Page size

try {
    $result = $apiInstance->getAllMapsMapsGet($layer, $content_type, $content_code, $hide_blocked_maps, $page, $size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MapsApi->getAllMapsMapsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **layer** | [**\\KehetArtifactsMMO\ModelMapLayer**](../Model/.md)| Filter maps by layer. | [optional] |
| **content_type** | [**\\KehetArtifactsMMO\ModelMapContentType**](../Model/.md)| Type of maps. | [optional] |
| **content_code** | **string**| Content code on the map. | [optional] |
| **hide_blocked_maps** | **bool**| When true, excludes maps with access_type &#39;blocked&#39; from the results. | [optional] [default to false] |
| **page** | **int**| Page number | [optional] [default to 1] |
| **size** | **int**| Page size | [optional] [default to 50] |

### Return type

[**\\Kehet\ArtifactsMMO\\Model\DataPageMapSchema**](../Model/DataPageMapSchema.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLayerMapsMapsLayerGet()`

```php
getLayerMapsMapsLayerGet($layer, $content_type, $content_code, $hide_blocked_maps, $page, $size): \\Kehet\ArtifactsMMO\\Model\DataPageMapSchema
```

Get Layer Maps

Fetch maps details.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new \Kehet\ArtifactsMMO\\Api\MapsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$layer = new \\Kehet\ArtifactsMMO\\Model\\\KehetArtifactsMMO\ModelMapLayer(); // \\KehetArtifactsMMO\ModelMapLayer | The layer of the map (interior, overworld, underground).
$content_type = new \\Kehet\ArtifactsMMO\\Model\\\KehetArtifactsMMO\ModelMapContentType(); // \\KehetArtifactsMMO\ModelMapContentType | Type of maps.
$content_code = 'content_code_example'; // string | Content code on the map.
$hide_blocked_maps = false; // bool | When true, excludes maps with access_type 'blocked' from the results.
$page = 1; // int | Page number
$size = 50; // int | Page size

try {
    $result = $apiInstance->getLayerMapsMapsLayerGet($layer, $content_type, $content_code, $hide_blocked_maps, $page, $size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MapsApi->getLayerMapsMapsLayerGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **layer** | [**\\KehetArtifactsMMO\ModelMapLayer**](../Model/.md)| The layer of the map (interior, overworld, underground). | |
| **content_type** | [**\\KehetArtifactsMMO\ModelMapContentType**](../Model/.md)| Type of maps. | [optional] |
| **content_code** | **string**| Content code on the map. | [optional] |
| **hide_blocked_maps** | **bool**| When true, excludes maps with access_type &#39;blocked&#39; from the results. | [optional] [default to false] |
| **page** | **int**| Page number | [optional] [default to 1] |
| **size** | **int**| Page size | [optional] [default to 50] |

### Return type

[**\\Kehet\ArtifactsMMO\\Model\DataPageMapSchema**](../Model/DataPageMapSchema.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMapByIdMapsIdMapIdGet()`

```php
getMapByIdMapsIdMapIdGet($map_id): \\Kehet\ArtifactsMMO\\Model\MapResponseSchema
```

Get Map By Id

Retrieve the details of a map by its unique ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new \Kehet\ArtifactsMMO\\Api\MapsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$map_id = 56; // int | The unique ID of the map.

try {
    $result = $apiInstance->getMapByIdMapsIdMapIdGet($map_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MapsApi->getMapByIdMapsIdMapIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **map_id** | **int**| The unique ID of the map. | |

### Return type

[**\\Kehet\ArtifactsMMO\\Model\MapResponseSchema**](../Model/MapResponseSchema.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMapByPositionMapsLayerXYGet()`

```php
getMapByPositionMapsLayerXYGet($layer, $x, $y): \\Kehet\ArtifactsMMO\\Model\MapResponseSchema
```

Get Map By Position

Retrieve the details of a map by layer and coordinates.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new \Kehet\ArtifactsMMO\\Api\MapsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$layer = new \\Kehet\ArtifactsMMO\\Model\\\KehetArtifactsMMO\ModelMapLayer(); // \\KehetArtifactsMMO\ModelMapLayer | The layer of the map (interior, overworld, underground).
$x = 56; // int | The position x of the map.
$y = 56; // int | The position y of the map.

try {
    $result = $apiInstance->getMapByPositionMapsLayerXYGet($layer, $x, $y);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MapsApi->getMapByPositionMapsLayerXYGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **layer** | [**\\KehetArtifactsMMO\ModelMapLayer**](../Model/.md)| The layer of the map (interior, overworld, underground). | |
| **x** | **int**| The position x of the map. | |
| **y** | **int**| The position y of the map. | |

### Return type

[**\\Kehet\ArtifactsMMO\\Model\MapResponseSchema**](../Model/MapResponseSchema.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
