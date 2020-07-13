# ImageCreateBody

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**image_id** | **string** | 通过/image/upload/接口得到。 | 
**text** | **string** | 标题，可以带话题。 如title1#话题1 #话题2 注意：话题审核依旧遵循抖音的审核逻辑，强烈建议第三方谨慎拟定话题名称，避免强导流行为。 | [optional] 
**poi_id** | **string** | 地理位置id | [optional] 
**poi_name** | **string** | 地理位置名称 | [optional] 
**micro_app_id** | **string** | 小程序id | [optional] 
**micro_app_title** | **string** | 小程序标题 | [optional] 
**micro_app_url** | **string** | 吊起小程序时的参数 | [optional] 
**at_users** | **string[]** | 如果需要at其他用户。将text中@nickname对应的open_id放到这里。 | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

