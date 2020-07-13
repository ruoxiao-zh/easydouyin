###DataExternalUserApi_dataExternalUserCommentGet
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Douyin\Open\Api\DataExternalUserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$open_id = "ba253642-0590-40bc-9bdf-9a1334b94059"; // string | 通过/oauth/access_token/获取，用户唯一标志
$access_token = "act.1d1021d2aee3d41fee2d2add43456badMFZnrhFhfWotu3Ecuiuka27L56lr"; // string | 调用/oauth/access_token/生成的token，此token需要用户授权。
$date_type = 56; // int | 近7/15天；输入7代表7天、15代表15天

try {
    $result = $apiInstance->dataExternalUserCommentGet($open_id, $access_token, $date_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataExternalUserApi->dataExternalUserCommentGet: ', $e->getMessage(), PHP_EOL;
}
?>
```
###DataExternalUserApi_dataExternalUserFansGet
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Douyin\Open\Api\DataExternalUserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$open_id = "ba253642-0590-40bc-9bdf-9a1334b94059"; // string | 通过/oauth/access_token/获取，用户唯一标志
$access_token = "act.1d1021d2aee3d41fee2d2add43456badMFZnrhFhfWotu3Ecuiuka27L56lr"; // string | 调用/oauth/access_token/生成的token，此token需要用户授权。
$date_type = 56; // int | 近7/15天；输入7代表7天、15代表15天

try {
    $result = $apiInstance->dataExternalUserFansGet($open_id, $access_token, $date_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataExternalUserApi->dataExternalUserFansGet: ', $e->getMessage(), PHP_EOL;
}
?>
```
###DataExternalUserApi_dataExternalUserItemGet
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Douyin\Open\Api\DataExternalUserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$open_id = "ba253642-0590-40bc-9bdf-9a1334b94059"; // string | 通过/oauth/access_token/获取，用户唯一标志
$access_token = "act.1d1021d2aee3d41fee2d2add43456badMFZnrhFhfWotu3Ecuiuka27L56lr"; // string | 调用/oauth/access_token/生成的token，此token需要用户授权。
$date_type = 56; // int | 近7/15天；输入7代表7天、15代表15天

try {
    $result = $apiInstance->dataExternalUserItemGet($open_id, $access_token, $date_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataExternalUserApi->dataExternalUserItemGet: ', $e->getMessage(), PHP_EOL;
}
?>
```
###DataExternalUserApi_dataExternalUserLikeGet
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Douyin\Open\Api\DataExternalUserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$open_id = "ba253642-0590-40bc-9bdf-9a1334b94059"; // string | 通过/oauth/access_token/获取，用户唯一标志
$access_token = "act.1d1021d2aee3d41fee2d2add43456badMFZnrhFhfWotu3Ecuiuka27L56lr"; // string | 调用/oauth/access_token/生成的token，此token需要用户授权。
$date_type = 56; // int | 近7/15天；输入7代表7天、15代表15天

try {
    $result = $apiInstance->dataExternalUserLikeGet($open_id, $access_token, $date_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataExternalUserApi->dataExternalUserLikeGet: ', $e->getMessage(), PHP_EOL;
}
?>
```
###DataExternalUserApi_dataExternalUserProfileGet
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Douyin\Open\Api\DataExternalUserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$open_id = "ba253642-0590-40bc-9bdf-9a1334b94059"; // string | 通过/oauth/access_token/获取，用户唯一标志
$access_token = "act.1d1021d2aee3d41fee2d2add43456badMFZnrhFhfWotu3Ecuiuka27L56lr"; // string | 调用/oauth/access_token/生成的token，此token需要用户授权。
$date_type = 56; // int | 近7/15天；输入7代表7天、15代表15天

try {
    $result = $apiInstance->dataExternalUserProfileGet($open_id, $access_token, $date_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataExternalUserApi->dataExternalUserProfileGet: ', $e->getMessage(), PHP_EOL;
}
?>
```
###DataExternalUserApi_dataExternalUserShareGet
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Douyin\Open\Api\DataExternalUserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$open_id = "ba253642-0590-40bc-9bdf-9a1334b94059"; // string | 通过/oauth/access_token/获取，用户唯一标志
$access_token = "act.1d1021d2aee3d41fee2d2add43456badMFZnrhFhfWotu3Ecuiuka27L56lr"; // string | 调用/oauth/access_token/生成的token，此token需要用户授权。
$date_type = 56; // int | 近7/15天；输入7代表7天、15代表15天

try {
    $result = $apiInstance->dataExternalUserShareGet($open_id, $access_token, $date_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataExternalUserApi->dataExternalUserShareGet: ', $e->getMessage(), PHP_EOL;
}
?>
```
