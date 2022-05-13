<?php

namespace JetBrains\PhpUpgradeGuide\Simulator;

class ShoppingCart
{
    private $products;

    /**
     * @param $produc
     */
    public function add($product)
    {
        array_push($this->products, $product);
    }


    public function totalPrice()
    {
        $totalPrice = 0;
        foreach ($this->products as $product) {
            $totalPrice += $product->getPrice();
        }
        return $totalPrice;
    }

    /**
     * @return array
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * @return int
     */
    public function amout()
    {
        return count($this->products);
    }

    public function __construct()
    {
        $this->products = [];
    }
}
