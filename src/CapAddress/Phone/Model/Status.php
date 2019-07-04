<?php
/**
 * Status
 *
 * PHP version 5
 *
 * @category Class
 * @package  CapAddress\Phone
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * CAP PHONE
 *
 * Cap Phone va permettre d’assister l’utilisateur lors de la validation d’un numéro de téléphone et s’assurer de la conformité syntaxique de ce dernier avant de le stocker en base de données. Le but étant de s’assurer que chaque numéro de téléphone entré en base de données est syntaxiquement correct et stocké dans un même format.
 *
 * OpenAPI spec version: 1.0.0
 * Contact: support@capadresse.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace CapAddress\Phone\Model;

use \ArrayAccess;
use \CapAddress\Phone\ObjectSerializer;

/**
 * Status Class Doc Comment
 *
 * @category Class
 * @package  CapAddress\Phone
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Status implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Status';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'i_group_id' => 'int',
        's_group_name' => 'string',
        'id' => 'int',
        's_name' => 'string',
        's_description' => 'string',
        's_action' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'i_group_id' => 'int32',
        's_group_name' => null,
        'id' => 'int32',
        's_name' => null,
        's_description' => null,
        's_action' => null
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
        'i_group_id' => 'iGroupId',
        's_group_name' => 'sGroupName',
        'id' => 'id',
        's_name' => 'sName',
        's_description' => 'sDescription',
        's_action' => 'sAction'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'i_group_id' => 'setIGroupId',
        's_group_name' => 'setSGroupName',
        'id' => 'setId',
        's_name' => 'setSName',
        's_description' => 'setSDescription',
        's_action' => 'setSAction'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'i_group_id' => 'getIGroupId',
        's_group_name' => 'getSGroupName',
        'id' => 'getId',
        's_name' => 'getSName',
        's_description' => 'getSDescription',
        's_action' => 'getSAction'
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
        $this->container['i_group_id'] = isset($data['i_group_id']) ? $data['i_group_id'] : null;
        $this->container['s_group_name'] = isset($data['s_group_name']) ? $data['s_group_name'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['s_name'] = isset($data['s_name']) ? $data['s_name'] : null;
        $this->container['s_description'] = isset($data['s_description']) ? $data['s_description'] : null;
        $this->container['s_action'] = isset($data['s_action']) ? $data['s_action'] : null;
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
     * Gets i_group_id
     *
     * @return int
     */
    public function getIGroupId()
    {
        return $this->container['i_group_id'];
    }

    /**
     * Sets i_group_id
     *
     * @param int $i_group_id Identifiant du groupe du statut.
     *
     * @return $this
     */
    public function setIGroupId($i_group_id)
    {
        $this->container['i_group_id'] = $i_group_id;

        return $this;
    }

    /**
     * Gets s_group_name
     *
     * @return string
     */
    public function getSGroupName()
    {
        return $this->container['s_group_name'];
    }

    /**
     * Sets s_group_name
     *
     * @param string $s_group_name Nom du groupe du statut.
     *
     * @return $this
     */
    public function setSGroupName($s_group_name)
    {
        $this->container['s_group_name'] = $s_group_name;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id Identifiant du statut.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets s_name
     *
     * @return string
     */
    public function getSName()
    {
        return $this->container['s_name'];
    }

    /**
     * Sets s_name
     *
     * @param string $s_name Nom du statut.
     *
     * @return $this
     */
    public function setSName($s_name)
    {
        $this->container['s_name'] = $s_name;

        return $this;
    }

    /**
     * Gets s_description
     *
     * @return string
     */
    public function getSDescription()
    {
        return $this->container['s_description'];
    }

    /**
     * Sets s_description
     *
     * @param string $s_description Description du statut.
     *
     * @return $this
     */
    public function setSDescription($s_description)
    {
        $this->container['s_description'] = $s_description;

        return $this;
    }

    /**
     * Gets s_action
     *
     * @return string
     */
    public function getSAction()
    {
        return $this->container['s_action'];
    }

    /**
     * Sets s_action
     *
     * @param string $s_action Action à réaliser pour éviter l’erreur.
     *
     * @return $this
     */
    public function setSAction($s_action)
    {
        $this->container['s_action'] = $s_action;

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


