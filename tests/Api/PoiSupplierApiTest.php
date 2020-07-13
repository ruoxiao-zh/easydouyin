<?php
/**
 * PoiSupplierApiTest
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
 * PoiSupplierApiTest Class Doc Comment
 *
 * @category Class
 * @author   抖音小开
 */
class PoiSupplierApiTest extends \PHPUnit\Framework\TestCase
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
     * Test case for poiQueryGet
     *
     * 获取抖音POI ID.
     *
     */
    public function testPoiQueryGet()
    {
        $access_token = "clt.943da17996fb5cebfbc70c044c3fc25a57T54DcjT6HNKGqnUdxzy1KcxFnZ"; // string | 调用/oauth/client_token/生成的token，此token不需要用户授权。
$amap_id = "amap_id_example"; // string | 

        try {
        $result = $this->apiInstance->poiQueryGet($access_token, $amap_id);
            print_r($result);
        } catch (Exception $e) {
            echo 'Exception when calling PoiSupplierApi->poiQueryGet: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * Test case for poiSupplierQueryGet
     *
     * 查询店铺.
     *
     */
    public function testPoiSupplierQueryGet()
    {
        $access_token = "clt.943da17996fb5cebfbc70c044c3fc25a57T54DcjT6HNKGqnUdxzy1KcxFnZ"; // string | 调用/oauth/client_token/生成的token，此token不需要用户授权。
$supplier_ext_id = "supplier_ext_id_example"; // string | 

        try {
        $result = $this->apiInstance->poiSupplierQueryGet($access_token, $supplier_ext_id);
            print_r($result);
        } catch (Exception $e) {
            echo 'Exception when calling PoiSupplierApi->poiSupplierQueryGet: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * Test case for poiSupplierSyncPost
     *
     * 商铺同步.
     *
     */
    public function testPoiSupplierSyncPost()
    {
        $body = new \Douyin\Open\Model\PoiSupplierSyncBody(); // \Douyin\Open\Model\PoiSupplierSyncBody | 
$access_token = "clt.943da17996fb5cebfbc70c044c3fc25a57T54DcjT6HNKGqnUdxzy1KcxFnZ"; // string | 调用/oauth/client_token/生成的token，此token不需要用户授权。

        try {
        $result = $this->apiInstance->poiSupplierSyncPost($body, $access_token);
            print_r($result);
        } catch (Exception $e) {
            echo 'Exception when calling PoiSupplierApi->poiSupplierSyncPost: ', $e->getMessage(), PHP_EOL;
        }
    }
}
