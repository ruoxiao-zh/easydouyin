<?php
/**
 * PoiSearchApiTest
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
 * PoiSearchApiTest Class Doc Comment
 *
 * @category Class
 * @author   抖音小开
 */
class PoiSearchApiTest extends \PHPUnit\Framework\TestCase
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
     * Test case for poiSearchKeywordGet
     *
     * 关键字搜索.
     *
     */
    public function testPoiSearchKeywordGet()
    {
        $access_token = "clt.943da17996fb5cebfbc70c044c3fc25a57T54DcjT6HNKGqnUdxzy1KcxFnZ"; // string | 调用/oauth/client_token/生成的token，此token不需要用户授权。
$count = 10; // int | 每页数量
$keyword = "keyword_example"; // string | 查询关键字，例如美食
$cursor = 0; // int | 分页游标, 第一页请求cursor是0, response中会返回下一页请求用到的cursor, 同时response还会返回has_more来表明是否有更多的数据。
$city = "city_example"; // string | 查询城市，例如上海、北京

        try {
        $result = $this->apiInstance->poiSearchKeywordGet($access_token, $count, $keyword, $cursor, $city);
            print_r($result);
        } catch (Exception $e) {
            echo 'Exception when calling PoiSearchApi->poiSearchKeywordGet: ', $e->getMessage(), PHP_EOL;
        }
    }
}
