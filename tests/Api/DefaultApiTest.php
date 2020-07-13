<?php
/**
 * DefaultApiTest
 * PHP version 5
 *
 * @category Class
 * @package  Douyin\Open
 * @author   抖音小开
 */

namespace Douyin\Open;

use Douyin\Open\Configuration;
use Douyin\Open\ApiException;
use Douyin\Open\ObjectSerializer;

/**
 * DefaultApiTest Class Doc Comment
 *
 * @category Class
 * @author   抖音小开
 */
class DefaultApiTest extends \PHPUnit\Framework\TestCase
{
    protected $apiInstance;
    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test case for oauthAccessTokenGet
     *
     * 获取access_token.
     *
     */
    public function testOauthAccessTokenGet()
    {
        $client_key = "client_key_example"; // string | 应用唯一标识
$client_secret = "client_secret_example"; // string | 应用唯一标识对应的密钥
$code = "code_example"; // string | 授权码
$grant_type = "grant_type_example"; // string | 写死\"authorization_code\"即可

        try {
        $result = $this->apiInstance->oauthAccessTokenGet($client_key, $client_secret, $code, $grant_type);
            print_r($result);
        } catch (Exception $e) {
            echo 'Exception when calling DefaultApi->oauthAccessTokenGet: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * Test case for oauthClientTokenGet
     *
     * 生成client_token.
     *
     */
    public function testOauthClientTokenGet()
    {
        $client_key = "client_key_example"; // string | 应用唯一标识
$client_secret = "client_secret_example"; // string | 应用唯一标识对应的密钥
$grant_type = "grant_type_example"; // string | 

        try {
        $result = $this->apiInstance->oauthClientTokenGet($client_key, $client_secret, $grant_type);
            print_r($result);
        } catch (Exception $e) {
            echo 'Exception when calling DefaultApi->oauthClientTokenGet: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * Test case for oauthRefreshTokenGet
     *
     * 刷新access_token.
     *
     */
    public function testOauthRefreshTokenGet()
    {
        $client_key = "client_key_example"; // string | 应用唯一标识
$grant_type = "grant_type_example"; // string | 填refresh_token
$refresh_token = "refresh_token_example"; // string | 填写通过access_token获取到的refresh_token参数

        try {
        $result = $this->apiInstance->oauthRefreshTokenGet($client_key, $grant_type, $refresh_token);
            print_r($result);
        } catch (Exception $e) {
            echo 'Exception when calling DefaultApi->oauthRefreshTokenGet: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * Test case for platformOauthConnectGet
     *
     * 获取授权码(code).
     *
     */
    public function testPlatformOauthConnectGet()
    {
        $client_key = "client_key_example"; // string | 应用唯一标识
$response_type = "response_type_example"; // string | 填写code
$scope = "scope_example"; // string | 应用授权作用域,多个授权作用域以英文逗号（,）分隔
$redirect_uri = "redirect_uri_example"; // string | 授权成功后的回调地址，必须以http/https开头。
$state = "state_example"; // string | 用于保持请求和回调的状态

        try {
        $this->apiInstance->platformOauthConnectGet($client_key, $response_type, $scope, $redirect_uri, $state);
        } catch (Exception $e) {
            echo 'Exception when calling DefaultApi->platformOauthConnectGet: ', $e->getMessage(), PHP_EOL;
        }
    }
}
