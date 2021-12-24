<?php
/**
 * CreateAdSetAudienceConfiguration
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
 * CreateAdSetAudienceConfiguration Class Doc Comment
 *
 * @category Class
 * @description ad set audience create model
 * @package  criteo\api\marketingsolutions\preview
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CreateAdSetAudienceConfiguration implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreateAdSetAudienceConfiguration';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'min_days_since_last_visit' => 'int',
        'max_days_since_last_visit' => 'int',
        'excluded_audience_ids' => 'string[]',
        'audience_similar' => '\criteo\api\marketingsolutions\preview\Model\AudienceSimilar',
        'audience_website_visitor' => '\criteo\api\marketingsolutions\preview\Model\AudienceWebsiteVisitor',
        'audience_contact_list' => '\criteo\api\marketingsolutions\preview\Model\AudienceContactList',
        'audience_custom' => '\criteo\api\marketingsolutions\preview\Model\AudienceCustom'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'min_days_since_last_visit' => 'int32',
        'max_days_since_last_visit' => 'int32',
        'excluded_audience_ids' => null,
        'audience_similar' => null,
        'audience_website_visitor' => null,
        'audience_contact_list' => null,
        'audience_custom' => null
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
        'min_days_since_last_visit' => 'minDaysSinceLastVisit',
        'max_days_since_last_visit' => 'maxDaysSinceLastVisit',
        'excluded_audience_ids' => 'excludedAudienceIds',
        'audience_similar' => 'audienceSimilar',
        'audience_website_visitor' => 'audienceWebsiteVisitor',
        'audience_contact_list' => 'audienceContactList',
        'audience_custom' => 'audienceCustom'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'min_days_since_last_visit' => 'setMinDaysSinceLastVisit',
        'max_days_since_last_visit' => 'setMaxDaysSinceLastVisit',
        'excluded_audience_ids' => 'setExcludedAudienceIds',
        'audience_similar' => 'setAudienceSimilar',
        'audience_website_visitor' => 'setAudienceWebsiteVisitor',
        'audience_contact_list' => 'setAudienceContactList',
        'audience_custom' => 'setAudienceCustom'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'min_days_since_last_visit' => 'getMinDaysSinceLastVisit',
        'max_days_since_last_visit' => 'getMaxDaysSinceLastVisit',
        'excluded_audience_ids' => 'getExcludedAudienceIds',
        'audience_similar' => 'getAudienceSimilar',
        'audience_website_visitor' => 'getAudienceWebsiteVisitor',
        'audience_contact_list' => 'getAudienceContactList',
        'audience_custom' => 'getAudienceCustom'
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
        $this->container['min_days_since_last_visit'] = $data['min_days_since_last_visit'] ?? null;
        $this->container['max_days_since_last_visit'] = $data['max_days_since_last_visit'] ?? null;
        $this->container['excluded_audience_ids'] = $data['excluded_audience_ids'] ?? null;
        $this->container['audience_similar'] = $data['audience_similar'] ?? null;
        $this->container['audience_website_visitor'] = $data['audience_website_visitor'] ?? null;
        $this->container['audience_contact_list'] = $data['audience_contact_list'] ?? null;
        $this->container['audience_custom'] = $data['audience_custom'] ?? null;
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
     * Gets min_days_since_last_visit
     *
     * @return int|null
     */
    public function getMinDaysSinceLastVisit()
    {
        return $this->container['min_days_since_last_visit'];
    }

    /**
     * Sets min_days_since_last_visit
     *
     * @param int|null $min_days_since_last_visit The minimum days since last visit on the advertiser web site for being part of this audience, if not null
     *
     * @return self
     */
    public function setMinDaysSinceLastVisit($min_days_since_last_visit)
    {
        $this->container['min_days_since_last_visit'] = $min_days_since_last_visit;

        return $this;
    }

    /**
     * Gets max_days_since_last_visit
     *
     * @return int|null
     */
    public function getMaxDaysSinceLastVisit()
    {
        return $this->container['max_days_since_last_visit'];
    }

    /**
     * Sets max_days_since_last_visit
     *
     * @param int|null $max_days_since_last_visit The maximum days since last visit on the advertiser web site for being part of this audience, if not null
     *
     * @return self
     */
    public function setMaxDaysSinceLastVisit($max_days_since_last_visit)
    {
        $this->container['max_days_since_last_visit'] = $max_days_since_last_visit;

        return $this;
    }

    /**
     * Gets excluded_audience_ids
     *
     * @return string[]|null
     */
    public function getExcludedAudienceIds()
    {
        return $this->container['excluded_audience_ids'];
    }

    /**
     * Sets excluded_audience_ids
     *
     * @param string[]|null $excluded_audience_ids The list of audience ids that define who CANNOT be targeted by the ad set. So far, only contact list are supported here
     *
     * @return self
     */
    public function setExcludedAudienceIds($excluded_audience_ids)
    {


        $this->container['excluded_audience_ids'] = $excluded_audience_ids;

        return $this;
    }

    /**
     * Gets audience_similar
     *
     * @return \criteo\api\marketingsolutions\preview\Model\AudienceSimilar|null
     */
    public function getAudienceSimilar()
    {
        return $this->container['audience_similar'];
    }

    /**
     * Sets audience_similar
     *
     * @param \criteo\api\marketingsolutions\preview\Model\AudienceSimilar|null $audience_similar audience_similar
     *
     * @return self
     */
    public function setAudienceSimilar($audience_similar)
    {
        $this->container['audience_similar'] = $audience_similar;

        return $this;
    }

    /**
     * Gets audience_website_visitor
     *
     * @return \criteo\api\marketingsolutions\preview\Model\AudienceWebsiteVisitor|null
     */
    public function getAudienceWebsiteVisitor()
    {
        return $this->container['audience_website_visitor'];
    }

    /**
     * Sets audience_website_visitor
     *
     * @param \criteo\api\marketingsolutions\preview\Model\AudienceWebsiteVisitor|null $audience_website_visitor audience_website_visitor
     *
     * @return self
     */
    public function setAudienceWebsiteVisitor($audience_website_visitor)
    {
        $this->container['audience_website_visitor'] = $audience_website_visitor;

        return $this;
    }

    /**
     * Gets audience_contact_list
     *
     * @return \criteo\api\marketingsolutions\preview\Model\AudienceContactList|null
     */
    public function getAudienceContactList()
    {
        return $this->container['audience_contact_list'];
    }

    /**
     * Sets audience_contact_list
     *
     * @param \criteo\api\marketingsolutions\preview\Model\AudienceContactList|null $audience_contact_list audience_contact_list
     *
     * @return self
     */
    public function setAudienceContactList($audience_contact_list)
    {
        $this->container['audience_contact_list'] = $audience_contact_list;

        return $this;
    }

    /**
     * Gets audience_custom
     *
     * @return \criteo\api\marketingsolutions\preview\Model\AudienceCustom|null
     */
    public function getAudienceCustom()
    {
        return $this->container['audience_custom'];
    }

    /**
     * Sets audience_custom
     *
     * @param \criteo\api\marketingsolutions\preview\Model\AudienceCustom|null $audience_custom audience_custom
     *
     * @return self
     */
    public function setAudienceCustom($audience_custom)
    {
        $this->container['audience_custom'] = $audience_custom;

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


