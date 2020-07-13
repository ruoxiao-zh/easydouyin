<?php
/**
 * EventStatusApiTest
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
 * EventStatusApiTest Class Doc Comment
 *
 * @category Class
 * @author   抖音小开
 */
class EventStatusApiTest extends \PHPUnit\Framework\TestCase
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
     * Test case for eventStatusListGet
     *
     * 获取事件订阅状态.
     *
     */
    public function testEventStatusListGet()
    {
        $access_token = "clt.943da17996fb5cebfbc70c044c3fc25a57T54DcjT6HNKGqnUdxzy1KcxFnZ"; // string | 调用/oauth/client_token/生成的token，此token不需要用户授权。

        try {
        $result = $this->apiInstance->eventStatusListGet($access_token);
            print_r($result);
        } catch (Exception $e) {
            echo 'Exception when calling EventStatusApi->eventStatusListGet: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * Test case for eventStatusUpdatePost
     *
     * 更新应用推送事件订阅状态.
     *
     */
    public function testEventStatusUpdatePost()
    {
        $access_token = "clt.943da17996fb5cebfbc70c044c3fc25a57T54DcjT6HNKGqnUdxzy1KcxFnZ"; // string | 调用/oauth/client_token/生成的token，此token不需要用户授权。
$body = new \Douyin\Open\Model\EventStatusUpdateBody(); // \Douyin\Open\Model\EventStatusUpdateBody | 

        try {
        $result = $this->apiInstance->eventStatusUpdatePost($access_token, $body);
            print_r($result);
        } catch (Exception $e) {
            echo 'Exception when calling EventStatusApi->eventStatusUpdatePost: ', $e->getMessage(), PHP_EOL;
        }
    }
}
