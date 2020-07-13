<?php
/**
 * ShareIdApiTest
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
 * ShareIdApiTest Class Doc Comment
 *
 * @category Class
 * @author   抖音小开
 */
class ShareIdApiTest extends \PHPUnit\Framework\TestCase
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
     * Test case for shareIdGet
     *
     * 获取share-id.
     *
     */
    public function testShareIdGet()
    {
        $access_token = "clt.943da17996fb5cebfbc70c044c3fc25a57T54DcjT6HNKGqnUdxzy1KcxFnZ"; // string | 调用/oauth/client_token/生成的token，此token不需要用户授权。
$need_callback = True; // bool | 
$source_style_id = "source_style_id_example"; // string | 多来源样式id（暂未开放）
$default_hashtag = "default_hashtag_example"; // string | 追踪分享默认hashtag
$link_param = "link_param_example"; // string | 分享来源url附加参数（暂未开放）

        try {
        $result = $this->apiInstance->shareIdGet($access_token, $need_callback, $source_style_id, $default_hashtag, $link_param);
            print_r($result);
        } catch (Exception $e) {
            echo 'Exception when calling ShareIdApi->shareIdGet: ', $e->getMessage(), PHP_EOL;
        }
    }
}
