<?php
/**
 * OrdersDataEntityItems
 *
 * PHP version 5
 *
 * @category Class
 * @package  DCG\Cinema
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Cinema API
 *
 * Dining club API for Cinema platform
 *
 * OpenAPI spec version: 0.1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace DCG\Cinema\Model;

use \ArrayAccess;

/**
 * OrdersDataEntityItems Class Doc Comment
 *
 * @category    Class
 * @package     DCG\Cinema
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class OrdersDataEntityItems implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ordersDataEntity_items';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'ticket_type_id' => 'string',
        'quantity' => 'float',
        'price' => 'float',
        'booking_fee' => 'float',
        'redemption_codes' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'ticket_type_id' => null,
        'quantity' => 'int32',
        'price' => 'float',
        'booking_fee' => 'float',
        'redemption_codes' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'ticket_type_id' => 'ticket_type_id',
        'quantity' => 'quantity',
        'price' => 'price',
        'booking_fee' => 'booking_fee',
        'redemption_codes' => 'redemption_codes'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'ticket_type_id' => 'setTicketTypeId',
        'quantity' => 'setQuantity',
        'price' => 'setPrice',
        'booking_fee' => 'setBookingFee',
        'redemption_codes' => 'setRedemptionCodes'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'ticket_type_id' => 'getTicketTypeId',
        'quantity' => 'getQuantity',
        'price' => 'getPrice',
        'booking_fee' => 'getBookingFee',
        'redemption_codes' => 'getRedemptionCodes'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['ticket_type_id'] = isset($data['ticket_type_id']) ? $data['ticket_type_id'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['booking_fee'] = isset($data['booking_fee']) ? $data['booking_fee'] : null;
        $this->container['redemption_codes'] = isset($data['redemption_codes']) ? $data['redemption_codes'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param string $id The ID of the order item
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets ticket_type_id
     * @return string
     */
    public function getTicketTypeId()
    {
        return $this->container['ticket_type_id'];
    }

    /**
     * Sets ticket_type_id
     * @param string $ticket_type_id The ID of the ticket type purchased
     * @return $this
     */
    public function setTicketTypeId($ticket_type_id)
    {
        $this->container['ticket_type_id'] = $ticket_type_id;

        return $this;
    }

    /**
     * Gets quantity
     * @return float
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     * @param float $quantity The amount of this ticket type in the order
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets price
     * @return float
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     * @param float $price The price paid for each ticket in the item
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets booking_fee
     * @return float
     */
    public function getBookingFee()
    {
        return $this->container['booking_fee'];
    }

    /**
     * Sets booking_fee
     * @param float $booking_fee The booking fee paid for each ticket in the item
     * @return $this
     */
    public function setBookingFee($booking_fee)
    {
        $this->container['booking_fee'] = $booking_fee;

        return $this;
    }

    /**
     * Gets redemption_codes
     * @return string[]
     */
    public function getRedemptionCodes()
    {
        return $this->container['redemption_codes'];
    }

    /**
     * Sets redemption_codes
     * @param string[] $redemption_codes Codes that the user can redeem for cinema tickets
     * @return $this
     */
    public function setRedemptionCodes($redemption_codes)
    {
        $this->container['redemption_codes'] = $redemption_codes;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\DCG\Cinema\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\DCG\Cinema\ObjectSerializer::sanitizeForSerialization($this));
    }
}


