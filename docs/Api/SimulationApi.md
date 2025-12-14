# \Kehet\ArtifactsMMO\\SimulationApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**fightSimulationSimulationFightSimulationPost()**](SimulationApi.md#fightSimulationSimulationFightSimulationPost) | **POST** /simulation/fight_simulation | Fight Simulation |


## `fightSimulationSimulationFightSimulationPost()`

```php
fightSimulationSimulationFightSimulationPost($combat_simulation_request_schema): \\Kehet\ArtifactsMMO\\Model\CombatSimulationResponseSchema
```

Fight Simulation

Simulate combat with fake characters against a monster multiple times. Member or founder account required.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: JWTBearer
$config = \Kehet\ArtifactsMMO\\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new \Kehet\ArtifactsMMO\\Api\SimulationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$combat_simulation_request_schema = new \\Kehet\ArtifactsMMO\\Model\CombatSimulationRequestSchema(); // \\Kehet\ArtifactsMMO\\Model\CombatSimulationRequestSchema

try {
    $result = $apiInstance->fightSimulationSimulationFightSimulationPost($combat_simulation_request_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SimulationApi->fightSimulationSimulationFightSimulationPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **combat_simulation_request_schema** | [**\\Kehet\ArtifactsMMO\\Model\CombatSimulationRequestSchema**](../Model/CombatSimulationRequestSchema.md)|  | |

### Return type

[**\\Kehet\ArtifactsMMO\\Model\CombatSimulationResponseSchema**](../Model/CombatSimulationResponseSchema.md)

### Authorization

[JWTBearer](../../README.md#JWTBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
