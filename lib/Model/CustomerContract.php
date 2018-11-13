<?php
/**
 * CustomerContract
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
 * Swagger Codegen version: 2.3.1
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
 * CustomerContract Class Doc Comment
 *
 * @category Class
 * @package  Mittwald\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CustomerContract implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CustomerContract';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'uid' => 'int',
        'article' => '\Mittwald\Api\Model\Article',
        'title' => 'string',
        'text' => 'string',
        'source_uid' => 'int',
        'source_type' => 'string',
        'creation_date' => 'int',
        'next_period_date' => 'int',
        'cancellation' => '\Mittwald\Api\Model\Cancellation',
        'account' => '\Mittwald\Api\Model\CustomerContractAccount'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'uid' => null,
        'article' => null,
        'title' => null,
        'text' => null,
        'source_uid' => null,
        'source_type' => null,
        'creation_date' => null,
        'next_period_date' => null,
        'cancellation' => null,
        'account' => null
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
        'uid' => 'uid',
        'article' => 'article',
        'title' => 'title',
        'text' => 'text',
        'source_uid' => 'sourceUid',
        'source_type' => 'sourceType',
        'creation_date' => 'creationDate',
        'next_period_date' => 'nextPeriodDate',
        'cancellation' => 'cancellation',
        'account' => 'account'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'uid' => 'setUid',
        'article' => 'setArticle',
        'title' => 'setTitle',
        'text' => 'setText',
        'source_uid' => 'setSourceUid',
        'source_type' => 'setSourceType',
        'creation_date' => 'setCreationDate',
        'next_period_date' => 'setNextPeriodDate',
        'cancellation' => 'setCancellation',
        'account' => 'setAccount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'uid' => 'getUid',
        'article' => 'getArticle',
        'title' => 'getTitle',
        'text' => 'getText',
        'source_uid' => 'getSourceUid',
        'source_type' => 'getSourceType',
        'creation_date' => 'getCreationDate',
        'next_period_date' => 'getNextPeriodDate',
        'cancellation' => 'getCancellation',
        'account' => 'getAccount'
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
        $this->container['uid'] = isset($data['uid']) ? $data['uid'] : null;
        $this->container['article'] = isset($data['article']) ? $data['article'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
        $this->container['source_uid'] = isset($data['source_uid']) ? $data['source_uid'] : null;
        $this->container['source_type'] = isset($data['source_type']) ? $data['source_type'] : null;
        $this->container['creation_date'] = isset($data['creation_date']) ? $data['creation_date'] : null;
        $this->container['next_period_date'] = isset($data['next_period_date']) ? $data['next_period_date'] : null;
        $this->container['cancellation'] = isset($data['cancellation']) ? $data['cancellation'] : null;
        $this->container['account'] = isset($data['account']) ? $data['account'] : null;
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

        return true;
    }


    /**
     * Gets uid
     *
     * @return int
     */
    public function getUid()
    {
        return $this->container['uid'];
    }

    /**
     * Sets uid
     *
     * @param int $uid uid
     *
     * @return $this
     */
    public function setUid($uid)
    {
        $this->container['uid'] = $uid;

        return $this;
    }

    /**
     * Gets article
     *
     * @return \Mittwald\Api\Model\Article
     */
    public function getArticle()
    {
        return $this->container['article'];
    }

    /**
     * Sets article
     *
     * @param \Mittwald\Api\Model\Article $article article
     *
     * @return $this
     */
    public function setArticle($article)
    {
        $this->container['article'] = $article;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets text
     *
     * @return string
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
     * Sets text
     *
     * @param string $text text
     *
     * @return $this
     */
    public function setText($text)
    {
        $this->container['text'] = $text;

        return $this;
    }

    /**
     * Gets source_uid
     *
     * @return int
     */
    public function getSourceUid()
    {
        return $this->container['source_uid'];
    }

    /**
     * Sets source_uid
     *
     * @param int $source_uid source_uid
     *
     * @return $this
     */
    public function setSourceUid($source_uid)
    {
        $this->container['source_uid'] = $source_uid;

        return $this;
    }

    /**
     * Gets source_type
     *
     * @return string
     */
    public function getSourceType()
    {
        return $this->container['source_type'];
    }

    /**
     * Sets source_type
     *
     * @param string $source_type source_type
     *
     * @return $this
     */
    public function setSourceType($source_type)
    {
        $this->container['source_type'] = $source_type;

        return $this;
    }

    /**
     * Gets creation_date
     *
     * @return int
     */
    public function getCreationDate()
    {
        return $this->container['creation_date'];
    }

    /**
     * Sets creation_date
     *
     * @param int $creation_date creation_date
     *
     * @return $this
     */
    public function setCreationDate($creation_date)
    {
        $this->container['creation_date'] = $creation_date;

        return $this;
    }

    /**
     * Gets next_period_date
     *
     * @return int
     */
    public function getNextPeriodDate()
    {
        return $this->container['next_period_date'];
    }

    /**
     * Sets next_period_date
     *
     * @param int $next_period_date next_period_date
     *
     * @return $this
     */
    public function setNextPeriodDate($next_period_date)
    {
        $this->container['next_period_date'] = $next_period_date;

        return $this;
    }

    /**
     * Gets cancellation
     *
     * @return \Mittwald\Api\Model\Cancellation
     */
    public function getCancellation()
    {
        return $this->container['cancellation'];
    }

    /**
     * Sets cancellation
     *
     * @param \Mittwald\Api\Model\Cancellation $cancellation cancellation
     *
     * @return $this
     */
    public function setCancellation($cancellation)
    {
        $this->container['cancellation'] = $cancellation;

        return $this;
    }

    /**
     * Gets account
     *
     * @return \Mittwald\Api\Model\CustomerContractAccount
     */
    public function getAccount()
    {
        return $this->container['account'];
    }

    /**
     * Sets account
     *
     * @param \Mittwald\Api\Model\CustomerContractAccount $account account
     *
     * @return $this
     */
    public function setAccount($account)
    {
        $this->container['account'] = $account;

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


