<?php
/**
 * FansProfileFlowContribution
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
 * FansProfileFlowContribution Class Doc Comment
 *
 * @category Class
 * @package  Douyin\Open
 * @author   抖音小开
 */
class FansProfileFlowContribution implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'fans_profile_flow_contribution';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'flow' => 'string',
'fans_sum' => 'int',
'all_sum' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'flow' => null,
'fans_sum' => null,
'all_sum' => null    ];

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
        'flow' => 'flow',
'fans_sum' => 'fans_sum',
'all_sum' => 'all_sum'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'flow' => 'setFlow',
'fans_sum' => 'setFansSum',
'all_sum' => 'setAllSum'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'flow' => 'getFlow',
'fans_sum' => 'getFansSum',
'all_sum' => 'getAllSum'    ];

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
        $this->container['flow'] = isset($data['flow']) ? $data['flow'] : null;
        $this->container['fans_sum'] = isset($data['fans_sum']) ? $data['fans_sum'] : null;
        $this->container['all_sum'] = isset($data['all_sum']) ? $data['all_sum'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['flow'] === null) {
            $invalidProperties[] = "'flow' can't be null";
        }
        if ($this->container['fans_sum'] === null) {
            $invalidProperties[] = "'fans_sum' can't be null";
        }
        if ($this->container['all_sum'] === null) {
            $invalidProperties[] = "'all_sum' can't be null";
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
     * Gets flow
     *
     * @return string
     */
    public function getFlow()
    {
        return $this->container['flow'];
    }

    /**
     * Sets flow
     *
     * @param string $flow 流量贡献种类
     *
     * @return $this
     */
    public function setFlow($flow)
    {
        $this->container['flow'] = $flow;

        return $this;
    }

    /**
     * Gets fans_sum
     *
     * @return int
     */
    public function getFansSum()
    {
        return $this->container['fans_sum'];
    }

    /**
     * Sets fans_sum
     *
     * @param int $fans_sum 粉丝流量贡献
     *
     * @return $this
     */
    public function setFansSum($fans_sum)
    {
        $this->container['fans_sum'] = $fans_sum;

        return $this;
    }

    /**
     * Gets all_sum
     *
     * @return int
     */
    public function getAllSum()
    {
        return $this->container['all_sum'];
    }

    /**
     * Sets all_sum
     *
     * @param int $all_sum 总流量贡献
     *
     * @return $this
     */
    public function setAllSum($all_sum)
    {
        $this->container['all_sum'] = $all_sum;

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
