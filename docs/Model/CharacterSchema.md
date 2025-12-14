# # CharacterSchema

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Name of the character. |
**account** | **string** | Account name. |
**skin** | [**\\Kehet\ArtifactsMMO\\Model\CharacterSkin**](CharacterSkin.md) | Character skin code. |
**level** | **int** | Combat level. |
**xp** | **int** | The current xp level of the combat level. |
**max_xp** | **int** | XP required to level up the character. |
**gold** | **int** | The numbers of gold on this character. |
**speed** | **int** | *Not available, on the roadmap. Character movement speed. |
**mining_level** | **int** | Mining level. |
**mining_xp** | **int** | The current xp level of the Mining skill. |
**mining_max_xp** | **int** | Mining XP required to level up the skill. |
**woodcutting_level** | **int** | Woodcutting level. |
**woodcutting_xp** | **int** | The current xp level of the Woodcutting skill. |
**woodcutting_max_xp** | **int** | Woodcutting XP required to level up the skill. |
**fishing_level** | **int** | Fishing level. |
**fishing_xp** | **int** | The current xp level of the Fishing skill. |
**fishing_max_xp** | **int** | Fishing XP required to level up the skill. |
**weaponcrafting_level** | **int** | Weaponcrafting level. |
**weaponcrafting_xp** | **int** | The current xp level of the Weaponcrafting skill. |
**weaponcrafting_max_xp** | **int** | Weaponcrafting XP required to level up the skill. |
**gearcrafting_level** | **int** | Gearcrafting level. |
**gearcrafting_xp** | **int** | The current xp level of the Gearcrafting skill. |
**gearcrafting_max_xp** | **int** | Gearcrafting XP required to level up the skill. |
**jewelrycrafting_level** | **int** | Jewelrycrafting level. |
**jewelrycrafting_xp** | **int** | The current xp level of the Jewelrycrafting skill. |
**jewelrycrafting_max_xp** | **int** | Jewelrycrafting XP required to level up the skill. |
**cooking_level** | **int** | The current xp level of the Cooking skill. |
**cooking_xp** | **int** | Cooking XP. |
**cooking_max_xp** | **int** | Cooking XP required to level up the skill. |
**alchemy_level** | **int** | Alchemy level. |
**alchemy_xp** | **int** | Alchemy XP. |
**alchemy_max_xp** | **int** | Alchemy XP required to level up the skill. |
**hp** | **int** | Character actual HP. |
**max_hp** | **int** | Character max HP. |
**haste** | **int** | *Increase speed attack (reduce fight cooldown) |
**critical_strike** | **int** | % Critical strike. Critical strikes adds 50% extra damage to an attack (1.5x). |
**wisdom** | **int** | Wisdom increases the amount of XP gained from fights and skills (1% extra per 10 wisdom). |
**prospecting** | **int** | Prospecting increases the chances of getting drops from fights and skills (1% extra per 10 PP). |
**initiative** | **int** | Initiative determines turn order in combat. Higher initiative goes first. |
**threat** | **int** | Threat level affects monster targeting in multi-character combat. |
**attack_fire** | **int** | Fire attack. |
**attack_earth** | **int** | Earth attack. |
**attack_water** | **int** | Water attack. |
**attack_air** | **int** | Air attack. |
**dmg** | **int** | % Damage. Damage increases your attack in all elements. |
**dmg_fire** | **int** | % Fire damage. Damage increases your fire attack. |
**dmg_earth** | **int** | % Earth damage. Damage increases your earth attack. |
**dmg_water** | **int** | % Water damage. Damage increases your water attack. |
**dmg_air** | **int** | % Air damage. Damage increases your air attack. |
**res_fire** | **int** | % Fire resistance. Reduces fire attack. |
**res_earth** | **int** | % Earth resistance. Reduces earth attack. |
**res_water** | **int** | % Water resistance. Reduces water attack. |
**res_air** | **int** | % Air resistance. Reduces air attack. |
**effects** | [**\\Kehet\ArtifactsMMO\\Model\StorageEffectSchema[]**](StorageEffectSchema.md) | List of active effects on the character. | [optional]
**x** | **int** | Character x coordinate. |
**y** | **int** | Character y coordinate. |
**layer** | [**\\Kehet\ArtifactsMMO\\Model\MapLayer**](MapLayer.md) | Character current layer. |
**map_id** | **int** | Character current map ID. |
**cooldown** | **int** | Cooldown in seconds. |
**cooldown_expiration** | **\DateTime** | Datetime Cooldown expiration. | [optional]
**weapon_slot** | **string** | Weapon slot. |
**rune_slot** | **string** | Rune slot. |
**shield_slot** | **string** | Shield slot. |
**helmet_slot** | **string** | Helmet slot. |
**body_armor_slot** | **string** | Body armor slot. |
**leg_armor_slot** | **string** | Leg armor slot. |
**boots_slot** | **string** | Boots slot. |
**ring1_slot** | **string** | Ring 1 slot. |
**ring2_slot** | **string** | Ring 2 slot. |
**amulet_slot** | **string** | Amulet slot. |
**artifact1_slot** | **string** | Artifact 1 slot. |
**artifact2_slot** | **string** | Artifact 2 slot. |
**artifact3_slot** | **string** | Artifact 3 slot. |
**utility1_slot** | **string** | Utility 1 slot. |
**utility1_slot_quantity** | **int** | Utility 1 quantity. |
**utility2_slot** | **string** | Utility 2 slot. |
**utility2_slot_quantity** | **int** | Utility 2 quantity. |
**bag_slot** | **string** | Bag slot. |
**task** | **string** | Task in progress. |
**task_type** | **string** | Task type. |
**task_progress** | **int** | Task progression. |
**task_total** | **int** | Task total objective. |
**inventory_max_items** | **int** | Inventory max items. |
**inventory** | [**\\Kehet\ArtifactsMMO\\Model\InventorySlot[]**](InventorySlot.md) | List of inventory slots. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
