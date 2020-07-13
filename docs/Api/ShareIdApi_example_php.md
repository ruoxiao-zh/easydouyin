###ShareIdApi_shareIdGet
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Douyin\Open\Api\ShareIdApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_token = "clt.943da17996fb5cebfbc70c044c3fc25a57T54DcjT6HNKGqnUdxzy1KcxFnZ"; // string | 调用/oauth/client_token/生成的token，此token不需要用户授权。
$need_callback = True; // bool | 如果需要知道视频分享成功的结果，need_callback设置为true
$source_style_id = "source_style_id_example"; // string | 多来源样式id（暂未开放）
$default_hashtag = "default_hashtag_example"; // string | 追踪分享默认hashtag
$link_param = "link_param_example"; // string | 分享来源url附加参数（暂未开放）

try {
    $result = $apiInstance->shareIdGet($access_token, $need_callback, $source_style_id, $default_hashtag, $link_param);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShareIdApi->shareIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```
