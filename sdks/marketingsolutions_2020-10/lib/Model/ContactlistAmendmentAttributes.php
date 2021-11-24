<?php
/**
 * ContactlistAmendmentAttributes
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  criteo\api\marketingsolutions\v2020_10
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Criteo API Specification
 *
 * This is used to help Criteo clients use our APIs
 *
 * The version of the OpenAPI document: 2021-04
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
 * ContactlistAmendmentAttributes Class Doc Comment
 *
 * @category Class
 * @description the name of the entity type
 * @package  criteo\api\marketingsolutions\v2020_10
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ContactlistAmendmentAttributes implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ContactlistAmendment_attributes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'operation' => 'string',
        'identifier_type' => 'string',
        'identifiers' => 'string[]',
        'gum_caller_id' => 'int',
        'internal_identifiers' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'operation' => null,
        'identifier_type' => null,
        'identifiers' => null,
        'gum_caller_id' => null,
        'internal_identifiers' => null
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
        'operation' => 'operation',
        'identifier_type' => 'identifierType',
        'identifiers' => 'identifiers',
        'gum_caller_id' => 'gumCallerId',
        'internal_identifiers' => 'internalIdentifiers'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'operation' => 'setOperation',
        'identifier_type' => 'setIdentifierType',
        'identifiers' => 'setIdentifiers',
        'gum_caller_id' => 'setGumCallerId',
        'internal_identifiers' => 'setInternalIdentifiers'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'operation' => 'getOperation',
        'identifier_type' => 'getIdentifierType',
        'identifiers' => 'getIdentifiers',
        'gum_caller_id' => 'getGumCallerId',
        'internal_identifiers' => 'getInternalIdentifiers'
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

    const OPERATION_ADD = 'add';
    const OPERATION_REMOVE = 'remove';
    const IDENTIFIER_TYPE_EMAIL = 'email';
    const IDENTIFIER_TYPE_MADID = 'madid';
    const IDENTIFIER_TYPE_IDENTITY_LINK = 'identityLink';
    const IDENTIFIER_TYPE_GUM = 'gum';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOperationAllowableValues()
    {
        return [
            self::OPERATION_ADD,
            self::OPERATION_REMOVE,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getIdentifierTypeAllowableValues()
    {
        return [
            self::IDENTIFIER_TYPE_EMAIL,
            self::IDENTIFIER_TYPE_MADID,
            self::IDENTIFIER_TYPE_IDENTITY_LINK,
            self::IDENTIFIER_TYPE_GUM,
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
        $this->container['operation'] = $data['operation'] ?? null;
        $this->container['identifier_type'] = $data['identifier_type'] ?? null;
        $this->container['identifiers'] = $data['identifiers'] ?? null;
        $this->container['gum_caller_id'] = $data['gum_caller_id'] ?? null;
        $this->container['internal_identifiers'] = $data['internal_identifiers'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['operation'] === null) {
            $invalidProperties[] = "'operation' can't be null";
        }
        $allowedValues = $this->getOperationAllowableValues();
        if (!is_null($this->container['operation']) && !in_array($this->container['operation'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'operation', must be one of '%s'",
                $this->container['operation'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getIdentifierTypeAllowableValues();
        if (!is_null($this->container['identifier_type']) && !in_array($this->container['identifier_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'identifier_type', must be one of '%s'",
                $this->container['identifier_type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['identifiers'] === null) {
            $invalidProperties[] = "'identifiers' can't be null";
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
     * Gets operation
     *
     * @return string
     */
    public function getOperation()
    {
        return $this->container['operation'];
    }

    /**
     * Sets operation
     *
     * @param string $operation Operation to add or remove users
     *
     * @return self
     */
    public function setOperation($operation)
    {
        $allowedValues = $this->getOperationAllowableValues();
        if (!in_array($operation, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'operation', must be one of '%s'",
                    $operation,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['operation'] = $operation;

        return $this;
    }

    /**
     * Gets identifier_type
     *
     * @return string|null
     */
    public function getIdentifierType()
    {
        return $this->container['identifier_type'];
    }

    /**
     * Sets identifier_type
     *
     * @param string|null $identifier_type What type of identifiers are used
     *
     * @return self
     */
    public function setIdentifierType($identifier_type)
    {
        $allowedValues = $this->getIdentifierTypeAllowableValues();
        if (!is_null($identifier_type) && !in_array($identifier_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'identifier_type', must be one of '%s'",
                    $identifier_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['identifier_type'] = $identifier_type;

        return $this;
    }

    /**
     * Gets identifiers
     *
     * @return string[]
     */
    public function getIdentifiers()
    {
        return $this->container['identifiers'];
    }

    /**
     * Sets identifiers
     *
     * @param string[] $identifiers The users tos add or remove, each in the schema specified
     *
     * @return self
     */
    public function setIdentifiers($identifiers)
    {
        $this->container['identifiers'] = $identifiers;

        return $this;
    }

    /**
     * Gets gum_caller_id
     *
     * @return int|null
     */
    public function getGumCallerId()
    {
        return $this->container['gum_caller_id'];
    }

    /**
     * Sets gum_caller_id
     *
     * @param int|null $gum_caller_id The Gum caller id of the advertiser patching identifiers of type Gum
     *
     * @return self
     */
    public function setGumCallerId($gum_caller_id)
    {
        $this->container['gum_caller_id'] = $gum_caller_id;

        return $this;
    }

    /**
     * Gets internal_identifiers
     *
     * @return bool|null
     */
    public function getInternalIdentifiers()
    {
        return $this->container['internal_identifiers'];
    }

    /**
     * Sets internal_identifiers
     *
     * @param bool|null $internal_identifiers The flag to indicate if identifiers are external or internal
     *
     * @return self
     */
    public function setInternalIdentifiers($internal_identifiers)
    {
        $this->container['internal_identifiers'] = $internal_identifiers;

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


