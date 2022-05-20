<?php

namespace JetBrains\PhpUpgradeGuide\Simulator\Tests;

use JetBrains\PhpUpgradeGuide\Simulator\Models\Apple;
use JetBrains\PhpUpgradeGuide\Simulator\Models\Banana;
use JetBrains\PhpUpgradeGuide\Simulator\Services\ShoppingCart;
use PHPUnit\Framework\TestCase;

class ShoppingCartTest extends TestCase
{
    /**
     * @return void
     */
    public function testAddTwoProductsInCartWillGetAmountOfTwo(): void
    {
        // Arrange
        $cart = new ShoppingCart();
        $apple = new Apple(1, "Apple", 100.0);
        $banana = new Banana(2, "Banana", 50.0);

        // Act
        $cart->add($apple);
        $cart->add($banana);

        // Assert
        self::assertEquals(2, $cart->amount());
    }

    /**
     * @return void
     */
    public function testAddPrice100ProductAndPrice50ProductWillReturn150ForTotalPrice(): void
    {
        // Arrange
        $cart = new ShoppingCart();
        $apple = new Apple(1, "Apple", 100.0);
        $banana = new Banana(2, "Banana", 50.0);

        // Act
        $cart->add($apple);
        $cart->add($banana);

        // Assert
        self::assertEquals(150.0, $cart->totalPrice());
    }

    /**
     * @return void
     */
    public function testGetProductListFromCart(): void
    {
        // Arrange
        $cart = new ShoppingCart();
        $apple = new Apple(1, "Apple", 100.0);
        $banana = new Banana(2, "Banana", 50.0);

        // Act
        $cart->add($apple);
        $cart->add($banana);

        // Assert
        self::assertIsArray($cart->getProducts());
        self::assertCount(2, $cart->getProducts());
    }
}
