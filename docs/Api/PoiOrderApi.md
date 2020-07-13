# Douyin\Open\PoiOrderApi

All URIs are relative to *https://open.douyin.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**poiExtHotelOrderCancelPost**](PoiOrderApi.md#poiexthotelordercancelpost) | **POST** /poi/ext/hotel/order/cancel/ | 取消订单(该接口由接入方实现)
[**poiExtHotelOrderCommitPost**](PoiOrderApi.md#poiexthotelordercommitpost) | **POST** /poi/ext/hotel/order/commit/ | 下单接口(该接口由接入方实现)
[**poiExtHotelOrderStatusPost**](PoiOrderApi.md#poiexthotelorderstatuspost) | **POST** /poi/ext/hotel/order/status/ | 支付状态通知(该接口由接入方实现)
[**poiOrderStatusPost**](PoiOrderApi.md#poiorderstatuspost) | **POST** /poi/order/status/ | 订单状态同步接口

# **poiExtHotelOrderCancelPost**
> \Douyin\Open\Model\PoiExtHotelOrderCancelResponse poiExtHotelOrderCancelPost($body)

取消订单(该接口由接入方实现)

# 该接口由接入方实现

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Douyin\Open\Api\PoiOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Douyin\Open\Model\PoiExtHotelOrderCancelBody(); // \Douyin\Open\Model\PoiExtHotelOrderCancelBody | 

try {
    $result = $apiInstance->poiExtHotelOrderCancelPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PoiOrderApi->poiExtHotelOrderCancelPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Douyin\Open\Model\PoiExtHotelOrderCancelBody**](../Model/PoiExtHotelOrderCancelBody.md)|  | [optional]

### Return type

[**\Douyin\Open\Model\PoiExtHotelOrderCancelResponse**](../Model/PoiExtHotelOrderCancelResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **poiExtHotelOrderCommitPost**
> \Douyin\Open\Model\PoiExtHotelOrderCommitResponse2 poiExtHotelOrderCommitPost($body)

下单接口(该接口由接入方实现)

# 该接口由接入方实现

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Douyin\Open\Api\PoiOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Douyin\Open\Model\PoiExtHotelOrderCommitBody(); // \Douyin\Open\Model\PoiExtHotelOrderCommitBody | 

try {
    $result = $apiInstance->poiExtHotelOrderCommitPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PoiOrderApi->poiExtHotelOrderCommitPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Douyin\Open\Model\PoiExtHotelOrderCommitBody**](../Model/PoiExtHotelOrderCommitBody.md)|  | [optional]

### Return type

[**\Douyin\Open\Model\PoiExtHotelOrderCommitResponse2**](../Model/PoiExtHotelOrderCommitResponse2.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **poiExtHotelOrderStatusPost**
> \Douyin\Open\Model\PoiExtHotelOrderStatusResponse poiExtHotelOrderStatusPost($body)

支付状态通知(该接口由接入方实现)

# 该接口由接入方实现

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Douyin\Open\Api\PoiOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Douyin\Open\Model\PoiExtHotelOrderStatusBody(); // \Douyin\Open\Model\PoiExtHotelOrderStatusBody | 

try {
    $result = $apiInstance->poiExtHotelOrderStatusPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PoiOrderApi->poiExtHotelOrderStatusPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Douyin\Open\Model\PoiExtHotelOrderStatusBody**](../Model/PoiExtHotelOrderStatusBody.md)|  | [optional]

### Return type

[**\Douyin\Open\Model\PoiExtHotelOrderStatusResponse**](../Model/PoiExtHotelOrderStatusResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **poiOrderStatusPost**
> \Douyin\Open\Model\PoiOrderStatusResponse poiOrderStatusPost($body, $access_token)

订单状态同步接口

* Scope: `poi.product`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Douyin\Open\Api\PoiOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Douyin\Open\Model\PoiOrderStatusBody(); // \Douyin\Open\Model\PoiOrderStatusBody | 
$access_token = "clt.943da17996fb5cebfbc70c044c3fc25a57T54DcjT6HNKGqnUdxzy1KcxFnZ"; // string | 调用/oauth/client_token/生成的token，此token不需要用户授权。

try {
    $result = $apiInstance->poiOrderStatusPost($body, $access_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PoiOrderApi->poiOrderStatusPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Douyin\Open\Model\PoiOrderStatusBody**](../Model/PoiOrderStatusBody.md)|  |
 **access_token** | **string**| 调用/oauth/client_token/生成的token，此token不需要用户授权。 |

### Return type

[**\Douyin\Open\Model\PoiOrderStatusResponse**](../Model/PoiOrderStatusResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

