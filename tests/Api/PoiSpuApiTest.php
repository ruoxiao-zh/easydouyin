<?php
/**
 * PoiSpuApiTest
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
 * PoiSpuApiTest Class Doc Comment
 *
 * @category Class
 * @author   抖音小开
 */
class PoiSpuApiTest extends \PHPUnit\Framework\TestCase
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
     * Test case for poiSkuSyncPost
     *
     * SKU同步.
     *
     */
    public function testPoiSkuSyncPost()
    {
        $body = new \Douyin\Open\Model\PoiSkuSyncBody(); // \Douyin\Open\Model\PoiSkuSyncBody | 
$access_token = "clt.943da17996fb5cebfbc70c044c3fc25a57T54DcjT6HNKGqnUdxzy1KcxFnZ"; // string | 调用/oauth/client_token/生成的token，此token不需要用户授权。

        try {
        $result = $this->apiInstance->poiSkuSyncPost($body, $access_token);
            print_r($result);
        } catch (Exception $e) {
            echo 'Exception when calling PoiSpuApi->poiSkuSyncPost: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * Test case for poiSpuQueryGet
     *
     * 查询SPU.
     *
     */
    public function testPoiSpuQueryGet()
    {
        $access_token = "clt.943da17996fb5cebfbc70c044c3fc25a57T54DcjT6HNKGqnUdxzy1KcxFnZ"; // string | 调用/oauth/client_token/生成的token，此token不需要用户授权。
$spu_ext_id = "spu_ext_id_example"; // string | 

        try {
        $result = $this->apiInstance->poiSpuQueryGet($access_token, $spu_ext_id);
            print_r($result);
        } catch (Exception $e) {
            echo 'Exception when calling PoiSpuApi->poiSpuQueryGet: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * Test case for poiSpuSyncPost
     *
     * SPU同步.
     *
     */
    public function testPoiSpuSyncPost()
    {
        $body = new \Douyin\Open\Model\PoiSpuSyncBody(); // \Douyin\Open\Model\PoiSpuSyncBody | 
$access_token = "clt.943da17996fb5cebfbc70c044c3fc25a57T54DcjT6HNKGqnUdxzy1KcxFnZ"; // string | 调用/oauth/client_token/生成的token，此token不需要用户授权。

        try {
        $result = $this->apiInstance->poiSpuSyncPost($body, $access_token);
            print_r($result);
        } catch (Exception $e) {
            echo 'Exception when calling PoiSpuApi->poiSpuSyncPost: ', $e->getMessage(), PHP_EOL;
        }
    }
}
