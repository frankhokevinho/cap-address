<?php
/**
 * InfoMob
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
 * InfoMob Class Doc Comment
 *
 * @category Class
 * @package  CapAddress\Phone
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InfoMob implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'infoMob';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        's_numero' => 'string',
        's_country_code_mcc' => 'string',
        's_net_work_code_mnc' => 'string',
        's_imsi' => 'string',
        's_serving_msc' => 'string',
        'original_network' => '\CapAddress\Phone\Model\Network[]',
        'is_ported' => 'int',
        'ported_network' => '\CapAddress\Phone\Model\Network[]',
        'is_roaming' => 'int',
        'roaming_network' => '\CapAddress\Phone\Model\Network[]',
        'status' => '\CapAddress\Phone\Model\Status[]',
        'error' => '\CapAddress\Phone\Model\Error[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        's_numero' => null,
        's_country_code_mcc' => null,
        's_net_work_code_mnc' => null,
        's_imsi' => null,
        's_serving_msc' => null,
        'original_network' => null,
        'is_ported' => 'int32',
        'ported_network' => null,
        'is_roaming' => 'int32',
        'roaming_network' => null,
        'status' => null,
        'error' => null
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
        's_numero' => 'sNumero',
        's_country_code_mcc' => 'sCountryCodeMCC',
        's_net_work_code_mnc' => 'sNetWorkCodeMNC',
        's_imsi' => 'sIMSI',
        's_serving_msc' => 'sServingMSC',
        'original_network' => 'originalNetwork',
        'is_ported' => 'isPorted',
        'ported_network' => 'portedNetwork',
        'is_roaming' => 'isRoaming',
        'roaming_network' => 'roamingNetwork',
        'status' => 'status',
        'error' => 'error'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        's_numero' => 'setSNumero',
        's_country_code_mcc' => 'setSCountryCodeMcc',
        's_net_work_code_mnc' => 'setSNetWorkCodeMnc',
        's_imsi' => 'setSImsi',
        's_serving_msc' => 'setSServingMsc',
        'original_network' => 'setOriginalNetwork',
        'is_ported' => 'setIsPorted',
        'ported_network' => 'setPortedNetwork',
        'is_roaming' => 'setIsRoaming',
        'roaming_network' => 'setRoamingNetwork',
        'status' => 'setStatus',
        'error' => 'setError'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        's_numero' => 'getSNumero',
        's_country_code_mcc' => 'getSCountryCodeMcc',
        's_net_work_code_mnc' => 'getSNetWorkCodeMnc',
        's_imsi' => 'getSImsi',
        's_serving_msc' => 'getSServingMsc',
        'original_network' => 'getOriginalNetwork',
        'is_ported' => 'getIsPorted',
        'ported_network' => 'getPortedNetwork',
        'is_roaming' => 'getIsRoaming',
        'roaming_network' => 'getRoamingNetwork',
        'status' => 'getStatus',
        'error' => 'getError'
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
        $this->container['s_numero'] = isset($data['s_numero']) ? $data['s_numero'] : null;
        $this->container['s_country_code_mcc'] = isset($data['s_country_code_mcc']) ? $data['s_country_code_mcc'] : null;
        $this->container['s_net_work_code_mnc'] = isset($data['s_net_work_code_mnc']) ? $data['s_net_work_code_mnc'] : null;
        $this->container['s_imsi'] = isset($data['s_imsi']) ? $data['s_imsi'] : null;
        $this->container['s_serving_msc'] = isset($data['s_serving_msc']) ? $data['s_serving_msc'] : null;
        $this->container['original_network'] = isset($data['original_network']) ? $data['original_network'] : null;
        $this->container['is_ported'] = isset($data['is_ported']) ? $data['is_ported'] : null;
        $this->container['ported_network'] = isset($data['ported_network']) ? $data['ported_network'] : null;
        $this->container['is_roaming'] = isset($data['is_roaming']) ? $data['is_roaming'] : null;
        $this->container['roaming_network'] = isset($data['roaming_network']) ? $data['roaming_network'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['error'] = isset($data['error']) ? $data['error'] : null;
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
     * Gets s_numero
     *
     * @return string
     */
    public function getSNumero()
    {
        return $this->container['s_numero'];
    }

    /**
     * Sets s_numero
     *
     * @param string $s_numero Le numéro du mobile testé.
     *
     * @return $this
     */
    public function setSNumero($s_numero)
    {
        $this->container['s_numero'] = $s_numero;

        return $this;
    }

    /**
     * Gets s_country_code_mcc
     *
     * @return string
     */
    public function getSCountryCodeMcc()
    {
        return $this->container['s_country_code_mcc'];
    }

    /**
     * Sets s_country_code_mcc
     *
     * @param string $s_country_code_mcc Code du pays du réseau courant.
     *
     * @return $this
     */
    public function setSCountryCodeMcc($s_country_code_mcc)
    {
        $this->container['s_country_code_mcc'] = $s_country_code_mcc;

        return $this;
    }

    /**
     * Gets s_net_work_code_mnc
     *
     * @return string
     */
    public function getSNetWorkCodeMnc()
    {
        return $this->container['s_net_work_code_mnc'];
    }

    /**
     * Sets s_net_work_code_mnc
     *
     * @param string $s_net_work_code_mnc Code du réseau.
     *
     * @return $this
     */
    public function setSNetWorkCodeMnc($s_net_work_code_mnc)
    {
        $this->container['s_net_work_code_mnc'] = $s_net_work_code_mnc;

        return $this;
    }

    /**
     * Gets s_imsi
     *
     * @return string
     */
    public function getSImsi()
    {
        return $this->container['s_imsi'];
    }

    /**
     * Sets s_imsi
     *
     * @param string $s_imsi International Mobile Subscriber Identity, utilisé pour identifier de façon unique l’utilisateur d’un réseau mobile.
     *
     * @return $this
     */
    public function setSImsi($s_imsi)
    {
        $this->container['s_imsi'] = $s_imsi;

        return $this;
    }

    /**
     * Gets s_serving_msc
     *
     * @return string
     */
    public function getSServingMsc()
    {
        return $this->container['s_serving_msc'];
    }

    /**
     * Sets s_serving_msc
     *
     * @param string $s_serving_msc Serving mobile switching center.
     *
     * @return $this
     */
    public function setSServingMsc($s_serving_msc)
    {
        $this->container['s_serving_msc'] = $s_serving_msc;

        return $this;
    }

    /**
     * Gets original_network
     *
     * @return \CapAddress\Phone\Model\Network[]
     */
    public function getOriginalNetwork()
    {
        return $this->container['original_network'];
    }

    /**
     * Sets original_network
     *
     * @param \CapAddress\Phone\Model\Network[] $original_network Informations sur l’opérateur d’origine du mobile.
     *
     * @return $this
     */
    public function setOriginalNetwork($original_network)
    {
        $this->container['original_network'] = $original_network;

        return $this;
    }

    /**
     * Gets is_ported
     *
     * @return int
     */
    public function getIsPorted()
    {
        return $this->container['is_ported'];
    }

    /**
     * Sets is_ported
     *
     * @param int $is_ported Changement d’opérateur. 1 : Oui, 0 : Non.
     *
     * @return $this
     */
    public function setIsPorted($is_ported)
    {
        $this->container['is_ported'] = $is_ported;

        return $this;
    }

    /**
     * Gets ported_network
     *
     * @return \CapAddress\Phone\Model\Network[]
     */
    public function getPortedNetwork()
    {
        return $this->container['ported_network'];
    }

    /**
     * Sets ported_network
     *
     * @param \CapAddress\Phone\Model\Network[] $ported_network Informations sur le nouvel opérateur.
     *
     * @return $this
     */
    public function setPortedNetwork($ported_network)
    {
        $this->container['ported_network'] = $ported_network;

        return $this;
    }

    /**
     * Gets is_roaming
     *
     * @return int
     */
    public function getIsRoaming()
    {
        return $this->container['is_roaming'];
    }

    /**
     * Sets is_roaming
     *
     * @param int $is_roaming En déplacement à l’étranger. 1 : Oui, 0 : Non.
     *
     * @return $this
     */
    public function setIsRoaming($is_roaming)
    {
        $this->container['is_roaming'] = $is_roaming;

        return $this;
    }

    /**
     * Gets roaming_network
     *
     * @return \CapAddress\Phone\Model\Network[]
     */
    public function getRoamingNetwork()
    {
        return $this->container['roaming_network'];
    }

    /**
     * Sets roaming_network
     *
     * @param \CapAddress\Phone\Model\Network[] $roaming_network Réseau utilisé à l’étranger.
     *
     * @return $this
     */
    public function setRoamingNetwork($roaming_network)
    {
        $this->container['roaming_network'] = $roaming_network;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \CapAddress\Phone\Model\Status[]
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \CapAddress\Phone\Model\Status[] $status Informations sur l’état de la requête.
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets error
     *
     * @return \CapAddress\Phone\Model\Error[]
     */
    public function getError()
    {
        return $this->container['error'];
    }

    /**
     * Sets error
     *
     * @param \CapAddress\Phone\Model\Error[] $error Informations sur l’état de la requête.
     *
     * @return $this
     */
    public function setError($error)
    {
        $this->container['error'] = $error;

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


