# Douyin\Open\HotsearchApi

All URIs are relative to *https://open.douyin.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**hotsearchSentencesGet**](HotsearchApi.md#hotsearchsentencesget) | **GET** /hotsearch/sentences/ | 获取实时热点词
[**hotsearchTrendingSentencesGet**](HotsearchApi.md#hotsearchtrendingsentencesget) | **GET** /hotsearch/trending/sentences/ | 获取上升词
[**hotsearchVideosGet**](HotsearchApi.md#hotsearchvideosget) | **GET** /hotsearch/videos/ | 获取热点词聚合的视频

# **hotsearchSentencesGet**
> \Douyin\Open\Model\HotsearchSentencesResponse hotsearchSentencesGet($access_token)

获取实时热点词

* Scope: `hotsearch`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Douyin\Open\Api\HotsearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_token = "clt.943da17996fb5cebfbc70c044c3fc25a57T54DcjT6HNKGqnUdxzy1KcxFnZ"; // string | 调用/oauth/client_token/生成的token，此token不需要用户授权。

try {
    $result = $apiInstance->hotsearchSentencesGet($access_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HotsearchApi->hotsearchSentencesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| 调用/oauth/client_token/生成的token，此token不需要用户授权。 |

### Return type

[**\Douyin\Open\Model\HotsearchSentencesResponse**](../Model/HotsearchSentencesResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **hotsearchTrendingSentencesGet**
> \Douyin\Open\Model\HotsearchTrendingSentencesResponse hotsearchTrendingSentencesGet($access_token, $count, $cursor)

获取上升词

* Scope: `hotsearch`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Douyin\Open\Api\HotsearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_token = "clt.943da17996fb5cebfbc70c044c3fc25a57T54DcjT6HNKGqnUdxzy1KcxFnZ"; // string | 调用/oauth/client_token/生成的token，此token不需要用户授权。
$count = 10; // int | 每页数量
$cursor = 0; // int | 分页游标, 第一页请求cursor是0, response中会返回下一页请求用到的cursor, 同时response还会返回has_more来表明是否有更多的数据。

try {
    $result = $apiInstance->hotsearchTrendingSentencesGet($access_token, $count, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HotsearchApi->hotsearchTrendingSentencesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| 调用/oauth/client_token/生成的token，此token不需要用户授权。 |
 **count** | **int**| 每页数量 |
 **cursor** | **int**| 分页游标, 第一页请求cursor是0, response中会返回下一页请求用到的cursor, 同时response还会返回has_more来表明是否有更多的数据。 | [optional]

### Return type

[**\Douyin\Open\Model\HotsearchTrendingSentencesResponse**](../Model/HotsearchTrendingSentencesResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **hotsearchVideosGet**
> \Douyin\Open\Model\HotsearchVideosResponse hotsearchVideosGet($access_token, $hot_sentence)

获取热点词聚合的视频

* Scope: `hotsearch`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Douyin\Open\Api\HotsearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_token = "clt.943da17996fb5cebfbc70c044c3fc25a57T54DcjT6HNKGqnUdxzy1KcxFnZ"; // string | 调用/oauth/client_token/生成的token，此token不需要用户授权。
$hot_sentence = "hot_sentence_example"; // string | 热点词

try {
    $result = $apiInstance->hotsearchVideosGet($access_token, $hot_sentence);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HotsearchApi->hotsearchVideosGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| 调用/oauth/client_token/生成的token，此token不需要用户授权。 |
 **hot_sentence** | **string**| 热点词 |

### Return type

[**\Douyin\Open\Model\HotsearchVideosResponse**](../Model/HotsearchVideosResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

