# \Kehet\ArtifactsMMO\\MyAccountApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**changePasswordMyChangePasswordPost()**](MyAccountApi.md#changePasswordMyChangePasswordPost) | **POST** /my/change_password | Change Password |
| [**getAccountDetailsMyDetailsGet()**](MyAccountApi.md#getAccountDetailsMyDetailsGet) | **GET** /my/details | Get Account Details |
| [**getBankDetailsMyBankGet()**](MyAccountApi.md#getBankDetailsMyBankGet) | **GET** /my/bank | Get Bank Details |
| [**getBankItemsMyBankItemsGet()**](MyAccountApi.md#getBankItemsMyBankItemsGet) | **GET** /my/bank/items | Get Bank Items |
| [**getGeSellHistoryMyGrandexchangeHistoryGet()**](MyAccountApi.md#getGeSellHistoryMyGrandexchangeHistoryGet) | **GET** /my/grandexchange/history | Get Ge Sell History |
| [**getGeSellOrdersMyGrandexchangeOrdersGet()**](MyAccountApi.md#getGeSellOrdersMyGrandexchangeOrdersGet) | **GET** /my/grandexchange/orders | Get Ge Sell Orders |


## `changePasswordMyChangePasswordPost()`

```php
changePasswordMyChangePasswordPost($change_password): \\Kehet\ArtifactsMMO\\Model\ResponseSchema
```

Change Password

Change your account password. Changing the password reset the account token.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: JWTBearer
$config = \Kehet\ArtifactsMMO\\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new \Kehet\ArtifactsMMO\\Api\MyAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$change_password = new \\Kehet\ArtifactsMMO\\Model\ChangePassword(); // \\Kehet\ArtifactsMMO\\Model\ChangePassword

try {
    $result = $apiInstance->changePasswordMyChangePasswordPost($change_password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyAccountApi->changePasswordMyChangePasswordPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **change_password** | [**\\Kehet\ArtifactsMMO\\Model\ChangePassword**](../Model/ChangePassword.md)|  | |

### Return type

[**\\Kehet\ArtifactsMMO\\Model\ResponseSchema**](../Model/ResponseSchema.md)

### Authorization

[JWTBearer](../../README.md#JWTBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccountDetailsMyDetailsGet()`

```php
getAccountDetailsMyDetailsGet(): \\Kehet\ArtifactsMMO\\Model\MyAccountDetailsSchema
```

Get Account Details

Fetch account details.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: JWTBearer
$config = \Kehet\ArtifactsMMO\\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new \Kehet\ArtifactsMMO\\Api\MyAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAccountDetailsMyDetailsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyAccountApi->getAccountDetailsMyDetailsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\\Kehet\ArtifactsMMO\\Model\MyAccountDetailsSchema**](../Model/MyAccountDetailsSchema.md)

### Authorization

[JWTBearer](../../README.md#JWTBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBankDetailsMyBankGet()`

```php
getBankDetailsMyBankGet(): \\Kehet\ArtifactsMMO\\Model\BankResponseSchema
```

Get Bank Details

Fetch bank details.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: JWTBearer
$config = \Kehet\ArtifactsMMO\\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new \Kehet\ArtifactsMMO\\Api\MyAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getBankDetailsMyBankGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyAccountApi->getBankDetailsMyBankGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\\Kehet\ArtifactsMMO\\Model\BankResponseSchema**](../Model/BankResponseSchema.md)

### Authorization

[JWTBearer](../../README.md#JWTBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBankItemsMyBankItemsGet()`

```php
getBankItemsMyBankItemsGet($item_code, $page, $size): \\Kehet\ArtifactsMMO\\Model\DataPageSimpleItemSchema
```

Get Bank Items

Fetch all items in your bank.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: JWTBearer
$config = \Kehet\ArtifactsMMO\\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new \Kehet\ArtifactsMMO\\Api\MyAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_code = 'item_code_example'; // string | Item to search in your bank.
$page = 1; // int | Page number
$size = 50; // int | Page size

try {
    $result = $apiInstance->getBankItemsMyBankItemsGet($item_code, $page, $size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyAccountApi->getBankItemsMyBankItemsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_code** | **string**| Item to search in your bank. | [optional] |
| **page** | **int**| Page number | [optional] [default to 1] |
| **size** | **int**| Page size | [optional] [default to 50] |

### Return type

[**\\Kehet\ArtifactsMMO\\Model\DataPageSimpleItemSchema**](../Model/DataPageSimpleItemSchema.md)

### Authorization

[JWTBearer](../../README.md#JWTBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGeSellHistoryMyGrandexchangeHistoryGet()`

```php
getGeSellHistoryMyGrandexchangeHistoryGet($id, $code, $page, $size): \\Kehet\ArtifactsMMO\\Model\DataPageGeOrderHistorySchema
```

Get Ge Sell History

Fetch your sales history of the last 7 days.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: JWTBearer
$config = \Kehet\ArtifactsMMO\\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new \Kehet\ArtifactsMMO\\Api\MyAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Order ID to search in your history.
$code = 'code_example'; // string | Item to search in your history.
$page = 1; // int | Page number
$size = 50; // int | Page size

try {
    $result = $apiInstance->getGeSellHistoryMyGrandexchangeHistoryGet($id, $code, $page, $size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyAccountApi->getGeSellHistoryMyGrandexchangeHistoryGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Order ID to search in your history. | [optional] |
| **code** | **string**| Item to search in your history. | [optional] |
| **page** | **int**| Page number | [optional] [default to 1] |
| **size** | **int**| Page size | [optional] [default to 50] |

### Return type

[**\\Kehet\ArtifactsMMO\\Model\DataPageGeOrderHistorySchema**](../Model/DataPageGeOrderHistorySchema.md)

### Authorization

[JWTBearer](../../README.md#JWTBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGeSellOrdersMyGrandexchangeOrdersGet()`

```php
getGeSellOrdersMyGrandexchangeOrdersGet($code, $page, $size): \\Kehet\ArtifactsMMO\\Model\DataPageGEOrderSchema
```

Get Ge Sell Orders

Fetch your sell orders details.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: JWTBearer
$config = \Kehet\ArtifactsMMO\\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new \Kehet\ArtifactsMMO\\Api\MyAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = 'code_example'; // string | The code of the item.
$page = 1; // int | Page number
$size = 50; // int | Page size

try {
    $result = $apiInstance->getGeSellOrdersMyGrandexchangeOrdersGet($code, $page, $size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyAccountApi->getGeSellOrdersMyGrandexchangeOrdersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| The code of the item. | [optional] |
| **page** | **int**| Page number | [optional] [default to 1] |
| **size** | **int**| Page size | [optional] [default to 50] |

### Return type

[**\\Kehet\ArtifactsMMO\\Model\DataPageGEOrderSchema**](../Model/DataPageGEOrderSchema.md)

### Authorization

[JWTBearer](../../README.md#JWTBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
