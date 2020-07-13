# Douyin\Open\PoiOrderSyncApi

All URIs are relative to *https://open.douyin.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**poiOrderSyncPost**](PoiOrderSyncApi.md#poiordersyncpost) | **POST** /poi/order/sync/ | 订单同步

# **poiOrderSyncPost**
> \Douyin\Open\Model\PoiOrderSyncResponse1 poiOrderSyncPost($body, $access_token)

订单同步

* Scope: `poi.product`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Douyin\Open\Api\PoiOrderSyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Douyin\Open\Model\PoiOrderSyncBody(); // \Douyin\Open\Model\PoiOrderSyncBody | 
$access_token = "clt.943da17996fb5cebfbc70c044c3fc25a57T54DcjT6HNKGqnUdxzy1KcxFnZ"; // string | 调用/oauth/client_token/生成的token，此token不需要用户授权。

try {
    $result = $apiInstance->poiOrderSyncPost($body, $access_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PoiOrderSyncApi->poiOrderSyncPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Douyin\Open\Model\PoiOrderSyncBody**](../Model/PoiOrderSyncBody.md)|  |
 **access_token** | **string**| 调用/oauth/client_token/生成的token，此token不需要用户授权。 |

### Return type

[**\Douyin\Open\Model\PoiOrderSyncResponse1**](../Model/PoiOrderSyncResponse1.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

