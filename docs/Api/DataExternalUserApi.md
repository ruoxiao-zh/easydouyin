# Douyin\Open\DataExternalUserApi

All URIs are relative to *https://open.douyin.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**dataExternalUserCommentGet**](DataExternalUserApi.md#dataexternalusercommentget) | **GET** /data/external/user/comment/ | 获取用户评论数
[**dataExternalUserFansGet**](DataExternalUserApi.md#dataexternaluserfansget) | **GET** /data/external/user/fans/ | 获取用户粉丝数
[**dataExternalUserItemGet**](DataExternalUserApi.md#dataexternaluseritemget) | **GET** /data/external/user/item/ | 获取用户视频情况
[**dataExternalUserLikeGet**](DataExternalUserApi.md#dataexternaluserlikeget) | **GET** /data/external/user/like/ | 获取用户点赞数
[**dataExternalUserProfileGet**](DataExternalUserApi.md#dataexternaluserprofileget) | **GET** /data/external/user/profile/ | 获取用户主页访问数
[**dataExternalUserShareGet**](DataExternalUserApi.md#dataexternalusershareget) | **GET** /data/external/user/share/ | 获取用户分享数

# **dataExternalUserCommentGet**
> \Douyin\Open\Model\DataExternalUserCommentResponse dataExternalUserCommentGet($open_id, $access_token, $date_type)

获取用户评论数

* Scope: `data.external.user`

### Example
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

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **open_id** | **string**| 通过/oauth/access_token/获取，用户唯一标志 |
 **access_token** | **string**| 调用/oauth/access_token/生成的token，此token需要用户授权。 |
 **date_type** | **int**| 近7/15天；输入7代表7天、15代表15天 |

### Return type

[**\Douyin\Open\Model\DataExternalUserCommentResponse**](../Model/DataExternalUserCommentResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataExternalUserFansGet**
> \Douyin\Open\Model\DataExternalUserFansResponse dataExternalUserFansGet($open_id, $access_token, $date_type)

获取用户粉丝数

* Scope: `data.external.user`

### Example
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

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **open_id** | **string**| 通过/oauth/access_token/获取，用户唯一标志 |
 **access_token** | **string**| 调用/oauth/access_token/生成的token，此token需要用户授权。 |
 **date_type** | **int**| 近7/15天；输入7代表7天、15代表15天 |

### Return type

[**\Douyin\Open\Model\DataExternalUserFansResponse**](../Model/DataExternalUserFansResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataExternalUserItemGet**
> \Douyin\Open\Model\DataExternalUserItemResponse dataExternalUserItemGet($open_id, $access_token, $date_type)

获取用户视频情况

* Scope: `data.external.user`

### Example
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

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **open_id** | **string**| 通过/oauth/access_token/获取，用户唯一标志 |
 **access_token** | **string**| 调用/oauth/access_token/生成的token，此token需要用户授权。 |
 **date_type** | **int**| 近7/15天；输入7代表7天、15代表15天 |

### Return type

[**\Douyin\Open\Model\DataExternalUserItemResponse**](../Model/DataExternalUserItemResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataExternalUserLikeGet**
> \Douyin\Open\Model\DataExternalUserLikeResponse dataExternalUserLikeGet($open_id, $access_token, $date_type)

获取用户点赞数

* Scope: `data.external.user`

### Example
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

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **open_id** | **string**| 通过/oauth/access_token/获取，用户唯一标志 |
 **access_token** | **string**| 调用/oauth/access_token/生成的token，此token需要用户授权。 |
 **date_type** | **int**| 近7/15天；输入7代表7天、15代表15天 |

### Return type

[**\Douyin\Open\Model\DataExternalUserLikeResponse**](../Model/DataExternalUserLikeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataExternalUserProfileGet**
> \Douyin\Open\Model\DataExternalUserProfileResponse dataExternalUserProfileGet($open_id, $access_token, $date_type)

获取用户主页访问数

* Scope: `data.external.user`

### Example
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

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **open_id** | **string**| 通过/oauth/access_token/获取，用户唯一标志 |
 **access_token** | **string**| 调用/oauth/access_token/生成的token，此token需要用户授权。 |
 **date_type** | **int**| 近7/15天；输入7代表7天、15代表15天 |

### Return type

[**\Douyin\Open\Model\DataExternalUserProfileResponse**](../Model/DataExternalUserProfileResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataExternalUserShareGet**
> \Douyin\Open\Model\DataExternalUserShareResponse dataExternalUserShareGet($open_id, $access_token, $date_type)

获取用户分享数

* Scope: `data.external.user`

### Example
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

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **open_id** | **string**| 通过/oauth/access_token/获取，用户唯一标志 |
 **access_token** | **string**| 调用/oauth/access_token/生成的token，此token需要用户授权。 |
 **date_type** | **int**| 近7/15天；输入7代表7天、15代表15天 |

### Return type

[**\Douyin\Open\Model\DataExternalUserShareResponse**](../Model/DataExternalUserShareResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

