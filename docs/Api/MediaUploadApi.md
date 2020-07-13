# Douyin\Open\MediaUploadApi

All URIs are relative to *https://open.douyin.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**mediaUploadPost**](MediaUploadApi.md#mediauploadpost) | **POST** /media/upload/ | 上传素材

# **mediaUploadPost**
> \Douyin\Open\Model\MediaUploadResponse mediaUploadPost($open_id, $access_token, $media)

上传素材

* Scope: `im`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Douyin\Open\Api\MediaUploadApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$open_id = "ba253642-0590-40bc-9bdf-9a1334b94059"; // string | 通过/oauth/access_token/获取，用户唯一标志
$access_token = "act.1d1021d2aee3d41fee2d2add43456badMFZnrhFhfWotu3Ecuiuka27L56lr"; // string | 调用/oauth/access_token/生成的token，此token需要用户授权。
$media = "media_example"; // string | 

try {
    $result = $apiInstance->mediaUploadPost($open_id, $access_token, $media);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaUploadApi->mediaUploadPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **open_id** | **string**| 通过/oauth/access_token/获取，用户唯一标志 |
 **access_token** | **string**| 调用/oauth/access_token/生成的token，此token需要用户授权。 |
 **media** | **string****string**|  | [optional]

### Return type

[**\Douyin\Open\Model\MediaUploadResponse**](../Model/MediaUploadResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

