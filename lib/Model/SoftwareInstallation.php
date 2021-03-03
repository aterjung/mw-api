<?php
/**
 * SoftwareInstallation
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  MittwaldApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Public API
 *
 * Schnittstellen für Mittwald-Kunden
 *
 * The version of the OpenAPI document: 1.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace MittwaldApi\Model;

use \ArrayAccess;
use \MittwaldApi\ObjectSerializer;

/**
 * SoftwareInstallation Class Doc Comment
 *
 * @category Class
 * @package  MittwaldApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class SoftwareInstallation implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SoftwareInstallation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'uid' => 'float',
        'software' => '\MittwaldApi\Model\SoftwareInstallationSoftware',
        'version' => '\MittwaldApi\Model\SoftwareInstallationVersion',
        'install_path' => 'string',
        'frontend_url' => 'string',
        'backend_url' => 'string',
        'document_root' => 'string',
        'status' => 'string',
        'database' => '\MittwaldApi\Model\SoftwareInstallationDatabase'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'uid' => null,
        'software' => null,
        'version' => null,
        'install_path' => null,
        'frontend_url' => null,
        'backend_url' => null,
        'document_root' => null,
        'status' => null,
        'database' => null
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
        'uid' => 'uid',
        'software' => 'software',
        'version' => 'version',
        'install_path' => 'installPath',
        'frontend_url' => 'frontendUrl',
        'backend_url' => 'backendUrl',
        'document_root' => 'documentRoot',
        'status' => 'status',
        'database' => 'database'
    ];

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
        'database' => 'setDatabase'
    ];

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
        'database' => 'getDatabase'
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
            self::STATUS_READY,
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
        $this->container['uid'] = $data['uid'] ?? null;
        $this->container['software'] = $data['software'] ?? null;
        $this->container['version'] = $data['version'] ?? null;
        $this->container['install_path'] = $data['install_path'] ?? null;
        $this->container['frontend_url'] = $data['frontend_url'] ?? null;
        $this->container['backend_url'] = $data['backend_url'] ?? null;
        $this->container['document_root'] = $data['document_root'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['database'] = $data['database'] ?? null;
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
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
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
     * @return float|null
     */
    public function getUid()
    {
        return $this->container['uid'];
    }

    /**
     * Sets uid
     *
     * @param float|null $uid uid
     *
     * @return self
     */
    public function setUid($uid)
    {
        $this->container['uid'] = $uid;

        return $this;
    }

    /**
     * Gets software
     *
     * @return \MittwaldApi\Model\SoftwareInstallationSoftware|null
     */
    public function getSoftware()
    {
        return $this->container['software'];
    }

    /**
     * Sets software
     *
     * @param \MittwaldApi\Model\SoftwareInstallationSoftware|null $software software
     *
     * @return self
     */
    public function setSoftware($software)
    {
        $this->container['software'] = $software;

        return $this;
    }

    /**
     * Gets version
     *
     * @return \MittwaldApi\Model\SoftwareInstallationVersion|null
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param \MittwaldApi\Model\SoftwareInstallationVersion|null $version version
     *
     * @return self
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets install_path
     *
     * @return string|null
     */
    public function getInstallPath()
    {
        return $this->container['install_path'];
    }

    /**
     * Sets install_path
     *
     * @param string|null $install_path Dateipfad, in welchem die Software im Account installiert ist
     *
     * @return self
     */
    public function setInstallPath($install_path)
    {
        $this->container['install_path'] = $install_path;

        return $this;
    }

    /**
     * Gets frontend_url
     *
     * @return string|null
     */
    public function getFrontendUrl()
    {
        return $this->container['frontend_url'];
    }

    /**
     * Sets frontend_url
     *
     * @param string|null $frontend_url URL zum Frontend der Software
     *
     * @return self
     */
    public function setFrontendUrl($frontend_url)
    {
        $this->container['frontend_url'] = $frontend_url;

        return $this;
    }

    /**
     * Gets backend_url
     *
     * @return string|null
     */
    public function getBackendUrl()
    {
        return $this->container['backend_url'];
    }

    /**
     * Sets backend_url
     *
     * @param string|null $backend_url URL zum Backend der Software
     *
     * @return self
     */
    public function setBackendUrl($backend_url)
    {
        $this->container['backend_url'] = $backend_url;

        return $this;
    }

    /**
     * Gets document_root
     *
     * @return string|null
     */
    public function getDocumentRoot()
    {
        return $this->container['document_root'];
    }

    /**
     * Sets document_root
     *
     * @param string|null $document_root DocumentRoot der Software, relativ zum Installationspfad (`installPath`)
     *
     * @return self
     */
    public function setDocumentRoot($document_root)
    {
        $this->container['document_root'] = $document_root;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
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
     * Gets database
     *
     * @return \MittwaldApi\Model\SoftwareInstallationDatabase|null
     */
    public function getDatabase()
    {
        return $this->container['database'];
    }

    /**
     * Sets database
     *
     * @param \MittwaldApi\Model\SoftwareInstallationDatabase|null $database database
     *
     * @return self
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


