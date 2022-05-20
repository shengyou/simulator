<?php

namespace JetBrains\PhpUpgradeGuide\Simulator\Services;

use JetBrains\PhpUpgradeGuide\Simulator\Contracts\Product;

class ShoppingCart
{
    private array $products;

    public function __construct()
    {
        $this->products = [];
    }

    public function add($product): void
    {
        $this->products[] = $product;
    }

    public function totalPrice(): int
    {
        $totalPrice = 0;
        foreach ($this->products as $product) {
            /**
             * @var Product $product
             */
            $totalPrice += $product->price;
        }
        return $totalPrice;
    }

    public function getProducts(): array
    {
        return $this->products;
    }

    public function amount(): int
    {
        return count($this->products);
    }
}
