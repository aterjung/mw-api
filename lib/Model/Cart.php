<?php
/**
 * Cart
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
 * Cart Class Doc Comment
 *
 * @category Class
 * @package  MittwaldApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class Cart implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Cart';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        '_id' => 'string',
        'items' => '\MittwaldApi\Model\Article[]',
        'jwt' => 'string',
        'promotion_code' => 'string',
        'newsletter' => 'bool',
        'offer' => 'float',
        'software' => 'string',
        'os' => 'string',
        'note' => 'string',
        'mysql_version' => 'string',
        'database_partition_percentage' => 'float',
        'source_account' => 'string',
        'source_reseller' => 'string',
        'agency_server' => 'float',
        'stay_on_hardware' => 'bool',
        'testing' => 'bool',
        'billing_period' => 'float',
        'customer_billing_period' => 'float',
        'commission' => 'string',
        'is_commission_locked' => 'bool',
        'due_date' => 'float',
        'project_name' => 'string',
        'project_password' => 'string',
        'contract_partner' => '\MittwaldApi\Model\Contact',
        'contact_person' => '\MittwaldApi\Model\Contact',
        'billing_address' => '\MittwaldApi\Model\Contact',
        'payment_settings' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        '_id' => null,
        'items' => null,
        'jwt' => null,
        'promotion_code' => null,
        'newsletter' => null,
        'offer' => null,
        'software' => null,
        'os' => null,
        'note' => null,
        'mysql_version' => null,
        'database_partition_percentage' => null,
        'source_account' => null,
        'source_reseller' => null,
        'agency_server' => null,
        'stay_on_hardware' => null,
        'testing' => null,
        'billing_period' => null,
        'customer_billing_period' => null,
        'commission' => null,
        'is_commission_locked' => null,
        'due_date' => null,
        'project_name' => null,
        'project_password' => null,
        'contract_partner' => null,
        'contact_person' => null,
        'billing_address' => null,
        'payment_settings' => null
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
        '_id' => '_id',
        'items' => 'items',
        'jwt' => 'jwt',
        'promotion_code' => 'promotionCode',
        'newsletter' => 'newsletter',
        'offer' => 'offer',
        'software' => 'software',
        'os' => 'os',
        'note' => 'note',
        'mysql_version' => 'mysqlVersion',
        'database_partition_percentage' => 'databasePartitionPercentage',
        'source_account' => 'sourceAccount',
        'source_reseller' => 'sourceReseller',
        'agency_server' => 'agencyServer',
        'stay_on_hardware' => 'stayOnHardware',
        'testing' => 'testing',
        'billing_period' => 'billingPeriod',
        'customer_billing_period' => 'customerBillingPeriod',
        'commission' => 'commission',
        'is_commission_locked' => 'isCommissionLocked',
        'due_date' => 'dueDate',
        'project_name' => 'projectName',
        'project_password' => 'projectPassword',
        'contract_partner' => 'contractPartner',
        'contact_person' => 'contactPerson',
        'billing_address' => 'billingAddress',
        'payment_settings' => 'paymentSettings'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        '_id' => 'setId',
        'items' => 'setItems',
        'jwt' => 'setJwt',
        'promotion_code' => 'setPromotionCode',
        'newsletter' => 'setNewsletter',
        'offer' => 'setOffer',
        'software' => 'setSoftware',
        'os' => 'setOs',
        'note' => 'setNote',
        'mysql_version' => 'setMysqlVersion',
        'database_partition_percentage' => 'setDatabasePartitionPercentage',
        'source_account' => 'setSourceAccount',
        'source_reseller' => 'setSourceReseller',
        'agency_server' => 'setAgencyServer',
        'stay_on_hardware' => 'setStayOnHardware',
        'testing' => 'setTesting',
        'billing_period' => 'setBillingPeriod',
        'customer_billing_period' => 'setCustomerBillingPeriod',
        'commission' => 'setCommission',
        'is_commission_locked' => 'setIsCommissionLocked',
        'due_date' => 'setDueDate',
        'project_name' => 'setProjectName',
        'project_password' => 'setProjectPassword',
        'contract_partner' => 'setContractPartner',
        'contact_person' => 'setContactPerson',
        'billing_address' => 'setBillingAddress',
        'payment_settings' => 'setPaymentSettings'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        '_id' => 'getId',
        'items' => 'getItems',
        'jwt' => 'getJwt',
        'promotion_code' => 'getPromotionCode',
        'newsletter' => 'getNewsletter',
        'offer' => 'getOffer',
        'software' => 'getSoftware',
        'os' => 'getOs',
        'note' => 'getNote',
        'mysql_version' => 'getMysqlVersion',
        'database_partition_percentage' => 'getDatabasePartitionPercentage',
        'source_account' => 'getSourceAccount',
        'source_reseller' => 'getSourceReseller',
        'agency_server' => 'getAgencyServer',
        'stay_on_hardware' => 'getStayOnHardware',
        'testing' => 'getTesting',
        'billing_period' => 'getBillingPeriod',
        'customer_billing_period' => 'getCustomerBillingPeriod',
        'commission' => 'getCommission',
        'is_commission_locked' => 'getIsCommissionLocked',
        'due_date' => 'getDueDate',
        'project_name' => 'getProjectName',
        'project_password' => 'getProjectPassword',
        'contract_partner' => 'getContractPartner',
        'contact_person' => 'getContactPerson',
        'billing_address' => 'getBillingAddress',
        'payment_settings' => 'getPaymentSettings'
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
        $this->container['_id'] = $data['_id'] ?? null;
        $this->container['items'] = $data['items'] ?? null;
        $this->container['jwt'] = $data['jwt'] ?? null;
        $this->container['promotion_code'] = $data['promotion_code'] ?? null;
        $this->container['newsletter'] = $data['newsletter'] ?? null;
        $this->container['offer'] = $data['offer'] ?? null;
        $this->container['software'] = $data['software'] ?? null;
        $this->container['os'] = $data['os'] ?? null;
        $this->container['note'] = $data['note'] ?? null;
        $this->container['mysql_version'] = $data['mysql_version'] ?? null;
        $this->container['database_partition_percentage'] = $data['database_partition_percentage'] ?? null;
        $this->container['source_account'] = $data['source_account'] ?? null;
        $this->container['source_reseller'] = $data['source_reseller'] ?? null;
        $this->container['agency_server'] = $data['agency_server'] ?? null;
        $this->container['stay_on_hardware'] = $data['stay_on_hardware'] ?? null;
        $this->container['testing'] = $data['testing'] ?? null;
        $this->container['billing_period'] = $data['billing_period'] ?? null;
        $this->container['customer_billing_period'] = $data['customer_billing_period'] ?? null;
        $this->container['commission'] = $data['commission'] ?? null;
        $this->container['is_commission_locked'] = $data['is_commission_locked'] ?? null;
        $this->container['due_date'] = $data['due_date'] ?? null;
        $this->container['project_name'] = $data['project_name'] ?? null;
        $this->container['project_password'] = $data['project_password'] ?? null;
        $this->container['contract_partner'] = $data['contract_partner'] ?? null;
        $this->container['contact_person'] = $data['contact_person'] ?? null;
        $this->container['billing_address'] = $data['billing_address'] ?? null;
        $this->container['payment_settings'] = $data['payment_settings'] ?? null;
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
     * Gets _id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['_id'];
    }

    /**
     * Sets _id
     *
     * @param string|null $_id _id
     *
     * @return self
     */
    public function setId($_id)
    {
        $this->container['_id'] = $_id;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \MittwaldApi\Model\Article[]|null
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \MittwaldApi\Model\Article[]|null $items items
     *
     * @return self
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets jwt
     *
     * @return string|null
     */
    public function getJwt()
    {
        return $this->container['jwt'];
    }

    /**
     * Sets jwt
     *
     * @param string|null $jwt Set a new jwt for this cart.
     *
     * @return self
     */
    public function setJwt($jwt)
    {
        $this->container['jwt'] = $jwt;

        return $this;
    }

    /**
     * Gets promotion_code
     *
     * @return string|null
     */
    public function getPromotionCode()
    {
        return $this->container['promotion_code'];
    }

    /**
     * Sets promotion_code
     *
     * @param string|null $promotion_code promotion_code
     *
     * @return self
     */
    public function setPromotionCode($promotion_code)
    {
        $this->container['promotion_code'] = $promotion_code;

        return $this;
    }

    /**
     * Gets newsletter
     *
     * @return bool|null
     */
    public function getNewsletter()
    {
        return $this->container['newsletter'];
    }

    /**
     * Sets newsletter
     *
     * @param bool|null $newsletter newsletter
     *
     * @return self
     */
    public function setNewsletter($newsletter)
    {
        $this->container['newsletter'] = $newsletter;

        return $this;
    }

    /**
     * Gets offer
     *
     * @return float|null
     */
    public function getOffer()
    {
        return $this->container['offer'];
    }

    /**
     * Sets offer
     *
     * @param float|null $offer offer
     *
     * @return self
     */
    public function setOffer($offer)
    {
        $this->container['offer'] = $offer;

        return $this;
    }

    /**
     * Gets software
     *
     * @return string|null
     */
    public function getSoftware()
    {
        return $this->container['software'];
    }

    /**
     * Sets software
     *
     * @param string|null $software The software to install for the order.
     *
     * @return self
     */
    public function setSoftware($software)
    {
        $this->container['software'] = $software;

        return $this;
    }

    /**
     * Gets os
     *
     * @return string|null
     */
    public function getOs()
    {
        return $this->container['os'];
    }

    /**
     * Sets os
     *
     * @param string|null $os The operating system to install for the order.
     *
     * @return self
     */
    public function setOs($os)
    {
        $this->container['os'] = $os;

        return $this;
    }

    /**
     * Gets note
     *
     * @return string|null
     */
    public function getNote()
    {
        return $this->container['note'];
    }

    /**
     * Sets note
     *
     * @param string|null $note Store a customer note for the order.
     *
     * @return self
     */
    public function setNote($note)
    {
        $this->container['note'] = $note;

        return $this;
    }

    /**
     * Gets mysql_version
     *
     * @return string|null
     */
    public function getMysqlVersion()
    {
        return $this->container['mysql_version'];
    }

    /**
     * Sets mysql_version
     *
     * @param string|null $mysql_version The MySQL-Version to use for the order.
     *
     * @return self
     */
    public function setMysqlVersion($mysql_version)
    {
        $this->container['mysql_version'] = $mysql_version;

        return $this;
    }

    /**
     * Gets database_partition_percentage
     *
     * @return float|null
     */
    public function getDatabasePartitionPercentage()
    {
        return $this->container['database_partition_percentage'];
    }

    /**
     * Sets database_partition_percentage
     *
     * @param float|null $database_partition_percentage The database partition ratio. Must be between 20 & 80 %.
     *
     * @return self
     */
    public function setDatabasePartitionPercentage($database_partition_percentage)
    {
        $this->container['database_partition_percentage'] = $database_partition_percentage;

        return $this;
    }

    /**
     * Gets source_account
     *
     * @return string|null
     */
    public function getSourceAccount()
    {
        return $this->container['source_account'];
    }

    /**
     * Sets source_account
     *
     * @param string|null $source_account Only for upgrades/extract: The UID or name of the source account.
     *
     * @return self
     */
    public function setSourceAccount($source_account)
    {
        $this->container['source_account'] = $source_account;

        return $this;
    }

    /**
     * Gets source_reseller
     *
     * @return string|null
     */
    public function getSourceReseller()
    {
        return $this->container['source_reseller'];
    }

    /**
     * Sets source_reseller
     *
     * @param string|null $source_reseller Only for upgrades/extract: The UID or name of the source reseller.
     *
     * @return self
     */
    public function setSourceReseller($source_reseller)
    {
        $this->container['source_reseller'] = $source_reseller;

        return $this;
    }

    /**
     * Gets agency_server
     *
     * @return float|null
     */
    public function getAgencyServer()
    {
        return $this->container['agency_server'];
    }

    /**
     * Sets agency_server
     *
     * @param float|null $agency_server The UID of the target agency server.
     *
     * @return self
     */
    public function setAgencyServer($agency_server)
    {
        $this->container['agency_server'] = $agency_server;

        return $this;
    }

    /**
     * Gets stay_on_hardware
     *
     * @return bool|null
     */
    public function getStayOnHardware()
    {
        return $this->container['stay_on_hardware'];
    }

    /**
     * Sets stay_on_hardware
     *
     * @param bool|null $stay_on_hardware Keep your existing hardware
     *
     * @return self
     */
    public function setStayOnHardware($stay_on_hardware)
    {
        $this->container['stay_on_hardware'] = $stay_on_hardware;

        return $this;
    }

    /**
     * Gets testing
     *
     * @return bool|null
     */
    public function getTesting()
    {
        return $this->container['testing'];
    }

    /**
     * Sets testing
     *
     * @param bool|null $testing Is order an testaccount?
     *
     * @return self
     */
    public function setTesting($testing)
    {
        $this->container['testing'] = $testing;

        return $this;
    }

    /**
     * Gets billing_period
     *
     * @return float|null
     */
    public function getBillingPeriod()
    {
        return $this->container['billing_period'];
    }

    /**
     * Sets billing_period
     *
     * @param float|null $billing_period Billing period for main order item
     *
     * @return self
     */
    public function setBillingPeriod($billing_period)
    {
        $this->container['billing_period'] = $billing_period;

        return $this;
    }

    /**
     * Gets customer_billing_period
     *
     * @return float|null
     */
    public function getCustomerBillingPeriod()
    {
        return $this->container['customer_billing_period'];
    }

    /**
     * Sets customer_billing_period
     *
     * @param float|null $customer_billing_period Billing period for whole customer
     *
     * @return self
     */
    public function setCustomerBillingPeriod($customer_billing_period)
    {
        $this->container['customer_billing_period'] = $customer_billing_period;

        return $this;
    }

    /**
     * Gets commission
     *
     * @return string|null
     */
    public function getCommission()
    {
        return $this->container['commission'];
    }

    /**
     * Sets commission
     *
     * @param string|null $commission The code from the partnerprogram
     *
     * @return self
     */
    public function setCommission($commission)
    {
        $this->container['commission'] = $commission;

        return $this;
    }

    /**
     * Gets is_commission_locked
     *
     * @return bool|null
     */
    public function getIsCommissionLocked()
    {
        return $this->container['is_commission_locked'];
    }

    /**
     * Sets is_commission_locked
     *
     * @param bool|null $is_commission_locked If enabled, nobody can remove/change the commission code. Default=false
     *
     * @return self
     */
    public function setIsCommissionLocked($is_commission_locked)
    {
        $this->container['is_commission_locked'] = $is_commission_locked;

        return $this;
    }

    /**
     * Gets due_date
     *
     * @return float|null
     */
    public function getDueDate()
    {
        return $this->container['due_date'];
    }

    /**
     * Sets due_date
     *
     * @param float|null $due_date Unix timestamp of the due date of the order (wish order execution date).
     *
     * @return self
     */
    public function setDueDate($due_date)
    {
        $this->container['due_date'] = $due_date;

        return $this;
    }

    /**
     * Gets project_name
     *
     * @return string|null
     */
    public function getProjectName()
    {
        return $this->container['project_name'];
    }

    /**
     * Sets project_name
     *
     * @param string|null $project_name Your description for the account.
     *
     * @return self
     */
    public function setProjectName($project_name)
    {
        $this->container['project_name'] = $project_name;

        return $this;
    }

    /**
     * Gets project_password
     *
     * @return string|null
     */
    public function getProjectPassword()
    {
        return $this->container['project_password'];
    }

    /**
     * Sets project_password
     *
     * @param string|null $project_password Your password for the account. Will be encrypted after setting this value.
     *
     * @return self
     */
    public function setProjectPassword($project_password)
    {
        $this->container['project_password'] = $project_password;

        return $this;
    }

    /**
     * Gets contract_partner
     *
     * @return \MittwaldApi\Model\Contact|null
     */
    public function getContractPartner()
    {
        return $this->container['contract_partner'];
    }

    /**
     * Sets contract_partner
     *
     * @param \MittwaldApi\Model\Contact|null $contract_partner contract_partner
     *
     * @return self
     */
    public function setContractPartner($contract_partner)
    {
        $this->container['contract_partner'] = $contract_partner;

        return $this;
    }

    /**
     * Gets contact_person
     *
     * @return \MittwaldApi\Model\Contact|null
     */
    public function getContactPerson()
    {
        return $this->container['contact_person'];
    }

    /**
     * Sets contact_person
     *
     * @param \MittwaldApi\Model\Contact|null $contact_person contact_person
     *
     * @return self
     */
    public function setContactPerson($contact_person)
    {
        $this->container['contact_person'] = $contact_person;

        return $this;
    }

    /**
     * Gets billing_address
     *
     * @return \MittwaldApi\Model\Contact|null
     */
    public function getBillingAddress()
    {
        return $this->container['billing_address'];
    }

    /**
     * Sets billing_address
     *
     * @param \MittwaldApi\Model\Contact|null $billing_address billing_address
     *
     * @return self
     */
    public function setBillingAddress($billing_address)
    {
        $this->container['billing_address'] = $billing_address;

        return $this;
    }

    /**
     * Gets payment_settings
     *
     * @return object|null
     */
    public function getPaymentSettings()
    {
        return $this->container['payment_settings'];
    }

    /**
     * Sets payment_settings
     *
     * @param object|null $payment_settings payment_settings
     *
     * @return self
     */
    public function setPaymentSettings($payment_settings)
    {
        $this->container['payment_settings'] = $payment_settings;

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


