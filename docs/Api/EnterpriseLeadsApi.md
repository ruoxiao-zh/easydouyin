# Douyin\Open\EnterpriseLeadsApi

All URIs are relative to *https://open.douyin.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**enterpriseLeadsTagCreatePost**](EnterpriseLeadsApi.md#enterpriseleadstagcreatepost) | **POST** /enterprise/leads/tag/create/ | 创建标签
[**enterpriseLeadsTagDeletePost**](EnterpriseLeadsApi.md#enterpriseleadstagdeletepost) | **POST** /enterprise/leads/tag/delete/ | 删除标签
[**enterpriseLeadsTagListGet**](EnterpriseLeadsApi.md#enterpriseleadstaglistget) | **GET** /enterprise/leads/tag/list/ | 获取标签列表
[**enterpriseLeadsTagUpdatePost**](EnterpriseLeadsApi.md#enterpriseleadstagupdatepost) | **POST** /enterprise/leads/tag/update/ | 编辑标签
[**enterpriseLeadsTagUserListGet**](EnterpriseLeadsApi.md#enterpriseleadstaguserlistget) | **GET** /enterprise/leads/tag/user/list/ | 获取打标签的用户列表
[**enterpriseLeadsTagUserUpdatePost**](EnterpriseLeadsApi.md#enterpriseleadstaguserupdatepost) | **POST** /enterprise/leads/tag/user/update/ | 给用户设置标签
[**enterpriseLeadsUserActionListGet**](EnterpriseLeadsApi.md#enterpriseleadsuseractionlistget) | **GET** /enterprise/leads/user/action/list/ | 获取意向用户互动记录
[**enterpriseLeadsUserDetailGet**](EnterpriseLeadsApi.md#enterpriseleadsuserdetailget) | **GET** /enterprise/leads/user/detail/ | 获取意向用户详情
[**enterpriseLeadsUserListGet**](EnterpriseLeadsApi.md#enterpriseleadsuserlistget) | **GET** /enterprise/leads/user/list/ | 获取意向用户列表

# **enterpriseLeadsTagCreatePost**
> \Douyin\Open\Model\EnterpriseLeadsTagCreateResponse enterpriseLeadsTagCreatePost($open_id, $access_token, $body)

创建标签

* Scope: `enterprise.data` * 一个企业号最多创建100个标签

### Example
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

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **open_id** | **string**| 通过/oauth/access_token/获取，用户唯一标志 |
 **access_token** | **string**| 调用/oauth/access_token/生成的token，此token需要用户授权。 |
 **body** | [**\Douyin\Open\Model\EnterpriseLeadsTagCreateBody**](../Model/EnterpriseLeadsTagCreateBody.md)|  | [optional]

### Return type

[**\Douyin\Open\Model\EnterpriseLeadsTagCreateResponse**](../Model/EnterpriseLeadsTagCreateResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseLeadsTagDeletePost**
> \Douyin\Open\Model\EnterpriseLeadsTagDeleteResponse enterpriseLeadsTagDeletePost($open_id, $access_token, $body)

删除标签

* Scope: `enterprise.data`

### Example
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

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **open_id** | **string**| 通过/oauth/access_token/获取，用户唯一标志 |
 **access_token** | **string**| 调用/oauth/access_token/生成的token，此token需要用户授权。 |
 **body** | [**\Douyin\Open\Model\EnterpriseLeadsTagDeleteBody**](../Model/EnterpriseLeadsTagDeleteBody.md)|  | [optional]

### Return type

[**\Douyin\Open\Model\EnterpriseLeadsTagDeleteResponse**](../Model/EnterpriseLeadsTagDeleteResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseLeadsTagListGet**
> \Douyin\Open\Model\EnterpriseLeadsTagListResponse enterpriseLeadsTagListGet($open_id, $access_token, $count, $cursor)

获取标签列表

* Scope: `enterprise.data`

### Example
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

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **open_id** | **string**| 通过/oauth/access_token/获取，用户唯一标志 |
 **access_token** | **string**| 调用/oauth/access_token/生成的token，此token需要用户授权。 |
 **count** | **int**| 每页数量 |
 **cursor** | **int**| 分页游标 | [optional]

### Return type

[**\Douyin\Open\Model\EnterpriseLeadsTagListResponse**](../Model/EnterpriseLeadsTagListResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseLeadsTagUpdatePost**
> \Douyin\Open\Model\EnterpriseLeadsTagCreateResponse enterpriseLeadsTagUpdatePost($open_id, $access_token, $body)

编辑标签

* Scope: `enterprise.data`

### Example
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

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **open_id** | **string**| 通过/oauth/access_token/获取，用户唯一标志 |
 **access_token** | **string**| 调用/oauth/access_token/生成的token，此token需要用户授权。 |
 **body** | [**\Douyin\Open\Model\EnterpriseLeadsTagUpdateBody**](../Model/EnterpriseLeadsTagUpdateBody.md)|  | [optional]

### Return type

[**\Douyin\Open\Model\EnterpriseLeadsTagCreateResponse**](../Model/EnterpriseLeadsTagCreateResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseLeadsTagUserListGet**
> \Douyin\Open\Model\EnterpriseLeadsTagUserListResponse enterpriseLeadsTagUserListGet($open_id, $access_token, $count, $tag_id, $cursor)

获取打标签的用户列表

* Scope: `enterprise.data`

### Example
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

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **open_id** | **string**| 通过/oauth/access_token/获取，用户唯一标志 |
 **access_token** | **string**| 调用/oauth/access_token/生成的token，此token需要用户授权。 |
 **count** | **int**| 每页数量 |
 **tag_id** | **int**|  |
 **cursor** | **int**| 分页游标 | [optional]

### Return type

[**\Douyin\Open\Model\EnterpriseLeadsTagUserListResponse**](../Model/EnterpriseLeadsTagUserListResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseLeadsTagUserUpdatePost**
> \Douyin\Open\Model\EnterpriseLeadsTagDeleteResponse enterpriseLeadsTagUserUpdatePost($open_id, $access_token, $body)

给用户设置标签

* Scope: `enterprise.data` * 一个用户最多设置5个标签

### Example
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

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **open_id** | **string**| 通过/oauth/access_token/获取，用户唯一标志 |
 **access_token** | **string**| 调用/oauth/access_token/生成的token，此token需要用户授权。 |
 **body** | [**\Douyin\Open\Model\EnterpriseLeadsTagUserUpdateBody**](../Model/EnterpriseLeadsTagUserUpdateBody.md)|  | [optional]

### Return type

[**\Douyin\Open\Model\EnterpriseLeadsTagDeleteResponse**](../Model/EnterpriseLeadsTagDeleteResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseLeadsUserActionListGet**
> \Douyin\Open\Model\EnterpriseLeadsUserActionListResponse enterpriseLeadsUserActionListGet($open_id, $access_token, $count, $user_id, $cursor, $action_type)

获取意向用户互动记录

* Scope: `enterprise.data`

### Example
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

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **open_id** | **string**| 通过/oauth/access_token/获取，用户唯一标志 |
 **access_token** | **string**| 调用/oauth/access_token/生成的token，此token需要用户授权。 |
 **count** | **int**| 每页数量 |
 **user_id** | **string**|  |
 **cursor** | **string**|  | [optional]
 **action_type** | **int**|  | [optional]

### Return type

[**\Douyin\Open\Model\EnterpriseLeadsUserActionListResponse**](../Model/EnterpriseLeadsUserActionListResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseLeadsUserDetailGet**
> \Douyin\Open\Model\EnterpriseLeadsUserDetailResponse enterpriseLeadsUserDetailGet($open_id, $access_token, $user_id)

获取意向用户详情

* Scope: `enterprise.data`

### Example
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

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **open_id** | **string**| 通过/oauth/access_token/获取，用户唯一标志 |
 **access_token** | **string**| 调用/oauth/access_token/生成的token，此token需要用户授权。 |
 **user_id** | **string**|  |

### Return type

[**\Douyin\Open\Model\EnterpriseLeadsUserDetailResponse**](../Model/EnterpriseLeadsUserDetailResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseLeadsUserListGet**
> \Douyin\Open\Model\EnterpriseLeadsUserListResponse enterpriseLeadsUserListGet($open_id, $access_token, $count, $start_time, $end_time, $action_type, $cursor, $leads_level)

获取意向用户列表

* Scope: `enterprise.data`

### Example
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

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **open_id** | **string**| 通过/oauth/access_token/获取，用户唯一标志 |
 **access_token** | **string**| 调用/oauth/access_token/生成的token，此token需要用户授权。 |
 **count** | **int**| 每页数量 |
 **start_time** | **int**|  |
 **end_time** | **int**|  |
 **action_type** | **int**| 分类:   * &#x60;0&#x60; - 全部   * &#x60;1&#x60; - 私信互动   * &#x60;2&#x60; - 组件互动   * &#x60;3&#x60; - 主页互动 |
 **cursor** | **int**| 分页游标 | [optional]
 **leads_level** | **int**| 用户状态:   * &#x60;-1&#x60; - 没兴趣   * &#x60;0&#x60; - 了解   * &#x60;1&#x60; - 有兴趣   * &#x60;2&#x60; - 有意愿   * &#x60;10&#x60; - 已转化 | [optional]

### Return type

[**\Douyin\Open\Model\EnterpriseLeadsUserListResponse**](../Model/EnterpriseLeadsUserListResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

