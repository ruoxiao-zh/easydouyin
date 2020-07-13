###SandboxApi_sandboxWebhookEventSendPost
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Douyin\Open\Api\SandboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Douyin\Open\Model\SandboxWebhookEventSendBody(); // \Douyin\Open\Model\SandboxWebhookEventSendBody | 
$access_token = "clt.943da17996fb5cebfbc70c044c3fc25a57T54DcjT6HNKGqnUdxzy1KcxFnZ"; // string | 调用/oauth/client_token/生成的token，此token不需要用户授权。

try {
    $result = $apiInstance->sandboxWebhookEventSendPost($body, $access_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SandboxApi->sandboxWebhookEventSendPost: ', $e->getMessage(), PHP_EOL;
}
?>
```
