<?php
/**
 * DynamicWriteAttributes
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
 * DynamicWriteAttributes Class Doc Comment
 *
 * @category Class
 * @description The attributes specific to create or update a Dynamic creative
 * @package  criteo\api\marketingsolutions\preview
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class DynamicWriteAttributes implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DynamicWriteAttributes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'logo_base64_string' => 'string',
        'creative_background_color' => 'string',
        'body_text_color' => 'string',
        'prices_color' => 'string',
        'primary_font' => 'string',
        'calls_to_action' => 'string[]',
        'product_image_display' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'logo_base64_string' => null,
        'creative_background_color' => null,
        'body_text_color' => null,
        'prices_color' => null,
        'primary_font' => null,
        'calls_to_action' => null,
        'product_image_display' => null
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
        'logo_base64_string' => 'logoBase64String',
        'creative_background_color' => 'creativeBackgroundColor',
        'body_text_color' => 'bodyTextColor',
        'prices_color' => 'pricesColor',
        'primary_font' => 'primaryFont',
        'calls_to_action' => 'callsToAction',
        'product_image_display' => 'productImageDisplay'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'logo_base64_string' => 'setLogoBase64String',
        'creative_background_color' => 'setCreativeBackgroundColor',
        'body_text_color' => 'setBodyTextColor',
        'prices_color' => 'setPricesColor',
        'primary_font' => 'setPrimaryFont',
        'calls_to_action' => 'setCallsToAction',
        'product_image_display' => 'setProductImageDisplay'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'logo_base64_string' => 'getLogoBase64String',
        'creative_background_color' => 'getCreativeBackgroundColor',
        'body_text_color' => 'getBodyTextColor',
        'prices_color' => 'getPricesColor',
        'primary_font' => 'getPrimaryFont',
        'calls_to_action' => 'getCallsToAction',
        'product_image_display' => 'getProductImageDisplay'
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
        $this->container['logo_base64_string'] = $data['logo_base64_string'] ?? null;
        $this->container['creative_background_color'] = $data['creative_background_color'] ?? null;
        $this->container['body_text_color'] = $data['body_text_color'] ?? null;
        $this->container['prices_color'] = $data['prices_color'] ?? null;
        $this->container['primary_font'] = $data['primary_font'] ?? null;
        $this->container['calls_to_action'] = $data['calls_to_action'] ?? null;
        $this->container['product_image_display'] = $data['product_image_display'] ?? null;
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
     * Gets logo_base64_string
     *
     * @return string|null
     */
    public function getLogoBase64String()
    {
        return $this->container['logo_base64_string'];
    }

    /**
     * Sets logo_base64_string
     *
     * @param string|null $logo_base64_string Logo image as a base-64 encoded string
     *
     * @return self
     */
    public function setLogoBase64String($logo_base64_string)
    {
        $this->container['logo_base64_string'] = $logo_base64_string;

        return $this;
    }

    /**
     * Gets creative_background_color
     *
     * @return string|null
     */
    public function getCreativeBackgroundColor()
    {
        return $this->container['creative_background_color'];
    }

    /**
     * Sets creative_background_color
     *
     * @param string|null $creative_background_color Color of the creative's background  Valid hexadecimal color (e.g. \"AB00FF\")
     *
     * @return self
     */
    public function setCreativeBackgroundColor($creative_background_color)
    {
        $this->container['creative_background_color'] = $creative_background_color;

        return $this;
    }

    /**
     * Gets body_text_color
     *
     * @return string|null
     */
    public function getBodyTextColor()
    {
        return $this->container['body_text_color'];
    }

    /**
     * Sets body_text_color
     *
     * @param string|null $body_text_color Color of the creative's body text  Valid hexadecimal color (e.g. \"AB00FF\")
     *
     * @return self
     */
    public function setBodyTextColor($body_text_color)
    {
        $this->container['body_text_color'] = $body_text_color;

        return $this;
    }

    /**
     * Gets prices_color
     *
     * @return string|null
     */
    public function getPricesColor()
    {
        return $this->container['prices_color'];
    }

    /**
     * Sets prices_color
     *
     * @param string|null $prices_color Color of the creative's prices  Valid hexadecimal color (e.g. \"AB00FF\")
     *
     * @return self
     */
    public function setPricesColor($prices_color)
    {
        $this->container['prices_color'] = $prices_color;

        return $this;
    }

    /**
     * Gets primary_font
     *
     * @return string|null
     */
    public function getPrimaryFont()
    {
        return $this->container['primary_font'];
    }

    /**
     * Sets primary_font
     *
     * @param string|null $primary_font Font of the primary font  Valid supported font like \"Arial\"
     *
     * @return self
     */
    public function setPrimaryFont($primary_font)
    {
        $this->container['primary_font'] = $primary_font;

        return $this;
    }

    /**
     * Gets calls_to_action
     *
     * @return string[]|null
     */
    public function getCallsToAction()
    {
        return $this->container['calls_to_action'];
    }

    /**
     * Sets calls_to_action
     *
     * @param string[]|null $calls_to_action A Call-to-Action (CTA) is an action-driven instruction to your audience intended to provoke an immediate  response, such as “Buy now” or “Go!”.
     *
     * @return self
     */
    public function setCallsToAction($calls_to_action)
    {


        $this->container['calls_to_action'] = $calls_to_action;

        return $this;
    }

    /**
     * Gets product_image_display
     *
     * @return string|null
     */
    public function getProductImageDisplay()
    {
        return $this->container['product_image_display'];
    }

    /**
     * Sets product_image_display
     *
     * @param string|null $product_image_display Value can be \"ShowFullImage\" or \"ZoomOnImage\". Choose whether your product catalog images should fit inside the allocated  space (\"ShowFullImage\") or whether they should fill that space (\"ZoomOnImage\"). If you choose ZoomOnImage, there may be some  image cropping.
     *
     * @return self
     */
    public function setProductImageDisplay($product_image_display)
    {
        $this->container['product_image_display'] = $product_image_display;

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

