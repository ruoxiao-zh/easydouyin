###ToutiaoVideoListApi_toutiaoVideoListGet
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Douyin\Open\Api\ToutiaoVideoListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$open_id = "ba253642-0590-40bc-9bdf-9a1334b94059"; // string | 通过/oauth/access_token/获取，用户唯一标志
$access_token = "act.1d1021d2aee3d41fee2d2add43456badMFZnrhFhfWotu3Ecuiuka27L56lr"; // string | 调用/oauth/access_token/生成的token，此token需要用户授权。
$count = 10; // int | 每页数量
$cursor = 0; // int | 分页游标, 第一页请求cursor是0, response中会返回下一页请求用到的cursor, 同时response还会返回has_more来表明是否有更多的数据。

try {
    $result = $apiInstance->toutiaoVideoListGet($open_id, $access_token, $count, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ToutiaoVideoListApi->toutiaoVideoListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```
