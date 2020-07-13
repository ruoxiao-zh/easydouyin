# Douyin\Open\EventStatusApi

All URIs are relative to *https://open.douyin.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**eventStatusListGet**](EventStatusApi.md#eventstatuslistget) | **GET** /event/status/list/ | 获取事件订阅状态
[**eventStatusUpdatePost**](EventStatusApi.md#eventstatusupdatepost) | **POST** /event/status/update/ | 更新应用推送事件订阅状态

# **eventStatusListGet**
> \Douyin\Open\Model\EventStatusListResponse eventStatusListGet($access_token)

获取事件订阅状态

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Douyin\Open\Api\EventStatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_token = "clt.943da17996fb5cebfbc70c044c3fc25a57T54DcjT6HNKGqnUdxzy1KcxFnZ"; // string | 调用/oauth/client_token/生成的token，此token不需要用户授权。

try {
    $result = $apiInstance->eventStatusListGet($access_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventStatusApi->eventStatusListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| 调用/oauth/client_token/生成的token，此token不需要用户授权。 |

### Return type

[**\Douyin\Open\Model\EventStatusListResponse**](../Model/EventStatusListResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **eventStatusUpdatePost**
> \Douyin\Open\Model\EventStatusUpdateResponse eventStatusUpdatePost($access_token, $body)

更新应用推送事件订阅状态

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Douyin\Open\Api\EventStatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_token = "clt.943da17996fb5cebfbc70c044c3fc25a57T54DcjT6HNKGqnUdxzy1KcxFnZ"; // string | 调用/oauth/client_token/生成的token，此token不需要用户授权。
$body = new \Douyin\Open\Model\EventStatusUpdateBody(); // \Douyin\Open\Model\EventStatusUpdateBody | 

try {
    $result = $apiInstance->eventStatusUpdatePost($access_token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventStatusApi->eventStatusUpdatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| 调用/oauth/client_token/生成的token，此token不需要用户授权。 |
 **body** | [**\Douyin\Open\Model\EventStatusUpdateBody**](../Model/EventStatusUpdateBody.md)|  | [optional]

### Return type

[**\Douyin\Open\Model\EventStatusUpdateResponse**](../Model/EventStatusUpdateResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

