<?php
/**
 * ToutiaoVideoPublishApiTest
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
 * ToutiaoVideoPublishApiTest Class Doc Comment
 *
 * @category Class
 * @author   抖音小开
 */
class ToutiaoVideoPublishApiTest extends \PHPUnit\Framework\TestCase
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
     * Test case for toutiaoVideoCreatePost
     *
     * 创建头条视频  注意：重复的video_id不会生成新的视频.
     *
     */
    public function testToutiaoVideoCreatePost()
    {
        $open_id = "ba253642-0590-40bc-9bdf-9a1334b94059"; // string | 通过/oauth/access_token/获取，用户唯一标志
$access_token = "act.1d1021d2aee3d41fee2d2add43456badMFZnrhFhfWotu3Ecuiuka27L56lr"; // string | 调用/oauth/access_token/生成的token，此token需要用户授权。
$body = new \Douyin\Open\Model\ToutiaoVideoCreateBody(); // \Douyin\Open\Model\ToutiaoVideoCreateBody | 

        try {
        $result = $this->apiInstance->toutiaoVideoCreatePost($open_id, $access_token, $body);
            print_r($result);
        } catch (Exception $e) {
            echo 'Exception when calling ToutiaoVideoPublishApi->toutiaoVideoCreatePost: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * Test case for toutiaoVideoUploadPost
     *
     * 上传视频到文件服务器.
     *
     */
    public function testToutiaoVideoUploadPost()
    {
        $video = "video_example"; // string | 
$open_id = "ba253642-0590-40bc-9bdf-9a1334b94059"; // string | 通过/oauth/access_token/获取，用户唯一标志
$access_token = "act.1d1021d2aee3d41fee2d2add43456badMFZnrhFhfWotu3Ecuiuka27L56lr"; // string | 调用/oauth/access_token/生成的token，此token需要用户授权。

        try {
        $result = $this->apiInstance->toutiaoVideoUploadPost($video, $open_id, $access_token);
            print_r($result);
        } catch (Exception $e) {
            echo 'Exception when calling ToutiaoVideoPublishApi->toutiaoVideoUploadPost: ', $e->getMessage(), PHP_EOL;
        }
    }
}
