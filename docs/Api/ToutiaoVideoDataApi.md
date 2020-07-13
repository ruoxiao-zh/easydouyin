# Douyin\Open\ToutiaoVideoDataApi

All URIs are relative to *https://open.snssdk.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**toutiaoVideoDataPost**](ToutiaoVideoDataApi.md#toutiaovideodatapost) | **POST** /toutiao/video/data/ | 批量获取视频数据信息

# **toutiaoVideoDataPost**
> \Douyin\Open\Model\ToutiaoVideoDataResponse toutiaoVideoDataPost($body, $open_id, $access_token)

批量获取视频数据信息

* Scope: `toutiao.video.data`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Douyin\Open\Api\ToutiaoVideoDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Douyin\Open\Model\ToutiaoVideoDataBody(); // \Douyin\Open\Model\ToutiaoVideoDataBody | 
$open_id = "ba253642-0590-40bc-9bdf-9a1334b94059"; // string | 通过/oauth/access_token/获取，用户唯一标志
$access_token = "act.1d1021d2aee3d41fee2d2add43456badMFZnrhFhfWotu3Ecuiuka27L56lr"; // string | 调用/oauth/access_token/生成的token，此token需要用户授权。

try {
    $result = $apiInstance->toutiaoVideoDataPost($body, $open_id, $access_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ToutiaoVideoDataApi->toutiaoVideoDataPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Douyin\Open\Model\ToutiaoVideoDataBody**](../Model/ToutiaoVideoDataBody.md)|  |
 **open_id** | **string**| 通过/oauth/access_token/获取，用户唯一标志 |
 **access_token** | **string**| 调用/oauth/access_token/生成的token，此token需要用户授权。 |

### Return type

[**\Douyin\Open\Model\ToutiaoVideoDataResponse**](../Model/ToutiaoVideoDataResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

