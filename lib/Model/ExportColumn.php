<?php
/**
 * ExportColumn
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
 * ExportColumn Class Doc Comment
 *
 * @category Class
 * @description Description of a column from an async report request
 * @package  Criteo\Api\MarketingSolutions
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ExportColumn implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ExportColumn';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'title' => 'string',
        'description' => 'string',
        'type' => 'string',
        'role' => 'string',
        'related_to' => 'string',
        'timezone' => 'string',
        'duration' => 'string',
        'currency' => 'string',
        'deprecated' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'name' => null,
        'title' => null,
        'description' => null,
        'type' => null,
        'role' => null,
        'related_to' => null,
        'timezone' => null,
        'duration' => null,
        'currency' => null,
        'deprecated' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'name' => false,
		'title' => false,
		'description' => false,
		'type' => false,
		'role' => false,
		'related_to' => false,
		'timezone' => false,
		'duration' => false,
		'currency' => false,
		'deprecated' => false
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
        'name' => 'name',
        'title' => 'title',
        'description' => 'description',
        'type' => 'type',
        'role' => 'role',
        'related_to' => 'relatedTo',
        'timezone' => 'timezone',
        'duration' => 'duration',
        'currency' => 'currency',
        'deprecated' => 'deprecated'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'title' => 'setTitle',
        'description' => 'setDescription',
        'type' => 'setType',
        'role' => 'setRole',
        'related_to' => 'setRelatedTo',
        'timezone' => 'setTimezone',
        'duration' => 'setDuration',
        'currency' => 'setCurrency',
        'deprecated' => 'setDeprecated'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'title' => 'getTitle',
        'description' => 'getDescription',
        'type' => 'getType',
        'role' => 'getRole',
        'related_to' => 'getRelatedTo',
        'timezone' => 'getTimezone',
        'duration' => 'getDuration',
        'currency' => 'getCurrency',
        'deprecated' => 'getDeprecated'
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

    public const TYPE_BOOLEAN = 'Boolean';
    public const TYPE_NUMBER = 'Number';
    public const TYPE_MONEY = 'Money';
    public const TYPE_STRING = 'String';
    public const TYPE_DATE = 'Date';
    public const TYPE_DATE_TIME = 'DateTime';
    public const TYPE_INTERVAL = 'Interval';
    public const TYPE_DURATION = 'Duration';
    public const ROLE_DIMENSION = 'Dimension';
    public const ROLE_PROPERTY = 'Property';
    public const ROLE_INTERVAL = 'Interval';
    public const ROLE_METRIC = 'Metric';
    public const RELATED_TO_AD_SET_ID = 'AdSetId';
    public const RELATED_TO_AD_SET = 'AdSet';
    public const RELATED_TO_ADVERTISER_ID = 'AdvertiserId';
    public const RELATED_TO_ADVERTISER = 'Advertiser';
    public const RELATED_TO_CATEGORY_ID = 'CategoryId';
    public const RELATED_TO_CATEGORY = 'Category';
    public const RELATED_TO_HOUR = 'Hour';
    public const RELATED_TO_DAY = 'Day';
    public const RELATED_TO_WEEK = 'Week';
    public const RELATED_TO_MONTH = 'Month';
    public const RELATED_TO_YEAR = 'Year';
    public const RELATED_TO_OS = 'Os';
    public const RELATED_TO_DEVICE = 'Device';
    public const RELATED_TO_CAMPAIGN_ID = 'CampaignId';
    public const RELATED_TO_CAMPAIGN = 'Campaign';
    public const RELATED_TO_AD_ID = 'AdId';
    public const RELATED_TO_AD = 'Ad';
    public const RELATED_TO_COUPON_ID = 'CouponId';
    public const RELATED_TO_COUPON = 'Coupon';
    public const RELATED_TO_CHANNEL_ID = 'ChannelId';
    public const RELATED_TO_CHANNEL = 'Channel';
    public const RELATED_TO_VIDEO_PLACEMENT = 'VideoPlacement';
    public const RELATED_TO_MARKETING_CAMPAIGN_GOAL = 'MarketingCampaignGoal';
    public const RELATED_TO_MARKETING_OBJECTIVE = 'MarketingObjective';
    public const RELATED_TO_MARKETING_OBJECTIVE_ID = 'MarketingObjectiveId';
    public const RELATED_TO_VIDEO_PLAYER_SIZE = 'VideoPlayerSize';
    public const RELATED_TO_VIDEO_PLAYBACK_METHOD = 'VideoPlaybackMethod';
    public const RELATED_TO_SSP = 'SSP';
    public const RELATED_TO_VIDEO_DURATION_IN_SECONDS = 'VideoDurationInSeconds';
    public const RELATED_TO_MEDIA_TYPE = 'MediaType';
    public const RELATED_TO_AD_FORMAT = 'AdFormat';
    public const RELATED_TO_DISPLAY_SIZE = 'DisplaySize';
    public const RELATED_TO_VIDEO_PLAYER_RATIO = 'VideoPlayerRatio';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_BOOLEAN,
            self::TYPE_NUMBER,
            self::TYPE_MONEY,
            self::TYPE_STRING,
            self::TYPE_DATE,
            self::TYPE_DATE_TIME,
            self::TYPE_INTERVAL,
            self::TYPE_DURATION,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRoleAllowableValues()
    {
        return [
            self::ROLE_DIMENSION,
            self::ROLE_PROPERTY,
            self::ROLE_INTERVAL,
            self::ROLE_METRIC,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRelatedToAllowableValues()
    {
        return [
            self::RELATED_TO_AD_SET_ID,
            self::RELATED_TO_AD_SET,
            self::RELATED_TO_ADVERTISER_ID,
            self::RELATED_TO_ADVERTISER,
            self::RELATED_TO_CATEGORY_ID,
            self::RELATED_TO_CATEGORY,
            self::RELATED_TO_HOUR,
            self::RELATED_TO_DAY,
            self::RELATED_TO_WEEK,
            self::RELATED_TO_MONTH,
            self::RELATED_TO_YEAR,
            self::RELATED_TO_OS,
            self::RELATED_TO_DEVICE,
            self::RELATED_TO_CAMPAIGN_ID,
            self::RELATED_TO_CAMPAIGN,
            self::RELATED_TO_AD_ID,
            self::RELATED_TO_AD,
            self::RELATED_TO_COUPON_ID,
            self::RELATED_TO_COUPON,
            self::RELATED_TO_CHANNEL_ID,
            self::RELATED_TO_CHANNEL,
            self::RELATED_TO_VIDEO_PLACEMENT,
            self::RELATED_TO_MARKETING_CAMPAIGN_GOAL,
            self::RELATED_TO_MARKETING_OBJECTIVE,
            self::RELATED_TO_MARKETING_OBJECTIVE_ID,
            self::RELATED_TO_VIDEO_PLAYER_SIZE,
            self::RELATED_TO_VIDEO_PLAYBACK_METHOD,
            self::RELATED_TO_SSP,
            self::RELATED_TO_VIDEO_DURATION_IN_SECONDS,
            self::RELATED_TO_MEDIA_TYPE,
            self::RELATED_TO_AD_FORMAT,
            self::RELATED_TO_DISPLAY_SIZE,
            self::RELATED_TO_VIDEO_PLAYER_RATIO,
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
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('title', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('role', $data ?? [], null);
        $this->setIfExists('related_to', $data ?? [], null);
        $this->setIfExists('timezone', $data ?? [], null);
        $this->setIfExists('duration', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('deprecated', $data ?? [], null);
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

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getRoleAllowableValues();
        if (!is_null($this->container['role']) && !in_array($this->container['role'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'role', must be one of '%s'",
                $this->container['role'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getRelatedToAllowableValues();
        if (!is_null($this->container['related_to']) && !in_array($this->container['related_to'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'related_to', must be one of '%s'",
                $this->container['related_to'],
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
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title title
     *
     * @return self
     */
    public function setTitle($title)
    {
        if (is_null($title)) {
            throw new \InvalidArgumentException('non-nullable title cannot be null');
        }
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description description
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type type
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type', must be one of '%s'",
                    $type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets role
     *
     * @return string|null
     */
    public function getRole()
    {
        return $this->container['role'];
    }

    /**
     * Sets role
     *
     * @param string|null $role role
     *
     * @return self
     */
    public function setRole($role)
    {
        if (is_null($role)) {
            throw new \InvalidArgumentException('non-nullable role cannot be null');
        }
        $allowedValues = $this->getRoleAllowableValues();
        if (!in_array($role, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'role', must be one of '%s'",
                    $role,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['role'] = $role;

        return $this;
    }

    /**
     * Gets related_to
     *
     * @return string|null
     */
    public function getRelatedTo()
    {
        return $this->container['related_to'];
    }

    /**
     * Sets related_to
     *
     * @param string|null $related_to related_to
     *
     * @return self
     */
    public function setRelatedTo($related_to)
    {
        if (is_null($related_to)) {
            throw new \InvalidArgumentException('non-nullable related_to cannot be null');
        }
        $allowedValues = $this->getRelatedToAllowableValues();
        if (!in_array($related_to, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'related_to', must be one of '%s'",
                    $related_to,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['related_to'] = $related_to;

        return $this;
    }

    /**
     * Gets timezone
     *
     * @return string|null
     */
    public function getTimezone()
    {
        return $this->container['timezone'];
    }

    /**
     * Sets timezone
     *
     * @param string|null $timezone timezone
     *
     * @return self
     */
    public function setTimezone($timezone)
    {
        if (is_null($timezone)) {
            throw new \InvalidArgumentException('non-nullable timezone cannot be null');
        }
        $this->container['timezone'] = $timezone;

        return $this;
    }

    /**
     * Gets duration
     *
     * @return string|null
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     *
     * @param string|null $duration duration
     *
     * @return self
     */
    public function setDuration($duration)
    {
        if (is_null($duration)) {
            throw new \InvalidArgumentException('non-nullable duration cannot be null');
        }
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string|null $currency currency
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        if (is_null($currency)) {
            throw new \InvalidArgumentException('non-nullable currency cannot be null');
        }
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets deprecated
     *
     * @return bool|null
     */
    public function getDeprecated()
    {
        return $this->container['deprecated'];
    }

    /**
     * Sets deprecated
     *
     * @param bool|null $deprecated deprecated
     *
     * @return self
     */
    public function setDeprecated($deprecated)
    {
        if (is_null($deprecated)) {
            throw new \InvalidArgumentException('non-nullable deprecated cannot be null');
        }
        $this->container['deprecated'] = $deprecated;

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


