# PoiExtHotelOrderCommitBody

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order_id** | **string** | 抖音订单号 | 
**spu_ext_id** | **string** | 接入方房型ID | 
**status** | **int** | 订单支付状态。0 - 未支付, 1 - 已支付 | 
**reserve_amount** | **int** | 预定数量 | 
**customer_name** | **string** | 预订人姓名 | 
**customer_phone** | **string** | 预订人电话 | 
**customer_list** | [**\Douyin\Open\Model\PoiExtHotelOrderCommitResponse[]**](PoiExtHotelOrderCommitResponse.md) | 入住人列表 | [optional] 
**check_in** | **string** | 入住时间 yyyyMMdd | 
**check_out** | **string** | 离店时间 yyyyMMdd | 
**total_price** | **int** | 总价, 单位人民币分 | 
**remark** | **string** | 备注 | [optional] 
**date_price** | [**\Douyin\Open\Model\PoiExtHotelOrderCommitResponse1[]**](PoiExtHotelOrderCommitResponse1.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

