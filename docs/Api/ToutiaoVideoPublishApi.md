# Douyin\Open\ToutiaoVideoPublishApi

All URIs are relative to *https://open.snssdk.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**toutiaoVideoCreatePost**](ToutiaoVideoPublishApi.md#toutiaovideocreatepost) | **POST** /toutiao/video/create/ | 创建头条视频  注意：重复的video_id不会生成新的视频
[**toutiaoVideoUploadPost**](ToutiaoVideoPublishApi.md#toutiaovideouploadpost) | **POST** /toutiao/video/upload/ | 上传视频到文件服务器

# **toutiaoVideoCreatePost**
> \Douyin\Open\Model\ToutiaoVideoCreateResponse toutiaoVideoCreatePost($open_id, $access_token, $body)

创建头条视频  注意：重复的video_id不会生成新的视频

* Scope: `toutiao.video.create`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Douyin\Open\Api\ToutiaoVideoPublishApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$open_id = "ba253642-0590-40bc-9bdf-9a1334b94059"; // string | 通过/oauth/access_token/获取，用户唯一标志
$access_token = "act.1d1021d2aee3d41fee2d2add43456badMFZnrhFhfWotu3Ecuiuka27L56lr"; // string | 调用/oauth/access_token/生成的token，此token需要用户授权。
$body = new \Douyin\Open\Model\ToutiaoVideoCreateBody(); // \Douyin\Open\Model\ToutiaoVideoCreateBody | 

try {
    $result = $apiInstance->toutiaoVideoCreatePost($open_id, $access_token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ToutiaoVideoPublishApi->toutiaoVideoCreatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **open_id** | **string**| 通过/oauth/access_token/获取，用户唯一标志 |
 **access_token** | **string**| 调用/oauth/access_token/生成的token，此token需要用户授权。 |
 **body** | [**\Douyin\Open\Model\ToutiaoVideoCreateBody**](../Model/ToutiaoVideoCreateBody.md)|  | [optional]

### Return type

[**\Douyin\Open\Model\ToutiaoVideoCreateResponse**](../Model/ToutiaoVideoCreateResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **toutiaoVideoUploadPost**
> \Douyin\Open\Model\ToutiaoVideoUploadResponse toutiaoVideoUploadPost($video, $open_id, $access_token)

上传视频到文件服务器

* Scope: `toutiao.video.create`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Douyin\Open\Api\ToutiaoVideoPublishApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$video = "video_example"; // string | 
$open_id = "ba253642-0590-40bc-9bdf-9a1334b94059"; // string | 通过/oauth/access_token/获取，用户唯一标志
$access_token = "act.1d1021d2aee3d41fee2d2add43456badMFZnrhFhfWotu3Ecuiuka27L56lr"; // string | 调用/oauth/access_token/生成的token，此token需要用户授权。

try {
    $result = $apiInstance->toutiaoVideoUploadPost($video, $open_id, $access_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ToutiaoVideoPublishApi->toutiaoVideoUploadPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **video** | **string****string**|  |
 **open_id** | **string**| 通过/oauth/access_token/获取，用户唯一标志 |
 **access_token** | **string**| 调用/oauth/access_token/生成的token，此token需要用户授权。 |

### Return type

[**\Douyin\Open\Model\ToutiaoVideoUploadResponse**](../Model/ToutiaoVideoUploadResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

