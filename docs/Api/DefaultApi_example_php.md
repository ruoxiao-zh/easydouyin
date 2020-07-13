###DefaultApi_oauthAccessTokenGet
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Douyin\Open\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_key = "client_key_example"; // string | 应用唯一标识
$client_secret = "client_secret_example"; // string | 应用唯一标识对应的密钥
$code = "code_example"; // string | 授权码
$grant_type = "grant_type_example"; // string | 

try {
    $result = $apiInstance->oauthAccessTokenGet($client_key, $client_secret, $code, $grant_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->oauthAccessTokenGet: ', $e->getMessage(), PHP_EOL;
}
?>
```
###DefaultApi_oauthAuthorizeGet
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Douyin\Open\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_key = "client_key_example"; // string | 应用唯一标识
$response_type = "response_type_example"; // string | 填写code
$scope = "scope_example"; // string | 应用授权作用域,多个授权作用域以英文逗号（,）分隔
$redirect_uri = "redirect_uri_example"; // string | 授权成功后的回调地址，必须以http/https开头。
$state = "state_example"; // string | 用于保持请求和回调的状态

try {
    $apiInstance->oauthAuthorizeGet($client_key, $response_type, $scope, $redirect_uri, $state);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->oauthAuthorizeGet: ', $e->getMessage(), PHP_EOL;
}
?>
```
###DefaultApi_oauthClientTokenGet
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Douyin\Open\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_key = "client_key_example"; // string | 应用唯一标识
$client_secret = "client_secret_example"; // string | 应用唯一标识对应的密钥
$grant_type = "grant_type_example"; // string | 

try {
    $result = $apiInstance->oauthClientTokenGet($client_key, $client_secret, $grant_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->oauthClientTokenGet: ', $e->getMessage(), PHP_EOL;
}
?>
```
###DefaultApi_oauthRefreshTokenGet
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Douyin\Open\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_key = "client_key_example"; // string | 应用唯一标识
$grant_type = "grant_type_example"; // string | 填refresh_token
$refresh_token = "refresh_token_example"; // string | 填写通过access_token获取到的refresh_token参数

try {
    $result = $apiInstance->oauthRefreshTokenGet($client_key, $grant_type, $refresh_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->oauthRefreshTokenGet: ', $e->getMessage(), PHP_EOL;
}
?>
```
