<?php
/**
 * ContactUpdateRequest
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
 * ContactUpdateRequest Class Doc Comment
 *
 * @category Class
 * @package  MittwaldApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ContactUpdateRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ContactUpdateRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'identical_to_default_address' => 'bool',
        'first_name' => 'string',
        'last_name' => 'string',
        'title' => 'string',
        'salutation' => 'string',
        'street' => 'string',
        'house_number' => 'string',
        'city' => 'string',
        'email_address' => 'string',
        'phone' => 'string',
        'country' => 'string',
        'vat' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'identical_to_default_address' => null,
        'first_name' => null,
        'last_name' => null,
        'title' => null,
        'salutation' => null,
        'street' => null,
        'house_number' => null,
        'city' => null,
        'email_address' => 'email',
        'phone' => null,
        'country' => null,
        'vat' => null
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
        'identical_to_default_address' => 'identicalToDefaultAddress',
        'first_name' => 'firstName',
        'last_name' => 'lastName',
        'title' => 'title',
        'salutation' => 'salutation',
        'street' => 'street',
        'house_number' => 'houseNumber',
        'city' => 'city',
        'email_address' => 'emailAddress',
        'phone' => 'phone',
        'country' => 'country',
        'vat' => 'vat'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'identical_to_default_address' => 'setIdenticalToDefaultAddress',
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'title' => 'setTitle',
        'salutation' => 'setSalutation',
        'street' => 'setStreet',
        'house_number' => 'setHouseNumber',
        'city' => 'setCity',
        'email_address' => 'setEmailAddress',
        'phone' => 'setPhone',
        'country' => 'setCountry',
        'vat' => 'setVat'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'identical_to_default_address' => 'getIdenticalToDefaultAddress',
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'title' => 'getTitle',
        'salutation' => 'getSalutation',
        'street' => 'getStreet',
        'house_number' => 'getHouseNumber',
        'city' => 'getCity',
        'email_address' => 'getEmailAddress',
        'phone' => 'getPhone',
        'country' => 'getCountry',
        'vat' => 'getVat'
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

    const SALUTATION_HERR = 'Herr';
    const SALUTATION_FRAU = 'Frau';
    const SALUTATION_MR = 'Mr.';
    const SALUTATION_MS = 'Ms.';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSalutationAllowableValues()
    {
        return [
            self::SALUTATION_HERR,
            self::SALUTATION_FRAU,
            self::SALUTATION_MR,
            self::SALUTATION_MS,
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
        $this->container['identical_to_default_address'] = $data['identical_to_default_address'] ?? null;
        $this->container['first_name'] = $data['first_name'] ?? null;
        $this->container['last_name'] = $data['last_name'] ?? null;
        $this->container['title'] = $data['title'] ?? null;
        $this->container['salutation'] = $data['salutation'] ?? null;
        $this->container['street'] = $data['street'] ?? null;
        $this->container['house_number'] = $data['house_number'] ?? null;
        $this->container['city'] = $data['city'] ?? null;
        $this->container['email_address'] = $data['email_address'] ?? null;
        $this->container['phone'] = $data['phone'] ?? null;
        $this->container['country'] = $data['country'] ?? null;
        $this->container['vat'] = $data['vat'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['first_name']) && (mb_strlen($this->container['first_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'first_name', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['last_name']) && (mb_strlen($this->container['last_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'last_name', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) < 1)) {
            $invalidProperties[] = "invalid value for 'title', the character length must be bigger than or equal to 1.";
        }

        $allowedValues = $this->getSalutationAllowableValues();
        if (!is_null($this->container['salutation']) && !in_array($this->container['salutation'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'salutation', must be one of '%s'",
                $this->container['salutation'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['street']) && (mb_strlen($this->container['street']) < 1)) {
            $invalidProperties[] = "invalid value for 'street', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['house_number']) && (mb_strlen($this->container['house_number']) < 1)) {
            $invalidProperties[] = "invalid value for 'house_number', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['city']) && (mb_strlen($this->container['city']) < 1)) {
            $invalidProperties[] = "invalid value for 'city', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['phone']) && !preg_match("/^\\+([0-9]{2,3}|1)\\-[0-9]{2,5}\\-[0-9]+$/", $this->container['phone'])) {
            $invalidProperties[] = "invalid value for 'phone', must be conform to the pattern /^\\+([0-9]{2,3}|1)\\-[0-9]{2,5}\\-[0-9]+$/.";
        }

        if (!is_null($this->container['country']) && (mb_strlen($this->container['country']) > 2)) {
            $invalidProperties[] = "invalid value for 'country', the character length must be smaller than or equal to 2.";
        }

        if (!is_null($this->container['country']) && (mb_strlen($this->container['country']) < 2)) {
            $invalidProperties[] = "invalid value for 'country', the character length must be bigger than or equal to 2.";
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
     * Gets identical_to_default_address
     *
     * @return bool|null
     */
    public function getIdenticalToDefaultAddress()
    {
        return $this->container['identical_to_default_address'];
    }

    /**
     * Sets identical_to_default_address
     *
     * @param bool|null $identical_to_default_address Wahr, wenn der Ansprechpartner identisch zum Vertragspartner gesetzt ist
     *
     * @return self
     */
    public function setIdenticalToDefaultAddress($identical_to_default_address)
    {
        $this->container['identical_to_default_address'] = $identical_to_default_address;

        return $this;
    }

    /**
     * Gets first_name
     *
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string|null $first_name first_name
     *
     * @return self
     */
    public function setFirstName($first_name)
    {

        if (!is_null($first_name) && (mb_strlen($first_name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $first_name when calling ContactUpdateRequest., must be bigger than or equal to 1.');
        }

        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets last_name
     *
     * @return string|null
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string|null $last_name last_name
     *
     * @return self
     */
    public function setLastName($last_name)
    {

        if (!is_null($last_name) && (mb_strlen($last_name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $last_name when calling ContactUpdateRequest., must be bigger than or equal to 1.');
        }

        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title title
     *
     * @return self
     */
    public function setTitle($title)
    {

        if (!is_null($title) && (mb_strlen($title) < 1)) {
            throw new \InvalidArgumentException('invalid length for $title when calling ContactUpdateRequest., must be bigger than or equal to 1.');
        }

        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets salutation
     *
     * @return string|null
     */
    public function getSalutation()
    {
        return $this->container['salutation'];
    }

    /**
     * Sets salutation
     *
     * @param string|null $salutation salutation
     *
     * @return self
     */
    public function setSalutation($salutation)
    {
        $allowedValues = $this->getSalutationAllowableValues();
        if (!is_null($salutation) && !in_array($salutation, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'salutation', must be one of '%s'",
                    $salutation,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['salutation'] = $salutation;

        return $this;
    }

    /**
     * Gets street
     *
     * @return string|null
     */
    public function getStreet()
    {
        return $this->container['street'];
    }

    /**
     * Sets street
     *
     * @param string|null $street street
     *
     * @return self
     */
    public function setStreet($street)
    {

        if (!is_null($street) && (mb_strlen($street) < 1)) {
            throw new \InvalidArgumentException('invalid length for $street when calling ContactUpdateRequest., must be bigger than or equal to 1.');
        }

        $this->container['street'] = $street;

        return $this;
    }

    /**
     * Gets house_number
     *
     * @return string|null
     */
    public function getHouseNumber()
    {
        return $this->container['house_number'];
    }

    /**
     * Sets house_number
     *
     * @param string|null $house_number house_number
     *
     * @return self
     */
    public function setHouseNumber($house_number)
    {

        if (!is_null($house_number) && (mb_strlen($house_number) < 1)) {
            throw new \InvalidArgumentException('invalid length for $house_number when calling ContactUpdateRequest., must be bigger than or equal to 1.');
        }

        $this->container['house_number'] = $house_number;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string|null
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string|null $city city
     *
     * @return self
     */
    public function setCity($city)
    {

        if (!is_null($city) && (mb_strlen($city) < 1)) {
            throw new \InvalidArgumentException('invalid length for $city when calling ContactUpdateRequest., must be bigger than or equal to 1.');
        }

        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets email_address
     *
     * @return string|null
     */
    public function getEmailAddress()
    {
        return $this->container['email_address'];
    }

    /**
     * Sets email_address
     *
     * @param string|null $email_address email_address
     *
     * @return self
     */
    public function setEmailAddress($email_address)
    {
        $this->container['email_address'] = $email_address;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string|null
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string|null $phone phone
     *
     * @return self
     */
    public function setPhone($phone)
    {

        if (!is_null($phone) && (!preg_match("/^\\+([0-9]{2,3}|1)\\-[0-9]{2,5}\\-[0-9]+$/", $phone))) {
            throw new \InvalidArgumentException("invalid value for $phone when calling ContactUpdateRequest., must conform to the pattern /^\\+([0-9]{2,3}|1)\\-[0-9]{2,5}\\-[0-9]+$/.");
        }

        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string|null
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string|null $country country
     *
     * @return self
     */
    public function setCountry($country)
    {
        if (!is_null($country) && (mb_strlen($country) > 2)) {
            throw new \InvalidArgumentException('invalid length for $country when calling ContactUpdateRequest., must be smaller than or equal to 2.');
        }
        if (!is_null($country) && (mb_strlen($country) < 2)) {
            throw new \InvalidArgumentException('invalid length for $country when calling ContactUpdateRequest., must be bigger than or equal to 2.');
        }

        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets vat
     *
     * @return string|null
     */
    public function getVat()
    {
        return $this->container['vat'];
    }

    /**
     * Sets vat
     *
     * @param string|null $vat vat
     *
     * @return self
     */
    public function setVat($vat)
    {
        $this->container['vat'] = $vat;

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


