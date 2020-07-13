###EnterpriseLeadsApi_enterpriseLeadsTagCreatePost
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Douyin\Open\Api\EnterpriseLeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$open_id = "ba253642-0590-40bc-9bdf-9a1334b94059"; // string | 通过/oauth/access_token/获取，用户唯一标志
$access_token = "act.1d1021d2aee3d41fee2d2add43456badMFZnrhFhfWotu3Ecuiuka27L56lr"; // string | 调用/oauth/access_token/生成的token，此token需要用户授权。
$body = new \Douyin\Open\Model\EnterpriseLeadsTagCreateBody(); // \Douyin\Open\Model\EnterpriseLeadsTagCreateBody | 

try {
    $result = $apiInstance->enterpriseLeadsTagCreatePost($open_id, $access_token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterpriseLeadsApi->enterpriseLeadsTagCreatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```
###EnterpriseLeadsApi_enterpriseLeadsTagDeletePost
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Douyin\Open\Api\EnterpriseLeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$open_id = "ba253642-0590-40bc-9bdf-9a1334b94059"; // string | 通过/oauth/access_token/获取，用户唯一标志
$access_token = "act.1d1021d2aee3d41fee2d2add43456badMFZnrhFhfWotu3Ecuiuka27L56lr"; // string | 调用/oauth/access_token/生成的token，此token需要用户授权。
$body = new \Douyin\Open\Model\EnterpriseLeadsTagDeleteBody(); // \Douyin\Open\Model\EnterpriseLeadsTagDeleteBody | 

try {
    $result = $apiInstance->enterpriseLeadsTagDeletePost($open_id, $access_token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterpriseLeadsApi->enterpriseLeadsTagDeletePost: ', $e->getMessage(), PHP_EOL;
}
?>
```
###EnterpriseLeadsApi_enterpriseLeadsTagListGet
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Douyin\Open\Api\EnterpriseLeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$open_id = "ba253642-0590-40bc-9bdf-9a1334b94059"; // string | 通过/oauth/access_token/获取，用户唯一标志
$access_token = "act.1d1021d2aee3d41fee2d2add43456badMFZnrhFhfWotu3Ecuiuka27L56lr"; // string | 调用/oauth/access_token/生成的token，此token需要用户授权。
$count = 10; // int | 每页数量
$cursor = 56; // int | 分页游标

try {
    $result = $apiInstance->enterpriseLeadsTagListGet($open_id, $access_token, $count, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterpriseLeadsApi->enterpriseLeadsTagListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```
###EnterpriseLeadsApi_enterpriseLeadsTagUpdatePost
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Douyin\Open\Api\EnterpriseLeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$open_id = "ba253642-0590-40bc-9bdf-9a1334b94059"; // string | 通过/oauth/access_token/获取，用户唯一标志
$access_token = "act.1d1021d2aee3d41fee2d2add43456badMFZnrhFhfWotu3Ecuiuka27L56lr"; // string | 调用/oauth/access_token/生成的token，此token需要用户授权。
$body = new \Douyin\Open\Model\EnterpriseLeadsTagUpdateBody(); // \Douyin\Open\Model\EnterpriseLeadsTagUpdateBody | 

try {
    $result = $apiInstance->enterpriseLeadsTagUpdatePost($open_id, $access_token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterpriseLeadsApi->enterpriseLeadsTagUpdatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```
###EnterpriseLeadsApi_enterpriseLeadsTagUserListGet
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Douyin\Open\Api\EnterpriseLeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$open_id = "ba253642-0590-40bc-9bdf-9a1334b94059"; // string | 通过/oauth/access_token/获取，用户唯一标志
$access_token = "act.1d1021d2aee3d41fee2d2add43456badMFZnrhFhfWotu3Ecuiuka27L56lr"; // string | 调用/oauth/access_token/生成的token，此token需要用户授权。
$count = 10; // int | 每页数量
$tag_id = 56; // int | 
$cursor = 56; // int | 分页游标

try {
    $result = $apiInstance->enterpriseLeadsTagUserListGet($open_id, $access_token, $count, $tag_id, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterpriseLeadsApi->enterpriseLeadsTagUserListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```
###EnterpriseLeadsApi_enterpriseLeadsTagUserUpdatePost
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Douyin\Open\Api\EnterpriseLeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$open_id = "ba253642-0590-40bc-9bdf-9a1334b94059"; // string | 通过/oauth/access_token/获取，用户唯一标志
$access_token = "act.1d1021d2aee3d41fee2d2add43456badMFZnrhFhfWotu3Ecuiuka27L56lr"; // string | 调用/oauth/access_token/生成的token，此token需要用户授权。
$body = new \Douyin\Open\Model\EnterpriseLeadsTagUserUpdateBody(); // \Douyin\Open\Model\EnterpriseLeadsTagUserUpdateBody | 

try {
    $result = $apiInstance->enterpriseLeadsTagUserUpdatePost($open_id, $access_token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterpriseLeadsApi->enterpriseLeadsTagUserUpdatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```
###EnterpriseLeadsApi_enterpriseLeadsUserActionListGet
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Douyin\Open\Api\EnterpriseLeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$open_id = "ba253642-0590-40bc-9bdf-9a1334b94059"; // string | 通过/oauth/access_token/获取，用户唯一标志
$access_token = "act.1d1021d2aee3d41fee2d2add43456badMFZnrhFhfWotu3Ecuiuka27L56lr"; // string | 调用/oauth/access_token/生成的token，此token需要用户授权。
$count = 10; // int | 每页数量
$user_id = "user_id_example"; // string | 
$cursor = "cursor_example"; // string | 
$action_type = 56; // int | 

try {
    $result = $apiInstance->enterpriseLeadsUserActionListGet($open_id, $access_token, $count, $user_id, $cursor, $action_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterpriseLeadsApi->enterpriseLeadsUserActionListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```
###EnterpriseLeadsApi_enterpriseLeadsUserDetailGet
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Douyin\Open\Api\EnterpriseLeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$open_id = "ba253642-0590-40bc-9bdf-9a1334b94059"; // string | 通过/oauth/access_token/获取，用户唯一标志
$access_token = "act.1d1021d2aee3d41fee2d2add43456badMFZnrhFhfWotu3Ecuiuka27L56lr"; // string | 调用/oauth/access_token/生成的token，此token需要用户授权。
$user_id = "user_id_example"; // string | 

try {
    $result = $apiInstance->enterpriseLeadsUserDetailGet($open_id, $access_token, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterpriseLeadsApi->enterpriseLeadsUserDetailGet: ', $e->getMessage(), PHP_EOL;
}
?>
```
###EnterpriseLeadsApi_enterpriseLeadsUserListGet
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Douyin\Open\Api\EnterpriseLeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$open_id = "ba253642-0590-40bc-9bdf-9a1334b94059"; // string | 通过/oauth/access_token/获取，用户唯一标志
$access_token = "act.1d1021d2aee3d41fee2d2add43456badMFZnrhFhfWotu3Ecuiuka27L56lr"; // string | 调用/oauth/access_token/生成的token，此token需要用户授权。
$count = 10; // int | 每页数量
$start_time = 56; // int | 
$end_time = 56; // int | 
$action_type = 56; // int | 分类:   * `0` - 全部   * `1` - 私信互动   * `2` - 组件互动   * `3` - 主页互动
$cursor = 56; // int | 分页游标
$leads_level = 56; // int | 用户状态:   * `-1` - 没兴趣   * `0` - 了解   * `1` - 有兴趣   * `2` - 有意愿   * `10` - 已转化

try {
    $result = $apiInstance->enterpriseLeadsUserListGet($open_id, $access_token, $count, $start_time, $end_time, $action_type, $cursor, $leads_level);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterpriseLeadsApi->enterpriseLeadsUserListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```
