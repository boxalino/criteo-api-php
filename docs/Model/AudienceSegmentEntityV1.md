# # AudienceSegmentEntityV1

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Name of the segment | [optional]
**description** | **string** | Description of the segment | [optional]
**type** | **string** | Type of segment (read-only) | [optional]
**created_at** | **\DateTime** | ISO-8601 timestamp in UTC of segment creation (read-only) | [optional]
**updated_at** | **\DateTime** | ISO-8601 timestamp in UTC of segment update (read-only) | [optional]
**advertiser_id** | **string** | Advertiser associated to the segment | [optional]
**in_market** | [**\criteo\api\marketingsolutions\preview\Model\InMarketV1**](InMarketV1.md) |  | [optional]
**prospecting** | **object** | Settings to target prospecting users to website visitors. | [optional]
**contact_list** | [**\criteo\api\marketingsolutions\preview\Model\ContactListV1**](ContactListV1.md) |  | [optional]
**location** | [**\criteo\api\marketingsolutions\preview\Model\LocationV1**](LocationV1.md) |  | [optional]
**behavioral** | [**\criteo\api\marketingsolutions\preview\Model\BehavioralV1**](BehavioralV1.md) |  | [optional]
**retargeting** | [**\criteo\api\marketingsolutions\preview\Model\RetargetingV1**](RetargetingV1.md) |  | [optional]
**lookalike** | [**\criteo\api\marketingsolutions\preview\Model\LookalikeV1**](LookalikeV1.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
