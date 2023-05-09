<?php
/**
 * AdvertiserCreationInput
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
 * AdvertiserCreationInput Class Doc Comment
 *
 * @category Class
 * @description Infomation for creating an advertiser
 * @package  Criteo\Api\MarketingSolutions
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AdvertiserCreationInput implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AdvertiserCreationInput';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'account_name' => 'string',
        'website_url' => 'string',
        'country_iso_code' => 'string',
        'currency_iso_code' => 'string',
        'industry_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'account_name' => null,
        'website_url' => null,
        'country_iso_code' => null,
        'currency_iso_code' => null,
        'industry_id' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'account_name' => false,
		'website_url' => false,
		'country_iso_code' => false,
		'currency_iso_code' => false,
		'industry_id' => false
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
        'account_name' => 'accountName',
        'website_url' => 'websiteUrl',
        'country_iso_code' => 'countryIsoCode',
        'currency_iso_code' => 'currencyIsoCode',
        'industry_id' => 'industryId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_name' => 'setAccountName',
        'website_url' => 'setWebsiteUrl',
        'country_iso_code' => 'setCountryIsoCode',
        'currency_iso_code' => 'setCurrencyIsoCode',
        'industry_id' => 'setIndustryId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_name' => 'getAccountName',
        'website_url' => 'getWebsiteUrl',
        'country_iso_code' => 'getCountryIsoCode',
        'currency_iso_code' => 'getCurrencyIsoCode',
        'industry_id' => 'getIndustryId'
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
        $this->setIfExists('account_name', $data ?? [], null);
        $this->setIfExists('website_url', $data ?? [], null);
        $this->setIfExists('country_iso_code', $data ?? [], null);
        $this->setIfExists('currency_iso_code', $data ?? [], null);
        $this->setIfExists('industry_id', $data ?? [], null);
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

        if ($this->container['account_name'] === null) {
            $invalidProperties[] = "'account_name' can't be null";
        }
        if ($this->container['website_url'] === null) {
            $invalidProperties[] = "'website_url' can't be null";
        }
        if ($this->container['country_iso_code'] === null) {
            $invalidProperties[] = "'country_iso_code' can't be null";
        }
        if ($this->container['currency_iso_code'] === null) {
            $invalidProperties[] = "'currency_iso_code' can't be null";
        }
        if ($this->container['industry_id'] === null) {
            $invalidProperties[] = "'industry_id' can't be null";
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
     * Gets account_name
     *
     * @return string
     */
    public function getAccountName()
    {
        return $this->container['account_name'];
    }

    /**
     * Sets account_name
     *
     * @param string $account_name The Account Name; This will not be in fact the Advertiser name
     *
     * @return self
     */
    public function setAccountName($account_name)
    {
        if (is_null($account_name)) {
            throw new \InvalidArgumentException('non-nullable account_name cannot be null');
        }
        $this->container['account_name'] = $account_name;

        return $this;
    }

    /**
     * Gets website_url
     *
     * @return string
     */
    public function getWebsiteUrl()
    {
        return $this->container['website_url'];
    }

    /**
     * Sets website_url
     *
     * @param string $website_url Website url
     *
     * @return self
     */
    public function setWebsiteUrl($website_url)
    {
        if (is_null($website_url)) {
            throw new \InvalidArgumentException('non-nullable website_url cannot be null');
        }
        $this->container['website_url'] = $website_url;

        return $this;
    }

    /**
     * Gets country_iso_code
     *
     * @return string
     */
    public function getCountryIsoCode()
    {
        return $this->container['country_iso_code'];
    }

    /**
     * Sets country_iso_code
     *
     * @param string $country_iso_code Country ISO code
     *
     * @return self
     */
    public function setCountryIsoCode($country_iso_code)
    {
        if (is_null($country_iso_code)) {
            throw new \InvalidArgumentException('non-nullable country_iso_code cannot be null');
        }
        $this->container['country_iso_code'] = $country_iso_code;

        return $this;
    }

    /**
     * Gets currency_iso_code
     *
     * @return string
     */
    public function getCurrencyIsoCode()
    {
        return $this->container['currency_iso_code'];
    }

    /**
     * Sets currency_iso_code
     *
     * @param string $currency_iso_code Currency ISO code
     *
     * @return self
     */
    public function setCurrencyIsoCode($currency_iso_code)
    {
        if (is_null($currency_iso_code)) {
            throw new \InvalidArgumentException('non-nullable currency_iso_code cannot be null');
        }
        $this->container['currency_iso_code'] = $currency_iso_code;

        return $this;
    }

    /**
     * Gets industry_id
     *
     * @return string
     */
    public function getIndustryId()
    {
        return $this->container['industry_id'];
    }

    /**
     * Sets industry_id
     *
     * @param string $industry_id Industry ID
     *
     * @return self
     */
    public function setIndustryId($industry_id)
    {
        if (is_null($industry_id)) {
            throw new \InvalidArgumentException('non-nullable industry_id cannot be null');
        }
        $this->container['industry_id'] = $industry_id;

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


