# PoiSupplierSyncBody

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**supplier_ext_id** | **string** | 接入方店铺id | 
**type** | [**\Douyin\Open\Model\SupplierType**](SupplierType.md) |  | 
**poi_id** | **string** | 抖音poi id, 三方如果使用高德poi id可以通过/poi/query/接口转换，其它三方poi id走poi匹配功能进行抖音poi id获取 | 
**status** | [**\Douyin\Open\Model\OnlineStatus**](OnlineStatus.md) |  | 
**name** | **string** | 店铺名称 | 
**images** | **string[]** | 店铺图片 | [optional] 
**contact_phone** | **string** | 联系手机号 | [optional] 
**contact_tel** | **string** | 联系座机号 | [optional] 
**address** | **string** | 店铺地址 | [optional] 
**description** | **string** | 店铺介绍(&lt;&#x3D;500字) | [optional] 
**services** | [**\Douyin\Open\Model\PoiSupplierSyncServices[]**](PoiSupplierSyncServices.md) | 店铺提供的服务列表 | [optional] 
**attributes** | [**\Douyin\Open\Model\SupplierAttributes**](SupplierAttributes.md) |  | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

