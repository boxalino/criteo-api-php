<?php
/**
 * RetargetingCreateV1
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  criteo\api\marketingsolutions\preview
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Criteo API
 *
 * Criteo publicly exposed API
 *
 * The version of the OpenAPI document: Preview
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace criteo\api\marketingsolutions\preview\Model;

use \ArrayAccess;
use \criteo\api\marketingsolutions\preview\ObjectSerializer;

/**
 * RetargetingCreateV1 Class Doc Comment
 *
 * @category Class
 * @description Settings to target users based on its type and days since last visit.
 * @package  criteo\api\marketingsolutions\preview
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class RetargetingCreateV1 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RetargetingCreateV1';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'visitors_type' => 'string',
        'days_since_last_visit_min' => 'int',
        'days_since_last_visit_max' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'visitors_type' => null,
        'days_since_last_visit_min' => 'int32',
        'days_since_last_visit_max' => 'int32'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'visitors_type' => 'visitorsType',
        'days_since_last_visit_min' => 'daysSinceLastVisitMin',
        'days_since_last_visit_max' => 'daysSinceLastVisitMax'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'visitors_type' => 'setVisitorsType',
        'days_since_last_visit_min' => 'setDaysSinceLastVisitMin',
        'days_since_last_visit_max' => 'setDaysSinceLastVisitMax'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'visitors_type' => 'getVisitorsType',
        'days_since_last_visit_min' => 'getDaysSinceLastVisitMin',
        'days_since_last_visit_max' => 'getDaysSinceLastVisitMax'
    ];

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
        return self::$openAPIModelName;
    }

    const VISITORS_TYPE_ALL = 'All';
    const VISITORS_TYPE_BUYERS = 'Buyers';
    const VISITORS_TYPE_NON_BUYERS = 'NonBuyers';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getVisitorsTypeAllowableValues()
    {
        return [
            self::VISITORS_TYPE_ALL,
            self::VISITORS_TYPE_BUYERS,
            self::VISITORS_TYPE_NON_BUYERS,
        ];
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
        $this->container['visitors_type'] = $data['visitors_type'] ?? null;
        $this->container['days_since_last_visit_min'] = $data['days_since_last_visit_min'] ?? null;
        $this->container['days_since_last_visit_max'] = $data['days_since_last_visit_max'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getVisitorsTypeAllowableValues();
        if (!is_null($this->container['visitors_type']) && !in_array($this->container['visitors_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'visitors_type', must be one of '%s'",
                $this->container['visitors_type'],
                implode("', '", $allowedValues)
            );
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
     * Gets visitors_type
     *
     * @return string|null
     */
    public function getVisitorsType()
    {
        return $this->container['visitors_type'];
    }

    /**
     * Sets visitors_type
     *
     * @param string|null $visitors_type visitors_type
     *
     * @return self
     */
    public function setVisitorsType($visitors_type)
    {
        $allowedValues = $this->getVisitorsTypeAllowableValues();
        if (!is_null($visitors_type) && !in_array($visitors_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'visitors_type', must be one of '%s'",
                    $visitors_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['visitors_type'] = $visitors_type;

        return $this;
    }

    /**
     * Gets days_since_last_visit_min
     *
     * @return int|null
     */
    public function getDaysSinceLastVisitMin()
    {
        return $this->container['days_since_last_visit_min'];
    }

    /**
     * Sets days_since_last_visit_min
     *
     * @param int|null $days_since_last_visit_min days_since_last_visit_min
     *
     * @return self
     */
    public function setDaysSinceLastVisitMin($days_since_last_visit_min)
    {
        $this->container['days_since_last_visit_min'] = $days_since_last_visit_min;

        return $this;
    }

    /**
     * Gets days_since_last_visit_max
     *
     * @return int|null
     */
    public function getDaysSinceLastVisitMax()
    {
        return $this->container['days_since_last_visit_max'];
    }

    /**
     * Sets days_since_last_visit_max
     *
     * @param int|null $days_since_last_visit_max days_since_last_visit_max
     *
     * @return self
     */
    public function setDaysSinceLastVisitMax($days_since_last_visit_max)
    {
        $this->container['days_since_last_visit_max'] = $days_since_last_visit_max;

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
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

