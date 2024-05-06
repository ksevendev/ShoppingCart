<?php

namespace ShoppingCart\Facades;

use ShoppingCart\Cart as ShoppingCart;

/**
 * @method static \ShoppingCart\Cart instance($instance = null)
 * @method static \ShoppingCart\Cart currentInstance()
 * @method static \ShoppingCart\Cart add($id, $name = null, $qty = null, $price = null, array $options = [], $taxrate = null)
 * @method static \ShoppingCart\Cart update($rowId, $qty)
 * @method static \ShoppingCart\Cart remove($rowId)
 * @method static \ShoppingCart\Cart get($rowId)
 * @method static \ShoppingCart\Cart destroy()
 * @method static \ShoppingCart\Cart content()
 * @method static \ShoppingCart\Cart count()
 * @method static \ShoppingCart\Cart total($decimals = null, $decimalPoint = null, $thousandSeperator = null)
 * @method static \ShoppingCart\Cart tax($decimals = null, $decimalPoint = null, $thousandSeperator = null)
 * @method static \ShoppingCart\Cart subtotal($decimals = null, $decimalPoint = null, $thousandSeperator = null)
 * @method static \ShoppingCart\Cart search(\Closure $search)
 * @method static \ShoppingCart\Cart associate($rowId, $model)
 * @method static \ShoppingCart\Cart setTax($rowId, $taxRate)
 * @method static \ShoppingCart\Cart store($identifier)
 * @method static \ShoppingCart\Cart restore($identifier)
 * @method static \ShoppingCart\Cart __get($attribute)
 * 
 * @see \ShoppingCart\Cart
 */
class Cart
{
    /**
     * @param $method
     * @param $arguments
     * @return ShoppingCart
     */
    public static function __callStatic($method, $arguments)
    {
        return (new ShoppingCart())->$method(...$arguments);
    }
}