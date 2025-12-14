# \Kehet\ArtifactsMMO\\AchievementsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAchievementAchievementsCodeGet()**](AchievementsApi.md#getAchievementAchievementsCodeGet) | **GET** /achievements/{code} | Get Achievement |
| [**getAllAchievementsAchievementsGet()**](AchievementsApi.md#getAllAchievementsAchievementsGet) | **GET** /achievements | Get All Achievements |


## `getAchievementAchievementsCodeGet()`

```php
getAchievementAchievementsCodeGet($code): \\Kehet\ArtifactsMMO\\Model\AchievementResponseSchema
```

Get Achievement

Retrieve the details of an achievement.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new \Kehet\ArtifactsMMO\\Api\AchievementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$code = 'code_example'; // string | The code of the achievement.

try {
    $result = $apiInstance->getAchievementAchievementsCodeGet($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AchievementsApi->getAchievementAchievementsCodeGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| The code of the achievement. | |

### Return type

[**\\Kehet\ArtifactsMMO\\Model\AchievementResponseSchema**](../Model/AchievementResponseSchema.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllAchievementsAchievementsGet()`

```php
getAllAchievementsAchievementsGet($type, $page, $size): \\Kehet\ArtifactsMMO\\Model\DataPageAchievementSchema
```

Get All Achievements

List of all achievements.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new \Kehet\ArtifactsMMO\\Api\AchievementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$type = new \\Kehet\ArtifactsMMO\\Model\\\KehetArtifactsMMO\ModelAchievementType(); // \\KehetArtifactsMMO\ModelAchievementType | Type of achievements.
$page = 1; // int | Page number
$size = 50; // int | Page size

try {
    $result = $apiInstance->getAllAchievementsAchievementsGet($type, $page, $size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AchievementsApi->getAllAchievementsAchievementsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **type** | [**\\KehetArtifactsMMO\ModelAchievementType**](../Model/.md)| Type of achievements. | [optional] |
| **page** | **int**| Page number | [optional] [default to 1] |
| **size** | **int**| Page size | [optional] [default to 50] |

### Return type

[**\\Kehet\ArtifactsMMO\\Model\DataPageAchievementSchema**](../Model/DataPageAchievementSchema.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
