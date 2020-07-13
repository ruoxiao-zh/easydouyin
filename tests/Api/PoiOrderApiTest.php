<?php
/**
 * PoiOrderApiTest
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
 * PoiOrderApiTest Class Doc Comment
 *
 * @category Class
 * @author   抖音小开
 */
class PoiOrderApiTest extends \PHPUnit\Framework\TestCase
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
     * Test case for poiExtHotelOrderCancelPost
     *
     * 订单退款(该接口由接入方实现).
     *
     */
    public function testPoiExtHotelOrderCancelPost()
    {
        $body = new \Douyin\Open\Model\PoiExtHotelOrderCancelBody(); // \Douyin\Open\Model\PoiExtHotelOrderCancelBody | 

        try {
        $result = $this->apiInstance->poiExtHotelOrderCancelPost($body);
            print_r($result);
        } catch (Exception $e) {
            echo 'Exception when calling PoiOrderApi->poiExtHotelOrderCancelPost: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * Test case for poiExtHotelOrderCommitPost
     *
     * 下单接口(该接口由接入方实现).
     *
     */
    public function testPoiExtHotelOrderCommitPost()
    {
        $body = new \Douyin\Open\Model\PoiExtHotelOrderCommitBody(); // \Douyin\Open\Model\PoiExtHotelOrderCommitBody | 

        try {
        $result = $this->apiInstance->poiExtHotelOrderCommitPost($body);
            print_r($result);
        } catch (Exception $e) {
            echo 'Exception when calling PoiOrderApi->poiExtHotelOrderCommitPost: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * Test case for poiExtHotelOrderStatusPost
     *
     * 订单状态通知(该接口由接入方实现).
     *
     */
    public function testPoiExtHotelOrderStatusPost()
    {
        $body = new \Douyin\Open\Model\PoiExtHotelOrderStatusBody(); // \Douyin\Open\Model\PoiExtHotelOrderStatusBody | 

        try {
        $result = $this->apiInstance->poiExtHotelOrderStatusPost($body);
            print_r($result);
        } catch (Exception $e) {
            echo 'Exception when calling PoiOrderApi->poiExtHotelOrderStatusPost: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * Test case for poiOrderStatusPost
     *
     * 订单状态同步接口.
     *
     */
    public function testPoiOrderStatusPost()
    {
        $body = new \Douyin\Open\Model\PoiOrderStatusBody(); // \Douyin\Open\Model\PoiOrderStatusBody | 
$access_token = "clt.943da17996fb5cebfbc70c044c3fc25a57T54DcjT6HNKGqnUdxzy1KcxFnZ"; // string | 调用/oauth/client_token/生成的token，此token不需要用户授权。

        try {
        $result = $this->apiInstance->poiOrderStatusPost($body, $access_token);
            print_r($result);
        } catch (Exception $e) {
            echo 'Exception when calling PoiOrderApi->poiOrderStatusPost: ', $e->getMessage(), PHP_EOL;
        }
    }
}
