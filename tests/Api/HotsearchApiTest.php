<?php
/**
 * HotsearchApiTest
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
 * HotsearchApiTest Class Doc Comment
 *
 * @category Class
 * @author   抖音小开
 */
class HotsearchApiTest extends \PHPUnit\Framework\TestCase
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
     * Test case for hotsearchSentencesGet
     *
     * 获取实时热点词.
     *
     */
    public function testHotsearchSentencesGet()
    {
        $access_token = "clt.943da17996fb5cebfbc70c044c3fc25a57T54DcjT6HNKGqnUdxzy1KcxFnZ"; // string | 调用/oauth/client_token/生成的token，此token不需要用户授权。

        try {
        $result = $this->apiInstance->hotsearchSentencesGet($access_token);
            print_r($result);
        } catch (Exception $e) {
            echo 'Exception when calling HotsearchApi->hotsearchSentencesGet: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * Test case for hotsearchVideosGet
     *
     * 获取热点词聚合的视频.
     *
     */
    public function testHotsearchVideosGet()
    {
        $access_token = "clt.943da17996fb5cebfbc70c044c3fc25a57T54DcjT6HNKGqnUdxzy1KcxFnZ"; // string | 调用/oauth/client_token/生成的token，此token不需要用户授权。
$hot_sentence = "hot_sentence_example"; // string | 热点词

        try {
        $result = $this->apiInstance->hotsearchVideosGet($access_token, $hot_sentence);
            print_r($result);
        } catch (Exception $e) {
            echo 'Exception when calling HotsearchApi->hotsearchVideosGet: ', $e->getMessage(), PHP_EOL;
        }
    }
}
