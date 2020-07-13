<?php
/**
 * DataExternalUserApiTest
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
 * DataExternalUserApiTest Class Doc Comment
 *
 * @category Class
 * @author   抖音小开
 */
class DataExternalUserApiTest extends \PHPUnit\Framework\TestCase
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
     * Test case for dataExternalUserCommentGet
     *
     * 获取用户评论数.
     *
     */
    public function testDataExternalUserCommentGet()
    {
        $open_id = "ba253642-0590-40bc-9bdf-9a1334b94059"; // string | 通过/oauth/access_token/获取，用户唯一标志
$access_token = "act.1d1021d2aee3d41fee2d2add43456badMFZnrhFhfWotu3Ecuiuka27L56lr"; // string | 调用/oauth/access_token/生成的token，此token需要用户授权。
$date_type = 56; // int | 近7/15天；输入7代表7天、15代表15天

        try {
        $result = $this->apiInstance->dataExternalUserCommentGet($open_id, $access_token, $date_type);
            print_r($result);
        } catch (Exception $e) {
            echo 'Exception when calling DataExternalUserApi->dataExternalUserCommentGet: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * Test case for dataExternalUserFansGet
     *
     * 获取用户粉丝数.
     *
     */
    public function testDataExternalUserFansGet()
    {
        $open_id = "ba253642-0590-40bc-9bdf-9a1334b94059"; // string | 通过/oauth/access_token/获取，用户唯一标志
$access_token = "act.1d1021d2aee3d41fee2d2add43456badMFZnrhFhfWotu3Ecuiuka27L56lr"; // string | 调用/oauth/access_token/生成的token，此token需要用户授权。
$date_type = 56; // int | 近7/15天；输入7代表7天、15代表15天

        try {
        $result = $this->apiInstance->dataExternalUserFansGet($open_id, $access_token, $date_type);
            print_r($result);
        } catch (Exception $e) {
            echo 'Exception when calling DataExternalUserApi->dataExternalUserFansGet: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * Test case for dataExternalUserItemGet
     *
     * 获取用户视频情况.
     *
     */
    public function testDataExternalUserItemGet()
    {
        $open_id = "ba253642-0590-40bc-9bdf-9a1334b94059"; // string | 通过/oauth/access_token/获取，用户唯一标志
$access_token = "act.1d1021d2aee3d41fee2d2add43456badMFZnrhFhfWotu3Ecuiuka27L56lr"; // string | 调用/oauth/access_token/生成的token，此token需要用户授权。
$date_type = 56; // int | 近7/15天；输入7代表7天、15代表15天

        try {
        $result = $this->apiInstance->dataExternalUserItemGet($open_id, $access_token, $date_type);
            print_r($result);
        } catch (Exception $e) {
            echo 'Exception when calling DataExternalUserApi->dataExternalUserItemGet: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * Test case for dataExternalUserLikeGet
     *
     * 获取用户点赞数.
     *
     */
    public function testDataExternalUserLikeGet()
    {
        $open_id = "ba253642-0590-40bc-9bdf-9a1334b94059"; // string | 通过/oauth/access_token/获取，用户唯一标志
$access_token = "act.1d1021d2aee3d41fee2d2add43456badMFZnrhFhfWotu3Ecuiuka27L56lr"; // string | 调用/oauth/access_token/生成的token，此token需要用户授权。
$date_type = 56; // int | 近7/15天；输入7代表7天、15代表15天

        try {
        $result = $this->apiInstance->dataExternalUserLikeGet($open_id, $access_token, $date_type);
            print_r($result);
        } catch (Exception $e) {
            echo 'Exception when calling DataExternalUserApi->dataExternalUserLikeGet: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * Test case for dataExternalUserProfileGet
     *
     * 获取用户主页访问数.
     *
     */
    public function testDataExternalUserProfileGet()
    {
        $open_id = "ba253642-0590-40bc-9bdf-9a1334b94059"; // string | 通过/oauth/access_token/获取，用户唯一标志
$access_token = "act.1d1021d2aee3d41fee2d2add43456badMFZnrhFhfWotu3Ecuiuka27L56lr"; // string | 调用/oauth/access_token/生成的token，此token需要用户授权。
$date_type = 56; // int | 近7/15天；输入7代表7天、15代表15天

        try {
        $result = $this->apiInstance->dataExternalUserProfileGet($open_id, $access_token, $date_type);
            print_r($result);
        } catch (Exception $e) {
            echo 'Exception when calling DataExternalUserApi->dataExternalUserProfileGet: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * Test case for dataExternalUserShareGet
     *
     * 获取用户分享数.
     *
     */
    public function testDataExternalUserShareGet()
    {
        $open_id = "ba253642-0590-40bc-9bdf-9a1334b94059"; // string | 通过/oauth/access_token/获取，用户唯一标志
$access_token = "act.1d1021d2aee3d41fee2d2add43456badMFZnrhFhfWotu3Ecuiuka27L56lr"; // string | 调用/oauth/access_token/生成的token，此token需要用户授权。
$date_type = 56; // int | 近7/15天；输入7代表7天、15代表15天

        try {
        $result = $this->apiInstance->dataExternalUserShareGet($open_id, $access_token, $date_type);
            print_r($result);
        } catch (Exception $e) {
            echo 'Exception when calling DataExternalUserApi->dataExternalUserShareGet: ', $e->getMessage(), PHP_EOL;
        }
    }
}
