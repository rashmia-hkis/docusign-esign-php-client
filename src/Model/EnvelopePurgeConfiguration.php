<?php
/**
 * EnvelopePurgeConfiguration
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
 * EnvelopePurgeConfiguration Class Doc Comment
 *
 * @category    Class
 * @package     DocuSign\eSign
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class EnvelopePurgeConfiguration implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'envelopePurgeConfiguration';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'purge_envelopes' => '?string',
        'redact_pii' => '?string',
        'remove_tabs_and_envelope_attachments' => '?string',
        'retention_days' => '?string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'purge_envelopes' => null,
        'redact_pii' => null,
        'remove_tabs_and_envelope_attachments' => null,
        'retention_days' => null
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
        'purge_envelopes' => 'purgeEnvelopes',
        'redact_pii' => 'redactPII',
        'remove_tabs_and_envelope_attachments' => 'removeTabsAndEnvelopeAttachments',
        'retention_days' => 'retentionDays'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'purge_envelopes' => 'setPurgeEnvelopes',
        'redact_pii' => 'setRedactPii',
        'remove_tabs_and_envelope_attachments' => 'setRemoveTabsAndEnvelopeAttachments',
        'retention_days' => 'setRetentionDays'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'purge_envelopes' => 'getPurgeEnvelopes',
        'redact_pii' => 'getRedactPii',
        'remove_tabs_and_envelope_attachments' => 'getRemoveTabsAndEnvelopeAttachments',
        'retention_days' => 'getRetentionDays'
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
        $this->container['purge_envelopes'] = isset($data['purge_envelopes']) ? $data['purge_envelopes'] : null;
        $this->container['redact_pii'] = isset($data['redact_pii']) ? $data['redact_pii'] : null;
        $this->container['remove_tabs_and_envelope_attachments'] = isset($data['remove_tabs_and_envelope_attachments']) ? $data['remove_tabs_and_envelope_attachments'] : null;
        $this->container['retention_days'] = isset($data['retention_days']) ? $data['retention_days'] : null;
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
     * Gets purge_envelopes
     *
     * @return ?string
     */
    public function getPurgeEnvelopes()
    {
        return $this->container['purge_envelopes'];
    }

    /**
     * Sets purge_envelopes
     *
     * @param ?string $purge_envelopes 
     *
     * @return $this
     */
    public function setPurgeEnvelopes($purge_envelopes)
    {
        $this->container['purge_envelopes'] = $purge_envelopes;

        return $this;
    }

    /**
     * Gets redact_pii
     *
     * @return ?string
     */
    public function getRedactPii()
    {
        return $this->container['redact_pii'];
    }

    /**
     * Sets redact_pii
     *
     * @param ?string $redact_pii 
     *
     * @return $this
     */
    public function setRedactPii($redact_pii)
    {
        $this->container['redact_pii'] = $redact_pii;

        return $this;
    }

    /**
     * Gets remove_tabs_and_envelope_attachments
     *
     * @return ?string
     */
    public function getRemoveTabsAndEnvelopeAttachments()
    {
        return $this->container['remove_tabs_and_envelope_attachments'];
    }

    /**
     * Sets remove_tabs_and_envelope_attachments
     *
     * @param ?string $remove_tabs_and_envelope_attachments 
     *
     * @return $this
     */
    public function setRemoveTabsAndEnvelopeAttachments($remove_tabs_and_envelope_attachments)
    {
        $this->container['remove_tabs_and_envelope_attachments'] = $remove_tabs_and_envelope_attachments;

        return $this;
    }

    /**
     * Gets retention_days
     *
     * @return ?string
     */
    public function getRetentionDays()
    {
        return $this->container['retention_days'];
    }

    /**
     * Sets retention_days
     *
     * @param ?string $retention_days 
     *
     * @return $this
     */
    public function setRetentionDays($retention_days)
    {
        $this->container['retention_days'] = $retention_days;

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

