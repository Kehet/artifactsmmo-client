# \Kehet\ArtifactsMMO\\GrandExchangeApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getGeSellHistoryGrandexchangeHistoryCodeGet()**](GrandExchangeApi.md#getGeSellHistoryGrandexchangeHistoryCodeGet) | **GET** /grandexchange/history/{code} | Get Ge Sell History |
| [**getGeSellOrderGrandexchangeOrdersIdGet()**](GrandExchangeApi.md#getGeSellOrderGrandexchangeOrdersIdGet) | **GET** /grandexchange/orders/{id} | Get Ge Sell Order |
| [**getGeSellOrdersGrandexchangeOrdersGet()**](GrandExchangeApi.md#getGeSellOrdersGrandexchangeOrdersGet) | **GET** /grandexchange/orders | Get Ge Sell Orders |


## `getGeSellHistoryGrandexchangeHistoryCodeGet()`

```php
getGeSellHistoryGrandexchangeHistoryCodeGet($code, $seller, $buyer, $page, $size): \\Kehet\ArtifactsMMO\\Model\DataPageGeOrderHistorySchema
```

Get Ge Sell History

Fetch the sales history of the item for the last 7 days.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new \Kehet\ArtifactsMMO\\Api\GrandExchangeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$code = 'code_example'; // string | The code of the item.
$seller = 'seller_example'; // string | The seller (account name) of the item.
$buyer = 'buyer_example'; // string | The buyer (account name) of the item.
$page = 1; // int | Page number
$size = 50; // int | Page size

try {
    $result = $apiInstance->getGeSellHistoryGrandexchangeHistoryCodeGet($code, $seller, $buyer, $page, $size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GrandExchangeApi->getGeSellHistoryGrandexchangeHistoryCodeGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| The code of the item. | |
| **seller** | **string**| The seller (account name) of the item. | [optional] |
| **buyer** | **string**| The buyer (account name) of the item. | [optional] |
| **page** | **int**| Page number | [optional] [default to 1] |
| **size** | **int**| Page size | [optional] [default to 50] |

### Return type

[**\\Kehet\ArtifactsMMO\\Model\DataPageGeOrderHistorySchema**](../Model/DataPageGeOrderHistorySchema.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGeSellOrderGrandexchangeOrdersIdGet()`

```php
getGeSellOrderGrandexchangeOrdersIdGet($id): \\Kehet\ArtifactsMMO\\Model\GEOrderResponseSchema
```

Get Ge Sell Order

Retrieve the sell order of a item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new \Kehet\ArtifactsMMO\\Api\GrandExchangeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the order.

try {
    $result = $apiInstance->getGeSellOrderGrandexchangeOrdersIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GrandExchangeApi->getGeSellOrderGrandexchangeOrdersIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The id of the order. | |

### Return type

[**\\Kehet\ArtifactsMMO\\Model\GEOrderResponseSchema**](../Model/GEOrderResponseSchema.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGeSellOrdersGrandexchangeOrdersGet()`

```php
getGeSellOrdersGrandexchangeOrdersGet($code, $seller, $page, $size): \\Kehet\ArtifactsMMO\\Model\DataPageGEOrderSchema
```

Get Ge Sell Orders

Fetch all sell orders.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new \Kehet\ArtifactsMMO\\Api\GrandExchangeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$code = 'code_example'; // string | The code of the item.
$seller = 'seller_example'; // string | The seller (account name) of the item.
$page = 1; // int | Page number
$size = 50; // int | Page size

try {
    $result = $apiInstance->getGeSellOrdersGrandexchangeOrdersGet($code, $seller, $page, $size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GrandExchangeApi->getGeSellOrdersGrandexchangeOrdersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| The code of the item. | [optional] |
| **seller** | **string**| The seller (account name) of the item. | [optional] |
| **page** | **int**| Page number | [optional] [default to 1] |
| **size** | **int**| Page size | [optional] [default to 50] |

### Return type

[**\\Kehet\ArtifactsMMO\\Model\DataPageGEOrderSchema**](../Model/DataPageGEOrderSchema.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
