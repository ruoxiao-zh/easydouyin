###PoiSearchApi_poiSearchKeywordGet
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
