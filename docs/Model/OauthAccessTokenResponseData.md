# OauthAccessTokenResponseData

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**error_code** | [**\Douyin\Open\Model\ErrorCode**](ErrorCode.md) |  | [optional] 
**description** | [**\Douyin\Open\Model\Description**](Description.md) |  | [optional] 
**access_token** | **string** | 接口调用凭证 | [optional] 
**expires_in** | **string** | access_token接口调用凭证超时时间，单位（秒 | [optional] 
**refresh_token** | **string** | 用户刷新access_token | [optional] 
**open_id** | **string** | 授权用户唯一标识 | [optional] 
**scope** | **string** | 用户授权的作用域(Scope)，使用逗号（,）分隔，开放平台几乎几乎每个接口都需要特定的Scope。 | [optional] 
**unionid** | **string** | 当且仅当该网站应用已获得该用户的userinfo授权时，才会出现该字段。 | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

