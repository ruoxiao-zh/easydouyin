# Douyin\Open\DataExternalItemApi

All URIs are relative to *https://open.douyin.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**dataExternalItemBaseGet**](DataExternalItemApi.md#dataexternalitembaseget) | **GET** /data/external/item/base/ | 获取视频基础数据
[**dataExternalItemCommentGet**](DataExternalItemApi.md#dataexternalitemcommentget) | **GET** /data/external/item/comment/ | 获取视频评论数据
[**dataExternalItemLikeGet**](DataExternalItemApi.md#dataexternalitemlikeget) | **GET** /data/external/item/like/ | 获取视频点赞数据
[**dataExternalItemPlayGet**](DataExternalItemApi.md#dataexternalitemplayget) | **GET** /data/external/item/play/ | 获取视频播放数据
[**dataExternalItemShareGet**](DataExternalItemApi.md#dataexternalitemshareget) | **GET** /data/external/item/share/ | 获取视频分享数据

# **dataExternalItemBaseGet**
> \Douyin\Open\Model\DataExternalItemBaseResponse dataExternalItemBaseGet($open_id, $access_token, $item_id)

获取视频基础数据

* Scope: `data.external.item`

### Example
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

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **open_id** | **string**| 通过/oauth/access_token/获取，用户唯一标志 |
 **access_token** | **string**| 调用/oauth/access_token/生成的token，此token需要用户授权。 |
 **item_id** | **string**| item_id，仅能查询access_token对应用户上传的视频 |

### Return type

[**\Douyin\Open\Model\DataExternalItemBaseResponse**](../Model/DataExternalItemBaseResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataExternalItemCommentGet**
> \Douyin\Open\Model\DataExternalItemCommentResponse dataExternalItemCommentGet($open_id, $access_token, $item_id, $date_type)

获取视频评论数据

* Scope: `data.external.item`

### Example
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

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **open_id** | **string**| 通过/oauth/access_token/获取，用户唯一标志 |
 **access_token** | **string**| 调用/oauth/access_token/生成的token，此token需要用户授权。 |
 **item_id** | **string**| item_id，仅能查询access_token对应用户上传的视频 |
 **date_type** | **int**| 近7/15天；输入7代表7天、15代表15天 |

### Return type

[**\Douyin\Open\Model\DataExternalItemCommentResponse**](../Model/DataExternalItemCommentResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataExternalItemLikeGet**
> \Douyin\Open\Model\DataExternalItemLikeResponse dataExternalItemLikeGet($open_id, $access_token, $item_id, $date_type)

获取视频点赞数据

* Scope: `data.external.item`

### Example
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

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **open_id** | **string**| 通过/oauth/access_token/获取，用户唯一标志 |
 **access_token** | **string**| 调用/oauth/access_token/生成的token，此token需要用户授权。 |
 **item_id** | **string**| item_id，仅能查询access_token对应用户上传的视频 |
 **date_type** | **int**| 近7/15天；输入7代表7天、15代表15天 |

### Return type

[**\Douyin\Open\Model\DataExternalItemLikeResponse**](../Model/DataExternalItemLikeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataExternalItemPlayGet**
> \Douyin\Open\Model\DataExternalItemPlayResponse dataExternalItemPlayGet($open_id, $access_token, $item_id, $date_type)

获取视频播放数据

* Scope: `data.external.item`

### Example
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

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **open_id** | **string**| 通过/oauth/access_token/获取，用户唯一标志 |
 **access_token** | **string**| 调用/oauth/access_token/生成的token，此token需要用户授权。 |
 **item_id** | **string**| item_id，仅能查询access_token对应用户上传的视频 |
 **date_type** | **int**| 近7/15天；输入7代表7天、15代表15天 |

### Return type

[**\Douyin\Open\Model\DataExternalItemPlayResponse**](../Model/DataExternalItemPlayResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataExternalItemShareGet**
> \Douyin\Open\Model\DataExternalItemShareResponse dataExternalItemShareGet($open_id, $access_token, $item_id, $date_type)

获取视频分享数据

* Scope: `data.external.item`

### Example
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

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **open_id** | **string**| 通过/oauth/access_token/获取，用户唯一标志 |
 **access_token** | **string**| 调用/oauth/access_token/生成的token，此token需要用户授权。 |
 **item_id** | **string**| item_id，仅能查询access_token对应用户上传的视频 |
 **date_type** | **int**| 近7/15天；输入7代表7天、15代表15天 |

### Return type

[**\Douyin\Open\Model\DataExternalItemShareResponse**](../Model/DataExternalItemShareResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

