<?php
/**
 * DataExternalItemApiTest
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
 * DataExternalItemApiTest Class Doc Comment
 *
 * @category Class
 * @author   抖音小开
 */
class DataExternalItemApiTest extends \PHPUnit\Framework\TestCase
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
     * Test case for dataExternalItemBaseGet
     *
     * 获取视频基础数据.
     *
     */
    public function testDataExternalItemBaseGet()
    {
        $open_id = "ba253642-0590-40bc-9bdf-9a1334b94059"; // string | 通过/oauth/access_token/获取，用户唯一标志
$access_token = "act.1d1021d2aee3d41fee2d2add43456badMFZnrhFhfWotu3Ecuiuka27L56lr"; // string | 调用/oauth/access_token/生成的token，此token需要用户授权。
$item_id = "item_id_example"; // string | item_id，仅能查询access_token对应用户上传的视频

        try {
        $result = $this->apiInstance->dataExternalItemBaseGet($open_id, $access_token, $item_id);
            print_r($result);
        } catch (Exception $e) {
            echo 'Exception when calling DataExternalItemApi->dataExternalItemBaseGet: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * Test case for dataExternalItemCommentGet
     *
     * 获取视频评论数据.
     *
     */
    public function testDataExternalItemCommentGet()
    {
        $open_id = "ba253642-0590-40bc-9bdf-9a1334b94059"; // string | 通过/oauth/access_token/获取，用户唯一标志
$access_token = "act.1d1021d2aee3d41fee2d2add43456badMFZnrhFhfWotu3Ecuiuka27L56lr"; // string | 调用/oauth/access_token/生成的token，此token需要用户授权。
$item_id = "item_id_example"; // string | item_id，仅能查询access_token对应用户上传的视频
$date_type = 56; // int | 近7/15天；输入7代表7天、15代表15天

        try {
        $result = $this->apiInstance->dataExternalItemCommentGet($open_id, $access_token, $item_id, $date_type);
            print_r($result);
        } catch (Exception $e) {
            echo 'Exception when calling DataExternalItemApi->dataExternalItemCommentGet: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * Test case for dataExternalItemLikeGet
     *
     * 获取视频点赞数据.
     *
     */
    public function testDataExternalItemLikeGet()
    {
        $open_id = "ba253642-0590-40bc-9bdf-9a1334b94059"; // string | 通过/oauth/access_token/获取，用户唯一标志
$access_token = "act.1d1021d2aee3d41fee2d2add43456badMFZnrhFhfWotu3Ecuiuka27L56lr"; // string | 调用/oauth/access_token/生成的token，此token需要用户授权。
$item_id = "item_id_example"; // string | item_id，仅能查询access_token对应用户上传的视频
$date_type = 56; // int | 近7/15天；输入7代表7天、15代表15天

        try {
        $result = $this->apiInstance->dataExternalItemLikeGet($open_id, $access_token, $item_id, $date_type);
            print_r($result);
        } catch (Exception $e) {
            echo 'Exception when calling DataExternalItemApi->dataExternalItemLikeGet: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * Test case for dataExternalItemPlayGet
     *
     * 获取视频播放数据.
     *
     */
    public function testDataExternalItemPlayGet()
    {
        $open_id = "ba253642-0590-40bc-9bdf-9a1334b94059"; // string | 通过/oauth/access_token/获取，用户唯一标志
$access_token = "act.1d1021d2aee3d41fee2d2add43456badMFZnrhFhfWotu3Ecuiuka27L56lr"; // string | 调用/oauth/access_token/生成的token，此token需要用户授权。
$item_id = "item_id_example"; // string | item_id，仅能查询access_token对应用户上传的视频
$date_type = 56; // int | 近7/15天；输入7代表7天、15代表15天

        try {
        $result = $this->apiInstance->dataExternalItemPlayGet($open_id, $access_token, $item_id, $date_type);
            print_r($result);
        } catch (Exception $e) {
            echo 'Exception when calling DataExternalItemApi->dataExternalItemPlayGet: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * Test case for dataExternalItemShareGet
     *
     * 获取视频分享数据.
     *
     */
    public function testDataExternalItemShareGet()
    {
        $open_id = "ba253642-0590-40bc-9bdf-9a1334b94059"; // string | 通过/oauth/access_token/获取，用户唯一标志
$access_token = "act.1d1021d2aee3d41fee2d2add43456badMFZnrhFhfWotu3Ecuiuka27L56lr"; // string | 调用/oauth/access_token/生成的token，此token需要用户授权。
$item_id = "item_id_example"; // string | item_id，仅能查询access_token对应用户上传的视频
$date_type = 56; // int | 近7/15天；输入7代表7天、15代表15天

        try {
        $result = $this->apiInstance->dataExternalItemShareGet($open_id, $access_token, $item_id, $date_type);
            print_r($result);
        } catch (Exception $e) {
            echo 'Exception when calling DataExternalItemApi->dataExternalItemShareGet: ', $e->getMessage(), PHP_EOL;
        }
    }
}
