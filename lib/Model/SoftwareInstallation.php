<?php
/**
 * SoftwareInstallation
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
 * SoftwareInstallation Class Doc Comment
 *
 * @category Class
 * @package  Mittwald\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SoftwareInstallation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SoftwareInstallation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'uid' => 'float',
'software' => '\Mittwald\Api\Model\SoftwareInstallationSoftware',
'version' => '\Mittwald\Api\Model\SoftwareInstallationVersion',
'install_path' => 'string',
'frontend_url' => 'string',
'backend_url' => 'string',
'document_root' => 'string',
'status' => 'string',
'database' => '\Mittwald\Api\Model\SoftwareInstallationDatabase'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'uid' => null,
'software' => null,
'version' => null,
'install_path' => null,
'frontend_url' => null,
'backend_url' => null,
'document_root' => null,
'status' => null,
'database' => null    ];

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
        'uid' => 'uid',
'software' => 'software',
'version' => 'version',
'install_path' => 'installPath',
'frontend_url' => 'frontendUrl',
'backend_url' => 'backendUrl',
'document_root' => 'documentRoot',
'status' => 'status',
'database' => 'database'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'uid' => 'setUid',
'software' => 'setSoftware',
'version' => 'setVersion',
'install_path' => 'setInstallPath',
'frontend_url' => 'setFrontendUrl',
'backend_url' => 'setBackendUrl',
'document_root' => 'setDocumentRoot',
'status' => 'setStatus',
'database' => 'setDatabase'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'uid' => 'getUid',
'software' => 'getSoftware',
'version' => 'getVersion',
'install_path' => 'getInstallPath',
'frontend_url' => 'getFrontendUrl',
'backend_url' => 'getBackendUrl',
'document_root' => 'getDocumentRoot',
'status' => 'getStatus',
'database' => 'getDatabase'    ];

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

    const STATUS_CREATING = 'creating';
const STATUS_UPDATING = 'updating';
const STATUS_DELETING = 'deleting';
const STATUS_READY = 'ready';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_CREATING,
self::STATUS_UPDATING,
self::STATUS_DELETING,
self::STATUS_READY,        ];
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
        $this->container['uid'] = isset($data['uid']) ? $data['uid'] : null;
        $this->container['software'] = isset($data['software']) ? $data['software'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['install_path'] = isset($data['install_path']) ? $data['install_path'] : null;
        $this->container['frontend_url'] = isset($data['frontend_url']) ? $data['frontend_url'] : null;
        $this->container['backend_url'] = isset($data['backend_url']) ? $data['backend_url'] : null;
        $this->container['document_root'] = isset($data['document_root']) ? $data['document_root'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['database'] = isset($data['database']) ? $data['database'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets uid
     *
     * @return float
     */
    public function getUid()
    {
        return $this->container['uid'];
    }

    /**
     * Sets uid
     *
     * @param float $uid uid
     *
     * @return $this
     */
    public function setUid($uid)
    {
        $this->container['uid'] = $uid;

        return $this;
    }

    /**
     * Gets software
     *
     * @return \Mittwald\Api\Model\SoftwareInstallationSoftware
     */
    public function getSoftware()
    {
        return $this->container['software'];
    }

    /**
     * Sets software
     *
     * @param \Mittwald\Api\Model\SoftwareInstallationSoftware $software software
     *
     * @return $this
     */
    public function setSoftware($software)
    {
        $this->container['software'] = $software;

        return $this;
    }

    /**
     * Gets version
     *
     * @return \Mittwald\Api\Model\SoftwareInstallationVersion
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param \Mittwald\Api\Model\SoftwareInstallationVersion $version version
     *
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets install_path
     *
     * @return string
     */
    public function getInstallPath()
    {
        return $this->container['install_path'];
    }

    /**
     * Sets install_path
     *
     * @param string $install_path Dateipfad, in welchem die Software im Account installiert ist
     *
     * @return $this
     */
    public function setInstallPath($install_path)
    {
        $this->container['install_path'] = $install_path;

        return $this;
    }

    /**
     * Gets frontend_url
     *
     * @return string
     */
    public function getFrontendUrl()
    {
        return $this->container['frontend_url'];
    }

    /**
     * Sets frontend_url
     *
     * @param string $frontend_url URL zum Frontend der Software
     *
     * @return $this
     */
    public function setFrontendUrl($frontend_url)
    {
        $this->container['frontend_url'] = $frontend_url;

        return $this;
    }

    /**
     * Gets backend_url
     *
     * @return string
     */
    public function getBackendUrl()
    {
        return $this->container['backend_url'];
    }

    /**
     * Sets backend_url
     *
     * @param string $backend_url URL zum Backend der Software
     *
     * @return $this
     */
    public function setBackendUrl($backend_url)
    {
        $this->container['backend_url'] = $backend_url;

        return $this;
    }

    /**
     * Gets document_root
     *
     * @return string
     */
    public function getDocumentRoot()
    {
        return $this->container['document_root'];
    }

    /**
     * Sets document_root
     *
     * @param string $document_root DocumentRoot der Software, relativ zum Installationspfad (`installPath`)
     *
     * @return $this
     */
    public function setDocumentRoot($document_root)
    {
        $this->container['document_root'] = $document_root;

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
     * @param string $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets database
     *
     * @return \Mittwald\Api\Model\SoftwareInstallationDatabase
     */
    public function getDatabase()
    {
        return $this->container['database'];
    }

    /**
     * Sets database
     *
     * @param \Mittwald\Api\Model\SoftwareInstallationDatabase $database database
     *
     * @return $this
     */
    public function setDatabase($database)
    {
        $this->container['database'] = $database;

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
