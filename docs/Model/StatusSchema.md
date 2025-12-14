# # StatusSchema

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**version** | **string** | Game version. |
**server_time** | **\DateTime** | Server time. |
**max_level** | **int** | Maximum level. |
**max_skill_level** | **int** | Maximum skill level. |
**characters_online** | **int** | Characters online. |
**season** | [**\\Kehet\ArtifactsMMO\\Model\SeasonSchema**](SeasonSchema.md) | Current season details. | [optional]
**rate_limits** | [**\\Kehet\ArtifactsMMO\\Model\RateLimitSchema[]**](RateLimitSchema.md) | Rate limits. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
