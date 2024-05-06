<?php

namespace Tests;

use ShoppingCart\Cart;
use PHPUnit\Framework\Assert;

trait CartAssertions
{
    /**
     * Assert that cart containts the given number of items.
     * 
     * @param int|float $items
     * @param \ShoppingCart\Cart $cart
     */
    public function assertItemsInCart($items, Cart $cart)
    {
        $actual = $cart->count();

        Assert::assertEquals($items, $cart->count(), "Expected the cart to contain {$items} items, but got {$actual}.");
    }

    /**
     * Assert that the cart contains the given number of rows.
     *
     * @param int $rows
     * @param \ShoppingCart\Cart $cart
     */
    public function assertRowsInCart($rows, Cart $cart)
    {
        $actual = $cart->content()->count();

        Assert::assertCount($rows, $cart->content(), "Expected the cart to contain {$rows} rows, but got {$actual}.");
    }
}