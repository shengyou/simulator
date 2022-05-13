<?php

namespace JetBrains\PhpUpgradeGuide\Simulator\Tests;

use JetBrains\PhpUpgradeGuide\Simulator\Apple;
use JetBrains\PhpUpgradeGuide\Simulator\Banana;
use JetBrains\PhpUpgradeGuide\Simulator\ShoppingCart;
use PHPUnit\Framework\TestCase;

class ShoppingCartTest extends TestCase
{
    /**
     * @return void
     */
    public function testAddTwoProductsInCartWillGetAmountOfTwo()
    {
        // Arrange
        $cart = new ShoppingCart();
        $apple = new Apple(1, "Apple", 100.0);
        $banana = new Banana(2, "Banana", 50.0);

        // Act
        $cart->add($apple);
        $cart->add($banana);

        // Assert
        $this->assertEquals(2, $cart->amout());
    }

    /**
     * @return void
     */
    public function testAddPrice100ProductAndPrice50ProductWillReturn150ForTotalPrice()
    {
        // Arrange
        $cart = new ShoppingCart();
        $apple = new Apple(1, "Apple", 100.0);
        $banana = new Banana(2, "Banana", 50.0);

        // Act
        $cart->add($apple);
        $cart->add($banana);

        // Assert
        $this->assertEquals(150.0, $cart->totalPrice());
    }

    /**
     * @return void
     */
    public function testGetProductListFromCart()
    {
        // Arrange
        $cart = new ShoppingCart();
        $apple = new Apple(1, "Apple", 100.0);
        $banana = new Banana(2, "Banana", 50.0);

        // Act
        $cart->add($apple);
        $cart->add($banana);

        // Assert
        $this->assertInternalType('array', $cart->getProducts());
        $this->assertEquals(2, count($cart->getProducts()));
    }
}
