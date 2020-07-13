###VideoPublishApi_videoCreatePost
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Douyin\Open\Api\VideoPublishApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$open_id = "ba253642-0590-40bc-9bdf-9a1334b94059"; // string | 通过/oauth/access_token/获取，用户唯一标志
$access_token = "act.1d1021d2aee3d41fee2d2add43456badMFZnrhFhfWotu3Ecuiuka27L56lr"; // string | 调用/oauth/access_token/生成的token，此token需要用户授权。
$body = new \Douyin\Open\Model\VideoCreateBody(); // \Douyin\Open\Model\VideoCreateBody | 

try {
    $result = $apiInstance->videoCreatePost($open_id, $access_token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VideoPublishApi->videoCreatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```
###VideoPublishApi_videoPartCompletePost
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Douyin\Open\Api\VideoPublishApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$open_id = "ba253642-0590-40bc-9bdf-9a1334b94059"; // string | 通过/oauth/access_token/获取，用户唯一标志
$access_token = "act.1d1021d2aee3d41fee2d2add43456badMFZnrhFhfWotu3Ecuiuka27L56lr"; // string | 调用/oauth/access_token/生成的token，此token需要用户授权。
$upload_id = "upload_id_example"; // string | 分片上传的标记。有限时间为2小时。

try {
    $result = $apiInstance->videoPartCompletePost($open_id, $access_token, $upload_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VideoPublishApi->videoPartCompletePost: ', $e->getMessage(), PHP_EOL;
}
?>
```
###VideoPublishApi_videoPartInitPost
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Douyin\Open\Api\VideoPublishApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$open_id = "ba253642-0590-40bc-9bdf-9a1334b94059"; // string | 通过/oauth/access_token/获取，用户唯一标志
$access_token = "act.1d1021d2aee3d41fee2d2add43456badMFZnrhFhfWotu3Ecuiuka27L56lr"; // string | 调用/oauth/access_token/生成的token，此token需要用户授权。

try {
    $result = $apiInstance->videoPartInitPost($open_id, $access_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VideoPublishApi->videoPartInitPost: ', $e->getMessage(), PHP_EOL;
}
?>
```
###VideoPublishApi_videoPartUploadPost
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Douyin\Open\Api\VideoPublishApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$video = "video_example"; // string | 
$open_id = "ba253642-0590-40bc-9bdf-9a1334b94059"; // string | 通过/oauth/access_token/获取，用户唯一标志
$access_token = "act.1d1021d2aee3d41fee2d2add43456badMFZnrhFhfWotu3Ecuiuka27L56lr"; // string | 调用/oauth/access_token/生成的token，此token需要用户授权。
$upload_id = "upload_id_example"; // string | 分片上传的标记。有限时间为2小时。
$part_number = 56; // int | 第几个分片，从1开始

try {
    $result = $apiInstance->videoPartUploadPost($video, $open_id, $access_token, $upload_id, $part_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VideoPublishApi->videoPartUploadPost: ', $e->getMessage(), PHP_EOL;
}
?>
```
###VideoPublishApi_videoUploadPost
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Douyin\Open\Api\VideoPublishApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$video = "video_example"; // string | 
$open_id = "ba253642-0590-40bc-9bdf-9a1334b94059"; // string | 通过/oauth/access_token/获取，用户唯一标志
$access_token = "act.1d1021d2aee3d41fee2d2add43456badMFZnrhFhfWotu3Ecuiuka27L56lr"; // string | 调用/oauth/access_token/生成的token，此token需要用户授权。

try {
    $result = $apiInstance->videoUploadPost($video, $open_id, $access_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VideoPublishApi->videoUploadPost: ', $e->getMessage(), PHP_EOL;
}
?>
```
