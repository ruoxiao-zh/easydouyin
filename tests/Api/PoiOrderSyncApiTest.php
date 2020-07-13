<?php
/**
 * PoiOrderSyncApiTest
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
 * PoiOrderSyncApiTest Class Doc Comment
 *
 * @category Class
 * @author   抖音小开
 */
class PoiOrderSyncApiTest extends \PHPUnit\Framework\TestCase
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
     * Test case for poiOrderSyncPost
     *
     * 订单同步.
     *
     */
    public function testPoiOrderSyncPost()
    {
        $body = new \Douyin\Open\Model\PoiOrderSyncBody(); // \Douyin\Open\Model\PoiOrderSyncBody | 
$access_token = "clt.943da17996fb5cebfbc70c044c3fc25a57T54DcjT6HNKGqnUdxzy1KcxFnZ"; // string | 调用/oauth/client_token/生成的token，此token不需要用户授权。

        try {
        $result = $this->apiInstance->poiOrderSyncPost($body, $access_token);
            print_r($result);
        } catch (Exception $e) {
            echo 'Exception when calling PoiOrderSyncApi->poiOrderSyncPost: ', $e->getMessage(), PHP_EOL;
        }
    }
}
