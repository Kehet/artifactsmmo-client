# \Kehet\ArtifactsMMO\\MyCharactersApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**actionAcceptNewTaskMyNameActionTaskNewPost()**](MyCharactersApi.md#actionAcceptNewTaskMyNameActionTaskNewPost) | **POST** /my/{name}/action/task/new | Action Accept New Task |
| [**actionBuyBankExpansionMyNameActionBankBuyExpansionPost()**](MyCharactersApi.md#actionBuyBankExpansionMyNameActionBankBuyExpansionPost) | **POST** /my/{name}/action/bank/buy_expansion | Action Buy Bank Expansion |
| [**actionChangeSkinMyNameActionChangeSkinPost()**](MyCharactersApi.md#actionChangeSkinMyNameActionChangeSkinPost) | **POST** /my/{name}/action/change_skin | Action Change Skin |
| [**actionCompleteTaskMyNameActionTaskCompletePost()**](MyCharactersApi.md#actionCompleteTaskMyNameActionTaskCompletePost) | **POST** /my/{name}/action/task/complete | Action Complete Task |
| [**actionCraftingMyNameActionCraftingPost()**](MyCharactersApi.md#actionCraftingMyNameActionCraftingPost) | **POST** /my/{name}/action/crafting | Action Crafting |
| [**actionDeleteItemMyNameActionDeletePost()**](MyCharactersApi.md#actionDeleteItemMyNameActionDeletePost) | **POST** /my/{name}/action/delete | Action Delete Item |
| [**actionDepositBankGoldMyNameActionBankDepositGoldPost()**](MyCharactersApi.md#actionDepositBankGoldMyNameActionBankDepositGoldPost) | **POST** /my/{name}/action/bank/deposit/gold | Action Deposit Bank Gold |
| [**actionDepositBankItemMyNameActionBankDepositItemPost()**](MyCharactersApi.md#actionDepositBankItemMyNameActionBankDepositItemPost) | **POST** /my/{name}/action/bank/deposit/item | Action Deposit Bank Item |
| [**actionEquipItemMyNameActionEquipPost()**](MyCharactersApi.md#actionEquipItemMyNameActionEquipPost) | **POST** /my/{name}/action/equip | Action Equip Item |
| [**actionFightMyNameActionFightPost()**](MyCharactersApi.md#actionFightMyNameActionFightPost) | **POST** /my/{name}/action/fight | Action Fight |
| [**actionGatheringMyNameActionGatheringPost()**](MyCharactersApi.md#actionGatheringMyNameActionGatheringPost) | **POST** /my/{name}/action/gathering | Action Gathering |
| [**actionGeBuyItemMyNameActionGrandexchangeBuyPost()**](MyCharactersApi.md#actionGeBuyItemMyNameActionGrandexchangeBuyPost) | **POST** /my/{name}/action/grandexchange/buy | Action Ge Buy Item |
| [**actionGeCancelSellOrderMyNameActionGrandexchangeCancelPost()**](MyCharactersApi.md#actionGeCancelSellOrderMyNameActionGrandexchangeCancelPost) | **POST** /my/{name}/action/grandexchange/cancel | Action Ge Cancel Sell Order |
| [**actionGeCreateSellOrderMyNameActionGrandexchangeSellPost()**](MyCharactersApi.md#actionGeCreateSellOrderMyNameActionGrandexchangeSellPost) | **POST** /my/{name}/action/grandexchange/sell | Action Ge Create Sell Order |
| [**actionGiveGoldMyNameActionGiveGoldPost()**](MyCharactersApi.md#actionGiveGoldMyNameActionGiveGoldPost) | **POST** /my/{name}/action/give/gold | Action Give Gold |
| [**actionGiveItemsMyNameActionGiveItemPost()**](MyCharactersApi.md#actionGiveItemsMyNameActionGiveItemPost) | **POST** /my/{name}/action/give/item | Action Give Items |
| [**actionMoveMyNameActionMovePost()**](MyCharactersApi.md#actionMoveMyNameActionMovePost) | **POST** /my/{name}/action/move | Action Move |
| [**actionNpcBuyItemMyNameActionNpcBuyPost()**](MyCharactersApi.md#actionNpcBuyItemMyNameActionNpcBuyPost) | **POST** /my/{name}/action/npc/buy | Action Npc Buy Item |
| [**actionNpcSellItemMyNameActionNpcSellPost()**](MyCharactersApi.md#actionNpcSellItemMyNameActionNpcSellPost) | **POST** /my/{name}/action/npc/sell | Action Npc Sell Item |
| [**actionRecyclingMyNameActionRecyclingPost()**](MyCharactersApi.md#actionRecyclingMyNameActionRecyclingPost) | **POST** /my/{name}/action/recycling | Action Recycling |
| [**actionRestMyNameActionRestPost()**](MyCharactersApi.md#actionRestMyNameActionRestPost) | **POST** /my/{name}/action/rest | Action Rest |
| [**actionTaskCancelMyNameActionTaskCancelPost()**](MyCharactersApi.md#actionTaskCancelMyNameActionTaskCancelPost) | **POST** /my/{name}/action/task/cancel | Action Task Cancel |
| [**actionTaskExchangeMyNameActionTaskExchangePost()**](MyCharactersApi.md#actionTaskExchangeMyNameActionTaskExchangePost) | **POST** /my/{name}/action/task/exchange | Action Task Exchange |
| [**actionTaskTradeMyNameActionTaskTradePost()**](MyCharactersApi.md#actionTaskTradeMyNameActionTaskTradePost) | **POST** /my/{name}/action/task/trade | Action Task Trade |
| [**actionTransitionMyNameActionTransitionPost()**](MyCharactersApi.md#actionTransitionMyNameActionTransitionPost) | **POST** /my/{name}/action/transition | Action Transition |
| [**actionUnequipItemMyNameActionUnequipPost()**](MyCharactersApi.md#actionUnequipItemMyNameActionUnequipPost) | **POST** /my/{name}/action/unequip | Action Unequip Item |
| [**actionUseItemMyNameActionUsePost()**](MyCharactersApi.md#actionUseItemMyNameActionUsePost) | **POST** /my/{name}/action/use | Action Use Item |
| [**actionWithdrawBankGoldMyNameActionBankWithdrawGoldPost()**](MyCharactersApi.md#actionWithdrawBankGoldMyNameActionBankWithdrawGoldPost) | **POST** /my/{name}/action/bank/withdraw/gold | Action Withdraw Bank Gold |
| [**actionWithdrawBankItemMyNameActionBankWithdrawItemPost()**](MyCharactersApi.md#actionWithdrawBankItemMyNameActionBankWithdrawItemPost) | **POST** /my/{name}/action/bank/withdraw/item | Action Withdraw Bank Item |
| [**getAllCharactersLogsMyLogsGet()**](MyCharactersApi.md#getAllCharactersLogsMyLogsGet) | **GET** /my/logs | Get All Characters Logs |
| [**getCharacterLogsMyLogsNameGet()**](MyCharactersApi.md#getCharacterLogsMyLogsNameGet) | **GET** /my/logs/{name} | Get Character Logs |
| [**getMyCharactersMyCharactersGet()**](MyCharactersApi.md#getMyCharactersMyCharactersGet) | **GET** /my/characters | Get My Characters |


## `actionAcceptNewTaskMyNameActionTaskNewPost()`

```php
actionAcceptNewTaskMyNameActionTaskNewPost($name): \\Kehet\ArtifactsMMO\\Model\TaskResponseSchema
```

Action Accept New Task

Accepting a new task.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: JWTBearer
$config = \Kehet\ArtifactsMMO\\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new \Kehet\ArtifactsMMO\\Api\MyCharactersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | Name of your character.

try {
    $result = $apiInstance->actionAcceptNewTaskMyNameActionTaskNewPost($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyCharactersApi->actionAcceptNewTaskMyNameActionTaskNewPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Name of your character. | |

### Return type

[**\\Kehet\ArtifactsMMO\\Model\TaskResponseSchema**](../Model/TaskResponseSchema.md)

### Authorization

[JWTBearer](../../README.md#JWTBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `actionBuyBankExpansionMyNameActionBankBuyExpansionPost()`

```php
actionBuyBankExpansionMyNameActionBankBuyExpansionPost($name): \\Kehet\ArtifactsMMO\\Model\BankExtensionTransactionResponseSchema
```

Action Buy Bank Expansion

Buy a 20 slots bank expansion.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: JWTBearer
$config = \Kehet\ArtifactsMMO\\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new \Kehet\ArtifactsMMO\\Api\MyCharactersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | Name of your character.

try {
    $result = $apiInstance->actionBuyBankExpansionMyNameActionBankBuyExpansionPost($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyCharactersApi->actionBuyBankExpansionMyNameActionBankBuyExpansionPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Name of your character. | |

### Return type

[**\\Kehet\ArtifactsMMO\\Model\BankExtensionTransactionResponseSchema**](../Model/BankExtensionTransactionResponseSchema.md)

### Authorization

[JWTBearer](../../README.md#JWTBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `actionChangeSkinMyNameActionChangeSkinPost()`

```php
actionChangeSkinMyNameActionChangeSkinPost($name, $change_skin_character_schema): \\Kehet\ArtifactsMMO\\Model\ChangeSkinResponseSchema
```

Action Change Skin

Change the skin of your character.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: JWTBearer
$config = \Kehet\ArtifactsMMO\\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new \Kehet\ArtifactsMMO\\Api\MyCharactersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | Name of your character.
$change_skin_character_schema = new \\Kehet\ArtifactsMMO\\Model\ChangeSkinCharacterSchema(); // \\Kehet\ArtifactsMMO\\Model\ChangeSkinCharacterSchema

try {
    $result = $apiInstance->actionChangeSkinMyNameActionChangeSkinPost($name, $change_skin_character_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyCharactersApi->actionChangeSkinMyNameActionChangeSkinPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Name of your character. | |
| **change_skin_character_schema** | [**\\Kehet\ArtifactsMMO\\Model\ChangeSkinCharacterSchema**](../Model/ChangeSkinCharacterSchema.md)|  | |

### Return type

[**\\Kehet\ArtifactsMMO\\Model\ChangeSkinResponseSchema**](../Model/ChangeSkinResponseSchema.md)

### Authorization

[JWTBearer](../../README.md#JWTBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `actionCompleteTaskMyNameActionTaskCompletePost()`

```php
actionCompleteTaskMyNameActionTaskCompletePost($name): \\Kehet\ArtifactsMMO\\Model\RewardDataResponseSchema
```

Action Complete Task

Complete a task.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: JWTBearer
$config = \Kehet\ArtifactsMMO\\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new \Kehet\ArtifactsMMO\\Api\MyCharactersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | Name of your character.

try {
    $result = $apiInstance->actionCompleteTaskMyNameActionTaskCompletePost($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyCharactersApi->actionCompleteTaskMyNameActionTaskCompletePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Name of your character. | |

### Return type

[**\\Kehet\ArtifactsMMO\\Model\RewardDataResponseSchema**](../Model/RewardDataResponseSchema.md)

### Authorization

[JWTBearer](../../README.md#JWTBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `actionCraftingMyNameActionCraftingPost()`

```php
actionCraftingMyNameActionCraftingPost($name, $crafting_schema): \\Kehet\ArtifactsMMO\\Model\SkillResponseSchema
```

Action Crafting

Craft an item. The character must be on a map with a workshop.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: JWTBearer
$config = \Kehet\ArtifactsMMO\\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new \Kehet\ArtifactsMMO\\Api\MyCharactersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | Name of your character.
$crafting_schema = new \\Kehet\ArtifactsMMO\\Model\CraftingSchema(); // \\Kehet\ArtifactsMMO\\Model\CraftingSchema

try {
    $result = $apiInstance->actionCraftingMyNameActionCraftingPost($name, $crafting_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyCharactersApi->actionCraftingMyNameActionCraftingPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Name of your character. | |
| **crafting_schema** | [**\\Kehet\ArtifactsMMO\\Model\CraftingSchema**](../Model/CraftingSchema.md)|  | |

### Return type

[**\\Kehet\ArtifactsMMO\\Model\SkillResponseSchema**](../Model/SkillResponseSchema.md)

### Authorization

[JWTBearer](../../README.md#JWTBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `actionDeleteItemMyNameActionDeletePost()`

```php
actionDeleteItemMyNameActionDeletePost($name, $simple_item_schema): \\Kehet\ArtifactsMMO\\Model\DeleteItemResponseSchema
```

Action Delete Item

Delete an item from your character's inventory.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: JWTBearer
$config = \Kehet\ArtifactsMMO\\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new \Kehet\ArtifactsMMO\\Api\MyCharactersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | Name of your character.
$simple_item_schema = new \\Kehet\ArtifactsMMO\\Model\SimpleItemSchema(); // \\Kehet\ArtifactsMMO\\Model\SimpleItemSchema

try {
    $result = $apiInstance->actionDeleteItemMyNameActionDeletePost($name, $simple_item_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyCharactersApi->actionDeleteItemMyNameActionDeletePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Name of your character. | |
| **simple_item_schema** | [**\\Kehet\ArtifactsMMO\\Model\SimpleItemSchema**](../Model/SimpleItemSchema.md)|  | |

### Return type

[**\\Kehet\ArtifactsMMO\\Model\DeleteItemResponseSchema**](../Model/DeleteItemResponseSchema.md)

### Authorization

[JWTBearer](../../README.md#JWTBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `actionDepositBankGoldMyNameActionBankDepositGoldPost()`

```php
actionDepositBankGoldMyNameActionBankDepositGoldPost($name, $deposit_withdraw_gold_schema): \\Kehet\ArtifactsMMO\\Model\BankGoldTransactionResponseSchema
```

Action Deposit Bank Gold

Deposit gold in a bank on the character's map.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: JWTBearer
$config = \Kehet\ArtifactsMMO\\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new \Kehet\ArtifactsMMO\\Api\MyCharactersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | Name of your character.
$deposit_withdraw_gold_schema = new \\Kehet\ArtifactsMMO\\Model\DepositWithdrawGoldSchema(); // \\Kehet\ArtifactsMMO\\Model\DepositWithdrawGoldSchema

try {
    $result = $apiInstance->actionDepositBankGoldMyNameActionBankDepositGoldPost($name, $deposit_withdraw_gold_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyCharactersApi->actionDepositBankGoldMyNameActionBankDepositGoldPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Name of your character. | |
| **deposit_withdraw_gold_schema** | [**\\Kehet\ArtifactsMMO\\Model\DepositWithdrawGoldSchema**](../Model/DepositWithdrawGoldSchema.md)|  | |

### Return type

[**\\Kehet\ArtifactsMMO\\Model\BankGoldTransactionResponseSchema**](../Model/BankGoldTransactionResponseSchema.md)

### Authorization

[JWTBearer](../../README.md#JWTBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `actionDepositBankItemMyNameActionBankDepositItemPost()`

```php
actionDepositBankItemMyNameActionBankDepositItemPost($name, $simple_item_schema): \\Kehet\ArtifactsMMO\\Model\BankItemTransactionResponseSchema
```

Action Deposit Bank Item

Deposit multiple items in a bank on the character's map. The cooldown will be 3 seconds multiplied by the number of different items deposited.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: JWTBearer
$config = \Kehet\ArtifactsMMO\\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new \Kehet\ArtifactsMMO\\Api\MyCharactersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | Name of your character.
$simple_item_schema = array(new \\Kehet\ArtifactsMMO\\Model\SimpleItemSchema()); // \\Kehet\ArtifactsMMO\\Model\SimpleItemSchema[]

try {
    $result = $apiInstance->actionDepositBankItemMyNameActionBankDepositItemPost($name, $simple_item_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyCharactersApi->actionDepositBankItemMyNameActionBankDepositItemPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Name of your character. | |
| **simple_item_schema** | [**\\Kehet\ArtifactsMMO\\Model\SimpleItemSchema[]**](../Model/SimpleItemSchema.md)|  | |

### Return type

[**\\Kehet\ArtifactsMMO\\Model\BankItemTransactionResponseSchema**](../Model/BankItemTransactionResponseSchema.md)

### Authorization

[JWTBearer](../../README.md#JWTBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `actionEquipItemMyNameActionEquipPost()`

```php
actionEquipItemMyNameActionEquipPost($name, $equip_schema): \\Kehet\ArtifactsMMO\\Model\EquipmentResponseSchema
```

Action Equip Item

Equip an item on your character.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: JWTBearer
$config = \Kehet\ArtifactsMMO\\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new \Kehet\ArtifactsMMO\\Api\MyCharactersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | Name of your character.
$equip_schema = new \\Kehet\ArtifactsMMO\\Model\EquipSchema(); // \\Kehet\ArtifactsMMO\\Model\EquipSchema

try {
    $result = $apiInstance->actionEquipItemMyNameActionEquipPost($name, $equip_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyCharactersApi->actionEquipItemMyNameActionEquipPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Name of your character. | |
| **equip_schema** | [**\\Kehet\ArtifactsMMO\\Model\EquipSchema**](../Model/EquipSchema.md)|  | |

### Return type

[**\\Kehet\ArtifactsMMO\\Model\EquipmentResponseSchema**](../Model/EquipmentResponseSchema.md)

### Authorization

[JWTBearer](../../README.md#JWTBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `actionFightMyNameActionFightPost()`

```php
actionFightMyNameActionFightPost($name, $fight_request_schema): \\Kehet\ArtifactsMMO\\Model\CharacterFightResponseSchema
```

Action Fight

Start a fight against a monster on the character's map. Add participants for multi-character fights (up to 3 characters, only for boss).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: JWTBearer
$config = \Kehet\ArtifactsMMO\\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new \Kehet\ArtifactsMMO\\Api\MyCharactersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | Name of your character.
$fight_request_schema = new \\Kehet\ArtifactsMMO\\Model\FightRequestSchema(); // \\Kehet\ArtifactsMMO\\Model\FightRequestSchema

try {
    $result = $apiInstance->actionFightMyNameActionFightPost($name, $fight_request_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyCharactersApi->actionFightMyNameActionFightPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Name of your character. | |
| **fight_request_schema** | [**\\Kehet\ArtifactsMMO\\Model\FightRequestSchema**](../Model/FightRequestSchema.md)|  | [optional] |

### Return type

[**\\Kehet\ArtifactsMMO\\Model\CharacterFightResponseSchema**](../Model/CharacterFightResponseSchema.md)

### Authorization

[JWTBearer](../../README.md#JWTBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `actionGatheringMyNameActionGatheringPost()`

```php
actionGatheringMyNameActionGatheringPost($name): \\Kehet\ArtifactsMMO\\Model\SkillResponseSchema
```

Action Gathering

Harvest a resource on the character's map.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: JWTBearer
$config = \Kehet\ArtifactsMMO\\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new \Kehet\ArtifactsMMO\\Api\MyCharactersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | Name of your character.

try {
    $result = $apiInstance->actionGatheringMyNameActionGatheringPost($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyCharactersApi->actionGatheringMyNameActionGatheringPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Name of your character. | |

### Return type

[**\\Kehet\ArtifactsMMO\\Model\SkillResponseSchema**](../Model/SkillResponseSchema.md)

### Authorization

[JWTBearer](../../README.md#JWTBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `actionGeBuyItemMyNameActionGrandexchangeBuyPost()`

```php
actionGeBuyItemMyNameActionGrandexchangeBuyPost($name, $ge_buy_order_schema): \\Kehet\ArtifactsMMO\\Model\GETransactionResponseSchema
```

Action Ge Buy Item

Buy an item at the Grand Exchange on the character's map.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: JWTBearer
$config = \Kehet\ArtifactsMMO\\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new \Kehet\ArtifactsMMO\\Api\MyCharactersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | Name of your character.
$ge_buy_order_schema = new \\Kehet\ArtifactsMMO\\Model\GEBuyOrderSchema(); // \\Kehet\ArtifactsMMO\\Model\GEBuyOrderSchema

try {
    $result = $apiInstance->actionGeBuyItemMyNameActionGrandexchangeBuyPost($name, $ge_buy_order_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyCharactersApi->actionGeBuyItemMyNameActionGrandexchangeBuyPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Name of your character. | |
| **ge_buy_order_schema** | [**\\Kehet\ArtifactsMMO\\Model\GEBuyOrderSchema**](../Model/GEBuyOrderSchema.md)|  | |

### Return type

[**\\Kehet\ArtifactsMMO\\Model\GETransactionResponseSchema**](../Model/GETransactionResponseSchema.md)

### Authorization

[JWTBearer](../../README.md#JWTBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `actionGeCancelSellOrderMyNameActionGrandexchangeCancelPost()`

```php
actionGeCancelSellOrderMyNameActionGrandexchangeCancelPost($name, $ge_cancel_order_schema): \\Kehet\ArtifactsMMO\\Model\GETransactionResponseSchema
```

Action Ge Cancel Sell Order

Cancel a sell order at the Grand Exchange on the character's map.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: JWTBearer
$config = \Kehet\ArtifactsMMO\\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new \Kehet\ArtifactsMMO\\Api\MyCharactersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | Name of your character.
$ge_cancel_order_schema = new \\Kehet\ArtifactsMMO\\Model\GECancelOrderSchema(); // \\Kehet\ArtifactsMMO\\Model\GECancelOrderSchema

try {
    $result = $apiInstance->actionGeCancelSellOrderMyNameActionGrandexchangeCancelPost($name, $ge_cancel_order_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyCharactersApi->actionGeCancelSellOrderMyNameActionGrandexchangeCancelPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Name of your character. | |
| **ge_cancel_order_schema** | [**\\Kehet\ArtifactsMMO\\Model\GECancelOrderSchema**](../Model/GECancelOrderSchema.md)|  | |

### Return type

[**\\Kehet\ArtifactsMMO\\Model\GETransactionResponseSchema**](../Model/GETransactionResponseSchema.md)

### Authorization

[JWTBearer](../../README.md#JWTBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `actionGeCreateSellOrderMyNameActionGrandexchangeSellPost()`

```php
actionGeCreateSellOrderMyNameActionGrandexchangeSellPost($name, $ge_order_creationr_schema): \\Kehet\ArtifactsMMO\\Model\GECreateOrderTransactionResponseSchema
```

Action Ge Create Sell Order

Create a sell order at the Grand Exchange on the character's map.  Please note there is a 3% listing tax, charged at the time of posting, on the total price.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: JWTBearer
$config = \Kehet\ArtifactsMMO\\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new \Kehet\ArtifactsMMO\\Api\MyCharactersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | Name of your character.
$ge_order_creationr_schema = new \\Kehet\ArtifactsMMO\\Model\GEOrderCreationrSchema(); // \\Kehet\ArtifactsMMO\\Model\GEOrderCreationrSchema

try {
    $result = $apiInstance->actionGeCreateSellOrderMyNameActionGrandexchangeSellPost($name, $ge_order_creationr_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyCharactersApi->actionGeCreateSellOrderMyNameActionGrandexchangeSellPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Name of your character. | |
| **ge_order_creationr_schema** | [**\\Kehet\ArtifactsMMO\\Model\GEOrderCreationrSchema**](../Model/GEOrderCreationrSchema.md)|  | |

### Return type

[**\\Kehet\ArtifactsMMO\\Model\GECreateOrderTransactionResponseSchema**](../Model/GECreateOrderTransactionResponseSchema.md)

### Authorization

[JWTBearer](../../README.md#JWTBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `actionGiveGoldMyNameActionGiveGoldPost()`

```php
actionGiveGoldMyNameActionGiveGoldPost($name, $give_gold_schema): \\Kehet\ArtifactsMMO\\Model\GiveGoldResponseSchema
```

Action Give Gold

Give gold to another character in your account on the same map.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: JWTBearer
$config = \Kehet\ArtifactsMMO\\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new \Kehet\ArtifactsMMO\\Api\MyCharactersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | Name of your character.
$give_gold_schema = new \\Kehet\ArtifactsMMO\\Model\GiveGoldSchema(); // \\Kehet\ArtifactsMMO\\Model\GiveGoldSchema

try {
    $result = $apiInstance->actionGiveGoldMyNameActionGiveGoldPost($name, $give_gold_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyCharactersApi->actionGiveGoldMyNameActionGiveGoldPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Name of your character. | |
| **give_gold_schema** | [**\\Kehet\ArtifactsMMO\\Model\GiveGoldSchema**](../Model/GiveGoldSchema.md)|  | |

### Return type

[**\\Kehet\ArtifactsMMO\\Model\GiveGoldResponseSchema**](../Model/GiveGoldResponseSchema.md)

### Authorization

[JWTBearer](../../README.md#JWTBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `actionGiveItemsMyNameActionGiveItemPost()`

```php
actionGiveItemsMyNameActionGiveItemPost($name, $give_items_schema): \\Kehet\ArtifactsMMO\\Model\GiveItemResponseSchema
```

Action Give Items

Give items to another character in your account on the same map. The cooldown will be 3 seconds multiplied by the number of different items given.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: JWTBearer
$config = \Kehet\ArtifactsMMO\\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new \Kehet\ArtifactsMMO\\Api\MyCharactersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | Name of your character.
$give_items_schema = new \\Kehet\ArtifactsMMO\\Model\GiveItemsSchema(); // \\Kehet\ArtifactsMMO\\Model\GiveItemsSchema

try {
    $result = $apiInstance->actionGiveItemsMyNameActionGiveItemPost($name, $give_items_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyCharactersApi->actionGiveItemsMyNameActionGiveItemPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Name of your character. | |
| **give_items_schema** | [**\\Kehet\ArtifactsMMO\\Model\GiveItemsSchema**](../Model/GiveItemsSchema.md)|  | |

### Return type

[**\\Kehet\ArtifactsMMO\\Model\GiveItemResponseSchema**](../Model/GiveItemResponseSchema.md)

### Authorization

[JWTBearer](../../README.md#JWTBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `actionMoveMyNameActionMovePost()`

```php
actionMoveMyNameActionMovePost($name, $destination_schema): \\Kehet\ArtifactsMMO\\Model\CharacterMovementResponseSchema
```

Action Move

Moves a character on the map using either the map's ID or X and Y position. Provide either 'map_id' or both 'x' and 'y' coordinates in the request body.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: JWTBearer
$config = \Kehet\ArtifactsMMO\\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new \Kehet\ArtifactsMMO\\Api\MyCharactersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | Name of your character.
$destination_schema = new \\Kehet\ArtifactsMMO\\Model\DestinationSchema(); // \\Kehet\ArtifactsMMO\\Model\DestinationSchema

try {
    $result = $apiInstance->actionMoveMyNameActionMovePost($name, $destination_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyCharactersApi->actionMoveMyNameActionMovePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Name of your character. | |
| **destination_schema** | [**\\Kehet\ArtifactsMMO\\Model\DestinationSchema**](../Model/DestinationSchema.md)|  | |

### Return type

[**\\Kehet\ArtifactsMMO\\Model\CharacterMovementResponseSchema**](../Model/CharacterMovementResponseSchema.md)

### Authorization

[JWTBearer](../../README.md#JWTBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `actionNpcBuyItemMyNameActionNpcBuyPost()`

```php
actionNpcBuyItemMyNameActionNpcBuyPost($name, $npc_merchant_buy_schema): \\Kehet\ArtifactsMMO\\Model\NpcMerchantTransactionResponseSchema
```

Action Npc Buy Item

Buy an item from an NPC on the character's map.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: JWTBearer
$config = \Kehet\ArtifactsMMO\\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new \Kehet\ArtifactsMMO\\Api\MyCharactersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | Name of your character.
$npc_merchant_buy_schema = new \\Kehet\ArtifactsMMO\\Model\NpcMerchantBuySchema(); // \\Kehet\ArtifactsMMO\\Model\NpcMerchantBuySchema

try {
    $result = $apiInstance->actionNpcBuyItemMyNameActionNpcBuyPost($name, $npc_merchant_buy_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyCharactersApi->actionNpcBuyItemMyNameActionNpcBuyPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Name of your character. | |
| **npc_merchant_buy_schema** | [**\\Kehet\ArtifactsMMO\\Model\NpcMerchantBuySchema**](../Model/NpcMerchantBuySchema.md)|  | |

### Return type

[**\\Kehet\ArtifactsMMO\\Model\NpcMerchantTransactionResponseSchema**](../Model/NpcMerchantTransactionResponseSchema.md)

### Authorization

[JWTBearer](../../README.md#JWTBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `actionNpcSellItemMyNameActionNpcSellPost()`

```php
actionNpcSellItemMyNameActionNpcSellPost($name, $npc_merchant_buy_schema): \\Kehet\ArtifactsMMO\\Model\NpcMerchantTransactionResponseSchema
```

Action Npc Sell Item

Sell an item to an NPC on the character's map.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: JWTBearer
$config = \Kehet\ArtifactsMMO\\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new \Kehet\ArtifactsMMO\\Api\MyCharactersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | Name of your character.
$npc_merchant_buy_schema = new \\Kehet\ArtifactsMMO\\Model\NpcMerchantBuySchema(); // \\Kehet\ArtifactsMMO\\Model\NpcMerchantBuySchema

try {
    $result = $apiInstance->actionNpcSellItemMyNameActionNpcSellPost($name, $npc_merchant_buy_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyCharactersApi->actionNpcSellItemMyNameActionNpcSellPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Name of your character. | |
| **npc_merchant_buy_schema** | [**\\Kehet\ArtifactsMMO\\Model\NpcMerchantBuySchema**](../Model/NpcMerchantBuySchema.md)|  | |

### Return type

[**\\Kehet\ArtifactsMMO\\Model\NpcMerchantTransactionResponseSchema**](../Model/NpcMerchantTransactionResponseSchema.md)

### Authorization

[JWTBearer](../../README.md#JWTBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `actionRecyclingMyNameActionRecyclingPost()`

```php
actionRecyclingMyNameActionRecyclingPost($name, $recycling_schema): \\Kehet\ArtifactsMMO\\Model\RecyclingResponseSchema
```

Action Recycling

Recycling an item. The character must be on a map with a workshop (only for equipments and weapons).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: JWTBearer
$config = \Kehet\ArtifactsMMO\\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new \Kehet\ArtifactsMMO\\Api\MyCharactersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | Name of your character.
$recycling_schema = new \\Kehet\ArtifactsMMO\\Model\RecyclingSchema(); // \\Kehet\ArtifactsMMO\\Model\RecyclingSchema

try {
    $result = $apiInstance->actionRecyclingMyNameActionRecyclingPost($name, $recycling_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyCharactersApi->actionRecyclingMyNameActionRecyclingPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Name of your character. | |
| **recycling_schema** | [**\\Kehet\ArtifactsMMO\\Model\RecyclingSchema**](../Model/RecyclingSchema.md)|  | |

### Return type

[**\\Kehet\ArtifactsMMO\\Model\RecyclingResponseSchema**](../Model/RecyclingResponseSchema.md)

### Authorization

[JWTBearer](../../README.md#JWTBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `actionRestMyNameActionRestPost()`

```php
actionRestMyNameActionRestPost($name): \\Kehet\ArtifactsMMO\\Model\CharacterRestResponseSchema
```

Action Rest

Recovers hit points by resting. (1 second per 5 HP, minimum 3 seconds)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: JWTBearer
$config = \Kehet\ArtifactsMMO\\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new \Kehet\ArtifactsMMO\\Api\MyCharactersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | Name of your character.

try {
    $result = $apiInstance->actionRestMyNameActionRestPost($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyCharactersApi->actionRestMyNameActionRestPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Name of your character. | |

### Return type

[**\\Kehet\ArtifactsMMO\\Model\CharacterRestResponseSchema**](../Model/CharacterRestResponseSchema.md)

### Authorization

[JWTBearer](../../README.md#JWTBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `actionTaskCancelMyNameActionTaskCancelPost()`

```php
actionTaskCancelMyNameActionTaskCancelPost($name): \\Kehet\ArtifactsMMO\\Model\TaskCancelledResponseSchema
```

Action Task Cancel

Cancel a task for 1 tasks coin.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: JWTBearer
$config = \Kehet\ArtifactsMMO\\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new \Kehet\ArtifactsMMO\\Api\MyCharactersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | Name of your character.

try {
    $result = $apiInstance->actionTaskCancelMyNameActionTaskCancelPost($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyCharactersApi->actionTaskCancelMyNameActionTaskCancelPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Name of your character. | |

### Return type

[**\\Kehet\ArtifactsMMO\\Model\TaskCancelledResponseSchema**](../Model/TaskCancelledResponseSchema.md)

### Authorization

[JWTBearer](../../README.md#JWTBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `actionTaskExchangeMyNameActionTaskExchangePost()`

```php
actionTaskExchangeMyNameActionTaskExchangePost($name): \\Kehet\ArtifactsMMO\\Model\RewardDataResponseSchema
```

Action Task Exchange

Exchange 6 tasks coins for a random reward. Rewards are exclusive items or resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: JWTBearer
$config = \Kehet\ArtifactsMMO\\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new \Kehet\ArtifactsMMO\\Api\MyCharactersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | Name of your character.

try {
    $result = $apiInstance->actionTaskExchangeMyNameActionTaskExchangePost($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyCharactersApi->actionTaskExchangeMyNameActionTaskExchangePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Name of your character. | |

### Return type

[**\\Kehet\ArtifactsMMO\\Model\RewardDataResponseSchema**](../Model/RewardDataResponseSchema.md)

### Authorization

[JWTBearer](../../README.md#JWTBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `actionTaskTradeMyNameActionTaskTradePost()`

```php
actionTaskTradeMyNameActionTaskTradePost($name, $simple_item_schema): \\Kehet\ArtifactsMMO\\Model\TaskTradeResponseSchema
```

Action Task Trade

Trading items with a Tasks Master.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: JWTBearer
$config = \Kehet\ArtifactsMMO\\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new \Kehet\ArtifactsMMO\\Api\MyCharactersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | Name of your character.
$simple_item_schema = new \\Kehet\ArtifactsMMO\\Model\SimpleItemSchema(); // \\Kehet\ArtifactsMMO\\Model\SimpleItemSchema

try {
    $result = $apiInstance->actionTaskTradeMyNameActionTaskTradePost($name, $simple_item_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyCharactersApi->actionTaskTradeMyNameActionTaskTradePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Name of your character. | |
| **simple_item_schema** | [**\\Kehet\ArtifactsMMO\\Model\SimpleItemSchema**](../Model/SimpleItemSchema.md)|  | |

### Return type

[**\\Kehet\ArtifactsMMO\\Model\TaskTradeResponseSchema**](../Model/TaskTradeResponseSchema.md)

### Authorization

[JWTBearer](../../README.md#JWTBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `actionTransitionMyNameActionTransitionPost()`

```php
actionTransitionMyNameActionTransitionPost($name): \\Kehet\ArtifactsMMO\\Model\CharacterTransitionResponseSchema
```

Action Transition

Execute a transition from the current map to another layer. The character must be on a map that has a transition available.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: JWTBearer
$config = \Kehet\ArtifactsMMO\\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new \Kehet\ArtifactsMMO\\Api\MyCharactersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | Name of your character.

try {
    $result = $apiInstance->actionTransitionMyNameActionTransitionPost($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyCharactersApi->actionTransitionMyNameActionTransitionPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Name of your character. | |

### Return type

[**\\Kehet\ArtifactsMMO\\Model\CharacterTransitionResponseSchema**](../Model/CharacterTransitionResponseSchema.md)

### Authorization

[JWTBearer](../../README.md#JWTBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `actionUnequipItemMyNameActionUnequipPost()`

```php
actionUnequipItemMyNameActionUnequipPost($name, $unequip_schema): \\Kehet\ArtifactsMMO\\Model\EquipmentResponseSchema
```

Action Unequip Item

Unequip an item on your character.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: JWTBearer
$config = \Kehet\ArtifactsMMO\\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new \Kehet\ArtifactsMMO\\Api\MyCharactersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | Name of your character.
$unequip_schema = new \\Kehet\ArtifactsMMO\\Model\UnequipSchema(); // \\Kehet\ArtifactsMMO\\Model\UnequipSchema

try {
    $result = $apiInstance->actionUnequipItemMyNameActionUnequipPost($name, $unequip_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyCharactersApi->actionUnequipItemMyNameActionUnequipPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Name of your character. | |
| **unequip_schema** | [**\\Kehet\ArtifactsMMO\\Model\UnequipSchema**](../Model/UnequipSchema.md)|  | |

### Return type

[**\\Kehet\ArtifactsMMO\\Model\EquipmentResponseSchema**](../Model/EquipmentResponseSchema.md)

### Authorization

[JWTBearer](../../README.md#JWTBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `actionUseItemMyNameActionUsePost()`

```php
actionUseItemMyNameActionUsePost($name, $simple_item_schema): \\Kehet\ArtifactsMMO\\Model\UseItemResponseSchema
```

Action Use Item

Use an item as a consumable.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: JWTBearer
$config = \Kehet\ArtifactsMMO\\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new \Kehet\ArtifactsMMO\\Api\MyCharactersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | Name of your character.
$simple_item_schema = new \\Kehet\ArtifactsMMO\\Model\SimpleItemSchema(); // \\Kehet\ArtifactsMMO\\Model\SimpleItemSchema

try {
    $result = $apiInstance->actionUseItemMyNameActionUsePost($name, $simple_item_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyCharactersApi->actionUseItemMyNameActionUsePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Name of your character. | |
| **simple_item_schema** | [**\\Kehet\ArtifactsMMO\\Model\SimpleItemSchema**](../Model/SimpleItemSchema.md)|  | |

### Return type

[**\\Kehet\ArtifactsMMO\\Model\UseItemResponseSchema**](../Model/UseItemResponseSchema.md)

### Authorization

[JWTBearer](../../README.md#JWTBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `actionWithdrawBankGoldMyNameActionBankWithdrawGoldPost()`

```php
actionWithdrawBankGoldMyNameActionBankWithdrawGoldPost($name, $deposit_withdraw_gold_schema): \\Kehet\ArtifactsMMO\\Model\BankGoldTransactionResponseSchema
```

Action Withdraw Bank Gold

Withdraw gold from your bank.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: JWTBearer
$config = \Kehet\ArtifactsMMO\\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new \Kehet\ArtifactsMMO\\Api\MyCharactersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | Name of your character.
$deposit_withdraw_gold_schema = new \\Kehet\ArtifactsMMO\\Model\DepositWithdrawGoldSchema(); // \\Kehet\ArtifactsMMO\\Model\DepositWithdrawGoldSchema

try {
    $result = $apiInstance->actionWithdrawBankGoldMyNameActionBankWithdrawGoldPost($name, $deposit_withdraw_gold_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyCharactersApi->actionWithdrawBankGoldMyNameActionBankWithdrawGoldPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Name of your character. | |
| **deposit_withdraw_gold_schema** | [**\\Kehet\ArtifactsMMO\\Model\DepositWithdrawGoldSchema**](../Model/DepositWithdrawGoldSchema.md)|  | |

### Return type

[**\\Kehet\ArtifactsMMO\\Model\BankGoldTransactionResponseSchema**](../Model/BankGoldTransactionResponseSchema.md)

### Authorization

[JWTBearer](../../README.md#JWTBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `actionWithdrawBankItemMyNameActionBankWithdrawItemPost()`

```php
actionWithdrawBankItemMyNameActionBankWithdrawItemPost($name, $simple_item_schema): \\Kehet\ArtifactsMMO\\Model\BankItemTransactionResponseSchema
```

Action Withdraw Bank Item

Take items from your bank and put them in the character's inventory. The cooldown will be 3 seconds multiplied by the number of different items withdrawn.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: JWTBearer
$config = \Kehet\ArtifactsMMO\\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new \Kehet\ArtifactsMMO\\Api\MyCharactersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | Name of your character.
$simple_item_schema = array(new \\Kehet\ArtifactsMMO\\Model\SimpleItemSchema()); // \\Kehet\ArtifactsMMO\\Model\SimpleItemSchema[]

try {
    $result = $apiInstance->actionWithdrawBankItemMyNameActionBankWithdrawItemPost($name, $simple_item_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyCharactersApi->actionWithdrawBankItemMyNameActionBankWithdrawItemPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Name of your character. | |
| **simple_item_schema** | [**\\Kehet\ArtifactsMMO\\Model\SimpleItemSchema[]**](../Model/SimpleItemSchema.md)|  | |

### Return type

[**\\Kehet\ArtifactsMMO\\Model\BankItemTransactionResponseSchema**](../Model/BankItemTransactionResponseSchema.md)

### Authorization

[JWTBearer](../../README.md#JWTBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllCharactersLogsMyLogsGet()`

```php
getAllCharactersLogsMyLogsGet($page, $size): \\Kehet\ArtifactsMMO\\Model\DataPageLogSchema
```

Get All Characters Logs

History of the last 5000 actions of all your characters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: JWTBearer
$config = \Kehet\ArtifactsMMO\\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new \Kehet\ArtifactsMMO\\Api\MyCharactersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Page number
$size = 50; // int | Page size

try {
    $result = $apiInstance->getAllCharactersLogsMyLogsGet($page, $size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyCharactersApi->getAllCharactersLogsMyLogsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Page number | [optional] [default to 1] |
| **size** | **int**| Page size | [optional] [default to 50] |

### Return type

[**\\Kehet\ArtifactsMMO\\Model\DataPageLogSchema**](../Model/DataPageLogSchema.md)

### Authorization

[JWTBearer](../../README.md#JWTBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCharacterLogsMyLogsNameGet()`

```php
getCharacterLogsMyLogsNameGet($name, $page, $size): \\Kehet\ArtifactsMMO\\Model\DataPageLogSchema
```

Get Character Logs

History of the last actions of your character.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: JWTBearer
$config = \Kehet\ArtifactsMMO\\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new \Kehet\ArtifactsMMO\\Api\MyCharactersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | Name of your character.
$page = 1; // int | Page number
$size = 50; // int | Page size

try {
    $result = $apiInstance->getCharacterLogsMyLogsNameGet($name, $page, $size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyCharactersApi->getCharacterLogsMyLogsNameGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Name of your character. | |
| **page** | **int**| Page number | [optional] [default to 1] |
| **size** | **int**| Page size | [optional] [default to 50] |

### Return type

[**\\Kehet\ArtifactsMMO\\Model\DataPageLogSchema**](../Model/DataPageLogSchema.md)

### Authorization

[JWTBearer](../../README.md#JWTBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMyCharactersMyCharactersGet()`

```php
getMyCharactersMyCharactersGet(): \\Kehet\ArtifactsMMO\\Model\MyCharactersListSchema
```

Get My Characters

List of your characters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: JWTBearer
$config = \Kehet\ArtifactsMMO\\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new \Kehet\ArtifactsMMO\\Api\MyCharactersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getMyCharactersMyCharactersGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyCharactersApi->getMyCharactersMyCharactersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\\Kehet\ArtifactsMMO\\Model\MyCharactersListSchema**](../Model/MyCharactersListSchema.md)

### Authorization

[JWTBearer](../../README.md#JWTBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
