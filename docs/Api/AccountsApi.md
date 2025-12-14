# \Kehet\ArtifactsMMO\\AccountsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createAccountAccountsCreatePost()**](AccountsApi.md#createAccountAccountsCreatePost) | **POST** /accounts/create | Create Account |
| [**forgotPasswordAccountsForgotPasswordPost()**](AccountsApi.md#forgotPasswordAccountsForgotPasswordPost) | **POST** /accounts/forgot_password | Forgot Password |
| [**getAccountAccountsAccountGet()**](AccountsApi.md#getAccountAccountsAccountGet) | **GET** /accounts/{account} | Get Account |
| [**getAccountAchievementsAccountsAccountAchievementsGet()**](AccountsApi.md#getAccountAchievementsAccountsAccountAchievementsGet) | **GET** /accounts/{account}/achievements | Get Account Achievements |
| [**getAccountCharactersAccountsAccountCharactersGet()**](AccountsApi.md#getAccountCharactersAccountsAccountCharactersGet) | **GET** /accounts/{account}/characters | Get Account Characters |
| [**resetPasswordAccountsResetPasswordPost()**](AccountsApi.md#resetPasswordAccountsResetPasswordPost) | **POST** /accounts/reset_password | Reset Password |


## `createAccountAccountsCreatePost()`

```php
createAccountAccountsCreatePost($add_account_schema): \\Kehet\ArtifactsMMO\\Model\ResponseSchema
```

Create Account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new \Kehet\ArtifactsMMO\\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$add_account_schema = new \\Kehet\ArtifactsMMO\\Model\AddAccountSchema(); // \\Kehet\ArtifactsMMO\\Model\AddAccountSchema

try {
    $result = $apiInstance->createAccountAccountsCreatePost($add_account_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->createAccountAccountsCreatePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **add_account_schema** | [**\\Kehet\ArtifactsMMO\\Model\AddAccountSchema**](../Model/AddAccountSchema.md)|  | |

### Return type

[**\\Kehet\ArtifactsMMO\\Model\ResponseSchema**](../Model/ResponseSchema.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `forgotPasswordAccountsForgotPasswordPost()`

```php
forgotPasswordAccountsForgotPasswordPost($password_reset_request_schema): \\Kehet\ArtifactsMMO\\Model\PasswordResetResponseSchema
```

Forgot Password

Request a password reset.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new \Kehet\ArtifactsMMO\\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$password_reset_request_schema = new \\Kehet\ArtifactsMMO\\Model\PasswordResetRequestSchema(); // \\Kehet\ArtifactsMMO\\Model\PasswordResetRequestSchema

try {
    $result = $apiInstance->forgotPasswordAccountsForgotPasswordPost($password_reset_request_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->forgotPasswordAccountsForgotPasswordPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **password_reset_request_schema** | [**\\Kehet\ArtifactsMMO\\Model\PasswordResetRequestSchema**](../Model/PasswordResetRequestSchema.md)|  | |

### Return type

[**\\Kehet\ArtifactsMMO\\Model\PasswordResetResponseSchema**](../Model/PasswordResetResponseSchema.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccountAccountsAccountGet()`

```php
getAccountAccountsAccountGet($account): \\Kehet\ArtifactsMMO\\Model\AccountDetailsSchema
```

Get Account

Retrieve the details of an account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new \Kehet\ArtifactsMMO\\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account = 'account_example'; // string | The name of the account.

try {
    $result = $apiInstance->getAccountAccountsAccountGet($account);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->getAccountAccountsAccountGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account** | **string**| The name of the account. | |

### Return type

[**\\Kehet\ArtifactsMMO\\Model\AccountDetailsSchema**](../Model/AccountDetailsSchema.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccountAchievementsAccountsAccountAchievementsGet()`

```php
getAccountAchievementsAccountsAccountAchievementsGet($account, $type, $completed, $page, $size): \\Kehet\ArtifactsMMO\\Model\DataPageAccountAchievementSchema
```

Get Account Achievements

Retrieve the achievements of a account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new \Kehet\ArtifactsMMO\\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account = 'account_example'; // string | The name of the account.
$type = new \\Kehet\ArtifactsMMO\\Model\\\KehetArtifactsMMO\ModelAchievementType(); // \\KehetArtifactsMMO\ModelAchievementType | Type of achievements.
$completed = True; // bool | Filter by completed achievements.
$page = 1; // int | Page number
$size = 50; // int | Page size

try {
    $result = $apiInstance->getAccountAchievementsAccountsAccountAchievementsGet($account, $type, $completed, $page, $size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->getAccountAchievementsAccountsAccountAchievementsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account** | **string**| The name of the account. | |
| **type** | [**\\KehetArtifactsMMO\ModelAchievementType**](../Model/.md)| Type of achievements. | [optional] |
| **completed** | **bool**| Filter by completed achievements. | [optional] |
| **page** | **int**| Page number | [optional] [default to 1] |
| **size** | **int**| Page size | [optional] [default to 50] |

### Return type

[**\\Kehet\ArtifactsMMO\\Model\DataPageAccountAchievementSchema**](../Model/DataPageAccountAchievementSchema.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccountCharactersAccountsAccountCharactersGet()`

```php
getAccountCharactersAccountsAccountCharactersGet($account): \\Kehet\ArtifactsMMO\\Model\CharactersListSchema
```

Get Account Characters

Account character lists.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new \Kehet\ArtifactsMMO\\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account = 'account_example'; // string | The name of the account.

try {
    $result = $apiInstance->getAccountCharactersAccountsAccountCharactersGet($account);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->getAccountCharactersAccountsAccountCharactersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account** | **string**| The name of the account. | |

### Return type

[**\\Kehet\ArtifactsMMO\\Model\CharactersListSchema**](../Model/CharactersListSchema.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `resetPasswordAccountsResetPasswordPost()`

```php
resetPasswordAccountsResetPasswordPost($password_reset_confirm_schema): \\Kehet\ArtifactsMMO\\Model\PasswordResetResponseSchema
```

Reset Password

Reset password with a token. Use /forgot_password to get a token by email.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new \Kehet\ArtifactsMMO\\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$password_reset_confirm_schema = new \\Kehet\ArtifactsMMO\\Model\PasswordResetConfirmSchema(); // \\Kehet\ArtifactsMMO\\Model\PasswordResetConfirmSchema

try {
    $result = $apiInstance->resetPasswordAccountsResetPasswordPost($password_reset_confirm_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->resetPasswordAccountsResetPasswordPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **password_reset_confirm_schema** | [**\\Kehet\ArtifactsMMO\\Model\PasswordResetConfirmSchema**](../Model/PasswordResetConfirmSchema.md)|  | |

### Return type

[**\\Kehet\ArtifactsMMO\\Model\PasswordResetResponseSchema**](../Model/PasswordResetResponseSchema.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
