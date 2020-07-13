###EventStatusApi_eventStatusListGet
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Douyin\Open\Api\EventStatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_token = "clt.943da17996fb5cebfbc70c044c3fc25a57T54DcjT6HNKGqnUdxzy1KcxFnZ"; // string | 调用/oauth/client_token/生成的token，此token不需要用户授权。

try {
    $result = $apiInstance->eventStatusListGet($access_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventStatusApi->eventStatusListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```
###EventStatusApi_eventStatusUpdatePost
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Douyin\Open\Api\EventStatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_token = "clt.943da17996fb5cebfbc70c044c3fc25a57T54DcjT6HNKGqnUdxzy1KcxFnZ"; // string | 调用/oauth/client_token/生成的token，此token不需要用户授权。
$body = new \Douyin\Open\Model\EventStatusUpdateBody(); // \Douyin\Open\Model\EventStatusUpdateBody | 

try {
    $result = $apiInstance->eventStatusUpdatePost($access_token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventStatusApi->eventStatusUpdatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```
