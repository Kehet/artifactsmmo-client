# # MonsterSchema

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Name of the monster. |
**code** | **string** | The code of the monster. This is the monster&#39;s unique identifier (ID). |
**level** | **int** | Monster level. |
**type** | [**\\Kehet\ArtifactsMMO\\Model\MonsterType**](MonsterType.md) | Monster type. |
**hp** | **int** | Monster hit points. |
**attack_fire** | **int** | Monster fire attack. |
**attack_earth** | **int** | Monster earth attack. |
**attack_water** | **int** | Monster water attack. |
**attack_air** | **int** | Monster air attack. |
**res_fire** | **int** | Monster % fire resistance. |
**res_earth** | **int** | Monster % earth resistance. |
**res_water** | **int** | Monster % water resistance. |
**res_air** | **int** | Monster % air resistance. |
**critical_strike** | **int** | Monster % critical strike. |
**initiative** | **int** | Monster initiative for turn order. |
**effects** | [**\\Kehet\ArtifactsMMO\\Model\SimpleEffectSchema[]**](SimpleEffectSchema.md) | List of effects. | [optional]
**min_gold** | **int** | Monster minimum gold drop. |
**max_gold** | **int** | Monster maximum gold drop. |
**drops** | [**\\Kehet\ArtifactsMMO\\Model\DropRateSchema[]**](DropRateSchema.md) | Monster drops. This is a list of items that the monster drops after killing the monster. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
