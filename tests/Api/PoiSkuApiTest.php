<?php
/**
 * PoiSkuApiTest
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
 * PoiSkuApiTest Class Doc Comment
 *
 * @category Class
 * @author   抖音小开
 */
class PoiSkuApiTest extends \PHPUnit\Framework\TestCase
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
     * Test case for poiExtHotelSkuGet
     *
     * sku拉取(该接口由接入方实现).
     *
     */
    public function testPoiExtHotelSkuGet()
    {
        $spu_ext_id = array("[\"y0001\",\"y0002\"]"); // string[] | 接入方SPU ID 列表
$start_date = "20191001"; // string | 拉取价格时间区间[start_date, end_date)
$end_date = "20191007"; // string | 拉取价格时间区间[start_date, end_date)

        try {
        $result = $this->apiInstance->poiExtHotelSkuGet($spu_ext_id, $start_date, $end_date);
            print_r($result);
        } catch (Exception $e) {
            echo 'Exception when calling PoiSkuApi->poiExtHotelSkuGet: ', $e->getMessage(), PHP_EOL;
        }
    }
}
