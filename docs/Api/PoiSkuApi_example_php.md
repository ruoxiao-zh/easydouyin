###PoiSkuApi_poiExtHotelSkuGet
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Douyin\Open\Api\PoiSkuApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$spu_ext_id = array("[\"y0001\",\"y0002\"]"); // string[] | 接入方SPU ID 列表
$start_date = "20191001"; // string | 拉取价格时间区间[start_date, end_date)
$end_date = "20191007"; // string | 拉取价格时间区间[start_date, end_date)

try {
    $result = $apiInstance->poiExtHotelSkuGet($spu_ext_id, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PoiSkuApi->poiExtHotelSkuGet: ', $e->getMessage(), PHP_EOL;
}
?>
```
