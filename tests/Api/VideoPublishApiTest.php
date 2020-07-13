<?php
/**
 * VideoPublishApiTest
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
 * VideoPublishApiTest Class Doc Comment
 *
 * @category Class
 * @author   抖音小开
 */
class VideoPublishApiTest extends \PHPUnit\Framework\TestCase
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
     * Test case for videoCreatePost
     *
     * 创建抖音视频.
     *
     */
    public function testVideoCreatePost()
    {
        $open_id = "ba253642-0590-40bc-9bdf-9a1334b94059"; // string | 通过/oauth/access_token/获取，用户唯一标志
$access_token = "act.1d1021d2aee3d41fee2d2add43456badMFZnrhFhfWotu3Ecuiuka27L56lr"; // string | 调用/oauth/access_token/生成的token，此token需要用户授权。
$body = new \Douyin\Open\Model\VideoCreateBody(); // \Douyin\Open\Model\VideoCreateBody | 

        try {
        $result = $this->apiInstance->videoCreatePost($open_id, $access_token, $body);
            print_r($result);
        } catch (Exception $e) {
            echo 'Exception when calling VideoPublishApi->videoCreatePost: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * Test case for videoPartCompletePost
     *
     * 完成上传.
     *
     */
    public function testVideoPartCompletePost()
    {
        $open_id = "ba253642-0590-40bc-9bdf-9a1334b94059"; // string | 通过/oauth/access_token/获取，用户唯一标志
$access_token = "act.1d1021d2aee3d41fee2d2add43456badMFZnrhFhfWotu3Ecuiuka27L56lr"; // string | 调用/oauth/access_token/生成的token，此token需要用户授权。
$upload_id = "upload_id_example"; // string | 分片上传的标记。有限时间为2小时。

        try {
        $result = $this->apiInstance->videoPartCompletePost($open_id, $access_token, $upload_id);
            print_r($result);
        } catch (Exception $e) {
            echo 'Exception when calling VideoPublishApi->videoPartCompletePost: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * Test case for videoPartInitPost
     *
     * 初始化上传.
     *
     */
    public function testVideoPartInitPost()
    {
        $open_id = "ba253642-0590-40bc-9bdf-9a1334b94059"; // string | 通过/oauth/access_token/获取，用户唯一标志
$access_token = "act.1d1021d2aee3d41fee2d2add43456badMFZnrhFhfWotu3Ecuiuka27L56lr"; // string | 调用/oauth/access_token/生成的token，此token需要用户授权。

        try {
        $result = $this->apiInstance->videoPartInitPost($open_id, $access_token);
            print_r($result);
        } catch (Exception $e) {
            echo 'Exception when calling VideoPublishApi->videoPartInitPost: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * Test case for videoPartUploadPost
     *
     * 上传视频分片到文件服务器.
     *
     */
    public function testVideoPartUploadPost()
    {
        $video = "video_example"; // string | 
$open_id = "ba253642-0590-40bc-9bdf-9a1334b94059"; // string | 通过/oauth/access_token/获取，用户唯一标志
$access_token = "act.1d1021d2aee3d41fee2d2add43456badMFZnrhFhfWotu3Ecuiuka27L56lr"; // string | 调用/oauth/access_token/生成的token，此token需要用户授权。
$upload_id = "upload_id_example"; // string | 分片上传的标记。有限时间为2小时。
$part_number = 56; // int | 第几个分片，从1开始

        try {
        $result = $this->apiInstance->videoPartUploadPost($video, $open_id, $access_token, $upload_id, $part_number);
            print_r($result);
        } catch (Exception $e) {
            echo 'Exception when calling VideoPublishApi->videoPartUploadPost: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * Test case for videoUploadPost
     *
     * 上传视频到文件服务器.
     *
     */
    public function testVideoUploadPost()
    {
        $video = "video_example"; // string | 
$open_id = "ba253642-0590-40bc-9bdf-9a1334b94059"; // string | 通过/oauth/access_token/获取，用户唯一标志
$access_token = "act.1d1021d2aee3d41fee2d2add43456badMFZnrhFhfWotu3Ecuiuka27L56lr"; // string | 调用/oauth/access_token/生成的token，此token需要用户授权。

        try {
        $result = $this->apiInstance->videoUploadPost($video, $open_id, $access_token);
            print_r($result);
        } catch (Exception $e) {
            echo 'Exception when calling VideoPublishApi->videoUploadPost: ', $e->getMessage(), PHP_EOL;
        }
    }
}
