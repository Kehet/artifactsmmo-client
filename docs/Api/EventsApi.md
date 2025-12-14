# \Kehet\ArtifactsMMO\\EventsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAllActiveEventsEventsActiveGet()**](EventsApi.md#getAllActiveEventsEventsActiveGet) | **GET** /events/active | Get All Active Events |
| [**getAllEventsEventsGet()**](EventsApi.md#getAllEventsEventsGet) | **GET** /events | Get All Events |
| [**spawnEventEventsSpawnPost()**](EventsApi.md#spawnEventEventsSpawnPost) | **POST** /events/spawn | Spawn Event |


## `getAllActiveEventsEventsActiveGet()`

```php
getAllActiveEventsEventsActiveGet($page, $size): \\Kehet\ArtifactsMMO\\Model\DataPageActiveEventSchema
```

Get All Active Events

Fetch active events details.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new \Kehet\ArtifactsMMO\\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$page = 1; // int | Page number
$size = 50; // int | Page size

try {
    $result = $apiInstance->getAllActiveEventsEventsActiveGet($page, $size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getAllActiveEventsEventsActiveGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Page number | [optional] [default to 1] |
| **size** | **int**| Page size | [optional] [default to 50] |

### Return type

[**\\Kehet\ArtifactsMMO\\Model\DataPageActiveEventSchema**](../Model/DataPageActiveEventSchema.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllEventsEventsGet()`

```php
getAllEventsEventsGet($type, $page, $size): \\Kehet\ArtifactsMMO\\Model\DataPageEventSchema
```

Get All Events

Fetch events details.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new \Kehet\ArtifactsMMO\\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$type = new \\Kehet\ArtifactsMMO\\Model\\\KehetArtifactsMMO\ModelMapContentType(); // \\KehetArtifactsMMO\ModelMapContentType | Type of events.
$page = 1; // int | Page number
$size = 50; // int | Page size

try {
    $result = $apiInstance->getAllEventsEventsGet($type, $page, $size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getAllEventsEventsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **type** | [**\\KehetArtifactsMMO\ModelMapContentType**](../Model/.md)| Type of events. | [optional] |
| **page** | **int**| Page number | [optional] [default to 1] |
| **size** | **int**| Page size | [optional] [default to 50] |

### Return type

[**\\Kehet\ArtifactsMMO\\Model\DataPageEventSchema**](../Model/DataPageEventSchema.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `spawnEventEventsSpawnPost()`

```php
spawnEventEventsSpawnPost($spawn_event_request): \\Kehet\ArtifactsMMO\\Model\ActiveEventResponseSchema
```

Spawn Event

Spawn a specific event by code consuming 1 event token.  Rules:   - Maximum active events defined by utils.config.max_active_events().   - Event must not already be active.   - Member or founder account required.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: JWTBearer
$config = \Kehet\ArtifactsMMO\\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new \Kehet\ArtifactsMMO\\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$spawn_event_request = new \\Kehet\ArtifactsMMO\\Model\SpawnEventRequest(); // \\Kehet\ArtifactsMMO\\Model\SpawnEventRequest

try {
    $result = $apiInstance->spawnEventEventsSpawnPost($spawn_event_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->spawnEventEventsSpawnPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **spawn_event_request** | [**\\Kehet\ArtifactsMMO\\Model\SpawnEventRequest**](../Model/SpawnEventRequest.md)|  | |

### Return type

[**\\Kehet\ArtifactsMMO\\Model\ActiveEventResponseSchema**](../Model/ActiveEventResponseSchema.md)

### Authorization

[JWTBearer](../../README.md#JWTBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
