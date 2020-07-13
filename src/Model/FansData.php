<?php
/**
 * FansData
 *
 * PHP version 5
 *
 * @category Class
 * @package  Douyin\Open
 * @author   抖音小开
 */

/**
 * 获取用户的粉丝数据
 *
 * OpenAPI spec version: 1.0.0
 * 
 */

namespace Douyin\Open\Model;

use \ArrayAccess;
use \Douyin\Open\ObjectSerializer;

/**
 * FansData Class Doc Comment
 *
 * @category Class
 * @package  Douyin\Open
 * @author   抖音小开
 */
class FansData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'fans_data';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'all_fans_num' => 'int',
'gender_distributions' => '\Douyin\Open\Model\FansProfileDistribution[]',
'age_distributions' => '\Douyin\Open\Model\FansProfileDistribution[]',
'geographical_distributions' => '\Douyin\Open\Model\FansProfileDistribution[]',
'active_days_distributions' => '\Douyin\Open\Model\FansProfileDistribution[]',
'device_distributions' => '\Douyin\Open\Model\FansProfileDistribution[]',
'interest_distributions' => '\Douyin\Open\Model\FansProfileDistribution[]',
'flow_contributions' => '\Douyin\Open\Model\FansProfileFlowContribution[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'all_fans_num' => null,
'gender_distributions' => null,
'age_distributions' => null,
'geographical_distributions' => null,
'active_days_distributions' => null,
'device_distributions' => null,
'interest_distributions' => null,
'flow_contributions' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'all_fans_num' => 'all_fans_num',
'gender_distributions' => 'gender_distributions',
'age_distributions' => 'age_distributions',
'geographical_distributions' => 'geographical_distributions',
'active_days_distributions' => 'active_days_distributions',
'device_distributions' => 'device_distributions',
'interest_distributions' => 'interest_distributions',
'flow_contributions' => 'flow_contributions'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'all_fans_num' => 'setAllFansNum',
'gender_distributions' => 'setGenderDistributions',
'age_distributions' => 'setAgeDistributions',
'geographical_distributions' => 'setGeographicalDistributions',
'active_days_distributions' => 'setActiveDaysDistributions',
'device_distributions' => 'setDeviceDistributions',
'interest_distributions' => 'setInterestDistributions',
'flow_contributions' => 'setFlowContributions'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'all_fans_num' => 'getAllFansNum',
'gender_distributions' => 'getGenderDistributions',
'age_distributions' => 'getAgeDistributions',
'geographical_distributions' => 'getGeographicalDistributions',
'active_days_distributions' => 'getActiveDaysDistributions',
'device_distributions' => 'getDeviceDistributions',
'interest_distributions' => 'getInterestDistributions',
'flow_contributions' => 'getFlowContributions'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['all_fans_num'] = isset($data['all_fans_num']) ? $data['all_fans_num'] : null;
        $this->container['gender_distributions'] = isset($data['gender_distributions']) ? $data['gender_distributions'] : null;
        $this->container['age_distributions'] = isset($data['age_distributions']) ? $data['age_distributions'] : null;
        $this->container['geographical_distributions'] = isset($data['geographical_distributions']) ? $data['geographical_distributions'] : null;
        $this->container['active_days_distributions'] = isset($data['active_days_distributions']) ? $data['active_days_distributions'] : null;
        $this->container['device_distributions'] = isset($data['device_distributions']) ? $data['device_distributions'] : null;
        $this->container['interest_distributions'] = isset($data['interest_distributions']) ? $data['interest_distributions'] : null;
        $this->container['flow_contributions'] = isset($data['flow_contributions']) ? $data['flow_contributions'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['all_fans_num'] === null) {
            $invalidProperties[] = "'all_fans_num' can't be null";
        }
        if ($this->container['gender_distributions'] === null) {
            $invalidProperties[] = "'gender_distributions' can't be null";
        }
        if ($this->container['age_distributions'] === null) {
            $invalidProperties[] = "'age_distributions' can't be null";
        }
        if ($this->container['geographical_distributions'] === null) {
            $invalidProperties[] = "'geographical_distributions' can't be null";
        }
        if ($this->container['active_days_distributions'] === null) {
            $invalidProperties[] = "'active_days_distributions' can't be null";
        }
        if ($this->container['device_distributions'] === null) {
            $invalidProperties[] = "'device_distributions' can't be null";
        }
        if ($this->container['interest_distributions'] === null) {
            $invalidProperties[] = "'interest_distributions' can't be null";
        }
        if ($this->container['flow_contributions'] === null) {
            $invalidProperties[] = "'flow_contributions' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets all_fans_num
     *
     * @return int
     */
    public function getAllFansNum()
    {
        return $this->container['all_fans_num'];
    }

    /**
     * Sets all_fans_num
     *
     * @param int $all_fans_num 所有粉丝的数量
     *
     * @return $this
     */
    public function setAllFansNum($all_fans_num)
    {
        $this->container['all_fans_num'] = $all_fans_num;

        return $this;
    }

    /**
     * Gets gender_distributions
     *
     * @return \Douyin\Open\Model\FansProfileDistribution[]
     */
    public function getGenderDistributions()
    {
        return $this->container['gender_distributions'];
    }

    /**
     * Sets gender_distributions
     *
     * @param \Douyin\Open\Model\FansProfileDistribution[] $gender_distributions 粉丝性别分布 item: [\"1\",\"2\"] (男:1,女:2)
     *
     * @return $this
     */
    public function setGenderDistributions($gender_distributions)
    {
        $this->container['gender_distributions'] = $gender_distributions;

        return $this;
    }

    /**
     * Gets age_distributions
     *
     * @return \Douyin\Open\Model\FansProfileDistribution[]
     */
    public function getAgeDistributions()
    {
        return $this->container['age_distributions'];
    }

    /**
     * Sets age_distributions
     *
     * @param \Douyin\Open\Model\FansProfileDistribution[] $age_distributions 粉丝年龄分布 item: [\"1-11\", \"12~17\", \"18-23\", \"24~29\", \"30~35\", \"36-41\", \"42~50\", \"50+\"]
     *
     * @return $this
     */
    public function setAgeDistributions($age_distributions)
    {
        $this->container['age_distributions'] = $age_distributions;

        return $this;
    }

    /**
     * Gets geographical_distributions
     *
     * @return \Douyin\Open\Model\FansProfileDistribution[]
     */
    public function getGeographicalDistributions()
    {
        return $this->container['geographical_distributions'];
    }

    /**
     * Sets geographical_distributions
     *
     * @param \Douyin\Open\Model\FansProfileDistribution[] $geographical_distributions 粉丝地域分布 item: [\"北京\",\"福建\",\"香港\"...]
     *
     * @return $this
     */
    public function setGeographicalDistributions($geographical_distributions)
    {
        $this->container['geographical_distributions'] = $geographical_distributions;

        return $this;
    }

    /**
     * Gets active_days_distributions
     *
     * @return \Douyin\Open\Model\FansProfileDistribution[]
     */
    public function getActiveDaysDistributions()
    {
        return $this->container['active_days_distributions'];
    }

    /**
     * Sets active_days_distributions
     *
     * @param \Douyin\Open\Model\FansProfileDistribution[] $active_days_distributions 粉丝活跃天数分布 item: [\"0-4\",\"5~8\",\"9~12\",\"13~16\",\"17~20\",\"20+\"]
     *
     * @return $this
     */
    public function setActiveDaysDistributions($active_days_distributions)
    {
        $this->container['active_days_distributions'] = $active_days_distributions;

        return $this;
    }

    /**
     * Gets device_distributions
     *
     * @return \Douyin\Open\Model\FansProfileDistribution[]
     */
    public function getDeviceDistributions()
    {
        return $this->container['device_distributions'];
    }

    /**
     * Sets device_distributions
     *
     * @param \Douyin\Open\Model\FansProfileDistribution[] $device_distributions 粉丝设备分布 item: [\"苹果\",\"华为\",\"三星\",\"小米\"...]
     *
     * @return $this
     */
    public function setDeviceDistributions($device_distributions)
    {
        $this->container['device_distributions'] = $device_distributions;

        return $this;
    }

    /**
     * Gets interest_distributions
     *
     * @return \Douyin\Open\Model\FansProfileDistribution[]
     */
    public function getInterestDistributions()
    {
        return $this->container['interest_distributions'];
    }

    /**
     * Sets interest_distributions
     *
     * @param \Douyin\Open\Model\FansProfileDistribution[] $interest_distributions 粉丝兴趣分布 item: [\"生活\"\",\"美食\",\"旅行\"...]
     *
     * @return $this
     */
    public function setInterestDistributions($interest_distributions)
    {
        $this->container['interest_distributions'] = $interest_distributions;

        return $this;
    }

    /**
     * Gets flow_contributions
     *
     * @return \Douyin\Open\Model\FansProfileFlowContribution[]
     */
    public function getFlowContributions()
    {
        return $this->container['flow_contributions'];
    }

    /**
     * Sets flow_contributions
     *
     * @param \Douyin\Open\Model\FansProfileFlowContribution[] $flow_contributions 粉丝流量贡献 flow: [\"vv\",\"like_cnt\",\"comment_cnt\",\"share_video_cnt\"]
     *
     * @return $this
     */
    public function setFlowContributions($flow_contributions)
    {
        $this->container['flow_contributions'] = $flow_contributions;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
