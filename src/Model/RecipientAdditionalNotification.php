<?php
/**
 * RecipientAdditionalNotification
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  DocuSign\eSign
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * DocuSign REST API
 *
 * The DocuSign REST API provides you with a powerful, convenient, and simple Web services API for interacting with DocuSign.
 *
 * OpenAPI spec version: v2.1
 * Contact: devcenter@docusign.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.13-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace DocuSign\eSign\Model;

use \ArrayAccess;
use DocuSign\eSign\ObjectSerializer;

/**
 * RecipientAdditionalNotification Class Doc Comment
 *
 * @category    Class
 * @package     DocuSign\eSign
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class RecipientAdditionalNotification implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'recipientAdditionalNotification';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'phone_number' => '\DocuSign\eSign\Model\RecipientPhoneNumber',
        'secondary_delivery_method' => '?string',
        'secondary_delivery_method_metadata' => '\DocuSign\eSign\Model\PropertyMetadata',
        'secondary_delivery_status' => '?string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'phone_number' => null,
        'secondary_delivery_method' => null,
        'secondary_delivery_method_metadata' => null,
        'secondary_delivery_status' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'phone_number' => 'phoneNumber',
        'secondary_delivery_method' => 'secondaryDeliveryMethod',
        'secondary_delivery_method_metadata' => 'secondaryDeliveryMethodMetadata',
        'secondary_delivery_status' => 'secondaryDeliveryStatus'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'phone_number' => 'setPhoneNumber',
        'secondary_delivery_method' => 'setSecondaryDeliveryMethod',
        'secondary_delivery_method_metadata' => 'setSecondaryDeliveryMethodMetadata',
        'secondary_delivery_status' => 'setSecondaryDeliveryStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'phone_number' => 'getPhoneNumber',
        'secondary_delivery_method' => 'getSecondaryDeliveryMethod',
        'secondary_delivery_method_metadata' => 'getSecondaryDeliveryMethodMetadata',
        'secondary_delivery_status' => 'getSecondaryDeliveryStatus'
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
        return self::$swaggerModelName;
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
        $this->container['phone_number'] = isset($data['phone_number']) ? $data['phone_number'] : null;
        $this->container['secondary_delivery_method'] = isset($data['secondary_delivery_method']) ? $data['secondary_delivery_method'] : null;
        $this->container['secondary_delivery_method_metadata'] = isset($data['secondary_delivery_method_metadata']) ? $data['secondary_delivery_method_metadata'] : null;
        $this->container['secondary_delivery_status'] = isset($data['secondary_delivery_status']) ? $data['secondary_delivery_status'] : null;
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
     * Gets phone_number
     *
     * @return \DocuSign\eSign\Model\RecipientPhoneNumber
     */
    public function getPhoneNumber()
    {
        return $this->container['phone_number'];
    }

    /**
     * Sets phone_number
     *
     * @param \DocuSign\eSign\Model\RecipientPhoneNumber $phone_number phone_number
     *
     * @return $this
     */
    public function setPhoneNumber($phone_number)
    {
        $this->container['phone_number'] = $phone_number;

        return $this;
    }

    /**
     * Gets secondary_delivery_method
     *
     * @return ?string
     */
    public function getSecondaryDeliveryMethod()
    {
        return $this->container['secondary_delivery_method'];
    }

    /**
     * Sets secondary_delivery_method
     *
     * @param ?string $secondary_delivery_method 
     *
     * @return $this
     */
    public function setSecondaryDeliveryMethod($secondary_delivery_method)
    {
        $this->container['secondary_delivery_method'] = $secondary_delivery_method;

        return $this;
    }

    /**
     * Gets secondary_delivery_method_metadata
     *
     * @return \DocuSign\eSign\Model\PropertyMetadata
     */
    public function getSecondaryDeliveryMethodMetadata()
    {
        return $this->container['secondary_delivery_method_metadata'];
    }

    /**
     * Sets secondary_delivery_method_metadata
     *
     * @param \DocuSign\eSign\Model\PropertyMetadata $secondary_delivery_method_metadata secondary_delivery_method_metadata
     *
     * @return $this
     */
    public function setSecondaryDeliveryMethodMetadata($secondary_delivery_method_metadata)
    {
        $this->container['secondary_delivery_method_metadata'] = $secondary_delivery_method_metadata;

        return $this;
    }

    /**
     * Gets secondary_delivery_status
     *
     * @return ?string
     */
    public function getSecondaryDeliveryStatus()
    {
        return $this->container['secondary_delivery_status'];
    }

    /**
     * Sets secondary_delivery_status
     *
     * @param ?string $secondary_delivery_status 
     *
     * @return $this
     */
    public function setSecondaryDeliveryStatus($secondary_delivery_status)
    {
        $this->container['secondary_delivery_status'] = $secondary_delivery_status;

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
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
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
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

