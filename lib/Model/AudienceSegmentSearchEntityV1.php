<?php
/**
 * AudienceSegmentSearchEntityV1
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Criteo\Api\MarketingSolutions
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
 * OpenAPI Generator version: 6.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Criteo\Api\MarketingSolutions\Model;

use \ArrayAccess;
use \Criteo\Api\MarketingSolutions\ObjectSerializer;

/**
 * AudienceSegmentSearchEntityV1 Class Doc Comment
 *
 * @category Class
 * @description Available filters to perform a search on audience segments. If present, the filters are AND&#39;ed together when applied.
 * @package  Criteo\Api\MarketingSolutions
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AudienceSegmentSearchEntityV1 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AudienceSegmentSearchEntityV1';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'audience_segment_ids' => 'string[]',
        'advertiser_ids' => 'string[]',
        'audience_segment_types' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'audience_segment_ids' => null,
        'advertiser_ids' => null,
        'audience_segment_types' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'audience_segment_ids' => false,
		'advertiser_ids' => false,
		'audience_segment_types' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'audience_segment_ids' => 'audienceSegmentIds',
        'advertiser_ids' => 'advertiserIds',
        'audience_segment_types' => 'audienceSegmentTypes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'audience_segment_ids' => 'setAudienceSegmentIds',
        'advertiser_ids' => 'setAdvertiserIds',
        'audience_segment_types' => 'setAudienceSegmentTypes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'audience_segment_ids' => 'getAudienceSegmentIds',
        'advertiser_ids' => 'getAdvertiserIds',
        'audience_segment_types' => 'getAudienceSegmentTypes'
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

    public const AUDIENCE_SEGMENT_TYPES_UNKNOWN = 'Unknown';
    public const AUDIENCE_SEGMENT_TYPES_IN_MARKET = 'InMarket';
    public const AUDIENCE_SEGMENT_TYPES_PROSPECTING = 'Prospecting';
    public const AUDIENCE_SEGMENT_TYPES_CONTACT_LIST = 'ContactList';
    public const AUDIENCE_SEGMENT_TYPES_LOCATION = 'Location';
    public const AUDIENCE_SEGMENT_TYPES_BEHAVIORAL = 'Behavioral';
    public const AUDIENCE_SEGMENT_TYPES_RETARGETING = 'Retargeting';
    public const AUDIENCE_SEGMENT_TYPES_LOOKALIKE = 'Lookalike';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAudienceSegmentTypesAllowableValues()
    {
        return [
            self::AUDIENCE_SEGMENT_TYPES_UNKNOWN,
            self::AUDIENCE_SEGMENT_TYPES_IN_MARKET,
            self::AUDIENCE_SEGMENT_TYPES_PROSPECTING,
            self::AUDIENCE_SEGMENT_TYPES_CONTACT_LIST,
            self::AUDIENCE_SEGMENT_TYPES_LOCATION,
            self::AUDIENCE_SEGMENT_TYPES_BEHAVIORAL,
            self::AUDIENCE_SEGMENT_TYPES_RETARGETING,
            self::AUDIENCE_SEGMENT_TYPES_LOOKALIKE,
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
        $this->setIfExists('audience_segment_ids', $data ?? [], null);
        $this->setIfExists('advertiser_ids', $data ?? [], null);
        $this->setIfExists('audience_segment_types', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
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
     * Gets audience_segment_ids
     *
     * @return string[]|null
     */
    public function getAudienceSegmentIds()
    {
        return $this->container['audience_segment_ids'];
    }

    /**
     * Sets audience_segment_ids
     *
     * @param string[]|null $audience_segment_ids List of segment ids
     *
     * @return self
     */
    public function setAudienceSegmentIds($audience_segment_ids)
    {
        if (is_null($audience_segment_ids)) {
            throw new \InvalidArgumentException('non-nullable audience_segment_ids cannot be null');
        }


        $this->container['audience_segment_ids'] = $audience_segment_ids;

        return $this;
    }

    /**
     * Gets advertiser_ids
     *
     * @return string[]|null
     */
    public function getAdvertiserIds()
    {
        return $this->container['advertiser_ids'];
    }

    /**
     * Sets advertiser_ids
     *
     * @param string[]|null $advertiser_ids List of advertiser ids
     *
     * @return self
     */
    public function setAdvertiserIds($advertiser_ids)
    {
        if (is_null($advertiser_ids)) {
            throw new \InvalidArgumentException('non-nullable advertiser_ids cannot be null');
        }


        $this->container['advertiser_ids'] = $advertiser_ids;

        return $this;
    }

    /**
     * Gets audience_segment_types
     *
     * @return string[]|null
     */
    public function getAudienceSegmentTypes()
    {
        return $this->container['audience_segment_types'];
    }

    /**
     * Sets audience_segment_types
     *
     * @param string[]|null $audience_segment_types List of segment types
     *
     * @return self
     */
    public function setAudienceSegmentTypes($audience_segment_types)
    {
        if (is_null($audience_segment_types)) {
            throw new \InvalidArgumentException('non-nullable audience_segment_types cannot be null');
        }
        $allowedValues = $this->getAudienceSegmentTypesAllowableValues();
        if (array_diff($audience_segment_types, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'audience_segment_types', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }


        $this->container['audience_segment_types'] = $audience_segment_types;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
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
    #[\ReturnTypeWillChange]
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
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
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
    #[\ReturnTypeWillChange]
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


