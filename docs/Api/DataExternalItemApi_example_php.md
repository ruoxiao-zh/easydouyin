###DataExternalItemApi_dataExternalItemBaseGet
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Douyin\Open\Api\DataExternalItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$open_id = "ba253642-0590-40bc-9bdf-9a1334b94059"; // string | 通过/oauth/access_token/获取，用户唯一标志
$access_token = "act.1d1021d2aee3d41fee2d2add43456badMFZnrhFhfWotu3Ecuiuka27L56lr"; // string | 调用/oauth/access_token/生成的token，此token需要用户授权。
$item_id = "item_id_example"; // string | item_id，仅能查询access_token对应用户上传的视频

try {
    $result = $apiInstance->dataExternalItemBaseGet($open_id, $access_token, $item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataExternalItemApi->dataExternalItemBaseGet: ', $e->getMessage(), PHP_EOL;
}
?>
```
###DataExternalItemApi_dataExternalItemCommentGet
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Douyin\Open\Api\DataExternalItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$open_id = "ba253642-0590-40bc-9bdf-9a1334b94059"; // string | 通过/oauth/access_token/获取，用户唯一标志
$access_token = "act.1d1021d2aee3d41fee2d2add43456badMFZnrhFhfWotu3Ecuiuka27L56lr"; // string | 调用/oauth/access_token/生成的token，此token需要用户授权。
$item_id = "item_id_example"; // string | item_id，仅能查询access_token对应用户上传的视频
$date_type = 56; // int | 近7/15天；输入7代表7天、15代表15天

try {
    $result = $apiInstance->dataExternalItemCommentGet($open_id, $access_token, $item_id, $date_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataExternalItemApi->dataExternalItemCommentGet: ', $e->getMessage(), PHP_EOL;
}
?>
```
###DataExternalItemApi_dataExternalItemLikeGet
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Douyin\Open\Api\DataExternalItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$open_id = "ba253642-0590-40bc-9bdf-9a1334b94059"; // string | 通过/oauth/access_token/获取，用户唯一标志
$access_token = "act.1d1021d2aee3d41fee2d2add43456badMFZnrhFhfWotu3Ecuiuka27L56lr"; // string | 调用/oauth/access_token/生成的token，此token需要用户授权。
$item_id = "item_id_example"; // string | item_id，仅能查询access_token对应用户上传的视频
$date_type = 56; // int | 近7/15天；输入7代表7天、15代表15天

try {
    $result = $apiInstance->dataExternalItemLikeGet($open_id, $access_token, $item_id, $date_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataExternalItemApi->dataExternalItemLikeGet: ', $e->getMessage(), PHP_EOL;
}
?>
```
###DataExternalItemApi_dataExternalItemPlayGet
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Douyin\Open\Api\DataExternalItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$open_id = "ba253642-0590-40bc-9bdf-9a1334b94059"; // string | 通过/oauth/access_token/获取，用户唯一标志
$access_token = "act.1d1021d2aee3d41fee2d2add43456badMFZnrhFhfWotu3Ecuiuka27L56lr"; // string | 调用/oauth/access_token/生成的token，此token需要用户授权。
$item_id = "item_id_example"; // string | item_id，仅能查询access_token对应用户上传的视频
$date_type = 56; // int | 近7/15天；输入7代表7天、15代表15天

try {
    $result = $apiInstance->dataExternalItemPlayGet($open_id, $access_token, $item_id, $date_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataExternalItemApi->dataExternalItemPlayGet: ', $e->getMessage(), PHP_EOL;
}
?>
```
###DataExternalItemApi_dataExternalItemShareGet
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Douyin\Open\Api\DataExternalItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$open_id = "ba253642-0590-40bc-9bdf-9a1334b94059"; // string | 通过/oauth/access_token/获取，用户唯一标志
$access_token = "act.1d1021d2aee3d41fee2d2add43456badMFZnrhFhfWotu3Ecuiuka27L56lr"; // string | 调用/oauth/access_token/生成的token，此token需要用户授权。
$item_id = "item_id_example"; // string | item_id，仅能查询access_token对应用户上传的视频
$date_type = 56; // int | 近7/15天；输入7代表7天、15代表15天

try {
    $result = $apiInstance->dataExternalItemShareGet($open_id, $access_token, $item_id, $date_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataExternalItemApi->dataExternalItemShareGet: ', $e->getMessage(), PHP_EOL;
}
?>
```
