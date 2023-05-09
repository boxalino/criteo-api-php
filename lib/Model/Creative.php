<?php
/**
 * Creative
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
 * Creative Class Doc Comment
 *
 * @category Class
 * @description A creative is a project with the necessary information to display a creative
 * @package  Criteo\Api\MarketingSolutions
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Creative implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Creative';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'description' => 'string',
        'author' => 'string',
        'status' => 'string',
        'format' => 'string',
        'advertiser_id' => 'string',
        'dataset_id' => 'string',
        'image_attributes' => '\Criteo\Api\MarketingSolutions\Model\ImageAttributes',
        'html_tag_attributes' => '\Criteo\Api\MarketingSolutions\Model\HtmlTagAttributes',
        'dynamic_attributes' => '\Criteo\Api\MarketingSolutions\Model\DynamicAttributes',
        'adaptive_attributes' => '\Criteo\Api\MarketingSolutions\Model\AdaptiveAttributes'
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
        'description' => null,
        'author' => null,
        'status' => null,
        'format' => null,
        'advertiser_id' => null,
        'dataset_id' => null,
        'image_attributes' => null,
        'html_tag_attributes' => null,
        'dynamic_attributes' => null,
        'adaptive_attributes' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'name' => false,
		'description' => false,
		'author' => false,
		'status' => false,
		'format' => false,
		'advertiser_id' => false,
		'dataset_id' => false,
		'image_attributes' => false,
		'html_tag_attributes' => false,
		'dynamic_attributes' => false,
		'adaptive_attributes' => false
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
        'description' => 'description',
        'author' => 'author',
        'status' => 'status',
        'format' => 'format',
        'advertiser_id' => 'advertiserId',
        'dataset_id' => 'datasetId',
        'image_attributes' => 'imageAttributes',
        'html_tag_attributes' => 'htmlTagAttributes',
        'dynamic_attributes' => 'dynamicAttributes',
        'adaptive_attributes' => 'adaptiveAttributes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'description' => 'setDescription',
        'author' => 'setAuthor',
        'status' => 'setStatus',
        'format' => 'setFormat',
        'advertiser_id' => 'setAdvertiserId',
        'dataset_id' => 'setDatasetId',
        'image_attributes' => 'setImageAttributes',
        'html_tag_attributes' => 'setHtmlTagAttributes',
        'dynamic_attributes' => 'setDynamicAttributes',
        'adaptive_attributes' => 'setAdaptiveAttributes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'description' => 'getDescription',
        'author' => 'getAuthor',
        'status' => 'getStatus',
        'format' => 'getFormat',
        'advertiser_id' => 'getAdvertiserId',
        'dataset_id' => 'getDatasetId',
        'image_attributes' => 'getImageAttributes',
        'html_tag_attributes' => 'getHtmlTagAttributes',
        'dynamic_attributes' => 'getDynamicAttributes',
        'adaptive_attributes' => 'getAdaptiveAttributes'
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
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('author', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('format', $data ?? [], null);
        $this->setIfExists('advertiser_id', $data ?? [], null);
        $this->setIfExists('dataset_id', $data ?? [], null);
        $this->setIfExists('image_attributes', $data ?? [], null);
        $this->setIfExists('html_tag_attributes', $data ?? [], null);
        $this->setIfExists('dynamic_attributes', $data ?? [], null);
        $this->setIfExists('adaptive_attributes', $data ?? [], null);
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

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['author'] === null) {
            $invalidProperties[] = "'author' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['advertiser_id'] === null) {
            $invalidProperties[] = "'advertiser_id' can't be null";
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
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name The name of the creative
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
     * @param string|null $description The description of the creative
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
     * Gets author
     *
     * @return string
     */
    public function getAuthor()
    {
        return $this->container['author'];
    }

    /**
     * Sets author
     *
     * @param string $author The login of the person who created this creative (
     *
     * @return self
     */
    public function setAuthor($author)
    {
        if (is_null($author)) {
            throw new \InvalidArgumentException('non-nullable author cannot be null');
        }
        $this->container['author'] = $author;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status The status of the creative
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets format
     *
     * @return string|null
     */
    public function getFormat()
    {
        return $this->container['format'];
    }

    /**
     * Sets format
     *
     * @param string|null $format The format of the creative
     *
     * @return self
     */
    public function setFormat($format)
    {
        if (is_null($format)) {
            throw new \InvalidArgumentException('non-nullable format cannot be null');
        }
        $this->container['format'] = $format;

        return $this;
    }

    /**
     * Gets advertiser_id
     *
     * @return string
     */
    public function getAdvertiserId()
    {
        return $this->container['advertiser_id'];
    }

    /**
     * Sets advertiser_id
     *
     * @param string $advertiser_id Advertiser linked to the Creative
     *
     * @return self
     */
    public function setAdvertiserId($advertiser_id)
    {
        if (is_null($advertiser_id)) {
            throw new \InvalidArgumentException('non-nullable advertiser_id cannot be null');
        }
        $this->container['advertiser_id'] = $advertiser_id;

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
     * @param string|null $dataset_id Data set id linked to the Creative
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
     * Gets image_attributes
     *
     * @return \Criteo\Api\MarketingSolutions\Model\ImageAttributes|null
     */
    public function getImageAttributes()
    {
        return $this->container['image_attributes'];
    }

    /**
     * Sets image_attributes
     *
     * @param \Criteo\Api\MarketingSolutions\Model\ImageAttributes|null $image_attributes image_attributes
     *
     * @return self
     */
    public function setImageAttributes($image_attributes)
    {
        if (is_null($image_attributes)) {
            throw new \InvalidArgumentException('non-nullable image_attributes cannot be null');
        }
        $this->container['image_attributes'] = $image_attributes;

        return $this;
    }

    /**
     * Gets html_tag_attributes
     *
     * @return \Criteo\Api\MarketingSolutions\Model\HtmlTagAttributes|null
     */
    public function getHtmlTagAttributes()
    {
        return $this->container['html_tag_attributes'];
    }

    /**
     * Sets html_tag_attributes
     *
     * @param \Criteo\Api\MarketingSolutions\Model\HtmlTagAttributes|null $html_tag_attributes html_tag_attributes
     *
     * @return self
     */
    public function setHtmlTagAttributes($html_tag_attributes)
    {
        if (is_null($html_tag_attributes)) {
            throw new \InvalidArgumentException('non-nullable html_tag_attributes cannot be null');
        }
        $this->container['html_tag_attributes'] = $html_tag_attributes;

        return $this;
    }

    /**
     * Gets dynamic_attributes
     *
     * @return \Criteo\Api\MarketingSolutions\Model\DynamicAttributes|null
     */
    public function getDynamicAttributes()
    {
        return $this->container['dynamic_attributes'];
    }

    /**
     * Sets dynamic_attributes
     *
     * @param \Criteo\Api\MarketingSolutions\Model\DynamicAttributes|null $dynamic_attributes dynamic_attributes
     *
     * @return self
     */
    public function setDynamicAttributes($dynamic_attributes)
    {
        if (is_null($dynamic_attributes)) {
            throw new \InvalidArgumentException('non-nullable dynamic_attributes cannot be null');
        }
        $this->container['dynamic_attributes'] = $dynamic_attributes;

        return $this;
    }

    /**
     * Gets adaptive_attributes
     *
     * @return \Criteo\Api\MarketingSolutions\Model\AdaptiveAttributes|null
     */
    public function getAdaptiveAttributes()
    {
        return $this->container['adaptive_attributes'];
    }

    /**
     * Sets adaptive_attributes
     *
     * @param \Criteo\Api\MarketingSolutions\Model\AdaptiveAttributes|null $adaptive_attributes adaptive_attributes
     *
     * @return self
     */
    public function setAdaptiveAttributes($adaptive_attributes)
    {
        if (is_null($adaptive_attributes)) {
            throw new \InvalidArgumentException('non-nullable adaptive_attributes cannot be null');
        }
        $this->container['adaptive_attributes'] = $adaptive_attributes;

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


