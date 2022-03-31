<?php
/**
 * OrderDetails
 *
 * @category Class
 * @package  Teambank\RatenkaufByEasyCreditApiV3
 *
 * Transaction-V3 API Definition
 * @author   NETZKOLLEKTIV GmbH
 * @link     https://netzkollektiv.com
 * generated by OpenAPI Generator v6.0.0-SNAPSHOT, OpenAPI document vV3.90.1

 */

namespace Teambank\RatenkaufByEasyCreditApiV3\Model;

use \ArrayAccess;
use \Teambank\RatenkaufByEasyCreditApiV3\ObjectSerializer;

/**
 * OrderDetails Class Doc Comment
 *
 * @category Class
 * @package  Teambank\RatenkaufByEasyCreditApiV3
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class OrderDetails implements ModelInterface, ArrayAccess, \JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OrderDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'orderValue' => 'float',
        'orderId' => 'string',
        'numberOfProductsInShoppingCart' => 'int',
        'invoiceAddress' => '\Teambank\RatenkaufByEasyCreditApiV3\Model\InvoiceAddress',
        'shippingAddress' => '\Teambank\RatenkaufByEasyCreditApiV3\Model\ShippingAddress',
        'shoppingCartInformation' => '\Teambank\RatenkaufByEasyCreditApiV3\Model\ShoppingCartInformationItem[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'orderValue' => null,
        'orderId' => null,
        'numberOfProductsInShoppingCart' => null,
        'invoiceAddress' => null,
        'shippingAddress' => null,
        'shoppingCartInformation' => null
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
        'orderValue' => 'orderValue',
        'orderId' => 'orderId',
        'numberOfProductsInShoppingCart' => 'numberOfProductsInShoppingCart',
        'invoiceAddress' => 'invoiceAddress',
        'shippingAddress' => 'shippingAddress',
        'shoppingCartInformation' => 'shoppingCartInformation'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'orderValue' => 'setOrderValue',
        'orderId' => 'setOrderId',
        'numberOfProductsInShoppingCart' => 'setNumberOfProductsInShoppingCart',
        'invoiceAddress' => 'setInvoiceAddress',
        'shippingAddress' => 'setShippingAddress',
        'shoppingCartInformation' => 'setShoppingCartInformation'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'orderValue' => 'getOrderValue',
        'orderId' => 'getOrderId',
        'numberOfProductsInShoppingCart' => 'getNumberOfProductsInShoppingCart',
        'invoiceAddress' => 'getInvoiceAddress',
        'shippingAddress' => 'getShippingAddress',
        'shoppingCartInformation' => 'getShoppingCartInformation'
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
        $this->container['orderValue'] = $data['orderValue'] ?? null;
        $this->container['orderId'] = $data['orderId'] ?? null;
        $this->container['numberOfProductsInShoppingCart'] = $data['numberOfProductsInShoppingCart'] ?? null;
        $this->container['invoiceAddress'] = $data['invoiceAddress'] ?? null;
        $this->container['shippingAddress'] = $data['shippingAddress'] ?? null;
        $this->container['shoppingCartInformation'] = $data['shoppingCartInformation'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['orderValue'] === null) {
            $invalidProperties[] = "'orderValue' can't be null";
        }
        if (!is_null($this->container['orderId']) && (mb_strlen($this->container['orderId']) > 50)) {
            $invalidProperties[] = "invalid value for 'orderId', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['orderId']) && !preg_match("/[a-zA-Z0-9\\.:\\-_\/]*/", $this->container['orderId'])) {
            $invalidProperties[] = "invalid value for 'orderId', must be conform to the pattern /[a-zA-Z0-9\\.:\\-_\/]*/.";
        }

        if (!is_null($this->container['numberOfProductsInShoppingCart']) && ($this->container['numberOfProductsInShoppingCart'] > 10)) {
            $invalidProperties[] = "invalid value for 'numberOfProductsInShoppingCart', must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['numberOfProductsInShoppingCart']) && ($this->container['numberOfProductsInShoppingCart'] < 1)) {
            $invalidProperties[] = "invalid value for 'numberOfProductsInShoppingCart', must be bigger than or equal to 1.";
        }

        if ($this->container['invoiceAddress'] === null) {
            $invalidProperties[] = "'invoiceAddress' can't be null";
        }
        if ($this->container['shippingAddress'] === null) {
            $invalidProperties[] = "'shippingAddress' can't be null";
        }
        if (!is_null($this->container['shoppingCartInformation']) && (count($this->container['shoppingCartInformation']) < 1)) {
            $invalidProperties[] = "invalid value for 'shoppingCartInformation', number of items must be greater than or equal to 1.";
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
     * Gets orderValue
     *
     * @return float
     */
    public function getOrderValue()
    {
        return $this->container['orderValue'];
    }

    /**
     * Sets orderValue
     *
     * @param float $orderValue Amount in €
     *
     * @return self
     */
    public function setOrderValue($orderValue)
    {
        $this->container['orderValue'] = $orderValue;

        return $this;
    }

    /**
     * Gets orderId
     *
     * @return string|null
     */
    public function getOrderId()
    {
        return $this->container['orderId'];
    }

    /**
     * Sets orderId
     *
     * @param string|null $orderId Shop transaction identifier (allows the shop to store its own reference for the transaction)
     *
     * @return self
     */
    public function setOrderId($orderId)
    {
        if (!is_null($orderId) && (mb_strlen($orderId) > 50)) {
            throw new \InvalidArgumentException('invalid length for $orderId when calling OrderDetails., must be smaller than or equal to 50.');
        }
        if (!is_null($orderId) && (!preg_match("/[a-zA-Z0-9\\.:\\-_\/]*/", $orderId))) {
            throw new \InvalidArgumentException("invalid value for $orderId when calling OrderDetails., must conform to the pattern /[a-zA-Z0-9\\.:\\-_\/]*/.");
        }

        $this->container['orderId'] = $orderId;

        return $this;
    }

    /**
     * Gets numberOfProductsInShoppingCart
     *
     * @return int|null
     */
    public function getNumberOfProductsInShoppingCart()
    {
        return $this->container['numberOfProductsInShoppingCart'];
    }

    /**
     * Sets numberOfProductsInShoppingCart
     *
     * @param int|null $numberOfProductsInShoppingCart anzahlProdukteImWarenkorb
     *
     * @return self
     */
    public function setNumberOfProductsInShoppingCart($numberOfProductsInShoppingCart)
    {

        if (!is_null($numberOfProductsInShoppingCart) && ($numberOfProductsInShoppingCart > 10)) {
            throw new \InvalidArgumentException('invalid value for $numberOfProductsInShoppingCart when calling OrderDetails., must be smaller than or equal to 10.');
        }
        if (!is_null($numberOfProductsInShoppingCart) && ($numberOfProductsInShoppingCart < 1)) {
            throw new \InvalidArgumentException('invalid value for $numberOfProductsInShoppingCart when calling OrderDetails., must be bigger than or equal to 1.');
        }

        $this->container['numberOfProductsInShoppingCart'] = $numberOfProductsInShoppingCart;

        return $this;
    }

    /**
     * Gets invoiceAddress
     *
     * @return \Teambank\RatenkaufByEasyCreditApiV3\Model\InvoiceAddress
     */
    public function getInvoiceAddress()
    {
        return $this->container['invoiceAddress'];
    }

    /**
     * Sets invoiceAddress
     *
     * @param \Teambank\RatenkaufByEasyCreditApiV3\Model\InvoiceAddress $invoiceAddress invoiceAddress
     *
     * @return self
     */
    public function setInvoiceAddress($invoiceAddress)
    {
        $this->container['invoiceAddress'] = $invoiceAddress;

        return $this;
    }

    /**
     * Gets shippingAddress
     *
     * @return \Teambank\RatenkaufByEasyCreditApiV3\Model\ShippingAddress
     */
    public function getShippingAddress()
    {
        return $this->container['shippingAddress'];
    }

    /**
     * Sets shippingAddress
     *
     * @param \Teambank\RatenkaufByEasyCreditApiV3\Model\ShippingAddress $shippingAddress shippingAddress
     *
     * @return self
     */
    public function setShippingAddress($shippingAddress)
    {
        $this->container['shippingAddress'] = $shippingAddress;

        return $this;
    }

    /**
     * Gets shoppingCartInformation
     *
     * @return \Teambank\RatenkaufByEasyCreditApiV3\Model\ShoppingCartInformationItem[]|null
     */
    public function getShoppingCartInformation()
    {
        return $this->container['shoppingCartInformation'];
    }

    /**
     * Sets shoppingCartInformation
     *
     * @param \Teambank\RatenkaufByEasyCreditApiV3\Model\ShoppingCartInformationItem[]|null $shoppingCartInformation shoppingCartInformation
     *
     * @return self
     */
    public function setShoppingCartInformation($shoppingCartInformation)
    {


        if (!is_null($shoppingCartInformation) && (count($shoppingCartInformation) < 1)) {
            throw new \InvalidArgumentException('invalid length for $shoppingCartInformation when calling OrderDetails., number of items must be greater than or equal to 1.');
        }
        $this->container['shoppingCartInformation'] = $shoppingCartInformation;

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

