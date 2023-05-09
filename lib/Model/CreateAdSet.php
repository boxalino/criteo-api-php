<?php
/**
 * CreateAdSet
 *
 * PHP version 7.4
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
 * CreateAdSet Class Doc Comment
 *
 * @category Class
 * @description ad set create model
 * @package  criteo\api\marketingsolutions\preview
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CreateAdSet implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreateAdSet';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'dataset_id' => 'string',
        'campaign_id' => 'string',
        'objective' => 'string',
        'schedule' => '\Criteo\Api\MarketingSolutions\Model\CreateAdSetSchedule',
        'bidding' => '\Criteo\Api\MarketingSolutions\Model\CreateAdSetBidding',
        'targeting' => '\Criteo\Api\MarketingSolutions\Model\CreateAdSetTargeting',
        'budget' => '\Criteo\Api\MarketingSolutions\Model\CreateAdSetBudget',
        'tracking_code' => 'string',
        'media_type' => 'string'
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
        'dataset_id' => null,
        'campaign_id' => null,
        'objective' => null,
        'schedule' => null,
        'bidding' => null,
        'targeting' => null,
        'budget' => null,
        'tracking_code' => null,
        'media_type' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'name' => false,
		'dataset_id' => false,
		'campaign_id' => false,
		'objective' => false,
		'schedule' => false,
		'bidding' => false,
		'targeting' => false,
		'budget' => false,
		'tracking_code' => false,
		'media_type' => false
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
        'dataset_id' => 'datasetId',
        'campaign_id' => 'campaignId',
        'objective' => 'objective',
        'schedule' => 'schedule',
        'bidding' => 'bidding',
        'targeting' => 'targeting',
        'budget' => 'budget',
        'tracking_code' => 'trackingCode',
        'media_type' => 'mediaType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'dataset_id' => 'setDatasetId',
        'campaign_id' => 'setCampaignId',
        'objective' => 'setObjective',
        'schedule' => 'setSchedule',
        'bidding' => 'setBidding',
        'targeting' => 'setTargeting',
        'budget' => 'setBudget',
        'tracking_code' => 'setTrackingCode',
        'media_type' => 'setMediaType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'dataset_id' => 'getDatasetId',
        'campaign_id' => 'getCampaignId',
        'objective' => 'getObjective',
        'schedule' => 'getSchedule',
        'bidding' => 'getBidding',
        'targeting' => 'getTargeting',
        'budget' => 'getBudget',
        'tracking_code' => 'getTrackingCode',
        'media_type' => 'getMediaType'
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

    public const OBJECTIVE_CUSTOM_ACTION = 'customAction';
    public const OBJECTIVE_CLICKS = 'clicks';
    public const OBJECTIVE_CONVERSIONS = 'conversions';
    public const OBJECTIVE_DISPLAYS = 'displays';
    public const OBJECTIVE_APP_PROMOTION = 'appPromotion';
    public const OBJECTIVE_REVENUE = 'revenue';
    public const OBJECTIVE_STORE_CONVERSIONS = 'storeConversions';
    public const OBJECTIVE_VALUE = 'value';
    public const OBJECTIVE_REACH = 'reach';
    public const OBJECTIVE_VISITS = 'visits';
    public const OBJECTIVE_VIDEO_VIEWS = 'videoViews';
    public const MEDIA_TYPE_DISPLAY = 'display';
    public const MEDIA_TYPE_VIDEO = 'video';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getObjectiveAllowableValues()
    {
        return [
            self::OBJECTIVE_CUSTOM_ACTION,
            self::OBJECTIVE_CLICKS,
            self::OBJECTIVE_CONVERSIONS,
            self::OBJECTIVE_DISPLAYS,
            self::OBJECTIVE_APP_PROMOTION,
            self::OBJECTIVE_REVENUE,
            self::OBJECTIVE_STORE_CONVERSIONS,
            self::OBJECTIVE_VALUE,
            self::OBJECTIVE_REACH,
            self::OBJECTIVE_VISITS,
            self::OBJECTIVE_VIDEO_VIEWS,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMediaTypeAllowableValues()
    {
        return [
            self::MEDIA_TYPE_DISPLAY,
            self::MEDIA_TYPE_VIDEO,
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
        $this->setIfExists('dataset_id', $data ?? [], null);
        $this->setIfExists('campaign_id', $data ?? [], null);
        $this->setIfExists('objective', $data ?? [], null);
        $this->setIfExists('schedule', $data ?? [], null);
        $this->setIfExists('bidding', $data ?? [], null);
        $this->setIfExists('targeting', $data ?? [], null);
        $this->setIfExists('budget', $data ?? [], null);
        $this->setIfExists('tracking_code', $data ?? [], null);
        $this->setIfExists('media_type', $data ?? [], null);
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

        $allowedValues = $this->getObjectiveAllowableValues();
        if (!is_null($this->container['objective']) && !in_array($this->container['objective'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'objective', must be one of '%s'",
                $this->container['objective'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getMediaTypeAllowableValues();
        if (!is_null($this->container['media_type']) && !in_array($this->container['media_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'media_type', must be one of '%s'",
                $this->container['media_type'],
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
     * @param string|null $name Name of the ad set
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
     * Gets dataset_id
     *
     * @return string|null
     */
    public function getDatasetId()
    {
        return $this->container['dataset_id'];
    }

    /**
     * Sets dataset_id
     *
     * @param string|null $dataset_id Dataset id of this ad set
     *
     * @return self
     */
    public function setDatasetId($dataset_id)
    {
        if (is_null($dataset_id)) {
            throw new \InvalidArgumentException('non-nullable dataset_id cannot be null');
        }
        $this->container['dataset_id'] = $dataset_id;

        return $this;
    }

    /**
     * Gets campaign_id
     *
     * @return string|null
     */
    public function getCampaignId()
    {
        return $this->container['campaign_id'];
    }

    /**
     * Sets campaign_id
     *
     * @param string|null $campaign_id Campaign id this ad set belongs to
     *
     * @return self
     */
    public function setCampaignId($campaign_id)
    {
        if (is_null($campaign_id)) {
            throw new \InvalidArgumentException('non-nullable campaign_id cannot be null');
        }
        $this->container['campaign_id'] = $campaign_id;

        return $this;
    }

    /**
     * Gets objective
     *
     * @return string|null
     */
    public function getObjective()
    {
        return $this->container['objective'];
    }

    /**
     * Sets objective
     *
     * @param string|null $objective Objective of the ad set
     *
     * @return self
     */
    public function setObjective($objective)
    {
        if (is_null($objective)) {
            throw new \InvalidArgumentException('non-nullable objective cannot be null');
        }
        $allowedValues = $this->getObjectiveAllowableValues();
        if (!in_array($objective, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'objective', must be one of '%s'",
                    $objective,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['objective'] = $objective;

        return $this;
    }

    /**
     * Gets schedule
     *
     * @return \Criteo\Api\MarketingSolutions\Model\CreateAdSetSchedule|null
     */
    public function getSchedule()
    {
        return $this->container['schedule'];
    }

    /**
     * Sets schedule
     *
     * @param \Criteo\Api\MarketingSolutions\Model\CreateAdSetSchedule|null $schedule schedule
     *
     * @return self
     */
    public function setSchedule($schedule)
    {
        if (is_null($schedule)) {
            throw new \InvalidArgumentException('non-nullable schedule cannot be null');
        }
        $this->container['schedule'] = $schedule;

        return $this;
    }

    /**
     * Gets bidding
     *
     * @return \Criteo\Api\MarketingSolutions\Model\CreateAdSetBidding|null
     */
    public function getBidding()
    {
        return $this->container['bidding'];
    }

    /**
     * Sets bidding
     *
     * @param \Criteo\Api\MarketingSolutions\Model\CreateAdSetBidding|null $bidding bidding
     *
     * @return self
     */
    public function setBidding($bidding)
    {
        if (is_null($bidding)) {
            throw new \InvalidArgumentException('non-nullable bidding cannot be null');
        }
        $this->container['bidding'] = $bidding;

        return $this;
    }

    /**
     * Gets targeting
     *
     * @return \Criteo\Api\MarketingSolutions\Model\CreateAdSetTargeting|null
     */
    public function getTargeting()
    {
        return $this->container['targeting'];
    }

    /**
     * Sets targeting
     *
     * @param \Criteo\Api\MarketingSolutions\Model\CreateAdSetTargeting|null $targeting targeting
     *
     * @return self
     */
    public function setTargeting($targeting)
    {
        if (is_null($targeting)) {
            throw new \InvalidArgumentException('non-nullable targeting cannot be null');
        }
        $this->container['targeting'] = $targeting;

        return $this;
    }

    /**
     * Gets budget
     *
     * @return \Criteo\Api\MarketingSolutions\Model\CreateAdSetBudget|null
     */
    public function getBudget()
    {
        return $this->container['budget'];
    }

    /**
     * Sets budget
     *
     * @param \Criteo\Api\MarketingSolutions\Model\CreateAdSetBudget|null $budget budget
     *
     * @return self
     */
    public function setBudget($budget)
    {
        if (is_null($budget)) {
            throw new \InvalidArgumentException('non-nullable budget cannot be null');
        }
        $this->container['budget'] = $budget;

        return $this;
    }

    /**
     * Gets tracking_code
     *
     * @return string|null
     */
    public function getTrackingCode()
    {
        return $this->container['tracking_code'];
    }

    /**
     * Sets tracking_code
     *
     * @param string|null $tracking_code The click tracking code associated to this Ad Set.
     *
     * @return self
     */
    public function setTrackingCode($tracking_code)
    {
        if (is_null($tracking_code)) {
            throw new \InvalidArgumentException('non-nullable tracking_code cannot be null');
        }
        $this->container['tracking_code'] = $tracking_code;

        return $this;
    }

    /**
     * Gets media_type
     *
     * @return string|null
     */
    public function getMediaType()
    {
        return $this->container['media_type'];
    }

    /**
     * Sets media_type
     *
     * @param string|null $media_type Media type for the ad set
     *
     * @return self
     */
    public function setMediaType($media_type)
    {
        if (is_null($media_type)) {
            throw new \InvalidArgumentException('non-nullable media_type cannot be null');
        }
        $allowedValues = $this->getMediaTypeAllowableValues();
        if (!in_array($media_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'media_type', must be one of '%s'",
                    $media_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['media_type'] = $media_type;

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


