# # AccountAchievementSchema

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Name of the achievement. |
**code** | **string** | Code of the achievement. |
**description** | **string** | Description of the achievement. |
**points** | **int** | Points of the achievement. Used for the leaderboard. |
**type** | [**\\Kehet\ArtifactsMMO\\Model\AchievementType**](AchievementType.md) | Type of achievement. |
**target** | **string** | Target of the achievement. | [optional]
**total** | **int** | Total to do. |
**rewards** | [**\\Kehet\ArtifactsMMO\\Model\AchievementRewardsSchema**](AchievementRewardsSchema.md) | Rewards. |
**current** | **int** | Current progress. |
**completed_at** | **\DateTime** | Completed at. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
