# \Kehet\ArtifactsMMO\\CharactersApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCharacterCharactersCreatePost()**](CharactersApi.md#createCharacterCharactersCreatePost) | **POST** /characters/create | Create Character |
| [**deleteCharacterCharactersDeletePost()**](CharactersApi.md#deleteCharacterCharactersDeletePost) | **POST** /characters/delete | Delete Character |
| [**getActiveCharactersCharactersActiveGet()**](CharactersApi.md#getActiveCharactersCharactersActiveGet) | **GET** /characters/active | Get Active Characters |
| [**getCharacterCharactersNameGet()**](CharactersApi.md#getCharacterCharactersNameGet) | **GET** /characters/{name} | Get Character |


## `createCharacterCharactersCreatePost()`

```php
createCharacterCharactersCreatePost($add_character_schema): \\Kehet\ArtifactsMMO\\Model\CharacterResponseSchema
```

Create Character

Create new character on your account. You can create up to 5 characters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: JWTBearer
$config = \Kehet\ArtifactsMMO\\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new \Kehet\ArtifactsMMO\\Api\CharactersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$add_character_schema = new \\Kehet\ArtifactsMMO\\Model\AddCharacterSchema(); // \\Kehet\ArtifactsMMO\\Model\AddCharacterSchema

try {
    $result = $apiInstance->createCharacterCharactersCreatePost($add_character_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CharactersApi->createCharacterCharactersCreatePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **add_character_schema** | [**\\Kehet\ArtifactsMMO\\Model\AddCharacterSchema**](../Model/AddCharacterSchema.md)|  | |

### Return type

[**\\Kehet\ArtifactsMMO\\Model\CharacterResponseSchema**](../Model/CharacterResponseSchema.md)

### Authorization

[JWTBearer](../../README.md#JWTBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCharacterCharactersDeletePost()`

```php
deleteCharacterCharactersDeletePost($delete_character_schema): \\Kehet\ArtifactsMMO\\Model\CharacterResponseSchema
```

Delete Character

Delete character on your account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: JWTBearer
$config = \Kehet\ArtifactsMMO\\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new \Kehet\ArtifactsMMO\\Api\CharactersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$delete_character_schema = new \\Kehet\ArtifactsMMO\\Model\DeleteCharacterSchema(); // \\Kehet\ArtifactsMMO\\Model\DeleteCharacterSchema

try {
    $result = $apiInstance->deleteCharacterCharactersDeletePost($delete_character_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CharactersApi->deleteCharacterCharactersDeletePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **delete_character_schema** | [**\\Kehet\ArtifactsMMO\\Model\DeleteCharacterSchema**](../Model/DeleteCharacterSchema.md)|  | |

### Return type

[**\\Kehet\ArtifactsMMO\\Model\CharacterResponseSchema**](../Model/CharacterResponseSchema.md)

### Authorization

[JWTBearer](../../README.md#JWTBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getActiveCharactersCharactersActiveGet()`

```php
getActiveCharactersCharactersActiveGet($page, $size): \\Kehet\ArtifactsMMO\\Model\DataPageActiveCharacterSchema
```

Get Active Characters

Fetch active characters details.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new \Kehet\ArtifactsMMO\\Api\CharactersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$page = 1; // int | Page number
$size = 50; // int | Page size

try {
    $result = $apiInstance->getActiveCharactersCharactersActiveGet($page, $size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CharactersApi->getActiveCharactersCharactersActiveGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Page number | [optional] [default to 1] |
| **size** | **int**| Page size | [optional] [default to 50] |

### Return type

[**\\Kehet\ArtifactsMMO\\Model\DataPageActiveCharacterSchema**](../Model/DataPageActiveCharacterSchema.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCharacterCharactersNameGet()`

```php
getCharacterCharactersNameGet($name): \\Kehet\ArtifactsMMO\\Model\CharacterResponseSchema
```

Get Character

Retrieve the details of a character.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new \Kehet\ArtifactsMMO\\Api\CharactersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = 'name_example'; // string | The name of the character.

try {
    $result = $apiInstance->getCharacterCharactersNameGet($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CharactersApi->getCharacterCharactersNameGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| The name of the character. | |

### Return type

[**\\Kehet\ArtifactsMMO\\Model\CharacterResponseSchema**](../Model/CharacterResponseSchema.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
