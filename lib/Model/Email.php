<?php
/**
 * Email
 *
 * PHP version 5
 *
 * @category Class
 * @package  Mittwald\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Public API
 *
 * Schnittstellen für Mittwald-Kunden
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.24
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Mittwald\Api\Model;

use \ArrayAccess;
use \Mittwald\Api\ObjectSerializer;

/**
 * Email Class Doc Comment
 *
 * @category Class
 * @package  Mittwald\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Email implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Email';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'subject' => 'string',
'body' => 'string',
'html_template' => 'string',
'template_data' => 'object',
'sender_address' => 'string',
'sender_name' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'subject' => null,
'body' => null,
'html_template' => null,
'template_data' => null,
'sender_address' => null,
'sender_name' => null    ];

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
        'subject' => 'subject',
'body' => 'body',
'html_template' => 'htmlTemplate',
'template_data' => 'templateData',
'sender_address' => 'senderAddress',
'sender_name' => 'senderName'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'subject' => 'setSubject',
'body' => 'setBody',
'html_template' => 'setHtmlTemplate',
'template_data' => 'setTemplateData',
'sender_address' => 'setSenderAddress',
'sender_name' => 'setSenderName'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'subject' => 'getSubject',
'body' => 'getBody',
'html_template' => 'getHtmlTemplate',
'template_data' => 'getTemplateData',
'sender_address' => 'getSenderAddress',
'sender_name' => 'getSenderName'    ];

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
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
        $this->container['body'] = isset($data['body']) ? $data['body'] : null;
        $this->container['html_template'] = isset($data['html_template']) ? $data['html_template'] : 'newsletter_without_header';
        $this->container['template_data'] = isset($data['template_data']) ? $data['template_data'] : null;
        $this->container['sender_address'] = isset($data['sender_address']) ? $data['sender_address'] : 'support@mittwald.de';
        $this->container['sender_name'] = isset($data['sender_name']) ? $data['sender_name'] : 'Mittwald CM Service';
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
     * Gets subject
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
     * Sets subject
     *
     * @param string $subject subject
     *
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->container['subject'] = $subject;

        return $this;
    }

    /**
     * Gets body
     *
     * @return string
     */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
     * Sets body
     *
     * @param string $body body
     *
     * @return $this
     */
    public function setBody($body)
    {
        $this->container['body'] = $body;

        return $this;
    }

    /**
     * Gets html_template
     *
     * @return string
     */
    public function getHtmlTemplate()
    {
        return $this->container['html_template'];
    }

    /**
     * Sets html_template
     *
     * @param string $html_template html_template
     *
     * @return $this
     */
    public function setHtmlTemplate($html_template)
    {
        $this->container['html_template'] = $html_template;

        return $this;
    }

    /**
     * Gets template_data
     *
     * @return object
     */
    public function getTemplateData()
    {
        return $this->container['template_data'];
    }

    /**
     * Sets template_data
     *
     * @param object $template_data Daten die in der HTML-Template verarbeitet werden sollen
     *
     * @return $this
     */
    public function setTemplateData($template_data)
    {
        $this->container['template_data'] = $template_data;

        return $this;
    }

    /**
     * Gets sender_address
     *
     * @return string
     */
    public function getSenderAddress()
    {
        return $this->container['sender_address'];
    }

    /**
     * Sets sender_address
     *
     * @param string $sender_address sender_address
     *
     * @return $this
     */
    public function setSenderAddress($sender_address)
    {
        $this->container['sender_address'] = $sender_address;

        return $this;
    }

    /**
     * Gets sender_name
     *
     * @return string
     */
    public function getSenderName()
    {
        return $this->container['sender_name'];
    }

    /**
     * Sets sender_name
     *
     * @param string $sender_name sender_name
     *
     * @return $this
     */
    public function setSenderName($sender_name)
    {
        $this->container['sender_name'] = $sender_name;

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
