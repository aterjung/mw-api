<?php
/**
 * Invoice
 *
 * PHP version 5
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
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.1.2
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
 * Invoice Class Doc Comment
 *
 * @category Class
 * @package  MittwaldApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Invoice implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Invoice';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'invoice_number' => 'float',
        'invoiced_at' => 'string',
        'net_total' => '\MittwaldApi\Model\InvoiceAmount',
        'gross_total' => '\MittwaldApi\Model\InvoiceAmount',
        'items' => '\MittwaldApi\Model\InvoiceItem[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'invoice_number' => null,
        'invoiced_at' => 'datetime',
        'net_total' => null,
        'gross_total' => null,
        'items' => null
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
        'invoice_number' => 'invoiceNumber',
        'invoiced_at' => 'invoicedAt',
        'net_total' => 'netTotal',
        'gross_total' => 'grossTotal',
        'items' => 'items'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'invoice_number' => 'setInvoiceNumber',
        'invoiced_at' => 'setInvoicedAt',
        'net_total' => 'setNetTotal',
        'gross_total' => 'setGrossTotal',
        'items' => 'setItems'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'invoice_number' => 'getInvoiceNumber',
        'invoiced_at' => 'getInvoicedAt',
        'net_total' => 'getNetTotal',
        'gross_total' => 'getGrossTotal',
        'items' => 'getItems'
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
        $this->container['invoice_number'] = isset($data['invoice_number']) ? $data['invoice_number'] : null;
        $this->container['invoiced_at'] = isset($data['invoiced_at']) ? $data['invoiced_at'] : null;
        $this->container['net_total'] = isset($data['net_total']) ? $data['net_total'] : null;
        $this->container['gross_total'] = isset($data['gross_total']) ? $data['gross_total'] : null;
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['invoice_number'] === null) {
            $invalidProperties[] = "'invoice_number' can't be null";
        }
        if ($this->container['invoiced_at'] === null) {
            $invalidProperties[] = "'invoiced_at' can't be null";
        }
        if ($this->container['net_total'] === null) {
            $invalidProperties[] = "'net_total' can't be null";
        }
        if ($this->container['gross_total'] === null) {
            $invalidProperties[] = "'gross_total' can't be null";
        }
        if ($this->container['items'] === null) {
            $invalidProperties[] = "'items' can't be null";
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
     * Gets invoice_number
     *
     * @return float
     */
    public function getInvoiceNumber()
    {
        return $this->container['invoice_number'];
    }

    /**
     * Sets invoice_number
     *
     * @param float $invoice_number Die Rechnungsnummer
     *
     * @return $this
     */
    public function setInvoiceNumber($invoice_number)
    {
        $this->container['invoice_number'] = $invoice_number;

        return $this;
    }

    /**
     * Gets invoiced_at
     *
     * @return string
     */
    public function getInvoicedAt()
    {
        return $this->container['invoiced_at'];
    }

    /**
     * Sets invoiced_at
     *
     * @param string $invoiced_at Das Datum der Rechnungsstellung
     *
     * @return $this
     */
    public function setInvoicedAt($invoiced_at)
    {
        $this->container['invoiced_at'] = $invoiced_at;

        return $this;
    }

    /**
     * Gets net_total
     *
     * @return \MittwaldApi\Model\InvoiceAmount
     */
    public function getNetTotal()
    {
        return $this->container['net_total'];
    }

    /**
     * Sets net_total
     *
     * @param \MittwaldApi\Model\InvoiceAmount $net_total net_total
     *
     * @return $this
     */
    public function setNetTotal($net_total)
    {
        $this->container['net_total'] = $net_total;

        return $this;
    }

    /**
     * Gets gross_total
     *
     * @return \MittwaldApi\Model\InvoiceAmount
     */
    public function getGrossTotal()
    {
        return $this->container['gross_total'];
    }

    /**
     * Sets gross_total
     *
     * @param \MittwaldApi\Model\InvoiceAmount $gross_total gross_total
     *
     * @return $this
     */
    public function setGrossTotal($gross_total)
    {
        $this->container['gross_total'] = $gross_total;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \MittwaldApi\Model\InvoiceItem[]
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \MittwaldApi\Model\InvoiceItem[] $items items
     *
     * @return $this
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

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
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


