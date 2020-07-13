# Douyin\Open\DefaultApi

All URIs are relative to *https://open.snssdk.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**oauthAccessTokenGet**](DefaultApi.md#oauthaccesstokenget) | **GET** /oauth/access_token/ | 获取access_token
[**oauthAuthorizeGet**](DefaultApi.md#oauthauthorizeget) | **GET** /oauth/authorize/ | 获取授权码(code)
[**oauthClientTokenGet**](DefaultApi.md#oauthclienttokenget) | **GET** /oauth/client_token/ | 生成client_token
[**oauthRefreshTokenGet**](DefaultApi.md#oauthrefreshtokenget) | **GET** /oauth/refresh_token/ | 刷新access_token

# **oauthAccessTokenGet**
> \Douyin\Open\Model\OauthAccessTokenResponse oauthAccessTokenGet($client_key, $client_secret, $code, $grant_type)

获取access_token

### Example
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

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_key** | **string**| 应用唯一标识 |
 **client_secret** | **string**| 应用唯一标识对应的密钥 |
 **code** | **string**| 授权码 |
 **grant_type** | **string**|  |

### Return type

[**\Douyin\Open\Model\OauthAccessTokenResponse**](../Model/OauthAccessTokenResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **oauthAuthorizeGet**
> oauthAuthorizeGet($client_key, $response_type, $scope, $redirect_uri, $state)

获取授权码(code)

注意该URL不是用来请求的, 需要展示给用户用于扫码。  在抖音APP支持端内唤醒的版本内打开的话会弹出客户端原生授权页面。  使用本接口前提:    1. 首先你需要去官网申请，使你的应用可以使用特定的Scope，具体需要哪些Scope，请查看各接口定义。    2. 其次你需要在本URL的scope字段中填上用户需要授权给你的Scope。    3. 用户授权通过后，你才可以调用相应的接口。

### Example
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

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_key** | **string**| 应用唯一标识 |
 **response_type** | **string**| 填写code |
 **scope** | **string**| 应用授权作用域,多个授权作用域以英文逗号（,）分隔 |
 **redirect_uri** | **string**| 授权成功后的回调地址，必须以http/https开头。 |
 **state** | **string**| 用于保持请求和回调的状态 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **oauthClientTokenGet**
> \Douyin\Open\Model\OauthClientTokenResponse oauthClientTokenGet($client_key, $client_secret, $grant_type)

生成client_token

### Example
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

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_key** | **string**| 应用唯一标识 |
 **client_secret** | **string**| 应用唯一标识对应的密钥 |
 **grant_type** | **string**|  |

### Return type

[**\Douyin\Open\Model\OauthClientTokenResponse**](../Model/OauthClientTokenResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **oauthRefreshTokenGet**
> \Douyin\Open\Model\OauthRefreshTokenResponse oauthRefreshTokenGet($client_key, $grant_type, $refresh_token)

刷新access_token

### Example
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

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_key** | **string**| 应用唯一标识 |
 **grant_type** | **string**| 填refresh_token |
 **refresh_token** | **string**| 填写通过access_token获取到的refresh_token参数 |

### Return type

[**\Douyin\Open\Model\OauthRefreshTokenResponse**](../Model/OauthRefreshTokenResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

