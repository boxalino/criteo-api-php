<?php
/**
 * AdSetTargeting
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  criteo\api\marketingsolutions\v2020_10
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Criteo API
 *
 * Criteo publicly exposed API
 *
 * The version of the OpenAPI document: 1.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace criteo\api\marketingsolutions\v2020_10\Model;

use \ArrayAccess;
use \criteo\api\marketingsolutions\v2020_10\ObjectSerializer;

/**
 * AdSetTargeting Class Doc Comment
 *
 * @category Class
 * @description ad set targeting model
 * @package  criteo\api\marketingsolutions\v2020_10
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AdSetTargeting implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AdSetTargeting';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'delivery_limitations' => '\criteo\api\marketingsolutions\v2020_10\Model\AdSetDeliveryLimitations',
        'geo_location' => '\criteo\api\marketingsolutions\v2020_10\Model\AdSetGeoLocation',
        'frequency_capping' => '\criteo\api\marketingsolutions\v2020_10\Model\AdSetFrequencyCapping'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'delivery_limitations' => null,
        'geo_location' => null,
        'frequency_capping' => null
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
        'delivery_limitations' => 'deliveryLimitations',
        'geo_location' => 'geoLocation',
        'frequency_capping' => 'frequencyCapping'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'delivery_limitations' => 'setDeliveryLimitations',
        'geo_location' => 'setGeoLocation',
        'frequency_capping' => 'setFrequencyCapping'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'delivery_limitations' => 'getDeliveryLimitations',
        'geo_location' => 'getGeoLocation',
        'frequency_capping' => 'getFrequencyCapping'
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
        $this->container['delivery_limitations'] = $data['delivery_limitations'] ?? null;
        $this->container['geo_location'] = $data['geo_location'] ?? null;
        $this->container['frequency_capping'] = $data['frequency_capping'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets delivery_limitations
     *
     * @return \criteo\api\marketingsolutions\v2020_10\Model\AdSetDeliveryLimitations|null
     */
    public function getDeliveryLimitations()
    {
        return $this->container['delivery_limitations'];
    }

    /**
     * Sets delivery_limitations
     *
     * @param \criteo\api\marketingsolutions\v2020_10\Model\AdSetDeliveryLimitations|null $delivery_limitations delivery_limitations
     *
     * @return self
     */
    public function setDeliveryLimitations($delivery_limitations)
    {
        $this->container['delivery_limitations'] = $delivery_limitations;

        return $this;
    }

    /**
     * Gets geo_location
     *
     * @return \criteo\api\marketingsolutions\v2020_10\Model\AdSetGeoLocation|null
     */
    public function getGeoLocation()
    {
        return $this->container['geo_location'];
    }

    /**
     * Sets geo_location
     *
     * @param \criteo\api\marketingsolutions\v2020_10\Model\AdSetGeoLocation|null $geo_location geo_location
     *
     * @return self
     */
    public function setGeoLocation($geo_location)
    {
        $this->container['geo_location'] = $geo_location;

        return $this;
    }

    /**
     * Gets frequency_capping
     *
     * @return \criteo\api\marketingsolutions\v2020_10\Model\AdSetFrequencyCapping|null
     */
    public function getFrequencyCapping()
    {
        return $this->container['frequency_capping'];
    }

    /**
     * Sets frequency_capping
     *
     * @param \criteo\api\marketingsolutions\v2020_10\Model\AdSetFrequencyCapping|null $frequency_capping frequency_capping
     *
     * @return self
     */
    public function setFrequencyCapping($frequency_capping)
    {
        $this->container['frequency_capping'] = $frequency_capping;

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


