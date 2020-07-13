<?php
/**
 * UserInfoApiTest
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
 * UserInfoApiTest Class Doc Comment
 *
 * @category Class
 * @author   抖音小开
 */
class UserInfoApiTest extends \PHPUnit\Framework\TestCase
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
     * Test case for oauthUserinfoGet
     *
     * 获取用户信息.
     *
     */
    public function testOauthUserinfoGet()
    {
        $access_token = "access_token_example"; // string | 
$open_id = "open_id_example"; // string | 

        try {
        $result = $this->apiInstance->oauthUserinfoGet($access_token, $open_id);
            print_r($result);
        } catch (Exception $e) {
            echo 'Exception when calling UserInfoApi->oauthUserinfoGet: ', $e->getMessage(), PHP_EOL;
        }
    }
}
