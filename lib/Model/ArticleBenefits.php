<?php
/**
 * ArticleBenefits
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
 * ArticleBenefits Class Doc Comment
 *
 * @category Class
 * @package  MittwaldApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ArticleBenefits implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Article_benefits';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'server' => '\MittwaldApi\Model\ArticleBenefitsServer',
        'domain' => '\MittwaldApi\Model\ArticleBenefitsDomain',
        'subdomain' => '\MittwaldApi\Model\ArticleBenefitsServerFtpUser',
        'mail_address' => '\MittwaldApi\Model\ArticleBenefitsMailAddress',
        'mail_box' => '\MittwaldApi\Model\ArticleBenefitsMailBox',
        'database' => '\MittwaldApi\Model\ArticleBenefitsDatabase',
        'web_ftp' => '\MittwaldApi\Model\ArticleBenefitsServerSsh',
        'web_mail' => '\MittwaldApi\Model\ArticleBenefitsServerSsh',
        'dns_editor' => '\MittwaldApi\Model\ArticleBenefitsDnsEditor',
        'firewall_plus' => '\MittwaldApi\Model\ArticleBenefitsServerSsh',
        'monitoring_plus' => '\MittwaldApi\Model\ArticleBenefitsServerSsh',
        'design_switcher' => '\MittwaldApi\Model\ArticleBenefitsServerSsh',
        'version_manager' => '\MittwaldApi\Model\ArticleBenefitsServerSsh',
        'template' => '\MittwaldApi\Model\ArticleBenefitsServerFtpUser',
        'snapshot' => '\MittwaldApi\Model\ArticleBenefitsServerFtpUser'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'server' => null,
        'domain' => null,
        'subdomain' => null,
        'mail_address' => null,
        'mail_box' => null,
        'database' => null,
        'web_ftp' => null,
        'web_mail' => null,
        'dns_editor' => null,
        'firewall_plus' => null,
        'monitoring_plus' => null,
        'design_switcher' => null,
        'version_manager' => null,
        'template' => null,
        'snapshot' => null
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
        'server' => 'server',
        'domain' => 'domain',
        'subdomain' => 'subdomain',
        'mail_address' => 'mailAddress',
        'mail_box' => 'mailBox',
        'database' => 'database',
        'web_ftp' => 'webFtp',
        'web_mail' => 'webMail',
        'dns_editor' => 'dnsEditor',
        'firewall_plus' => 'firewallPlus',
        'monitoring_plus' => 'monitoringPlus',
        'design_switcher' => 'designSwitcher',
        'version_manager' => 'versionManager',
        'template' => 'template',
        'snapshot' => 'snapshot'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'server' => 'setServer',
        'domain' => 'setDomain',
        'subdomain' => 'setSubdomain',
        'mail_address' => 'setMailAddress',
        'mail_box' => 'setMailBox',
        'database' => 'setDatabase',
        'web_ftp' => 'setWebFtp',
        'web_mail' => 'setWebMail',
        'dns_editor' => 'setDnsEditor',
        'firewall_plus' => 'setFirewallPlus',
        'monitoring_plus' => 'setMonitoringPlus',
        'design_switcher' => 'setDesignSwitcher',
        'version_manager' => 'setVersionManager',
        'template' => 'setTemplate',
        'snapshot' => 'setSnapshot'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'server' => 'getServer',
        'domain' => 'getDomain',
        'subdomain' => 'getSubdomain',
        'mail_address' => 'getMailAddress',
        'mail_box' => 'getMailBox',
        'database' => 'getDatabase',
        'web_ftp' => 'getWebFtp',
        'web_mail' => 'getWebMail',
        'dns_editor' => 'getDnsEditor',
        'firewall_plus' => 'getFirewallPlus',
        'monitoring_plus' => 'getMonitoringPlus',
        'design_switcher' => 'getDesignSwitcher',
        'version_manager' => 'getVersionManager',
        'template' => 'getTemplate',
        'snapshot' => 'getSnapshot'
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
        $this->container['server'] = $data['server'] ?? null;
        $this->container['domain'] = $data['domain'] ?? null;
        $this->container['subdomain'] = $data['subdomain'] ?? null;
        $this->container['mail_address'] = $data['mail_address'] ?? null;
        $this->container['mail_box'] = $data['mail_box'] ?? null;
        $this->container['database'] = $data['database'] ?? null;
        $this->container['web_ftp'] = $data['web_ftp'] ?? null;
        $this->container['web_mail'] = $data['web_mail'] ?? null;
        $this->container['dns_editor'] = $data['dns_editor'] ?? null;
        $this->container['firewall_plus'] = $data['firewall_plus'] ?? null;
        $this->container['monitoring_plus'] = $data['monitoring_plus'] ?? null;
        $this->container['design_switcher'] = $data['design_switcher'] ?? null;
        $this->container['version_manager'] = $data['version_manager'] ?? null;
        $this->container['template'] = $data['template'] ?? null;
        $this->container['snapshot'] = $data['snapshot'] ?? null;
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
     * Gets server
     *
     * @return \MittwaldApi\Model\ArticleBenefitsServer|null
     */
    public function getServer()
    {
        return $this->container['server'];
    }

    /**
     * Sets server
     *
     * @param \MittwaldApi\Model\ArticleBenefitsServer|null $server server
     *
     * @return self
     */
    public function setServer($server)
    {
        $this->container['server'] = $server;

        return $this;
    }

    /**
     * Gets domain
     *
     * @return \MittwaldApi\Model\ArticleBenefitsDomain|null
     */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
     * Sets domain
     *
     * @param \MittwaldApi\Model\ArticleBenefitsDomain|null $domain domain
     *
     * @return self
     */
    public function setDomain($domain)
    {
        $this->container['domain'] = $domain;

        return $this;
    }

    /**
     * Gets subdomain
     *
     * @return \MittwaldApi\Model\ArticleBenefitsServerFtpUser|null
     */
    public function getSubdomain()
    {
        return $this->container['subdomain'];
    }

    /**
     * Sets subdomain
     *
     * @param \MittwaldApi\Model\ArticleBenefitsServerFtpUser|null $subdomain subdomain
     *
     * @return self
     */
    public function setSubdomain($subdomain)
    {
        $this->container['subdomain'] = $subdomain;

        return $this;
    }

    /**
     * Gets mail_address
     *
     * @return \MittwaldApi\Model\ArticleBenefitsMailAddress|null
     */
    public function getMailAddress()
    {
        return $this->container['mail_address'];
    }

    /**
     * Sets mail_address
     *
     * @param \MittwaldApi\Model\ArticleBenefitsMailAddress|null $mail_address mail_address
     *
     * @return self
     */
    public function setMailAddress($mail_address)
    {
        $this->container['mail_address'] = $mail_address;

        return $this;
    }

    /**
     * Gets mail_box
     *
     * @return \MittwaldApi\Model\ArticleBenefitsMailBox|null
     */
    public function getMailBox()
    {
        return $this->container['mail_box'];
    }

    /**
     * Sets mail_box
     *
     * @param \MittwaldApi\Model\ArticleBenefitsMailBox|null $mail_box mail_box
     *
     * @return self
     */
    public function setMailBox($mail_box)
    {
        $this->container['mail_box'] = $mail_box;

        return $this;
    }

    /**
     * Gets database
     *
     * @return \MittwaldApi\Model\ArticleBenefitsDatabase|null
     */
    public function getDatabase()
    {
        return $this->container['database'];
    }

    /**
     * Sets database
     *
     * @param \MittwaldApi\Model\ArticleBenefitsDatabase|null $database database
     *
     * @return self
     */
    public function setDatabase($database)
    {
        $this->container['database'] = $database;

        return $this;
    }

    /**
     * Gets web_ftp
     *
     * @return \MittwaldApi\Model\ArticleBenefitsServerSsh|null
     */
    public function getWebFtp()
    {
        return $this->container['web_ftp'];
    }

    /**
     * Sets web_ftp
     *
     * @param \MittwaldApi\Model\ArticleBenefitsServerSsh|null $web_ftp web_ftp
     *
     * @return self
     */
    public function setWebFtp($web_ftp)
    {
        $this->container['web_ftp'] = $web_ftp;

        return $this;
    }

    /**
     * Gets web_mail
     *
     * @return \MittwaldApi\Model\ArticleBenefitsServerSsh|null
     */
    public function getWebMail()
    {
        return $this->container['web_mail'];
    }

    /**
     * Sets web_mail
     *
     * @param \MittwaldApi\Model\ArticleBenefitsServerSsh|null $web_mail web_mail
     *
     * @return self
     */
    public function setWebMail($web_mail)
    {
        $this->container['web_mail'] = $web_mail;

        return $this;
    }

    /**
     * Gets dns_editor
     *
     * @return \MittwaldApi\Model\ArticleBenefitsDnsEditor|null
     */
    public function getDnsEditor()
    {
        return $this->container['dns_editor'];
    }

    /**
     * Sets dns_editor
     *
     * @param \MittwaldApi\Model\ArticleBenefitsDnsEditor|null $dns_editor dns_editor
     *
     * @return self
     */
    public function setDnsEditor($dns_editor)
    {
        $this->container['dns_editor'] = $dns_editor;

        return $this;
    }

    /**
     * Gets firewall_plus
     *
     * @return \MittwaldApi\Model\ArticleBenefitsServerSsh|null
     */
    public function getFirewallPlus()
    {
        return $this->container['firewall_plus'];
    }

    /**
     * Sets firewall_plus
     *
     * @param \MittwaldApi\Model\ArticleBenefitsServerSsh|null $firewall_plus firewall_plus
     *
     * @return self
     */
    public function setFirewallPlus($firewall_plus)
    {
        $this->container['firewall_plus'] = $firewall_plus;

        return $this;
    }

    /**
     * Gets monitoring_plus
     *
     * @return \MittwaldApi\Model\ArticleBenefitsServerSsh|null
     */
    public function getMonitoringPlus()
    {
        return $this->container['monitoring_plus'];
    }

    /**
     * Sets monitoring_plus
     *
     * @param \MittwaldApi\Model\ArticleBenefitsServerSsh|null $monitoring_plus monitoring_plus
     *
     * @return self
     */
    public function setMonitoringPlus($monitoring_plus)
    {
        $this->container['monitoring_plus'] = $monitoring_plus;

        return $this;
    }

    /**
     * Gets design_switcher
     *
     * @return \MittwaldApi\Model\ArticleBenefitsServerSsh|null
     */
    public function getDesignSwitcher()
    {
        return $this->container['design_switcher'];
    }

    /**
     * Sets design_switcher
     *
     * @param \MittwaldApi\Model\ArticleBenefitsServerSsh|null $design_switcher design_switcher
     *
     * @return self
     */
    public function setDesignSwitcher($design_switcher)
    {
        $this->container['design_switcher'] = $design_switcher;

        return $this;
    }

    /**
     * Gets version_manager
     *
     * @return \MittwaldApi\Model\ArticleBenefitsServerSsh|null
     */
    public function getVersionManager()
    {
        return $this->container['version_manager'];
    }

    /**
     * Sets version_manager
     *
     * @param \MittwaldApi\Model\ArticleBenefitsServerSsh|null $version_manager version_manager
     *
     * @return self
     */
    public function setVersionManager($version_manager)
    {
        $this->container['version_manager'] = $version_manager;

        return $this;
    }

    /**
     * Gets template
     *
     * @return \MittwaldApi\Model\ArticleBenefitsServerFtpUser|null
     */
    public function getTemplate()
    {
        return $this->container['template'];
    }

    /**
     * Sets template
     *
     * @param \MittwaldApi\Model\ArticleBenefitsServerFtpUser|null $template template
     *
     * @return self
     */
    public function setTemplate($template)
    {
        $this->container['template'] = $template;

        return $this;
    }

    /**
     * Gets snapshot
     *
     * @return \MittwaldApi\Model\ArticleBenefitsServerFtpUser|null
     */
    public function getSnapshot()
    {
        return $this->container['snapshot'];
    }

    /**
     * Sets snapshot
     *
     * @param \MittwaldApi\Model\ArticleBenefitsServerFtpUser|null $snapshot snapshot
     *
     * @return self
     */
    public function setSnapshot($snapshot)
    {
        $this->container['snapshot'] = $snapshot;

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


