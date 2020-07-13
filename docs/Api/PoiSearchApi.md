# Douyin\Open\PoiSearchApi

All URIs are relative to *https://open.douyin.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**poiSearchKeywordGet**](PoiSearchApi.md#poisearchkeywordget) | **GET** /poi/search/keyword/ | 关键字搜索

# **poiSearchKeywordGet**
> \Douyin\Open\Model\PoiSearchKeywordResponse poiSearchKeywordGet($access_token, $count, $keyword, $cursor, $city)

关键字搜索

* Scope: `poi.search`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Douyin\Open\Api\PoiSearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_token = "clt.943da17996fb5cebfbc70c044c3fc25a57T54DcjT6HNKGqnUdxzy1KcxFnZ"; // string | 调用/oauth/client_token/生成的token，此token不需要用户授权。
$count = 10; // int | 每页数量
$keyword = "keyword_example"; // string | 查询关键字，例如美食
$cursor = 0; // int | 分页游标, 第一页请求cursor是0, response中会返回下一页请求用到的cursor, 同时response还会返回has_more来表明是否有更多的数据。
$city = "city_example"; // string | 查询城市，例如上海、北京

try {
    $result = $apiInstance->poiSearchKeywordGet($access_token, $count, $keyword, $cursor, $city);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PoiSearchApi->poiSearchKeywordGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| 调用/oauth/client_token/生成的token，此token不需要用户授权。 |
 **count** | **int**| 每页数量 |
 **keyword** | **string**| 查询关键字，例如美食 |
 **cursor** | **int**| 分页游标, 第一页请求cursor是0, response中会返回下一页请求用到的cursor, 同时response还会返回has_more来表明是否有更多的数据。 | [optional]
 **city** | **string**| 查询城市，例如上海、北京 | [optional]

### Return type

[**\Douyin\Open\Model\PoiSearchKeywordResponse**](../Model/PoiSearchKeywordResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

