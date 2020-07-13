###PoiOrderApi_poiExtHotelOrderCancelPost
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Douyin\Open\Api\PoiOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Douyin\Open\Model\PoiExtHotelOrderCancelBody(); // \Douyin\Open\Model\PoiExtHotelOrderCancelBody | 

try {
    $result = $apiInstance->poiExtHotelOrderCancelPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PoiOrderApi->poiExtHotelOrderCancelPost: ', $e->getMessage(), PHP_EOL;
}
?>
```
###PoiOrderApi_poiExtHotelOrderCommitPost
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Douyin\Open\Api\PoiOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Douyin\Open\Model\PoiExtHotelOrderCommitBody(); // \Douyin\Open\Model\PoiExtHotelOrderCommitBody | 

try {
    $result = $apiInstance->poiExtHotelOrderCommitPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PoiOrderApi->poiExtHotelOrderCommitPost: ', $e->getMessage(), PHP_EOL;
}
?>
```
###PoiOrderApi_poiExtHotelOrderStatusPost
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Douyin\Open\Api\PoiOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Douyin\Open\Model\PoiExtHotelOrderStatusBody(); // \Douyin\Open\Model\PoiExtHotelOrderStatusBody | 

try {
    $result = $apiInstance->poiExtHotelOrderStatusPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PoiOrderApi->poiExtHotelOrderStatusPost: ', $e->getMessage(), PHP_EOL;
}
?>
```
###PoiOrderApi_poiOrderStatusPost
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Douyin\Open\Api\PoiOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Douyin\Open\Model\PoiOrderStatusBody(); // \Douyin\Open\Model\PoiOrderStatusBody | 
$access_token = "clt.943da17996fb5cebfbc70c044c3fc25a57T54DcjT6HNKGqnUdxzy1KcxFnZ"; // string | 调用/oauth/client_token/生成的token，此token不需要用户授权。

try {
    $result = $apiInstance->poiOrderStatusPost($body, $access_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PoiOrderApi->poiOrderStatusPost: ', $e->getMessage(), PHP_EOL;
}
?>
```
