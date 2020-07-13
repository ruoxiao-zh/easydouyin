<?php
/**
 * VideoDataResponseDataResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  Douyin\Open
 * @author   抖音小开
 */

/**
 * 通过抖音视频id批量获取已分享视频数据信息
 *
 * OpenAPI spec version: 1.0.0
 * 
 */

namespace Douyin\Open\Model;

use \ArrayAccess;
use \Douyin\Open\ObjectSerializer;

/**
 * VideoDataResponseDataResponse Class Doc Comment
 *
 * @category Class
 * @package  Douyin\Open
 * @author   抖音小开
 */
class VideoDataResponseDataResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'VideoDataResponseDataResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'item_id' => 'string',
'title' => 'string',
'create_time' => 'int',
'digg' => 'int',
'play' => 'int',
'forward' => 'int',
'is_reviewed' => 'bool'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'item_id' => null,
'title' => null,
'create_time' => null,
'digg' => null,
'play' => null,
'forward' => null,
'is_reviewed' => null    ];

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
        'item_id' => 'item_id',
'title' => 'title',
'create_time' => 'create_time',
'digg' => 'digg',
'play' => 'play',
'forward' => 'forward',
'is_reviewed' => 'is_reviewed'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'item_id' => 'setItemId',
'title' => 'setTitle',
'create_time' => 'setCreateTime',
'digg' => 'setDigg',
'play' => 'setPlay',
'forward' => 'setForward',
'is_reviewed' => 'setIsReviewed'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'item_id' => 'getItemId',
'title' => 'getTitle',
'create_time' => 'getCreateTime',
'digg' => 'getDigg',
'play' => 'getPlay',
'forward' => 'getForward',
'is_reviewed' => 'getIsReviewed'    ];

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
        $this->container['item_id'] = isset($data['item_id']) ? $data['item_id'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['create_time'] = isset($data['create_time']) ? $data['create_time'] : null;
        $this->container['digg'] = isset($data['digg']) ? $data['digg'] : null;
        $this->container['play'] = isset($data['play']) ? $data['play'] : null;
        $this->container['forward'] = isset($data['forward']) ? $data['forward'] : null;
        $this->container['is_reviewed'] = isset($data['is_reviewed']) ? $data['is_reviewed'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['item_id'] === null) {
            $invalidProperties[] = "'item_id' can't be null";
        }
        if ($this->container['title'] === null) {
            $invalidProperties[] = "'title' can't be null";
        }
        if ($this->container['create_time'] === null) {
            $invalidProperties[] = "'create_time' can't be null";
        }
        if ($this->container['digg'] === null) {
            $invalidProperties[] = "'digg' can't be null";
        }
        if ($this->container['play'] === null) {
            $invalidProperties[] = "'play' can't be null";
        }
        if ($this->container['forward'] === null) {
            $invalidProperties[] = "'forward' can't be null";
        }
        if ($this->container['is_reviewed'] === null) {
            $invalidProperties[] = "'is_reviewed' can't be null";
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
     * Gets item_id
     *
     * @return string
     */
    public function getItemId()
    {
        return $this->container['item_id'];
    }

    /**
     * Sets item_id
     *
     * @param string $item_id 抖音视频id
     *
     * @return $this
     */
    public function setItemId($item_id)
    {
        $this->container['item_id'] = $item_id;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title 视频文字
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets create_time
     *
     * @return int
     */
    public function getCreateTime()
    {
        return $this->container['create_time'];
    }

    /**
     * Sets create_time
     *
     * @param int $create_time 视频创建时间戳
     *
     * @return $this
     */
    public function setCreateTime($create_time)
    {
        $this->container['create_time'] = $create_time;

        return $this;
    }

    /**
     * Gets digg
     *
     * @return int
     */
    public function getDigg()
    {
        return $this->container['digg'];
    }

    /**
     * Sets digg
     *
     * @param int $digg 点赞数
     *
     * @return $this
     */
    public function setDigg($digg)
    {
        $this->container['digg'] = $digg;

        return $this;
    }

    /**
     * Gets play
     *
     * @return int
     */
    public function getPlay()
    {
        return $this->container['play'];
    }

    /**
     * Sets play
     *
     * @param int $play 播放数
     *
     * @return $this
     */
    public function setPlay($play)
    {
        $this->container['play'] = $play;

        return $this;
    }

    /**
     * Gets forward
     *
     * @return int
     */
    public function getForward()
    {
        return $this->container['forward'];
    }

    /**
     * Sets forward
     *
     * @param int $forward 转发数
     *
     * @return $this
     */
    public function setForward($forward)
    {
        $this->container['forward'] = $forward;

        return $this;
    }

    /**
     * Gets is_reviewed
     *
     * @return bool
     */
    public function getIsReviewed()
    {
        return $this->container['is_reviewed'];
    }

    /**
     * Sets is_reviewed
     *
     * @param bool $is_reviewed 是否审核通过
     *
     * @return $this
     */
    public function setIsReviewed($is_reviewed)
    {
        $this->container['is_reviewed'] = $is_reviewed;

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
