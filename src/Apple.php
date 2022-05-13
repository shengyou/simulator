<?php

namespace JetBrains\PhpUpgradeGuide\Simulator;

class Apple
{
    private $price;

    /**
     * @return int
     */
    public function getId()
    {
return $this->id;
    }

    private $id;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return float
     */
    public
    function getPrice(


    ){
             return $this->price;
}

    /**
     * @var string
     */
    private $name;

    /**
     * @param $id
     * @param $price
     */
    public function __construct($id,
                           $name,$price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }
}
