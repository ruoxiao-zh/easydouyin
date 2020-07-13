# Douyin\Open\VideoCommentApi

All URIs are relative to *https://open.douyin.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**videoCommentListGet**](VideoCommentApi.md#videocommentlistget) | **GET** /video/comment/list/ | 评论列表
[**videoCommentReplyListGet**](VideoCommentApi.md#videocommentreplylistget) | **GET** /video/comment/reply/list/ | 评论回复列表
[**videoCommentReplyPost**](VideoCommentApi.md#videocommentreplypost) | **POST** /video/comment/reply/ | 回复视频评论
[**videoCommentTopPost**](VideoCommentApi.md#videocommenttoppost) | **POST** /video/comment/top/ | 置顶视频评论(企业号)

# **videoCommentListGet**
> \Douyin\Open\Model\VideoCommentListResponse videoCommentListGet($open_id, $access_token, $count, $item_id, $cursor)

评论列表

* Scope: `video.comment`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Douyin\Open\Api\VideoCommentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$open_id = "ba253642-0590-40bc-9bdf-9a1334b94059"; // string | 通过/oauth/access_token/获取，用户唯一标志
$access_token = "act.1d1021d2aee3d41fee2d2add43456badMFZnrhFhfWotu3Ecuiuka27L56lr"; // string | 调用/oauth/access_token/生成的token，此token需要用户授权。
$count = 10; // int | 每页数量
$item_id = "item_id_example"; // string | 视频id
$cursor = 0; // int | 分页游标, 第一页请求cursor是0, response中会返回下一页请求用到的cursor, 同时response还会返回has_more来表明是否有更多的数据。

try {
    $result = $apiInstance->videoCommentListGet($open_id, $access_token, $count, $item_id, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VideoCommentApi->videoCommentListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **open_id** | **string**| 通过/oauth/access_token/获取，用户唯一标志 |
 **access_token** | **string**| 调用/oauth/access_token/生成的token，此token需要用户授权。 |
 **count** | **int**| 每页数量 |
 **item_id** | **string**| 视频id |
 **cursor** | **int**| 分页游标, 第一页请求cursor是0, response中会返回下一页请求用到的cursor, 同时response还会返回has_more来表明是否有更多的数据。 | [optional]

### Return type

[**\Douyin\Open\Model\VideoCommentListResponse**](../Model/VideoCommentListResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **videoCommentReplyListGet**
> \Douyin\Open\Model\VideoCommentListResponse videoCommentReplyListGet($open_id, $access_token, $count, $item_id, $comment_id, $cursor)

评论回复列表

* Scope: `video.comment`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Douyin\Open\Api\VideoCommentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$open_id = "ba253642-0590-40bc-9bdf-9a1334b94059"; // string | 通过/oauth/access_token/获取，用户唯一标志
$access_token = "act.1d1021d2aee3d41fee2d2add43456badMFZnrhFhfWotu3Ecuiuka27L56lr"; // string | 调用/oauth/access_token/生成的token，此token需要用户授权。
$count = 10; // int | 每页数量
$item_id = "item_id_example"; // string | 视频id
$comment_id = "comment_id_example"; // string | 评论id
$cursor = 0; // int | 分页游标, 第一页请求cursor是0, response中会返回下一页请求用到的cursor, 同时response还会返回has_more来表明是否有更多的数据。

try {
    $result = $apiInstance->videoCommentReplyListGet($open_id, $access_token, $count, $item_id, $comment_id, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VideoCommentApi->videoCommentReplyListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **open_id** | **string**| 通过/oauth/access_token/获取，用户唯一标志 |
 **access_token** | **string**| 调用/oauth/access_token/生成的token，此token需要用户授权。 |
 **count** | **int**| 每页数量 |
 **item_id** | **string**| 视频id |
 **comment_id** | **string**| 评论id |
 **cursor** | **int**| 分页游标, 第一页请求cursor是0, response中会返回下一页请求用到的cursor, 同时response还会返回has_more来表明是否有更多的数据。 | [optional]

### Return type

[**\Douyin\Open\Model\VideoCommentListResponse**](../Model/VideoCommentListResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **videoCommentReplyPost**
> \Douyin\Open\Model\CommonResponse videoCommentReplyPost($open_id, $access_token, $body)

回复视频评论

* Scope: `video.comment`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Douyin\Open\Api\VideoCommentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$open_id = "ba253642-0590-40bc-9bdf-9a1334b94059"; // string | 通过/oauth/access_token/获取，用户唯一标志
$access_token = "act.1d1021d2aee3d41fee2d2add43456badMFZnrhFhfWotu3Ecuiuka27L56lr"; // string | 调用/oauth/access_token/生成的token，此token需要用户授权。
$body = new \Douyin\Open\Model\VideoCommentReplyBody(); // \Douyin\Open\Model\VideoCommentReplyBody | 

try {
    $result = $apiInstance->videoCommentReplyPost($open_id, $access_token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VideoCommentApi->videoCommentReplyPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **open_id** | **string**| 通过/oauth/access_token/获取，用户唯一标志 |
 **access_token** | **string**| 调用/oauth/access_token/生成的token，此token需要用户授权。 |
 **body** | [**\Douyin\Open\Model\VideoCommentReplyBody**](../Model/VideoCommentReplyBody.md)|  | [optional]

### Return type

[**\Douyin\Open\Model\CommonResponse**](../Model/CommonResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **videoCommentTopPost**
> \Douyin\Open\Model\CommonResponse videoCommentTopPost($open_id, $access_token, $body)

置顶视频评论(企业号)

* Scope: `video.comment`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Douyin\Open\Api\VideoCommentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$open_id = "ba253642-0590-40bc-9bdf-9a1334b94059"; // string | 通过/oauth/access_token/获取，用户唯一标志
$access_token = "act.1d1021d2aee3d41fee2d2add43456badMFZnrhFhfWotu3Ecuiuka27L56lr"; // string | 调用/oauth/access_token/生成的token，此token需要用户授权。
$body = new \Douyin\Open\Model\VideoCommentTopBody(); // \Douyin\Open\Model\VideoCommentTopBody | 

try {
    $result = $apiInstance->videoCommentTopPost($open_id, $access_token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VideoCommentApi->videoCommentTopPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **open_id** | **string**| 通过/oauth/access_token/获取，用户唯一标志 |
 **access_token** | **string**| 调用/oauth/access_token/生成的token，此token需要用户授权。 |
 **body** | [**\Douyin\Open\Model\VideoCommentTopBody**](../Model/VideoCommentTopBody.md)|  | [optional]

### Return type

[**\Douyin\Open\Model\CommonResponse**](../Model/CommonResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

