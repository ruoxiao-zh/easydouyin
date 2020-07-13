# Douyin\Open\PoiSupplierApi

All URIs are relative to *https://open.douyin.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**poiQueryGet**](PoiSupplierApi.md#poiqueryget) | **GET** /poi/query/ | 获取抖音POI ID
[**poiSupplierQueryGet**](PoiSupplierApi.md#poisupplierqueryget) | **GET** /poi/supplier/query/ | 查询店铺
[**poiSupplierSyncPost**](PoiSupplierApi.md#poisuppliersyncpost) | **POST** /poi/supplier/sync/ | 商铺同步

# **poiQueryGet**
> \Douyin\Open\Model\PoiQueryResponse poiQueryGet($access_token, $amap_id)

获取抖音POI ID

* Scope: `poi.product`

### Example
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

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| 调用/oauth/client_token/生成的token，此token不需要用户授权。 |
 **amap_id** | **string**|  |

### Return type

[**\Douyin\Open\Model\PoiQueryResponse**](../Model/PoiQueryResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **poiSupplierQueryGet**
> \Douyin\Open\Model\PoiSupplierQueryResponse poiSupplierQueryGet($access_token, $supplier_ext_id)

查询店铺

* Scope: `poi.product`

### Example
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

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| 调用/oauth/client_token/生成的token，此token不需要用户授权。 |
 **supplier_ext_id** | **string**|  |

### Return type

[**\Douyin\Open\Model\PoiSupplierQueryResponse**](../Model/PoiSupplierQueryResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **poiSupplierSyncPost**
> \Douyin\Open\Model\PoiSupplierSyncResponse poiSupplierSyncPost($body, $access_token)

商铺同步

* Scope: `poi.product`

### Example
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

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Douyin\Open\Model\PoiSupplierSyncBody**](../Model/PoiSupplierSyncBody.md)|  |
 **access_token** | **string**| 调用/oauth/client_token/生成的token，此token不需要用户授权。 |

### Return type

[**\Douyin\Open\Model\PoiSupplierSyncResponse**](../Model/PoiSupplierSyncResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

