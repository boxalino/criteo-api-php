<?php
/**
 * SetUserProfileModel
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
 * SetUserProfileModel Class Doc Comment
 *
 * @category Class
 * @description Used for the /user-profiles/set endpoint. Contains information about the user profile that we add or update
 * @package  Criteo\Api\MarketingSolutions
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SetUserProfileModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SetUserProfileModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'user_profile_id' => 'string',
        'user_profile_list_id' => 'string',
        'user_profile_identifiers' => '\Criteo\Api\MarketingSolutions\Model\UserProfileIdentifierModel[]',
        'user_profile_attributes' => '\Criteo\Api\MarketingSolutions\Model\UserProfileAttributeModel[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'user_profile_id' => null,
        'user_profile_list_id' => null,
        'user_profile_identifiers' => null,
        'user_profile_attributes' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'user_profile_id' => false,
		'user_profile_list_id' => false,
		'user_profile_identifiers' => false,
		'user_profile_attributes' => false
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
        'user_profile_id' => 'userProfileId',
        'user_profile_list_id' => 'userProfileListId',
        'user_profile_identifiers' => 'userProfileIdentifiers',
        'user_profile_attributes' => 'userProfileAttributes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'user_profile_id' => 'setUserProfileId',
        'user_profile_list_id' => 'setUserProfileListId',
        'user_profile_identifiers' => 'setUserProfileIdentifiers',
        'user_profile_attributes' => 'setUserProfileAttributes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'user_profile_id' => 'getUserProfileId',
        'user_profile_list_id' => 'getUserProfileListId',
        'user_profile_identifiers' => 'getUserProfileIdentifiers',
        'user_profile_attributes' => 'getUserProfileAttributes'
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
        $this->setIfExists('user_profile_id', $data ?? [], null);
        $this->setIfExists('user_profile_list_id', $data ?? [], null);
        $this->setIfExists('user_profile_identifiers', $data ?? [], null);
        $this->setIfExists('user_profile_attributes', $data ?? [], null);
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

        if ($this->container['user_profile_id'] === null) {
            $invalidProperties[] = "'user_profile_id' can't be null";
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
     * Gets user_profile_id
     *
     * @return string
     */
    public function getUserProfileId()
    {
        return $this->container['user_profile_id'];
    }

    /**
     * Sets user_profile_id
     *
     * @param string $user_profile_id user_profile_id
     *
     * @return self
     */
    public function setUserProfileId($user_profile_id)
    {
        if (is_null($user_profile_id)) {
            throw new \InvalidArgumentException('non-nullable user_profile_id cannot be null');
        }
        $this->container['user_profile_id'] = $user_profile_id;

        return $this;
    }

    /**
     * Gets user_profile_list_id
     *
     * @return string|null
     */
    public function getUserProfileListId()
    {
        return $this->container['user_profile_list_id'];
    }

    /**
     * Sets user_profile_list_id
     *
     * @param string|null $user_profile_list_id user_profile_list_id
     *
     * @return self
     */
    public function setUserProfileListId($user_profile_list_id)
    {
        if (is_null($user_profile_list_id)) {
            throw new \InvalidArgumentException('non-nullable user_profile_list_id cannot be null');
        }
        $this->container['user_profile_list_id'] = $user_profile_list_id;

        return $this;
    }

    /**
     * Gets user_profile_identifiers
     *
     * @return \Criteo\Api\MarketingSolutions\Model\UserProfileIdentifierModel[]|null
     */
    public function getUserProfileIdentifiers()
    {
        return $this->container['user_profile_identifiers'];
    }

    /**
     * Sets user_profile_identifiers
     *
     * @param \Criteo\Api\MarketingSolutions\Model\UserProfileIdentifierModel[]|null $user_profile_identifiers user_profile_identifiers
     *
     * @return self
     */
    public function setUserProfileIdentifiers($user_profile_identifiers)
    {
        if (is_null($user_profile_identifiers)) {
            throw new \InvalidArgumentException('non-nullable user_profile_identifiers cannot be null');
        }


        $this->container['user_profile_identifiers'] = $user_profile_identifiers;

        return $this;
    }

    /**
     * Gets user_profile_attributes
     *
     * @return \Criteo\Api\MarketingSolutions\Model\UserProfileAttributeModel[]|null
     */
    public function getUserProfileAttributes()
    {
        return $this->container['user_profile_attributes'];
    }

    /**
     * Sets user_profile_attributes
     *
     * @param \Criteo\Api\MarketingSolutions\Model\UserProfileAttributeModel[]|null $user_profile_attributes user_profile_attributes
     *
     * @return self
     */
    public function setUserProfileAttributes($user_profile_attributes)
    {
        if (is_null($user_profile_attributes)) {
            throw new \InvalidArgumentException('non-nullable user_profile_attributes cannot be null');
        }


        $this->container['user_profile_attributes'] = $user_profile_attributes;

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


