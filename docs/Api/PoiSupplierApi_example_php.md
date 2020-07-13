###PoiSupplierApi_poiQueryGet
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Douyin\Open\Api\PoiSupplierApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_token = "clt.943da17996fb5cebfbc70c044c3fc25a57T54DcjT6HNKGqnUdxzy1KcxFnZ"; // string | 调用/oauth/client_token/生成的token，此token不需要用户授权。
$amap_id = "amap_id_example"; // string | 

try {
    $result = $apiInstance->poiQueryGet($access_token, $amap_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PoiSupplierApi->poiQueryGet: ', $e->getMessage(), PHP_EOL;
}
?>
```
###PoiSupplierApi_poiSupplierQueryGet
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Douyin\Open\Api\PoiSupplierApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_token = "clt.943da17996fb5cebfbc70c044c3fc25a57T54DcjT6HNKGqnUdxzy1KcxFnZ"; // string | 调用/oauth/client_token/生成的token，此token不需要用户授权。
$supplier_ext_id = "supplier_ext_id_example"; // string | 

try {
    $result = $apiInstance->poiSupplierQueryGet($access_token, $supplier_ext_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PoiSupplierApi->poiSupplierQueryGet: ', $e->getMessage(), PHP_EOL;
}
?>
```
###PoiSupplierApi_poiSupplierSyncPost
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Douyin\Open\Api\PoiSupplierApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Douyin\Open\Model\PoiSupplierSyncBody(); // \Douyin\Open\Model\PoiSupplierSyncBody | 
$access_token = "clt.943da17996fb5cebfbc70c044c3fc25a57T54DcjT6HNKGqnUdxzy1KcxFnZ"; // string | 调用/oauth/client_token/生成的token，此token不需要用户授权。

try {
    $result = $apiInstance->poiSupplierSyncPost($body, $access_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PoiSupplierApi->poiSupplierSyncPost: ', $e->getMessage(), PHP_EOL;
}
?>
```
