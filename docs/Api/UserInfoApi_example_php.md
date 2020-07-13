###UserInfoApi_oauthUserinfoGet
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Douyin\Open\Api\UserInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_token = "access_token_example"; // string | 
$open_id = "open_id_example"; // string | 

try {
    $result = $apiInstance->oauthUserinfoGet($access_token, $open_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserInfoApi->oauthUserinfoGet: ', $e->getMessage(), PHP_EOL;
}
?>
```
