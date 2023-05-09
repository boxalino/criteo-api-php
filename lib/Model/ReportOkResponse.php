<?php
/**
 * ReportOkResponse
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
 * ReportOkResponse Class Doc Comment
 *
 * @category Class
 * @description The report on a given operationToken is ready. The report is available for 4 days
 * @package  criteo\api\marketingsolutions\preview
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ReportOkResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ReportOkResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'status' => 'string',
        'import_request_timestamp' => 'int',
        'number_of_products_in_the_batch' => 'int',
        'number_of_products_upserted' => 'int',
        'number_of_products_deleted' => 'int',
        'number_of_products_with_errors' => 'int',
        'error_details' => '\Criteo\Api\MarketingSolutions\Model\ReportDetailErrors[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'status' => null,
        'import_request_timestamp' => 'int64',
        'number_of_products_in_the_batch' => 'int32',
        'number_of_products_upserted' => 'int32',
        'number_of_products_deleted' => 'int32',
        'number_of_products_with_errors' => 'int32',
        'error_details' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'status' => false,
		'import_request_timestamp' => false,
		'number_of_products_in_the_batch' => false,
		'number_of_products_upserted' => false,
		'number_of_products_deleted' => false,
		'number_of_products_with_errors' => false,
		'error_details' => false
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
        'status' => 'status',
        'import_request_timestamp' => 'importRequestTimestamp',
        'number_of_products_in_the_batch' => 'numberOfProductsInTheBatch',
        'number_of_products_upserted' => 'numberOfProductsUpserted',
        'number_of_products_deleted' => 'numberOfProductsDeleted',
        'number_of_products_with_errors' => 'numberOfProductsWithErrors',
        'error_details' => 'errorDetails'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'status' => 'setStatus',
        'import_request_timestamp' => 'setImportRequestTimestamp',
        'number_of_products_in_the_batch' => 'setNumberOfProductsInTheBatch',
        'number_of_products_upserted' => 'setNumberOfProductsUpserted',
        'number_of_products_deleted' => 'setNumberOfProductsDeleted',
        'number_of_products_with_errors' => 'setNumberOfProductsWithErrors',
        'error_details' => 'setErrorDetails'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'status' => 'getStatus',
        'import_request_timestamp' => 'getImportRequestTimestamp',
        'number_of_products_in_the_batch' => 'getNumberOfProductsInTheBatch',
        'number_of_products_upserted' => 'getNumberOfProductsUpserted',
        'number_of_products_deleted' => 'getNumberOfProductsDeleted',
        'number_of_products_with_errors' => 'getNumberOfProductsWithErrors',
        'error_details' => 'getErrorDetails'
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

    public const STATUS_ACCEPTED = 'ACCEPTED';
    public const STATUS_IN_PROGRESS = 'IN_PROGRESS';
    public const STATUS_VALIDATED = 'VALIDATED';
    public const STATUS_VALIDATED_WITH_ERRORS = 'VALIDATED_WITH_ERRORS';
    public const STATUS_FAILED = 'FAILED';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ACCEPTED,
            self::STATUS_IN_PROGRESS,
            self::STATUS_VALIDATED,
            self::STATUS_VALIDATED_WITH_ERRORS,
            self::STATUS_FAILED,
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
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('import_request_timestamp', $data ?? [], null);
        $this->setIfExists('number_of_products_in_the_batch', $data ?? [], null);
        $this->setIfExists('number_of_products_upserted', $data ?? [], null);
        $this->setIfExists('number_of_products_deleted', $data ?? [], null);
        $this->setIfExists('number_of_products_with_errors', $data ?? [], null);
        $this->setIfExists('error_details', $data ?? [], null);
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

        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['import_request_timestamp'] === null) {
            $invalidProperties[] = "'import_request_timestamp' can't be null";
        }
        if ($this->container['number_of_products_in_the_batch'] === null) {
            $invalidProperties[] = "'number_of_products_in_the_batch' can't be null";
        }
        if ($this->container['number_of_products_upserted'] === null) {
            $invalidProperties[] = "'number_of_products_upserted' can't be null";
        }
        if ($this->container['number_of_products_deleted'] === null) {
            $invalidProperties[] = "'number_of_products_deleted' can't be null";
        }
        if ($this->container['number_of_products_with_errors'] === null) {
            $invalidProperties[] = "'number_of_products_with_errors' can't be null";
        }
        if ($this->container['error_details'] === null) {
            $invalidProperties[] = "'error_details' can't be null";
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
     * @param string $status The status of the operation. The operation is completed when the status is one of (VALIDATED,VALIDATED_WITH_ERRORS,FAILED)
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'status', must be one of '%s'",
                    $status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets import_request_timestamp
     *
     * @return int
     */
    public function getImportRequestTimestamp()
    {
        return $this->container['import_request_timestamp'];
    }

    /**
     * Sets import_request_timestamp
     *
     * @param int $import_request_timestamp The date when the original batch request was sent.
     *
     * @return self
     */
    public function setImportRequestTimestamp($import_request_timestamp)
    {
        if (is_null($import_request_timestamp)) {
            throw new \InvalidArgumentException('non-nullable import_request_timestamp cannot be null');
        }
        $this->container['import_request_timestamp'] = $import_request_timestamp;

        return $this;
    }

    /**
     * Gets number_of_products_in_the_batch
     *
     * @return int
     */
    public function getNumberOfProductsInTheBatch()
    {
        return $this->container['number_of_products_in_the_batch'];
    }

    /**
     * Sets number_of_products_in_the_batch
     *
     * @param int $number_of_products_in_the_batch The number of products present in the batch.
     *
     * @return self
     */
    public function setNumberOfProductsInTheBatch($number_of_products_in_the_batch)
    {
        if (is_null($number_of_products_in_the_batch)) {
            throw new \InvalidArgumentException('non-nullable number_of_products_in_the_batch cannot be null');
        }
        $this->container['number_of_products_in_the_batch'] = $number_of_products_in_the_batch;

        return $this;
    }

    /**
     * Gets number_of_products_upserted
     *
     * @return int
     */
    public function getNumberOfProductsUpserted()
    {
        return $this->container['number_of_products_upserted'];
    }

    /**
     * Sets number_of_products_upserted
     *
     * @param int $number_of_products_upserted The number of products upserted.
     *
     * @return self
     */
    public function setNumberOfProductsUpserted($number_of_products_upserted)
    {
        if (is_null($number_of_products_upserted)) {
            throw new \InvalidArgumentException('non-nullable number_of_products_upserted cannot be null');
        }
        $this->container['number_of_products_upserted'] = $number_of_products_upserted;

        return $this;
    }

    /**
     * Gets number_of_products_deleted
     *
     * @return int
     */
    public function getNumberOfProductsDeleted()
    {
        return $this->container['number_of_products_deleted'];
    }

    /**
     * Sets number_of_products_deleted
     *
     * @param int $number_of_products_deleted The number of products deleted.
     *
     * @return self
     */
    public function setNumberOfProductsDeleted($number_of_products_deleted)
    {
        if (is_null($number_of_products_deleted)) {
            throw new \InvalidArgumentException('non-nullable number_of_products_deleted cannot be null');
        }
        $this->container['number_of_products_deleted'] = $number_of_products_deleted;

        return $this;
    }

    /**
     * Gets number_of_products_with_errors
     *
     * @return int
     */
    public function getNumberOfProductsWithErrors()
    {
        return $this->container['number_of_products_with_errors'];
    }

    /**
     * Sets number_of_products_with_errors
     *
     * @param int $number_of_products_with_errors The number of products with errors.
     *
     * @return self
     */
    public function setNumberOfProductsWithErrors($number_of_products_with_errors)
    {
        if (is_null($number_of_products_with_errors)) {
            throw new \InvalidArgumentException('non-nullable number_of_products_with_errors cannot be null');
        }
        $this->container['number_of_products_with_errors'] = $number_of_products_with_errors;

        return $this;
    }

    /**
     * Gets error_details
     *
     * @return \Criteo\Api\MarketingSolutions\Model\ReportDetailErrors[]
     */
    public function getErrorDetails()
    {
        return $this->container['error_details'];
    }

    /**
     * Sets error_details
     *
     * @param \Criteo\Api\MarketingSolutions\Model\ReportDetailErrors[] $error_details The list of errors with details.
     *
     * @return self
     */
    public function setErrorDetails($error_details)
    {
        if (is_null($error_details)) {
            throw new \InvalidArgumentException('non-nullable error_details cannot be null');
        }
        $this->container['error_details'] = $error_details;

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


